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
-- Table structure for table `travels_names`
--

CREATE TABLE IF NOT EXISTS `travels_names` (
  `id` int(11) NOT NULL,
  `service_no` int(11) NOT NULL,
  `travel_name` varchar(200) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `type_id` int(11) NOT NULL,
  `bus_number` varchar(10) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `dept_time` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `travels_names`
--

INSERT INTO `travels_names` (`id`, `service_no`, `travel_name`, `owner`, `type_id`, `bus_number`, `contact_number`, `dept_time`) VALUES
(1, 1234, 'Morning Star Travels', 'Laxman admin', 2, 'KA 01 9898', 8867135684, '9.00 PM'),
(2, 1235, 'Komitla Travels', 'Chandu Narasimha', 1, 'KA 01 1818', 7893625410, '7.20 PM'),
(3, 1236, 'Venkata Ramana Travels', 'Venkat K', 7, 'KA 01 1818', 9620083154, '8.00 PM'),
(4, 1237, 'Manish Travels', 'Nagamalli K', 8, 'KA 01 2919', 8985712407, '8.15 PM'),
(5, 1238, 'SRS Travels', 'Sivakoti K', 3, 'KA 01 1919', 8096444544, '6.15 PM'),
(6, 1239, 'Yamani Travels', 'Chiru T', 1, 'KA 01 2820', 9036304083, '7.45 PM'),
(7, 1240, 'Rajesh Travels', 'Veerabau P', 5, 'KA 01 1010', 7894561230, '8.45 PM'),
(8, 1241, 'VRL Travels', 'Ramu G', 4, 'KA 01 4646', 7485963210, '7.20 PM'),
(9, 1242, 'Diwakar Travels', 'Laxman K', 2, 'KA 01 2919', 9491147192, '9.45 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travels_names`
--
ALTER TABLE `travels_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk` (`type_id`),
  ADD KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travels_names`
--
ALTER TABLE `travels_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `travels_names`
--
ALTER TABLE `travels_names`
  ADD CONSTRAINT `travels_names_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `travels_bus_types` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
