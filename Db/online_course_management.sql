-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 12:29 PM
-- Server version: 8.0.32
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_course_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int NOT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `instructor` text,
  `offered by` text,
  `course_duration` int DEFAULT NULL,
  `course_modules` decimal(10,0) DEFAULT NULL,
  `course_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `instructor`, `offered by`, `course_duration`, `course_modules`, `course_description`) VALUES
(1, 'front end development', 'luffytaro', 'oda', 10, '10', '1.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n2.Aliquam tincidunt mauris eu risus.\r\n3.Vestibulum auctor dapibus neque.\r\n4.Nunc dignissim risus id metus.\r\n5.Cras ornare tristique elit.\r\n6.Vivamus vestibulum ntulla nec ante.\r\n7.Praesent placerat risus quis eros.\r\n8.Fusce pellentesque suscipit nibh.'),
(2, 'ui ux developmet', 'sadasivam', 'udemy', 5, '10', '1.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n2.Aliquam tincidunt mauris eu risus.\r\n3.Vestibulum auctor dapibus neque.\r\n4.Nunc dignissim risus id metus.\r\n5.Cras ornare tristique elit.\r\n6.Vivamus vestibulum ntulla nec ante.\r\n7.Praesent placerat risus quis eros.\r\n8.Fusce pellentesque suscipit nibh.'),
(3, 'backend development', 'hoe', 'albatross', 10, '60', '1.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n2.Aliquam tincidunt mauris eu risus.\r\n3.Vestibulum auctor dapibus neque.\r\n4.Nunc dignissim risus id metus.\r\n5.Cras ornare tristique elit.\r\n6.Vivamus vestibulum ntulla nec ante.\r\n7.Praesent placerat risus quis eros.\r\n8.Fusce pellentesque suscipit nibh.'),
(4, 'android app development', 'angelina yu', 'udemy', 19, '100', '1.Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n2.Aliquam tincidunt mauris eu risus.\r\n3.Vestibulum auctor dapibus neque.\r\n4.Nunc dignissim risus id metus.\r\n5.Cras ornare tristique elit.\r\n6.Vivamus vestibulum ntulla nec ante.\r\n7.Praesent placerat risus quis eros.\r\n8.Fusce pellentesque suscipit nibh.');

-- --------------------------------------------------------

--
-- Table structure for table `course_registration`
--

CREATE TABLE `course_registration` (
  `username` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_completion` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`username`, `course_name`, `course_completion`) VALUES
('dhenuds2003@gmail.com', 'front end development', 15),
('dhenuds2003@gmail.com', 'full stack development', NULL),
('dhenuds2003@gmail.com', 'ui ux design', NULL),
('menonani7@gmail.com', 'front end development', NULL),
('menonani7@gmail.com', 'ui ux design', 10),
('vanji@gmail.com', 'ui ux design', 85);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `u_id` int NOT NULL,
  `Roll_No` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `Section` varchar(1) DEFAULT NULL,
  `Academic_Year` int DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Image_ID` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`username`, `password`, `name`, `u_id`, `Roll_No`, `Class`, `Section`, `Academic_Year`, `Gender`, `Image_ID`) VALUES
('menonani7@gmail.com', 'helloworld', 'Anirudh r k', 1, '21CS016', '2-CSE', 'A', 2025, '', 'ac.jpg'),
('dhenuds2003@gmail.com', 'paathukalam', 'Dhenu DS', 2, '21CS028', '2-CSE', 'A', 2025, 'male', 'cat1.png\r\n'),
('vanji@gmail.com', 'vanji', 'vanji', 4, '21CS025', 'CSE', 'A', 2025, 'male', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_registration`
--
ALTER TABLE `course_registration`
  ADD PRIMARY KEY (`username`,`course_name`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
