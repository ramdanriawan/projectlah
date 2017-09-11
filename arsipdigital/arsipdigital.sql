-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Mar 2017 pada 08.08
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arsipdigital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_arsip`
--

CREATE TABLE IF NOT EXISTS `ad_arsip` (
  `id_proses` varchar(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nik_termohon` varchar(20) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `id_sub_kategori` varchar(5) NOT NULL,
  `tgl_proses` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_arsip` varchar(15) NOT NULL,
  `userid` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_arsip`
--

INSERT INTO `ad_arsip` (`id_proses`, `nik`, `nik_termohon`, `id_kategori`, `id_sub_kategori`, `tgl_proses`, `status_arsip`, `userid`) VALUES
('1202201693', 'JULIANDRI SAPUTRA', '32434523452234', '103', '1031', '2016-02-12 02:42:22', 'Sudah Scan', 'admin'),
('1202201695', 'RAHMAD', '5433456342235', '101', '1012', '2016-02-12 02:35:23', 'Belum Scan', 'admin'),
('1202201697', 'JULIANDRI SAPUTRA', '32434523452234', '104', '1043', '2016-02-12 02:33:25', 'Belum Scan', 'admin'),
('2903201742', '1503061205850004', '1503061205850004', '102', '1021', '2017-03-29 17:09:47', 'Belum Scan', 'adminduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_detail_akta`
--

CREATE TABLE IF NOT EXISTS `ad_detail_akta` (
  `id_proses` varchar(11) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_lgkp_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_detail_akta`
--

INSERT INTO `ad_detail_akta` (`id_proses`, `tmpt_lahir`, `tgl_lahir`, `nama_lgkp_ibu`) VALUES
('1202201697', 'Tembilahan', '1990-09-10', 'Zulaikah'),
('1202201693', 'Tembilahan', '1990-09-10', 'Zulaikah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_kategori`
--

CREATE TABLE IF NOT EXISTS `ad_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_kategori`
--

INSERT INTO `ad_kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
('101', 'KTP-el', 'Pelayanan Kartu Tanda Penduduk'),
('102', 'KARTU KELUARGA', 'Pelayanan Kartu Keluarga'),
('103', 'AKTA KAWIN', 'Pelayanan AKTE Perkawinan'),
('104', 'AKTA LAHIR', 'Untuk Pengurusan pelayanan Akta lahir'),
('105', 'AKTA KEMATIAN', 'Pelayanan AKTA Kematian'),
('106', 'AKTA PENGESAHAN ANAK', 'Pelayanan Pengesahan Status Anak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_proses`
--

CREATE TABLE IF NOT EXISTS `ad_proses` (
  `id_proses` varchar(11) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nik_termohon` varchar(20) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `id_sub_kategori` varchar(5) NOT NULL,
  `tgl_proses` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_estimasi` date NOT NULL,
  `folder` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `userid` varchar(18) NOT NULL,
  `tgl_edit` date NOT NULL,
  `op_edit` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_proses`
--

INSERT INTO `ad_proses` (`id_proses`, `nik`, `nama`, `alamat`, `telp`, `nik_termohon`, `id_kategori`, `id_sub_kategori`, `tgl_proses`, `tgl_estimasi`, `folder`, `status`, `userid`, `tgl_edit`, `op_edit`) VALUES
('1202201695', 'RAHMAD', 'RAHMAD', 'Jl. Kartini', '08653432432', '5433456342235', '101', '1012', '2016-02-12 02:35:23', '2016-02-16', '1202201695', 'Lengkap', 'admin', '0000-00-00', ''),
('2903201742', '1503061205850004', 'RUSTAM SUPARJO', 'DUSUN IV KAMPUNG BARU SUNGAI BUTANG', '15030', '1503061205850004', '102', '1021', '2017-03-29 17:09:47', '2017-03-30', '2903201742', 'Belum Lengkap', 'adminduk', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_sub_kategori`
--

CREATE TABLE IF NOT EXISTS `ad_sub_kategori` (
  `id_sub_kategori` varchar(5) NOT NULL,
  `nama_sub_kategori` varchar(50) NOT NULL,
  `keterangan_sub` text NOT NULL,
  `id_kategori` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_sub_kategori`
--

INSERT INTO `ad_sub_kategori` (`id_sub_kategori`, `nama_sub_kategori`, `keterangan_sub`, `id_kategori`) VALUES
('1021', 'KK BARU', 'Pelayanan Kartu Keluarga Baru', '102'),
('1022', 'KK GANTI HILANG', 'Pelayanan Ganti Kartu Keluarga yang hilang', '102'),
('1023', 'TAMBAH KARNA LAHIR', 'Pelayanan Penambahan dalam kartu keluarga karena lahir', '102'),
('1024', 'TAMBAH NUMPANG SEMENTARA', 'Pelayanan Penambahan Menumpang Sementara Pada Kartu Keluarga', '102'),
('1025', 'UBAH KARENA MENINGGAL', 'Perubahan data Kartu Keluarga', '102'),
('1026', 'PISAH KK KARENA MENIKAH', 'Perubahan data Kartu Keluarga Karena Menikah', '102'),
('1027', 'LEGALISIR KARTU KELUARGA', '..', '102'),
('1031', 'KEPENGURUSAN  BARU', 'Akte Kelahiran Baru', '103'),
('1032', 'AKTE HILANG', 'Akte Hilang', '103'),
('1033', 'AKTA PERCERAIAN', 'Pelayanan pengurusan AKTA Perceraian', '103'),
('1041', 'AKTA LAHIR BARU ( 0 s/d 60 Hari)', 'Pelayanan Pembuatan Akta Lahir Baru', '104'),
('1042', 'AKTA LAHIR BARU ( 61 hari s/d  1 Tahun)', '', '104'),
('1043', 'AKTA LAHIR BARU (  diatas 1 Tahun)', '', '104'),
('1051', 'AKTA KEMATIAN', 'Pelayanan Pembuatan AKTA Kematian / Meninggal Dunia', '105'),
('1061', 'AKTA PENGESAHAN ANAK BARU', '', '106'),
('1062', 'AKTA HILANG', '', '106');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_syarat`
--

CREATE TABLE IF NOT EXISTS `ad_syarat` (
`id_syarat` int(2) NOT NULL,
  `nama_syarat` varchar(150) NOT NULL,
  `id_sub_kategori` varchar(5) NOT NULL,
  `keterangan_syarat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_syarat`
--

INSERT INTO `ad_syarat` (`id_syarat`, `nama_syarat`, `id_sub_kategori`, `keterangan_syarat`) VALUES
(1, 'Surat Pengantar Desa/Kelurahan', '1021', 'Surat Pengantar dari kepala desa atau kelurahan'),
(2, 'Fotocopy AKTE Kelahiran', '1021', 'Fotocopy AKTE Kelahiran'),
(3, 'Formulir (Berkas F1.01)', '1021', 'Formulir (Berkas F1.01)'),
(4, 'Permohonan Pembuatan KK (Berkas F1.06)', '1021', 'Formulir F1.06'),
(5, 'Surat Keterangan Hilang dari Kepala Desa / Lurah', '1022', 'Surat Keterangan Hilang dari Kepala Desa / Lurah'),
(6, 'Kartu Keluarga Lama', '1023', 'Kartu Keluarga Lama'),
(7, 'Kutipan AKTE Kelahiran', '1023', 'Kutipan AKTE Kelahiran'),
(9, 'Paspor dan Izin Tinggal Tetap bagi OA', '1023', 'Paspor dan Izin Tinggal Tetap bagi OA'),
(10, 'Kartu Keluarga Lama Atau KK yang ditumpangi', '1024', 'Kartu Keluarga Lama Atau KK yang ditumpangi'),
(11, 'Izin Tinggal Tetap', '1024', 'Izin Tinggal Tetap'),
(12, 'Surat Keterangan Catatan Kepolisian', '1024', 'Surat Keterangan Catatan Kepolisian'),
(13, 'Kartu Keluarga yang lama (ASLI)', '1025', 'Kartu Keluarga yang lama (ASLI)'),
(14, 'Surat Keterangan Kematian', '1025', 'Surat Keterangan Kematian'),
(15, 'SKP / SKPD Yang pindah dalam wilayah NKRI', '1025', 'SKP / SKPD Yang pindah dalam wilayah NKRI'),
(16, 'Surat Keterangan Kehilangan dari Kepolisian', '1026', 'Surat Keterangan Kehilangan dari Kepolisian'),
(17, 'FotoCopy Kartu Keluarga', '1026', 'FotoCopy Kartu Keluarga'),
(18, 'Paspor dan Izin Tinggal tetap bagi OA', '1026', 'Paspor dan Izin Tinggal tetap bagi OA'),
(19, 'Kartu Keluarga Asli yang Disahkan / Legalisir', '1027', 'Kartu Keluarga Asli yang Disahkan / Legalisir'),
(20, 'Max. 7 Lembar Kartu Keluarga yang di Legalisir', '1027', 'Max. 7 Lembar Kartu Keluarga yang di Legalisir'),
(21, 'Surat Pengantar', '1011', 'Surat Pengantar'),
(22, 'Kartu Keluarga Asli', '1011', 'Kartu Keluarga Asli'),
(23, 'Pas Photo (Warna) 3 x 4 2 Lembar', '1011', 'Pas Photo (Warna) 3 x 4 2 Lembar'),
(24, 'Pas Photo (Warna) 2 x 3 2 Lembar', '1011', 'Pas Photo (Warna) 2 x 3 2 Lembar'),
(25, 'Surat Keterangan Kehilangan dari Kepolisian', '1012', 'Surat Keterangan Kehilangan dari Kepolisian'),
(26, 'FotoCopy Kartu Keluarga', '1012', 'FotoCopy Kartu Keluarga'),
(27, 'FotoCopy Kartu Keluarga', '1013', 'FotoCopy Kartu Keluarga'),
(28, 'E-KTP Asli', '1013', 'E-KTP Asli'),
(29, 'Surat Keterangan / Bukti Perubahan Peristiwa Kepen', '1013', 'Surat Keterangan / Bukti Perubahan Peristiwa Kependudukan dan Peristiwa Penting'),
(30, 'SKDLN Bagi WNI yang datang dan LN Karena Pindah', '1014', 'SKDLN Bagi WNI yang datang dan LN Karena Pindah'),
(31, 'Formulir Permohonan Akta Kelahiran .', '1041', 'Mengisi Formulir Permohonan Akta Kelahiran'),
(32, 'Surat Kelahiran Asli dari desa/kelurahan. /dokter/bidan/Rumah Sakit penolong kelahiran.', '1041', 'Surat Kelahiran Asli dari desa/kelurahan. /dokter/bidan/Rumah Sakit penolong kelahiran.'),
(33, 'Foto copy Akta Nikah /Akta Perkawinan Orang tua yang diligaliser pejabat berwenang', '1041', 'Foto copy Akta Nikah /Akta Perkawinan Orang tua yang diligaliser pejabat berwenang'),
(34, 'Foto copy KTP orang tua', '1041', 'Foto copy KTP orang tua'),
(35, 'Foto copy Kartu Keluarga', '1041', 'Foto copy Kartu Keluarga'),
(36, 'Menghadirkan 2 orang saksi dan foto copy KTP saksi', '1041', 'Menghadirkan 2 orang saksi dan foto copy KTP saksi'),
(37, 'Surat Kuasa bermaterai Rp. 6.000,- bagi yang dikuasakan', '1041', 'Surat Kuasa ber materai Rp. 6.000,- bagi yang dikuasakan'),
(38, 'Surat keterangan dari kepolisian bagi anak yang tidak diketahui asal usulnya siapa orang tuanya *', '1041', 'Surat keterangan dari kepolisian bagi anak yang tidak diketahui asal usulnya siapa orang tuanya *'),
(39, 'Formulir Permohonan Akta Kelahiran', '1042', 'Mengisi Formulir Permohonan Akta Kelahiran'),
(40, 'Surat Kelahiran Asli dari desa/kelurahan dan dokter/bidan/penolong kelahiran', '1042', 'Surat Kelahiran Asli dari desa/kelurahan dan dokter/bidan/penolong kelahiran'),
(41, 'Foto copy Akta Nikah/Akta Perkawinan orang tua dilegalisir Pejabat berwenang', '1042', 'Foto copy Akta Nikah/Akta Perkawinan orang tua dilegalisir Pejabat berwenang'),
(42, 'Foto copy KTP orang tua', '1042', 'Foto copy KTP orang tua'),
(43, 'Foto copy Kartu Keluarga', '1042', 'Foto copy Kartu Keluarga'),
(44, 'Menghadirkan 2 orang saksi dan foto copy KTP saksi.', '1042', 'Menghadirkan 2 orang saksi dan foto copy KTP saksi.'),
(45, 'Surat Kuasa bermaterai Rp. 6.000,- bagi yang dikuasakan', '1042', 'Surat Kuasa bermaterai Rp. 6.000,- bagi yang dikuasakan'),
(46, 'Surat  Pernyataan ', '1042', 'Surat  Pernyataan '),
(47, 'Denda Keterlambatan Pencatatan Kelahiran sebesar Rp. 25.000', '1042', 'Denda Keterlambatan Pencatatan Kelahiran sebesar Rp. 25.000 '),
(48, 'Formulir Pendaftaran /permohonan Akta Kelahiran', '1043', 'Formulir Pendaftaran /permohonan Akta Kelahiran'),
(49, 'Surat Kelahiran  Asli dari Desa/ Kelurahan / dokter / bidan desa', '1043', 'Surat Kelahiran  Asli dari Desa/ Kelurahan / dokter / bidan desa'),
(50, 'Foto copy Akta Nikah /Akta Perkawinan orang tua dilegalisir oleh pejabat berwenang', '1043', 'Foto copy Akta Nikah /Akta Perkawinan orang tua dilegalisir oleh pejabat berwenang'),
(51, 'Foto copy KK dan KTP orang tua', '1043', 'Foto copy KK dan KTP orang tua'),
(52, 'Menghadirkan 2 orang saksi dan foto copy KTP saksi', '1043', 'Menghadirkan 2 orang saksi dan foto copy KTP saksi'),
(53, 'Surat Kuasa bermaterai Rp. 6.000,- bagi yang dikuasakan', '1043', 'Surat Kuasa bermaterai Rp. 6.000,- bagi yang dikuasakan'),
(54, 'Foto copy Ijasah bagi yang  memiliki ijasah/Surat Keterangan tidak memiliki ijasah dari desa/kelurahan bagi yang tidak memiliki Ijasah', '1043', 'Foto copy Ijasah bagi yang  memiliki ijasah/Surat Keterangan tidak memiliki ijasah dari desa/kelurahan bagi yang tidak memiliki Ijasah'),
(55, 'Denda Keterlambatan Pencatatan Kelahiran ', '1043', 'Denda Keterlambatan Pencatatan Kelahiran '),
(56, 'Surat keterangan kematian dari kepala desa/lurah setempat/ dokter/rumah sakit', '1051', 'Surat keterangan kematian dari kepala desa/lurah setempat/ dokter/rumah sakit'),
(57, 'Akta kelahiran/perkawinan dari si mati', '1051', 'Akta kelahiran/perkawinan dari si mati'),
(58, 'Saksi 2 orang baik keluarga maupun bukan dengan syarat telah genap usia 21 tahun', '1051', 'Saksi 2 orang baik keluarga maupun bukan dengan syarat telah genap usia 21 tahun'),
(59, 'Foto copy KTP/ KK ( bagi yang memiliki).', '1051', 'Foto copy KTP/ KK ( bagi yang memiliki).'),
(60, 'Pelapor asli kematian RT', '1051', 'Pelapor asli kematian RT'),
(61, 'Mengisi formulir Akta Perkawinan', '1031', 'Mengisi formulir Akta Perkawinan'),
(62, 'Foto copi Akta Kelahiran/ surat keterangan kenal lahir kedua calon mempelai', '1031', 'Foto copi Akta Kelahiran/ surat keterangan kenal lahir kedua calon mempelai'),
(63, 'Surat  keterangan  dari  Desa/  Kelurahan  dengan  menggunakan  Blanko  Model N1, N2, N3, N4.', '1031', 'Surat  keterangan  dari  Desa/  Kelurahan  dengan  menggunakan  Blanko  Model N1, N2, N3, N4.'),
(64, 'Foto copy KTP / KK kedua calon mempelai', '1031', 'Foto copy KTP / KK kedua calon mempelai'),
(65, 'Surat keterangan kesehatan dari puskesmas dan Rumah sakit', '1031', 'Surat keterangan kesehatan dari puskesmas dan Rumah sakit'),
(66, 'Menghadapkan 2 orang saksi dan foto copi KTP saksi', '1031', 'Menghadapkan 2 orang saksi dan foto copi KTP saksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_user`
--

CREATE TABLE IF NOT EXISTS `ad_user` (
  `userid` varchar(18) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `level` int(1) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `waktu_login` datetime NOT NULL,
  `avatar` varchar(30) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `pimpinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ad_user`
--

INSERT INTO `ad_user` (`userid`, `username`, `password`, `level`, `tgl_daftar`, `status`, `waktu_login`, `avatar`, `bagian`, `pimpinan`) VALUES
('adminduk', 'adminduk', '123', 1, '2015-11-15 04:39:08', 1, '0000-00-00 00:00:00', 'logo2.jpg', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_wni`
--

CREATE TABLE IF NOT EXISTS `biodata_wni` (
  `nik` varchar(20) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nama_lgkp_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata_wni`
--

INSERT INTO `biodata_wni` (`nik`, `nama_penduduk`, `tmpt_lahir`, `tgl_lahir`, `nama_lgkp_ibu`) VALUES
('32434523452234', 'JULIANDRI SAPUTRA', 'Tembilahan', '1990-09-10', 'Zulaikah'),
('4553434532', 'JOKO SAPUTRA', 'Belitung Timur', '2010-09-08', 'Ramli'),
('5433456342235', 'RAHMAD', 'Sungai Salak', '2011-09-30', 'Alvinur Huda'),
('543523432', 'DIAN WAHYUNI', 'Salatiga', '2013-09-12', 'Jokowi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_keluarga`
--

CREATE TABLE IF NOT EXISTS `data_keluarga` (
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_keluarga`
--

INSERT INTO `data_keluarga` (`nik`, `alamat`, `no_hp`) VALUES
('32434523452234', 'Jl. Kembang', '085319564425'),
('5433456342235', 'Jl. Kartini', '08653432432'),
('543523432', 'Jl. Kartini', '456344346344'),
('4553434532', 'Jl. Cendrawasih 2', '2345643536');

-- --------------------------------------------------------

--
-- Struktur dari tabel `scanner`
--

CREATE TABLE IF NOT EXISTS `scanner` (
  `ID` int(11) NOT NULL,
  `NAMA_FILE` varchar(100) NOT NULL,
  `ALAMAT_FILE` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_arsip`
--
ALTER TABLE `ad_arsip`
 ADD PRIMARY KEY (`id_proses`);

--
-- Indexes for table `ad_kategori`
--
ALTER TABLE `ad_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `ad_proses`
--
ALTER TABLE `ad_proses`
 ADD PRIMARY KEY (`id_proses`);

--
-- Indexes for table `ad_sub_kategori`
--
ALTER TABLE `ad_sub_kategori`
 ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indexes for table `ad_syarat`
--
ALTER TABLE `ad_syarat`
 ADD PRIMARY KEY (`id_syarat`);

--
-- Indexes for table `ad_user`
--
ALTER TABLE `ad_user`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `biodata_wni`
--
ALTER TABLE `biodata_wni`
 ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_syarat`
--
ALTER TABLE `ad_syarat`
MODIFY `id_syarat` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
