-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 12:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` bigint(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_stock` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jumlah_stock`) VALUES
(1, 'mie sedaap', 100),
(2, 'Pepsodent', 500),
(3, 'bimoli', 155);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `no_telp`) VALUES
(11, 'Dimas Fahmi Rizalqi', 'jakarta', 86453421890);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id_keuangan` bigint(20) NOT NULL,
  `id_penjualan` bigint(20) NOT NULL,
  `id_pembelian` bigint(20) NOT NULL,
  `uang_masuk` double DEFAULT NULL,
  `uang_keluar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id_keuangan`, `id_penjualan`, `id_pembelian`, `uang_masuk`, `uang_keluar`) VALUES
(111111, 1111, 11111, 14000, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_supplier`
--

CREATE TABLE `pembelian_supplier` (
  `id_pembelian` bigint(20) NOT NULL,
  `id_supplier` bigint(20) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `total_biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_supplier`
--

INSERT INTO `pembelian_supplier` (`id_pembelian`, `id_supplier`, `id_barang`, `jumlah`, `total_biaya`) VALUES
(11111, 100, 2, 30, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_konsumen`
--

CREATE TABLE `penjualan_konsumen` (
  `id_penjualan` bigint(20) NOT NULL,
  `id_karyawan` bigint(20) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `harga` float NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan_konsumen`
--

INSERT INTO `penjualan_konsumen` (`id_penjualan`, `id_karyawan`, `id_barang`, `jumlah`, `harga`, `total`) VALUES
(1111, 11, 1, 2, 7000, 14000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` bigint(20) NOT NULL,
  `id_barang` bigint(20) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `no_telp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `id_barang`, `nama_perusahaan`, `nama_barang`, `no_telp`) VALUES
(100, 2, 'wingsfood', 'mie sedaap', 84325134);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id_keuangan`),
  ADD UNIQUE KEY `uang_masuk` (`uang_masuk`),
  ADD UNIQUE KEY `uang_keluar` (`uang_keluar`),
  ADD KEY `id_penjualan` (`id_penjualan`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `pembelian_supplier`
--
ALTER TABLE `pembelian_supplier`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD UNIQUE KEY `total_biaya` (`total_biaya`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `penjualan_konsumen`
--
ALTER TABLE `penjualan_konsumen`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD UNIQUE KEY `total` (`total`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `keuangan_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian_supplier` (`id_pembelian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keuangan_ibfk_2` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan_konsumen` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian_supplier`
--
ALTER TABLE `pembelian_supplier`
  ADD CONSTRAINT `pembelian_supplier_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_supplier_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan_konsumen`
--
ALTER TABLE `penjualan_konsumen`
  ADD CONSTRAINT `penjualan_konsumen_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_konsumen_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
