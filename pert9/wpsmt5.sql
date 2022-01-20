-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2022 pada 13.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog5a`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `foto_maba` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `asal_sekolah`, `foto_maba`) VALUES
(1, 'Safiyya Nadeera', 'Tigaraksa', 'Perempuan', 'Islam', 'SMA 70', 'cew'),
(2, 'Asep Maryono', 'Cikupa', 'Laki-laki', 'Kristen', 'SMA 28', 'cow'),
(3, 'Andri Kristanto', 'Jakarta Pusat', 'Laki-laki', 'Budha', 'MAN 1', 'cow'),
(4, 'Laila Wannahar', 'Cipete', 'Perempuan', 'Islam', 'SMK 4', 'cew'),
(5, 'Dylan Wang', 'Balaraja', 'Laki-laki', 'Hindu', 'SMA 70', 'cow'),
(6, 'Lee Kwang Soo', 'Bekasi', 'Laki-laki', 'Kristen', 'MAN 1', 'cow'),
(7, 'Jeon So Min', 'Curug', 'Perempuan', 'Islam', 'SMA 15', 'cew');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
