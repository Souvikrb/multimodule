-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 31, 2024 at 01:36 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u140023845_g3network`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user',
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `referral_code` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(255) NOT NULL,
  `banker_name` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `can_chq` varchar(255) NOT NULL,
  `p_photo` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `mobile`, `email_id`, `referral_code`, `user_id`, `password`, `level`, `banker_name`, `ifsc_code`, `bank_name`, `account_no`, `aadhar`, `pan`, `can_chq`, `p_photo`, `status`, `added_on`) VALUES
(1, 'admin', 'Admin', '9123828754', 'admin@gmail.com', '0', 'G98765432', '1234', 1, '', '', '', '', '', '', '', '', '1', '2024-08-19 23:26:41'),
(2, 'user', 'Skbkj klnl', '9846789456', 'sknasir759595@gmail.com', 'G98765432', 'G63455956', '1234', 0, '', '', '', '', '', '', '', '', '1', '2024-08-19 23:52:08'),
(3, 'user', 'Ramjan sk', '9749880248', 'ramjansk9932@gmail.com', 'G63455956', 'G9283081809', '1234', 0, '', '', '', '', '', '', '', '', '0', '2024-08-26 05:40:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
