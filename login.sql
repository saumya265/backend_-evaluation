-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2024 at 08:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `phone_number`, `email`, `password`) VALUES
(1, 'Ansh', '7505092030', 'ansh@gmail.com', '$2y$10$XbxreoVw3UzOnq7kpDHBmOogOcrqwaufl.XkAmmuNT1LSfRZSq2sy'),
(2, 'amit', '7505092030', 'icodeburner@gmail.com', '$2y$10$u8p7ouC869EaTdmm0M/y1OPDNc7YrbotvoHGYkTgw1PulkIwXLTQO');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `registered_on` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `address`, `password`, `registered_on`) VALUES
(1, 'Ansh', 'ansh@gmai.com', 'Harigarh', '1234', '23/06/2024 12:24 am');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `sno` int(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sno`, `user_name`, `user_email`, `message`) VALUES
(1, 'Ansh', 'ansh@gmail.com', 'hello'),
(2, 'Ansh', 'ansh@gmail.com', 'hello'),
(3, 'Ansh', 'ansh@gmail.com', 'hello'),
(4, 'Ansh', 'ansh@gmail.com', 'hello'),
(5, 'Ansh', 'ansh@gmail.com', ''),
(6, 'Ansh', 'ansh@gmail.com', 'hello'),
(7, 'Ansh', 'ansh@gmail.com', 'hello'),
(8, 'Ansh', 'ansh@gmail.com', 'hello'),
(9, 'Ansh', 'ansh@gmail.com', 'hello'),
(10, 'Ansh', 'ansh@gmail.com', 'hello'),
(11, 'Ansh', 'ansh@gmail.com', 'hello'),
(12, 'Ansh', 'ansh@gmail.com', 'hello'),
(13, 'Ansh', 'ansh@gmail.com', ''),
(14, 'Ansh', 'ansh@gmail.com', 'hello'),
(15, 'Ansh', 'ansh@gmail.com', 'hello'),
(16, 'amit', 'icodeburner@gmail.com', 'hii my name is amit.'),
(17, 'amit', 'icodeburner@gmail.com', 'hii my name is amit.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
