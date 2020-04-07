<!DOCTYPE html>
<html>
<head>
	<title>CETAK</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
	<header>
		<h1 class="judul">Selamat Datang,</h1>
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
				<h2>List Pendaftar</h2>
				<table width='75%' cellpadding='2' cellspacing='0' border='1'>
			    <tr><th>NO</th><th>NAMA</th><th>EMAIL</th><th>JENIS KELAMIN</th><th>ALAMAT</th></tr>
			    <?php
			    include 'koneksi.php';
			    $data = mysqli_query($conn, "SELECT * from data");
			    $no=1;
			    foreach ($data as $row){
			        echo "<tr>
			            <td>$no</td>
			            <td>".$row['nama']."</td>
			            <td>".$row['email']."</td>
			            <td>".$row['jkel']."</td>			            
			            <td>".$row['alamat']."</td>
			              </tr>";
			        $no++;
    }

    ?>
   				 
</table>
				<form method="POST" action="index.php" >
					<center>
						<br>
						<button type="submit" name="kembali">Kembali</button>
					</center>
				 </form>
					
				
			
</body>
</html>