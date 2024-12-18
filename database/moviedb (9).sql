-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 10:22 AM
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
(3, 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `rid` int(11) NOT NULL,
  `no` text NOT NULL,
  `popcorn` text NOT NULL,
  `soda` text NOT NULL,
  `seating` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`rid`, `no`, `popcorn`, `soda`, `seating`, `location`, `date`, `time`, `total`) VALUES
(45, '2', '1', '2', 'standard', 'Mahesh Theater', 'September 6, 2023', '1:00 - 4:00 PM', '1150.00'),
(46, '2', '2', '2', 'premium', 'Konihoor Mall', 'September 8, 2023', '4:30 - 7:00 PM', '1300.00'),
(47, '1', '1', '1', 'premium', 'Mahesh Theater', 'September 7, 2023', '1:00 - 4:00 PM', '650.00'),
(48, '2', '2', '2', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '1300.00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` int(11) NOT NULL,
  `title` text NOT NULL,
  `language` text NOT NULL,
  `date` text NOT NULL,
  `action` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(6, 'shARJIL', 'sharjeel12@gmail.com', '9921445406', 'cAN I BOOK SEAT FOR NEXT MONTH.'),
(7, 'Pratiksha', 'pratiksha234@gmail.com', '9087655677', 'want to know more about latest place'),
(8, 'Ishwari', 'ishwari567@gmail.com', '9130430101', 'can you add more food items?'),
(9, 'shraddha', 'shraddhaaakolkar@gmail.com', '6766554432323', 'we would like to know about the koninoor hall'),
(11, 'shraddha', 'shraddha@gmail.com', '9921445406', 'can i book old movie ticket for 50 people');

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
(7, 'shrajil', 'email', 'An excellent combionation of movies '),
(8, 'Rupali Lashkare', 'rupppp13@gmail.com', 'Amazing movie and fantastic food'),
(9, 'Chanchal dhumal', 'dhumalchanchal78@gmail.com', 'nice'),
(13, 'shraddha', 'shraddha@gmail.com', ''),
(15, 'shraddha', 'shraddha@gmail.com', 'Your system\'s user-friendly interface made booking tickets a breeze.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `ibooking`
--

CREATE TABLE `ibooking` (
  `rid` int(11) NOT NULL,
  `no` text NOT NULL,
  `popcorn` text NOT NULL,
  `soda` text NOT NULL,
  `seating` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ibooking`
--

INSERT INTO `ibooking` (`rid`, `no`, `popcorn`, `soda`, `seating`, `location`, `date`, `time`, `total`) VALUES
(28, '2', '1', '1', 'premium', 'Konihoor Mall', 'September 8, 2023', '4:30 - 7:00 PM', '850.00'),
(29, '1', '1', '1', 'premium', 'Mahesh Theater', 'September 6, 2023', '9:00 - 12:00 AM', '550.00'),
(30, '2', '0', '0', 'premium', 'Mahesh Theater', 'September 6, 2023', '9:00 - 12:00 AM', '600.00'),
(31, '4', '4', '4', 'premium', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '2200.00'),
(32, '2', '1', '1', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '850.00'),
(33, '2', '0', '0', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '600.00'),
(34, '2', '3', '3', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '1350.00');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `index` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`index`, `image`) VALUES
(0, 2147483647),
(0, 2147483647),
(0, 2147483647),
(0, 2147483647),
(0, 0),
(0, 0),
(0, 0),
(0, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `ipayment`
--

CREATE TABLE `ipayment` (
  `rid` int(11) NOT NULL,
  `cno` text NOT NULL,
  `name` text NOT NULL,
  `expiry` text NOT NULL,
  `expiry2` text NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ipayment`
--

INSERT INTO `ipayment` (`rid`, `cno`, `name`, `expiry`, `expiry2`, `cvv`) VALUES
(12, '512293018586', 'divya', '10', '24', '2657'),
(13, '839487321283', 'rupaa', '02', '2022', '6547'),
(14, '983021938495', 'kaveri bhosale', '12', '2025', '2341'),
(15, '981202938452', 'chanchal dhumal', '01', '2024', '9876'),
(16, '12467890532', 'rupaa', '09', '29', '5679'),
(17, '234567890', 'shraddha', '09', '56', '446'),
(18, '4567890', 'prachi', '09', '56', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `iseat`
--

CREATE TABLE `iseat` (
  `rid` int(11) NOT NULL,
  `seats` text NOT NULL,
  `amount` text NOT NULL,
  `a9` text NOT NULL,
  `a10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iseat`
--

INSERT INTO `iseat` (`rid`, `seats`, `amount`, `a9`, `a10`) VALUES
(25, '2', 'Rs.600', 'a9', 'a10'),
(26, '1', 'Rs.300', 'a9', 'a10'),
(27, '2', 'Rs.600', 'a9', 'a10'),
(28, '4', 'Rs.1200', 'a9', 'a10'),
(29, '2', 'Rs.600', 'a9', 'a10'),
(30, '2', 'Rs.600', 'a9', 'a10'),
(31, '2', 'Rs.600', 'a9', 'a10');

-- --------------------------------------------------------

--
-- Table structure for table `lbooking`
--

CREATE TABLE `lbooking` (
  `rid` int(11) NOT NULL,
  `no` text NOT NULL,
  `popcorn` text NOT NULL,
  `soda` text NOT NULL,
  `seating` text NOT NULL,
  `location` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lbooking`
--

INSERT INTO `lbooking` (`rid`, `no`, `popcorn`, `soda`, `seating`, `location`, `date`, `time`, `total`) VALUES
(20, '1', '2', '2', 'premium', 'Asha Theater', 'September 7, 2023', '4:30 - 7:00 PM', '1000.00'),
(21, '1', '2', '2', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '1000.00'),
(22, '1', '1', '1', 'standard', 'Asha Theater', 'September 6, 2023', '9:00 - 12:00 AM', '750.00');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `library` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `language` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `action` text DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`library`, `title`, `price`, `language`, `date`, `action`, `image`) VALUES
(39, 'Fast and Furios & ', '300', 'English', '2023-10-28', 'Action', '16985255731 photo'),
(42, 'Karwan', '150', 'hindi', '2023-10-12', 'Comedy', '16985256274 photo'),
(43, 'Pihu', '250', 'hindi', '2022-02-01', 'Horror', '16985256335 photo'),
(44, 'Kedarnath', '200', 'hindi', '2022-11-09', 'Romantic', '16985256396 photo'),
(45, 'Soncidaya', '230', 'hindi', '2020-08-06', 'Action', '16985256467 photo'),
(47, 'URI', '350', 'hindi', '2022-06-14', 'Action', '16985256798 photo');

-- --------------------------------------------------------

--
-- Table structure for table `libseat`
--

CREATE TABLE `libseat` (
  `rid` int(11) NOT NULL,
  `seats` text NOT NULL,
  `amount` text NOT NULL,
  `a3` text NOT NULL,
  `a4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `libseat`
--

INSERT INTO `libseat` (`rid`, `seats`, `amount`, `a3`, `a4`) VALUES
(20, '2', 'Rs.500', 'a3', 'a4'),
(21, '1', 'Rs.250', 'a3', 'a4'),
(22, '1', 'Rs.250', 'a3', 'a4');

-- --------------------------------------------------------

--
-- Table structure for table `lpayment`
--

CREATE TABLE `lpayment` (
  `rid` int(11) NOT NULL,
  `cno` text NOT NULL,
  `name` text NOT NULL,
  `expiry` text NOT NULL,
  `expiry2` text NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lpayment`
--

INSERT INTO `lpayment` (`rid`, `cno`, `name`, `expiry`, `expiry2`, `cvv`) VALUES
(21, '99214454063456', 'prachi', '12', '26', '5643'),
(22, '123948573290', 'mansi sasane', '11', '2026', '9098'),
(23, '234093102934', 'sakshi bade', '07', '2027', '5093');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `rid` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `rate` text NOT NULL,
  `type` text NOT NULL
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
(24, '90752485331234', 'shraddha', '11', '25', '3032'),
(25, '992144540698', 'pratiksha dhere', '04', '2028', '3489'),
(26, '492019283948', 'bhavana palve', '01', '2028', '4454'),
(27, '09876765444', 'divya', '09', '57', '45687');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `rid` int(11) NOT NULL,
  `seats` text NOT NULL,
  `amount` text NOT NULL,
  `a6` text NOT NULL,
  `a7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`rid`, `seats`, `amount`, `a6`, `a7`) VALUES
(45, '2', 'Rs.400', 'a6', 'a7'),
(46, '2', 'Rs.400', 'a6', 'a7'),
(47, '1', 'Rs.200', 'a6', 'a7'),
(48, '2', 'Rs.400', 'a6', 'a7');

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
(21, 'divya', 'divya@gmail.com', '123456', '123456'),
(22, 'sharjil', 'sharjil@gmail.com', '123456', '123456'),
(23, 'prachi', 'prachi@gmail.com', '1234', '1234'),
(24, 'mayra', 'mayra@gmail.com', '65432', '65432'),
(25, 'rupaa', 'rupa@gmail.com', '123456', '123456'),
(26, 'shraddha', 'shraddha@gmail.com', '123456', '123456');

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`);

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
-- Indexes for table `ibooking`
--
ALTER TABLE `ibooking`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `ipayment`
--
ALTER TABLE `ipayment`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `iseat`
--
ALTER TABLE `iseat`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `lbooking`
--
ALTER TABLE `lbooking`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`library`);

--
-- Indexes for table `libseat`
--
ALTER TABLE `libseat`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `lpayment`
--
ALTER TABLE `lpayment`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
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
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ibooking`
--
ALTER TABLE `ibooking`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `ipayment`
--
ALTER TABLE `ipayment`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `iseat`
--
ALTER TABLE `iseat`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `lbooking`
--
ALTER TABLE `lbooking`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `library` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `libseat`
--
ALTER TABLE `libseat`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lpayment`
--
ALTER TABLE `lpayment`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
