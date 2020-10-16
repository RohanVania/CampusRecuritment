-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 05:09 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusrecuritment`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus_recuritment_admin`
--

CREATE TABLE `campus_recuritment_admin` (
  `A_ID` int(11) NOT NULL,
  `A_USERNAME` varchar(200) NOT NULL,
  `A_PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_recuritment_admin`
--

INSERT INTO `campus_recuritment_admin` (`A_ID`, `A_USERNAME`, `A_PASSWORD`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `campus_recuritment_applied`
--

CREATE TABLE `campus_recuritment_applied` (
  `ID` int(11) NOT NULL,
  `S_ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `V_ID` int(11) NOT NULL,
  `PROFILE` varchar(200) NOT NULL,
  `STATUS` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_recuritment_applied`
--

INSERT INTO `campus_recuritment_applied` (`ID`, `S_ID`, `C_ID`, `V_ID`, `PROFILE`, `STATUS`) VALUES
(1, 1, 1, 2, 'Design', 1),
(2, 2, 1, 2, 'Design', 0),
(3, 1, 1, 1, 'Software Developer', 1),
(4, 2, 1, 1, 'Software Developer', 0),
(5, 1, 1, 3, 'Software Developer', 1),
(6, 1, 1, 4, 'Web development', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campus_recuritment_company`
--

CREATE TABLE `campus_recuritment_company` (
  `C_ID` int(11) NOT NULL,
  `C_COMPANY` varchar(255) NOT NULL,
  `C_ESTABLISHED` year(4) NOT NULL,
  `C_EMAIL` varchar(255) NOT NULL,
  `C_CONTACT` varchar(20) NOT NULL,
  `C_HR` varchar(200) NOT NULL,
  `C_USERNAME` varchar(150) NOT NULL,
  `C_PASSWORD` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_recuritment_company`
--

INSERT INTO `campus_recuritment_company` (`C_ID`, `C_COMPANY`, `C_ESTABLISHED`, `C_EMAIL`, `C_CONTACT`, `C_HR`, `C_USERNAME`, `C_PASSWORD`) VALUES
(1, 'TCS', 1995, 'TCS@gmail.com', '7506043998', 'Aditi', 'aditi', '1234'),
(2, 'PRDXN', 1979, 'PRDXN@gmail.com', '7506043997', 'Advait', 'advait', '1234'),
(3, 'NIMAP', 2005, 'NIMAP@gmail.com', '7506043991', 'Pankaj', 'pankaj', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `campus_recuritment_department`
--

CREATE TABLE `campus_recuritment_department` (
  `D_ID` int(11) NOT NULL,
  `D_DEPARTMENT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_recuritment_department`
--

INSERT INTO `campus_recuritment_department` (`D_ID`, `D_DEPARTMENT`) VALUES
(1, 'INFT'),
(2, 'CMPN'),
(3, 'EXTC'),
(4, 'ETRX'),
(5, 'BIO');

-- --------------------------------------------------------

--
-- Table structure for table `campus_recuritment_students`
--

CREATE TABLE `campus_recuritment_students` (
  `S_ID` int(11) NOT NULL,
  `S_NAME` varchar(200) NOT NULL,
  `S_EMAIL` varchar(255) NOT NULL,
  `S_USERNAME` varchar(200) NOT NULL,
  `S_PASSWORD` varchar(150) NOT NULL,
  `S_GENDER` varchar(100) NOT NULL,
  `S_CONTACT` varchar(20) NOT NULL,
  `S_ADDRESS` varchar(255) NOT NULL,
  `S_PHOTO` varchar(255) NOT NULL,
  `S_DOB` date NOT NULL,
  `S_SSC` varchar(200) NOT NULL,
  `S_SSC_YP` year(4) NOT NULL,
  `S_SSC_AGG` int(20) NOT NULL,
  `S_HSC` varchar(200) NOT NULL,
  `S_HSC_YP` year(4) NOT NULL,
  `S_HSC_AGG` int(20) NOT NULL,
  `S_COLLEGE` varchar(200) NOT NULL,
  `S_COLLEGE_YP` year(4) NOT NULL,
  `S_DEPARTMENT` varchar(100) NOT NULL,
  `S_COLLEGE_AGG` int(20) NOT NULL,
  `S_EXTRA_CUR` varchar(255) NOT NULL,
  `S_OTHER_QUA` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_recuritment_students`
--

INSERT INTO `campus_recuritment_students` (`S_ID`, `S_NAME`, `S_EMAIL`, `S_USERNAME`, `S_PASSWORD`, `S_GENDER`, `S_CONTACT`, `S_ADDRESS`, `S_PHOTO`, `S_DOB`, `S_SSC`, `S_SSC_YP`, `S_SSC_AGG`, `S_HSC`, `S_HSC_YP`, `S_HSC_AGG`, `S_COLLEGE`, `S_COLLEGE_YP`, `S_DEPARTMENT`, `S_COLLEGE_AGG`, `S_EXTRA_CUR`, `S_OTHER_QUA`) VALUES
(1, 'Rohan', 'rohan.vania@gmail.com', 'rohan@789', '1234', 'Male', '9819909091', 'Kurla', '20191106060618.jpg', '1997-11-01', 'Olps', 2013, 88, 'Ruia', 2015, 76, 'VIT', 2019, 'INFT', 61, 'Football', 'None'),
(2, 'Shreyansh', 'shrey@gmail.com', 'shrey@789', '1234', 'Male', '9987560177', 'California', '20191106060816.jpg', '1992-11-05', 'Swami', 2009, 80, 'Wilson', 2011, 70, 'Somaiya', 2015, 'ETRX', 72, 'Chess', 'Ms');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `ID` int(11) NOT NULL,
  `C_ID` int(11) NOT NULL,
  `C_PROFILE` varchar(200) NOT NULL,
  `C_SALARY` int(11) NOT NULL,
  `C_SSC_CRITERIA` int(11) NOT NULL,
  `C_HSC_CRITERIA` int(11) NOT NULL,
  `C_COLLEGE_CRITERIA` int(11) NOT NULL,
  `C_BOND` varchar(200) NOT NULL,
  `C_VACANCY` varchar(200) NOT NULL,
  `C_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`ID`, `C_ID`, `C_PROFILE`, `C_SALARY`, `C_SSC_CRITERIA`, `C_HSC_CRITERIA`, `C_COLLEGE_CRITERIA`, `C_BOND`, `C_VACANCY`, `C_DATE`) VALUES
(3, 1, 'Software Developer', 10000, 60, 60, 60, '2 Year', '3', '2020-02-06'),
(4, 1, 'Web development', 15000, 70, 70, 60, 'None', '2', '2020-02-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus_recuritment_admin`
--
ALTER TABLE `campus_recuritment_admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `campus_recuritment_applied`
--
ALTER TABLE `campus_recuritment_applied`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `campus_recuritment_company`
--
ALTER TABLE `campus_recuritment_company`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `campus_recuritment_department`
--
ALTER TABLE `campus_recuritment_department`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `campus_recuritment_students`
--
ALTER TABLE `campus_recuritment_students`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus_recuritment_admin`
--
ALTER TABLE `campus_recuritment_admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `campus_recuritment_applied`
--
ALTER TABLE `campus_recuritment_applied`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campus_recuritment_company`
--
ALTER TABLE `campus_recuritment_company`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `campus_recuritment_department`
--
ALTER TABLE `campus_recuritment_department`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `campus_recuritment_students`
--
ALTER TABLE `campus_recuritment_students`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
