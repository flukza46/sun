-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 10:27 AM
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
-- Table structure for table `pavilion`
--

CREATE TABLE `pavilion` (
  `id` int(10) NOT NULL,
  `img` varchar(50) NOT NULL,
  `pavilion_name` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `status_sala` varchar(20) NOT NULL,
  `booking_d_strat` date NOT NULL,
  `booking_d_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavilion`
--

INSERT INTO `pavilion` (`id`, `img`, `pavilion_name`, `price`, `status_sala`, `booking_d_strat`, `booking_d_stop`) VALUES
(4, '161011950939286.jpg', 'ศาลาที่ 1', '1500', 'full', '2021-03-16', '2021-03-21'),
(5, '161011952053353.jpg', 'ศาลาที่ 2', '2000', 'full', '2021-03-16', '2021-03-19'),
(6, '161011954633769.jpg', 'ศาลาที่ 3', '2500', 'empty', '0000-00-00', '0000-00-00'),
(7, '16101195647154.jpg', 'ศาลาที่ 4', '3000', 'empty', '0000-00-00', '0000-00-00'),
(8, '161010244328521.jpg', 'ศาลาที่ 5', '3500', 'empty', '0000-00-00', '0000-00-00'),
(9, '161011942267882.jpg', 'ศาลาที่ 6', '4000', 'empty', '0000-00-00', '0000-00-00'),
(14, '1615879841745.jpeg', 'ทดสอบ 1', '600', 'full', '2021-03-16', '2021-03-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pavilion`
--
ALTER TABLE `pavilion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pavilion`
--
ALTER TABLE `pavilion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
