-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 03, 2021 lúc 01:07 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltw`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `ten`, `diachi`, `sdt`, `email`, `nhom`) VALUES
(1, 'Lazada', 'Ha noi', '0382082505', 'vminh797@yahoo.com', 2),
(2, 'Công ty đồ uống Thành Lợi', 'Ha Nam', '0371256391', 'vhm2899@gmail.com', 2),
(3, 'Công ty thực phẩm', 'Bắc Giang', '0352280775', 'vhm2899@gmail.com', 3),
(4, 'Công ty thương mại', 'Nam Định', '0312345678', 'vuhong2899@gmail.com', 2),
(5, 'Đại lí bánh kẹo Thành Long', 'Quảng Ninh', '0964997289', 'vhm2899@gmail.com', 1),
(6, 'Đại lí thức ăn nhanh Nhu ý', 'Thanh Hóa', '0975334976', 'vuhongminh2899@gmail.com', 3),
(7, 'Đại lí hàng tiêu dùng Minh Vũ', 'Vũng Tàu', '0965334977', 'vminh797@yahoo.com', 1),
(9, 'Shoppee', 'Ha noi', '0378619603', 'minhvu2899@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipper`
--

CREATE TABLE `shipper` (
  `id` int(50) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shipper`
--

INSERT INTO `shipper` (`id`, `ten`, `diachi`, `sdt`) VALUES
(1, 'Nguyễn Văn A', 'Ha noi', '0123456'),
(2, 'Nguyễn Văn B', 'Ha noi', '013'),
(3, 'Nguyen Van C', 'Ha Noi', '0123456789'),
(4, 'Nguyen Van D', 'Ha Noi', '0123456789'),
(14, 'Lazada', 'Ha noi', '0123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `quyen` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `ten`, `email`, `sdt`, `diachi`, `img`, `quyen`) VALUES
(1, 'admin', '1679091c5a880faf6fb5e6087eb1b2dc', 'Minh', 'vuhongminh2899@gmail.com', '0382082505', '', '2.3.jpg', 2),
(2, 'vhm', 'e10adc3949ba59abbe56e057f20f883e', 'Minhvh', 'vuhongminh2899@gmail.com', '0382082505', 'HaNam', '2.jpg', 0),
(3, 'shipper', 'e10adc3949ba59abbe56e057f20f883e', 'Minhvh', 'vuhongminh2899@gmail.com', '0382082505', 'Ha noi', '2.3.jpg', 1),
(13, 'shipper13', 'e10adc3949ba59abbe56e057f20f883e', 'vhm', '', '0123456', 'Ha noi', '', 1),
(14, 'shipper14', 'e10adc3949ba59abbe56e057f20f883e', 'Lazada', '', '0123456', 'Ha noi', '2.3.jpg', 1),
(30, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'minh', 'minhvu2899@gmail.com', '0912345678', '', '2.3.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `idVD` varchar(50) NOT NULL DEFAULT '',
  `idDH` varchar(50) NOT NULL,
  `idShipper` int(50) NOT NULL,
  `IDNCC` int(100) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `Total` int(100) NOT NULL,
  `ngaytao` date NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `vanchuyen`
--

INSERT INTO `vanchuyen` (`idVD`, `idDH`, `idShipper`, `IDNCC`, `soluongnhap`, `Total`, `ngaytao`, `status`) VALUES
('VD01', '1', 1, 4, 100000, 500000, '2020-12-11', 5),
('VD02', '2', 14, 3, 500000, 5000000, '2020-12-10', 3),
('VD03', '3', 2, 5, 100000, 500000, '2020-12-03', 6),
('VD04', '4', 3, 4, 200000, 500000, '2020-12-01', 5),
('VD05', '5', 1, 1, 50000, 1000000, '2020-12-02', 5),
('VD06', '6', 2, 1, 50000, 1000000, '2020-12-02', 6),
('VD07', '7', 3, 2, 50000, 1000000, '2020-12-03', 5),
('VD08', '8', 4, 2, 50000, 1000000, '2020-12-03', 5);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD PRIMARY KEY (`idVD`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `shipper`
--
ALTER TABLE `shipper`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
