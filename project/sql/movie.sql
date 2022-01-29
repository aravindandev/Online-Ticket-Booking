-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 03:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `uname`, `pwd`) VALUES
(1, 'venu', '1234'),
(2, 'unni', 'unni123');

-- --------------------------------------------------------

--
-- Table structure for table `screen1`
--

CREATE TABLE `screen1` (
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screen1`
--

INSERT INTO `screen1` (`seat`) VALUES
(21),
(22),
(35),
(36),
(45);

-- --------------------------------------------------------

--
-- Table structure for table `screen2`
--

CREATE TABLE `screen2` (
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screen2`
--

INSERT INTO `screen2` (`seat`) VALUES
(1),
(2),
(3),
(7),
(8),
(9),
(15),
(16),
(17),
(24),
(25),
(29),
(30),
(32),
(33),
(36),
(40),
(41),
(45),
(48),
(49),
(51),
(52),
(53),
(54),
(56);

-- --------------------------------------------------------

--
-- Table structure for table `screen3`
--

CREATE TABLE `screen3` (
  `seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `screen3`
--

INSERT INTO `screen3` (`seat`) VALUES
(12),
(13),
(14),
(25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `screen1`
--
ALTER TABLE `screen1`
  ADD UNIQUE KEY `seat` (`seat`);

--
-- Indexes for table `screen2`
--
ALTER TABLE `screen2`
  ADD UNIQUE KEY `seat` (`seat`);

--
-- Indexes for table `screen3`
--
ALTER TABLE `screen3`
  ADD UNIQUE KEY `seat` (`seat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
