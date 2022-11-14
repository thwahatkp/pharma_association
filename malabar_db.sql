-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 09:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malabar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `franchisee`
--

CREATE TABLE `franchisee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `serial_no` int(100) DEFAULT NULL,
  `address` varchar(2000) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `area` varchar(1000) DEFAULT NULL,
  `service` varchar(500) DEFAULT NULL,
  `contact_one` varchar(50) DEFAULT NULL,
  `contact_two` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `map` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchisee`
--

INSERT INTO `franchisee` (`id`, `name`, `serial_no`, `address`, `district`, `city`, `area`, `service`, `contact_one`, `contact_two`, `email`, `map`) VALUES
(1, 'Malabar', 1, ' Pallivayal P.O,Taliparamba, Kannur, Kerala', 'Kannur', 'Kannur', 'Poovam', 'Gas', '1234567', '1234567', 'abcd@gmail.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d124837.09564498941!2d75.39634!3d12.101249!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc833c4ce911c7271!2sMalabar%20Fuel%20Corporation!5e0!3m2!1sen!2sin!4v1659088728329!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `img_path`) VALUES
(2, 'Our Team', 'uploads/gallery-images/16661741138.jpg'),
(3, 'Malabar Fuel Corporation', 'uploads/gallery-images/16641983361(1).jpeg'),
(4, 'Malabar Fuel Corporation', 'uploads/gallery-images/16641983451(2).jpeg'),
(5, 'Malabar Fuel Corporation', 'uploads/gallery-images/16641983531(3).jpeg'),
(6, 'Malabar Fuel Corporation', 'uploads/gallery-images/16641983611(4).jpeg'),
(7, 'Malabar Fuel Corporation', 'uploads/gallery-images/16641983681(5).jpeg'),
(8, 'Malabar Fuel Corporation', 'uploads/gallery-images/1664198377about2.jpg'),
(9, 'Malabar Fuel Corporation', 'uploads/gallery-images/16661741391.jpg'),
(10, 'Malabar Fuel Corporation', 'uploads/gallery-images/16661744982.jpg'),
(11, 'Malabar Fuel Corporation', 'uploads/gallery-images/16661745063.jpg'),
(12, 'Malabar Fuel Corporation', 'uploads/gallery-images/16661745175.jpg'),
(13, 'Malabar Fuel Corporation', 'uploads/gallery-images/16661745266.jpg'),
(14, 'Malabar Fuel Corporation', 'uploads/gallery-images/1666682208Untitleddesign-2022-10-25T124542.522.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `kg` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `type`, `kg`, `description`, `img_path`) VALUES
(1, 'Commercial LPG ', 'commercial', '17 ', 'We are offering a high-end quality of Commercial LPG Cylinders to our clients. These Commercial LPG Cylinders are tested in compliance with set norms. Widely used in various hotels for cooking purpose, these gas cylinders can be availed from us at reasonable prices.', 'uploads/product-images/1664254649available-hotel.jpg'),
(3, 'Domestic LPG ', 'domestic', '12 ', 'We are offering Domestic LPG Cylinders to our clients. This product is checked on several parameters by our quality experts to ensure a defect free range before delivering it to the clients. Offered range of Domestic LPG Cylinders can be availed at market-leading prices..', 'uploads/product-images/1664254637available-home.jpg'),
(5, 'Composite LPG Cylinder', 'domestic', '5', 'Available in 5 kg size for Domestic Purposes. Distinguishing features of Malabar Gas composite cylinders are that they are elegant, extremely light, rust-proof and above all explosion-proof and pose no danger to life or property..', 'uploads/product-images/16664345025.jpg'),
(6, 'Composite LPG Cylinder', 'commercial', '22', 'Available in 22 kg size for Commercial Purposes. Distinguishing features of Malabar Gas composite cylinders are that they are elegant, extremely light, rust-proof and above all explosion-proof and pose no danger to life or property..', 'uploads/product-images/166643452822.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `img_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `title`, `message`, `img_path`) VALUES
(7, 'Shabir M', 'Kannur', 'Dealing with customer is very great and even if office is closed the customer asked for a urgent need of gas cylinder the office open for that specific customer and it also have  home delivery of gas cylinder.', 'uploads/testimonial-images/1664270529testimonial.png'),
(8, 'Radakrishnan TK', 'Taliparammba', ' Booked gas and got delivered within two days!. Staff behavior is really awesome.', 'uploads/testimonial-images/1653294376vector.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `date_updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'anchukarthika97@gmail.com', 'Anchu Ravindran', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisee`
--
ALTER TABLE `franchisee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `franchisee`
--
ALTER TABLE `franchisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
