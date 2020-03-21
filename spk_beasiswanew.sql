-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mar 2020 pada 10.03
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
(7, 2, 201601076, 'Nuca', 'Laki-laki', 'Salatiga'),
(8, 2, 201503023, 'Mahalini', 'Perempuan', 'Bali'),
(9, 3, 201701098, 'Mirabeth Sonia', 'Perempuan', 'Jakarta'),
(10, 3, 201801097, 'Ainun', 'Perempuan', 'Sulawesi'),
(11, 4, 201801065, 'Novia Bachmid', 'Perempuan', 'Jakarta'),
(12, 4, 201901076, 'Agseisa Galuh', 'Perempuan', 'Banjarmasin'),
(17, 1, 201601078, 'Lyodra Ginting', 'Perempuan', 'Medan'),
(18, 1, 201601011, 'Samson Sugiyarto', 'Laki-laki', 'Banyumas');

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
(7, 0, 7, 116.66666666667),
(8, 0, 8, 120),
(9, 0, 9, 72.5),
(10, 0, 10, 126),
(11, 0, 11, 74),
(12, 0, 12, 150),
(17, 0, 17, 150),
(18, 0, 18, 108);

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
(31, 7, 28, 0.33333333333333),
(32, 7, 31, 1),
(33, 7, 38, 1),
(34, 7, 43, 1),
(35, 7, 47, 1),
(36, 8, 26, 1),
(37, 8, 31, 1),
(38, 8, 36, 0.33333333333333),
(39, 8, 41, 0.6),
(40, 8, 46, 0.8),
(41, 9, 51, 0.25),
(42, 9, 56, 0.5),
(43, 9, 61, 0.33333333333333),
(44, 9, 66, 1),
(45, 9, 71, 0.33333333333333),
(46, 10, 54, 1),
(47, 10, 57, 1),
(48, 10, 63, 1),
(49, 10, 70, 0.2),
(50, 10, 73, 1),
(51, 11, 80, 0.4),
(52, 11, 82, 0.4),
(53, 11, 89, 0.8),
(54, 11, 93, 0.6),
(55, 11, 96, 0.2),
(56, 12, 77, 1),
(57, 12, 85, 1),
(58, 12, 90, 1),
(59, 12, 95, 1),
(60, 12, 100, 1),
(81, 17, 5, 1),
(82, 17, 6, 1),
(83, 17, 11, 1),
(84, 17, 16, 1),
(85, 17, 21, 1),
(86, 18, 4, 0.8),
(87, 18, 6, 1),
(88, 18, 11, 1),
(89, 18, 20, 0.2),
(90, 18, 21, 1);

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
(2, 1, 'Semester', 'Benefit', 5),
(3, 1, 'Keaktifan Organisasi', 'Benefit', 6),
(4, 1, 'Pendapatan Orang Tua', 'Cost', 7),
(5, 1, 'Jumlah Saudara', 'Benefit', 4),
(6, 2, 'Penghasilan Orang Tua', 'Cost', 8),
(7, 2, 'Jumlah Tanggungan', 'Benefit', 7),
(8, 2, 'Rata-rata Nilai Raport', 'Benefit', 4),
(9, 2, 'Bukti Rekening Listrik', 'Cost', 5),
(10, 2, 'Bukti Pembayaran PBB', 'Cost', 6),
(11, 3, 'IPK Terakhir', 'Benefit', 8),
(12, 3, 'Keikutsertaan Organisasi', 'Benefit', 7),
(13, 3, 'Semester', 'Benefit', 6),
(14, 3, 'Pendapatan Orang Tua', 'Cost', 4),
(15, 3, 'Jumlah Bersaudara', 'Benefit', 5),
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
(26, 2, 6, '&lt;= Rp 1.000.000', 20),
(27, 2, 6, '&lt;= Rp 1.500.000', 40),
(28, 2, 6, '&lt;= Rp 3.000.000', 60),
(29, 2, 6, '&lt;= Rp 4.500.000', 80),
(30, 2, 6, '> Rp 4.500.000', 100),
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
(11, 4, 'Alternatif', 'administrasi/alternatif', 'fas fa-fw fa-user', 1, 12),
(13, 4, 'Laporan', 'administrasi/hasil_seleksi', 'fas fa-fw fa-folder-open', 1, 13),
(14, 4, 'Subkriteria', 'administrasi/subkriteria', 'fas fa-fw fa-folder-open', 1, 11),
(15, 1, 'Menu Beasiswa', 'admin/menubeasiswa', 'fas fa-fw fa-folder', 1, 2),
(17, 5, 'Admin', 'admin/admin', 'fas fa-fw fa-user', 1, 0);

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
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
