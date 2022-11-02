-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.epizy.com
-- Generation Time: Nov 02, 2022 at 03:50 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32867233_gudang5`
--

-- --------------------------------------------------------

--
-- Table structure for table `preparation`
--

CREATE TABLE `preparation` (
  `sku` varchar(200) NOT NULL,
  `skugudang` varchar(200) NOT NULL,
  `idpre` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `balik` datetime NOT NULL,
  `worker` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `note` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preparation`
--

INSERT INTO `preparation` (`sku`, `skugudang`, `idpre`, `date`, `balik`, `worker`, `nama`, `quantity`, `status`, `note`) VALUES
('7d1', 't1b1', 14, '2022-10-28 15:41:00', '2022-10-30 15:11:00', 'ayung', 'Speaker Tweter 10 w', 49, 'Done', ''),
('3c2', 'U1A16', 15, '2022-10-28 15:42:00', '2022-10-30 15:10:00', 'Ayung', 'Woofer Pam8403 4INCH', 96, 'Done', ''),
('3c2', 'u1a16', 16, '2022-10-28 15:42:00', '0000-00-00 00:00:00', 'Ayung ', 'Woofer Pam8403 4INCH', 96, 'Done', ''),
('3k4', 's1a6', 17, '2022-10-28 15:50:00', '0000-00-00 00:00:00', 'Rido', 'Speaker Tweeter HiFi - Tanpa Frame', 25, 'Done', ''),
('2i3', 'K1D1', 18, '2022-10-31 09:22:00', '0000-00-00 00:00:00', 'ilham', 'Kit TWS', 100, 'Done', ''),
('8a11', 'i1b6', 19, '2022-10-31 09:25:00', '0000-00-00 00:00:00', 'Salsa', 'Elco - 220uf 100v', 600, 'Done', ''),
('nosku5', 'g-6', 20, '2022-10-31 11:04:00', '2022-10-31 13:04:00', 'Rido', 'Speaker 5,25', 32, 'Done', ''),
('4h1', 'r1c1', 21, '2022-11-01 14:19:00', '2022-11-01 15:20:00', 'rido', 'Speaker Mini Bluetooth Loudspeaker 2 Ohm - Silver 2 ohm', 272, 'Done', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preparation`
--
ALTER TABLE `preparation`
  ADD PRIMARY KEY (`idpre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `preparation`
--
ALTER TABLE `preparation`
  MODIFY `idpre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
