-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:58 AM
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
-- Database: `khs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `account_no` varchar(30) NOT NULL,
  `nid_no` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `timestamp` date NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `father_name`, `last_name`, `email_address`, `mobile_no`, `account_no`, `nid_no`, `address`, `city`, `district`, `division`, `dob`, `balance`, `pincode`, `image`, `gender`, `timestamp`, `password`) VALUES
(104, 'MD.SHAHJAHAN', 'MD. NURUL AMIN', '', 'sadikcumkt@gmail.com', '01521223452', '1003', '7750647625', 'House No. 293/188, Nurul Amin Resident, Vill: Badekolmeshwor, Abdul Gani Road, Ward No-35 Block-B', 'National University', '', '', '', '8850', '', 'WIN_20201010_12_28_50_Pro8.jpg', '', '0000-00-00', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(105, 'Shaila', 'MD. ABUL KASHEM', 'Naznin', 'saila@gmail.com', '01521223452', '1002', '3270519360', 'Hasina Tower, 7th Floor(8 A), Road No-03,Mominbag Residential Area, Hamjerbag, Panchlaish, Chattagra', 'Chattagram', 'National University', 'National University', '', '43450', '4211', 'WIN_20201010_12_28_50_Pro1.jpg', 'Female', '0000-00-00', NULL),
(106, 'Saiful', 'MD. NURUL AMIN', 'HOSSAIN', 'sadikcumkt@gmail.com', '01521223452', '1004', '6425789176', 'House No. 293/188, Nurul Amin Resident, Vill: Badekolmeshwor, Abdul Gani Road, Ward No-35 Block-B', 'National University', 'National University', 'Chattagram', '1997-07-03', '3000', '1704', 'WIN_20201010_12_28_50_Pro2.jpg', 'Male', '2021-11-08', NULL),
(107, 'MD.SHAHJAHAN', 'MD. NURUL AMIN', 'HOSSAIN', 'sadikcumkt@gmail.com', '01521223452', '1005', '7750647625', 'House No. 293/188, Nurul Amin Resident, Vill: Badekolmeshwor, Abdul Gani Road, Ward No-35 Block-B', 'Gazipur', 'Gazipur', 'Dhaka', '1996-11-07', '100', '1704', 'WIN_20201010_12_28_50_Pro3.jpg', 'Male', '2021-11-11', NULL),
(108, 'MD.SHAHJAHAN', 'MD. NURUL AMIN', 'HOSSAIN', 'sadikcumkt@gmail.com', '01521223452', '1006', '3270519360', 'House No. 293/188, Nurul Amin Resident', 'Dhaka', 'Gazipur', 'Dhaka', '2000-11-03', '1000', '1705', 'WIN_20201010_12_28_50_Pro4.jpg', 'Male', '2021-11-20', NULL),
(109, 'Shaila', 'MD. NURUL AMIN', 'HOSSAIN', 'sadikcumkt@gmail.com', '01521223452', '1010', '3270519360', 'House No. 293/188, Nurul Amin Resident, Vill: Badekolmeshwor, Abdul Gani Road, Ward No-35 Block-B', 'National University', 'Chattagram', 'National University', '2021-11-18', '4000', '1704', 'WIN_20201010_12_28_50_Pro9.jpg', 'Female', '0000-00-00', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contacts`
--

CREATE TABLE `customer_contacts` (
  `ID` int(10) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(5) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `father_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `nid_no` varchar(20) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `division` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `father_name`, `email`, `password`, `mobile`, `nid_no`, `dob`, `qualification`, `address`, `city`, `district`, `division`, `image`) VALUES
(17, 'Arafat', 'Nurul Ahsan', 'arafat@gmail.com', '12345', '01919620201', '', '2000-10-06', 'MBA', 'Mominbag', 'Chattagram', 'Chittagong', 'Bangladesh', NULL),
(18, 'MD. SHAHJAHAN HOSSAIN', 'Kamal', 'afsarnur@gmail.com', '123', '01521223452', '7750647625', '2000-10-06', NULL, 'Sher Mohammad Resident, 2nd floor, Hamjerbag, Panchlaish, Chittagong.', 'Chittagong', 'Chittagong', 'Chittagong', NULL),
(20, 'Emran', 'MD. ABUL KASHEM', 'sadikcumkt@gmail.com', '12345', '01521223452', '3270519360', '1998-07-03', NULL, 'Hasina Tower, 7th Floor(8 A), Road No-03,Mominbag Residential Area, Hamjerbag, Panchlaish, Chattagra', 'Chattagram', 'Chattagram', 'Chattagram', 'WIN_20201010_12_28_50_Pro2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `ID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `aadhar_no` varchar(30) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `age` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`ID`, `name`, `email`, `password`, `dob`, `address`, `mobile`, `aadhar_no`, `qualification`, `age`) VALUES
(1, 'sadik', 'sadikidb46@gmail.com', '12345', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slogan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1 transfer to 2 transfet from , 3dr transfer 4 cr transfer',
  `account_no` varchar(30) NOT NULL,
  `amount_dr` float(10,2) DEFAULT 0.00,
  `amount_cr` float(10,2) DEFAULT 0.00,
  `trans_at` datetime NOT NULL,
  `note` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `type`, `account_no`, `amount_dr`, `amount_cr`, `trans_at`, `note`) VALUES
(1, 2, '1002', 0.00, 500.00, '2021-11-03 10:28:20', 'Transfer from 1003'),
(2, 1, '1003', 500.00, 0.00, '2021-11-03 10:28:20', 'Transfer to 1002'),
(3, 4, '1003', 0.00, 5000.00, '2021-11-03 10:35:47', 'Transfer to '),
(4, 3, '1003', 2000.00, 0.00, '2021-11-03 10:36:11', 'Transfer to '),
(5, 4, '1003', 0.00, 3000.00, '2021-11-03 11:24:10', 'Transfer to customer account by bank'),
(6, 3, '1003', 500.00, 0.00, '2021-11-03 11:26:28', 'Bank debited customer account '),
(7, 2, '1002', 0.00, 500.00, '2021-11-03 11:26:50', 'Transfer from 1003'),
(8, 1, '1003', 500.00, 0.00, '2021-11-03 11:26:50', 'Transfer to 1002'),
(9, 2, '1002', 0.00, 800.00, '2021-11-04 11:33:58', 'Transfer from 1003'),
(10, 1, '1003', 800.00, 0.00, '2021-11-04 11:33:58', 'Transfer to 1002'),
(11, 4, '1002', 0.00, 5000.00, '2021-11-04 11:34:37', 'Bank credited customer account.'),
(12, 3, '1004', 500.00, 0.00, '2021-11-04 11:35:55', 'Bank debited customer account '),
(13, 2, '1002', 0.00, 50.00, '2021-11-15 11:44:47', 'Transfer from 1003'),
(14, 1, '1003', 50.00, 0.00, '2021-11-15 11:44:47', 'Transfer to 1002'),
(15, 4, '1010', 0.00, 4000.00, '2021-11-16 10:12:27', 'Bank credited customer account.'),
(16, 2, '1002', 0.00, 500.00, '2021-11-16 10:13:55', 'Transfer from 1003'),
(17, 1, '1003', 500.00, 0.00, '2021-11-16 10:13:55', 'Transfer to 1002'),
(18, 2, '1002', 0.00, 500.00, '2021-11-16 10:17:00', 'Transfer from 1003'),
(19, 1, '1003', 500.00, 0.00, '2021-11-16 10:17:00', 'Transfer to 1002'),
(20, 4, '1003', 0.00, 5000.00, '2021-11-16 12:01:49', 'Bank credited customer account.'),
(21, 2, '1002', 0.00, 100.00, '2021-11-16 12:04:22', 'Transfer from 1003'),
(22, 1, '1003', 100.00, 0.00, '2021-11-16 12:04:22', 'Transfer to 1002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `customer_contacts`
--
ALTER TABLE `customer_contacts`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
