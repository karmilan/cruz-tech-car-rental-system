-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 08:20 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
  `bookingtype` varchar(50) DEFAULT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_category` varchar(50) NOT NULL,
  `car_brand` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_seatingcapacity` varchar(50) NOT NULL,
  `cust_drivinglicenseno` varchar(50) NOT NULL,
  `driver_licenseno` varchar(10) DEFAULT NULL,
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

INSERT INTO `booking` (`bookingid`, `bookingtype`, `cust_name`, `car_name`, `car_category`, `car_brand`, `car_model`, `car_seatingcapacity`, `cust_drivinglicenseno`, `driver_licenseno`, `car_dailycharge`, `car_monthlycharge`, `bookingdate`, `actual_returndate`, `car_hourlycharge`, `amount`, `bookingtime`, `status`, `payment`, `comment`, `extract_returndate`) VALUES
(163, 'with_driver', 'hello world', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-23 12:19:49', 'pending', NULL, '', NULL),
(167, 'with_driver', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '2021-05-23 12:45:00', '2021-06-24 13:45:00', 44, 55110, '2021-05-23 12:45:46', 'returned', '', '', '2021-07-23 12:44:00'),
(168, 'with_driver', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '2021-05-23 12:56:00', '2021-05-23 13:56:00', 44, 1288, '2021-05-23 12:56:58', 'returned', '', '', '2021-05-23 14:58:00'),
(169, 'with_driver', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '2021-05-23 13:01:00', '2021-06-23 13:01:00', 44, 20044, '2021-05-23 13:01:54', 'returned', '', '', '2021-07-23 13:01:00'),
(170, 'with_driver', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '2021-05-23 13:04:00', '2021-05-24 13:04:00', 44, 644, '2021-05-23 13:05:08', 'returned', '', '', '2021-05-23 14:06:00'),
(171, 'with_driver', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '2021-05-23 13:08:00', '2021-05-24 13:08:00', 44, 1688, '2021-05-23 13:08:37', 'returned', '', '', '2021-05-24 14:08:00'),
(172, 'self_driving', 'llllk', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 1518, '2021-05-23 13:18:29', 'returned', '', '', '0000-00-00 00:00:00'),
(174, 'self_driving', 'tresa', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 1518, '2021-05-23 13:23:20', 'returned', '', '', '0000-00-00 00:00:00'),
(175, 'with_driver', 'tara', 'aa', 'Luxury', 'ff', 'aa', '4', '', '0', 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 83538, '2021-05-23 13:32:13', 'returned', '', '', '2021-05-24 13:35:00'),
(176, 'with_driver', 'sekar', 'aa', 'Luxury', 'ff', 'ff', '3', '', '0', 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-23 13:41:39', 'confirmed', '', '', NULL),
(177, 'self_driving', 'han', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-23 13:57:53', 'pending', NULL, '', NULL),
(178, 'with_driver', '1005 and 2010 ', 'nn', 'Luxury', 'nn', 'nn', '8', '43', '43', 5, 5, '2021-05-29 20:31:00', '2021-05-30 20:31:00', 5, 2010, '2021-05-29 20:33:23', 'returned', '', '', '2021-05-31 20:37:00'),
(179, 'self_driving', '', 'aa', 'Luxury', 'ff', 'ff', '3', '', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-29 21:40:21', 'pending', NULL, '', NULL),
(180, 'self_driving', '', 'aa', 'Luxury', 'ff', 'ff', '3', '', NULL, 44, 444, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-29 21:41:33', 'pending', NULL, '', NULL),
(181, 'self_driving', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-29 21:53:17', 'pending', NULL, '', NULL),
(182, 'self_driving', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-29 21:56:15', 'pending', NULL, '', NULL),
(183, 'self_driving', '', 'aa', 'Luxury', 'ff', 'aa', '4', '', NULL, 44, 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 44, 0, '2021-05-29 22:02:02', 'pending', NULL, '', NULL),
(184, 'with_driver', '', 'gg', 'Luxury', 'ff', 'ff', '4', '', '0', 44, 444, '2021-06-01 21:24:00', '2021-06-03 21:24:00', 44, 2088, '2021-06-01 21:25:01', 'confirmed', '', '', NULL),
(185, 'with_driver', '', 'aa', 'Luxury', 'ff', 'ff', '3', '', '23', 44, 444, '2021-06-01 21:31:00', '2021-06-04 21:31:00', 44, 3132, '2021-06-01 21:31:30', 'confirmed', '', '', NULL),
(186, 'with_driver', '', 'aa', 'Luxury', 'ff', 'ff', '3', '', '2147483647', 44, 444, '2021-06-04 21:35:00', '2021-06-26 21:35:00', 44, 22968, '2021-06-01 21:35:24', 'confirmed', '', '', NULL),
(187, 'with_driver', '', 'aa', 'Luxury', 'ff', 'ff', '3', '', '', 44, 444, '2021-06-04 21:35:00', '2021-06-26 21:35:00', 44, 22968, '2021-06-01 23:14:11', 'pending', NULL, '', NULL),
(188, 'with_driver', 't', 'nn', 'Luxury', 'nn', 'nn', '8', '', '', 5, 5, '2021-06-01 23:14:00', '2021-06-02 23:14:00', 5, 1005, '2021-06-01 23:14:44', 'pending', NULL, '', NULL),
(189, 'with_driver', 'danu', 'nn', 'Luxury', 'nn', 'nn', '8', '22222222', 'hansi-23', 5, 5, '2021-06-01 23:22:00', '2021-06-02 23:22:00', 5, 2010, '2021-06-01 23:22:47', 'returned', '', 'test', '2021-06-03 23:24:00');

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
  `premium_customer` varchar(3) NOT NULL,
  `createtime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `fullname`, `telephone_no`, `mobile_no`, `street_no`, `passport_no`, `driving_license_no`, `nationality`, `reference_name`, `job_details`, `address`, `location`, `passport_expiry_date`, `driving_license_expiry_date`, `how_did_know`, `reference_no`, `premium_customer`, `createtime`) VALUES
(88, 'hello world', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(89, 'gge', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(90, 'ffrr', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(91, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(92, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(93, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(94, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(95, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(96, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(97, 'llllk', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(98, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(99, 'tresa', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(100, 'tara', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(101, 'sekar', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(102, 'han', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(103, '1005 and 2010 ', 0, 0, '', '', '43', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(104, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(105, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(106, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(107, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(108, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(109, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(110, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(111, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(112, '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(113, 't', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', 'no', '2021-06-02 05:31:45'),
(114, 'danu', 775465535, 753762351, 'sisapa', '4567890', '22222222', 'lankan', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-06-01', '2021-06-01', 'Internet', '12', 'no', '2021-06-02 05:31:45'),
(115, 'Mahe Karmilan', 775465535, 776541983, 'sisapa', '4567890', '22222222', 'lankan', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-06-02', '2021-06-02', 'Internet', '12', 'no', '2021-06-02 05:34:00');

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
  `driverimage` varchar(100) NOT NULL,
  `drivercreatetime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driverid`, `drivername`, `gender`, `age`, `address`, `contactno`, `licenseno`, `dob`, `referencename`, `referenceno`, `driverimage`, `drivercreatetime`) VALUES
(8, 'banu', 'Male', 19, 'jaffna', 98878, 2147483647, '2004-09-24', 'ddd', 3333, '', '2021-06-02 05:39:32'),
(11, 'hansi', 'Female', 21, 'jaffna', 778976543, 23, '2021-02-04', 'jj', 1, '', '2021-06-02 05:39:32'),
(12, 'abi', 'Male', 16, 'ariyala', 776532135, 8877, '2020-12-10', 'tr', 5, '', '2021-06-02 05:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `driver_amount`
--

CREATE TABLE `driver_amount` (
  `da_id` int(11) NOT NULL,
  `driver_hourly_charge` int(10) NOT NULL,
  `driver_daily_charge` int(10) NOT NULL,
  `driver_monthly_charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_amount`
--

INSERT INTO `driver_amount` (`da_id`, `driver_hourly_charge`, `driver_daily_charge`, `driver_monthly_charge`) VALUES
(1, 600, 1000, 10000),
(2, 500, 700, 900);

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
-- Table structure for table `profit`
--

CREATE TABLE `profit` (
  `profitid` int(11) NOT NULL,
  `to_date` date NOT NULL,
  `from_date` date NOT NULL,
  `total_amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phno` int(10) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `role`, `fullname`, `email`, `phno`, `user_img`, `username`, `pass`) VALUES
(2, 'admin', 'karmilan', 'karm@gmail.com', 773322976, '', 'karmi', 'admin'),
(9, NULL, 'banujan', 'bn@gmail.com', 778866543, '', 'banu', 'banu'),
(10, NULL, 'john', 'jo@gmail.com', 778866555, '', 'john', '123');

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
-- Indexes for table `driver_amount`
--
ALTER TABLE `driver_amount`
  ADD PRIMARY KEY (`da_id`);

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
-- Indexes for table `profit`
--
ALTER TABLE `profit`
  ADD PRIMARY KEY (`profitid`);

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
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driverid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `driver_amount`
--
ALTER TABLE `driver_amount`
  MODIFY `da_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `profit`
--
ALTER TABLE `profit`
  MODIFY `profitid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
