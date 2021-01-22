-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 01:21 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kode_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `nama_admin`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'Admin', 'jl jl jl', '9867766', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `kode_balita` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_balita` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`kode_balita`, `nik`, `nama_balita`, `tempat_lahir`, `tgl_lahir`) VALUES
(3, '327505071098', 'Siti Alfayed', 'Bandung', '2020-12-12'),
(4, '196102181984032001', 'Kunto Mantul', 'Semarang', '2020-07-07');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `kode_balita` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `jenis_imunisasi` varchar(50) NOT NULL,
  `tgl_imunisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`kode_balita`, `nik`, `jenis_imunisasi`, `tgl_imunisasi`) VALUES
(1, 123123, 'Urban (0-7 hari)', '1232-03-12'),
(4, 2147483647, 'Urban (0-7 hari)', '2021-01-21'),
(3, 2147483647, 'Urban (0-7 hari)', '2021-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kode_jadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `tanggal`, `jam`) VALUES
(4, '2021-01-21', '09:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan_balita`
--

CREATE TABLE `perkembangan_balita` (
  `kode_balita` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `bb_balita` int(3) NOT NULL,
  `tb_balita` int(3) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkembangan_balita`
--

INSERT INTO `perkembangan_balita` (`kode_balita`, `nik`, `bb_balita`, `tb_balita`, `tgl_periksa`) VALUES
(1, 123123, 42, 100, '1998-01-12'),
(3, 2147483647, 5, 45, '2021-01-22'),
(4, 2147483647, 12, 46, '2021-01-22'),
(3, 2147483647, 12, 47, '2021-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `phbs`
--

CREATE TABLE `phbs` (
  `kode_phbs` int(11) NOT NULL,
  `judul_berita` varchar(50) NOT NULL,
  `jenis_berita` varchar(50) NOT NULL,
  `tempat_dibuat` varchar(50) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `penulis_berita` varchar(100) NOT NULL,
  `editor_berita` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phbs`
--

INSERT INTO `phbs` (`kode_phbs`, `judul_berita`, `jenis_berita`, `tempat_dibuat`, `tgl_dibuat`, `deskripsi_berita`, `penulis_berita`, `editor_berita`, `penerbit`, `gambar`) VALUES
(1, 'Imunisasi Sejak Dini', 'Imunisasi', 'Bekasi', '2021-01-14', 'Istilah vaksinasi dan imunisasi tengah ramai diperbincangkan masyarakat. Keduanya sama-sama dilakukan dengna tujuan memberi perlindungan tubuh dari penyakit tertentu.\r\n\r\nMeski banyak pakar mengungkapkan bahwa keduanya memiliki pengertian yang sama, tapi tidak dengan penyataan CDC.\r\n\r\n\r\nMenurut Centers for Disease Control and Prevention (CDC) vaksinasi adalah tindakan memperkenalkan vaksin ke dalam tubuh untuk menciptakan kekebalan (sistem imun) terhadap penyakit tertentu.\r\n\r\nDalam proses vaksinasi, vaksin biasanya diberikan melalui jarum suntik, namun beberapa bisa diberikan melalui mulut atau disemprotkan ke dalam hidung.\r\n\r\nSedangkan definisi imunisasi adalah suatu proses menjadikan seseorang kebal atau terlindungi sepenuhnya dari penyakit melalui tindakan vaksinasi.\r\n\r\nKedua definisi yang hampir serupa ini, akhirnya sering digunakan bergantian. Padahal seseorang yang mendapat suntikkan vaksin belum tentu ia diimunisasi.\r\n\r\nSaat seseorang divaksinasi bukan berarti ia benar-benar terlindungi dari suatu penyakit tertentu, karena ada banyak faktor yang memengaruhi sistem kekebalan dengan vaksin bisa bekerja.\"\"\"\"\"\"', 'Risna Halidi', 'Dini Afrianti Efendi', 'Suara', 'img/gmb/b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `akses` enum('user','admin') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `agama`, `pekerjaan`, `nama_suami`, `akses`, `username`, `password`) VALUES
('12345', 'Regina Devi Tarigan', 'Medan', '1999-05-10', 'Jl. RS Fatmawati No. 1', '081281567751', 'Kristen', 'Mahasiswa', 'Robert Downey Juniot', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('196102181984032001', 'Anita Kunto', 'Jakarta', '1960-07-07', 'Jakarta Pinggiran Nomor 1', '081231241112', '-', 'Dosen', 'Robert Gilbert', 'user', 'kuntokun', 'ee11cbb19052e40b07aac0ca060c23ee'),
('327505071098', 'Siti Fatimah', 'Bogor', '1999-10-09', 'Kp. Pasir Muncang B6', '0895333093116', 'Islam', 'Direktur', 'Muhammaf Fiqri Alfayed', 'user', 'fatimahcantik', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`kode_balita`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
-- Indexes for table `phbs`
--
ALTER TABLE `phbs`
  ADD PRIMARY KEY (`kode_phbs`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `kode_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phbs`
--
ALTER TABLE `phbs`
  MODIFY `kode_phbs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
