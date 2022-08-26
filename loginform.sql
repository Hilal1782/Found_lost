-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 11:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginform`
--

-- --------------------------------------------------------

--
-- Table structure for table `claimed_users`
--

CREATE TABLE `claimed_users` (
  `claimed_email` varchar(255) NOT NULL,
  `claimed_name` varchar(255) NOT NULL,
  `found_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claimed_users`
--

INSERT INTO `claimed_users` (`claimed_email`, `claimed_name`, `found_id`) VALUES
('hilalahmad@gmail.com', 'hilal', 64);

-- --------------------------------------------------------

--
-- Table structure for table `claimed_users_on_lost`
--

CREATE TABLE `claimed_users_on_lost` (
  `claimed_email` varchar(255) NOT NULL,
  `claimed_name` varchar(255) NOT NULL,
  `lost_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `found_data`
--

CREATE TABLE `found_data` (
  `found_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found_data`
--

INSERT INTO `found_data` (`found_id`, `title`, `phone`, `quantity`, `img`, `message`, `create_at`) VALUES
(64, 'i have found a wallet ', 3334496509, 1, '5.jpeg', 'i have found a wallet in the department of computer science, university of Peshawar, on Friday 06/24, it is black color.', '2022-06-24 11:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `lost_data`
--

CREATE TABLE `lost_data` (
  `lost_id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone_number` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `identity` enum('Student','Faculty','Employee','other') NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `fname`, `lname`, `phone_number`, `email`, `pwd`, `identity`, `image`) VALUES
(19, 'hilal', 'Ahmad', 2147483647, 'hilalahmad@gmail.com', '123', 'Student', 'UserIdCard/7.png'),
(20, 'asim', 'khan', 2147483647, 'asim@gmail.com', '123', 'Student', 'UserIdCard/7.png'),
(21, 'adnan', 'khan', 2147483647, 'adnan@gmail.com', 'hello', 'Student', 'UserIdCard/image.jpg'),
(22, 'fahad', 'khan', 2147483647, 'fahad@gmail.com', '123', 'Faculty', 'UserIdCard/4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claimed_users`
--
ALTER TABLE `claimed_users`
  ADD KEY `found_id` (`found_id`);

--
-- Indexes for table `claimed_users_on_lost`
--
ALTER TABLE `claimed_users_on_lost`
  ADD KEY `lost_id` (`lost_id`);

--
-- Indexes for table `found_data`
--
ALTER TABLE `found_data`
  ADD PRIMARY KEY (`found_id`);

--
-- Indexes for table `lost_data`
--
ALTER TABLE `lost_data`
  ADD PRIMARY KEY (`lost_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found_data`
--
ALTER TABLE `found_data`
  MODIFY `found_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `lost_data`
--
ALTER TABLE `lost_data`
  MODIFY `lost_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claimed_users`
--
ALTER TABLE `claimed_users`
  ADD CONSTRAINT `claimed_users_ibfk_1` FOREIGN KEY (`found_id`) REFERENCES `found_data` (`found_id`);

--
-- Constraints for table `claimed_users_on_lost`
--
ALTER TABLE `claimed_users_on_lost`
  ADD CONSTRAINT `claimed_users_on_lost_ibfk_1` FOREIGN KEY (`lost_id`) REFERENCES `lost_data` (`lost_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
