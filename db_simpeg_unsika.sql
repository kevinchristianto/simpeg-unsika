-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 07:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simpeg_unsika`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_eselon`
--

CREATE TABLE `tbl_eselon` (
  `id_eselon` int(2) NOT NULL,
  `nama_eselon` varchar(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_golongan`
--

CREATE TABLE `tbl_golongan` (
  `golongan` varchar(5) NOT NULL,
  `pangkat` varchar(36) NOT NULL,
  `standar_poin` int(3) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_golongan`
--

INSERT INTO `tbl_golongan` (`golongan`, `pangkat`, `standar_poin`, `created_at`, `updated_at`) VALUES
('I/a', 'Juru Muda', 0, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('I/b', 'Juru Muda Tingkat 1', 50, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('I/c', 'Juru', 100, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('I/d', 'Juru Tingkat I', 150, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('II/a', 'Pengatur Muda', 200, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('II/b', 'Pengatur Muda Tingkat I', 250, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('II/c', 'Pengatur', 300, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('II/d', 'Pengatur Tingkat I', 350, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('III/a', 'Penata Muda', 400, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('III/b', 'Penata Muda Tingkat I', 450, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('III/c', 'Penata', 500, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('III/d', 'Penata Tingkat I', 550, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('IV/a', 'Pembina', 600, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('IV/b', 'Pembina Tingkat I', 650, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('IV/c', 'Pembina Utama Muda', 700, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('IV/d', 'Pembina Utama Madya', 750, '2020-11-13 01:00:12', '2020-11-13 01:00:12'),
('IV/e', 'Pembina Utama', 800, '2020-11-13 01:00:12', '2020-11-13 01:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan_fungsional`
--

CREATE TABLE `tbl_jabatan_fungsional` (
  `id` varchar(4) NOT NULL,
  `nama_jabatan_fungsional` varchar(24) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan_fungsional`
--

INSERT INTO `tbl_jabatan_fungsional` (`id`, `nama_jabatan_fungsional`, `keterangan`, `created_at`, `updated_at`) VALUES
('AAHL', 'Asisten Ahli', NULL, '2020-11-13 00:20:35', '2020-11-13 00:20:35'),
('GRBR', 'Guru Besar', NULL, '2020-11-13 00:20:35', '2020-11-13 00:20:35'),
('LKPL', 'Lektor Kepala', NULL, '2020-11-13 00:20:35', '2020-11-13 00:20:35'),
('LKTR', 'Lektor', NULL, '2020-11-13 00:20:35', '2020-11-13 00:20:35'),
('TPJR', 'Tenaga Pengajar', NULL, '2020-11-13 00:20:35', '2020-11-13 00:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jabatan_pegawai`
--

CREATE TABLE `tbl_jabatan_pegawai` (
  `id` varchar(4) NOT NULL,
  `nama_jabatan` varchar(24) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jabatan_pegawai`
--

INSERT INTO `tbl_jabatan_pegawai` (`id`, `nama_jabatan`, `keterangan`, `created_at`, `updated_at`) VALUES
('DKAN', 'Dekan', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('DKTR', 'Dokter', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('DOSN', 'Dosen', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KBAG', 'Kabag', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KBRO', 'Kabiro', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KBSH', 'Kebersihan', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KPRD', 'Kaprodi', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KSBG', 'Kasubag', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('KTRK', 'Kontrak', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('LBRN', 'Laboran', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('PNJG', 'Penjaga', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('RKTR', 'Rektor', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('STAF', 'Staff', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('STPM', 'Satpam', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45'),
('SUPR', 'Supir', NULL, '2020-11-13 00:20:45', '2020-11-13 00:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_pegawai`
--

CREATE TABLE `tbl_jenis_pegawai` (
  `id` varchar(4) NOT NULL,
  `nama_jenis_pegawai` varchar(24) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_pegawai`
--

INSERT INTO `tbl_jenis_pegawai` (`id`, `nama_jenis_pegawai`, `keterangan`, `created_at`, `updated_at`) VALUES
('DKAN', 'Dekan', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('DKTR', 'Dokter', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('DOSN', 'Dosen', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('DSNN', 'Dosen NIDK', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('DSNT', 'Dosen Tetap', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('KBRO', 'Kabiro', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('KBSH', 'Kebersihan', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('KELR', 'Keluar', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('KPRD', 'Kaprodi', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('KTRK', 'Kontrak', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('LBRN', 'Laboran', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('MNGL', 'Meninggal', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('OPTR', 'Operator', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('PLSN', 'Pelaksana', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('PNJG', 'Penjaga', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('PNSN', 'Pensiun', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('RKTR', 'Rektor', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('STAF', 'Staff', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('STPM', 'Satpam', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('STRK', 'Struktural', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('SUPR', 'Supir', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('TNDK', 'Tenaga Pendidik', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06'),
('TNGU', 'Tenaga Umum', NULL, '2020-11-13 00:21:06', '2020-11-13 00:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_aktif`
--

CREATE TABLE `tbl_status_aktif` (
  `id` char(1) NOT NULL,
  `status_aktif` varchar(24) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_aktif`
--

INSERT INTO `tbl_status_aktif` (`id`, `status_aktif`, `keterangan`, `created_at`, `updated_at`) VALUES
('A', 'Aktif', NULL, '2020-11-13 00:21:20', '2020-11-13 00:21:20'),
('K', 'Keluar', NULL, '2020-11-13 00:21:20', '2020-11-13 00:21:20'),
('M', 'Meninggal', NULL, '2020-11-13 00:21:20', '2020-11-13 00:21:20'),
('P', 'Pensiun', NULL, '2020-11-13 00:21:20', '2020-11-13 00:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_pegawai`
--

CREATE TABLE `tbl_status_pegawai` (
  `id` varchar(4) NOT NULL,
  `nama_status_pegawai` varchar(24) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status_pegawai`
--

INSERT INTO `tbl_status_pegawai` (`id`, `nama_status_pegawai`, `keterangan`, `created_at`, `updated_at`) VALUES
('BDNG', 'Bodong', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('CPNS', 'CPNS', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('KELR', 'Keluar', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('KTRK', 'Kontrak', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('LB', 'LB', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('NIDK', 'NIDK', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('PCBN', 'Percobaan', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('PNS', 'PNS', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('PNSN', 'Pensiunan', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('SKBG', 'SK Bodong', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('SPK', 'SPK', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('STAF', 'Staff', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('STDL', 'Studi Lanjut', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32'),
('TPNP', 'Tetap non PNS', NULL, '2020-11-13 00:21:32', '2020-11-13 00:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit_kerja`
--

CREATE TABLE `tbl_unit_kerja` (
  `id` varchar(4) NOT NULL,
  `nama_unit_kerja` varchar(48) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit_kerja`
--

INSERT INTO `tbl_unit_kerja` (`id`, `nama_unit_kerja`, `keterangan`, `created_at`, `updated_at`) VALUES
('AKDK', 'Akademik', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FAI', 'Fakultas Agama Islam', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FE', 'Fakultas Ekonomi', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FH', 'Fakultas Hukum', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FISI', 'Fakultas Ilmu Sosial dan Ilmu Politik', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FKES', 'Fakulas Ilmu Kesehatan', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FKIP', 'Fakultas Keguruan dan Ilmu Pendidikan', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FPTA', 'Fakultas Pertanian', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FSKM', 'Fakultas Ilmu Komputer', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('FT', 'Fakultas Teknik', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('KEUA', 'Keuangan', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('KNIK', 'Klinik', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('LPPM', 'Lembaga Penelitian dan Pengabdian Masyarakat', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('LPPP', 'Lembaga Pengembangan Pembelajaran dan Penjaminan', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('PPUS', 'Perpustakaan', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('REKT', 'Rektorat', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51'),
('UPTB', 'UPT Bahasa', NULL, '2020-11-13 00:21:51', '2020-11-13 00:21:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_eselon`
--
ALTER TABLE `tbl_eselon`
  ADD PRIMARY KEY (`id_eselon`);

--
-- Indexes for table `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  ADD PRIMARY KEY (`golongan`);

--
-- Indexes for table `tbl_jabatan_fungsional`
--
ALTER TABLE `tbl_jabatan_fungsional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jabatan_pegawai`
--
ALTER TABLE `tbl_jabatan_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_pegawai`
--
ALTER TABLE `tbl_jenis_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_aktif`
--
ALTER TABLE `tbl_status_aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status_pegawai`
--
ALTER TABLE `tbl_status_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit_kerja`
--
ALTER TABLE `tbl_unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_eselon`
--
ALTER TABLE `tbl_eselon`
  MODIFY `id_eselon` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
