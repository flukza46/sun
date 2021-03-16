-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 10:28 AM
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
-- Table structure for table `make_list_booking`
--

CREATE TABLE `make_list_booking` (
  `id_list_booking` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(50) NOT NULL COMMENT 'นามสกุล',
  `phone_number` varchar(10) NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  `address` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `select_sala` varchar(50) NOT NULL COMMENT 'ศาลาที่เลือก',
  `id_sala` int(50) NOT NULL COMMENT 'ไอดีของศาลา',
  `raca_sala` int(50) NOT NULL COMMENT 'ราคาศาลาที่เลือก',
  `datestart` date NOT NULL COMMENT 'วันที่เริ่มจอง',
  `datestop` date NOT NULL COMMENT 'วันที่สิ้นสุดการจอง',
  `select_equipment` varchar(50) NOT NULL COMMENT 'อุปกรณ์ที่เลือก',
  `raca_equip` int(50) NOT NULL COMMENT 'ราคาอุปกรณ์ที่เลือกทั้งหมด',
  `select_cabamlung` varchar(50) NOT NULL COMMENT 'ค่าบำรุงที่เลือก',
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
(1, 'ชื่อจริง2', 'นามสกุล2', '9999999999', 'สถานที่อยู่252', 'ศาลาที่ 1', 4, 1500, '2021-03-16', '2021-03-21', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 7320, 'wait', 'wait', 'yet'),
(2, 'ชื่อจริง2', 'นามสกุล2', '9999999999', '252-55', 'ทดสอบ 1', 14, 600, '2021-03-16', '2021-03-19', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 6420, 'wait', 'wait', 'yet'),
(3, 'ชื่อจริง3', 'นามสกุล3', '9999999999', 'สถานที่อยู่ 25266', 'ศาลาที่ 2', 5, 2000, '2021-03-16', '2021-03-19', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 7820, 'wait', 'wait', 'yet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  ADD PRIMARY KEY (`id_list_booking`),
  ADD KEY `id_sala` (`id_sala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  MODIFY `id_list_booking` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
