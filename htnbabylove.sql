-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 05:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htnbabylove`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id_bill`, `id_customer`, `total_price`, `total_product`, `created_at`, `updated_at`) VALUES
(1, 1, 100000, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 23000, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill_detail` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `id_detail` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_bill`, `id_detail`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 10000, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 2, 3, 3000, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id_city`, `name`) VALUES
(3, 'An Giang'),
(4, 'Bà Rịa - Vũng Tàu'),
(5, 'Bắc Giang'),
(6, 'Bắc Kạn'),
(7, 'Bạc Liêu'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Định'),
(11, 'Bình Dương'),
(12, 'Bình Phước'),
(13, 'Bình Thuận'),
(14, 'Cà Mau'),
(15, 'Cao Bằng'),
(16, 'Đắk Lắk'),
(17, 'Đắk Nông'),
(18, 'Điện Biên'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Gia Lai'),
(22, 'Hà Giang'),
(23, 'Hà Nam'),
(24, 'Hà Tĩnh'),
(25, 'Hải Dương'),
(26, 'Hậu Giang'),
(27, 'Hòa Bình'),
(28, 'Hưng Yên'),
(29, 'Khánh Hòa'),
(30, 'Kiên Giang'),
(31, 'Kon Tum'),
(32, 'Lai Châu'),
(33, 'Lâm Đồng'),
(34, 'Lạng Sơn'),
(35, 'Lào Cai'),
(36, 'Long An'),
(37, 'Nam Định'),
(38, 'Nghệ An'),
(39, 'Ninh Bình'),
(40, 'Ninh Thuận'),
(41, 'Phú Thọ'),
(42, 'Quảng Bình'),
(43, 'Quảng Nam'),
(44, 'Quảng Ngãi'),
(45, 'Quảng Ninh'),
(46, 'Quảng Trị'),
(47, 'Sóc Trăng'),
(48, 'Sơn La'),
(49, 'Tây Ninh'),
(50, 'Thái Bình'),
(51, 'Thái Nguyên'),
(52, 'Thanh Hóa'),
(53, 'Thừa Thiên Huế'),
(54, 'Tiền Giang'),
(55, 'Trà Vinh'),
(56, 'Tuyên Quang'),
(57, 'Vĩnh Long'),
(58, 'Vĩnh Phúc'),
(59, 'Yên Bái'),
(60, 'Phú Yên'),
(61, 'Hà Nội'),
(62, 'TP HCM'),
(63, 'Đà Nẵng'),
(64, 'Cần Thơ'),
(65, 'Hải Phòng');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `name`, `gender`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'huỳnh khắc duy', 'nam', 'anminh113@gmail.com', 'an minh kiên giang', '01222130554', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'võ hoài phong', 'nam', 'ádjwjajsd@gmail.com', 'hà nội', '0123472637628', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id_district` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_city` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id_district`, `name`, `id_city`) VALUES
(1, 'Thành phố Long Xuyên', 3),
(2, 'Thị xã Châu Đốc', 3),
(3, 'Huyện An Phú', 3),
(4, 'Huyện Tân Châu', 3),
(5, 'Huyện Phú Tân', 3),
(6, 'Huyện Tịnh Biên', 3),
(7, 'Huyện Tri Tôn', 3),
(8, 'Huyện Châu Phú', 3),
(9, 'Huyện Chợ Mới', 3),
(10, 'Huyện Châu Thành', 3),
(11, 'Huyện Thoại Sơn', 3),
(12, 'Thành phố Vũng Tàu', 4),
(13, 'Thị xã Bà Rịa', 4),
(14, 'Huyện Xuyên Mộc', 4),
(15, 'Huyện Long Điền', 4),
(16, 'Huyện Côn Đảo', 4),
(17, 'Huyện Tân Thành', 4),
(18, 'Huyện Châu Đức', 4),
(19, 'Huyện Đất Đỏ', 4),
(20, 'Thành phố Bắc Giang', 5),
(21, 'Huyện Yên Thế', 5),
(22, 'Huyện Lục Ngạn', 5),
(23, 'Huyện Sơn Động', 5),
(24, 'Huyện Lục Nam', 5),
(25, 'Huyện Tân Yên', 5),
(26, 'Huyện Hiệp Hoà', 5),
(27, 'Huyện Lạng Giang', 5),
(28, 'Huyện Việt Yên', 5),
(29, 'Huyện Yên Dũng', 5),
(30, 'Thị xã Bắc Kạn', 6),
(31, 'Huyện Chợ Đồn', 6),
(32, 'Huyện Bạch Thông', 6),
(33, 'Huyện Na Rì', 6),
(34, 'Huyện Ngân Sơn', 6),
(35, 'Huyện Ba Bể', 6),
(36, 'Huyện Chợ Mới', 6),
(37, 'Huyện Pác Nặm', 6),
(38, 'Thị xã Bạc Liêu', 7),
(39, 'Huyện Vĩnh Lợi', 7),
(40, 'Huyện Hồng Dân', 7),
(41, 'Huyện Giá Rai', 7),
(42, 'Huyện Phước Long', 7),
(43, 'Huyện Đông Hải', 7),
(44, 'Huyện Hoà Bình', 7),
(48, 'Thành phố Bắc Ninh', 8),
(49, 'Huyện Yên Phong', 8),
(50, 'Huyện Quế Võ.', 8),
(51, 'Huyện Tiên Du', 8),
(52, 'Huyện Từ Sơn', 8),
(53, 'Huyện Thuận Thành', 8),
(54, 'Huyện Gia Bình', 8),
(55, 'Huyện Lương Tài', 8),
(56, 'Thị xã Bến Tre', 9),
(57, 'Huyện Châu Thành', 9),
(58, 'Huyện Chợ Lách', 9),
(59, 'Huyện Mỏ Cày', 9),
(60, 'Huyện Giồng Trôm', 9),
(61, 'Huyện Bình Đại', 9),
(62, 'Huyện Ba Tri', 9),
(63, 'Huyện Thạnh Phú', 9),
(64, 'Thành phố Quy Nhơn', 10),
(65, 'Huyện An Lão', 10),
(66, 'Huyện Hoài Ân', 10),
(67, 'Huyện Hoài Nhơn', 10),
(68, 'Huyện Phù Mỹ', 10),
(69, 'Huyện Phù Cát', 10),
(70, 'Huyện Vĩnh Thạnh', 10),
(71, 'Huyện Tây Sơn', 10),
(72, 'Huyện Vân Canh', 10),
(73, 'Huyện An Nhơn', 10),
(74, 'Huyện Tuy Phước', 10),
(75, 'Thị xã Thủ Dầu Một', 11),
(76, 'Huyện Bến Cát', 11),
(77, 'Huyện Tân Uyên', 11),
(78, 'Huyện Thuận An', 11),
(79, 'Huyện Dĩ An', 11),
(80, 'Huyện Phú Giáo', 11),
(81, 'Huyện Dầu Tiếng', 11),
(82, 'Thị xã Đồng Xoài', 12),
(83, 'Huyện Đồng Phú', 12),
(84, 'Huyện Chơn Thành', 12),
(85, 'Huyện Bình Long', 12),
(86, 'Huyện Lộc Ninh', 12),
(87, 'Huyện Bù Đốp', 12),
(88, 'Huyện Phước Long', 12),
(89, 'Huyện Bù Đăng', 12),
(90, 'Thành phố Phan Thiết', 13),
(91, 'Huyện Tuy Phong', 13),
(92, 'Huyện Bắc Bình', 13),
(93, 'Huyện Hàm Thuận Bắc', 13),
(94, 'Huyện Hàm Thuận Nam', 13),
(95, 'Huyện Hàm Tân', 13),
(96, 'Huyện Đức Linh', 13),
(97, 'Huyện Tánh Linh', 13),
(98, 'Huyện Phú Quý', 13),
(99, 'Thị xã LaGi', 13),
(100, 'Thành phố Cà Mau', 14),
(101, 'Huyện Thới Bình', 14),
(102, 'Huyện U Minh', 14),
(103, 'Huyện Trần Văn Thời', 14),
(104, 'Huyện Cái Nước', 14),
(105, 'Huyện Đầm Dơi', 14),
(106, 'Huyện Ngọc Hiển', 14),
(107, 'Huyện Năm Căn', 14),
(108, 'Huyện Phú Tân', 14),
(109, 'Thị xã Cao Bằng', 15),
(110, 'Huyện Bảo Lạc', 15),
(111, 'Huyện Thông Nông', 15),
(112, 'Huyện Hà Quảng', 15),
(113, 'Huyện Trà Lĩnh', 15),
(114, 'Huyện Trùng Khánh', 15),
(115, 'Huyện Nguyên Bình', 15),
(116, 'Huyện Hoà An', 15),
(117, 'Huyện Quảng Uyên', 15),
(118, 'Huyện Thạch An', 15),
(119, 'Huyện Hạ Lang', 15),
(120, 'Huyện Bảo Lâm', 15),
(121, 'Huyện Phục Hoà', 15),
(122, 'Thành phố Buôn Ma Thuột', 16),
(123, 'Huyện Ea H Leo', 16),
(124, 'Huyện Krông Buk', 16),
(125, 'Huyện Krông Năng', 16),
(126, 'Huyện Ea Súp', 16),
(127, 'Huyện Cư M gar', 16),
(128, 'Huyện Krông Pắc', 16),
(129, 'Huyện Ea Kar', 16),
(130, 'Huyện M`Đrăk', 16),
(131, 'Huyện Krông Ana', 16),
(132, 'Huyện Krông Bông', 16),
(133, 'Huyện Lăk', 16),
(134, 'Huyện Buôn Đôn', 16),
(135, 'Huyện Cư Kuin', 16),
(136, 'Thị xã Gia Nghĩa', 17),
(137, 'Huyện Dăk RLấp', 17),
(138, 'Huyện Dăk Mil', 17),
(139, 'Huyện Cư Jút', 17),
(140, 'Huyện Dăk Song', 17),
(141, 'Huyện Krông Nô', 17),
(142, 'Huyện Dăk GLong', 17),
(143, 'Huyện Tuy Đức', 17),
(144, 'TP. Điện Biên Phủ', 18),
(145, 'Thị xã Mường Lay', 18),
(146, 'Huyện Điện Biên', 18),
(147, 'Huyện Tuần Giáo', 18),
(148, 'Huyện Mường Chà', 18),
(149, 'Huyện Tủa Chùa', 18),
(150, 'Huyện Điện Biên Đông', 18),
(151, 'Huyện Mường Nhé', 18),
(152, 'Huyện Mường Ảng', 18),
(153, 'Thành phố Biên Hoà', 19),
(154, 'Huyện Vĩnh Cửu', 19),
(155, 'Huyện Tân Phú', 19),
(156, 'Huyện Định Quán', 19),
(157, 'Huyện Thống Nhất', 19),
(158, 'Thị xã Long Khánh', 19),
(159, 'Huyện Xuân Lộc', 19),
(160, 'Huyện Long Thành', 19),
(161, 'Huyện Nhơn Trạch', 19),
(162, 'Huyện Trảng Bom', 19),
(163, 'Huyện Cẩm Mỹ', 19),
(164, 'Thành phố Cao Lãnh', 20),
(165, 'Thị xã Sa Đéc', 20),
(166, 'Huyện Tân Hồng', 20),
(167, 'Huyện Hồng Ngự', 20),
(168, 'Huyện Tam Nông', 20),
(169, 'Huyện Thanh Bình', 20),
(170, 'Huyện Cao Lãnh', 20),
(171, 'Huyện Lấp Vò', 20),
(172, 'Huyện Tháp Mười', 20),
(173, 'Huyện Lai Vung', 20),
(174, 'Huyện Châu Thành', 20),
(175, 'Thành phố Pleiku', 21),
(176, 'Huyện Chư Păh', 21),
(177, 'Huyện Mang Yang', 21),
(178, 'Huyện Kbang', 21),
(179, 'Huyện An Khê', 21),
(180, 'Huyện Kông Chro', 21),
(181, 'Huyện Đức Cơ', 21),
(182, 'Huyện Chưprông', 21),
(183, 'Huyện Chư Sê', 21),
(184, 'Huyện Ayunpa', 21),
(185, 'Huyện Krông Pa', 21),
(186, 'Huyện La Grai', 21),
(187, 'Huyện Đăk Đoa', 21),
(188, 'Huyện La Pa', 21),
(189, 'Huyện Đăk Pơ', 21),
(190, 'Huyện Phú Thiện', 21),
(191, 'Thành phố Hà Giang', 22),
(192, 'Huyện Đồng Văn', 22),
(193, 'Huyện Mèo Vạc', 22),
(194, 'Huyện Yên Minh', 22),
(195, 'Huyện Quản Bạ', 22),
(196, 'Huyện Vị Xuyên', 22),
(197, 'Huyện Bắc Mê', 22),
(198, 'Huyện Hoàng Su Phì', 22),
(199, 'Huyện Xín Mần', 22),
(200, 'Huyện Bắc Quang', 22),
(201, 'Huyện Quang Bình', 22),
(202, 'Thị xã Phủ Lý', 23),
(203, 'Huyện Duy Tiên', 23),
(204, 'Huyện Kim Bảng', 23),
(205, 'Huyện Lý Nhân', 23),
(206, 'Huyện Thanh Liêm', 23),
(207, 'Huyện Bình Lục', 23),
(208, 'Thành phố Hà Tĩnh', 24),
(209, 'Thị xã Hồng Lĩnh', 24),
(210, 'Huyện Hương Sơn', 24),
(211, 'Huyện Đức Thọ', 24),
(212, 'Huyện Nghi Xuân', 24),
(213, 'Huyện Can Lộc', 24),
(214, 'Huyện Hương Khê', 24),
(215, 'Huyện Thạch Hà', 24),
(216, 'Huyện Cẩm Xuyên', 24),
(217, 'Huyện Kỳ Anh', 24),
(218, 'Huyện Vũ Quang', 24),
(219, 'Huyện Lộc Hà', 24),
(220, 'Thành phố Hải Dương', 25),
(221, 'Huyện Chí Linh', 25),
(222, 'Huyện Nam Sách', 25),
(223, 'Huyện Kinh Môn', 25),
(224, 'Huyện Gia Lộc', 25),
(225, 'Huyện Tứ Kỳ', 25),
(226, 'Huyện Thanh Miện', 25),
(227, 'Huyện Ninh Giang', 25),
(228, 'Huyện Cẩm Giàng', 25),
(229, 'Huyện Thanh Hà', 25),
(230, 'Huyện Kim Thành', 25),
(231, 'Huyện Bình Giang', 25),
(232, 'Thành phố Vị Thanh', 26),
(233, 'Huyện Vị Thuỷ', 26),
(234, 'Huyện Long Mỹ', 26),
(235, 'Huyện Phụng Hiệp', 26),
(236, 'Huyện Châu Thành', 26),
(237, 'Huyện Châu Thành A', 26),
(238, 'Thị xã Ngã Bảy', 26),
(239, 'Thành phố Hoà Bình', 27),
(240, 'Huyện Đà Bắc', 27),
(241, 'Huyện Mai Châu', 27),
(242, 'Huyện Tân Lạc', 27),
(243, 'Huyện Lạc Sơn', 27),
(244, 'Huyện Kỳ Sơn', 27),
(245, 'Huyện Lương Sơn', 27),
(246, 'Huyện Kim Bôi', 27),
(247, 'Huyện Lạc Thuỷ', 27),
(248, 'Huyện Yên Thuỷ', 27),
(249, 'Huyện Cao Phong', 27),
(250, 'Thị xã Hưng Yên', 28),
(251, 'Huyện Kim Động', 28),
(252, 'Huyện Ân Thi', 28),
(253, 'Huyện Khoái Châu', 28),
(254, 'Huyện Yên Mỹ', 28),
(255, 'Huyện Tiên Lữ', 28),
(256, 'Huyện Phù Cừ', 28),
(257, 'Huyện Mỹ Hào', 28),
(258, 'Huyện Văn Lâm', 28),
(259, 'Huyện Văn Giang', 28),
(260, 'Thành phố Nha Trang', 29),
(261, 'Huyện Vạn Ninh', 29),
(262, 'Huyện Ninh Hoà', 29),
(263, 'Huyện Diên Khánh', 29),
(264, 'Huyện Khánh Vĩnh', 29),
(265, 'Thị xã Cam Ranh', 29),
(266, 'Huyện Khánh Sơn', 29),
(267, 'Huyện Trường Sa', 29),
(268, 'Huyện Cam Lâm', 29),
(269, 'Thành phố Rạch Giá', 30),
(270, 'Thị xã Hà Tiên', 30),
(271, 'Huyện Kiên Lương', 30),
(272, 'Huyện Hòn Đất', 30),
(273, 'Huyện Tân Hiệp', 30),
(274, 'Huyện Châu Thành', 30),
(275, 'Huyện Giồng Riềng', 30),
(276, 'Huyện Gò Quao', 30),
(277, 'Huyện An Biên', 30),
(278, 'Huyện An Minh', 30),
(279, 'Huyện Vĩnh Thuận', 30),
(280, 'Huyện Phú Quốc', 30),
(281, 'Huyện Kiên Hải', 30),
(282, 'Huyện U minh Thượng', 30),
(283, 'Thị xã KonTum', 31),
(284, 'Huyện Đăk Glei', 31),
(285, 'Huyện Ngọc Hồi', 31),
(286, 'Huyện Đăk Tô', 31),
(287, 'Huyện Sa Thầy', 31),
(288, 'Huyện Kon Plong', 31),
(289, 'Huyện Đăk Hà', 31),
(290, 'Huyện Kon Rộy', 31),
(291, 'Huyện Tu Mơ Rông', 31),
(292, 'Huyện Thị xã Lai Châu', 32),
(293, 'Huyện Tam Đường', 32),
(294, 'Huyện Phong Thổ', 32),
(295, 'Huyện Sìn Hồ', 32),
(296, 'Huyện Mường Tè', 32),
(297, 'Huyện Than Uyên', 32),
(298, 'Huyện Thành phố Đà Lạt', 33),
(299, 'Thị xã. Bảo Lộc', 33),
(300, 'Huyện Đức Trọng', 33),
(301, 'Huyện Di Linh', 33),
(302, 'Huyện Đơn Dương', 33),
(303, 'Huyện Lạc Dương', 33),
(304, 'Huyện Đạ Huoai', 33),
(305, 'Huyện Đạ Tẻh', 33),
(306, 'Huyện Cát Tiên', 33),
(307, 'Huyện Lâm Hà', 33),
(308, 'Huyện Bảo Lâm', 33),
(309, 'Huyện Đam Rông', 33),
(310, 'Thành phố Lạng Sơn', 34),
(311, 'Huyện Tràng Định', 34),
(312, 'Huyện Bình Gia', 34),
(313, 'Huyện Văn Lãng', 34),
(314, 'Huyện Bắc Sơn', 34),
(315, 'Huyện Văn Quan', 34),
(316, 'Huyện Cao Lộc', 34),
(317, 'Huyện Lộc Bình', 34),
(318, 'Huyện Chi Lăng', 34),
(319, 'Huyện Đình Lập', 34),
(320, 'Huyện Hữu Lũng', 34),
(321, 'Thành phố Lào Cai', 35),
(322, 'Huyện Xi Ma Cai', 35),
(323, 'Huyện Bát Xát', 35),
(324, 'Huyện Bảo Thắng', 35),
(325, 'Huyện Sa Pa', 35),
(326, 'Huyện Văn Bàn', 35),
(327, 'Huyện Bảo Yên', 35),
(328, 'Huyện Bắc Hà', 35),
(329, 'Huyện Mường Khương', 35),
(330, 'Thị xã Tân An', 36),
(331, 'Huyện Vĩnh Hưng', 36),
(332, 'Huyện Mộc Hoá', 36),
(333, 'Huyện Tân Thạnh', 36),
(334, 'Huyện Thạnh Hoá', 36),
(335, 'Huyện Đức Huệ', 36),
(336, 'Huyện Đức Hoà', 36),
(337, 'Huyện Bến Lức', 36),
(338, 'Huyện Thủ Thừa', 36),
(339, 'Huyện Châu Thành', 36),
(340, 'Huyện Tân Trụ', 36),
(341, 'Huyện Cần Đước', 36),
(342, 'Huyện Cần Giuộc', 36),
(343, 'Huyện Tân Hưng', 36),
(344, 'TP. Nam Định', 37),
(345, 'Huyện Mỹ Lộc', 37),
(346, 'Huyện Xuân Trường', 37),
(347, 'Huyện Giao Thủy', 37),
(348, 'Huyện Ý Yên', 37),
(349, 'Huyện Vụ Bản', 37),
(350, 'Huyện Nam Trực', 37),
(351, 'Huyện Trực Ninh', 37),
(352, 'Huyện Nghĩa Hưng', 37),
(353, 'Huyện Hải Hậu', 37),
(354, 'Thành phố Vinh', 38),
(355, 'Thị xã Cửa Lò', 38),
(356, 'Huyện Quỳ Châu', 38),
(357, 'Huyện Quỳ Hợp', 38),
(358, 'Huyện Nghĩa Đàn', 38),
(359, 'Huyện Quỳnh Lưu', 38),
(360, 'Huyện Kỳ Sơn', 38),
(361, 'Huyện Tương Dương', 38),
(362, 'Huyện Con Cuông', 38),
(363, 'Huyện Tân Kỳ', 38),
(364, 'Huyện Yên Thành', 38),
(365, 'Huyện Diễn Châu', 38),
(366, 'Huyện Anh Sơn', 38),
(367, 'Huyện Đô Lương', 38),
(368, 'Huyện Thanh Chương', 38),
(369, 'Huyện Nghi Lộc', 38),
(370, 'Huyện Nam Đàn', 38),
(371, 'Huyện Hưng Nguyên', 38),
(372, 'Huyện Quế Phong', 38),
(373, 'Thành phố Ninh Bình', 39),
(374, 'Thị xã Tam Điệp', 39),
(375, 'Huyện Nho Quan', 39),
(376, 'Huyện Gia Viễn', 39),
(377, 'Huyện Hoa Lư', 39),
(378, 'Huyện Yên Mô', 39),
(379, 'Huyện Kim Sơn', 39),
(380, 'Huyện Yên Khánh', 39),
(381, 'Thành phố Phan Rang-Tháp Chàm', 40),
(382, 'Huyện Ninh Sơn', 40),
(383, 'Huyện Ninh Phước', 40),
(384, 'Huyện Bác Ái', 40),
(385, 'Huyện Thuận Bắc', 40),
(386, 'Huyện Ninh Hải', 40),
(387, 'TP. Việt Trì', 41),
(388, 'Thị xã Phú Thọ', 41),
(389, 'Huyện Đoan Hùng', 41),
(390, 'Huyện Thanh Ba', 41),
(391, 'Huyện Hạ Hoà', 41),
(392, 'Huyện Cẩm Khê', 41),
(393, 'Huyện Yên Lập', 41),
(394, 'Huyện Thanh Sơn', 41),
(395, 'Huyện Phù Ninh', 41),
(396, 'Huyện Lâm Thao', 41),
(397, 'Huyện Tam Nông', 41),
(398, 'Huyện Thanh Thủy', 41),
(399, 'Huyện Tân Sơn', 41),
(400, 'Thành phố Đồng Hới', 42),
(401, 'Huyện Tuyên Hoá', 42),
(402, 'Huyện Minh Hoá', 42),
(403, 'Huyện Quảng Trạch', 42),
(404, 'Huyện Bố Trạch', 42),
(405, 'Huyện Quảng Ninh', 42),
(406, 'Huyện Lệ Thuỷ', 42),
(407, 'Thành phố Tam Kỳ', 43),
(408, 'Thị xã Hội An', 43),
(409, 'Huyện Duy Xuyên', 43),
(410, 'Huyện Điện Bàn', 43),
(411, 'Huyện Đại Lộc', 43),
(412, 'Huyện Quế Sơn', 43),
(413, 'Huyện Hiệp Đức', 43),
(414, 'Huyện Thăng Bình', 43),
(415, 'Huyện Núi Thành', 43),
(416, 'Huyện Tiên Phước', 43),
(417, 'Huyện Bắc Trà My', 43),
(418, 'Huyện Đông Giang', 43),
(419, 'Huyện Nam Giang', 43),
(420, 'Huyện Phước Sơn', 43),
(421, 'Huyện Nam Trà My', 43),
(422, 'Huyện Tây Giang', 43),
(423, 'Huyện Phú Ninh', 43),
(424, 'Thành phố Quảng Ngãi', 44),
(425, 'Huyện Lý Sơn', 44),
(426, 'Huyện Bình Sơn', 44),
(427, 'Huyện Trà Bồng', 44),
(428, 'Huyện Sơn Tịnh', 44),
(429, 'Huyện Sơn Hà', 44),
(430, 'Huyện Tư Nghĩa', 44),
(431, 'Huyện Nghĩa Hành', 44),
(432, 'Huyện Minh Long', 44),
(433, 'Huyện Mộ Đức', 44),
(434, 'Huyện Đức Phổ', 44),
(435, 'Huyện Ba Tơ', 44),
(436, 'Huyện Sơn Tây', 44),
(437, 'Huyện Tây Trà', 44),
(438, 'TP. Hạ Long', 45),
(439, 'Thị xã Cẩm Phả', 45),
(440, 'Thị xã Uông Bí', 45),
(441, 'Thị xã Móng Cái', 45),
(442, 'Huyện Bình Liêu', 45),
(443, 'Huyện Đầm Hà', 45),
(444, 'Huyện Hải Hà', 45),
(445, 'Huyện Tiên Yên', 45),
(446, 'Huyện Ba Chẽ', 45),
(447, 'Huyện Đông Triều', 45),
(448, 'Huyện Yên Hưng', 45),
(449, 'Huyện Hoành Bồ', 45),
(450, 'Huyện Vân Đồn', 45),
(451, 'Huyện Cô Tô', 45),
(452, 'Thị xã Đông Hà', 46),
(453, 'Thị xã Quảng Trị', 46),
(454, 'Huyện Vĩnh Linh', 46),
(455, 'Huyện Gio Linh', 46),
(456, 'Huyện Cam Lộ', 46),
(457, 'Huyện Triệu Phong', 46),
(458, 'Huyện Hải Lăng', 46),
(459, 'Huyện Hướng Hoá', 46),
(460, 'Huyện Đăk Rông', 46),
(461, 'Huyện Cồn cỏ', 46),
(462, 'Thành phố Sóc Trăng', 47),
(463, 'Huyện Kế Sách', 47),
(464, 'Huyện Mỹ Tú', 47),
(465, 'Huyện Mỹ Xuyên', 47),
(466, 'Huyện Thạnh Trị', 47),
(467, 'Huyện Long Phú', 47),
(468, 'Huyện Vĩnh Châu', 47),
(469, 'Huyện Cù Lao Dung', 47),
(470, 'Huyện Ngã Năm', 47),
(471, 'Huyện Châu Thành', 47),
(472, 'Huyện Trần Đề', 47),
(473, 'Thị xã Sơn La', 48),
(474, 'Huyện Quỳnh Nhai', 48),
(475, 'Huyện Mường La', 48),
(476, 'Huyện Thuận Châu', 48),
(477, 'Huyện Bắc Yên', 48),
(478, 'Huyện Phù Yên', 48),
(479, 'Huyện Mai Sơn', 48),
(480, 'Huyện Yên Châu', 48),
(481, 'Huyện Sông Mã', 48),
(482, 'Huyện Mộc Châu', 48),
(483, 'Huyện Sốp Cộp', 48),
(484, 'Thị xã Tây Ninh', 49),
(485, 'Huyện Tân Biên', 49),
(486, 'Huyện Tân Châu', 49),
(487, 'Huyện Dương Minh Châu', 49),
(488, 'Huyện Châu Thành', 49),
(489, 'Huyện Hoà Thành', 49),
(490, 'Huyện Bến Cầu', 49),
(491, 'Huyện Gò Dầu', 49),
(492, 'Huyện Trảng Bàng', 49),
(493, 'Thành phố Thái Bình', 50),
(494, 'Huyện Quỳnh Phụ', 50),
(495, 'Huyện Hưng Hà', 50),
(496, 'Huyện Đông Hưng', 50),
(497, 'Huyện Vũ Thư', 50),
(498, 'Huyện Kiến Xương', 50),
(499, 'Huyện Tiền Hải', 50),
(500, 'Huyện Thái Thuỵ', 50),
(501, 'TP.Thái Nguyên', 51),
(502, 'Thị xã Sông Công', 51),
(503, 'Huyện Định Hoá', 51),
(504, 'Huyện Phú Lương', 51),
(505, 'Huyện Võ Nhai', 51),
(506, 'Huyện Đại Từ', 51),
(507, 'Huyện Đồng Hỷ', 51),
(508, 'Huyện Phú Bình', 51),
(509, 'Huyện Phổ Yên', 51),
(510, 'Thành phố Thanh Hoá', 52),
(511, 'Thị xã Bỉm Sơn', 52),
(512, 'Thị xã Sầm Sơn', 52),
(513, 'Huyện Quan Hoá', 52),
(514, 'Huyện Quan Sơn', 52),
(515, 'Huyện Mường Lát', 52),
(516, 'Huyện Bá Thước', 52),
(517, 'Huyện Thường Xuân', 52),
(518, 'Huyện Như Xuân', 52),
(519, 'Huyện Như Thanh', 52),
(520, 'Huyện Lang Chánh', 52),
(521, 'Huyện Ngọc Lặc', 52),
(522, 'Huyện Thạch Thành', 52),
(523, 'Huyện Cẩm Thủy', 52),
(524, 'Huyện Thọ Xuân', 52),
(525, 'Huyện Vĩnh Lộc', 52),
(526, 'Huyện Thiệu Hoá', 52),
(527, 'Huyện Triệu Sơn', 52),
(528, 'Huyện Nông Cống', 52),
(529, 'Huyện Đông Sơn', 52),
(530, 'Huyện Hà Trung', 52),
(531, 'Huyện Hoằng Hoá', 52),
(532, 'Huyện Nga Sơn', 52),
(533, 'Huyện Hậu Lộc', 52),
(534, 'Huyện Quảng Xương', 52),
(535, 'Huyện Tĩnh Gia', 52),
(536, 'Huyện Yên Định', 52),
(537, 'TP. Huế', 53),
(538, 'Huyện Phong Điền', 53),
(539, 'Huyện Quảng Điền', 53),
(540, 'Huyện Hương Trà', 53),
(541, 'Huyện Phú Vang', 53),
(542, 'Huyện Hương Thuỷ', 53),
(543, 'Huyện Phú Lộc', 53),
(544, 'Huyện Nam Đông', 53),
(545, 'Huyện A Lưới', 53),
(546, 'Thành phố Mỹ Tho', 54),
(547, 'Thị xã Gò Công', 54),
(548, 'Huyện Cái Bè', 54),
(549, 'Huyện Cai Lậy', 54),
(550, 'Huyện Châu Thành', 54),
(551, 'Huyện Chợ Gạo', 54),
(552, 'Huyện Gò Công Tây', 54),
(553, 'Huyện Gò Công Đông', 54),
(554, 'Huyện Tân Phước', 54),
(555, 'Thị xã Trà Vinh', 55),
(556, 'Huyện Càng Long', 55),
(557, 'Huyện Cầu Kè', 55),
(558, 'Huyện Tiểu Cần', 55),
(559, 'Huyện Châu Thành', 55),
(560, 'Huyện Trà Cú', 55),
(561, 'Huyện Cầu Ngang', 55),
(562, 'Huyện Duyên Hải', 55),
(563, 'Thành phố Tuyên Quang', 56),
(564, 'Huyện Na Hang', 56),
(565, 'Huyện Chiêm Hoá', 56),
(566, 'Huyện Hàm Yên', 56),
(567, 'Huyện Yên Sơn', 56),
(568, 'Huyện Sơn Dương', 56),
(569, 'Thị xã Vĩnh Long', 57),
(570, 'Huyện Long Hồ', 57),
(571, 'Huyện Mang Thít', 57),
(572, 'Huyện Bình Minh', 57),
(573, 'Huyện Tam Bình', 57),
(574, 'Huyện Trà Ôn', 57),
(575, 'Huyện Vũng Liêm', 57),
(576, 'Huyện Bình Tân', 57),
(577, 'Thành phố Vĩnh Yên', 58),
(578, 'Huyện Tam Dương', 58),
(579, 'Huyện Lập Thạch', 58),
(580, 'Huyện Vĩnh Tường', 58),
(581, 'Huyện Yên Lạc', 58),
(582, 'Huyện Bình Xuyên', 58),
(583, 'Huyện Mê Linh', 58),
(584, 'Huyện Phúc Yên', 58),
(585, 'Huyện Tam Đảo', 58),
(586, 'Thành phố Yên Bái', 59),
(587, 'Thị xã Nghĩa Lộ', 59),
(588, 'Huyện Văn Yên', 59),
(589, 'Huyện Yên Bình', 59),
(590, 'Huyện Mù Cang Chải', 59),
(591, 'Huyện Văn Chấn', 59),
(592, 'Huyện Trấn Yên', 59),
(593, 'Huyện Trạm Tấu', 59),
(594, 'Huyện Lục Yên', 59),
(595, 'Thị xã Tuy Hoà', 60),
(596, 'Huyện Đồng Xuân', 60),
(597, 'Huyện Sông Cầu', 60),
(598, 'Huyện Tuy An', 60),
(599, 'Huyện Sơn Hoà', 60),
(600, 'Huyện Sông Hinh', 60),
(601, 'Huyện Đông Hoà', 60),
(602, 'Huyện Phú Hoà', 60),
(603, 'Huyện Tây Hoà', 60),
(604, 'Quận Ba Đình', 61),
(605, 'Quận Hoàn Kiếm', 61),
(606, 'Quận Hai Bà Trưng', 61),
(607, 'Quận Đống Đa', 61),
(608, 'Quận Tây Hồ', 61),
(609, 'Quận Cầu Giấy', 61),
(610, 'Quận Thanh Xuân', 61),
(611, 'Quận Hoàng Mai', 61),
(612, 'Quận Long Biên', 61),
(613, 'Huyện Từ Liêm', 61),
(614, 'Huyện Thanh Trì', 61),
(615, 'Huyện Gia Lâm', 61),
(616, 'Huyện Đông Anh', 61),
(617, 'Huyện Sóc Sơn', 61),
(618, 'Quận Hà Đông', 61),
(619, 'Thị xã Sơn Tây', 61),
(620, 'Huyện Ba Vì', 61),
(621, 'Huyện Phúc Thọ', 61),
(622, 'Huyện Thạch Thất', 61),
(623, 'Huyện Quốc Oai', 61),
(624, 'Huyện Chương Mỹ', 61),
(625, 'Huyện Đan Phượng', 61),
(626, 'Huyện Hoài Đức', 61),
(627, 'Huyện Thanh Oai', 61),
(628, 'Huyện Mỹ Đức', 61),
(629, 'Huyện Ứng Hoà', 61),
(630, 'Huyện Thường Tín', 61),
(631, 'Huyện Phú Xuyên', 61),
(632, 'Huyện Mê Linh', 61),
(633, 'Quận Một', 62),
(634, 'Quận Hai', 62),
(635, 'Huyện Quận Ba', 62),
(636, 'Quận Bốn', 62),
(637, 'Quận Năm', 62),
(638, 'Quận Sáu', 62),
(639, 'Quận Bảy', 62),
(640, 'Quận Tám', 62),
(641, 'Quận Chín', 62),
(642, 'Quận Mười', 62),
(643, 'Quận Mười một', 62),
(644, 'Quận Mười hai', 62),
(645, 'Quận Gò Vấp', 62),
(646, 'Quận Tân Bình', 62),
(647, 'Quận Tân Phú', 62),
(648, 'Quận Bình Thạnh', 62),
(649, 'Quận Phú Nhuận', 62),
(650, 'Quận Thủ Đức', 62),
(651, 'Quận Bình Tân', 62),
(652, 'Huyện Bình Chánh', 62),
(653, 'Huyện Củ Chi', 62),
(654, 'Huyện Hóc Môn', 62),
(655, 'Huyện Nhà Bè', 62),
(656, 'Huyện Cần Giờ', 62),
(657, 'Quận Hải Châu', 63),
(658, 'Quận Thanh Khê', 63),
(659, 'Quận Sơn Trà', 63),
(660, 'Quận Ngũ Hành Sơn', 63),
(661, 'Quận Liên Chiểu', 63),
(662, 'Huyện Hoà Vang', 63),
(663, 'Quận Cẩm Lệ', 63),
(664, 'Quận Ninh Kiều', 64),
(665, 'Quận Bình Thuỷ', 64),
(666, 'Quận Cái Răng', 64),
(667, 'Quận Ô Môn', 64),
(668, 'Huyện Phong Điền', 64),
(669, 'Huyện Cờ Đỏ', 64),
(670, 'Huyện Vĩnh Thạnh', 64),
(671, 'Huyện Thốt Nốt', 64),
(672, 'Quận Hồng Bàng', 65),
(673, 'Quận Lê Chân', 65),
(674, 'Quận Ngô Quyền', 65),
(675, 'Quận Kiến An', 65),
(676, 'Quận Hải An', 65),
(677, 'Quận Đồ Sơn', 65),
(678, 'Huyện An Lão', 65),
(679, 'Huyện Kiến Thuỵ', 65),
(680, 'Huyện Thủy Nguyên', 65),
(681, 'Huyện An Dương', 65),
(682, 'Huyện Tiên Lãng', 65),
(683, 'Huyện Vĩnh Bảo', 65),
(684, 'Huyện Cát Hải', 65),
(685, 'Huyện Bạch Long Vĩ', 65),
(686, 'Quận Dương Kinh', 65);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id_feedback` int(10) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL,
  `reviewer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id_feedback`, `stars`, `reviewer`, `tel`, `review`, `created_at`, `updated_at`) VALUES
(1, 5, 'Tai', '123456789', 'Depqua', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_01_25_154015_table_feedbacks', 1),
(3, '2018_01_25_155233_table_product_type', 1),
(4, '2018_01_25_155547_table_products', 1),
(5, '2018_01_25_155721_table_product_detail', 1),
(6, '2018_01_25_162154_table_customers', 1),
(7, '2018_01_25_162207_table_slide', 1),
(8, '2018_01_25_162439_table_bills', 1),
(9, '2018_01_25_162451_table_bill_detail', 1),
(10, '2018_02_02_143155_table_promotions', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `id_feedback` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int(11) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `id_type`, `id_feedback`, `name`, `unit_price`, `promotion_price`, `size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Gối nằm', 100000, 0, '30x30x10', 'Goi nam em be', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 1, 'Bo Simili', 100000, 0, '30x30x10', 'Bo cho em be', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 1, 'Goi beo', 50000, 0, '30x30x10', 'Bo cho em be', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 1, 'Gối Ôm', 10000, 1000, '30x30x10', 'Bo cho em be', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 3, 1, 'Khan choang', 100000, 0, '30x30x10', 'Bo cho em be', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 1, 'Nem', 80000, 69999, '30x30x10', 'Bo cho em be', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 2, 1, 'Men', 120000, 0, '30x30x10', 'Bo cho em be', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 1, 1, 'Áo Choàng', 900000, 899999, '30x30x10', 'Bo cho em be', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id_detail` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id_detail`, `id_product`, `color`, `image`) VALUES
(1, 2, 'Vang', 'img_1.jpg'),
(2, 2, 'Xanh', 'goi.jpg'),
(3, 2, 'Trang', 'product_1.jpg'),
(4, 2, 'Hong', 'quanao1.jpg'),
(5, 2, 'Do', 'quanao2.jpg'),
(6, 1, 'Vang', 'quanao3.jpg'),
(7, 1, 'Vang', 'quanao4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id_type` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id_type`, `type_name`) VALUES
(1, 'Goi'),
(2, 'Bo'),
(3, 'Aochoang'),
(4, 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id_promotion` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `promotion_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id_promotion`, `id_product`, `promotion_desc`, `created_at`, `updated_at`) VALUES
(1, 8, 'đoé có gì nói', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 'đã nói không có gì nói mà', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `bill_detail_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_detail_id_detail_foreign` (`id_detail`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id_district`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `products_id_type_foreign` (`id_type`),
  ADD KEY `products_id_feedback_foreign` (`id_feedback`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `product_detail_id_product_foreign` (`id_product`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id_promotion`),
  ADD KEY `promotions_id_product_foreign` (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bill` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=687;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id_feedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id_promotion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id_bill`),
  ADD CONSTRAINT `bill_detail_id_detail_foreign` FOREIGN KEY (`id_detail`) REFERENCES `product_detail` (`id_detail`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id_city`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_feedback_foreign` FOREIGN KEY (`id_feedback`) REFERENCES `feedbacks` (`id_feedback`),
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `product_type` (`id_type`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
