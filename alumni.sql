-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2021 pada 16.27
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siforni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `npm` varchar(15) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `thmasuk` varchar(4) NOT NULL,
  `thlulus` varchar(4) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `notelp` varchar(20) NOT NULL,
  `noijazah` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `thbekerja` varchar(4) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `fotoalumni` varchar(255) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `ipk` varchar(4) NOT NULL,
  `judulskripsi` varchar(255) NOT NULL,
  `bidangminat` varchar(15) NOT NULL,
  `abstrak` varchar(10000) NOT NULL,
  `pencapaian` varchar(1000) NOT NULL,
  `transkrip` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`npm`, `nama`, `thmasuk`, `thlulus`, `alamat`, `notelp`, `noijazah`, `email`, `thbekerja`, `perusahaan`, `fotoalumni`, `facebook`, `instagram`, `linkedin`, `twitter`, `ipk`, `judulskripsi`, `bidangminat`, `abstrak`, `pencapaian`, `transkrip`, `created_at`, `updated_at`, `deleted_at`) VALUES
('18082010012', 'Pratama Puji A', '2018', '2022', 'Jl Cobakae Waru Sidoarjo', '083833848830', 'IJZ001294829', 'cobakcobakae@gmail.com', '2022', 'Gojek Indonesia', 'puji.jpeg', 'Pratama Puji A', '@pratamapuji.a', 'Pratama Puji Ariyanto', '@pratamapuji.a', '3,99', 'Analisis Keefektifan Penggunaan Email dengan Nama cobakcobakae di Indonesia', 'msi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'puji.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('18082010041', 'Primandika Hakiki', '2018', '2022', 'Jl Kendangsari Surabaya', '085672834562', 'IJZ00283658', 'primandikakiki@gmail.com', '2022', 'Grab Indonesia', 'kiki.jpeg', 'Primandika Hakiki', '@primandikaa', 'Primandika Hakiki', '@primandikaa', '3,99', 'Sistem Pendukung Keputusan Pemilihan Senjata di PUBG Mobile Menggunakan Metode SAW', 'solusi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'kiki.pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
