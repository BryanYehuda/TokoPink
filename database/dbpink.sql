-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 06:51 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpink`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_ad`
--

CREATE TABLE `t_ad` (
  `id` int(5) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `konten` varchar(2000) NOT NULL,
  `img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ad`
--

INSERT INTO `t_ad` (`id`, `judul`, `konten`, `img`) VALUES
(10, 'Toko Nomer 1', 'Asdw', 'Toko_Nomer_1.png'),
(12, 'alamat2', 'sgtsadfaqefras', 'alamat2.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_ic`
--

CREATE TABLE `t_ic` (
  `id` int(5) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `konten` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jbuka` varchar(25) NOT NULL,
  `jtutup` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id`, `hari`, `jbuka`, `jtutup`) VALUES
(1, 'Senin', '08:00', '17:00'),
(2, 'Selasa', 'tutup', 'tutup'),
(3, 'Rabu', '00:00', '12:00'),
(4, 'Kamis', '12:00', '12:00'),
(5, 'Jumat', '00:00', '00:00'),
(6, 'Sabtu', 'tutup', 'tutup'),
(7, 'Minggu', 'tutup', 'tutup');

-- --------------------------------------------------------

--
-- Table structure for table `t_katpro`
--

CREATE TABLE `t_katpro` (
  `id` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `info` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_kontak`
--

CREATE TABLE `t_kontak` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `konten` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kontak`
--

INSERT INTO `t_kontak` (`id`, `nama`, `judul`, `konten`) VALUES
(4, 'kontak', 'efbeh', 'ini efbeh gueh'),
(5, 'kontak', 'weah', '089089889998');

-- --------------------------------------------------------

--
-- Table structure for table `t_konten1`
--

CREATE TABLE `t_konten1` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_konten1`
--

INSERT INTO `t_konten1` (`id`, `nama`, `judul`, `konten`) VALUES
(3, 'sekilas', 'coba ganti judulnya si sekilas', 'ini tuh contohnya konten sekilas'),
(4, 'kontak', 'Kontak', 'Berikut Adalah Kontak Kami Yang Dapat Di Hubungi. Kalo ga bisa di hubungi berarti kami lagi ga ada. dah gitu aja'),
(5, 'produk', 'produk', 'ini produk'),
(6, 'misi', 'Misi Kami', 'kamulah yang harusnya nyelesein misi'),
(7, 'why', 'Kenapa Harus Kami?', 'ga tau, kami tu ga ada apa apanya'),
(8, 'tentang', 'tentang kami', 'cari tau sendiri su'),
(11, 'konten1', 'satu', 'satu satu aku sayang ibu'),
(12, 'konten1', 'dua', 'dua dua juga sayang ayah');

-- --------------------------------------------------------

--
-- Table structure for table `t_pro`
--

CREATE TABLE `t_pro` (
  `id` int(5) NOT NULL,
  `kat_id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `min` int(15) NOT NULL,
  `max` int(15) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `minpem` varchar(15) NOT NULL,
  `ket` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_testi`
--

CREATE TABLE `t_testi` (
  `id` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `komentar` varchar(2000) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_testi`
--

INSERT INTO `t_testi` (`id`, `nama`, `jabatan`, `judul`, `komentar`, `img`) VALUES
(5, '1', '2', '3', '4', '1.png'),
(6, '1', '2', '3', '4', '1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_ad`
--
ALTER TABLE `t_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_katpro`
--
ALTER TABLE `t_katpro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori` (`kategori`);

--
-- Indexes for table `t_kontak`
--
ALTER TABLE `t_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_konten1`
--
ALTER TABLE `t_konten1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pro`
--
ALTER TABLE `t_pro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kat_id` (`kat_id`);

--
-- Indexes for table `t_testi`
--
ALTER TABLE `t_testi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_ad`
--
ALTER TABLE `t_ad`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_katpro`
--
ALTER TABLE `t_katpro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_kontak`
--
ALTER TABLE `t_kontak`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_konten1`
--
ALTER TABLE `t_konten1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_testi`
--
ALTER TABLE `t_testi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_pro`
--
ALTER TABLE `t_pro`
  ADD CONSTRAINT `kat` FOREIGN KEY (`kat_id`) REFERENCES `t_katpro` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
