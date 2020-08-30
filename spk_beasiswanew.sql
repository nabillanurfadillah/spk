-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jun 2020 pada 08.52
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_beasiswanew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `beasiswa_id`, `nim`, `nama_alternatif`, `jurusan`, `jk`, `alamat`) VALUES
(36, 2, 201901082, 'Anisa Hidayah', 'D3 Komputerisasi Akuntansi', 'Perempuan', 'Jl. Adhiyaksa No. 90 Purwokerto Selatan'),
(37, 2, 201901087, 'Saniya', 'S1 Desain Komunikasi Visual', 'Laki-laki', 'Jl. Berd No. 83 Ajibarang'),
(38, 1, 201803001, 'Hana Silviana', 'S1 Teknik Informatika', 'Perempuan', 'Jl. Sudagaran No. 87 Banyumas'),
(39, 1, 201802001, 'Erwin Tias', 'D3 Komputerisasi Akuntansi', 'Laki-laki', 'Jl. Atrium No. 76 Kroya'),
(40, 3, 201304098, 'Sarah Faros', 'S1 Teknik Informatika', 'Perempuan', 'Jl. Adira No. 76 Banjarnegara'),
(41, 3, 201305098, 'Adiba Khanza', 'D3 Komputerisasi Akuntansi', 'Perempuan', 'Jl. Suparman No. 76 Cilacap'),
(42, 4, 201807065, 'Silsila', 'D3 Komputerisasi Akuntansi', 'Laki-laki', 'Jl. Amarka No. 34 Banyumas'),
(43, 4, 201701987, 'Wati', 'S1 Sistem Informasi', 'Perempuan', 'Jl. Sumarno No. 89 Banjarnegara'),
(44, 5, 201507087, 'Abidzar', 'D3 Komputerisasi Akuntansi', 'Laki-laki', 'Jl. Pandan No. 67 Klaten'),
(45, 5, 201309076, 'Zivane', 'S1 Sistem Informasi', 'Laki-laki', 'Jl. Amarka No. 34 Kebondalem'),
(46, 6, 20140609, 'Ani', 'D3 Komputerisasi Akuntansi', 'Perempuan', 'Jl. Amarka No. 34 Banyumas'),
(47, 6, 201209709, 'Ahmad', 'S1 Teknik Informatika', 'Laki-laki', 'Kroya'),
(48, 7, 201901001, 'Gery', 'D3 Komputerisasi Akuntansi', 'Laki-laki', 'Jl. Adhiyaksa No. 90 Purwokerto Selatan'),
(49, 7, 201901002, 'Ami', 'S1 Teknik Informatika', 'Perempuan', 'Jl. Adira No. 76 Banjarnegara'),
(51, 1, 201801001, 'Aldoo', 'S1 Sistem Informasi', 'Laki-laki', 'Kroya'),
(52, 1, 201601002, 'Suryo', 'S1 Sistem Informasi', 'Laki-laki', 'Banyumas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id`, `beasiswa_id`, `id_alternatif`, `hasil`) VALUES
(11, 0, 11, 64),
(12, 0, 12, 125),
(24, 0, 24, 70),
(36, 0, 36, 130),
(37, 0, 37, 143.33333333333),
(38, 0, 38, 103.33333333333),
(39, 0, 39, 116.66666666667),
(40, 0, 40, 125),
(41, 0, 41, 150),
(42, 0, 42, 78),
(43, 0, 43, 44.666666666667),
(44, 0, 44, 130),
(45, 0, 45, 150),
(46, 0, 46, 138),
(47, 0, 47, 150),
(48, 0, 48, 150),
(49, 0, 49, 136.66666666667),
(50, 0, 50, 136.66666666667),
(51, 0, 51, 90),
(52, 0, 52, 129.16666666667);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `nilai_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id_hitung`, `id_alternatif`, `id_subkriteria`, `nilai_normalisasi`) VALUES
(51, 11, 80, 0.2),
(52, 11, 82, 0.4),
(53, 11, 89, 0.8),
(54, 11, 93, 0.6),
(55, 11, 96, 0.2),
(56, 12, 77, 0.5),
(57, 12, 85, 1),
(58, 12, 90, 1),
(59, 12, 95, 1),
(60, 12, 100, 1),
(116, 24, 76, 1),
(117, 24, 81, 0.2),
(118, 24, 86, 0.2),
(119, 24, 91, 0.2),
(120, 24, 96, 0.2),
(174, 36, 101, 1),
(175, 36, 106, 0.5),
(176, 36, 111, 1),
(177, 36, 116, 1),
(178, 36, 121, 1),
(179, 37, 101, 1),
(180, 37, 107, 1),
(181, 37, 111, 1),
(182, 37, 116, 1),
(183, 37, 123, 0.33333333333333),
(184, 38, 1, 0.33333333333333),
(185, 38, 6, 1),
(186, 38, 11, 0.33333333333333),
(187, 38, 16, 1),
(188, 38, 21, 1),
(189, 39, 1, 0.33333333333333),
(190, 39, 6, 1),
(191, 39, 13, 1),
(192, 39, 16, 1),
(193, 39, 21, 1),
(194, 40, 51, 0.5),
(195, 40, 56, 1),
(196, 40, 61, 1),
(197, 40, 66, 1),
(198, 40, 71, 1),
(199, 41, 52, 1),
(200, 41, 56, 1),
(201, 41, 61, 1),
(202, 41, 66, 1),
(203, 41, 71, 1),
(204, 42, 76, 1),
(205, 42, 81, 0.2),
(206, 42, 86, 0.2),
(207, 42, 91, 0.2),
(208, 42, 96, 1),
(209, 43, 78, 0.33333333333333),
(210, 43, 81, 0.2),
(211, 43, 86, 0.2),
(212, 43, 91, 0.2),
(213, 43, 96, 1),
(214, 44, 126, 1),
(215, 44, 131, 1),
(216, 44, 136, 0.5),
(217, 44, 141, 1),
(218, 44, 146, 1),
(219, 45, 126, 1),
(220, 45, 131, 1),
(221, 45, 137, 1),
(222, 45, 141, 1),
(223, 45, 146, 1),
(224, 46, 26, 1),
(225, 46, 31, 1),
(226, 46, 36, 1),
(227, 46, 41, 0.4),
(228, 46, 46, 1),
(229, 47, 26, 1),
(230, 47, 31, 1),
(231, 47, 36, 1),
(232, 47, 44, 1),
(233, 47, 46, 1),
(234, 48, 152, 1),
(235, 48, 157, 1),
(236, 48, 162, 1),
(237, 48, 167, 1),
(238, 48, 172, 1),
(239, 49, 152, 1),
(240, 49, 157, 1),
(241, 49, 162, 1),
(242, 49, 169, 0.33333333333333),
(243, 49, 172, 1),
(244, 50, 1, 1),
(245, 50, 6, 1),
(246, 50, 11, 0.33333333333333),
(247, 50, 16, 1),
(248, 50, 21, 1),
(249, 51, 1, 0.33333333333333),
(250, 51, 6, 1),
(251, 51, 13, 1),
(252, 51, 18, 0.33333333333333),
(253, 51, 21, 1),
(254, 52, 3, 1),
(255, 52, 9, 0.25),
(256, 52, 11, 0.33333333333333),
(257, 52, 16, 1),
(258, 52, 21, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(255) NOT NULL,
  `id_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `beasiswa_id`, `nama_kriteria`, `tipe_kriteria`, `id_nilai`) VALUES
(1, 1, 'IPK Terakhir', 'Benefit', 8),
(2, 1, 'Riwayat Bantuan Beasiswa', 'Cost', 6),
(3, 1, 'Keaktifan Organisasi', 'Benefit', 5),
(4, 1, 'Penghasilan Orang Tua', 'Cost', 7),
(5, 1, 'Jumlah Saudara', 'Benefit', 4),
(6, 6, 'Penghasilan Orang Tua', 'Cost', 7),
(7, 6, 'Jumlah Saudara', 'Benefit', 4),
(8, 6, 'Rata-rata Nilai Raport', 'Benefit', 8),
(9, 6, 'Pendidikan Orang Tua', 'Cost', 5),
(10, 6, 'Umur', 'Cost', 6),
(11, 3, 'IPK Terakhir', 'Benefit', 8),
(12, 3, 'Keikutsertaan Organisasi', 'Benefit', 7),
(13, 3, 'Riwayat Beasiswa', 'Cost', 6),
(14, 3, 'Penghasilan Orang Tua', 'Cost', 4),
(15, 3, 'Jumlah Bersaudara', 'Benefit', 5),
(16, 4, 'Penghasilan Orang Tua', 'Cost', 8),
(17, 4, 'Jumlah Saudara', 'Benefit', 7),
(18, 4, 'IPK Terakhir', 'Benefit', 4),
(19, 4, 'Keaktifan Organisasi', 'Benefit', 5),
(20, 4, 'Riwayat Beasiswa', 'Cost', 6),
(21, 2, 'Penghasilan Orang Tua', 'Cost', 8),
(22, 2, 'Jumlah Saudara', 'Benefit', 7),
(23, 2, 'IPK Terakhir', 'Benefit', 4),
(24, 2, 'Keikutsertaan Organisasi', 'Benefit', 5),
(25, 2, 'Riwayat Bantuan Beasiswa', 'Cost', 6),
(26, 5, 'IPK Terakhir', 'Benefit', 4),
(27, 5, 'Penghasilan Orang Tua', 'Cost', 8),
(28, 5, 'Jumlah Saudara', 'Benefit', 7),
(29, 5, 'Keaktifan Organisasi', 'Benefit', 5),
(30, 5, 'Riwayat Beasiswa', 'Cost', 6),
(31, 7, 'Rata-rata Nilai Raport', 'Benefit', 8),
(32, 7, 'Penghasilan Orang Tua', 'Cost', 7),
(33, 7, 'Jumlah Saudara', 'Benefit', 4),
(34, 7, 'Pendidikan Orang Tua', 'Cost', 5),
(35, 7, 'Umur', 'Cost', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `keterangan_nilai` varchar(255) NOT NULL,
  `jumlah_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `keterangan_nilai`, `jumlah_nilai`) VALUES
(4, 'Sedang', 30),
(5, 'Rendah', 20),
(6, 'Sangat Rendah', 10),
(7, 'Tinggi', 40),
(8, 'Sangat Tinggi', 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `nilai_subkriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `beasiswa_id`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(1, 1, 1, '>= 3.50', 20),
(2, 1, 1, '>= 3.65', 40),
(3, 1, 1, '>= 3.75', 60),
(4, 1, 1, '>= 3.85', 80),
(5, 1, 1, '>= 3.95', 100),
(6, 1, 2, 'Belum Pernah Menerima', 20),
(7, 1, 2, 'Pernah Menerima 1 Kali', 40),
(8, 1, 2, 'Pernah Menerima 2 Kali', 60),
(9, 1, 2, 'Pernah Menerima 3 Kali', 80),
(10, 1, 2, 'Pernah Menerima > 3 Kali', 100),
(11, 1, 3, 'Tidak Mengikuti Organisasi', 20),
(12, 1, 3, 'Mengikuti 1 Organisasi', 40),
(13, 1, 3, 'Mengikuti 2 Organisasi', 60),
(14, 1, 3, 'Mengikuti 3 Organisasi', 80),
(15, 1, 3, 'Mengikuti > 3 Organisasi', 100),
(16, 1, 4, '&lt;= Rp 1.000.000', 20),
(17, 1, 4, '&lt;= Rp 1.500.000', 40),
(18, 1, 4, '&lt;= Rp 3.000.000', 60),
(19, 1, 4, '&lt;= Rp 4.500.000', 80),
(20, 1, 4, '> 4.500.000.000', 100),
(21, 1, 5, '0 Saudara', 20),
(22, 1, 5, '1 Saudara', 40),
(23, 1, 5, '2 Saudara', 60),
(24, 1, 5, '3 Saudara', 80),
(25, 1, 5, '> 3 Saudara', 100),
(26, 6, 6, '&lt;= Rp 1.000.000', 20),
(27, 6, 6, '&lt;= Rp 1.500.000', 40),
(28, 6, 6, '&lt;= Rp 2.000.000', 60),
(29, 6, 6, '&lt;= Rp 2.500.000', 80),
(30, 6, 6, '> Rp 3.000.000', 100),
(31, 6, 7, '0 Saudara', 20),
(32, 6, 7, '1 Saudara', 40),
(33, 6, 7, '2 Saudara', 60),
(34, 6, 7, '3 Saudara', 80),
(35, 6, 7, '> 3 Saudara', 100),
(36, 6, 8, '>= 80.00', 20),
(37, 6, 8, '>= 85.00', 40),
(38, 6, 8, '>= 90.00', 60),
(39, 6, 8, '>= 95.00', 80),
(40, 6, 8, '>= 97.50', 100),
(41, 6, 9, 'Sarjana/S1', 100),
(42, 6, 9, 'Diploma III/D3', 80),
(43, 6, 9, 'SMA/Sederajat', 60),
(44, 6, 9, 'SMP/Sederajat', 40),
(45, 6, 9, 'SD/Sederajat', 20),
(46, 6, 10, '21 Tahun', 100),
(47, 6, 10, '20 Tahun', 80),
(48, 6, 10, '19 Tahun', 60),
(49, 6, 10, '18 Tahun', 40),
(50, 6, 10, '17 Tahun', 20),
(51, 3, 11, '>= 3.50', 20),
(52, 3, 11, '>= 3.65', 40),
(53, 3, 11, '>= 3.75', 60),
(54, 3, 11, '>= 3.85', 80),
(55, 3, 11, '>= 3.95', 100),
(56, 3, 12, 'Tidak Mengikuti Organisasi', 20),
(57, 3, 12, 'Mengikuti 1 Organisasi', 40),
(58, 3, 12, 'Mengikuti 2 Organisasi', 60),
(59, 3, 12, 'Mengikuti 3 Organisasi', 80),
(60, 3, 12, 'Mengikuti > 3 Organisasi', 100),
(61, 3, 13, 'Belum Pernah Mendapat Beasiswa', 20),
(62, 3, 13, 'Mendapat 1 Beasiswa', 40),
(63, 3, 13, 'Mendapat 2 Beasiswa', 60),
(64, 3, 13, 'Mendapat 3 Beasiswa', 80),
(65, 3, 13, 'Mendapat > 3 Beasiswa', 100),
(66, 3, 14, '&lt;= Rp 1.000.000', 20),
(67, 3, 14, '&lt;= Rp 1.500.000', 40),
(68, 3, 14, '&lt;= Rp 3.000.000', 60),
(69, 3, 14, '&lt;= Rp 4.500.000', 80),
(70, 3, 14, '> Rp 4.500.000', 100),
(71, 3, 15, '0 Saudara', 20),
(72, 3, 15, '1 Saudara', 40),
(73, 3, 15, '2 Saudara', 60),
(74, 3, 15, '3 Saudara', 80),
(75, 3, 15, '> 3 Saudara', 100),
(76, 4, 16, '&lt;= Rp 1.000.000', 20),
(77, 4, 16, '&lt;= Rp 1.500.000', 40),
(78, 4, 16, '&lt;= Rp 3.000.000', 60),
(79, 4, 16, '&lt;= Rp 4.500.000', 80),
(80, 4, 16, '> Rp 4.500.000', 100),
(81, 4, 17, '0 Saudara', 20),
(82, 4, 17, '1 Saudara', 40),
(83, 4, 17, '2 Saudara', 60),
(84, 4, 17, '3 Saudara', 80),
(85, 4, 17, '> 3 Saudara', 100),
(86, 4, 18, '>= 3.00', 20),
(87, 4, 18, '>= 3.25', 40),
(88, 4, 18, '>= 3.50', 60),
(89, 4, 18, '>= 3.75', 80),
(90, 4, 18, '4.00', 100),
(91, 4, 19, 'Tidak Mengikuti Organisasi', 20),
(92, 4, 19, 'Mengikuti 1 Organisasi', 40),
(93, 4, 19, 'Mengikuti 2 Organisasi', 60),
(94, 4, 19, 'Mengikuti 3 Organisasi', 80),
(95, 4, 19, 'Mengikuti > 3 Organisasi', 100),
(96, 4, 20, 'Belum Pernah Mendapat Beasiswa', 20),
(97, 4, 20, 'Mendapat 1 Beasiswa', 40),
(98, 4, 20, 'Mendapat 2 Beasiswa', 60),
(99, 4, 20, 'Mendapat 3 Beasiswa', 80),
(100, 4, 20, 'Mendapat > 3 Beasiswa', 100),
(101, 2, 21, '&lt;= Rp 1.000.000', 20),
(102, 2, 21, '&lt;= Rp 1.500.000', 40),
(103, 2, 21, '&lt;= Rp 3.000.000', 60),
(104, 2, 21, '&lt;= Rp 4.500.000', 80),
(105, 2, 21, '> Rp 4.500.000', 100),
(106, 2, 22, '0 Saudara', 20),
(107, 2, 22, '1 Saudara', 40),
(108, 2, 22, '2 Saudara', 60),
(109, 2, 22, '3 Saudara', 80),
(110, 2, 22, '> 3 Saudara', 100),
(111, 2, 23, '>= 3.00', 20),
(112, 2, 23, '>= 3.25', 40),
(113, 2, 23, '>= 3.50', 60),
(114, 2, 23, '>= 3.75', 80),
(115, 2, 23, '4.00', 100),
(116, 2, 24, 'Tidak Mengikuti Organisasi', 20),
(117, 2, 24, 'Mengikuti 1 Organisasi', 40),
(118, 2, 24, 'Mengikuti 2 Organisasi', 60),
(119, 2, 24, 'Mengikuti 3 Organisasi', 80),
(120, 2, 24, 'Mengikuti > 3 Organisasi', 100),
(121, 2, 25, 'Belum Pernah Menerima', 20),
(122, 2, 25, 'Pernah Menerima 1 Kali', 40),
(123, 2, 25, 'Pernah Menerima 2 Kali', 60),
(124, 2, 25, 'Pernah Menerima 3 Kali', 80),
(125, 2, 25, 'Pernah Menerima > 3 Kali', 100),
(126, 5, 26, '>= 3.00', 20),
(127, 5, 26, '>= 3.25', 40),
(128, 5, 26, '>= 3.50', 60),
(129, 5, 26, '>= 3.75', 80),
(130, 5, 26, '4.00', 100),
(131, 5, 27, '&lt;= Rp 1.000.000', 20),
(132, 5, 27, '&lt;= Rp 1.500.000', 40),
(133, 5, 27, '&lt;= Rp 3.000.000', 60),
(134, 5, 27, '&lt;= Rp 4.500.000', 80),
(135, 5, 27, '> Rp 4.500.000', 100),
(136, 5, 28, '0 Saudara', 20),
(137, 5, 28, '1 Saudara', 40),
(138, 5, 28, '2 Saudara', 60),
(139, 5, 28, '3 Saudara', 80),
(140, 5, 28, '> 3 Saudara', 100),
(141, 5, 29, 'Tidak Mengikuti Organisasi', 20),
(142, 5, 29, 'Mengikuti 1 Organisasi', 40),
(143, 5, 29, 'Mengikuti 2 Organisasi', 60),
(144, 5, 29, 'Mengikuti > 3 Organisasi', 100),
(145, 5, 29, 'Mengikuti 3 Organisasi', 80),
(146, 5, 30, 'Belum Pernah Mendapat Beasiswa', 20),
(147, 5, 30, 'Mendapat 1 Beasiswa', 40),
(148, 5, 30, 'Mendapat 2 Beasiswa', 60),
(149, 5, 30, 'Mendapat 3 Beasiswa', 80),
(151, 5, 30, 'Mendapat > 3 Beasiswa', 100),
(152, 7, 31, '>= 80.00', 20),
(153, 7, 31, '>= 85.00', 40),
(154, 7, 31, '>= 90.00', 60),
(155, 7, 31, '>= 95.00', 80),
(156, 7, 31, '>= 97.50', 100),
(157, 7, 32, '&lt;= Rp 1.000.000', 20),
(158, 7, 32, '&lt;= Rp 1.500.000', 40),
(159, 7, 32, '&lt;= Rp 2.000.000', 60),
(160, 7, 32, '&lt;= Rp 2.500.000', 80),
(161, 7, 32, '> Rp 3.000.000', 100),
(162, 7, 33, '0 Saudara', 20),
(163, 7, 33, '1 Saudara', 40),
(164, 7, 33, '2 Saudara', 60),
(165, 7, 33, '3 Saudara', 80),
(166, 7, 33, '> 3 Saudara', 100),
(167, 7, 34, 'SD/Sederajat', 20),
(168, 7, 34, 'SMP/Sederajat', 40),
(169, 7, 34, 'SMA/Sederajat', 60),
(170, 7, 34, 'Diploma III/D3', 80),
(171, 7, 34, 'Sarjana/S1', 100),
(172, 7, 35, '17 Tahun', 20),
(173, 7, 35, '18 Tahun', 40),
(174, 7, 35, '19 Tahun', 60),
(175, 7, 35, '20 Tahun', 80),
(176, 7, 35, '21 Tahun', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_arsip`
--

CREATE TABLE `tbl_arsip` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_arsip`
--

INSERT INTO `tbl_arsip` (`id`, `filename`, `created_at`) VALUES
(7, 'Hasil_Akhir_Beasiswa_PPA_(Berprestasi)_Tahun_2020.pdf', '2020-06-30 06:10:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `filename`, `created_at`) VALUES
(7, 'Hasil_Akhir_Beasiswa_Berprestasi_Tahun_2020.pdf', '2020-04-03 05:01:54'),
(11, 'Hasil_Akhir_Beasiswa_Bidik_Misi_Tahun_2020_(1).pdf', '2020-04-03 08:13:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_beasiswa`
--

CREATE TABLE `tipe_beasiswa` (
  `id` int(11) NOT NULL,
  `nama_beasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe_beasiswa`
--

INSERT INTO `tipe_beasiswa` (`id`, `nama_beasiswa`) VALUES
(1, 'ppaberprestasi'),
(2, 'ppakurangmampu'),
(3, 'wkriberprestasi'),
(4, 'wkrikurangmampu'),
(5, 'perseorangan'),
(6, 'bidikmisi'),
(7, 'bidikmisidifabel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `jk`, `email`, `hp`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(10, 'Nabilla Nur F', '', 'nabillanurf@gmail.com', '', 'default1.jpg', '$2y$10$1GUjY7dQy.D/pbbypknoIO7KSvTYQU8OroYBrclTL5YWpLZs0GWDC', 1, 1, 1573907862),
(11, 'Admin SPK', 'L', 'adminspk@gmail.com', '0989xxxx', 'default.jpg', '$2y$10$ppZRWODqTe2a5gATNjvnfe7ma.rQZWYWjDfrscXso9MuXaccWRPSy', 2, 1, 1584775601),
(12, 'Admin 1', 'P', 'admin1@gmail.com', '0987679097', 'default.jpg', '$2y$10$n6wfF8Bt.roWhPHly5BhvOiko6jA7yrB1q7fcasROh2rWXgaLgezG', 2, 1, 1584775831);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 5),
(7, 1, 6),
(8, 2, 4),
(9, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `urutan`) VALUES
(1, 'Admin', 2),
(2, 'User', 3),
(3, 'Menu', 4),
(4, 'Administrasi', 5),
(5, 'Super Admin', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `urutan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `urutan`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1, 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1, 4),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1, 5),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1, 6),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1, 7),
(7, 5, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1, 3),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1, 8),
(9, 4, 'Nilai', 'administrasi/nilai', 'fas fa-fw fa-tachometer-alt', 1, 9),
(10, 4, 'Kriteria', 'administrasi/kriteria', 'fas fa-fw fa-folder', 1, 10),
(11, 4, 'Mahasiswa', 'administrasi/alternatif', 'fas fa-fw fa-user', 1, 12),
(13, 4, 'Laporan', 'administrasi/hasil_seleksi', 'fas fa-fw fa-folder-open', 1, 13),
(14, 4, 'Subkriteria', 'administrasi/subkriteria', 'fas fa-fw fa-folder-open', 1, 11),
(15, 1, 'Menu Beasiswa', 'admin/menubeasiswa', 'fas fa-fw fa-folder', 1, 2),
(17, 5, 'Admin', 'admin/admin', 'fas fa-fw fa-user', 1, 0),
(18, 4, 'Upload Hasil Beasiswa', 'administrasi/tampilDataUpload', 'fas fa-fw fa-folder-open', 1, 14),
(19, 4, 'Arsip File', 'administrasi/arsipFile', 'fas fa-fw fa-folder', 1, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(2, 'samsonsugiyarto123@gmail.com', 'DMmdYmjPGi1M9Dd7lE6qGX5j5mLeYC/YEOWVqLBbVyY=', 1569217587),
(3, 'samsonsugiyarto123@gmail.com', '65xuVi7axPISfFQIyn0EXYjSyC6YB49hC4wwrbtQBc4=', 1569217819),
(4, 'samsonsugiyarto123@gmail.com', 'Em9DLzaxy8WnMUyhZGrnnbYm2HytSy5a3/6AJ/B82xs=', 1569217832),
(5, 'samsonsugiyarto123@gmail.com', 'gON8M3nIMMGGIHz6G35r6VW0gWtyEvsvxNCpxh7/ISM=', 1569217979),
(6, 'samsonsugiyarto123@gmail.com', 'Qmjorkv0RxGmTVAGteQCwi07aNRb75ogGFN1kQiQPHM=', 1569218100),
(7, 'nabilla@gmail.com', 'CBJ52RFMJbwcmqJjx6Vo2d0EgkMIdgGBNmB49ApK6yU=', 1573907668),
(8, 'nabillanurf@gmail.com', 'y+7WTxyPCXCCJe71TO3lQshQNpWrJ11rsIuxtuR6zvE=', 1573907862);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- Indexes for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipe_beasiswa`
--
ALTER TABLE `tipe_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
--
-- AUTO_INCREMENT for table `tbl_arsip`
--
ALTER TABLE `tbl_arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tipe_beasiswa`
--
ALTER TABLE `tipe_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
