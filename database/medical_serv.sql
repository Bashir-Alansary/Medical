-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 02:08 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_serv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_type` enum('admin','super_admin') NOT NULL DEFAULT 'admin',
  `admin_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_type`, `admin_created_at`) VALUES
(1, 'pharmacey', 'eram@gmail.com', '$2y$10$KAJNtsUJ3s0TjBTbvE03FO4Lhd11SFJcgwTnI48AKJDFtyLWJaDQS', 'admin', '2022-02-19 09:31:51'),
(2, 'Bashir Alansary', 'ba3061998@gmail.com', '$2y$10$rXNc/HMpaRM1HMu59Rr/dOTmkvGU31EMm9.FC65i764h.v06y4/Ci', 'admin', '2022-02-19 10:18:43'),
(3, 'Ali', 'ali@gmail.com', '$2y$10$k6LCGDTEs1Frwx3vMcqcduX3wXSzcLg9i534OqiLfhNThYGRuwJDu', 'admin', '2022-02-19 12:25:36'),
(4, 'bashir', 'ba3061998@gmail.com', '$2y$10$bKNKIuRaRrNNqF9CZV.8UeuSx2eGjcqd1TmrDbAkE5w2ZT7Cy167G', 'admin', '2022-02-20 09:48:01'),
(5, 'Nader', 'nader@gmail.com', '$2y$10$VSlPcc2fxegJWAzsSYuV7uCh8YrwHZj07L82TxWpiEB0RAgrRNS8C', 'admin', '2022-02-20 09:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `city_created_at`) VALUES
(9, 'Cairo', '2022-02-20 13:00:01'),
(10, 'Giza', '2022-02-20 13:00:13'),
(11, 'Alex', '2022-02-20 13:00:24'),
(12, 'Qina', '2022-02-20 13:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_mobile` varchar(20) NOT NULL,
  `order_email` varchar(50) NOT NULL,
  `order_notes` text NOT NULL,
  `order_serv_id` int NOT NULL,
  `order_city_id` int NOT NULL,
  `order_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_mobile`, `order_email`, `order_notes`, `order_serv_id`, `order_city_id`, `order_created_at`) VALUES
(11, 'Bashir Alansary', '01030183219', 'ba3061998@gmail.com', 'I have two bottle of hair oil', 11, 10, '2022-02-20 13:02:42'),
(12, 'Ali Hamza', '05488545263', 'ali@gmail.com', 'get two packets', 9, 9, '2022-02-20 13:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serv_id` int NOT NULL,
  `serv_name` varchar(100) NOT NULL,
  `serv_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serv_id`, `serv_name`, `serv_created_at`) VALUES
(9, 'treatment', '2022-02-20 00:48:24'),
(10, 'lab p', '2022-02-20 00:49:00'),
(11, 'Beauty', '2022-02-20 12:59:34'),
(12, 'Med care', '2022-02-20 12:59:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_serv_id` (`order_serv_id`),
  ADD KEY `order_mobile` (`order_mobile`),
  ADD KEY `order_serv_id_2` (`order_serv_id`),
  ADD KEY `order_city_id` (`order_city_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serv_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_serv_id`) REFERENCES `services` (`serv_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_city_id`) REFERENCES `cities` (`city_id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
