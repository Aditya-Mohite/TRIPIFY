-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 09:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripify_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstName`, `email`, `country`, `remarks`) VALUES
(1, '', '', 'india ', 'hiii'),
(2, '', '', 'india ', 'test data'),
(3, '', '', 'india ', 'bgtycghvk'),
(4, '', '', 'india ', 'ghfhfg'),
(5, '', '', 'india ', 'Heyy Good job.'),
(6, '', '', 'India', 'shdgiofhs'),
(7, '', '', 'india', 'gnvjs');

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(18, 'Aditya', 5, 'hii', '2023-02-14 18:18:48'),
(19, 'pratap', 4, 'good', '2023-02-15 05:33:20'),
(20, 'Aayush', 5, 'Good website', '2023-02-15 05:44:07'),
(23, 'Aditya', 5, 'Amazing', '2023-02-15 10:29:52'),
(24, 'Anup', 4, 'Amazing', '2023-03-09 08:10:05'),
(25, 'Adityaaa', 5, 'hii', '2023-04-17 12:08:37'),
(27, 'Harsh', 5, 'Nice', '2023-05-07 14:49:32'),
(28, 'Pratibha', 5, 'Good', '2023-12-02 06:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `code` int(6) NOT NULL,
  `status` varchar(40) NOT NULL,
  `country` int(50) NOT NULL,
  `remarks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`id`, `firstName`, `lastName`, `email`, `password`, `gender`, `code`, `status`, `country`, `remarks`) VALUES
(12, 'aditya', 'mohite', 'adityamohite9593@gmail.com', 'Aditya@123', 'male', 0, 'Verified', 0, ''),
(17, 'Aayush', 'Kudalkar', 'ayushkudalkar290@gmail.com', 'Aayush@123', 'male', 0, 'Verified', 0, ''),
(18, 'Jay Prakash', 'Maurya', 'jay.prakash@vitbhopal.ac.in', 'Abcd@123', 'male', 0, 'Verified', 0, ''),
(19, 'aditya', 'mohite', 'adityamohite9365@gmail.com', 'Aditya@1234', 'male', 0, 'Verified', 0, ''),
(20, 'Anup', 'Arbune', 'anuparbune5050@gmail.com', 'Anup@123', 'male', 0, 'Verified', 0, ''),
(21, 'Avishi', 'Jain', 'avishi2407@gmail.com', 'Avishi@123', 'female', 0, 'Verified', 0, ''),
(22, 'Harsh', 'Rakate', 'harshvardhanrakate@gmail.com', 'India@11', 'male', 0, 'Verified', 0, ''),
(24, 'Pratibha', 'Mohite', 'darwininfotech@gmail.com', 'Pratibha@123', 'female', 0, 'Verified', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `datetime` (`datetime`),
  ADD KEY `datetime_2` (`datetime`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
