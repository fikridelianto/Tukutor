-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 05:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tukumotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `nama_kendaraan` varchar(50) NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `tahun_pembuatan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nama_kendaraan`, `jenis_kendaraan`, `tahun_pembuatan`, `deskripsi`, `harga`, `gambar`) VALUES
(12, 'YAMAHA LEXI', 'Matic', 2019, 'Yamaha Lexi dihadirkan dalam dua varian yaitu Standar dan Lexi S. Harganya masing-masing Rp 19,95 juta dan Rp 22 ,8 juta (OTR Jabodetabek). Seperti diberitakan sebelumnya, Lexi memiliki mesin 125 cc dengan imbuhan teknologi VVA plus Bluecore, dan memiliki banderol tidak lebih dari Rp 20 juta. Mesinnya berkapasitas 124,7cc, dengan tenaga maksimum 11,89 ps. Yang menarik, untuk pertama kalinya ada Yamaha dengan mesin 125 cc dilengkapi VVA. Selain itu, Lexi juga punya kemampuan Idling Start Stop untuk menghemat BBM, untuk semua tipe. Ada juga lampu depan yang sudah LED, speedometer digital, hingga shock belakang model tabung (untuk tipe S).      ', 22800000, 'motor2.jpg'),
(21, 'SUZUKI GSX', 'Sport', 2018, 'Deskripsi MOTOR SUZUKI GSX Suzuki GSX-R150 adalah ikon & penerus tradisi motor sport performa tinggi yang mengusung kecanggihan teknologi. Suzuki menerapkan prinsip filosofi terbaik ketika mengembangkan GSX-R sejak pertama kali, dan masih dipertahankan setiap kali Suzuki mengembangkan dan menciptakan model generasi berikutnya.', 27900000, 'motor3.jpg'),
(25, 'VESPA SPRINT 150 I-GET ABS', 'Matic', 2019, 'Sprint terbaru merupakan Vespa \"berbadan kecil\" paling sporty dan dinamis. Vespa Sprint terbaru mewarisi keunggulan dan jiwa muda Vespa. Melalui esensi desain dan elemen detail yang sporty seperti jok dan lampu segi enam yang sangat dikenal di kalangan anak muda. Fitur Vespa Sprint hadir dengan teknologi I-Get yang memberikan keamanan dan pengalaman berkendara yang dinamis di segala kondisi. Selain teknologi kenyamanan juga hadir melalui jarak sumbu roda yang lebih panjang sehingga memberikan kenyamanan bagi pengendara dan penumpang, bagasi luas yang mampu menampung helm full face ditunjang dengan mesin modern yang ditopang oleh bodi yang lebih kuat serta mampu mengurangi getaran.', 45500000, 'sprint.jpg'),
(26, 'Yamaha R1', 'Sport', 2019, 'Yamaha R1 adalah motor flagship Yamaha yang cukup sukses. Hadir dengan mesin 1,0 liter, motor sport ini punya tiga varian yaitu R1, R1M dan R1S. Yang terakhir itu adalah varian termurah dari Yamaha R1. MEski demikian, fiturnya cukup lengkap mulai dari ABS, knalpot berbahan titanium, hingga suspensi yang serupa dengan R1 yang lebih mahal. Peleknya terbuat dari bahan magnesium, namun mengganti header dengan bahan baja, bukan alumunium seperti R1 yang lain. Karena itu, Yamaha menolak kalau motor ini dikatakan versi spec-down, tapi lebih kepada motor dengan kemampuan yang sama, tapi diakali supaya bisa lebih terjangkau, tanpa menurunkan performa. ', 60000000, 'yamahar1.jpg'),
(27, 'Kawasaki W175', 'retro', 2019, 'Menyasar segmen baru, PT Kawasaki Motor Indonesia kembali memperkenalkan moge buatannya yang bertajuk Kawasaki W175. Sepeda motor unik bergaya retro-modern ini memang dihadirkan dengan membawa konsep yang terinspirasi dari tipe sebelumnya, yakni Estrella 250 dan W800. Di sisi lain, kemunculan motor ini juga diharapkan bakal membawa angin segar bagi PT KMI dalam bersaing di pasar otomotif Tanah Air sehingga tak heran jika Kawasaki W175 ini menjadi salah satu produk andalan PT KMI. Tak sampai di situ saja, motor yang diperkenalkan pada ajang Kawasaki Big Bike 2017 di Ancol kemarin ini akan hadir dengan mengadopsi gaya British naked bike sebagai kendaraan komuter sehari-hari sekaligus motor sport. Dengan begitu, peluncuran Kawasaki W175 tersebut juga termasuk salah satu bukti konsistensi pihak PT KMI dalam meramaikan persaingan di segmen moge motor sport Indonesia. Bahkan, dengan konsep yang diusungnya tersebut maka membuat Kawasaki W175 pun tak memiliki pesaing di segmen yang sama sehingga hal tersebut memungkinkan moge ini bakal membawa angin segar bagi PT KMI.    ', 30000000, 'kawasakiw175.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `username`, `password`) VALUES
(13, 'sony', 'Laki-laki', 'sonny', 'sonny'),
(14, 'fikri delianto', 'Laki-laki', 'fkrdlnt_', 'fikri123'),
(15, 'fikri', 'Laki-laki', 'fikri', 'fikri'),
(16, 'daniel', 'Laki-laki', 'daniel', 'daniel123'),
(17, 'anas', 'Laki-laki', 'anas', 'anas'),
(18, 'anasaprilian', 'Laki-laki', 'anas', 'haha'),
(19, 'ades', 'Laki-laki', 'sheila', 'seila'),
(20, 'hai', 'Perempuan', '123', '1'),
(21, 'anas', 'Laki-laki', 'anas', 'anas'),
(22, 'fikri', 'Laki-laki', 'fikri123', 'fikri123'),
(23, 'Jack', 'Laki-laki', 'jack123', ''),
(24, 'hafidz al farizi', 'Laki-laki', 'hafidz', '12345'),
(25, '1234', 'Laki-laki', '1234', '12345'),
(26, '1213', 'Laki-laki', '2e424', '24314'),
(27, 'fikri delianto', 'Laki-laki', 'qwerty', 'qwerty'),
(28, 'ucok', 'Perempuan', 'uciha212', 'uchiha212'),
(29, 'uciha212', 'Perempuan', 'uciha212', 'ucok212'),
(30, 'delianto', 'Laki-laki', 'delianto', 'delianto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
