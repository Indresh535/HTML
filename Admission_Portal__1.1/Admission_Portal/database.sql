-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 03:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step1`
--

CREATE TABLE `step1` (
  `name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `idtype` varchar(255) NOT NULL,
  `idno` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `std` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` int(255) NOT NULL,
  `domicile` varchar(255) NOT NULL,
  `ph` text NOT NULL,
  `married` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `subcat` varchar(255) NOT NULL,
  `rdno` varchar(255) NOT NULL,
  `placeeissue` varchar(255) NOT NULL,
  `dateissue` date NOT NULL,
  `validupto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step2`
--

CREATE TABLE `step2` (
  `name` varchar(255) NOT NULL,
  `HOUSENAME` varchar(255) NOT NULL,
  `PERMANENTADDRESS` varchar(500) NOT NULL,
  `PERMANENTUNION` varchar(255) NOT NULL,
  `PERMANENTDISTRICT` varchar(255) NOT NULL,
  `PERMANENTTALUK` varchar(255) NOT NULL,
  `PERMANENTCITY` varchar(255) NOT NULL,
  `PERMANENTPIN` int(255) NOT NULL,
  `RESIDENTICALADDRESS` varchar(500) NOT NULL,
  `RESIDENTICALUNON` varchar(255) NOT NULL,
  `RESIDENTICALDISTRICT` varchar(255) NOT NULL,
  `RESIDENTICALTALUK` varchar(255) NOT NULL,
  `RESIDENTICALCITY` varchar(255) NOT NULL,
  `RESIDENTICALPIN` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step3`
--

CREATE TABLE `step3` (
  `name` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `QUALIFICATION` varchar(255) NOT NULL,
  `INSTITUTE` varchar(255) NOT NULL,
  `SUBJECT` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `BOARD` varchar(255) NOT NULL,
  `TALUK` varchar(255) NOT NULL,
  `COURSEDURATION` int(255) NOT NULL,
  `RESULTDATE` date NOT NULL,
  `ROLLNO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step4`
--

CREATE TABLE `step4` (
  `name` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `COURSE` text NOT NULL,
  `SUB1` text NOT NULL,
  `SUB2` text NOT NULL,
  `SUB3` text NOT NULL,
  `LAN1` text NOT NULL,
  `LAN2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step5`
--

CREATE TABLE `step5` (
  `name` varchar(255) NOT NULL,
  `ID` int(255) NOT NULL,
  `SSLCNO` varchar(255) NOT NULL,
  `PUNO` varchar(255) NOT NULL,
  `INCOMENO` varchar(255) NOT NULL,
  `CASTENO` varchar(255) NOT NULL,
  `SSLC` longblob NOT NULL,
  `PU` longblob NOT NULL,
  `INCOME` longblob NOT NULL,
  `CASTE` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phno` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `step1`
--
ALTER TABLE `step1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `step2`
--
ALTER TABLE `step2`
  ADD UNIQUE KEY `HOUSENAME_3` (`HOUSENAME`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `HOUSENAME` (`HOUSENAME`),
  ADD KEY `HOUSENAME_2` (`HOUSENAME`);

--
-- Indexes for table `step3`
--
ALTER TABLE `step3`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ROLLNO` (`ROLLNO`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `step4`
--
ALTER TABLE `step4`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `step5`
--
ALTER TABLE `step5`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `step1`
--
ALTER TABLE `step1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `step3`
--
ALTER TABLE `step3`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `step4`
--
ALTER TABLE `step4`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `step5`
--
ALTER TABLE `step5`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
