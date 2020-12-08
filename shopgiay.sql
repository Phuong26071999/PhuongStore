-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2020 lúc 03:13 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay`
--

CREATE TABLE `giay` (
  `magiay` varchar(5) NOT NULL,
  `tengiay` varchar(150) NOT NULL,
  `mota` varchar(150) NOT NULL,
  `gia` int(10) NOT NULL,
  `hinh` varchar(150) DEFAULT NULL,
  `maloai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giay`
--

INSERT INTO `giay` (`magiay`, `tengiay`, `mota`, `gia`, `hinh`, `maloai`) VALUES
('c01', 'Urbas Inversion', 'Phá cách bằng những phối màu đảo nghịch đầy độc đáo, tươi vui, Urbas \"Inversion\" là một pack giày đầy thú vị cho những ai muốn có thêm sắc màu cho cuộ', 510, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c02', 'Vintas Yesterday', 'Sử dụng đồng thời chất liệu da Nappa và vải Canvas, \"Yesterday\" gợi cho người nhìn một cảm giác vừa cổ điển, vừa tân thời. Nếu bạn bất giác cảm thấy b', 480, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c03', 'Basas Familiar', 'chưa có mô tả', 420, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c04', 'Basas Simple', 'chưa có mô tả', 370, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c05', 'Basas Special', 'chưa có mô tả', 370, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c06', 'Vintas Saigon', 'chưa có mô tả', 510, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c07', 'Urbas Lego', 'chưa có mô tả', 450, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c08', 'Urbas Pop-up', 'chưa có mô tả', 420, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('c09', 'Urbas Cloudy', 'chưa có mô tả', 420, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L01'),
('p01', 'Ananas-Hat', 'chưa có mô tả', 270, 'Anh-1.jpg', 'L03'),
('p02', 'Hunter-Hat', 'chưa có mô tả', 290, 'Anh-1.jpg', 'L03'),
('p03', 'Pink-Hat', 'chưa có mô tả', 200, 'Anh-1.jpg', 'L03'),
('p04', 'Crew-Socks B', 'chưa có mô tả', 90, 'Anh-1.jpg', 'L03'),
('p05', 'Crew-Socks W', 'chưa có mô tả', 90, 'Anh-1.jpg', 'L03'),
('p06', 'Hiphop Tee', 'Áo đỏ chứng tỏ YÊU EM(ANH)!!! Câu slogan bá cháy cùng với chiếc áo đỏ mà ai cũng cần phải có để có thể tìm được tình yêu đích t', 350, 'Anh-1.jpg', 'L03'),
('p07', 'Hiphop Graphic Tee', 'Tất cả chúng ta đều trở nên huyền bí khi khoát lên người màu của phái mạnh(đen). và chiếc Hiphop Graphic Tee sinh ra là để làm bạn ', 390, 'Anh-1.jpg', 'L03'),
('s01', 'Bitis Hunter X', 'Một sản phẩm giúp bạn chinh phục mọi địa hình êm ái ngay cả khi chân bạn đã quá mệt.', 699, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02'),
('s02', 'Bitis Hunter', 'chưa có mô tả', 500, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02'),
('s03', 'adidas pink', 'chưa có mô tả', 420, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02'),
('s04', 'HunterX While', 'chưa có mô tả', 699, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02'),
('s05', 'Hunter Green', 'chưa có mô tả', 500, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02'),
('s06', 'Hunter Blue', 'chưa có mô tả', 300, 'Anh-1.jpg,Anh-2.jpg,Anh-3.jpg,Anh-4.jpg', 'L02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(5) NOT NULL,
  `tenloai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('L01', 'classic'),
('L03', 'phụ kiện'),
('L02', 'sport');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`magiay`),
  ADD UNIQUE KEY `tengiay` (`tengiay`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD UNIQUE KEY `tenloai` (`tenloai`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giay`
--
ALTER TABLE `giay`
  ADD CONSTRAINT `giay_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
