-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2021 pada 17.37
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
  `id` int(255) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `nama` varchar(500) DEFAULT NULL,
  `thmasuk` varchar(4) DEFAULT NULL,
  `thlulus` varchar(4) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `noijazah` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `thbekerja` varchar(4) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `fotoalumni` varchar(255) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `ipk` varchar(4) DEFAULT NULL,
  `judulskripsi` varchar(255) DEFAULT NULL,
  `bidangminat` varchar(15) DEFAULT NULL,
  `abstrak` varchar(10000) DEFAULT NULL,
  `pencapaian` varchar(1000) DEFAULT NULL,
  `transkrip` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `npm`, `nama`, `thmasuk`, `thlulus`, `alamat`, `notelp`, `noijazah`, `email`, `thbekerja`, `perusahaan`, `fotoalumni`, `facebook`, `instagram`, `linkedin`, `twitter`, `ipk`, `judulskripsi`, `bidangminat`, `abstrak`, `pencapaian`, `transkrip`, `created_at`, `updated_at`) VALUES
(1, '18082010011', 'Pratama Puji A', '2018', '2022', 'Jl Cobakae Waru Sidoarjo', '083833848830', 'IJZ001294829', 'cobakcobakae@gmail.com', '2022', 'Gojek Indonesia', 'puji.jpeg', 'Pratama Puji A', '@pratamapuji.a', 'Pratama Puji Ariyanto', '@pratamapuji.a', '3,99', 'Analisis Keefektifan Penggunaan Email dengan Nama cobakcobakae di Indonesia', 'MSI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'puji.pdf', NULL, '0000-00-00 00:00:00.000000'),
(2, '18082010041', 'Primandika Hakiki', '2018', '2022', 'Jl Kendangsari Surabaya', '085672834562', 'IJZ00283658', 'primandikakiki@gmail.com', '2022', 'Grab Indonesia', 'kiki.jpeg', 'Primandika Hakiki', '@primandikaa', 'Primandika Hakiki', '@primandikaa', '3,99', 'Sistem Pendukung Keputusan Pemilihan Senjata di PUBG Mobile Menggunakan Metode SAW', 'Solusi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'kiki.pdf', NULL, '0000-00-00 00:00:00.000000'),
(3, '18082010096', 'Kobe Bryant', '1996', '2016', 'Los Angeles, California', '089699373692', 'IJZ283493724', 'cahyojoyo@gmail.com', '1997', 'National Basketball Association', 'kobe.jpg', 'Kobe Bryant', 'Kobe Bryant', 'Kobe Bryant', 'Kobe Bryant', '4.00', 'Sistem', NULL, 'I drop 81 on jalen rose', 'I have 5 rings', '1611394275948.jpg', '2021-01-31 10:31:43.000000', '2021-01-31 10:31:43.000000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
