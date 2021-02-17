-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 01, 2020 at 06:00 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Huawei P40 Pro', 82000),
(2, 'Samsung S20 Ultra', 86000),
(3, 'Iphone 11 Pro', 94500),
(4, 'Moto Razer 2019', 146000),
(5, 'One Plus 7 Pro', 46000),
(7, 'Asus AUG', 19000),
(8, 'Iphone XR', 33000),
(9, 'Real Me', 12000),
(10, 'Vivo', 13000),
(11, 'Real Me', 12000),
(12, 'Redmi Note 5', 10000),
(13, 'Samsung S10 Lite', 43999),
(14, 'One Plus 8 Pro', 62000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Jai', 'henanayak@xyz', 'sdgsdfgsh', '1234569872', 'Nawada', 'Gaya road nawada'),
(2, 'Kunal', 'Shrutisrivasta@xyz', 'helloworld', '565623245', 'Nawada', 'gaya road'),
(3, 'Rishav', 'rishavbhuahsan@xyz', 'helloworld', '525646454', 'Nawada', 'gaya road'),
(4, 'Shashi', 'shashikumar@xyz', 'hello1234', '1236547890', 'Nawada', 'gaya road'),
(5, 'Prashant', 'prashanyraj123@xyz', 'hello986', '1654792385', 'Nawada', 'gaya road'),
(6, 'Piyush', 'piyushjaya@xyz', 'hello56576', '1254873654', 'Nawada', 'Par Nawada'),
(7, 'Rahul', 'rahulraj@xyz', 'hiiamrahul', '1548796225', 'DELHI', 'cd block, Rohini'),
(8, 'Ravi', 'ravi123@xyz', 'ravi123', '9865324521', 'Kolkata', 'Salt Lake-5'),
(9, 'Himanshu', 'himanshu4534@xyz', 'him12345', '8954873265', 'Delhi', 'Indira Vihar'),
(10, 'Sourav', 'souracraj24@xyz', 'sourav53436', '876532895', 'Patna', 'Boring Road'),
(11, 'Sabita', 'sabita786@xyz', 'Sabita578', '872665421', 'Jaipur', 'lane 2, New bus stand'),
(12, 'Naman', 'namanhey23@xyz', 'namna_6776', '7865215462', 'Calicut', 'Near NIT calicut'),
(13, 'Preeti', 'preetiraj@xyz', 'preeti@98676', '7859531254', 'Lucknow', 'Gomtinagar');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `items_id` int(20) NOT NULL,
  `status` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `items_id` (`items_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `items_id`, `status`) VALUES
(1, 9, 2, 'Delivered'),
(2, 1, 4, 'Proccess'),
(3, 12, 5, 'On the Way'),
(4, 2, 13, 'Delivered'),
(5, 6, 4, 'on the way'),
(6, 8, 8, 'ordered placed'),
(7, 13, 11, 'Delivered'),
(8, 13, 8, 'delivered'),
(9, 11, 9, 'Delivered'),
(10, 4, 7, 'On the way');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`items_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
