-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2019 at 06:06 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.0RC2

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appt`
--

CREATE TABLE `appt` (
  `ano` int(11) NOT NULL,
  `p_Aadhar` int(11) NOT NULL,
  `d_Aadhar` int(11) NOT NULL,
  `speciality` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appt`
--

INSERT INTO `appt` (`ano`, `p_Aadhar`, `d_Aadhar`, `speciality`) VALUES
(17, 6969, 6820, 'Dermatologist'),
(388, 1235, 6480, 'heart'),
(546, 1237, 6999, 'oncologist'),
(707, 6969, 6820, 'Dermatologist'),
(772, 1236, 6482, 'Dermatologist'),
(885, 1234, 6482, 'Dermatologist');

-- --------------------------------------------------------

--
-- Table structure for table `doct`
--

CREATE TABLE `doct` (
  `AAdharid` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `dspec` varchar(20) NOT NULL,
  `dshow` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doct`
--

INSERT INTO `doct` (`AAdharid`, `dname`, `dspec`, `dshow`) VALUES
(6480, 'yash', 'heart', 'N'),
(6481, 'jitu', 'physician', 'N'),
(6482, 'jay', 'Dermatologist', 'N'),
(6849, 'Munna', 'Physician', 'Y'),
(65478, 'bro', 'Physician', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pname` varchar(30) NOT NULL,
  `paddr` varchar(30) NOT NULL,
  `psex` varchar(1) NOT NULL,
  `pshow` varchar(1) NOT NULL DEFAULT 'Y',
  `Aadharid` int(11) NOT NULL,
  `Speciality` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pname`, `paddr`, `psex`, `pshow`, `Aadharid`, `Speciality`) VALUES
('jitu', 'dheeraj gaurav', 'm', 'N', 1234, 'heart'),
('yash', 'borivali', 'M', 'Y', 1235, 'oncologist'),
('san', 'infinity', 'f', 'Y', 12369, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `sno` int(11) NOT NULL,
  `stime` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appt`
--
ALTER TABLE `appt`
  ADD PRIMARY KEY (`ano`);

--
-- Indexes for table `doct`
--
ALTER TABLE `doct`
  ADD PRIMARY KEY (`AAdharid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Aadharid`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
