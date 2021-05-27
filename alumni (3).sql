-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 16.16
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
  `npm` varchar(15) DEFAULT NULL,
  `nama` varchar(500) DEFAULT NULL,
  `thmasuk` varchar(4) DEFAULT NULL,
  `thlulus` varchar(4) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `notelp_ortu` varchar(15) DEFAULT NULL,
  `noijazah` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `email_cadangan` varchar(255) DEFAULT NULL,
  `thbekerja` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `thbekerja2` varchar(255) DEFAULT NULL,
  `perusahaan2` varchar(255) DEFAULT NULL,
  `thbekerja3` varchar(255) DEFAULT NULL,
  `perusahaan3` varchar(255) DEFAULT NULL,
  `fotoalumni` varchar(255) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `ipk` varchar(4) DEFAULT NULL,
  `judulskripsi` varchar(255) DEFAULT NULL,
  `bidangminat` varchar(15) DEFAULT NULL,
  `abstrak` mediumtext DEFAULT NULL,
  `pencapaian` varchar(1000) DEFAULT NULL,
  `thpencapaian` varchar(255) DEFAULT NULL,
  `despencapaian` varchar(255) DEFAULT NULL,
  `pencapaian2` varchar(50) DEFAULT NULL,
  `thpencapaian2` varchar(50) DEFAULT NULL,
  `despencapaian2` varchar(255) DEFAULT NULL,
  `pencapaian3` varchar(50) DEFAULT NULL,
  `thpencapaian3` varchar(50) DEFAULT NULL,
  `despencapaian3` varchar(255) DEFAULT NULL,
  `transkrip` varchar(255) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `npm`, `nama`, `thmasuk`, `thlulus`, `alamat`, `notelp`, `notelp_ortu`, `noijazah`, `email`, `email_cadangan`, `thbekerja`, `perusahaan`, `thbekerja2`, `perusahaan2`, `thbekerja3`, `perusahaan3`, `fotoalumni`, `facebook`, `instagram`, `linkedin`, `twitter`, `ipk`, `judulskripsi`, `bidangminat`, `abstrak`, `pencapaian`, `thpencapaian`, `despencapaian`, `pencapaian2`, `thpencapaian2`, `despencapaian2`, `pencapaian3`, `thpencapaian3`, `despencapaian3`, `transkrip`, `created_at`, `updated_at`) VALUES
(1, '18082010011', 'Pratama Puji A', '2018', '2022', 'Jl Cobakae Waru Sidoarjo', '083833848830', '089637583756', 'IJZ001294829', 'cobakcobakae@gmail.com', 'cobakcobakae@gmail.com', '2022-2023', 'Gojek Indonesia', '2023-2024', 'Grab Indonesia', '2024-sekarang', 'Travelokas', 'puji.jpeg', 'Pratama Puji A', '@pratamapuji.a', 'Pratama Puji Ariyanto', '@pratamapuji.a', '3,99', 'Analisis Keefektifan Penggunaan Email dengan Nama cobakcobakae di Indonesia', 'MSI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', '2019', 'Kompetisi atau kejuaraan game pubg mobile yang diselenggarakan di singapura dan diikuti oleh semua negara', NULL, NULL, NULL, NULL, NULL, NULL, 'puji.pdf', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(15, '1135010006', 'Novi Aji Arif Wibisono S.Kom', '2011', '2016', 'Jl. H Abd Rahman No 165 C', '081252712161', '081252712161', '06', 'Noviajiarif@gmail.com', 'Noviajiarifwibisono@gmail.com', '2016', 'MSA Kargo Surabaya', '', '', '', '', '1612453052115. - novi aji arif Wibisono.jpg', 'Tidak ada', 'Adjie wibisono', 'Tidak ada', 'Tidak ada', '3.36', 'Aplikasi perhitungan zakat berbasis android mobile', 'Solusi', 'lupa', 'Tidak ada', '', 'Tidak ada', 'Tidak ada', '', 'Tidak ada', 'Tidak ada', '', 'Tidak ada', NULL, '2021-02-09 08:07:44.000000', '2021-02-09 08:07:44.000000'),
(16, '1635010009', 'Dannie M. Mulay Junior S.Kom', '2016', '2020', 'Desa Pagerwojo RT:19 RW:05 Buduran, Sidoarjo', '0895338165251', '083831051157', '572012020000150', 'danniemulay.junior10@gmail.com', 'danniemulayj@gmail.com', '2020-sekarang', 'J&T Express (Gateway Surabaya)', '', '', '', '', 'D70CA496-74CD-459B-85B5-AC1343AC73B1 - Dannie Mulay Junior.jpeg', 'Dannie Mulay Junior', 'danniemulayjunior', 'Dannie M. Mulay Junior', '@dannie_jr', '3.44', 'Pengukuran Analisis dan Faktor-Faktor Kebeehasilan Pada Web Akademik Mahasiswa di Sekolah Tinggi Ilmu Ekonomi Indonesia Surabaya', 'MSI', 'Penggunaan Teknologi informasi berpengaruh terhadap kinerja dan pelayanan dibidang pendidikan. Instansi pendidikan berusaha untuk meningkatkan efisiensi dan efektivitas kinerja dengan penerapan web akademik mahasiswa. Penggunaan web akademik mahasiswa yang sukses diharapkan dapat menunjang proses akademik yang mudah dan cepat. Penelitian ini bertujuan untuk mengukur faktor-faktor keberhasilan pada web akademik mahasiswa dan menguji hubungan antar variabel terhadap net benefit dalam Sekolah Tinggi Ilmu Ekonomi Indonesia di Surabaya.', 'Lulus 3,5 tahun', '', 'Lulus dari program studi sistem informasi selama 3,5 tahun', 'Tidak ada', '', 'Tidak ada', 'Tidak ada', '', 'Tidak ada', NULL, '2021-02-09 08:19:20.000000', '2021-02-09 08:19:20.000000');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
