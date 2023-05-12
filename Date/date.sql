-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2023 at 04:54 AM
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
-- Database: `date`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_date`
--

CREATE TABLE `tbl_date` (
  `id` int(11) NOT NULL,
  `employee` varchar(100) NOT NULL,
  `price` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_date`
--

INSERT INTO `tbl_date` (`id`, `employee`, `price`, `date`) VALUES
(78, 'Sothineefef', 233444, '2023-03-04'),
(79, 'Sokthinblockwew', 1234, '2023-03-02'),
(80, 'monye', 12345, '2023-03-01'),
(81, 'Sokthinfbgew', 12600, '2023-03-02'),
(84, 'chan', 1200, '2023-03-04'),
(85, 'Sokthinsfe', 12342, '2023-03-02'),
(86, 'Sokthinfs', 1233, '2023-03-02'),
(89, 'phabsokthin', 90833, '2023-03-04'),
(90, 'sokcheat', 209903, '2023-03-02'),
(91, 'Tommy', 12300480, '2023-03-04'),
(92, 'bluecord', 3993884, '2023-03-05'),
(93, 'Soriya', 2390393, '2023-03-04'),
(94, 'Hourey', 1309904, '2023-03-04'),
(95, 'state', 7489292, '2023-03-04'),
(96, 'boot7', 1234990, '2023-03-06'),
(97, 'cheanboxing', 9088422, '2023-03-04'),
(104, 'Sokthinewee', 533333, '2023-03-02'),
(106, 'Sokthin543', 555555553, '2023-03-04'),
(107, 'Sokthinblock', 5353, '2023-03-10'),
(108, 'Sokthin322', 345532, '2023-03-04'),
(109, 'ewe', 4343, '2023-03-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_date`
--
ALTER TABLE `tbl_date`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_date`
--
ALTER TABLE `tbl_date`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
