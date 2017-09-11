-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2016 at 01:07 AM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_komplain`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`, `keterangan`) VALUES
(1, 'jasa pelayanan', 'st'),
(2, 'public', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(6) NOT NULL AUTO_INCREMENT,
  `id_komplain` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` text,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id_komentar`, `id_komplain`, `nama`, `email`, `website`, `komentar`, `create_at`, `update_at`) VALUES
(10, 4, 'Costumer Service PT. Pos', 'cs.posindo@gmail.com', 'www.posindo.com', '<p>Bapak Agus Santoso yang kami hormati,</p>\r\n\r\n<p>Kami mohon maaf yang sebesar-besarnya atas kelambatan paket no. BD224555. Iya betul pak, paket itu memang belum sampai ke alamat bapak. Kami sedang menelusuri lebih lanjut apakah kiriman bapak itu mungkin salah salur ke kantor lain.</p>\r\n\r\n<p>Begitu ada kabar segera akan kami kabarkan kepada Bapak</p>\r\n\r\n<p>Terima kasih</p>\r\n\r\n<p>Yanti Budiyanti</p>\r\n\r\n<p>CS Kantor pos Bandung</p>\r\n', '2016-05-27 08:43:12', NULL),
(11, 4, 'Agus Santoso', 'agussantoso@yahoo.com', 'www.agussantoso.com', '<p>Yth kantor pos,</p>\r\n\r\n<p>Tolong ya segera diproses secepatnya. Saya khawatir isi paket itu akan rusak karena terlalu lama.</p>\r\n\r\n<p>Terima kasih atas respon yang cepat.</p>\r\n\r\n<p>Salam</p>\r\n\r\n<div>\r\n<p>Agus Santoso</p>\r\n</div>\r\n', '2016-05-27 08:44:32', NULL),
(12, 4, 'Andi Mapajalos', 'andimapajalos@gmail.com', 'andimapajalos.com', '<p>Wah mas Agus, saya juga pernah mengalami masalah seperti itu, harusnya kantor pos memperbaiki kinerjanya sehingga pelayanan kepada konsumennya semakin membaik.</p>\r\n\r\n<p>Sabar saja bro&hellip;</p>\r\n\r\n<p>Andi Mapajalos</p>\r\n', '2016-05-27 08:48:12', NULL),
(13, 4, 'Costumer Service PT. Pos', 'cs.posindo@gmail.com', 'www.posindo.com', '<p>Bapak Andi Mapajalos yang kami hormati, kami mohon maaf jika di masa lalu bapak pernah juga mengalami keterlambatan. Kami berterima kasih atas saran dan perhatian bapak untuk perbaikan layanan kami&hellip;</p>\r\n\r\n<p>Yanti Budiyanti</p>\r\n\r\n<p>CS Kantor pos Bandung</p>\r\n', '2016-05-27 08:49:06', NULL),
(14, 4, 'Costumer Service PT. Pos', 'cs.posindo@gmail.com', 'www.posindo.com', '<p>Bapak Agus yth&hellip;</p>\r\n\r\n<p>Setelah kami lacak, memang paket bapak tersalah salur. Saat ini sudah kami kirim ke alamat bapak secepatnya. Kami harapkan dalam waktu satu dua hari ini akan&nbsp; sampai&hellip;</p>\r\n\r\n<p>Terima kasih</p>\r\n\r\n<p>Salam</p>\r\n\r\n<p>Yanti Budiyanti</p>\r\n', '2016-05-27 08:50:32', NULL),
(15, 4, 'Agus Santoso', 'agussantoso@yahoo.com', 'www.agussantoso.com', '<p>Mbak Yanti,</p>\r\n\r\n<p>Terima kasih paket telah sampai. Barang-barang di dalam paket alhamdulilah utuh. Saya harap kejadian seperti ini tidak terulang lagi di masa datang.</p>\r\n\r\n<p>Salam</p>\r\n\r\n<p>Agus Santoso</p>\r\n', '2016-05-27 08:51:08', NULL),
(16, 4, 'Costumer Service PT. Pos', 'cs.posindo@gmail.com', 'www.posindo.com', '<p>Bapak Agus yth</p>\r\n\r\n<p>Syukurlah paket telah tiba dengan selamat. Sekali lagi kami mohon maaf atas kelambatan ini. Hal ini jadi perhatian kami semua agar kejadian yang tidak menyenangkan tidak terjadi lagi di masa datang.</p>\r\n\r\n<p>Terima kasih</p>\r\n\r\n<p>Salam</p>\r\n\r\n<div>\r\n<p>Yanti</p>\r\n</div>\r\n', '2016-05-27 08:53:11', NULL),
(17, 8, 'uki', 'zukiungu@gmail.com', '688767', '<p>79797</p>\r\n', '2016-11-08 14:49:59', NULL),
(18, 8, '7', 'zukiungu@gmail.com', '7', '<p>7</p>\r\n', '2016-11-08 14:51:36', NULL),
(19, 8, '7', 'zukiungu@gmail.com', '7', '<p>7</p>\r\n', '2016-11-08 14:52:02', NULL),
(20, 8, '7', 'zukiungu@gmail.com', '7', '<p>7</p>\r\n', '2016-11-08 14:52:47', NULL),
(21, 8, 'riki', 'zukiungu@gmail.com', 'iuyi', '<p>iyiyi</p>\r\n', '2016-11-08 14:53:04', NULL),
(22, 8, 'admin', 'a@gmail.com', 'admin', '<p>--</p>\r\n', '2016-11-08 14:56:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komplain`
--

CREATE TABLE IF NOT EXISTS `tbl_komplain` (
  `id_komplain` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_kategori` int(3) DEFAULT NULL,
  `id_perusahaan` int(3) NOT NULL,
  `judul_komplain` varchar(100) DEFAULT NULL,
  `isi_komplain` text,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komplain`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_komplain`
--

INSERT INTO `tbl_komplain` (`id_komplain`, `id_pelanggan`, `id_kategori`, `id_perusahaan`, `judul_komplain`, `isi_komplain`, `create_at`, `update_at`) VALUES
(4, 1, 1, 2, 'Paket saya hingga saat ini belum datang padahal sudah dua minggu.', '<p>Pak Pos yang saya hormati,</p>\r\n\r\n<p>Dua minggu lalu yaitu tanggal 26 Maret 2016 saya kirim paket melalui kantor pos Asia Afrika Bandung dan ditujukan untuk saudara saya di magelang. Nomor resinya adalah: BD224555</p>\r\n\r\n<p>Hingga hari ini paket itu belum diterima oleh saudara saya. Mengapa paket bisa selama itu, padahal selama ini hanya berkisar antara 2 hingga 3 hari saja.</p>\r\n\r\n<p>Tolong dijawab ya&hellip;</p>\r\n\r\n<p>Salam</p>\r\n', '2016-11-08 17:48:48', NULL),
(5, 3, 1, 1, 'Tagihan PDAM Bandung membengkak...', '<p>PDAM Yth...</p>\r\n\r\n<p>Saya ingin tanya mengapa tagihan air minum untuk rumah saya di Jalan Radio No 3 Bandung membengkak dari yang tadinya hanya 400 ribu sekarang ditagih menjadi 1,2 juta. Padahal air sering tidak mengalir. Dalam bulan itu pula saya sering keluar kota. Mohon diberi keringanan tagihan saya.</p>\r\n\r\n<p>Terima kasih</p>\r\n', '2016-11-08 17:48:48', NULL),
(6, 3, 1, 1, 'Tablet Priman Tech saya sudah berbulan-bulan belum diperbaiki', '<p>Yth Priman Tech</p>\r\n\r\n<p>Saya membeli tablet seri C-230 pada tanggal 28 Desember 2015. Baru dua hari saya pakai sudah muncul ada garis datar di layarnya.</p>\r\n\r\n<p>Saya kemudian membawa tablet itu ke kantor pelayanan di Plasa Kosambi. Dalam waktu yang lama, ternyata belum selesai.</p>\r\n\r\n<p>Pada tanggal 12 Maret 2016 saya ditelpon bahwa tablet saya karena persediaan tidak ada, diganti dengan model lain, dan akan dikirim dari jakarta ke bandung.</p>\r\n\r\n<p>Pada tanggal 19 Maret 2016, saya datang ke kantor anda lagi dengan harapan tablet sudah selesai, namun katanya tablet belum dikirim dari jakarta.</p>\r\n\r\n<p>Hingga hari ini tanggal 19 April 2016, saya belum menerima telpon, alias tablet belum datang.</p>\r\n\r\n<p>Tolong perbaiki layanan, saya merasa sangat dirugikan...</p>\r\n\r\n<p>Terima kasih</p>\r\n\r\n<div>\r\n<p>Deni Santoso</p>\r\n</div>\r\n', '2016-11-08 17:48:49', NULL),
(7, 4, 1, 2, 'barang yang saya kirim terlambat belum sampail', '<p>belum sampai tujuan&nbsp;</p>\r\n', '2016-11-08 17:48:49', NULL),
(8, 3, 1, 2, '787979', '<p>7797979</p>\r\n', '2016-11-08 17:48:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `ktp` int(30) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `alamat`, `email`, `ktp`, `create_at`, `update_at`) VALUES
(1, 'Asep Cahyudin', 'save', '44f936b3514dfa0b107027fbca0ee6a3', 'Antapani', 'savefaaizuun@gmail.com', 12345, '2016-04-15 07:54:53', NULL),
(3, 'testing', 'testing', 'testing', 'Kircon', 'testing@gmail.com', 43243214, '2016-05-16 09:01:13', NULL),
(4, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test@gmail.com', 2147483647, '2016-05-25 11:02:07', NULL),
(5, 'Dendi Santoso', 'dendisantoso', 'a74081ab8762598329263fcc942df1ca', 'Jl. Jakarta', 'dendisantoso@yahoo.com', 2147483647, '2016-05-27 07:50:31', NULL),
(6, 'fanni', 'fanni', 'e10adc3949ba59abbe56e057f20f883e', 'jl. gumuruh maleer selatan', 'fanni.gustiani@gmail.com', 2147483647, '2016-06-03 09:56:31', NULL),
(7, '7', '7', '8f14e45fceea167a5a36dedd4bea2543', '7', 'a@gmail.com', 7, '2016-11-08 14:27:48', NULL),
(8, 'zuki', 'zuki', '62ef489112f547ecdecdab860f04b99f', 'jambi', 'zukiungu@gmail.com', 78797897, '2016-11-08 14:58:23', NULL),
(9, 'uki@gmail.com', 'uki', 'c6de4541b343e324d6a57ecbc2e78503', 'tuytutu', 'zukiungu@gmail.com', 6876868, '2016-11-08 16:57:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE IF NOT EXISTS `tbl_perusahaan` (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_kategori` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `username`, `password`, `id_kategori`, `nama_produk`, `create_at`, `update_at`) VALUES
(6, 'Testing4', 'testing4', '', 'testing4', 'testing4', '2016-05-23 09:01:35', NULL),
(7, 'PT POS Indonesia', 'posindo', 'c51bdfef5319832726c5d3eb2e6d5a6a', NULL, NULL, '2016-05-27 08:34:04', NULL),
(8, '68', '76', 'dd45045f8c68db9f54e70c67048d32e8', '1', '686', '2016-11-08 17:31:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
