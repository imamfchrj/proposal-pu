-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 12, 2020 at 04:34 AM
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
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `prov_id` int(11) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `prov_id`, `nama`, `created_at`) VALUES
(1, 11, 'Aceh (NAD)', '2020-01-12 00:02:59'),
(2, 12, 'Sumatera Utara', '2020-01-12 00:02:59'),
(3, 13, 'Sumatera Barat', '2020-01-12 00:02:59'),
(4, 14, 'Riau', '2020-01-12 00:02:59'),
(5, 15, 'Jambi', '2020-01-12 00:03:00'),
(6, 16, 'Sumatera Selatan', '2020-01-12 00:03:00'),
(7, 17, 'Bengkulu', '2020-01-12 00:03:00'),
(8, 18, 'Lampung', '2020-01-12 00:03:00'),
(9, 19, 'Kepulauan Bangka Belitung', '2020-01-12 00:03:00'),
(10, 21, 'Kepulauan Riau', '2020-01-12 00:03:00'),
(11, 31, 'DKI Jakarta', '2020-01-12 00:03:00'),
(12, 32, 'Jawa Barat', '2020-01-12 00:03:00'),
(13, 33, 'Jawa Tengah', '2020-01-12 00:03:00'),
(14, 34, 'DI Yogyakarta', '2020-01-12 00:03:00'),
(15, 35, 'Jawa Timur', '2020-01-12 00:03:00'),
(16, 36, 'Banten', '2020-01-12 00:03:01'),
(17, 51, 'Bali', '2020-01-12 00:03:01'),
(18, 52, 'Nusa Tenggara Barat (NTB)', '2020-01-12 00:03:01'),
(19, 53, 'Nusa Tenggara Timur (NTT)', '2020-01-12 00:03:01'),
(20, 61, 'Kalimantan Barat', '2020-01-12 00:03:01'),
(21, 62, 'Kalimantan Tengah', '2020-01-12 00:03:01'),
(22, 63, 'Kalimantan Selatan', '2020-01-12 00:03:01'),
(23, 64, 'Kalimantan Timur', '2020-01-12 00:03:01'),
(24, 65, 'Kalimantan Utara', '2020-01-12 00:03:01'),
(25, 71, 'Sulawesi Utara', '2020-01-12 00:03:01'),
(26, 72, 'Sulawesi Tengah', '2020-01-12 00:03:01'),
(27, 73, 'Sulawesi Selatan', '2020-01-12 00:03:01'),
(28, 74, 'Sulawesi Tenggara', '2020-01-12 00:03:02'),
(29, 75, 'Gorontalo', '2020-01-12 00:03:02'),
(30, 76, 'Sulawesi Barat', '2020-01-12 00:03:02'),
(31, 81, 'Maluku', '2020-01-12 00:03:02'),
(32, 82, 'Maluku Utara', '2020-01-12 00:03:02'),
(33, 91, 'Papua', '2020-01-12 00:03:02'),
(34, 92, 'Papua Barat', '2020-01-12 00:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

