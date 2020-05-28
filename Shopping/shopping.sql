-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 12:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `product_prev_price` float DEFAULT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_prev_price`, `product_img`, `product_description`) VALUES
(1, 'EMUTZ Soft Toys Giant Teddy Bear 5-Foot long - Color Brown', 8999, 10000, './images/teddyr.jpg', 'Ages 12 months and above'),
(2, 'Sennheiser HD 4.50 SE Headphones(Black)', 1390, 1490, './images/headphone.jpg', 'Bluetooth Wireless Noise Cancellation Headphone'),
(3, 'Dettol Alcohol based Hand Sanitizer, Original 200ml', 500, 750, './images/sanitizer.jpg', '3 nos. per pack'),
(4, 'Skullcandy S2IKDY-003 Ink\'d Headset with Mic(Blue)', 699, 1699, './images/earphonesr.jpg', 'Black & Blue, wireless(in ear)'),
(5, 'Apple iPhone 11', 73000, 85000, './images/iphone11r.jpg', 'Includes EarPods with Lightning Connector, USB-C to Lightning Cable'),
(6, 'Laptop Table - Color Black', 1500, 2100, './images/laptable.jpg', 'Foldable Bed table(30 x 48 x 27 cm)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
