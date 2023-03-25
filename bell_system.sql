-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 03:20 AM
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
-- Database: `bell_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `time_intervals`
--

CREATE TABLE `time_intervals` (
  `id` int(11) NOT NULL,
  `exam_date` varchar(100) CHARACTER SET latin1 NOT NULL,
  `bell_time` varchar(100) CHARACTER SET latin1 NOT NULL,
  `duration` int(100) NOT NULL COMMENT 'In Seconds',
  `end_time` varchar(200) CHARACTER SET latin1 NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_intervals`
--

INSERT INTO `time_intervals` (`id`, `exam_date`, `bell_time`, `duration`, `end_time`, `timestamp`) VALUES
(1, '2023-03-25', '20:00:00', 10, '20:00:10', '2023-03-25 02:13:08'),
(2, '2023-03-26', '12:30:00', 10, '12:30:10', '2023-03-25 02:17:33'),
(3, '2023-03-26', '20:00:00', 5, '20:00:05', '2023-03-25 02:17:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `time_intervals`
--
ALTER TABLE `time_intervals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `time_intervals`
--
ALTER TABLE `time_intervals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
