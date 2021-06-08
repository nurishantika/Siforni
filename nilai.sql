-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 08:03 PM
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
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alumni` int(255) DEFAULT NULL,
  `kalkulus_1` varchar(2) NOT NULL,
  `prakt_struktur_data` varchar(2) NOT NULL,
  `etika_profesi` varchar(2) NOT NULL,
  `interpersonal_skill` varchar(2) NOT NULL,
  `kewirausahaan` varchar(2) NOT NULL,
  `basis_data` varchar(2) NOT NULL,
  `rekayasa_perangkat_lunak` varchar(2) NOT NULL,
  `akuntansi` varchar(2) NOT NULL,
  `pemrograman_interner_bjava` varchar(2) NOT NULL,
  `jaringan_komputer` varchar(2) NOT NULL,
  `enterprise_res_planning` varchar(2) NOT NULL,
  `anal_desain_berorientasi_o` varchar(2) NOT NULL,
  `metodologi_penelitian` varchar(2) NOT NULL,
  `pengaman_jaringan` varchar(2) NOT NULL,
  `interaksi_manusia_komputer` varchar(2) NOT NULL,
  `komputer_masyarakat` varchar(2) NOT NULL,
  `praktikum_jaringan_komputer` varchar(2) NOT NULL,
  `sistem_berbasis_pengetahuan` varchar(2) NOT NULL,
  `kewarganegaraan` varchar(2) NOT NULL,
  `sistem_pendukung_keputusan` varchar(2) NOT NULL,
  `aljabar_linier_matrik` varchar(2) NOT NULL,
  `analisa_sistem_informasi` varchar(2) NOT NULL,
  `struktur_query_language` varchar(2) NOT NULL,
  `sistem_informasi_akuntansi` varchar(2) NOT NULL,
  `statistik_komputasi` varchar(2) NOT NULL,
  `struktur_data` varchar(2) NOT NULL,
  `sistem_operasi` varchar(2) NOT NULL,
  `manajemen_sains` varchar(2) NOT NULL,
  `database_administrator` varchar(2) NOT NULL,
  `prakt_bahasa_pemrograman` varchar(2) NOT NULL,
  `pengantar_teknologi_informasi` varchar(2) NOT NULL,
  `bahasa_inggris_1` varchar(2) NOT NULL,
  `bahasa_pemrograman` varchar(2) NOT NULL,
  `logika_dan_algoritma` varchar(2) NOT NULL,
  `pengetahuan_bisnis` varchar(2) NOT NULL,
  `sistem_informasi_manajemen` varchar(2) NOT NULL,
  `analisa_proses_bisnis` varchar(2) NOT NULL,
  `agama` varchar(2) NOT NULL,
  `bahasa_inggris_2` varchar(2) NOT NULL,
  `widya_mwat_yasa` varchar(2) NOT NULL,
  `prakt_struktur_query_language` varchar(2) NOT NULL,
  `prakt_pemrograman_si` varchar(2) NOT NULL,
  `supply_chain_manajemen` varchar(2) NOT NULL,
  `data_warehouse_dan_olap` varchar(2) NOT NULL,
  `proyek_pengemb_si` varchar(2) NOT NULL,
  `customer_relationship_manaj` varchar(2) NOT NULL,
  `sistem_informasi_executive` varchar(2) NOT NULL,
  `prakt_anal_desain_b_obyek` varchar(2) NOT NULL,
  `testing_dan_implementasi_sistem` varchar(2) NOT NULL,
  `audit_sistem_informasi` varchar(2) NOT NULL,
  `pemrograman_berorientasi_obyek` varchar(2) NOT NULL,
  `mobile_teknologi` varchar(2) NOT NULL,
  `pendidikan_pancasila` varchar(2) NOT NULL,
  `kecakapan_pribadi` varchar(2) NOT NULL,
  `bahasa_pemrograman_2` varchar(2) NOT NULL,
  `manajemen_sistem_operasi` varchar(2) NOT NULL,
  `desain_dan_manajemen_jaringan` varchar(2) NOT NULL,
  `analisis_desain_terstruktur` varchar(2) NOT NULL,
  `pemrograman_desktop` varchar(2) NOT NULL,
  `pemrograman_web` varchar(2) NOT NULL,
  `keamanan_sistem_informasi` varchar(2) NOT NULL,
  `etika_komputer` varchar(2) NOT NULL,
  `pemrograman_mobile` varchar(2) NOT NULL,
  `tata_kelola_tekn_informasi` varchar(2) NOT NULL,
  `pemrograman_terintegrasi` varchar(2) NOT NULL,
  `sistem_informasi_eksekutif` varchar(2) NOT NULL,
  `sistem_informasi_geografis` varchar(2) NOT NULL,
  `pemodelan_dan_simulasi` varchar(2) NOT NULL,
  `bahasa_indonesia` varchar(2) NOT NULL,
  `bela_negara` varchar(2) NOT NULL,
  `kepemimpinan` varchar(2) NOT NULL,
  `kuliah_kerja_nyata` varchar(2) NOT NULL,
  `praktek_kerja_lapang` varchar(2) NOT NULL,
  `pra_tugas_akhir` varchar(2) NOT NULL,
  `skripsi` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alumni`, `kalkulus_1`, `prakt_struktur_data`, `etika_profesi`, `interpersonal_skill`, `kewirausahaan`, `basis_data`, `rekayasa_perangkat_lunak`, `akuntansi`, `pemrograman_interner_bjava`, `jaringan_komputer`, `enterprise_res_planning`, `anal_desain_berorientasi_o`, `metodologi_penelitian`, `pengaman_jaringan`, `interaksi_manusia_komputer`, `komputer_masyarakat`, `praktikum_jaringan_komputer`, `sistem_berbasis_pengetahuan`, `kewarganegaraan`, `sistem_pendukung_keputusan`, `aljabar_linier_matrik`, `analisa_sistem_informasi`, `struktur_query_language`, `sistem_informasi_akuntansi`, `statistik_komputasi`, `struktur_data`, `sistem_operasi`, `manajemen_sains`, `database_administrator`, `prakt_bahasa_pemrograman`, `pengantar_teknologi_informasi`, `bahasa_inggris_1`, `bahasa_pemrograman`, `logika_dan_algoritma`, `pengetahuan_bisnis`, `sistem_informasi_manajemen`, `analisa_proses_bisnis`, `agama`, `bahasa_inggris_2`, `widya_mwat_yasa`, `prakt_struktur_query_language`, `prakt_pemrograman_si`, `supply_chain_manajemen`, `data_warehouse_dan_olap`, `proyek_pengemb_si`, `customer_relationship_manaj`, `sistem_informasi_executive`, `prakt_anal_desain_b_obyek`, `testing_dan_implementasi_sistem`, `audit_sistem_informasi`, `pemrograman_berorientasi_obyek`, `mobile_teknologi`, `pendidikan_pancasila`, `kecakapan_pribadi`, `bahasa_pemrograman_2`, `manajemen_sistem_operasi`, `desain_dan_manajemen_jaringan`, `analisis_desain_terstruktur`, `pemrograman_desktop`, `pemrograman_web`, `keamanan_sistem_informasi`, `etika_komputer`, `pemrograman_mobile`, `tata_kelola_tekn_informasi`, `pemrograman_terintegrasi`, `sistem_informasi_eksekutif`, `sistem_informasi_geografis`, `pemodelan_dan_simulasi`, `bahasa_indonesia`, `bela_negara`, `kepemimpinan`, `kuliah_kerja_nyata`, `praktek_kerja_lapang`, `pra_tugas_akhir`, `skripsi`) VALUES
(2, 1, 'A', 'B', 'C', 'A-', 'B+', 'C+', 'A', 'B-', 'C-', 'B+', 'B', 'A-', 'A', 'B+', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_alumni` (`id_alumni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`id_alumni`) REFERENCES `alumni` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
