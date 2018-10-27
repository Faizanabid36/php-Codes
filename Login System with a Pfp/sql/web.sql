-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 11:39 PM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `first` varchar(256) NOT NULL,
  `last` varchar(256) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `age` int(11) NOT NULL,
  `username` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `first`, `last`, `email`, `password`, `age`, `username`) VALUES
(6, 'Faizan', 'Abid', 'faizanabid45@mail.com', '$2y$10$PlmdN/QZOboiZc3ynWh1KOnrxS6JZnIksHiswaWWP.OAmYmKH3ApG', 19, 'faizanabid36'),
(10, 'Faraz', 'Khan', 'faraz12345@mail.com', '$2y$10$ibPehGHOUkmlkgOKY5k8mO6vPLS5MfLsa.biP6UuMnRATXuUrim9G', 20, 'faraz12345'),
(11, 'Stella', 'Anderson', 'stella121@mail.com', '$2y$10$1wHLHgPyzRvD7R3jJ6eeg.n/hey.Ol6afSYgfF529kBY1a82U6Dh.', 20, 'stellaxd'),
(12, 'James', 'Corey', 'james12@mail.com', '$2y$10$spZdks917sbnCvABggg/DOoty4mhH3cwRUyD/ASoS7cqFJdWpzWHe', 29, 'jamiecorie12');

-- --------------------------------------------------------

--
-- Table structure for table `profileimg`
--

CREATE TABLE `profileimg` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` varchar(511) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profileimg`
--

INSERT INTO `profileimg` (`id`, `username`, `status`) VALUES
(6, 'faizanabid36', 'pfp/5ba206a6cc0cf8.15544292.png'),
(10, 'faraz12345', 'pfp/5ba202154c8743.61532533.jpg'),
(11, 'stellaxd', 'pfp/5ba203e73c0fd8.37331363.jpg'),
(12, 'jamiecorie12', 'pfp/5ba20685ba8fa3.43286088.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileimg`
--
ALTER TABLE `profileimg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
