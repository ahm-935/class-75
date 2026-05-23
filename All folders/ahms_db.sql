-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2026 at 06:09 AM
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
-- Database: `ahms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `manufacturer_id`, `price`) VALUES
(7, 'Chair', 100, 1000),
(8, 'Table', 101, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `score` float DEFAULT NULL,
  `exam_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `score`, `exam_type`) VALUES
(1, 1, 50, 'Final26'),
(2, 2, 20, 'Monthly'),
(3, 5, 39, 'Monthly'),
(4, 7, 59, 'Monthly'),
(5, 8, 93, 'Monthly'),
(6, 1, 90, 'Final'),
(7, 5, 70, 'Final'),
(8, 8, 79, 'Final'),
(9, 2, 20, 'Mid-1'),
(10, 5, 39, 'Mid-1'),
(11, 7, 28, 'Mid-1'),
(12, 8, 93, 'Mid-1'),
(13, 1, 33, 'Mid-1'),
(14, 2, 20, 'Mid-2'),
(15, 5, 39, 'Mid-2'),
(16, 7, 59, 'Mid-2'),
(17, 7, 65, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(5) UNSIGNED NOT NULL,
  `full_name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `is_inactive` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `email`, `address`, `is_inactive`) VALUES
(1, 'Mina', 'mian@mail.info', 'Cartoon', 0),
(2, 'Mithu', 'truysjg@kj.hb', 'Rangpur', 0),
(5, 'Raju', 'raju@mail.info', 'Dhaka', 1),
(6, 'Munna', 'raju@xmple.com', 'Rajshahi', 1),
(7, 'Eimrul', 'eimrul@mail.info', NULL, 0),
(8, 'Tasnim', 'tasnim@mail.info', NULL, 0),
(9, 'Noushin', 'noushin@mail.info', NULL, 0);

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `add_student` AFTER INSERT ON `students` FOR EACH ROW insert into student_logs(student_id, status, time) 
values(new.id, "Added", now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_student` AFTER DELETE ON `students` FOR EACH ROW insert into student_logs(student_id, status, time)
values(old.id, "Deleted", now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_student` AFTER UPDATE ON `students` FOR EACH ROW insert into student_logs(student_id, status, time) 
values(old.id, "Updated", now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `student_logs`
--

CREATE TABLE `student_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_logs`
--

INSERT INTO `student_logs` (`id`, `student_id`, `status`, `time`) VALUES
(1, 9, 'Added', '2026-05-19 06:21:18'),
(2, 1, 'Updated', '2026-05-19 06:29:35'),
(3, 5, 'Updated', '2026-05-19 06:38:24'),
(4, 10, 'Added', '2026-05-19 06:39:59'),
(5, 11, 'Added', '2026-05-19 06:41:12'),
(6, 12, 'Added', '2026-05-19 06:44:30'),
(7, 13, 'Added', '2026-05-19 06:44:32'),
(8, 13, 'Deleted', '2026-05-19 06:45:05'),
(9, 12, 'Deleted', '2026-05-19 06:45:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_student_results`
-- (See below for the actual view)
--
CREATE TABLE `view_student_results` (
`student_id` int(11)
,`full_name` varchar(20)
,`marks` float
,`exam_type` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `view_student_results`
--
DROP TABLE IF EXISTS `view_student_results`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_student_results`  AS SELECT `r`.`student_id` AS `student_id`, `s`.`full_name` AS `full_name`, `r`.`score` AS `marks`, `r`.`exam_type` AS `exam_type` FROM (`students` `s` join `results` `r`) WHERE `r`.`student_id` = `s`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_logs`
--
ALTER TABLE `student_logs`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_logs`
--
ALTER TABLE `student_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
