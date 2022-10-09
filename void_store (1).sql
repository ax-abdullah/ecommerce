-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2022 at 11:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `void_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'Zomoto'),
(3, 'Swiggy'),
(4, 'MacDonald'),
(5, 'Ali Baba'),
(6, 'Amazon'),
(7, 'Nike'),
(8, 'Flipkart');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(6, 'Milk'),
(7, 'Fruit'),
(8, 'Milk Products'),
(9, 'Juices'),
(10, 'Chips'),
(11, 'Vegetables'),
(16, 'Ice cream'),
(17, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `status`, `date`) VALUES
(3, 'Mangoes', 'Mangoes are always tasty. Eat one and you will ask for more', 'mango, fresh mango, zomoto, fruit, green mango', 7, 2, 'mango.jpg', 'mango1.jpg', 'mango2.jpg', '30', 'true', '2022-10-04 01:34:59'),
(4, 'Fresh Apples', 'An apple a day keeps the doctor away. And has a lot of vitamins. ', 'apple, fresh apple, green apple, swiggy', 7, 3, 'apple.jpg', 'apple-1.jpg', 'apple-2.jpg', '20', 'true', '2022-10-05 00:44:41'),
(5, 'Capsicum', 'Capsicum is very good for health. We serve the best ', 'capsicum, green, fresh , capsicum, yellow capsicum, red capsicum', 11, 5, 'capsicum-1.jpg', 'peppers.jpg', 'capsicum-2.jpg', '15', 'true', '2022-10-08 13:32:39'),
(6, 'Dairy Milk', 'Milk is a nutrient-rich liquid food, and has a lot of vitamins  ', 'dairy milk, fresh milk, milk', 6, 4, 'milk-1.jpg', 'milk-2.jpg', 'milk-3.jpg', '20', 'true', '2022-10-05 00:44:05'),
(8, 'Shoes', 'Shoes online - shop shoes online for men, women, and kids', 'shoes, black shoes, white shoes', 17, 7, 'shoes-1.jpg', 'shoes-2.jpg', 'shoes-3.jpg', '300', 'true', '2022-10-04 03:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
