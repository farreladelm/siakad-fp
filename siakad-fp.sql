-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 07:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad-fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `akademik_jadwal_kuliah`
--

CREATE TABLE `akademik_jadwal_kuliah` (
  `jadwal_id` int(11) NOT NULL,
  `tahun_akademik_id` int(11) NOT NULL,
  `konsentrasi_id` int(11) NOT NULL,
  `makul_id` int(11) NOT NULL,
  `hari_id` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `jam_mulai` varchar(9) NOT NULL,
  `jam_selesai` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_jadwal_kuliah`
--

INSERT INTO `akademik_jadwal_kuliah` (`jadwal_id`, `tahun_akademik_id`, `konsentrasi_id`, `makul_id`, `hari_id`, `ruangan_id`, `dosen_id`, `semester`, `jam_mulai`, `jam_selesai`) VALUES
(73, 1, 3, 1, 3, 5, 11, 1, '08:00', '11:20'),
(74, 1, 3, 2, 1, 5, 25, 1, '11:21', '14:41'),
(75, 1, 3, 3, 3, 0, 19, 1, '08:00', '11:20'),
(76, 1, 3, 4, 1, 1, 17, 1, '13:00', '16:20'),
(79, 1, 3, 7, 3, 0, 8, 2, '16:00', '18:00'),
(81, 1, 3, 9, 0, 0, 8, 2, '', ''),
(82, 1, 3, 10, 0, 0, 8, 2, '', ''),
(83, 1, 3, 11, 0, 0, 8, 2, '', ''),
(84, 1, 3, 12, 0, 0, 8, 2, '', ''),
(85, 1, 3, 13, 0, 0, 1, 3, '', ''),
(86, 1, 3, 14, 0, 0, 8, 3, '', ''),
(87, 1, 3, 15, 0, 0, 18, 3, '', ''),
(88, 1, 3, 16, 0, 0, 26, 3, '', ''),
(89, 1, 3, 17, 0, 0, 21, 3, '', ''),
(90, 1, 3, 18, 0, 0, 18, 3, '', ''),
(91, 1, 3, 19, 0, 0, 8, 4, '', ''),
(92, 1, 3, 20, 0, 0, 8, 4, '', ''),
(93, 1, 3, 21, 0, 0, 8, 4, '', ''),
(94, 1, 3, 22, 0, 0, 8, 4, '', ''),
(95, 1, 3, 23, 0, 0, 8, 4, '', ''),
(96, 1, 3, 24, 0, 0, 8, 4, '', ''),
(97, 1, 3, 25, 0, 0, 8, 5, '', ''),
(98, 1, 3, 26, 0, 0, 8, 5, '', ''),
(99, 1, 3, 27, 0, 0, 8, 5, '', ''),
(100, 1, 3, 28, 0, 0, 8, 5, '', ''),
(101, 1, 3, 29, 0, 0, 8, 5, '', ''),
(102, 1, 3, 30, 0, 0, 8, 5, '', ''),
(103, 1, 3, 31, 0, 0, 8, 6, '', ''),
(104, 1, 3, 32, 0, 0, 8, 6, '', ''),
(105, 1, 3, 33, 0, 0, 8, 6, '', ''),
(106, 1, 3, 34, 0, 0, 8, 6, '', ''),
(107, 1, 3, 35, 0, 0, 8, 6, '', ''),
(108, 1, 3, 36, 0, 0, 8, 6, '', ''),
(109, 10, 3, 2, 0, 0, 8, 1, '', ''),
(110, 10, 3, 3, 0, 0, 8, 1, '', ''),
(111, 10, 3, 4, 0, 0, 8, 1, '', ''),
(112, 10, 3, 5, 0, 0, 8, 1, '', ''),
(113, 10, 3, 6, 0, 0, 8, 1, '', ''),
(114, 10, 3, 13, 0, 0, 8, 3, '', ''),
(115, 10, 3, 14, 0, 0, 8, 3, '', ''),
(116, 10, 3, 15, 0, 0, 8, 3, '', ''),
(117, 10, 3, 16, 0, 0, 8, 3, '', ''),
(118, 10, 3, 17, 0, 0, 8, 3, '', ''),
(119, 10, 3, 18, 0, 0, 8, 3, '', ''),
(120, 10, 3, 25, 0, 0, 8, 5, '', ''),
(121, 10, 3, 26, 0, 0, 8, 5, '', ''),
(122, 10, 3, 27, 0, 0, 8, 5, '', ''),
(123, 10, 3, 28, 0, 0, 8, 5, '', ''),
(124, 10, 3, 29, 0, 0, 8, 5, '', ''),
(125, 10, 3, 30, 0, 0, 8, 5, '', ''),
(126, 10, 3, 37, 0, 0, 8, 7, '', ''),
(127, 10, 3, 38, 0, 0, 8, 7, '', ''),
(128, 10, 3, 39, 0, 0, 8, 7, '', ''),
(129, 10, 3, 40, 0, 0, 8, 7, '', ''),
(130, 10, 3, 41, 0, 0, 8, 7, '', ''),
(131, 10, 3, 42, 0, 0, 8, 7, '', ''),
(132, 1, 3, 1, 1, 4, 1, 1, '12:00', '15:00'),
(133, 10, 3, 6, 4, 0, 8, 4, '13:00', '15:30');

-- --------------------------------------------------------

--
-- Table structure for table `akademik_khs`
--

CREATE TABLE `akademik_khs` (
  `khs_id` int(11) NOT NULL,
  `krs_id` int(11) NOT NULL,
  `mutu` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `grade` varchar(1) NOT NULL,
  `confirm` int(11) NOT NULL COMMENT '1=ya 2=tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_khs`
--

INSERT INTO `akademik_khs` (`khs_id`, `krs_id`, `mutu`, `kehadiran`, `tugas`, `grade`, `confirm`) VALUES
(1, 1, 80, 80, 80, 'A', 1),
(2, 2, 0, 0, 0, '', 2),
(3, 3, 0, 0, 0, '', 2),
(4, 4, 0, 0, 0, '', 2),
(5, 5, 0, 0, 0, '', 2),
(6, 6, 0, 0, 0, '', 2),
(7, 7, 0, 0, 0, '', 1),
(8, 8, 0, 0, 0, '', 2),
(9, 9, 0, 0, 0, '', 2),
(10, 10, 0, 0, 0, '', 2),
(11, 11, 0, 0, 0, '', 2),
(12, 12, 0, 0, 0, '', 2),
(13, 13, 0, 0, 0, '', 2),
(14, 14, 0, 0, 0, '', 2),
(15, 15, 0, 0, 0, '', 2),
(16, 16, 0, 0, 0, '', 2),
(17, 17, 0, 0, 0, '', 2),
(18, 18, 0, 0, 0, '', 2),
(21, 21, 0, 0, 0, '', 2),
(22, 22, 0, 0, 0, '', 2),
(23, 23, 0, 0, 0, '', 2),
(24, 24, 0, 0, 0, '', 2),
(25, 25, 0, 0, 0, '', 2),
(26, 26, 0, 0, 0, '', 2),
(27, 27, 0, 0, 0, '', 2),
(28, 28, 0, 0, 0, '', 2),
(29, 29, 0, 0, 0, '', 2),
(30, 30, 0, 0, 0, '', 2),
(31, 31, 0, 0, 0, '', 2),
(32, 32, 0, 0, 0, '', 2),
(33, 33, 0, 0, 0, '', 2),
(34, 34, 0, 0, 0, '', 2),
(35, 35, 0, 0, 0, '', 2),
(36, 36, 0, 0, 0, '', 2),
(37, 37, 0, 0, 0, '', 2),
(38, 38, 0, 0, 0, '', 2),
(39, 39, 0, 0, 0, '', 2),
(40, 40, 0, 0, 0, '', 2),
(41, 41, 0, 0, 0, '', 2),
(42, 42, 0, 0, 0, '', 2),
(43, 43, 0, 0, 0, '', 2),
(44, 44, 0, 0, 0, '', 2),
(45, 45, 0, 0, 0, '', 2),
(46, 46, 0, 0, 0, '', 2),
(47, 47, 0, 0, 0, '', 2),
(48, 48, 0, 0, 0, '', 2),
(49, 49, 0, 0, 0, '', 2),
(50, 50, 0, 0, 0, '', 2),
(51, 51, 0, 0, 0, '', 2),
(52, 52, 0, 0, 0, '', 2),
(53, 53, 0, 0, 0, '', 2),
(54, 54, 0, 0, 0, '', 2),
(55, 55, 0, 0, 0, '', 2),
(56, 56, 0, 0, 0, '', 2),
(57, 57, 0, 0, 0, '', 2),
(58, 58, 0, 0, 0, '', 2),
(59, 59, 0, 0, 0, '', 2),
(60, 60, 0, 0, 0, '', 2),
(61, 61, 0, 0, 0, '', 2),
(62, 62, 0, 0, 0, '', 2),
(63, 63, 0, 0, 0, '', 2),
(64, 64, 0, 0, 0, '', 2),
(65, 65, 0, 0, 0, '', 2),
(66, 66, 0, 0, 0, '', 2),
(67, 67, 0, 0, 0, '', 2),
(68, 68, 0, 0, 0, '', 2),
(69, 69, 0, 0, 0, '', 2),
(70, 70, 0, 0, 0, '', 2),
(71, 71, 0, 0, 0, '', 2),
(72, 72, 0, 0, 0, '', 2),
(73, 73, 0, 0, 0, '', 2),
(74, 74, 0, 0, 0, '', 2),
(75, 75, 0, 0, 0, '', 2),
(76, 76, 0, 0, 0, '', 2),
(77, 77, 0, 0, 0, '', 2),
(78, 78, 0, 0, 0, '', 2),
(79, 79, 0, 0, 0, '', 2),
(80, 80, 0, 0, 0, '', 2),
(81, 81, 0, 0, 0, '', 2),
(82, 82, 0, 0, 0, '', 2),
(83, 83, 0, 0, 0, '', 2),
(84, 84, 0, 0, 0, '', 2),
(85, 85, 0, 0, 0, '', 2),
(86, 86, 0, 0, 0, '', 2),
(87, 87, 0, 0, 0, '', 2),
(88, 88, 0, 0, 0, '', 2),
(89, 89, 0, 0, 0, '', 2),
(90, 90, 0, 0, 0, '', 2),
(91, 91, 0, 0, 0, '', 2),
(92, 92, 0, 0, 0, '', 2),
(93, 93, 0, 0, 0, '', 2),
(94, 94, 0, 0, 0, '', 2),
(95, 95, 0, 0, 0, '', 2),
(96, 96, 0, 0, 0, '', 2),
(97, 97, 0, 0, 0, '', 2),
(98, 98, 0, 0, 0, '', 2),
(100, 100, 0, 0, 0, '', 1),
(102, 102, 0, 0, 0, '', 1),
(103, 103, 0, 0, 0, '', 1),
(104, 104, 0, 0, 0, '', 1),
(105, 105, 6, 6, 6, 'D', 2),
(106, 106, 0, 0, 0, '', 2),
(107, 107, 0, 0, 0, '', 2),
(108, 108, 0, 0, 0, '', 2),
(109, 109, 0, 0, 0, '', 2),
(110, 110, 0, 0, 0, '', 2),
(111, 111, 0, 0, 0, '', 2),
(112, 112, 0, 0, 0, '', 2),
(113, 113, 0, 0, 0, '', 2),
(114, 114, 0, 0, 0, '', 2),
(115, 115, 0, 0, 0, '', 2),
(116, 116, 0, 0, 0, '', 2),
(117, 117, 0, 0, 0, '', 2),
(118, 118, 0, 0, 0, '', 2),
(119, 119, 0, 0, 0, '', 2),
(120, 120, 0, 0, 0, '', 2),
(121, 121, 0, 0, 0, '', 2),
(122, 122, 0, 0, 0, '', 2),
(123, 123, 0, 0, 0, '', 1),
(124, 124, 0, 0, 0, '', 2),
(125, 125, 0, 0, 0, '', 2),
(126, 126, 0, 0, 0, '', 2),
(127, 127, 0, 0, 0, '', 2),
(128, 128, 0, 0, 0, '', 2),
(129, 129, 0, 0, 0, '', 2),
(130, 130, 0, 0, 0, '', 2),
(131, 131, 0, 0, 0, '', 2),
(132, 132, 0, 0, 0, '', 2),
(133, 133, 0, 0, 0, '', 2),
(134, 134, 0, 0, 0, '', 2),
(135, 135, 0, 0, 0, '', 2),
(136, 136, 0, 0, 0, '', 2),
(137, 137, 0, 0, 0, '', 2),
(138, 138, 0, 0, 0, '', 2),
(139, 139, 0, 0, 0, '', 2),
(140, 140, 0, 0, 0, '', 2),
(141, 141, 0, 0, 0, '', 2),
(142, 142, 0, 0, 0, '', 2),
(143, 143, 0, 0, 0, '', 2),
(144, 144, 0, 0, 0, '', 2),
(145, 145, 0, 0, 0, '', 2),
(146, 146, 0, 0, 0, '', 2),
(147, 147, 0, 0, 0, '', 2),
(148, 148, 0, 0, 0, '', 2),
(149, 149, 0, 0, 0, '', 2),
(150, 150, 0, 0, 0, '', 2),
(151, 151, 0, 0, 0, '', 2),
(152, 152, 0, 0, 0, '', 2),
(153, 153, 0, 0, 0, '', 2),
(154, 154, 0, 0, 0, '', 2),
(155, 155, 0, 0, 0, '', 2),
(156, 156, 0, 0, 0, '', 2),
(157, 157, 0, 0, 0, '', 2),
(158, 158, 0, 0, 0, '', 2),
(159, 159, 0, 0, 0, '', 2),
(160, 160, 0, 0, 0, '', 2),
(161, 161, 0, 0, 0, '', 2),
(162, 162, 0, 0, 0, '', 2),
(163, 163, 0, 0, 0, '', 2),
(164, 164, 0, 0, 0, '', 2),
(165, 165, 0, 0, 0, '', 2),
(166, 166, 0, 0, 0, '', 2),
(167, 167, 0, 0, 0, '', 2),
(168, 168, 0, 0, 0, '', 2),
(169, 169, 0, 0, 0, '', 2),
(171, 171, 0, 0, 0, '', 2),
(172, 172, 0, 0, 0, '', 2),
(173, 173, 0, 0, 0, '', 2),
(174, 173, 0, 0, 0, '', 2),
(175, 175, 0, 0, 0, '', 2),
(176, 176, 0, 0, 0, '', 2),
(177, 177, 0, 0, 0, '', 2),
(178, 178, 0, 0, 0, '', 2),
(179, 179, 0, 0, 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `akademik_konsentrasi`
--

CREATE TABLE `akademik_konsentrasi` (
  `konsentrasi_id` int(11) NOT NULL,
  `nama_konsentrasi` varchar(100) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `jenjang` varchar(3) NOT NULL COMMENT '1=D1,2=D2,3=D3,4=D4',
  `jml_semester` int(11) NOT NULL,
  `kode_nomor` varchar(20) NOT NULL,
  `gelar` varchar(40) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_konsentrasi`
--

INSERT INTO `akademik_konsentrasi` (`konsentrasi_id`, `nama_konsentrasi`, `ketua`, `jenjang`, `jml_semester`, `kode_nomor`, `gelar`, `prodi_id`) VALUES
(3, 'gizi', 'bukan saya lagi', 'D4', 8, '', 'D4', 2),
(4, 'Informatika', 'Saya', 'S1', 8, '111', 'S1', 1),
(6, 'Sains Data', 'Bukan Saya', 'S1', 8, '', 'S1', 1),
(7, 'Sistem Informasi', 'mungkin saya', 'S1', 8, '', 'S1', 1),
(8, 'Ilmu Komunikasi', 'Mahdiana Zanuba', 'S1', 8, '', 'S1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `akademik_krs`
--

CREATE TABLE `akademik_krs` (
  `krs_id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL COMMENT 'semester mahasiswa waktu pengambilan krs',
  `status_pa` enum('y','n') DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_krs`
--

INSERT INTO `akademik_krs` (`krs_id`, `nim`, `jadwal_id`, `semester`, `status_pa`) VALUES
(1, '209348223', 1, 5, 'n'),
(2, '12039812', 73, 1, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `akademik_prodi`
--

CREATE TABLE `akademik_prodi` (
  `prodi_id` int(11) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `ketua` varchar(70) NOT NULL,
  `no_izin` varchar(40) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=aktif ,2=g aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_prodi`
--

INSERT INTO `akademik_prodi` (`prodi_id`, `nama_prodi`, `ketua`, `no_izin`, `status`) VALUES
(1, 'ILMU KOMPUTER', 'Bukan Saya', '1170/D/T/2023', 1),
(2, 'GIZI', 'sample text', '1169/D/T/2008', 1),
(7, 'KEDOKTERAN', 'Subagyo', '1188/D/T/2023', 1),
(8, 'ILMU SOSIAL DAN POLITIK', 'Mahfud', '1232/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `akademik_registrasi`
--

CREATE TABLE `akademik_registrasi` (
  `registrasi_id` int(11) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal_registrasi` datetime NOT NULL DEFAULT current_timestamp(),
  `tahun_akademik_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_registrasi`
--

INSERT INTO `akademik_registrasi` (`registrasi_id`, `nim`, `tanggal_registrasi`, `tahun_akademik_id`, `semester`) VALUES
(18, 'KA131002', '2014-07-21 08:12:15', 1, 3),
(19, 'KA131003', '2014-07-21 08:12:16', 1, 6),
(20, 'KA131004', '2014-07-21 11:51:59', 1, 3),
(21, 'KA131005', '2014-09-05 17:01:43', 1, 3),
(22, 'ti102134', '2014-09-08 16:33:19', 1, 4),
(23, 'KA131006', '2014-09-08 16:33:35', 1, 4),
(24, 'ti102134', '2014-09-08 17:09:26', 1, 5),
(25, 'KA131002', '2014-09-08 17:12:59', 1, 4),
(26, '1402126', '2018-04-03 21:12:54', 1, 1),
(27, '1402126', '2018-04-04 17:24:58', 1, 2),
(28, '12039812', '0000-00-00 00:00:00', 7, 6),
(29, '3124567543', '2023-06-11 19:52:26', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `akademik_tahun_akademik`
--

CREATE TABLE `akademik_tahun_akademik` (
  `tahun_akademik_id` int(11) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `batas_registrasi` date NOT NULL,
  `status` enum('n','y') NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `akademik_tahun_akademik`
--

INSERT INTO `akademik_tahun_akademik` (`tahun_akademik_id`, `keterangan`, `batas_registrasi`, `status`, `tahun`) VALUES
(1, '20141', '2014-09-06', 'y', 2014),
(7, '20182', '2018-04-07', 'y', 2018),
(10, '20181', '2018-08-08', 'y', 2018),
(13, '20192', '2019-01-09', 'y', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `akademik_waktu_kuliah`
--

CREATE TABLE `akademik_waktu_kuliah` (
  `waktu_id` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `konsentrasi_id` int(2) NOT NULL,
  `angkatan` int(4) NOT NULL COMMENT 'tahun akademik ketika masuk',
  `alamat` text NOT NULL,
  `semester` int(11) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `no_hp_ortu` varchar(12) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `alamat_ibu` text NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `sekolah_nama` varchar(50) NOT NULL,
  `sekolah_telpon` varchar(12) NOT NULL,
  `sekolah_alamat` text NOT NULL,
  `sekolah_jurusan` varchar(80) NOT NULL,
  `sekolah_tahun_lulus` int(4) NOT NULL,
  `kampus_nama` varchar(50) NOT NULL,
  `kampus_telpon` varchar(12) NOT NULL,
  `kampus_alamat` text NOT NULL,
  `kampus_jurusan` varchar(80) NOT NULL,
  `kampus_tahun_lulus` int(4) NOT NULL,
  `institusi_nama` varchar(80) NOT NULL,
  `institusi_telpon` varchar(12) NOT NULL,
  `institusi_alamat` text NOT NULL,
  `instansi_nama` varchar(80) NOT NULL,
  `instansi_telpon` varchar(12) NOT NULL,
  `instansi_alamat` text NOT NULL,
  `instansi_mulai` int(4) NOT NULL,
  `instansi_sampai` int(4) NOT NULL,
  `semester_aktif` int(11) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama`, `konsentrasi_id`, `angkatan`, `alamat`, `semester`, `gender`, `agama`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu`, `nama_ayah`, `no_hp_ortu`, `pekerjaan_ibu`, `pekerjaan_ayah`, `alamat_ayah`, `alamat_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `sekolah_nama`, `sekolah_telpon`, `sekolah_alamat`, `sekolah_jurusan`, `sekolah_tahun_lulus`, `kampus_nama`, `kampus_telpon`, `kampus_alamat`, `kampus_jurusan`, `kampus_tahun_lulus`, `institusi_nama`, `institusi_telpon`, `institusi_alamat`, `instansi_nama`, `instansi_telpon`, `instansi_alamat`, `instansi_mulai`, `instansi_sampai`, `semester_aktif`, `password`) VALUES
(1, '20081010131', 'Dani Kian Fandi W', 1, 2020, 'Banjar Anyar RT 11 RW 02', 6, '1', 'Kristen', 'Sidoarjo', '2002-04-10', 'Windari', 'Cornelius', '083857995972', 'Karyawan Swasta', 'Karyawan Swasta', 'Banjar Anyar RT 11 RW 02', 'Banjar Anyar RT 11 RW 02', 4500000, 4500000, 'SMAN 1 Taman', '0319536265', 'Jl. Jemundo no. 57', 'MIPA', 2020, 'UPN Veteran Jawa Timur', '031599563235', 'Gunung Anyar No.12', 'Informatika', 2024, 'asd', '123', 'asd', 'asd', '123', 'asd', 1234, 4321, 6, '12345'),
(2, 'asd', 'Ayam Geprek', 1, 2019, 'asdasdasdasdas', 6, '2', 'Islam', 'Sidoarjo1', '2420-04-12', 'Windari', 'Cornelius', '083857995972', 'Karyawan Swasta', 'Karyawan Swasta', 'Banjar Anyar RT 11 RW 02', 'Banjar Anyar RT 11 RW 02', 4500000, 4500000, 'SMAN 1 Taman', '0319536265', 'Jl. Jemundo no. 57', 'MIPA', 2020, 'UPN Veteran Jawa Timur', '031599563235', 'Gunung Anyar No.12', 'Informatika', 2024, 'asd', '123', 'asd', 'asd', '123', 'asd', 1234, 4321, 6, 'dani123'),
(5, 'KA131002', 'Etika Cahya Pribadi', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 4, NULL),
(6, 'KA131003', 'Indira Nuaisyah', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 6, NULL),
(7, 'KA131004', 'Irmawati Sipahutar', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 3, NULL),
(8, 'KA131005', 'Lutfhyyah Nadia Zulfikrie', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 3, NULL),
(9, 'KA131006', 'Nabila Ladysthya Taufiq', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 4, NULL),
(10, 'KA131007', 'Tiara Nur Cahya', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 2, NULL),
(14, 'KA131011', 'Nunu Suherna Nusuri', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 2, NULL),
(15, 'KA131012', 'Nurul Rahmatun Putri Rustama', 3, 1, '', 0, 'l', '0', '', '0000-00-00', '', '', '', '0', '0', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', 0, 0, 2, NULL),
(16, '1402126', 'Boy Kurniawan', 3, 3, 'jakarta', 0, '1', '1', 'Jambi', '1995-03-01', '', '', '', '1', '1', '', '', 0, 0, '', '', '', '', 0, '', '', '', '', 0, '0', '', '', '', '', '0', 0, 0, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `makul_kelompok`
--

CREATE TABLE `makul_kelompok` (
  `kelompok_id` int(11) NOT NULL,
  `kode_kelompok` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `makul_kelompok`
--

INSERT INTO `makul_kelompok` (`kelompok_id`, `kode_kelompok`, `nama`) VALUES
(1, 'mpk', 'mata kuliah pengembangan keperibadian'),
(2, 'mkk', 'mata kuliah pengembangan keilmuan dan keterampilan'),
(3, 'mkb', 'mata kuliah keahlian berkarya'),
(4, 'mpb', 'mata kuliah perilaku berkarya'),
(5, 'mbb', 'matakuliah berkehidupan bermasyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `makul_matakuliah`
--

CREATE TABLE `makul_matakuliah` (
  `makul_id` int(11) NOT NULL,
  `kode_makul` varchar(11) NOT NULL,
  `nama_makul` varchar(60) NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(1) NOT NULL,
  `konsentrasi_id` int(3) NOT NULL,
  `kelompok_id` int(1) DEFAULT NULL,
  `aktif` enum('y','n') NOT NULL,
  `jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `makul_matakuliah`
--

INSERT INTO `makul_matakuliah` (`makul_id`, `kode_makul`, `nama_makul`, `sks`, `semester`, `konsentrasi_id`, `kelompok_id`, `aktif`, `jam`) VALUES
(1, 'DTIKB01', 'STRUKTUR DATA', 1, 1, 3, 2, 'y', 1),
(2, 'DTIKB0114', 'KONSEP PEMROGRAMAN', 1, 1, 3, 2, 'y', 1),
(3, 'DTIKB012', 'PRAKTEK KONSEP PEMROGRAMAN', 4, 1, 3, 2, 'y', 4),
(4, 'DTIKB02', 'SISTEM OPERASI 1', 2, 5, 3, 2, 'y', 2),
(5, 'DTIKB03', 'SISTEM OPERASI 2', 4, 1, 3, 2, 'y', 4),
(6, 'DTIKB04', 'PEMROGRAMAN DELPHI', 4, 1, 3, 2, 'y', 4),
(7, 'DTIKB05', 'JARINGAN KOMPUTER 1', 4, 2, 3, 2, 'y', 4),
(8, 'DTIKB06', 'APLIKASI DAN TEKNOLOGI WEB', 4, 2, 3, 2, 'y', 4),
(9, 'DTIKB07', 'KOMUNIKASI DATA', 4, 2, 3, 2, 'y', 4),
(10, 'DTIKB08', 'DESAIN BERBASIS KOMPUTER', 4, 2, 3, 2, 'y', 4),
(11, 'DTIKB09', 'MIKROPROSESOR', 4, 2, 3, 2, 'y', 4),
(12, 'DTIKB10', 'INTERFACING PERIPHERAL KOMPUTER', 4, 2, 3, 2, 'y', 4),
(13, 'DTIKB11', 'ARSITEKTUR KOMPUTER 1', 4, 3, 3, 2, 'y', 4),
(14, 'DTIKB12', 'ARSITEKTUR KOMPUTER 2', 4, 3, 3, 2, 'y', 4),
(15, 'DTIKB13', 'PERALATAN ELEKTRONIKA', 4, 3, 3, 2, 'y', 4),
(16, 'DTIKB14', 'TROUBLESHOOTING', 4, 3, 3, 2, 'y', 4),
(17, 'DTIKB15', 'PEMROGRAMAN BASIS DATA', 4, 3, 3, 2, 'y', 4),
(18, 'DTIKB16', 'SISTEM INFORMASI MANAJEMEN', 4, 3, 3, 2, 'y', 4),
(19, 'DTIKB17', 'PERANCANGAN SISTEM INFORMASI', 4, 4, 3, 2, 'y', 4),
(20, 'DTIKB18', 'PENGOLAHAN CITRA DIGITAL', 4, 4, 3, 2, 'y', 4),
(21, 'DTIKB19', 'RANGKAIAN DIGITAL', 4, 4, 3, 2, 'y', 4),
(22, 'DTIKB20', 'PEMROGRAMAN BAHASA C++', 4, 4, 3, 2, 'y', 4),
(23, 'DTIKB21', 'PEMROGRAMAN VISUAL', 4, 4, 3, 2, 'y', 4),
(24, 'DTIKB22', 'KOMPUTER GRAFIS', 4, 4, 3, 2, 'y', 4),
(25, 'DTIKB23', 'WIRELESS & MOBILE COMM', 4, 5, 3, 2, 'y', 4),
(26, 'DTIKB24', 'REKAYASA PERANGKAT LUNAK', 4, 5, 3, 2, 'y', 4),
(27, 'DTIKB25', 'SISTEM KEAMANAN JARINGAN', 4, 5, 3, 2, 'y', 4),
(28, 'DTIKB26', 'PEMROGRAMAN BERBASIS OBJEK', 4, 5, 3, 2, 'y', 4),
(29, 'DTIKB27', 'ROBOTIK', 4, 5, 3, 2, 'y', 4),
(30, 'DTIKB28', 'SISTEM MULTIMEDIA', 4, 5, 3, 2, 'y', 4),
(31, 'DTIKB29', 'KOMPUTER ANIMASI', 4, 6, 3, 2, 'y', 4),
(32, 'DTIKB30', 'SIMULASI & PEMODELAN', 4, 6, 3, 2, 'y', 4),
(33, 'DTIKB31', 'PENGOLAHAN SINYAL DIGITAL', 4, 6, 3, 2, 'y', 4),
(34, 'DTIKB32', 'KECERDASAN BUATAN', 4, 6, 3, 2, 'y', 4),
(35, 'DTIKB33', 'DATA WAREHOUSE', 4, 6, 3, 2, 'y', 4),
(36, 'DTIKB34', 'JARINGAN KOMPUTER 2', 4, 6, 3, 2, 'y', 4),
(37, 'DTIKB35', 'PRAKTEK BASIS DATA', 4, 7, 3, 2, 'y', 4),
(38, 'DTIKB36', 'PRAKTEK JARINGAN', 4, 7, 3, 2, 'y', 4),
(39, 'DTIKB37', 'PRAKTEK PEMOGRAMAN', 4, 7, 3, 2, 'y', 4),
(40, 'DTIKB38', 'PRAKTEK PEMOGRAMAN WEB', 4, 7, 3, 2, 'y', 4),
(41, 'DTIKB39', 'DATA MINING', 4, 7, 3, 2, 'y', 4),
(42, 'DTIKB40', 'MACHINE LEARNING', 4, 7, 3, 2, 'y', 4),
(43, 'DTIKB41', 'KEAMANAN DATA', 4, 8, 3, 2, 'y', 4),
(44, 'DTIKB42', 'PRAKTEK KEAMANAN DATA', 4, 8, 3, 2, 'y', 4),
(45, 'DTIKB43', 'ISSU PROFESIONAL DAN SOSIAL IT', 4, 8, 3, 2, 'y', 4),
(46, 'DTIKK01', 'MATEMATIKA 1', 4, 8, 3, 2, 'y', 4),
(47, 'DTIKK02', 'MATEMATIKA 2', 4, 8, 3, 2, 'y', 4),
(48, 'DTIKK03', 'STATISTIK & PROBABILITAS', 4, 8, 3, 2, 'y', 4),
(49, 'DTIKK04', 'PERANGKAT LUNAK APLIKASI', 1, 5, 3, 2, 'y', 1),
(50, 'FIK1001', 'DESAIN BASIS DATA', 3, 6, 2, NULL, 'y', 3);

-- --------------------------------------------------------

--
-- Table structure for table `md_angkatan`
--

CREATE TABLE `md_angkatan` (
  `angkatan_id` int(11) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `aktif` varchar(1) NOT NULL COMMENT 'y = aktif dan n = tidak'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `md_angkatan`
--

INSERT INTO `md_angkatan` (`angkatan_id`, `keterangan`, `aktif`) VALUES
(1, '2013-2014', 'n'),
(2, '2014-2015', 'n'),
(3, '2017-2018', 'n'),
(4, '2018-2019', 'n'),
(5, '2019-2020', 'y'),
(6, '2020-2021', 'y'),
(7, '2021-2022', 'y'),
(8, '2022-2023', 'y'),
(9, '2023-2024', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `md_dosen`
--

CREATE TABLE `md_dosen` (
  `dosen_id` int(11) NOT NULL,
  `nama_lengkap` varchar(70) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nip` varchar(22) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('1','2') NOT NULL COMMENT '1=Laki-Laki,2=Perempuan',
  `agama` varchar(30) NOT NULL,
  `status_kawin` int(1) NOT NULL COMMENT '1=kawin ,2=belum kawin',
  `gelar_pendidikan` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `prodi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `md_dosen`
--

INSERT INTO `md_dosen` (`dosen_id`, `nama_lengkap`, `nidn`, `nip`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `status_kawin`, `gelar_pendidikan`, `alamat`, `hp`, `email`, `prodi_id`) VALUES
(0, 'joko', '748343', '196105041987032002', '43434', 'langsa', '2014-03-06', '1', 'Islam', 1, 'sst', 'dsdsd', '081212123454', 'nu@gmail.com', 7),
(6, 'Dr. Ciek Juliati Hisyam, MM.,M.Si', '', '196204121987032001', '', '', '0000-00-00', '1', 'islam', 1, '', '', '089690987654', 'saidatunnafsiah@gmail.com', 1),
(7, 'Dr. Etin Solihatin, M.Pd.', '', '196601011989032003', '', '', '0000-00-00', '1', 'islam', 1, '', '', '089690987654', 'sampleemail@gmail.com', 1),
(8, 'Alex Iskandar, Drs.,M.Pd.', '0423085601', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(11, 'Indra Hermawan, SE.', '0403077902', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(17, 'Anton Gultom, SST.,M.Pd.', '0420075701', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(18, 'Berayan Munthe, MT.', '0426055402', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(19, 'Rahmat Kuswandy, Drs.', '0412034601', '', '', '', '0000-00-00', '1', 'Kristen', 0, '', '', '', '', 1),
(20, 'Chrestian Maxi Adri Mamesah', '0424035101', '', '', '', '0000-00-00', '1', 'Kristen', 0, '', '', '', '', 1),
(21, 'Ahadiat, SST.,M.Pd.', '0423065703', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(22, 'Rahmat Gunawan, SST.,M.Pd.', '0416056602', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(23, 'Hernawati, M.Si.', '0403027206', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(24, 'Darsono, M.T.', '0413016101', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(25, 'Sutandi, M.Pd.', '0402037305', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(26, 'Sueb, Drs.,M.Si.,M.Pd.', '0025035803', '', '', '', '0000-00-00', '1', 'Katolik', 0, '', '', '', '', 1),
(27, 'Theresia Florens Meliala, SST.,M.Pd.', '0419108101', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(28, 'Dini Arianti, ST.', '0401097702', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(29, 'Dadan Saeful Ramdhan, SST', '', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(30, 'Ganar Afin Nendriyawan, SST', '', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(31, 'Dian Rosdiana, SST', '', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(32, 'Riri Damayanti Apnena, SST', '', '', '', '', '0000-00-00', '1', 'islam', 0, '', '', '', '', 1),
(33, 'sample dosen', '2323', '444444', '', 'langsa', '2014-08-23', '1', 'islam', 1, '', 'sample alamat', '085654987654', 'nuris.akbar@gmail.com', 1),
(34, 'boy', '2351', '34523', '', 'sds', '1987-03-01', '1', 'islam', 1, '', 'sg', '0834414', 'boykurniawan123@gmail.com', 1),
(35, 'josi', '124151`', '3662626', '', 'Jambi', '1988-12-31', '1', 'islam', 1, '', 'jambi', '526374305328', 'b23@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `md_nilai_grade`
--

CREATE TABLE `md_nilai_grade` (
  `nilai_id` int(11) NOT NULL,
  `dari` float NOT NULL,
  `sampai` float NOT NULL,
  `grade` varchar(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `md_nilai_grade`
--

INSERT INTO `md_nilai_grade` (`nilai_id`, `dari`, `sampai`, `grade`, `keterangan`) VALUES
(1, 9.5, 10, 'A', ''),
(2, 8.5, 9.4, 'B', ''),
(3, 7.5, 8.4, 'C', ''),
(4, 6, 7.4, 'D', 'perbaikan'),
(5, 0, 5.9, 'E', 'tidak lulus'),
(6, 0, 5, 'F', 'Mengulang');

-- --------------------------------------------------------

--
-- Table structure for table `md_ruangan`
--

CREATE TABLE `md_ruangan` (
  `ruangan_id` int(11) NOT NULL,
  `nama_ruangan` varchar(20) NOT NULL,
  `gedung_id` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `md_ruangan`
--

INSERT INTO `md_ruangan` (`ruangan_id`, `nama_ruangan`, `gedung_id`, `kapasitas`, `keterangan`) VALUES
(0, 'L3 R09', 1, 1234, 'Lab Komputer'),
(1, 'L1.R06', 2, 25, ''),
(2, 'L1.R05', 2, 25, ''),
(3, 'L1.R02', 2, 60, ''),
(4, 'L1.R07', 2, 25, ''),
(5, 'L1.R08', 2, 50, ''),
(6, 'L1.R09', 2, 25, ''),
(7, 'L2.R02', 2, 20, ''),
(8, 'L2.R03', 2, 20, ''),
(9, 'L2.R04', 2, 20, ''),
(10, 'L2.R05', 2, 20, ''),
(11, 'L2.R06', 2, 20, ''),
(12, 'L2.R07', 2, 25, ''),
(13, 'L2.R08', 2, 25, ''),
(14, 'L2.R09', 2, 20, ''),
(15, 'L2.R10', 2, 20, ''),
(16, 'L3.R03', 2, 60, ''),
(17, 'L1.R01', 2, 0, 'lab elektro'),
(18, 'L1.R03-4', 2, 0, 'lab elektro'),
(19, 'L1.R10', 2, 0, 'lab elektro'),
(20, 'L2.R02', 2, 0, 'lab bahasa'),
(21, 'L3.R02', 2, 0, 'lab jaringan'),
(22, 'L3.R05', 2, 0, 'lab dasar'),
(23, 'L3.R06', 2, 0, 'lab AK'),
(24, 'L3.R07', 2, 0, 'lab multimedia'),
(25, 'L2.R03', 2, 25, ''),
(26, 'L3.R01', 2, 30, ''),
(27, 'ruangan test', 2, 45, 'sampe'),
(28, 'L3 R08', 2, 80, 'Lab Komputer'),
(34, 'Lt. 3 Lab', 2, 50, 'Lab Gizi'),
(35, 'Lt. 4 301', 1, 123, 'Ruangan Kelas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(216) NOT NULL,
  `level` int(11) NOT NULL,
  `keterangan` varchar(216) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `nama`, `password`, `level`, `keterangan`, `last_login`, `created_at`) VALUES
(4, 'farreladelm', 'Farrel Adel Mohammad', '$2y$10$zVH6CE09gA5WVE.SaIVN7eCOydetn0YwWkUsBEapuYImTno3r8wA6', 1, 'Sains Data', '2023-06-13', '2023-05-29 15:50:38'),
(9, 'micibeh', 'asdfasdffdds', '$2y$10$4wwhYovf7mCWfFc.yiP.1.s1YnSqtnGqef77GRUXLWZdNY4E26Gt2', 2, 'admin 2', NULL, '2023-05-30 16:28:38'),
(10, 'bykox', 'Hayes', '$2y$10$g9XR3//3IQTFW/bmEp1QLuuqn9OpGAJbUoE53vY.mltVl5hvLGu6G', 2, 'Informatika', NULL, '2023-05-30 16:29:27'),
(15, 'ricorih', 'Aurora', '$2y$10$J4.GQHhZpInPJU9hIkcldOMR0UZvTVCqKFLZ0ORo4JOElFLTHQThu', 3, 'Sistem Informasi', NULL, '2023-05-30 17:07:02'),
(17, 'testdata', 'test', '$2y$10$CgxrIJ63mYAFS7HQv886sOs3CJMxd23Z9LTwiJd8Ev5ZClgEG1Epy', 2, NULL, NULL, '2023-06-07 16:04:09'),
(18, 'testdata', 'test', '$2y$10$lyEHx5uJ0NkcqDEzO9T/4O57lWFrY.5VweVVWecNYA3LQRO9R3JRO', 2, NULL, NULL, '2023-06-07 16:04:35'),
(19, 'kibey', 'kibey', '$2y$10$ExHLuGFz20v/IQ9YEtBqNe9JgW47IH6iINAfp5OgedfFl6txQNteG', 2, NULL, NULL, '2023-06-07 16:09:13'),
(20, 'danikian', 'Dani Kian Fandi W', '$2y$10$ZRGKcs.bjQEatzbylH4zce1K.xEAc9NUxQ8nS4mL8Kp423ijWYNk2', 2, NULL, NULL, '2023-06-12 12:44:25'),
(21, 'testuser', 'test user', '$2y$10$V38nhempPHU67BrV2CfaEuJaRZzQw1q6mCUHlrH66CaRivwAjiVXC', 2, NULL, '2023-06-13', '2023-06-13 16:26:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akademik_jadwal_kuliah`
--
ALTER TABLE `akademik_jadwal_kuliah`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `akademik_khs`
--
ALTER TABLE `akademik_khs`
  ADD PRIMARY KEY (`khs_id`);

--
-- Indexes for table `akademik_konsentrasi`
--
ALTER TABLE `akademik_konsentrasi`
  ADD PRIMARY KEY (`konsentrasi_id`);

--
-- Indexes for table `akademik_krs`
--
ALTER TABLE `akademik_krs`
  ADD PRIMARY KEY (`krs_id`);

--
-- Indexes for table `akademik_prodi`
--
ALTER TABLE `akademik_prodi`
  ADD PRIMARY KEY (`prodi_id`);

--
-- Indexes for table `akademik_registrasi`
--
ALTER TABLE `akademik_registrasi`
  ADD PRIMARY KEY (`registrasi_id`);

--
-- Indexes for table `akademik_tahun_akademik`
--
ALTER TABLE `akademik_tahun_akademik`
  ADD PRIMARY KEY (`tahun_akademik_id`);

--
-- Indexes for table `akademik_waktu_kuliah`
--
ALTER TABLE `akademik_waktu_kuliah`
  ADD PRIMARY KEY (`waktu_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `makul_kelompok`
--
ALTER TABLE `makul_kelompok`
  ADD PRIMARY KEY (`kelompok_id`);

--
-- Indexes for table `makul_matakuliah`
--
ALTER TABLE `makul_matakuliah`
  ADD PRIMARY KEY (`makul_id`);

--
-- Indexes for table `md_angkatan`
--
ALTER TABLE `md_angkatan`
  ADD PRIMARY KEY (`angkatan_id`);

--
-- Indexes for table `md_dosen`
--
ALTER TABLE `md_dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `md_nilai_grade`
--
ALTER TABLE `md_nilai_grade`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `md_ruangan`
--
ALTER TABLE `md_ruangan`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akademik_jadwal_kuliah`
--
ALTER TABLE `akademik_jadwal_kuliah`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `akademik_khs`
--
ALTER TABLE `akademik_khs`
  MODIFY `khs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `akademik_konsentrasi`
--
ALTER TABLE `akademik_konsentrasi`
  MODIFY `konsentrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `akademik_krs`
--
ALTER TABLE `akademik_krs`
  MODIFY `krs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `akademik_prodi`
--
ALTER TABLE `akademik_prodi`
  MODIFY `prodi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `akademik_registrasi`
--
ALTER TABLE `akademik_registrasi`
  MODIFY `registrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `akademik_tahun_akademik`
--
ALTER TABLE `akademik_tahun_akademik`
  MODIFY `tahun_akademik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `akademik_waktu_kuliah`
--
ALTER TABLE `akademik_waktu_kuliah`
  MODIFY `waktu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `makul_kelompok`
--
ALTER TABLE `makul_kelompok`
  MODIFY `kelompok_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `makul_matakuliah`
--
ALTER TABLE `makul_matakuliah`
  MODIFY `makul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `md_angkatan`
--
ALTER TABLE `md_angkatan`
  MODIFY `angkatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `md_dosen`
--
ALTER TABLE `md_dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `md_nilai_grade`
--
ALTER TABLE `md_nilai_grade`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `md_ruangan`
--
ALTER TABLE `md_ruangan`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
