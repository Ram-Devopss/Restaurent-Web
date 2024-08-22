-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2024 at 07:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurent`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `des` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `des`, `price`, `url`) VALUES
(11, 'curd', 'cool 🥓', 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHPB3u2ENlVCKi0HMnWuIHWp20B51cC9Stcw&s'),
(12, 'curd', 'cool🧂', 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHPB3u2ENlVCKi0HMnWuIHWp20B51cC9Stcw&s'),
(13, 'curd', 'cool🍟', 50, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHPB3u2ENlVCKi0HMnWuIHWp20B51cC9Stcw&s'),
(14, 'sambar', 'pretty🥞', 100, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfknB-9LfNYepyKnepv8PMW76WT_dFWQ5Ybg&s'),
(18, 'test dish', 'good', 900, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHPB3u2ENlVCKi0HMnWuIHWp20B51cC9Stcw&s');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `registrated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `username`, `email`, `password`, `registrated`) VALUES
(4, 'test_database', 'ramsconquer@gmail.com', 'test_database', '2024-07-11 16:12:50'),
(5, 'parvathi', 'ramsconquer@gmail.com', 'parvathi', '2024-07-11 16:34:37'),
(6, 'ramsc', 'tsess21222@gmail.com', 'test_database', '2024-07-11 16:47:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
