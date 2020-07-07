-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2020 at 10:32 AM
-- Server version: 5.7.23
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

DROP TABLE IF EXISTS `chat_message`;
CREATE TABLE IF NOT EXISTS `chat_message` (
  `chat_message_id` int(12) NOT NULL AUTO_INCREMENT,
  `to_user_id` int(12) NOT NULL,
  `from_user_id` int(12) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`chat_message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 13, 12, 'hey', '2020-07-07 09:49:22', 1),
(2, 14, 12, 'hey\nHow\'s you!', '2020-07-07 09:49:53', 1),
(3, 12, 14, 'Hii', '2020-07-07 09:56:25', 1),
(4, 12, 14, 'hii', '2020-07-07 09:57:23', 1),
(5, 12, 14, '', '2020-07-07 09:57:40', 1),
(6, 14, 12, 'hii', '2020-07-07 09:58:48', 1),
(7, 13, 12, '', '2020-07-07 09:58:59', 1),
(8, 14, 12, '', '2020-07-07 09:59:10', 1),
(9, 12, 14, 'hey', '2020-07-07 10:10:15', 1),
(10, 13, 12, 'hey! Listen', '2020-07-07 10:13:25', 1),
(11, 14, 12, 'hey! listen', '2020-07-07 10:13:59', 1),
(12, 12, 14, 'oye sun', '2020-07-07 10:14:52', 1),
(13, 12, 14, 'oye', '2020-07-07 10:14:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` char(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `UserEmail`, `username`, `password`) VALUES
(12, 'sunainasachdeva2306@gmail.com', 'sunaina', '$2y$12$yQ3n2wviA33kpsyrSSkLPeSM8og2S1xItI7YnDmrpO1fPIdQd0sLi'),
(13, 'KANUPRIYA8130@GMAIL.COM', 'kanupriya', '$2y$12$V8YUDbe1ZLwoAh50G99d6.0Y6qa2KYBm4GcqlTJV8iXtpqoHbmOwm'),
(14, 'vishal@gmail.com', 'vishal', '$2y$12$o2scCs03YfO18w1LJEsFLe9xyNEVYXXrINQETwYUClyTZvNXdhnxS'),
(15, 'vishal56@gmail.com', 'vishal56', '$2y$12$BtjgwVq1XRQ1ICiNo5L2C.H5xckKnDJXi7H.LmZDfgL3iT9bFckky');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
CREATE TABLE IF NOT EXISTS `login_details` (
  `login_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL,
  PRIMARY KEY (`login_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 5, '2020-07-03 10:46:57', 'no'),
(2, 12, '2020-07-04 09:29:41', 'no'),
(3, 12, '2020-07-04 09:31:15', 'no'),
(4, 12, '2020-07-04 09:38:22', 'no'),
(5, 12, '2020-07-04 09:38:36', 'no'),
(6, 12, '2020-07-04 09:43:35', 'no'),
(7, 15, '2020-07-04 09:44:47', 'no'),
(8, 12, '2020-07-04 09:45:08', 'no'),
(9, 12, '2020-07-04 09:59:10', 'no'),
(10, 12, '2020-07-04 10:02:11', 'no'),
(11, 12, '2020-07-04 10:15:32', 'no'),
(12, 14, '2020-07-04 10:16:45', 'no'),
(13, 12, '2020-07-04 10:28:01', 'no'),
(14, 15, '2020-07-04 10:38:17', 'no'),
(15, 12, '2020-07-05 09:56:25', 'no'),
(16, 12, '2020-07-06 09:57:15', 'no'),
(17, 15, '2020-07-06 09:57:49', 'no'),
(18, 12, '2020-07-06 10:07:16', 'no'),
(19, 12, '2020-07-06 10:12:47', 'no'),
(20, 15, '2020-07-06 10:41:56', 'no'),
(21, 12, '2020-07-07 09:50:05', 'no'),
(22, 14, '2020-07-07 09:58:40', 'no'),
(23, 12, '2020-07-07 10:09:33', 'no'),
(24, 14, '2020-07-07 10:10:23', 'no'),
(25, 12, '2020-07-07 10:13:27', 'no'),
(26, 12, '2020-07-07 10:14:03', 'no'),
(27, 14, '2020-07-07 10:15:27', 'no'),
(28, 12, '2020-07-07 10:27:53', 'no');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
