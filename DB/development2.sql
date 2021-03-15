-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:58 AM
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
-- Database: `development`
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
(5, '161028874464800.jpg', 'ผ้าบังสกุลสำหรับพระสวดมาติกา', '100'),
(6, '161536007572350.jpg', '[b]', '20'),
(7, '161571495414598.png', 'ทดสอบ', '500');

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
  `id_list_booking` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `select_sala` varchar(50) NOT NULL,
  `datestart` date NOT NULL,
  `datestop` date NOT NULL,
  `select_equipment` varchar(50) NOT NULL,
  `select_cabamlung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavilion`
--

INSERT INTO `pavilion` (`id`, `img`, `pavilion_name`, `price`) VALUES
(4, '161011950939286.jpg', 'ศาลาที่ 1', '1500'),
(5, '161011952053353.jpg', 'ศาลาที่ 2', '2000'),
(6, '161011954633769.jpg', 'ศาลาที่ 3', '2500'),
(7, '16101195647154.jpg', 'ศาลาที่ 4', '3000'),
(8, '161010244328521.jpg', 'ศาลาที่ 5', '3500'),
(9, '161011942267882.jpg', 'ศาลาที่ 6', '4000');

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
  `user_level` varchar(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ตารางข้อมูลผู้ใช้';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `title_name`, `first_name`, `last_name`, `email`, `phone_number`, `user_level`, `date`) VALUES
(1, 'admin', '1234', 'นาย', 'เจ้าหน้าที่', 'วัดนครสวรรค์พระอารามหลวง', 'thanakon.in@nsru.ac.th', '0834253942', 'a', '2020-11-09 07:25:10'),
(2, 'manager', '1234', 'นาย', 'ผู้บริหาร', 'วัดนครสวรรค์พระอารามหลวง', 'thanakonintakun@gmail.com', '0848957019', 'ma', '2020-11-09 07:29:07'),
(3, 'people', '1234', 'นาย', 'mom', 'intakun', 'kokokokk@gmail.com', '0619999999', 'p', '2020-11-09 07:30:39');

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
  ADD PRIMARY KEY (`id_list_booking`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maintenance_rate`
--
ALTER TABLE `maintenance_rate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  MODIFY `id_list_booking` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pavilion`
--
ALTER TABLE `pavilion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
