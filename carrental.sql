-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2021 at 03:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(10) NOT NULL,
  `car_image` varchar(100) DEFAULT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_category` varchar(50) NOT NULL,
  `car_brand` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_seatingcapacity` varchar(50) NOT NULL,
  `cust_drivinglicenseno` varchar(50) NOT NULL,
  `driver_licenseno` int(10) DEFAULT NULL,
  `car_dailycharge` int(11) DEFAULT NULL,
  `car_monthlycharge` int(50) DEFAULT NULL,
  `bookingdate` datetime DEFAULT NULL,
  `actual_returndate` datetime DEFAULT NULL,
  `car_hourlycharge` int(50) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `bookingtime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `extract_returndate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `car_image`, `car_name`, `car_category`, `car_brand`, `car_model`, `car_seatingcapacity`, `cust_drivinglicenseno`, `driver_licenseno`, `car_dailycharge`, `car_monthlycharge`, `bookingdate`, `actual_returndate`, `car_hourlycharge`, `amount`, `bookingtime`, `status`, `payment`, `comment`, `extract_returndate`) VALUES
(5, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 14:49:00', '2021-07-02 14:49:00', 0, 0, '2021-05-02 14:52:11', NULL, NULL, NULL, NULL),
(6, '', 'dcv', 'Luxury', '', '', '0', '0', NULL, 0, 1000, '2021-05-02 14:52:00', '2021-07-02 14:52:00', 0, 0, '2021-05-02 14:52:44', NULL, NULL, NULL, NULL),
(7, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 14:54:00', '2021-07-02 14:54:00', 0, 0, '2021-05-02 14:54:36', NULL, NULL, NULL, NULL),
(8, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 14:57:00', '2021-07-02 14:57:00', 0, 0, '2021-05-02 14:57:43', NULL, NULL, NULL, NULL),
(9, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '0000-00-00 00:00:00', '2021-05-30 16:05:00', 0, 0, '2021-05-02 17:56:05', 'confirmed', '', NULL, NULL),
(10, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 17:58:00', '2021-08-04 19:58:00', 0, 3000, '2021-05-02 17:58:40', NULL, NULL, NULL, NULL),
(11, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 18:00:00', '2021-09-02 18:00:00', 0, 4000, '2021-05-02 18:00:44', NULL, NULL, NULL, NULL),
(12, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 18:02:00', '2021-08-02 18:02:00', 0, 3000, '2021-05-02 18:02:15', NULL, NULL, NULL, NULL),
(13, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 0, 1000, '2021-05-02 18:04:00', '2021-07-02 18:04:00', 0, 2000, '2021-05-02 18:05:02', NULL, NULL, NULL, NULL),
(14, '', 'dcv', 'Luxury', '', '', '0', '0', NULL, 100, 1000, '2021-05-02 18:11:00', '2021-07-03 18:11:00', 0, 1, '2021-05-02 18:11:53', NULL, NULL, NULL, NULL),
(15, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:17:00', '2021-07-03 18:17:00', 0, 0, '2021-05-02 18:18:00', NULL, NULL, NULL, NULL),
(16, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:19:00', '2021-07-03 18:19:00', 0, 0, '2021-05-02 18:20:00', NULL, NULL, NULL, NULL),
(17, '', 'dcv', 'Luxury', '', '', '0', '33', NULL, 100, 1000, '2021-05-02 18:20:00', '2021-07-03 18:20:00', 0, 0, '2021-05-02 18:20:57', NULL, NULL, NULL, NULL),
(18, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:21:00', '2021-07-03 18:22:00', 0, 0, '2021-05-02 18:22:12', NULL, NULL, NULL, NULL),
(19, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:24:00', '2021-07-03 18:24:00', 0, 0, '2021-05-02 18:24:54', NULL, NULL, NULL, NULL),
(20, '', 'dcv', 'Luxury', '', '', '0', '33', NULL, 100, 1000, '2021-05-02 18:28:00', '2021-07-03 18:28:00', 0, 0, '2021-05-02 18:28:22', NULL, NULL, NULL, NULL),
(21, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:33:00', '2021-07-03 18:33:00', 0, 0, '2021-05-02 18:33:25', NULL, NULL, NULL, NULL),
(22, '', 'dcv', 'Luxury', '', '', '0', '0', NULL, 100, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 2100, '2021-05-02 18:33:45', NULL, NULL, NULL, NULL),
(23, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:34:00', '2021-07-03 18:35:00', 0, 0, '2021-05-02 18:35:10', NULL, NULL, NULL, NULL),
(24, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:46:00', '2021-07-03 18:47:00', 0, 0, '2021-05-02 18:47:09', NULL, NULL, NULL, NULL),
(25, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:50:00', '2021-07-03 18:51:00', 0, 0, '2021-05-02 18:51:06', NULL, NULL, NULL, NULL),
(26, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 18:53:00', '2021-07-03 18:53:00', 0, 0, '2021-05-02 18:53:56', NULL, NULL, NULL, NULL),
(27, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 19:11:00', '2021-07-03 19:11:00', 0, 0, '2021-05-02 19:12:00', NULL, NULL, NULL, NULL),
(28, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 19:13:00', '2021-07-03 19:13:00', 0, 0, '2021-05-02 19:13:23', NULL, NULL, NULL, NULL),
(29, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 19:14:00', '2021-07-03 19:14:00', 0, 0, '2021-05-02 19:14:27', NULL, NULL, NULL, NULL),
(30, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 19:23:00', '2021-07-03 19:24:00', 0, 2100, '2021-05-02 19:25:50', NULL, NULL, NULL, NULL),
(31, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 20:03:00', '2021-07-03 21:03:00', 0, 2110, '2021-05-02 20:03:44', NULL, NULL, NULL, NULL),
(32, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 20:15:00', '2021-05-02 21:59:00', 10, 10, '2021-05-02 20:16:02', NULL, NULL, NULL, NULL),
(33, '', 'dcv', 'Luxury', '', '', '0', '0', NULL, 100, 1000, '2021-05-02 20:28:00', '2021-06-03 21:28:00', 10, 1110, '2021-05-02 20:28:21', NULL, NULL, NULL, NULL),
(34, '', 'dcv', 'Luxury', '', '', '0', '11', NULL, 100, 1000, '2021-05-02 20:42:00', '2021-06-03 21:47:00', 10, 1110, '2021-05-02 20:43:12', NULL, NULL, NULL, NULL),
(35, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', '33', NULL, 10000, 25000, '2021-05-02 21:53:00', '2021-06-03 21:53:00', 1000, 35000, '2021-05-02 20:54:06', NULL, NULL, NULL, NULL),
(36, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', '22', NULL, 10000, 25000, '2021-05-02 20:55:00', '2021-06-03 21:57:00', 1000, 36000, '2021-05-02 20:55:59', NULL, NULL, NULL, NULL),
(37, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', '333', NULL, 10000, 25000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1000, 0, '2021-05-04 19:34:01', 'confirmed', '', NULL, NULL),
(38, '', 'gg', 'Luxury', 'ff', 'ff', '4', '333', NULL, 44, 444, '2021-05-07 09:51:00', '2021-05-09 09:51:00', 44, 88, '2021-05-07 09:52:16', NULL, NULL, NULL, NULL),
(39, '', 'aa', 'Luxury', 'ff', 'ff', '3', '333', NULL, 44, 444, '2021-05-08 14:52:00', '2021-05-09 14:53:00', 44, 44, '2021-05-07 14:53:09', NULL, NULL, NULL, NULL),
(40, '', 'dd', 'Luxury', 'gg', 'dd', '8', '99990', NULL, 2, 6, '2021-05-09 18:31:00', '2021-05-10 18:31:00', 3, 2, '2021-05-09 18:31:14', NULL, NULL, NULL, NULL),
(41, '', 'gg', 'Luxury', 'ff', 'ff', '4', '333', 66677, 44, 444, '2021-05-09 19:03:00', '2021-05-10 19:03:00', 44, 44000, '2021-05-09 19:03:51', NULL, NULL, NULL, NULL),
(42, '', 'gg', 'Luxury', 'ff', 'ff', '4', '99990', 66677, 44, 444, '2021-05-09 19:18:00', '2021-05-11 19:18:00', 44, 1088, '2021-05-09 19:18:36', NULL, NULL, NULL, NULL),
(43, '', 'gg', 'Luxury', 'ff', 'ff', '4', '99990', 66677, 44, 444, '2021-05-09 19:21:00', '2021-05-11 19:22:00', 44, 2088, '2021-05-09 19:22:11', NULL, NULL, NULL, NULL),
(44, '', 'aa', 'Luxury', 'ff', 'ff', '3', '333', 66677, 44, 444, '2021-05-09 19:25:00', '2021-05-09 21:25:00', 44, 688, '2021-05-09 19:25:47', NULL, NULL, NULL, NULL),
(45, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 14:24:47', NULL, NULL, NULL, NULL),
(46, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 14:25:58', NULL, NULL, NULL, NULL),
(47, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 14:28:20', NULL, NULL, NULL, NULL),
(48, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 14:29:16', NULL, NULL, NULL, NULL),
(49, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 20:49:45', NULL, NULL, NULL, NULL),
(50, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 20:52:42', 'confirmed', 'paid', 'rfff', NULL),
(51, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 20:58:00', 'confirmed', 'unpaid', 'gf', NULL),
(52, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 20:58:47', 'pending', NULL, 'llk', NULL),
(53, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 21:12:08', 'pending', NULL, 'test status', NULL),
(54, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 21:14:32', 'pending', NULL, 'test status hidden', NULL),
(55, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', 0, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 21:17:46', 'pending', NULL, 'test status hidden with driver', NULL),
(56, '', 'aa', 'Luxury', 'ff', 'aa', '4', '998776', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 21:28:33', 'confirmed', '', 'new', NULL),
(57, '', 'aa', 'Luxury', 'ff', 'aa', '4', '998776', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-12 21:58:11', 'confirmed', '', 'new', NULL),
(58, '', 'dd', 'Luxury', 'gg', 'dd', '8', '0', 0, 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, 0, '2021-05-12 21:58:35', 'pending', NULL, 'lknbv', NULL),
(59, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '2021-05-13 12:41:00', '2021-05-20 12:41:00', 44, 308, '2021-05-13 12:42:02', 'pending', NULL, '', NULL),
(60, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:43:20', 'pending', NULL, '', NULL),
(61, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:47:03', 'pending', NULL, '', NULL),
(62, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:48:36', 'pending', NULL, '', NULL),
(63, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:51:13', 'pending', NULL, '', NULL),
(64, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 12:54:59', 'confirmed', '', '', NULL),
(65, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:57:02', 'pending', NULL, '', NULL),
(66, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-15 12:43:00', 44, 220, '2021-05-13 12:59:15', 'pending', NULL, '', NULL),
(67, '16721.jpg', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '2021-05-14 13:07:00', 44, 176, '2021-05-13 13:07:04', 'pending', NULL, '', NULL),
(68, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:09:41', 'pending', NULL, '', NULL),
(69, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:11:44', 'pending', NULL, '', NULL),
(70, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:17:22', 'pending', NULL, '', NULL),
(71, '16708.jpg', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:21:42', 'pending', NULL, '', NULL),
(72, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:21:47', 'pending', NULL, '', NULL),
(73, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:25:01', 'pending', NULL, '', NULL),
(74, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:25:24', 'pending', NULL, '', NULL),
(75, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:26:08', 'pending', NULL, '', NULL),
(76, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:30:52', 'pending', NULL, '', NULL),
(77, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 13:32:45', 'pending', NULL, '', NULL),
(78, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '2021-05-13 15:35:00', '2021-05-17 15:35:00', 44, 176, '2021-05-13 13:34:17', 'confirmed', '', '', NULL),
(79, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 15:38:24', 'no', '', '', NULL),
(80, '', 'aa', 'Luxury', 'ff', 'ff', '3', '22', NULL, 44, 444, '2021-05-13 19:33:00', '2021-05-15 19:33:00', 44, 88, '2021-05-13 19:35:52', 'pending', NULL, 'test with cust', NULL),
(81, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 19:45:25', 'pending', NULL, '', NULL),
(82, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 19:45:59', 'pending', NULL, '', NULL),
(83, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 19:49:45', 'pending', NULL, '', NULL),
(84, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 19:52:29', 'pending', NULL, '', NULL),
(85, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:03:17', 'pending', NULL, '', NULL),
(86, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:06:53', 'pending', NULL, '', NULL),
(87, '', 'gg', 'Luxury', 'ff', 'ff', '4', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:08:31', 'pending', NULL, '', NULL),
(88, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:09:59', 'pending', NULL, '', NULL),
(89, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:18:00', 'pending', NULL, '', NULL),
(90, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:21:49', 'pending', NULL, '', NULL),
(91, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:22:54', 'pending', NULL, '', NULL),
(92, '', 'aa', 'Luxury', 'ff', 'ff', '3', '2147483647', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:24:56', 'pending', NULL, '', NULL),
(93, '', 'gg', 'Luxury', 'ff', 'ff', '4', '6666611', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 22:28:04', 'pending', NULL, '', NULL),
(94, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:21:16', 'pending', NULL, '', NULL),
(95, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:22:26', 'pending', NULL, '', NULL),
(96, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:23:55', 'pending', NULL, '', NULL),
(97, '', 'nn', 'Luxury', 'nn', 'nn', '8', '0', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:28:52', 'pending', NULL, '', NULL),
(98, '', 'nn', 'Luxury', 'nn', 'nn', '8', '0', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:33:41', 'pending', NULL, '', NULL),
(99, '', 'nn', 'Luxury', 'nn', 'nn', '8', '20202020', 0, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:35:06', 'pending', NULL, '', NULL),
(100, '', 'aa', 'Luxury', 'ff', 'ff', '3', '2', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:36:01', 'pending', NULL, '', NULL),
(101, '', 'nn', 'Luxury', 'nn', 'nn', '8', '0', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:37:16', 'pending', NULL, '', NULL),
(102, '', 'nn', 'Luxury', 'nn', 'nn', '8', '4', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:38:47', 'pending', NULL, '', NULL),
(103, '', 'aa', 'Luxury', 'ff', 'ff', '3', '97', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:42:20', 'pending', NULL, '', NULL),
(104, '', 'nn', 'Luxury', 'nn', 'nn', '8', '0', 0, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:43:10', 'pending', NULL, '', NULL),
(105, '', 'nn', 'Luxury', 'nn', 'nn', '8', '0', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-13 23:52:05', 'pending', NULL, '', NULL),
(106, '', 'aa', 'Luxury', 'ff', 'ff', '3', '21', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:54:15', 'pending', NULL, '', NULL),
(107, '', 'aa', 'Luxury', 'ff', 'ff', '3', '21', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:54:57', 'pending', NULL, '', NULL),
(108, '', 'aa', 'Luxury', 'ff', 'aa', '4', '21', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:57:03', 'pending', NULL, '', NULL),
(109, '', 'aa', 'Luxury', 'ff', 'ff', '3', '21', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-13 23:58:20', 'pending', NULL, '', NULL),
(110, '', 'gg', 'Luxury', 'ff', 'ff', '4', '2147483647', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 19:36:46', 'pending', NULL, '', NULL),
(111, '', 'aa', 'Luxury', 'ff', 'aa', '4', '2147483647', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 19:37:41', 'pending', NULL, '', NULL),
(112, '', 'nn', 'Luxury', 'nn', 'nn', '8', '2147483647', 0, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-14 19:38:58', 'pending', NULL, '', NULL),
(113, '', 'nn', 'Luxury', 'nn', 'nn', '8', '12345678', 0, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-14 19:44:30', 'pending', NULL, '', NULL),
(114, '', 'aa', 'Luxury', 'ff', 'ff', '3', '11122333', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 19:46:15', 'pending', NULL, '', NULL),
(115, '', 'aa', 'Luxury', 'ff', 'ff', '3', '6544', 0, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 19:48:14', 'confirmed', '', '', NULL),
(116, '', 'aa', 'Luxury', 'ff', 'aa', '4', '122121221', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 1650, '2021-05-14 19:51:47', 'returned', '', '', '2021-05-19 16:42:00'),
(117, '', 'aa', 'Luxury', 'ff', 'ff', '3', '2147483647', NULL, 44, 444, '2021-05-14 20:16:00', '2021-05-18 23:19:00', 44, 308, '2021-05-14 20:16:46', 'pending', NULL, 'cc', NULL),
(118, '', 'aa', 'Luxury', 'ff', 'ff', '3', '2147483647', 0, 44, 444, '2021-05-14 20:19:00', '2021-05-18 23:19:00', 44, 5208, '2021-05-14 20:19:32', 'pending', NULL, 'test status hidden', NULL),
(119, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:27:21', 'pending', NULL, '', NULL),
(120, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:28:21', 'pending', NULL, '', NULL),
(121, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:29:09', 'pending', NULL, '', NULL),
(122, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:31:17', 'pending', NULL, '', NULL),
(123, '', 'aa', 'Luxury', 'ff', 'ff', '3', '2147483647', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:35:33', 'pending', NULL, '', NULL),
(124, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:48:18', 'pending', NULL, '', NULL),
(125, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:51:42', 'pending', NULL, '', NULL),
(126, '', 'aa', 'Luxury', 'ff', 'aa', '4', '2', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:55:57', 'pending', NULL, '', NULL),
(127, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:57:24', 'pending', NULL, '', NULL),
(128, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:58:15', 'pending', NULL, '', NULL),
(129, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 20:59:54', 'pending', NULL, '', NULL),
(130, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 21:02:29', 'pending', NULL, '', NULL),
(131, '', 'aa', 'Luxury', 'ff', 'aa', '4', '0', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 21:04:59', 'pending', NULL, '', NULL),
(132, '', 'aa', 'Luxury', 'ff', 'ff', '3', '4', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 21:12:26', 'pending', NULL, '', NULL),
(133, '', 'nn', 'Luxury', 'nn', 'nn', '8', '9', NULL, 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, 0, '2021-05-14 21:14:19', 'pending', NULL, '', NULL),
(134, '', 'aa', 'Luxury', 'ff', 'ff', '3', '0008', 8, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 21:20:58', 'pending', NULL, '', NULL),
(135, '', 'aa', 'Luxury', 'ff', 'ff', '3', '00001', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-14 21:21:39', 'pending', NULL, '', NULL),
(136, '', 'dd', 'Luxury', 'gg', 'dd', '8', '22222222', NULL, 2, 6, '2021-05-14 21:24:00', '2021-05-28 13:24:00', 3, 54, '2021-05-14 21:24:22', 'returned', '', 'llk', '2021-05-18 00:00:00'),
(137, '', 'dd', 'Luxury', 'gg', 'dd', '8', '000008007009', NULL, 2, 6, '2021-05-18 13:46:00', '2021-05-19 13:46:00', 3, 4, '2021-05-18 13:46:43', 'returned', '', '', '2021-05-20 13:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `carid` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `carname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `seatingcapacity` int(2) NOT NULL,
  `plateno` varchar(10) NOT NULL,
  `fueltype` varchar(10) NOT NULL,
  `fuelcapacity` int(3) NOT NULL,
  `manufactureyr` year(4) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `hourlycharge` int(20) NOT NULL,
  `dailycharge` int(20) NOT NULL,
  `weeklycharge` int(20) NOT NULL,
  `monthlycharge` int(20) NOT NULL,
  `insurancecharge` int(20) NOT NULL,
  `details` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `available` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`carid`, `category`, `brand`, `model`, `carname`, `type`, `seatingcapacity`, `plateno`, `fueltype`, `fuelcapacity`, `manufactureyr`, `colour`, `hourlycharge`, `dailycharge`, `weeklycharge`, `monthlycharge`, `insurancecharge`, `details`, `branch`, `image`, `available`) VALUES
(36, 'Luxury', 'ff', 'ff', 'gg', 'Sedan', 4, '44', 'Petrol', 4, 2021, 'g', 44, 44, 4, 444, 44, 'rr', 'rr', 'download.jpeg', 'yes'),
(38, 'Luxury', 'ff', 'ff', 'aa', 'Sedan', 3, '44', 'Petrol', 3, 2021, 'g', 44, 44, 22, 444, 44, 'rr', 'dd', 'download (1).jpeg', 'yes'),
(39, 'Luxury', 'ff', 'aa', 'aa', 'Sedan', 4, '44', 'Petrol', 3, 2021, 'g', 44, 44, 4, 22, 44, 'ff', 'rr', 'download (3).jpeg', 'yes'),
(40, 'Luxury', 'gg', 'dd', 'dd', 'Sedan', 8, '4', 'Petrol', 3, 2021, 'b', 3, 2, 1, 6, 7, 'gg', 'qq', 'download (2).jpeg', 'yes'),
(42, 'Luxury', 'nn', 'nn', 'nn', 'SUV', 8, '887', 'Petrol', 8, 2021, 'k', 5, 5, 5, 5, 5, 'nn', 'nn', 'BMW-Homepage-SOC-i4-FMA-Mobile.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `telephone_no` int(10) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `street_no` varchar(20) NOT NULL,
  `passport_no` varchar(50) NOT NULL,
  `driving_license_no` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `reference_name` varchar(50) NOT NULL,
  `job_details` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `passport_expiry_date` date NOT NULL,
  `driving_license_expiry_date` date NOT NULL,
  `how_did_know` varchar(100) NOT NULL,
  `reference_no` varchar(20) NOT NULL,
  `premium_customer` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `fullname`, `telephone_no`, `mobile_no`, `street_no`, `passport_no`, `driving_license_no`, `nationality`, `reference_name`, `job_details`, `address`, `location`, `passport_expiry_date`, `driving_license_expiry_date`, `how_did_know`, `reference_no`, `premium_customer`) VALUES
(5, 'Mahe Karmilan', 217854320, 776541983, 'sisapa', '887725384', '554553709', 'swiss', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-08-28', '2021-10-30', 'Internet', '12', 'no'),
(6, 'test with cust', 775465535, 753762351, 'sisapa', '765', '4567', 'lankan', 'banu', 'cfzfdsg', 'No 4, wellawatte', 'colombo', '2021-05-03', '2021-05-04', 'dvdvc', '12', 'no'),
(7, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(8, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(9, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', ''),
(10, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(11, '', 0, 0, '', '', '22211', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(12, 'frffgf', 0, 0, '', '', '3333333333', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(13, 'frffgf', 0, 0, '', '', '3333333333', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(14, '', 0, 0, '', '', '11111111', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(15, '', 0, 0, '', '', '22222222', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(16, '', 0, 0, '', '', '444444444444444444444', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(17, '', 0, 0, '', '', '444444444444444444444', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(18, '', 0, 0, '', '', '55555555555555555555', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(19, '', 0, 0, '', '', '6666611', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(20, '', 0, 0, '', '', '00000001', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(21, '', 0, 0, '', '', '098', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(22, '', 0, 0, '', '', '0007', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(23, '', 0, 0, '', '', '00065', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(24, '', 0, 0, '', '', '0007000', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(25, '', 0, 0, '', '', '00000004', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(26, '', 0, 0, '', '', '101010', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(27, '', 0, 0, '', '', '20202020', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(28, '', 0, 0, '', '', '2', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(29, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(30, '', 0, 0, '', '', '4', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(31, '', 0, 0, '', '', '097', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(32, '', 0, 0, '', '', '000', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(33, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(34, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(35, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(36, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(37, '', 0, 0, '', '', '021', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(38, '', 0, 0, '', '', '101010101010', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(39, '', 0, 0, '', '', '202021111111111111111', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(40, '', 0, 0, '', '', '3330333303333', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(41, '', 0, 0, '', '', '00012345678', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(42, '', 0, 0, '', '', '011122333', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(43, '', 0, 0, '', '', '000006544', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(44, '', 0, 0, '', '', '122121221', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(45, 'sjjns,kn', 775465535, 753762351, 'sisapa', '4567890', '55555555551111111111', 'lankan', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-08-28', '2021-10-01', 'Internet', '12', 'no'),
(46, 'Mahe Karmilan', 775465535, 753762351, 'sisapa', '4567890', '2222888887777', 'lankan', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-08-07', '2021-09-17', 'Internet', '12', 'no'),
(47, '', 0, 0, '', '', '555554444444', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(48, '', 0, 0, '', '', '555554444444', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(49, '', 0, 0, '', '', '212', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(50, '', 0, 0, '', '', '1223344', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(51, '', 0, 0, '', '', '<br /><b>Warning</b>:  Undefined variable $cust_dr', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(52, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(53, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(54, '', 0, 0, '', '', '1', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(55, '', 0, 0, '', '', '23', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(56, '', 0, 0, '', '', '21', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(57, '', 0, 0, '', '', '32', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(58, '', 0, 0, '', '', '34', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(59, '', 0, 0, '', '', '15', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(60, '', 0, 0, '', '', '4', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(61, '', 0, 0, '', '', '0009', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(62, '', 0, 0, '', '', '0008', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(63, '', 0, 0, '', '', '00001', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no'),
(64, 'Mahe Karmilan', 217854320, 753762351, 'sisapa', '4567890', '22222222', 'lankan', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-08-14', '2021-08-25', 'Internet', '12', 'no'),
(65, 'banujan', 778609865, 778609865, '33', '33', '000008007009', '', '', '', '', '', '2021-05-16', '2021-05-09', 'cc', '3', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driverid` int(10) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(2) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactno` int(10) NOT NULL,
  `licenseno` int(50) NOT NULL,
  `dob` date NOT NULL,
  `referencename` varchar(50) NOT NULL,
  `referenceno` int(50) NOT NULL,
  `driverimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drivername`, `gender`, `age`, `address`, `contactno`, `licenseno`, `dob`, `referencename`, `referenceno`, `driverimage`) VALUES
(8, 'banu', 'Male', 19, 'jaffna', 98878, 2147483647, '2004-09-24', 'ddd', 3333, '');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expenseid` int(10) NOT NULL,
  `expensename` varchar(50) NOT NULL,
  `expenseamount` int(10) NOT NULL,
  `expensedate` date NOT NULL,
  `remark` varchar(200) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`expenseid`, `expensename`, `expenseamount`, `expensedate`, `remark`, `branch`) VALUES
(3, 'wwwe', 1000, '2021-05-07', 'sze', 'fghke'),
(4, 'service', 1, '2021-05-09', 'car wash', 'kalviyankadu');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(10) NOT NULL,
  `insurancecompanyname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactpersonname` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`insuranceid`, `insurancecompanyname`, `address`, `contactpersonname`, `contactno`) VALUES
(3, 'fef', 'feff', 'effef', '87733');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic`
--

CREATE TABLE `mechanic` (
  `mechanicid` int(10) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `mechanicname` varchar(50) NOT NULL,
  `contactno` int(10) NOT NULL,
  `companyaddress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic`
--

INSERT INTO `mechanic` (`mechanicid`, `companyname`, `mechanicname`, `contactno`, `companyaddress`) VALUES
(2, 'Dilk', 'senthu', 778980765, 'jaffna'),
(3, 'fdff', 'ess', 33, 'dssdf43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `fullname`, `email`, `phno`, `username`, `pass`) VALUES
(2, 'karmilan', 'karm@gmail.com', 773322976, 'admin', 'admin'),
(9, 'banujan', 'bn@gmail.com', 778866543, 'banu', 'banu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driverid`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expenseid`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insuranceid`);

--
-- Indexes for table `mechanic`
--
ALTER TABLE `mechanic`
  ADD PRIMARY KEY (`mechanicid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expenseid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanicid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
