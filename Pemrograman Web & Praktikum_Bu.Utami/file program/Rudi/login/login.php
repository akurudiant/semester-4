<?php
session_start();
if(isset($_SESSION['email'])) {
echo '<script>window.location.replace("./index.php");</script>';
} else {
?>
<head>
<title>LOGIN PAGE</title>
</head>
<center>
<h1>Form Login Tanpa Mysql <font color="red"></font></h1>
<h2>Dengan HTML dan PHP</h2>
<form action="./ceklogin.php" method="post">
<input type="email" name="email" placeholder="Username" alt="email"
required="required"/><br/>
<input type="password" name="password" placeholder="Password" alt="password"
required="required"/><br/><br/>
<input type="submit" name="submit" value="Submit!!!" alt="submit"/>
</form><br/>
<h4>Copyright &copy; <font color="red"></font></h4>
</center>
<?php } ?>
