-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 08:40 AM
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
(10, 's1', 'buc', 1, 1, ''),
(11, 's2', 'buc', 1, 1, ''),
(12, 's3', 'buc', 1, 1, ''),
(13, 's4', 'buc', 1, 1, ''),
(14, 's5', 'buc', 1, 1, ''),
(15, 's1', 'buc', 1, 1, ''),
(16, 's6', 'buc', 1, 1, ''),
(17, 's7', 'buc', 1, 1, ''),
(18, 's8', 'buc', 1, 1, ''),
(19, 's9', 'buc', 1, 1, ''),
(20, 's10', 'buc', 1, 1, ''),
(21, 's11', 'buc', 1, 1, ''),
(22, 's12', 'buc', 1, 1, ''),
(23, 's13', 'buc', 1, 1, ''),
(24, 's14', 'buc', 1, 1, ''),
(25, 's15', 'buc', 1, 1, ''),
(26, 's16', 'buc', 1, 1, ''),
(27, 's17', 'buc', 1, 1, ''),
(28, 's18', 'buc', 1, 1, ''),
(29, 's1', 'buc', 2, 1, ''),
(30, 's2', 'buc', 2, 1, ''),
(31, 's3', 'buc', 2, 1, ''),
(32, 's4', 'buc', 2, 1, ''),
(33, 's5', 'buc', 2, 1, ''),
(34, 's6', 'buc', 2, 1, ''),
(35, 's7', 'buc', 2, 1, ''),
(36, 's8', 'buc', 2, 1, ''),
(37, 's9', 'buc', 2, 1, ''),
(38, 's10', 'buc', 2, 1, ''),
(39, 's11', 'buc', 2, 1, ''),
(40, 's12', 'buc', 2, 1, ''),
(41, 's13', 'buc', 2, 1, ''),
(42, 's14', 'buc', 2, 1, ''),
(43, 's15', 'buc', 2, 1, ''),
(44, 's16', 'buc', 2, 1, ''),
(45, 's17', 'buc', 2, 1, ''),
(46, 's18', 'buc', 2, 1, ''),
(47, 's1', 'buc', 3, 1, ''),
(48, 's2', 'buc', 3, 1, ''),
(49, 's3', 'buc', 3, 1, ''),
(50, 's4', 'buc', 3, 1, ''),
(51, 's5', 'buc', 3, 1, ''),
(52, 's6', 'buc', 3, 1, ''),
(53, 's7', 'buc', 3, 1, ''),
(54, 's8', 'buc', 3, 1, ''),
(55, 's9', 'buc', 3, 1, ''),
(56, 's10', 'buc', 3, 1, ''),
(57, 's11', 'buc', 3, 1, ''),
(58, 's12', 'buc', 3, 1, ''),
(59, 's13', 'buc', 3, 1, ''),
(60, 's14', 'buc', 3, 1, ''),
(61, 's15', 'buc', 3, 1, ''),
(62, 's16', 'buc', 3, 1, ''),
(63, 's17', 'buc', 3, 1, ''),
(64, 's18', 'buc', 3, 1, ''),
(65, 's1', 'buc', 2, 1, ''),
(66, 's2', 'buc', 2, 1, ''),
(67, 's3', 'buc', 4, 1, ''),
(68, 's4', 'buc', 4, 1, ''),
(69, 's5', 'buc', 4, 1, ''),
(70, 's6', 'buc', 4, 1, ''),
(71, 's7', 'buc', 4, 1, ''),
(72, 's8', 'buc', 4, 1, ''),
(73, 's9', 'buc', 4, 1, ''),
(74, 's10', 'buc', 4, 1, ''),
(75, 's11', 'buc', 4, 1, ''),
(76, 's12', 'buc', 4, 1, ''),
(77, 's13', 'buc', 4, 1, ''),
(78, 's14', 'buc', 4, 1, ''),
(79, 's15', 'buc', 4, 1, ''),
(80, 's16', 'buc', 4, 1, ''),
(81, 's17', 'buc', 4, 1, ''),
(82, 's18', 'buc', 4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id_booking` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_birou` int(100) NOT NULL,
  `data` date NOT NULL,
  `ora_inceput` time NOT NULL,
  `ora_sfarsit` time NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id_booking`, `id_user`, `id_birou`, `data`, `ora_inceput`, `ora_sfarsit`, `task`) VALUES
(18, 30, 10, '2022-05-29', '06:23:00', '06:27:00', ''),
(19, 30, 10, '2022-05-30', '06:24:00', '06:25:00', ''),
(21, 30, 10, '2022-12-12', '10:35:00', '11:52:00', ''),
(22, 30, 82, '1333-12-31', '09:39:00', '23:42:00', '');

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
(28, 'Cristi', 'lol@sad.dsa', '$2y$10$5/9vnHCtIKfBDEPtKnp1peaXKKWTI3rWUcoqPEFcK.VKeK/J9kpTu', 0, 0),
(29, 'Victor', 'asd@ase.as', '$2y$10$PMi5WT1dYA0Ip1wSN1kp5etEyrg72GPrtuybCQdatFfpySovp3IB6', 1, 0),
(30, 'cuc', 'Popidan@sad.s', '$2y$10$uZ5JCfvS0Ybrpb/3E8qkLufEN9G7MkV6VRdpHzzsxKmS4N2Ke3JVa', 0, 0);

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
  MODIFY `id_birou` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id_booking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
