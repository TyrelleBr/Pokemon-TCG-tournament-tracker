-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 08:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemon_tcg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL,
  `tournamentName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rules` text DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contactEmail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `tournamentName`, `description`, `rules`, `startDate`, `location`, `contactEmail`) VALUES
(1, 'Tournament 1', 'test', 'test', '2025-11-22', '1234 Address Rd', 'contactEmail@example.com'),
(2, 'Tournament 2', 'TEST', 'TEST', '2025-11-22', '1234 Address Rd', 'contactEmail@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'username', 'email@example.com', '$2y$10$MI9VHuHw5CdmG6/hnkgvBemJscbWKbjjqP/RQ40nPK/gxxFcpQLMW'),
(3, 'username1', 'email1@example.com', '$2y$10$1M16W.8GeR2jCYcj4VQF5OvnY9vpikH3QXlpCpAMOqhV6y5blvRSO'),
(4, 'username2', 'email2@example.com', '$2y$10$4GzisOGqplYISjUt878EJOY73eP4LlKu8e3R6pKtwjZXvw8TpQ5XG'),
(5, 'username3', 'email3@example.com', '$2y$10$BROg6HNIAs5FuG1KA04S4elnePrXgPxRJp/CUxcgIffUabi8MUcry'),
(6, 'username4', 'email4@example.com', '$2y$10$J5udUJC/YoIZ0O4fQZabd.UV5Pt4VESIP84sooq8kKZDu6cyBVMmq'),
(7, 'username5', 'email5@example.com', '$2y$10$2yHHS6u6CkGVtFOwve6iJe.B6NgpVlbgmCREFGsi9VXOlR4qWahDe'),
(8, 'username6', 'email6@example.com', '$2y$10$QZQkHDEWnHAReisy1zMleu1STn.u0h.e2H1MCm92tC7izqtbChTEu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
