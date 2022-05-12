-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 09:31 AM
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
  'contact' varchar(10),
  `password` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driving_school`
--

INSERT INTO `driving_school` (`school_id`, `school_name`, `email`, `address`, `password`, `description`) VALUES
(2, 'Rathna Learners', 'rathnalearners@gmail.com', '-', '$2y$10$NXpSvu914D/icYXDt3dU1eCd12MJ4niK96mvy/NAY3ef1/zFQy26K', '-'),
(4, 'dlms', 'dlms@gmail.com', '-', '$2y$10$WYv4pUYGaut8JyZ8Zw/j3OlkyD754LsGBYlfWlcpLVtz6OTfJXEX2', '-'),
(5, 'colombo learners', 'colombolearners@gmail.com', '-', '$2y$10$2L/aTvsXwwhVG55QI0kQ5eR4uOuIdAk97ciKm.Pjurjw53wdbZu0e', '-');

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
  `duration` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `school_id`, `package_name`, `package_price`, `description`, `duration`) VALUES
(2, 2, 'Heavy weight vehicles', 30000, 'Full Practice', '3 months'),
(4, 2, 'Light weight vehicles manual + motor cycle + Three wheeler', 24000, 'Full Practice without the moto cycle and three wheeler', '4 months');

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
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
