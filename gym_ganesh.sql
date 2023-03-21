-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_ganesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12345_ganeshnishitha');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL,
  `day` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `message`, `day`) VALUES
(1, 'ramya', 'ramya@gmail.com', '9875612345', 'i want to loss my body fat how much for the training', '2023-03-12 10:44:29'),
(2, 'as', 'as@gmail.com', '9871234567', 'w', '2023-03-21 05:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(11) NOT NULL,
  `wid` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `workout` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'bending',
  `joining_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `wid`, `email`, `workout`, `status`, `joining_time`) VALUES
(1, '3', 'ganesh@gmail.com', 'weight lifting', 'joined', '2023-03-21 05:10:52'),
(4, '4', 'ganesh@gmail.com', 'body building', 'joined', '2023-03-21 05:58:39'),
(5, '5', 'ganesh@gmail.com', 'weight loss', 'bending', '2023-03-21 05:15:31'),
(6, '4', 'ganesh@gmail.com', 'body building', 'bending', '2023-03-21 05:16:53'),
(7, '3', 'ramyakutty@gmail.com', 'weight lifting', 'bending', '2023-03-21 05:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `workout` varchar(30) NOT NULL,
  `myimage` varchar(100) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `workout`, `myimage`, `reading_time`) VALUES
(1, 'mark antony', 'body building', 'mark_antony.PNG', '2023-03-15 06:02:09'),
(2, 'izzybell', 'Weight Loss', 'izzybella.PNG', '2023-03-18 05:09:04'),
(3, 'santhosh kanna', 'body building', 'santhosh_kanna.PNG', '2023-03-15 06:03:05');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `myimage` varchar(200) NOT NULL,
  `monday` varchar(30) NOT NULL,
  `tuesday` varchar(30) NOT NULL,
  `wednesday` varchar(30) NOT NULL,
  `thursday` varchar(30) NOT NULL,
  `friday` varchar(30) NOT NULL,
  `saturday` varchar(30) NOT NULL,
  `reading_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `name`, `description`, `myimage`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `reading_time`) VALUES
(3, 'weight lifting', 'Strength training can help you manage or lose weight, and it can increase your metabolism to help you burn more calories. Enhance your quality of life. Strength training may enhance your quality of li', 'weights-79587__340.jpg', '8-10', '8-10', '8-10', '16-18', '16-18', '18-20', '2023-03-15 05:10:51'),
(4, 'body building', 'Bodybuilding is the use of progressive resistance exercise to control and develop one\'s muscles by muscle hypertrophy for aesthetic purposes', 'bodybuild.PNG', '8-10', '8-10', '10-12', '16-18', '18-20', '6-8', '2023-03-15 05:12:13'),
(5, 'weight loss', 'weight loss workouts are here that is useful to loss your belly fat', 'kettlebell-3293475__340.jpg', '6-8', '8-10', '6-8', '8-10', '6-8', '8-10', '2023-03-15 05:15:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile_picture` varchar(200) NOT NULL,
  `registered_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profile_picture`, `registered_time`) VALUES
(1, 'ganesh', 'ganesh@gmail.com', '123', '', '2023-03-20 05:42:54'),
(2, 'ramya', 'ramya@gmail.com', '1234', '', '2023-03-13 04:59:23'),
(3, 'keerthana devi', 'keerthi@gmail.com', '123', '', '2023-03-13 05:03:24'),
(4, 'sam', 'sam@gmail.com', 'sam12345', '', '2023-03-13 05:22:01'),
(5, 'soundarya', 'sound@gmail.com', '12345', '', '2023-03-13 05:22:46'),
(6, 'ramya kutty', 'ramyakutty@gmail.com', '123', '', '2023-03-21 05:57:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
