-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 09:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pagination`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'Product 1'),
(2, 'Product 2'),
(3, 'Product 3'),
(4, 'Product 4'),
(5, 'Product 5'),
(6, 'Product 6'),
(7, 'Product 7'),
(8, 'Product 8'),
(9, 'Product 9'),
(10, 'Product 10'),
(11, 'Product 11'),
(12, 'Product 12'),
(13, 'Product 13'),
(14, 'Product 14'),
(15, 'Product 15'),
(16, 'Product 16'),
(17, 'Product 17'),
(18, 'Product 18'),
(19, 'Product 19'),
(20, 'Product 20'),
(21, 'Product 21'),
(22, 'Product 22'),
(23, 'Product 23'),
(24, 'Product 24'),
(25, 'Product 25'),
(26, 'Product 26'),
(27, 'Product 27'),
(28, 'Product 28'),
(29, 'Product 29'),
(30, 'Product 30'),
(31, 'Product 31'),
(32, 'Product 32'),
(33, 'Product 33'),
(34, 'Product 34'),
(35, 'Product 35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
