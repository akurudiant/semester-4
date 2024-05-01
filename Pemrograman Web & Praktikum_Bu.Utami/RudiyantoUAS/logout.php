<?php
session_start();
if(isset($_SESSION['username'])) {
    session_destroy();
    ?>
    <meta http-equiv="refresh" content="2; url=.php"/>
	<center><h1>Gagal Logout</h1>Silahkan login terlebih dahulu<br/><br/>kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <?php
} else {
    ?>
    <meta http-equiv="refresh" content="2; url=index.php"/>
	 <center><h1>Berhasil Logout</h1>
	kamu akan dialihkan kembali ke halaman login dalam 2 detik</center>
    <?php
}
?>