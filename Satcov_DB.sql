-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2022 at 11:38 AM
-- Server version: 8.0.28
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satcov`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_transaction` int NOT NULL,
  `kode_saham` varchar(255) NOT NULL,
  `lot` bigint NOT NULL,
  `harga` bigint NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lot_sell_check` bigint DEFAULT NULL,
  `harga_trans` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_transaction`, `kode_saham`, `lot`, `harga`, `username`, `status`, `lot_sell_check`, `harga_trans`) VALUES
(1, 'A', 100, 476754000, 'a', 'Buy', 160, 36539),
(2, 'A', 10, 18892000, 'a', 'Sell', NULL, 18892),
(3, 'A', 10, 34225000, 'a', 'Sell', NULL, 34225),
(4, 'A', 10, 10095000, 'a', 'Sell', NULL, 10095),
(5, 'A', 10, 11980000, 'a', 'Sell', NULL, 11980),
(6, 'BBCA', 400, 60240000, '7asley', 'Buy', 400, 1506),
(7, 'A', 100, 257520000, 'a', 'Buy', NULL, 25752),
(8, 'ISAT', 5, 10165500, 'zoecaro', 'Buy', 5, 20331),
(9, 'GGRM', 10, 20957000, 'zoecaro', 'Buy', 10, 20957),
(10, 'ZINC', 5, 18373400, 'zoecaro', 'Buy', 8, 15346),
(11, 'ZINC', 3, 10700400, 'zoecaro', 'Buy', NULL, 35668),
(12, 'AADC', 100, 112824000, 'airacilly', 'Buy', 90, 12536),
(13, 'AADC', 10, 22364000, 'airacilly', 'Sell', NULL, 22364),
(14, 'YPAS', 100, 54420000, 'airacilly', 'Buy', 100, 5442),
(15, 'STTP', 100, 17302000, 'alexaurfav', 'Buy', 10, 17302),
(16, 'STTP', 90, 323397000, 'alexaurfav', 'Sell', NULL, 35933),
(17, 'MRAT', 1000, 13040000, 'alexxx', 'Buy', 100, 1304),
(18, 'MRAT', 900, 3343410000, 'alexxx', 'Sell', NULL, 37149),
(19, 'TLKM', 1000, 11920000, 'andremande', 'Buy', 100, 1192),
(20, 'TLKM', 900, 3593970000, 'andremande', 'Sell', NULL, 39933),
(21, 'USEC', 1000, 15300000, 'alonastob', 'Buy', 100, 1530),
(22, 'USEC', 900, 2824380000, 'alonastob', 'Sell', NULL, 31382),
(23, 'KAEN', 5, 10634500, 'zeuskaleb', 'Buy', 5, 21269),
(24, 'KBLV', 10, 529000, 'waltermellon', 'Buy', 10, 529),
(25, 'TLKM', 10, 4012000, 'waltermellon', 'Buy', 5, 8024),
(26, 'TLKM', 5, 17508000, 'waltermellon', 'Sell', NULL, 35016),
(27, 'YPAS', 90, 86661000, 'angeladeangel', 'Buy', 90, 9629),
(28, 'STTP', 10, 2717400, 'angeladeangel', 'Buy', 1, 27174),
(29, 'STTP', 9, 32285700, 'angeladeangel', 'Sell', NULL, 35873),
(30, 'BUKA', 5, 738000, 'avc', 'Buy', 5, 1476),
(31, 'WKWK', 1, 89500, 'avc', 'Buy', 1, 895),
(32, 'UNVR', 5, 1681000, 'b', 'Buy', 5, 3362),
(33, 'MLNG', 3, 134400, 'b', 'Buy', 3, 448),
(34, 'KRAS', 5, 2224500, 'c', 'Buy', 5, 4449),
(35, 'ULTJ', 5, 3097000, 'c', 'Buy', 5, 6194),
(36, 'ATIT', 10, 49600, 'd', 'Buy', 8, 62),
(37, 'ATIT', 2, 7790600, 'd', 'Sell', NULL, 38953),
(38, 'DOTS', 10, 2388000, 'danames', 'Buy', 10, 2388),
(39, 'BBRI', 20, 77026000, 'danames', 'Buy', 20, 38513),
(40, 'ISAT', 20, 12006000, 'davidxon', 'Buy', 20, 6003),
(41, 'FILM', 50, 5485000, 'davidxon', 'Buy', 50, 1097),
(42, 'EMAS', 5, 141500, 'bagos', 'Buy', 5, 283),
(43, 'MEGA', 10, 10570000, 'bagos', 'Buy', 10, 10570),
(44, 'GOTO', 5, 1458500, 'banksiet', 'Buy', 5, 2917),
(45, 'BBCA', 10, 14532600, 'banksiet', 'Buy', 6, 24221),
(46, 'BBCA', 4, 14934800, 'banksiet', 'Sell', NULL, 37337),
(47, 'KLBF', 6, 11021500, 'ben10fareer', 'Buy', 5, 22043),
(48, 'KLBF', 1, 3741000, 'ben10fareer', 'Sell', NULL, 37410),
(49, 'gaga', 2, 3120000, 'ben10fareer', 'Buy', 2, 15600),
(50, 'AALI', 8, 1607200, 'BKY', 'Buy', 8, 2009),
(51, 'UCID', 6, 1147200, 'BKY', 'Buy', 6, 1912),
(52, 'TTMY', 10, 23377200, 'bobisayang', 'Buy', 7, 33396),
(53, 'TTMY', 3, 3597600, 'bobisayang', 'Sell', NULL, 11992),
(54, 'SMGR', 7, 42415100, 'bukancagur', 'Buy', 14, 39481),
(55, 'SMGR', 7, 14778400, 'bukancagur', 'Buy', NULL, 21112),
(56, 'DFAM', 3, 8357200, 'chrisallen', 'Buy', 4, 15464),
(57, 'DFAM', 1, 3718000, 'chrisallen', 'Buy', NULL, 37180),
(58, 'ADVD', 8, 8247400, 'creenable', 'Buy', 10, 5319),
(59, 'ADVD', 2, 3992200, 'creenable', 'Buy', NULL, 19961),
(60, 'CMPP', 3, 1724700, 'creenable', 'Buy', 3, 5749),
(61, 'SHAP', 3, 11216700, 'dananne', 'Buy', 5, 20797),
(62, 'SHAP', 2, 4977600, 'dananne', 'Buy', NULL, 24888),
(63, 'KLBF', 10, 15780000, 'davities', 'Buy', 8, 19725),
(64, 'KLBF', 2, 2710800, 'davities', 'Sell', NULL, 13554),
(65, 'PING', 2, 5300000, 'davities', 'Buy', 2, 26500),
(66, 'BDMN', 7, 40610300, 'deanxander', 'Buy', 15, 433),
(67, 'BDMN', 3, 11166900, 'deanxander', 'Sell', NULL, 37223),
(68, 'BDMN', 11, 40437100, 'deanxander', 'Buy', NULL, 36761),
(69, 'JSON', 2, 4760400, 'delonxregge', 'Buy', 2, 23802),
(70, 'ABCD', 2, 1452600, 'delonxregge', 'Buy', 2, 7263),
(71, 'TAXI', 3, 5592900, 'delonxregge', 'Buy', 3, 18643),
(72, 'CMPP', 5, 19397000, 'denishes', 'Buy', 5, 38794),
(73, 'EXCL', 3, 6185100, 'denishes', 'Buy', 3, 20617),
(74, 'UNIT', 6, 7939200, 'denishes', 'Buy', 6, 13232),
(75, 'BBCA', 2, 10740400, 'ashiap', 'Buy', 6, 23030),
(76, 'BBCA', 4, 6134400, 'ashiap', 'Buy', NULL, 15336),
(77, 'EMAS', 5, 1779500, 'ashiap', 'Buy', 1, 17795),
(78, 'EMAS', 4, 5052800, 'ashiap', 'Sell', NULL, 12632),
(79, 'hhhh', 3, 2696000, 'aussestar', 'Buy', 2, 13480),
(80, 'hhhh', 1, 3440100, 'aussestar', 'Buy', NULL, 34401),
(81, 'UNDI', 3, 3920700, 'aussestar', 'Buy', 3, 13069),
(82, 'hhhh', 2, 2680800, 'aussestar', 'Sell', NULL, 13404),
(83, 'SNTY', 6, 20287300, 'dranhadid', 'Buy', 7, 28106),
(84, 'SNTY', 1, 3423700, 'dranhadid', 'Buy', NULL, 34237),
(85, 'JSMR', 8, 18319800, 'dranhadid', 'Buy', 6, 30533),
(86, 'JSMR', 2, 2065200, 'dranhadid', 'Sell', NULL, 10326),
(87, 'DMND', 8, 6448500, 'dreygwynne', 'Buy', 9, 7165),
(88, 'DMND', 3, 812400, 'dreygwynne', 'Buy', NULL, 2708),
(89, 'DMND', 2, 3609000, 'dreygwynne', 'Sell', NULL, 18045),
(90, 'ACHI', 2, 3858000, 'dreygwynne', 'Buy', 2, 19290),
(91, 'KAEF', 3, 505500, 'dreygwynne', 'Buy', 3, 1685),
(92, 'TKIM', 6, 10085400, 'dreygwynne', 'Buy', 6, 16809),
(93, 'BOSS', 8, 25807200, 'essentials', 'Buy', 8, 32259),
(94, 'BOSS', 4, 9814800, 'essentials', 'Buy', NULL, 24537),
(95, 'BOSS', 4, 4296000, 'essentials', 'Sell', NULL, 10740),
(96, 'AADC', 7, 10034500, 'essentials', 'Buy', 7, 14335),
(97, 'KAEF', 10, 27758700, 'esterietha', 'Buy', 9, 30843),
(98, 'KAEF', 1, 3474500, 'esterietha', 'Sell', NULL, 34745),
(99, 'FILM', 2, 15393700, 'esterietha', 'Buy', 7, 39376),
(100, 'FILM', 5, 7518500, 'esterietha', 'Buy', NULL, 15037),
(101, 'JSON', 6, 16674000, 'evansanderz', 'Buy', 12, 21865),
(102, 'JSON', 6, 3555000, 'evansanderz', 'Buy', NULL, 5925),
(103, 'PTPP', 6, 5090400, 'evansanderz', 'Buy', 6, 8484),
(104, 'KAEN', 20, 29834000, 'fanithefox', 'Buy', 10, 29834),
(105, 'YPAS', 20, 73196000, 'fanithefox', 'Buy', 20, 36598),
(106, 'KAEN', 10, 25124000, 'fanithefox', 'Sell', NULL, 25124),
(107, 'FGHJ', 16, 12220800, 'frazerson', 'Buy', 6, 20368),
(108, 'FGHJ', 10, 21459000, 'frazerson', 'Sell', NULL, 21459),
(109, 'BMRI', 6, 16539000, 'frazerson', 'Buy', 6, 27565),
(110, 'AGII', 6, 11817600, 'frazerson', 'Buy', 6, 19696),
(111, 'LIFE', 4, 9591200, 'georgeousline', 'Buy', 4, 23978),
(112, 'UNDI', 2, 4482000, 'georgeousline', 'Buy', 0, 22410),
(113, 'UNDI', 2, 7156600, 'georgeousline', 'Sell', NULL, 35783),
(114, 'BMRI', 1, 121900, 'hansriwedari', 'Buy', 1, 1219),
(115, 'CTRA', 1, 767700, 'hansriwedari', 'Buy', 1, 7677),
(116, 'IISH', 1, 1420700, 'hansriwedari', 'Buy', 1, 14207),
(117, 'TMPO', 2, 7363600, 'haqone', 'Buy', 3, 17238),
(118, 'TMPO', 1, 575200, 'haqone', 'Sell', NULL, 5752),
(119, 'TMPO', 2, 5639800, 'haqone', 'Buy', NULL, 28199),
(120, 'ENAK', 1, 1494900, 'hattiekoesendang', 'Buy', 1, 14949),
(121, 'YANG', 20, 22414000, 'hattiekoesendang', 'Buy', 0, 11207),
(122, 'KAEF', 30, 83958000, 'hattiekoesendang', 'Buy', 30, 27986),
(123, 'YANG', 20, 39960000, 'hattiekoesendang', 'Sell', NULL, 19980),
(124, 'MYOR', 50, 156450000, 'imangoblok', 'Buy', 60, 26075),
(125, 'MYOR', 30, 62889000, 'imangoblok', 'Buy', NULL, 20963),
(126, 'MYOR', 20, 71144000, 'imangoblok', 'Sell', NULL, 35572),
(127, 'APEX', 50, 55168300, 'inthecase', 'Buy', 73, 6631),
(128, 'APEX', 23, 22013300, 'inthecase', 'Buy', NULL, 9571),
(129, 'EMAS', 22, 17485600, 'inthecase', 'Buy', 22, 7948),
(130, 'MRAT', 5, 11108000, 'oryzapadi', 'Buy', 5, 22216),
(131, 'VIVA', 77, 223115200, 'janflower', 'Buy', 77, 28976),
(132, 'INDF', 10, 8976000, 'oryzapadi', 'Buy', 10, 8976),
(133, 'BBNI', 44, 67449200, 'janflower', 'Buy', 17, 39676),
(134, 'BBNI', 27, 16283700, 'janflower', 'Sell', NULL, 6031),
(135, 'TTMY', 30, 66168000, 'jasismine', 'Buy', 30, 22056),
(136, 'PURA', 60, 185736000, 'jasismine', 'Buy', 60, 30956),
(137, 'YTTA', 21, 50572000, 'jasismine', 'Buy', 20, 25286),
(138, 'YTTA', 1, 353600, 'jasismine', 'Sell', NULL, 3536),
(139, 'SHAP', 77, 100069200, 'jemmjones', 'Buy', 77, 12996),
(140, 'AALI', 33, 1181800, 'jemmjones', 'Buy', 2, 5909),
(141, 'AALI', 31, 33405600, 'jemmjones', 'Sell', NULL, 10776),
(142, 'ISAT', 10, 4851000, 'jonsonharry', 'Buy', 10, 4851),
(143, 'ARTO', 5, 4888500, 'jonsonharry', 'Buy', 5, 9777),
(144, 'MEGA', 67, 130769100, 'jonstiven', 'Buy', 33, 39627),
(145, 'MEGA', 34, 134731800, 'jonstiven', 'Sell', NULL, 39627),
(146, 'UNVR', 33, 131052900, 'jonstiven', 'Buy', 33, 39713),
(147, 'YYNF', 64, 383460400, 'joshuagad', 'Buy', 97, 39532),
(148, 'YYNF', 33, 130455600, 'joshuagad', 'Buy', NULL, 39532),
(149, 'hhhh', 23, 29042100, 'joshuagad', 'Buy', 23, 12627),
(150, 'TMPO', 24, 38886000, 'joshuagad', 'Buy', 10, 38886),
(151, 'TMPO', 14, 54440400, 'joshuagad', 'Sell', NULL, 38886),
(152, 'DMND', 12, 45006000, 'karleena', 'Buy', 12, 37505),
(153, 'BBCA', 6, 23886600, 'karleena', 'Buy', 0, 39811),
(154, 'BBCA', 6, 23886600, 'karleena', 'Sell', NULL, 39811),
(155, 'KAEF', 6, 23953800, 'karleena', 'Buy', 6, 39923),
(156, 'JKTR', 56, 46408800, 'kennyone', 'Buy', 24, 19337),
(157, 'JKTR', 24, 46408800, 'kennyone', 'Buy', NULL, 19337),
(158, 'JKTR', 56, 108287200, 'kennyone', 'Sell', NULL, 19337),
(159, 'SDMU', 34, 132022000, 'kennyone', 'Buy', 34, 38830),
(160, 'FOOD', 77, 385724100, 'larrytothemoon', 'Buy', 111, 39951),
(161, 'SDMU', 56, 86372000, 'larrytothemoon', 'Buy', 22, 39260),
(162, 'SDMU', 34, 133484000, 'larrytothemoon', 'Sell', NULL, 39260),
(163, 'FOOD', 34, 78101400, 'larrytothemoon', 'Buy', NULL, 22971),
(164, 'RAWR', 14, 113972900, 'leothelion', 'Buy', 29, 39301),
(165, 'RAWR', 15, 58951500, 'leothelion', 'Buy', NULL, 39301),
(166, 'LPPF', 45, 89056800, 'leothelion', 'Buy', 28, 37473),
(167, 'LPPF', 23, 86187900, 'leothelion', 'Sell', NULL, 37473),
(168, 'LPPF', 6, 6616200, 'leothelion', 'Buy', NULL, 11027),
(169, 'FOOD', 67, 260402200, 'lilyareviolet', 'Buy', 67, 38866),
(170, 'SUCO', 25, 12117000, 'lilyareviolet', 'Buy', 0, 24234),
(171, 'SUCO', 20, 48468000, 'lilyareviolet', 'Sell', NULL, 24234),
(172, 'SUCO', 5, 12117000, 'lilyareviolet', 'Sell', NULL, 24234),
(173, 'TTMY', 88, 351788800, 'lilyareviolet', 'Buy', 88, 39976),
(174, 'ISAT', 44, 75808100, 'lukevansthewall', 'Buy', 19, 39899),
(175, 'ISAT', 44, 32516000, 'lukevansthewall', 'Sell', NULL, 7390),
(176, 'ISAT', 99, 73161000, 'lukevansthewall', 'Buy', 99, 7390),
(177, 'ITIC', 4, 15481600, 'lukevansthewall', 'Buy', 4, 38704),
(178, 'ISAT', 80, 256968000, 'lukevansthewall', 'Sell', NULL, 32121),
(179, 'YANG', 3, 43298000, 'makgugu', 'Buy', 14, 39181),
(180, 'DFAM', 3, 11889900, 'makgugu', 'Buy', 3, 39633),
(181, 'YANG', 5, 19590500, 'makgugu', 'Buy', NULL, 39181),
(182, 'YANG', 6, 11953200, 'makgugu', 'Buy', NULL, 19922),
(183, 'YUHU', 56, 170134800, 'mandactx', 'Buy', 44, 38667),
(184, 'YUHU', 12, 46400400, 'mandactx', 'Sell', NULL, 38667),
(185, 'SBJG', 20, 78302000, 'mandactx', 'Buy', 20, 39151),
(186, 'UCID', 25, 96797500, 'mandactx', 'Buy', 25, 38719),
(187, 'ewrq', 13, 50443900, 'mandactx', 'Buy', 13, 38803),
(188, 'DFAM', 56, 221239200, 'mandactx', 'Buy', 56, 39507);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `username`, `uploaded_on`, `status`) VALUES
(105, '1628699702049.jpg', '7asley', '2022-12-31 11:30:17', '1'),
(106, 'download (1).jpg', 'a', '2022-12-31 11:41:50', '1'),
(107, 'pp satcov.jpeg', 'bukangayuh', '2022-12-31 11:43:33', '1'),
(108, '01-image_1606811340_5fc5feccd3c06.jpg', 'b', '2022-12-31 11:45:59', '1'),
(110, 'download (2).jpg', 'acdc', '2022-12-31 11:49:22', '1'),
(111, '888a19f3aee75510a28fd699818ffb17--chicken-logo-fried-chicken.jpg', 'c', '2022-12-31 11:49:48', '1'),
(112, '75f01dc94d1855666f6f5a9f0aa4f5ed.jpg', 'd', '2022-12-31 11:50:25', '1'),
(113, 'princess-crazy-selfie-wreck-it-ralph.jpg', 'zoecaro', '2022-12-31 11:53:23', '1'),
(114, 'tag.png', 'zeuskaleb', '2022-12-31 12:18:07', '1'),
(115, '6ef93fc9f786cbf8e19d4a764e20e54a.jpg', 'waltermellon', '2022-12-31 12:18:42', '1'),
(116, 'download (3).jpg', 'airacilly', '2022-12-31 12:21:12', '1'),
(117, 'download (4).jpg', 'alexaurfav', '2022-12-31 12:24:32', '1'),
(118, 'download (5).jpg', 'alexxx', '2022-12-31 12:26:09', '1'),
(119, 'download (6).jpg', 'andremande', '2022-12-31 12:30:32', '1'),
(120, 'download (7).jpg', 'alonastob', '2022-12-31 12:31:02', '1'),
(121, 'download (8).jpg', 'angeladeangel', '2022-12-31 12:40:44', '1'),
(122, 'fa504022dfd14750728c0e871827b2a8.jpg', 'danames', '2022-12-31 13:07:44', '1'),
(123, 'a920ca127ff7b7befe226ae5a6cbad01.jpg', 'davidxon', '2022-12-31 13:09:32', '1'),
(124, 'c6ca5b0546165d177c2277cc6bd5c0cc.jpg', 'deanxander', '2022-12-31 13:12:12', '1'),
(125, 'c398e8158218d2a49f6e5e21813dd886.jpg', 'dranhadid', '2022-12-31 13:13:29', '1'),
(126, '8e39a5fd492e9b4a5e61a5dde65a679f.jpg', 'davities', '2022-12-31 13:14:18', '1'),
(127, '53cf0770a97ae28be5f63f7c8f30070d.jpg', 'janflower', '2022-12-31 13:15:06', '1'),
(129, '8e39a5fd492e9b4a5e61a5dde65a679f.jpg', 'jasismine', '2022-12-31 13:15:51', '1'),
(130, '6548a9b1c3b612e08a0cd981838efbd2.jpg', 'joshuagad', '2022-12-31 13:17:10', '1'),
(131, '7c852e6871f663fb094ed6ad0004f9c5.jpg', 'leothelion', '2022-12-31 13:18:10', '1'),
(132, '5a7eacdb7fc16fbb37e3077a882dd024.jpg', 'lukevansthewall', '2022-12-31 13:18:41', '1'),
(133, 'bdfb3cbf5df9d38b7600bc23f6433317.jpg', 'marcuspeterpan', '2022-12-31 13:19:15', '1'),
(134, 'f5b569ae4329bb1bc4782a22c2f4a996.jpg', 'maxdylann', '2022-12-31 13:19:50', '1'),
(135, '084a290bef31719da38c85a114e06a81.jpg', 'moerex', '2022-12-31 13:20:34', '1'),
(136, 'desktop-wallpaper-pin-on-dark-icon-dark-anime-pfp.jpg', 'oneclarey', '2022-12-31 13:22:19', '1'),
(137, 'cewe1.jpg', 'rellinthehouse', '2022-12-31 13:27:24', '1'),
(138, 'c7320fa33d88ab3af661df35e9bdb11c.jpg', 'rosearered', '2022-12-31 13:28:00', '1'),
(139, '02755781510d2ee56d52220128f4c23c.jpg', 'saskeh007', '2022-12-31 13:28:32', '1'),
(140, '13815b3949c29409e64958d48ee68640.jpg', 'seirandakids', '2022-12-31 13:29:07', '1'),
(141, '0065a52f99f6aa1b62ebadd8d360a2f1.jpg', 'sunnyx', '2022-12-31 13:29:49', '1'),
(142, 'cd9f1abf4d9a2b0c62d5f8050015187e.jpg', 'thompemson', '2022-12-31 13:30:20', '1'),
(143, '30b281f5d054fe2e357138221b802d71.jpg', 'tyroneluvv', '2022-12-31 13:30:59', '1'),
(144, 'abd4f137640e90900113382b682d1bd1.jpg', 'svvarousk1', '2022-12-31 13:35:46', '1'),
(145, '8a009d3309ecb444a6716608aa82c27b.jpg', 'peterpenter', '2022-12-31 13:36:37', '1'),
(146, '0de3602f1daf2b0b5e322fbe0dfd1545.jpg', 'pierilindyx', '2022-12-31 13:37:23', '1'),
(147, 'abd4f137640e90900113382b682d1bd1.jpg', 'tsukire', '2022-12-31 13:38:43', '1'),
(148, '24745b73ea6084a828cbd2f30540890f.jpg', 'uchihaerie', '2022-12-31 13:39:23', '1'),
(149, 'ead6e370bd567feecee8002041d78311--hair-images-ulzzang-girl.jpg', 'dreygwynne', '2022-12-31 13:45:54', '1'),
(150, 'magdalen_000526.jpg', 'bagos', '2022-12-31 13:46:22', '1'),
(151, '4709d2db2176ef94366342ee6eb8ee09.jpg', 'esterietha', '2022-12-31 13:46:35', '1'),
(152, 'b3d40b9d2e2234b53973fe03af2ddc71.jpg', 'fanithefox', '2022-12-31 13:47:10', '1'),
(153, '921a81cf1eadc73f9219e4430ce0787b.jpg', 'inthecase', '2022-12-31 13:48:12', '1'),
(154, '8503a0de97a29394e070699a8f6dd229.jpg', 'jemmjones', '2022-12-31 13:48:55', '1'),
(155, 'magdalen_000531.jpg', 'banksiet', '2022-12-31 13:49:02', '1'),
(156, 'magdalen_000538.jpg', 'ben10fareer', '2022-12-31 13:50:58', '1'),
(157, '533177a1b4a80502ad5816aea61f3874_54d5b1f302.jpeg', 'karleena', '2022-12-31 13:52:13', '1'),
(158, 'magdalen_000544.jpg', 'BKY', '2022-12-31 13:52:45', '1'),
(159, 'original.jpg', 'mandactx', '2022-12-31 13:53:40', '1'),
(160, 'magdalen_000550.jpg', 'bobisayang', '2022-12-31 13:54:08', '1'),
(161, 'magdalen_000320.jpg', 'bukancagur', '2022-12-31 13:55:38', '1'),
(162, 'c3c993e214f9bed8ff5e92660841c288.jpg', 'mbacaroline', '2022-12-31 13:57:30', '1'),
(163, 'magdalen_000325.jpg', 'chrisallen', '2022-12-31 13:57:44', '1'),
(164, '68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f5674414b475a67744b746a7a77513d3d2d3733343234393337392e313561303162353.png', 'miligramm', '2022-12-31 13:58:14', '1'),
(165, 'magdalen_000338.jpg', 'creenable', '2022-12-31 13:58:51', '1'),
(166, 'magdalen_000339.jpg', 'dananne', '2022-12-31 14:00:44', '1'),
(167, 'magdalen_000340.jpg', 'delonxregge', '2022-12-31 14:04:15', '1'),
(168, 'magdalen_000349.jpg', 'denishes', '2022-12-31 14:05:57', '1'),
(169, 'b894ef3605a69dcf7926da3944255100.jpg', 'minmaxx', '2022-12-31 14:07:00', '1'),
(170, 'magdalen_000162.jpg', 'ashiap', '2022-12-31 14:07:33', '1'),
(171, 'tumblr_os9t0od5Ze1vyeo57o9_400.jpg', 'miranellous', '2022-12-31 14:07:50', '1'),
(172, 'ceb5096a12a22c5c9ee491689a647173.jpg', 'neweliza', '2022-12-31 14:08:21', '1'),
(173, 'magdalen_000268.jpg', 'aussestar', '2022-12-31 14:09:06', '1'),
(174, 'magdalen_000273.jpg', 'essentials', '2022-12-31 14:13:44', '1'),
(175, 'b54810ff75828ceea9d0bf44fc7bd83d--flower-motif-trái-tim.jpg', 'notannabelle', '2022-12-31 14:15:37', '1'),
(176, 'magdalen_000054.jpg', 'evansanderz', '2022-12-31 14:16:34', '1'),
(177, '343337624042203.jpg', 'onedahour', '2022-12-31 14:16:36', '1'),
(178, 'self-portrait-photography.jpg', 'lilyareviolet', '2022-12-31 14:17:44', '1'),
(179, 'magdalen_000053.jpg', 'frazerson', '2022-12-31 14:19:34', '1'),
(180, 'new_000906.png', 'georgeousline', '2022-12-31 14:21:31', '1'),
(181, 'ce9c7c77726d75047302a4a2148f7014.jpg', 'larrytothemoon', '2022-12-31 14:21:59', '1'),
(182, 'magdalen_000734.png', 'hansriwedari', '2022-12-31 14:22:51', '1'),
(183, 'new_000379.png', 'haqone', '2022-12-31 14:24:31', '1'),
(184, 'new_000556.png', 'hattiekoesendang', '2022-12-31 14:27:12', '1'),
(185, '0005.gif', 'oryzapadi', '2022-12-31 14:27:48', '1'),
(186, 'new_000785.png', 'imangoblok', '2022-12-31 14:28:37', '1'),
(190, 'Mang_Yayan_fischl_genshin_impact_anime_screenshots_7695b31b-e71d-42dd-a3ef-5746ec68528b.png', 'avc', '2022-12-31 14:38:20', '1'),
(191, 'ExkR3-yVcAAHtp6.jpg', 'jonsonharry', '2022-12-31 16:37:00', '1'),
(192, 'dc09b766a2d9f69edfc66fa090b7071a.jpg', 'jonstiven', '2022-12-31 16:39:26', '1'),
(193, '518fe54b59eb40c834f942aa2edfd0c7.jpg', 'kennyone', '2022-12-31 16:41:23', '1'),
(194, '173095-cute-two-labrador-caine-dog-couple-puppy-animal.jpg', 'makgugu', '2022-12-31 16:41:59', '1'),
(195, '960103caf5ff6c576fb22a0ebec01b98.jpg', 'mcdian77', '2022-12-31 16:43:45', '1'),
(196, 'Original_Doge_meme.jpg', 'mckellenxj', '2022-12-31 16:49:09', '1'),
(197, 'dressed-up-pets-for-wedding-and-engagement-photos_002.jpg', 'mellonials', '2022-12-31 16:49:38', '1'),
(198, 'b2a6c34f99817522e4014c29863fc601.jpg', 'nickeymouse', '2022-12-31 16:52:11', '1'),
(199, 'E_uXgdJVQAYlRlT.jpg', 'nicolecaro', '2022-12-31 16:53:04', '1'),
(200, 'E_uUc10VQAQ3e55.jpg', 'owenathic', '2022-12-31 16:54:15', '1'),
(201, 'd7dc41b44c153a5b33c19fe82d98fc06_22062911065160747.jpeg', 'paulusmahal', '2022-12-31 16:56:20', '1'),
(202, 'MpeWsVNs-Udin-Sedunia-Okezone.jpg', 'oopterbaik', '2022-12-31 16:57:20', '1'),
(203, 'S94srFJUT6TuokD5ww5KMm.png', 'oemarbakrie', '2022-12-31 17:00:39', '1'),
(204, '045560200_1554951216-37385917_232585854247549_6306660029609017344_n.jpg', 'randomperson', '2022-12-31 17:01:10', '1'),
(205, '20180129174603gal-gadot-wonder-woman-today-tease-17082467cfdfdf56e7e4fb7509d997f5afcc6d.jpg', 'sinchass', '2022-12-31 17:03:18', '1'),
(206, 'p11982582_e_v8_ac.jpg', 'shyowl', '2022-12-31 17:05:33', '1'),
(207, '35c71cf3caaea55d9ae328a551ed97e5--woody-woodpecker-woodpeckers.jpg', 'stedyven', '2022-12-31 17:08:18', '1'),
(208, 'e9d2868a41b5d1de883fb1ced74bf23f.jpg', 'stevendans', '2022-12-31 17:09:39', '1'),
(209, '1200px-7-eleven-brand.svg.png', 'sveneleven', '2022-12-31 17:10:38', '1'),
(210, '99079df74aa10ecc76231efb7b089c08--fashion--moda-fashion.jpg', 'tuccivinny', '2022-12-31 17:12:25', '1'),
(211, '1656753859_Apa-yang-harus-ditonton-sebelum-Anda-melihat-Thor-Love-and.jpg', 'vincenthorz', '2022-12-31 17:15:22', '1'),
(212, 'artworks-000186243808-g4tvpi-t500x500.jpg', 'woodcarrot', '2022-12-31 17:17:57', '1'),
(213, 'df492ci-763b02b3-bf0e-4d03-a62a-d9f493701376.jpg', 'xeezee', '2022-12-31 17:20:10', '1'),
(214, '1311699-10-potret-udin-penyok.jpg', 'udin123', '2022-12-31 17:21:32', '1'),
(215, 'meme-mixue-bagian-2-2_11.jpeg', 'udinsedunia', '2022-12-31 17:23:28', '1'),
(216, 'c1ee4ae8ac68f9f0fd7e098a64ab3089.jpg', 'sasageyo', '2022-12-31 17:24:54', '1'),
(217, 'c8a4e9a56b1deac5634d4dab292f760e.jpg', 'sameventa', '2022-12-31 17:26:46', '1'),
(218, '2d8060b353134ea31f99b0065e2ae55c.jpg', 'samoery', '2022-12-31 17:28:36', '1'),
(219, '3235613782.jpg', 'richpierre', '2022-12-31 17:29:55', '1');

-- --------------------------------------------------------

--
-- Table structure for table `saham`
--

CREATE TABLE `saham` (
  `id` int NOT NULL,
  `kode_saham` varchar(10) NOT NULL,
  `nama_saham` varchar(255) NOT NULL,
  `harga_saham` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saham`
--

INSERT INTO `saham` (`id`, `kode_saham`, `nama_saham`, `harga_saham`) VALUES
(108, 'A', 'A', 34586),
(85, 'AADC', 'Asep Arasep Dinamo Center Tbk.', 7207),
(101, 'AALI', 'Astra Agro Lestari Tbk.', 35315),
(107, 'ABCD', 'ABCD Inc', 36969),
(5, 'ACES', 'Ace Hardware Indonesia Tbk.', 5987),
(77, 'ACHI', 'Alex Chindopler Inc.', 14408),
(114, 'ad', 'aada', 5123),
(115, 'adad', 'adadadada', 2063),
(113, 'ADVD', 'ADFVV', 18312),
(6, 'AGII', 'Aneka Gas Industri Tbk PT', 24812),
(7, 'AMRT', 'Sumber Alfaria Trijaya Tbk.', 37767),
(8, 'APEX', 'Apexindo Pratama Duta Tbk.', 9378),
(9, 'APLN', 'Agung Podomoro Land Tbk.', 38146),
(10, 'ARTO', 'Bank Jago Tbk.', 867),
(11, 'ASII', 'Astra International Tbk.	', 32288),
(92, 'ATIT', 'ATEAT Corp.', 11472),
(12, 'BABP', 'Bank MNC Internasional Tbk.	', 19579),
(1, 'BBCA', 'Bank Central Asia Tbk PT', 16380),
(13, 'BBHI', 'Allo Bank Indonesia Tbk.', 9540),
(2, 'BBNI', 'Bank Negara Indonesia (Persero) Tbk PT', 2027),
(14, 'BBRI', 'Bank Rakyat Indonesia (Persero)', 20972),
(15, 'BDMN', 'Bank Danamon Indonesia Tbk.', 32876),
(102, 'BKYN', 'Bukan Yayan Corp.', 23209),
(3, 'BMRI', 'Bank Mandiri (Persero) Tbk PT', 19010),
(16, 'BNGA', 'Bank CIMB Niaga Tbk.	', 10827),
(17, 'BOSS', 'Borneo Olah Sarana Sukses Tbk.', 10655),
(105, 'BRHN', 'Burhan Corp.', 5432),
(18, 'BTEK', 'Bumi Teknokultura Unggul Tbk', 35770),
(19, 'BUKA', 'Bukalapak.com Tbk.', 2118),
(20, 'CAMP', 'Campina Ice Cream Industry Tbk', 15589),
(21, 'CMPP', 'AirAsia Indonesia Tbk.', 14078),
(22, 'CMRY', 'Cisarua Mountain Dairy Tbk.', 31648),
(23, 'CNTX', 'Century Textile Industry Tbk.', 29575),
(24, 'COCO', 'Wahana Interfood Nusantara Tbk', 14526),
(25, 'CTRA', 'Ciputra Development Tbk.', 31676),
(26, 'DFAM', 'Dafam Property Indonesia Tbk.', 39507),
(27, 'DMND', 'Diamond Food Indonesia Tbk.', 37395),
(86, 'DOTS', 'Dawet Oke Tuan Sadino Tbk.', 37490),
(95, 'EMAS', 'Enak Mas Tbk.', 16387),
(28, 'ENAK', 'Champ Resto Indonesia Tbk.', 90),
(120, 'ewrq', 'Tes', 38803),
(29, 'EXCL', 'XL Axiata Tbk.', 17391),
(119, 'FFFF', 'FFFFFFF', 3472),
(126, 'FGHJ', 'FGHJ', 16188),
(30, 'FILM', 'MD Pictures Tbk.', 6924),
(31, 'FOOD', 'Sentra Food Indonesia Tbk.', 8437),
(116, 'gaga', 'adadada', 35262),
(117, 'gggg', 'gggg', 8497),
(32, 'GGRM', 'Gudang Garam Tbk.', 9415),
(33, 'GIAA', 'Garuda Indonesia (Persero) Tbk', 30321),
(34, 'GOTO', 'GoTo Gojek Tokopedia Tbk.', 2668),
(89, 'HADH', 'Hahaha Dua Hati Corp.', 17063),
(118, 'hhhh', 'hhhhhhhhhhhhhh', 17707),
(35, 'HMSP', 'H.M. Sampoerna Tbk.', 12647),
(36, 'ICBP', 'Indofood CBP Sukses Makmur Tbk', 8058),
(97, 'IISH', 'Iwak Itik Sambel Cowek H. Mardi Tbk.', 37006),
(37, 'INAF', 'Indofarma Tbk.', 654),
(38, 'INDF', 'Indofood Sukses Makmur Tbk.', 22955),
(39, 'INPC', 'Bank Artha Graha Internasional Tbk.', 10301),
(40, 'ISAT', 'Indosat Tbk.', 15801),
(41, 'ITIC', 'Indonesian Tobacco Tbk.', 670),
(93, 'JKTR', 'Joko Tingkir Telur Asin Tbk.', 271),
(42, 'JSMR', 'Jasa Marga (Persero) Tbk.', 18929),
(94, 'JSON', 'jakARTah Sound System Tbk.', 2303),
(43, 'KAEF', 'Kimia Farma Tbk.', 13680),
(109, 'KAEN', 'Kaenova Ltd.', 22694),
(44, 'KBLV', 'First Media Tbk.	', 33414),
(45, 'KLBF', 'Kalbe Farma Tbk.', 17694),
(46, 'KRAS', 'Krakatau Steel (Persero) Tbk.', 18466),
(47, 'LIFE', 'Asuransi Jiwa Sinarmas MSIG Tbk.', 39555),
(48, 'LPGI', 'Lippo General Insurance Tbk.', 26350),
(49, 'LPPF', 'Matahari Department Store Tbk.	', 19496),
(50, 'MEGA', 'Bank Mega Tbk.	', 19453),
(51, 'META', 'Nusantara Infrastructure Tbk.', 32782),
(52, 'MITI', 'Mitra Investindo Tbk.', 20181),
(90, 'MLNG', 'Mie Lamongan H. Miing Tbk.', 12503),
(53, 'MNCN', 'Media Nusantara Citra Tbk.', 1561),
(54, 'MRAT', 'Mustika Ratu Tbk.', 22720),
(55, 'MYOR', 'Mayora Indah Tbk.', 30376),
(91, 'NENG', 'Nasi Endog Ngayogyakarta Tbk.', 7268),
(56, 'NETV', 'Net Visi Media Tbk.', 6909),
(82, 'NGAB', 'Nagita Asbes Tbk.', 26329),
(88, 'PING', 'Satria Piningit Tbk.', 33304),
(57, 'PTPP', 'PP (Persero) Tbk.', 14521),
(58, 'PURA', 'Putra Rajawali Kencana Tbk.', 11388),
(106, 'RADO', 'Riding a Dildo', 28943),
(80, 'RAWR', 'Rahmat Wijaya Romansa Tbk.', 23411),
(98, 'RMSS', 'Roti Bakar Mas Salah Tbk.', 19040),
(121, 'SBJG', 'sakit banget jatuh', 25109),
(59, 'SDMU', 'Sidomulyo Selaras Tbk.', 31878),
(87, 'SHAP', 'Sri Hastungkara Purba Tbk.', 21605),
(60, 'SIDO', 'Industri Jamu dan Farmasi Sido Muncul Tbk', 255),
(61, 'SMDR', 'Samudera Indonesia Tbk.', 17423),
(62, 'SMGR', 'Semen Indonesia (Persero) Tbk.', 16539),
(112, 'SNTY', 'Sauna Tuan Yongie', 36615),
(63, 'STTP', 'Siantar Top Tbk.	', 37475),
(78, 'SUCO', 'Sun Corp', 17558),
(96, 'SYNG', 'Sega Oyek Nagih Euy Tbk.', 8436),
(64, 'TAXI', 'Express Transindo Utama Tbk.', 30092),
(111, 'TEST', 'Tes', 5313),
(66, 'TKIM', 'Pabrik Kertas Tjiwi Kimia Tbk', 15772),
(4, 'TLKM', 'Telkom Indonesia (Persero) Tbk PT', 27461),
(65, 'TMPO', 'Tempo Intimedia Tbk.', 31808),
(100, 'TTMY', 'Tempe Tahu Mbak Yuyun Tbk.', 23562),
(67, 'UCID', 'Uni-Charm Indonesia Tbk.', 38719),
(110, 'UDPT', 'Udin P.T.O.T', 9826),
(68, 'ULTJ', 'ultrajaya milk industry & trading co. tbk', 17111),
(103, 'UNDI', 'Udin Digital Inc.', 12013),
(69, 'UNIT', 'Nusantara Inti Corpora Tbk', 4179),
(70, 'UNVR', 'Unilever Indonesia Tbk.', 20675),
(79, 'USEC', 'Udin Sedunia Corp', 20734),
(71, 'VIVA', 'Visi Media Asia Tbk.', 13887),
(99, 'WKWK', 'Waktu Widodari Kayangan Tbk.', 33570),
(72, 'WSKT', 'Waskita Karya (Persero) Tbk.', 30205),
(84, 'YANG', 'Yayan Golf Tbk.', 22781),
(76, 'YHDE', 'Yahoodie', 27683),
(73, 'YPAS', 'Yanaprima Hastapersada Tbk', 35418),
(83, 'YTTA', 'Yang Tahu Tuan Abi Tbk.', 9616),
(81, 'YUHU', 'Bank Yong Urang Hauh', 18886),
(104, 'YYNF', 'Yayan Ruhian Food.', 32492),
(74, 'ZINC', 'Kapuas Prima Coal Tbk.', 34601),
(75, 'ZYRX', 'Zyrexindo Mandiri Buana Tbk.	', 26607);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama_lengkap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `saldo` bigint NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `level`, `saldo`, `email`) VALUES
(25, 'Steven Asley', '7asley', '215bfe02ceae99e383080af925eaa3b28847faa8', 'investor', 1403123760, 'vhatto0@mozilla.org'),
(121, 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'investor', 80935022, 'nheaphy1@pbs.org'),
(115, 'acdc', 'acdc', 'fee390842e961cdc4e4ef5b8a77b53190a6d0b88', 'investor', 530211000, 'mmorrid2@nih.gov'),
(14, 'Cicilly Aira', 'airacilly', '9f3ace0ad8a08159f41172e429d983bb974aa621', 'investor', 83458134, 'rmarmyon3@yelp.com'),
(95, 'Alex Graham', 'alexaurfav', 'fb6ae75c0079854d9c0263012d11ac6e8327ccc0', 'investor', 361026480, 'rmathers4@ibm.com'),
(4, 'Alex Chindopler', 'alexxx', '34c839694129e49f2d9c10f5cd40e224c64f78a4', 'investor', 3856076581, 'pculshew5@va.gov'),
(57, 'Alona Elstob', 'alonastob', '27d13c78fc365ab8916bf7056924d38c82f18a61', 'investor', 2886145774, 'bantill6@biglobe.ne.jp'),
(31, 'John Andrew', 'andremande', 'a1d1f63ad9c8d6f265dbd176efa40c80e3410c36', 'investor', 4159744902, 'bdemschke7@smugmug.com'),
(17, 'Anna Mia', 'anemia', 'a1d1f63ad9c8d6f265dbd176efa40c80e3410c36', 'investor', 60739352, 'ctruggian8@state.gov'),
(56, 'Angela Dee', 'angeladeangel', '89c5bb85abd343587ae7e7883060aa9305d72c18', 'investor', 88972326, 'cmacane9@paginegialle.it'),
(13, 'Elle Angeline', 'angelee', '2ed6cbf2b0d3a5df6ffb6b297d2e54a66a73e9fb', 'investor', 569118869, 'fpactata@yellowpages.com'),
(86, 'Jonny Anrea', 'anreajonn', 'c61596d2e0ae50cddf02d698504913e8b785b7dd', 'investor', 149934411, 'pdrinkallb@sfgate.com'),
(5, 'Andy Thomas', 'anthome', 'a7ae92bc5086c8a300b760bd47eaaa347146a7da', 'investor', 696477047, 'pfenwickc@uiuc.edu'),
(113, 'Asep Knalpot', 'asepkasep', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'investor', 726146450, 'kinksterd@dedecms.com'),
(11, 'Celline Ash', 'ashelole', '0440acea63aaac750b1ddf78f08e7a799420265c', 'investor', 579586895, 'igillesone@pcworld.com'),
(102, 'Asep knalpot', 'ashiap', '0e4467a7c0e0237b45be0237c60c9166f18982f0', 'investor', 604860036, 'mmichaelf@washingtonpost.com'),
(80, 'Starlen Ausse', 'aussestar', '2c0e1ebcbb3146a5cda360b87c535f9daf379eec', 'investor', 716809445, 'bguidellig@intel.com'),
(124, 'avc', 'avc', 'b5f02248a55736674ff3931b2e28be1ef54abbac', 'investor', 2642248499, 'pfortnamh@intel.com'),
(118, 'B', 'B', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'investor', 17221121, 'mwilbyi@weebly.com'),
(116, 'Good Bagus', 'bagos', '5929e58a5aa1fde36b80ecc26548c50423ddf943', 'investor', 354574618, 'gciculloj@yale.edu'),
(63, 'Harriet Banks', 'banksiet', '49790fb830800f72ce2e3c6d71894294a9f52073', 'investor', 95506146, 'sglamartk@bizjournals.com'),
(129, 'bbb', 'bb', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 'investor', 99923410000, 'cwaterl@naver.com'),
(59, 'Ben Farrer', 'ben10fareer', '4603a81efb462d25d818b0e4e01f5ab29056e093', 'investor', 756448144, 'msnawdonm@flickr.com'),
(107, 'Yayan', 'BKY', '81fe8bfe87576c3ecb22426f8e57847382917acf', 'investor', 236094758, 'mdibdinn@webnode.com'),
(101, 'Bob Normagedeng', 'bobisayang', '58d12d138995635d9cbddb32c928c708618b98ab', 'investor', 420125503, 'abritcho@nbcnews.com'),
(26, 'Wendy Vans', 'bukancagur', '11b9322df3591a9cdab81b98ff716a20913503c4', 'investor', 48853981, 'zblowesp@arstechnica.com'),
(2, 'Gayuh Putri Andyani', 'bukangayuh', '31bfac561700eea55f4415acf1e7490e89d828d6', 'admin', 534630906, 'gayuhputriandyani@gmail.com'),
(3, 'Muhammad Khalid Habiburahman', 'bukankhalid', '10d0b55e0ce96e1ad711adaac266c9200cbc27e4', 'admin', 865557999, 'khalidhabiburahman@gmail.com'),
(105, 'Rifky Fahrizal', 'bukanrifky', 'bd5a8b59b8548a9c3833e8f3fa1f762fee1921dc', 'admin', 999999999, 'gwickmannq@washington.edu'),
(1, 'Ryan Oktaviandi Susilo Wibowo', 'bukanyayan', '401cd194cfb0e11948f66749661fefdd9fa0b336', 'admin', 210902700000, 'pepsimanps4@gmail.com'),
(104, 'Zaidan Fadhillah', 'bukanzaidan', 'e5138358a63e4acce9d6635429ee3473e5a88e33', 'admin', 937298799, 'ttoftsr@twitter.com'),
(120, 'c', 'c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4', 'investor', 978273358, 'avassers@shutterfly.com'),
(51, 'Chris Strallen', 'chrisallen', '86391d2acfa80496211cc02d3e0603b11ae0d987', 'investor', 882243888, 'tbutterfintt@wufoo.com'),
(7, 'Karin Benedict', 'creenable', '3df41052080b7387d2f6858f27bb85d70929829d', 'investor', 40969518, 'jioriu@google.fr'),
(119, 'd', 'd', '3c363836cf4e16666669a25da280a1865c2d2874', 'investor', 223378727, 'gmcsperronv@hhs.gov'),
(34, 'James Daniel', 'danames', 'c9a4793a0718d956e4e87e0eac2e28a4f8e17c3a', 'investor', 169939033, 'lbelhamw@reverbnation.com'),
(32, 'Anne Danne', 'dananne', '7e291e280218e81d61f37b03afb42e8658708e9c', 'investor', 382428197, 'karmsbyx@google.nl'),
(21, 'Harley Binixon', 'davidxon', '1a9b54e8568bead09a8d8339965b644a0e37b925', 'investor', 441663630, 'dleatony@economist.com'),
(67, 'Rita Davies', 'davities', '8710b08ae11d4621987675c9578506f335f4991c', 'investor', 147817001, 'aandriveauz@msu.edu'),
(61, 'Dean Alexander', 'deanxander', '2a9d63be3952207d516686bc2ce95f79d1303b52', 'investor', 903185429, 'awalaron10@fastcompany.com'),
(90, 'Delonix Regia', 'delonxregge', 'd18761e0d4f0befeb7b677a42daa882b89a5f627', 'investor', 855563801, 'rrowler11@macromedia.com'),
(30, 'Denise Munches', 'denishes', 'f89a698fd21c81e2bbeb0da4d52edef5fb5c1afa', 'investor', 99674845, 'gcauley12@sakura.ne.jp'),
(50, 'Anne Hadid', 'dranhadid', '4d4c7967eb8bb28961d8cd2aa932df7b0c84fa17', 'investor', 559072474, 'sdumbleton13@intel.com'),
(49, 'Audrey Gwynne', 'dreygwynne', '401baa5d2108dd88c9fb4efc192e0b8a5195ead2', 'investor', 241307439, 'aluff14@illinois.edu'),
(99, 'Lionell Esse', 'essentials', '2ebdb52d39bffe26a048fb4aca220a0810ab8fc2', 'investor', 411733099, 'twalasik15@theatlantic.com'),
(45, 'Ester Renetha', 'esterietha', '9d6b44247c4bb49aae25b02a8d1c6a1911ce08cc', 'investor', 258082565, 'egiacovazzo16@ucsd.edu'),
(38, 'Evans Sanders', 'evansanderz', 'ed0f95f6b7cada9c293979fd2665b8638f1234d2', 'investor', 747837176, 'lchestnutt17@princeton.edu'),
(60, 'Stephanie Fox', 'fanithefox', 'b39117d885a2841d5ca35c86143f170f55a1f741', 'investor', 782053921, 'mwildber18@archive.org'),
(74, 'Tyson Frazer', 'frazerson', '35b9889e0a60dcf88b0213949e4890c05c6b9029', 'investor', 190955884, 'marnowitz19@mysql.com'),
(46, 'George Kline', 'georgeousline', '22e077bf6ef6b8992af4044703c54a39a76050fb', 'investor', 39058002, 'hsmalman1a@seesaa.net'),
(88, 'Sriwedari Hans', 'hansriwedari', '60fa555689d810010a6d3b125e69bafd9c605660', 'investor', 459143660, 'wdcosta1b@meetup.com'),
(20, 'Sone Haque', 'haqone', 'e9081544465ee26de8e62860def250319f7d0cc3', 'investor', 859989189, 'smaylin1c@pen.io'),
(84, 'Hattie Davies', 'hattiekoesendang', '490b0faed5f313ff95a5a2137a8af5858181e6c4', 'investor', 81052385, 'omacguffie1d@wikimedia.org'),
(109, 'BendDover', 'imangoblok', 'bacf12509dc71632a0e6aec6ce50f8d49cb79c01', 'investor', 693504440, 'vtoffolini1e@forbes.com'),
(71, 'Cassie Clare', 'inthecase', '30fae3bb99d996fc5f73f39fc4ce1c5639f5920e', 'investor', 786455777, 'dpetts1f@woothemes.com'),
(70, 'Jane Fowler', 'janflower', 'e793176988e351dacb53d9d2029d5212e2fac14f', 'investor', 239550293, 'ehuie1g@oakley.com'),
(68, 'Jasmine Takacs', 'jasismine', '4d6fdf6a481eeb56e3abc38ae18681fac51a46f1', 'investor', 434901797, 'ceul1h@cdbaby.com'),
(108, 'dewa made wijaya ', 'jaya ', '4d6fdf6a481eeb56e3abc38ae18681fac51a46f1', 'investor', 690116050, 'abruna1i@free.fr'),
(62, 'Jemma Jones', 'jemmjones', '7e3304dc0e35bd44188310efbc467d07236cc58b', 'investor', 178459667, 'jsmiley1j@spotify.com'),
(85, 'Haris Jonson', 'jonsonharry', '33a3a3ee35f3df0ae5e38cab1c2b94b7122a88c3', 'investor', 331212931, 'jdecleen1k@disqus.com'),
(40, 'Steiven Jonathan', 'jonstiven', '546877605f0baa3dc419e408aa6130dc468e04d8', 'investor', 349862530, 'larundale1l@constantcontact.com'),
(35, 'Josh Gad', 'joshuagad', '6c3faad63a718536f6fa21e675563c145e5089f4', 'investor', 497452449, 'abolingbroke1m@lycos.com'),
(127, 'Kaenova Mahendra Auditama', 'kaenova', 'cbf52e5df6ab3fa11b5d672975b5d05ee8d81588', 'investor', 885703801206999, 'kaenova@gmail.com'),
(58, 'Karl Keen', 'karleena', 'e2f89c58364fbda6258b93e352a60bbbee9b57a7', 'investor', 6479427, 'escowcraft1n@ycombinator.com'),
(81, 'Ose Kenneth', 'kennyone', '235169aa3c5b246b56e4f131b521f79291cf6f04', 'investor', 609008475, 'ashiell1o@dailymail.co.uk'),
(52, 'Lara Parry', 'larrytothemoon', '90c291aae11322a5036a1572570f224eabd4e625', 'investor', 119512542, 'tlawless1p@digg.com'),
(55, 'Leo Challis', 'leothelion', 'a5f0513fab1f4fe443f917dfa96c40bbe5bb6189', 'investor', 356095449, 'hswadlen1q@de.vu'),
(75, 'Llily Thompson', 'lilyareviolet', 'ea556a8b9dc48c73114434109fc99ce25db8069e', 'investor', 333455447, 'rnormington1r@tiny.cc'),
(37, 'Luke Evans', 'lukevansthewall', 'a58dd139ff60ba9a03fd5f903a0778bb811f716b', 'investor', 270052122, 'vstachini1s@quantcast.com'),
(73, 'Gugu Mack', 'makgugu', 'b6667e9df5f7768ab3241ac9e2197d6b673e945b', 'investor', 32689862, 'dbasnall1t@fema.gov'),
(16, 'Carol Amanda', 'mandactx', '10a4d302654203b17269ffae8bcd3d1cfa3e7da9', 'investor', 117649987, 'xspargo1u@youtube.com'),
(54, 'Peter Marcus', 'marcuspeterpan', '2eab2b476b96e85f2f63ab3c659f1b1289b54ab8', 'investor', 10973222, 'mprujean1v@hugedomains.com'),
(91, 'Dylann Maxx', 'maxdylann', 'd3be0d69a2e077b24194c4471c89345e5b3902cb', 'investor', 445176457, 'cpreshaw1w@bandcamp.com'),
(78, 'Caroline Mbatharaw', 'mbacaroline', 'e4c4a5b8822b463b101232c3120785da748e0f4c', 'investor', 217107612, 'aanear1x@mapy.cz'),
(76, 'Ian McDonald', 'mcdian77', 'ab0503dc656561d677227e6817c3b68be7f9ed04', 'investor', 466109800, 'mgerraty1y@msn.com'),
(41, 'Jhon McKellen', 'mckellenxj', '10b1aa486eaf1ea2799ac149834bfcadcdd932ea', 'investor', 950359665, 'cdimitriades1z@naver.com'),
(48, 'Stanley Mellon', 'mellonials', 'af6b42dd435dcc983c42d7222c94c3fcf4b95233', 'investor', 148387307, 'aagirre20@craigslist.org'),
(94, 'Aurele Gramm', 'miligramm', '38552d38c22eba1e87464d99a3ebe27e5dc36a18', 'investor', 335953029, 'jrussam21@blogtalkradio.com'),
(23, 'Minnie Wickerman', 'minmaxx', 'e2bc38db9c75d4f0cd2cc176b8a5ab0b4974481c', 'investor', 524238159, 'rvigors22@123-reg.co.uk'),
(79, 'Mirabelle Nell', 'miranellous', '285d18344a6829d4b85d3ba5c162ac716fdca142', 'investor', 24176856, 'smorriarty23@bloglines.com'),
(15, 'Alex Moero', 'moerex', '147ba16ba6ebd5a4c73276ad7e03d0f30c61610b', 'investor', 267894196, 'pgiannini24@state.gov'),
(33, 'Elizabeth Newton', 'neweliza', 'bdae9cf198d4157e901b5e2c5e5ca98ae7dca0b2', 'investor', 954075432, 'cpynn25@geocities.jp'),
(100, 'Nick John', 'nickeymouse', 'bff4fdd08cacf4ba94a1c5c1b79b1b99cd6df327', 'investor', 772004467, 'aiacovaccio26@joomla.org'),
(53, 'Nicole Decaro', 'nicolecaro', '1edd2c8bd504fa2ea1b5462441386ca4d6237a2d', 'investor', 99546137, 'ttwiddle27@intel.com'),
(10, 'Belle Carolene', 'notannabelle', '733ba2bda1b36286a75f7b78243a05ad95162c4e', 'investor', 405116101, 'tmactavish28@amazon.co.jp'),
(24, 'Oemar Verdana', 'oemarbakrie', 'e2d787d272b90f30f24a32ffd6e329d65dcfef9c', 'investor', 368495856, 'eaudus29@networkadvertising.org'),
(72, 'Clara Audrey', 'oneclarey', '3181a8e2cf7e8edbeafa193f8a0fdc33de785000', 'investor', 351616191, 'eavraham2a@springer.com'),
(22, 'Wanda Hourey', 'onedahour', '94fd06877d8f124b4b70b4e3e8f379c263511d89', 'investor', 820031243, 'jhyams2b@1und1.de'),
(110, 'Udin Jaenal', 'oopterbaik', 'fee390842e961cdc4e4ef5b8a77b53190a6d0b88', 'investor', 949330285, 'ahaylands2c@mtv.com'),
(89, 'Oryza Sativa', 'oryzapadi', 'bfdd6cbab92c05bf252d230fe3b3c0a4d67e5dbc', 'investor', 921122783, 'vcossey2d@bbc.co.uk'),
(82, 'Nath Owey', 'owenathic', 'cfb86b0979833512327ee13abd90846f94ebbb77', 'investor', 844863583, 'cmattioli2e@nydailynews.com'),
(66, 'Paul Morahan', 'paulusmahal', 'a4ee523223139a7019fca07418fb07701d8df138', 'investor', 303523908, 'jpostin2f@g.co'),
(9, 'Ariel Verenda', 'peterpenter', 'e80b7df9e77bb0c61670795cca9d148fc808e809', 'investor', 172582794, 'credhills2g@php.net'),
(65, 'Lindy Pieri', 'pierilindyx', '6ef71d37d1b5176b1a9984aa7b41889102f31a12', 'investor', 26022989, 'rharry2h@forbes.com'),
(111, 'Random Person', 'randomperson', 'f1af6a09468930008199338c0c0ed1549526de03', 'investor', 31501265, 'kagus2i@bbc.co.uk'),
(12, 'Aurell Poetre', 'rellinthehouse', '3aeea6cafa7ed7fc6c0720c3ac036473ee815713', 'investor', 598818695, 'sbischof2j@spotify.com'),
(64, 'Richard Pierre', 'richpierre', '5ba395c80ce05802de0d4060157b647af647e7cb', 'investor', 121738155, 'lcordell2k@hubpages.com'),
(28, 'Airul Rose', 'rosearered', '04176ad3e5362a62e79965d9a8ceaf2a161adc59', 'investor', 608383416, 'vpech2l@wordpress.com'),
(44, 'Samuel Eventa', 'sameventa', '541c7cb4ae9ce9fe736d72a999062451a38024aa', 'investor', 982339682, 'fbrambell2m@state.gov'),
(43, 'Boery Samantha', 'samoery', 'c0e2726b01681b9d70ca1bb973ee2ec48002cf11', 'investor', 224452282, 'pitzakovitz2n@google.com.br'),
(106, 'Eren Yeager', 'sasageyo', '64adccac6550d29713d10f03fb0f19c35dca3649', 'investor', 457225779, 'pgorner2o@bbc.co.uk'),
(112, 'sussy', 'saskeh007', 'e690d1d6bb3edbfb95c808aa701da609bd420691', 'investor', 67894703, 'pwilmore2p@hostgator.com'),
(87, 'Anda Seira', 'seirandakids', '6bcacfa786f6b2fb30b6f67a497b3c010b98ca29', 'investor', 833118993, 'klippini2q@redcross.org'),
(8, 'Handy Howlement', 'shyowl', '06435e920d5ffa4efc9a269e59e9e52451933166', 'investor', 961150071, 'cantat2r@examiner.com'),
(6, 'Sandy Christhoper', 'sinchass', '1dcd3d0da310705248379f501fd69e03061106d9', 'investor', 138409675, 'adurdle0@ucoz.ru'),
(18, 'Steven Woody', 'stedyven', '37bd1bd84afb8e035bd1b2aa1c764527f8aac99e', 'investor', 188552596, 'molivari1@digg.com'),
(39, 'Dan Stevens', 'stevendans', 'f7afcb4812c26ef8a7169dbd727cd44d12ba10d3', 'investor', 454150589, 'bbrickhill2@amazon.co.jp'),
(19, 'Sania Ollment', 'sunnyx', 'ce0d234e9fcc7bcfef2458a620057c36c08888a1', 'investor', 708955227, 'leveling3@patch.com'),
(93, 'Sven Andrew', 'sveneleven', '7628bc0fb5d38f10214945bb26b560fc0b65ed03', 'investor', 787333835, 'smackeig4@msn.com'),
(97, 'Swarovski Love', 'svvarousk1', '0c057d7e3de8df2440c35991fe9e4905e2566991', 'investor', 321467526, 'ghaddleton5@uiuc.edu'),
(36, 'Emma Thompson', 'thompemson', 'cb611d51b35769937eb66b6c51333f7a24317e01', 'investor', 71459990, 'eangrick6@last.fm'),
(29, 'Kirei Tsubasa', 'tsukire', 'c6708153d6e0fc4a1265a1ab390b024752a47dd8', 'investor', 61735360, 'moshields7@cnbc.com'),
(47, 'Kevin Tucci', 'tuccivinny', '56d34047613a1a9bbdfddbab49b33bfb680ab8f5', 'investor', 346678322, 'gscroggs8@imdb.com'),
(83, 'Tyrone Love', 'tyroneluvv', '46916d6f30ec16d659fa82ceaa2378695fa6b090', 'investor', 167958980, 'opisculli9@sciencedirect.com'),
(96, 'Eriel Uchiha', 'uchihaerie', '828efa5f9aaca054a73a54c04fa921fd49468c46', 'investor', 176670569, 'hcarcasa@xing.com'),
(114, 'Udin Saep', 'udin123', 'a9993e364706816aba3e25717850c26c9cd0d89d', 'investor', 66506670, 'sroysonb@microsoft.com'),
(103, 'Arya Fikirkansajah', 'udinsedunia', '3bfdf7105aa1619284c77bafc3760cfdb37a67f7', 'admin', 766498404, 'gcufflinc@people.com.cn'),
(92, 'Vincent Horzer', 'vincenthorz', 'a039fa5defab54fc10e13783bfd1c34a95095896', 'investor', 596466182, 'fmeesond@rakuten.co.jp'),
(27, 'Emma Walter', 'waltermellon', '54a680b54cc2450ad55966246bdafbb67d44fc27', 'investor', 410043844, 'bewbankse@slashdot.org'),
(69, 'Charlotte Worwood', 'woodcarrot', '84e6da56f7aa9c5734484338f50038185352e49c', 'investor', 428047925, 'hbyrdef@moonfruit.com'),
(98, 'Zee Lonc', 'xeezee', '1ef69d757cb122330032074b1513f664d238a682', 'investor', 323874802, 'mbaseyg@plala.or.jp'),
(42, 'Kaleb McZeuss', 'zeuskaleb', '257aa155d6527d179d3333bec2474ad2bf659add', 'investor', 238698813, 'cdurbinh@last.fm'),
(77, 'Zoe Decaro', 'zoecaro', '495adb6422a5a26d459caac09ac092d95585b51f', 'investor', 217533544, 'nnisbeti@arstechnica.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `kode_saham` (`kode_saham`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `saham`
--
ALTER TABLE `saham`
  ADD PRIMARY KEY (`kode_saham`),
  ADD KEY `Nomor` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `Nomor` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_transaction` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `saham`
--
ALTER TABLE `saham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`kode_saham`) REFERENCES `saham` (`kode_saham`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
