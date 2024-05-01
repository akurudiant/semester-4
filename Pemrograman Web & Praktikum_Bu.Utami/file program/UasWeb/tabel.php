<!DOCTYPE html>
<html>
<head>
	<title>CODING</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<style>
	body {
		background: linear-gradient(to right, #d6c240, #40d657);
	}
</style>
<body>
	<div class="container col-md-6 mt-4">
		<h1><font Color="White"><b> TABEL BARANG</b></font></h1> 
		<a align=center href="index.php"><font color="red"<b><u>logout</u></b></font></a><br><br>
		<div class="card">
			<div class="card-header bg-success text-white">
				DATA BARANG <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Barang</th>
							<th>Harga</th>
							<th>Deskripsi</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include('koneksi.php');//memanggil file koneksi
						$datas = mysqli_query($koneksi, "SELECT * FROM barang") or die(mysqli_error($koneksi));
						//script untuk menampilkan data barang

						$no = 1;//untuk mengurutkan nomor

						//melakukan perulangan
						while ($row = mysqli_fetch_assoc($datas)) {
						?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $row['nama']; //untuk menampilkan nama ?></td>
								<td>Rp <?php echo $row['harga']; ?></td>
								<td><?php echo $row['deskripsi']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
									<a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
								</td>
							</tr>
						<?php
							$no++;
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
