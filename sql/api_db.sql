-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2024 at 11:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idusers` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idusers`, `name`, `email`) VALUES
(1, 'Updated Name', 'updated@example.com'),
(6, 'Updated Name', 'updated@example.com'),
(10, 'Updated Name', 'updated@example.com'),
(11, 'John Doe', 'john@example.com'),
(15, 'John Doe', 'john@example.com'),
(17, 'John Doe', 'john@example.com'),
(19, 'Updated Name', 'updated@example.com'),
(20, 'Updated Name', 'updated@example.com'),
(21, 'John Doe', 'john@example.com'),
(22, 'John Doe', 'john@example.com'),
(23, 'John Doe', 'john@example.com'),
(24, 'John Doe', 'john@example.com'),
(25, 'John Doe', 'john@example.com'),
(26, 'John Doe', 'john@example.com'),
(27, 'John Doe', 'john@example.com'),
(28, 'John Doe', 'john@example.com'),
(29, 'John Doe', 'john@example.com'),
(30, 'John Doe', 'john@example.com'),
(31, 'John Doe', 'john@example.com'),
(32, 'John Doe', 'john@example.com'),
(33, 'John Doe', 'john@example.com'),
(34, 'John Doe', 'john@example.com'),
(35, 'John Doe', 'john@example.com'),
(36, 'John Doe', 'john@example.com'),
(37, 'John Doe', 'john@example.com'),
(38, 'John Doe', 'john@example.com'),
(39, 'John Doe', 'john@example.com'),
(40, 'John Doe', 'john@example.com'),
(41, 'John Doe', 'john@example.com'),
(42, 'John Doe', 'john@example.com'),
(43, 'John Doe', 'john@example.com'),
(44, 'John Doe', 'john@example.com'),
(45, 'John Doe', 'john@example.com'),
(46, 'John Doe', 'john@example.com'),
(47, 'John Doe', 'john@example.com'),
(48, 'John Doe', 'john@example.com'),
(49, 'John Doe', 'john@example.com'),
(50, 'John Doe', 'john@example.com'),
(51, 'John Doe', 'john@example.com'),
(52, 'John Doe', 'john@example.com'),
(53, 'John Doe', 'john@example.com'),
(54, 'John Doe', 'john@example.com'),
(55, 'John Doe', 'john@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `username`, `phone`, `email`, `address`) VALUES
(1, 'Astha', '989898455745', 'astha123@gmail.com', 'Kanpur'),
(2, 'Pragati', '8989877777666', 'pragati@gmail.com', 'Kanpur'),
(3, 'Rasmi', '8657675', 'resmi121@gmail.com', 'Kanpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
