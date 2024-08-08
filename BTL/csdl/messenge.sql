-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2023 lúc 05:04 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messenge`
--

CREATE TABLE `messenge` (
  `id_mess` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `messenge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `messenge`
--

INSERT INTO `messenge` (`id_mess`, `name`, `email`, `messenge`) VALUES
(7, 'duyên', 'duyenkma@gmail.com', 'Duyên rất hài lòng'),
(10, 'ánh nguyễn', 'anhkma@gmail.com', 'tôi rất vui vì sản phẩm dễ nhìn'),
(11, 'duyên nguyễn', 'duyenkma@gmail.com', 'tôi rất vui vì sản phẩm dễ nhìn'),
(12, 'Hoàng Thị Quyên', 'quyenkma@gmail.com', 'tôi rất vui vì sản phẩm dễ nhìn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `messenge`
--
ALTER TABLE `messenge`
  ADD PRIMARY KEY (`id_mess`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `messenge`
--
ALTER TABLE `messenge`
  MODIFY `id_mess` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
