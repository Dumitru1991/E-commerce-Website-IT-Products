-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 07:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Dumi91', 'Asddsa12!');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'ASUS'),
(2, 'DELL'),
(3, 'Apple'),
(4, 'Samsung'),
(5, 'Huawei'),
(6, 'Nvidia'),
(7, 'AMD'),
(8, 'Intel'),
(9, 'LG'),
(10, 'HyperX'),
(11, 'SteelSeries'),
(12, 'GIGABYTE'),
(13, 'Xiaomi'),
(14, 'HP');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `date_order` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `user_phone` varchar(10) NOT NULL,
  `user_email` varchar(300) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `date_order`, `user_id`, `user_name`, `user_address`, `user_phone`, `user_email`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(4, 1, '19-12-2020 05:03:07', 3, 'Todoran', 'Alba', '0740358703', 'todorandumitru046@gmail.com', 'Sản phẩm cao cấp', '3PGVwy_simg_b5529c_250x250_maxb.jpg', 1, 5000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `cart_has_products`
--

CREATE TABLE `cart_has_products` (
  `cart_id` int(10) NOT NULL,
  `products_product_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptopuri'),
(2, 'Sisteme PC'),
(3, 'Telefoane'),
(4, 'Componente'),
(5, 'Gaming'),
(6, 'Televizoare'),
(7, 'Monitoare LED'),
(8, 'Audio'),
(9, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`status`) VALUES
(1),
(1),
(0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `ID` int(100) NOT NULL,
  `Pro_ID` int(100) DEFAULT NULL,
  `Pro_name` varchar(255) DEFAULT NULL,
  `Date_order` varchar(255) DEFAULT NULL,
  `Product_image` varchar(255) DEFAULT NULL,
  `Qty` int(100) DEFAULT NULL,
  `Price` int(100) DEFAULT NULL,
  `Total_amt` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `ID` int(100) NOT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Total` int(100) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Laptop ASUS TUF', 3890, 'Laptop ASUS Gaming 15.6\'\' TUF FX505DT, FHD, Procesor AMD Ryzen™ 7 3750H (4M Cache, up to 4.00 GHz), 16GB DDR4, 512GB SSD, GeForce GTX 1650 4GB', '1.JPG', 'laptop, asus,Laptop ASUS Gaming 15.6\'\' TUF FX505DT, FHD, Procesor AMD Ryzen™ 7 3750H (4M Cache, up to 4.00 GHz), 16GB DDR4, 512GB SSD, GeForce GTX 1650 4GB'),
(2, 1, 1, 'Laptop ASUS ROG Strix', 4699, 'Laptop ASUS Gaming 15.6\'\' ROG Strix G15 G512LI, FHD 144Hz, Procesor Intel® Core™ i5-10300H (8M Cache, up to 4.50 GHz), 8GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, No OS', '2.jpg', 'laptop, asus, Laptop ASUS Gaming 15.6\'\' ROG Strix G15 G512LI, FHD 144Hz, Procesor Intel® Core™ i5-10300H (8M Cache, up to 4.50 GHz), 8GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, No OS'),
(3, 1, 1, 'Laptop ASUS TUF', 4999, 'Laptop ASUS Gaming 15.6\'\' ASUS TUF F15 FX506LI, FHD 144Hz, Procesor Intel® Core™ i7-10870H (16M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce GTX 1650 Ti 4GB, No OS', '3.JPG', 'laptop, asus, Laptop ASUS Gaming 15.6\'\' ASUS TUF F15 FX506LI, FHD 144Hz, Procesor Intel® Core™ i7-10870H (16M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce GTX 1650 Ti 4GB, No OS'),
(4, 1, 1, 'Laptop ASUS Zephyrus', 8700, 'Laptop ASUS Gaming 14\'\' ROG Zephyrus G14 GA401IV, QHD, Procesor AMD Ryzen™ 9 4900HS (8M Cache, up to 4.40 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2060 6GB, Win 10 Home', '4.jpg', 'laptop, asus, Laptop ASUS Gaming 14\'\' ROG Zephyrus G14 GA401IV, QHD, Procesor AMD Ryzen™ 9 4900HS (8M Cache, up to 4.40 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2060 6GB, Win 10 Home'),
(5, 1, 1, 'Laptop ASUS Zephyrus', 14799, 'Laptop ASUS Gaming 15.6\'\' ROG Zephyrus S15 GX502LXS, FHD 300Hz, Intel® Core™ i7-10875H (16M Cache, up to 5.10 GHz), 32GB DDR4, 1TB SSD, GeForce RTX 2080 8GB, Win 10 Home', '5.jpg', 'laptop, asus, Laptop ASUS Gaming 15.6\'\' ROG Zephyrus S15 GX502LXS, FHD 300Hz, Procesor Intel® Core™ i7-10875H (16M Cache, up to 5.10 GHz), 32GB DDR4, 1TB SSD, GeForce RTX 2080 SUPER 8GB, Win 10 Home'),
(6, 1, 2, 'Laptop DELL Latitude', 6199, 'Laptop DELL 14\'\' Latitude 5400 (seria 5000), FHD, Procesor Intel® Core™ i7-8665U (8M Cache, up to 4.80 GHz), 8GB DDR4, 256GB SSD, GMA UHD 620, Win 10 Pro', '6.jpg', 'Laptop DELL 14\'\' Latitude 5400 (seria 5000), FHD, Procesor Intel® Core™ i7-8665U (8M Cache, up to 4.80 GHz), 8GB DDR4, 256GB SSD, GMA UHD 620, Win 10 Pro'),
(7, 1, 2, 'Laptop DELL Gaming', 8398, 'Laptop DELL Gaming 15.6\'\' G5 5500, FHD 300Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2070 8GB, Win 10 Home', '7.jpg', 'Laptop DELL Gaming 15.6\'\' G5 5500, FHD 300Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2070 8GB, Win 10 Home'),
(8, 1, 2, 'Laptop DELL Gaming', 9598, 'Laptop DELL Gaming 17.3\'\' G7 7700, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2070 8GB, Win 10 Home', '8.jpg', 'Laptop DELL Gaming 17.3\'\' G7 7700, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 1TB SSD, GeForce RTX 2070 8GB, Win 10 Home'),
(9, 1, 2, 'Laptop DELL Gaming', 5255, 'Laptop DELL Gaming 15.6\'\' G5 5505, FHD 144Hz, Procesor AMD Ryzen™ 5 4600H (8M Cache, up to 4.0 GHz), 8GB DDR4, 256GB SSD, Radeon RX 5600M 6GB, Win 10 Home', '9.jpg', 'Laptop DELL Gaming 15.6\'\' G5 5505, FHD 144Hz, Procesor AMD Ryzen™ 5 4600H (8M Cache, up to 4.0 GHz), 8GB DDR4, 256GB SSD, Radeon RX 5600M 6GB, Win 10 Home'),
(10, 1, 14, 'Laptop HP Pavilion', 4998, 'Laptop HP Gaming 15.6\'\' Pavilion 15-ec1027nq, FHD IPS 144Hz, Procesor AMD Ryzen™ 7 4800H (8M Cache, up to 4.20 GHz), 16GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, Free DOS', '10.jpg', 'Laptop HP Gaming 15.6\'\' Pavilion 15-ec1027nq, FHD IPS 144Hz, Procesor AMD Ryzen™ 7 4800H (8M Cache, up to 4.20 GHz), 16GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, Free DOS'),
(11, 1, 14, 'Laptop HP Pavilion', 5199, 'Laptop HP Gaming 17.3\'\' Pavilion 17-cd1040nq, FHD IPS 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 8GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, Free DOS', '11.jpg', 'Laptop HP Gaming 17.3\'\' Pavilion 17-cd1040nq, FHD IPS 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 8GB DDR4, 512GB SSD, GeForce GTX 1650 Ti 4GB, Free DOS'),
(12, 1, 14, 'Laptop HP OMEN', 6498, 'Laptop HP Gaming 15.6\'\' OMEN 15-dh1009nq, FHD IPS 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 8GB, Free DOS, Shadow Black', '12.jpg', 'Laptop HP Gaming 15.6\'\' OMEN 15-dh1009nq, FHD IPS 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 8GB, Free DOS, Shadow Black'),
(13, 1, 3, 'Laptop Apple MacBook Air', 5398, 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Space Grey, INT keyboard', '13.jpg', 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Space Grey, INT keyboard'),
(14, 1, 3, 'Laptop Apple MacBook Air', 5459, 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Gold, INT keyboard', '14.jpg', 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Gold, INT keyboard'),
(15, 1, 3, 'Laptop Apple MacBook Air ', 5450, 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Silver, INT keyboard', '15.jpg', 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Ice Lake i3 1.1GHz, 8GB DDR4X, 256GB SSD, Intel Iris Plus, macOS Catalina, Silver, INT keyboard'),
(16, 1, 3, 'Laptop Apple MacBook Air', 6890, 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Apple M1 chip (8-core CPU), 8GB, 512GB SSD, Apple M1 8-core GPU, macOS Big Sur, Gold, INT keyboard', '16.jpg', 'Laptop Apple 13.3\'\' MacBook Air 13 with Retina True Tone, Apple M1 chip (8-core CPU), 8GB, 512GB SSD, Apple M1 8-core GPU, macOS Big Sur, Gold, INT keyboard'),
(17, 1, 3, 'Laptop Apple MacBook Pro', 7250, 'Laptop Apple 13.3\'\' MacBook Pro 13 Retina with Touch Bar, Apple M1 chip (8-core CPU), 8GB, 256GB SSD, Apple M1 8-core GPU, macOS Big Sur, Space Grey', '17.jpg', 'Laptop Apple 13.3\'\' MacBook Pro 13 Retina with Touch Bar, Apple M1 chip (8-core CPU), 8GB, 256GB SSD, Apple M1 8-core GPU, macOS Big Sur, Space Grey'),
(18, 1, 2, 'Laptop Alienware R2', 12999, 'Laptop Alienware Gaming 15.6\'\' m15 R2, FHD, Procesor Intel® Core™ i7-9750H (12M Cache, up to 4.50 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 8GB, Win 10 Pro', '18.jpg', 'Laptop Alienware Gaming 15.6\'\' m15 R2, FHD, Procesor Intel® Core™ i7-9750H (12M Cache, up to 4.50 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 8GB, Win 10 Pro'),
(19, 1, 2, 'Laptop Alienware R3', 14999, 'Laptop Alienware Gaming 17.3\'\' m17 R3, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 2x 512GB SSD, GeForce GTX 1660 Ti 6GB, Win 10 Pro', '19.jpg', 'Laptop Alienware Gaming 17.3\'\' m17 R3, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 2x 512GB SSD, GeForce GTX 1660 Ti 6GB, Win 10 Pro'),
(20, 1, 2, 'Laptop Alienware m15 R3', 15300, 'Laptop Alienware Gaming 15.6\'\' m15 R3, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 32GB DDR4, 2x 256GB SSD, GeForce RTX 2070 SUPER 8GB', '20.jpg', 'Laptop Alienware Gaming 15.6\'\' m15 R3, FHD 144Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 32GB DDR4, 2x 256GB SSD, GeForce RTX 2070 SUPER 8GB'),
(21, 1, 3, 'Laptop Apple MacBook Pro', 7999, 'Laptop Apple 13.3\'\' The New MacBook Pro 13 Retina with Touch Bar, Coffee Lake i5 2.4GHz, 8GB, 512GB SSD, Iris Plus 655, Mac OS Mojave', '21.jpg', 'Laptop Apple 13.3\'\' The New MacBook Pro 13 Retina with Touch Bar, Coffee Lake i5 2.4GHz, 8GB, 512GB SSD, Iris Plus 655, Mac OS Mojave'),
(22, 1, 3, 'Laptop Apple MacBook Pro', 12500, 'Laptop Apple 16\'\' MacBook Pro 16 Retina with Touch Bar, Coffee Lake 6-core i7 2.6GHz, 16GB DDR4, 512GB SSD, Radeon Pro 5300M 4GB, Mac OS Catalina', '22.jpg', 'Laptop Apple 16\'\' MacBook Pro 16 Retina with Touch Bar, Coffee Lake 6-core i7 2.6GHz, 16GB DDR4, 512GB SSD, Radeon Pro 5300M 4GB, Mac OS Catalina'),
(23, 1, 1, 'Laptop ASUS Zephyrus', 5700, 'Laptop ASUS Gaming 15.6\'\' ROG Zephyrus G15 GA502IV, FHD 144Hz, Procesor AMD Ryzen™ 9 4900HS (8M Cache, up to 4.3 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2060 6GB', '23.jpg', 'Laptop ASUS Gaming 15.6\'\' ROG Zephyrus G15 GA502IV, FHD 144Hz, Procesor AMD Ryzen™ 9 4900HS (8M Cache, up to 4.3 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2060 6GB'),
(24, 1, 1, 'Laptop ASUS ROG Strix', 6199, 'Laptop ASUS Gaming 15.6\'\' ROG Strix G15 G512LWS, FHD 240Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 SUPER 8GB', '24.jpg', 'Laptop ASUS Gaming 15.6\'\' ROG Strix G15 G512LWS, FHD 240Hz, Procesor Intel® Core™ i7-10750H (12M Cache, up to 5.00 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 2070 SUPER 8GB'),
(25, 2, 8, 'PC FirstGear Gaming', 4299, 'PC FirstGear Gaming Shadow, Intel i5-9600K 3.7GHz, 16GB DDR4, 480GB SSD, GTX 1660 6GB GDDR5, RGB', '25.JPG', 'PC FirstGear Gaming Shadow, Intel i5-9600K 3.7GHz, 16GB DDR4, 480GB SSD, GTX 1660 6GB GDDR5, RGB'),
(26, 2, 8, 'PC Gaming Viking', 2800, 'PC Gaming Viking Intel, Intel i3-10100F 3.6GHz, 16GB DDR4, 500GB SSD, GTX 1650 4GB GDDR6', '26.jpg', 'PC Gaming Viking Intel, Intel i3-10100F 3.6GHz, 16GB DDR4, 500GB SSD, GTX 1650 4GB GDDR6'),
(27, 2, 8, 'PC Gaming Centurion', 7499, 'PC Gaming Centurion, Intel i5-10400F 2.9GHz, 16GB DDR4, 1TB SSD, RTX 3070 8GB GDDR6', '27.jpg', 'PC Gaming Centurion, Intel i5-10400F 2.9GHz, 16GB DDR4, 1TB SSD, RTX 3070 8GB GDDR6'),
(28, 2, 8, 'PC Gaming Amarok', 5799, 'PC Gaming Amarok, Intel i5 10400F 2.9GHz, 16GB DDR4, 1TB SSD, RTX 2060 6GB GDDR6', '28.jpg', 'PC Gaming Amarok, Intel i5 10400F 2.9GHz, 16GB DDR4, 1TB SSD, RTX 2060 6GB GDDR6'),
(29, 2, 8, 'PC Gaming Cutlass', 7999, 'PC Gaming Cutlass, Intel i7-10700F 2.9GHz Comet Lake, 16GB DDR4, 1TB SSD, RX 5700 XT 8GB GDDR6', '29.jpg', 'PC Gaming Cutlass, Intel i7-10700F 2.9GHz Comet Lake, 16GB DDR4, 1TB SSD, RX 5700 XT 8GB GDDR6'),
(30, 2, 8, 'PC Gaming Bladestorm', 18000, 'PC Gaming Bladestorm, Intel i9 10900KF 3.7GHz, 32GB DDR4, 2TB SSD, RTX 3080 10GB GDDR6X, Iluminare RGB, 3 ani garanti', '30.JPG', 'PC Gaming Bladestorm, Intel i9 10900KF 3.7GHz, 32GB DDR4, 2TB SSD, RTX 3080 10GB GDDR6X, Iluminare RGB, 3 ani garanti'),
(31, 2, 7, 'PC Office Start R3 PRO', 1799, 'PC Office Start R3 PRO, AMD Ryzen 3 3200G 3.6GHz, 16GB DDR4, 240GB SSD, AMD Radeon™ Vega 8', '31.jpg', 'PC Office Start R3 PRO, AMD Ryzen 3 3200G 3.6GHz, 16GB DDR4, 240GB SSD, AMD Radeon™ Vega 8'),
(32, 2, 7, 'PC Gaming Magnus', 15999, 'PC Gaming Magnus, AMD Ryzen 9 5900X 3.7 GHz, 32GB DDR4, 2TB SSD, RTX 3080 10GB GDDR6X, Iluminare RGB', '32.jpg', 'PC Gaming Magnus, AMD Ryzen 9 5900X 3.7 GHz, 32GB DDR4, 2TB SSD, RTX 3080 10GB GDDR6X, Iluminare RGB'),
(33, 2, 7, 'PC Gaming Thunder', 2900, 'PC Gaming Thunder, AMD Ryzen 3 3100 3.6GHz, 16GB DDR4, 480GB SSD, RX 5500 XT 4GB GDDR6', '33.png', 'PC Gaming Thunder, AMD Ryzen 3 3100 3.6GHz, 16GB DDR4, 480GB SSD, RX 5500 XT 4GB GDDR6'),
(34, 2, 7, 'PC FirstGear Gaming Claw', 2899, 'PC FirstGear Gaming Claw, AMD Ryzen 3 3100 3.6GHz, 8GB DDR4, 250GB SSD, GTX 1660 6GB GDDR5', '34.jpg', 'PC FirstGear Gaming Claw, AMD Ryzen 3 3100 3.6GHz, 8GB DDR4, 250GB SSD, GTX 1660 6GB GDDR5'),
(35, 2, 7, 'PC Gaming Kronos', 13999, 'PC Gaming Kronos, AMD Ryzen 7 5800X 3.8GHz, 32GB DDR4, 2TB SSD, RX 6800 XT 16GB GDDR6', '35.jpg', 'PC Gaming Kronos, AMD Ryzen 7 5800X 3.8GHz, 32GB DDR4, 2TB SSD, RX 6800 XT 16GB GDDR6'),
(36, 2, 7, 'PC Gaming Black Hydra', 8999, 'PC Gaming Black Hydra, AMD Ryzen 5 5600X 3.7GHz, 16GB DDR4, 1TB SSD, RTX 3070 8GB GDDR6', '36.jpg', 'PC Gaming Black Hydra, AMD Ryzen 5 5600X 3.7GHz, 16GB DDR4, 1TB SSD, RTX 3070 8GB GDDR6'),
(37, 3, 3, 'Apple iPhone 12', 4699, 'Smartphone Apple iPhone 12, 128GB, 5G, Black, nanoSIM si eSIM', '37.jpg', 'Smartphone Apple iPhone 12, 128GB, 5G, Black, nanoSIM si eSIM'),
(38, 3, 3, 'Apple iPhone 12', 4489, 'Smartphone Apple iPhone 12, 64GB, 5G, Blue, nanoSIM si eSIM', '38.jpg', 'Smartphone Apple iPhone 12, 64GB, 5G, Blue, nanoSIM si eSIM'),
(39, 3, 3, 'Apple iPhone 12', 4489, 'Smartphone Apple iPhone 12, 64GB, 5G, Red, nanoSIM si eSIM', '39.jpg', 'Smartphone Apple iPhone 12, 64GB, 5G, Red, nanoSIM si eSIM'),
(40, 3, 3, ' Apple iPhone 12 Pro Max', 6998, 'Smartphone Apple iPhone 12 Pro Max, 128GB, 5G, Pacific Blue, nanoSIM si eSIM', '40.jpg', 'Smartphone Apple iPhone 12 Pro Max, 128GB, 5G, Pacific Blue, nanoSIM si eSIM'),
(41, 3, 3, 'Apple iPhone 11 Pro', 6689, 'Smartphone Apple iPhone 11 Pro, 256GB, Space Grey', '41.jpg', 'Smartphone Apple iPhone 11 Pro, 256GB, Space Grey'),
(42, 3, 3, 'Apple iPhone XR', 2899, 'Smartphone Apple iPhone XR, 64GB, Coral', '42.jpg', 'Smartphone Apple iPhone XR, 64GB, Coral'),
(43, 3, 3, 'Apple iPhone Xs', 3858, 'Smartphone Apple iPhone Xs, 64GB, Silver', '43.jpg', 'Smartphone Apple iPhone Xs, 64GB, Silver'),
(44, 3, 3, 'Apple iPhone XR', 2699, 'Smartphone Apple iPhone XR, 64GB, Black', '44.jpg', 'Smartphone Apple iPhone XR, 64GB, Black'),
(45, 3, 1, 'ASUS ROG Phone 3', 3599, 'Smartphone ASUS ROG Phone 3 Strix Edition, Octa Core, 256GB, 8GB RAM, Dual SIM, 5G Edition, 4-Camere', '45.jpg', 'Smartphone ASUS ROG Phone 3 Strix Edition, Octa Core, 256GB, 8GB RAM, Dual SIM, 5G Edition, 4-Camere'),
(46, 3, 1, 'ASUS ZenFone 7 Pro', 3499, 'Smartphone ASUS ZenFone 7 Pro (ZS671KS), Display Super AMOLED 90Hz, Gorilla Glass 6, Snapdragon 865+ Octa Core, 256GB, 8GB RAM, Dual SIM, 5G', '46.JPG', 'Smartphone ASUS ZenFone 7 Pro (ZS671KS), Display Super AMOLED 90Hz, Gorilla Glass 6, Snapdragon 865+ Octa Core, 256GB, 8GB RAM, Dual SIM, 5G'),
(47, 3, 1, 'ASUS ZenFone 7 Pro', 3499, 'Smartphone ASUS ZenFone 7 Pro (ZS671KS), Display Super AMOLED 90Hz, Gorilla Glass 6, Snapdragon 865+ Octa Core, 256GB, 8GB RAM, Dual SIM, 5G', '47.JPG', 'Smartphone ASUS ZenFone 7 Pro (ZS671KS), Display Super AMOLED 90Hz, Gorilla Glass 6, Snapdragon 865+ Octa Core, 256GB, 8GB RAM, Dual SIM, 5G'),
(48, 3, 4, 'Samsung Galaxy Note 20', 3599, 'Smartphone Samsung Galaxy Note 20 (2020), Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 4-Camere, Mystic Gray', '48.JPG', 'Smartphone Samsung Galaxy Note 20 (2020), Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 4-Camere, Mystic Gray'),
(49, 3, 4, 'Samsung Galaxy Note 20', 3599, 'Smartphone Samsung Galaxy Note 20 (2020), Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 4-Camere, Mystic Bronze', '49.jpg', 'Smartphone Samsung Galaxy Note 20 (2020), Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 4-Camere, Mystic Bronze'),
(50, 3, 4, 'Samsung Galaxy S21', 4099, 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom Pink', '50.jpg', 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom Pink'),
(51, 3, 4, 'Samsung Galaxy S21', 4099, 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom Violet', '51.jpg', 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom Violet'),
(52, 3, 4, 'Samsung Galaxy S21', 4099, 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom White', '52.jpg', 'Smartphone Samsung Galaxy S21, 5G Edition, Octa Core, 128GB, 8GB RAM, Dual SIM, 4-Camere, Phantom White'),
(53, 3, 5, 'Huawei P30 Pro', 2698, 'Smartphone Huawei P30 Pro, Ecran OLED cu rezolutie FHD+, Kirin 980 2.6 GHz, Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 5-Camere: 40 mpx + 32 mpx + 20 mpx + 8 mpx', '53.PNG', 'Smartphone Huawei P30 Pro, Ecran OLED cu rezolutie FHD+, Kirin 980 2.6 GHz, Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, 5-Camere: 40 mpx + 32 mpx + 20 mpx + 8 mpx'),
(54, 3, 5, 'Huawei Mate 20 Pro', 3989, 'Smartphone Huawei Mate 20 Pro, Ecran OLED Gorilla Glass cu rezolutie 2K+, Kirin 980 2.6 GHz, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, NFC, 4-Camere: 40 mpx + 20 mpx + 8 mpx + 24 mpx', '54.png', 'Smartphone Huawei Mate 20 Pro, Ecran OLED Gorilla Glass cu rezolutie 2K+, Kirin 980 2.6 GHz, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, NFC, 4-Camere: 40 mpx + 20 mpx + 8 mpx + 24 mpx'),
(55, 3, 5, 'Huawei Mate 30 Pro', 4819, 'Smartphone Huawei Mate 30 Pro, Ecran OLED Gorilla Glass cu rezolutie FHD+, Kirin 990 2.86 GHz, Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, NFC, 5-Camere: 40 mpx + 40 mpx + 32 mpx + 8 mpx', '55.jpg', 'Smartphone Huawei Mate 30 Pro, Ecran OLED Gorilla Glass cu rezolutie FHD+, Kirin 990 2.86 GHz, Octa Core, 256GB, 8GB RAM, Dual SIM, 4G, NFC, 5-Camere: 40 mpx + 40 mpx + 32 mpx + 8 mpx'),
(56, 3, 9, 'LG V50 ThinQ ', 2599, 'Smartphone LG V50 ThinQ Dual Screen, Ecran OLED 2K, Snapdragon 855, Quad Core 2.84 GHz, 128GB, 6GB RAM, Single SIM, 5G, NFC, 5-Camere', '56.jpg', 'Smartphone LG V50 ThinQ Dual Screen, Ecran OLED 2K, Snapdragon 855, Quad Core 2.84 GHz, 128GB, 6GB RAM, Single SIM, 5G, NFC, 5-Camere'),
(57, 3, 9, 'LG V40 ThinQ', 2569, 'Smartphone LG V40 ThinQ, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, 5-Camere, Red', '57.jpg', 'Smartphone LG V40 ThinQ, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, 5-Camere, Red'),
(58, 3, 9, 'LG V40 ThinQ', 2599, 'Smartphone LG V40 ThinQ, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, 5-Camere, Blue', '58.jpg', 'Smartphone LG V40 ThinQ, Octa Core, 128GB, 6GB RAM, Dual SIM, 4G, 5-Camere, Blue'),
(59, 3, 13, 'Xiaomi Mi Note 10', 2499, 'Smartphone Xiaomi Mi Note 10, AMOLED Full HD+, Gorilla Glass 5, 128GB, 6GB RAM, Senzor 108 mpx, Optical Zoom 5X, Baterie 5260 mAh, Midnight Black', '59.jpg', 'Smartphone Xiaomi Mi Note 10, AMOLED Full HD+, Gorilla Glass 5, 128GB, 6GB RAM, Senzor 108 mpx, Optical Zoom 5X, Baterie 5260 mAh, Midnight Black'),
(60, 3, 13, 'Xiaomi Mi 10T Pro', 2699, 'Smartphone Xiaomi Mi 10T Pro, 5G Edition, Ecran 144 Hz, Snapdragon 865, 256GB, 8GB RAM, Dual SIM, 5G, 4-Camere, OIS si 108 mpx, Baterie 5000 mAh, Aurora Blue', '60.jpg', 'Smartphone Xiaomi Mi 10T Pro, 5G Edition, Ecran 144 Hz, Snapdragon 865, 256GB, 8GB RAM, Dual SIM, 5G, 4-Camere, OIS si 108 mpx, Baterie 5000 mAh, Aurora Blue'),
(61, 4, 6, 'ASUS GeForce RTX 2080 Ti', 6599, 'Placa video ASUS Nvidia GeForce RTX 2080 Ti ROG STRIX GAMING 11GB GDDR6 352-bit', '61.jpg', 'Placa video ASUS Nvidia GeForce RTX 2080 Ti ROG STRIX GAMING 11GB GDDR6 352-bit'),
(62, 4, 6, 'MSI GeForce Nvidia RTX 3090', 13599, 'Placa video MSI GeForce Nvidia RTX 3090 SUPRIM X 24GB GDDR6X 384-bit', '62.jpg', 'Placa video MSI GeForce Nvidia RTX 3090 SUPRIM X 24GB GDDR6X 384-bit'),
(63, 4, 6, 'Nvidia GeForce RTX 3090', 12799, 'Placa video Gainward Nvidia GeForce RTX 3090 Phoenix 24GB GDDR6X 384-bit', '63.png', 'Placa video Gainward Nvidia GeForce RTX 3090 Phoenix 24GB GDDR6X 384-bit'),
(64, 4, 7, 'Sapphire Radeon RX 6900', 8699, 'Placa video Sapphire Radeon RX 6900 XT NITRO+ 16GB GDDR6 256-bit', '64.jpg', 'Placa video Sapphire Radeon RX 6900 XT NITRO+ 16GB GDDR6 256-bit'),
(65, 4, 7, 'XFX Radeon RX 6900 XT', 7899, 'Placa video XFX Radeon RX 6900 XT Speedster MERC 319 Ultra 16GB GDDR6 256-bit', '65.jpg', 'Placa video XFX Radeon RX 6900 XT Speedster MERC 319 Ultra 16GB GDDR6 256-bit'),
(66, 4, 7, 'AMD Ryzen 5 3600', 999, 'Procesor AMD Ryzen 5 3600 3.6GHz box', '66.jpg', 'Procesor AMD Ryzen 5 3600 3.6GHz box'),
(67, 4, 7, 'AMD Ryzen 7 3700X', 1600, 'Procesor AMD Ryzen 7 3700X 3.6GHz box', '67.png', 'Procesor AMD Ryzen 7 3700X 3.6GHz box'),
(68, 4, 8, ' Intel Comet Lake, Core i9 10850K', 2199, 'Procesor Intel Comet Lake, Core i9 10850K 3.6GHz box', '68.jpg', 'Procesor Intel Comet Lake, Core i9 10850K 3.6GHz box'),
(69, 4, 8, 'Intel Comet Lake, Core i9 10850K', 2199, 'Procesor Intel Comet Lake, Core i9 10850K Avengers Edition 3.6GHz box', '69.jpg', 'Procesor Intel Comet Lake, Core i9 10850K Avengers Edition 3.6GHz box'),
(70, 4, 8, 'Intel Comet Lake, Core i9 10900K', 2369, 'Procesor Intel Comet Lake, Core i9 10900K 3.7GHz box', '70.jpg', 'Procesor Intel Comet Lake, Core i9 10900K 3.7GHz box'),
(71, 4, 12, 'Placa de baza GIGABYTE Z390', 850, 'Placa de baza GIGABYTE Z390 AORUS PRO', '71.jpg', 'Placa de baza GIGABYTE Z390 AORUS PRO'),
(72, 4, 12, 'Placa de baza GIGABYTE Z490M', 799, 'Placa de baza GIGABYTE Z490M GAMING X', '72.png', 'Placa de baza GIGABYTE Z490M GAMING X'),
(73, 4, 12, 'Placa de baza GIGABYTE X570', 1249, 'Placa de baza GIGABYTE X570 I AORUS PRO WIFI', '73.jpg', 'Placa de baza GIGABYTE X570 I AORUS PRO WIFI'),
(74, 5, 1, 'Mouse Gaming ASUS ROG', 319, 'Mouse Gaming ASUS ROG Gladius II Origin', '74.jpg', 'Mouse Gaming ASUS ROG Gladius II Origin'),
(75, 5, 10, 'Mouse Gaming HyperX', 269, 'Mouse Gaming HyperX Pulsefire Surge', '75.jpg', 'Mouse Gaming HyperX Pulsefire Surge'),
(76, 5, 11, 'Mouse Gaming SteelSeries Rival 600', 399, 'Mouse Gaming SteelSeries Rival 600', '76.jpg', 'Mouse Gaming SteelSeries Rival 600'),
(77, 5, 11, 'Mouse Gaming SteelSeries Rival 650 Wireless', 575, 'Mouse Gaming SteelSeries Rival 650 Wireless', '77.jpg', 'Mouse Gaming SteelSeries Rival 650 Wireless'),
(78, 5, 1, 'Casti Gaming ASUS ROG Centurion True 7.1', 959, 'Casti Gaming ASUS ROG Centurion True 7.1', '78.jpg', 'Casti Gaming ASUS ROG Centurion True 7.1'),
(79, 5, 11, 'Casti Gaming SteelSeries Arctis Pro DTS', 879, 'Casti Gaming SteelSeries Arctis Pro DTS', '79.jpg', 'Casti Gaming SteelSeries Arctis Pro DTS'),
(80, 5, 10, 'Casti Gaming HyperX Cloud MIX Gun Metal', 899, 'Casti Gaming HyperX Cloud MIX Gun Metal', '80.jpg', 'Casti Gaming HyperX Cloud MIX Gun Metal'),
(81, 5, 10, 'Tastatura Gaming HyperX', 430, 'Tastatura Gaming HyperX Alloy FPS Pro Cherry MX Red Mecanica', '81.jpg', 'Tastatura Gaming HyperX Alloy FPS Pro Cherry MX Red Mecanica'),
(82, 5, 1, 'Tastatura Gaming ASUS', 769, 'Tastatura Gaming ASUS ROG Strix Scope Cherry MX Red RGB Mecanica', '82.png', 'Tastatura Gaming ASUS ROG Strix Scope Cherry MX Red RGB Mecanica'),
(83, 5, 1, 'Tastatura Gaming ASUS ROG', 769, 'Tastatura Gaming ASUS ROG Strix Scope RX RGB ROG RX Red Mecanica', '83.jpg', 'Tastatura Gaming ASUS ROG Strix Scope RX RGB ROG RX Red Mecanica'),
(84, 6, 4, 'Televizor LED Samsung', 4799, 'Televizor LED Samsung Smart TV QLED 65Q70TA Seria Q70T 165cm negru 4K UHD HDR', '84.jpg', 'Televizor LED Samsung Smart TV QLED 65Q70TA Seria Q70T 165cm negru 4K UHD HDR'),
(85, 6, 4, 'Televizor LED Samsung', 4499, 'Televizor LED Samsung Smart TV QLED 65Q60TA Seria Q60T 163cm negru 4K UHD HDR', '85.jpg', 'Televizor LED Samsung Smart TV QLED 65Q60TA Seria Q60T 163cm negru 4K UHD HDR'),
(86, 6, 4, 'Televizor LED Samsung', 4500, 'Televizor LED Samsung Smart TV UE75TU7172U Seria TU7172 189cm gri 4K UHD HDR', '86.jpg', 'Televizor LED Samsung Smart TV UE75TU7172U Seria TU7172 189cm gri 4K UHD HDR'),
(87, 6, 4, 'Televizor LED Samsung', 4798, 'Televizor LED Samsung Smart TV UE75TU8072U Seria TU8072 189cm negru 4K UHD HDR', '87.jpg', 'Televizor LED Samsung Smart TV UE75TU8072U Seria TU8072 189cm negru 4K UHD HDR'),
(88, 6, 4, 'Televizor LED Samsung', 4699, 'Televizor LED Samsung Smart TV QLED The Frame QE55LS03TAU Seria LS03T 138cm negru 4K UHD HDR', '88.jpg', 'Televizor LED Samsung Smart TV QLED The Frame QE55LS03TAU Seria LS03T 138cm negru 4K UHD HDR'),
(89, 6, 4, 'Televizor LED Samsung', 5799, 'Televizor LED Samsung Smart TV QLED QE55Q90TA Seria Q90T 138cm negru 4K UHD HDR', '89.jpg', 'Televizor LED Samsung Smart TV QLED QE55Q90TA Seria Q90T 138cm negru 4K UHD HDR'),
(90, 6, 4, 'Televizor LED Samsung', 6799, 'Televizor LED Samsung Smart TV UE82TU8072U Seria TU8072 208cm negru 4K UHD HDR', '90.jpg', 'Televizor LED Samsung Smart TV UE82TU8072U Seria TU8072 208cm negru 4K UHD HDR'),
(91, 6, 9, 'Televizor LED LG Smart', 3999, 'Televizor LED LG Smart TV 55NANO913NA Seria NANO913NA 139cm negru-gri 4K UHD HDR', '91.jpg', 'Televizor LED LG Smart TV 55NANO913NA Seria NANO913NA 139cm negru-gri 4K UHD HDR'),
(92, 6, 9, 'Televizor LED LG Smart ', 5199, 'Televizor LED LG Smart TV 75UM7600PLB Seria M7600PLB 189cm argintiu 4K UHD HDR', '92.jpg', 'Televizor LED LG Smart TV 75UM7600PLB Seria M7600PLB 189cm argintiu 4K UHD HDR'),
(93, 6, 9, 'Televizor LED LG Smart', 6999, 'Televizor LED LG Smart TV OLED 55CX3LA Seria CX 139cm negru 4K UHD HDR', '93.jpg', 'Televizor LED LG Smart TV OLED 55CX3LA Seria CX 139cm negru 4K UHD HDR'),
(94, 6, 9, 'Televizor LED LG Smart', 7799, 'Televizor LED LG Smart TV OLED65BX3LB Seria BX 164cm negru 4K UHD HDR', '94.jpg', 'Televizor LED LG Smart TV OLED65BX3LB Seria BX 164cm negru 4K UHD HDR'),
(95, 6, 9, 'Televizor LED LG Smart', 4999, 'Televizor LED LG Smart TV 75UN81003LB Seria UN8100 189cm argintiu-gri 4K UHD HDR', '95.jpg', 'Televizor LED LG Smart TV 75UN81003LB Seria UN8100 189cm argintiu-gri 4K UHD HDR'),
(96, 6, 9, 'Televizor LED LG Smart', 7999, 'Televizor LED LG Smart TV OLED55GX3LA Seria GX 139cm negru 4K UHD HDR', '96.jpg', 'Televizor LED LG Smart TV OLED55GX3LA Seria GX 139cm negru 4K UHD HDR'),
(97, 6, 13, 'Televizor LED Xiaomi', 1699, 'Televizor LED Xiaomi Smart TV Android TV43 Seria 43 109cm gri-negru 4K UHD HDR', '97.jpg', 'Televizor LED Xiaomi Smart TV Android TV43 Seria 43 109cm gri-negru 4K UHD HDR'),
(98, 6, 13, 'Televizor LED Xiaomi', 2099, 'Televizor LED Xiaomi Smart TV Android Mi 4S 55 Seria 4S 138cm gri-negru 4K UHD', '98.jpg', 'Televizor LED Xiaomi Smart TV Android Mi 4S 55 Seria 4S 138cm gri-negru 4K UHD'),
(99, 7, 9, 'Monitor LED LG', 2199, 'Monitor LED LG Gaming 32GK850F-B 31.5 inch 2K 5 ms Black FreeSync 144Hz', '99.jpg', 'Monitor LED LG Gaming 32GK850F-B 31.5 inch 2K 5 ms Black FreeSync 144Hz'),
(100, 7, 9, 'Monitor LED LG', 1129, 'Monitor LED LG Gaming 27GL650F-B 27 inch 5 ms Negru FreeSync & G-Sync Compatible 144 Hz', '100.jpg', 'Monitor LED LG Gaming 27GL650F-B 27 inch 5 ms Negru FreeSync & G-Sync Compatible 144 Hz'),
(101, 7, 1, 'Monitor LED ASUS', 1899, 'Monitor LED ASUS Gaming ROG Strix XG27VQ Curbat 27 inch 4ms black-red FreeSync 144Hz', '101.jpg', 'Monitor LED ASUS Gaming ROG Strix XG27VQ Curbat 27 inch 4ms black-red FreeSync 144Hz'),
(102, 7, 1, 'Monitor LED ASUS', 1599, 'Monitor LED ASUS Gaming VG279Q 27 inch 1 ms Black FreeSync 144Hz', '102.png', 'Monitor LED ASUS Gaming VG279Q 27 inch 1 ms Black FreeSync 144Hz'),
(103, 7, 12, 'Monitor LED GIGABYTE', 1099, 'Monitor LED GIGABYTE Gaming G27FC Curbat 27 inch 1 ms Black 165Hz FreeSync Premium & G-Sync', '103.jpg', 'Monitor LED GIGABYTE Gaming G27FC Curbat 27 inch 1 ms Black 165Hz FreeSync Premium & G-Sync'),
(104, 7, 12, 'Monitor LED GIGABYTE', 1999, 'Monitor LED GIGABYTE Aorus Gaming FI25F 24.5 inch 1ms Black 240Hz FreeSync', '104.jpg', 'Monitor LED GIGABYTE Aorus Gaming FI25F 24.5 inch 1ms Black 240Hz FreeSync'),
(105, 7, 2, 'Monitor LED DELL S3220DGF Curbat 31.5 inch 4 ms Negru FreeSync 2 165 Hz', 1799, 'Monitor LED DELL S3220DGF Curbat 31.5 inch 4 ms Negru FreeSync 2 165 Hz', '105.jpg', 'Monitor LED DELL S3220DGF Curbat 31.5 inch 4 ms Negru FreeSync 2 165 Hz'),
(106, 8, 14, 'Boxe HP', 109, 'Boxe HP DHE-6001 2.0', '106.jpg', 'Boxe HP DHE-6001 2.0'),
(107, 8, 14, 'Boxe HP', 129, 'Boxe HP DHE-6002 2.0', '107.jpg', 'Boxe HP DHE-6002 2.0'),
(108, 8, 4, 'Boxe Samsung', 2250, 'Boxe Samsung HW-Q70T 5.1 Black', '108.jpg', 'Boxe Samsung HW-Q70T 5.1 Black'),
(109, 8, 1, 'Casti Gaming ASUS', 379, 'Casti Gaming ASUS TUF Gaming H7 Core Yellow', '109.jpg', 'Casti Gaming ASUS TUF Gaming H7 Core Yellow'),
(110, 8, 1, 'Casti ASUS TUF', 519, 'Casti Gaming ASUS TUF Gaming H7 Core Yellow', '110.png', 'Casti Gaming ASUS TUF Gaming H7 Core Yellow'),
(111, 8, 10, 'Casti HyperX Cloud', 749, 'Casti Gaming HyperX Cloud MIX Rose Gold', '111.jpg', 'Casti Gaming HyperX Cloud MIX Rose Gold'),
(112, 8, 10, 'Casti HyperX', 225, 'Casti Gaming HyperX In-Ear Cloud Earbuds', '112.jpg', 'Casti Gaming HyperX In-Ear Cloud Earbuds'),
(113, 8, 11, 'Casti SteelSeries', 779, 'Casti Gaming SteelSeries Arctis 7 2019 Edition DTS White', '113.jpg', 'Casti Gaming SteelSeries Arctis 7 2019 Edition DTS White'),
(114, 8, 11, 'Casti SteelSeries', 1269, 'Casti Gaming SteelSeries Arctis Pro + GameDAC DTS', '114.jpg', 'Casti Gaming SteelSeries Arctis Pro + GameDAC DTS'),
(115, 9, 0, 'Microsoft Windows 10 Pro', 700, 'Sistem de operare Microsoft Windows 10 Pro, OEM DSP OEI, 64-bit, engleza', '115.jpg', 'Sistem de operare Microsoft Windows 10 Pro, OEM DSP OEI, 64-bit, engleza'),
(116, 9, 0, 'Microsoft Windows 10 Home', 599, 'Sistem de operare Microsoft Windows 10 Home, 32/64-bit, Romana, Retail/FPP, USB Flash', '116.jpg', 'Sistem de operare Microsoft Windows 10 Home, 32/64-bit, Romana, Retail/FPP, USB Flash'),
(117, 9, 0, 'Microsoft Office Home and Bs', 1179, 'Aplicatie Microsoft Office Home and Business 2019 Romana, 32-bit/x64, 1 PC, Medialess Retail', '117.jpg', 'Aplicatie Microsoft Office Home and Business 2019 Romana, 32-bit/x64, 1 PC, Medialess Retail'),
(118, 9, 0, 'Microsoft 365 Family', 399, 'Aplicatie Microsoft 365 Family, Subscriptie 1 an, 6 Utilizatori, Engleza, Medialess Retail', '118.jpg', 'Aplicatie Microsoft 365 Family, Subscriptie 1 an, 6 Utilizatori, Engleza, Medialess Retail'),
(119, 9, 0, 'Bitdefender Antivirus Plus', 89, 'Antivirus Bitdefender Antivirus Plus, 3 Dispozitive, 1 An, Licenta noua, Retail', '119.jpg', 'Antivirus Bitdefender Antivirus Plus, 3 Dispozitive, 1 An, Licenta noua, Retail'),
(120, 9, 0, 'Kaspersky AntiVirus', 49, 'Antivirus Kaspersky AntiVirus, 1 Dispozitiv, 1 An, Licenta de reinnoire, Retail', '120.jpg', 'Antivirus Kaspersky AntiVirus, 1 Dispozitiv, 1 An, Licenta de reinnoire, Retail');

-- --------------------------------------------------------

--

--



-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Todoran', 'Dumitru', 'todorandumitru046@gmail.com', 'Qwerty12!', '0740358703', 'Alba', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_has_products`
--
ALTER TABLE `cart_has_products`
  ADD PRIMARY KEY (`cart_id`,`products_product_id`),
  ADD KEY `products_product_id` (`products_product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_cat` (`product_cat`);

--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--

--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `cart_has_products`
--
ALTER TABLE `cart_has_products`
  ADD CONSTRAINT `cart_has_products_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `cart_has_products_ibfk_2` FOREIGN KEY (`products_product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_cat`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
