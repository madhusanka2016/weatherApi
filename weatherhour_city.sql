-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 03:13 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `weatherhour_city`
--

CREATE TABLE `weatherhour_city` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `time` int(5) NOT NULL,
  `tempC` int(10) NOT NULL,
  `windspeedKmph` int(10) NOT NULL,
  `winddirDegree` int(10) NOT NULL,
  `winddir16Point` varchar(20) NOT NULL,
  `weatherDesc` varchar(50) NOT NULL,
  `precipMM` int(10) NOT NULL,
  `humidity` int(10) NOT NULL,
  `visibility` int(10) NOT NULL,
  `pressure` int(10) NOT NULL,
  `cloudcover` int(10) NOT NULL,
  `HeatIndexC` int(10) NOT NULL,
  `DewPointC` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `weatherhour_city`
--
ALTER TABLE `weatherhour_city`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `weatherhour_city`
--
ALTER TABLE `weatherhour_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
