-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 03:36 PM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `uid` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `uid`, `date`, `message`, `id`) VALUES
(112, 'marija', '2019-10-20 00:31:35', 'PoÅ¡tovani, jako mi se dopadaju vaÅ¡e torte i oduÅ¡evljena sam sajtom i slikama!\r\n', 1),
(114, 'nina90', '2019-10-20 10:42:13', 'Koliko koÅ¡ta jedna deÄija torta?', 6),
(115, 'ana', '2019-10-20 10:43:11', 'Sve pohvale!', 5);

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
('mara@mara.com', '4a6330bc363811bab89789ba6ce80d591cd76e530c', '2019-09-21 16:31:19'),
('marijaculafic88@gmail.com', '47105bece99d0bd352accfc8de271d9850441e30fe', '2019-10-21 13:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trn_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'marija', 'marijaculafic88@gmail.com', '$2y$10$C3pJUfX3a8U3oUlIucBekug9qVGY9sCpRgdN6rFBswkKs0mwNyn6u', '2019-10-20 12:24:30'),
(3, 'ivona123', 'ivona123@live.com', '$2y$10$3m24KLADvC51fMLJJGn/q.sKUUSIadIvczFN34jp..2/PIUErG98S', '2019-10-08 00:00:00'),
(5, 'ana', 'anaivanovic75@gmail.com', '$2y$10$B6uKNln3RxSvIL0lQxl.jOjGwG1BZEu05IRTYKSXLoqldy73Y0Sgi', '2019-10-03 04:19:29'),
(6, 'nina90', 'ninaknezevic90@gmail.com', '$2y$10$JxC/K3W3.gXzEazVwPggCOHf1uM9q5k29mIvgdeAVNnYOBjf.xUO6', '2019-10-06 06:33:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
