-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 08:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phones4you`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `brandtype` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `ram-rom` varchar(255) NOT NULL,
  `camera` varchar(255) NOT NULL,
  `battery` varchar(255) NOT NULL,
  `spec` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brandtype`, `productname`, `ram-rom`, `camera`, `battery`, `spec`, `image`, `date`) VALUES
(5, 'Samsung', 'Samsung S10 Plus', '     8 GB RAM | 128 GB ROM ', ' 16 MP Primary Camera | 10 MP Front Camera', ' 4100 mAh Battery', 'Dual Sim Device', '5.jpg', '15-06-2019'),
(6, 'Samsung', ' Samsung M30', '4 GB RAM | 64 GB ROM', ' 13 MP Primary Camera | 16 MP Front Camera', ' 5000 mAh Battery', 'Dual Sim Device', '6.jpg', '15-06-2019'),
(7, 'Samsung', ' Samsung Galaxy A50', '4 GB RAM | 64 GB ROM', ' 13 MP Primary Camera | 25 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '7.jpg', '15-06-2019'),
(8, 'Samsung', ' Samsung M10', '2 GB RAM | 16 GB ROM', ' 13 MP Primary Camera | 5 MP Front Camera', ' 3400 mAh Battery', 'Dual Sim Device', '8.jpg', '15-06-2019'),
(9, 'Xiaomi', 'Xiaomi Redmi Note 7 Pro', '4 GB RAM | 64 GB ROM', ' 48 MP Primary Camera | 13 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '9.jpg', '15-06-2019'),
(10, 'Xiaomi', ' Xiaomi Poco F1', '6 GB RAM | 64 GB ROM ', ' 12 MP Primary Camera | 20 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '10.jpg', '15-06-2019'),
(11, 'Xiaomi', 'Xiaomi Redmi Note 5', '3 GB RAM | 32 GB ROM', ' 12 MP Primary Camera | 5 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '11.jpg', '15-06-2019'),
(12, 'Xiaomi', 'Xiaomi Redmi Note 4 64GB', '4 GB RAM | 64 GB ROM', ' 13 MP Primary Camera | 5 MP Front Camera', ' 4100 mAh Battery', 'Dual Sim Device', '12.png', '15-06-2019'),
(13, 'OnePlus', 'OnePlus 7', '6 GB RAM | 128 GB ROM ', ' 48 MP Primary Camera | 16 MP Front Camera', ' 3700 mAh Battery', 'Dual Sim Device', '13.jpg', '15-06-2019'),
(14, 'OnePlus', 'OnePlus 7 Pro', '6 GB RAM | 128 GB ROM ', ' 48 MP Primary Camera | 16 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '14.jpg', '15-06-2019'),
(15, 'OnePlus', ' OnePlus 6T', '6 GB RAM | 128 GB ROM ', ' 16 MP Primary Camera | 16 MP Front Camera', '3700 mAh Battery', 'Dual Sim Device', '15.jpg', '15-06-2019'),
(16, 'OnePlus', ' OnePlus 6', '6 GB RAM | 64 GB ROM ', '16 MP Primary Camera | 16 MP Front Camera', ' 3300 mAh Battery', 'Dual Sim Device', '16.jpg', '15-06-2019'),
(17, 'vivo', ' Vivo Y17', '4 GB RAM | 128 GB ROM', ' 13 MP Primary Camera | 20 MP Front Camera', ' 5000 mAh Battery', 'Dual Sim Device', '17.jpg', '15-06-2019'),
(18, 'vivo', 'Vivo V15 Pro', '6 GB RAM | 128 GB ROM', '48 MP Primary Camera | 32 MP Front Camera', ' 3700 mAh Battery', 'Dual Sim Device', '18.jpg', '15-06-2019'),
(19, 'vivo', ' Vivo V11 Pro', '6 GB RAM | 64 GB ROM ', ' 12 MP Primary Camera | 25 MP Front Camera', ' 3400 mAh Battery', 'Dual Sim Device', '19.jpg', '15-06-2019'),
(20, 'vivo', 'Vivo Nex', '8 GB RAM | 128 GB ROM ', ' 12 MP Primary Camera | 8 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '20.jpg', '15-06-2019'),
(21, 'oppo', ' Oppo F11 Pro', '6 GB RAM | 64 GB ROM', ' 48 MP Primary Camera | 16 MP Front Camera', ' 4000 mAh Battery', 'Dual Sim Device', '21.jpg', '15-06-2019'),
(22, 'oppo', 'Oppo K1', '4 GB RAM | 64 GB ROM', ' 16 MP Primary Camera | 25 MP Front Camera', ' 3500 mAh Battery', 'Dual Sim Device', '22.jpg', '15-06-2019'),
(23, 'oppo', 'OPPO F9 Pro', '4 GB RAM | 64 GB ROM', ' 16 MP Primary Camera | 25 MP Front Camera', ' 3500 mAh Battery', 'Dual Sim Device', '23.jpg', '15-06-2019'),
(24, 'oppo', 'OPPO F7', '4 GB RAM | 64 GB ROM', ' 16 MP Primary Camera | 25 MP Front Camera', ' 3400 mAh Battery', 'Dual Sim Device', '24.jpg', '15-06-2019'),
(25, 'Google Pixel', 'Google Pixel 3 XL', '4 GB RAM | 64 GB ROM ', ' 12.2 MP Primary Camera | 8 MP Front Camera', ' 3430 mAh Battery', 'Single Sim Device', '25.jpg', '15-06-2019'),
(26, 'Google Pixel', ' Google Pixel 3 ', '4 GB RAM | 64 GB ROM ', ' 12.2 MP Primary Camera | 8 MP Front Camera', ' 2915 mAh Battery', 'Single Sim Device', '26.jpg', '15-06-2019'),
(27, 'Google Pixel', ' Google Pixel 3A XL', '4 GB RAM | 64 GB ROM', ' 12.2 MP Primary Camera | 8 MP Front Camera', '3700 mAh Battery', 'Single Sim Device', '27.jpg', '15-06-2019'),
(28, 'Google Pixel', 'Google Pixel 3A', '     4 GB RAM | 64 GB ROM ', ' 12.2 MP Primary Camera | 8 MP Front Camera', ' 3000 mAh Battery', 'Single Sim Device', '28.jpg', '15-06-2019'),
(29, 'Huawei', 'Huawei P30 Lite', '4 GB RAM | 128 GB ROM', ' 24 MP Primary Camera | 32 MP Front Camera', ' 3340 mAh Battery', 'Dual Sim Device', '29.png', '15-06-2019'),
(30, 'Huawei', 'Huawei P30 Pro', '8 GB RAM | 256 GB ROM', ' 40 MP Primary Camera | 32 MP Front Camera', ' 4200 mAh Battery', 'Dual Sim Device', '30.jpg', '15-06-2019'),
(31, 'Huawei', ' Huawei Mate 20 Pro', '6 GB RAM | 128 GB ROM ', ' 40 MP Primary Camera | 24 MP Front Camera', ' 4200 mAh Battery', 'Dual Sim Device', '31.jpg', '15-06-2019'),
(32, 'Huawei', ' Huawei Nova 3', '6 GB RAM | 128 GB ROM ', ' 16 MP Primary Camera | 24 MP Front Camera', ' 3750 mAh Battery', 'Dual Sim Device', '32.jpg', '15-06-2019'),
(47, 'Huawei', 'test', '4', '2542', 'gfbg', 'jhgjhg', '47.png', '17-06-2019'),
(48, 'Xiaomi', 'mnbjk', 'kmlk', 'lkmlml', 'l;m;l', ';lm;lm', '48.png', '17-06-2019');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date`) VALUES
(1, 'chinmay', 'gadgets4u@gmail.com', 'gadgets#100', '17-06-2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
