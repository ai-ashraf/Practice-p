-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 18, 2022 at 06:16 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

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
  `category` varchar(200) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `details`, `category`, `picture`) VALUES
(1, 'Watch', 1001, 'nmfvjdsvbmfbv', 'Electronics', '22-09-181663491326cat4.jpg'),
(2, 'Perfume', 2000, 'This is the best perfume. Very good smell.', 'Cosmetics', '22-09-181663492481item6.jpg'),
(3, 'Laptop', 107500, 'Thdifjaslfhf wuyhd wu whgw w wywgwjuhw  wuh fwuyhuwh', 'Electronics', '22-09-181663492625item2.jpg'),
(4, 'Shoe', 1500, 'hkfgvjeqwgf wui wuyg r w y tgiwq gywyi ', 'Fashion', '22-09-181663492651item3.jpg'),
(5, 'Flower Vase ', 750, 'hgdjwayud widywuidy euidywe flower vase', 'Fashion', '22-09-181663498968item4.jpg'),
(6, 'Bag', 1900, 'Bag dyudh eugd sytgd yst ytsjf yudy  ', 'Fashion', '22-09-181663499004item7.jpg'),
(7, 'Air Pods', 13999, 'jkhygdew dyugetdw weygt ed ', 'Electronics', '22-09-181663515157MME73.jpg'),
(8, 'Talking Cactus', 1200, 'this toy is repeat your talk .', 'Baby Item', '22-09-181663516277cdbb68d4316d4d502a1882033203db35.jpg'),
(9, 'Sunglass', 1700, 'jhgd hdgd hdwjqed ', 'Fashion', '22-09-1816635221623b0f7ae53181b58b53f92a0d13fc96d6.jpg'),
(10, 'Remote Control Car', 1500, 'kjhedwes sudyh  uyhd uyd kdh yudh ', 'Baby Item', '22-09-1816635236891630446364-41Nka0tZ6RS._SL500_.jpg'),
(11, 'Doll Elephant', 1200, ' yudjh uyd dhuedyh yueyd ueydtfguhyughyhjk', 'Baby Item', '22-09-181663523735images.jfif'),
(12, 'Fishing Toy', 700, 'fghjfghjk ghj fghj fghj fghj fghju rtyui fghj', 'Baby Item', '22-09-181663523826Fisher-Price-Deluxe-Kick-n-Play-Piano-Gym-baby-scaled.jpg');

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
(22, 'Fashion', 34456, '22-09-181663515964fashion.jpg'),
(23, 'Baby Item', 2344, '22-09-181663516126istockphoto-526495161-612x612.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
