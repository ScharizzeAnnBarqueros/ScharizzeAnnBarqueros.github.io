-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2025 at 06:00 PM
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
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `name`) VALUES
(1, 'Tops'),
(2, 'Pants'),
(3, 'Boots'),
(4, 'Accessories'),
(5, 'Outerwear'),
(6, 'Bag');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(4) NOT NULL,
  `categoryID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `price` int(4) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `name`, `code`, `price`, `picture`) VALUES
(1, 1, 'Indie Aesthetic Lace Halter Top', 'IALT', 450, 'prod2.webp'),
(2, 1, 'Harajuku Gothic Vintage Tee', 'HGVT', 470, 'prod4.jpg'),
(3, 1, 'Run She Got the Gun Top', 'RSGT', 400, 'prod13.webp'),
(4, 1, 'Y2K Star Mesh Off-Shoulder Long Sleeve Top', 'YSMS', 600, 'prod14.webp'),
(5, 1, 'Guitar Print Ribbed Top', 'GPRT', 500, 'prod11.webp'),
(6, 1, 'Vinyl Print Crop Top', 'VPCT', 400, 'prod5.jpg'),
(7, 1, 'Y2K Eyes Graphic Shirt', 'YEGS', 480, 'prod3.jpg'),
(8, 1, 'Star Print Ribbed Long Sleeve Top', 'SPRLST', 530, 'prod10.webp'),
(9, 2, 'Grunge Aesthetic Ripped Wide Jeans', 'GARWJ', 1200, 'prod15.webp'),
(10, 2, 'Japanese Dragon Aesthetic Jeans', 'JDAJ', 1200, 'prod9.webp'),
(11, 2, 'Grunge Aesthetic Knee Buckle Jeans', 'GAKBJ', 1150, 'prod12.webp'),
(12, 2, '90\'s Kids Jeans in Washed Brown', '9KJWB', 950, 'prod8.webp'),
(13, 3, 'Love Bites Boots', 'LBB', 1700, 'prod16.webp'),
(14, 3, 'Platform Ankle Boots', 'PAB', 1800, 'prod18.webp'),
(15, 3, 'Lebanon Ankle Boots', 'LAB', 1600, 'prod17.webp'),
(16, 4, 'Stars Ring', 'SR', 200, 'prod24.webp'),
(17, 4, 'Band-Aid Nose Clip Jewelry', 'BACJ', 120, 'prod22.webp'),
(18, 4, 'Grunge Bear Heart Earrings', 'GBHE', 250, 'prod20.webp'),
(19, 4, 'Grunge Aesthetic Star Leather Bracelet', 'GASLB', 300, 'prod23.webp'),
(20, 4, 'Silver Star and Crystal Open Bracelet', 'SSCOB', 250, 'prod1.webp'),
(21, 5, 'Come As You Are Grunge Leather Jacket', 'CAYAGLJ', 1800, 'prod6.webp'),
(22, 5, '80\'s Grandma Striped Cardigan Sweater', '8GSCS', 650, 'prod7.webp'),
(23, 6, 'Dark Washed Hobo Bag', 'DWHB', 950, 'prod21.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
