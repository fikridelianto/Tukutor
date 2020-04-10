<?php 
require 'functions.php';
$kendaraan = query("SELECT * FROM kendaraan");

if(isset($_POST["cari"])){
	$kendaraan = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TUKUTOR</title>
	<style type="text/css">
		*{
			margin: 0px;
			font-family: century gothic;
			color: white;
		}

		.topnav{
			position: relative;
			width: 100%;
			min-height: 80px;
			border-radius: 6px;
			background-color: #cccc00;
			box-shadow: 0 0 7px 0px rgba(136, 136, 136, 0.2);
		}

		.topnav form a{
			text-decoration: none;
		}

		.topnav form button, a, input{
			color: black;
		}

		.topnav form td{
			margin: 10px;
		}
	</style>
</head>
<body bgcolor="black">
<nav class="topnav">
		<h1>
			<center><a href="halaman_user.php"><img src="img/tukutor.png" name="tukutor" title="tukutor" width="400"></a></center>
		</h1>

	<form action="" method="post">
	
	<td align=right width=70px><input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off"></td>
	<button type="submit" name="cari">Cari!</button>
	<button><a href="tukumotor.php" type="submit" name="logout">Keluar!</button></a>
</form>
</nav>
<br>
<a href="login.php"></a>
<div class="kotak">

	<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>NO.</th>
		<th>GAMBAR</th>
		<th>NAMA_KENDARAAN</th>
		<th>JENIS_KENDARAAN</th>
		<th>TAHUN_PEMBUATAN</th>
		<th>DESKRIPSI</th>
		<th>HARGA</th>
	</tr>
	<?php $i = 1;  ?>
	<?php foreach( $kendaraan as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		
		<td><img src="gambar/<?= $row["gambar"]; ?>" width="150"></td>
		<td><?= $row["nama_kendaraan"]; ?></td>
		<td><?= $row["jenis_kendaraan"]; ?></td>
		<td><?= $row["tahun_pembuatan"]; ?></td>
		<td><?= $row["deskripsi"]; ?></td>
		<td><?= $row["harga"]; ?></td>
		
	</tr>
	<?php $i++ ?>
<?php endforeach; ?>

</table>
</div>
</body>
</html>