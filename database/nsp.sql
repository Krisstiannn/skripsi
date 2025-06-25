-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2025 at 03:38 PM
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
-- Database: `nsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(15) NOT NULL,
  `id_karyawan` int(15) NOT NULL,
  `nip_karyawan` int(30) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(15) NOT NULL,
  `nip_karyawan` int(30) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `posisi_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan`
--

CREATE TABLE `perbaikan` (
  `id_perbaikan` int(11) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keluhan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(15) NOT NULL,
  `no_wo` int(30) NOT NULL,
  `nama_pelanggan` varchar(200) NOT NULL,
  `alamat_pelanggan` varchar(200) NOT NULL,
  `status` enum('selesai','kendala') NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `barang1` varchar(255) NOT NULL,
  `barang2` varchar(255) NOT NULL,
  `barang3` varchar(255) NOT NULL,
  `jumlah1` int(15) NOT NULL,
  `jumlah2` int(15) NOT NULL,
  `jumlah3` int(15) NOT NULL,
  `foto_odp` varchar(255) NOT NULL,
  `foto_redaman` varchar(255) NOT NULL,
  `foto_modem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `peran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wo`
--

CREATE TABLE `wo` (
  `id` int(15) NOT NULL,
  `id_pekerjaan` int(30) NOT NULL,
  `id_karyawan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip_karyawan` (`nip_karyawan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

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
-- Indexes for table `perbaikan`
--
ALTER TABLE `perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `wo`
--
ALTER TABLE `wo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pekerjaan` (`id_pekerjaan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perbaikan`
--
ALTER TABLE `perbaikan`
  MODIFY `id_perbaikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wo`
--
ALTER TABLE `wo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wo`
--
ALTER TABLE `wo`
  ADD CONSTRAINT `wo_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `wo_ibfk_2` FOREIGN KEY (`id_pekerjaan`) REFERENCES `psb` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
