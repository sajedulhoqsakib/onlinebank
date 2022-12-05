-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 07:08 AM
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
-- Table structure for table `tbl_auth`
--

CREATE TABLE `tbl_auth` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1 COMMENT '1 admin, 2 user',
  `forget_key` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 deleted,1 active, 2 inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `login_ip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_auth`
--

INSERT INTO `tbl_auth` (`id`, `name`, `contact`, `email`, `image`, `password`, `role`, `forget_key`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `last_login`, `login_ip`) VALUES
(1, 'jamal Uddin', '01687295469', 'shariful0606@gmail.com', NULL, 'a083e3e5c9f5489e1e06394fb6573e157c97804a', 1, '', 1, '2021-10-25 07:16:07', '2021-10-25 07:16:07', 1, 1, '2021-10-26 05:07:04', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner`
--

CREATE TABLE `tbl_house_owner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `alt_contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `per_add` text DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0 deleted , 1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner_flat`
--

CREATE TABLE `tbl_house_owner_flat` (
  `id` int(11) NOT NULL,
  `house_owner_id` int(11) NOT NULL,
  `house_no` varchar(255) NOT NULL,
  `flat_no` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 deleted1 active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house_owner_payment`
--

CREATE TABLE `tbl_house_owner_payment` (
  `id` int(11) NOT NULL,
  `house_owner_id` int(11) NOT NULL,
  `pay_amount` decimal(8,2) NOT NULL,
  `actual_amount` decimal(8,2) NOT NULL,
  `pdate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 2 hit account',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slogan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_house_owner`
--
ALTER TABLE `tbl_house_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_house_owner_flat`
--
ALTER TABLE `tbl_house_owner_flat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_house_owner_payment`
--
ALTER TABLE `tbl_house_owner_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_house_owner`
--
ALTER TABLE `tbl_house_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_house_owner_flat`
--
ALTER TABLE `tbl_house_owner_flat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_house_owner_payment`
--
ALTER TABLE `tbl_house_owner_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
