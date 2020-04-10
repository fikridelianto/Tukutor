<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","tukumotor");


function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function login($username, $password){
	global $conn;
	//query user
	$queryUser = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$hasilUser = mysqli_query($conn, $queryUser);

	//query admin
	$queryAdmin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$hasilAdmin = mysqli_query($conn, $queryAdmin);

	//proses login
	if (empty($username) || empty($password)) {
		header("location: tukumotor.php?pesan=data-kosong");
		exit();
	}elseif($row = mysqli_fetch_assoc($hasilUser)){
		session_start();
		$u = $row['username'];
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['jk'] = $row['jenis_kelamin'];
		header("location:halaman_user.php?u=$u");
		exit();
	}elseif($row = mysqli_fetch_assoc($hasilAdmin)){
		session_start();
		$u = $row['username'];
		$_SESSION['nama'] = $row['nama_admin'];
		header("location:halaman_admin.php?u=$u");
		exit();
	}
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM kendaraan WHERE id_kendaraan = $id");
	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM kendaraan WHERE
	 		nama_kendaraan LIKE '%$keyword%'
	";
	return query($query);
}

function ubah($data){
	global $conn;

	$id = $data["id_kendaraan"];
	$nama_kendaraan = htmlspecialchars($data["nama_kendaraan"]);
	$jenis_kendaraan = htmlspecialchars($data["jenis_kendaraan"]);
	$tahun_pembuatan = htmlspecialchars($data["tahun_pembuatan"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$harga = htmlspecialchars($data["harga"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	if ( $_FILES['gambar']['error']=== 4 ) {
		$gambar = $gambarLama;	

	} else {
		$gambar = upload();
	}

	$query = "UPDATE kendaraan SET
				nama_kendaraan = '$nama_kendaraan',
				jenis_kendaraan = '$jenis_kendaraan',
				tahun_pembuatan = '$tahun_pembuatan',
				deskripsi = '$deskripsi',
				harga = '$harga',
				gambar = '$gambar'
				WHERE id_kendaraan = $id
	";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
 ?>
