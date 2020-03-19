-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mar 2020 pada 11.22
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
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `beasiswa_id`, `nim`, `nama_alternatif`, `jk`, `alamat`) VALUES
(2, 1, 201601053, 'Nabilla Nur Fadillah', 'Perempuan', 'Kroya'),
(3, 1, 201601041, 'Samson Sugiyarto', 'Laki-laki', 'Banyumas'),
(4, 1, 201801077, 'Lyodra Ginting', 'Perempuan', 'Medan'),
(5, 1, 201901089, 'Tiara Anugrah', 'Perempuan', 'Jember'),
(6, 1, 201702034, 'Ziva Magnolya', 'Perempuan', 'Jakarta'),
(7, 2, 201601076, 'Nuca', 'Laki-laki', 'Salatiga'),
(8, 2, 201503023, 'Mahalini', 'Perempuan', 'Bali'),
(9, 3, 201701098, 'Mirabeth Sonia', 'Perempuan', 'Jakarta'),
(10, 3, 201801097, 'Ainun', 'Perempuan', 'Sulawesi'),
(11, 4, 201801065, 'Novia Bachmid', 'Perempuan', 'Jakarta'),
(12, 4, 201901076, 'Agseisa Galuh', 'Perempuan', 'Banjarmasin');

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
(2, 0, 2, 76.666666666667),
(3, 0, 3, 81.166666666667),
(4, 0, 4, 57.333333333333),
(5, 0, 5, 56.333333333333),
(6, 0, 6, 67.5),
(7, 0, 7, 100),
(8, 0, 8, 66.666666666667),
(9, 0, 9, 33),
(10, 0, 10, 100),
(11, 0, 11, 67),
(12, 0, 12, 77.5);

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
(6, 2, 4, 1),
(7, 2, 10, 1),
(8, 2, 13, 0.6),
(9, 2, 16, 0.2),
(10, 2, 22, 0.66666666666667),
(11, 3, 3, 0.75),
(12, 3, 10, 1),
(13, 3, 13, 0.6),
(14, 3, 20, 1),
(15, 3, 22, 0.66666666666667),
(16, 4, 4, 1),
(17, 4, 6, 0.2),
(18, 4, 11, 0.2),
(19, 4, 20, 1),
(20, 4, 21, 0.33333333333333),
(21, 5, 2, 0.5),
(22, 5, 8, 0.6),
(23, 5, 12, 0.4),
(24, 5, 20, 1),
(25, 5, 21, 0.33333333333333),
(26, 6, 3, 0.75),
(27, 6, 7, 0.4),
(28, 6, 15, 1),
(29, 6, 18, 0.33333333333333),
(30, 6, 23, 1),
(31, 7, 28, 1),
(32, 7, 31, 1),
(33, 7, 38, 1),
(34, 7, 43, 1),
(35, 7, 47, 1),
(36, 8, 26, 0.6),
(37, 8, 31, 1),
(38, 8, 36, 0.33333333333333),
(39, 8, 41, 0.6),
(40, 8, 46, 0.8),
(41, 9, 51, 0.25),
(42, 9, 56, 0.5),
(43, 9, 61, 0.33333333333333),
(44, 9, 66, 0.2),
(45, 9, 71, 0.33333333333333),
(46, 10, 54, 1),
(47, 10, 57, 1),
(48, 10, 63, 1),
(49, 10, 70, 1),
(50, 10, 73, 1),
(51, 11, 80, 1),
(52, 11, 82, 0.4),
(53, 11, 89, 0.8),
(54, 11, 93, 0.6),
(55, 11, 96, 0.2),
(56, 12, 77, 0.25),
(57, 12, 85, 1),
(58, 12, 90, 1),
(59, 12, 95, 1),
(60, 12, 100, 1);

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
(2, 1, 'Semester', 'Benefit', 7),
(3, 1, 'Keaktifan Organisasi', 'Benefit', 4),
(4, 1, 'Pendapatan Orang Tua', 'Cost', 5),
(5, 1, 'Jumlah Saudara', 'Benefit', 6),
(6, 2, 'Penghasilan Orang Tua', 'Cost', 8),
(7, 2, 'Jumlah Tanggungan', 'Benefit', 7),
(8, 2, 'Rata-rata Nilai Raport', 'Benefit', 4),
(9, 2, 'Bukti Rekening Listrik', 'Cost', 5),
(10, 2, 'Bukti Pembayaran PBB', 'Cost', 6),
(11, 3, 'IPK Terakhir', 'Benefit', 8),
(12, 3, 'Keikutsertaan Organisasi', 'Benefit', 7),
(13, 3, 'Semester', 'Benefit', 4),
(14, 3, 'Pendapatan Orang Tua', 'Cost', 5),
(15, 3, 'Jumlah Bersaudara', 'Benefit', 6),
(16, 4, 'Pendapatan Orang Tua', 'Cost', 8),
(17, 4, 'Jumlah Saudara', 'Benefit', 7),
(18, 4, 'IPK Terakhir', 'Benefit', 4),
(19, 4, 'Keaktifan Organisasi', 'Benefit', 5),
(20, 4, 'Semester', 'Benefit', 6);

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
(4, 'Sedang', 20),
(5, 'Rendah', 15),
(6, 'Sangat Rendah', 10),
(7, 'Tinggi', 25),
(8, 'Sangat Tinggi', 30);

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
(1, 1, 1, '>= 3.00', 20),
(2, 1, 1, '>= 3.25', 40),
(3, 1, 1, '>= 3.50', 60),
(4, 1, 1, '>= 3.75', 80),
(5, 1, 1, '4.00', 100),
(6, 1, 2, 'Semester 2', 20),
(7, 1, 2, 'Semester 3', 40),
(8, 1, 2, 'Semester 4', 60),
(9, 1, 2, 'Semester 5', 80),
(10, 1, 2, 'Semester 6', 100),
(11, 1, 3, 'Tidak Mengikuti Organisasi', 20),
(12, 1, 3, 'Mengikuti 1 Organisasi', 40),
(13, 1, 3, 'Mengikuti 2 Organisasi', 60),
(14, 1, 3, 'Mengikuti 3 Organisasi', 80),
(15, 1, 3, 'Mengikuti > 3 Organisasi', 100),
(16, 1, 4, '&lt;= Rp 1.000.000', 100),
(17, 1, 4, '&lt;= Rp 1.500.000', 80),
(18, 1, 4, '&lt;= Rp 3.000.000', 60),
(19, 1, 4, '&lt;= Rp 4.500.000', 40),
(20, 1, 4, '> 4.500.000.000', 20),
(21, 1, 5, '0 Saudara', 20),
(22, 1, 5, '1 Saudara', 40),
(23, 1, 5, '2 Saudara', 60),
(24, 1, 5, '3 Saudara', 80),
(25, 1, 5, '> 3 Saudara', 100),
(26, 2, 6, '&lt;= Rp 1.000.000', 100),
(27, 2, 6, '&lt;= Rp 1.500.000', 80),
(28, 2, 6, '&lt;= Rp 3.000.000', 60),
(29, 2, 6, '&lt;= Rp 4.500.000', 40),
(30, 2, 6, '> Rp 4.500.000', 20),
(31, 2, 7, '1 Tanggungan', 20),
(32, 2, 7, '2 Tanggungan', 40),
(33, 2, 7, '3 Tanggungan', 60),
(34, 2, 7, '4 Tanggungan', 80),
(35, 2, 7, '> 4 Tanggungan', 100),
(36, 2, 8, '>= 80.00', 20),
(37, 2, 8, '>= 85.00', 40),
(38, 2, 8, '>= 90.00', 60),
(39, 2, 8, '>= 95.00', 80),
(40, 2, 8, '>= 97.50', 100),
(41, 2, 9, '&lt;= Rp 100.000', 100),
(42, 2, 9, '&lt;= Rp 125.000', 80),
(43, 2, 9, '&lt;= Rp 150.000', 60),
(44, 2, 9, '&lt;= Rp 175.000', 40),
(45, 2, 9, '> Rp 175.000', 20),
(46, 2, 10, '&lt;= Rp 100.000', 100),
(47, 2, 10, '&lt;= Rp 150.000', 80),
(48, 2, 10, '&lt;= Rp 200.000', 60),
(49, 2, 10, '&lt;= Rp 250.000', 40),
(50, 2, 10, '> Rp 250.000', 20),
(51, 3, 11, '>= 3.00', 20),
(52, 3, 11, '>= 3.25', 40),
(53, 3, 11, '>= 3.50', 60),
(54, 3, 11, '>= 3.75', 80),
(55, 3, 11, '4.00', 100),
(56, 3, 12, 'Tidak Mengikuti Organisasi', 20),
(57, 3, 12, 'Mengikuti 1 Organisasi', 40),
(58, 3, 12, 'Mengikuti 2 Organisasi', 60),
(59, 3, 12, 'Mengikuti 3 Organisasi', 80),
(60, 3, 12, 'Mengikuti > 3 Organisasi', 100),
(61, 3, 13, 'Semester 2', 20),
(62, 3, 13, 'Semester 3', 40),
(63, 3, 13, 'Semester 4', 60),
(64, 3, 13, 'Semester 5', 80),
(65, 3, 13, 'Semester 6', 100),
(66, 3, 14, '&lt;= Rp 1.000.000', 100),
(67, 3, 14, '&lt;= Rp 1.500.000', 80),
(68, 3, 14, '&lt;= Rp 3.000.000', 60),
(69, 3, 14, '&lt;= Rp 4.500.000', 40),
(70, 3, 14, '> Rp 4.500.000', 20),
(71, 3, 15, '0 Saudara', 20),
(72, 3, 15, '1 Saudara', 40),
(73, 3, 15, '2 Saudara', 60),
(74, 3, 15, '3 Saudara', 80),
(75, 3, 15, '> 3 Saudara', 100),
(76, 4, 16, '&lt;= Rp 1.000.000', 100),
(77, 4, 16, '&lt;= Rp 1.500.000', 80),
(78, 4, 16, '&lt;= Rp 3.000.000', 60),
(79, 4, 16, '&lt;= Rp 4.500.000', 40),
(80, 4, 16, '> Rp 4.500.000', 20),
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
(96, 4, 20, 'Semester 2', 20),
(97, 4, 20, 'Semester 3', 40),
(98, 4, 20, 'Semester 4', 60),
(99, 4, 20, 'Semester 5', 80),
(100, 4, 20, 'Semester 6', 100);

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
(1, 'ppa'),
(2, 'bidikmisi'),
(3, 'prestasi'),
(4, 'kurangmampu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Nabilla Nur F', 'nurfadillah@gmail.com', 'IMG-20171102-WA0005.jpg', '$2y$10$64G1VdTiw9l6/gQwsD0nOOmpJU0Qmqp5QlDUgYPCUQCZ1imCh6dHm', 1, 1, 1568447511),
(5, 'Samson', 'samson@gmail.com', 'IMG-20171029-WA0008.jpg', '$2y$10$3Byc6zmBH0JZNYSJlUXFi.zeyISPqUtOyXTAR7XtqT04C/Xs2wYKS', 2, 1, 1568520170),
(7, 'Pipo', 'pipo@gmail.com', 'default.jpg', '$2y$10$sqTTPidfPzA8gxGVBaOh8.3SamMlDLbMqWekfvB6J6KH.JNrrgTNW', 2, 0, 1569132835),
(8, 'Samson Sugiyarto', 'samsonsugiyarto123@gmail.com', 'default.jpg', '$2y$10$Rt/X50gQ0PW6TOIY2x1LG.1UXh5bM0bG6SxkvUYfxhnDz76w4teS.', 2, 1, 1569135771),
(9, 'Nabilla Nur F', 'nabilla@gmail.com', 'default.jpg', '$2y$10$4mEm4IblbvkDwwmxHjMRaO1PRsXmXMzQUzJbDQkJu28yqG3tXHbSy', 2, 0, 1573907668),
(10, 'Nabilla Nur F', 'nabillanurf@gmail.com', 'default.jpg', '$2y$10$1GUjY7dQy.D/pbbypknoIO7KSvTYQU8OroYBrclTL5YWpLZs0GWDC', 1, 1, 1573907862);

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
(5, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Administrasi');

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
(1, 'administrator'),
(2, 'member');

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
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 4, 'Nilai', 'administrasi/nilai', 'fas fa-fw fa-tachometer-alt', 1),
(10, 4, 'Kriteria', 'administrasi/kriteria', 'fas fa-fw fa-folder', 1),
(11, 4, 'Alternatif', 'administrasi/alternatif', 'fas fa-fw fa-user', 1),
(13, 4, 'Laporan', 'administrasi/hasil_seleksi', 'fas fa-fw fa-folder-open', 1),
(14, 4, 'Subkriteria', 'administrasi/subkriteria', 'fas fa-fw fa-folder-open', 1),
(15, 1, 'Menu Beasiswa', 'admin/menubeasiswa', 'fas fa-fw fa-folder', 1);

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
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tipe_beasiswa`
--
ALTER TABLE `tipe_beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
