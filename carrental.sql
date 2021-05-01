-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 06:48 AM
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
  `car_image` varchar(100) DEFAULT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_category` varchar(50) NOT NULL,
  `car_brand` varchar(50) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `car_seatingcapacity` varchar(50) NOT NULL,
  `cust_drivinglicenseno` int(20) NOT NULL,
  `car_dailycharge` int(11) NOT NULL,
  `bookingdays` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `bookingtime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `car_image`, `car_name`, `car_category`, `car_brand`, `car_model`, `car_seatingcapacity`, `cust_drivinglicenseno`, `car_dailycharge`, `bookingdays`, `amount`, `bookingtime`) VALUES
(18, '', 'bb', 'Luxury', 'bmw', 'ee', '4', 11111, 0, 5, 0, '2021-04-30 22:00:03'),
(19, '', 'bb', 'Luxury', 'bmw', 'ee', '4', 11111, 0, 5, 0, '2021-04-30 22:04:32');

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
(12, 'Luxury', 'bmw', 'ee', 'bb', 'Sedan', 4, '444', 'Petrol', 5, 2021, 'hh', 7, 0, 0, 0, 0, '', '', '', 'yes'),
(13, 'Luxury', 'bmw', 'ee', 'bb', 'Sedan', 4, '444', 'Petrol', 5, 2021, 'hh', 7, 0, 0, 0, 0, '', '', '', 'yes'),
(19, 'Luxury', '', '', 'dcv', 'Sedan', 0, '', '', 0, 2021, '', 0, 0, 0, 0, 0, '', '', '', 'yes');

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
(4, 'banujan', 33, 33, '3', '3', '3', 'e', 'e', 'e', 'e', 'e', '2021-04-02', '2021-04-24', 'e', '3', 'yes'),
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
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insuranceid` int(10) NOT NULL,
  `insurancecompanyname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contactpersonname` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(5, 'supa', 'supa@gmail.com', 778866555, 'su', 'pa'),
(6, 'supa', 'supa@gmail.com', 778866555, 'su', 'pa'),
(7, 'supa', 'supa@gmail.com', 778866555, 'su', 'pa');

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
  MODIFY `bookingid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `carid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insuranceid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mechanic`
--
ALTER TABLE `mechanic`
  MODIFY `mechanicid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
