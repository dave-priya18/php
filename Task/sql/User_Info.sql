-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 06, 2018 at 06:24 AM
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
-- Database: `User`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_Info`
--

CREATE TABLE `User_Info` (
  `user_id` int(3) NOT NULL COMMENT 'User Id: maxlength - 3 , PK',
  `first_name` varchar(50) NOT NULL COMMENT 'User First Name: maxlength - 50',
  `last_name` varchar(50) NOT NULL COMMENT 'User Last Name: maxlength- 50',
  `gender` char(1) NOT NULL COMMENT 'User Gender: F/M',
  `email_id` varchar(150) NOT NULL COMMENT 'User Email-id: maxlength - 150',
  `username` varchar(10) NOT NULL COMMENT 'User Username: maxlength - 10',
  `password` varchar(16) NOT NULL COMMENT 'User Password: maxlength - 16',
  `address` varchar(200) NOT NULL COMMENT 'User Address: maxlength - 200',
  `city` varchar(50) NOT NULL COMMENT 'User City: maxlength - 50',
  `state` varchar(50) NOT NULL COMMENT 'User State: maxlength - 50',
  `country` varchar(50) NOT NULL COMMENT 'User Country: maxlength - 50',
  `zip_code` int(6) NOT NULL COMMENT 'User Zip-code: compulsary - 6',
  `contact_number` double(10,0) NOT NULL COMMENT 'User Contact Number: compulsory - 10',
  `hobby` varchar(100) NOT NULL COMMENT 'User Hobby: atleast - 3',
  `language_known` varchar(30) NOT NULL COMMENT 'User Language: minimum - 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `User_Info`
--

INSERT INTO `User_Info` (`user_id`, `first_name`, `last_name`, `gender`, `email_id`, `username`, `password`, `address`, `city`, `state`, `country`, `zip_code`, `contact_number`, `hobby`, `language_known`) VALUES
(1, 'Priya', 'Dave', 'F', 'priya.dave@indianic.com', 'priya1811', 'Priya@18', 'Plot No: 498/A/2, Sector: 1 C, Opp. Samdarshan Aashram, Nr. Aayppa Temple', 'Gandhinagar', 'Gujarat', 'India', 382007, 2147483647, 'Reading Watching TV Series/Movies Dancing', 'Gujarati Hindi English'),
(3, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'Ramya@123@#', '  d kla bm\r\n afem nwe t\r\n fasdplbjtw b', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 0, 2147483647, 'Cooking', 'English'),
(4, 'Parth', 'Sheth', 'M', 'shethparth89@gmail.com', 'parth_s', 'Parth07$', '  d sm,sjk l\r\n saiwefnkpmva v\r\n f./3wmropbv', 'Ahmedabad', 'G', 'India', 0, 0, '', ''),
(5, 'Parth', 'Sheth', 'M', 'shethparth89@gmail.com', 'parth_s', 'Parth56%^', 's mal vm\r\n wa,m vnkw3lbv / woir vb  ', 'Ahmedabad', 'G', 'Sri-Lanka', 0, 0, 'Watching TV Series/MoviesListening SongsCooking', 'GujaratiEnglish'),
(6, '', '', '', '', '', '', '  ', '', '', 'India', 0, 0, '', ''),
(7, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', '  z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 0, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(8, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', '  z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(9, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(10, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(11, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(12, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(13, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(14, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 999999999, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(15, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 2147483647, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(16, 'Ramya', 'Dave', 'M', 'ramyadave111@gmail.com', 'ramya_27', 'rrrrr56TT@#', ' z waFbkv,WQBWNWTB', 'Gandhinagar', 'Gujarat', 'Sri-Lanka', 565678, 8989903456, 'ReadingWatching TV Series/MoviesDancing', 'GujaratiEnglish'),
(17, 'Kavisha', 'Shah', 'F', '', '', '', '  ', '', '', 'India', 0, 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_Info`
--
ALTER TABLE `User_Info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User_Info`
--
ALTER TABLE `User_Info`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'User Id: maxlength - 3 , PK', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
