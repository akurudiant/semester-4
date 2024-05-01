<?php
// Koneksi ke database
$servername = "localhost"; // Ganti sesuai server Anda
$username = "root"; // Ganti sesuai username Anda
$password = ""; // Ganti sesuai password Anda
$dbname = "mahasiswa"; // Ganti sesuai nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);
// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];

    // Menggunakan prepared statement untuk mencegah SQL injection
    $stmt = $conn->prepare("INSERT INTO surat_mahasiswa_aktif (nim, nama, ttl, alamat, fakultas, prodi, semester) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $nim, $nama, $ttl, $alamat, $fakultas, $prodi, $semester);

    if ($stmt->execute()) {
        // Redirect ke halaman index setelah berhasil menyimpan data
        header("Location: tabel.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
