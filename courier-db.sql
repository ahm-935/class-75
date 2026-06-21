-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2026 at 08:56 AM
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
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `manager_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `manager_name`, `email`, `phone_number`, `location`, `status`) VALUES
(1, 'Lalbagh ', 'Jahid ', 'sdlk@ljdk.fdf', '443555', 'dhaka', 'Operating'),
(2, 'Dhanmondi', 'Kabir ', 'Kabir@jksjh.dopsd', '4565565676', 'Dhanmondi ', 'Closed');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(11) NOT NULL,
  `traching_id` int(11) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `receiver_name` varchar(100) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `parcel_type` varchar(50) DEFAULT NULL,
  `weight` varchar(20) DEFAULT NULL,
  `delivery_charge` decimal(10,2) DEFAULT 0.00,
  `status` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `rider_id` int(11) DEFAULT NULL,
  `tracking_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `traching_id`, `sender_name`, `receiver_name`, `origin`, `destination`, `parcel_type`, `weight`, `delivery_charge`, `status`, `date`, `rider_id`, `tracking_id`) VALUES
(14, 0, 'Rakib', 'Abir', '', 'Khulna', 'Electronics', '0.78kg', 150.00, '', '2026-06-21', NULL, 'TRK-303556'),
(15, 0, 'Raju', 'Mithu', '', 'Rangpur', 'Electronics', '500gm', 120.00, '', '2026-06-21', NULL, 'TRK-617156'),
(17, 0, 'Rana', 'Mahir', '', 'Dhanmondi', 'Documents', '200gm', 100.00, '', '2026-06-21', NULL, 'TRK-641123'),
(18, 0, 'Rana', 'Mahir', '', 'Dhanmondi', 'Documents', '200gm', 100.00, '', '2026-06-21', NULL, 'TRK-641123'),
(19, 0, 'Al-Amin', 'Mukul', '', 'Rajshahi', 'Clothing', '500gm', 100.00, '', '2026-06-21', NULL, 'TRK-935667');

-- --------------------------------------------------------

--
-- Table structure for table `riders`
--

CREATE TABLE `riders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `total_delivery` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riders`
--

INSERT INTO `riders` (`id`, `name`, `phone`, `vehicle`, `total_delivery`, `status`) VALUES
(2, 'Samir ', '4634321', 'Truck', 10, 'Active'),
(3, 'Mahfuj Alam', '+880123456789', 'Van', 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(4, 'MD. ARIF HUSHAIN MUNNA', 'munnaa517@yahoo.com', '$2y$10$0pfI8lf/.eE2LNWdbI8jWu.7oFphbZMJnS57P167y.b', 2),
(5, 'MD. ARIF HUSHAIN', 'munnaa517@yahoo.com', '$2y$10$PBJStk0WGC6sY5Wz.DG2ou3ca597sesInnXGXeG6eDt', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rider` (`rider_id`);

--
-- Indexes for table `riders`
--
ALTER TABLE `riders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `riders`
--
ALTER TABLE `riders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parcels`
--
ALTER TABLE `parcels`
  ADD CONSTRAINT `fk_rider` FOREIGN KEY (`rider_id`) REFERENCES `riders` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
