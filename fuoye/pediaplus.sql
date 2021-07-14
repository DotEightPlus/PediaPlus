-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 11:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pediaplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdfcredit`
--

CREATE TABLE `pdfcredit` (
  `id` int(11) NOT NULL,
  `amt` text NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdfcredit`
--

INSERT INTO `pdfcredit` (`id`, `amt`, `username`) VALUES
(1, '5', 'Grtnxhor');

-- --------------------------------------------------------

--
-- Table structure for table `pdfpayhis`
--

CREATE TABLE `pdfpayhis` (
  `id` int(11) NOT NULL,
  `transref` text NOT NULL,
  `msg` text NOT NULL,
  `username` text NOT NULL,
  `amt` text NOT NULL,
  `stat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `sn` int(11) NOT NULL,
  `activator` text NOT NULL,
  `fname` text NOT NULL,
  `usname` text NOT NULL,
  `email` text NOT NULL,
  `pword` text NOT NULL,
  `datereg` date NOT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `sn`, `activator`, `fname`, `usname`, `email`, `pword`, `datereg`, `active`) VALUES
(1, 67, '20cdc8caa3642b9f90218f13c6fa584c', 'Greatness Abolade', 'Grtnxhor', 'Greatnessabolade@outlook.com', '0e411e1bbaba90b26c1cf25142cf4457', '2020-06-06', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdfcredit`
--
ALTER TABLE `pdfcredit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfpayhis`
--
ALTER TABLE `pdfpayhis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdfcredit`
--
ALTER TABLE `pdfcredit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdfpayhis`
--
ALTER TABLE `pdfpayhis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
