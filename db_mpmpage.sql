-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 04:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
(1, 'ไปรษณีย์ไทย', '50', 'ส่งด่วน', 'thaipost.png', '868189996689324', 1, '2019-03-14 05:19:14'),
(2, 'Kerry', '150', 'ปลายทาง', 'kerry.png', '868189996689324', 1, '2019-03-14 05:21:58'),
(3, 'Alpha', '30', 'ลงทะเบียน', 'alpha.png', '868189996689324', 1, '2019-03-14 05:22:30'),
(4, 'Nim Express', '90', 'ส่งดวน', 'nimexpress.png', '868189996689324', 1, '2019-03-14 05:22:50'),
(5, 'Grab Express', '-', 'ตามระยะทาง', 'grab.png', '868189996689324', 1, '2019-03-14 05:23:15'),
(6, 'Lineman', '-', 'ตามระยะทาง', 'lineman.png', '868189996689324', 1, '2019-03-14 05:24:07');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderId` int(11) NOT NULL,
  `customerId` varchar(50) NOT NULL,
  `expressId` varchar(50) NOT NULL,
  `orderTotal` varchar(50) NOT NULL,
  `orderDiscount` varchar(50) NOT NULL,
  `orderConnect` varchar(50) NOT NULL,
  `orderStatus` int(11) NOT NULL DEFAULT '1',
  `orderTimeLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_productId` int(11) NOT NULL,
  `productId` varchar(50) NOT NULL,
  `productValue` varchar(50) NOT NULL,
  `orderId` varchar(50) NOT NULL,
  `order_productStatus` int(11) NOT NULL DEFAULT '1',
  `order_productTimeLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'รติพร พงษ์วดี ', '2301212520', 'ธนาคารกรุงเทพ', 'bbl.png', '868189996689324', 1, '2019-03-03 16:45:04'),
(3, 'อดิพงษ์ ธรรมนวกุล', '0043597418', 'ธนาคารกสิกรไทย', 'kbank.png', '868189996689324', 1, '2019-03-03 16:44:55'),
(4, 'ณัฐวุฒิ พวงไทย', '2415236902', 'ธนาคารออมสิน', 'gsb.png', '868189996689324', 1, '2019-03-03 02:13:25'),
(5, 'สุทธิวัช ชินอักษร', '1420315426', 'ธนาคารกรุงไทย', 'ktb.png', '868189996689324', 1, '2019-03-03 16:47:18'),
(6, 'วิภาพร ปู่แก้ว', '7412563095', 'ธนาคารกรุงศรีอยุธยา', 'krungsri.png', '868189996689324', 1, '2019-03-03 16:47:16'),
(7, 'น้ำตาล หวานเจี๊ยบ', '1245003621', 'ธนาคารทหารไทย', 'tmb.png', '868189996689324', 1, '2019-03-03 16:47:13'),
(8, 'นภัสสร พวงไทย', '0944930751', 'พร้อมเพย์', 'promptpay.png', '868189996689324', 1, '2019-03-03 08:49:46'),
(9, 'นภัสสร พวงไทยยยยย', '0324053555', 'ธนาคารกรุงศรีอยุธยา', 'krungsri.png', '868189996689324', 2, '2019-03-09 13:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productPrice` varchar(100) NOT NULL,
  `productDetail` varchar(300) NOT NULL,
  `productImage` varchar(300) NOT NULL,
  `productConnect` varchar(100) NOT NULL,
  `productGroupId` int(11) NOT NULL,
  `productStatus` int(11) NOT NULL DEFAULT '1',
  `productTimeLog` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productDetail`, `productImage`, `productConnect`, `productGroupId`, `productStatus`, `productTimeLog`) VALUES
(1, 'Acer Aspire F15', '20000', 'Intel Core i5\r\nRam 8 GB\r\nHDD 1000 GB', '20190309131144.jpg', '868189996689324', 8, 1, '2019-03-09 12:11:44'),
(2, 'HP OMEN', '40000', '', '20190309133335.jpg', '868189996689324', 8, 1, '2019-04-12 14:02:39'),
(3, 'Alien', '69000', '', '20190309133613.jpg', '868189996689324', 8, 1, '2019-04-12 14:01:20'),
(4, 'Mini Notebook', '14590', '', '20190309133751.jpg', '868189996689324', 8, 1, '2019-04-12 14:02:27'),
(5, 'ทดสอบ', '12345', '', '20190309134711.jpg', '868189996689324', 8, 1, '2019-04-12 14:02:29'),
(6, 'ทดสอบ 2', '98', '', '20190309134924.jpg', '868189996689324', 8, 1, '2019-04-12 14:02:26'),
(7, 'ทดสอบ', '12356', '', '20190309142716.jpg', '868189996689324', 8, 1, '2019-04-12 14:02:30'),
(8, 'Samsung', '37500', '', '20190325095224.jpg', '868189996689324', 6, 1, '2019-04-12 14:02:31'),
(9, 'Van', '1990', '', '20190325094841.jpg', '868189996689324', 3, 1, '2019-04-12 14:02:32'),
(10, '4x6 นิ้ว', '15', '', 'noImage.png', '868189996689324', 1, 1, '2019-03-09 13:38:27'),
(11, 'Snap', '3', '', 'noImage.png', '868189996689324', 1, 1, '2019-04-12 14:02:34'),
(12, '...', '123', '', 'noImage.png', '868189996689324', 3, 2, '2019-04-12 14:02:35'),
(13, 'ทดสอบ', '15455', '', 'noImage.png', '868189996689324', 8, 2, '2019-03-25 09:25:07'),
(14, 'LG', '45000', '', '20190325095855.jpg', '868189996689324', 6, 2, '2019-04-12 14:02:54'),
(15, 'Hitachi', '29999', '8000 BTU', '20190325100414.jpg', '350348718897021', 7, 1, '2019-04-12 14:02:51'),
(16, 'vannn', '1999', '', '20190326073756.jpg', '868189996689324', 3, 2, '2019-04-12 14:02:55'),
(17, 'ทดสอบ', '1236', '', 'noImage.png', '868189996689324', 3, 2, '2019-04-12 14:02:56'),
(18, 'สมุดเล่มเล็ก', '39', '', 'noImage.png', '868189996689324', 9, 1, '2019-04-12 14:02:57'),
(19, 'Converse Jack Purcell', '2200', '', '20190405060737.jpg', '868189996689324', 3, 1, '2019-04-12 14:02:57'),
(20, 'Adidas', '2300', '', '20190405060840.jpg', '868189996689324', 3, 1, '2019-04-12 14:02:59'),
(21, 'adidas', '2400', '', '20190405060936.jpg', '868189996689324', 3, 1, '2019-04-12 14:03:00'),
(22, 'converse star', '1690', '', '20190405061046.jpg', '868189996689324', 3, 1, '2019-04-12 14:03:01');

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
(1, 'รูป', '868189996689324', 1, '2019-03-23 15:18:09'),
(2, 'กระเป๋า', '868189996689324', 1, '2019-02-24 02:39:03'),
(3, 'รองเท้า', '868189996689324', 1, '2019-02-24 02:39:14'),
(4, 'โต๊ะ', '868189996689324', 2, '2019-03-25 09:45:48'),
(5, 'ไฟ', '868189996689324', 2, '2019-03-03 16:21:56'),
(6, 'ทีวี', '868189996689324', 1, '2019-02-24 06:58:11'),
(7, 'แอร์', '350348718897021', 1, '2019-02-24 07:32:37'),
(8, 'คอมพิวเตอร์', '868189996689324', 1, '2019-03-09 12:09:05'),
(9, 'สมุด', '868189996689324', 1, '2019-03-28 09:24:22');

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
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_productId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

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
  MODIFY `expressId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `order_productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `productGroupId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
