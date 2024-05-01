<?php
// jika dibawah ini diganti, harap ganti juga yang ada di (tabel.php, tambah.php)
$servername = "localhost"; // Ganti dengan nama server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "mahasiswa"; // Ganti dengan nama database Anda

// Buat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
