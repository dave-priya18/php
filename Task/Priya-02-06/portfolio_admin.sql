-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2018 at 02:35 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(3) NOT NULL COMMENT 'Primary Key',
  `admin_username` varchar(10) NOT NULL COMMENT 'Username',
  `admin_password` varchar(100) NOT NULL COMMENT 'Password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'priya1811', 'd6fcd9d23b8c650a915cfc82a4e156e6');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_userid` int(3) NOT NULL COMMENT 'User Id: Primary Key',
  `company_name` varchar(50) NOT NULL DEFAULT 'Creative Code Inc.' COMMENT 'User Company: by default',
  `user_username` varchar(10) NOT NULL COMMENT 'Username',
  `user_email` varchar(50) NOT NULL COMMENT 'User Email Id',
  `user_fname` varchar(50) NOT NULL COMMENT 'User First Name',
  `user_lname` varchar(50) NOT NULL COMMENT 'User Last Name',
  `user_address` varchar(200) NOT NULL COMMENT 'User Address',
  `user_city` varchar(50) NOT NULL COMMENT 'User City',
  `user_country` varchar(50) NOT NULL COMMENT 'User Country',
  `user_postalcode` int(6) NOT NULL COMMENT 'User PostalCode',
  `user_aboutme` varchar(100) NOT NULL COMMENT 'User About Me',
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_userid`, `company_name`, `user_username`, `user_email`, `user_fname`, `user_lname`, `user_address`, `user_city`, `user_country`, `user_postalcode`, `user_aboutme`, `admin_id`) VALUES
(4, 'Creative Code Inc.', '0', 'ppp.ppp@ppp.ppp', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 382009, ' ppp', 1),
(5, 'Creative Code Inc.', 'pqpqpqpq', 'pqpq@pq.pq', 'pqpqpq', 'pqpqpq', 'pqpqpq', 'pqpqpqp', 'pqpqpq', 898990, 'pqpqpqpqqqq ', 1),
(6, 'Creative Code Inc.', 'priya123', 'priyadave@gmail.com', '56tyuio', 'yuyuyuyu', 'qwewertyuiop[', 'ertyui', 'rtyuiop', 565656, 'ertyuiop ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_userid` int(3) NOT NULL AUTO_INCREMENT COMMENT 'User Id: Primary Key', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
