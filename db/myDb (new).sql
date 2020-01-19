-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 19, 2020 at 11:59 AM
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
-- Table structure for table `tb_franco_provinsi`
--

CREATE TABLE `tb_franco_provinsi` (
  `id` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `value_franco` decimal(30,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `year` int(11) NOT NULL DEFAULT '2020'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_group_komponen`
--

CREATE TABLE `tb_group_komponen` (
  `id` int(11) NOT NULL,
  `key_group` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `sub_key` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_group_komponen`
--

INSERT INTO `tb_group_komponen` (`id`, `key_group`, `group_name`, `sub_key`, `name`) VALUES
(1, 'air_minum', 'Air Minum', 'unit_distribusi', 'Unit Distribusi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_index_kemahalan`
--

CREATE TABLE `tb_index_kemahalan` (
  `id` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `index_kemahalan_decimal` decimal(30,0) NOT NULL,
  `index_kemahalan_percent` decimal(30,0) NOT NULL,
  `tahun` int(11) NOT NULL DEFAULT '2020',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_index_kemahalan_kabupaten`
--

CREATE TABLE `tb_index_kemahalan_kabupaten` (
  `id` int(11) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `index_kemahalan_decimal` decimal(30,0) NOT NULL,
  `index_kemahalan_percent` decimal(30,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 'air_minum', 'unit_distribusi', 'Unit Distribusi', 'Pipa PVC  S.10 Æ   50 mm', 'unit', '23', '1', 2020, '2020-01-11 16:45:24', 1),
(2, 'air_minum', 'unit_distribusi', 'Unit Distribusi', 'Pipa PVC  S.10 Æ   75 mm', 'm', '46', '1', 2020, '2020-01-18 16:41:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id` int(11) NOT NULL,
  `key_proposal` varchar(100) NOT NULL,
  `nama_proposal` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_approv` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal_quisioner`
--

CREATE TABLE `tb_proposal_quisioner` (
  `id` int(11) NOT NULL,
  `proposal_id` int(11) NOT NULL,
  `key_proposal` varchar(100) NOT NULL,
  `key_question` varchar(100) NOT NULL,
  `verifikasi` varchar(100) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `indikator` varchar(100) NOT NULL,
  `id_group_komponen` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id`, `nama`, `created_at`) VALUES
(11, 'Aceh', '2020-01-11 16:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sumber_air`
--

CREATE TABLE `tb_sumber_air` (
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_sumber_air`
--

INSERT INTO `tb_sumber_air` (`name`) VALUES
('Air Hujan'),
('Air Laut'),
('Air Permukaan'),
('Air Tanah'),
('Mata Air');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `hp` char(15) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `password` text NOT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `hp`, `status`, `password`, `user_type`, `created_at`) VALUES
(1, 'Support PU', 'support@proposalpu.com', '081316660000', 1, 'WKWK9DA695DD170AF8422E2C74C650B868E0', 0, '2020-01-18 17:03:54'),
(2, 'Support PU', 'kodokngorek@gmail.com', '081316660000', 1, 'WKWKF57E5784FE84F1E231D8CABE675C1878', 1, '2020-01-18 17:04:24'),
(3, 'Herman', 'herman@gmail.com', '08131666000', 1, 'WKWKF3C1D783F9E88A8D373C6746A594CDEE', 0, '2020-01-18 17:06:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_group_komponen`
--
ALTER TABLE `tb_group_komponen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_index_kemahalan`
--
ALTER TABLE `tb_index_kemahalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_index_kemahalan_kabupaten`
--
ALTER TABLE `tb_index_kemahalan_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_komponen_kegiatan`
--
ALTER TABLE `tb_komponen_kegiatan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tb_komponen_kegiatan` ADD FULLTEXT KEY `key` (`key`);
ALTER TABLE `tb_komponen_kegiatan` ADD FULLTEXT KEY `sub_key` (`sub_key`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sumber_air`
--
ALTER TABLE `tb_sumber_air`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_group_komponen`
--
ALTER TABLE `tb_group_komponen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_index_kemahalan`
--
ALTER TABLE `tb_index_kemahalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_index_kemahalan_kabupaten`
--
ALTER TABLE `tb_index_kemahalan_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_komponen_kegiatan`
--
ALTER TABLE `tb_komponen_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

