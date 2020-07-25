-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2020 at 07:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giftsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `pass`) VALUES
(1, 'Linah Ling\'ande', 'linah', 'linah');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 1, 4, 3),
(2, 1, 11, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `occasion` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `relationship`, `occasion`, `color`, `price`, `image`) VALUES
(1, 'Geroge Crew Neck Tshirt', 'Sister | Girlfriend', 'Casual', 'Black', 10000, 'images/001.jpg'),
(2, 'Krista Sport Women\'s Swim Top', 'Girlfriend', 'Sports', 'Pink', 50000, 'images/002.jpg'),
(3, 'Geroge Fashion Leggings', 'Sister | Girlfriend', 'Casual', 'Black', 20000, 'images/003.jpg'),
(4, 'Athetic Works Women Leggings', 'Sister | Girlfriend', 'Sports', 'Black', 25000, 'images/004.jpg'),
(5, 'Walmart Floral V Neck Blouses', 'Mother | Sister | Girlfriend', 'Casual', 'Grey', 30000, 'images/005.jpeg'),
(6, 'Walmart Striped V Neck Tshirt\r\n', 'Sister | Girlfriend', 'Casual', 'Blue', 20000, 'images/006.jpeg'),
(7, 'Zanzea Baseball blouse\r\n', 'Sister | Girlfriend', 'Casual', 'Grey', 15000, 'images/007.jpeg'),
(8, 'Vanderblit Jeans\r\n', 'Mother', 'Official', 'White', 30000, 'images/008.jpg'),
(9, 'Mac Waterproof Jacket\r\n', 'Sister | Girlfriend', 'Rainy', 'Black', 50000, 'images/\r\n009.jpg'),
(10, 'Floso Floral Handbag\r\n', 'Mother | Sister | Girlfriend', 'Casual', 'Blue', 45000, 'images/010.jpeg'),
(11, 'Boho Womens Lace Skirts\r\n', 'Sister | Girlfriend', 'Outings', 'White', 23000, 'images/011.jpeg'),
(12, 'Geroge Maxi Dress\r\n', 'Sister | Girlfriend', 'Outings', 'Black', 45000, 'images/012.jpg'),
(13, 'Scrubstar Yoga Pants\r\n', 'Mother | Sister | Girlfriend', 'Casual', 'Grey', 40000, 'images/013.jpg'),
(14, 'Nicci Crossbody bag\r\n', 'Sister | Girlfriend', 'Outings', 'Pink', 25000, 'images/014.jpg'),
(15, 'Geroge Mindy Sandals\r\n', 'Sister | Girlfriend', 'Casual', 'Black', 30000, 'images/015.jpg'),
(16, 'Geroge Lady Heels\r\n', 'Mother', 'Official', 'Black', 28000, 'images/016.jpg'),
(17, 'Canvas Womens Sneaker', 'Sister | Girlfriend', 'Casual', 'Black', 15000, 'images/017.jpeg'),
(18, 'Floso Floral Sundress', 'Sister | Girlfriend', 'Outings', 'Black', 25000, 'images/018..jpeg'),
(19, 'Emmababy Pencil Trousers', 'Sister | Girlfriend', 'Outings', 'Black', 50000, 'images/019.jpeg'),
(20, 'George Satchel', 'Mother', 'Official', 'Black', 20000, 'images/020.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `email`, `pass`) VALUES
(1, 'george smith', 'gsmith', 'gsmith@gmail.com', 'george');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
