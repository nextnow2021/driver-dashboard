-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 02:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextnow`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_document`
--

CREATE TABLE `driver_document` (
  `driver_id` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_document`
--

INSERT INTO `driver_document` (`driver_id`, `photo`, `name`, `contactno`, `email`, `address`, `state`) VALUES
(1, 'favicon.png', 'MS', 'MS', 'MS@hi.com', 'MS', 'MS'),
(2, 'bg-01.jpg', 'M_S', 'M_S', 'moinsh1907@gmail.com', 'M_S', 'M_S');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `UserEmail` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `FullName`, `Username`, `UserEmail`, `Password`, `RegDate`) VALUES
(1, '', 'admin', '0', 'admin', '2021-03-06 11:01:05'),
(2, 'next', 'nextnow', '0', '202cb962ac59075b964b07152d234b70', '2021-03-06 12:24:52'),
(3, 'MS', 'ms@nextnow.africa', '0', '827ccb0eea8a706c4c34a16891f84e7b', '2021-03-10 12:06:01'),
(4, 'next', 'admin', 'nextnow@afr.com', 'd0cab90d8d20d57e2f2b9be52f7dd25d', '2021-03-10 12:33:10'),
(5, 'moin', 'moinsh', 'ms@nextnow.africa', 'd81f9c1be2e08964bf9f24b15f0e4900', '2021-03-15 10:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_document`
--

CREATE TABLE `vehicle_document` (
  `vehicle_id` int(255) NOT NULL,
  `carphoto` varchar(255) NOT NULL,
  `vname` varchar(255) NOT NULL,
  `vcontactno` int(255) NOT NULL,
  `vemail` varchar(255) NOT NULL,
  `licencephoto` varchar(255) NOT NULL,
  `vaddress` varchar(255) NOT NULL,
  `vstate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_document`
--

INSERT INTO `vehicle_document` (`vehicle_id`, `carphoto`, `vname`, `vcontactno`, `vemail`, `licencephoto`, `vaddress`, `vstate`) VALUES
(1, 'Capture.PNG', 'POLO', 80808080, 'mss@hi.com', 'Capture1.PNG', 'Africa', 'Africa'),
(2, 'bg-01.jpg', 'POLO-1', 9090909, 'ms@hi.com', 'Capture.PNG', 'Africa', 'Africa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_document`
--
ALTER TABLE `driver_document`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_document`
--
ALTER TABLE `driver_document`
  MODIFY `driver_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle_document`
--
ALTER TABLE `vehicle_document`
  MODIFY `vehicle_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
