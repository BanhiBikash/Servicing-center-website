-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 03:08 PM
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
-- Database: `dtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `name` varchar(300) NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `Filename` varchar(100) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`name`, `link`, `status`, `Filename`, `hide`) VALUES
('BOARD', 'link.com', 'On-going', '1642686359.jpeg', 1),
('MECHANIC', 'link.com', 'On-going', '1642682458.jpeg', 1),
('WIELDING', 'link.com', 'On-going', '1642686322.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inservice`
--

CREATE TABLE `inservice` (
  `name` varchar(300) NOT NULL,
  `service_charge` int(11) NOT NULL,
  `repair_charge` int(11) NOT NULL,
  `install_charge` int(11) NOT NULL,
  `total_charge` int(11) NOT NULL,
  `main_service` varchar(300) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prime`
--

CREATE TABLE `prime` (
  `amount` int(11) NOT NULL,
  `unit` varchar(100) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `name` varchar(300) NOT NULL,
  `status` varchar(300) DEFAULT 'On-going',
  `Filename` varchar(100) DEFAULT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`name`, `status`, `Filename`, `hide`) VALUES
('A.C.', 'On-going', '1642674782.jpeg', 1),
('ELECTRIC', 'On-going', '1642674679.jpeg', 1),
('GEYSER', 'On-going', '1642674709.jpeg', 1),
('PLUMBING', 'On-going', '1642674665.jpeg', 1),
('REFRIDGERATOR', 'On-going', '1642674851.jpeg', 1),
('TV', 'On-going', '1642674695.jpeg', 1),
('WASHING MACHINE', 'On-going', '1642675224.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('user1', 'pass1'),
('user2', 'pass2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `inservice`
--
ALTER TABLE `inservice`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `prime`
--
ALTER TABLE `prime`
  ADD PRIMARY KEY (`amount`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
