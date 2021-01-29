-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jan 22, 2021 at 03:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3
=======
-- Generation Time: Jan 27, 2021 at 12:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0
>>>>>>> 5847880 (perbaikan website)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
<<<<<<< HEAD
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
=======
>>>>>>> 5847880 (perbaikan website)
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
<<<<<<< HEAD
  `kode_balita` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
=======
  `kode_balita` int(5) NOT NULL,
  `nik` char(16) NOT NULL,
>>>>>>> 5847880 (perbaikan website)
  `nama_balita` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`kode_balita`, `nik`, `nama_balita`, `tempat_lahir`, `tgl_lahir`) VALUES
<<<<<<< HEAD
(3, '327505071098', 'Siti Alfayed', 'Bandung', '2020-12-12'),
(4, '196102181984032001', 'Kunto Mantul', 'Semarang', '2020-07-07');
=======
(20, '3604221710870003', 'salsa', 'Serang', '2020-07-07'),
(21, '3604221308880006', 'ibrahim', 'Jakarta', '2018-05-27'),
(22, '3604220401850001', 'ikbal', 'Serang', '2020-05-10'),
(23, '3604220401850001', 'zahra', 'Serang', '2020-08-17'),
(25, '3604220611750003', 'nazla', 'serang', '2020-05-10'),
(26, '3604221609670001', 'luafi', 'Serang', '2019-05-12'),
(27, '3604221403900004', 'rafa', 'Serang', '2017-11-17'),
(28, '3604222503750002', 'alwi', 'serang', '2018-04-20'),
(29, '3604222402920005', 'dewi', 'Serang', '2020-11-18'),
(30, '3604222709910004', 'fenia', 'Serang', '2019-10-13');
>>>>>>> 5847880 (perbaikan website)

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
<<<<<<< HEAD
  `kode_balita` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `jenis_imunisasi` varchar(50) NOT NULL,
=======
  `kode_balita` int(5) NOT NULL,
  `nik` char(16) NOT NULL,
  `jenis_vaksin` varchar(18) NOT NULL,
>>>>>>> 5847880 (perbaikan website)
  `tgl_imunisasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imunisasi`
--

<<<<<<< HEAD
INSERT INTO `imunisasi` (`kode_balita`, `nik`, `jenis_imunisasi`, `tgl_imunisasi`) VALUES
(1, 123123, 'Urban (0-7 hari)', '1232-03-12'),
(4, 2147483647, 'Urban (0-7 hari)', '2021-01-21'),
(3, 2147483647, 'Urban (0-7 hari)', '2021-02-22');
=======
INSERT INTO `imunisasi` (`kode_balita`, `nik`, `jenis_vaksin`, `tgl_imunisasi`) VALUES
(16, '1203042341', 'DPT-HB-Hib', '2021-01-25'),
(15, '1203040506', 'HB-D', '2021-01-25'),
(20, '3604221710870003', 'Polio 2', '2021-01-17'),
(21, '3604221308880006', '', '2021-01-17'),
(22, '3604220401850001', 'Polio 2', '2021-01-17'),
(25, '3604220611750003', 'Polio 2', '2021-01-17'),
(23, '3604220401850001', '', '2021-01-17'),
(30, '3604222709910004', '', '2021-01-17'),
(26, '3604221609670001', '', '2021-01-17'),
(27, '3604221403900004', '', '2021-01-17'),
(28, '3604222503750002', '', '2021-01-17'),
(29, '3604222402920005', 'Polio', '2021-01-17');
>>>>>>> 5847880 (perbaikan website)

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
<<<<<<< HEAD
  `kode_jadwal` int(11) NOT NULL,
=======
  `kode_jadwal` int(3) NOT NULL,
>>>>>>> 5847880 (perbaikan website)
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kode_jadwal`, `tanggal`, `jam`) VALUES
<<<<<<< HEAD
(4, '2021-01-21', '09:10:00');
=======
(4, '2020-11-17', '10:10:00');
>>>>>>> 5847880 (perbaikan website)

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan_balita`
--

CREATE TABLE `perkembangan_balita` (
<<<<<<< HEAD
  `kode_balita` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `bb_balita` int(3) NOT NULL,
  `tb_balita` int(3) NOT NULL,
=======
  `kode_balita` int(5) NOT NULL,
  `nik` char(16) NOT NULL,
  `bb_balita` decimal(3,1) NOT NULL,
  `tb_balita` decimal(4,1) NOT NULL,
>>>>>>> 5847880 (perbaikan website)
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkembangan_balita`
--

INSERT INTO `perkembangan_balita` (`kode_balita`, `nik`, `bb_balita`, `tb_balita`, `tgl_periksa`) VALUES
<<<<<<< HEAD
(1, 123123, 42, 100, '1998-01-12'),
(3, 2147483647, 5, 45, '2021-01-22'),
(4, 2147483647, 12, 46, '2021-01-22'),
(3, 2147483647, 12, 47, '2021-01-22');
=======
(20, '3604221710870003', '5.4', '56.0', '2021-01-17'),
(21, '3604221308880006', '13.0', '91.0', '2021-01-17'),
(22, '3604220401850001', '6.4', '69.0', '2021-01-17'),
(23, '3604220401850001', '5.4', '56.0', '2021-01-17'),
(25, '3604220611750003', '8.0', '64.0', '2021-01-17'),
(26, '3604221609670001', '10.0', '75.0', '2021-01-17'),
(27, '3604221403900004', '13.0', '90.0', '2021-01-17'),
(28, '3604222503750002', '11.0', '80.0', '2021-01-17'),
(29, '3604222402920005', '6.5', '60.0', '2021-01-17'),
(30, '3604222709910004', '8.4', '66.0', '2021-01-17');
>>>>>>> 5847880 (perbaikan website)

-- --------------------------------------------------------

--
-- Table structure for table `phbs`
--

CREATE TABLE `phbs` (
<<<<<<< HEAD
  `kode_phbs` int(11) NOT NULL,
=======
  `kode_phbs` int(3) NOT NULL,
  `nik` char(16) NOT NULL,
>>>>>>> 5847880 (perbaikan website)
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

<<<<<<< HEAD
INSERT INTO `phbs` (`kode_phbs`, `judul_berita`, `jenis_berita`, `tempat_dibuat`, `tgl_dibuat`, `deskripsi_berita`, `penulis_berita`, `editor_berita`, `penerbit`, `gambar`) VALUES
(1, 'Imunisasi Sejak Dini', 'Imunisasi', 'Bekasi', '2021-01-14', 'Istilah vaksinasi dan imunisasi tengah ramai diperbincangkan masyarakat. Keduanya sama-sama dilakukan dengna tujuan memberi perlindungan tubuh dari penyakit tertentu.\r\n\r\nMeski banyak pakar mengungkapkan bahwa keduanya memiliki pengertian yang sama, tapi tidak dengan penyataan CDC.\r\n\r\n\r\nMenurut Centers for Disease Control and Prevention (CDC) vaksinasi adalah tindakan memperkenalkan vaksin ke dalam tubuh untuk menciptakan kekebalan (sistem imun) terhadap penyakit tertentu.\r\n\r\nDalam proses vaksinasi, vaksin biasanya diberikan melalui jarum suntik, namun beberapa bisa diberikan melalui mulut atau disemprotkan ke dalam hidung.\r\n\r\nSedangkan definisi imunisasi adalah suatu proses menjadikan seseorang kebal atau terlindungi sepenuhnya dari penyakit melalui tindakan vaksinasi.\r\n\r\nKedua definisi yang hampir serupa ini, akhirnya sering digunakan bergantian. Padahal seseorang yang mendapat suntikkan vaksin belum tentu ia diimunisasi.\r\n\r\nSaat seseorang divaksinasi bukan berarti ia benar-benar terlindungi dari suatu penyakit tertentu, karena ada banyak faktor yang memengaruhi sistem kekebalan dengan vaksin bisa bekerja.\"\"\"\"\"\"', 'Risna Halidi', 'Dini Afrianti Efendi', 'Suara', 'img/gmb/b1.jpg');
=======
INSERT INTO `phbs` (`kode_phbs`, `nik`, `judul_berita`, `jenis_berita`, `tempat_dibuat`, `tgl_dibuat`, `deskripsi_berita`, `penulis_berita`, `editor_berita`, `penerbit`, `gambar`) VALUES
(3, '0', ' Pentingkah Memberi Suplemen Vitamin D untuk Bayi?', 'Kesehatan Bayi', 'Kompas', '2021-01-24', '“Kekurangan vitamin D bisa menyebabkan penyakit tulang rapuh yang disebut rakhitis,” kata Liermann. Vitamin D membantu tubuh menyerap kalsium untuk membentuk dan memperkuat tulang. Tanpa vitamin D, seorang anak lebih rentan mengalami patah tulang dan masalah pertumbuhan. Tubuh juga membutuhkan vitamin D untuk perkembangan otak dan kesehatan sistem kekebalan tubuh.\r\nIbu yang mengonsumsi cukup vitamin D mampu menghasilkan ASI dengan kandungan vitamin D yang memadai untuk kebutuhan bayi.', 'Ariska Puspita Anggraini', 'Ariska Puspita Anggraini', 'Kompas', 'img/gmb/susu.jpg');
>>>>>>> 5847880 (perbaikan website)

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` char(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `pekerjaan` varchar(10) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `akses` enum('user','admin') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `agama`, `pekerjaan`, `nama_suami`, `akses`, `username`, `password`) VALUES
('1020302948', 'Testing', 'testing', '2021-01-25', 'Testing', 'Testing', 'Testing', 'Testing', 'Testing', 'user', 'testing', 'ae2b1fca515949e5d54fb22b8ed95575'),
('12345', 'Regina Devi Tarigan', 'Medan', '1999-05-10', 'Jl. RS Fatmawati No. 1', '081281567751', 'Kristen', 'Mahasiswa', 'Robert Downey Juniot', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('3604220401850001', 'elis', 'serang', '2020-08-17', 'kalobar', '082271432281', 'islam', 'wirausaha', 'suprallah', 'user', 'zahra', 'd41d8cd98f00b204e9800998ecf8427e'),
('3604220611750003', 'ika', 'Serang', '1989-11-06', 'pasir k', '087781241345', 'Islam', 'petani', 'rohim', 'user', 'nazla', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604221308880006', 'Surtini', 'Jakarta', '1990-08-13', 'kp pagedongan', '08125711963', 'Islam', 'wirausaha', 'bayu', 'user', 'ibrahim', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604221403900004', 'esih', 'Serang', '1997-03-14', 'pagedong I', '081277481212', 'Islam', 'ibu rumah ', 'agus', 'user', 'rafa', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604221609670001', 'meisy', 'Serang', '1987-09-16', 'kalabor', '087712413512', 'Islam', 'petani', 'samanudin', 'user', 'luafi', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604221710870003', 'nurwahida', 'Serang', '1993-10-17', 'kp pagedongan', '082264712430', 'Islam', 'ibu rumah ', 'supandi', 'user', 'salsa', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604222402920005', 'Kaesih', 'Serang', '1986-02-24', 'kalobar', '082314751182', 'Islam', 'ibu rumah ', 'rahmat', 'user', 'dewi', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604222503750002', 'rokayah', 'bekasi', '1987-03-25', 'kalabor', '087781184523', 'Islam', 'petani', 'mandala', 'user', 'alwi', '827ccb0eea8a706c4c34a16891f84e7b'),
('3604222709910004', 'Siti', 'Jakarta', '1995-09-27', 'pagedongan', '081341551881', 'Islam', 'ibu rumah ', 'Enoh', 'user', 'fenia', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kode_admin`);

--
=======
>>>>>>> 5847880 (perbaikan website)
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`kode_balita`),
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kode_jadwal`);

--
<<<<<<< HEAD
=======
-- Indexes for table `perkembangan_balita`
--
ALTER TABLE `perkembangan_balita`
  ADD KEY `fk_kode_balita` (`kode_balita`);

--
>>>>>>> 5847880 (perbaikan website)
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
<<<<<<< HEAD
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kode_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `kode_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `kode_balita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
>>>>>>> 5847880 (perbaikan website)

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
<<<<<<< HEAD
  MODIFY `kode_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
=======
  MODIFY `kode_jadwal` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> 5847880 (perbaikan website)

--
-- AUTO_INCREMENT for table `phbs`
--
ALTER TABLE `phbs`
<<<<<<< HEAD
  MODIFY `kode_phbs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
=======
  MODIFY `kode_phbs` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
>>>>>>> 5847880 (perbaikan website)

--
-- Constraints for dumped tables
--

--
<<<<<<< HEAD
-- Constraints for table `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
-- Constraints for table `perkembangan_balita`
--
ALTER TABLE `perkembangan_balita`
  ADD CONSTRAINT `fk_kode_balita` FOREIGN KEY (`kode_balita`) REFERENCES `balita` (`kode_balita`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> 5847880 (perbaikan website)
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
