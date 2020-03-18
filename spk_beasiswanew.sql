-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2020 at 08:43 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_subkriteria` int(11) NOT NULL,
  `nilai_normalisasi` double NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(255) NOT NULL,
  `id_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `beasiswa_id`, `nama_kriteria`, `tipe_kriteria`, `id_nilai`) VALUES
(5, 1, 'Pendapatan Orang Tua', 'Cost', 4),
(6, 3, 'IPK Terakhir', 'Benefit', 7),
(7, 1, 'Jumlah Bersaudara', 'Benefit', 6),
(10, 2, 'Semester', 'Benefit', 5),
(11, 1, 'IPK Terakhir', 'Benefit', 7);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `keterangan_nilai` varchar(255) NOT NULL,
  `jumlah_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `keterangan_nilai`, `jumlah_nilai`) VALUES
(4, 'Sangat Tinggi', 20),
(5, 'Sedang', 15),
(6, 'Rendah', 10),
(7, 'Sangat Tinggi Sekali', 25);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `nilai_normalisasi` double NOT NULL,
  `bobot_normalisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `id_alternatif`, `id_kriteria`, `nilai_rangking`, `nilai_normalisasi`, `bobot_normalisasi`) VALUES
(104, 3, 5, 3, 0.66666666666667, '2'),
(105, 3, 6, 5, 1, '5'),
(106, 3, 7, 5, 1, '2'),
(107, 4, 5, 5, 0.4, '1.2'),
(108, 4, 6, 5, 1, '5'),
(109, 4, 7, 3, 0.6, '1.2'),
(113, 1, 5, 2, 1, '3'),
(114, 1, 6, 2, 0.4, '2'),
(115, 1, 7, 2, 0.4, '0.8');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `beasiswa_id` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `nilai_subkriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`id_subkriteria`, `beasiswa_id`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(4, 1, 5, '&lt;= Rp 4.500.000', 40),
(5, 0, 5, '&lt;= Rp 3.000.000', 60),
(6, 1, 5, '&lt;= Rp 1.500.000', 80),
(7, 0, 5, '&lt;= Rp 1.000.000', 100),
(11, 0, 7, '1 Saudara', 20),
(12, 0, 7, '2 Saudara', 40),
(13, 1, 7, '3 Saudara', 60),
(14, 0, 7, '> 4 Saudara', 100),
(15, 1, 6, '&lt;= 3.25', 40),
(16, 1, 6, '&lt;= 3.50', 60),
(17, 0, 6, '&lt; 3.75', 80),
(18, 0, 6, '>= 3.75', 100),
(19, 0, 10, 'Semester 2', 20),
(20, 0, 10, 'Semester 3', 40),
(21, 1, 10, 'Semester 4', 60),
(22, 0, 10, 'Semester 5', 80),
(23, 0, 10, 'Semester 6', 100),
(25, 1, 5, '> Rp 4.500.000', 20),
(26, 1, 11, '>= 3.00', 20),
(27, 0, 7, '4 Saudara', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_beasiswa`
--

CREATE TABLE `tipe_beasiswa` (
  `id` int(11) NOT NULL,
  `nama_beasiswa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_beasiswa`
--

INSERT INTO `tipe_beasiswa` (`id`, `nama_beasiswa`) VALUES
(1, 'ppa'),
(2, 'bidikmisi'),
(3, 'prestasi'),
(4, 'kurangmampu');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
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
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
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
(12, 4, 'Rangking', 'administrasi/rangking', 'fas fa-fw fa-tachometer-alt', 1),
(13, 4, 'Laporan', 'administrasi/hasil_seleksi', 'fas fa-fw fa-folder-open', 1),
(14, 4, 'Subkriteria', 'administrasi/subkriteria', 'fas fa-fw fa-folder-open', 1),
(15, 1, 'Menu Beasiswa', 'admin/menubeasiswa', 'fas fa-fw fa-folder', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
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
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

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
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
