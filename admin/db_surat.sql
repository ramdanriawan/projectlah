-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2016 pada 02.26
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_surat_keluar`
--

CREATE TABLE `t_surat_keluar` (
  `id_surat` int(6) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `isi_ringkas` mediumtext NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_surat_keluar`
--

INSERT INTO `t_surat_keluar` (`id_surat`, `id_admin`, `isi_ringkas`, `tujuan`, `no_surat`, `tgl_surat`, `file`) VALUES
(1, 3, '111', '111', '111', '2016-08-15', '../upload/surat_keluar/EHwH48y.jpg'),
(2, 3, '222', '222', '222', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(3, 3, '333', '333', '333', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(4, 3, '444', '444', '444', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(5, 3, '555', '555', '555', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(6, 3, '666', '666', '66', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(7, 3, '777', '777', '777', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(8, 3, '888', '888', '888', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(9, 3, '999', '999', '999', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(10, 3, 'qqq', 'qqq', 'qqq', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(11, 3, 'www', 'www', 'www', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(12, 3, 'eee', 'eee', 'eee', '2016-08-15', '../upload/surat_masuk/1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_surat_masuk`
--

CREATE TABLE `t_surat_masuk` (
  `id_surat` int(6) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `isi_ringkas` mediumtext NOT NULL,
  `dari` varchar(250) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tgl_surat` date NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_surat_masuk`
--

INSERT INTO `t_surat_masuk` (`id_surat`, `id_admin`, `isi_ringkas`, `dari`, `no_surat`, `tgl_surat`, `file`) VALUES
(1, 3, '111', '111', '111', '2016-08-15', '../upload/surat_masuk/20140831_094205.jpg'),
(2, 3, '222', '222', '222', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(3, 3, '333', '333', '333', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(4, 3, '444', '444', '444', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(5, 3, '555', '555', '555', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(6, 3, '666', '666', '666', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(7, 3, '777', '777', '777', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(8, 3, '888', '888', '888', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(9, 3, '999', '999', '999', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(10, 3, 'qqq', 'qqq', 'qqq', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(11, 3, 'www', 'www', 'www', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(12, 3, 'eee', 'eee', 'eee', '2016-08-15', '../upload/surat_masuk/1.jpg'),
(13, 3, 'rrr', 'rrr', 'rrr', '2016-08-15', '../upload/surat_masuk/1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` enum('Dikmenti','Sekretaris','BagianUmum','admin') NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_admin`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(3, 'ADMIN', 'ADMIN', 'SURYA ARFAN', 'admin', '../upload/akun/1.jpg'),
(14, 'YUDI', 'YUDI', 'YUDI', 'admin', '../upload/akun/logo-garuda_acehdesain.jpg'),
(15, 'RADA', 'RADA', 'RADA', 'admin', '../upload/akun/logo-garuda_acehdesain.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_surat_keluar`
--
ALTER TABLE `t_surat_keluar`
  MODIFY `id_surat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_surat_masuk`
--
ALTER TABLE `t_surat_masuk`
  MODIFY `id_surat` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
