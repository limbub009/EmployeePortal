-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 02:28 AM
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
(118, 1042, 'Greetings', 'I am a new consultant in this department. ', '2021-04-12 15:24:08'),
(125, 1042, 'Wednesday meeting', 'Hi everyone, I just wanted to confirm if the meeting on Wednesday is still happening? Thanks', '2021-04-12 15:37:56'),
(138, 1043, 'Welcome', 'I\'m Johnny, the department manager.', '2021-04-12 16:01:43'),
(144, 1003, 'Moderation', 'Good evening, \r\n\r\nThe administrator can delete any posts. Please use the feed appropriately.', '2021-04-14 00:06:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedpost`
--
ALTER TABLE `feedpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `postfk` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedpost`
--
ALTER TABLE `feedpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
