-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 10:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `age` int(5) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `g_name`, `email`, `c_name`, `age`, `message`) VALUES
(1, 'a', 'c', 'd4', 4, 'sfdd'),
(2, 'Ahmed', 'rafiashan18@gmail.com', 'faiz', 4, ''),
(3, 'Ahmed', 'rafiashan18@gmail.com', 'faiz', 4, ''),
(4, 'Ahmed', 'rafiashan18@gmail.com', 'faiz', 4, ''),
(5, 'Ahmed', 'rafiashan18@gmail.com', 'faiz', 4, ''),
(6, 'pop', 'pop@gmail.com', 'sickle', 4, 'hello '),
(7, 'Ahmed', 'a@gmail.com', 'pop', 7, 'hello'),
(8, 'Hello', 'h@gmail.com', 'faiz', 4, 'hsdkjfhdksjcnkjfd'),
(9, 'Hello', 'rafiashan18@gmail.com', 'sickle', 4, 'hello'),
(10, 'Hello', 'rafiashan18@gmail.com', 'sickle', 4, 'hello'),
(11, 'hds', 'dscsfds', 'sdf', 4, 'sdad'),
(12, 'q', 'rafiashan18@gmail.com', 'sickle', 7, 'Hello '),
(13, 'q', 'rafiashan18@gmail.com', 'sickle', 7, 'Hello '),
(14, 'Again', 'rafiashan18@gmail.com', 'sickle', 7, 'Hello '),
(15, 'Again2', 'rafiashan18@gmail.com', 'sickle', 7, 'Hello '),
(16, 'khadija', 'k?@gmail.com', 'w', 4, 'sjdsjdujeso'),
(17, 'Hello45', 'rafia#@gmail.com', '8ejkr', 7, 'psodped'),
(18, 'app', 'app', 'sickle', 8, 'hwloksoxx'),
(19, 'skfjkd', 'asbdhb', 'd', 4, 'dfdv'),
(20, 'skfjkd', 'asbdhb', 'd', 4, 'dfdv'),
(21, 'skfjkd', 'asbdhb', 'd', 4, 'dfdv'),
(22, 'skfjkd', 'asbdhb', 'd', 4, 'dfdv'),
(23, 'Muskan', 'M@gmail.com', 'Adil', 5, 'He is crazy for going to school.');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `file` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `email`, `qualification`, `file`, `id`) VALUES
('Ahmed', 'rafiashan18@gmail.com', 'MatricFail', 'cv/documentation.docx', 1),
('Muskan', 'muskan@gmail.com', 'MatricFail', 'cv/documentation.docx', 2),
('Khadija', 'rk#@gmail,=,com', 'MatricFail', 'cv/ProjectDocumentation.docx', 3),
('Azlan', 'Azlan@gmail.com', 'F.Sc. Pass', 'cv/documentation.docx', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
