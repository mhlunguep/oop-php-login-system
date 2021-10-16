-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 16, 2021 at 03:35 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int NOT NULL AUTO_INCREMENT,
  `users_username` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `users_password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `users_email` tinytext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_username`, `users_password`, `users_email`) VALUES
(4, 'whatot', '$2y$10$eK6cIuCwm5cS8YhN2aBqROMHQYyZfThWN5Iw2lwnlX.RRLkDPSuoy', 'info@whatot.co.za'),
(17, 'me', '$2y$10$0LzSzKRMc6iAYpRP/ZgP1.56Yy5VsvVFd7mcPLwKLC1NWXLwUC0..', 'me@gmail.com'),
(14, 'admin', '$2y$10$JxAq97L9XBVj4Nh521Vax./6J.0o4TQgvkxstQlLBvzwuuhMMvEx.', 'admin@gmail.com'),
(16, 'login', '$2y$10$Rn2x5Kj/pekM5BVVn63Zgerf2rw8yu7Xbnu/yrW28zoRtXNHaclbi', 'login@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
