-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 10:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkuniversity`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdatadetail`
--

CREATE TABLE `userdatadetail` (
  `id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` int(255) NOT NULL,
  `age` int(30) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdatadetail`
--

INSERT INTO `userdatadetail` (`id`, `username`, `password`, `age`, `birthdate`, `country`, `state`, `city`, `profile`, `note`) VALUES
(36, 'raj@gmail.com', 7896, 20, '2022-01-31', 'India', 'Gujarat', 'Rajkot', 'logo1.jpg', 'hi'),
(37, 'parth@gmail.com', 741, 22, '2022-01-25', 'India', 'Gujarat', 'Rajkot', 'login1.jpg', 'hi'),
(38, 'vivek@gmail.com', 88, 23, '2022-01-19', 'India', 'Gujarat', 'Rajkot', 'forgetpassword.jpg', 'hi'),
(40, 'payal@gmail.com', 159, 22, '2022-10-12', 'India', 'Gujarat', 'Rajkot', 'logo1.jpg', 'hi'),
(43, 'karan@gmail.com', 151515, 26, '2022-06-23', 'India', 'Gujarat', 'Rajkot', 'login1.jpg', 'hi'),
(46, 'vn@gmail.com', 14789, 23, '2022-02-01', 'India', 'Gujarat', 'Surat', 'forgetpassword.jpg', 'hi'),
(47, 'vvnp@rku.ac.in', 123, 23, '2022-01-14', 'india', 'gujarat', 'rajkot', 'logo1.jpg', 'hi'),
(52, 'nnk@gmail.com', 77777, 22, '2022-01-29', 'India', 'Gujarat', 'Rajkot', 'forgetpassword.jpg', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `birthday`, `country`, `state`, `city`) VALUES
(1, 'nnariya@rku.ac.in', '12345678', '2022-01-17', 'India', 'Gujarat', 'Rajkot'),
(2, 'pghorecha@rku.ac.in', '2514', '2001-02-21', 'India', 'Gujarat', 'Rajkot'),
(3, 'nn1@gmail.com', '0123', '2022-01-25', 'India', 'Gujarat', 'Rajkot'),
(4, 'payal@gmail.com', '12345', '2022-01-16', 'India', 'Gujarat', 'Surat'),
(5, 'meera@rku.ac.in', '01223', '2021-10-11', 'India', 'Gujarat', 'Surat'),
(6, 'krupa@rku.ac.in', '05455', '2021-12-26', 'India', 'Gujarat', 'Rajkot'),
(7, 'prisha@gmail.com', '0520', '2021-11-22', 'India', 'Gujarat', 'Rajkot'),
(8, 'priya@gmail.com', '01223', '2021-09-27', 'India', 'Gujarat', 'Rajkot'),
(9, 'kinjal@rku.ac.in', '05455', '2021-09-13', 'India', 'Gujarat', 'Surat'),
(10, 'kp@rk.ac.in', '12345', '2021-05-17', 'India', 'Gujarat', 'Rajkot');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` int(255) NOT NULL,
  `age` int(30) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `password`, `age`, `birthdate`, `country`, `state`, `city`, `profile`, `note`) VALUES
(0, 'nn@gmail.com', 0, 22, '0000-00-00', '', 'Gujarat', 'Rajkot', '', ''),
(1, 'nnariya@rku.ac.in', 12345, 22, '2021-12-21', 'India', 'Gujarat', 'Rajkot', 'Profile', 'Hello'),
(2, 'npatel@rku.ac.in', 12345678, 22, '2012-01-10', 'India', 'Gujarat', 'Rajkot', 'Profile', 'Hiii'),
(3, 'pghorecha521@rku.ac.in', 123, 21, '2021-08-24', 'India', 'Gujarat', 'Rajkot', 'Profile', 'Hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdatadetail`
--
ALTER TABLE `userdatadetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdatadetail`
--
ALTER TABLE `userdatadetail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
