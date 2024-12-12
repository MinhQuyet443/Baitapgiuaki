-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 06:01 AM
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
-- Database: `qlsv_hoangminhquyet`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(11) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `fullname`, `dob`, `gender`, `hometown`, `level`, `group`) VALUES
(2, 'Ngô Hoàng Hiệp', '2005-10-02', 1, 'Thanh Oai', 3, 6),
(3, 'Nguyễn Đình Đức Thịnh', '2005-10-04', 1, 'Thanh Hóa', 3, 6),
(4, 'Nguyễn Gia Bảo', '2005-10-03', 1, 'Bắc Giang', 3, 6),
(5, 'Trần Trường Giang', '2005-10-03', 1, 'Phúc Thọ', 3, 6),
(6, 'Bùi Viết Đạt', '2005-10-01', 1, 'Hà Đông', 3, 6),
(7, 'Vũ Đức Thắng', '2005-10-07', 1, 'Thái Bình', 3, 6),
(13, 'Nguyễn Văn A', '2003-02-01', 1, 'Hà Nội', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
