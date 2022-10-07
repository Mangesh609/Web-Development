-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blewminds`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `FIRSTNAME` varchar(30) NOT NULL,
  `LASTNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `EMAIL_ID` varchar(50) NOT NULL,
  `MOBILE` varchar(10) NOT NULL,
  `AADHAR-NO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`FIRSTNAME`, `LASTNAME`, `PASSWORD`, `EMAIL_ID`, `MOBILE`, `AADHAR-NO`) VALUES
('Test', 'Faculty', 'password', 'faculty1@gmail.com', '9812364579', '2558-5895-4475-7778'),
('faculty', 'test 2', '12345', 'faculty2@gmail.com', '9124756958', '2536-5248-8456-8475');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `EMAIL-ID` varchar(20) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `FEEDBACK` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`FIRSTNAME`, `LASTNAME`, `EMAIL-ID`, `ADDRESS`, `FEEDBACK`) VALUES
('Test ', 'Faculty', 'testfaculty@gmail.co', 'Not preferred to give address', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
('Faculty', 'test 2', 'faculty2@gmail.com', '10-09-235,Gurgon,India', 'This is a test feedback, This feedback will be visible in the admin dash board.\r\nBlewMinds Always Inspiring!!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
