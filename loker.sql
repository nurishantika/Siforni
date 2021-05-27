-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 06:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

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
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `kode_loker` int(3) NOT NULL,
  `judul_loker` varchar(100) NOT NULL,
  `foto_loker` varchar(255) NOT NULL,
  `isi_loker` varchar(10000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`kode_loker`, `judul_loker`, `foto_loker`, `isi_loker`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lowongan Kerja Programmer', 'programmer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Lowongan Kerja Programmer', 'programmer.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'LOWONGAN UI/UX Designer', 'nusantech.jpg', 'Nusantech (PT Solusi Teknologi Nusantara) merupakan perusahaan yang bergerak di bidang jasa pengembangan software berbasis web dan mobile dengan lokasi kantor di Jakarta.  \r\nSelain itu, Nusantech juga mengembangkan berbagai produk berbasis teknologi seperti Mesabot.com, ERP untuk hotel, sistem ujian berbasis komputer dan sistem absensi yang telah teruji dan digunakan secara luas.\r\nNusantech menyasar pasar global maupun nasional dengan klien yang berasal dari pemerintahan maupun swasta.\r\nNusantech adalah anak perusahaan dari Nusa Group dengan cakupan bisnis di bidang teknologi, properti, general trading dan manajemen hotel.\r\nSejak berdiri pada Februari 2015, Nusantech telah berkembang dengan jumlah tim sebanyak 14 orang. Kami berusaha menciptakan lingkungan kerja yang nyaman dan kekeluargaan untuk memudahkan komunikasi antar setiap anggota tim dalam berkoordinasi menyelesaikan pekerjaan.\r\nKirim portofolio dan surat lamaran ke hello@nusantech.co', '2021-02-01 09:34:31', '2021-02-01 09:34:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`kode_loker`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `kode_loker` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
