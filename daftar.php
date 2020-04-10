<?php 
	//koneksi
	include "koneksi.php";

	//proses daftar
	if (isset($_POST['daftar'])) {
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "INSERT INTO user(nama, jenis_kelamin, username, password) VALUES('$nama', '$jk', '$username', '$password')";
		$hasilQuery = mysqli_query($koneksi, $query);

		if (!$hasilQuery) {
			header('Location: daftar.php?ket=error');
			exit();
		}else{
			header('Location: tukumotor.php?ket=berhasil-daftar');
			exit();
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TUKUTOR | Daftar</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			font-family: century gothic;
		}

		.kotak{
			margin: 0px auto;
			height: 100vh;
			width: 60%;
			background-color: #cccc00;
		}

		.kotak form{
			padding-top: 100px;
		}

		.kotak form h1{
			margin-top: -100px;
			font-size: 100px;
			text-align: center;
			color: black;
		}

		.kotak form h2{
			font-size: 40px;
			text-align: center;
			color: black;
		}

		.kotak form h3{
			font-size: 20px;
			text-align: center;
			color: black;
		}

		.kotak form input[type='text'], .kotak form input[type='password']{
			font-family: arial;
			display: block;
			margin: 30px auto;
			font-size: 15px; 
			padding: 5px;
			width: 300px;
		}

		.kotak form select{
			display: block;
			margin: 30px auto;
			font-size: 15px;
			padding: 5px;
			width: 314px;
		}

		.kotak form input[type="submit"]{
			display: block;
			margin: 0px auto;
			font-size: 18px;
			padding: 9px;
			background-color: black;
			border: none;
			border-radius: 5px;
			color: #FFF;
		}

		a{	
			text-decoration: none;
			display: block;
			margin: 0px auto;
			font-size: 18px;
			padding: 9px;
			background-color: black;
			border: none;
			border-radius: 5px;
			color: #FFF;
			width: 50px;
		}
	</style>
</head>
<body>

	<div class="kotak">
		<form action="daftar.php" method="POST">
		<h1>
			<img src="img/tukutor.png" name="tukutor" title="tukutor" width="400">
		</h1>

		<h2>
			Daftar
		</h2>
			<input type="text" name="nama" placeholder="Nama Lengkap" autocomplete="off" required autofocus>
			<select name="jk">
				<option value="">Jenis Kelamin</option>
				<option value="Laki-laki">Laki-laki</option>
				<option value="Perempuan">Perempuan</option>
			</select>
			<input type="text" name="username" placeholder="Username" autocomplete="off" required autofocus>
			<input type="password" name="password" placeholder="Password" autofocus required>
			<input type="submit" name="daftar" value="Daftar">
			<br>	
			<h3>
				Sudah Punya Akun?
			</h3>
			<br>
		</form>
			<a href="tukumotor.php">Login</a>
	</div>

</body>
</html>