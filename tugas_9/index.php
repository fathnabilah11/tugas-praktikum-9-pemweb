<!DOCTYPE html>
<html>
<head>
	<title>FORM PENDAFTARAN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>

<body>
	<header>
		<h1 class="judul">Isilah Form Pendaftaran Dibawah ini</h1>
	</header>

	<div class="wrap"></div>

		<div class="blog">
			<div class="conteudo">
				<form action="beranda.php" method="post">
					<div class="imgcontainer">
						<div class="container">

						<label><b>Nama</b></label>
							<input type="text" placeholder="Masukkan Nama" name= "nama" required="" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
						<label><b>email</b></label>
							<input type="text" placeholder="Masukkan Email" name="email" required="" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>					
						
						<label><b>Jenis Kelamin</b></label>
							<input type="text" placeholder="Masukkan Jenis Kelamin" name= "jkel" required="" value="<?=isset($_POST['jkel']) ? $_POST['jkel'] : ''?>"/>					
						
						<label><b>alamat</b></label>
							<input type="text" placeholder="Masukkan Alamat" name="alamat" required="" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/>
					
						<button type="submit" name="submit">Daftar</button>
   						 
  					</div>
				</form>
				<form action="login.php" method="post">
					
						<button type="submit" name="login">Login</button>
   						 
  					</div>
				</form>

			
</body>
</html>