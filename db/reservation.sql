-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 11, 2021 at 09:09 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `username`, `email`, `verified`, `token`, `password`) VALUES
(2, 'rogine', 'grace', 'marikina', 'rogine', 'roginegracelaurito@gmail.com', 0, '7f0c37e821b44aae7fcb8249bb4912b90b7cc5c44888dc1f581cfbaedb0f776a775a4a26c425eca748ef5a122de82489961a', '$2y$10$e86q.7h2.ab8TOny.R98QOdqfWBEt6TvxsTkCD1OrNtaDbfhy.bPO'),
(3, 'rogine', 'grace', 'marikina', 'rogine', 'gergergcelaurito@gmail.com', 0, 'aaac5d11579497c84007d925efba571b54989c29f07c129d44781b044be8bd5be493d5ffde2852f95e7109be4eb8ca5cc20a', '$2y$10$pycNTqvPqSTyaAllmJSxLOc9/m3jlIZhk7JBa7Wd4if/mWVwTjlka'),
(8, 'roniel', 'de gozo', 'san mateo rizal', 'roniel116', 'ronieldegozo4@gmail.com', 0, 'fed6a7958f10d84ad82b6d7a278eeecd0145274b365da3e4c9ee34e907959653c397b14947934fd1eadaf8bd9c7dec05d41b', '$2y$10$Ur2TXYGFrcOOw7JKKke38.ZMvufREUgPxSJ37/96vT.8mJ7TmhBn.'),
(12, 'samber', 'laurito', 'marikina', 'samber16', 'lauritosamber@gmail.com', 1, '1f20085e5ccc28bdc8902738d358df4c82675ceb730e40c554322665b14f7914fa5c37424eb7c5ada593f7d9e338321b67e4', '$2y$10$K9sPNSTZHyM2UiVyJyRtce9P140sCt684M9LyEO8GKK1QQC87Zwje');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
