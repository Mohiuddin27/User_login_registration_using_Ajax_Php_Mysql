-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cell`, `username`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'md mohiuddin', 'sobuj@gmail.com', '01719369459', 'sobuj', 'sobuj', 0, '2022-05-27 18:13:57', NULL),
(4, 'sobuj', 'sujon@gmail.com', '01900123456', 'sujon', 'sujon', 0, '2022-05-27 19:17:26', NULL),
(5, 'hasan', 'hasan@gmail.com', '01900012345', 'hasan', 'hasan', 0, '2022-05-27 19:18:26', NULL),
(6, 'sohel', 'sohel@gmail.com', '0198712345', 'sohel', 'sohel', 0, '2022-05-27 19:40:31', NULL),
(7, 'habib', 'habib@gmail.com', '0190123456', 'habib', 'habib', 0, '2022-05-27 19:43:44', NULL),
(8, 'selim', 'selim@gmail.com', '019000000000', 'selim', 'selim', 0, '2022-05-27 19:45:11', NULL),
(9, 'naim', 'naim@gmail.com', '01789123456', 'naim', 'naim', 0, '2022-05-27 19:52:52', NULL),
(10, 'kamal', 'kamal@gmail.com', '01890123456', 'kamal', 'kamal', 0, '2022-05-27 19:54:04', NULL),
(11, 'faiaz', 'faiaz@gmail.com', '01999123456', 'faiaz', 'faiaz', 0, '2022-05-27 19:55:34', NULL),
(12, 'sohel rana', 'rana@gmail.com', '019654321', 'rana', 'rana', 0, '2022-05-27 19:56:45', NULL),
(13, 'Rahul', 'rahul@gmail.com', '9110123456', 'rahul', 'rahul', 0, '2022-05-27 23:01:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
