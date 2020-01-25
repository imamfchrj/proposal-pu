-- phpMyAdmin SQL Dump
-- version 5.0.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jan 25, 2020 at 04:04 AM
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
  `id_komponen` int(11) DEFAULT NULL,
  `fix_key` varchar(50) NOT NULL,
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

INSERT INTO `tb_komponen_kegiatan` (`id`, `key`, `sub_key`, `id_komponen`, `fix_key`, `komponen_spam`, `kegiatan`, `satuan`, `estimasi`, `pembagi`, `year`, `created_at`, `aktif`) VALUES
(1, 'air minum', 'unit_air_baku', 1, '', 'Unit Distribusi', 'Bangunan Intake Air Baku 50 lt/dt', 'unit', 411600, 50, 2020, '2020-01-19 16:33:26', 1),
(2, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 100 lt/dt', 'unit', 686000, 100, 2020, '2020-01-19 16:33:26', 1),
(3, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 200 lt/dt', 'unit', 960400, 200, 2020, '2020-01-19 16:33:26', 1),
(4, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 250 lt/dt', 'unit', 1085400, 250, 2020, '2020-01-19 16:33:27', 1),
(5, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 500 lt/dt', 'unit', 1920800, 500, 2020, '2020-01-19 16:33:27', 1),
(6, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 1000 lt/dt', 'unit', 3265360, 1000, 2020, '2020-01-19 16:33:27', 1),
(7, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Bangunan Intake Air Baku 2000 lt/dt', 'unit', 5877650, 2000, 2020, '2020-01-19 16:33:27', 1),
(8, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Submersible pump Q=50 lt/dt, H=30 m', 'Unit', 79312, 50, 2020, '2020-01-19 16:33:27', 1),
(9, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Submersible pump Q=100 lt/dt, H=20 m', 'Unit', 131625, 100, 2020, '2020-01-19 16:33:27', 1),
(10, 'air minum', 'unit_air_baku', 1, '', 'Unit Air Baku', 'Submersible pump Q=550 lt/dt, H=20 m', 'Unit', 1382060, 550, 2020, '2020-01-19 16:33:28', 1),
(11, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 2,5 lt/dt  lengkap dosing', 'unit', 858000, 2.5, 2020, '2020-01-19 16:33:28', 1),
(12, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 5 lt/dt  lengkap dosing', 'unit', 1215500, 5, 2020, '2020-01-19 16:33:28', 1),
(13, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 10 lt/dt  lengkap dosing', 'unit', 1501500, 10, 2020, '2020-01-19 16:33:28', 1),
(14, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 20 lt/dt lengkap dosing', 'unit', 1973400, 20, 2020, '2020-01-19 16:33:28', 1),
(15, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA  30 lt/dt lengkap dosing', 'unit', 2659800, 30, 2020, '2020-01-19 16:33:28', 1),
(16, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA  40 lt/dt lengkap dosing', 'unit', 5291000, 40, 2020, '2020-01-19 16:33:28', 1),
(17, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 50 lt/dt lengkap dosing', 'unit', 5952380, 50, 2020, '2020-01-19 16:33:28', 1),
(18, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA 100 lt/dt lengkap dosing', 'unit', 7865000, 100, 2020, '2020-01-19 16:33:29', 1),
(19, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA Beton  200 lt/dt, + dosing ', 'unit', 21285000, 200, 2020, '2020-01-19 16:33:29', 1),
(20, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA Beton  250 lt/dt, + dosing ', 'unit', 24585000, 250, 2020, '2020-01-19 16:33:29', 1),
(21, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA Beton  500 lt/dt, + dosing ', 'unit', 26950000, 500, 2020, '2020-01-19 16:33:29', 1),
(22, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA Beton  750 lt/dt + dosing  ', 'unit', 36382500, 750, 2020, '2020-01-19 16:33:29', 1),
(23, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'IPA Beton  1000 lt/dt + dosing  ', 'unit', 45815000, 1000, 2020, '2020-01-19 16:33:29', 1),
(24, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'SCADA', 'unit', 1750000, 1, 2020, '2020-01-19 16:33:29', 1),
(25, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'PLC', 'unit', 1650000, 1, 2020, '2020-01-19 16:33:29', 1),
(26, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 100 m3', 'unit', 313600, 100, 2020, '2020-01-19 16:33:29', 1),
(27, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 500 m3', 'unit', 1323000, 500, 2020, '2020-01-19 16:33:29', 1),
(28, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 1.000 m3', 'unit', 4200000, 1000, 2020, '2020-01-19 16:33:29', 1),
(29, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 1.500 m3', 'unit', 5327330, 1500, 2020, '2020-01-19 16:33:30', 1),
(30, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 2000 m3', 'unit', 7015440, 2000, 2020, '2020-01-19 16:33:30', 1),
(31, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 2500 m3', 'unit', 8418520, 2500, 2020, '2020-01-19 16:33:30', 1),
(32, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 3500 m3', 'unit', 11533400, 3500, 2020, '2020-01-19 16:33:30', 1),
(33, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 4000 m3', 'unit', 13362700, 4000, 2020, '2020-01-19 16:33:30', 1),
(34, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 5000 m3', 'unit', 16703400, 5000, 2020, '2020-01-19 16:33:30', 1),
(35, 'air minum', 'unit_produksi', 2, '', 'Unit Produksi', 'Reservoir 10.000 m3', 'unit', 32799400, 10000, 2020, '2020-01-19 16:33:30', 1),
(36, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=15 lt/dt, H=60 m', 'unit', 43031, 15, 2020, '2020-01-19 16:33:30', 1),
(37, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=20 lt/dt, H=60 m', 'unit', 86062.5, 20, 2020, '2020-01-19 16:33:30', 1),
(38, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=30 lt/dt, H=60 m', 'unit', 143438, 30, 2020, '2020-01-19 16:33:30', 1),
(39, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=40 lt/dt, H=60 m', 'unit', 135000, 40, 2020, '2020-01-19 16:33:30', 1),
(40, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=50 lt/dt, H=60 m', 'unit', 145800, 50, 2020, '2020-01-19 16:33:30', 1),
(41, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=80 lt/dt, H=60 m', 'unit', 193536, 80, 2020, '2020-01-19 16:33:31', 1),
(42, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=100 lt/dt, H=60 m', 'unit', 224640, 100, 2020, '2020-01-19 16:33:31', 1),
(43, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=150 lt/dt, H=60 m', 'unit', 340200, 150, 2020, '2020-01-19 16:33:31', 1),
(44, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=300 lt/dt, H=60 m', 'unit', 926640, 300, 2020, '2020-01-19 16:33:31', 1),
(45, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Centrifugal pump Q=500 lt/dt, H=60 m', 'unit', 1474200, 500, 2020, '2020-01-19 16:33:31', 1),
(46, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ   50 mm', 'meter', 23, 1, 2020, '2020-01-19 16:33:31', 1),
(47, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ   75 mm', 'meter', 46, 1, 2020, '2020-01-19 16:33:31', 1),
(48, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 100 mm', 'meter', 67.5, 1, 2020, '2020-01-19 16:33:31', 1),
(49, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 150 mm', 'meter', 139.5, 1, 2020, '2020-01-19 16:33:31', 1),
(50, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 200 mm', 'meter', 212, 1, 2020, '2020-01-19 16:33:31', 1),
(51, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 250 mm', 'meter', 321, 1, 2020, '2020-01-19 16:33:31', 1),
(52, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 300 mm', 'meter', 498, 1, 2020, '2020-01-19 16:33:31', 1),
(53, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa PVC  S.10 Æ 350 mm', 'meter', 532, 1, 2020, '2020-01-19 16:33:31', 1),
(54, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ   50 mm', 'meter', 46, 1, 2020, '2020-01-19 16:33:31', 1),
(55, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ   75 mm', 'meter', 101.5, 1, 2020, '2020-01-19 16:33:31', 1),
(56, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ   90 mm', 'meter', 142, 1, 2020, '2020-01-19 16:33:31', 1),
(57, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 110 mm', 'meter', 206, 1, 2020, '2020-01-19 16:33:31', 1),
(58, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 160 mm', 'meter', 419, 1, 2020, '2020-01-19 16:33:32', 1),
(59, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 200 mm', 'meter', 692.5, 1, 2020, '2020-01-19 16:33:32', 1),
(60, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 250 mm', 'meter', 960.5, 1, 2020, '2020-01-19 16:33:32', 1),
(61, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 300 mm', 'meter', 1483, 1, 2020, '2020-01-19 16:33:32', 1),
(62, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 350 mm', 'meter', 1876.5, 1, 2020, '2020-01-19 16:33:32', 1),
(63, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 400 mm', 'meter', 2313, 1, 2020, '2020-01-19 16:33:32', 1),
(64, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 450 mm', 'meter', 2883.5, 1, 2020, '2020-01-19 16:33:32', 1),
(65, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 500 mm', 'meter', 3464, 1, 2020, '2020-01-19 16:33:32', 1),
(66, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 600 mm', 'meter', 5463.5, 1, 2020, '2020-01-19 16:33:32', 1),
(67, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 700 mm', 'meter', 8469, 1, 2020, '2020-01-19 16:33:32', 1),
(68, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 800 mm', 'meter', 10744.5, 1, 2020, '2020-01-19 16:33:32', 1),
(69, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 900 mm', 'meter', 15809, 1, 2020, '2020-01-19 16:33:32', 1),
(70, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 1000 mm', 'meter', 19494.5, 1, 2020, '2020-01-19 16:33:32', 1),
(71, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 11000 mm', 'meter', 24368.5, 1, 2020, '2020-01-19 16:33:32', 1),
(72, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa HDPE SDR17, PN10 Æ 12000 mm', 'meter', 30460.5, 1, 2020, '2020-01-19 16:33:32', 1),
(73, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ  50 mm', 'meter', 140, 1, 2020, '2020-01-19 16:33:32', 1),
(74, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ  75 mm', 'meter', 284, 1, 2020, '2020-01-19 16:33:32', 1),
(75, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ 100 mm', 'meter', 518, 1, 2020, '2020-01-19 16:33:33', 1),
(76, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ 150 mm', 'meter', 670.5, 1, 2020, '2020-01-19 16:33:33', 1),
(77, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ 200 mm', 'meter', 997.5, 1, 2020, '2020-01-19 16:33:33', 1),
(78, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ 250 mm', 'meter', 1358, 1, 2020, '2020-01-19 16:33:33', 1),
(79, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa GSP Medium Class Æ 300 mm', 'meter', 1846.5, 1, 2020, '2020-01-19 16:33:33', 1),
(80, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 250 mm', 'meter', 2452.5, 1, 2020, '2020-01-19 16:33:33', 1),
(81, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 300 mm', 'meter', 3239.5, 1, 2020, '2020-01-19 16:33:33', 1),
(82, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 350 mm', 'meter', 3495, 1, 2020, '2020-01-19 16:33:33', 1),
(83, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 400 mm', 'meter', 3785, 1, 2020, '2020-01-19 16:33:33', 1),
(84, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 450 mm', 'meter', 4098.5, 1, 2020, '2020-01-19 16:33:33', 1),
(85, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 500 mm', 'meter', 4437, 1, 2020, '2020-01-19 16:33:33', 1),
(86, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 550 mm', 'meter', 4583.5, 1, 2020, '2020-01-19 16:33:33', 1),
(87, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 600 mm', 'meter', 4535, 1, 2020, '2020-01-19 16:33:33', 1),
(88, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 650 mm', 'meter', 4562, 1, 2020, '2020-01-19 16:33:33', 1),
(89, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 700 mm', 'meter', 4726.5, 1, 2020, '2020-01-19 16:33:33', 1),
(90, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 750 mm', 'meter', 5068, 1, 2020, '2020-01-19 16:33:33', 1),
(91, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 800 mm', 'meter', 5574.5, 1, 2020, '2020-01-19 16:33:33', 1),
(92, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 900 mm', 'meter', 6091.5, 1, 2020, '2020-01-19 16:33:33', 1),
(93, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 1000 mm', 'meter', 6774, 1, 2020, '2020-01-19 16:33:34', 1),
(94, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 1200 mm', 'meter', 8139, 1, 2020, '2020-01-19 16:33:34', 1),
(95, 'air minum', 'unit_distribusi', 3, '', 'Unit Distribusi', 'Pipa Steel Cement Lining Æ 1400 mm', 'meter', 9163, 1, 2020, '2020-01-19 16:33:34', 1),
(96, 'air minum', 'unit_pelayanan', 4, '', 'Unit Pelayanan', 'Sambungan Rumah ND ½\"', 'unit', 842, 1, 2020, '2020-01-19 16:33:34', 1),
(97, 'air minum', 'unit_pelayanan', 4, '', 'Unit Pelayanan', 'Sambungan Rumah ND ¾\"', 'unit', 912.5, 1, 2020, '2020-01-19 16:33:34', 1),
(98, 'air minum', 'unit_pelayanan', 4, '', 'Unit Pelayanan', 'Keran Umum', 'unit', 1365, 1, 2020, '2020-01-19 16:33:34', 1),
(99, 'air minum', 'unit_pelayanan', 4, '', 'Unit Pelayanan', 'Hidran Umum', 'unit', 6010, 1, 2020, '2020-01-19 16:33:34', 1),
(100, 'air minum', 'unit_pelayanan', 4, '', 'Unit Pelayanan', 'Hidran kebakaran', 'unit', 4264.5, 1, 2020, '2020-01-19 16:33:34', 1),
(101, 'air minum', 'bangunan_penunjang', 5, '', 'Bangunan Penunjang', 'Ruang Dosing 60 m2', 'unit', 375600, 60, 2020, '2020-01-19 16:33:34', 1),
(102, 'air minum', 'bangunan_penunjang', 5, '', 'Bangunan Penunjang', 'Rumah Pompa/Genset 50 m2', 'unit', 279500, 50, 2020, '2020-01-19 16:33:34', 1),
(103, 'air minum', 'bangunan_penunjang', 5, '', 'Bangunan Penunjang', 'Bangunan Kantor 120 m2', 'unit', 417000, 120, 2020, '2020-01-19 16:33:34', 1),
(104, 'air minum', 'bangunan_penunjang', 5, '', 'Bangunan Penunjang', 'Laboratorium dan Gudang 100 m2', 'unit', 375600, 100, 2020, '2020-01-19 16:33:34', 1),
(105, 'air minum', 'bangunan_penunjang', 5, '', 'Bangunan Penunjang', 'Rumah Penjaga 45 m2', 'unit', 141000, 45, 2020, '2020-01-19 16:33:34', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

