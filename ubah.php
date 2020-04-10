<?php

require 'functions.php';

	$id = $_GET["id"];

	$dfm = query("SELECT * FROM kendaraan WHERE id_kendaraan = '$id'")[0];

if (isset($_POST["submit"]) ) {

	 
	if ( ubah($_POST) > 0 ) {
	echo "
		<script>
			alert('data berhasil diubah!');
			document.location.href = 'halaman_admin.php';

		</script>

	";
	} else {
	echo "
	<script>
		alert('data gagal diubah!');
		document.location.href = 'halaman_admin.php';
	</script>

	";
	}
}
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data motor</title>
</head>
<body>
	<h1>Ubah data motor</h1>

	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_kendaraan" value="<?= $dfm["id_kendaraan"]; ?>">
	<input type="hidden" name="gambarLama" value="<?= $dfm["gambar"]; ?>">
	<a href="halaman_admin.php">kembali</a>
		<ul>
			<li>
				<label for="nama_kendaraan">Nama_kendaraan : </label>
				<input type="text" name="nama_kendaraan"  id="nama_kendaraan"required value="<?= $dfm['nama_kendaraan']; ?>">
			</li>
			<li>
				<label for="jenis_kendaraan">Jenis_kendaraan : </label>
				<input type="text" name="jenis_kendaraan" id="jenis_kendaraan"required value="<?= $dfm['jenis_kendaraan']; ?>">
			</li>
			<li>
				<label for="tahun_pembuatan">Tahun_pembuatan : </label>
				<input type="text" name="tahun_pembuatan" id="tahun_pembuatan"required value="<?= $dfm['tahun_pembuatan']; ?>">
			</li>
			<li>
				<label for="deskripsi">Deskripsi : </label>
				<textarea name="deskripsi" id="deskripsi" required value=""><?= $dfm['deskripsi']; ?> </textarea>
			</li>
			<li>
				<label for="harga">harga : </label>
				<input type="text" name="harga" id="harga" required value="<?= $dfm['harga']; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label>
				<img src="gambar/<?= $dfm['gambar']; ?>" width="60"> <br>>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

</body>
</html> 