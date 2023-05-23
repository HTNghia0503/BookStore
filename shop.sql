-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2023 lúc 11:08 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán khi nhận hàng.\r\n2. Chuyển khoản.\r\n3. Thanh toán online.',
  `ngaydathang` datetime DEFAULT NULL,
  `total` double(10,0) NOT NULL,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng mới\r\n1. Đang xử lý\r\n2. Đang giao hàng\r\n3. Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(25, 4, 'nghia', 'Ha Noi', '0345235634', 'nghia@gmail.com', 0, '2023-05-02 06:37:22', 180000, 3, NULL, NULL, NULL),
(26, 4, 'nghia', 'Ha Noi', '0345235634', 'nghia@gmail.com', 0, '2023-05-04 20:15:23', 206000, 3, NULL, NULL, NULL),
(27, 3, 'truong', 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu', '0123456743', 'truongaphamnhat@gmail.com', 0, '2023-05-03 02:44:15', 180000, 3, NULL, NULL, NULL),
(28, 3, 'truong', 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu', '0123456743', 'truongaphamnhat@gmail.com', 0, '2023-04-28 12:10:31', 458000, 2, NULL, NULL, NULL),
(31, 4, 'nghia', 'Ha Noi', '0345235634', 'nghia@gmail.com', 0, '2023-05-06 11:08:43', 180000, 2, NULL, NULL, NULL),
(32, 5, 'nam', 'Tien Giang', '0123310241', 'nam@gmail.com', 0, '2023-05-06 00:00:00', 120000, 0, NULL, NULL, NULL),
(33, 5, 'nam', 'Tien Giang', '0123310241', 'nam@gmail.com', 0, '2023-05-06 00:00:00', 300000, 0, NULL, NULL, NULL),
(34, 3, 'truong', 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu', '0123456743', 'truongaphamnhat@gmail.com', 0, '2023-05-06 00:00:00', 180000, 0, NULL, NULL, NULL),
(35, 3, 'truong', 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu', '0123456743', 'truongaphamnhat@gmail.com', 0, '2023-05-06 15:42:58', 269000, 0, NULL, NULL, NULL),
(36, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 15:51:56', 196000, 4, NULL, NULL, NULL),
(37, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 15:55:15', 196000, 4, NULL, NULL, NULL),
(38, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 15:56:27', 196000, 4, NULL, NULL, NULL),
(39, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 15:57:40', 196000, 4, NULL, NULL, NULL),
(40, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 15:57:46', 196000, 4, NULL, NULL, NULL),
(41, 0, 'Phuc', 'Tien giang', '0987678942', 'phuc@gmail.com', 0, '2023-05-06 16:00:32', 196000, 4, NULL, NULL, NULL),
(42, 10, 'nhanvien', 'Bạc Liêu', '0971289436', 'truongnv@gmail.com', 0, '2023-05-06 16:03:14', 294000, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nameuser` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `nameuser`, `idpro`, `ngaybinhluan`) VALUES
(17, 'very good', 'nghia', 9, '20:20:22 19/03/2023'),
(18, 'hay', 'nam', 2, '20:20:22 16/04/2023'),
(21, 'sách rất hay', 'truong', 19, '09:58:26 06/05/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` double(10,0) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 0),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 0),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 0),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 0, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 3, 4, 'b6.jpg', 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', 77, 1, 77, 0),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 0),
(0, 4, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 4, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 0),
(0, 4, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 0),
(0, 4, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 1),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 2),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 2),
(0, 3, 6, 'b8.jpg', 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58, 1, 58, 3),
(0, 5, 5, 'b5.jpg', 'Những Câu Chuyện Truyền Cảm Hứng - I Will Be Better: Nguồn Năng Lượng Tích Cực', 49, 1, 49, 4),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 5),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 5),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 6),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 6),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 7),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 7),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 8),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 8),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 9),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 9),
(0, 4, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 10),
(0, 4, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 11),
(0, 4, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 11),
(0, 4, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 11),
(0, 4, 2, 'b3.jpg', 'Mind Map - English Grammar', 88, 1, 88, 11),
(0, 4, 4, 'b6.jpg', 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', 77, 1, 77, 11),
(0, 3, 7, 'b7.jpg', '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160, 1, 160, 12),
(0, 3, 4, 'b6.jpg', 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', 77, 1, 77, 12),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 12),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 12),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 13),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 13),
(0, 0, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 14),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 15),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 15),
(0, 3, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120, 1, 120, 16),
(0, 3, 13, 'YourName.jpeg', 'Your Name', 80, 1, 80, 16),
(0, 3, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120, 1, 120, 17),
(0, 3, 13, 'YourName.jpeg', 'Your Name', 80, 1, 80, 17),
(0, 3, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120, 1, 120, 18),
(0, 3, 13, 'YourName.jpeg', 'Your Name', 80, 1, 80, 18),
(0, 3, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120, 1, 120, 19),
(0, 3, 13, 'YourName.jpeg', 'Your Name', 80, 1, 80, 19),
(0, 3, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120, 1, 120, 20),
(0, 3, 13, 'YourName.jpeg', 'Your Name', 80, 1, 80, 20),
(0, 3, 8, 'kt01.jpg', '7 Phương Pháp Đầu Tư Warren Buffet', 93, 1, 93, 13),
(0, 0, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 14),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 15),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 15),
(0, 3, 4, 'b6.jpg', 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', 77, 1, 77, 16),
(0, 3, 9, 'tamLy-kyNangSong01.jpg', 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56, 1, 56, 17),
(0, 4, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180, 1, 180, 18),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180, 1, 180, 19),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180, 1, 180, 20),
(0, 3, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 20),
(0, 3, 17, 'cung-dan-bao-oan.jpg', 'Cung Đàn Báo Oán', 108000, 1, 108000, 20),
(0, 3, 16, 'am-duong-su.jpg', 'Âm Dương Sư', 89000, 1, 89000, 21),
(0, 10, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 22),
(0, 10, 17, 'cung-dan-bao-oan.jpg', 'Cung Đàn Báo Oán', 108000, 1, 108000, 23),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 24),
(0, 3, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 24),
(0, 4, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 25),
(0, 4, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 26),
(0, 4, 17, 'cung-dan-bao-oan.jpg', 'Cung Đàn Báo Oán', 108000, 1, 108000, 26),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 27),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 28),
(0, 3, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 28),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 28),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 29),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 30),
(0, 4, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 31),
(0, 5, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120000, 1, 120000, 32),
(0, 5, 14, 'khuvuonngontu.jpeg', 'Khu Vườn Ngôn Từ', 120000, 1, 120000, 33),
(0, 5, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 33),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 34),
(0, 3, 19, 'con-cua-soi-manga.jpg', 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 1, 180000, 35),
(0, 3, 16, 'am-duong-su.jpg', 'Âm Dương Sư', 89000, 1, 89000, 35),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 36),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 36),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 37),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 37),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 38),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 38),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 39),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 39),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 40),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 40),
(0, 0, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 41),
(0, 0, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 41),
(0, 10, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 42),
(0, 10, 15, 'ngan_canh_hac.jpg', 'Ngàn Cánh Hạt', 98000, 1, 98000, 42),
(0, 10, 18, 'nhan_hinh_quan.jpg', 'Nhân Hình Quán', 98000, 1, 98000, 42);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(12) NOT NULL,
  `name` varchar(257) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'VĂN HỌC'),
(2, 'KINH TẾ'),
(3, 'THIẾU NHI'),
(4, 'GIÁO KHOA - THAM KHẢO'),
(5, 'LIGHT NOVEL'),
(15, 'HỌC NGOẠI NGỮ'),
(16, 'GIẢI TRÍ'),
(52, 'TÂM LÝ - KỸ NĂNG SỐNG'),
(54, 'TRINH THÁM - KINH DỊ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,0) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(2, 'Mind Map - English Grammar', 87000, 'b3.jpg', '  Mã hàng	8935086833377\r\nTên Nhà Cung Cấp	FIRST NEWS\r\nTác giả	TS Nguyễn Đắc Tâm\r\nNXB	NXB Tổng hợp TP.HCM\r\nNăm XB	04-2014\r\nTrọng lượng (gr)	350\r\nKích Thước Bao Bì	20.5 x 14.5\r\nSố trang	240\r\nHình thức	Bìa Mềm  ', 300, 15),
(3, 'Reading TOEIC 100 - Luyện Chuyên Sâu Ngữ Pháp Và Từ Vựng TOEIC Part 5 6', 139000, 'b4.jpg', ' Mã hàng	8936110980920\r\nTên Nhà Cung Cấp	Megabook\r\nTác giả	Nguyễn Thị Lệ Mỹ\r\nNXB	NXB Đại Học Quốc Gia Hà Nội\r\nNăm XB	2017\r\nNgôn Ngữ	Tiếng Anh\r\nTrọng lượng (gr)	300\r\nKích Thước Bao Bì	29.5 x 20.5 cm\r\nSố trang	276\r\nHình thức	Bìa Mềm ', 97, 15),
(4, 'Nghĩ Giàu & Làm Giàu (Tái Bản 2020)', 77000, 'b6.jpg', ' \r\nMã hàng	8935086844342\r\nTên Nhà Cung Cấp	FIRST NEWS\r\nTác giả	Napoleon Hill\r\nNgười Dịch	Việt Khương\r\nNXB	NXB Tổng Hợp TPHCM\r\nNăm XB	2020\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	450\r\nKích Thước Bao Bì	20.5 x 14.5 cm\r\nSố trang	400\r\nHình thức	Bìa Mềm ', 986, 2),
(5, 'Những Câu Chuyện Truyền Cảm Hứng - I Will Be Better: Nguồn Năng Lượng Tích Cực', 49000, 'b5.jpg', ' \r\nMã hàng	8935244861594\r\nTên Nhà Cung Cấp	Nhà Xuất Bản Kim Đồng\r\nTác giả	Yunan\r\nNgười Dịch	Tâm Giao\r\nNXB	NXB Kim Đồng\r\nNăm XB	2021\r\nTrọng lượng (gr)	250\r\nKích Thước Bao Bì	20.5 x 14.5 cm\r\nSố trang	220\r\nHình thức	Bìa Mềm ', 130, 3),
(6, 'Quẳng Gánh Lo Đi Và Vui Sống (Tái Bản 2021)', 58000, 'b8.jpg', ' \r\nMã hàng	8935086854747\r\nTên Nhà Cung Cấp	FIRST NEWS\r\nTác giả	Dale Carnegie\r\nNgười Dịch	Nguyễn Văn Phước\r\nNXB	NXB Tổng Hợp TPHCM\r\nNăm XB	2021\r\nNgôn Ngữ	Tiếng Việt\r\nTrọng lượng (gr)	350\r\nKích Thước Bao Bì	20.5 x 14.5 cm\r\nSố trang	312 ', 67, 16),
(7, '60 Đề Minh Họa 2023 Môn Tiếng Anh', 160000, 'b7.jpg', ' \r\nMã hàng	9786043876741\r\nTên Nhà Cung Cấp	Công Ty Cổ Phần Công Nghệ Giáo Dục Trực Tuyến Aladanh\r\nTác giả	Trang Anh\r\nNXB	Thanh Niên\r\nNăm XB	2022\r\nTrọng lượng (gr)	420\r\nKích Thước Bao Bì	27 x 19 cm\r\nSố trang	480\r\nHình thức	Bìa Mềm ', 879, 4),
(8, '7 Phương Pháp Đầu Tư Warren Buffet', 93000, 'kt01.jpg', ' \r\nMã hàng	8936066687430\r\nTên Nhà Cung Cấp	1980 Books\r\nTác giả	Mary Buffett, Sean Seah\r\nNgười Dịch	Huy Nguyễn\r\nNXB	NXB Công Thương\r\nNăm XB	2019\r\nTrọng lượng (gr)	300\r\nHình thức	Bìa Mềm ', 439, 2),
(9, 'Đời Ngắn Đừng Ngủ Dài (Tái Bản 2018)', 56000, 'tamLy-kyNangSong01.jpg', ' Mã hàng	8934974158691\r\nTên Nhà Cung Cấp	NXB Trẻ\r\nTác giả	Robin Sharma\r\nNXB	NXB Trẻ\r\nNăm XB	2018\r\nTrọng lượng (gr)	250\r\nKích Thước Bao Bì	13 x 20.5\r\nSố trang	228\r\nHình thức	Bìa Mềm ', 150, 52),
(12, 'Thị trấn vắng mình tôi - Tập 01', 58000, 'thitranvangminhtoi_01.jpeg', ' - Tác giả: Sanbe Kei.\r\n- Nhà xuất bản: Hà Nội\r\n- Năm xuất bản: 2022.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước: 13 x 18 cm.\r\n- Nội dung: Dẫu cuộc sống không như ý, Fujinuma Satoru vẫn phải vật lộn với nó mỗi ngày. Tuy sở hữu năng lực “tua lại” giúp anh quay ngược thời gian, nhưng những gì nó đem đến chỉ toàn tiêu cực…\r\nNhưng rồi một ngày, mọi thứ thay đổi. Một vụ án lớn đã khiến cuộc sống của anh đảo lộn. Liệu năng lực “tua lại” có thể giúp Satoru thoát khỏi tình cảnh hiểm nghèo và sửa chữa sai lầm trong quá khứ không? Hãy đón đọc tập 1 của Thị trấn vắng mình tôi của tác giả Sanbe Kei. ', 0, 5),
(13, 'Your Name', 80000, 'YourName.jpeg', ' - Tác giả: Shinkai Makoto.\r\n- Nhà xuất bản: Hồng Đức.\r\n- Năm xuất bản: 2017.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước: 13 x 18 cm.\r\n- Nội dung: Giới thiệu sách: Your Name Mitsuha là nữ sinh trung học sống ở vùng quê hẻo lánh. Một ngày nọ, cô mơ thấy mình ở Tokyo trong một căn phòng xa lạ, biến thành con trai, gặp những người bạn chưa từng quen biết. ', 0, 5),
(14, 'Khu Vườn Ngôn Từ', 120000, 'khuvuonngontu.jpeg', ' - Tác giả: Shinkai Makoto.\r\n- Nhà xuất bản: Hồng Đức.\r\n- Năm xuất bản: 2015.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước 13 x 18 cm.\r\n- Nội dung: Giới thiệu sách: TOP 100 BEST SELLER - Khu Vườn Ngôn Từ Khu vườn ngôn từ kể về một tình yêu còn xa xưa hơn cả tình yêu. Khái niệm tình yêu trong tiếng Nhật hiện đại là luyến hoặc ái, nhưng vào thời xưa nó được viết là cô bi, nghĩa là nỗi buồn một mình. ', 0, 5),
(15, 'Ngàn Cánh Hạt', 98000, 'ngan_canh_hac.jpg', ' - Tác giả: Kawabata Yasunari.\r\n- Nhà xuất bản: Hồng Đức.\r\n- Năm xuất bản: 2020.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước 13 x 18 cm.\r\n- Nội dung: Là hậu duệ một gia tộc trà đạo, thay vì duy trì truyền thống, Kikuji lại tìm cách trốn tránh nó, coi nhẹ nó, thậm chí bán luôn cả trà thất của gia đình. ', 0, 1),
(16, 'Âm Dương Sư', 89000, 'am-duong-su.jpg', ' - Tác giả: Yumemakura Baku.\r\n- Nhà xuất bản: Hà Nội.\r\n- Năm xuất bản: 2020.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước 13 x 18 cm.\r\n- Nội dung: Có một con cóc to cộ từ đâu nhảy vào sân. Thằng cu nhà ấy bắt gặp, bèn vớ sào tre đâm con cóc xuống đất. Con cóc không nhảy đi được nữa nhưng cũng không chết, cứ ngắc ngoải tại chỗ đến tận đêm hôm sau thì bắt đầu khóc. Mỗi lần nó khóc, thằng cu kia lại phát sốt. ', 0, 1),
(17, 'Cung Đàn Báo Oán', 108000, 'cung-dan-bao-oan.jpg', ' - Tác giả: Yokomizo Seishi.\r\n- Nhà xuất bản: Hồng Đức.\r\n- Năm xuất bản: 2020.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước: 13.5 x 20.5 cm.\r\n- Nội dung: Gia tộc Ichiyanagi vốn là gia tộc được chọn làm quản lý dịch trạm thời Edo. Vào đêm tân hôn của trưởng tộc, bỗng có tiếng hét quái dị cùng tiếng đàn vang lên từ căn biệt thất trong dinh thự của gia tộc. ', 0, 54),
(18, 'Nhân Hình Quán', 98000, 'nhan_hinh_quan.jpg', ' - Tác giả: Yukito Ayatsuji.\r\n- Nhà xuất bản: Hội Nhà Văn.\r\n- Năm xuất bản: 2016.\r\n- Hình thức: Bìa mềm.\r\n- Kích thước: 13.5 x 20.5 cm.\r\n- Nội dung: Nhân Hình Quán là tác phẩm có màu sắc khác biệt nhất, cũng ngột ngạt nhất trong cả series Quán!\r\nSau khi cha mất, Soichi trở về nhà tổ, tiếp quản tài sản thừa kế đồ sộ. ', 0, 54),
(19, 'Ame & Yuki - Những Đứa Con Của Sói', 180000, 'con-cua-soi-manga.jpg', ' - Tác giả: Mamoru Hosoda.\r\n- Nhà xuất bản: Hồng Đức.\r\n- Năm xuất bản: 2022.\r\n- Kích thước: 13 x 18 cm.\r\n- Nội dung: Câu chuyện này nghe qua như cổ tích, vì nó mở đầu thật đẹp, và cũng thật ly kỳ. Người đẹp và quái vật, công chúa và con ếch… Tiếp nối bao nhiêu câu chuyện tình yêu nổi tiếng với mối duyên nhân - thú, Ame và Yuki - những đứa con của sói, cũng đã mở ra bằng tình cảm đẹp đẽ và bất chấp lẽ thường giữa hoa (Hana) và sói, để tạo ra tuyết (Yuki) và mưa (Ame). ', 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(10) NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tel` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(3, 'truong', '1234', 'truongaphamnhat@gmail.com', 'Cầu Đỏ - Vĩnh Lộc - Hồng Dân - Bạc Liêu', '0123456743', 1),
(4, 'nghia', '1235', 'nghia@gmail.com', 'Ha Noi', '0345235634', 0),
(5, 'nam', '123', 'nam@gmail.com', 'Tien Giang', '0123310241', 0),
(10, 'nhanvien', '123', 'truongnv@gmail.com', 'Bạc Liêu', '0971289436', 2),
(19, 'truong12', '1234', 'truongaphamnhat12@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `img`, `title`, `mota`, `time`) VALUES
(1, 'tt1.jpg', '[SỰ KIỆN] GẶP GỠ VÀ KÝ TẶNG SÁCH MANGA CÙNG BỘ ĐÔI TÁC GIẢ “TÌNH ĐẦU NHẠT PHAI”', 'Chiều ngày 25/2/2023, tại Nhà sách Nguyễn Huệ (40 Nguyễn Huệ, P. Bến Nghé, Q. 1, TP. HCM) đã diễn ra sự kiện gặp gỡ và ký tặng cùng bộ đôi tác giả Wataru Hinekure và họa sĩ minh họa Aruko - hai tác gi', '2023-03-02 15:51:53'),
(2, 'tt_nutChuotQuet.jpg', '\r\n[ĐIỂM SÁCH] NÚI CHUỘT QUÉT – BÓNG TỐI ẨN SAU ÁNH LỬA NGHIỆT NGÃ', 'Núi Chuột Quét là một trong những tác phẩm nổi bật nhất của Hô Diên Vân – cây bút tài năng của nền trinh thám Trung Quốc. Sức hấp dẫn của tác phẩm không chỉ đến từ cốt truyện công phu, số lượng nhân v', '2023-03-28 15:53:53'),
(3, 'news_loiNguyen.jpg', '\r\n[ĐIỂM SÁCH] LỜI NGUYỀN SHIRAISAN – THÊM MỘT TÁC PHẨM KINH DỊ LẠ LÙNG CỦA OTSUICHI', 'Otsuichi là tác giả truyện trinh thám kinh dị quen thuộc của độc giả Việt Nam với nhiều tác phẩm được liệt vào hàng “không thể ngừng đọc”. Đó là “Zoo”, là “Calling you”, là “Mắt đá”. Và lần này, IPM c', '2023-03-28 15:53:53'),
(4, 'news_hinh_canh_mat_tri_trinh_tham.jpg', '[ĐIỂM SÁCH] HÌNH CẢNH MẤT TRÍ - NHẸ TAY NHƯNG KHÔNG NHẸ ĐÔ', 'Nếu từng tìm đọc 13.67 của nhà văn Chan Ho Kei, có lẽ độc giả sẽ “thở phào nhẹ nhõm” khi cầm trên tay cuốn Hình Cảnh Mất Trí đồng tác giả. Bởi lẽ, so với gần 600 trang sách dày cộp in bản to của 13.67', '2023-03-28 17:25:31'),
(5, 'news_belle.jpg', '[REVIEW ĐỘC GIẢ] BELLE – RỒNG VÀ CÔNG CHÚA TÀN NHANG: ĐỂ TIẾNG HÁT ĐƯA TA ĐẾN NƠI CÓ ÁNH DƯƠNG!', '    BELLE – RỒNG VÀ CÔNG CHÚA TÀN NHANG là tiểu thuyết được chấp bút bởi Mamoru Hosoda và minh họa bởi Yoriyuki Ikegami (Trúc Linh dịch). Câu chuyện giả tưởng này bắt đầu với nhân vật Suzu - một...', '2023-03-28 17:28:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
