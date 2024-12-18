-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `rid` int(11) NOT NULL,
  `email` text NOT NULL,
  `paswsord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`rid`, `email`, `paswsord`) VALUES
(1, 'shraddha@gmail.com', '1234'),
(2, 'divya@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `rid` int(11) NOT NULL,
  `name` text NOT NULL,
  `no` text NOT NULL,
  `popcorn` text NOT NULL,
  `soda` text NOT NULL,
  `seating` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`rid`, `name`, `no`, `popcorn`, `soda`, `seating`, `location`, `date`, `time`) VALUES
(9, 'shraddha', '3', '1', '1', 'premium', 'Asha Theater', '', ''),
(12, 'prachi', '1', '1', '1', 'standard', 'Asha Theater', '', ''),
(13, 'shraddha', '1', '2', '2', 'premium', 'Mahesh Theater', '', ''),
(14, 'divya', '3', '3', '3', 'standard', 'Asha Theater', '', ''),
(17, 'shraddha', '3', '2', '2', 'standard', 'Mahesh Theater', '', ''),
(18, 'shraddha', '3', '2', '2', 'standard', 'Mahesh Theater', '', ''),
(19, '', '', '', '', 'standard', 'Asha Theater', '', ''),
(20, '', '', '', '', 'standard', 'Asha Theater', '', ''),
(21, '', '', '', '', 'standard', 'Asha Theater', '', ''),
(22, 'hiii', '3', '2', '2', 'standard', 'Asha Theater', '', ''),
(23, 'hhhh', '1', '1', '1', 'standard', 'Asha Theater', '', ''),
(24, 'jjjjjjj', '2', '2', '2', 'standard', 'Mahesh Theater', 'date', 'time'),
(25, 'pihu', '2', '2', '2', 'standard', 'Asha Theater', '20', '09:00 AM'),
(26, 'riii', '2', '2', '2', 'premium', 'Mahesh Theater', 'September 7, 2023', '01:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `rid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`rid`, `name`, `email`, `contact`, `query`) VALUES
(2, 'shraddha', 'shraddhaaakolkar@gmail.com', '6766554432323', 'nothih'),
(3, 'divya', 'drakolkarys@gmail.com', '6766554432323', 'nothih'),
(4, 'shraddha', 'shraddhaaakolkar@gmail.com', '6766554432323', 'we would like to know about the koninoor hall');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `rid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`rid`, `name`, `email`, `feedback`) VALUES
(2, 'prachi', 'email', 'hdckslcsjzldz'),
(3, 'divya', 'email', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(4, 'ghj', 'email', 'kklytrfeds7654re3wygtrfed'),
(5, 'shrajil', '', 'hajksj jcldslx jhxclzj djnckjzxcl kjdlczkc nkczkj'),
(6, 'shraddha', 'email', 'REALLY GREAT website...');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `rid` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `rid` int(11) NOT NULL,
  `cno` text NOT NULL,
  `name` text NOT NULL,
  `expiry` text NOT NULL,
  `expiry2` text NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`rid`, `cno`, `name`, `expiry`, `expiry2`, `cvv`) VALUES
(5, '23456789', 'gjhk', '45', '908', 'cvv'),
(6, '79890', 'shraddha', '10', '2028', 'cvv'),
(9, '1234567890', 'shrajil', '90', '8907', 'cvv'),
(10, '1234567890', 'divya', '90', '8907', 'cvv'),
(11, '74593895380', 'prachi', '8', '898', '7890'),
(12, '1234 5678 9082 1678', 'shraddha', '10', '2029', '145-78');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `rid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`rid`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'shraddha', 'shraddha@gmail.com', '123456', '123456'),
(2, 'shraddha', 'shraddha@gmail.com', '123456', '123456'),
(4, 'shrajil', 'shraddhaaakolkar@gmail.com', '123456', '123456'),
(7, 'rupaa', 'rupa@gmail.com', '654322', '654322'),
(11, 'prachi', 'prachi@gmail.com', '123456', ''),
(12, 'divya', 'shraddha@gmail.com', '123456', ''),
(15, 'shrajil', 'drakolkarys@gmail.com', '123456', ''),
(16, 'liya', 'liya@gmail.com', '123456', '123456'),
(17, 'shraddha', 'shraddhaaakolkar@gmail.com', '1234561', '123456'),
(18, 'lili', 'drakolkarys@gmail.com', '123456', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
