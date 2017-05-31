-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 21, 2017 at 07:36 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`) VALUES
(1, 'Tom'),
(2, 'Bob'),
(5, 'Jon'),
(7, 'Tim');

-- --------------------------------------------------------

--
-- Table structure for table `pacients`
--

DROP TABLE IF EXISTS `pacients`;
CREATE TABLE IF NOT EXISTS `pacients` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacients`
--

INSERT INTO `pacients` (`id`, `name`, `doctor_id`) VALUES
(1, 'Bill', 1),
(2, 'Paula', 1),
(3, 'Mick', 3),
(4, 'Timmy', 1),
(23, 'Jonn', 2),
(24, 'Neris', 1),
(25, 'Partas', 3),
(34, 'Modest', 2),
(34, 'Muta', 4),
(36, 'Ruta', 3),
(3243, 'Mick', 5),
(255, 'Partas', 7),
(3434, 'Muta', 7),
(6636, 'Ruta', 5),
(34465, 'Mutara', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
