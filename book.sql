-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 11:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@mail.com', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_qty` int(10) NOT NULL,
  `b_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `book_id`, `book_qty`, `b_price`) VALUES
(2, 2, 3, '550');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'all'),
(4, 'hey'),
(5, 'thriller');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `amount_due` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `book_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `book_name` text NOT NULL,
  `author_name` text NOT NULL,
  `book_img` text NOT NULL,
  `book_price` int(100) NOT NULL,
  `bsale_price` int(100) NOT NULL,
  `book_desc` text NOT NULL,
  `book_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`book_id`, `cat_id`, `book_name`, `author_name`, `book_img`, `book_price`, `bsale_price`, `book_desc`, `book_qty`) VALUES
(1, 3, 'sirish ko ful', 'bjkl', 'c7.jpg', 56, 56, 'fghjkl;lkjhgfdertyuio', 0),
(2, 3, 'dffg', 'sesser', 'c7.jpg', 567, 456, '            y6frfrtiiuyfytrftfrerfgrftreedrtrfghgtuygtytftftgfhrg', 0),
(4, 1, 'Gravity of Us', 'Phil Stamper', 'c1.jpg', 600, 500, 'As a successful social media journalist with half a million followers, seventeen-year-old Cal is used to sharing his life online. But when his pilot father is selected for a highly publicized NASA mission to Mars, Cal and his family relocate from Brooklyn to Houston and are thrust into a media circus.Amidst the chaos, Cal meets sensitive and mysterious Leon, another “Astrokid,” and finds himself falling head over heels—fast. As the frenzy around the mission grows, so does their connection. But when secrets about the program are uncovered, Cal must find a way to reveal the truth without hurting the people who have become most important to him.', 10),
(5, 4, 'gravity of us', 'phil stamper', 'c1.jpg', 789, 678, '         sdrtfyguiuytrewqertyui   ', 12),
(6, 5, 'ijoriya', 'phil stamper', 'c3.jpg', 789, 678, 'fhsufhsifhsifhisf', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'sita', 'sita44@mail.com', 'b0f8b3e58f093359fe1af416b5ea8ed6'),
(4, 'nirmala', 'sita44@mail.com', 'bc62847397a2a1db364a2f855b098f68'),
(5, 'nirmala', 'nirmala12@mail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'nirmala', 'nirmala12@mail.com', 'c8837b23ff8aaa8a2dde915473ce0991'),
(7, 'nature', 'nature12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'mkm', 'mukeshmahato843@gmail.com', '912ec803b2ce49e4a541068d495ab570');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `book_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
