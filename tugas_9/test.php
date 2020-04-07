<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$log = mysqli_query($conn, "select * from admin where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($log);

if ($cek > 0){
	header("location:cetak.php");
	}else{
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<meta http-equiv="refresh" content="2; url:http://localhost/tugas_9/kosong.html">
		</head>
		<body>
		<center><h1>maaf username atau password anda salah,silahkan coba lagi </h1></center>
		</body>
		</html>
		<?php
	}
 
 ?>