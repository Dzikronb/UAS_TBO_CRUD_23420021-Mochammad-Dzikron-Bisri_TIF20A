-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2022 pada 12.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `idpegawai` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` set('Teller','Customer Service','Staff Back Office','Account Officer','Sales Officer','Founding Officer','Auditor') NOT NULL,
  `alamat` text NOT NULL,
  `jeniskelamin` set('Laki-Laki','Perempuan') NOT NULL,
  `agama` set('Islam','Protestan','Katolik','Hindu','Budha','Khonghucu') NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`idpegawai`, `nama`, `jabatan`, `alamat`, `jeniskelamin`, `agama`, `nohp`, `email`) VALUES
(1001, 'Ajeng Putri', 'Teller', 'Desa Kebakalan', 'Perempuan', 'Islam', '082134567890', 'ajeng@gmail.com'),
(1002, 'Silviana Bilqis', 'Teller', 'Desa Ilusi', 'Perempuan', 'Islam', '082134567865', 'silvi@gmail.com'),
(1003, 'Diajeng Kertanegara', 'Auditor', 'Desa Mekarsari', 'Perempuan', 'Islam', '081223214565', 'ajeng_dzi@gmail.com'),
(1004, 'Putri Wilujeng', 'Customer Service', 'Desa Ilusi', 'Perempuan', 'Islam', '081223214565', 'putt@gmail.com'),
(1005, 'Sekar Ardiana', 'Customer Service', 'Desa Melati', 'Perempuan', 'Islam', '082134567890', 'sekar_bi@gmail.com'),
(1006, 'Mayang Sari', 'Account Officer', 'Desa Kebakalan', 'Perempuan', 'Islam', '082134545677', 'ayang@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`idpegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
