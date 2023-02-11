-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 09:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `alamat` text DEFAULT NULL,
  `telephone` varchar(16) NOT NULL,
  `spesialis` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `alamat`, `telephone`, `spesialis`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Johan', 'Jemursari', '0891234465467', 'Gizi', '2020-03-03 16:55:00', '2022-06-02 03:36:48', '0000-00-00 00:00:00', 1, 1, 0),
(3, 'Rifky', 'Waru', '08526454878', 'Gizi', '2022-06-01 09:58:54', NULL, NULL, 1, NULL, NULL),
(4, 'Reita', 'Wonokromo', '0845646464', 'Gizi', '2022-06-01 09:59:19', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_id`
--

CREATE TABLE `group_id` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tanggal_kunjungan` varchar(30) NOT NULL,
  `tanggal_monitoring` varchar(30) NOT NULL,
  `status_monitoring` text NOT NULL,
  `tanggal_rencana` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `pasien_id`, `tanggal_kunjungan`, `tanggal_monitoring`, `status_monitoring`, `tanggal_rencana`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, 3, '2022-06-15', '1', 'sfdgs', '2022-06-30', '2022-06-01 10:14:22', NULL, NULL, 1, NULL, 0),
(3, 3, '2022-05-29', '1', 'zxc', '2022-06-01', '2022-06-01 10:24:48', NULL, NULL, 1, NULL, 0),
(4, 5, '2022-05-29', '1', 'Baik', '2022-06-03', '2022-06-02 03:39:57', NULL, NULL, 1, NULL, 0),
(18, 1, '2023-02-11', '2', 'afa', '2023-02-11', '2023-02-11 09:16:18', NULL, NULL, 5, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 'Neurobion Forte', 'Vitamin B Kompleks', '2020-03-03 16:58:23', '2022-05-18 06:32:05', '0000-00-00 00:00:00', 1, 1, 0),
(3, 'Obeslim', 'Obat Orlistat', '2022-05-18 06:32:28', NULL, NULL, 1, NULL, NULL),
(4, 'Amoxicillin', 'Antibiotik', '2022-06-28 16:45:24', NULL, NULL, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nomor_identitas` varchar(30) DEFAULT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `berat_badan` varchar(30) NOT NULL,
  `tinggi_badan` varchar(30) NOT NULL,
  `lingkar_lengan` varchar(30) NOT NULL,
  `status_awal` varchar(30) NOT NULL,
  `keluhan_awal` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(16) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nomor_identitas`, `nama_pasien`, `tgl_lahir`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `lingkar_lengan`, `status_awal`, `keluhan_awal`, `alamat`, `telephone`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, '3215082394924', 'Siti', '15-Juli-1999', 'p', '50', '164', '30', 'Kurang gizi', 'Kurang gizi', 'Undaan Wetan', '0989333333333', '2020-03-03 16:55:51', '2022-06-11 06:38:10', '0000-00-00 00:00:00', 1, 5, 0),
(2, '3215082394923', 'Rudi', '15-April-2003', 'l', '130', '168', '40', 'Obesitas', 'Obesitas', 'Waru', '08561234567', '2020-03-03 16:56:25', '2022-06-06 09:27:12', '0000-00-00 00:00:00', 1, 1, 0),
(3, '34346362142616', 'Heru', '01-September-1999', 'l', '130', '175', '35', 'Obesitas', 'Obesitas', 'Kedungturi', '0270782077', '2022-06-01 09:17:32', '2022-06-06 09:27:31', '0000-00-00 00:00:00', 1, 1, 0),
(5, '32548749456497', 'Fudin', '1998-08-17', 'l', '55', '175', '40', 'Kurang gizi', 'Kurang Gizi', 'Sidosermo', '084516496489', '2022-06-02 03:39:06', '2023-02-11 09:05:50', NULL, 1, 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `assessment` text NOT NULL,
  `diagnosa` text NOT NULL,
  `intervensi` text NOT NULL,
  `rencana_evaluasi` text NOT NULL,
  `hasil_evaluasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `pasien_id`, `dokter_id`, `assessment`, `diagnosa`, `intervensi`, `rencana_evaluasi`, `hasil_evaluasi`, `tanggal`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(14, 2, 1, 'assafas', 'asfafafa', 'gasgasga', 'afasfafasfasfghfdhg', 'hfgjfjffj', '2022-05-19', '2022-05-19 12:23:17', NULL, NULL, 1, NULL, NULL),
(16, 3, 4, 'qwea', 'asd', 'zxc', 'cvn', 'fgjf', '2022-06-01', '2022-06-01 10:44:18', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rm_obat`
--

CREATE TABLE `rm_obat` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rm_obat`
--

INSERT INTO `rm_obat` (`id`, `obat_id`, `rm_id`) VALUES
(6, 1, 14),
(7, 3, 16);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `tanggal_kunjungan` varchar(30) NOT NULL,
  `tanggal_monitoring` varchar(30) NOT NULL,
  `status_monitoring` text NOT NULL,
  `tanggal_rencana` varchar(30) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `pasien_id`, `tanggal_kunjungan`, `tanggal_monitoring`, `status_monitoring`, `tanggal_rencana`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, 1, '2022-05-29', '2022-05-29', 'assafasa', '2022-05-29', '2020-03-03 16:57:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(5, 1, '2022-05-29', '2022-05-30', '', '2022-06-02', '2022-06-01 08:44:50', NULL, NULL, 1, NULL, 0),
(6, 2, '2022-05-29', '2022-05-31', '', '2022-06-04', '2022-06-01 08:47:33', NULL, NULL, 1, NULL, 0),
(7, 2, '2022-05-29', '2022-05-31', 'frysaehese', '2022-06-07', '2022-06-01 09:03:41', NULL, NULL, 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `last_login`, `created_at`) VALUES
(1, 1, 'admin', '$2y$10$8DltCLYI6oYQP4UZBo4WruiqSUXxxq1I8Rqs1523kXNi6xTtusKUu', '0000-00-00 00:00:00', '2020-03-03 16:30:35'),
(4, 2, 'yoga', '$2y$10$niEuouM.64con8KAeTbnKetZXIEMbJmytUZcqqy9YhZwHffEfr51i', '0000-00-00 00:00:00', '2022-06-10 16:10:42'),
(5, 1, 'dokter', '$2y$10$ajAlERqmTS.Ro9I.Ku/wne1un3ZHjJkNIu7.9n9JS8hY5WvNlzuvW', '0000-00-00 00:00:00', '2022-06-11 05:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `group_id`
--
ALTER TABLE `group_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`);

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
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indexes for table `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_id` (`obat_id`),
  ADD KEY `rm_id` (`rm_id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `group_id`
--
ALTER TABLE `group_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rm_obat`
--
ALTER TABLE `rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`id`),
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`);

--
-- Constraints for table `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD CONSTRAINT `rm_obat_ibfk_1` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`id`),
  ADD CONSTRAINT `rm_obat_ibfk_2` FOREIGN KEY (`rm_id`) REFERENCES `rekam_medis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
