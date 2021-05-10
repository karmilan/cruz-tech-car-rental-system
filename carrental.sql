-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2021 at 11:29 AM
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
  `cust_drivinglicenseno` int(20) NOT NULL,
  `driver_licenseno` int(10) DEFAULT NULL,
  `car_dailycharge` int(11) DEFAULT NULL,
  `car_monthlycharge` int(50) DEFAULT NULL,
  `bookingdate` datetime DEFAULT NULL,
  `actual_returndate` datetime DEFAULT NULL,
  `car_hourlycharge` int(50) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `bookingtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `car_image`, `car_name`, `car_category`, `car_brand`, `car_model`, `car_seatingcapacity`, `cust_drivinglicenseno`, `driver_licenseno`, `car_dailycharge`, `car_monthlycharge`, `bookingdate`, `actual_returndate`, `car_hourlycharge`, `amount`, `bookingtime`) VALUES
(5, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 14:49:00', '2021-07-02 14:49:00', 0, 0, '2021-05-02 14:52:11'),
(6, '', 'dcv', 'Luxury', '', '', '0', 0, NULL, 0, 1000, '2021-05-02 14:52:00', '2021-07-02 14:52:00', 0, 0, '2021-05-02 14:52:44'),
(7, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 14:54:00', '2021-07-02 14:54:00', 0, 0, '2021-05-02 14:54:36'),
(8, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 14:57:00', '2021-07-02 14:57:00', 0, 0, '2021-05-02 14:57:43'),
(9, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 17:55:00', '2021-07-02 17:55:00', 0, 2000, '2021-05-02 17:56:05'),
(10, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 17:58:00', '2021-08-04 19:58:00', 0, 3000, '2021-05-02 17:58:40'),
(11, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 18:00:00', '2021-09-02 18:00:00', 0, 4000, '2021-05-02 18:00:44'),
(12, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 18:02:00', '2021-08-02 18:02:00', 0, 3000, '2021-05-02 18:02:15'),
(13, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 0, 1000, '2021-05-02 18:04:00', '2021-07-02 18:04:00', 0, 2000, '2021-05-02 18:05:02'),
(14, '', 'dcv', 'Luxury', '', '', '0', 0, NULL, 100, 1000, '2021-05-02 18:11:00', '2021-07-03 18:11:00', 0, 1, '2021-05-02 18:11:53'),
(15, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:17:00', '2021-07-03 18:17:00', 0, 0, '2021-05-02 18:18:00'),
(16, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:19:00', '2021-07-03 18:19:00', 0, 0, '2021-05-02 18:20:00'),
(17, '', 'dcv', 'Luxury', '', '', '0', 33, NULL, 100, 1000, '2021-05-02 18:20:00', '2021-07-03 18:20:00', 0, 0, '2021-05-02 18:20:57'),
(18, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:21:00', '2021-07-03 18:22:00', 0, 0, '2021-05-02 18:22:12'),
(19, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:24:00', '2021-07-03 18:24:00', 0, 0, '2021-05-02 18:24:54'),
(20, '', 'dcv', 'Luxury', '', '', '0', 33, NULL, 100, 1000, '2021-05-02 18:28:00', '2021-07-03 18:28:00', 0, 0, '2021-05-02 18:28:22'),
(21, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:33:00', '2021-07-03 18:33:00', 0, 0, '2021-05-02 18:33:25'),
(22, '', 'dcv', 'Luxury', '', '', '0', 0, NULL, 100, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 2100, '2021-05-02 18:33:45'),
(23, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:34:00', '2021-07-03 18:35:00', 0, 0, '2021-05-02 18:35:10'),
(24, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:46:00', '2021-07-03 18:47:00', 0, 0, '2021-05-02 18:47:09'),
(25, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:50:00', '2021-07-03 18:51:00', 0, 0, '2021-05-02 18:51:06'),
(26, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 18:53:00', '2021-07-03 18:53:00', 0, 0, '2021-05-02 18:53:56'),
(27, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 19:11:00', '2021-07-03 19:11:00', 0, 0, '2021-05-02 19:12:00'),
(28, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 19:13:00', '2021-07-03 19:13:00', 0, 0, '2021-05-02 19:13:23'),
(29, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 19:14:00', '2021-07-03 19:14:00', 0, 0, '2021-05-02 19:14:27'),
(30, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 19:23:00', '2021-07-03 19:24:00', 0, 2100, '2021-05-02 19:25:50'),
(31, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 20:03:00', '2021-07-03 21:03:00', 0, 2110, '2021-05-02 20:03:44'),
(32, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 20:15:00', '2021-05-02 21:59:00', 10, 10, '2021-05-02 20:16:02'),
(33, '', 'dcv', 'Luxury', '', '', '0', 0, NULL, 100, 1000, '2021-05-02 20:28:00', '2021-06-03 21:28:00', 10, 1110, '2021-05-02 20:28:21'),
(34, '', 'dcv', 'Luxury', '', '', '0', 11, NULL, 100, 1000, '2021-05-02 20:42:00', '2021-06-03 21:47:00', 10, 1110, '2021-05-02 20:43:12'),
(35, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', 33, NULL, 10000, 25000, '2021-05-02 21:53:00', '2021-06-03 21:53:00', 1000, 35000, '2021-05-02 20:54:06'),
(36, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', 22, NULL, 10000, 25000, '2021-05-02 20:55:00', '2021-06-03 21:57:00', 1000, 36000, '2021-05-02 20:55:59'),
(37, '', 'Lol', 'Luxury', 'Benz', 'a-1', '4', 333, NULL, 10000, 25000, '2021-05-04 19:33:00', '2021-07-05 21:33:00', 1000, 62000, '2021-05-04 19:34:01'),
(38, '', 'gg', 'Luxury', 'ff', 'ff', '4', 333, NULL, 44, 444, '2021-05-07 09:51:00', '2021-05-09 09:51:00', 44, 88, '2021-05-07 09:52:16'),
(39, '', 'aa', 'Luxury', 'ff', 'ff', '3', 333, NULL, 44, 444, '2021-05-08 14:52:00', '2021-05-09 14:53:00', 44, 44, '2021-05-07 14:53:09'),
(40, '', 'dd', 'Luxury', 'gg', 'dd', '8', 99990, NULL, 2, 6, '2021-05-09 18:31:00', '2021-05-10 18:31:00', 3, 2, '2021-05-09 18:31:14'),
(41, '', 'gg', 'Luxury', 'ff', 'ff', '4', 333, 66677, 44, 444, '2021-05-09 19:03:00', '2021-05-10 19:03:00', 44, 44000, '2021-05-09 19:03:51'),
(42, '', 'gg', 'Luxury', 'ff', 'ff', '4', 99990, 66677, 44, 444, '2021-05-09 19:18:00', '2021-05-11 19:18:00', 44, 1088, '2021-05-09 19:18:36'),
(43, '', 'gg', 'Luxury', 'ff', 'ff', '4', 99990, 66677, 44, 444, '2021-05-09 19:21:00', '2021-05-11 19:22:00', 44, 2088, '2021-05-09 19:22:11'),
(44, '', 'aa', 'Luxury', 'ff', 'ff', '3', 333, 66677, 44, 444, '2021-05-09 19:25:00', '2021-05-09 21:25:00', 44, 688, '2021-05-09 19:25:47');

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
(40, 'Luxury', 'gg', 'dd', 'dd', 'Sedan', 8, '4', 'Petrol', 3, 2021, 'b', 3, 2, 1, 6, 7, 'gg', 'qq', 'download (2).jpeg', 'yes');

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
(5, 'Mahe Karmilan', 217854320, 776541983, 'sisapa', '887725384', '554553709', 'swiss', 'banu', 'clerk', 'No 4, wellawatte', 'colombo', '2021-08-28', '2021-10-30', 'Internet', '12', 'no');

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
(8, 'banu', 'bb', 999, 'ban', 'ban');

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
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
