-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 01:33 PM
-- Server version: 10.5.21-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoteldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `userfeedback` varchar(100) NOT NULL,
  `rating` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`userfeedback`, `rating`) VALUES
('fewafr', 3),
('fewafr', 3),
('fewafr', 3),
('best', 2),
('fgghftghfghgjhj', 5),
('fgghftghfghgjhj', 5),
('wegffhfghgjnhgn', 3),
('dsfgaergare', 3),
('dsfgaergare', 3);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user`, `email`, `password`) VALUES
('infak', 'mohatc@gmail.com', 'infak'),
('infak', 'mohatc@gmail.com', 'infak'),
('infak', 'infakstc@gmail.com', 'infak'),
('akram', 'akram@gmail.com', 'aks'),
('akeelmohamed', 'akeel@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `roombooking`
--

CREATE TABLE `roombooking` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombooking`
--

INSERT INTO `roombooking` (`username`, `email`, `phone`, `checkin`, `checkout`) VALUES
('akeel', 'akeel@gmail.com', 823462463, '2023-12-08', '2023-12-25'),
('asmeer', 'asmeer@gmail.com', 325534534, '2023-12-20', '2023-12-19'),
('fgfgf', 'gggg@gmail.com', 43543, '2023-11-30', '2023-12-25'),
('infak', 'mafasa@gmail.com', 4343543, '2023-12-26', '2023-12-18'),
('thiva', 'mohatc@gmail.com', 754653662, '2023-12-14', '2023-12-20'),
('rtrter', 'regtre@gmail.com', 454354, '2024-01-06', '2023-12-20'),
('rose', 'rose@gmail.com', 435, '2024-01-02', '2023-12-26'),
('sathu', 'sathu@gmail.com', 34543564, '2023-12-28', '2023-12-21'),
('tt', 'tt2@gmail.com', 45654, '2023-12-04', '2024-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roombooking`
--
ALTER TABLE `roombooking`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
