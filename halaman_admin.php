<?php 
require 'functions.php';
$kendaraan = query("SELECT * FROM kendaraan");

//tombol cari ditekan
if(isset($_POST["cari"])){
	$kendaraan = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TUKUTOR</title>
<body>
</head>

<h1>Daftar Kendaraan</h1>

<a href="tambah.php">Tambah Data Kendaraan</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
		<button><a href="tukumotor.php" type="submit" name="logout">keluar!</button></a>
</form>
<br>
<table border="3" cellpadding="10" cellspacing="0">

	<tr>
		<th>NO.</th>
		
		<th>GAMBAR</th>
		<th>ID_KENDARAAN</th>
		<th>NAMA_KENDARAAN</th>
		<th>JENIS_KENDARAAN</th>
		<th>TAHUN_PEMBUATAN</th>
		<th>DESKRIPSI</th>
		<th>HARGA</th>
		<th>AKSI</th>
	</tr>
	<?php $i = 1;  ?>
	<?php foreach( $kendaraan as $row ): ?>
	<tr>
		<td><?= $i; ?></td>
		
		<td><img src="gambar/<?= $row["gambar"]; ?>" width="150"></td>
		<td><?= $row["id_kendaraan"]; ?></td>
		<td><?= $row["nama_kendaraan"]; ?></td>
		<td><?= $row["jenis_kendaraan"]; ?></td>
		<td><?= $row["tahun_pembuatan"]; ?></td>
		<td><?= $row["deskripsi"]; ?></td>
		<td><?= $row["harga"]; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id_kendaraan"];
			?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id_kendaraan"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		
	</tr>
	<?php $i++; ?>
<?php endforeach; ?>

</table>
</body>
</html>	