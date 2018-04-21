-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2018 pada 18.41
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `nama`) VALUES
('Kami-sama', 'arisu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `role`) VALUES
(1, '15', 'ah', 0),
(2, 'Kami-sama', '123', 1),
(3, '2020', '123123', 2),
(4, 'telkom', '12345', 3),
(5, 'f1e115015', '111', 0),
(6, '11', '111', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`) VALUES
('2020', 'tri suratno, s.kom., m.kom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `username` varchar(20) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `kapasitas` tinyint(4) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `syarat` varchar(500) NOT NULL,
  `kriteria` varchar(500) NOT NULL,
  `alamat_instansi` varchar(255) NOT NULL,
  `pemagang` tinyint(4) NOT NULL,
  `pemagang_terdaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`username`, `nama_instansi`, `kapasitas`, `deskripsi`, `syarat`, `kriteria`, `alamat_instansi`, `pemagang`, `pemagang_terdaftar`) VALUES
('alpa', 'alfamart', 4, 'ini alpamart', 'manajemen A', 'penampilan menarik', 'karya maju', 2, 0),
('telkom', 'telkom jambi', 3, 'ini adalah telkom jambi', 'matkul jaringan harus A', 'pekerja keras', 'sipin', 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `fakultas` varchar(70) NOT NULL,
  `prodi` varchar(70) NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `sks` int(3) NOT NULL,
  `ipk` double NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `nip_pembimbing` varchar(20) NOT NULL,
  `tempat_magang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `fakultas`, `prodi`, `jenis_kelamin`, `telp`, `sks`, `ipk`, `semester`, `nip_pembimbing`, `tempat_magang`) VALUES
('11', 'lucy', 'jambi', '2018-04-02', 'feb', 'manajemen', 0, '081686372', 120, 3.2, 7, '2020', NULL),
('15', 'bro', 'kota jambi', '2018-04-01', 'fkip', 'kimia', 1, '0808', 125, 3.4, 7, '2020', NULL),
('f1e115015', 'yulia oktaviani', 'jambi', '2018-04-17', 'sains dan teknologi', 'sistem informasi', 0, '082289680251', 110, 3.8, 6, '2020', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
