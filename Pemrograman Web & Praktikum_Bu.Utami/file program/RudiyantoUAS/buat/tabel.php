<!DOCTYPE html>
<html>
<head>
    <title>Tabel Surat Mahasiswa Aktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 20px;
        }
        
        h2 {
            color: #1a75ff;
            text-align: center;
            font-size: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1a75ff;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons {
            display: flex;
            justify-content: space-between;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 4px 8px;
            color: #fff;
            border-radius: 4px;
        }

        .edit {
            background-color: #4CAF50;
        }

        .delete {
            background-color: #f44336;
        }

        .print {
            background-color: #005f61;
			color: #ffffff;
        }

        .add {
            background-color: #1a75ff;
        }
    </style>
</head>
<body>
    <h2>Tabel Surat Mahasiswa Aktif</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Fakultas</th>
            <th>Program Studi</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        <!-- Isi tabel akan di-generate oleh kode PHP -->
        <?php
        // Kode PHP untuk mengambil data dari database dan memasukkan ke dalam tabel
        // Ganti bagian ini dengan kode PHP sesuai dengan konfigurasi dan struktur tabel database Anda
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mahasiswa";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT nim, nama, ttl, alamat, fakultas, prodi, semester FROM surat_mahasiswa_aktif";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["nim"] . "</td>";
                echo "<td>" . $row["nama"] . "</td>";
                echo "<td>" . $row["ttl"] . "</td>";
                echo "<td>" . $row["alamat"] . "</td>";
                echo "<td>" . $row["fakultas"] . "</td>";
                echo "<td>" . $row["prodi"] . "</td>";
                echo "<td>" . $row["semester"] . "</td>";
                echo "<td class='action-buttons'>";
                echo "<a href='#' class='edit'>Edit</a>";
                echo "<a href='#' class='delete'>Hapus</a>";
                echo "<a href='#' class='print'>Print</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data surat mahasiswa aktif.</td></tr>";
        }

        $conn->close();
        ?>
        <!-- Baris untuk tombol tambah -->
        <tr>
            <td colspan="7"></td>
            <td class="action-buttons">
                <a href="#" class="add">Tambah</a>
            </td>
        </tr>
    </table>

    <script>
        var addButton = document.getElementsByClassName("add")[0];
		addButton.addEventListener("click", function() {
		// Aksi yang ingin dilakukan saat tombol tambah di klik
		// Mengarahkan ke halaman input.php
		window.location.href = "input.php";
		});


        // Event listener untuk tombol edit
var editButtons = document.getElementsByClassName("edit");
for (var i = 0; i < editButtons.length; i++) {
    editButtons[i].addEventListener("click", function() {
        // Ambil data yang perlu diedit
        var rowData = this.parentNode.parentNode; // Menggunakan parent untuk mendapatkan baris tabel
        var nim = rowData.cells[0].innerText;

        // Arahkan pengguna ke halaman "edit.php" dengan mengirimkan data melalui parameter URL
        window.location.href = "edit.php?nim=" + encodeURIComponent(nim);
    });
}

// Event listener untuk tombol hapus
var deleteButtons = document.getElementsByClassName("delete");
for (var i = 0; i < deleteButtons.length; i++) {
    deleteButtons[i].addEventListener("click", function() {
        // Ambil data yang perlu dihapus
        var rowData = this.parentNode.parentNode; // Menggunakan parent untuk mendapatkan baris tabel
        var nim = rowData.cells[0].innerText;

        // Tampilkan konfirmasi hapus data
        if (confirm("Apakah Anda yakin ingin menghapus data dengan NIM " + nim + "?")) {
            // Arahkan pengguna ke halaman "hapus.php" dengan mengirimkan data melalui parameter URL
            window.location.href = "hapus.php?nim=" + encodeURIComponent(nim);
        }
    });
}

// Event listener untuk tombol print
var printButtons = document.getElementsByClassName("print");
for (var i = 0; i < printButtons.length; i++) {
    printButtons[i].addEventListener("click", function() {
        // Mengarahkan pengguna ke halaman print.php
        window.location.href = 'print.php?id=' + this.getAttribute("data-nim");
    });
}


    </script>
</body>
</html>
