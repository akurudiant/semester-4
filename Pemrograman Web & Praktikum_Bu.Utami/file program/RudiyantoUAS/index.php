<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<title>Login</title>
</head>
<style>
body{
  background-image: url('blurBG.jpg');
  background-size: cover;
  background-attachment: fixed;
}
</style>
<body>
  <div class="container">
  <h2>Login Page</h2>
	<h4>Pembuatan surat keterangan mahasiswa aktif di Universitas PGRI Wiranegara</h4>
	<p>Untuk melanjutkan, silahkan login terlebih dahulu!</p>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" id="password" required>
      <input type="checkbox" onclick="togglePasswordVisibility()" ><font font size="2"> Tampilkan Password </font><br>
      <br><input type="submit" value="Login" name="submit">
    </form>
	
   <h6>Copyright 2023 @akurudianttt</h6>
  </div>
  

  <?php
  // Proses login
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan password
    if ($username === "admin" && $password === "admin123") {
      echo "<script>alert('Login berhasil');</script>";
      // Lakukan tindakan selanjutnya setelah login berhasil
      header("Location: beranda.html"); 
      exit;
    } else {
      echo "<script>alert('Login gagal. Periksa kembali username dan password Anda.');</script>";
    }
  }
  ?>

  <script>
    function togglePasswordVisibility() {
      var passwordField = document.getElementById("password");
      if (passwordField.type === "password") {
        passwordField.type = "text";
      } else {
        passwordField.type = "password";
      }
    }
  </script>
</body>
</html>
