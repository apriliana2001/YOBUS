-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 02:47 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yobus`
--

-- --------------------------------------------------------

--
-- Table structure for table `keberangkatan`
--

CREATE TABLE `keberangkatan` (
  `id_berangkat` int(20) NOT NULL,
  `nama_bus` varchar(20) NOT NULL,
  `jadwal` varchar(10) NOT NULL,
  `rute` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keberangkatan`
--

INSERT INTO `keberangkatan` (`id_berangkat`, `nama_bus`, `jadwal`, `rute`, `kelas`, `harga`) VALUES
(1, 'Dewi Sri', '16:00 WIB', 'Bekasi - Semarang', 'Ekonomi', '270000'),
(2, 'Gatot Kaca', '17:00 WIB', 'Bekasi - Bali', 'Ekonomi AC', '450000'),
(3, 'Sinar Jaya', '18:30 WIB', 'Bekasi - Purwokerto', 'Ekonomi', '300000'),
(4, 'Solo Trans', '19:00 WIB', 'Bekasi - Solo', 'Patas', '230000'),
(5, 'Lorena', '19:30 WIB', 'Jakarta - Surabaya', 'Patas', '410000'),
(6, 'Sunda Bus', '20:00 WIB', 'Jakarta - Bandung', 'Ekonomi AC', '170000'),
(7, 'Betawi Jaya', '16:00 WIB', 'Bandung - Jakarta', 'Ekonomi AC', '190000'),
(8, 'Bengawan Bus', '17:00 WIB', 'Solo - Yogya', 'Ekonomi', '130000');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(5) NOT NULL,
  `id_berangkat` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `usia` int(20) NOT NULL,
  `telp` int(30) NOT NULL,
  `tgl_pergi` date NOT NULL,
  `konfirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_berangkat`, `nama`, `nik`, `usia`, `telp`, `tgl_pergi`, `konfirm`) VALUES
(1, 3, 'Leo', '6726473', 20, 867644535, '2022-07-01', 0),
(12, 1, 'Ya Mawar Lah', '5347111', 18, 888888888, '2022-07-03', 0),
(13, 2, 'Budi ', '7654125', 20, 8111115, '2022-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_regis` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_regis`, `username`, `pw`) VALUES
(1, 'Mawar', '123'),
(2, 'budi', 'budi'),
(3, 'budi', 'budi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(4, 'pemweb', 'c37b32ab64603f42913a126f9b0bf370', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
  ADD PRIMARY KEY (`id_berangkat`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idberangkat` (`id_berangkat`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_regis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keberangkatan`
--
ALTER TABLE `keberangkatan`
  MODIFY `id_berangkat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_regis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `idberangkat` FOREIGN KEY (`id_berangkat`) REFERENCES `keberangkatan` (`id_berangkat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
