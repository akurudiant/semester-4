<!DOCTYPE html>
<html>
<head>
    <title>Edit Surat Mahasiswa Aktif</title>
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

        input[type="submit"]{
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
    <?php
    include('koneksi.php');
    
    // Mendapatkan NIM dari URL
    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        
        // Query untuk mendapatkan data berdasarkan NIM
        $query = "SELECT * FROM surat_mahasiswa_aktif WHERE nim = '$nim'";
        $result = mysqli_query($koneksi, $query);
        
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
    ?>
    <form method="POST" action="update_surat.php">
        <h2>Edit Surat Mahasiswa Aktif</h2>
        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?php echo $data['nim']; ?>" required>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="ttl">Tempat Tanggal Lahir:</label>
        <input type="text" id="ttl" name="ttl" value="<?php echo $data['ttl']; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required>

        <label for="fakultas">Fakultas:</label>
        <input type="radio" id="fakultas" name="fakultas" value="Fakultas Teknologi dan Sains" required> Fakultas Teknologi dan Sains<br>
	    <input type="radio" id="fakultas" name="fakultas" value="Fakultas Pedagodi dan Psikologi"> Fakultas Pedagodi dan Psikologi<br>
		<!-- Tambahkan opsi lainnya sesuai kebutuhan -->
            <br><br>
        <label for="prodi">Program Studi:</label>
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
        <input type="number" id="semester" name="semester" value="<?php echo $data['semester']; ?>" required>

        <input type="submit" name="submit" value="Simpan">
        <input type="button" onclick="window.location.href='tabel.php'" value="Batal">
    </form>
    <?php
        } else {
            echo "Data tidak ditemukan.";
        }
    } else {
        echo "NIM tidak ditemukan.";
    }
    ?>
</body>
</html>
