-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 03:14 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excoaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addID` int(2) NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addID`, `address`) VALUES
(1, '285 Đội Cấn, Liễu Giai, Ba Đình, Hanoi'),
(2, '54 Lê Thanh Nghị, Bách Khoa, Hai Bà Trưng, Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '96549e1e8ed56cbc3488058e98a5c3bc');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(2) NOT NULL,
  `catName` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`) VALUES
(1, 'Art'),
(2, 'Commerce'),
(3, 'Language'),
(4, 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cID` int(2) NOT NULL,
  `catID` int(2) NOT NULL,
  `cName` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `tID` int(2) NOT NULL,
  `price` int(7) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(2) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cID`, `catID`, `cName`, `tID`, `price`, `description`, `duration`, `status`) VALUES
(1, 1, '3D Art', 3, 9900000, '<p>Any information here</p>', 5, b'1'),
(2, 1, 'Animation', 3, 15000000, '<p>Whatever here</p>\r\n', 1, b'1'),
(3, 3, 'English', 1, 8000000, '<h1>Thông tin khóa học</h1>\r\n<p>Khóa học tiếng Anh của chúng tôi sẽ giúp các bạn có thể dễ dàng tiếp cận với người nước ngoài hơn trong các cuộc đối thoại!</p>', 3, b'1'),
(4, 4, 'Cost Accountant', 2, 20000000, '', 2, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `response` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `subject`, `body`, `response`) VALUES
(1, 'binh.truongvu97@outlook.com', 'Phản hồi đầu tiên', 'Hi, Đây là phản hồi đầu tiên của trung tâm!', b'1'),
(2, 'binh.truongvu97@outlook.com', 'Phản hồi thứ hai', 'Hi, Đây là phản hồi thứ hai', b'1'),
(3, 'binh.truongvu97@gmail.com', 'Phản hồi thứ ba', 'Hi,\r\nĐây là phản hồi thứ ba để kiểm tra chức năng~', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(4) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `cID` int(2) NOT NULL,
  `stdAddress` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `addID` int(2) NOT NULL,
  `ref` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `regDate` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `cID`, `stdAddress`, `addID`, `ref`, `regDate`, `date`) VALUES
(1, 'Trương Vũ Bình', 'binh.truongvu97@gmail.com', 3, 'P401-B2 số 189 Thanh Nhàn', 1, 'Facebook', '2021-03-17', '2021-03-27');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tID` int(2) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profession` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tID`, `name`, `profession`, `photo`, `description`) VALUES
(1, 'Trương Vũ Bình', 'PHP, HTML', '1615645051_81783070_p0.jpg', '<p>Experience</p>\\r\\n'),
(2, 'Dang Tran Long', 'HTML, PHP, CSS, Python', 'Epyx6SbUUAE01Ft.jpg', 'Giao vien B'),
(3, 'Dao Ngoc Quan', 'HTML, CSS', 'EqoXy3dVEAEeBkc.jpg', 'Giang vien C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cID`),
  ADD KEY `category` (`catID`),
  ADD KEY `teacher` (`tID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course` (`cID`),
  ADD KEY `address` (`addID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `category` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`),
  ADD CONSTRAINT `teacher` FOREIGN KEY (`tID`) REFERENCES `teacher` (`tID`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `address` FOREIGN KEY (`addID`) REFERENCES `address` (`addID`),
  ADD CONSTRAINT `course` FOREIGN KEY (`cID`) REFERENCES `course` (`cID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
