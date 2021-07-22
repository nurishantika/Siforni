-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 09:23 AM
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
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `kode_berita` int(3) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `foto_berita` varchar(255) NOT NULL,
  `isi_berita` varchar(10000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`kode_berita`, `judul_berita`, `foto_berita`, `isi_berita`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Information System Webinar Series (ISWS)', 'slideshow1.jpg', 'Program studi Sistem Informasi UPN Veteran Jawa Timur berencana menyelenggarakan Web Seminar diantaranya :\r\n\r\nWebinar Series 1 : Rabu, 12 Agustus 2020 pukul 09.00-12.00 WIB\r\nDengan tema IT Evaluation – Pengukuran Kinerja Organisasi TI oleh Anisah Herdiyanti S.Kom, M.Sc. (Dosen program studi Sistem Informasi Institut Teknologi Sepuluh Nopember)\r\n\r\nWebinar Series 2 : Rabu, 19 Agustus 2020 pukul 13.00-15.00 WIB\r\nDengan tema Peran Analisis Data Sosial Media dalam Ketahanan Ekonomi UMKM di Era New Normal oleh Ismail Fahmi, Ph.D (Founder Drone Emprit dan Media Kernels Indonesia)\r\n\r\nWebinar Series 3 : Rabu, 26 Agustus 2020 pukul 09.00-12.00 WIB\r\nDengan tema IT/IS Governance in Practice/ SME oleh Ira Puspitasari, Ph.D (Dosen program studi Sistem Informasi Universitas Airlangga) dan Arista Pratama, S.Kom, M.Kom (Dosen program studi Sistem Informasi UPN Veteran Jawa Timur)', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Information System Webinar : Alumni Series', 'berita1.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2021-01-27 09:39:59', '2021-01-27 09:39:59', '0000-00-00 00:00:00'),
(12, 'JEJAKATUA : Virtual Tour Kampus UPN Veteran Jatim', 'berita2.png', 'Di era milenial saat ini, digitalisasi promosi menawarkan banyak potensi sehingga masing-masing lembaga berlomba untuk mendapatkan perhatian publik melalui pengembangan digitalisasi promosi. Seperti halnya inovasi yang dilakukan oleh dosen program studi sistem informasi ini.\r\n\r\nUniversitas Pembangunan Nasional “Veteran” Jawa Timur memiliki kesempatan yang sama untuk bersaing untuk memberikan informasi dan promosi digital terbaik” jelas Bapak Nur Cahyo Wibowo sekaligus koordinator program studi sistem informasi. Adapun beberapa urgensi untuk segera membangun promosi digital di Universitas Pembangunan Nasional “Veteran” Jawa Timur adalah (1) Jaringan kampus perlu dikembangkan mulai dari Regional, Nasional, dan bahkan Internasional. (2) Calon mahasiswa baru, calon mitra, atau kolega dari luar kota, luar daerah atau bahkan luar negeri tentunya memiliki rasa ingin tahu tentang deskripsi kampus yang akan dipilih.\r\n\r\n(3) Jarak yang sejalan dengan biaya merupakan kendala untuk mewujudkan perjalanan ke Kampus. (4) Tur Kampus Virtual adalah solusi di era milenial seperti saat ini untuk memberikan pengalaman nyata dan kesan yang lebih dalam bagi pihak-pihak tersebut daripada hanya membaca data dan foto statis di halaman web.\r\n\r\n“Dengan demikian penelitian ini bertujuan untuk merancang dan membangun Aplikasi Penjelajahan Kampus Virtual (Jejakatua) sebagai Media Promosi di Era Milenial di Universitas Pembangunan Nasional “Veteran” Jawa Timur, dengan menggunakan gambar panorama yang disesuaikan sehingga pengguna mendapatkan pengalaman yang lebih nyata di Universitas Pembangunan Nasional ” Veteran “Jawa Timur online dan terasa realistis” kata Bapak Tri Lathif Mardi S selaku partner dalam penelitian ini.\r\n\r\nUntuk JEJAKATUA bisa di akses pada link berikut ini : https://www.upnjatim.ac.id/vtour/', '2021-01-29 02:16:09', '2021-01-29 02:16:09', '0000-00-00 00:00:00'),
(13, 'Dosen SI sabet Best Paper di Seminar Nasional ReTII-14', 'berita3.jpeg', 'ReTII dari kepanjangan Rekayasa Teknologi Industri dan Informasi. Seminar Nasional ReTII ke 14 yang diselenggarakan oleh Institut Teknologi Nasional Yogyakarta (ITNY). Turut hadir sejumlah Dosen program Studi Sistem Informasi sebagai pemakalah.\r\n\r\nSeminar Nasional yang mengangkat tema Revolusi Industri 4.0 : Peluang dan Tantangan Terkini bagi Technopreneur yang langsung disampaikan oleh Senior Vice President (Strategi Management) PT. Timah tbk, Ria Wardhani Pawan.\r\n\r\nPada Seminar Nasional tersebut Bapak Prisa Marga Kusumantara, S.Kom.M.Cs mendapatkan penghargaan sebagai Best Paper dengan judul Sistem Pendukung Keputusan Penentuan Profesi Linier Untuk Lulusan Program Studi Sistem Informasi Dengan Metode SAW . Sebuah prestasi yang membanggakan untuk program studi dan kampus UPN Veteran Jawa Timur secara umum.', '2021-01-29 02:17:20', '2021-01-29 02:17:20', '0000-00-00 00:00:00'),
(14, 'Alumni “Sambang” Kampus tularkan Semangat & Energi Positif', 'berita4.jpeg', 'Sejumlah Alumni mahasiswa Sistem Informasi kembali ke kampus UPN Veteran Jawa Timur. Kembalinya para alumni ini dengan suasana yang berbeda tentunya. Sejumlah alumni memberikan semangat dan energi baru kepada mahasiswa semester 1 prodi Sistem Informasi.\r\n\r\nBeberapa alumni sekarang sudah sukses memasuki dunia kerja, ada yang berkarir sebagai Dosen, sebagai sekretaris desa, staff IT di pemerintah kota Surabaya dan perusahaan besar yang bergerak dalam bidang IT. “Alhamdulillah, semoga ilmu yang dipelajari selama dikampus bermanfaat dan menjadi bekal untuk kembali ke masyarakat”, tegas ketua panitia kuliah tamu.\r\n\r\nSejumlah alumni yang datang ke kampus dimanfaatkan oleh Ketua Ikatan Alumni Sistem Informasi untuk mengadakan kongres membahas beberapa agenda yang kedepan lebih berdaya dan mampu memberikan dampak positif, baik untuk lembaga dan tentunya ikasifo sendiri.', '2021-01-29 02:18:20', '2021-01-29 02:18:20', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kode_berita`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `kode_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
