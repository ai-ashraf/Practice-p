-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2022 at 11:21 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_b8`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `details`, `picture`) VALUES
(1, 'Watch', 1001, 'nmfvjdsvbmfbv', '22-09-181663491326cat4.jpg'),
(2, 'Perfume', 2000, 'This is the best perfume. Very good smell.', '22-09-181663492481item6.jpg'),
(3, 'Laptop', 107500, 'Thdifjaslfhf wuyhd wu whgw w wywgwjuhw  wuh fwuyhuwh', '22-09-181663492625item2.jpg'),
(4, 'Shoe', 1500, 'hkfgvjeqwgf wui wuyg r w y tgiwq gywyi ', '22-09-181663492651item3.jpg'),
(5, 'Flower Vase 1', 750, 'hgdjwayud widywuidy euidywe flower vase', '22-09-181663498968item4.jpg'),
(6, 'Bag', 1900, 'Bag dyudh eugd sytgd yst ytsjf yudy  ', '22-09-181663499004item7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `student_id`, `picture`) VALUES
(12, 'Electronics', 1, '22-09-151663231676cat1.jpg'),
(13, 'Cosmetics', 2, '22-09-151663232979cat2.jpg'),
(15, 'Watch', 500, '22-09-151663236880item1.jpg'),
(17, 'Runtime Terror', 990, '22-09-151663238701WIN_20220915_16_44_25_Pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
