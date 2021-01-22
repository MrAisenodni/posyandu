-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2021 at 02:38 AM
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
