-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2015 at 06:13 PM
-- Server version: 10.0.14-MariaDB-log
-- PHP Version: 5.4.43

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laxman`
--

-- --------------------------------------------------------

--
-- Table structure for table `travels_bus_types`
--

CREATE TABLE IF NOT EXISTS `travels_bus_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `fare` varchar(10) NOT NULL,
  `led` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travels_bus_types`
--

INSERT INTO `travels_bus_types` (`id`, `name`, `duration`, `fare`, `led`) VALUES
(1, '2+2 A/C Semisleeper', '12 hours', '800/-', 1),
(2, 'Volvo 2+2 A/C Multi Axle, Semisleeper', '10 Hours', '1000/-', 1),
(3, 'Non A/C 2+2, Semisleeper', '13hrs', '700/-', 1),
(4, 'Non A/C 2+1, Semisleeper, Sleeper', '12hrs', '700-900/-', 1),
(5, '1+1 Tier, Volvo Multiaxle A/C Sleeper', '9hrs', '1200/-', 1),
(6, '2+1 Tier, Volvo Multiaxle A/C Sleeper', '9.30 hrs', '1100/-', 1),
(7, '2+2, A/C Classy', '10.30 hrs', '880/-', 1),
(8, 'Volvo 2+2 A/C Mercedes Benz Multiaxle ', '10.00 hrs', '900/-', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travels_bus_types`
--
ALTER TABLE `travels_bus_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travels_bus_types`
--
ALTER TABLE `travels_bus_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
