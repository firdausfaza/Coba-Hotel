-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 10:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_class`
--

CREATE TABLE `dt_class` (
  `id` int(10) NOT NULL,
  `kodeclass` varchar(10) NOT NULL,
  `roomhotel` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_class`
--

INSERT INTO `dt_class` (`id`, `kodeclass`, `roomhotel`, `harga`) VALUES
(7, 'STD', 'Standard', 350000),
(8, 'DLX', 'Deluxe', 550000),
(9, 'SPR', 'Superior', 700000),
(10, 'SUT', 'Suite', 1000000),
(12, 'PST', 'President Suit', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `dt_room`
--

CREATE TABLE `dt_room` (
  `id` int(11) NOT NULL,
  `kodeclass` varchar(10) NOT NULL,
  `roomhotel` varchar(60) NOT NULL,
  `nokamar` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_room`
--

INSERT INTO `dt_room` (`id`, `kodeclass`, `roomhotel`, `nokamar`, `harga`) VALUES
(47, 'STD', 'Standard', '01.001', 350000),
(48, 'DLX', 'Deluxe', '02.001', 550000),
(49, 'SPR', 'Superior', '03.001', 700000),
(50, 'SUT', 'Suite', '04.001', 1000000),
(51, 'STD', 'Standard', '01.002', 350000),
(52, 'SUT', 'Suite', '04.002', 1000000),
(53, 'PST', 'President Suit', '05.001', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `dt_transaksi`
--

CREATE TABLE `dt_transaksi` (
  `id` int(10) NOT NULL,
  `namacust` varchar(60) NOT NULL,
  `nokamar` varchar(30) NOT NULL,
  `roomhotel` varchar(60) NOT NULL,
  `cekin` varchar(60) NOT NULL,
  `cekout` varchar(60) NOT NULL,
  `bed` int(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `ttlharga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dt_verify`
--

CREATE TABLE `dt_verify` (
  `id` int(20) NOT NULL,
  `namacust` varchar(60) NOT NULL,
  `roomhotel` varchar(30) NOT NULL,
  `nokamar` varchar(20) NOT NULL,
  `cekin` varchar(20) NOT NULL,
  `cekout` varchar(20) NOT NULL,
  `ttlharga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `pw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `idr` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`idr`, `username`, `password`, `status`) VALUES
(1, 'admin', '$2y$10$YKmc6fy8TNZ7Mh/Kt6aHK.1j1GG68D4AHNNsQqSCwhkD6I1LVvwDq', 'Active'),
(2, 'faza', '$2y$10$2gOHw.D6PZKAbPNbXDkWvuK6mCwxQoCf4cixW3ZZPZY78xKeFtAJC', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_class`
--
ALTER TABLE `dt_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomhotel` (`roomhotel`) USING BTREE,
  ADD KEY `harga` (`harga`) USING BTREE;

--
-- Indexes for table `dt_room`
--
ALTER TABLE `dt_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomhotel` (`roomhotel`),
  ADD KEY `harga` (`harga`),
  ADD KEY `nokamar` (`nokamar`) USING BTREE;

--
-- Indexes for table `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `namacust` (`namacust`),
  ADD KEY `roomhotel` (`roomhotel`),
  ADD KEY `nokamar` (`nokamar`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `dt_verify`
--
ALTER TABLE `dt_verify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`idr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_class`
--
ALTER TABLE `dt_class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dt_room`
--
ALTER TABLE `dt_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `dt_verify`
--
ALTER TABLE `dt_verify`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dt_room`
--
ALTER TABLE `dt_room`
  ADD CONSTRAINT `dt_room_ibfk_1` FOREIGN KEY (`roomhotel`) REFERENCES `dt_class` (`roomhotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_room_ibfk_2` FOREIGN KEY (`harga`) REFERENCES `dt_class` (`harga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dt_transaksi`
--
ALTER TABLE `dt_transaksi`
  ADD CONSTRAINT `dt_transaksi_ibfk_1` FOREIGN KEY (`roomhotel`) REFERENCES `dt_room` (`roomhotel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `dt_transaksi_ibfk_3` FOREIGN KEY (`harga`) REFERENCES `dt_room` (`harga`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
