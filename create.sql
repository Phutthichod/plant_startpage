-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 05:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `create`
--

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `p_id` int(11) NOT NULL,
  `p_species` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_genus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_alias` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_color` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_icon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`p_id`, `p_species`, `p_genus`, `p_alias`, `p_color`, `p_icon`, `p_description`) VALUES
(41, 'Sfllh;gl', 'fdlfd', 'Tomato', '#FF4500', 'tomato256.png', 'gfufgjgj'),
(42, 'ul', 'kl;', 'kjl', '#32CD32', 'cucumber256.png', 'gjlgkfhjk'),
(44, 'dfgfhdfh', 'gfjghjhg', 'hjkjhk', '#FFD700', 'banana32.png', 'hgkhkhjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
