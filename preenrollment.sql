-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2023 at 02:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `preenrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresstable`
--

CREATE TABLE `addresstable` (
  `idno` varchar(50) NOT NULL,
  `lotNobuildingNo` varchar(200) NOT NULL,
  `street` varchar(200) NOT NULL,
  `brgy` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addresstable`
--

INSERT INTO `addresstable` (`idno`, `lotNobuildingNo`, `street`, `brgy`, `city`, `province`) VALUES
('SLSU-TAY00021', 'N/A', 'SITIO DON ELPIDIO', 'LALO', 'TAYABAS CITY, QUEZON', 'QUEZON');

-- --------------------------------------------------------

--
-- Table structure for table `coursetable`
--

CREATE TABLE `coursetable` (
  `course` enum('BSITCPT','BSACS','BSHM') NOT NULL,
  `courseDes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `idno` varchar(50) NOT NULL,
  `subCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`idno`, `subCode`) VALUES
('SLSU-TAY9874', '');

-- --------------------------------------------------------

--
-- Table structure for table `instructortable`
--

CREATE TABLE `instructortable` (
  `instructorId` varchar(150) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `course` enum('BSITCPT','BSACS','BSHM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructortable`
--

INSERT INTO `instructortable` (`instructorId`, `fname`, `mname`, `lname`, `course`) VALUES
('', '', '', '', ''),
('SLSU-223', 'Carl', 'Darren', 'Apelacion', ''),
('SLSU-TAY698', 'Arnulfo', 'Dirain', 'Señores', 'BSITCPT');

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `idno` varchar(50) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `course` enum('BSIT-CPT','BSA-CS','BSHM') NOT NULL,
  `yearlvl` enum('2nd','3rd','4th','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`idno`, `fname`, `mname`, `lname`, `dob`, `sex`, `course`, `yearlvl`) VALUES
('SLSU-TAY000021', '', 'GAELA', 'NUQUI', '1999-01-14', 'Male', 'BSA-CS', '3rd');

-- --------------------------------------------------------

--
-- Table structure for table `subjecttable`
--

CREATE TABLE `subjecttable` (
  `subCode` varchar(100) NOT NULL,
  `subDes` varchar(200) NOT NULL,
  `subType` varchar(50) NOT NULL,
  `units` int(20) NOT NULL,
  `hours` int(20) NOT NULL,
  `time` int(20) NOT NULL,
  `room` varchar(100) NOT NULL,
  `sem` enum('1st','2nd') NOT NULL,
  `instructorId` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjecttable`
--

INSERT INTO `subjecttable` (`subCode`, `subDes`, `subType`, `units`, `hours`, `time`, `room`, `sem`, `instructorId`) VALUES
('GEC07', 'Art Appreciation', '', 0, 0, 0, '', '1st', ''),
('GEC10', 'BSIT-CPT', '', 0, 0, 0, '', '1st', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(50) NOT NULL,
  `idno` varchar(200) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(300) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `userType` enum('Regular','Irregular','Transferee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `idno`, `fname`, `mname`, `lname`, `password`, `email`, `sex`, `userType`) VALUES
(1, 'SLSU-TAY1234', 'Drioden', '', 'Nuqui', '12345678', '', 'Male', ''),
(2, 'SLSU-TAY0987', 'Fairchild', 'Diane', 'Halcon', '123456789', 'fairchilddiane@gmail.com', 'Female', 'Regular'),
(3, 'SLSU-6547', 'Drio', 'Gaela', 'Nuqui', '123456789', 'driodennuqui4@gmail.com', 'Male', 'Regular'),
(4, 'SLSU-TAY2232', 'Carlo', 'Dapat', 'Peren', '123456788', 'carloperen@gmail.com', 'Male', 'Regular'),
(5, 'SLSU-TAY1239', 'Joshua', 'Saludes', 'Garcia', '12345689', 'joshuagarcia@gmail.com', 'Male', 'Regular'),
(6, 'SLSU-TAY6549', 'LLLL', 'llll', 'dasdsad', 'dadasdsa', 'sadsadsa@gmail.com', 'Male', 'Regular'),
(7, 'SLSU-TAY8769', 'Kobe', 'Bryant', 'Anthony', '09871234', 'kobebryant@gmail.com', 'Male', 'Regular'),
(8, 'SLSU-TAY6321', 'Kevin', 'Saludes', 'Ramiro', '1234567', 'kevinramiro@gmail.com', 'Male', 'Regular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresstable`
--
ALTER TABLE `addresstable`
  ADD PRIMARY KEY (`idno`),
  ADD UNIQUE KEY `idno` (`idno`);

--
-- Indexes for table `coursetable`
--
ALTER TABLE `coursetable`
  ADD UNIQUE KEY `course` (`course`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `instructortable`
--
ALTER TABLE `instructortable`
  ADD PRIMARY KEY (`instructorId`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`idno`),
  ADD UNIQUE KEY `idno` (`idno`);

--
-- Indexes for table `subjecttable`
--
ALTER TABLE `subjecttable`
  ADD UNIQUE KEY `subCode` (`subCode`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
