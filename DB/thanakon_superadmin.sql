-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2021 at 05:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thanakon`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(10) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `equipment_tiype` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `img2`, `equipment_tiype`, `price`) VALUES
(3, '161016666014346.jpg', 'ผ้าไตรเต็มชุด', '300'),
(4, '161016667887087.jpg', 'กันณฑ์เทศน์/ผ้าป่า', '50'),
(5, '161028874464800.jpg', 'ผ้าบังสกุลสำหรับพระสวดมาติกา', '100');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_rate`
--

CREATE TABLE `maintenance_rate` (
  `id` int(10) NOT NULL,
  `Maintenance_rate_name` varchar(50) NOT NULL,
  `Price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `make_list_booking`
--

CREATE TABLE `make_list_booking` (
  `id_list_booking` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `phone_number` varchar(10) NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  `address` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `select_sala` varchar(50) NOT NULL COMMENT 'ศาลาที่เลือก',
  `id_sala` int(50) NOT NULL COMMENT 'ไอดีของศาลา',
  `raca_sala` int(50) NOT NULL COMMENT 'ราคาศาลาที่เลือก',
  `datestart` datetime NOT NULL COMMENT 'วันที่เริ่มจอง',
  `datestop` datetime NOT NULL COMMENT 'วันที่สิ้นสุดการจอง',
  `select_equipment` text NOT NULL COMMENT 'อุปกรณ์ที่เลือก',
  `raca_equip` int(50) NOT NULL COMMENT 'ราคาอุปกรณ์ที่เลือกทั้งหมด',
  `select_cabamlung` text NOT NULL COMMENT 'ค่าบำรุงที่เลือก',
  `raca_cabamlung` int(50) NOT NULL COMMENT 'ราคาค่าบำรุงที่เลือกทั้งหมด',
  `raca_total` int(50) NOT NULL COMMENT 'ราคารวมทั้งหมด',
  `raca_cafri` varchar(50) NOT NULL COMMENT 'ราคาค่าไฟหน่วยล่ะ7บาท',
  `raca_manternance9` varchar(50) NOT NULL COMMENT 'ค่าบริการ9คน',
  `status_bill_success` varchar(30) NOT NULL COMMENT 'สถานะใบเสร็จ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `make_list_booking`
--

INSERT INTO `make_list_booking` (`id_list_booking`, `first_name`, `last_name`, `phone_number`, `address`, `select_sala`, `id_sala`, `raca_sala`, `datestart`, `datestop`, `select_equipment`, `raca_equip`, `select_cabamlung`, `raca_cabamlung`, `raca_total`, `raca_cafri`, `raca_manternance9`, `status_bill_success`) VALUES
(1, 'dfh', 'dfh', 'dfh', 'dfh', 'ศาลาที่ 1', 4, 1500, '2021-03-31 09:32:00', '2021-03-31 09:35:00', 'ผ้าบังสกุลสำหรับพระสวดมาติกา ', 100, 'ค่าบำรุงเมรุ (วันศพออก)', 2000, 5750, '350', '1800', 'success'),
(2, 'ชื่อจริง', 'นามสกุล', '9999999999', '89/55', 'ศาลาที่ 1', 4, 1500, '2021-03-31 10:02:00', '2021-03-31 10:02:00', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำหรับพระสวดมาติกา ', 450, 'ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 1500, 3450, 'wait', 'wait', 'yet'),
(3, 'กด้', 'กด้', 'ก้ด', 'กด้', 'ศาลาที่ 3', 6, 2500, '2021-03-17 10:21:00', '2021-03-31 10:21:00', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำหรับพระสวดมาติกา ', 450, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าพนักงานเฝ้าศพกลางคืน', 2500, 5450, 'wait', 'wait', 'yet'),
(4, 'ชื่อจริง', 'กด้', 'ฟหด', 'ฟหด', 'ศาลาที่ 6', 9, 4000, '2021-01-31 10:22:00', '2021-03-31 10:22:00', 'ผ้าบังสกุลสำหรับพระสวดมาติกา ', 100, 'ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 1500, 5600, 'wait', 'wait', 'yet'),
(5, 'fsfdhdf', 'sdg', 'sdg', 'sdg', 'ศาลาที่ 5', 8, 3500, '2020-01-31 10:25:00', '2021-03-31 10:25:00', 'ผ้าบังสกุลสำหรับพระสวดมาติกา ', 100, 'ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง', 700, 4300, 'wait', 'wait', 'yet');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `news_summary` varchar(100) NOT NULL,
  `news_description` varchar(500) NOT NULL,
  `news_author` varchar(50) NOT NULL,
  `news_cover` varchar(50) NOT NULL,
  `nawe_creat` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_summary`, `news_description`, `news_author`, `news_cover`, `nawe_creat`) VALUES
(13, 'หัวข้อข่าวที่ 1', 'สรุปข่าว 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012265138851.jpg', '2021-01-08 16:17:30'),
(14, 'หัวข้อข่าวที่ 2', 'สรุปข่าว 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012266089905.jpg', '2021-01-08 16:17:40'),
(15, 'หัวข้อข่าวที่ 3', 'สรุปข่าว 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012267071682.jpg', '2021-01-08 16:17:49'),
(16, 'หัวข้อข่าวที่ 4', 'สรุปข่าว 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101226784917.jpg', '2021-01-08 16:17:58'),
(17, 'หัวข้อข่าวที่ 5', 'สรุปข่าว 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101226884413.jpg', '2021-01-08 16:18:07'),
(18, 'หัวข้อข่าวที่ 6', 'สรุปข่าว 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012269851749.jpg', '2021-01-08 16:18:18'),
(19, 'หัวข้อข่าวที่ 7', 'สรุปข่าว 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101227383561.jpg', '2021-01-08 16:18:58'),
(20, 'หัวข้อข่าวที่ 8', 'สรุปข่าว 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012272816930.jpg', '2021-01-08 16:18:48'),
(21, 'หัวข้อข่าวที่ 9', 'สรุปข่าว 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012271770590.jpg', '2021-01-08 16:18:36'),
(22, 'หัวข้อข่าวที่ 10', 'สรุปข่าว 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012270816579.jpg', '2021-01-08 16:18:27'),
(27, 'หัวข้อข่าวที่ 11 ทดสอบ', 'สรุปข่าว 11', 'รายละเอียดข่าวที่ 11', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012275455474.jpg', '2021-01-08 16:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `pavilion`
--

CREATE TABLE `pavilion` (
  `id` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pavilion_name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status_sala` varchar(20) NOT NULL,
  `booking_d_strat` datetime NOT NULL,
  `booking_d_stop` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavilion`
--

INSERT INTO `pavilion` (`id`, `img`, `pavilion_name`, `price`, `status_sala`, `booking_d_strat`, `booking_d_stop`) VALUES
(4, '161011950939286.jpg', 'ศาลาที่ 1', '1500', 'empty', '2021-03-31 10:02:00', '2021-03-31 10:02:00'),
(5, '161011952053353.jpg', 'ศาลาที่ 2', '2000', 'empty', '2021-03-30 14:41:00', '2021-03-30 14:44:00'),
(6, '161011954633769.jpg', 'ศาลาที่ 3', '2500', 'empty', '2021-03-17 10:21:00', '2021-03-31 10:21:00'),
(7, '16101195647154.jpg', 'ศาลาที่ 4', '3000', 'empty', '2021-03-30 14:42:00', '2021-03-30 14:44:00'),
(8, '161010244328521.jpg', 'ศาลาที่ 5', '3500', 'empty', '2020-01-31 10:25:00', '2021-03-31 10:25:00'),
(9, '161011942267882.jpg', 'ศาลาที่ 6', '4000', 'empty', '2021-01-31 10:22:00', '2021-03-31 10:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `id` int(10) NOT NULL,
  `Receipt_name` varchar(50) NOT NULL,
  `all_rentals` varchar(10) NOT NULL,
  `number` varchar(10) NOT NULL,
  `Total_price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `title_name` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `user_level` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางข้อมูลผู้ใช้';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `title_name`, `first_name`, `last_name`, `email`, `phone_number`, `user_level`, `date`) VALUES
(1, 'admin', '1234', 'นาย', 'เจ้าหน้าที่', 'วัดนครสวรรค์พระอารามหลวง', 'thanakon.in@nsru.ac.th', '0834253942', 'admin', '2020-11-09 07:25:10'),
(2, 'manager', '1234', 'นาย', 'ผู้บริหาร', 'วัดนครสวรรค์พระอารามหลวง', 'thanakonintakun@gmail.com', '0848957019', 'manager', '2020-11-09 07:29:07'),
(3, 'people', '1234', 'นาย', 'mom', 'intakun', 'kokokokk@gmail.com', '0619999999', 'admin', '2020-11-09 07:30:39'),
(4, 'super@min', '1234', 'Mr', 'super', 'admin', 'super@min.com', '0000000000', 'super@min', '2021-06-13 09:15:12'),
(8, 'bill', '1234', 'นาย', 'jirapat', 'meedoung', 'jirapat.m@nsru.ac.th', '0888888888', 'admin', '2021-06-13 10:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance_rate`
--
ALTER TABLE `maintenance_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  ADD PRIMARY KEY (`id_list_booking`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pavilion`
--
ALTER TABLE `pavilion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maintenance_rate`
--
ALTER TABLE `maintenance_rate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  MODIFY `id_list_booking` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pavilion`
--
ALTER TABLE `pavilion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  ADD CONSTRAINT `make_list_booking_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `pavilion` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
