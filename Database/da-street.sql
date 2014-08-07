-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2013 at 04:18 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `da-street`
--

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE IF NOT EXISTS `leaders` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `networth` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ltp`
--

CREATE TABLE IF NOT EXISTS `ltp` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `open_price` decimal(11,2) NOT NULL,
  `buy_weight` int(11) NOT NULL,
  `sell_weight` int(11) NOT NULL,
  `current_price` decimal(10,2) unsigned NOT NULL,
  `volume` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `ltp`
--

INSERT INTO `ltp` (`id`, `open_price`, `buy_weight`, `sell_weight`, `current_price`, `volume`) VALUES
(1, '2088.00', 271015244, 296768997, '2088.24', 567784241),
(2, '370.00', 4151206, 3536732, '431.45', 7687938),
(3, '242.00', 3043119, 2840011, '262.31', 5883130),
(4, '454.00', 4934625, 4801423, '467.32', 9464064),
(5, '391.00', 2289373, 4222222, '391.07', 6511595),
(6, '1611.00', 233153411, 235589120, '1367.43', 466133264),
(7, '386.00', 4227343, 5766666, '386.99', 9994009),
(8, '959.00', 10013152, 10880513, '872.26', 20893665),
(9, '736.00', 9355678, 1000000, '736.48', 10355678),
(10, '1685.00', 99802984, 11524027, '1685.42', 111327011),
(11, '132.00', 640671, 744000, '121.67', 1317762),
(12, '554.00', 3748821, 3566012, '572.28', 7042318),
(13, '1340.00', 21616818, 21065151, '1395.17', 42681969),
(14, '2467.00', 176347412, 180547855, '2046.96', 356793428),
(15, '359.00', 894954, 238735, '424.62', 1116772),
(16, '423.00', 2933633, 2915551, '424.81', 5412664),
(17, '1700.00', 62882939, 62539251, '1734.37', 122724890),
(18, '1411.00', 109022176, 108558033, '1457.41', 214654687),
(19, '1060.00', 7230182, 6982172, '1084.80', 14212354),
(20, '177.00', 775857, 693587, '178.17', 1381239),
(21, '384.00', 1480622, 1359688, '396.09', 2840310),
(22, '955.00', 8919387, 8767739, '970.16', 17387075),
(23, '1891.00', 268445616, 271502617, '1585.30', 539868569),
(24, '116.00', 363139, 440000, '108.31', 803139),
(25, '879.00', 5619349, 6429218, '798.01', 12008865),
(26, '328.00', 7787244, 8220152, '284.71', 15979207),
(27, '107.00', 274286, 333333, '101.10', 607619),
(28, '429.00', 1446136, 2222222, '351.39', 3668358),
(29, '1644.00', 49451283, 51390179, '1450.11', 98003107),
(30, '496.00', 3075688, 3299483, '473.62', 6375171);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(34) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `college` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=266 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
