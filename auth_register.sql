-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 08:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_register`
--

CREATE TABLE `auth_register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth_register`
--

INSERT INTO `auth_register` (`id`, `name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'Faizan', 'faizan@gmail.com', '02347832748', '$2y$10$wGollzbuZXHJ9BmrJ68RYusSqggY7CE0snngRGocaEKhBii.1jtOC', '2023-12-31 18:57:34'),
(2, 'Asad', 'asad@gmail.com', '04858495757', '$2y$10$YFzO/K9ZEERyuewDSLKFNu0BanlFIzpraUYSvULuozr8zWoieZS5y', '2023-12-31 18:59:29'),
(3, 'Babar', 'babar@gmail.com', '24975842', '$2y$10$yGbbL8UxM/zQZq2xWRrX/eAunWjvRr0ox9F03GQw8Cwb4hLpTZqkW', '2023-12-31 21:45:04'),
(4, 'User@', 'User@user.com', '9348958943', '$2y$10$Og15nXYlZaX1xUeNqdtHmubPjB1TdQCNJQ3fixsmDM4Elof6.FL.W', '2023-12-31 22:49:58'),
(5, 'User1@', 'User1@user.com', '2954937', '$2y$10$By.FyAg0fdvFrr09ZZ47Fe7i6IaB/./5ICbPgm1nJZ.r/23ojcoGe', '2023-12-31 22:51:29'),
(6, 'Admin@', 'Admin@admin.com', '95259898599', '$2y$10$k8wO7z73BRqjqp78JeFh.eSVAOzmktTBWSgxbskFjBGi1nfgowjfW', '2024-01-01 00:33:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_register`
--
ALTER TABLE `auth_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_register`
--
ALTER TABLE `auth_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
