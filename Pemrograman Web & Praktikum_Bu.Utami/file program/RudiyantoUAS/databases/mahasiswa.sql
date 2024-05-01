-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 19.40
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_mahasiswa_aktif`
--

CREATE TABLE `surat_mahasiswa_aktif` (
  `nim` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_mahasiswa_aktif`
--

INSERT INTO `surat_mahasiswa_aktif` (`nim`, `nama`, `ttl`, `alamat`, `fakultas`, `prodi`, `semester`) VALUES
('21157201114', 'Ahmad Rudiyanto', 'Pasuruan, 24 april 2024', 'Dsun. parasan, Ds Sanganom, kec.Nguling, kab.Pasuruan', 'Teknologi dan Sains', 'Ilmu Komputer', 4),
('ss', 'sss', 'rgeghdddddddddddddddddddddddd', 'jutokyol9p7', 'oyuoikyky', 'rukr', 7);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
