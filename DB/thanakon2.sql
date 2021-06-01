/*
 Navicat Premium Data Transfer

 Source Server         : Database MSQL
 Source Server Type    : MySQL
 Source Server Version : 100418
 Source Host           : localhost:3306
 Source Schema         : thanakon

 Target Server Type    : MySQL
 Target Server Version : 100418
 File Encoding         : 65001

 Date: 01/06/2021 13:36:10
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for equipment
-- ----------------------------
DROP TABLE IF EXISTS `equipment`;
CREATE TABLE `equipment`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `img2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipment_tiype` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of equipment
-- ----------------------------
INSERT INTO `equipment` VALUES (3, '161016666014346.jpg', 'ผ้าไตรเต็มชุด', '300');
INSERT INTO `equipment` VALUES (4, '161016667887087.jpg', 'กันณฑ์เทศน์/ผ้าป่า', '50');
INSERT INTO `equipment` VALUES (5, '161028874464800.jpg', 'ผ้าบังสกุลสำหรับพระสวดมาติกา', '100');

-- ----------------------------
-- Table structure for maintenance_rate
-- ----------------------------
DROP TABLE IF EXISTS `maintenance_rate`;
CREATE TABLE `maintenance_rate`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Maintenance_rate_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of maintenance_rate
-- ----------------------------

-- ----------------------------
-- Table structure for make_list_booking
-- ----------------------------
DROP TABLE IF EXISTS `make_list_booking`;
CREATE TABLE `make_list_booking`  (
  `id_list_booking` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ชื่อจริง',
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'นามสกุล',
  `phone_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ที่อยู่',
  `select_sala` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ศาลาที่เลือก',
  `id_sala` int NOT NULL COMMENT 'ไอดีของศาลา',
  `raca_sala` int NOT NULL COMMENT 'ราคาศาลาที่เลือก',
  `datestart` datetime(0) NOT NULL COMMENT 'วันที่เริ่มจอง',
  `datestop` datetime(0) NOT NULL COMMENT 'วันที่สิ้นสุดการจอง',
  `select_equipment` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'อุปกรณ์ที่เลือก',
  `jumnul_eq` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `raca_equip` int NOT NULL COMMENT 'ราคาอุปกรณ์ที่เลือกทั้งหมด',
  `select_cabamlung` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ค่าบำรุงที่เลือก',
  `raca_cabamlung` int NOT NULL COMMENT 'ราคาค่าบำรุงที่เลือกทั้งหมด',
  `raca_total` int NOT NULL COMMENT 'ราคารวมทั้งหมด',
  `raca_cafri` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ราคาค่าไฟหน่วยล่ะ7บาท',
  `raca_manternance9` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ค่าบริการ9คน',
  `status_bill_success` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'สถานะใบเสร็จ',
  PRIMARY KEY (`id_list_booking`) USING BTREE,
  INDEX `id_sala`(`id_sala`) USING BTREE,
  CONSTRAINT `make_list_booking_ibfk_1` FOREIGN KEY (`id_sala`) REFERENCES `pavilion` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of make_list_booking
-- ----------------------------
INSERT INTO `make_list_booking` VALUES (10, 'ทักษิณ', 'จันโอชา', '8888888888', '985/855', 'ศาลาที่ 1', 4, 1500, '2021-05-29 17:55:00', '2021-06-04 17:55:00', '3 , 4 , 5 ', '2, 3, 4', 1150, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุงพัดลมหน้าเมรุ, ค่าทำความสะอาดวันศพออก, ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง, ค่าทำความสอาดโลงเย็น, ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 4850, 7500, 'wait', 'wait', 'yet');
INSERT INTO `make_list_booking` VALUES (12, 'ชื่อจริง1', 'ชินวัตร', '0541477788', '3258/96', 'ศาลาที่ 2', 5, 2000, '2021-05-29 18:25:00', '2021-06-03 18:25:00', '3 , 4 ', '2, 10', 1100, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุงพัดลมหน้าเมรุ, ค่าทำความสะอาดวันศพออก, ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง, ค่าทำความสอาดโลงเย็น', 3350, 7020, '70', '500', 'success');
INSERT INTO `make_list_booking` VALUES (13, 'x', 'x', 'x', 'x', 'ศาลาที่ 3', 6, 2500, '2016-01-01 10:26:00', '2021-07-03 10:26:00', '3 , 4 , 5 ', '10, 10, 10', 4500, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุงพัดลมหน้าเมรุ, ค่าทำความสะอาดวันศพออก, ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง, ค่าทำความสอาดโลงเย็น, ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 4850, 11850, 'wait', 'wait', 'yet');
INSERT INTO `make_list_booking` VALUES (14, 'c', 'c', 'c', 'c', 'ศาลาที่ 4', 7, 3000, '2017-01-01 10:27:00', '2021-07-02 10:27:00', '3 , 4 , 5 ', '50, 50, 50', 22500, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น, ค่าบำรุงพัดลมหน้าเมรุ, ค่าทำความสะอาดวันศพออก, ค่าพนักงานเฝ้าศพกลางคืน, ค่าบำรุงเรื่องเสียง, ค่าทำความสอาดโลงเย็น, ค่าบำรุงสุสาน (เฉพาะศพเก็บ)', 4850, 30350, 'wait', 'wait', 'yet');
INSERT INTO `make_list_booking` VALUES (15, 'v', 'v', 'v', 'v', 'ศาลาที่ 5', 8, 3500, '2018-01-01 10:29:00', '2021-07-10 10:29:00', '3 , 4 , 5 ', '10, 20, 10', 5000, 'ค่าบำรุงเมรุ (วันศพออก), ค่าบุรุงโลงเย็น', 2300, 10800, 'wait', 'wait', 'yet');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `news_title` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_summary` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_description` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_author` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `news_cover` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nawe_creat` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES (13, 'หัวข้อข่าวที่ 1', 'สรุปข่าว 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012265138851.jpg', '2021-01-08 23:17:30');
INSERT INTO `news` VALUES (14, 'หัวข้อข่าวที่ 2', 'สรุปข่าว 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012266089905.jpg', '2021-01-08 23:17:40');
INSERT INTO `news` VALUES (15, 'หัวข้อข่าวที่ 3', 'สรุปข่าว 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012267071682.jpg', '2021-01-08 23:17:49');
INSERT INTO `news` VALUES (16, 'หัวข้อข่าวที่ 4', 'สรุปข่าว 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101226784917.jpg', '2021-01-08 23:17:58');
INSERT INTO `news` VALUES (17, 'หัวข้อข่าวที่ 5', 'สรุปข่าว 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101226884413.jpg', '2021-01-08 23:18:07');
INSERT INTO `news` VALUES (18, 'หัวข้อข่าวที่ 6', 'สรุปข่าว 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012269851749.jpg', '2021-01-08 23:18:18');
INSERT INTO `news` VALUES (19, 'หัวข้อข่าวที่ 7', 'สรุปข่าว 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '16101227383561.jpg', '2021-01-08 23:18:58');
INSERT INTO `news` VALUES (20, 'หัวข้อข่าวที่ 8', 'สรุปข่าว 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012272816930.jpg', '2021-01-08 23:18:48');
INSERT INTO `news` VALUES (21, 'หัวข้อข่าวที่ 9', 'สรุปข่าว 9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012271770590.jpg', '2021-01-08 23:18:36');
INSERT INTO `news` VALUES (22, 'หัวข้อข่าวที่ 10', 'สรุปข่าว 10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac posuere ligula. Nulla semper vulputate dui, pharetra aliquet elit varius ac. Nulla eu finibus nunc, ac malesuada ligula. Maecenas leo elit, faucibus vel finibus non, fermentum sed dolor. Integer ut mi tempus, blandit mauris et, ullamcorper lacus. Integer ultrices diam nibh, sit amet dapibus justo ornare ut. Aliquam ligula purus, congue vel lacinia vel, pellentesque in mi. Donec et augue nunc. Curabitur eros ante, tempus et cursus v', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012270816579.jpg', '2021-01-08 23:18:27');
INSERT INTO `news` VALUES (27, 'หัวข้อข่าวที่ 11 ทดสอบ', 'สรุปข่าว 11', 'รายละเอียดข่าวที่ 11', 'เจ้าหน้าที่ วัดนครสวรรค์พระอารามหลวง', '161012275455474.jpg', '2021-01-08 23:19:13');

-- ----------------------------
-- Table structure for pavilion
-- ----------------------------
DROP TABLE IF EXISTS `pavilion`;
CREATE TABLE `pavilion`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pavilion_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_sala` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `booking_d_strat` datetime(0) NOT NULL,
  `booking_d_stop` datetime(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pavilion
-- ----------------------------
INSERT INTO `pavilion` VALUES (4, '161011950939286.jpg', 'ศาลาที่ 1', '1500', 'full', '2021-05-29 17:55:00', '2021-06-04 17:55:00');
INSERT INTO `pavilion` VALUES (5, '161011952053353.jpg', 'ศาลาที่ 2', '2000', 'full', '2021-05-29 18:25:00', '2021-06-03 18:25:00');
INSERT INTO `pavilion` VALUES (6, '161011954633769.jpg', 'ศาลาที่ 3', '2500', 'full', '2016-01-01 10:26:00', '2021-07-03 10:26:00');
INSERT INTO `pavilion` VALUES (7, '16101195647154.jpg', 'ศาลาที่ 4', '3000', 'full', '2017-01-01 10:27:00', '2021-07-02 10:27:00');
INSERT INTO `pavilion` VALUES (8, '161010244328521.jpg', 'ศาลาที่ 5', '3500', 'full', '2018-01-01 10:29:00', '2021-07-10 10:29:00');
INSERT INTO `pavilion` VALUES (9, '161011942267882.jpg', 'ศาลาที่ 6', '4000', 'empty', '2021-05-29 17:41:00', '2021-06-23 17:41:00');

-- ----------------------------
-- Table structure for pma__bookmark
-- ----------------------------
DROP TABLE IF EXISTS `pma__bookmark`;
CREATE TABLE `pma__bookmark`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Bookmarks' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__bookmark
-- ----------------------------

-- ----------------------------
-- Table structure for pma__central_columns
-- ----------------------------
DROP TABLE IF EXISTS `pma__central_columns`;
CREATE TABLE `pma__central_columns`  (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_length` text CHARACTER SET utf8 COLLATE utf8_bin NULL,
  `col_collation` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT '',
  `col_default` text CHARACTER SET utf8 COLLATE utf8_bin NULL,
  PRIMARY KEY (`db_name`, `col_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Central list of columns' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__central_columns
-- ----------------------------

-- ----------------------------
-- Table structure for pma__column_info
-- ----------------------------
DROP TABLE IF EXISTS `pma__column_info`;
CREATE TABLE `pma__column_info`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `db_name`(`db_name`, `table_name`, `column_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Column information for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__column_info
-- ----------------------------

-- ----------------------------
-- Table structure for pma__designer_settings
-- ----------------------------
DROP TABLE IF EXISTS `pma__designer_settings`;
CREATE TABLE `pma__designer_settings`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `settings_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Settings related to Designer' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__designer_settings
-- ----------------------------

-- ----------------------------
-- Table structure for pma__export_templates
-- ----------------------------
DROP TABLE IF EXISTS `pma__export_templates`;
CREATE TABLE `pma__export_templates`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `template_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `u_user_type_template`(`username`, `export_type`, `template_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Saved export templates' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__export_templates
-- ----------------------------

-- ----------------------------
-- Table structure for pma__favorite
-- ----------------------------
DROP TABLE IF EXISTS `pma__favorite`;
CREATE TABLE `pma__favorite`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tables` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Favorite tables' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__favorite
-- ----------------------------

-- ----------------------------
-- Table structure for pma__history
-- ----------------------------
DROP TABLE IF EXISTS `pma__history`;
CREATE TABLE `pma__history`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `sqlquery` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `username`(`username`, `db`, `table`, `timevalue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'SQL history for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__history
-- ----------------------------

-- ----------------------------
-- Table structure for pma__navigationhiding
-- ----------------------------
DROP TABLE IF EXISTS `pma__navigationhiding`;
CREATE TABLE `pma__navigationhiding`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`, `item_name`, `item_type`, `db_name`, `table_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Hidden items of navigation tree' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__navigationhiding
-- ----------------------------

-- ----------------------------
-- Table structure for pma__pdf_pages
-- ----------------------------
DROP TABLE IF EXISTS `pma__pdf_pages`;
CREATE TABLE `pma__pdf_pages`  (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`) USING BTREE,
  INDEX `db_name`(`db_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'PDF relation pages for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__pdf_pages
-- ----------------------------

-- ----------------------------
-- Table structure for pma__recent
-- ----------------------------
DROP TABLE IF EXISTS `pma__recent`;
CREATE TABLE `pma__recent`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tables` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Recently accessed tables' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__recent
-- ----------------------------

-- ----------------------------
-- Table structure for pma__relation
-- ----------------------------
DROP TABLE IF EXISTS `pma__relation`;
CREATE TABLE `pma__relation`  (
  `master_db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`, `master_table`, `master_field`) USING BTREE,
  INDEX `foreign_field`(`foreign_db`, `foreign_table`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Relation table' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__relation
-- ----------------------------

-- ----------------------------
-- Table structure for pma__savedsearches
-- ----------------------------
DROP TABLE IF EXISTS `pma__savedsearches`;
CREATE TABLE `pma__savedsearches`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `u_savedsearches_username_dbname`(`username`, `db_name`, `search_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Saved searches' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__savedsearches
-- ----------------------------

-- ----------------------------
-- Table structure for pma__table_coords
-- ----------------------------
DROP TABLE IF EXISTS `pma__table_coords`;
CREATE TABLE `pma__table_coords`  (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`db_name`, `table_name`, `pdf_page_number`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Table coordinates for phpMyAdmin PDF output' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__table_coords
-- ----------------------------

-- ----------------------------
-- Table structure for pma__table_info
-- ----------------------------
DROP TABLE IF EXISTS `pma__table_info`;
CREATE TABLE `pma__table_info`  (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`, `table_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Table information for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__table_info
-- ----------------------------

-- ----------------------------
-- Table structure for pma__table_uiprefs
-- ----------------------------
DROP TABLE IF EXISTS `pma__table_uiprefs`;
CREATE TABLE `pma__table_uiprefs`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `prefs` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `last_update` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`username`, `db_name`, `table_name`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Tables\' UI preferences' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__table_uiprefs
-- ----------------------------

-- ----------------------------
-- Table structure for pma__tracking
-- ----------------------------
DROP TABLE IF EXISTS `pma__tracking`;
CREATE TABLE `pma__tracking`  (
  `db_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `version` int UNSIGNED NOT NULL,
  `date_created` datetime(0) NOT NULL,
  `date_updated` datetime(0) NOT NULL,
  `schema_snapshot` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `schema_sql` text CHARACTER SET utf8 COLLATE utf8_bin NULL,
  `data_sql` longtext CHARACTER SET utf8 COLLATE utf8_bin NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') CHARACTER SET utf8 COLLATE utf8_bin NULL DEFAULT NULL,
  `tracking_active` int UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`db_name`, `table_name`, `version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Database changes tracking for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__tracking
-- ----------------------------

-- ----------------------------
-- Table structure for pma__userconfig
-- ----------------------------
DROP TABLE IF EXISTS `pma__userconfig`;
CREATE TABLE `pma__userconfig`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp(0) NOT NULL DEFAULT current_timestamp(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `config_data` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'User preferences storage for phpMyAdmin' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__userconfig
-- ----------------------------

-- ----------------------------
-- Table structure for pma__usergroups
-- ----------------------------
DROP TABLE IF EXISTS `pma__usergroups`;
CREATE TABLE `pma__usergroups`  (
  `usergroup` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`, `tab`, `allowed`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'User groups with configured menu items' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__usergroups
-- ----------------------------

-- ----------------------------
-- Table structure for pma__users
-- ----------------------------
DROP TABLE IF EXISTS `pma__users`;
CREATE TABLE `pma__users`  (
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`, `usergroup`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_bin COMMENT = 'Users and their assignments to user groups' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pma__users
-- ----------------------------

-- ----------------------------
-- Table structure for receipt
-- ----------------------------
DROP TABLE IF EXISTS `receipt`;
CREATE TABLE `receipt`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `Receipt_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `all_rentals` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Total_price` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of receipt
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title_name` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_level` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = 'ตารางข้อมูลผู้ใช้' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'admin', '1234', 'นาย', 'เจ้าหน้าที่', 'วัดนครสวรรค์พระอารามหลวง', 'thanakon.in@nsru.ac.th', '0834253942', 'a', '2020-11-09 14:25:10');
INSERT INTO `user` VALUES (2, 'manager', '1234', 'นาย', 'ผู้บริหาร', 'วัดนครสวรรค์พระอารามหลวง', 'thanakonintakun@gmail.com', '0848957019', 'ma', '2020-11-09 14:29:07');
INSERT INTO `user` VALUES (3, 'people', '1234', 'นาย', 'mom', 'intakun', 'kokokokk@gmail.com', '0619999999', 'p', '2020-11-09 14:30:39');

SET FOREIGN_KEY_CHECKS = 1;
