-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 07:58 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms-admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `code` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `code`, `status`) VALUES
(1, 'Laptop', 'L01', 0),
(2, 'Mobile', 'M02', 0),
(5, 'Monitor', 'MT03', 0),
(6, 'Lamp', 'L04', 0),
(7, 'Processor', 'P05', 0),
(8, 'Web Camera', 'WC06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_description` text NOT NULL,
  `long_description` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `feature_image` varchar(300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `short_description`, `long_description`, `category_id`, `feature_image`, `user_id`, `status`) VALUES
(1, 'test', 'test', 'test', 2, 'uploads/5515188.jpg', NULL, 0),
(4, 'New Test', 'new test.................', 'ryrtyurtyurt', 5, 'uploads/cf11e83a4e46a2c96adbf3496545e654.jpg', NULL, 0),
(5, 'Mobile', 'fghfhf', 'fhfh', 2, 'uploads/12115867_438961666294954_8590508022696297849_n.jpg', NULL, 0),
(6, 'new', 'ngfhjgfj', 'fsfsf', 1, 'uploads/21271136_1528781493876525_4599741024911784812_n.jpg', NULL, 0),
(7, 'HP Laptop', 'Test description..............', '<p>dfgdfg dgdfghdfgh</p><p>dsgdsgdsg</p><p>gdsgdg</p>', 1, 'uploads/Ibrahim_DP.png', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Md. Ibrahim Khalil', 'test@gmail.com', '123456'),
(2, 'Md. Ibrahim Khalil Imran', 'update@gmail.com', '123456'),
(21, 'Kawsar', 'kawsar@gmail.com', '123456'),
(23, 'Salah', 'salah@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
