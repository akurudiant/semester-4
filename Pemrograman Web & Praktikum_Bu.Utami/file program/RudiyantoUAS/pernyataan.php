<!DOCTYPE html>
<html>
<head>
    <title>Surat Pernyataan Mahasiswa Aktif</title>
</head>
<body>
    <h2>Surat Pernyataan Mahasiswa Aktif</h2>

    <?php
    // Inisialisasi variabel kosong untuk menyimpan pesan kesalahan
    $error = '';

    // Cek apakah form telah disubmit
    if (isset($_POST['submit'])) {
        // Validasi inputan
        if (empty($_POST['nama'])) {
            $error = 'Nama harus diisi.';
        } elseif (empty($_POST['nim'])) {
            $error = 'NIM harus diisi.';
        } elseif (empty($_POST['program_studi'])) {
            $error = 'Program Studi harus diisi.';
        } elseif (empty($_POST['semester'])) {
            $error = 'Semester harus diisi.';
        } else {
            // Jika tidak ada kesalahan, proses form disini

            // Mengambil nilai dari form
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $program_studi = $_POST['program_studi'];
            $semester = $_POST['semester'];

            // Tampilkan surat pernyataan
            echo "SURAT PERNYATAAN MAHASISWA AKTIF <br><br>";
            echo "Nama: $nama <br>";
            echo "NIM: $nim <br>";
            echo "Program Studi: $program_studi <br>";
            echo "Semester: $semester <br><br>";
            echo "Saya yang bertanda tangan di bawah ini, menyatakan bahwa saya adalah mahasiswa aktif yang terdaftar di $program_studi. Saya berkomitmen untuk menjalankan tugas dan kewajiban sebagai mahasiswa dengan baik. Apabila terbukti melakukan pelanggaran yang merugikan kampus, saya siap menerima sanksi yang berlaku.<br><br>";
            echo "Hormat saya, <br>";
            echo "$nama <br>";
            echo "Tanggal: " . date('d/m/Y');
        }
    }
    ?>

    <form method="post" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?php if(isset($_POST['nama'])) echo $_POST['nama']; ?>"><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="<?php if(isset($_POST['nim'])) echo $_POST['nim']; ?>"><br><br>

        <label for="program_studi">Program Studi:</label><br>
        <input type="text" id="program_studi" name="program_studi" value="<?php if(isset($_POST['program_studi'])) echo $_POST['program_studi']; ?>"><br><br>

        <label for="semester">Semester:</label><br>
        <input type="text" id="semester" name="semester" value="<?php if(isset($_POST['semester'])) echo $_POST['semester']; ?>"><br><br>

        <input type="submit" name="submit" value="Buat Surat">
    </form>

    <?php
    // Tampilkan pesan kesalahan jika ada
    if (!empty($error)) {
        echo "<div style='color: red;'>$error</div>";
    }
    ?>
</body>
</html>
