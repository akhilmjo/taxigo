-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 12:24 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxigo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fed_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `ratting` int(11) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fed_id`, `reg_id`, `ratting`, `message`, `status`) VALUES
(1, 9, 5, 'excellent service', 1),
(2, 9, 4, 'good', 0),
(6, 9, 3, 'Best Online taxi booking service', 1),
(7, 9, 5, 'amazing cars', 1),
(8, 37, 5, 'super,best taxi bookking site', 1);

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE `licence` (
  `l_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `l_no` varchar(50) NOT NULL,
  `l_proof` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`l_id`, `reg_id`, `l_no`, `l_proof`, `status`) VALUES
(1, 34, '456666612353', 'upload/akhil.jpg', 0),
(10, 35, '123456789123', 'upload/akhil-cons - Copy.jpg', 0),
(11, 36, '457896324587', 'upload/2f47eae4-e665-4a1b-b41b-f578b24dab57.jpg', 0),
(15, 41, '122222222222', 'upload/2012-04-07 16.29.20.jpg', 0),
(16, 38, '123545454542', 'upload/Screenshot (55).png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `delstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `reg_id`, `user_name`, `passsword`, `status`, `delstatus`) VALUES
(6, 9, 'akhilmjoy1@gmail.com', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 1, 0),
(11, 21, 'akhilmjoy@mca.ajce.in', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(24, 34, 'cbabyshibin@gmail.com', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(25, 35, 'tonyphiliphose@gmail.com', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(26, 36, 'vishnuskumar95@gmail.com', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(27, 37, 'anand.siva31@gmail.com', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(28, 38, 'albinantony@mca.ajce.in', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'koovappally', 'koovappally,kerala,india', 9.539900, 76.802704),
(2, '26 mile ', '26 mile,kerala,india', 9.560391, 76.811874),
(3, 'kanjirappally', 'kanjirappally,kerala,india', 9.555699, 76.798416),
(4, 'pala', 'pala,kerala,india', 9.716318, 76.652809),
(5, 'kottayam', 'kottayam,kerala,india', 9.592752, 76.517586);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `Dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `idproofno` varchar(30) NOT NULL,
  `idproof` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `dvraloc` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `type_id`, `fname`, `lname`, `phno`, `photo`, `emailid`, `Dob`, `gender`, `Address`, `idproofno`, `idproof`, `status`, `dvraloc`) VALUES
(9, 2, 'Jibin', 'Baby', '8943074070', 'upload/jibin.jpg', 'akhilmjoy1@gmail.com', '1994-06-27', 'male', 'Koovakkal', '678798890912', 'upload/IMG_20170814_104423.jpg', 0, 0),
(21, 1, 'admin', 'admin', '959698236', 'upload/akhil.jpg', 'akhilmjoy@mca.ajce.com', '2017-08-16', 'male', 'mulangasseril', '787896768', 'cscsdc', 0, 0),
(34, 3, 'shibin', 'c baby', '9645569616', 'upload/shibin.jpg', 'cbabyshibin@gmail.com', '1994-04-27', 'male', 'cherumthadathil', '616133236948', 'upload/akhil.jpg', 0, 1),
(35, 3, 'tony', 'Philipose', '9497836422', 'upload/t.jpg', 'tonyphiliphose@gmail.com', '1994-02-23', 'male', 'Kayyalaparampil', '478456789123', 'upload/adt.jpg', 0, 1),
(36, 3, 'VISHNU', 'S KUMAR', '8589803556', 'upload/vishnu.jpg', 'vishnuskumar95@gmail.com', '1994-06-07', 'male', 'ANDUMADOM, PONKUNNAM', '579045789633', 'upload/SIGNTURE.jpg', 0, 1),
(37, 2, 'anand', 's', '9946636083', 'upload/unnamed1.jpg', 'anand.siva31@gmail.com', '1994-03-26', 'male', 'puthiyapadickal house', '678798890912', 'upload/IMG_0120.JPG', 0, 0),
(38, 3, 'albin', 'antony', '8281306327', 'upload/e4015.jpg', 'albinantony@mca.ajce.in', '1994-02-15', 'male', 'puthuchirayil', '123456789891', 'upload/Screenshot (53).png', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taxi_booking`
--

CREATE TABLE `taxi_booking` (
  `bk_id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `aloc_id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `from_datetime` datetime NOT NULL,
  `to_datetime` datetime NOT NULL,
  `locn_from` varchar(50) NOT NULL,
  `locn_to` varchar(50) NOT NULL,
  `km` int(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `total_amnt` int(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `comp_status` tinyint(4) NOT NULL DEFAULT '0',
  `cancel_st` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxi_booking`
--

INSERT INTO `taxi_booking` (`bk_id`, `vid`, `aloc_id`, `login_id`, `from_datetime`, `to_datetime`, `locn_from`, `locn_to`, `km`, `duration`, `total_amnt`, `status`, `comp_status`, `cancel_st`) VALUES
(1, 1, 6, 6, '2017-04-01 01:00:00', '2017-04-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(2, 2, 7, 6, '2017-11-01 01:00:00', '2017-11-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(3, 2, 7, 6, '2017-04-01 01:00:00', '2017-04-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(4, 1, 6, 6, '2017-03-01 01:00:00', '2017-03-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(5, 3, 9, 6, '2017-11-24 01:00:00', '2017-11-26 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 687, 0, 0, 0),
(7, 2, 10, 6, '2018-01-27 01:00:00', '2018-01-30 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(8, 1, 11, 6, '2017-12-07 01:00:00', '2017-12-10 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(9, 3, 9, 6, '2017-12-11 01:00:00', '2017-12-12 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 687, 0, 0, 0),
(10, 2, 10, 6, '2017-12-05 01:00:00', '2017-12-08 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(11, 1, 11, 6, '2017-12-04 01:00:00', '2017-12-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(12, 2, 10, 6, '2017-12-14 01:00:00', '2017-12-16 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(13, 1, 11, 27, '2017-11-24 01:00:00', '2017-11-25 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(14, 1, 11, 6, '2017-12-10 01:00:00', '2017-12-15 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0, 0, 0),
(15, 2, 10, 6, '2017-12-11 01:00:00', '2017-12-12 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0, 0, 0),
(16, 1, 11, 6, '2018-01-16 17:00:00', '2018-01-17 19:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 16 mins', 866, 0, 0, 0),
(17, 1, 11, 6, '2018-01-16 17:00:00', '2018-01-17 19:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 16 mins', 866, 0, 0, 0),
(18, 1, 11, 6, '2018-01-16 17:00:00', '2018-01-17 19:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 16 mins', 866, 0, 0, 0),
(19, 1, 11, 6, '2018-11-01 01:00:00', '2019-11-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 16 mins', 866, 0, 0, 1),
(20, 1, 11, 6, '2018-03-07 01:00:00', '2018-03-08 01:00:00', 'Koovappally, Kerala, India,kerala,india', 'Kottayam, Kerala, India,kerala,india', 43, '1 hour 16 mins', 864, 0, 0, 0),
(21, 2, 10, 6, '2018-03-05 14:00:00', '2018-03-07 06:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 16 mins', 778, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `utype`
--

CREATE TABLE `utype` (
  `type_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utype`
--

INSERT INTO `utype` (`type_id`, `type`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'driver');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_alocation`
--

CREATE TABLE `vehicle_alocation` (
  `al_id` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `driver_regid` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_alocation`
--

INSERT INTO `vehicle_alocation` (`al_id`, `vid`, `driver_regid`, `status`) VALUES
(6, 1, 34, 1),
(7, 2, 35, 1),
(8, 4, 34, 1),
(9, 3, 35, 1),
(10, 2, 34, 0),
(11, 1, 36, 0),
(12, 4, 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_location`
--

CREATE TABLE `vehicle_location` (
  `loc_id` int(11) NOT NULL,
  `aloc_id` int(11) NOT NULL,
  `place` varchar(30) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_location`
--

INSERT INTO `vehicle_location` (`loc_id`, `aloc_id`, `place`, `reg_id`, `status`) VALUES
(1, 6, 'Pala, Kerala, India', 34, 1),
(2, 7, 'koovappally,kerala,india', 35, 1),
(3, 8, 'koovappally,kerala,india', 34, 1),
(4, 9, 'koovappally,kerala,india', 35, 1),
(5, 10, 'koovappally,kerala,india', 34, 0),
(6, 11, 'Kottayam, Kerala, India', 36, 0),
(7, 12, 'Koovappally, Kerala, India', 35, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_reg`
--

CREATE TABLE `vehicle_reg` (
  `vid` int(11) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `vregno` varchar(50) NOT NULL,
  `vphoto` varchar(50) NOT NULL,
  `vseatno` int(11) NOT NULL,
  `vmodel` varchar(50) NOT NULL,
  `vcolor` varchar(50) NOT NULL,
  `vrate` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `valoc` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_reg`
--

INSERT INTO `vehicle_reg` (`vid`, `vname`, `vregno`, `vphoto`, `vseatno`, `vmodel`, `vcolor`, `vrate`, `status`, `valoc`) VALUES
(1, 'innova', 'kl 34 f 5889', 'upload/toyota-innova.png', 5, '2013', 'red', 20, 0, 1),
(2, 'swift', 'kl 34 d 5888', 'upload/maruti-swift.png', 6, '2016', 'red', 18, 0, 1),
(3, 'eon', 'kl 34 a 2525', 'upload/eno.png', 8, '2016', 'yellow', 16, 0, 0),
(4, 'alto', 'kl 34 c 2612', 'upload/Alto-800.png', 8, '2017', 'blue', 16, 0, 1),
(5, 'wagonar', 'kl 34 s 2566', 'upload/wagonar.png', 4, '2016', 'white', 16, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `w_id` int(11) NOT NULL,
  `logid` int(11) NOT NULL,
  `w_acc_no` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `balance` int(30) NOT NULL,
  `w_passwd` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`w_id`, `logid`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `w_passwd`, `status`) VALUES
(2, 11, 56656, 4545, 'SBI', 89788, '123456', 0),
(3, 22, 123456789, 2426, 'Federal Bank', 4313, '123456', 0),
(5, 27, 2147483647, 2638, 'SBI', 4141, '123456', 0),
(6, 6, 2147483647, 1254, 'SBI', 2012, '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fed_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `reg_id` (`reg_id`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `taxi_booking`
--
ALTER TABLE `taxi_booking`
  ADD PRIMARY KEY (`bk_id`),
  ADD KEY `vid` (`vid`),
  ADD KEY `aloc_id` (`aloc_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `utype`
--
ALTER TABLE `utype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `vehicle_alocation`
--
ALTER TABLE `vehicle_alocation`
  ADD PRIMARY KEY (`al_id`),
  ADD KEY `vid` (`vid`),
  ADD KEY `user_regid` (`driver_regid`);

--
-- Indexes for table `vehicle_location`
--
ALTER TABLE `vehicle_location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `vregno` (`vregno`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `logid` (`logid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `licence`
--
ALTER TABLE `licence`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `taxi_booking`
--
ALTER TABLE `taxi_booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `utype`
--
ALTER TABLE `utype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_alocation`
--
ALTER TABLE `vehicle_alocation`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `vehicle_location`
--
ALTER TABLE `vehicle_location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `registration` (`reg_id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `registration` (`reg_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `utype` (`type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
