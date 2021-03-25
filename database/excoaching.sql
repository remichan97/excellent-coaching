-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 06:38 AM
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
(1, 'Lập trình ứng dụng'),
(2, 'Lập trình Web'),
(3, 'Cơ sở dữ liệu'),
(4, 'Lập trình căn bản');

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
(1, 3, 'Hệ Quản trị Cơ Sở Dữ Liệu SQL Server 2014', 1, 2000000, '<p style=\"margin-right:5px\"><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Kh&oacute;a học cung cấp cho học vi&ecirc;n kiến thức v&agrave; kỹ năng cần thiết để c&oacute; thể l&agrave;m việc với &nbsp;Hệ quản trị CSDL&nbsp;<strong>SQL Server 2014</strong></span></span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Trang bị cho học vi&ecirc;n những kiến thức nền tảng vững chắc về hệ quản trị &nbsp;CSDL SQL Server 2014 như c&aacute;c kỹ thuật viết truy vấn r&uacute;t tr&iacute;ch dữ liệu, cập nhật dữ liệu bằng ng&ocirc;n ngữ truy vấn SQL từ căn bản đến n&acirc;ng cao, c&aacute;c vấn đề về quản trị như tạo người d&ugrave;ng v&agrave; ph&acirc;n quyền sử dụng, từ điển dữ liệu.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#151414\">BẠN SẼ NHẬN ĐƯỢC G&Igrave; QUA KH&Oacute;A HỌC?</span></strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Biết tạo lập cơ sở dữ liệu quan hệ (CSDL), tạo c&aacute;c đối tượng trong cơ sở dữ liệu như: c&aacute;c schema, c&aacute;c bảng (table), c&aacute;c r&agrave;ng buộc to&agrave;n vẹn (constraint), c&aacute;c bảng ảo (view), kiểu dữ liệu do người d&ugrave;ng định nghĩa&hellip;</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Viết c&aacute;c c&acirc;u truy vấn c&oacute; chọn lọc, c&oacute; nh&oacute;m, c&oacute; thống k&ecirc; dữ liệu v&agrave; c&aacute;c c&acirc;u truy vấn n&acirc;ng cao</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Viết c&aacute;c c&acirc;u lệnh cập nhật dữ liệu tr&ecirc;n bảng như th&ecirc;m, sửa v&agrave; x&oacute;a</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Biết tạo ra c&aacute;c người d&ugrave;ng v&agrave; ph&acirc;n quyền sử dụng dữ liệu cho c&aacute;c người d&ugrave;ng n&agrave;y</span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#151414\">BẠN SẼ HỌC NHỮNG G&Igrave;?</span></strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Microsoft SQL Server 2014&nbsp;</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Tạo lập dữ liệu - DDL (data definition language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Cơ sở dữ liệu (database)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Bảng (table)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Schema</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Import v&agrave; Export dữ liệu</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">C&aacute;c r&agrave;ng buộc to&agrave;n vẹn dữ liệu (constraint)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Ph&acirc;n loại r&agrave;ng buộc to&agrave;n vẹn dữ liệu</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Tạo c&aacute;c r&agrave;ng buộc to&agrave;n vẹn dữ liệu</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">M&ocirc; h&igrave;nh quan hệ dữ liệu (Diagram)</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn dữ liệu - SQL (structured query language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Ng&ocirc;n ngữ SQL</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn đơn giản SELECT FROM</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">C&aacute;c h&agrave;m thường d&ugrave;ng</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Lọc v&agrave; sắp xếp dữ liệu</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn tr&ecirc;n nhiều bảng</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng biểu thức điều kiện</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn c&oacute; nh&oacute;m</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn con (sub query)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">T&iacute;ch hợp kết quả truy vấn</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Bảng ảo (View)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Tạo bảng ảo, cập nhật, x&oacute;a bảng ảo</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Cập nhật dữ liệt tr&ecirc;n bảng ảo</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Cập nhật dữ liệu - DML (data manipulation language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Th&ecirc;m d&ograve;ng (insert), X&oacute;a d&ograve;ng (delete v&agrave; truncate table)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Sửa d&ograve;ng (update), Trộn d&ograve;ng (merge)</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn n&acirc;ng cao</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn con ở mức n&acirc;ng cao</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn kết hợp (correlative sub query)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Truy vấn c&oacute; sử dụng CTE (common table expressions)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng mệnh đề APPL</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">L&agrave;m việc với kiểu dữ liệu phức tạp</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Kiểu TABLE do người d&ugrave;ng định nghĩa</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Kiểu FILESTREAM, Kiểu FILETABLES</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Kiểu DATETIME2, Kiểu HIERARCHYID</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Kiểu dữ liệu nhị ph&acirc;n</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Quản trị đơn giản &ndash; DCL (data control language)</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Từ điển dữ liệu (data dictionary)</span></span></p>\r\n	</li>\r\n</ul>\r\n', 1, b'1'),
(2, 2, 'Lập trình Web HTML5, CSS3, JQuery, Bootstrap', 1, 2000000, '<p style=\"margin-right:5px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Kh&oacute;a học cung cấp cho học vi&ecirc;n l&agrave; những bạn bắt đầu t&igrave;m hiểu về lập tr&igrave;nh web muốn c&oacute; đủ kiến thức v&agrave; kỹ năng để c&oacute; thể thực hiện c&aacute;c website tĩnh</span></span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Trang bị những kiến thức nền tảng vững chắc về lập tr&igrave;nh Web bắt đầu từ&nbsp;<strong>HTML đến HTML5, từ CSS đến CSS3 v&agrave; từ Javascript đến jQuery,</strong>&nbsp;để c&oacute; thể nh&uacute;ng c&aacute;c xử l&yacute; v&agrave;o c&aacute;c trang HTML, lập tr&igrave;nh Web ở mức client-side</span></span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">&Aacute;p dụng&nbsp;<strong>Bootstrap framework</strong>&nbsp;thiết kế&nbsp;website hiện đại, đẹp mắt, c&oacute; khả năng tương t&aacute;c cao, tương th&iacute;ch với mọi tr&igrave;nh duyệt v&agrave; hiển thị tr&ecirc;n mọi thiết bị</span></span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Cung cấp nguồn kiến thức nền tảng về thiết kế website tĩnh để HV tự tin tham gia c&aacute;c kh&oacute;a học về x&acirc;y dựng web động như PHP, Asp.Net v&agrave; Web Java, Web Python</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#000000\">BẠN SẼ NHẬN ĐƯỢC G&Igrave; QUA KH&Oacute;A HỌC?</span></strong></span></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng th&agrave;nh thạo c&aacute;c tag HTML để x&acirc;y dựng trang Web</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Truy cập v&agrave; thiết lập thuộc t&iacute;nh c&aacute;c đối tượng trong m&ocirc; h&igrave;nh đối tượng của trang HTML, l&agrave;m chủ c&aacute;c đối tượng v&agrave; điều khiển trang Web theo &yacute; muốn</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Đặc biệt, HV sẽ x&acirc;y dựng được website tĩnh theo nhiều phong c&aacute;ch kh&aacute;c nhau v&iacute; dụ như&nbsp;</span><strong><span style=\"color:#000000\">One page,&nbsp;Portifolio,&nbsp;Galary</span></strong><span style=\"color:#000000\">&nbsp;với giao diện chuy&ecirc;n nghiệp, c&oacute; c&aacute;c xử l&yacute; v&agrave; c&aacute;c h&igrave;nh ảnh sống động, hiện đại</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng th&agrave;nh thạo jQuery để tạo web page chuy&ecirc;n nghiệp</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Sử dụng&nbsp;th&agrave;nh thạo Bootstrap&nbsp;để tạo web page responsive</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng trang web từ template file ảnh</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng ho&agrave;n chỉnh web page thực tế từ template html</span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\"><strong>BẠN SẼ HỌC NHỮNG G&Igrave;?</strong></span></span></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">T&igrave;m hiểu về c&aacute;c m&ocirc;i trường tạo trang web tĩnh: Dreamweaver, Notepad++, Aptana Studio 3.0 ...</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Tạo trang web với ng&ocirc;n ngữ HTML</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng c&aacute;c thẻ HTML cơ bản: head, body, Heading, div, paragraph, link, image, &hellip; để tạo web layout ban đầu</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Tạo trang web với ng&ocirc;n ngữ HTML5</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">New Elements, HTML5 Canvas, SVG, Google Maps, Multimedia, Video, Audio, Plug-ins, YouTube, Geolocation, Drag and Drop, Server-Sent Events</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Ho&agrave;n chỉnh giao diện trang web với CSS</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Giới thiệu CSS v&agrave; c&aacute;c loại CSS</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Tạo v&agrave; sử dụng CSS cơ bản v&agrave; phức tạp: ID Selector, Class Selector, nh&oacute;m, nh&oacute;m lồng nhau, lớp giả&hellip;</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">T&ugrave;y biến giao diện web với CSS3</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Rounded Corners, Border Images, Backgrounds, Colors, Gradients, Shadow Effects, Text, Web Fonts, 2D Transforms, 3D Transforms, Transitions, Animations, Images&hellip;</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Xử l&yacute; trang web với ng&ocirc;n ngữ Javascript</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Tham chiếu c&aacute;c element trong DOM</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng c&aacute;c sự kiện trong DOM để viết c&aacute;c xử l&yacute; tr&ecirc;n trang web khi người d&ugrave;ng tương t&aacute;c</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Tạo giao diện chuy&ecirc;n nghiệp bằng jQuery</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng c&aacute;c Effects trong jquery để tạo c&aacute;c hiệu ứng đẹp mắt v&agrave; chuy&ecirc;n nghiệp cho web</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">C&agrave;i đặt v&agrave; sử dụng Bootstrap framework</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">C&agrave;i đặt Bootstrap, c&aacute;c IDE hỗ trợ Bootstrap</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng Bootstrap CSS</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Bootstrap Component</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">JavaScript trong Bootstrap</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng trang HTML/CSS từ PSD</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Sử dụng photoshop cắt file PSD v&agrave; viết code xử l&yacute; HTML/CSS page</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng website từ template html c&oacute; sẵn</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">T&igrave;m hiểu template gốc</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Ph&acirc;n t&iacute;ch website y&ecirc;u cầu</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Hiệu chỉnh template gốc th&agrave;nh website theo y&ecirc;u cầu</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Ho&agrave;n chỉnh website</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', 1, b'1'),
(3, 2, 'Lập trình Web mã nguồn mở PHP', 1, 6800000, '<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Cung cấp cho học vi&ecirc;n những kiến thức v&agrave;&nbsp; kỹ năng cần thiết về lập tr&igrave;nh Web m&atilde; nguồn mở PHP theo phi&ecirc;n bản mới nhất</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Trang bị cho học vi&ecirc;n những kinh nghiệm để x&acirc;y dựng website ho&agrave;n chỉnh cho doanh nghiệp với mục đ&iacute;ch giới thiệu sản phẩm, thương mại điện tử, tin tức&hellip; với giao diện web th&acirc;n thiện, hiện đại, c&oacute; thể tương th&iacute;ch với mọi tr&igrave;nh duyệt v&agrave; hiển thị tr&ecirc;n mọi thiết bị (responsive), dễ d&agrave;ng được cập nhật th&ocirc;ng qua hệ thống quản trị bảo mật.</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Gi&uacute;p HV hiểu r&otilde; v&agrave; ph&aacute;t triển ứng dụng web ho&agrave;n chỉnh tr&ecirc;n Laravel Framework, một trong những Framework gi&uacute;p ph&aacute;t triển ứng dụng web một c&aacute;ch nhanh ch&oacute;ng v&agrave; linh động</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Gi&uacute;p học vi&ecirc;n l&agrave;m quen với m&ocirc;i trường l&agrave;m việc tại c&aacute;c c&ocirc;ng ty phần mềm.</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Ch&uacute; trọng r&egrave;n luyện tư duy v&agrave; phong c&aacute;ch lập tr&igrave;nh</span></p>\r\n\r\n<p style=\"margin-right:5px\">&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong>BẠN SẼ NHẬN ĐƯỢC G&Igrave; QUA KH&Oacute;A HỌC?</strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Nắm vững kiến thức lập tr&igrave;nh PHP nền tảng, sử dụng th&agrave;nh thạo c&aacute;c kiểu dữ liệu, to&aacute;n tử, cấu tr&uacute;c điều khiển, h&agrave;m, OOP, PDO&hellip; để giải quyết c&aacute;c b&agrave;i to&aacute;n thực tế.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">L&agrave;m việc với c&aacute;c kiểu dữ liệu lưu trữ kh&aacute;c nhau như JSON, XML, CSDL MySQL&hellip;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Triển khai ứng dụng web theo m&ocirc; h&igrave;nh MVC</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Nắm vững c&aacute;c th&agrave;nh phần cơ bản trong lập tr&igrave;nh web PHP với Laravel framework, linh động &aacute;p dụng c&aacute;c c&ocirc;ng nghệ v&agrave; kỹ thuật Session, Cookie, Shopping Cart, File Upload, Ajax, CKEditor, đa ng&ocirc;n ngữ, Chart&hellip;</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Ph&aacute;t triển ứng dụng web bằng Laravel Framework</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng v&agrave; triển khai c&aacute;c Web Service bằng NUSOAP, Laravel API</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng ho&agrave;n chỉnh c&aacute;c website theo ti&ecirc;u ch&iacute; Mobile First với Bootstrap</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong>BẠN SẼ HỌC NHỮNG G&Igrave;?</strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 1: PHP7 - C&ocirc;ng nghệ v&agrave; Kỹ thuật 1</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng giao diện với Bootstrap 4</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Form v&agrave; c&aacute;c điều khiển cơ sở</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">C&aacute;c kiểu dữ liệu cơ sở, biến, hằng, to&aacute;n tử, chuỗi, cấu tr&uacute;c điều khiển</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng v&agrave; sử dụng h&agrave;m của PHP, xử l&yacute; lỗi</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Session v&agrave; Cookie</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Tập tin v&agrave; c&aacute;c h&agrave;m xử l&yacute;&nbsp;(*.txt, *.xml, *.json)</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Mảng v&agrave; c&aacute;c h&agrave;m xử l&yacute;</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Cơ sở dữ liệu MySQL</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Truy vấn dữ liệu MySQL</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 2: PHP7 - C&ocirc;ng nghệ v&agrave; Kỹ thuật 2</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Lập tr&igrave;nh hướng đối tượng</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Strict Mode v&agrave; Coercive Mode PHP7</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">PHP Data Objects (PDO)</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">M&ocirc; h&igrave;nh MVC trong PHP</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Triển khai m&ocirc; h&igrave;nh MVC cho ứng dụng: Model &ndash; View &ndash; Controller</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng Dịch vụ (NUSOAP, c&aacute;c dịch vụ tiện &iacute;ch kh&aacute;c ...)</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Ho&agrave;n chỉnh Ứng dụng, public l&ecirc;n host</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\"><strong><em>Đồ &aacute;n thực tế 1</em></strong></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 3: Laravel Framework &ndash; C&ocirc;ng nghệ v&agrave; Kỹ thuật 1</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Tổng quan về Laravel</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">L&agrave;m việc với Route v&agrave; Middleware</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Controller</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Request, Response</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">View</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Blade Template</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; cơ sở dữ liệu trong Laravel Framework</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Forms v&agrave; Validation</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">File Uploading</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 4: Laravel Framework &ndash; C&ocirc;ng nghệ v&agrave; Kỹ thuật 2</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Session v&agrave; Cookie</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Ajax</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sending Email</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">CKEditor trong Laravel Framework</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Thống k&ecirc; dữ liệu với Chart</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng website đa ng&ocirc;n ngữ</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">CSRF Protection, Authentication</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng API</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Upload website l&ecirc;n host</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\"><strong><em>Đồ &aacute;n thực tế 2</em></strong></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Đồ &aacute;n Tốt nghiệp:&nbsp;</strong>Gi&aacute;o vi&ecirc;n hướng dẫn Học vi&ecirc;n l&agrave;m Đồ &aacute;n của m&igrave;nh hoặc chọn một trong c&aacute;c đề t&agrave;i sau:</span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; đặt m&oacute;n online ở nh&agrave; h&agrave;ng</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; kinh doanh, theo d&otilde;i giao &ndash; nhận ở cửa h&agrave;ng thức ăn nhanh/ sinh tố, tr&agrave; sữa</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Shop online: quần &aacute;o thời trang/ gi&agrave;y thể thao/ đồ c&ocirc;ng nghệ/ đồ đi phượt/ thời trang trẻ em</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Shop online cửa h&agrave;ng đồ chơi trẻ em</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Shop online cửa h&agrave;ng b&aacute;nh ngọt</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; cửa h&agrave;ng b&aacute;n ngoại tệ, v&agrave;ng bạc đ&aacute; qu&yacute;</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Thư viện s&aacute;ch online</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; đặt lịch tập với PT, chăm s&oacute;c (theo d&otilde;i qu&aacute; tr&igrave;nh tập luyện, nhắc nhở, gửi bản tin&hellip;) cho kh&aacute;ch h&agrave;ng ở c&acirc;u lạc bộ gym.</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">C&aacute;c b&agrave;i to&aacute;n trong quản l&yacute; trường học: Quản l&yacute; chuy&ecirc;n cần, quản l&yacute; gi&aacute;o vụ, xếp thời kh&oacute;a biểu,&hellip;</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; v&agrave; b&aacute;n v&eacute; sự kiện online</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; chăm s&oacute;c kh&aacute;ch h&agrave;ng ở ph&ograve;ng kh&aacute;m, bệnh viện (quản l&yacute; lịch hẹn t&aacute;i kh&aacute;m, gửi mail/sms nhắc kh&aacute;ch h&agrave;ng ng&agrave;y/giờ kh&aacute;m bệnh...)&nbsp;</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', 3, b'1'),
(4, 2, 'Lập trình Javascript', 1, 6800000, '<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Gi&uacute;p Học vi&ecirc;n nắm vững c&aacute;c kiến thức v&agrave; kỹ năng cần thiết về lập tr&igrave;nh web fullstack&nbsp;với Javascript, tự tin x&acirc;y dựng v&agrave; triển khai được c&aacute;c ứng dụng Web thực tế theo c&ocirc;ng nghệ JSON.</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Trang bị cho học vi&ecirc;n những kỹ thuật chuy&ecirc;n s&acirc;u v&agrave; kinh nghiệm thực tế tr&ecirc;n Bootstrap, JavaScript, NodeJS&hellip;</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Hướng dẫn c&aacute;ch thiết kế giao diện web th&acirc;n thiện, hiện đại, c&oacute; thể tương th&iacute;ch với mọi tr&igrave;nh duyệt v&agrave; hiển thị tr&ecirc;n mọi thiết bị - Mobile First</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Ch&uacute; trọng r&egrave;n luyện phong c&aacute;ch lập tr&igrave;nh, ph&aacute;t triển kỹ năng tổ chức v&agrave; x&acirc;y dựng ứng dụng Web đ&uacute;ng chuẩn.</span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\">Đồ &aacute;n ho&agrave;n chỉnh cuối kh&oacute;a gi&uacute;p học vi&ecirc;n tự tin ứng tuyển v&agrave; ph&aacute;t triển nghề nghiệp tại c&aacute;c c&ocirc;ng ty phần mềm ở vị tr&iacute; Lập tr&igrave;nh vi&ecirc;n JavaScript</span></p>\r\n\r\n<p style=\"margin-right:5px\">&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong>BẠN SẼ NHẬN ĐƯỢC G&Igrave; QUA KH&Oacute;A HỌC?</strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng Bootstrap thiết kế website c&oacute; khả năng tương t&aacute;c cao, tương th&iacute;ch với mọi tr&igrave;nh duyệt v&agrave; hiển thị tr&ecirc;n mọi thiết bị</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng v&agrave; triển khai c&aacute;c ứng dụng Web theo ti&ecirc;u ch&iacute; Mobile First sử dụng JavaScript kết hợp với NodeJS, MongoDB, JSON c&ugrave;ng c&aacute;c c&ocirc;ng nghệ giao diện hiện đại.</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Kết hợp JavaScript với Google Map, Form PDF, Graph, dịch vụ Send Email, SMS, Facebook, Youtube, CKEDITOR &hellip; tạo ra những sản phẩm c&oacute; t&iacute;nh ứng dụng cao</span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\">Đồng bộ ho&aacute; ứng dụng, triển khai đa dịch vụ tr&ecirc;n Internet&nbsp;</span></p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong>BẠN SẼ HỌC NHỮNG G&Igrave;?</strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 1: JavaScript cơ bản</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Tổng quan về JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Biến cơ sở: biến chuỗi, biến số, biến logic, biến ng&agrave;y</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Biến đối tượng</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Biến danh s&aacute;ch</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng c&aacute;c phương thức</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng c&aacute;c ứng dụng hệ kh&aacute;ch (Client): HTML, CSS, sử dụng Bootstrap</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng ứng dụng dịch vụ (Service): Node.JS</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng đối tượng HTTP để trao đổi giữa hệ kh&aacute;ch v&agrave; dịch vụ</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 2: JavaScript &ndash; C&ocirc;ng nghệ v&agrave; kỹ thuật Cơ bản</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Thiết kế giao diện với Bootstrap</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng Google Map với JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng Form PDF với JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Sử dụng Graph/Chart trong JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Lập tr&igrave;nh bất đồng bộ</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng dịch vụ dữ liệu với CSDL MongoDB</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Server: D&ugrave;ng Node.JS truy xuất dữ liệu từ Mongo DB</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Client: Sử dụng IndexedBD</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 3: JavaScript &ndash; C&ocirc;ng nghệ v&agrave; kỹ thuật N&acirc;ng cao</strong></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng dịch vụ Send Mail với JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">X&acirc;y dựng dịch vụ SMS với JavaScript</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">JavaScript v&agrave; Facebook</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">JavaScript v&agrave; Youtube</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Nh&uacute;ng Tr&igrave;nh soan thảo CKEDITOR 4, INLINE v&agrave;o Ứng dụng</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Đồng bộ h&oacute;a ứng dụng với Server Send Event (SSE) v&agrave; Web Service Worker</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"font-family:Calibri,sans-serif\">Đa dịch vụ tr&ecirc;n Internet</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"font-family:Calibri,sans-serif\"><strong>Đồ &aacute;n Tốt nghiệp</strong></span></p>\r\n	</li>\r\n</ul>\r\n', 2, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `feedbackDate` date NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `response` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(1, 'Đặng Trần Long', 'PHP, Java, Python, HTML5, CSS3, SQL', '1616643760_1543463051_longdt_240.png', '<h2>Kinh nghiệm</h2>\r\n\r\n<ul>\r\n	<li>Giảng vi&ecirc;n trường Đại học FPT</li>\r\n	<li>Giảng vi&ecirc;n trường Cao đẳng thực h&agrave;nh FPT (FPoly)</li>\r\n	<li>Java developer tại Tri Thức Mới</li>\r\n	<li>Giảng vi&ecirc;n dạy c&aacute;c m&ocirc;n Java, Python tại c&aacute;c trung t&acirc;m STEM</li>\r\n</ul>\r\n\r\n<h2>Th&agrave;nh t&iacute;ch</h2>\r\n\r\n<ul>\r\n	<li>Đ&agrave;o tạo nhiều học vi&ecirc;n trẻ đạt giải cao tại&nbsp;c&aacute;c cu&ocirc;c thi&nbsp; m&atilde; nguồn mở PHP quốc tế Google Code-in do Google tổ chức</li>\r\n	<li>1 sinh vi&ecirc;n đạt giải nh&igrave; v&agrave; một sinh vi&ecirc;n đạt giải ba tại hội thi nghề C&ocirc;ng nghệ th&ocirc;ng tin th&agrave;nh&nbsp;phố năm 2012</li>\r\n</ul>\r\n\r\n<h2>C&aacute;c dự &aacute;n ti&ecirc;u biểu</h2>\r\n\r\n<ul>\r\n	<li>dungre.vn: Website đăng tin</li>\r\n	<li>bengalcattery.com: Website giới thiệu c&aacute;c giống m&egrave;o Bengal</li>\r\n	<li>fogliancoffee.com: Website về đồ uống của Foglian</li>\r\n</ul>\r\n'),
(2, 'Trương Khắc Nguyên', 'ASP.NET, Windows Form, WCF, MVC, MVP, HTML & CSS, LINQ, Cloud Computing,…', '1616649411_img_1769.png', '<p><strong>Bằng cấp:</strong>&nbsp;Cử nh&acirc;n CNTT</p>\r\n\r\n<p><strong>Kinh nghiệm giảng dạy:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Kinh nghiệm 6 năm lập tr&igrave;nh, điều phối hoạt động phần mềm cho nh&agrave; m&aacute;y, trường học, c&ocirc;ng ty vận tải t&agrave;u biển. Tham gia c&aacute;c dự &aacute;n tự do: game, web v&agrave; ứng dụng như si&ecirc;u thị, điện thoại, tr&ograve; chơi&hellip;</li>\r\n	<li>Tham gia c&aacute;c dự &aacute;n tự do: game, web v&agrave; ứng dụng như si&ecirc;u thị, điện thoại.</li>\r\n	<li>Giảng vi&ecirc;n trung t&acirc;m đ&agrave;o tạo lập tr&igrave;nh vi&ecirc;n Aptech từ&nbsp;2008 đến nay</li>\r\n	<li>Giảng vi&ecirc;n .NET, giảng dạy c&aacute;c m&ocirc;n: ASP.NET, Windows Form, WCF, MVC, MVP, HTML &amp; CSS, LINQ, Cloud Computing,&hellip; tại Aptech</li>\r\n</ul>\r\n\r\n<p><strong>C&acirc;u n&oacute;i:</strong>&nbsp;</p>\r\n\r\n<p>Học lập tr&igrave;nh kh&ocirc;ng c&oacute; giỏi hay dở, m&agrave; chỉ c&oacute; đ&uacute;ng hay sai. V&agrave; kh&ocirc;ng c&oacute; một chương tr&igrave;nh n&agrave;o l&agrave; ho&agrave;n hảo trong mắt mọi người, n&ecirc;n cứ sai đi rồi học c&aacute;ch l&agrave;m tốt hơn.</p>\r\n');

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
  MODIFY `catID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
