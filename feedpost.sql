-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 02:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedpost`
--

CREATE TABLE `feedpost` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedpost`
--

INSERT INTO `feedpost` (`id`, `userid`, `title`, `body`, `date`) VALUES
(1, 0, 'testing', 't1', '2021-04-07 12:19:41'),
(2, 0, 'testing consultant post', 'hi its me', '2021-04-07 12:25:15'),
(3, 81354045, 'testing consultant post', 'hi its me', '2021-04-07 12:27:09'),
(4, 81354045, 'testing id', 't3', '2021-04-07 12:27:28'),
(5, 81354045, 'testing id', 't3', '2021-04-07 12:28:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedpost`
--
ALTER TABLE `feedpost`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedpost`
--
ALTER TABLE `feedpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
