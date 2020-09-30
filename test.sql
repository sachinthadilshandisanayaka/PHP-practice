-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 08:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `name`, `email`, `password`) VALUES
(3, 'sanju', 'sanju@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'malsha', 'malsha@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 'dilshan', 'dilshan@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--
-- Error reading structure for table test.myguests: #1932 - Table 'test.myguests' doesn't exist in engine
-- Error reading data for table test.myguests: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `test`.`myguests`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `countryCode` varchar(10) NOT NULL,
  `telephone` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `countryCode`, `telephone`, `message`, `attachment`, `birthday`) VALUES
(2, 'sanju', 'sanju1998@gmail.com', '100', 234532, 'hellow', '5f735db2d4f292.01046326.png', '0000-00-00'),
(3, 'dilshan', 'sachidisanayaka98@gmil.com', '45', 234122, 'my village is kantele', '5f735e83e24dd0.69817222.png', '0000-00-00'),
(4, 'kamal', 'kamal@gmail.com', '95', 112211, 'helo it\'s me...', '5f7372052a7d33.44627080.png', '0000-00-00'),
(5, 'chamara', 'chamara@gmail.com', '12', 2231123, 'my name is Chamara. Hello boys.', '5f74445c7cb6e8.87707998.jpg', '2020-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
