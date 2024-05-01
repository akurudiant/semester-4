<!DOCTYPE html>
<html>
<head>
    <title>Cetak Surat Mahasiswa Aktif</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #1a75ff;
            text-align: center;
        }

        .surat-info {
            margin-bottom: 20px;
        }

        .surat-info p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include('koneksi.php');
        
        // Mendapatkan ID dari URL
        $id = $_GET['id'];
        
        // Query untuk mendapatkan data berdasarkan ID
        $query = "SELECT * FROM surat_mahasiswa_aktif WHERE nim = '$id'";
        $result = mysqli_query($koneksi, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
        ?>
        <h2>Surat Mahasiswa Aktif</h2>
        
        <div class="surat-info">
            <p><strong>NIM:</strong> <?php echo $data['nim']; ?></p>
            <p><strong>Nama:</strong> <?php echo $data['nama']; ?></p>
            <p><strong>Tempat Tanggal Lahir:</strong> <?php echo $data['ttl']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $data['alamat']; ?></p>
            <p><strong>Fakultas:</strong> <?php echo $data['fakultas']; ?></p>
            <p><strong>Program Studi:</strong> <?php echo $data['prodi']; ?></p>
            <p><strong>Semester:</strong> <?php echo $data['semester']; ?></p>
        </div>
        
        <button onclick="window.print()">Cetak</button>
        
        <?php
        } else {
            echo "Data tidak ditemukan.";
        }
        ?>
    </div>
</body>
</html>
