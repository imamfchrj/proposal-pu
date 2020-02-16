-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 16, 2020 at 09:18 AM
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
  `sub_master_key` varchar(100) NOT NULL,
  `id_komponen` int(11) DEFAULT NULL,
  `fix_key` varchar(50) DEFAULT NULL,
  `komponen_spam` varchar(100) NOT NULL,
  `kegiatan` varchar(250) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `estimasi` float NOT NULL,
  `pembagi` float NOT NULL DEFAULT '1',
  `year` int(11) NOT NULL DEFAULT '2020',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `aktif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_komponen_kegiatan`
--

INSERT INTO `tb_komponen_kegiatan` (`id`, `key`, `sub_key`, `sub_master_key`, `id_komponen`, `fix_key`, `komponen_spam`, `kegiatan`, `satuan`, `estimasi`, `pembagi`, `year`, `created_at`, `aktif`) VALUES
(1, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 50 lt/dt', '', 411600, 50, 2020, '2020-01-19 16:33:26', 0),
(2, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 100 lt/dt', '', 686000, 100, 2020, '2020-01-19 16:33:26', 0),
(3, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 200 lt/dt', '', 960400, 200, 2020, '2020-01-19 16:33:26', 0),
(4, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 250 lt/dt', '', 1085400, 250, 2020, '2020-01-19 16:33:27', 0),
(5, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 500 lt/dt', '', 1920800, 500, 2020, '2020-01-19 16:33:27', 0),
(6, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 1000 lt/dt', '', 3265360, 1000, 2020, '2020-01-19 16:33:27', 0),
(7, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 2000 lt/dt', '', 5877650, 2000, 2020, '2020-01-19 16:33:27', 0),
(8, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Submersible pump Q=50 lt/dt, H=30 m', '', 79312, 50, 2020, '2020-01-19 16:33:27', 0),
(9, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Submersible pump Q=100 lt/dt, H=20 m', '', 131625, 100, 2020, '2020-01-19 16:33:27', 0),
(10, 'air_minum', 'unit_air_baku', '', 1, '', 'Unit Air Baku', 'Submersible pump Q=550 lt/dt, H=20 m', '', 1382060, 550, 2020, '2020-01-19 16:33:28', 0),
(11, 'air_minum', 'unit_produksi', 'instalasi_pengolahan', 2, '', 'Unit Produksi', 'IPA 2,5 lt/dt  lengkap dosing', 'Lt/dt', 858000, 2.5, 2020, '2020-01-19 16:33:28', 1),
(12, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA 5 lt/dt  lengkap dosing', '', 1215500, 5, 2020, '2020-01-19 16:33:28', 0),
(13, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA 10 lt/dt  lengkap dosing', '', 1501500, 10, 2020, '2020-01-19 16:33:28', 0),
(14, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA 20 lt/dt lengkap dosing', '', 1973400, 20, 2020, '2020-01-19 16:33:28', 0),
(15, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA  30 lt/dt lengkap dosing', '', 2659800, 30, 2020, '2020-01-19 16:33:28', 0),
(16, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA  40 lt/dt lengkap dosing', '', 5291000, 40, 2020, '2020-01-19 16:33:28', 0),
(17, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA 50 lt/dt lengkap dosing', '', 5952380, 50, 2020, '2020-01-19 16:33:28', 0),
(18, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA 100 lt/dt lengkap dosing', '', 7865000, 100, 2020, '2020-01-19 16:33:29', 0),
(19, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA Beton  200 lt/dt, + dosing ', '', 21285000, 200, 2020, '2020-01-19 16:33:29', 0),
(20, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA Beton  250 lt/dt, + dosing ', '', 24585000, 250, 2020, '2020-01-19 16:33:29', 0),
(21, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA Beton  500 lt/dt, + dosing ', '', 26950000, 500, 2020, '2020-01-19 16:33:29', 0),
(22, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA Beton  750 lt/dt + dosing  ', '', 36382500, 750, 2020, '2020-01-19 16:33:29', 0),
(23, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'IPA Beton  1000 lt/dt + dosing  ', '', 45815000, 1000, 2020, '2020-01-19 16:33:29', 0),
(24, 'air_minum', 'unit_produksi', 'keandalan_ipa', 2, 'scada', 'Unit Produksi', 'SCADA', 'unit', 1750000, 1, 2020, '2020-01-19 16:33:29', 1),
(25, 'air_minum', 'unit_produksi', 'keandalan_ipa', 2, 'plc', 'Unit Produksi', 'PLC', 'unit', 1650000, 1, 2020, '2020-01-19 16:33:29', 1),
(26, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 100 m3', '', 313600, 100, 2020, '2020-01-19 16:33:29', 0),
(27, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 500 m3', '', 1323000, 500, 2020, '2020-01-19 16:33:29', 0),
(28, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 1.000 m3', '', 4200000, 1000, 2020, '2020-01-19 16:33:29', 0),
(29, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 1.500 m3', '', 5327330, 1500, 2020, '2020-01-19 16:33:30', 0),
(30, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 2000 m3', '', 7015440, 2000, 2020, '2020-01-19 16:33:30', 0),
(31, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 2500 m3', '', 8418520, 2500, 2020, '2020-01-19 16:33:30', 0),
(32, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 3500 m3', '', 11533400, 3500, 2020, '2020-01-19 16:33:30', 0),
(33, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 4000 m3', '', 13362700, 4000, 2020, '2020-01-19 16:33:30', 0),
(34, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 5000 m3', '', 16703400, 5000, 2020, '2020-01-19 16:33:30', 0),
(35, 'air_minum', 'unit_produksi', '', 2, '', 'Unit Produksi', 'Reservoir 10.000 m3', '', 32799400, 10000, 2020, '2020-01-19 16:33:30', 0),
(36, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=15 lt/dt, H=60 m', '', 43031, 15, 2020, '2020-01-19 16:33:30', 0),
(37, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=20 lt/dt, H=60 m', '', 86062.5, 20, 2020, '2020-01-19 16:33:30', 0),
(38, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=30 lt/dt, H=60 m', '', 143438, 30, 2020, '2020-01-19 16:33:30', 0),
(39, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=40 lt/dt, H=60 m', '', 135000, 40, 2020, '2020-01-19 16:33:30', 0),
(40, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=50 lt/dt, H=60 m', '', 145800, 50, 2020, '2020-01-19 16:33:30', 0),
(41, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=80 lt/dt, H=60 m', '', 193536, 80, 2020, '2020-01-19 16:33:31', 0),
(42, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=100 lt/dt, H=60 m', '', 224640, 100, 2020, '2020-01-19 16:33:31', 0),
(43, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=150 lt/dt, H=60 m', '', 340200, 150, 2020, '2020-01-19 16:33:31', 0),
(44, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=300 lt/dt, H=60 m', '', 926640, 300, 2020, '2020-01-19 16:33:31', 0),
(45, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=500 lt/dt, H=60 m', '', 1474200, 500, 2020, '2020-01-19 16:33:31', 0),
(46, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø   50 mm', '', 23, 1, 2020, '2020-01-19 16:33:31', 0),
(47, 'air_minum', 'unit_distribusi', 'pipa_distribusi_tersier', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø   75 mm', 'meter', 46, 1, 2020, '2020-01-19 16:33:31', 1),
(48, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 100 mm', 'meter', 67.5, 1, 2020, '2020-01-19 16:33:31', 1),
(49, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 150 mm', 'meter', 139.5, 1, 2020, '2020-01-19 16:33:31', 1),
(50, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 200 mm', 'meter', 212, 1, 2020, '2020-01-19 16:33:31', 1),
(51, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 250 mm', 'meter', 321, 1, 2020, '2020-01-19 16:33:31', 1),
(52, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 300 mm', 'meter', 498, 1, 2020, '2020-01-19 16:33:31', 1),
(53, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Ø 350 mm', 'meter', 532, 1, 2020, '2020-01-19 16:33:31', 1),
(54, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø   50 mm', '', 46, 1, 2020, '2020-01-19 16:33:31', 0),
(55, 'air_minum', 'unit_distribusi', 'pipa_distribusi_tersier', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø   75 mm', ' meter ', 101.5, 1, 2020, '2020-01-19 16:33:31', 1),
(56, 'air_minum', 'unit_distribusi', 'pipa_distribusi_tersier', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø   90 mm', ' meter ', 142, 1, 2020, '2020-01-19 16:33:31', 1),
(57, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 110 mm', ' meter ', 206, 1, 2020, '2020-01-19 16:33:31', 1),
(58, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 160 mm', ' meter ', 419, 1, 2020, '2020-01-19 16:33:32', 1),
(59, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 200 mm', ' meter ', 692.5, 1, 2020, '2020-01-19 16:33:32', 1),
(60, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 250 mm', ' meter ', 960.5, 1, 2020, '2020-01-19 16:33:32', 1),
(61, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 300 mm', ' meter ', 1483, 1, 2020, '2020-01-19 16:33:32', 1),
(62, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 350 mm', ' meter ', 1876.5, 1, 2020, '2020-01-19 16:33:32', 1),
(63, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 400 mm', ' meter ', 2313, 1, 2020, '2020-01-19 16:33:32', 1),
(64, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 450 mm', ' meter ', 2883.5, 1, 2020, '2020-01-19 16:33:32', 1),
(65, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 500 mm', ' meter ', 3464, 1, 2020, '2020-01-19 16:33:32', 1),
(66, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 600 mm', ' meter ', 5463.5, 1, 2020, '2020-01-19 16:33:32', 1),
(67, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 700 mm', ' meter ', 8469, 1, 2020, '2020-01-19 16:33:32', 1),
(68, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 800 mm', ' meter ', 10744.5, 1, 2020, '2020-01-19 16:33:32', 1),
(69, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 900 mm', ' meter ', 15809, 1, 2020, '2020-01-19 16:33:32', 1),
(70, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 1000 mm', ' meter ', 19494.5, 1, 2020, '2020-01-19 16:33:32', 1),
(71, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 11000 mm', ' meter ', 24368.5, 1, 2020, '2020-01-19 16:33:32', 1),
(72, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Ø 12000 mm', ' meter ', 30460.5, 1, 2020, '2020-01-19 16:33:32', 1),
(73, 'air_minum', 'unit_distribusi', '', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø  50 mm', '', 140, 1, 2020, '2020-01-19 16:33:32', 0),
(74, 'air_minum', 'unit_distribusi', 'pipa_distribusi_tersier', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø  75 mm', ' meter ', 284, 1, 2020, '2020-01-19 16:33:32', 1),
(75, 'air_minum', 'unit_distribusi', 'pipa_distribusi_tersier', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø 100 mm', ' meter ', 518, 1, 2020, '2020-01-19 16:33:33', 1),
(76, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø 150 mm', ' meter ', 670.5, 1, 2020, '2020-01-19 16:33:33', 1),
(77, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø 200 mm', ' meter ', 997.5, 1, 2020, '2020-01-19 16:33:33', 1),
(78, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø 250 mm', ' meter ', 1358, 1, 2020, '2020-01-19 16:33:33', 1),
(79, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Ø 300 mm', ' meter ', 1846.5, 1, 2020, '2020-01-19 16:33:33', 1),
(80, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 250 mm', ' meter ', 2452.5, 1, 2020, '2020-01-19 16:33:33', 1),
(81, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 300 mm', ' meter ', 3239.5, 1, 2020, '2020-01-19 16:33:33', 1),
(82, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 350 mm', ' meter ', 3495, 1, 2020, '2020-01-19 16:33:33', 1),
(83, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 400 mm', ' meter ', 3785, 1, 2020, '2020-01-19 16:33:33', 1),
(84, 'air_minum', 'unit_distribusi', 'pipa_distribusi_sekunder', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 450 mm', ' meter ', 4098.5, 1, 2020, '2020-01-19 16:33:33', 1),
(85, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 500 mm', ' meter ', 4437, 1, 2020, '2020-01-19 16:33:33', 1),
(86, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 550 mm', ' meter ', 4583.5, 1, 2020, '2020-01-19 16:33:33', 1),
(87, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 600 mm', ' meter ', 4535, 1, 2020, '2020-01-19 16:33:33', 1),
(88, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 650 mm', ' meter ', 4562, 1, 2020, '2020-01-19 16:33:33', 1),
(89, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 700 mm', ' meter ', 4726.5, 1, 2020, '2020-01-19 16:33:33', 1),
(90, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 750 mm', ' meter ', 5068, 1, 2020, '2020-01-19 16:33:33', 1),
(91, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 800 mm', ' meter ', 5574.5, 1, 2020, '2020-01-19 16:33:33', 1),
(92, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 900 mm', ' meter ', 6091.5, 1, 2020, '2020-01-19 16:33:33', 1),
(93, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 1000 mm', ' meter ', 6774, 1, 2020, '2020-01-19 16:33:34', 1),
(94, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 1200 mm', ' meter ', 8139, 1, 2020, '2020-01-19 16:33:34', 1),
(95, 'air_minum', 'unit_distribusi', 'pipa_distribusi_utama', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Ø 1400 mm', ' meter ', 9163, 1, 2020, '2020-01-19 16:33:34', 1),
(96, 'air_minum', 'unit_pelayanan', 'sambungan_pelanggan', 4, '', 'Unit Pelayanan', 'Sambungan Rumah ND ½\"', 'unit', 842, 1, 2020, '2020-01-19 16:33:34', 1),
(97, 'air_minum', 'unit_pelayanan', 'sambungan_pelanggan', 4, '', 'Unit Pelayanan', 'Sambungan Rumah ND ¾\"', 'unit', 912.5, 1, 2020, '2020-01-19 16:33:34', 1),
(98, 'air_minum', 'unit_pelayanan', 'sambungan_pelanggan', 4, '', 'Unit Pelayanan', 'Keran Umum', 'unit', 1365, 1, 2020, '2020-01-19 16:33:34', 1),
(99, 'air_minum', 'unit_pelayanan', 'sambungan_pelanggan', 4, '', 'Unit Pelayanan', 'Hidran Umum', 'unit', 6010, 1, 2020, '2020-01-19 16:33:34', 1),
(100, 'air_minum', 'unit_pelayanan', 'sambungan_pelanggan', 4, '', 'Unit Pelayanan', 'Hidran kebakaran', 'unit', 4264.5, 1, 2020, '2020-01-19 16:33:34', 1),
(101, 'air_minum', 'bangunan_penunjang', '', 5, '', 'Bangunan Penunjang', 'Ruang Dosing', '', 375600, 60, 2020, '2020-01-19 16:33:34', 0),
(102, 'air_minum', 'bangunan_penunjang', '', 5, 'pompa_genset', 'Bangunan Penunjang', 'Rumah Pompa/Genset', '', 279500, 50, 2020, '2020-01-19 16:33:34', 0),
(103, 'air_minum', 'bangunan_penunjang', '', 5, '', 'Bangunan Penunjang', 'Bangunan Kantor 120', '', 417000, 120, 2020, '2020-01-19 16:33:34', 0),
(104, 'air_minum', 'bangunan_penunjang', '', 5, 'workshop', 'Bangunan Penunjang', 'Laboratorium dan Gudang', '', 375600, 100, 2020, '2020-01-19 16:33:34', 0),
(105, 'air_minum', 'bangunan_penunjang', '', 5, 'rumah_jaga', 'Bangunan Penunjang', 'Rumah Penjaga', '', 141000, 45, 2020, '2020-01-19 16:33:34', 0),
(110, 'air_minum', 'bangunan_penunjang', '', 5, 'hdd', 'Bangunan Penunjang', 'Pekerjaan HDD', '', 141000, 45, 2020, '2020-01-25 05:14:00', 0),
(181, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=10 lt/dt, H=25 m', '', 41258.1, 50, 2020, '2020-02-08 02:46:28', 0),
(182, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=20 lt/dt, H=25 m', '', 45842.3, 50, 2020, '2020-02-08 02:46:28', 0),
(183, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=30 lt/dt, H=25 m', '', 53932.2, 50, 2020, '2020-02-08 02:46:28', 0),
(184, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=40 lt/dt, H=25 m', '', 67415.2, 50, 2020, '2020-02-08 02:46:28', 0),
(185, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=50 lt/dt, H=25 m', '', 79312, 50, 2020, '2020-02-08 02:46:28', 0),
(186, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=100 lt/dt, H=25 m', '', 131625, 100, 2020, '2020-02-08 02:46:28', 0),
(187, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=250 lt/dt, H=25 m', '', 628210, 550, 2020, '2020-02-08 02:46:28', 0),
(188, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=600 lt/dt, H=25 m', '', 1382060, 550, 2020, '2020-02-08 02:46:28', 0),
(189, 'air_minum', 'unit_air_baku', '', 1, NULL, 'Unit Air Baku', 'Submersible pump Q=800 lt/dt, H=25 m', '', 2211300, 550, 2020, '2020-02-08 02:46:28', 0),
(190, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 110 mm', 'meter', 206, 1, 2020, '2020-02-08 02:46:28', 1),
(191, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa TransmisiHDPE SDR17, PN10 Ø 160 mm', 'meter', 419, 1, 2020, '2020-02-08 02:46:28', 1),
(192, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'PipaTransmisi HDPE SDR17, PN10 Ø 200 mm', 'meter', 692.5, 1, 2020, '2020-02-08 02:46:28', 1),
(193, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 250 mm', 'meter', 960.5, 1, 2020, '2020-02-08 02:46:29', 1),
(194, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 300 mm', 'meter', 1483, 1, 2020, '2020-02-08 02:46:29', 1),
(195, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 350 mm', 'meter', 1876.5, 1, 2020, '2020-02-08 02:46:29', 1),
(196, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 400 mm', 'meter', 2313, 1, 2020, '2020-02-08 02:46:29', 1),
(197, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 450 mm', 'meter', 2883.5, 1, 2020, '2020-02-08 02:46:29', 1),
(198, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 500 mm', 'meter', 3464, 1, 2020, '2020-02-08 02:46:29', 1),
(199, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 600 mm', 'meter', 5463.5, 1, 2020, '2020-02-08 02:46:29', 1),
(200, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi HDPE SDR17, PN10 Ø 700 mm', 'meter', 8469, 1, 2020, '2020-02-08 02:46:29', 1),
(201, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  GSP Medium Class Ø 200 mm', 'meter', 997.5, 1, 2020, '2020-02-08 02:46:29', 1),
(202, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  GSP Medium Class Ø 250 mm', 'meter', 1358, 1, 2020, '2020-02-08 02:46:29', 1),
(203, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  GSP Medium Class Ø 300 mm', 'meter', 1846.5, 1, 2020, '2020-02-08 02:46:29', 1),
(204, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 350 mm', 'meter', 3495, 1, 2020, '2020-02-08 02:46:29', 1),
(205, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 400 mm', 'meter', 3785, 1, 2020, '2020-02-08 02:46:29', 1),
(206, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  Steel Cement Lining Ø 450 mm', 'meter', 4098.5, 1, 2020, '2020-02-08 02:46:30', 1),
(207, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  Steel Cement Lining Ø 500 mm', 'meter', 4437, 1, 2020, '2020-02-08 02:46:30', 1),
(208, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 550 mm', 'meter', 4583.5, 1, 2020, '2020-02-08 02:46:30', 1),
(209, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 600 mm', 'meter', 4535, 1, 2020, '2020-02-08 02:46:30', 1),
(210, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 650 mm', 'meter', 4562, 1, 2020, '2020-02-08 02:46:30', 1),
(211, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi   Steel Cement Lining Ø 700 mm', 'meter', 4726.5, 1, 2020, '2020-02-08 02:46:30', 1),
(212, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa  Transmisi  Steel Cement Lining Ø 750 mm', 'meter', 5068, 1, 2020, '2020-02-08 02:46:30', 1),
(213, 'air_minum', 'unit_air_baku', 'pipa_transmisi', 1, NULL, 'Unit Air Baku', 'Pipa Transmisi  Steel Cement Lining Ø 800 mm', 'meter', 5574.5, 1, 2020, '2020-02-08 02:46:30', 1),
(214, 'air_minum', 'unit_produksi', 'instalasi_pengolahan', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 2,5 lt/dt  ', 'Lt/dt', 746460, 2.5, 2020, '2020-02-08 02:46:30', 1),
(215, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 5 lt/dt  ', '', 1343630, 5, 2020, '2020-02-08 02:46:30', 0),
(216, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 10 lt/dt  ', '', 2673820, 10, 2020, '2020-02-08 02:46:30', 0),
(217, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 20 lt/dt  ', '', 5267420, 20, 2020, '2020-02-08 02:46:30', 0),
(218, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 30 lt/dt  ', '', 7953810, 30, 2020, '2020-02-08 02:46:30', 0),
(219, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 40 lt/dt  ', '', 10419500, 40, 2020, '2020-02-08 02:46:30', 0),
(220, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'Saringan Pasir Lambat (SPL)  Kap 50 lt/dt  ', '', 12816000, 50, 2020, '2020-02-08 02:46:31', 0),
(221, 'air_minum', 'unit_produksi', 'pra_pengolahan', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 5 lt/dt', 'Lt/dt', 273875, 5, 2020, '2020-02-08 02:46:31', 1),
(222, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 10 lt/dt', '', 375375, 10, 2020, '2020-02-08 02:46:31', 0),
(223, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 20 lt/dt', '', 513084, 20, 2020, '2020-02-08 02:46:31', 0),
(224, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 30 lt/dt', '', 691548, 30, 2020, '2020-02-08 02:46:31', 0),
(225, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 40 lt/dt', '', 1428570, 40, 2020, '2020-02-08 02:46:31', 0),
(226, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', ' Pra-sedimentasi 50 lt/dt', '', 1666660, 50, 2020, '2020-02-08 02:46:31', 0),
(227, 'air_minum', 'unit_produksi', 'instalasi_pengolahan', 2, NULL, 'Unit Produksi', 'IPA Ultrafiltration 2,5 lt/dt  lengkap dosing', 'Lt/dt', 1045040, 2.5, 2020, '2020-02-08 02:46:31', 1),
(228, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'IPA Ultrafiltration 5 lt/dt  lengkap dosing', '', 1881080, 5, 2020, '2020-02-08 02:46:31', 0),
(229, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'IPA Ultrafiltration 10 lt/dt  lengkap dosing', '', 3743350, 10, 2020, '2020-02-08 02:46:31', 0),
(230, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'IPA Ultrafiltration 20 lt/dt lengkap dosing', '', 7374400, 20, 2020, '2020-02-08 02:46:31', 0),
(231, 'air_minum', 'unit_produksi', '', 2, NULL, 'Unit Produksi', 'IPA  Ultrafiltration 30 lt/dt lengkap dosing', '', 11135300, 30, 2020, '2020-02-08 02:46:31', 0),
(232, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa   Ø 500 mm', ' meter ', 15120, 1, 2020, '2020-02-08 02:46:31', 1),
(233, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa  Ø 600 mm', ' meter ', 19308, 1, 2020, '2020-02-08 02:46:31', 1),
(234, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa  Ø 700 mm', ' meter ', 23169.6, 1, 2020, '2020-02-08 02:46:32', 1),
(235, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa  Ø 800 mm', ' meter ', 27803.5, 1, 2020, '2020-02-08 02:46:32', 1),
(236, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa  900 mm', ' meter ', 33364.2, 1, 2020, '2020-02-08 02:46:32', 1),
(237, 'air_minum', 'unit_distribusi', 'crossing_jaringan', 3, NULL, 'Unit Distribusi', 'HDD untuk Pipa  Ø 1000 mm', ' meter ', 40037.1, 1, 2020, '2020-02-08 02:46:32', 1),
(238, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Data Loger', 'unit', 45000, 1, 2020, '2020-02-08 02:46:32', 1),
(239, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Pressure Reducing Valve ND 100 mm', 'unit', 40000, 1, 2020, '2020-02-08 02:46:32', 1),
(240, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Pressure Reducing Valve ND 150 mm', 'unit', 62000, 1, 2020, '2020-02-08 02:46:32', 1),
(241, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Pressure Reducing Valve ND 200 mm', 'unit', 74000, 1, 2020, '2020-02-08 02:46:32', 1),
(242, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Pressure Reducing Valve ND 250 mm', 'unit', 86000, 1, 2020, '2020-02-08 02:46:32', 1),
(243, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, 'Unit Distribusi', 'Pressure Reducing Valve ND 300 mm', 'unit', 122000, 1, 2020, '2020-02-08 02:46:32', 1),
(244, 'air_minum', 'unit_pelayanan', 'pipa_retikulasi', 4, NULL, 'Unit Pelayanan', 'Pipa Retikulasi PVC  S.10 Ø   50 mm', 'meter', 23, 1, 2020, '2020-02-08 02:46:32', 1),
(245, 'air_minum', 'unit_pelayanan', 'pipa_retikulasi', 4, NULL, 'Unit Pelayanan', 'Pipa  RetikulasiPVC  S.10 Ø   75 mm', 'meter', 46, 1, 2020, '2020-02-08 02:46:32', 1),
(246, 'air_minum', 'unit_pelayanan', '', 4, NULL, 'Unit Pelayanan', 'Pipa Retikulasi  PVC  S.10 Ø 100 mm', '', 67.5, 1, 2020, '2020-02-08 02:46:32', 0),
(247, 'air_minum', 'unit_pelayanan', 'pipa_retikulasi', 4, NULL, 'Unit Pelayanan', 'Pipa  Retikulasi HDPE SDR17, PN10 Ø   50 mm', 'meter', 46, 1, 2020, '2020-02-08 02:46:32', 1),
(248, 'air_minum', 'unit_pelayanan', 'pipa_retikulasi', 4, NULL, 'Unit Pelayanan', 'Pipa  Retikulasi HDPE SDR17, PN10 Ø   75 mm', 'meter', 101.5, 1, 2020, '2020-02-08 02:46:32', 1),
(249, 'air_minum', 'unit_pelayanan', 'pipa_retikulasi', 4, NULL, 'Unit Pelayanan', 'Pipa  Retikulasi HDPE SDR17, PN10 Ø   90 mm', 'meter', 142, 1, 2020, '2020-02-08 02:46:32', 1),
(250, 'air_minum', 'unit_pelayanan', '', 4, NULL, 'Unit Pelayanan', 'Pipa  Retikulasi HDPE SDR17, PN10 Ø 110 mm', '', 206, 1, 2020, '2020-02-08 02:46:33', 0),
(251, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Sumur Dalam', ' Lt/dt ', 7250, 1, 2020, '2020-02-15 17:14:48', 1),
(252, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Broncaptering Mata Air', ' Lt/dt ', 5698.35, 1, 2020, '2020-02-15 17:14:48', 1),
(253, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Intake Air Bebas', ' Lt/dt ', 4558.68, 1, 2020, '2020-02-15 17:14:48', 1),
(254, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Intake Bendung', ' Lt/dt ', 5282.2, 1, 2020, '2020-02-15 17:14:48', 1),
(255, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Intake Sumuran', ' Lt/dt ', 4417.84, 1, 2020, '2020-02-15 17:14:48', 1),
(256, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Intake Ponton', ' Lt/dt ', 8575, 1, 2020, '2020-02-15 17:14:48', 1),
(257, 'air_minum', 'unit_air_baku', 'bangunan_pengambilan', 1, NULL, '', 'Intake Jembatan', ' Lt/dt ', 10290, 1, 2020, '2020-02-15 17:14:48', 1),
(258, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Pompa Submersible 10 - 30 m', ' Lt/dt ', 5776.13, 1, 2020, '2020-02-15 17:14:48', 1),
(259, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Pompa Centrifugal 10 - 30 m', ' Lt/dt ', 6931.36, 1, 2020, '2020-02-15 17:14:48', 1),
(260, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Pompa Turbin 10 - 30 m', ' Lt/dt ', 5891.66, 1, 2020, '2020-02-15 17:14:48', 1),
(261, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Sambungan PLN', 'KVA', 691250, 1, 2020, '2020-02-15 17:14:48', 1),
(262, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Genset', 'KVA', 2325000, 1, 2020, '2020-02-15 17:14:48', 1),
(263, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Panel dan perlengkapannya', 'Unit', 1743750, 1, 2020, '2020-02-15 17:14:48', 1),
(264, 'air_minum', 'unit_air_baku', 'mekanikal_dan_elektrikal', 1, NULL, '', 'Penerangan dll', 'Unit', 871875, 1, 2020, '2020-02-15 17:14:48', 1),
(265, 'air_minum', 'unit_air_baku', 'bangunan_penunjang', 2, NULL, '', 'Ruang Dosing ', 'm2', 6260, 1, 2020, '2020-02-15 17:14:48', 1),
(266, 'air_minum', 'unit_air_baku', 'bangunan_penunjang', 2, NULL, '', 'Rumah Pompa/Genset ', 'm2', 5590, 1, 2020, '2020-02-15 17:14:48', 1),
(267, 'air_minum', 'unit_air_baku', 'bangunan_penunjang', 2, NULL, '', 'Bangunan Kantor ', 'm2', 3475, 1, 2020, '2020-02-15 17:14:48', 1),
(268, 'air_minum', 'unit_air_baku', 'bangunan_penunjang', 2, NULL, '', 'Laboratorium/Gudang', 'm2', 3756, 1, 2020, '2020-02-15 17:14:49', 1),
(269, 'air_minum', 'unit_air_baku', 'bangunan_penunjang', 2, NULL, '', 'Rumah Penjaga', 'm2', 3133.33, 1, 2020, '2020-02-15 17:14:49', 1),
(270, 'air_minum', 'unit_produksi', 'pra_pengolahan', 2, NULL, '', 'Grit Chamber', ' Lt/dt ', 46558.8, 1, 2020, '2020-02-15 17:14:49', 1),
(271, 'air_minum', 'unit_produksi', 'instalasi_pengolahan', 2, NULL, '', 'Instalasi Khusus', ' Lt/dt ', 209009, 1, 2020, '2020-02-15 17:14:49', 1),
(272, 'air_minum', 'unit_produksi', 'keandalan_ipa', 2, NULL, '', 'Sensor monitoring', 'unit', 577500, 1, 2020, '2020-02-15 17:14:49', 1),
(273, 'air_minum', 'unit_produksi', 'pengolahan_lumpur', 2, NULL, '', 'Lagoon', 'Lt/dt', 7428.57, 1, 2020, '2020-02-15 17:14:49', 1),
(274, 'air_minum', 'unit_produksi', 'pengolahan_lumpur', 2, NULL, '', 'Sludge Drying Bed', 'Lt/dt', 9285.71, 1, 2020, '2020-02-15 17:14:49', 1),
(275, 'air_minum', 'unit_produksi', 'pengolahan_lumpur', 2, NULL, '', 'Decanter dan recycling system', 'Lt/dt', 14285.7, 1, 2020, '2020-02-15 17:14:49', 1),
(276, 'air_minum', 'unit_produksi', 'pengolahan_lumpur', 2, NULL, '', 'Belt press dan recycling system', 'Lt/dt', 10714.3, 1, 2020, '2020-02-15 17:14:49', 1),
(277, 'air_minum', 'unit_produksi', 'pengolahan_lumpur', 2, NULL, '', 'Screw press dan recycling system', 'Lt/dt', 18571.4, 1, 2020, '2020-02-15 17:14:49', 1),
(278, 'air_minum', 'unit_produksi', 'reservoir', 2, NULL, '', 'Ground Reservoir', 'M3', 3551.55, 1, 2020, '2020-02-15 17:14:49', 1),
(279, 'air_minum', 'unit_produksi', 'reservoir', 2, NULL, '', 'Elevated Reservoir', 'M3', 4972.18, 1, 2020, '2020-02-15 17:14:49', 1),
(280, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Pompa Submersible head 40 - 70 m', 'Lt/dt', 8086.59, 1, 2020, '2020-02-15 17:14:49', 1),
(281, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Pompa Centrifugal 40 - 70 m', 'Lt/dt', 10397, 1, 2020, '2020-02-15 17:14:49', 1),
(282, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Pompa Turbin 40 - 70 m', 'Lt/dt', 8542.9, 1, 2020, '2020-02-15 17:14:49', 1),
(283, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Sambungan PLN', 'KVA', 691250, 1, 2020, '2020-02-15 17:14:49', 1),
(284, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Genset + tangki BBM', 'KVA', 2325000, 1, 2020, '2020-02-15 17:14:49', 1),
(285, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Panel dan perlengkapannya', 'Unit', 1743750, 1, 2020, '2020-02-15 17:14:49', 1),
(286, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Penerangan dll', 'Unit', 871875, 1, 2020, '2020-02-15 17:14:49', 1),
(287, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Hydofore', 'Unit', 342000, 1, 2020, '2020-02-15 17:14:49', 1),
(288, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Water Meter Induk Ø 50 - 100 mm', 'Unit', 22654, 1, 2020, '2020-02-15 17:14:49', 1),
(289, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Water Meter Induk Ø 150 - 200 mm', 'Unit', 83422, 1, 2020, '2020-02-15 17:14:49', 1),
(290, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Water Meter Induk Ø 250 - 350 mm', 'Unit', 189692, 1, 2020, '2020-02-15 17:14:50', 1),
(291, 'air_minum', 'unit_produksi', 'mekanikal_dan_elektrikal', 2, NULL, '', 'Water Meter Induk Ø 400 - 500 mm', 'Unit', 346669, 1, 2020, '2020-02-15 17:14:50', 1),
(292, 'air_minum', 'unit_produksi', 'bangunan_penunjang', 2, NULL, '', 'Ruang Dosing ', 'm2', 6260, 1, 2020, '2020-02-15 17:14:50', 1),
(293, 'air_minum', 'unit_produksi', 'bangunan_penunjang', 2, NULL, '', 'Rumah Pompa/Genset ', 'm2', 5590, 1, 2020, '2020-02-15 17:14:50', 1),
(294, 'air_minum', 'unit_produksi', 'bangunan_penunjang', 2, NULL, '', 'Bangunan Kantor ', 'm2', 3475, 1, 2020, '2020-02-15 17:14:50', 1),
(295, 'air_minum', 'unit_produksi', 'bangunan_penunjang', 2, NULL, '', 'Laboratorium/Gudang', 'm2', 3756, 1, 2020, '2020-02-15 17:14:50', 1),
(296, 'air_minum', 'unit_produksi', 'bangunan_penunjang', 2, NULL, '', 'Rumah Penjaga', 'm2', 3133.33, 1, 2020, '2020-02-15 17:14:50', 1),
(297, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, '', 'Jembatan Pipa Ø 450 - 500 mm, bentang (12 m - 25 m)', 'unit', 3171880, 1, 2020, '2020-02-15 17:14:50', 1),
(298, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, '', 'Jembatan Pipa Ø  350 - 400 mm, bentang (10 m - 25 m)', 'unit', 2718750, 1, 2020, '2020-02-15 17:14:50', 1),
(299, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, '', 'Jembatan Pipa Ø  200 - 300  mm, bentang (10 m - 30 m)', 'unit', 2265620, 1, 2020, '2020-02-15 17:14:50', 1),
(300, 'air_minum', 'unit_distribusi', 'perlengkapan_jaringan', 3, NULL, '', 'Jembatan Pipa Ø  50 - 150 mm, bentang (10 m - 30 m)', 'unit', 1812500, 1, 2020, '2020-02-15 17:14:50', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

