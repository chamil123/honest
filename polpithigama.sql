-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2018 at 12:12 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polpithigama`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_tittle` int(11) DEFAULT NULL,
  `member_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `member_image` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `member_status` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `member_class_id` int(11) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `fk_member_member_classs_idx` (`member_class_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `member_tittle`, `member_name`, `member_image`, `member_status`, `member_class_id`) VALUES
(1, 1, 'à¶’. à¶‘à¶¸à·Š. à¶œà·à¶¸à·’à¶«à·“ à¶…à¶­à¶´à¶­à·Šà¶­à·” à¶¸à·„à¶­à·', '../../uploads/182112110310012.jpg', 'active', 1),
(2, 1, 'à¶©à¶¶à·Š. à¶‘à¶¸à·Š. à·€à·’à¶¢à·šà·ƒà·–à¶»à·’à¶º à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 2),
(3, 1, 'à¶†à¶»à·Š à¶‘à¶¸à·Š. à¶­à·’à¶½à¶šà·Š à·€à·ƒà¶±à·Šà¶­ à¶šà·”à¶¸à·à¶» à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(4, 1, 'à¶©à¶¶à·Š. à¶†à¶»à·Š. à¶‘à¶ à·Š. à¶‘à¶¸à·Š à¶¢à¶ºà·€à¶»à·Šà¶°à¶± à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(5, 1, 'à¶‘à¶ à·Š. à¶’ à¶…à¶±à·”à¶» à¶œà·à¶¸à·’à¶«à·“ à·„à·™à¶§à·Šà¶§à·’à¶†à¶»à¶ à·Šà¶ à·’ à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(6, 1, 'à¶¢à·š. à¶‘à¶¸à·Š. à¶§à·“. à¶¶à·“. à¶¢à¶ºà·€à¶»à·Šà¶°à¶± à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(7, 1, 'à¶‘à¶ à·Š à¶‘à¶¸à·Š. à·€à·ƒà¶±à·Šà¶­ à¶’à¶šà¶±à·à¶ºà¶š à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(8, 1, 'à¶‘à·ƒà·Š. à¶¢à·“. à¶»à¶‚à¶œà¶± à¶´à·”à·‚à·Šà¶´à¶šà·”à¶¸à·à¶» à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 3),
(9, 1, 'à¶¢à·“. à¶°à¶¸à·Šà¶¸à·’à¶š à¶´à·™à¶»à·šà¶»à· à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 4),
(10, 1, 'à¶šà·š. à¶‘à¶¸à·Š. à·ƒà¶¸à¶±à·Š à¶…à¶¶à·šà·ƒà·’à¶‚à·„ à¶¸à·„à¶­à·', '../../uploads/181712112902014.jpg', 'active', 5),
(11, 2, 'à¶Š.à¶¢à·“. à¶šà¶»à·”à¶«à·à¶»à¶­à·Šà¶± à¶¸à·„à¶­à·', '../../uploads/181912062016013.jpg', 'active', 6),
(12, 2, 'à¶‘à¶±à·Š. à¶…à¶ºà·’. à¶¸à·”à¶«à·ƒà·’à¶‚à·„ à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 7),
(13, 2, 'à¶†à¶»à·Š. à¶©à·“. à¶¸à·„à·šà·‚à·Š à·„à¶»à·Šà·‚à¶« à·€à·’à¶šà·Šâ€à¶»à¶¸à·ƒà·’à¶‚à·„ à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 8),
(14, 2, 'à¶’. à¶‘à¶ à·Š. à¶¸à·à·„à¶±à·Š à¶­à·’à¶½à¶šà·ƒà·’à¶»à·’ à¶´à·™à¶»à·šà¶»à· à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 9),
(15, 2, 'à¶©à¶¶à·Š. à¶‘à¶¸à·Š. à·ƒà·”à¶¸à·’à¶±à·Šà¶¯ à·€à·’à¶¢à·šà¶šà·à¶±à·Š à¶¸à·„à¶­à·', '../../uploads/default-user.png', 'active', 10),
(16, 2, 'à¶Š. à¶‘à¶¸à·Š. à¶‘à·ƒà·Š. à¶šà·š. à¶’à¶šà¶±à·à¶ºà¶š à¶¸à·’à¶º', '../../uploads/default-user.png', 'active', 11),
(17, 2, 'à·€à·“. à¶†à¶»à·Š. à·à·Šâ€à¶ºà·à¶¸à¶½à·’ à¶°à¶¸à·Šà¶¸à·’à¶šà· à¶»à¶«à·ƒà·’à¶‚à·„ à¶¸à·„à¶­à·Šà¶¸à·’à¶º', '../../uploads/default-user.png', 'active', 12),
(18, 2, 'à¶šà·š. à¶’. à¶±à¶ºà¶±à· à¶ à·’à¶­à·Šâ€à¶»à·à¶‚à¶œà¶±à·“ à¶¸à·„à¶­à·Šà¶¸à·’à¶º', '../../uploads/default-user.png', 'active', 12);

-- --------------------------------------------------------

--
-- Table structure for table `member_classs`
--

DROP TABLE IF EXISTS `member_classs`;
CREATE TABLE IF NOT EXISTS `member_classs` (
  `member_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_class_name` varchar(255) NOT NULL,
  `member_class_type` int(11) NOT NULL,
  PRIMARY KEY (`member_class_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member_classs`
--

INSERT INTO `member_classs` (`member_class_id`, `member_class_name`, `member_class_type`) VALUES
(1, 'à¶œà¶»à·” à·ƒà¶·à·à¶´à¶­à·’', 1),
(2, 'à¶œà¶»à·” à¶‹à¶´ à·ƒà¶·à·à¶´à¶­à·’', 1),
(3, 'à¶œà¶»à·” à¶…à¶°à·Šâ€à¶ºà¶šà·Šà·‚', 1),
(4, 'à·ƒà¶¸à·–. à·ƒà¶‚. à¶´à·Šâ€à¶»à·. à¶±à·’à¶½à¶°à·à¶»à·“', 1),
(5, 'à¶½à·šà¶šà¶¸à·Š', 1),
(6, 'à·ƒà·à¶¸à·à¶±à·Šâ€à¶ºà·à¶°à·’à¶šà·à¶»à·“', 2),
(7, 'à¶œà¶«à¶šà·à¶°à·’à¶šà·à¶»à·“', 2),
(8, 'à¶¶à·à¶‚à¶šà·” à·ƒà·šà·€à· à¶šà·…à¶¸à¶«à·à¶šà¶»à·”', 2),
(9, 'à·€à·à¶«à·’à¶¢ à¶šà·…à¶¸à¶«à·à¶šà¶»à·”', 2),
(10, 'à¶šà·œà¶±à·Šà¶­à·Šâ€à¶»à·à¶­à·Š à¶šà·…à¶¸à¶«à·à¶šà¶»à·” (à·ƒà·à¶´à¶ºà·”à¶¸à·Š à¶±à·’à¶½à¶°à·à¶»à·“)', 2),
(11, 'à¶¸à·à¶±à·€ à·ƒà¶¸à·Šà¶´à¶­à·Š à¶šà·…à¶¸à¶«à·à¶šà¶»à·”', 2),
(12, 'à¶…à¶·à·Šâ€à¶ºà¶±à·Šà¶­à¶» à·€à·’à¶œà¶«à¶š (à¶œà·Šâ€à¶»à·à¶¸à·“à¶º à¶¶à·à¶‚à¶šà·”)', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
