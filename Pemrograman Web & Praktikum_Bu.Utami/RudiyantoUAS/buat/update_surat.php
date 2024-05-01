<?php
include('koneksi.php');

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];

    // Query untuk mengupdate data surat_mahasiswa_aktif berdasarkan nim
    $query = "UPDATE surat_mahasiswa_aktif SET nama='$nama', ttl='$ttl', alamat='$alamat', fakultas='$fakultas', prodi='$prodi', semester='$semester' WHERE nim='$nim'";
    $update = mysqli_query($koneksi, $query);

    if ($update) {
        // Jika update berhasil, tampilkan pesan sukses dan redirect ke halaman tabel.php
        echo "<script>alert('Data berhasil diperbarui.'); window.location.href = 'tabel.php';</script>";
    } else {
        // Jika update gagal, tampilkan pesan error
        echo "Update gagal: " . mysqli_error($koneksi);
    }
} else {
    echo "Form submission error.";
}
?>
