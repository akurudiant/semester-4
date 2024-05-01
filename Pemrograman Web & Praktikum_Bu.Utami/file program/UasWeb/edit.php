<!DOCTYPE html>
<html>
<head>
	<title>CODING</title>
</head>
<style>
	body {
		background: linear-gradient(to right, #d6c240, #40d657);
	}
</style>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1><font Color="White"><b>Mengedit</b></font></h1>
		<div class="card">
			<div class="card-header bg-success text-white">
				Edit Barang
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" required class="form-control"
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control" 
					</div>                              
					<div class="form-group">                         
						<label>Deskripsi</label>                           
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>	                             
					<button type="submit" class="btn btn-primary" name="update" value="update">Update data</button>
				</form>
				<?php                                                                                                            
				include('koneksi.php');
				// Mengambil ID dari URL                                                                                      
				$id = $_GET['id'];                                                                                                     
				// Melakukan pengecekan jika button update diklik maka akan menjalankan perintah update di bawah ini
				if (isset($_POST['update'])) {              
					// Menampung data dari tampilan                    
					$nama = $_POST['nama'];
					$harga = $_POST['harga'];                          
					$deskripsi = $_POST['deskripsi'];                      
					// Query untuk melakukan update data barang                     
					$query = "UPDATE barang SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id=$id";
					$update = mysqli_query($koneksi, $query);
					if ($update) {                                  
						// Jika update berhasil, tampilkan pesan sukses dan redirect ke halaman index
						echo "<script>alert('Data berhasil diupdate.'); window.location.href = 'tabel.php';</script>";                           
					} else {                          
						// Jika update gagal, tampilkan pesan error                  
						echo "Update gagal: " . mysqli_error($koneksi);                                
					}                                    
				}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
