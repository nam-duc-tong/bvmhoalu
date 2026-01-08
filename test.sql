-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2026 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `id_dv` int(10) NOT NULL,
  `tendichvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id_dv`, `tendichvu`) VALUES
(1, 'Phẫu thuật Phaco'),
(2, 'Phẫu Thuật Mộng'),
(3, 'Phẫu Thuật Quặm'),
(4, 'Phẫu Thuật Thẩm Mỹ');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `Tenkhachhang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_kh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `Tenkhachhang`, `nghenghiep`, `noidung`, `img_kh`) VALUES
(1, 'Nguyễn Văn A', 'Giáo Viên', '“Sau điều trị, thị lực của tôi cải thiện rõ rệt. Cảm ơn đội ngũ bác sĩ rất tận tâm.”', 'kh1.jpg'),
(2, 'Lê Thị B', 'Công Nhân', '“Tôi thật sự yên tâm khi khám và điều trị tại Bệnh Viện Mắt Hoa Lư.”', 'kh2.jpg'),
(3, 'Tống Thị C', 'Kế Toán', '“Từ ngày mổ mắt xong, cuộc sống của tôi thay đổi tích cực hơn rất nhiều.”', 'kh3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id_nv` int(10) NOT NULL,
  `tennhanvien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_nv` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id_nv`, `tennhanvien`, `chucvu`, `gioitinh`, `img_nv`) VALUES
(1, 'Trần Bá Kiền', 'Bác Sĩ Chuyên Khoa II', 'Nam', 'Bác Kiền.jpg'),
(2, 'Nguyễn Thị Thùy Tiên', 'Bác Sĩ Chuyên Khoa', 'Nữ', 'Bác Tiên.jpg'),
(3, 'Nguyễn Văn Thanh', 'Giám đốc/ Bác sĩ chuyên môn', 'Nam', 'Bác Thanh.jpg'),
(4, 'Phạm Xuân Đông', 'Bác Sĩ Chuyên Khoa', 'Nam', 'Bác Đông.jpg'),
(5, 'Trịnh Thế Sơn', 'Bác Sĩ Chuyên Khoa', 'Nam', 'Bác Sơn.jpg'),
(6, 'Đào Sơn Hùng', 'Bác Sĩ Chuyên Khoa', 'Nam', 'Bác Hùng.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `noidung`
--

CREATE TABLE `noidung` (
  `id_nd` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'nam', 'nam123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id_dv`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id_nv`);

--
-- Indexes for table `noidung`
--
ALTER TABLE `noidung`
  ADD PRIMARY KEY (`id_nd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id_dv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id_nv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noidung`
--
ALTER TABLE `noidung`
  MODIFY `id_nd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
