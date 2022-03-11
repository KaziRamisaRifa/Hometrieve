-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 07:10 AM
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
-- Table structure for table `compare_list`
--

CREATE TABLE `compare_list` (
  `user_id` int(6) NOT NULL,
  `house_id` int(6) DEFAULT NULL,
  `land_id` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, 1, 'Kazi Ramisa Rifa', 'ramisa.rifa09@gmail.com', '01953639689', 'For Sell', 'Apartment', 'Mirpur', '18/A, Road-15', '1800', '56000', '6', 6, 6, 5, 'ggg', ''),
(4, 1, 'Kazi Ramisa Rifa', 'kazi.rifa@northsouth.edu', '454wrwr4r4', 'For Rent', 'Colonial', 'Tejgaon', '22/6', '1700', '56000', '6', 3, 2, 1, 'ggggg', ''),
(5, 1, 'Kazi Ramisa Rifa', 'kazi.rifa@northsouth.edu', '454wrwr4r4', 'For Rent', 'Colonial', 'Tejgaon', '22/6', '1700', '56000', '6', 3, 2, 1, 'ggggg', ''),
(6, 1, 'Rifa', 'kazi.rifa09@gmail.com', 'dfvfdgvv', 'For Rent', 'Colonial', 'Savar', '18/A, Road-15', '1800', '45677', '9', 5, 4, 2, 'gggg', ''),
(7, 1, 'Rifa', 'kazi.rifa09@gmail.com', '454wrwr4r4', 'For Rent', 'Apartment', 'Mirpur', '22/6', '1800', '56000', '6', 7, 5, 3, 'fefdfs', ''),
(8, 1, 'Rifa', 'kazi.rifa09@gmail.com', 'dfvfdgvv', 'For Rent', 'Bachelor', 'Bashundhara', '18/A, Road-15', '1700', '56000', '6', 4, 1, 2, 'dsd', ''),
(9, 1, 'Rifa', 'kazi.rifa09@gmail.com', 'dfvfdgvv', 'For Rent', 'Bachelor', 'Bashundhara', '18/A, Road-15', '1700', '56000', '6', 4, 1, 2, 'dsd', ''),
(10, 1, 'Rifa', 'kazi.rifa09@gmail.com', 'dfvfdgvv', 'For Rent', 'Bachelor', 'Bashundhara', '18/A, Road-15', '1700', '56000', '6', 4, 1, 2, 'dsd', ''),
(11, 1, 'Kazi Ramisa Rifa', 'kazi.rifa@northsouth.edu', '535354', 'For Sell', 'Bachelor', 'New market', '18/A, Road-15', '1800', '45677', '6', 10, 3, 3, 'dfdsfsd', ''),
(12, 1, 'Kazi Ramisa Rifa', 'kazi.rifa09@gmail.com', '535354', 'For Sell', 'Bachelor', 'Savar', '18/A, Road-15', '1800', '45677', '6', 10, 6, 4, 'dsdsd', ''),
(13, 1, 'Khalid', 'khalid.shafiq88@gmail.com', '48484848', 'For Rent', 'Duplex', 'Tejgaon', '22/6', '1700', '45677', '6', 7, 5, 4, 'dsadsdasd', ''),
(14, 1, 'Ramisa', 'kazi.rifa@northsouth.edu', 'dfvfdgvv', 'For Sell', 'Bachelor', 'New market', '18/A, Road-15', '1700', '45677', '6', 10, 2, 10, 'adadasd', '');

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
(12, 'peakpx.jpg'),
(12, 'review.jpg'),
(13, 'signup_bg.jpg'),
(13, 'Admin Diagram.jpg'),
(14, 'signup_bg.jpg'),
(14, 'Admin Diagram.jpg');

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
(1, 1, 'Kazi Ramisa Rifa', 'ramisa.rifa09@gmail.com', '01953639689', 'Barishal', '18/A, Road-15', '1700', '45677', 'ddsd'),
(2, 1, 'Ramisa', 'kazi.rifa09@gmail.com', '01953639689', 'Dhaka', '22/6', '1800', '45677', 'sasasas'),
(3, 1, 'Rifa', 'kazi.rifa@northsouth.edu', '9393939', 'Dhaka', '18/A, Road-15', '1800', '45677', 'assass'),
(4, 1, 'Ramisa', 'ramisa.rifa09@gmail.com', '01953639689', 'Dhaka', '18/A, Road-15', '1800', '45677', 'dadada');

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
(3, 'peakpx.jpg'),
(3, 'review.jpg'),
(4, 'ambulancesigncover.jpg'),
(4, 'giant_42929.jpg');

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
(2, 'Khalid', 'Shafiq', 'khalid.shafiq88@gmail.com', '01953768478', 'khalid08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_list`
--
ALTER TABLE `compare_list`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `house_id` (`house_id`),
  ADD KEY `land_id` (`land_id`);

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
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compare_list`
--
ALTER TABLE `compare_list`
  ADD CONSTRAINT `compare_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compare_list_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `houses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compare_list_ibfk_3` FOREIGN KEY (`land_id`) REFERENCES `lands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
