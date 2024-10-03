-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 04:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chic_charms`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom_pieces`
--

CREATE TABLE `custom_pieces` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_pieces`
--

INSERT INTO `custom_pieces` (`user_id`, `name`, `phone_number`, `email`, `description`, `created_at`) VALUES
(1, 'her', 0, 'herrrr@gmail.com', '', '2024-09-22 16:54:24.298126'),
(6, 'gres', 905436678, 'gtyhbgghuuyyyt@gmail.com', 'a green bracelet', '2024-09-22 17:34:50.153005'),
(10, 'Lome', 2147483647, 'lomeezehi@gmail.com', 'a green bracelet', '2024-09-22 17:38:09.272461'),
(11, 'Favour', 2147483647, 'abassalex49@gmail.com', 'i want a blue bracelet', '2024-09-24 10:30:28.498186'),
(12, 'Ada', 2147483647, 'herrrr@gmail.com', 'a pink bracelet with gold charms', '2024-09-24 10:35:36.397365'),
(16, 'her', 2147483647, 'herrrr@gmail.com', 'a black bracelet', '2024-09-24 10:41:23.433921'),
(17, 'her', 905436678, 'herrrr@gmail.com', 'a black bracelet', '2024-09-24 10:43:49.529470'),
(18, 'her', 905436678, 'herrrr@gmail.com', 'a black bracelet', '2024-09-24 10:46:23.901046');

-- --------------------------------------------------------

--
-- Table structure for table `login_tb`
--

CREATE TABLE `login_tb` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_tb`
--

INSERT INTO `login_tb` (`user_id`, `username`, `password`, `email`, `first_name`, `last_name`, `date_created`) VALUES
(1, '', 'busayo22', 'abassalex49@gmail.com', 'Favour ', 'Abass ', '2024-09-24 17:39:19'),
(2, '', 'busayo22', 'abassalex49@gmail.com', 'Favour ', 'Abass ', '2024-09-24 17:44:45'),
(3, '', 'busayo', 'lomeezehi@gmail.com', 'Lome', 'Ezehi', '2024-09-24 17:56:50'),
(4, '', 'busayo22', 'abassalex49@gmail.com', 'Favour ', 'Abass ', '2024-09-24 18:06:20'),
(5, '', 'busayo22', 'Busayo@gmial.com', '', '', '2024-09-24 18:08:20'),
(6, '', 'busayo22', 'Busayo@gmail.com', '', '', '2024-09-24 18:09:03'),
(7, '', 'busayo22', 'ilovelome@il.com', '', '', '2024-09-24 18:18:49'),
(8, 'Busayo', 'busayo22', 'abassalex49@gmail.com', 'Favour ', 'Abass ', '2024-09-24 19:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_type`, `product_name`, `price`, `img_name`) VALUES
(1, 'bracelet', 'Brown and beige bracelet with gold accent.', 2000, 'brown-bracelet'),
(2, 'bracelet', 'Pink and Gold Bracelet with butterfly charm ', 2500, 'pink-bracelet-3'),
(4, 'bracelet', 'White bracelet with butterfly charm', 2000, 'white-bracelet'),
(5, 'earring', 'Small studed cherry shaped earrings', 3000, 'cherry_earrings'),
(6, 'earring', 'Translucent teddy bear shaped earrings', 3500, 'rainbow_teddy_bear_earrings');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `first_name`, `last_name`, `phone_number`, `email`, `review`, `created_at`) VALUES
(1, 'Favour ', 'Abass', 2147483647, 'abassalex49@gmail.com', 'I like this website it isvery helpful for ordering accessories', '2024-09-24 11:02:03.221913'),
(2, 'her', 'her', 812554755, 'herrrr@gmail.com', 'i love these bracelets.', '2024-09-24 11:06:29.389879');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom_pieces`
--
ALTER TABLE `custom_pieces`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom_pieces`
--
ALTER TABLE `custom_pieces`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
