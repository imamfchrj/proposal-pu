-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 23, 2020 at 04:11 PM
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
-- Table structure for table `tb_master_komponen`
--

CREATE TABLE `tb_master_komponen` (
  `id` int(11) NOT NULL,
  `key` varchar(100) DEFAULT NULL,
  `sub_key` varchar(100) DEFAULT NULL,
  `komponen_spam` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_master_komponen`
--

INSERT INTO `tb_master_komponen` (`id`, `key`, `sub_key`, `komponen_spam`, `created_at`, `updated_at`) VALUES
(1, 'air_minum', 'unit_air_baku', 'Unit Air Baku', '2020-01-19 16:44:40', '2020-01-19 16:44:40'),
(2, 'air_minum', 'unit_produksi', 'Unit Produksi', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(3, 'air_minum', 'unit_distribusi', 'Unit Distribusi', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(4, 'air_minum', 'unit_pelayanan', 'Unit Pelayanan', '2020-01-19 16:47:40', '2020-01-19 16:47:40'),
(5, 'air_minum', 'bangunan_penunjang', 'Bangunan Penunjang', '2020-01-19 16:47:40', '2020-01-19 16:47:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_master_komponen`
--
ALTER TABLE `tb_master_komponen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_master_komponen`
--
ALTER TABLE `tb_master_komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

