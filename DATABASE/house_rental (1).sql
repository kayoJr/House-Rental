-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 09:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `negotiable` int(50) NOT NULL,
  `room` int(50) DEFAULT NULL,
  `area` int(50) DEFAULT NULL,
  `photo` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `plan` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `payment` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `title`, `type`, `location`, `price`, `negotiable`, `room`, `area`, `photo`, `description`, `plan`, `status`, `owner`, `date`, `payment`) VALUES
('106251789', 'ajfd', 'apartment', 'kdjfkdfj', 45454, 1, 4, 455, 'unsplash_2gDwlIim3Uw.png', 'adsfasdf', 1, 1, '905611207', '2022-06-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `whatsapp` varchar(50) NOT NULL,
  `telegram` varchar(50) NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `pass`, `whatsapp`, `telegram`, `status`) VALUES
(1, 'kaleb', 'melaku', '0953565269', 'kalebmelaku97@gmail.com', '123456', '', '', 2),
(5, 'Tensay', 'Lemessa', '0905611207', 'tensay@gmail.com', '123456', '0905611207', '0905611207', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
