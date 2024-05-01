<?php
include('koneksi.php');
// Mengambil ID dari URL
$id = $_GET['id'];
// Query untuk menghapus data barang
$query = "DELETE FROM barang WHERE id=$id";
$delete = mysqli_query($koneksi, $query);
if ($delete) {
	// Jika delete berhasil, tampilkan pesan sukses dan redirect ke halaman index
	echo "<script>alert('Data berhasil dihapus.'); window.location.href = 'tabel.php';</script>";
} else {
	// Jika delete gagal, tampilkan pesan error
	echo "Delete gagal: " . mysqli_error($koneksi);
}
?>
