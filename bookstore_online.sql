-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th4 19, 2024 lúc 11:02 AM
-- Phiên bản máy phục vụ: 5.7.25
-- Phiên bản PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bookstore_online`
--
--
CREATE DATABASE `bookstore_online` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bookstore_online`;
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `IDNhaXuatBan` int(11) NOT NULL,
  `TenNhaXuatBan` varchar(64) DEFAULT NULL,
  `SoDT` varchar(11) DEFAULT NULL,
  `DiaChi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`IDNhaXuatBan`, `TenNhaXuatBan`, `SoDT`, `DiaChi`) VALUES
(1, 'NXB Kim Đồng', '02839390465', 'TP. Hồ Chí Minh'),
(2, 'NXB Trẻ', '02893316289', 'TP. Hồ Chí Minh'),
(3, 'NXB IPM', '0333193979', '110 Nguyễn Ngọc Nại, Hà Nội'),
(4, 'NXB Đồng Nai', '0933109009', 'TP. Biên Hoà, Đồng Nai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `IDSach` int(10) NOT NULL,
  `TenSach` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `NamXB` int(11) DEFAULT NULL,
  `KichThuoc` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SoTrang` int(11) DEFAULT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `IDTheLoai` int(20) NOT NULL,
  `IDTacGia` int(11) NOT NULL,
  `IDNhaXuatBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`IDSach`, `TenSach`, `MoTa`, `NamXB`, `KichThuoc`, `SoTrang`, `HinhAnh`, `DonGia`, `SoLuong`, `IDTheLoai`, `IDTacGia`, `IDNhaXuatBan`) VALUES
(1, 'Your Name', 'Truyện ngắn', 2016, '130 x 176', 288, '/assets/img/books/your-name.jpg', 60000, 100, 6, 4, 3),
(2, 'Naruto tập 72', 'Truyện ngắn', 2021, '117 x 176', 288, '/assets/img/books/naruto-vol-72.jpg', 22000, 100, 6, 12, 3),
(3, 'One Punch Man Tập 1', 'Truyện ngắn', 2018, '117 x 176', 184, '/assets/img/books/opm-1.jpg', 18000, 100, 6, 9, 1),
(4, 'One Punch Man Tập 9', 'Truyện ngắn', 2018, '117 x 176', 184, '/assets/img/books/opm-9.jpg', 18000, 100, 6, 9, 1),
(5, 'Death Note Tập 1', 'Truyện ngắn', 2020, '117 x 176', 184, '/assets/img/books/death-note-1.jpg', 35000, 100, 6, 11, 1),
(6, 'Chú Thuật Hồi Chiến Tập 0', 'Truyện ngắn', 2021, '117 x 176', 184, '/assets/img/books/chut-thuat-hoi-chien-0.jpg', 30000, 100, 6, 10, 1),
(7, 'Chú Thuật Hồi Chiến Tập 2', 'Truyện ngắn', 2021, '117 x 176', 184, '/assets/img/books/chu-thuat-hoi-chien-2.jpg', 30000, 100, 6, 10, 1),
(8, 'Doraemon dài - Tập 14: Nobita và ba chàng hiệp sĩ mộng mơ', 'Truyện dài', 2021, '130 x 190', 189, '/assets/img/books/doraemon-vol-14.jpg', 18000, 100, 6, 13, 1),
(9, 'Thám Tử Lừng Danh Conan - Tập 99', 'Truyện ngắn', 2022, '176 x 113', 184, '/assets/img/books/conan-tap-99.jpg', 20000, 100, 6, 1, 1),
(10, 'Chú Thuật Hồi Chiến Tập 1', 'Truyện ngắn', 2022, '117 x 176', 184, '/assets/img/books/chu-thuat-hoi-chien-tap-1.jpg', 30000, 100, 6, 10, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tacgia`
--

CREATE TABLE `tacgia` (
  `IDTacGia` int(11) NOT NULL,
  `TenTacGia` varchar(64) DEFAULT NULL,
  `GhiChu` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tacgia`
--

INSERT INTO `tacgia` (`IDTacGia`, `TenTacGia`, `GhiChu`) VALUES
(1, 'Aoyama Gosho', 'Tác giả Nhật Bản'),
(2, 'Nguyễn Nhật Ánh', 'Tác giả Việt Nam'),
(3, 'Author Conan Doyle', 'Tác giả Anh'),
(4, 'Shinkai Makoto', 'Tác giả Nhật'),
(5, 'Tite Kubo', 'Tác giả Nhật Bản'),
(6, 'Tô Hoài', 'Tác giả Việt Nam'),
(7, 'Eiichiro Oda', 'Tác giả Nhật Bản'),
(8, 'ONE', 'Tác giả Nhật Bản'),
(9, 'Murata', 'Tác giả Nhật Bản'),
(10, 'Gege Akutami', 'Tác giả Nhật Bản'),
(11, 'Obata', 'Tác giả Nhật Bản'),
(12, 'Masashi Kisimoto', 'Tác giả Nhật Bản'),
(13, 'Fujiko', 'Tác giả Nhật Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `IDTheLoai` int(20) NOT NULL,
  `TenTheLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`IDTheLoai`, `TenTheLoai`) VALUES
(1, 'Chính trị – Pháp luật'),
(2, 'Khoa học công nghệ – Kinh tế'),
(3, 'Văn học nghệ thuật'),
(4, 'Văn hóa xã hội – Lịch sử'),
(5, 'Sách thiếu nhi'),
(6, 'Truyện - Tiểu thuyết'),
(7, 'Tâm lý - Kỹ năng sống ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `MaNguoiDung` int(10) NOT NULL,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Nguyễn Văn Hùng', 'nvhung', 'e10adc3949ba59abbe56e057f20f883e 	', 1, 0),
(3, 'Nguyễn Thị D', 'ntd', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
(4, 'Trần Văn C', 'tvc123456', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vouchers`
--

CREATE TABLE `vouchers` (
  `VoucherID` int(11) NOT NULL,
  `VoucherName` varchar(255) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  `StartTime` datetime(3) DEFAULT NULL,
  `EndTime` datetime(3) DEFAULT NULL,
  `UsedStatus` tinyint(4) DEFAULT NULL,
  `Username` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`IdSach`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`IDTheLoai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `IdSach` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `IDTheLoai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
