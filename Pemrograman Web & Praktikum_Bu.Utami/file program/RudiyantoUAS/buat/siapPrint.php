<?php
include('koneksi.php');

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    // Query untuk mendapatkan data berdasarkan nim
    $query = "SELECT * FROM surat_mahasiswa_aktif WHERE nim = '$nim'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // Mengambil data dari database
        $nama = $data['nama'];
        $ttl = $data['ttl'];
        $alamat = $data['alamat'];
        $fakultas = $data['fakultas'];
        $prodi = $data['prodi'];
        $semester = $data['semester'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Surat Mahasiswa Aktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Surat Mahasiswa Aktif</h2>

        <p>NIM: <?php echo $nim; ?></p>
        <p>Nama: <?php echo $nama; ?></p>
        <p>Tempat Tanggal Lahir: <?php echo $ttl; ?></p>
        <p>Alamat: <?php echo $alamat; ?></p>
        <p>Fakultas: <?php echo $fakultas; ?></p>
        <p>Program Studi: <?php echo $prodi; ?></p>
        <p>Semester: <?php echo $semester; ?></p>
    </div>
</body>
</html>

<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "NIM tidak ditemukan.";
}
?>
