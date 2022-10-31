-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2022 at 01:49 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutora`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE IF NOT EXISTS `bookmark` (
  `bookmark_ID` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(50) NOT NULL,
  `User_id` int(11) NOT NULL,
  PRIMARY KEY (`bookmark_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`bookmark_ID`, `course_id`, `User_id`) VALUES
(1, 2211, 22005024),
(3, 2214, 22005024),
(4, 2215, 22005024),
(5, 2211, 22005025);

-- --------------------------------------------------------

--
-- Table structure for table `createcourse`
--

DROP TABLE IF EXISTS `createcourse`;
CREATE TABLE IF NOT EXISTS `createcourse` (
  `SCourse_id` int(50) NOT NULL AUTO_INCREMENT,
  `Course_Name` varchar(50) DEFAULT NULL,
  `discription` varchar(1000) DEFAULT NULL,
  `covering_area` varchar(1000) DEFAULT NULL,
  `benifit` varchar(1000) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `time_duration` varchar(1000) DEFAULT NULL,
  `publish` tinyint(1) DEFAULT NULL,
  `free` int(1) NOT NULL DEFAULT 0,
  `L-id` int(11) NOT NULL,
  PRIMARY KEY (`SCourse_id`),
  KEY `L-id` (`L-id`)
) ENGINE=InnoDB AUTO_INCREMENT=2217 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createcourse`
--

INSERT INTO `createcourse` (`SCourse_id`, `Course_Name`, `discription`, `covering_area`, `benifit`, `cost`, `time_duration`, `publish`, `free`, `L-id`) VALUES
(2211, 'web application ', 'web development', 'php,html,js,css,sql', 'It generates content such as the user interface and client-side logic that the web browser requires', 1000, '10 week', 1, 0, 22006),
(2212, 'PHP', 'php', 'php', 'php', 1000, '10 week', 1, 1, 22005),
(2213, 'php', 'php', 'php', 'php', 1000, '5 week', 0, 0, 22006),
(2214, 'Introduction for photography', 'The fastest way to get off Auto mode and unlock the creative potential of your camera', 'The fastest way to get off Auto mode and unlock the creative potential of your camera', 'The fastest way to get off Auto mode and unlock the creative potential of your camera', 1000, '5 week', 1, 0, 22006),
(2215, 'course 1', 'course 1 discription', 'course 1 covering area', 'course1 benifits', 1000, '10 week', 1, 0, 22007),
(2216, 'course 2', 'Course Discription', 'Course Covering Area', 'Course Covering Area', 1000, '5 week', 1, 0, 22007);

-- --------------------------------------------------------

--
-- Table structure for table `deg_stu`
--

DROP TABLE IF EXISTS `deg_stu`;
CREATE TABLE IF NOT EXISTS `deg_stu` (
  `dstu_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `DoB` date DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `select_course` varchar(50) DEFAULT NULL,
  `account_details` int(11) DEFAULT NULL,
  PRIMARY KEY (`dstu_id`),
  KEY `dg_stu_fk` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(200) NOT NULL AUTO_INCREMENT,
  `lesson_id` int(11) DEFAULT NULL,
  `Course_id` int(50) DEFAULT NULL,
  `file_name` varchar(50) DEFAULT NULL,
  `path` varchar(50) NOT NULL,
  `file_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  KEY `Course_id` (`Course_id`),
  KEY `lesson_id` (`lesson_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `lesson_id`, `Course_id`, `file_name`, `path`, `file_type`) VALUES
(45, 22, 2211, 'php file 1', 'euWDCIke9XkmuBXEHsnc.pdf', 'pdf'),
(46, 23, 2215, 'topic1', 'ch2tTRj2glKIIrRray2M.docx', 'docx'),
(47, 23, 2215, 'topic 2', 'GWWyC90muPy4wrH7hlV1.pdf', 'pdf'),
(48, 24, 2215, 'topic1', '2ZRAhYkV7iJ4nGlnKi0y.docx', 'docx'),
(49, 24, 2215, 'topic 2', 'xBMTbn2fZixqJCwM6Srf.docx', 'docx'),
(50, 27, 2216, 'topic1', 'xJzcDiNv2KH6tPNLHSCO.docx', 'docx');

-- --------------------------------------------------------

--
-- Table structure for table `free_course`
--

DROP TABLE IF EXISTS `free_course`;
CREATE TABLE IF NOT EXISTS `free_course` (
  `freeC_id` int(50) NOT NULL AUTO_INCREMENT,
  `course_id` int(50) NOT NULL,
  `time_duration` timestamp NOT NULL DEFAULT current_timestamp(),
  `free_weeks` int(11) NOT NULL,
  PRIMARY KEY (`freeC_id`),
  UNIQUE KEY `course_id_2` (`course_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

DROP TABLE IF EXISTS `lecture`;
CREATE TABLE IF NOT EXISTS `lecture` (
  `lec_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lec_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22008 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lec_id`, `full_name`, `email`, `password`, `country`, `path`) VALUES
(22005, 'buddhila bhanu', 'buddhilabhanu@gmail.com', '12345678', 'Sri Lanka', 'OVnxWivKCQah8hWCIETr.jpg'),
(22006, 'udana ekanayaka', 'udana@gmail.com', '12345678', 'Sri Lanka', 'dCZSRiWmy8inj3lIN119.png'),
(22007, 'lecture 1', 'lecture1@gmail.com', '12345678', 'Sri Lanka', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

DROP TABLE IF EXISTS `lessons`;
CREATE TABLE IF NOT EXISTS `lessons` (
  `lesson_id` int(11) NOT NULL AUTO_INCREMENT,
  `SCourse_id` int(50) DEFAULT NULL,
  `lesson_name` varchar(100) DEFAULT NULL,
  `l_date` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`lesson_id`),
  KEY `SCourse_id` (`SCourse_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `SCourse_id`, `lesson_name`, `l_date`) VALUES
(22, 2211, 'php lesson 1', '2022-06-19 13:17:06'),
(23, 2215, 'lesson 1', '2022-06-20 06:21:46'),
(24, 2215, 'lesson2', '2022-06-20 06:22:50'),
(25, 2215, 'lesson 3', '2022-06-20 06:23:02'),
(26, 2215, 'lesson 4', '2022-06-20 06:23:19'),
(27, 2216, 'lesson 1', '2022-06-20 08:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `log_id` int(11) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `code` int(1) DEFAULT NULL,
  PRIMARY KEY (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`num`, `log_id`, `password`, `code`) VALUES
(1, 2222, '123456', 1),
(4, 22005, '12345678', 1),
(8, 22007, '12345678', 1),
(5, 1955, 'bhanu', 2),
(6, 22005024, '123456', 0),
(7, 22006, '12345678', 1),
(9, 22005025, '12345678', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `rev_id` int(11) NOT NULL AUTO_INCREMENT,
  `User_id` int(11) NOT NULL,
  `SC_id` int(50) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`rev_id`),
  KEY `User_id` (`User_id`),
  KEY `SC_id` (`SC_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`rev_id`, `User_id`, `SC_id`, `review`, `date`) VALUES
(1, 22005007, 2204, 'its very helpfull and understanderble', '2022-06-17 21:07:14'),
(2, 22005008, 2204, 'grade', '2022-06-17 21:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `sc_stu`
--

DROP TABLE IF EXISTS `sc_stu`;
CREATE TABLE IF NOT EXISTS `sc_stu` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `select_course` int(50) DEFAULT NULL,
  `account_details` int(11) DEFAULT NULL,
  `sell` int(1) NOT NULL,
  PRIMARY KEY (`stu_id`),
  KEY `Sc_stu_fk` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sc_stu`
--

INSERT INTO `sc_stu` (`stu_id`, `user_id`, `full_name`, `email`, `address`, `select_course`, `account_details`, `sell`) VALUES
(1, 22005001, 'k.k.k.kkk', 'kkk@kkk.com', '405/12 udupila north delgoda', 2204, 12345678, 1),
(2, 22005001, 'k.k.k.kkk', 'kkk@kkk.com', '405/12 udupila north delgoda', 2207, 12345678, 1),
(3, 22005008, 'www.wwww', 'www@www.com', '405/12 udupila north delgoda', 2207, 0, 1),
(4, 22005024, 'free', 'zzz@z342zz.co', '405/12 udupila north delgoda', 2211, 0, 1),
(5, 22005024, 'free', 'zzz@z342zz.co', '405/12 udupila north delgoda', 2212, 0, 1),
(6, 22005024, 'free', 'zzz@z342zz.co', '405/12 udupila north delgoda', 2214, 0, 1),
(7, 22005024, 'free', 'zzz@z342zz.co', '405/12 udupila north delgoda', 2215, 0, 1),
(8, 22005025, 'buddhila', 'bb@bb.com', '405/12 udupila north delgoda', 2211, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shortcourse`
--

DROP TABLE IF EXISTS `shortcourse`;
CREATE TABLE IF NOT EXISTS `shortcourse` (
  `SCourse_id` int(11) NOT NULL AUTO_INCREMENT,
  `Course_Name` varchar(50) DEFAULT NULL,
  `discription` varchar(1000) DEFAULT NULL,
  `covering_area` varchar(1000) DEFAULT NULL,
  `benifit` varchar(1000) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `time_duration` varchar(1000) DEFAULT NULL,
  `L_id` int(11) DEFAULT NULL,
  `free` tinyint(1) NOT NULL,
  PRIMARY KEY (`SCourse_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_d`
--

DROP TABLE IF EXISTS `user_d`;
CREATE TABLE IF NOT EXISTS `user_d` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `account_details` int(11) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22005026 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_d`
--

INSERT INTO `user_d` (`user_id`, `full_name`, `email`, `password`, `country`, `account_details`, `gender`, `path`) VALUES
(22005025, 'buddhila', 'bb@bb.com', '12345678', 'Sri Lanka', 0, 'male', 'profilepic/5437683.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `createcourse`
--
ALTER TABLE `createcourse`
  ADD CONSTRAINT `createcourse_ibfk_1` FOREIGN KEY (`L-id`) REFERENCES `lecture` (`lec_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`Course_id`) REFERENCES `lessons` (`SCourse_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `files_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `free_course`
--
ALTER TABLE `free_course`
  ADD CONSTRAINT `free_course_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `createcourse` (`SCourse_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`SCourse_id`) REFERENCES `createcourse` (`SCourse_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
