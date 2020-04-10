<?php 
require 'functions.php';

if (isset($_POST['masuk'])) {
	$un = $_POST['username'];
	$pw = $_POST['password'];

	login($un, $pw);
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TUKUTOR</title>
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
			padding top: 100px
		}

		.kotak form h1{
			font-size: 100px;
			text-align: center;
			color: black;
		}

		.kotak form h2{
			font-size: 30px;
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
			font-family: 15px;
			padding: 5px;
			width: 300px;
		}

		.kotak form input[type="submit"]{
			display: block;
			margin: 0px auto;
			font-size: 18px;
			padding: 9px;
			background-color: black;
			border: none;
			border-radius: 5px;
			color: #fff;
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
			color: #fff;
			width: 55px;
		}

		.button:hover{
			background-color: #cccc00;
		}
	</style>
</head>
<body>
	<div class="kotak">
		<form action="tukumotor.php" method="POST">
		<h1>
			<img src="img/tukutor.png" name="tukutor" title="tukutor" width="400">
		</h1>
		<h2>
			MASUK
		</h2>
			<input type="text" name="username" placeholder="Nama Pengguna" autocomplete="off" required autofocus>
			<input type="password" name="password" placeholder="Kata Sandi" >
		<td>
			<input type="submit" name="masuk" value="Masuk">
		</td>
		<br>
		<h3>
			belum punya akun?
		</h3>
		<br>
		<td>
		</td>
		</form>
			<a href="daftar.php">Daftar</a>
	</div>
</body>
</html>	