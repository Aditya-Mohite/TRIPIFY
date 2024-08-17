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
-- Database: `tripify`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email_id`, `country`, `remarks`, `date`) VALUES
(25, 'Aditya Mohite', 'aditya1@gmail.com', 'India', 'hii', '2023-01-27 17:19:06'),
(45, 'aditya', 'aditya123@gmail.com', 'India', 'hiii', '2023-02-02 09:46:51'),
(46, 'adi', 'aditya123@gmail.com', 'india', 'test msg', '2023-02-02 09:47:55'),
(47, 'adi', 'adity123@gmail.com', 'india', 'test', '2023-02-02 09:50:21'),
(48, 'adi', 'adit1@gmail.com', 'india', 'fake msg', '2023-02-02 10:49:56'),
(49, 'adi', 'adit1@gmail.com', 'india', 'fake msg', '2023-02-02 10:51:20'),
(50, 'Aditya uttamrao mohite', 'adityamohite9593@gmail.com', 'India', 'hello', '2023-02-02 11:24:38'),
(51, 'Aditya uttamrao mohite', 'adityamohite9593@gmail.com', 'India', 'hello', '2023-02-02 11:25:47'),
(52, 'Aditya uttamrao mohite', 'adityamohite9593@gmail.com', 'India', 'hello.........', '2023-02-02 11:26:43'),
(53, 'Aditya uttamrao mohite', 'adityamohite9593@gmail.com', 'India', 'hello.........', '2023-02-02 11:30:32'),
(54, 'Aditya uttamrao mohite', 'adityamohite9593@gmail.com', 'India', 'test msg', '2023-02-02 18:05:18'),
(55, 'aditya', 'adityam@gmail.com', 'india', 'test msg', '2023-02-02 18:14:24'),
(56, 'aditya', 'adityam@gmail.com', 'india', 'test msg 2', '2023-02-02 18:15:15'),
(57, 'adi', 'ambrish@gmail.com', 'india', 'test', '2023-02-02 19:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email_id`, `password`, `date`) VALUES
(6, 'aditya', 'aditya123@gmail.com', '12345', '2023-01-11 06:28:33'),
(7, 'adi', 'aditya1@gmail.com', '12345', '2023-01-17 13:34:18'),
(8, 'pratap', 'pratap1@gmail.com', '12345', '2023-01-19 17:44:16'),
(9, 'Aditya ', 'adityamohite9593@gmail.com', '123456', '2023-01-20 06:53:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `name` (`name`),
  ADD KEY `email_id` (`email_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
