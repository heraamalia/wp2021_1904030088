-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 12:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030088`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buah`
--

CREATE TABLE `daftar_buah` (
  `id` int(11) NOT NULL,
  `nama_buah` varchar(40) NOT NULL,
  `stok_buah` varchar(10) NOT NULL,
  `harga_buah` varchar(10) NOT NULL,
  `foto_buah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buah`
--

INSERT INTO `daftar_buah` (`id`, `nama_buah`, `stok_buah`, `harga_buah`, `foto_buah`) VALUES
(1, 'Apel', '120', '15.000', 'apel'),
(2, 'Semangka', '78', '20.000', 'semangka'),
(3, 'Nanas', '47', '23.000', 'nanas'),
(4, 'Pisang', '126', '12.000', 'pisang'),
(5, 'Melon', '27', '22.000', 'melon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_buah`
--
ALTER TABLE `daftar_buah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buah`
--
ALTER TABLE `daftar_buah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
