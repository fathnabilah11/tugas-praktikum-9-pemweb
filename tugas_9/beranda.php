<!DOCTYPE html>
<html>
<head>
	<title>BERANDA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header>
		<h1 class="judul">Selamat Datang</h1>
	</header>

	<div class="wrap"></div>
		<nav class="menu">
			<ul>
				<li>
					<a></a>
				</li>
				<li>
					<a></a>
				</li>
			</ul>
		</nav>

		<aside class="sidebar">
			<div class="widget">
				<h2>BRANI CLOTH</h2>
				<p>Brani Cloth adalah usaha bergerak di rana konveksi,keunggulan kita adalah di kualitas dan cerita yang kami berikan di setiap bajunya untuk lebih lengkapnya silahkan berkunjung di instagram @brani.cloth</p>
			</div>
			<div class="widget">
				<h2>BRANI SHOP</h2>
				<p>Brani Shop adalah salah satu online shop yang menyediakan berbagai macam makeup, jam tangan daniel wallington, serta skincare untuk wanita. untuk lebih lengkapnya silahkan berkunjung di instagram @brani.shop</p>
			</div>
		</aside>

		<div class="blog">
			<div class="conteudo">
				<?php
				$nama = $_POST['nama'];
				$email = $_POST['email'];
				$jkel = $_POST['jkel'];
				$alamat = $_POST['alamat'];
				include 'koneksi.php';
				$sql = "INSERT INTO data VALUES('','$nama','$email','$jkel','$alamat')";

				if (mysqli_query($conn,$sql)) {
					echo "<center><br>Terima Kasih Telah Mengisi Form Pendaftaran Kami</center>";
				}else{
					echo "Error: ".$sql."<br>".mysqli_error($conn);
				}

				mysqli_close($conn);
				?>
				<form method="POST" action="index.php" >
					<center>
						<br>
						<button type="submit" name="kembali">Kembali</button>
					</center>
				</form>
			</div>
			
</body>
</html>