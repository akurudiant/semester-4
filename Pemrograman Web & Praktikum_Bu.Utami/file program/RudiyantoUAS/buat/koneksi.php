<?php
$servername = "localhost";
$username = "root";
$password = ""; // Ubah password sesuai dengan konfigurasi database Anda
$dbname = "mahasiswa";

$koneksi = new mysqli($servername, $username, $password, $dbname);
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
