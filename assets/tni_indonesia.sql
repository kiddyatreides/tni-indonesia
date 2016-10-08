-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 12:42 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tni_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kodam`
--

CREATE TABLE IF NOT EXISTS `tb_kodam` (
  `id_kodam` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `long` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kodam`
--

INSERT INTO `tb_kodam` (`id_kodam`, `nama`, `alamat`, `lat`, `long`, `logo`) VALUES
(1, 'Aisyah', 'bekasi', '-6.235841', '106.974615', 'mantap'),
(2, 'kiddy', 'bali', '-8.303530', '115.090558', 'yuhuy'),
(3, 'kimhin', 'malang', '-7.969119', '112.631780', 'hihi'),
(4, 'farhan', 'bandung', '-6.915033', '107.605732', 'yeay'),
(5, 'daffa', 'lombok', '-8.627823', '116.326504', 'yayaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permintaan`
--

CREATE TABLE IF NOT EXISTS `tb_permintaan` (
  `id_kodam` int(5) NOT NULL,
  `id_permintaan` int(5) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1 pending 2 selesai'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_permintaan`
--

INSERT INTO `tb_permintaan` (`id_kodam`, `id_permintaan`, `datetime`, `status`) VALUES
(1, 10, '2016-10-08 10:33:54', 1),
(2, 11, '2016-10-08 10:35:42', 1),
(3, 12, '2016-10-08 10:36:39', 2),
(3, 14, '2016-10-08 10:37:01', 1),
(4, 15, '2016-10-08 10:37:24', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kodam`
--
ALTER TABLE `tb_kodam`
  ADD PRIMARY KEY (`id_kodam`);

--
-- Indexes for table `tb_permintaan`
--
ALTER TABLE `tb_permintaan`
  ADD PRIMARY KEY (`id_kodam`,`id_permintaan`,`datetime`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kodam`
--
ALTER TABLE `tb_kodam`
  MODIFY `id_kodam` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_permintaan`
--
ALTER TABLE `tb_permintaan`
  MODIFY `id_kodam` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
