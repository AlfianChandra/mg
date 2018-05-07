-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mei 2018 pada 06.26
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `proses_magang`
--

CREATE TABLE `proses_magang` (
  `nim` varchar(20) NOT NULL,
  `instansi` varchar(20) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `upload_syarat` tinyint(4) NOT NULL,
  `admin_upload` tinyint(4) NOT NULL,
  `status_pengajuan` tinyint(4) NOT NULL,
  `accepted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_magang`
--

INSERT INTO `proses_magang` (`nim`, `instansi`, `tanggal_mulai`, `tanggal_selesai`, `upload_syarat`, `admin_upload`, `status_pengajuan`, `accepted`) VALUES
('11', 'BI', '2018-05-06', '2018-05-14', 1, 1, 1, 1),
('15', 'telkom', '2018-04-01', '2018-04-08', 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proses_magang`
--
ALTER TABLE `proses_magang`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
