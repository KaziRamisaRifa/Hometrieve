-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 07:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hometrieve`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`) VALUES
(1, 'Ramisa Rifa', 'ramisa.rifa09@gmail.com', '01953639689', 'ramisa09'),
(2, 'Khalid Bin Shafiq', 'khalid.bin02@gmail.com', '01953638578', 'khalid08');

-- --------------------------------------------------------

--
-- Table structure for table `approval_house`
--

CREATE TABLE `approval_house` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_contact` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `beds` int(5) NOT NULL,
  `baths` int(5) NOT NULL,
  `balcony` int(5) NOT NULL,
  `description` text NOT NULL,
  `tier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approval_house_image`
--

CREATE TABLE `approval_house_image` (
  `house_id` int(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approval_land`
--

CREATE TABLE `approval_land` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_contact` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `approval_land_image`
--

CREATE TABLE `approval_land_image` (
  `land_id` int(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `app_count`
--

CREATE TABLE `app_count` (
  `count_no` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_count`
--

INSERT INTO `app_count` (`count_no`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `compare_list`
--

CREATE TABLE `compare_list` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `house_id` int(6) DEFAULT NULL,
  `land_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compare_list`
--

INSERT INTO `compare_list` (`id`, `user_id`, `house_id`, `land_id`) VALUES
(1, 1, 2, NULL),
(2, 1, 3, NULL),
(3, 2, 1, NULL),
(4, 1, 2, NULL),
(8, 4, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_owner`
--

CREATE TABLE `contact_owner` (
  `user_id` int(6) NOT NULL,
  `onwer_id` int(6) NOT NULL,
  `house_id` int(6) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `reply` text NOT NULL,
  `reply_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_owner`
--

INSERT INTO `contact_owner` (`user_id`, `onwer_id`, `house_id`, `message`, `status`, `reply`, `reply_status`) VALUES
(5, 2, 2, 'Hi! Can I call you?', 'Inactive', 'Yes you can!', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ramisa Rifa', 'ramisa.rifa09@gmail.com', 'About this website', 'This website is awesome! Love this!'),
(3, 'Khalid Shafiq', 'khalid.shafiq88@gmail.com', 'About this website', 'Good Design!');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `user_id` int(6) NOT NULL,
  `house_id` int(6) DEFAULT NULL,
  `land_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`user_id`, `house_id`, `land_id`) VALUES
(4, 1, NULL),
(4, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_contact` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `floor_no` varchar(255) NOT NULL,
  `beds` int(5) NOT NULL,
  `baths` int(5) NOT NULL,
  `balcony` int(5) NOT NULL,
  `description` text NOT NULL,
  `tier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `user_id`, `owner_name`, `owner_email`, `owner_contact`, `purpose`, `type`, `location`, `address`, `area_size`, `price`, `floor_no`, `beds`, `baths`, `balcony`, `description`, `tier`) VALUES
(1, 1, 'Kazi Ramisa Rifa', 'ramisa.rifa09@gmail.com', '01953639689', 'For Rent', 'Apartment', 'Banani', '18/A, Road-15', '2200', '87000', '3', 3, 2, 1, 'Nice decorated home!', 'Gold'),
(2, 2, 'Khalid Shafiq', 'khalid.shafiq88@gmail.com', '01953639688', 'For Rent', 'Bachelor', 'Bashundhara', '22/6, Block-A', '1700', '45600', '5', 2, 1, 1, 'Good home!', 'Platinum'),
(3, 2, 'Khalid Brinto', 'khalid088@gmail.com', '01963649727', 'For Rent', 'Apartment', 'Gulshan', '24/E, Block-D', '1700', '89000', '3', 4, 3, 3, 'Beautiful house', 'Gold'),
(11, 5, 'Hasin Akter', 'hasin.ak88@gmail.com', '01953639654', 'For Sell', 'Duplex', 'Uttara', '23/6, Block-A Sector-4', '4200', '1000000', '1', 6, 5, 4, 'Nice Home!', 'Diamond'),
(12, 7, 'Monira Taiba', 'ramisa.rifa077@gmail.com', '01953639435', 'For Sell', 'Apartment', 'Mirpur', '22/6, Block-A', '3200', '3000000', '5', 4, 3, 2, 'Good House!', 'Diamond'),
(13, 7, 'Monira Taiba', 'ramisa.rifa077@gmail.com', '01953639512', 'For Rent', 'Apartment', 'Bashundhara', '18/A, Road-15', '3200', '600000', '3', 2, 2, 1, 'Nice House', 'Gold');

-- --------------------------------------------------------

--
-- Table structure for table `house_image`
--

CREATE TABLE `house_image` (
  `house_id` int(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house_image`
--

INSERT INTO `house_image` (`house_id`, `image`) VALUES
(1, 'bbb.jpg'),
(2, 'bbb2.jpg'),
(1, 'bbb3.jpg'),
(3, 'bbb1.jpg'),
(3, 'bbb3.jpg'),
(11, 'dupin.jpg'),
(11, 'dupout.jpg'),
(12, 'bbb3.jpg'),
(12, 'bbb4.jpg'),
(13, 'bbb.jpg'),
(13, 'bbb2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int(6) NOT NULL,
  `user_id` int(6) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_email` varchar(255) NOT NULL,
  `owner_contact` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area_size` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `user_id`, `owner_name`, `owner_email`, `owner_contact`, `location`, `address`, `area_size`, `price`, `description`) VALUES
(1, 1, 'Kazi Ramisa Rifa', 'ramisa.rifa09@gmail.com', '01953639689', 'Dhaka', '3/A no. plot, beside Nodia Jheel.', '1700', '125000', 'Nice Land'),
(2, 4, 'Sabiha Hossain', 'sabihah145@yahoo.com', '01953639688', 'Chittagong', '8/F no. plot, beside Baron Jheel.', '3200', '1000000', 'Nice Land'),
(5, 5, 'Hasin Akter', 'hasin.ak88@gmail.com', '01953639654', 'Chittagong', '4C/12, Beside Halda Nodi', '5200', '450000', 'Good Land!');

-- --------------------------------------------------------

--
-- Table structure for table `land_image`
--

CREATE TABLE `land_image` (
  `land_id` int(6) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `land_image`
--

INSERT INTO `land_image` (`land_id`, `image`) VALUES
(5, 'land4.jpg'),
(5, 'nnn.jpg'),
(2, 'land2.jpg'),
(1, 'nnn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `contact`, `password`) VALUES
(1, 'Ramisa', 'Rifa', 'kazi.rifa09@gmail.com', '01953639689', 'ramisa09'),
(2, 'Khalid', 'Shafiq', 'khalid.shafiq88@gmail.com', '01953768478', 'khalid08'),
(3, 'Kazi', 'Taiba', 'taiba.rifa77@gmail.com', '01953732408', 'taiba077'),
(4, 'Sabiha', 'Hossain', 'sabihah145@yahoo.com', '01953639688', 'sabiha55'),
(5, 'Hasin', 'Akter', 'hasin.ak88@gmail.com', '01953639654', 'hasin09'),
(7, 'Monira', 'Taiba', 'ramisa.rifa077@gmail.com', '01953639721', 'monira09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_house`
--
ALTER TABLE `approval_house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_house_image`
--
ALTER TABLE `approval_house_image`
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `approval_land`
--
ALTER TABLE `approval_land`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_land_image`
--
ALTER TABLE `approval_land_image`
  ADD KEY `land_id` (`land_id`);

--
-- Indexes for table `compare_list`
--
ALTER TABLE `compare_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `house_id` (`house_id`),
  ADD KEY `land_id` (`land_id`);

--
-- Indexes for table `contact_owner`
--
ALTER TABLE `contact_owner`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `onwer_id` (`onwer_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `house_id` (`house_id`),
  ADD KEY `land_id` (`land_id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `house_image`
--
ALTER TABLE `house_image`
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `land_image`
--
ALTER TABLE `land_image`
  ADD KEY `land_id` (`land_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `approval_house`
--
ALTER TABLE `approval_house`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `approval_land`
--
ALTER TABLE `approval_land`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `compare_list`
--
ALTER TABLE `compare_list`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approval_house_image`
--
ALTER TABLE `approval_house_image`
  ADD CONSTRAINT `approval_house_image_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `approval_house` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approval_land_image`
--
ALTER TABLE `approval_land_image`
  ADD CONSTRAINT `approval_land_image_ibfk_1` FOREIGN KEY (`land_id`) REFERENCES `approval_land` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compare_list`
--
ALTER TABLE `compare_list`
  ADD CONSTRAINT `compare_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compare_list_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compare_list_ibfk_3` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_owner`
--
ALTER TABLE `contact_owner`
  ADD CONSTRAINT `contact_owner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_owner_ibfk_2` FOREIGN KEY (`onwer_id`) REFERENCES `houses` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_owner_ibfk_3` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_ibfk_3` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
  ADD CONSTRAINT `houses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `house_image`
--
ALTER TABLE `house_image`
  ADD CONSTRAINT `house_image_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lands`
--
ALTER TABLE `lands`
  ADD CONSTRAINT `lands_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `land_image`
--
ALTER TABLE `land_image`
  ADD CONSTRAINT `land_image_ibfk_1` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
