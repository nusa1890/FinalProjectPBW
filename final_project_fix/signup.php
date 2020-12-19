<?php
  include('php/koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<title>Daftar baru</title>
	<script src="js/valid.js"></script>

</head>
<body>
<div class="bg">
	<div class="container">
		<h1>Daftar baru</h1>
		<form method="POST" action="php/signup_proses.php" enctype="multipart/form-data">
			<div class="container-text">
				<label for="nama">Name: </label>
				<br>
				<input type="text" name="nama" required="" />
				<br>

				<label for="username">Usename: </label>
				<br>
				<input type="text" name="username" required="" />
				<br>
	
				<label for="email">Email: </label>
				<br>
				<input type="text" name="email" required=""/>
				<br>

				<label for="alamat">Alamat: </label>
				<br>
				<input type="text" name="alamat" required="" />
				<br>				 
				
				<label for="password">Password: </label>
				<br>	
				<input type="password" name="password" required="" />
			 	<br>
				<button type="submit">Daftar</button>
			</div>
			 <a href="login.php">Login</a>
		</form>
	</div>
</div>
</body>
</html>
