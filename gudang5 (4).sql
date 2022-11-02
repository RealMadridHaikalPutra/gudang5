-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 08:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudang5`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `sku` varchar(200) NOT NULL,
  `idkeluar` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `picker` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`iduser`, `username`, `password`, `role`) VALUES
(1, 'admin$mirorim', 'admin123$mirorim', 'admin'),
(3, 'toko$mirorim', 'toko123$mirorim', 'toko'),
(4, 'pre$mirorim', 'pre123$mirorim', 'pre'),
(5, 'gudang$mirorim', 'gudang123$mirorim', 'gudang');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `sku` varchar(200) NOT NULL,
  `idmasuk` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `worker` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reject` int(11) NOT NULL,
  `rak` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`sku`, `idmasuk`, `date`, `worker`, `nama`, `quantity`, `reject`, `rak`, `status`) VALUES
('2j1', 39, '2022-10-26 07:01:07', 'Ayung', '', 10, 0, 1, 'Masuk'),
('2j1', 40, '2022-10-27 07:36:19', 'Real', 'speaker', 200, 0, 0, 'Masuk');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idtoko` int(11) NOT NULL,
  `cek` varchar(200) NOT NULL,
  `picker` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kirimke` varchar(200) NOT NULL,
  `sku` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idtoko`, `cek`, `picker`, `nama`, `kirimke`, `sku`, `quantity`, `kurir`, `note`, `status`) VALUES
(13, 'Sudah', 'Ratih', 'Speaker', 'Gudang', '2j1', 200, 'SiCepat', '', 'Refill'),
(14, 'Sudah', 'Robby', 'Speaker', 'Gudang', '2b1', 300, 'SiCepat', '', 'Refill');

-- --------------------------------------------------------

--
-- Table structure for table `preparation`
--

CREATE TABLE `preparation` (
  `sku` varchar(200) NOT NULL,
  `skugudang` varchar(200) NOT NULL,
  `idpre` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `worker` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `note` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `preparation`
--

INSERT INTO `preparation` (`sku`, `skugudang`, `idpre`, `date`, `worker`, `nama`, `quantity`, `status`, `note`) VALUES
('dadADS', 'dsds', 12, '2022-10-31 07:46:00', 'asdadda', 'SsDs', 2222, 'On Progress', ''),
('D323', 'HJBKSd', 13, '2022-10-31 07:46:00', 'SDdDS', 'EWWWQQE', 3333, 'On Progress', '');

-- --------------------------------------------------------

--
-- Table structure for table `reqpre`
--

CREATE TABLE `reqpre` (
  `idspecial` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `worker` varchar(200) NOT NULL,
  `sku` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `status` varchar(200) NOT NULL,
  `cek` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `idspecial` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kirimke` varchar(200) NOT NULL,
  `sku` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `kurir` varchar(200) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `status` varchar(200) NOT NULL,
  `cek` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `idbarang` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `sku` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rak` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`idbarang`, `nama`, `sku`, `quantity`, `rak`) VALUES
(6, 'Speaker', '2J1', 2210, '1'),
(7, 'WEe', 'E   we', 2, 'WQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`idkeluar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`idmasuk`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idtoko`);

--
-- Indexes for table `preparation`
--
ALTER TABLE `preparation`
  ADD PRIMARY KEY (`idpre`);

--
-- Indexes for table `reqpre`
--
ALTER TABLE `reqpre`
  ADD PRIMARY KEY (`idspecial`);

--
-- Indexes for table `special`
--
ALTER TABLE `special`
  ADD PRIMARY KEY (`idspecial`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`idbarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `idkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `idmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idtoko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `preparation`
--
ALTER TABLE `preparation`
  MODIFY `idpre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reqpre`
--
ALTER TABLE `reqpre`
  MODIFY `idspecial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `special`
--
ALTER TABLE `special`
  MODIFY `idspecial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
