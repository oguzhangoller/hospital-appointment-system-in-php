-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2017 at 08:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admins`
--

CREATE TABLE `Admins` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admins`
--

INSERT INTO `Admins` (`ID`, `Username`, `Password`) VALUES
(1, 'admin2', '36'),
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `ID` int(11) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Doctor` varchar(30) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`ID`, `User`, `Doctor`, `Time`) VALUES
(15, 'sampleUser', 'kalpci', '2017-11-12 10:05:00'),
(16, 'sampleUser', 'beyinDoktoru', '2018-10-10 10:05:00'),
(17, 'sampleUser', 'kalpdoktoru', '1987-10-01 05:10:00'),
(18, 'sampleUser', 'mr.bobrek', '2015-06-14 09:15:00'),
(19, 'sampleUser', 'mr.ortopedi', '2017-12-10 09:10:00'),
(20, 'sampleUser', 'mr.ortopedi', '2010-10-10 10:10:00'),
(21, 'user2', 'bobrekci', '2017-09-10 12:10:00'),
(22, 'user2', 'beyinDoktoru', '2011-10-10 09:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `Branches`
--

CREATE TABLE `Branches` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Branches`
--

INSERT INTO `Branches` (`ID`, `Name`) VALUES
(4, 'bobrek'),
(6, 'ortopedi'),
(7, 'beyin'),
(8, 'kalp');

-- --------------------------------------------------------

--
-- Table structure for table `Doctors`
--

CREATE TABLE `Doctors` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Branch` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctors`
--

INSERT INTO `Doctors` (`ID`, `Name`, `Branch`) VALUES
(8, 'beyinDoktoru', 'beyin'),
(10, 'bobrDoktor', 'bobrek'),
(11, 'beyinCerrahi', 'beyin'),
(12, 'mr.bobrek', 'bobrek'),
(13, 'kalpdoktoru', 'kalp'),
(14, 'kalpci', 'kalp'),
(15, 'mr.ortopedi', 'ortopedi'),
(16, 'veli', 'kalp');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Name`, `Password`) VALUES
(4, 'sampleUser', 'oguzhan', '123456'),
(5, 'user2', 'Ali', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admins`
--
ALTER TABLE `Admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Branches`
--
ALTER TABLE `Branches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Doctors`
--
ALTER TABLE `Doctors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admins`
--
ALTER TABLE `Admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Appointments`
--
ALTER TABLE `Appointments`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `Branches`
--
ALTER TABLE `Branches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `Doctors`
--
ALTER TABLE `Doctors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
