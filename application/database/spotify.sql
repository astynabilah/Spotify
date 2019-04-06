-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2019 pada 12.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spotify`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `song`
--

CREATE TABLE `song` (
  `Song_ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Artist` varchar(100) NOT NULL,
  `Song` blob NOT NULL,
  `Genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `song`
--

INSERT INTO `song` (`Song_ID`, `Title`, `Artist`, `Song`, `Genre`) VALUES
(1, 'Sorry', 'Justien Bieber', '', 'pop\r\n'),
(2, 'Something just like this', 'The Chainsmoker', '', ''),
(3, 'One Last Time', 'Ariana Grande', '', ''),
(4, '7 Rings', 'Ariana Grande', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`Song_ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `song`
--
ALTER TABLE `song`
  MODIFY `Song_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
