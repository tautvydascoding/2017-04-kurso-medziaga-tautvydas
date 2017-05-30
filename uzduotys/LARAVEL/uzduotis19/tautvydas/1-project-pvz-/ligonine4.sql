-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2017 at 09:21 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ligonine4`
--
CREATE DATABASE IF NOT EXISTS `ligonine4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ligonine4`;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(6) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `lname`) VALUES
(1, 'Will', 'Smitt'),
(2, 'Paul', 'Tor'),
(3, 'Jo', 'Join'),
(6, 'Sara', 'Akkoto'),
(16, 'Tomson', 'Richersontonas'),
(17, 'Suzi', 'Taro'),
(18, 'Karl', 'Tomson'),
(19, 'Bill', 'Kolt'),
(20, 'Paul', 'Orton'),
(21, 'Ach', 'Akkoto');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(6) unsigned NOT NULL,
  `name` varchar(60) NOT NULL,
  `doctor_id` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `doctor_id`) VALUES
(1, 'pic-46.jpg', 5),
(2, 'pic-46.PNG', 1),
(3, 'pic-456.jpg', 3),
(4, 'pic-4234234.GIF', 2),
(5, 'pic-4622.GIF', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pacients`
--

DROP TABLE IF EXISTS `pacients`;
CREATE TABLE IF NOT EXISTS `pacients` (
  `id` int(6) unsigned NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `doctor_id` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacients`
--

INSERT INTO `pacients` (`id`, `name`, `lname`, `doctor_id`) VALUES
(1, 'Ari', 'Amon', 3),
(2, 'Tim', 'Taros', 6),
(3, 'Ana', 'Tomson', 2),
(4, 'Tom', 'Alis', 6),
(5, 'Karis', 'Katis', 1),
(6, 'Jo', 'Oporas', 6),
(7, 'Just', 'Sem', 1),
(8, 'Tomas', 'Bartninkas', 3),
(9, 'Justinas', 'Atomaitis', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacients`
--
ALTER TABLE `pacients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pacients`
--
ALTER TABLE `pacients`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
