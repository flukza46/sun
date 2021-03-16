-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 04:29 AM
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
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `select_sala` varchar(50) NOT NULL,
  `raca_sala` int(50) NOT NULL,
  `datestart` date NOT NULL,
  `datestop` date NOT NULL,
  `select_equipment` varchar(50) NOT NULL,
  `raca_equip` int(50) NOT NULL,
  `select_cabamlung` varchar(50) NOT NULL,
  `raca_cabamlung` int(50) NOT NULL,
  `raca_total` int(50) NOT NULL,
  `raca_cafri` varchar(50) NOT NULL,
  `raca_manternance9` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `make_list_booking`
--

INSERT INTO `make_list_booking` (`id_list_booking`, `first_name`, `last_name`, `phone_number`, `address`, `select_sala`, `raca_sala`, `datestart`, `datestop`, `select_equipment`, `raca_equip`, `select_cabamlung`, `raca_cabamlung`, `raca_total`, `raca_cafri`, `raca_manternance9`) VALUES
(1, 'ชื่อจริง', 'นามสกุล', '9999999999', ' สถานที่อยู่', 'ศาลาที่ 6', 4000, '2021-03-15', '2021-03-16', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 9820, 'wait', 'wait'),
(3, 'ชื่อจริง2', 'นามสกุล2', '9999999999', ' สถานที่อยู่2', 'ศาลาที่ 6', 4000, '2021-03-15', '2021-03-16', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 9820, 'wait', 'wait'),
(4, 'ชื่อจริง3', 'นามสกุล3', '9999999999', ' สถานที่อยู่3', 'ศาลาที่ 6', 4000, '2021-03-15', '2021-03-16', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 9820, 'wait', 'wait'),
(5, 'ชื่อจริง4', 'นามสกุล4', '8888888888', '252/2', 'ศาลาที่ 6', 4000, '2021-03-15', '2021-03-17', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 9820, 'wait', 'wait'),
(6, 'ชื่อจริง5', 'นามสกุล5', '9999999999', 'สถานที่อยู่5', 'ศาลาที่ 6', 4000, '2021-03-16', '2021-03-18', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำห', 970, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุง', 4850, 9820, 'wait', 'wait');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  ADD PRIMARY KEY (`id_list_booking`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `make_list_booking`
--
ALTER TABLE `make_list_booking`
  MODIFY `id_list_booking` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
