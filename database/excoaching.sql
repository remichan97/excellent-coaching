-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 09:04 AM
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
(1, 'Application Development'),
(2, 'Web Development'),
(3, 'Database'),
(4, 'Programming for beginner');

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
(1, 3, 'Database Management with SQL Server 2019', 1, 2000000, '<p style=\"margin-right:5px\"><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">This course provide students with the basics and advanced skill of&nbsp;<strong>SQL Server 2019</strong></span></span></p>\r\n\r\n<p style=\"margin-right:5px\"><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Provide Students with the abilities to utilise&nbsp;SQL Server 2019&nbsp;such as&nbsp;database queries,data filter,database design and normalisatiion, as well as advanced skills such as user managements and permissions.</span></span></p>\r\n\r\n<p style=\"margin-right:5px\">&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#151414\">WHAT YOU&#39;LL GAIN FROM THIS COURSE?</span></strong></span></h2>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Abilities to create&nbsp;databases, as well as its objects: schemas, tables, constraints, views, user defined data types&hellip;</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp; &nbsp; Able to perform basic and advanced data queries</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Able to write update queries</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;&nbsp;&nbsp; Able to create, manage, and assign permission to users</span></span></p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#151414\">WHAT YOU&#39;LL LEARN?</span></strong></span></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Microsoft SQL Server 2019</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Data creation - DDL (data definition language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Database</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Table</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Schema</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Import and&nbsp;Export</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Constraint</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Types of Constraint</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Create constraint</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Databse Diagram</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Data Queries - SQL (structured query language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">SQL Language</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Basic queries with SELECT FROM</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Common Functions</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Filter and data orders</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Multi-table queries</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Conditional queries</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414; font-family:Calibri,sans-serif\">Grouped queries</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414; font-family:Calibri,sans-serif\">Sub-query</span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414; font-family:Calibri,sans-serif\">Query Results</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">View</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Create, update and delete views</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">UPdate data on views</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Data Updating - DML (data manipulation language)</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Insert, Delete and Truncate Table</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414; font-family:Calibri,sans-serif\">UPdate and Merge</span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Advanced</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Advanced sub-queries</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Correlative sub query</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Queries using CTE (common table expressions)</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">APPL Clause</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Working with complex data type</span></span></p>\r\n\r\n	<ul style=\"list-style-type:circle\">\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">User-defined Table</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">KFILESTREAM, FILETABLES</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">DATETIME2, HIERARCHYID</span></span></p>\r\n		</li>\r\n		<li>\r\n		<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Binaries</span></span></p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">Simple data managements&nbsp;&ndash; DCL (data control language)</span></span></p>\r\n	</li>\r\n	<li>\r\n	<p><span style=\"color:#151414\"><span style=\"font-family:Calibri,sans-serif\">&nbsp;Data dictionary</span></span></p>\r\n	</li>\r\n</ul>\r\n', 1, b'1'),
(2, 2, 'Static Web Development with HTML5, CSS3, JQuery, Bootstrap', 1, 2000000, '<p style=\"margin-right:5px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">This course provide students with adequate skills to create static web pages</span></span></p> <p style=\"margin-right:5px\"><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Provide basic fundamental, starting from <strong>HTML to HTML5, from CSS to CSS3 and from Javascript to jQuery,</strong> so students can work with client-side web pages </span></span></p> <p style=\"margin-right:5px\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"color:#000000\">Using <strong>Bootstrap framework</strong> to create professional, and functional websites that are compatible with most modern web browsers and devices.</span></span></p> <p style=\"margin-right:5px\"><span style=\"color:#000000; font-family:Calibri,sans-serif\">Provide fundamental for student to pursue further advanced web development such as Python web, Java web,...</span></p> <p><span style=\"font-family:Calibri,sans-serif\"><strong><span style=\"color:#000000\">WHAT YOU&#39;LL GAIN FROM THIS COURSE?</span></strong></span></p> <ul style=\"list-style-type:square\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using HTML tags to create web pages</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Access and master HTML elements to create desired web page layout</span></span></p> </li> <li> <p><span style=\"color:#000000; font-family:Calibri,sans-serif\">USing modern web layout to create professional websites</span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">USing JQuery to further increase website capabilities</span></span></p> </li> <li> <p><span style=\"color:#000000; font-family:Calibri,sans-serif\">Using Bootstrap to create responsive web pages</span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Create webpages from a given template</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Build a complete website from a HTML template</span></span></p> </li> </ul> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\"><strong>WHAT YOU&#39;LL LEARN?</strong></span></span></p> <ul style=\"list-style-type:square\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Learn about different web page developent software such as: Notepad++, Dreamweaver, Visual Studio Code,...</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Creating webpages using HTML</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using basic HTML tag to create a simple website</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Create webpages using HTML5</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">New Elements, HTML5 Canvas, SVG, Google Maps, Multimedia, Video, Audio, Plug-ins, YouTube, Geolocation, Drag and Drop, Server-Sent Events</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using CSS</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Introducing CSS and different type of CSS</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Basic and Advanced CSS usage: ID Selector, Class Selector,...</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Customise Webpages with CSS3</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Rounded Corners, Border Images, Backgrounds, Colors, Gradients, Shadow Effects, Text, Web Fonts, 2D Transforms, 3D Transforms, Transitions, Animations, Images&hellip;</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Web processing with Javascript</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000; font-family:Calibri,sans-serif\">DOM Elements</span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using DOM Events to assign action on user interactions</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using JQuery to create professional interface</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">USing JQuery effects to add special effects to webpages</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using Bootstrap Framework</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Install Bootstrap, and supported IDE for Bootstrap</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using Bootstrap CSS</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Bootstrap Component</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">JavaScript in Bootstrap</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Createing HTML/CSS from PSD</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Using photoshop to process PSD file v&agrave; coding HTML/CSS page</span></span></p> </li> </ul> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Building websites using given templates</span></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"color:#000000; font-family:Calibri,sans-serif\">Inspect the template</span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Requirement Analysing</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Customise the template to meet the demand</span></span></p> </li> <li> <p><span style=\"color:#000000\"><span style=\"font-family:Calibri,sans-serif\">Finishing website</span></span></p> </li> </ul> </li> </ul>', 1, b'1'),
(3, 2, 'Dynamic Web Development with PHP', 1, 6800000, '<p>Provide students with the necessary knowledge and skills in programming PHP with the latest version of the open source PHP Web</p> <p>Equip students with experience to build a complete website for businesses for the purpose of introducing products, e-commerce, news ... with a modern, friendly web interface that can be compatible with all programs. browsing and displaying on all devices (responsive), easily updated through a secure administration system.</p> <p>Helping students understand and develop a complete web application on Laravel Framework, one of the frameworks that helps to develop web applications quickly and flexibly.</p> <p>Help students become familiar with the working environment in software companies.</p> <p>Focus on training programming thinking and style</p> <p style=\"margin-right:5px\"> </p> <h2><span style=\"font-family:Calibri,sans-serif\"><strong>WHAT WILL YOU GAIN FROM THIS COURSE?</strong></span></h2> <ul style=\"list-style-type:square\"> <li> <p>Mastering the basic PHP programming knowledge, proficient use of data types, operators, control structures, functions, OOP, PDO ... to solve practical problems.</p> </li> <li> <p>Working with different storage data types such as JSON, XML, MySQL database ...</p> </li> <li> <p>Deploy web applications according to MVC model Mastering the basic components of PHP web programming with Laravel framework, flexibly applying Session, Cookie, Shopping Cart, File Upload, Ajax, CKEditor, Multi-language, Chart ... technologies and techniques Develop web applications using the Laravel Framework</p> </li> <li> <p>Build and deploy Web Services using NUSOAP, Laravel API Build complete websites according to Mobile First criteria with Bootstrap</p> </li> </ul> <h2><span style=\"font-family:Calibri,sans-serif\"><strong>WHAT WILL YOU LEARN?</strong></span></h2> <ul style=\"list-style-type:square\"> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 1: PHP7 - Technology and Engineering 1</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Building interfaces Bootstrap 4</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Form basics controls</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Basic data types, variables, constraint, operators, strings, control structures</span></p> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\">Using PHP functions, error handling</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Session and Cookie</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Files and processing functions (*.txt, *.xml, *.json)</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Arrays and handlers</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">MySQL Databases</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">MySQL Queries</span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 2: PHP7 - CTechnology and Enginerring 2</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri, sans-serif\">Object Oriented Programming - OOP</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Strict Mode and Coercive Mode PHP7</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">PHP Data Objects (PDO)</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">MVC in PHP</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Implement MVC: Model &ndash; View &ndash; Controller</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Using (NUSOAP, c&aacute;c dịch vụ tiện &iacute;ch kh&aacute;c ...)</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Completing application, public on host</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong><em>Project 1</em></strong></span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 3: Laravel Framework &ndash; Technology and Engineering 1</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Laravel</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Work with Route and Middleware</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Controller</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Request, Response</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">View</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Blade Template</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Data management Laravel Framework</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Forms and Validation</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">File Uploading</span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 4: Laravel Framework &ndash; Technology and Engineering 2</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Session and Cookie</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Ajax</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Sending Email</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">CKEditor in Laravel Framework</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Data Statistic Chart</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Multi-lingual Websites</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">CSRF Protection, Authentication</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">API</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Upload website on host</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong><em>Project 2</em></strong></span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Graduation Project: Assigned by teacher or select from the following topics:</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Online order management at a restaurant</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Business management, delivery tracking - receipt tracking for fast food</span></p> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\">Online Shopping</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Online Toy shopping</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Online Pastry shop</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Foreign Currencies management</span></p> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\">Online Library</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Excersise schedule management for a gym clubs</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">School Management</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; v&agrave; b&aacute;n v&eacute; sự kiện online</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Quản l&yacute; chăm s&oacute;c kh&aacute;ch h&agrave;ng ở ph&ograve;ng kh&aacute;m, bệnh viện (quản l&yacute; lịch hẹn t&aacute;i kh&aacute;m, gửi mail/sms nhắc kh&aacute;ch h&agrave;ng ng&agrave;y/giờ kh&aacute;m bệnh...) </span></p> </li> </ul> </li> </ul>', 3, b'1'),
(4, 2, 'Javascript Development', 1, 6800000, '<p><span style=\"font-family:Calibri,sans-serif\">Help students master the necessary knowledge and skills about fullstack web programming with Javascript, and confidently build and deploy real Web applications using JSON technology.</span></p> <p><span style=\"font-family:Calibri,sans-serif\">Equip students with in-depth techniques and practical experience on Bootstrap, JavaScript, NodeJS ...</span></p> <p><span style=\"font-family:Calibri,sans-serif\">Instructions on how to design a friendly, modern web interface that can be compatible with all browsers and displayed on any device - Mobile First</span></p> <p><span style=\"font-family:Calibri,sans-serif\">Focusing on training programming styles, developing organizational skills and building standard Web applications.</span></p> <p><span style=\"font-family:Calibri,sans-serif\">The complete project at the end of the course helps students confidently apply for and develop careers in software companies as a JavaScript programmer. </span></p> <p style=\"margin-right:5px\"> </p> <h2><span style=\"font-family:Calibri,sans-serif\"><strong>WHAT WILL YOU GAIN FROM THIS COURSE?</strong></span></h2> <ul style=\"list-style-type:square\"> <li> <p>Using Bootstrap to design a website that is highly interactive, compatible with all browsers and displayed on all devices.</p> </li> <li> <p>Build and deploy Web applications according to Mobile First criteria using JavaScript combined with NodeJS, MongoDB, JSON and modern interface technologies.</p> </li> <li> <p>Combining JavaScript with Google Map, Form PDF, Graph, Email, SMS, Facebook, Youtube, CKEDITOR ... service to create products with high applicability.</p> </li> <li> <p>Synchronise applications, deploy multiple services on the Internet</p> </li> </ul> <h2> </h2> <h2><span style=\"font-family:Calibri,sans-serif\"><strong>WHAT WILL YOU LEARN ON THIS COURSE?</strong></span></h2> <ul style=\"list-style-type:square\"> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 1: JavaScript for beginner</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Basics JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Variables: strings, numbers, logical, date</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Object variables</span></p> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\">List</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Building functions</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Building Client apps (Client): HTML, CSS, using Bootstrap</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Building Servicing apps (Service): Node.JS</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Using HTTP request for data exchange betwwen client and service</span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 2: JavaScript &ndash; Technology and Engineering</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Building interfaces with Bootstrap</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Using Google Map with JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Using PDF Form with JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Using Graph/Chart in JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\">A-synchronous programming</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Database management with MongoDB</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Server: Using Node.JS to access data from Mongo DB</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Client: Using IndexedBD</span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\"><strong>Module 3: JavaScript &ndash; Advanced</strong></span></p> <ul style=\"list-style-type:circle\"> <li> <p><span style=\"font-family:Calibri,sans-serif\">Send Mail with JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">SMS sending with JavaScript</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">JavaScript and Facebook</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">JavaScript and Youtube</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">CKEDITOR 4, INLINE in websites</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Synchronising apps with Server Send Event (SSE) and Web Service Worker</span></p> </li> <li> <p><span style=\"font-family:Calibri,sans-serif\">Multi-services Internet</span></p> </li> </ul> </li> <li> <p><span style=\"font-family:Calibri, sans-serif\"><strong>Graduation Project</strong></span></p> </li> </ul>', 2, b'1');

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

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedbackDate`, `email`, `subject`, `body`, `response`) VALUES
(1, '2021-03-30', 'binh.truongvu97@outlook.com', 'First Response', 'Hi,\r\nThis this the first message from me to test out the messaging function!', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(4) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
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

INSERT INTO `register` (`id`, `name`, `email`, `phone`, `cID`, `stdAddress`, `addID`, `ref`, `regDate`, `date`) VALUES
(1, 'Truong Vu Binh', 'binh.truongvu97@outlook.com', 912378516, 1, 'P401-B2 số 189 Thanh Nhàn', 1, 'Facebook', '2021-03-30', '2021-04-09'),
(2, 'Truong Vu Binh', 'binh.truongvu97@outlook.com', 912378516, 4, 'P401-B2 số 189 Thanh Nhàn', 1, 'Facebook', '2021-03-30', '0000-00-00');

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
(1, 'Dang Tran Long', 'PHP, Java, Python, HTML5, CSS3, SQL', '1616643760_1543463051_longdt_240.png', '<h2>Experience</h2>\r\n\r\n<ul>\r\n	<li>Faculty at&nbsp;FPT University</li>\r\n	<li>Faculty at FPoly</li>\r\n	<li>Java developer at&nbsp;Tri Thức Mới</li>\r\n	<li>Teaching Java, Python at&nbsp;STEM centre</li>\r\n</ul>\r\n\r\n<h2>Achievements</h2>\r\n\r\n<ul>\r\n	<li>Đ&agrave;o tạo nhiều học vi&ecirc;n trẻ đạt giải cao tại&nbsp;c&aacute;c cu&ocirc;c thi&nbsp; m&atilde; nguồn mở PHP quốc tế Google Code-in do Google tổ chức</li>\r\n	<li>1 sinh vi&ecirc;n đạt giải nh&igrave; v&agrave; một sinh vi&ecirc;n đạt giải ba tại hội thi nghề C&ocirc;ng nghệ th&ocirc;ng tin th&agrave;nh&nbsp;phố năm 2012</li>\r\n</ul>\r\n\r\n<h2>C&aacute;c dự &aacute;n ti&ecirc;u biểu</h2>\r\n\r\n<ul>\r\n	<li>dungre.vn: Website đăng tin</li>\r\n	<li>bengalcattery.com: Website giới thiệu c&aacute;c giống m&egrave;o Bengal</li>\r\n	<li>fogliancoffee.com: Website về đồ uống của Foglian</li>\r\n</ul>\r\n'),
(2, 'Truong Khac Nguyen', 'ASP.NET, Windows Form, WCF, MVC, MVP, HTML & CSS, LINQ, Cloud Computing,…', '1616649411_img_1769.png', '<p><strong>Degree:</strong>&nbsp;Bachelor&#39;s Degree in IT</p>\r\n\r\n<p><strong>Teaching Experience:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>6 years programming experience, and managing and coodinating with various freelance project</li>\r\n	<li>Freelance projects including mobile apps, desktop apps,...</li>\r\n	<li>Teaching at Aptech from 2008</li>\r\n	<li>Teaching .NET,&nbsp;ASP.NET, Windows Form, WCF, MVC, MVP, HTML &amp; CSS, LINQ, Cloud Computing,&hellip; at&nbsp;Aptech</li>\r\n</ul>\r\n\r\n<p><strong>Quote:</strong>&nbsp;</p>\r\n\r\n<p>There is no good or bad in learning programming. And you cannot just write a perfect programs without flaws. If you fail, try again!</p>\r\n');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
