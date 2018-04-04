-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 04:36 AM
-- Server version: 10.1.25-MariaDB
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
(1, 9, 5, 'excellent service', 0),
(2, 9, 4, 'good', 0),
(3, 32, 3, 'Cool drivers , amazing cars', 0),
(4, 32, 5, 'Taxigo is my favorite booking car company ever! Cool drivers , amazing cars.', 0),
(6, 9, 3, 'Best Online taxi booking service', 0),
(7, 9, 5, 'amazing cars', 0);

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
(1, 34, 'ffefer1513132', 'upload/akhil.jpg', 0),
(10, 35, '123456789123', 'upload/akhil-cons - Copy.jpg', 0);

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
(6, 9, 'akhilmjoy8@gmail.com', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 0, 0),
(11, 21, 'akhilmjoy@mca.ajce.in', 'QorKAiq1kGVm7HKPS8yflT6NHvgVmd86kBnC4/Tuj8M=', 0, 0),
(22, 32, 'akhilmjoy3@gmail.com', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 0, 0),
(24, 34, 'akhilmjoy1@gmail.com', 'QrUgcNdRjaE74hfEIeThKa/RaqA9N/KpBI+X7VeiyfE=', 0, 0),
(25, 35, 'akhilmjoy23@gmail.com', 'lom5rCzUONIlszFzsdCrukt1G9h1NMTsG55SUcM78l4=', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `logdet_id` int(11) NOT NULL,
  `logid` int(11) NOT NULL,
  `regid` int(11) NOT NULL,
  `time_in` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `time_out` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`logdet_id`, `logid`, `regid`, `time_in`, `time_out`) VALUES
(1, 4, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(9, 2, 'abin', 'thomas', '9844613513', 'upload/akhil.jpg', 'akhilmjoy8@gmail.com', '2017-08-02', 'male', 'sfvsdfsfsg', '3644111', 'upload/IMG_20170814_104423.jpg', 0, 0),
(21, 1, 'admin', 'admin', '959698236', 'upload/akhil.jpg', 'akhilmjoy@mca.ajce.com', '2017-08-16', 'male', 'mulangasseril', '787896768', 'cscsdc', 0, 0),
(32, 2, 'justin', 'illickal', '6464321321', 'upload/akhil.jpg', 'akhilmjoy3@gmail.com', '2017-09-06', 'male', 'tyeytfyhgf', 'hgfgyhgkh', 'upload/IMG_20170814_104422.jpg', 0, 0),
(34, 3, 'thomas', 'm', '64641310', 'upload/akhil.jpg', 'akhilmjoy1@gmail.com', '1999-02-15', 'male', 'sfsdfsd', '6161332', 'upload/akhil.jpg', 0, 1),
(35, 3, 'akhil', 'joy', '8281306327', 'upload/akhil.jpg', 'akhilmjoy23@gmail.com', '1994-02-23', 'male', 'mulangassril', '123456789123', 'upload/ad.jpg', 0, 1);

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
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxi_booking`
--

INSERT INTO `taxi_booking` (`bk_id`, `vid`, `aloc_id`, `login_id`, `from_datetime`, `to_datetime`, `locn_from`, `locn_to`, `km`, `duration`, `total_amnt`, `status`) VALUES
(1, 1, 6, 6, '2017-04-01 01:00:00', '2017-04-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0),
(2, 2, 7, 6, '2017-11-01 01:00:00', '2017-11-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0),
(3, 2, 7, 6, '2017-04-01 01:00:00', '2017-04-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 773, 0),
(4, 1, 6, 6, '2017-03-01 01:00:00', '2017-03-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 859, 0),
(5, 3, 9, 6, '2017-11-24 01:00:00', '2017-11-26 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 687, 0),
(6, 3, 9, 22, '2017-12-01 01:00:00', '2017-12-05 01:00:00', 'koovappally,kerala,india', 'kottayam,kerala,india', 43, '1 hour 14 mins', 687, 0);

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
(9, 3, 35, 0),
(10, 2, 34, 0);

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
(4, 9, 'koovappally,kerala,india', 35, 0),
(5, 10, 'koovappally,kerala,india', 34, 0);

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
(1, 'innova x', 'kl 34 f 5889', 'upload/toyota-innova.png', 5, '2013', 'red', 20, 0, 0),
(2, 'swift', 'kl 34 d 5888', 'upload/maruti-swift.png', 6, '2016', 'red', 18, 0, 1),
(3, 'eon', 'kl 34 a 2525', 'upload/eno.png', 8, '2016', 'yellow', 16, 0, 1),
(4, 'alto', 'kl 34 c 2612', 'upload/Alto-800.png', 8, '2017', 'blue', 16, 0, 0),
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
(1, 6, 12456789, 2525, 'SBI', 813, '123456', 0),
(2, 11, 56656, 4545, 'SBI', 11795, '123456', 0),
(3, 22, 123456789, 2426, 'Federal Bank', 4313, '123456', 0);

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
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD KEY `logid` (`logid`),
  ADD KEY `regid` (`regid`);

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
  ADD PRIMARY KEY (`vid`);

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
  MODIFY `fed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `licence`
--
ALTER TABLE `licence`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `taxi_booking`
--
ALTER TABLE `taxi_booking`
  MODIFY `bk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `utype`
--
ALTER TABLE `utype`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_alocation`
--
ALTER TABLE `vehicle_alocation`
  MODIFY `al_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vehicle_location`
--
ALTER TABLE `vehicle_location`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vehicle_reg`
--
ALTER TABLE `vehicle_reg`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
