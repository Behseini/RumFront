-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 21, 2018 at 04:52 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usertitle` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userlastname` varchar(80) NOT NULL,
  `userbirthyear` int(4) NOT NULL,
  `userbirthmonth` varchar(9) NOT NULL,
  `userbirthday` int(2) NOT NULL,
  `useremail` varchar(80) NOT NULL,
  `userphone` varchar(16) NOT NULL,
  `userbuzz` int(10) DEFAULT NULL,
  `userunitno` int(6) DEFAULT NULL,
  `userbuildingno` varchar(12) NOT NULL,
  `userstreet` varchar(100) NOT NULL,
  `usercity` varchar(50) NOT NULL,
  `userpostal` varchar(7) NOT NULL,
  `userpassword` varchar(80) NOT NULL,
  `isconfirmed` int(1) NOT NULL DEFAULT '0',
  `registeredat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` int(1) NOT NULL DEFAULT '0',
  `ip` varchar(20) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userpassword` (`userpassword`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
