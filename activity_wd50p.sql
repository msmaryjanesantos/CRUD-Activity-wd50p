-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 12:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledb`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_wd50p`
--

CREATE TABLE `activity_wd50p` (
  `id` int(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity_wd50p`
--

INSERT INTO `activity_wd50p` (`id`, `book_title`, `author`, `customer_name`) VALUES
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '0', '0', '0'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', 'customer_name'),
(0, '', '', ''),
(0, '', '', 'customer_name'),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', 'customer_name'),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', 'customer_name'),
(0, '', '', ''),
(0, 'The Millionaire\'s mind', 'Thomas Stanley', 'MV'),
(0, '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
