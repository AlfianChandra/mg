-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mei 2018 pada 08.39
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
(13, '11', '11', 0),
(15, 'BI', '1212', 3),
(17, '198312172008011003', '333', 4),
(18, '1221', '666', 2),
(19, '9090', '000', 4),
(20, '0000', '00', 0),
(21, 'taspen', '555', 3),
(22, '12', '12', 3),
(23, '112', '121212', 3),
(24, 'donat daniel', 'daniel', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `prodi`, `telp`) VALUES
('0000', 'pepper, s. sc., m. sc., p. hd.', 'fisika', '00987654'),
('1221', 'loki odinson, s. e., m. si.', 'manajemen', '086735178099'),
('2020', 'tri suratno, s.kom., m.kom.', 'sistem informasi', '08323451'),
('9090', 'bruce ackerman, s. e., m. sc.', 'manajemen', '07897567');

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
  `pemagang_diterima` int(11) NOT NULL,
  `pemagang_terdaftar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`username`, `nama_instansi`, `kapasitas`, `deskripsi`, `syarat`, `kriteria`, `alamat_instansi`, `pemagang_diterima`, `pemagang_terdaftar`) VALUES
('112', 'klk', 1, 'jkj', 'jkj', 'kk', 'jkj', 0, 0),
('12', '12', 12, '121', '12', '12', '121', 0, 0),
('alpa', 'alfamart', 4, 'ini alpamart', 'manajemen A', 'penampilan menarik', 'karya maju', 2, 9),
('BI', 'Bank Indonesia', 2, 'ini bank', 'rajin dan berbakat', 'IQ tinggi', 'telanai', 2, -1),
('donat daniel', 'dunkin daniel', 2, 'ini donat daniel', 'luar biasa dalam bekerja', 'cerdas', 'selincah', 0, 0),
('taspen', 'taspen jambi', 3, 'ini adalah taspen ', 'ipk minimal 3.4', 'rajin', 'broni', 0, 0),
('telkom', 'telkom jambi', 3, 'ini adalah telkom jambi', 'matkul jaringan harus A', 'pekerja keras', 'sipin', 1, 11);

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
  `sks` tinyint(4) NOT NULL,
  `ipk` double NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `nip_pembimbing` varchar(20) NOT NULL,
  `tempat_magang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `fakultas`, `prodi`, `jenis_kelamin`, `telp`, `sks`, `ipk`, `semester`, `nip_pembimbing`, `tempat_magang`) VALUES
('11', 'lucy', 'jambi', '2018-04-02', 'feb', 'manajemen', 0, '081686372', 120, 3.2, 7, '1221', 'BI'),
('15', 'bro', 'kota jambi', '1997-10-01', 'fkip', 'kimia', 1, '0808', 124, 3.4, 7, '2020', 'telkom'),
('f1e115015', 'yulia oktaviani', 'jambi', '2018-04-17', 'sains dan teknologi', 'sistem informasi', 0, '082289680251', 110, 3.8, 6, '2020', NULL);

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
  `accepted` tinyint(4) NOT NULL,
  `konfirmasi_magang` tinyint(4) NOT NULL,
  `pilih_pembimbing` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proses_magang`
--

INSERT INTO `proses_magang` (`nim`, `instansi`, `tanggal_mulai`, `tanggal_selesai`, `upload_syarat`, `admin_upload`, `status_pengajuan`, `accepted`, `konfirmasi_magang`, `pilih_pembimbing`) VALUES
('11', 'BI', '2018-05-06', '2018-05-14', 1, 1, 1, 1, 1, 1),
('15', 'telkom', '2018-04-01', '2018-04-08', 0, 0, 0, 0, 0, 0);

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
-- Indexes for table `proses_magang`
--
ALTER TABLE `proses_magang`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
