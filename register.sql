-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 09:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('mara@mara.com', '768e78024aa8fdb9b8fe87be86f647450ffe53f55a', '2019-09-18 17:09:10'),
('mara@mara.com', '768e78024aa8fdb9b8fe87be86f64745566ac90689', '2019-09-18 17:55:05'),
('mara@mara.com', '768e78024aa8fdb9b8fe87be86f64745a850e3e1da', '2019-09-21 16:09:43'),
('mara@mara.com', '768e78024aa8fdb9b8fe87be86f6474574f0fea269', '2019-09-21 16:12:32'),
('mara@mara.com', '4a6330bc363811bab89789ba6ce80d59c13db77021', '2019-09-21 16:21:01'),
('mara@mara.com', '4a6330bc363811bab89789ba6ce80d59be0f02d87f', '2019-09-21 16:22:37'),
('mara@mara.com', '4a6330bc363811bab89789ba6ce80d591cd76e530c', '2019-09-21 16:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf32_unicode_ci NOT NULL,
  `password` longtext COLLATE utf32_unicode_ci NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'marija', 'marijaculafic88@gmail.com', '$2y$10$znTAxXE8uqF4nkUwsWBggunixpx4JXAhY3Wlc4o2sxgYILQIhjWce', '2019-09-22 21:04:36');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
