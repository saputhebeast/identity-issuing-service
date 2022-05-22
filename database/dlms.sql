-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:03 PM
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
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `username`, `password`, `email`) VALUES
(2, 'admin', '$2y$10$ekYA7r2nxAWV1DNQQ/qVr.7cqi/hWinJFFczHnl76LnvLDmdoy/uW', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `license_type` varchar(30) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `nic` varchar(100) DEFAULT NULL,
  `birth_certificate` varchar(100) DEFAULT NULL,
  `medical_report` varchar(100) DEFAULT NULL,
  `application_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `user_id`, `full_name`, `address`, `license_type`, `photo`, `nic`, `birth_certificate`, `medical_report`, `application_status`) VALUES
(7, 1, 'Peter Don Parker', 'No 43, Kandy Road, Colombo 10.', 'Heavy and Light Vehicle', '../images/user/applications/photo1.jpg', '../images/user/applications/nic1.pdf', '../images/user/applications/birth1.pdf', '../images/user/applications/medical1.pdf', 'Success'),
(10, 4, 'Ameesha Akalanka Perera', 'No 41, Kandy road, Kadawatha.', 'Heavy Vehicle', '../images/user/applications/photo2.jpg', '../images/user/applications/nic2.pdf', '../images/user/applications/birth2.pdf', '../images/user/applications/medical2.pdf', 'Pending');

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
(6, 'Rathna Learners', 'rathnalearners@gmail.com', '-', '94789956874', '$2y$10$bLvqNCOq8/b8eYQsyvz/3.32IIh8Pg.knXKdDxXWmy0FzqhqYSb4.', '-'),
(14, 'Sun Shine Learners', 'sunshine@gmail.com', '-', '94117845695', '$2y$10$WZQg5z/bSAAcoIuPumkpwuPRAVRfbb0W2QNPYgcaAqjyJhP1qpt5C', '-');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `license_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `license_type` varchar(30) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`license_id`, `user_id`, `user_name`, `user_image`, `license_type`, `create_date`, `expired_date`) VALUES
(11, 1, 'Peter Don Parker', '../images/user/applications/photo1.jpg', 'Heavy and Light Vehicle', '2022-05-22', '2023-05-22');

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
(24, 6, 'Light weight vehicles manual+ motor cycle', 25000, 'Full Practice without the motor cycle.', '3 months', '../images/driving-school/Light_weight_vehicles_manual_motor_cycle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `contact`, `address`, `password`) VALUES
(1, 'Peter Parker', 'peter@gmail.com', '94789958745', 'No 23, Kandy Road, Kelaniya.', '$2y$10$WD7zaMVEPjZsCTdbk77EhujB58Qd8vwOBGwn7d72Q/JLpfUnyqpki'),
(4, 'Ameesha Akalanka', 'ameesha@gmail.com', '94789956874', 'No 41, Kandy road, Kadawatha.', '$2y$10$hQm4LNlDV37JediJGt4Er.Wf9No.hMIlzgxMz6x9g0LfwKsy0.ElG'),
(5, 'Dinithi Thathsarani', 'dinithi@gmail.com', '94795569874', 'No 98, Malabe, Sri Lanka.', '$2y$10$scbM8usehsZEP9uYEp2zOOdJg2fh0VIWj9o7LJcorQif/8n0x7P2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `driving_school`
--
ALTER TABLE `driving_school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`license_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `FK_Package` (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driving_school`
--
ALTER TABLE `driving_school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `license_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `license`
--
ALTER TABLE `license`
  ADD CONSTRAINT `license_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `FK_Package` FOREIGN KEY (`school_id`) REFERENCES `driving_school` (`school_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
