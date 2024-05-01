<?php

$server		="localhost";
$username	="root";
$pass 		="";
$db 		="db_crud"; //menampilkan nama databasenya
$koneksi	= mysqli_connect($server, $username, $pass, $db);

//untuk cek jika koneksi gagal ke databasenya
if(mysqli_connect_error()){
	echo"Koneksi Gagal : ".mysqli_connect_error();
}
	