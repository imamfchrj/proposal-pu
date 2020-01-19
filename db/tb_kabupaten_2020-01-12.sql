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
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id` int(11) NOT NULL,
  `prov_id` int(11) NOT NULL,
  `kab_id` int(11) DEFAULT NULL,
  `nama` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id`, `prov_id`, `kab_id`, `nama`, `created_at`) VALUES
(1, 11, 1101, 'Kab Aceh Selatan', '2020-01-12 00:29:24'),
(2, 11, 1102, 'Kab Aceh Tenggara', '2020-01-12 00:29:24'),
(3, 11, 1103, 'Kab Aceh Timur', '2020-01-12 00:29:24'),
(4, 11, 1104, 'Kab Aceh Tengah', '2020-01-12 00:29:24'),
(5, 11, 1105, 'Kab Aceh Barat', '2020-01-12 00:29:24'),
(6, 11, 1106, 'Kab Aceh Besar', '2020-01-12 00:29:24'),
(7, 11, 1107, 'Kab Pidie', '2020-01-12 00:29:24'),
(8, 11, 1108, 'Kab Aceh Utara', '2020-01-12 00:29:24'),
(9, 11, 1109, 'Kab Simeulue', '2020-01-12 00:29:24'),
(10, 11, 1110, 'Kab Aceh Singkil', '2020-01-12 00:29:25'),
(11, 11, 1111, 'Kab Bireuen', '2020-01-12 00:29:25'),
(12, 11, 1112, 'Kab Aceh Barat Daya', '2020-01-12 00:29:25'),
(13, 11, 1113, 'Kab Gayo Lues', '2020-01-12 00:29:25'),
(14, 11, 1114, 'Kab Aceh Jaya', '2020-01-12 00:29:25'),
(15, 11, 1115, 'Kab Nagan Raya', '2020-01-12 00:29:25'),
(16, 11, 1116, 'Kab Aceh Tamiang', '2020-01-12 00:29:25'),
(17, 11, 1117, 'Kab Bener Meriah', '2020-01-12 00:29:25'),
(18, 11, 1118, 'Kab Pidie Jaya', '2020-01-12 00:29:25'),
(19, 11, 1171, 'Kota Banda Aceh', '2020-01-12 00:29:25'),
(20, 11, 1172, 'Kota Sabang', '2020-01-12 00:29:25'),
(21, 11, 1173, 'Kota Lhokseumawe', '2020-01-12 00:29:25'),
(22, 11, 1174, 'Kota Langsa', '2020-01-12 00:29:25'),
(23, 11, 1175, 'Kota Subulussalam', '2020-01-12 00:29:25'),
(24, 12, 1201, 'Kab Tapanuli Tengah', '2020-01-12 00:29:26'),
(25, 12, 1202, 'Kab Tapanuli Utara', '2020-01-12 00:29:26'),
(26, 12, 1203, 'Kab Tapanuli Selatan', '2020-01-12 00:29:26'),
(27, 12, 1204, 'Kab Nias', '2020-01-12 00:29:26'),
(28, 12, 1205, 'Kab Langkat', '2020-01-12 00:29:26'),
(29, 12, 1206, 'Kab Karo', '2020-01-12 00:29:26'),
(30, 12, 1207, 'Kab Deli Serdang', '2020-01-12 00:29:26'),
(31, 12, 1208, 'Kab Simalungun', '2020-01-12 00:29:26'),
(32, 12, 1209, 'Kab Asahan', '2020-01-12 00:29:26'),
(33, 12, 1210, 'Kab Labuhanbatu', '2020-01-12 00:29:26'),
(34, 12, 1211, 'Kab Dairi', '2020-01-12 00:29:26'),
(35, 12, 1212, 'Kab Toba Samosir', '2020-01-12 00:29:26'),
(36, 12, 1213, 'Kab Mandailing Natal', '2020-01-12 00:29:26'),
(37, 12, 1214, 'Kab Nias Selatan', '2020-01-12 00:29:26'),
(38, 12, 1215, 'Kab Pakpak Bharat', '2020-01-12 00:29:26'),
(39, 12, 1216, 'Kab Humbang Hasundutan', '2020-01-12 00:29:27'),
(40, 12, 1217, 'Kab Samosir', '2020-01-12 00:29:27'),
(41, 12, 1218, 'Kab Serdang Bedagai', '2020-01-12 00:29:27'),
(42, 12, 1219, 'Kab Batu Bara', '2020-01-12 00:29:27'),
(43, 12, 1220, 'Kab Padang Lawas Utara', '2020-01-12 00:29:27'),
(44, 12, 1221, 'Kab Padang Lawas', '2020-01-12 00:29:27'),
(45, 12, 1222, 'Kab Labuhanbatu Selatan', '2020-01-12 00:29:27'),
(46, 12, 1223, 'Kab Labuhanbatu Utara', '2020-01-12 00:29:27'),
(47, 12, 1224, 'Kab Nias Utara', '2020-01-12 00:29:27'),
(48, 12, 1225, 'Kab Nias Barat', '2020-01-12 00:29:27'),
(49, 12, 1271, 'Kota Medan', '2020-01-12 00:29:27'),
(50, 12, 1272, 'Kota Pematang Siantar', '2020-01-12 00:29:27'),
(51, 12, 1273, 'Kota Sibolga', '2020-01-12 00:29:27'),
(52, 12, 1274, 'Kota Tanjung Balai', '2020-01-12 00:29:28'),
(53, 12, 1275, 'Kota Binjai', '2020-01-12 00:29:28'),
(54, 12, 1276, 'Kota Tebing Tinggi', '2020-01-12 00:29:28'),
(55, 12, 1277, 'Kota Padang Sidempuan', '2020-01-12 00:29:28'),
(56, 12, 1278, 'Kota Gunungsitoli', '2020-01-12 00:29:28'),
(57, 13, 1301, 'Kab Pesisir Selatan', '2020-01-12 00:29:28'),
(58, 13, 1302, 'Kab Solok', '2020-01-12 00:29:28'),
(59, 13, 1303, 'Kab Sijunjung', '2020-01-12 00:29:28'),
(60, 13, 1304, 'Kab Tanah Datar', '2020-01-12 00:29:28'),
(61, 13, 1305, 'Kab Padang Pariaman', '2020-01-12 00:29:28'),
(62, 13, 1306, 'Kab Agam', '2020-01-12 00:29:28'),
(63, 13, 1307, 'Kab Lima Puluh Kota', '2020-01-12 00:29:28'),
(64, 13, 1308, 'Kab Pasaman', '2020-01-12 00:29:28'),
(65, 13, 1309, 'Kab Kepulauan Mentawai', '2020-01-12 00:29:28'),
(66, 13, 1310, 'Kab Dharmasraya', '2020-01-12 00:29:28'),
(67, 13, 1311, 'Kab Solok Selatan', '2020-01-12 00:29:29'),
(68, 13, 1312, 'Kab Pasaman Barat', '2020-01-12 00:29:29'),
(69, 13, 1371, 'Kota Padang', '2020-01-12 00:29:29'),
(70, 13, 1372, 'Kota Solok', '2020-01-12 00:29:29'),
(71, 13, 1373, 'Kota Sawah Lunto', '2020-01-12 00:29:29'),
(72, 13, 1374, 'Kota Padang Panjang', '2020-01-12 00:29:29'),
(73, 13, 1375, 'Kota Bukittinggi', '2020-01-12 00:29:29'),
(74, 13, 1376, 'Kota Payakumbuh', '2020-01-12 00:29:29'),
(75, 13, 1377, 'Kota Pariaman', '2020-01-12 00:29:29'),
(76, 14, 1401, 'Kab Kampar', '2020-01-12 00:29:29'),
(77, 14, 1402, 'Kab Indragiri Hulu', '2020-01-12 00:29:29'),
(78, 14, 1403, 'Kab Bengkalis', '2020-01-12 00:29:29'),
(79, 14, 1404, 'Kab Indragiri Hilir', '2020-01-12 00:29:29'),
(80, 14, 1405, 'Kab Pelalawan', '2020-01-12 00:29:30'),
(81, 14, 1406, 'Kab Rokan Hulu', '2020-01-12 00:29:30'),
(82, 14, 1407, 'Kab Rokan Hilir', '2020-01-12 00:29:30'),
(83, 14, 1408, 'Kab Siak', '2020-01-12 00:29:30'),
(84, 14, 1409, 'Kab Kuantan Singingi', '2020-01-12 00:29:30'),
(85, 14, 1410, 'Kab Kepulauan Meranti', '2020-01-12 00:29:30'),
(86, 14, 1471, 'Kota Pekanbaru', '2020-01-12 00:29:30'),
(87, 14, 1472, 'Kota Dumai', '2020-01-12 00:29:30'),
(88, 15, 1501, 'Kab Kerinci', '2020-01-12 00:29:30'),
(89, 15, 1502, 'Kab Merangin', '2020-01-12 00:29:30'),
(90, 15, 1503, 'Kab Sarolangun', '2020-01-12 00:29:30'),
(91, 15, 1504, 'Kab Batang Hari', '2020-01-12 00:29:30'),
(92, 15, 1505, 'Kab Muaro Jambi', '2020-01-12 00:29:30'),
(93, 15, 1506, 'Kab Tanjung Jabung Barat', '2020-01-12 00:29:30'),
(94, 15, 1507, 'Kab Tanjung Jabung Timur', '2020-01-12 00:29:30'),
(95, 15, 1508, 'Kab Bungo', '2020-01-12 00:29:30'),
(96, 15, 1509, 'Kab Tebo', '2020-01-12 00:29:31'),
(97, 15, 1571, 'Kota Jambi', '2020-01-12 00:29:31'),
(98, 15, 1572, 'Kota Sungaipenuh', '2020-01-12 00:29:31'),
(99, 16, 1601, 'Kab Ogan Komering Ulu', '2020-01-12 00:29:31'),
(100, 16, 1602, 'Kab Ogan Komering Ilir', '2020-01-12 00:29:31'),
(101, 16, 1603, 'Kab Muara Enim', '2020-01-12 00:29:31'),
(102, 16, 1604, 'Kab Lahat', '2020-01-12 00:29:31'),
(103, 16, 1605, 'Kab Musi Rawas', '2020-01-12 00:29:31'),
(104, 16, 1606, 'Kab Musi Banyuasin', '2020-01-12 00:29:31'),
(105, 16, 1607, 'Kab Banyuasin', '2020-01-12 00:29:31'),
(106, 16, 1608, 'Kab Ogan Komering Ulu Timur', '2020-01-12 00:29:31'),
(107, 16, 1609, 'Kab Ogan Komering Ulu Selatan', '2020-01-12 00:29:31'),
(108, 16, 1610, 'Kab Ogan Ilir', '2020-01-12 00:29:31'),
(109, 16, 1611, 'Kab Empat Lawang', '2020-01-12 00:29:31'),
(110, 16, 1612, 'Kab Penukal Abab Lematang Ilir', '2020-01-12 00:29:31'),
(111, 16, 1613, 'Kab Musi Rawas Utara', '2020-01-12 00:29:31'),
(112, 16, 1671, 'Kota Palembang', '2020-01-12 00:29:31'),
(113, 16, 1672, 'Kota Pagar Alam', '2020-01-12 00:29:32'),
(114, 16, 1673, 'Kota Lubuk Linggau', '2020-01-12 00:29:32'),
(115, 16, 1674, 'Kota Prabumulih', '2020-01-12 00:29:32'),
(116, 17, 1701, 'Kab Bengkulu Selatan', '2020-01-12 00:29:32'),
(117, 17, 1702, 'Kab Rejang Lebong', '2020-01-12 00:29:32'),
(118, 17, 1703, 'Kab Bengkulu Utara', '2020-01-12 00:29:32'),
(119, 17, 1704, 'Kab Kaur', '2020-01-12 00:29:32'),
(120, 17, 1705, 'Kab Seluma', '2020-01-12 00:29:32'),
(121, 17, 1706, 'Kab Muko Muko', '2020-01-12 00:29:32'),
(122, 17, 1707, 'Kab Lebong', '2020-01-12 00:29:32'),
(123, 17, 1708, 'Kab Kepahiang', '2020-01-12 00:29:32'),
(124, 17, 1709, 'Kab Bengkulu Tengah', '2020-01-12 00:29:32'),
(125, 17, 1771, 'Kota Bengkulu', '2020-01-12 00:29:32'),
(126, 18, 1801, 'Kab Lampung Selatan', '2020-01-12 00:29:32'),
(127, 18, 1802, 'Kab Lampung Tengah', '2020-01-12 00:29:32'),
(128, 18, 1803, 'Kab Lampung Utara', '2020-01-12 00:29:32'),
(129, 18, 1804, 'Kab Lampung Barat', '2020-01-12 00:29:33'),
(130, 18, 1805, 'Kab Tulang Bawang', '2020-01-12 00:29:33'),
(131, 18, 1806, 'Kab Tanggamus', '2020-01-12 00:29:33'),
(132, 18, 1807, 'Kab Lampung Timur', '2020-01-12 00:29:33'),
(133, 18, 1808, 'Kab Way Kanan', '2020-01-12 00:29:33'),
(134, 18, 1809, 'Kab Pesawaran', '2020-01-12 00:29:33'),
(135, 18, 1810, 'Kab Pringsewu', '2020-01-12 00:29:33'),
(136, 18, 1811, 'Kab Mesuji', '2020-01-12 00:29:33'),
(137, 18, 1812, 'Kab Tulang Bawang Barat', '2020-01-12 00:29:33'),
(138, 18, 1813, 'Kab Pesisir Barat', '2020-01-12 00:29:33'),
(139, 18, 1871, 'Kota Bandar Lampung', '2020-01-12 00:29:33'),
(140, 18, 1872, 'Kota Metro', '2020-01-12 00:29:33'),
(141, 19, 1901, 'Kab Bangka', '2020-01-12 00:29:33'),
(142, 19, 1902, 'Kab Belitung', '2020-01-12 00:29:33'),
(143, 19, 1903, 'Kab Bangka Selatan', '2020-01-12 00:29:33'),
(144, 19, 1904, 'Kab Bangka Tengah', '2020-01-12 00:29:33'),
(145, 19, 1905, 'Kab Bangka Barat', '2020-01-12 00:29:33'),
(146, 19, 1906, 'Kab Belitung Timur', '2020-01-12 00:29:33'),
(147, 19, 1971, 'Kota Pangkal Pinang', '2020-01-12 00:29:33'),
(148, 21, 2101, 'Kab Bintan', '2020-01-12 00:29:33'),
(149, 21, 2102, 'Kab Karimun', '2020-01-12 00:29:33'),
(150, 21, 2103, 'Kab Natuna', '2020-01-12 00:29:33'),
(151, 21, 2104, 'Kab Lingga', '2020-01-12 00:29:34'),
(152, 21, 2105, 'Kab Kepulauan Anambas', '2020-01-12 00:29:34'),
(153, 21, 2171, 'Kota Batam', '2020-01-12 00:29:34'),
(154, 21, 2172, 'Kota Tanjung Pinang', '2020-01-12 00:29:34'),
(155, 31, 3101, 'Kab Kepulauan Seribu', '2020-01-12 00:29:34'),
(156, 31, 3171, 'Kota Jakarta Pusat', '2020-01-12 00:29:34'),
(157, 31, 3172, 'Kota Jakarta Utara', '2020-01-12 00:29:34'),
(158, 31, 3173, 'Kota Jakarta Barat', '2020-01-12 00:29:34'),
(159, 31, 3174, 'Kota Jakarta Selatan', '2020-01-12 00:29:34'),
(160, 31, 3175, 'Kota Jakarta Timur', '2020-01-12 00:29:34'),
(161, 32, 3201, 'Kab Bogor', '2020-01-12 00:29:34'),
(162, 32, 3202, 'Kab Sukabumi', '2020-01-12 00:29:34'),
(163, 32, 3203, 'Kab Cianjur', '2020-01-12 00:29:34'),
(164, 32, 3204, 'Kab Bandung', '2020-01-12 00:29:34'),
(165, 32, 3205, 'Kab Garut', '2020-01-12 00:29:34'),
(166, 32, 3206, 'Kab Tasikmalaya', '2020-01-12 00:29:34'),
(167, 32, 3207, 'Kab Ciamis', '2020-01-12 00:29:34'),
(168, 32, 3208, 'Kab Kuningan', '2020-01-12 00:29:35'),
(169, 32, 3209, 'Kab Cirebon', '2020-01-12 00:29:35'),
(170, 32, 3210, 'Kab Majalengka', '2020-01-12 00:29:35'),
(171, 32, 3211, 'Kab Sumedang', '2020-01-12 00:29:35'),
(172, 32, 3212, 'Kab Indramayu', '2020-01-12 00:29:35'),
(173, 32, 3213, 'Kab Subang', '2020-01-12 00:29:35'),
(174, 32, 3214, 'Kab Purwakarta', '2020-01-12 00:29:35'),
(175, 32, 3215, 'Kab Karawang', '2020-01-12 00:29:35'),
(176, 32, 3216, 'Kab Bekasi', '2020-01-12 00:29:35'),
(177, 32, 3217, 'Kab Bandung Barat', '2020-01-12 00:29:35'),
(178, 32, 3218, 'Kab Pangandaran', '2020-01-12 00:29:35'),
(179, 32, 3271, 'Kota Bogor', '2020-01-12 00:29:35'),
(180, 32, 3272, 'Kota Sukabumi', '2020-01-12 00:29:35'),
(181, 32, 3273, 'Kota Bandung', '2020-01-12 00:29:35'),
(182, 32, 3274, 'Kota Cirebon', '2020-01-12 00:29:35'),
(183, 32, 3275, 'Kota Bekasi', '2020-01-12 00:29:35'),
(184, 32, 3276, 'Kota Depok', '2020-01-12 00:29:35'),
(185, 32, 3277, 'Kota Cimahi', '2020-01-12 00:29:36'),
(186, 32, 3278, 'Kota Tasikmalaya', '2020-01-12 00:29:36'),
(187, 32, 3279, 'Kota Banjar', '2020-01-12 00:29:36'),
(188, 33, 3301, 'Kab Cilacap', '2020-01-12 00:29:36'),
(189, 33, 3302, 'Kab Banyumas', '2020-01-12 00:29:36'),
(190, 33, 3303, 'Kab Purbalingga', '2020-01-12 00:29:36'),
(191, 33, 3304, 'Kab Banjarnegara', '2020-01-12 00:29:36'),
(192, 33, 3305, 'Kab Kebumen', '2020-01-12 00:29:36'),
(193, 33, 3306, 'Kab Purworejo', '2020-01-12 00:29:36'),
(194, 33, 3307, 'Kab Wonosobo', '2020-01-12 00:29:36'),
(195, 33, 3308, 'Kab Magelang', '2020-01-12 00:29:36'),
(196, 33, 3309, 'Kab Boyolali', '2020-01-12 00:29:36'),
(197, 33, 3310, 'Kab Klaten', '2020-01-12 00:29:36'),
(198, 33, 3311, 'Kab Sukoharjo', '2020-01-12 00:29:36'),
(199, 33, 3312, 'Kab Wonogiri', '2020-01-12 00:29:36'),
(200, 33, 3313, 'Kab Karanganyar', '2020-01-12 00:29:36'),
(201, 33, 3314, 'Kab Sragen', '2020-01-12 00:29:36'),
(202, 33, 3315, 'Kab Grobogan', '2020-01-12 00:29:36'),
(203, 33, 3316, 'Kab Blora', '2020-01-12 00:29:36'),
(204, 33, 3317, 'Kab Rembang', '2020-01-12 00:29:36'),
(205, 33, 3318, 'Kab Pati', '2020-01-12 00:29:37'),
(206, 33, 3319, 'Kab Kudus', '2020-01-12 00:29:37'),
(207, 33, 3320, 'Kab Jepara', '2020-01-12 00:29:37'),
(208, 33, 3321, 'Kab Demak', '2020-01-12 00:29:37'),
(209, 33, 3322, 'Kab Semarang', '2020-01-12 00:29:37'),
(210, 33, 3323, 'Kab Temanggung', '2020-01-12 00:29:37'),
(211, 33, 3324, 'Kab Kendal', '2020-01-12 00:29:37'),
(212, 33, 3325, 'Kab Batang', '2020-01-12 00:29:37'),
(213, 33, 3326, 'Kab Pekalongan', '2020-01-12 00:29:37'),
(214, 33, 3327, 'Kab Pemalang', '2020-01-12 00:29:37'),
(215, 33, 3328, 'Kab Tegal', '2020-01-12 00:29:37'),
(216, 33, 3329, 'Kab Brebes', '2020-01-12 00:29:37'),
(217, 33, 3371, 'Kota Magelang', '2020-01-12 00:29:37'),
(218, 33, 3372, 'Kota Surakarta', '2020-01-12 00:29:37'),
(219, 33, 3373, 'Kota Salatiga', '2020-01-12 00:29:37'),
(220, 33, 3374, 'Kota Semarang', '2020-01-12 00:29:37'),
(221, 33, 3375, 'Kota Pekalongan', '2020-01-12 00:29:37'),
(222, 33, 3376, 'Kota Tegal', '2020-01-12 00:29:37'),
(223, 34, 3401, 'Kab Kulon Progo', '2020-01-12 00:29:37'),
(224, 34, 3402, 'Kab Bantul', '2020-01-12 00:29:37'),
(225, 34, 3403, 'Kab Gunung Kidul', '2020-01-12 00:29:38'),
(226, 34, 3404, 'Kab Sleman', '2020-01-12 00:29:38'),
(227, 34, 3471, 'Kota Yogyakarta', '2020-01-12 00:29:38'),
(228, 35, 3501, 'Kab Pacitan', '2020-01-12 00:29:38'),
(229, 35, 3502, 'Kab Ponorogo', '2020-01-12 00:29:38'),
(230, 35, 3503, 'Kab Trenggalek', '2020-01-12 00:29:38'),
(231, 35, 3504, 'Kab Tulungagung', '2020-01-12 00:29:38'),
(232, 35, 3505, 'Kab Blitar', '2020-01-12 00:29:38'),
(233, 35, 3506, 'Kab Kediri', '2020-01-12 00:29:38'),
(234, 35, 3507, 'Kab Malang', '2020-01-12 00:29:38'),
(235, 35, 3508, 'Kab Lumajang', '2020-01-12 00:29:38'),
(236, 35, 3509, 'Kab Jember', '2020-01-12 00:29:38'),
(237, 35, 3510, 'Kab Banyuwangi', '2020-01-12 00:29:38'),
(238, 35, 3511, 'Kab Bondowoso', '2020-01-12 00:29:38'),
(239, 35, 3512, 'Kab Situbondo', '2020-01-12 00:29:38'),
(240, 35, 3513, 'Kab Probolinggo', '2020-01-12 00:29:38'),
(241, 35, 3514, 'Kab Pasuruan', '2020-01-12 00:29:38'),
(242, 35, 3515, 'Kab Sidoarjo', '2020-01-12 00:29:38'),
(243, 35, 3516, 'Kab Mojokerto', '2020-01-12 00:29:38'),
(244, 35, 3517, 'Kab Jombang', '2020-01-12 00:29:38'),
(245, 35, 3518, 'Kab Nganjuk', '2020-01-12 00:29:39'),
(246, 35, 3519, 'Kab Madiun', '2020-01-12 00:29:39'),
(247, 35, 3520, 'Kab Magetan', '2020-01-12 00:29:39'),
(248, 35, 3521, 'Kab Ngawi', '2020-01-12 00:29:39'),
(249, 35, 3522, 'Kab Bojonegoro', '2020-01-12 00:29:39'),
(250, 35, 3523, 'Kab Tuban', '2020-01-12 00:29:39'),
(251, 35, 3524, 'Kab Lamongan', '2020-01-12 00:29:39'),
(252, 35, 3525, 'Kab Gresik', '2020-01-12 00:29:39'),
(253, 35, 3526, 'Kab Bangkalan', '2020-01-12 00:29:39'),
(254, 35, 3527, 'Kab Sampang', '2020-01-12 00:29:39'),
(255, 35, 3528, 'Kab Pamekasan', '2020-01-12 00:29:39'),
(256, 35, 3529, 'Kab Sumenep', '2020-01-12 00:29:39'),
(257, 35, 3571, 'Kota Kediri', '2020-01-12 00:29:39'),
(258, 35, 3572, 'Kota Blitar', '2020-01-12 00:29:39'),
(259, 35, 3573, 'Kota Malang', '2020-01-12 00:29:39'),
(260, 35, 3574, 'Kota Probolinggo', '2020-01-12 00:29:39'),
(261, 35, 3575, 'Kota Pasuruan', '2020-01-12 00:29:39'),
(262, 35, 3576, 'Kota Mojokerto', '2020-01-12 00:29:39'),
(263, 35, 3577, 'Kota Madiun', '2020-01-12 00:29:39'),
(264, 35, 3578, 'Kota Surabaya', '2020-01-12 00:29:39'),
(265, 35, 3579, 'Kota Batu', '2020-01-12 00:29:40'),
(266, 36, 3601, 'Kab Pandeglang', '2020-01-12 00:29:40'),
(267, 36, 3602, 'Kab Lebak', '2020-01-12 00:29:40'),
(268, 36, 3603, 'Kab Tangerang', '2020-01-12 00:29:40'),
(269, 36, 3604, 'Kab Serang', '2020-01-12 00:29:40'),
(270, 36, 3671, 'Kota Tangerang', '2020-01-12 00:29:40'),
(271, 36, 3672, 'Kota Cilegon', '2020-01-12 00:29:40'),
(272, 36, 3673, 'Kota Serang', '2020-01-12 00:29:40'),
(273, 36, 3674, 'Kota Tangerang Selatan', '2020-01-12 00:29:40'),
(274, 51, 5101, 'Kab Jembrana', '2020-01-12 00:29:40'),
(275, 51, 5102, 'Kab Tabanan', '2020-01-12 00:29:40'),
(276, 51, 5103, 'Kab Badung', '2020-01-12 00:29:40'),
(277, 51, 5104, 'Kab Gianyar', '2020-01-12 00:29:40'),
(278, 51, 5105, 'Kab Klungkung', '2020-01-12 00:29:40'),
(279, 51, 5106, 'Kab Bangli', '2020-01-12 00:29:40'),
(280, 51, 5107, 'Kab Karangasem', '2020-01-12 00:29:40'),
(281, 51, 5108, 'Kab Buleleng', '2020-01-12 00:29:40'),
(282, 51, 5171, 'Kota Denpasar', '2020-01-12 00:29:40'),
(283, 52, 5201, 'Kab Lombok Barat', '2020-01-12 00:29:40'),
(284, 52, 5202, 'Kab Lombok Tengah', '2020-01-12 00:29:41'),
(285, 52, 5203, 'Kab Lombok Timur', '2020-01-12 00:29:41'),
(286, 52, 5204, 'Kab Sumbawa', '2020-01-12 00:29:41'),
(287, 52, 5205, 'Kab Dompu', '2020-01-12 00:29:41'),
(288, 52, 5206, 'Kab Bima', '2020-01-12 00:29:41'),
(289, 52, 5207, 'Kab Sumbawa Barat', '2020-01-12 00:29:41'),
(290, 52, 5208, 'Kab Lombok Utara', '2020-01-12 00:29:41'),
(291, 52, 5271, 'Kota Mataram', '2020-01-12 00:29:41'),
(292, 52, 5272, 'Kota Bima', '2020-01-12 00:29:41'),
(293, 53, 5301, 'Kab Kupang', '2020-01-12 00:29:41'),
(294, 53, 5302, 'Kab Timor Tengah Selatan', '2020-01-12 00:29:41'),
(295, 53, 5303, 'Kab Timor Tengah Utara', '2020-01-12 00:29:41'),
(296, 53, 5304, 'Kab Belu', '2020-01-12 00:29:41'),
(297, 53, 5305, 'Kab Alor', '2020-01-12 00:29:41'),
(298, 53, 5306, 'Kab Flores Timur', '2020-01-12 00:29:41'),
(299, 53, 5307, 'Kab Sikka', '2020-01-12 00:29:41'),
(300, 53, 5308, 'Kab Ende', '2020-01-12 00:29:41'),
(301, 53, 5309, 'Kab Ngada', '2020-01-12 00:29:41'),
(302, 53, 5310, 'Kab Manggarai', '2020-01-12 00:29:41'),
(303, 53, 5311, 'Kab Sumba Timur', '2020-01-12 00:29:42'),
(304, 53, 5312, 'Kab Sumba Barat', '2020-01-12 00:29:42'),
(305, 53, 5313, 'Kab Lembata', '2020-01-12 00:29:42'),
(306, 53, 5314, 'Kab Rote Ndao', '2020-01-12 00:29:42'),
(307, 53, 5315, 'Kab Manggarai Barat', '2020-01-12 00:29:42'),
(308, 53, 5316, 'Kab Nagekeo', '2020-01-12 00:29:42'),
(309, 53, 5317, 'Kab Sumba Tengah', '2020-01-12 00:29:42'),
(310, 53, 5318, 'Kab Sumba Barat Daya', '2020-01-12 00:29:42'),
(311, 53, 5319, 'Kab Manggarai Timur', '2020-01-12 00:29:42'),
(312, 53, 5320, 'Kab Sabu Raijua', '2020-01-12 00:29:42'),
(313, 53, 5321, 'Kab Malaka', '2020-01-12 00:29:42'),
(314, 53, 5371, 'Kota Kupang', '2020-01-12 00:29:42'),
(315, 61, 6101, 'Kab Sambas', '2020-01-12 00:29:42'),
(316, 61, 6102, 'Kab Mempawah', '2020-01-12 00:29:42'),
(317, 61, 6103, 'Kab Sanggau', '2020-01-12 00:29:42'),
(318, 61, 6104, 'Kab Ketapang', '2020-01-12 00:29:42'),
(319, 61, 6105, 'Kab Sintang', '2020-01-12 00:29:42'),
(320, 61, 6106, 'Kab Kapuas Hulu', '2020-01-12 00:29:42'),
(321, 61, 6107, 'Kab Bengkayang', '2020-01-12 00:29:42'),
(322, 61, 6108, 'Kab Landak', '2020-01-12 00:29:42'),
(323, 61, 6109, 'Kab Sekadau', '2020-01-12 00:29:43'),
(324, 61, 6110, 'Kab Melawi', '2020-01-12 00:29:43'),
(325, 61, 6111, 'Kab Kayong Utara', '2020-01-12 00:29:43'),
(326, 61, 6112, 'Kab Kubu Raya', '2020-01-12 00:29:43'),
(327, 61, 6171, 'Kota Pontianak', '2020-01-12 00:29:43'),
(328, 61, 6172, 'Kota Singkawang', '2020-01-12 00:29:43'),
(329, 62, 6201, 'Kab Kotawaringin Barat', '2020-01-12 00:29:43'),
(330, 62, 6202, 'Kab Kotawaringin Timur', '2020-01-12 00:29:43'),
(331, 62, 6203, 'Kab Kapuas', '2020-01-12 00:29:43'),
(332, 62, 6204, 'Kab Barito Selatan', '2020-01-12 00:29:43'),
(333, 62, 6205, 'Kab Barito Utara', '2020-01-12 00:29:43'),
(334, 62, 6206, 'Kab Katingan', '2020-01-12 00:29:43'),
(335, 62, 6207, 'Kab Seruyan', '2020-01-12 00:29:43'),
(336, 62, 6208, 'Kab Sukamara', '2020-01-12 00:29:43'),
(337, 62, 6209, 'Kab Lamandau', '2020-01-12 00:29:43'),
(338, 62, 6210, 'Kab Gunung Mas', '2020-01-12 00:29:43'),
(339, 62, 6211, 'Kab Pulang Pisau', '2020-01-12 00:29:43'),
(340, 62, 6212, 'Kab Murung Raya', '2020-01-12 00:29:43'),
(341, 62, 6213, 'Kab Barito Timur', '2020-01-12 00:29:43'),
(342, 62, 6271, 'Kota Palangka Raya', '2020-01-12 00:29:44'),
(343, 63, 6301, 'Kab Tanah Laut', '2020-01-12 00:29:44'),
(344, 63, 6302, 'Kab Kotabaru', '2020-01-12 00:29:44'),
(345, 63, 6303, 'Kab Banjar', '2020-01-12 00:29:44'),
(346, 63, 6304, 'Kab Barito Kuala', '2020-01-12 00:29:44'),
(347, 63, 6305, 'Kab Tapin', '2020-01-12 00:29:44'),
(348, 63, 6306, 'Kab Hulu Sungai Selatan', '2020-01-12 00:29:44'),
(349, 63, 6307, 'Kab Hulu Sungai Tengah', '2020-01-12 00:29:44'),
(350, 63, 6308, 'Kab Hulu Sungai Utara', '2020-01-12 00:29:44'),
(351, 63, 6309, 'Kab Tabalong', '2020-01-12 00:29:44'),
(352, 63, 6310, 'Kab Tanah Bumbu', '2020-01-12 00:29:44'),
(353, 63, 6311, 'Kab Balangan', '2020-01-12 00:29:44'),
(354, 63, 6371, 'Kota Banjarmasin', '2020-01-12 00:29:44'),
(355, 63, 6372, 'Kota Banjarbaru', '2020-01-12 00:29:44'),
(356, 64, 6401, 'Kab Paser', '2020-01-12 00:29:44'),
(357, 64, 6402, 'Kab Kutai Kartanegara', '2020-01-12 00:29:44'),
(358, 64, 6403, 'Kab Berau', '2020-01-12 00:29:44'),
(359, 64, 6407, 'Kab Kutai Barat', '2020-01-12 00:29:44'),
(360, 64, 6408, 'Kab Kutai Timur', '2020-01-12 00:29:45'),
(361, 64, 6409, 'Kab Penajam Paser Utara', '2020-01-12 00:29:45'),
(362, 64, 6411, 'Kab Mahakam Ulu', '2020-01-12 00:29:45'),
(363, 64, 6471, 'Kota Balikpapan', '2020-01-12 00:29:45'),
(364, 64, 6472, 'Kota Samarinda', '2020-01-12 00:29:45'),
(365, 64, 6474, 'Kota Bontang', '2020-01-12 00:29:45'),
(366, 65, 6501, 'Kab Bulungan', '2020-01-12 00:29:45'),
(367, 65, 6502, 'Kab Malinau', '2020-01-12 00:29:45'),
(368, 65, 6503, 'Kab Nunukan', '2020-01-12 00:29:45'),
(369, 65, 6504, 'Kab Tana Tidung', '2020-01-12 00:29:45'),
(370, 65, 6571, 'Kota Tarakan', '2020-01-12 00:29:45'),
(371, 71, 7101, 'Kab Bolaang Mongondow', '2020-01-12 00:29:45'),
(372, 71, 7102, 'Kab Minahasa', '2020-01-12 00:29:45'),
(373, 71, 7103, 'Kab Kepulauan Sangihe', '2020-01-12 00:29:45'),
(374, 71, 7104, 'Kab Kepulauan Talaud', '2020-01-12 00:29:45'),
(375, 71, 7105, 'Kab Minahasa Selatan', '2020-01-12 00:29:45'),
(376, 71, 7106, 'Kab Minahasa Utara', '2020-01-12 00:29:45'),
(377, 71, 7107, 'Kab Minahasa Tenggara', '2020-01-12 00:29:46'),
(378, 71, 7108, 'Kab Bolaang Mongondow Utara', '2020-01-12 00:29:46'),
(379, 71, 7109, 'Kab Kepulauan Siau Tagulandang Biaro (Sitaro)', '2020-01-12 00:29:46'),
(380, 71, 7110, 'Kab Bolaang Mongondow Timur', '2020-01-12 00:29:46'),
(381, 71, 7111, 'Kab Bolaang Mongondow Selatan', '2020-01-12 00:29:46'),
(382, 71, 7171, 'Kota Manado', '2020-01-12 00:29:46'),
(383, 71, 7172, 'Kota Bitung', '2020-01-12 00:29:46'),
(384, 71, 7173, 'Kota Tomohon', '2020-01-12 00:29:46'),
(385, 71, 7174, 'Kota Kotamobagu', '2020-01-12 00:29:46'),
(386, 72, 7201, 'Kab Banggai', '2020-01-12 00:29:46'),
(387, 72, 7202, 'Kab Poso', '2020-01-12 00:29:46'),
(388, 72, 7203, 'Kab Donggala', '2020-01-12 00:29:46'),
(389, 72, 7204, 'Kab Toli-Toli', '2020-01-12 00:29:46'),
(390, 72, 7205, 'Kab Buol', '2020-01-12 00:29:46'),
(391, 72, 7206, 'Kab Morowali', '2020-01-12 00:29:46'),
(392, 72, 7207, 'Kab Banggai Kepulauan', '2020-01-12 00:29:46'),
(393, 72, 7208, 'Kab Parigi Moutong', '2020-01-12 00:29:46'),
(394, 72, 7209, 'Kab Tojo Una-Una', '2020-01-12 00:29:47'),
(395, 72, 7210, 'Kab Sigi', '2020-01-12 00:29:47'),
(396, 72, 7211, 'Kab Banggai Laut', '2020-01-12 00:29:47'),
(397, 72, 7212, 'Kab Morowali Utara', '2020-01-12 00:29:47'),
(398, 72, 7271, 'Kota Palu', '2020-01-12 00:29:47'),
(399, 73, 7301, 'Kab Kepulauan Selayar', '2020-01-12 00:29:47'),
(400, 73, 7302, 'Kab Bulukumba', '2020-01-12 00:29:47'),
(401, 73, 7303, 'Kab Bantaeng', '2020-01-12 00:29:47'),
(402, 73, 7304, 'Kab Jeneponto', '2020-01-12 00:29:47'),
(403, 73, 7305, 'Kab Takalar', '2020-01-12 00:29:47'),
(404, 73, 7306, 'Kab Gowa', '2020-01-12 00:29:47'),
(405, 73, 7307, 'Kab Sinjai', '2020-01-12 00:29:47'),
(406, 73, 7308, 'Kab Bone', '2020-01-12 00:29:47'),
(407, 73, 7309, 'Kab Maros', '2020-01-12 00:29:47'),
(408, 73, 7310, 'Kab Pangkajene Kepulauan', '2020-01-12 00:29:47'),
(409, 73, 7311, 'Kab Barru', '2020-01-12 00:29:47'),
(410, 73, 7312, 'Kab Soppeng', '2020-01-12 00:29:47'),
(411, 73, 7313, 'Kab Wajo', '2020-01-12 00:29:47'),
(412, 73, 7314, 'Kab Sidenreng Rappang', '2020-01-12 00:29:48'),
(413, 73, 7315, 'Kab Pinrang', '2020-01-12 00:29:48'),
(414, 73, 7316, 'Kab Enrekang', '2020-01-12 00:29:48'),
(415, 73, 7317, 'Kab Luwu', '2020-01-12 00:29:48'),
(416, 73, 7318, 'Kab Tana Toraja', '2020-01-12 00:29:48'),
(417, 73, 7322, 'Kab Luwu Utara', '2020-01-12 00:29:48'),
(418, 73, 7324, 'Kab Luwu Timur', '2020-01-12 00:29:48'),
(419, 73, 7326, 'Kab Toraja Utara', '2020-01-12 00:29:48'),
(420, 73, 7371, 'Kota Makassar', '2020-01-12 00:29:48'),
(421, 73, 7372, 'Kota Parepare', '2020-01-12 00:29:48'),
(422, 73, 7373, 'Kota Palopo', '2020-01-12 00:29:48'),
(423, 74, 7401, 'Kab Kolaka', '2020-01-12 00:29:48'),
(424, 74, 7402, 'Kab Konawe', '2020-01-12 00:29:48'),
(425, 74, 7403, 'Kab Muna', '2020-01-12 00:29:48'),
(426, 74, 7404, 'Kab Buton', '2020-01-12 00:29:48'),
(427, 74, 7405, 'Kab Konawe Selatan', '2020-01-12 00:29:48'),
(428, 74, 7406, 'Kab Bombana', '2020-01-12 00:29:48'),
(429, 74, 7407, 'Kab Wakatobi', '2020-01-12 00:29:48'),
(430, 74, 7408, 'Kab Kolaka Utara', '2020-01-12 00:29:48'),
(431, 74, 7409, 'Kab Konawe Utara', '2020-01-12 00:29:49'),
(432, 74, 7410, 'Kab Buton Utara', '2020-01-12 00:29:49'),
(433, 74, 7411, 'Kab Kolaka Timur', '2020-01-12 00:29:49'),
(434, 74, 7412, 'Kab Konawe Kepulauan', '2020-01-12 00:29:49'),
(435, 74, 7413, 'Kab Muna Barat', '2020-01-12 00:29:49'),
(436, 74, 7414, 'Kab Buton Tengah', '2020-01-12 00:29:49'),
(437, 74, 7415, 'Kab Buton Selatan', '2020-01-12 00:29:49'),
(438, 74, 7471, 'Kota Kendari', '2020-01-12 00:29:49'),
(439, 74, 7472, 'Kota Bau-Bau', '2020-01-12 00:29:49'),
(440, 75, 7501, 'Kab Gorontalo', '2020-01-12 00:29:49'),
(441, 75, 7502, 'Kab Boalemo', '2020-01-12 00:29:49'),
(442, 75, 7503, 'Kab Bone Bolango', '2020-01-12 00:29:49'),
(443, 75, 7504, 'Kab Pohuwato', '2020-01-12 00:29:49'),
(444, 75, 7505, 'Kab Gorontalo Utara', '2020-01-12 00:29:49'),
(445, 75, 7571, 'Kota Gorontalo', '2020-01-12 00:29:49'),
(446, 76, 7601, 'Kab Mamuju Utara', '2020-01-12 00:29:49'),
(447, 76, 7602, 'Kab Mamuju', '2020-01-12 00:29:49'),
(448, 76, 7603, 'Kab Mamasa', '2020-01-12 00:29:49'),
(449, 76, 7604, 'Kab Polewali Mandar', '2020-01-12 00:29:49'),
(450, 76, 7605, 'Kab Majene', '2020-01-12 00:29:49'),
(451, 76, 7606, 'Kab Mamuju Tengah', '2020-01-12 00:29:49'),
(452, 81, 8101, 'Kab Maluku Tengah', '2020-01-12 00:29:50'),
(453, 81, 8102, 'Kab Maluku Tenggara', '2020-01-12 00:29:50'),
(454, 81, 8103, 'Kab Maluku Tenggara Barat', '2020-01-12 00:29:50'),
(455, 81, 8104, 'Kab Buru', '2020-01-12 00:29:50'),
(456, 81, 8105, 'Kab Seram Bagian Timur', '2020-01-12 00:29:50'),
(457, 81, 8106, 'Kab Seram Bagian Barat', '2020-01-12 00:29:50'),
(458, 81, 8107, 'Kab Kepulauan Aru', '2020-01-12 00:29:50'),
(459, 81, 8108, 'Kab Maluku Barat Daya', '2020-01-12 00:29:50'),
(460, 81, 8109, 'Kab Buru Selatan', '2020-01-12 00:29:50'),
(461, 81, 8171, 'Kota Ambon', '2020-01-12 00:29:50'),
(462, 81, 8172, 'Kota Tual', '2020-01-12 00:29:50'),
(463, 82, 8201, 'Kab Halmahera Barat', '2020-01-12 00:29:50'),
(464, 82, 8202, 'Kab Halmahera Tengah', '2020-01-12 00:29:50'),
(465, 82, 8203, 'Kab Halmahera Utara', '2020-01-12 00:29:50'),
(466, 82, 8204, 'Kab Halmahera Selatan', '2020-01-12 00:29:50'),
(467, 82, 8205, 'Kab Kepulauan Sula', '2020-01-12 00:29:50'),
(468, 82, 8206, 'Kab Halmahera Timur', '2020-01-12 00:29:50'),
(469, 82, 8207, 'Kab Pulau Morotai', '2020-01-12 00:29:50'),
(470, 82, 8208, 'Kab Pulau Taliabu', '2020-01-12 00:29:50'),
(471, 82, 8271, 'Kota Ternate', '2020-01-12 00:29:50'),
(472, 82, 8272, 'Kota Tidore Kepulauan', '2020-01-12 00:29:50'),
(473, 91, 9101, 'Kab Merauke', '2020-01-12 00:29:50'),
(474, 91, 9102, 'Kab Jayawijaya', '2020-01-12 00:29:51'),
(475, 91, 9103, 'Kab Jayapura', '2020-01-12 00:29:51'),
(476, 91, 9104, 'Kab Nabire', '2020-01-12 00:29:51'),
(477, 91, 9105, 'Kab Kepulauan Yapen', '2020-01-12 00:29:51'),
(478, 91, 9106, 'Kab Biak Numfor', '2020-01-12 00:29:51'),
(479, 91, 9107, 'Kab Puncak Jaya', '2020-01-12 00:29:51'),
(480, 91, 9108, 'Kab Paniai', '2020-01-12 00:29:51'),
(481, 91, 9109, 'Kab Mimika', '2020-01-12 00:29:51'),
(482, 91, 9110, 'Kab Sarmi', '2020-01-12 00:29:51'),
(483, 91, 9111, 'Kab Keerom', '2020-01-12 00:29:51'),
(484, 91, 9112, 'Kab Pegunungan Bintang', '2020-01-12 00:29:51'),
(485, 91, 9113, 'Kab Yahukimo', '2020-01-12 00:29:52'),
(486, 91, 9114, 'Kab Tolikara', '2020-01-12 00:29:52'),
(487, 91, 9115, 'Kab Waropen', '2020-01-12 00:29:52'),
(488, 91, 9116, 'Kab Boven Digoel', '2020-01-12 00:29:52'),
(489, 91, 9117, 'Kab Mappi', '2020-01-12 00:29:52'),
(490, 91, 9118, 'Kab Asmat', '2020-01-12 00:29:52'),
(491, 91, 9119, 'Kab Supiori', '2020-01-12 00:29:52'),
(492, 91, 9120, 'Kab Mamberamo Raya', '2020-01-12 00:29:52'),
(493, 91, 9121, 'Kab Mamberamo Tengah', '2020-01-12 00:29:52'),
(494, 91, 9122, 'Kab Yalimo', '2020-01-12 00:29:52'),
(495, 91, 9123, 'Kab Lanny Jaya', '2020-01-12 00:29:52'),
(496, 91, 9124, 'Kab Nduga', '2020-01-12 00:29:52'),
(497, 91, 9125, 'Kab Puncak', '2020-01-12 00:29:52'),
(498, 91, 9126, 'Kab Dogiyai', '2020-01-12 00:29:52'),
(499, 91, 9127, 'Kab Intan Jaya', '2020-01-12 00:29:52'),
(500, 91, 9128, 'Kab Deiyai', '2020-01-12 00:29:53'),
(501, 91, 9171, 'Kota Jayapura', '2020-01-12 00:29:53'),
(502, 92, 9201, 'Kab Sorong', '2020-01-12 00:29:53'),
(503, 92, 9202, 'Kab Manokwari', '2020-01-12 00:29:53'),
(504, 92, 9203, 'Kab Fakfak', '2020-01-12 00:29:53'),
(505, 92, 9204, 'Kab Sorong Selatan', '2020-01-12 00:29:53'),
(506, 92, 9205, 'Kab Raja Ampat', '2020-01-12 00:29:53'),
(507, 92, 9206, 'Kab Teluk Bintuni', '2020-01-12 00:29:53'),
(508, 92, 9207, 'Kab Teluk Wondama', '2020-01-12 00:29:53'),
(509, 92, 9208, 'Kab Kaimana', '2020-01-12 00:29:53'),
(510, 92, 9209, 'Kab Tambrauw', '2020-01-12 00:29:53'),
(511, 92, 9210, 'Kab Maybrat', '2020-01-12 00:29:53'),
(512, 92, 9211, 'Kab Manokwari Selatan', '2020-01-12 00:29:53'),
(513, 92, 9212, 'Kab Pegunungan Arfak', '2020-01-12 00:29:53'),
(514, 92, 9271, 'Kota Sorong', '2020-01-12 00:29:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=515;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

