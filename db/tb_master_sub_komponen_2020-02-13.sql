-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 13, 2020 at 03:11 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_sub_komponen`
--

CREATE TABLE `tb_master_sub_komponen` (
  `id` int(11) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `sub_key` varchar(100) DEFAULT NULL,
  `komponen_spam` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master_sub_komponen`
--

INSERT INTO `tb_master_sub_komponen` (`id`, `key`, `sub_key`, `komponen_spam`, `created_at`, `updated_at`) VALUES
(1, 'air_minum', 'bangunan_pengambilan', 'Bangunan Pengambilan', '2020-01-19 16:44:40', '2020-01-19 16:44:40'),
(2, 'air_minum', 'mekanikal_dan_elektrikal', 'Mekanikal & Elektrikal', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(3, 'air_minum', 'pipa_transmisi', 'Pipa Transmisi', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(4, 'air_minum', 'bangunan_penunjang', 'Bangunan Penunjang', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(5, 'air_minum', 'pra_pengolahan', 'Pra Pengolahan', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(6, 'air_minum', 'instalasi_pengolahan', 'Instalasi Pengolahan', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(7, 'air_minum', 'keandalan_ipa', 'Keandalan IPA', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(8, 'air_minum', 'pengolahan_lumpur', 'Pengolahan Lumpur', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(9, 'air_minum', 'reservoir', 'Reservoir', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(12, 'air_minum', 'pipa_distribusi_utama', 'Pipa Distribusi Utama', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(13, 'air_minum', 'pipa_distribusi_sekunder', 'Pipa Distribusi Sekunder', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(14, 'air_minum', 'pipa_distribusi_tersier', 'Pipa Distribusi Tersier', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(15, 'air_minum', 'crorssing_jaringan', 'Crossing Jaringan', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(16, 'air_minum', 'perlengkapan_jaringan', 'Perlengkapan Jaringan', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(17, 'air_minum', 'pipa_retikulasi', 'Pipa Retikulasi', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(18, 'air_minum', 'sambungan_pelanggan', 'Sambungan Pelanggan', '2020-01-19 16:47:40', '2020-01-19 16:47:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_master_sub_komponen`
--
ALTER TABLE `tb_master_sub_komponen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_master_sub_komponen`
--
ALTER TABLE `tb_master_sub_komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

