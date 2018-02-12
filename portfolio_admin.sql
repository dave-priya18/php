-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2018 at 04:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

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
-- Table structure for table `company_banner`
--

CREATE TABLE `company_banner` (
  `banner_id` int(3) NOT NULL,
  `banner_companyname` varchar(30) NOT NULL DEFAULT 'Eventoz Company',
  `banner_welcome` varchar(100) NOT NULL,
  `banner_slogan` varchar(30) NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `banner_active_flag` int(1) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_banner`
--

INSERT INTO `company_banner` (`banner_id`, `banner_companyname`, `banner_welcome`, `banner_slogan`, `banner_image`, `banner_active_flag`, `created_by`, `updated_by`, `admin_id`) VALUES
(1, 'Eventoz Company', 'Hello! Welcome to Eventoz', 'You Dream, We Create', 'banner.jpg', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `conference_detail`
--

CREATE TABLE `conference_detail` (
  `conference_id` int(3) NOT NULL COMMENT 'Primary Key',
  `conference_title` varchar(30) NOT NULL COMMENT 'Title of the About Us',
  `conference_image` varchar(100) NOT NULL COMMENT 'Image of the About Us',
  `conference_desc` varchar(200) NOT NULL COMMENT 'Description of the About Us',
  `conference_start_date` date NOT NULL,
  `conference_end_date` date NOT NULL,
  `conference_landmark` varchar(30) NOT NULL,
  `conference_active_flag` int(1) DEFAULT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `admin_id` int(11) NOT NULL COMMENT 'Foreign Key: Admin_id ',
  `conference_city` varchar(30) NOT NULL,
  `conference_state` varchar(30) NOT NULL,
  `conference_country` int(30) NOT NULL,
  `conference_postalcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_detail`
--

INSERT INTO `conference_detail` (`conference_id`, `conference_title`, `conference_image`, `conference_desc`, `conference_start_date`, `conference_end_date`, `conference_landmark`, `conference_active_flag`, `created_by`, `updated_by`, `admin_id`, `conference_city`, `conference_state`, `conference_country`, `conference_postalcode`) VALUES
(5, 'All IIT Conference', 'download.jpg', '    qwerty q   ', '2018-02-15', '2018-02-28', '', NULL, 1, 1, 1, '', '', 0, 0),
(6, 'All DAIICT ', 'download.jpg', 'ALL DAIICTians at Synapase ', '2018-02-21', '2018-02-23', '', NULL, 1, 0, 1, '', '', 0, 0),
(7, 'qfgwrg', 'download.jpg', '  grtejrsjw46 ', '2018-02-21', '2018-02-28', '', NULL, 1, 1, 1, '', '', 0, 0),
(8, 'All IndiaNIC Conference', 'image.jpg', 'klsdjca b;,.wrvjheqtjg e m,qtt ', '2018-02-15', '2018-02-18', 'sddbedtmarum', NULL, 1, 0, 1, ' fmtudukled5lu', 'ndtkdt7k5t', 0, 989899),
(9, 'All IIT Conference 2017', 'image.jpg', 'nsijbr[nrpgbzdth ', '2018-03-02', '2018-03-03', 'ghuufjbndng', NULL, 1, 0, 1, 'jjvmslrbkos', 'kfbmdrpdu', 0, 898989);

-- --------------------------------------------------------

--
-- Table structure for table `conference_speaker_detail`
--

CREATE TABLE `conference_speaker_detail` (
  `speaker_id` int(11) NOT NULL,
  `speaking_desc` varchar(100) NOT NULL,
  `speaker_name` varchar(30) NOT NULL,
  `speaker_designation` varchar(30) NOT NULL,
  `speaker_image` varchar(100) NOT NULL,
  `conference_id` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL,
  `active_flag` int(1) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conference_speaker_detail`
--

INSERT INTO `conference_speaker_detail` (`speaker_id`, `speaking_desc`, `speaker_name`, `speaker_designation`, `speaker_image`, `conference_id`, `admin_id`, `active_flag`, `created_by`, `updated_by`) VALUES
(1, 'kplvmw,[[Lnh', '1231 11233', 'hehehehehe', 'image.jpg', 6, 1, 0, 0, 1),
(2, ' qwert qwert smokfowLWMVKNwvfWGB ', 'Ritesh Ambastha 123', 'CTO Nail Biter 123', 'download.jpg', 5, 1, 0, 0, 1),
(3, ' qwert qwert smokfowLWMVKNwvfWGB ', 'Ritesh Ambastha 123', 'CTO Nail Biter 123', 'download.jpg', 5, 1, 0, 1, 1),
(4, ' qwert qwert smokfowLWMVKNwvfWGB ', 'Ritesh Ambastha 123', 'CTO Nail Biter 123', 'download.jpg', 5, 1, 0, 1, 1),
(5, ' JSDVNASKNs', 'Kavi Sha', 'poet', 'image.jpg', 5, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `conference_sponsor_detail`
--

CREATE TABLE `conference_sponsor_detail` (
  `sponser_id` int(3) NOT NULL,
  `sponsor_companyname` varchar(30) NOT NULL,
  `sponsor_logo` varchar(100) NOT NULL,
  `sponsor_companydesc` varchar(100) NOT NULL,
  `sponsor_active_flag` int(1) NOT NULL,
  `created_by` int(3) NOT NULL,
  `updated_by` int(3) NOT NULL,
  `conference_id` int(3) NOT NULL,
  `admin_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(6, 'Eventoz Company', 'priya123', 'priyadave@gmail.com', '56tyuio', 'yuyuyuyu', 'qwewertyuiop[', 'ertyui', 'rtyuiop', 565656, 'ertyuiop ', 1),
(7, 'Eventoz Company', 'ramya1212', 'ramya@gmail.co', 'maj', 'jwvij', 'ddisjbr', 'UVWRK9iwrjrm', 'ovejer;,', 898989, 'kkkj;lkoi9  ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `company_banner`
--
ALTER TABLE `company_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `conference_detail`
--
ALTER TABLE `conference_detail`
  ADD PRIMARY KEY (`conference_id`);

--
-- Indexes for table `conference_speaker_detail`
--
ALTER TABLE `conference_speaker_detail`
  ADD PRIMARY KEY (`speaker_id`);

--
-- Indexes for table `conference_sponsor_detail`
--
ALTER TABLE `conference_sponsor_detail`
  ADD PRIMARY KEY (`sponser_id`);

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
-- AUTO_INCREMENT for table `company_banner`
--
ALTER TABLE `company_banner`
  MODIFY `banner_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conference_detail`
--
ALTER TABLE `conference_detail`
  MODIFY `conference_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `conference_speaker_detail`
--
ALTER TABLE `conference_speaker_detail`
  MODIFY `speaker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `conference_sponsor_detail`
--
ALTER TABLE `conference_sponsor_detail`
  MODIFY `sponser_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_userid` int(3) NOT NULL AUTO_INCREMENT COMMENT 'User Id: Primary Key', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
