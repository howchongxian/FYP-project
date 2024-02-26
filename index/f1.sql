-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` int(8) NOT NULL,
  `product_img` text NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_size` varchar(5) NOT NULL,
  `description` varchar(500) NOT NULL,
  `product_price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_code` int(3) PRIMARY KEY AUTO_INCREMENT,
  `contact_name` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_tel` int(11) NOT NULL,
  `contact_message` text NOT NULL
);

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_img`, `product_name`, `product_size`, `description`, `product_price`) VALUES
(13334182, 'image/Red Bull clothes(1).jpg', 'Oracle Red Bull Racing 2023 Team Polo', '55-80', '<ul>\r\n              <li>Product ID: 13334182</li>\r\n              <li>84% polyester/16% Elastane</li>\r\n              <li>Short sleeves</li>\r\n              <li>Quarter zip neck</li>\r\n              <li>Polo collar</li>\r\n              <li>Regular fit</li>\r\n              <li>Heat-sealed team and sponsor graphics</li>\r\n              <li>Officially licensed</li>\r\n            </ul>', '48.75'),
(13334221, 'image/Red Bull clothes(2).jpg', 'Oracle Red Bull Racing 2023 Team Set up T-shirt', '55-80', '<ul>\r\n              <li>Product ID: 13334221</li>\r\n              <li>84% polyester/16% Elastane</li>\r\n              <li>Short sleeves</li>\r\n              <li>Crew neck</li>\r\n              <li>Slimmer fit</li>\r\n              <li>Heat-sealed team and sponsor graphics</li>\r\n              <li>Graphic print on sleeves</li>\r\n              <li>Officially licensed</li>\r\n            </ul>', '37.50'),
(13368549, 'image/Mercedes clothes.jpg', 'Mercedes AMG Petronas F1 2023 Team Driver T-Shirt - White', '55-80', '<ul>\r\n              <li>Product ID: 13368549</li>\r\n              <li>100% polyester</li>\r\n              <li>Short sleeves</li>\r\n              <li>Crew neck</li>\r\n              <li>Regular fit</li>\r\n              <li>Team and sponsor graphics</li>\r\n              <li>Officially licensed</li>\r\n            </ul>', '43.40'),
(13368608, 'image/Ferrari clothes (1).jpg', 'Scuderia Ferrari 2023 Team T-Shirt', '55-80', '<ul>\r\n              <li>Product ID: 13368608</li>\r\n              <li>100% cotton</li>\r\n              <li>Short sleeves</li>\r\n              <li>Crew neck</li>\r\n              <li>Regular fit</li>\r\n              <li>Printed team and sponsor graphics</li>\r\n              <li>Officially licensed</li>\r\n            </ul>', '49.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`);
COMMIT;

--
-- Indexes for col `role`
--
ALTER TABLE `user`
ADD COLUMN `role` ENUM('admin', 'user') NOT NULL DEFAULT 'user' AFTER `password`;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
