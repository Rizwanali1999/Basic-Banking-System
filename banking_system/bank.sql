-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 07:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `sunrise`
--

CREATE TABLE `sunrise` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `acc_num` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sunrise`
--

INSERT INTO `sunrise` (`id`, `name`, `acc_num`, `email`, `phone`, `age`, `gender`, `balance`) VALUES
(1, 'Rizwan', 123451, 'rizwan@gmail.com', '7978017614', 21, 'male', 10010),
(2, 'Ankit', 123452, 'ankit@gmail.com', '9927832818', 20, 'male', 9900),
(3, 'Chiru', 123453, 'chiru@gmail.com', '9363725139', 22, 'male', 9900),
(4, 'Swagat', 123454, 'swagat@gmail.com', '8463254991', 21, 'male', 9800),
(5, 'Satyam', 123455, 'satyam@gmail.com', '9875341246', 20, 'male', 10200),
(6, 'Mansi', 123456, 'mansi@gmail.com', '7724957325', 21, 'female', 10090),
(7, 'Budhi', 123457, 'budhi@gmail.com', '8372616543', 36, 'female', 10000),
(8, 'Manas', 123458, 'manas@gmail.com', '8716253418', 25, 'male', 9900),
(9, 'Deep', 123459, 'deep@gmail.com', '8737625144', 22, 'female', 10200),
(10, 'Amlan', 123460, 'amlan@gmail.com', '8574634896', 23, 'male', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(2) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `reciever` varchar(20) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sender`, `reciever`, `amount`, `date`) VALUES
(1, '123460', '123457', '100', '2021-03-12 22:25:52'),
(2, '123456', '123451', '400', '2021-03-13 00:03:45'),
(3, '123459', '123451', '100', '2021-03-13 00:04:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sunrise`
--
ALTER TABLE `sunrise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sunrise`
--
ALTER TABLE `sunrise`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
