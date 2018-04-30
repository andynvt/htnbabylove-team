-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 03:21 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `total_price` int(11) NOT NULL,
  `total_product` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `total_price`, `total_product`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 1, 375000, 5, 2, '6/2 KDC Mê Trô', '2018-04-22 16:15:52', '2018-04-22 16:15:52'),
(2, 2, 300000, 4, 2, 'cần thơ', '2018-07-16 16:34:44', '2018-04-22 16:34:44'),
(3, 3, 150000, 2, 4, 'Cần thơ', '2018-04-22 17:16:51', '2018-04-22 17:16:51'),
(4, 4, 92000, 1, 3, '132', '2018-04-23 01:56:07', '2018-04-23 01:56:07'),
(5, 5, 170000, 2, 4, '30/4', '2018-04-27 01:52:56', '2018-04-27 01:52:56'),
(6, 6, 170000, 2, 4, '30/4', '2018-08-15 01:53:45', '2018-04-27 01:53:45'),
(7, 7, 170000, 2, 4, '30/4', '2018-04-27 01:54:06', '2018-04-27 01:54:06'),
(8, 8, 170000, 2, 4, '30/4', '2018-04-27 01:54:18', '2018-04-27 01:54:18'),
(9, 9, 170000, 2, 4, '30/4', '2018-04-27 01:54:39', '2018-04-27 01:54:39'),
(10, 10, 170000, 2, 4, '30/4', '2018-04-27 01:55:43', '2018-04-27 01:55:43'),
(11, 11, 170000, 2, 4, '30/4', '2018-04-27 01:56:47', '2018-04-27 01:56:47'),
(12, 12, 170000, 2, 4, '30/4', '2018-04-10 01:56:58', '2018-04-27 01:56:58'),
(13, 13, 170000, 2, 4, '30/4', '2018-04-27 01:57:43', '2018-04-27 01:57:43'),
(14, 14, 170000, 2, 4, '30/4', '2018-04-27 01:58:10', '2018-04-27 01:58:10'),
(15, 15, 170000, 2, 4, '30/4', '2018-04-27 01:58:38', '2018-04-27 01:58:38'),
(16, 16, 170000, 2, 4, '30/4', '2018-04-27 01:58:54', '2018-04-27 01:58:54'),
(17, 17, 170000, 2, 4, '30/4', '2018-04-27 01:59:19', '2018-04-27 01:59:19'),
(18, 18, 170000, 2, 4, '30/4', '2018-04-27 01:59:31', '2018-04-27 01:59:31'),
(19, 19, 170000, 2, 4, '30/4', '2018-04-27 02:00:22', '2018-04-27 02:00:22'),
(20, 20, 170000, 2, 4, '30/4', '2018-04-27 02:00:34', '2018-04-27 02:00:34'),
(21, 21, 170000, 2, 4, '30/4', '2018-04-27 02:02:44', '2018-04-27 02:02:44'),
(22, 22, 320000, 3, 4, '1111', '2018-04-27 02:07:27', '2018-04-27 02:07:27'),
(23, 23, 160000, 2, 4, '12312', '2018-04-27 04:36:51', '2018-04-27 04:36:51'),
(24, 24, 242000, 3, 2, '133333', '2018-04-27 04:38:56', '2018-04-27 04:38:56'),
(25, 26, 75000, 1, 2, 'yyy', '2018-04-27 07:11:39', '2018-04-27 07:11:39'),
(26, 27, 255000, 3, 2, 'cần thơ', '2018-04-27 07:42:54', '2018-04-27 07:42:54'),
(27, 28, 262000, 3, 3, 'jj', '2018-04-27 07:44:55', '2018-04-27 07:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `product_name`, `color`, `image`, `size`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Combo Áo Gối Trẻ Em Giá Rẻ', 'Trắng', '2018-04-22-22:01:47-465735576_imgp8797.jpg', '35x25 cm', 5, 75000, '2018-04-22 16:15:52', '2018-04-22 16:15:52'),
(2, 2, 'Combo Áo Gối Trẻ Em Giá Rẻ', 'Nâu', '2018-04-22-22:01:47-465735576_imgp8797.jpg', '35x25 cm', 4, 75000, '2018-04-22 16:34:44', '2018-04-22 16:34:44'),
(3, 3, 'Combo Áo Gối Trẻ Em Giá Rẻ', 'Trắng', '2018-04-22-22:01:47-465735576_imgp8797.jpg', '35x25 cm', 2, 75000, '2018-04-22 17:16:51', '2018-04-22 17:16:51'),
(4, 4, 'Gối lõm hình chú hổ Beiner', 'Hồng', '2018-04-22-22:09:11-goi-lom-hinh-chu-ho-beiner-4649-_3_.jpg', '35x25 cm', 1, 92000, '2018-04-23 01:56:07', '2018-04-23 01:56:07'),
(5, 21, 'Áo Gối Tím Hoa', '', '', '50x70 cm', 2, 85000, '2018-04-27 02:02:44', '2018-04-27 02:02:44'),
(6, 22, 'Áo Gối Tím Hoa', '', '', '50x70 cm', 2, 85000, '2018-04-27 02:07:27', '2018-04-27 02:07:27'),
(7, 22, 'Áo choàng ếch xanh - con vịt vàng', '', '', '52x38 cm', 1, 150000, '2018-04-27 02:07:27', '2018-04-27 02:07:27'),
(8, 23, 'Áo Gối Tím Hoa', '', '', '50x70 cm', 1, 85000, '2018-04-27 04:36:51', '2018-04-27 04:36:51'),
(9, 23, 'Combo Áo Gối Trẻ Em Giá Rẻ', '', '', '35x25 cm', 1, 75000, '2018-04-27 04:36:51', '2018-04-27 04:36:51'),
(10, 24, 'Combo Áo Gối Trẻ Em Giá Rẻ', 'Trắng', '2018-04-22-22-01-47-465735576_imgp8797.jpg', '35x25 cm', 2, 75000, '2018-04-27 04:38:56', '2018-04-27 04:38:56'),
(11, 24, 'Gối lõm hình chú hổ Beiner', 'Hồng', '2018-04-22-22-09-11-goi-lom-hinh-chu-ho-beiner-4649-_3_.jpg', '35x25 cm', 1, 92000, '2018-04-27 04:38:56', '2018-04-27 04:38:56'),
(12, 25, 'Combo Áo Gối Trẻ Em Giá Rẻ', 'Trắng', '2018-04-22-22-01-47-465735576_imgp8797.jpg', '35x25 cm', 1, 75000, '2018-04-27 07:11:39', '2018-04-27 07:11:39'),
(13, 26, 'Áo Gối Tím Hoa', 'Tím', '2018-04-22-21-50-21-0635669312623931460.jpg', '50x70 cm', 3, 85000, '2018-04-27 07:42:54', '2018-04-27 07:42:54'),
(14, 27, 'Áo Gối Tím Hoa', 'Tím', '2018-04-22-21-50-21-0635669312623931460.jpg', '50x70 cm', 2, 85000, '2018-04-27 07:44:55', '2018-04-27 07:44:55'),
(15, 27, 'Gối lõm hình chú hổ Beiner', 'Hồng', '2018-04-22-22-09-11-goi-lom-hinh-chu-ho-beiner-4649-_3_.jpg', '35x25 cm', 1, 92000, '2018-04-27 07:44:55', '2018-04-27 07:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
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
  `id` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn Tài', '', 'andy.nvt.vn@gmail.com', '6/2 KDC Mê Trô', '01666988779', '2018-04-22 16:15:52', '2018-04-22 16:15:52'),
(2, 'tài', '', 'tai@gmail.com', 'cần thơ', '0987654321', '2018-04-22 16:34:44', '2018-04-22 16:34:44'),
(3, 'Tìa', '', 'tai@gmail.com', 'Cần thơ', '1234566789', '2018-04-22 17:16:51', '2018-04-22 17:16:51'),
(4, 'Phong Phung Phí', '', 'vo.hoaiphongamkg@gmail.com', '132', '0123', '2018-04-23 01:56:07', '2018-04-23 01:56:07'),
(5, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:52:56', '2018-04-27 01:52:56'),
(6, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:53:45', '2018-04-27 01:53:45'),
(7, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:54:06', '2018-04-27 01:54:06'),
(8, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:54:18', '2018-04-27 01:54:18'),
(9, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:54:39', '2018-04-27 01:54:39'),
(10, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:55:43', '2018-04-27 01:55:43'),
(11, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:56:47', '2018-04-27 01:56:47'),
(12, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:56:58', '2018-04-27 01:56:58'),
(13, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:57:43', '2018-04-27 01:57:43'),
(14, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:58:09', '2018-04-27 01:58:09'),
(15, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:58:38', '2018-04-27 01:58:38'),
(16, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:58:54', '2018-04-27 01:58:54'),
(17, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:59:19', '2018-04-27 01:59:19'),
(18, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 01:59:31', '2018-04-27 01:59:31'),
(19, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 02:00:22', '2018-04-27 02:00:22'),
(20, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 02:00:34', '2018-04-27 02:00:34'),
(21, 'Phi', '', 'phipham4596@gmail.com', '30/4', '0987654321', '2018-04-27 02:02:44', '2018-04-27 02:02:44'),
(22, 'tài', '', 'andy.nvt.vn@gmail.com', '1111', '0999999', '2018-04-27 02:07:27', '2018-04-27 02:07:27'),
(23, 'Ng', '', 'abc@gmail.com', '12312', '213123', '2018-04-27 04:36:51', '2018-04-27 04:36:51'),
(24, 'Tài', '', 'andy.nvt.vn@gmail.com', '133333', '1222', '2018-04-27 04:38:56', '2018-04-27 04:38:56'),
(25, 'p', '', 'phipham4596@gmail.com', 'tt', '0909', '2018-04-27 07:08:39', '2018-04-27 07:08:39'),
(26, 'p', '', 'phipham4596@gmail.com', 'yyy', '99', '2018-04-27 07:11:39', '2018-04-27 07:11:39'),
(27, 'Tài', '', 'andy.nvt.vn@gmail.com', 'cần thơ', '0166', '2018-04-27 07:42:54', '2018-04-27 07:42:54'),
(28, 'Ng', '', 'andy.nvt.vn@gmail.com', 'jj', '912', '2018-04-27 07:44:55', '2018-04-27 07:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_city` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `id_city`) VALUES
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
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `feedbacks` (`id`, `id_product`, `stars`, `reviewer`, `tel`, `review`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'Tài', '01', 'Đẹp quá à', '2018-04-22 16:04:27', '2018-04-22 16:04:27'),
(2, 1, 4, 'Tài', '012', 'đẹp ghê', '2018-04-23 00:51:07', '2018-04-23 00:51:07'),
(3, 19, 2, 'Phi', '02', 'Sản phẩm tốt nhưng màu sắc chưa đúng thực tế', '2018-04-23 01:00:43', '2018-04-23 01:00:43'),
(4, 20, 3, 'Phi', '09876', 'Bình thường', '2018-04-27 07:49:41', '2018-04-27 07:49:41');

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
(2, '2018_04_17_105444_product_type', 1),
(3, '2018_04_17_105455_products', 1),
(4, '2018_04_17_105502_feedbacks', 1),
(5, '2018_04_17_105512_product_detail', 1),
(6, '2018_04_17_105516_product_color', 1),
(7, '2018_04_17_105522_product_image', 1),
(8, '2018_04_17_105627_customers', 1),
(9, '2018_04_17_105635_bills', 1),
(10, '2018_04_17_105641_bill_detail', 1),
(11, '2018_04_17_105705_cities', 1),
(12, '2018_04_17_105712_districts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
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

INSERT INTO `products` (`id`, `id_type`, `name`, `unit_price`, `promotion_price`, `size`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Áo Gối Tím Hoa', 100000, 85000, '50x70 cm', 'Áo gối tím xanh là sản phẩm hoàn hảo mang đến cho phòng ngủ của bạn sự đồng điệu và hài hòa.\r\nThiết kế đồng bộ, tinh tế mang đến cho bạn màu sắc tươi tắn, sinh động.\r\nKiểu dáng trang nhã, sang trọng, phù hợp với mọi không gian phòng ngủ.\r\nHọa tiết chính là những trái tim cách điệu trên phông nền tím sang trọng, tinh tế.\r\nChất liệu 100% cotton thoáng mát, mềm mại, tạo sự thoải mái, êm dịu khi sử dụng.\r\nKích thước: 50 x 70 cm.\r\nXuất xứ: Việt Nam.', 1, '2018-04-22 14:50:21', '2018-04-22 14:50:21'),
(2, 1, 'Áo Gối Cotton Thắng Lợi', 40000, 0, '40x60 cm', 'Chất liệu vải cotton Thắng Lợi với đa dạng màu sắc mẫu mã \r\nThiết kế đơn giản với những đường may chắc chắn và tỉ mỉ.\r\nMàu sắc tinh tế cùng hoa văn trang nhã mang đến sự thẩm mỹ cho phòng ngủ của bạn.\r\nVải lâu phai màu, không bị nhăn và dễ giặt ủi.\r\nCó hai loại:  40 x 60 và 50 x 70 tùy theo mục đích sử dụng \r\nXuất xứ: công ty may Thắng Lợi\r\nLưu ý : Ngâm nước lạnh và xả 2 lần trước khi giặt với xà phòng', 2, '2018-04-22 14:55:21', '2018-04-22 14:55:21'),
(3, 1, 'Áo Gối Vạn Thành', 130000, 0, '50x70 cm', 'Chất liệu 100% cotton cao cấp mang đến giấc ngủ ngon và sảng khoái cho gia đình bạn.\r\nMẫu mã đa dạng, hoa văn trang nhã với các màu sắc được bố trí tinh tế phù hợp với thị hiếu của nhiều khách hàng.\r\nĐường may tỉ mỉ, bền đẹp, vừa tăng độ chắc chắn, vừa thể hiện được gu thẩm mỹ cao của bạn.\r\nPhù hợp với nhiều không gian và nội thất khác nhau.\r\nHọa tiết: màu hồng, sọc trắng xanh, họa tiết ngôi sao, màu xám họa tiết hoa, hoa hồng, màu xám, màu xanh lá, sọc họa tiết trái tim, màu xanh.\r\nKích thước: 50cm x 70cm.', 1, '2018-04-22 14:58:18', '2018-04-22 14:58:18'),
(4, 1, 'Combo Áo Gối Trẻ Em Giá Rẻ', 90000, 75000, '35x25 cm', 'Vô cùng êm ái với da bé\r\n\r\nKích thước và độ cao lý tưởng với trẻ nhỏ mang đến giấc ngủ thật ngon và êm đềm.\r\n\r\nKhông gây xù lông không ảnh hưởng đến sức khỏe bé\r\n\r\nSản phẩm hút ẩm và môi hôi tốt, tạo cảm giác ấm áp vào mùa đông và mát mẻ vào mùa nóng.', 2, '2018-04-22 15:01:47', '2018-04-22 15:01:47'),
(5, 2, 'Gối bông trẻ em Ngọc Anh loại to', 55000, 0, '50x70 cm', '- Chất liệu: Gối bông Ngọc Anh gồm vỏ gối bằng vải cotton mềm mại và ruột bằng bông mềm đã xử lý nên rất an toàn giúp bé dễ chịu khi ngủ, chống mồ hôi trộm, thoáng đầu giúp bé ngủ ngon giấc hơn.\r\n\r\n- Màu sắc vỏ gối dễ thương: Với tone màu hồng với họa tiết đáng yêu.\r\n\r\n- Dành cho trẻ từ sơ sinh trở lên.\r\n\r\n- Xuất xứ: Việt Nam.', 1, '2018-04-22 15:06:22', '2018-04-22 15:06:22'),
(6, 2, 'Gối lõm hình chú hổ Beiner', 100000, 92000, '35x25 cm', 'Gối lõm hình chú hổ Beine', 1, '2018-04-22 15:09:11', '2018-04-22 15:09:11'),
(7, 2, 'Gối đầu cho bé KuKu', 195000, 0, '26x19 cm', 'Chất liệu cotton mềm mại\r\nThiết kế bảo vệ đầu bé\r\nHọa tiết ngộ nghĩnh', 2, '2018-04-22 15:12:00', '2018-04-22 15:12:00'),
(8, 2, 'Gối nằm trẻ em Sông Hồng', 100000, 95000, '32x50 cm', 'Thêm một sự lựa chọn gối nằm cho các chàng hoàng tử của chúng ta, đó là sản phẩm Sông Hồng B13 001S. Điểm nhấn chính của sản phẩm là chú mèo Doraemon nhí nhảnh và đáng yêu. Đặc biệt với chất lượng từ vải Cotton nhập khẩu, sản phẩm mang tới cho trẻ nhỏ một giấc ngủ ngon, sâu giấc và tuyệt đối an toàn.\r\n\r\nHãng	May Sông Hồng\r\nThông số chuẩn xác	32 x 50cm\r\nThiết kế	Trọn bộ vỏ gối + ruột gối\r\nƯu điểm nổi bật	Cotton 100% chính hãng mát dịu, thoải mãi độc quyền chính hãng', 1, '2018-04-22 15:14:53', '2018-04-22 15:14:53'),
(9, 2, 'Gối trẻ em êm ái hình ô tô - hàng VN', 80000, 53000, '30x45 cm', 'Gối không bị xẹp lún nên bé nằm gối lâu cũng không lo bị mỏi đầu.\r\nĐàn hồi tốt, giúp nâng đỡ đầu và cơ cổ của bé còn non mềm.\r\nĐộ thoáng khí cao, thấm hút mồ hôi và bay hơi nhanh.\r\nGối phối 2 màu độc đáo, nổi bật, tinh tế.\r\nThiết kế thêu hình ô tô ngộ nghĩnh và xinh xắn.\r\nKích thước: Dài 30cm x Rộng 45cm.\r\nChất liệu: Vải cara\r\nMàu sắc: Hồng, xanh.\r\nXuất xứ: Việt Nam', 1, '2018-04-22 15:17:31', '2018-04-22 15:17:31'),
(10, 3, 'Khăn choàng cổ bông ấm trẻ em', 331000, 0, '75x13 cm', 'Khăn choàng cổ bông ấm trẻ em bền đẹp\r\nChất liệu: len', 1, '2018-04-22 15:20:37', '2018-04-22 15:20:37'),
(11, 3, 'Khăn cổ thỏ xinh xắn cho bé từ 5-7tuổi Wing House', 714000, 516000, '130x13 cm', 'Chất liệu: Acrylic\r\nKích thước: 13x130cm', 2, '2018-04-22 15:22:38', '2018-04-22 15:22:38'),
(12, 3, 'Bộ Mũ Khăn Len Mặt Cười Cho Bé', 110000, 0, '302x120 cm', '– Hình ngộ nghĩnh, màu sắc kết hợp sinh động, sặc sỡ, chắc chắn sẽ khiến bé yêu thích thú.\r\n– Chất liệu: Len mềm mại, không gây ngứa ngáy, khó chịu cho bé.\r\n– Màu sắc: xanh, đỏ, hồng, vàng,\r\nKích thước: khăn dài 120 cm, mũ: rộng đầu 302cm – cao 17cm, (sai số +- 3cm).', 1, '2018-04-22 15:26:39', '2018-04-22 15:26:39'),
(13, 3, 'Combo 2 khăn choàng cổ cho bé', 119000, 0, '79x9 cm', 'Để bé yêu ấm áp và thời trang hơn trong mùa đông này với Mùa đông đến rồi, còn chần chờ gì nữa, hãy sắm ngay Combo 2 khăn choàng cổ cho bé, để bé yêu nhà bạn luôn ấm áp và dễ thương cùng bạn trải qua mùa đông không lạnh nhé!', 1, '2018-04-22 15:30:22', '2018-04-22 15:30:22'),
(14, 4, 'Áo choàng ếch xanh - con vịt vàng', 149000, 150000, '52x38 cm', '_ Chất liệu: Fleece (dạ bông)\r\n \r\n_ Màu sắc: Vàng cam + xanh rêu \r\n \r\n_ Kích thước: dài áo 38cm, dài bao gồm nón 52cm, thích hợp cho trẻ từ 0 đến 4 tuổi.', 1, '2018-04-22 15:32:33', '2018-04-22 15:32:33'),
(15, 4, 'Áo choàng bé gái dễ thương', 132000, 0, 'S, M, L', 'Áo choàng bé gái màu trắng', 2, '2018-04-22 15:34:43', '2018-04-22 15:34:43'),
(16, 4, 'Áo choàng tắm trẻ em, hình Voi con hồng', 329000, 400000, 'S', 'Thông tin sản phẩm:\r\n– Màu sắc: hồng\r\n– Chất liệu: 100% cotton Mỹ\r\n– Xuất xứ: Việt Nam\r\nSợi cotton cao cấp\r\nNguồn gốc sợi bông quyết định 60% chất lượng khăn sản xuất, để có được một chiếc khăn bông đạt tiêu chuẩn chất lượng 5 sao, các sợi bông được chúng tôi nhập trực tiếp từ Mỹ, Ai Cập. Đây được xem là nơi có sợi cotton chất lượng và đẳng cấp nhất thế giới.\r\n100% cotton và luôn luôn như vậy\r\nBụi bông từ các loại khăn thông thường có pha PE cực kỳ độc hại cho đường hô hấp, đặc biệt là các bé. Chúng tôi hiểu đều này vì thế tất cả sản phẩm của chúng tôi đều sử dụng 100% coton thiên nhiên, đảm bảo an toàn tuyệt đối.', 1, '2018-04-22 15:36:41', '2018-04-22 15:36:41'),
(17, 5, 'Mền băng lông Disney 1,5x2m mẫu Kitty', 230000, 0, '1,5x2 m', 'Chất liệu băng lông mềm mịn, dày và mượt. Hàng loại 1 chất không bị xơ.', 1, '2018-04-22 15:38:22', '2018-04-22 15:38:22'),
(18, 5, 'Mền lông cừu trẻ em', 170000, 0, '1x1,3 m', '– Lông mềm mại mịn màng, màu sắc nhã nhặn.\r\n– Trọng lượng nhẹ, thoáng khí, tạo sự thoải mái.\r\n– Đem lại trải nghiệm giấc ngủ tuyệt vời.\r\n– Kích thước: 1m x 1,3m', 1, '2018-04-22 15:39:34', '2018-04-22 15:39:34'),
(19, 5, 'Mền băng lông Hello Kitty 1,5x2m - loại dày', 260000, 230000, '1,5x2 m', '- Kích thước của chăn: 1,5x2m \r\n- Chăn băng lông rất mềm mịn, đắp vào luôn có cảm giác ấm áp, thoải mái và cực kỳ dễ chịu \r\n- Chăn có in hình Hello Kitty màu hồng rất xinh xắn và dễ thương. \r\n- Chăn có thể giặt bằng máy giặt mà vẫn đảm bảo không hề bị xù lông hay phai màu của chă n- vì vậy giặt việc giặt chăn không còn là vấn đề khó khăn cho các mẹ nhé.', 2, '2018-04-22 15:42:04', '2018-04-22 15:42:04'),
(20, 6, 'Bộ chăn ga gối trẻ em thêu', 1150000, 0, 'Nhiều kích thước', 'Bộ chăn ga gối 100% cotton thêu các hình hoạt hình ngộ nghĩnh. Chất liệu cotton 100% thoáng mát, mềm mại hút ẩm tốt cho bé ngủ ngon giấc.  Hình thêu ngộ nghĩnh những người bạn hoạt hình thân thuộc của tuổi thơ. Cách phối màu hiện đại đơn giản. \r\n\r\nQuy cách: Bộ 4 sản phẩm\r\n- Ga giường màu không thêu : cho giường đơn kích cỡ 1m, 1,2m, 1,5mx2m\r\n- Vỏ chăn đơn thêu: 1,5x2m\r\n-Vỏ gối nằm thêu có diềm : 45x65 cm \r\n-Vỏ gối tựa thêu có diềm: 45x45 cm', 1, '2018-04-22 15:44:44', '2018-04-22 15:44:44'),
(21, 6, 'Bộ chăn ga gối hình Công Chúa', 620000, 600000, 'Nhiều loại', 'CHĂN GA GỐI TRẺ EM HÌNH CÔNG CHÚA SOI GƯƠNG- MS: 010 THƯƠNG HIỆU DREAMKID GỒM:\r\n\r\n- 01 ga: 70cm x 1,2m.\r\n\r\n- 01 chăn trần bông siêu nhẹ: 90cm x 1,3m.\r\n\r\n- 01 vỏ gối nằm: 35cm x 50cm.\r\n\r\n- 01 vỏ gối ôm,: 22cm x 55cm.\r\n\r\nLựa chọn tiết kiệm dành cho các ba mẹ: Các ba mẹ có thể chọn vỏ chăn 2 lớp cotton nhẹ nhàng dùng vào mùa xuân,  hè và ruột chăn trần bông siêu nhẹ dày dùng cho mùa đông, ruột chăn trần bông mỏng dùng cho mùa thu.\r\n\r\nThoải mái đặt theo yêu cầu mẫu và kích thước riêng cho giường của bé các mẹ nhé!', 1, '2018-04-22 15:46:23', '2018-04-22 15:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_detail` int(10) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `id_detail`, `color`) VALUES
(1, 1, 'Tím'),
(2, 2, 'Xanh Trắng'),
(3, 2, 'Đỏ Xanh'),
(4, 2, 'Hồng Trắng'),
(5, 2, 'Nâu Xanh'),
(6, 3, 'Xanh Dương'),
(7, 3, 'Vàng'),
(8, 4, 'Trắng'),
(9, 4, 'Xanh'),
(10, 4, 'Nâu'),
(11, 4, 'Vàng'),
(12, 5, 'Hồng'),
(13, 6, 'Hồng'),
(14, 7, 'Hồng'),
(15, 7, 'Nâu'),
(16, 7, 'Vàng'),
(17, 8, 'Hồng'),
(18, 8, 'Xanh'),
(19, 9, 'Hồng'),
(20, 9, 'Xanh Lá'),
(21, 10, 'Đỏ'),
(22, 10, 'Trắng'),
(23, 10, 'Nâu'),
(24, 10, 'Hồng'),
(25, 10, 'Xanh'),
(26, 11, 'Màu Hỗ Hợp'),
(27, 12, 'Xanh'),
(28, 12, 'Vàng'),
(29, 29, '0'),
(30, 12, 'Hồng'),
(31, 12, 'Xám'),
(32, 13, 'Hồng'),
(33, 13, 'Xanh'),
(34, 13, 'Trắng'),
(35, 14, 'Xanh'),
(36, 14, 'Vàng'),
(37, 15, 'Trắng'),
(38, 16, 'Hồng'),
(39, 17, 'Hồng Kitty'),
(40, 18, 'Xanh Doraemon'),
(41, 19, 'Hồng Kitty'),
(42, 20, 'Hoạt hình'),
(43, 21, 'Hồng'),
(44, 22, '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`id`, `id_product`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_detail` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `id_detail`, `image`) VALUES
(1, 1, '2018-04-22-21-50-21-0635669312623931460.jpg'),
(2, 2, '2018-04-22-21-55-21-ao goi.jpg'),
(3, 2, '2018-04-22-21-55-21-AOGNCTTL0000-600x458.jpg'),
(4, 3, '2018-04-22-21-58-18-0635433625008124318.jpg'),
(5, 3, '2018-04-22-21-58-18-ao-goi-van-thanh (2).jpg'),
(6, 3, '2018-04-22-21-58-18-cm_b32200.jpg'),
(7, 4, '2018-04-22-22-01-47-465735576_imgp8797.jpg'),
(8, 4, '2018-04-22-22-01-47-1516599588_762428.jpg'),
(9, 5, '2018-04-22-22-06-22-goi-bong-tre-em-ngoc-anh-loai-to-1.jpg'),
(10, 6, '2018-04-22-22-09-11-goi-lom-hinh-chu-ho-beiner-4649-_3_.jpg'),
(11, 7, '2018-04-22-22-12-00-goi-em-be-kuku-103234-2_1.jpg'),
(12, 7, '2018-04-22-22-12-00-goi-em-be-kuku-103234-4_1.jpg'),
(13, 7, '2018-04-22-22-12-00-goi-lom-kuku-2011-2.jpg'),
(14, 8, '2018-04-22-22-14-53-goi-nam-tre-em-hoa-tiet-xinh-xan (6).jpg'),
(15, 8, '2018-04-22-22-14-53-goi-tre-em-song-hong-hinh-meo-hello-kitty-b13-004-1.jpg'),
(16, 9, '2018-04-22-22-17-31-goi-tre-em-em-ai-hinh-o-to-30cm-x-45cm-hang-vn.jpg'),
(17, 10, '2018-04-22-22-20-37-1110407_L.jpg'),
(18, 11, '2018-04-22-22-22-38-1761678_1_L.jpg'),
(19, 11, '2018-04-22-22-22-38-1761678_2_L.jpg'),
(20, 11, '2018-04-22-22-22-38-1761678_L.jpg'),
(21, 12, '2018-04-22-22-26-39-15749915_669309629915745_420479710_n_master.jpg'),
(22, 12, '2018-04-22-22-26-39-htb1jscwnfxxxxxhxpxxq6xxfxxxx_master.jpg'),
(23, 13, '2018-04-22-22-30-22-b4cb7c90729372bfbd021ffceb390a0c.jpg'),
(24, 13, '2018-04-22-22-30-22-d3386484b9e10b8d10fa5d954a90f175.jpg'),
(25, 14, '2018-04-22-22-32-33-ao-choang-ech-xanh-con-vit-vang-1m4G3-13785789407518_2i2irmj86ctik_simg_19a19b_600x497_max.jpg'),
(26, 14, '2018-04-22-22-32-33-ao-choang-ech-xanh-con-vit-vang-1m4G3-13785789407622_2i2irn2a3ig4f_simg_19a19b_600x497_max.jpg'),
(27, 15, '2018-04-22-22-34-43-Ao-choang-be-gai-mau-trang.jpg'),
(28, 16, '2018-04-22-22-36-41-ao-choang-tam-cho-em-be-hinh-voi-con.jpg'),
(29, 17, '2018-04-22-22-38-22-2502358_17934.jpg'),
(30, 18, '2018-04-22-22-39-34-Chăn-cừu-trẻ-em-170.jpg'),
(31, 19, '2018-04-22-22-42-04-2942_1_chan_bang_long_hello_kitty_loai_day.jpg'),
(32, 19, '2018-04-22-22-42-04-2942_chan_bang_long_hinh_hello_kitty.jpg'),
(33, 20, '2018-04-22-22-44-44-1135.jpg'),
(34, 21, '2018-04-22-22-46-23-IMG_20131213_103349_opt.jpg'),
(35, 22, '2018-04-24-10-24-23-2942_chan_bang_long_hinh_hello_kitty.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `type_name`) VALUES
(1, 'Áo Gối'),
(2, 'Gối'),
(3, 'Khăn Choàng'),
(4, 'Áo Choàng'),
(5, 'Mền'),
(6, 'Bộ Mền Gối'),
(7, 'Mền 2');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'VoHoaiPhong', 'vo.hoaiphongamkg@gmail.com', '$2y$10$CEdbdsSMU9Nv.6yjdRMEtOhR0kdIiOBWtNR2Bup9upjueOPbcsM9m', 'auPM5uiRmTwnN0eNiRhHVdA3FdISHmXYP3XKmUPdMXhYsgHzeLG86FwDqCtj', NULL, NULL),
(2, 'NguyenVanTai', 'abc@gmail.com', '$2y$10$DyySa0Oc5N2SiW..JpbFTOiXqQcZHgsdpkw3UxAD64zQJbBYejZ1S', 'LQw0XqhNvZl6QvqQG1b9GTcPZVCWzRM0hgj26JPOGKu5IWjGTgqN9437Xnzn', NULL, '2018-04-27 07:47:50'),
(3, 'PhanNgocLongPhi', 'def@gmail.com', '$2y$10$jNxYitf.gZWgP96wQv9XcuQK6NxXL7wf4RZqkCnprYDze8StvOfS2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_id_customer_foreign` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_id_bill_foreign` (`id_bill`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_id_city_foreign` (`id_city`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_id_product_foreign` (`id_product`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_color_id_detail_foreign` (`id_detail`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_detail_id_product_foreign` (`id_product`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_image_id_detail_foreign` (`id_detail`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=687;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_color`
--
ALTER TABLE `product_color`
  ADD CONSTRAINT `product_color_id_detail_foreign` FOREIGN KEY (`id_detail`) REFERENCES `product_detail` (`id`);

--
-- Constraints for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD CONSTRAINT `product_detail_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_id_detail_foreign` FOREIGN KEY (`id_detail`) REFERENCES `product_detail` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
