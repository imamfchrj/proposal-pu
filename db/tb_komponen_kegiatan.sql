-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 18, 2020 at 06:55 AM
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
-- Table structure for table `tb_komponen_kegiatan`
--

CREATE TABLE `tb_komponen_kegiatan` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `sub_key` varchar(100) NOT NULL,
  `komponen_spam` varchar(100) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `estimasi` decimal(30,0) NOT NULL,
  `pembagi` decimal(30,0) NOT NULL DEFAULT '1',
  `tahun` int(11) NOT NULL DEFAULT '2020',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aktif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_komponen_kegiatan`
--

INSERT INTO `tb_komponen_kegiatan` (`id`, `key`, `sub_key`, `komponen_spam`, `kegiatan`, `satuan`, `estimasi`, `pembagi`, `tahun`, `created_at`, `aktif`) VALUES
(1, 'air_minum', 'unit_distribusi', 'Unit Distribusi', 'Centrifugal pump Q=50 lt/dt, H=60 m', 'unit', '145800', '60', 2020, '2020-01-11 16:45:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_komponen_kegiatan`
--
ALTER TABLE `tb_komponen_kegiatan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tb_komponen_kegiatan` ADD FULLTEXT KEY `key` (`key`);
ALTER TABLE `tb_komponen_kegiatan` ADD FULLTEXT KEY `sub_key` (`sub_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_komponen_kegiatan`
--
ALTER TABLE `tb_komponen_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
