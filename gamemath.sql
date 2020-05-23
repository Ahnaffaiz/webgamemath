-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2020 at 07:31 PM
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
-- Database: `gamemath`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `point` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `name`, `email`, `point`) VALUES
(23, 'Gifary', 'gifary@gmail.com', 200),
(24, 'Gifary', 'gifary@gmail.com', 120),
(25, 'Gifary', 'gifary@gmail.com', 40),
(26, 'Gifary', 'gifary@gmail.com', 0),
(27, 'Gifary', 'gifary@gmail.com', 10),
(28, 'intan', 'intan@gmail.com', 70),
(29, 'intan', 'intan@gmail.com', 120),
(30, 'Ahnaffaiz', 'ahnaffaiz@gmail.com', 150),
(31, 'Faiz Ahnaf Eka Putra', 'ahnaf.putra19@gmail.com', 220),
(32, 'Ahnaffaiz', 'faiz.putra553@gmail.com', 10),
(33, 'Ahnaffaiz', 'faiz.putra553@gmail.com', 40),
(34, 'Faiz Ahnaf Eka Putra', '083865087224', -10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
