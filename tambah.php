<?php 	
// koneksi
$conn = mysqli_connect("localhost","root","","tukumotor");

//cek apakah tombol submit sudah ditekan apa belum
if( isset($_POST["submit"]) ){
	//ambil data dari tiap elemen dlam form 
	$nama_kendaraan = $_POST["nama_kendaraan"];
	$jenis_kendaraan = $_POST["jenis_kendaraan"];
	$tahun_pembuatan = $_POST["tahun_pembuatan"];
	$deskripsi = $_POST["deskripsi"];
	$harga = $_POST["harga"];

	//misah file gambar
	$gambar = $_FILES['gambar'];
	$nama = $gambar['name'];
	$tipe = $gambar['type'];
	$lokasi = $gambar['tmp_name'];
	$error = $gambar['error'];
	$ukuran = $gambar['size'];

	//ngambil format file dan ngecek
	$formatFile = explode('.', $nama);
	$formatFileAsli = strtolower(end($formatFile));
	
	$format = array('jpg', 'png', 'jpeg');

	//proses
	if (!array($formatFileAsli, $format)) {
		header('location: tambah.php?format-file-tidak-diketahui');
		exit();
	}elseif($error !== 0){
		header('location: tambah.php?ada-error-pada-file');
		exit();
	}elseif ($ukuran >= 50000000) {
		header('location: tambah.php?ukuran-file-terlalu-besar');
		exit();
	}else{
		//memindahkan file
		$lokasiBaru = 'gambar/'.$nama;
		move_uploaded_file($lokasi, $lokasiBaru);

		//memasukan ke database
		$query = "INSERT INTO kendaraan(nama_kendaraan, jenis_kendaraan, tahun_pembuatan, deskripsi, harga, gambar) VALUES('$nama_kendaraan', '$jenis_kendaraan', '$tahun_pembuatan', '$deskripsi', '$harga', '$nama')";
		$hasilQuery = mysqli_query($conn, $query);

		if (!$hasilQuery) {
			header('location: tambah.php?query-error');
			exit();
		} {
			header('location: halaman_admin.php?data-berhasil-ditambahkan');
			exit();
		}
	}



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kendaraan</title>
</head>
<body>
	<h1>Tambah Data Kendaraan</h1>

	<form action="tambah.php" method="post" enctype="multipart/form-data">
		<a href="halaman_admin.php">kembali</a>
		<ul>
			<li>
				<label for="nama_kendaraan">nama_kendaraan :</label>
				<input type="text" name="nama_kendaraan" id="nama_kendaraan">
			</li>
			<li>
				<label for="jenis_kendaraan">jenis_kendaraan :</label>
				<input type="text" name="jenis_kendaraan" id="jenis_kendaraan">
			</li>
			<li>
				<label for="tahun_pembuatan">tahun_pembuatan :</label>
				<input type="text" name="tahun_pembuatan" id="tahun_pembuatan">
			</li>
			<li>
				<label for="deskripsi">deskripsi :</label>
				<textarea type="text" name="deskripsi" id="deskripsi"></textarea>
			</li>
			<li>
				<label for="harga">harga :</label>
				<input type="text" name="harga" id="harga">
			</li>
			<li>
				<label for="gambar">gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
			<li>
				<button type="reset">Reset</button>
			</li>
		</ul>

	</form>

</body>
</html>