-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 11:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iqweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `birouri`
--

CREATE TABLE `birouri` (
  `id_birou` int(100) NOT NULL,
  `nume_birou` varchar(100) NOT NULL,
  `locatie` varchar(100) NOT NULL,
  `etaj` int(100) NOT NULL,
  `tip` int(1) NOT NULL,
  `descriere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `birouri`
--

INSERT INTO `birouri` (`id_birou`, `nume_birou`, `locatie`, `etaj`, `tip`, `descriere`) VALUES
(1, 'Birou1', 'Bucuresti', 1, 1, 'Frumos dragut');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_booking` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_birou` int(100) NOT NULL,
  `data_inceput` date NOT NULL,
  `data_sfarsit` date NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `admin` int(1) NOT NULL,
  `confirm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nume`, `email`, `parola`, `admin`, `confirm`) VALUES
(1, 'Popidan Andrei', 'cpopidan@gmail.com', 'Popidanus', 0, 0),
(2, 'Popi', 'Popidan@sda.sd', 'Popidan2004', 1, 0),
(22, 'Popi2', 'Popidan@sda.sda', 'Popidan2004', 1, 0),
(23, 'asddada ', 'Popidan@asd.sdad', 'Popidan2004', 1, 0),
(24, 'asdasd', 'Popidan@sd.sda', 'Popidan2004', 1, 0),
(25, 'Popidan', 'cpopidan@gmail.com', 'Popidan2004', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birouri`
--
ALTER TABLE `birouri`
  ADD PRIMARY KEY (`id_birou`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birouri`
--
ALTER TABLE `birouri`
  MODIFY `id_birou` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_booking` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
