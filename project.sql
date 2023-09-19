-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2022 at 05:52 PM
-- Server version: 8.0.27
-- PHP Version: 7.3.33-1+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `post`, `image`) VALUES
(5, 'Titleo', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors,', 'img/blo2.png'),
(7, 'titletwo', 'Cards support a wide variety of content, including images, text, list groups, links, and more. Below are examples of what’s supported.', 'img/food.jpg'),
(8, 'Why online food ordering so important', 'Online ordering and delivery systems provide a clear sales channel for restaurants. Customers browse menu items, select what to order, place their orders and make payment through the restaurant app or website. Upon receiving the order, the restaurant prep', 'img/rider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `category`, `location`) VALUES
(2, 'Account Management Executive - Sales - ', 'Commercial', 'Sylhet'),
(3, 'Account Manager ', 'Commercial', 'Dhaka'),
(4, 'Central Operations', 'Intern', 'Sylhet'),
(5, 'Dine In Intern', 'Internship', 'Sylhet'),
(6, 'Influencer Marketing - Online Marketplaces/Ecommerce/StartUps', 'Marketing', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL COMMENT '1=me 2 = admin',
  `email` varchar(255) NOT NULL,
  `type` tinyint NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `email`, `type`, `date`, `message`) VALUES
(20, 'test@gmail.com', 1, '2022-05-27 17:45:29', 'I received the wrong order'),
(21, 'test@gmail.com', 1, '2022-05-27 17:46:19', 'can u please help me ??'),
(22, 'test@gmail.com', 2, '2022-05-27 17:46:27', 'sure'),
(23, 'test@gmail.com', 2, '2022-05-27 17:46:37', 'ok checking '),
(24, 'tasniam16@gmail.com', 1, '2022-05-27 17:48:32', 'There are missing items from my order'),
(25, 'tasniam16@gmail.com', 1, '2022-05-27 17:48:40', 'can u'),
(26, 'tasniam16@gmail.com', 1, '2022-05-27 17:48:46', 'ples'),
(27, 'tasniam16@gmail.com', 1, '2022-05-27 17:48:49', 'check'),
(28, 'tasniam16@gmail.com', 2, '2022-05-27 17:49:06', 'ok sure ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `card` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `card`) VALUES
(1, 'Moriom akter', 'chowdhury', 'abc@gmail.com', 1778827362, '1234', 12343546);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `restaurent` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `image`, `restaurent`, `description`, `price`) VALUES
(1, 'BBQ pasta', 'pasta2.jpg', 'Chick Chicken', 'served with chicken and mayonise', 290),
(2, 'BBQ pizza', 'pizza1.jpg', 'Pizza Hut', 'served with cheese and sausage', 580),
(5, 'Thai Soup', 'soup1.jpg', 'Chick Chicken', 'served for 4 person', 480),
(6, 'BBQ pizza', 'food.jpg', 'Spicy Restaurent', 'Chinese, Mexican, Thai', 200),
(8, 'Cream pasta', 'pasta2.jpg', 'Exit', 'Cheese,Cream,Butter', 320),
(9, 'Chicken Burger', 'burger1.jpg', 'Exit', 'Tomato,onion,chicken', 120);

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `name`, `email`, `msg`) VALUES
(1, 'abcde', 'tasniam16@gmail.com', 'hi'),
(2, 'abab', 'abc@gmail.com', 'hlw'),
(3, 'abcde', 'abcde@gmail.com', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin \"dolorem ipsum\" roughly translated as \"pain itself.\"'),
(4, 'abcde', 'tasniam16@gmail.com', 'Lorem ipsum, in graphical and textual context, refers to filler text that is placed in a document or visual presentation. Lorem ipsum is derived from the Latin \"dolorem ipsum\" roughly translated as \"pain itself.\"'),
(5, 'jhkljlk', 'abc@gmail.com', 'hadvbjsafhsdjkbfv');

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE `order_history` (
  `order_id` int NOT NULL,
  `restaurent` int NOT NULL,
  `food` int NOT NULL,
  `image` int NOT NULL,
  `description` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `address`, `phone`, `image`) VALUES
(7, 'Sadi Ahmed', 'sadi@gmail.com', '12345', 'resturernt_owner', 'Sylhet,Mirabazar', '019483726632', 'image/h4.jpg'),
(8, 'abcde', 'abcde@gmail.com', '12345', 'rider', 'Dhaka', '01928372273', 'image/h4.jpg'),
(9, 'hasan', 'hasan22@gmail.com', '1234', 'customer', 'sylhet', '0125487', 'image/youtube chennel pic.PNG'),
(10, 'abcd', 'ab@gmail.com', '1234', 'customer', 'abcd', '1234', 'image/donut-g00249fead_1920.png'),
(11, 'fdsghfgh', 'asdfjh@ggfjhk', '1234', 'customer', 'sdfghj', '654', 'image/donut-g00249fead_1920.png'),
(12, 'gdjhg', 'hglj@gfjhg.com', '1234', 'customer', 'gkj', '1235', 'image/donut-g00249fead_1920.png'),
(13, 'asdfg', 'asdfg@ashh.com', '54321', 'customer', 'fg', '12345', 'image/donut-g00249fead_1920.png'),
(14, 'asddd', 'fgdh@gmail.com', '1234', 'customer', 'sfdx', '12265', 'image/donut-g00249fead_1920.png'),
(15, 'saifur', 'saifur@gmail.com', '1221', 'resturernt owner', 'syl', '0125', 'image/272592824_3163823457235570_2843622523419574527_n.jpg'),
(22, 'nb', 'zvxc@gmail.com', '123', 'customer', 'xvc mn', '1235', 'image/donut-g00249fead_1920.png'),
(26, 'aaaaa', 'dab@gmail.com', '11223', 'customer', 'jjjf', '01258', 'image/ank.png'),
(27, 'aabbc', 'adcb@gmail.com', '11223', 'customer', 'syl', '12548', 'image/IMG_20210401_072359_857.jpg'),
(28, 'Saifur Rahman', 'saifur582@gmail.com', '1234', 'resturernt owner', 'sylhet', '01725456565', 'image/IMG_20210401_072359_857.jpg'),
(31, 'a', 'a4@gmail.com', '1122', 'rider', 'dhk', '12587', 'image/donut-g00249fead_1920.png'),
(32, 'tasnia', 'tasniam16@gmail.com', '123456', 'customer', '98 pollobi', '01759598008', 'image/'),
(34, 'ss', 'test@gmail.com', '111111', 'customer', 'zxz', '1111111111', 'image/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT '1=me 2 = admin', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
