-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2019 pada 10.55
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_sederhana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_ps`
--

CREATE TABLE `sewa_ps` (
  `kode_sewa` int(5) NOT NULL,
  `no_ps` int(5) NOT NULL,
  `type` varchar(10) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `awal_sewa` varchar(10) NOT NULL,
  `akhir_sewa` varchar(10) NOT NULL,
  `harga_sewa` int(20) NOT NULL,
  `status_sewa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sewa_ps`
--
ALTER TABLE `sewa_ps`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sewa_ps`
--
ALTER TABLE `sewa_ps`
  MODIFY `kode_sewa` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
