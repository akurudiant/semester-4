<!DOCTYPE html>
<html>
<head>
    <title>Form Surat Mahasiswa Aktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a6a39a;
            margin: 0;
            padding: 0;
        }
        
        h2 {
            color: #1a75ff;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #1a75ff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }
		input[type="button"] {
            background-color: #ffd500;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
		}
    </style>
</head>
<body>
    <form method="POST" action="tambah.php">
        <h2>Form Surat Mahasiswa Aktif</h2>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="ttl">Tempat Tanggal Lahir:</label>
        <input type="text" id="ttl" name="ttl" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="fakultas">Fakultas:</label>
                        <input type="radio" id="fakultas" name="fakultas" value="Fakultas Teknologi dan Sains" required> Fakultas Teknologi dan Sains<br>
	    				<input type="radio" id="fakultas" name="fakultas" value="Fakultas Pedagodi dan Psikologi"> Fakultas Pedagodi dan Psikologi<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->

        <br><br>
        <label label="prodi">Program Studi</label>
					    <input type="radio" id="prodi" name="prodi" value="Pend. Bahasa dan Sastra Indonesia" required> Pend. Bahasa dan Sastra Indonesia<br>
	    				<input type="radio" id="prodi" name="prodi" value="Pend. Bahasa Inggris"> Pend. Bahasa Inggris<br>
				    	<input type="radio" id="prodi" name="prodi" value="Pend. Matematika"> Pend. Matematika<br>
						<input type="radio" id="prodi" name="prodi" value="Pend. Ekonomi"> Pend. Ekonomi<br>
						<input type="radio" id="prodi" name="prodi" value="Pend. Pancasila dan Kewarganegaraan"> Pend. Pancasila dan Kewarganegaraan<br>
						<input type="radio" id="prodi" name="prodi" value="Ilmu Komputer"> Ilmu Komputer<br>
						<input type="radio" id="prodi" name="prodi" value="Teknik Industri"> Teknik Industri<br>
						<input type="radio" id="prodi" name="prodi" value="Teknologi Pangan"> Teknologi Pangan<br>
						<!-- Tambahkan opsi lainnya sesuai kebutuhan -->

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" required>

        <input type="submit" name="submit" value="Simpan">
        <input type="button" onclick="window.location.href='tabel.php'" value="Batal">
    </form>
    <?php
    include('koneksi.php');
    // Melakukan pengecekan jika button submit diklik
    if (isset($_POST['submit'])) {
        // Mengambil data dari inputan
        $nim = $_POST["nim"];
        $nama = $_POST["nama"];
        $ttl = $_POST["ttl"];
        $alamat = $_POST["alamat"];
        $fakultas = $_POST["fakultas"];
        $prodi = $_POST["prodi"];
        $semester = $_POST["semester"];
        
        // Query untuk menyimpan data ke database, sesuaikan dengan struktur tabel Anda
        $query = "INSERT INTO surat_mahasiswa_aktif (nim, nama, ttl, alamat, fakultas, prodi, semester) VALUES ('$nim', '$nama', '$ttl', '$alamat', '$fakultas', '$prodi', $semester)";
        
        // Eksekusi query
        $result = mysqli_query($koneksi, $query);
        
        if ($result) {
            echo "<script>alert('Data berhasil disimpan.'); window.location.href = 'tabel.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat menyimpan data.');</script>";
        }
    }
    ?>
</body>
</html>
