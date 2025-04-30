-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2025 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siatur`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(15) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kondisi_barang` varchar(255) NOT NULL,
  `jumlah_barang` int(255) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id`, `kode_barang`, `nama_barang`, `kondisi_barang`, `jumlah_barang`, `gambar_barang`, `tanggal_masuk`) VALUES
(4, '321', 'Splicer', 'Bekas', 2, 'Fujikura 62S Single Fiber Fusion Splicer Splicing Machine.jpg', '2025-01-26'),
(5, '330', 'Tangga Teleskopik 5M', 'Baru', 3, 'Tangga Teleskopik Soft Close 5_2 Mtr.jpg', '2023-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(15) NOT NULL,
  `nip_karyawan` int(50) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `posisi_karyawan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip_karyawan`, `nama_karyawan`, `posisi_karyawan`) VALUES
(1, 16301, 'Kristian', 'IT'),
(2, 16302, 'Chen', 'Teknisi'),
(3, 16303, 'Arya', 'Teknisi'),
(4, 16304, 'Laga', 'Teknisi'),
(5, 16305, 'Malik', 'Supervisior'),
(6, 16306, 'Nisa', 'Admin'),
(7, 16307, 'Ary', 'IT'),
(8, 16308, 'Lisa', 'Admin'),
(9, 16309, 'Mansur', 'IT'),
(10, 16310, 'Rudi', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `kode_barang` int(20) NOT NULL,
  `gambar_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jumlah_awal` varchar(255) NOT NULL,
  `jumlah_sisa` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_habis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `kode_barang`, `gambar_barang`, `nama_barang`, `jumlah_awal`, `jumlah_sisa`, `tanggal_masuk`, `tanggal_habis`) VALUES
(1, 1269, 'PALING LARIS Kabel FO Dropcore 1 Core Fiber Optik DropWire Optic 3.jpg', 'Drop Wire FiberOptic 1 Core', '1000M', '600M', '2025-02-15', '2025-02-28'),
(2, 1270, 'Connector SC To SC Flange ST Fiber Optic Adapter.jpg', 'Connector SC UPC', '50 Pcs', '-', '2025-02-03', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(15) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` varchar(255) NOT NULL,
  `wa_pelanggan` int(15) NOT NULL,
  `jenis_layanan` varchar(200) NOT NULL,
  `status_pelanggan` enum('AKTIF','TIDAK AKTIF') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `wa_pelanggan`, `jenis_layanan`, `status_pelanggan`) VALUES
(1, 'Bahrul', 'Mitra bakti Jalur J', 812880022, 'Internet 10 Mbps', 'AKTIF'),
(2, 'Udin', 'Tamban Km 12', 812765387, 'Internet 10 Mbps', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `psb`
--

CREATE TABLE `psb` (
  `id` int(15) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL,
  `wa_pelanggan` int(15) NOT NULL,
  `rumah_pelanggan` varchar(255) NOT NULL,
  `ktp_pelanggan` varchar(255) NOT NULL,
  `paket_internet` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `peran` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `peran`) VALUES
(1, 0, 'admin', 'admin'),
(2, 0, 'user', 'user'),
(3, 16308, 'Lisa', 'admin'),
(5, 0, 'andi', 'admin'),
(6, 0, 'admin123', 'admin'),
(8, 16310, 'rudi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip_karyawan` (`nip_karyawan`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
