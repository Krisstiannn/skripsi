-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 01:13 AM
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

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_karyawan`, `nip_karyawan`, `nama_karyawan`, `tanggal`, `jam_masuk`, `jam_keluar`) VALUES
(40, 1, 16301, 'Kristian', '2025-02-27', '21:45:39', '21:45:48'),
(41, 1, 16301, 'Kristian', '2025-02-27', '21:45:43', '21:45:52'),
(42, 1, 16301, 'Kristian', '2025-02-27', '22:10:08', '22:10:25'),
(43, 1, 16301, 'Kristian', '2025-02-27', '22:10:14', '22:10:28'),
(44, 1, 16301, 'Kristian', '2025-02-27', '22:21:10', '22:21:15'),
(47, 1, 16301, 'Kristian', '2025-05-02', '23:42:06', '23:42:11'),
(49, 2, 16302, 'Chen', '2025-05-02', '23:44:14', '23:52:50');

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
(6, '100', 'Visual Fault Locator', 'Baru', 2, 'vfl.jpg', '2023-01-31'),
(7, '101', 'Optical Time Domain Reflectometer', 'Baru', 1, 'otdr.jpg', '2021-07-02'),
(8, '102', 'Optical Power Meter', 'Baru', 2, 'opm.jpg', '2023-06-20'),
(9, '103', 'One Click Cleaner', 'Baru', 1, 'one click.jpg', '2023-01-15'),
(10, '104', 'Cleaver', 'Baru', 2, 'cleaver.jpg', '2024-06-03'),
(11, '105', 'Stripper Dropwire', 'Baru', 2, 'stripper dorpwire.png', '2023-06-14'),
(12, '106', 'Stripper', 'Baru', 2, 'stripper.jpg', '2024-01-29'),
(13, '107', 'Crimping Tool', 'Baru', 3, 'krimping.jpeg', '2024-02-06'),
(14, '108', 'Fusion Splicer', 'Baru', 2, 'splicer.jpg', '2023-06-13'),
(15, '109', 'Tangga Teleskopik 5M', 'Baru', 3, 'tangga.jpg', '2023-01-31');

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

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nip_karyawan`, `nama_karyawan`, `posisi_karyawan`) VALUES
(1, 16301, 'Kristian', 'IT'),
(2, 16302, 'Chen', 'Teknisi'),
(3, 16203, 'Arya', 'Teknisi'),
(4, 16303, 'Laga', 'Teknisi'),
(6, 16304, 'Nissa', 'IT'),
(7, 16305, 'Lana', 'IT'),
(8, 16306, 'Budi', 'Supervisior'),
(9, 16307, 'Syahril', 'Supervisior'),
(10, 16308, 'Rama', 'Supervisior'),
(11, 16309, 'Aulia', 'Admin');

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

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `kode_barang`, `gambar_barang`, `nama_barang`, `jumlah_awal`, `jumlah_sisa`, `tanggal_masuk`) VALUES
(4, 1270, 'konektor.jpg', 'Connector SC UPC', '50 Pcs', '50', '2025-02-01'),
(5, 1271, 'pathcore.jpeg', 'Pathcore SC UPC 30M', '5 Pcs', '3', '2025-02-04'),
(6, 1272, 'DC.jpg', 'Drop Wire FiberOptic 1 Core', '1000M', '850', '2025-01-01'),
(7, 1273, 'kabel fig 8.jpg', 'Kabel Fig 8 4 Core', '500M', '', '2025-01-02'),
(8, 1274, 'modem.jpg', 'Modem ZTE XPON', '10Pcs', '9', '2025-01-16'),
(9, 1275, 'spl ratio.jpg', 'SPL Ratio 1:2', '5 Pcs', '', '2025-02-08'),
(10, 1276, 'sleeve besar.jpg', 'Sleeve Protection Besar', '100Pcs', '', '2025-01-04'),
(11, 1277, 'ODP.jpeg', 'ODP 1:8', '5 Pcs', '', '2025-02-02'),
(12, 1278, 'Closure.jpeg', 'Closure Sambung 4 Cap', '5 Pcs', '', '2025-01-08'),
(13, 1279, 'Sleeve Kecil.jpeg', 'Sleeve Protection Kecil', '100Pcs', '', '2025-02-04');

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

--
-- Dumping data for table `psb`
--

INSERT INTO `psb` (`id`, `nama_pelanggan`, `alamat_pelanggan`, `wa_pelanggan`, `rumah_pelanggan`, `ktp_pelanggan`, `paket_internet`) VALUES
(1, 'Xaviera', 'Kore', 812880022, 'Oline JKT48.jpg', 'oline.jpg', '10 Mbps'),
(2, 'Kristian', 'Mitra bakti Jalur J', 2147483647, 'oline jkt48.jfif', 'Screenshot (36).png', '10 Mbps'),
(3, 'Nisa', 'Jl Banjar', 2147483647, 'pathcore.jpeg', 'meja.jpg', '10 Mbps'),
(4, 'Udin', 'Tamban Km 12', 812765387, 'Capture.JPG', 'Screenshot (37).png', '100 Mbps'),
(5, 'Bahrul', 'Mitra bakti Jalur C', 812765387, 'Oline JKT48.jpeg', 'Screenshot (61).png', '10 Mbps');

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

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `no_wo`, `nama_pelanggan`, `alamat_pelanggan`, `status`, `keterangan`, `barang1`, `barang2`, `barang3`, `jumlah1`, `jumlah2`, `jumlah3`, `foto_odp`, `foto_redaman`, `foto_modem`) VALUES
(5, 1, 'Xaviera', 'Kore', 'selesai', 'Selesai pemasangan dan edukasi pelanggan', 'Drop Wire FiberOptic 1 Core', 'Pathcore SC UPC 30M', 'Modem ZTE XPON', 150, 2, 1, 'Oline JKT48.jpeg', 'Screenshot (36).png', 'oline jkt48.jfif'),
(6, 2, 'Kristian', 'Mitra bakti Jalur J', 'kendala', 'Rumah Kosong', 'Connector SC UPC', 'Connector SC UPC', 'Connector SC UPC', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(15) NOT NULL,
  `username` int(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `peran` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `peran`) VALUES
(1, 16301, 'Kristian', 'admin'),
(2, 16302, 'Chen', 'user'),
(3, 16203, 'Arya', 'user'),
(4, 16304, 'Nissa', 'user'),
(5, 16305, 'Lana', 'user'),
(6, 16306, 'Budi', 'user'),
(7, 16307, 'Syahril', 'user'),
(8, 16308, 'Rama', 'user'),
(9, 16309, 'Aulia', 'user');

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
-- Dumping data for table `wo`
--

INSERT INTO `wo` (`id`, `id_pekerjaan`, `id_karyawan`) VALUES
(7, 1, 2),
(8, 2, 2),
(9, 3, 3),
(13, 4, 3),
(14, 5, 2);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `psb`
--
ALTER TABLE `psb`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wo`
--
ALTER TABLE `wo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`username`) REFERENCES `karyawan` (`nip_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
