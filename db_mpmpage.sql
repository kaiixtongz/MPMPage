-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 05:40 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpmpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(200) NOT NULL,
  `customerTel` varchar(20) NOT NULL,
  `customerEmail` varchar(200) NOT NULL,
  `customerAddress` varchar(500) NOT NULL,
  `customerConnect` varchar(200) NOT NULL,
  `customerStatus` int(11) NOT NULL DEFAULT '1',
  `customerTimelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerName`, `customerTel`, `customerEmail`, `customerAddress`, `customerConnect`, `customerStatus`, `customerTimelog`) VALUES
(1, 'นภัสสร พวงไทย', '0944930751', 'mild_napassorn@outlook.com', '45/191 ม.5 ต.ท่าข้าม อ.สามพราน จ.นครปฐม 73110', '868189996689324', 1, '2019-02-24 09:20:34'),
(2, 'รติพร พงษ์วดี', '0854049446', 'por.ritiporn@hotmail.com', '11/105 ม.5 ', '868189996689324', 1, '2019-03-03 03:20:21'),
(3, 'โต้ง', '0000000000', 'tong@gmail.com', '456/123', '350348718897021', 1, '2019-02-24 07:33:24'),
(4, 'โต้ง', '0809073005', 'tong@gmail', '66/33', '868189996689324', 2, '2019-02-24 09:31:28'),
(5, 'อดิพงษ์ ธรรมนวกุล', '0809073005', 'tong.adipong@gmail.com', '200 ถ.พุทธมณฑลสาย3 แขวงบางไผ่ เขตบางแค กรุงเทพฯ 10160', '868189996689324', 1, '2019-03-03 03:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `express`
--

CREATE TABLE `express` (
  `expressId` int(11) NOT NULL,
  `expressName` varchar(100) NOT NULL,
  `expressPrice` varchar(100) NOT NULL,
  `expressDetail` varchar(100) NOT NULL,
  `expressImage` varchar(100) NOT NULL,
  `expressConnect` varchar(100) NOT NULL,
  `expressStatus` int(11) NOT NULL DEFAULT '1',
  `expressTimeLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `express`
--

INSERT INTO `express` (`expressId`, `expressName`, `expressPrice`, `expressDetail`, `expressImage`, `expressConnect`, `expressStatus`, `expressTimeLog`) VALUES
(1, 'ส่งด่วน', '70 บาท', 'Nim Express', 'nimexpress.png', '868189996689324', 1, '2019-03-03 16:03:30'),
(2, 'ส่งด่วน', '90 บาท', 'Alpha', 'alpha.png', '868189996689324', 1, '2019-03-03 16:29:33'),
(3, 'เก็บเงินปลายทาง', '200 บาท', 'ไปรษณีย์ไทย', 'thaipost.png', '868189996689324', 1, '2019-03-03 16:04:13'),
(4, 'วินมอเตอร์ไซค์', 'ตามระยะทาง ', 'อื่น ๆ', 'other.png', '868189996689324', 1, '2019-03-03 16:04:49'),
(5, 'ธรรมดา', '60 บาท', 'Lineman', 'lineman.png', '868189996689324', 1, '2019-03-03 16:05:15'),
(6, 'ส่งด่วน', 'ตามระยะทาง', 'Grab Express', 'grab.png', '868189996689324', 1, '2019-03-03 15:18:25'),
(7, 'ส่งด่วน', 'เก็บเงินปลายทาง + ค่าส่งตามระยะทาง', 'Lalamove', 'lalamove.png', '868189996689324', 1, '2019-03-03 15:19:05'),
(8, 'เก็บเงินปลายทาง', '160', 'Kerry', 'kerry.png', '868189996689324', 2, '2019-03-03 16:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(11) NOT NULL,
  `paymentName` varchar(100) NOT NULL,
  `paymentNumber` varchar(100) NOT NULL,
  `paymentDetail` varchar(100) NOT NULL,
  `paymentImage` varchar(100) NOT NULL,
  `paymentConnect` varchar(100) NOT NULL,
  `paymentStatus` int(11) NOT NULL DEFAULT '1',
  `paymentTimeLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `paymentName`, `paymentNumber`, `paymentDetail`, `paymentImage`, `paymentConnect`, `paymentStatus`, `paymentTimeLog`) VALUES
(1, 'นภัสสร พวงไทย', '1253023336', 'ธนาคารไทยพาณิชย์', 'scb.png', '868189996689324', 1, '2019-03-03 02:52:40'),
(2, 'รติพร พงษ์วดี ', '2301212520', 'ธนาคารกสิกรไทย', 'kbank.png', '868189996689324', 1, '2019-03-03 02:53:19'),
(3, 'อดิพงษ์ ธรรมนวกุล', '6523012540', 'ธนาคารกรุงเทพ', 'bbl.png', '868189996689324', 1, '2019-03-03 02:12:45'),
(4, 'ณัฐวุฒิ พวงไทย', '2415236902', 'ธนาคารออมสิน', 'gsb.png', '868189996689324', 1, '2019-03-03 02:13:25'),
(5, 'สุทธิวัช ชินอักษร', '1420315426', 'ธนาคารกรุงไทย', 'ktb.png', '868189996689324', 2, '2019-03-03 03:06:04'),
(6, 'วิภาพร ปู่แก้ว', '7412563095', 'ธนาคารกรุงศรีอยุธยา', 'krungsri.png', '868189996689324', 2, '2019-03-03 03:07:36'),
(7, 'น้ำตาล หวานเจี๊ยบ', '1245003621', 'ธนาคารทหารไทย', 'tmb.png', '868189996689324', 1, '2019-03-03 02:16:00'),
(8, 'นภัสสร พวงไทย', '0944930751', 'พร้อมเพย์', 'promptpay.png', '868189996689324', 1, '2019-03-03 08:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `productGroupId` int(11) NOT NULL,
  `productGroupName` varchar(200) NOT NULL,
  `productGroupConnect` varchar(200) NOT NULL,
  `productGroupStatus` int(11) NOT NULL DEFAULT '1',
  `productGroupTimelog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`productGroupId`, `productGroupName`, `productGroupConnect`, `productGroupStatus`, `productGroupTimelog`) VALUES
(1, 'รูป', '868189996689324', 1, '2019-02-24 02:38:51'),
(2, 'กระเป๋า', '868189996689324', 1, '2019-02-24 02:39:03'),
(3, 'รองเท้า', '868189996689324', 1, '2019-02-24 02:39:14'),
(4, 'โต๊ะ', '868189996689324', 1, '2019-02-24 03:01:12'),
(5, 'ไฟ', '868189996689324', 2, '2019-03-03 16:21:56'),
(6, 'ทีวี', '868189996689324', 1, '2019-02-24 06:58:11'),
(7, 'แอร์', '350348718897021', 1, '2019-02-24 07:32:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `express`
--
ALTER TABLE `express`
  ADD PRIMARY KEY (`expressId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`productGroupId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `express`
--
ALTER TABLE `express`
  MODIFY `expressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `productGroupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
