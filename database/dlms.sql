-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlms`
--

-- --------------------------------------------------------

--
-- Table structure for table `driving_school`
--

CREATE TABLE `driving_school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driving_school`
--

INSERT INTO `driving_school` (`school_id`, `school_name`, `email`, `address`, `contact`, `password`, `description`) VALUES
(6, 'Rathna Learners', 'rathnalearners@gmail.com', '-', '0784569874', '$2y$10$bLvqNCOq8/b8eYQsyvz/3.32IIh8Pg.knXKdDxXWmy0FzqhqYSb4.', '-'),
(12, 'Colombo Learners', 'colombo@gmail.com', '-', '785462514', '$2y$10$5J0rrRNYydJkUmchcAgSGe05PQI2AMycXwRcRE1alI4b5ixTKHk.i', '-');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `school_id` int(11) DEFAULT NULL,
  `package_name` varchar(100) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `school_id`, `package_name`, `package_price`, `description`, `duration`, `image`) VALUES
(21, 6, 'Light Weight Vehicles Manual + Three Wheeler', 21000, 'Full Practice without the Three wheeler', '2 months', '../images/driving-school/Light_weight_vehicles_manual_Three_wheeler.png'),
(22, 6, 'Heavy weight vehicles', 25000, 'Full Practice', '3 months', '../images/driving-school/Heavy_weight_vehicles.jpg'),
(23, 6, 'Motor Cycle', 15000, 'Full Practice', '2 months', '../images/driving-school/Motor_Cycle.jpg'),
(24, 6, 'Light weight vehicles manual+ motor cycle', 25000, 'Full Practice without the motor cycle.', '3 months', '../images/driving-school/Light_weight_vehicles_manual_motor_cycle.jpg'),
(26, 12, 'Heavy weight vehicles', 25000, 'lorem lorem lorem lorem lorem', '2 months', '../images/driving-school/GPA_GRADE.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driving_school`
--
ALTER TABLE `driving_school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `FK_Package` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driving_school`
--
ALTER TABLE `driving_school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `FK_Package` FOREIGN KEY (`school_id`) REFERENCES `driving_school` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
