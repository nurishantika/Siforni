-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2021 pada 18.23
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `email_admin` varchar(100) NOT NULL,
  `password_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

INSERT INTO `alumni` (`id`, `npm`, `nama`, `thmasuk`, `thlulus`, `alamat`, `notelp`, `notelp_ortu`, `noijazah`, `email`, `email_cadangan`, `thbekerja`, `perusahaan`, `fotoalumni`, `facebook`, `instagram`, `linkedin`, `twitter`, `ipk`, `judulskripsi`, `bidangminat`, `abstrak`, `pencapaian`, `transkrip`, `created_at`, `updated_at`) VALUES
(1, '18082010011', 'Pratama Puji A', '2018', '2022', 'Jl Cobakae Waru Sidoarjo', '083833848830', '089637583756', 'IJZ001294829', 'cobakcobakae@gmail.com', 'cobakcobakae@gmail.com', '2022', 'Gojek Indonesia', 'puji.jpeg', 'Pratama Puji A', '@pratamapuji.a', 'Pratama Puji Ariyanto', '@pratamapuji.a', '3,99', 'Analisis Keefektifan Penggunaan Email dengan Nama cobakcobakae di Indonesia', 'MSI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'puji.pdf', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(2, '18082010041', 'Primandika Hakiki', '2018', '2022', 'Jl Kendangsari Surabaya', '085672834562', '089699374826', 'IJZ00283658', 'primandikakiki@gmail.com', 'cobakcobakae@gmail.com', '2022', 'Grab Indonesia', 'kiki.jpeg', 'Primandika Hakiki', '@primandikaa', 'Primandika Hakiki', '@primandikaa', '3,99', 'Sistem Pendukung Keputusan Pemilihan Senjata di PUBG Mobile Menggunakan Metode SAW', 'Solusi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Juara 1 PMGC se Asia Tenggara', 'kiki.pdf', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000'),
(3, '18082010096', 'Kobe Bryant', '1996', '2016', 'Los Angeles, California', '089699373692', '085674839563', 'IJZ283493724', 'cahyojoyo@gmail.com', 'cobakcobakae@gmail.com', '1997', 'National Basketball Association', 'kobe.jpg', 'Kobe Bryant', 'Kobe Bryant', 'Kobe Bryant', 'Kobe Bryant', '4.00', 'Sistem', '', 'I drop 81 on jalen rose', 'I have 5 rings', '1611394275948.jpg', '2021-01-31 10:31:43.000000', '2021-01-31 10:31:43.000000'),
(5, '18082010084', 'Michael Jeffrey Jordan', '1984', '2003', 'Charlotte, North Carolina', '089699373692', '081264738564', 'IJZ283493724', 'cobacobakae@gmail.com', 'cobakcobakae@gmail.com', '1985', 'National Basketball Association', 'mike.jpg', '', 'Michael Jordan', 'Michael Jordan', 'Michael Jordan', '4.00', 'How to be the GOAT', 'MSI', 'Scottie ain\'t carrying me bi**h', '6-0 in the finals', 'mike.jpg', '2021-01-31 10:44:05.000000', '2021-01-31 10:44:05.000000'),
(6, '18082010099', 'Ibrahimgg', '2018', '2022', 'Los Angeles, California', '089699373692', '089699373692', 'IJZ283493724', 'elaimbarca@gmail.com', 'elaimbarca@gmail.com', '2022', 'Traveloka', 'facebook.png', NULL, '_ibrahim_23', 'Ibrahim', 'ibrahim94703650', '4.00', 'Sistem', 'Solusi', 'lorem ipsum', 'gg', 'Instagram.png', '2021-02-01 08:50:17.000000', '2021-02-01 08:50:17.000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
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
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`kode_berita`, `judul_berita`, `foto_berita`, `isi_berita`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Information System Webinar Series (ISWS)', 'slideshow1.jpg', 'Program studi Sistem Informasi UPN Veteran Jawa Timur berencana menyelenggarakan Web Seminar diantaranya :\r\n\r\nWebinar Series 1 : Rabu, 12 Agustus 2020 pukul 09.00-12.00 WIB\r\nDengan tema IT Evaluation – Pengukuran Kinerja Organisasi TI oleh Anisah Herdiyanti S.Kom, M.Sc. (Dosen program studi Sistem Informasi Institut Teknologi Sepuluh Nopember)\r\n\r\nWebinar Series 2 : Rabu, 19 Agustus 2020 pukul 13.00-15.00 WIB\r\nDengan tema Peran Analisis Data Sosial Media dalam Ketahanan Ekonomi UMKM di Era New Normal oleh Ismail Fahmi, Ph.D (Founder Drone Emprit dan Media Kernels Indonesia)\r\n\r\nWebinar Series 3 : Rabu, 26 Agustus 2020 pukul 09.00-12.00 WIB\r\nDengan tema IT/IS Governance in Practice/ SME oleh Ira Puspitasari, Ph.D (Dosen program studi Sistem Informasi Universitas Airlangga) dan Arista Pratama, S.Kom, M.Kom (Dosen program studi Sistem Informasi UPN Veteran Jawa Timur)', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Information System Webinar : Alumni Series', 'berita1.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '2021-01-27 09:39:59', '2021-01-27 09:39:59', '0000-00-00 00:00:00'),
(12, 'JEJAKATUA : Virtual Tour Kampus UPN Veteran Jatim', 'berita2.png', 'Di era milenial saat ini, digitalisasi promosi menawarkan banyak potensi sehingga masing-masing lembaga berlomba untuk mendapatkan perhatian publik melalui pengembangan digitalisasi promosi. Seperti halnya inovasi yang dilakukan oleh dosen program studi sistem informasi ini.\r\n\r\nUniversitas Pembangunan Nasional “Veteran” Jawa Timur memiliki kesempatan yang sama untuk bersaing untuk memberikan informasi dan promosi digital terbaik” jelas Bapak Nur Cahyo Wibowo sekaligus koordinator program studi sistem informasi. Adapun beberapa urgensi untuk segera membangun promosi digital di Universitas Pembangunan Nasional “Veteran” Jawa Timur adalah (1) Jaringan kampus perlu dikembangkan mulai dari Regional, Nasional, dan bahkan Internasional. (2) Calon mahasiswa baru, calon mitra, atau kolega dari luar kota, luar daerah atau bahkan luar negeri tentunya memiliki rasa ingin tahu tentang deskripsi kampus yang akan dipilih.\r\n\r\n(3) Jarak yang sejalan dengan biaya merupakan kendala untuk mewujudkan perjalanan ke Kampus. (4) Tur Kampus Virtual adalah solusi di era milenial seperti saat ini untuk memberikan pengalaman nyata dan kesan yang lebih dalam bagi pihak-pihak tersebut daripada hanya membaca data dan foto statis di halaman web.\r\n\r\n“Dengan demikian penelitian ini bertujuan untuk merancang dan membangun Aplikasi Penjelajahan Kampus Virtual (Jejakatua) sebagai Media Promosi di Era Milenial di Universitas Pembangunan Nasional “Veteran” Jawa Timur, dengan menggunakan gambar panorama yang disesuaikan sehingga pengguna mendapatkan pengalaman yang lebih nyata di Universitas Pembangunan Nasional ” Veteran “Jawa Timur online dan terasa realistis” kata Bapak Tri Lathif Mardi S selaku partner dalam penelitian ini.\r\n\r\nUntuk JEJAKATUA bisa di akses pada link berikut ini : https://www.upnjatim.ac.id/vtour/', '2021-01-29 02:16:09', '2021-01-29 02:16:09', '0000-00-00 00:00:00'),
(13, 'Dosen SI sabet Best Paper di Seminar Nasional ReTII-14', 'berita3.jpeg', 'ReTII dari kepanjangan Rekayasa Teknologi Industri dan Informasi. Seminar Nasional ReTII ke 14 yang diselenggarakan oleh Institut Teknologi Nasional Yogyakarta (ITNY). Turut hadir sejumlah Dosen program Studi Sistem Informasi sebagai pemakalah.\r\n\r\nSeminar Nasional yang mengangkat tema Revolusi Industri 4.0 : Peluang dan Tantangan Terkini bagi Technopreneur yang langsung disampaikan oleh Senior Vice President (Strategi Management) PT. Timah tbk, Ria Wardhani Pawan.\r\n\r\nPada Seminar Nasional tersebut Bapak Prisa Marga Kusumantara, S.Kom.M.Cs mendapatkan penghargaan sebagai Best Paper dengan judul Sistem Pendukung Keputusan Penentuan Profesi Linier Untuk Lulusan Program Studi Sistem Informasi Dengan Metode SAW . Sebuah prestasi yang membanggakan untuk program studi dan kampus UPN Veteran Jawa Timur secara umum.', '2021-01-29 02:17:20', '2021-01-29 02:17:20', '0000-00-00 00:00:00'),
(14, 'Alumni “Sambang” Kampus tularkan Semangat & Energi Positif', 'berita4.jpeg', 'Sejumlah Alumni mahasiswa Sistem Informasi kembali ke kampus UPN Veteran Jawa Timur. Kembalinya para alumni ini dengan suasana yang berbeda tentunya. Sejumlah alumni memberikan semangat dan energi baru kepada mahasiswa semester 1 prodi Sistem Informasi.\r\n\r\nBeberapa alumni sekarang sudah sukses memasuki dunia kerja, ada yang berkarir sebagai Dosen, sebagai sekretaris desa, staff IT di pemerintah kota Surabaya dan perusahaan besar yang bergerak dalam bidang IT. “Alhamdulillah, semoga ilmu yang dipelajari selama dikampus bermanfaat dan menjadi bekal untuk kembali ke masyarakat”, tegas ketua panitia kuliah tamu.\r\n\r\nSejumlah alumni yang datang ke kampus dimanfaatkan oleh Ketua Ikatan Alumni Sistem Informasi untuk mengadakan kongres membahas beberapa agenda yang kedepan lebih berdaya dan mampu memberikan dampak positif, baik untuk lembaga dan tentunya ikasifo sendiri.', '2021-01-29 02:18:20', '2021-01-29 02:18:20', '0000-00-00 00:00:00'),
(15, 'FAMILY GATHERING : KOKOHKAN SILATURAHIM KELUARGA SISTEM INFORMASI', 'berita5.jpeg', 'Mempererat tali silaturahim guna meningkatkan budaya kerja yang berlandaskan semangat kekeluargaan. Itulah tema kegiatan keluarga seluruh karyawan di Program Studi Sistem Informasi UPN Veteran Jawa Timur. “Kita bisa saling mengenalkan anggota keluarga, bisa saling sharing antar keluarga sehingga kedepan lebih semangat lagi dalam bekerja dan berkarya”, jelas ketua Program Studi sekaligus ketua panitia.\r\n\r\nKegiatan yang bertajuk family gathering ini dilaksanakan di Villa Club Bunga Batu selama 2 hari. Banyak kegiatan yang sudah disiapkan oleh panitia, mulai lomba anak-anak, lomba bapak-bapak atau kompetisi antar keluarga. Sejumlah hadiah juga sudah disipkan untuk memberikan apresiasi, khususnya ke anak-anak yang rata-rata masih dibawah 10 tahun. Seluruh peserta merasa senang dan puas dengan adanya program ini, “ya, hitung-hitung sekalian kegiatan dan liburan, apalagi ini sama keluarga” ungkap salah satu peserta.\r\n\r\nBudaya untuk bisa melibatkan keluarga dan mengenalkan antar anggota keluarga dilingkungan kita bekerja menambah nilai positif bagi karyawan. “Budaya ini harus selalu ada ditahun-tahun berikutnya lho pak ….” ungkap salah satu peserta dengan semangatnya. ', '2021-01-29 09:37:22', '2021-01-29 09:37:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
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
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`kode_loker`, `judul_loker`, `foto_loker`, `isi_loker`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lowongan Kerja Programmer', 'programmer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Lowongan Kerja Programmer', 'programmer.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'LOWONGAN UI/UX Designer', 'nusantech.jpg', 'Nusantech (PT Solusi Teknologi Nusantara) merupakan perusahaan yang bergerak di bidang jasa pengembangan software berbasis web dan mobile dengan lokasi kantor di Jakarta.  \r\nSelain itu, Nusantech juga mengembangkan berbagai produk berbasis teknologi seperti Mesabot.com, ERP untuk hotel, sistem ujian berbasis komputer dan sistem absensi yang telah teruji dan digunakan secara luas.\r\nNusantech menyasar pasar global maupun nasional dengan klien yang berasal dari pemerintahan maupun swasta.\r\nNusantech adalah anak perusahaan dari Nusa Group dengan cakupan bisnis di bidang teknologi, properti, general trading dan manajemen hotel.\r\nSejak berdiri pada Februari 2015, Nusantech telah berkembang dengan jumlah tim sebanyak 14 orang. Kami berusaha menciptakan lingkungan kerja yang nyaman dan kekeluargaan untuk memudahkan komunikasi antar setiap anggota tim dalam berkoordinasi menyelesaikan pekerjaan.\r\nKirim portofolio dan surat lamaran ke hello@nusantech.co', '2021-02-01 09:34:31', '2021-02-01 09:34:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`kode_berita`);

--
-- Indeks untuk tabel `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`kode_loker`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `kode_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `loker`
--
ALTER TABLE `loker`
  MODIFY `kode_loker` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
