-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2024 at 03:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poliklinik_bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_poli`
--

CREATE TABLE `daftar_poli` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pasien` int(11) UNSIGNED NOT NULL,
  `id_jadwal` int(11) UNSIGNED NOT NULL,
  `keluhan` text NOT NULL,
  `no_antrian` int(10) UNSIGNED NOT NULL,
  `status_periksa` enum('0','1') NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_poli`
--

INSERT INTO `daftar_poli` (`id`, `id_pasien`, `id_jadwal`, `keluhan`, `no_antrian`, `status_periksa`, `is_deleted`) VALUES
(3, 10, 6, 'Kepala Cenat Cenut', 1, '1', '0'),
(4, 10, 9, 'bercak pada kulit', 1, '1', '0'),
(5, 10, 8, 'Kaki saya sakit', 1, '1', '0'),
(6, 12, 13, 'Kaki saya kudasan', 1, '1', '1'),
(7, 12, 10, 'Jantung saya berdetak dok', 1, '0', '0'),
(8, 12, 13, 'Mata Saya merah', 2, '1', '0'),
(9, 12, 14, 'Tenggorokan saya serah', 1, '0', '0'),
(10, 12, 13, 'Mata saya cenat cenut', 3, '1', '1'),
(11, 12, 13, 'Mata saya iritasi', 4, '0', '0'),
(12, 20, 13, 'Mata saya merah', 5, '0', '0'),
(13, 20, 13, 'Anak Demam Tinggi Sekali sudah 3 hari', 6, '0', '0'),
(14, 15, 18, 'Mata saya terasa gatal', 1, '1', '0'),
(15, 15, 18, 'Mata saya merah, mungkin iritasi karena debu', 2, '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `detail_periksa`
--

CREATE TABLE `detail_periksa` (
  `id` int(11) NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_periksa`
--

INSERT INTO `detail_periksa` (`id`, `id_periksa`, `id_obat`, `is_deleted`) VALUES
(6, 4, 10, '0'),
(7, 4, 12, '0'),
(8, 5, 12, '0'),
(9, 6, 11, '0'),
(10, 6, 13, '0'),
(11, 7, 10, '0'),
(12, 7, 11, '0'),
(13, 8, 11, '0'),
(14, 8, 15, '0'),
(15, 9, 10, '0'),
(16, 9, 11, '0'),
(17, 10, 10, '0'),
(18, 10, 11, '0'),
(19, 11, 10, '0'),
(20, 11, 11, '0'),
(21, 11, 12, '0');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `password`, `alamat`, `no_hp`, `id_poli`, `is_deleted`) VALUES
(11, 'dr. Aditya Herdiansyah, Sp.A.', '5e571ed80f6c1f87aad9274690fcff23', 'Jalan Banjardowo', '0896266266626622', 10, '0'),
(12, 'dr. Akbar Maulana, Sp.THT.', '337068c6cfae84255431184f19f05b61', 'jalan Sari Asih ', '08299929922', 13, '0'),
(13, 'dr. Aditya Putra Siregar, Sp.PD', 'abb85635b7d4dfdd6462d5e1616c9878', 'Jalan Pattimura', '089781882000', 14, '1'),
(14, 'dr. Aditya Putra, Sp. M', '554fe6ccd84e7d87277a083a08ff2b5b', 'Jalan Melati Baru', '089123455678', 12, '0'),
(15, 'dr. Aditya herdi Putra, Sp. M', 'da064252c40f799b614c969456d9d1d7', 'Jalan Gunung sahari', '0812345679559', 14, '1'),
(16, 'dr. Budi Santoso, S. THT', '297d273e0e124c6ddb837c951ec4863f', 'Jalan Mawar NO 12', '089771627626', 13, '0');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_periksa`
--

CREATE TABLE `jadwal_periksa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `aktif` char(1) NOT NULL DEFAULT 'N',
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_periksa`
--

INSERT INTO `jadwal_periksa` (`id`, `id_dokter`, `hari`, `jam_mulai`, `jam_selesai`, `aktif`, `is_deleted`) VALUES
(6, 11, 'Senin', '08:00:00', '10:00:00', 'N', '1'),
(7, 11, 'Jumat', '15:00:00', '18:00:00', 'N', '1'),
(8, 12, 'Senin', '10:00:00', '12:00:00', 'N', '0'),
(9, 13, 'Senin', '12:00:00', '15:00:00', 'N', '0'),
(10, 13, 'Kamis', '18:00:00', '02:00:00', 'Y', '0'),
(11, 12, 'Jumat', '16:00:00', '19:00:00', 'Y', '0'),
(12, 14, 'Senin', '09:00:00', '11:00:00', 'N', '0'),
(13, 14, 'Selasa', '13:00:00', '16:00:00', 'Y', '0'),
(14, 16, 'Senin', '14:00:00', '16:00:00', 'Y', '0'),
(15, 14, 'Rabu', '13:00:00', '18:00:00', 'N', '0'),
(16, 11, 'Rabu', '15:00:00', '17:00:00', 'N', '1'),
(17, 16, 'Sabtu', '09:00:00', '12:00:00', 'N', '0'),
(18, 15, 'Kamis', '12:00:00', '15:00:00', 'Y', '0'),
(19, 14, 'Jumat', '12:00:00', '14:00:00', 'N', '0'),
(20, 14, 'Selasa', '14:00:00', '16:00:00', 'N', '0'),
(21, 11, 'Kamis', '10:00:00', '14:00:00', 'Y', '0');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `kemasan` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `kemasan`, `harga`, `is_deleted`) VALUES
(10, 'Obat A', 'Botol', 12000, '0'),
(11, 'Obat B', 'Tablet', 9000, '1'),
(12, 'Obat abit', 'Kapsul', 17000, '1'),
(13, 'Obat Diare', 'Kapsul', 15000, '0'),
(14, 'Obat Kutil', 'Tablet', 12000, '0'),
(15, 'Obat Pusing', 'Kapsul', 11000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_ktp` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_rm` varchar(25) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `password`, `alamat`, `no_ktp`, `no_hp`, `no_rm`, `is_deleted`) VALUES
(10, 'Adit', 'e664136953df5e3081bfcaa99ad42e0e', 'Jalan Rambutan', '3371882882999288', '089888881828', '202412-001', '0'),
(12, 'aditya', 'b9814bdf1ad6d85b997b317987862659', 'Jalan Melati', '1828828828828', '089616861777', '202412-002', '1'),
(13, 'Herdiansyah Putra', 'b9814bdf1ad6d85b997b317987862659', 'Jalan Sompok Raya', '337481268172222', '0821618267712', '202412-003', '0'),
(14, 'Aditya', '1c96969008830922fb5a0b7ef453098c', 'Jalan Anggrek', '3374123123123123', '08971777177111', '202412-004', '1'),
(15, 'Aditya Herdiansyah Putra', 'b9814bdf1ad6d85b997b317987862659', 'Jalan Hati hati', '337498182828818', '089717727727', '202412-005', '0'),
(16, 'Jhony Suhendar', '305a0acc6cb2226c9bba3da3f28e429f', 'Jalan Mekarsari No 10', '3374010010011111', '0897172772712', '202412-006', '0'),
(17, 'Aditya Herdiansyah Putra', '8b019af0a1de935cc5e76d804967d51a', 'Jalan Anggraini', '337412345676542', '08966676771', '202412-007', '0'),
(18, 'Dwi Prakoso', 'c096705ef10e3b1986fcbabdd01cd7e1', 'Jalan Merpati Putih', '337498918282822', '087216515222', '202412-008', '0'),
(19, 'Jhony', '305a0acc6cb2226c9bba3da3f28e429f', 'Jalan Merdeka', '33747612676622', '089443152551', '202412-009', '0'),
(20, 'Aditya Putra', 'b9814bdf1ad6d85b997b317987862659', 'Jalan Mawar', '3385476212554655', '0896165742952', '202412-010', '0'),
(21, 'Aditya Herdiansyah Putra', 'b9814bdf1ad6d85b997b317987862659', 'Jalan Anggraini Elok', '3337845156551122', '08994465653', '202412-011', '0');

-- --------------------------------------------------------

--
-- Table structure for table `periksa`
--

CREATE TABLE `periksa` (
  `id` int(11) NOT NULL,
  `id_daftar_poli` int(11) UNSIGNED NOT NULL,
  `tgl_periksa` datetime NOT NULL,
  `catatan` text NOT NULL,
  `biaya_periksa` int(11) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periksa`
--

INSERT INTO `periksa` (`id`, `id_daftar_poli`, `tgl_periksa`, `catatan`, `biaya_periksa`, `is_deleted`) VALUES
(4, 3, '2024-12-10 16:12:00', 'cek cek', 176000, '0'),
(5, 4, '2024-12-19 18:48:00', 'Semoga Cepat pulih\r\n', 172000, '0'),
(6, 5, '2024-01-10 19:05:00', 'semoga lekas sembuh', 178000, '0'),
(7, 6, '2024-12-23 18:34:00', 'Minum obat 3x1', 171000, '0'),
(8, 8, '2024-12-24 00:00:00', 'Minum setelah makan', 170000, '0'),
(9, 10, '2024-12-24 00:10:00', 'Mata saya minus 2', 171000, '0'),
(10, 14, '2024-12-27 04:42:00', 'Teteskan obat cair sebelum tidur dan setelah mandi\r\n', 171000, '0'),
(11, 15, '2024-12-27 04:55:00', 'Berikan obat tetes setiap malam dan minum obat setelah makan', 188000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`, `keterangan`, `is_deleted`) VALUES
(10, 'Poli cek cek', 'ini adalah deskripsi poli cek cek', '0'),
(11, 'Poli Mental', 'Poli mental mengangani masalah mental pada seseorang', '1'),
(12, 'Poli Mata', 'Poli mata memberikan pelayanan pada kesehatan mata anda', '0'),
(13, 'Poliklinik THT', 'Poli THT (Telinga Hidung Tenggorokan) membantu pasien dalam menyembuhkan penyakit saluran pernapasan dan pencernaan', '0'),
(14, 'Poli Jantung', 'Poli Jantung adalah ....', '1'),
(15, 'Poli Anak', 'Poli anak adalah poli yang membantu masalah kesehatan anak', '0'),
(16, 'Poli Kesehatan Mental', 'Kesehatan Mental itu sangat penting', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_daftarPoli_jadwal` (`id_jadwal`),
  ADD KEY `fk_daftarPoli_pasien` (`id_pasien`);

--
-- Indexes for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detailPeriksa_periksa` (`id_periksa`),
  ADD KEY `fk_detailPeriksa_obat` (`id_obat`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dokter_poli` (`id_poli`);

--
-- Indexes for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jadwal_dokter` (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_periksa_daftarPoli` (`id_daftar_poli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_poli`
--
ALTER TABLE `daftar_poli`
  ADD CONSTRAINT `fk_daftarPoli_jadwal` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal_periksa` (`id`),
  ADD CONSTRAINT `fk_daftarPoli_pasien` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id`);

--
-- Constraints for table `detail_periksa`
--
ALTER TABLE `detail_periksa`
  ADD CONSTRAINT `fk_detailPeriksa_obat` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `fk_detailPeriksa_periksa` FOREIGN KEY (`id_periksa`) REFERENCES `periksa` (`id`);

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `fk_dokter_poli` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id`);

--
-- Constraints for table `jadwal_periksa`
--
ALTER TABLE `jadwal_periksa`
  ADD CONSTRAINT `fk_jadwal_dokter` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id`);

--
-- Constraints for table `periksa`
--
ALTER TABLE `periksa`
  ADD CONSTRAINT `fk_periksa_daftarPoli` FOREIGN KEY (`id_daftar_poli`) REFERENCES `daftar_poli` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
