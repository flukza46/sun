-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 05:20 PM
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
  `select_equipment` varchar(300) NOT NULL COMMENT 'อุปกรณ์ที่เลือก',
  `raca_equip` int(50) NOT NULL COMMENT 'ราคาอุปกรณ์ที่เลือกทั้งหมด',
  `select_cabamlung` varchar(300) NOT NULL COMMENT 'ค่าบำรุงที่เลือก',
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
(10, 'ทักษิณ', 'จันโอชา', '0123456789', '12369874', 'ศาลาที่ 1', 4, 1500, '2021-03-19', '2021-03-20', 'ผ้าไตรเต็มชุด , กันณฑ์เทศน์/ผ้าป่า , ผ้าบังสกุลสำหรับพระสวดมาติกา ', 450, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุงพัดลมหน้าเมรุ, ค่าทำความสะอาดวันศพออก, ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง, ค่าทำความสอาดโลงเย็น, ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 4850, 6800, 'wait', 'wait', 'yet');

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
  `booking_d_strat` date NOT NULL,
  `booking_d_stop` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pavilion`
--

INSERT INTO `pavilion` (`id`, `img`, `pavilion_name`, `price`, `status_sala`, `booking_d_strat`, `booking_d_stop`) VALUES
(4, '161011950939286.jpg', 'ศาลาที่ 1', '1500', 'full', '2021-03-19', '2021-03-20'),
(5, '161011952053353.jpg', 'ศาลาที่ 2', '2000', 'empty', '2021-03-18', '2021-03-28'),
(6, '161011954633769.jpg', 'ศาลาที่ 3', '2500', 'empty', '2021-03-19', '2021-03-21'),
(7, '16101195647154.jpg', 'ศาลาที่ 4', '3000', 'empty', '0000-00-00', '0000-00-00'),
(8, '161010244328521.jpg', 'ศาลาที่ 5', '3500', 'empty', '0000-00-00', '0000-00-00'),
(9, '161011942267882.jpg', 'ศาลาที่ 6', '4000', 'empty', '2021-03-19', '2021-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

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
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

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
  MODIFY `id_list_booking` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

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
