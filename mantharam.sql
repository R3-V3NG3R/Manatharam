-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 06:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mantharam`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sNo` int(100) NOT NULL,
  `Name` varchar(400) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Subject` varchar(500) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `SubTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Status` varchar(400) NOT NULL DEFAULT 'None',
  `UpTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sNo`, `Name`, `Email`, `Subject`, `Message`, `SubTime`, `Status`, `UpTime`) VALUES
(1, 'Vamsi Krishna Kodimela', 'kodimelarathnam@gmail.com', 'Nothing', 'THis is a trail', '2020-03-01 05:05:00', 'None', '2020-03-01 05:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `joinus`
--

CREATE TABLE `joinus` (
  `sNo` int(100) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `subTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(300) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinus`
--

INSERT INTO `joinus` (`sNo`, `Name`, `Mobile`, `Email`, `Address`, `Reason`, `subTime`, `UpTime`, `Status`) VALUES
(1, 'Vamsi Krishna Kodimela', '08919641636', '', '2-74B\r\nAmbedkar Colony', 'knksdncklndsc', '2020-03-01 05:29:07', '2020-03-01 05:29:07', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `needhelp`
--

CREATE TABLE `needhelp` (
  `sNo` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Need` varchar(500) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `subTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(300) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `needhelp`
--

INSERT INTO `needhelp` (`sNo`, `Name`, `Mobile`, `Need`, `Address`, `subTime`, `UpTime`, `Status`) VALUES
(1, 'Vamsi Krishna Kodimela', '08919641636', '', '2-74B\r\nAmbedkar Colony', '2020-03-01 05:17:41', '2020-03-01 05:17:41', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `organdonation`
--

CREATE TABLE `organdonation` (
  `sNo` int(20) NOT NULL,
  `Name` varchar(400) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `subTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `UpTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` varchar(300) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organdonation`
--

INSERT INTO `organdonation` (`sNo`, `Name`, `Mobile`, `Email`, `Type`, `Address`, `subTime`, `UpTime`, `Status`) VALUES
(1, 'Vamsi Krishna Kodimela', '08919641636', 'kodimelarathnam@gmail.com', 'Blood', '2-74B\r\nAmbedkar Colony', '2020-03-01 05:25:15', '2020-03-01 05:25:15', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `joinus`
--
ALTER TABLE `joinus`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `needhelp`
--
ALTER TABLE `needhelp`
  ADD PRIMARY KEY (`sNo`);

--
-- Indexes for table `organdonation`
--
ALTER TABLE `organdonation`
  ADD PRIMARY KEY (`sNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joinus`
--
ALTER TABLE `joinus`
  MODIFY `sNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `needhelp`
--
ALTER TABLE `needhelp`
  MODIFY `sNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organdonation`
--
ALTER TABLE `organdonation`
  MODIFY `sNo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
