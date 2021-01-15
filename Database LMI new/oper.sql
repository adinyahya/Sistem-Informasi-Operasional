-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 01:03 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oper`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_golongan`
--

CREATE TABLE IF NOT EXISTS `tb_mst_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_golongan`
--

INSERT INTO `tb_mst_golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'Alat Tulis Kantor'),
(2, 'IT'),
(3, 'Operasional Kantor'),
(4, 'ASET');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_invetaris`
--

CREATE TABLE IF NOT EXISTS `tb_mst_invetaris` (
  `id` int(11) NOT NULL,
  `nama_item` varchar(255) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `tahun` date NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kota` int(4) NOT NULL,
  `nomor_inventaris` varchar(255) NOT NULL,
  `img` varchar(99) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_invetaris`
--

INSERT INTO `tb_mst_invetaris` (`id`, `nama_item`, `satuan`, `stok`, `id_golongan`, `tahun`, `deskripsi`, `id_kota`, `nomor_inventaris`, `img`) VALUES
(34, 'b', 'a', 9, 2, '2018-07-11', 'a', 0, 'LMI.0.02.00000034.2018', '1.png'),
(35, 'q', 'q', 1, 4, '2018-07-11', 'q', 0, 'LMI.0.04.00000035.2018', 'WIN_20180710_16_11_27_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_jenis_keluhan`
--

CREATE TABLE IF NOT EXISTS `tb_mst_jenis_keluhan` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_jenis_keluhan`
--

INSERT INTO `tb_mst_jenis_keluhan` (`id_jenis`, `nama_jenis`) VALUES
(1, 'BUKU TAMU'),
(2, 'TELEPON MASUK'),
(3, 'WHATSAPP'),
(4, 'SURAT MASUK'),
(5, 'KOMPLAIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_layanan`
--

CREATE TABLE IF NOT EXISTS `tb_mst_layanan` (
  `id_keluhan` int(11) NOT NULL,
  `tanggal_catat` date NOT NULL,
  `jam_catat` time NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `jenis_donatur` varchar(15) NOT NULL,
  `detail_jenis_donatur` varchar(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `isi_surat` text NOT NULL,
  `sumber_informasi` text NOT NULL,
  `isi_informasi` text NOT NULL,
  `tindakan` text NOT NULL,
  `jenis_keluhan` int(11) NOT NULL,
  `nama_keluhan` varchar(55) NOT NULL,
  `penerima` varchar(8) NOT NULL,
  `id_kota` int(4) NOT NULL,
  `layanan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mst_layanan`
--

INSERT INTO `tb_mst_layanan` (`id_keluhan`, `tanggal_catat`, `jam_catat`, `nama`, `alamat`, `nomor_telepon`, `jenis_donatur`, `detail_jenis_donatur`, `keperluan`, `nomor_surat`, `tanggal_surat`, `isi_surat`, `sumber_informasi`, `isi_informasi`, `tindakan`, `jenis_keluhan`, `nama_keluhan`, `penerima`, `id_kota`, `layanan`) VALUES
(95, '2018-07-22', '10:24:46', 'a', '', '', '', '', '', '1', '2018-07-10', 'a', '', '', '', 4, 'SURAT MASUK', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(96, '2018-07-22', '10:25:14', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(97, '2018-07-22', '10:25:14', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(98, '2018-07-22', '10:25:18', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(99, '2018-07-22', '10:25:18', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(100, '2018-07-22', '10:25:21', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(101, '2018-07-22', '10:25:21', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(102, '2018-07-22', '10:25:22', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(103, '2018-07-22', '10:25:22', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(104, '2018-07-22', '10:25:23', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(105, '2018-07-22', '10:25:23', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(106, '2018-07-22', '10:25:24', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(107, '2018-07-22', '10:25:24', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(108, '2018-07-22', '10:25:25', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(109, '2018-07-22', '10:25:25', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(110, '2018-07-22', '10:25:26', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(111, '2018-07-22', '10:25:26', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(112, '2018-07-22', '10:25:27', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(113, '2018-07-22', '10:25:27', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(114, '2018-07-22', '10:25:28', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(115, '2018-07-22', '10:25:28', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(116, '2018-07-22', '10:25:29', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(117, '2018-07-22', '10:25:29', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(118, '2018-07-22', '10:25:29', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(119, '2018-07-22', '10:25:29', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(120, '2018-07-22', '10:25:30', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(121, '2018-07-22', '10:25:30', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(122, '2018-07-22', '10:25:30', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(123, '2018-07-22', '10:25:30', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(124, '2018-07-22', '10:25:30', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(125, '2018-07-22', '10:25:30', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(126, '2018-07-22', '10:25:31', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(127, '2018-07-22', '10:25:31', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(128, '2018-07-22', '10:25:31', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(129, '2018-07-22', '10:25:31', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(130, '2018-07-22', '10:25:32', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(131, '2018-07-22', '10:25:32', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(132, '2018-07-22', '10:25:32', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(133, '2018-07-22', '10:25:32', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(134, '2018-07-22', '10:25:32', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(135, '2018-07-22', '10:25:32', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(136, '2018-07-22', '10:25:33', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(137, '2018-07-22', '10:25:33', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(138, '2018-07-22', '10:25:33', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(139, '2018-07-22', '10:25:33', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(140, '2018-07-22', '10:25:33', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(141, '2018-07-22', '10:25:33', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(142, '2018-07-22', '10:25:34', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(143, '2018-07-22', '10:25:34', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(144, '2018-07-22', '10:25:34', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(145, '2018-07-22', '10:25:34', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(146, '2018-07-22', '10:25:34', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(147, '2018-07-22', '10:25:34', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(148, '2018-07-22', '10:25:36', 'a', 'a', '1', 'Donatur', 'a', 'a', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(149, '2018-07-22', '10:25:36', 'a', '', '', '', '', '', '', '0000-00-00', '', 'a', 'a', 'a', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(150, '2018-07-22', '10:25:52', 'a', '', '', '', '', '', '1', '2018-07-25', 'a', '', '', '', 4, 'SURAT MASUK', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(151, '2018-07-22', '10:26:05', 'a', '', '1', 'Donatur', '', 'q', '', '0000-00-00', '', '', '', '', 2, 'TELEPON MASUK', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(152, '2018-07-22', '10:26:19', 'qs', '', '12', 'Donatur', '', 'as', '', '0000-00-00', '', '', '', '', 3, 'WHATSAPP', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(153, '2018-07-22', '10:26:25', 'ax', '', '', '', '', '', '', '0000-00-00', '', 'a', 'x', 's', 5, 'KOMPLAIN', 'admin', 0, 'KANTOR PUSAT SURABAYA'),
(154, '2018-07-23', '10:13:29', 'sas', 'e', '123', 'Donatur', 'sd', 'we', '', '0000-00-00', '', '', '', '', 1, 'BUKU TAMU', 'admin', 0, 'KANTOR PUSAT SURABAYA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mst_regencies`
--

CREATE TABLE IF NOT EXISTS `tb_mst_regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `wilayah` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `kantor_wilayah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_mst_regencies`
--

INSERT INTO `tb_mst_regencies` (`id`, `province_id`, `name`, `area`, `wilayah`, `kantor_wilayah`) VALUES
('1101', '11', 'KABUPATEN SIMEULUE', '0', '', NULL),
('1102', '11', 'KABUPATEN ACEH SINGKIL', '0', '', NULL),
('1103', '11', 'KABUPATEN ACEH SELATAN', '0', '', NULL),
('1104', '11', 'KABUPATEN ACEH TENGGARA', '0', '', NULL),
('1105', '11', 'KABUPATEN ACEH TIMUR', '0', '', NULL),
('1106', '11', 'KABUPATEN ACEH TENGAH', '0', '', NULL),
('1107', '11', 'KABUPATEN ACEH BARAT', '0', '', NULL),
('1108', '11', 'KABUPATEN ACEH BESAR', '0', '', NULL),
('1109', '11', 'KABUPATEN PIDIE', '0', '', NULL),
('1110', '11', 'KABUPATEN BIREUEN', '0', '', NULL),
('1111', '11', 'KABUPATEN ACEH UTARA', '0', '', NULL),
('1112', '11', 'KABUPATEN ACEH BARAT DAYA', '0', '', NULL),
('1113', '11', 'KABUPATEN GAYO LUES', '0', '', NULL),
('1114', '11', 'KABUPATEN ACEH TAMIANG', '0', '', NULL),
('1115', '11', 'KABUPATEN NAGAN RAYA', '0', '', NULL),
('1116', '11', 'KABUPATEN ACEH JAYA', '0', '', NULL),
('1117', '11', 'KABUPATEN BENER MERIAH', '0', '', NULL),
('1118', '11', 'KABUPATEN PIDIE JAYA', '0', '', NULL),
('1171', '11', 'KOTA BANDA ACEH', '0', '', NULL),
('1172', '11', 'KOTA SABANG', '0', '', NULL),
('1173', '11', 'KOTA LANGSA', '0', '', NULL),
('1174', '11', 'KOTA LHOKSEUMAWE', '0', '', NULL),
('1175', '11', 'KOTA SUBULUSSALAM', '0', '', NULL),
('1201', '12', 'KABUPATEN NIAS', '0', '', NULL),
('1202', '12', 'KABUPATEN MANDAILING NATAL', '0', '', NULL),
('1203', '12', 'KABUPATEN TAPANULI SELATAN', '0', '', NULL),
('1204', '12', 'KABUPATEN TAPANULI TENGAH', '0', '', NULL),
('1205', '12', 'KABUPATEN TAPANULI UTARA', '0', '', NULL),
('1206', '12', 'KABUPATEN TOBA SAMOSIR', '0', '', NULL),
('1207', '12', 'KABUPATEN LABUHAN BATU', '0', '', NULL),
('1208', '12', 'KABUPATEN ASAHAN', '0', '', NULL),
('1209', '12', 'KABUPATEN SIMALUNGUN', '0', '', NULL),
('1210', '12', 'KABUPATEN DAIRI', '0', '', NULL),
('1211', '12', 'KABUPATEN KARO', '0', '', NULL),
('1212', '12', 'KABUPATEN DELI SERDANG', '0', '', NULL),
('1213', '12', 'KABUPATEN LANGKAT', '0', '', NULL),
('1214', '12', 'KABUPATEN NIAS SELATAN', '0', '', NULL),
('1215', '12', 'KABUPATEN HUMBANG HASUNDUTAN', '0', '', NULL),
('1216', '12', 'KABUPATEN PAKPAK BHARAT', '0', '', NULL),
('1217', '12', 'KABUPATEN SAMOSIR', '0', '', NULL),
('1218', '12', 'KABUPATEN SERDANG BEDAGAI', '0', '', NULL),
('1219', '12', 'KABUPATEN BATU BARA', '0', '', NULL),
('1220', '12', 'KABUPATEN PADANG LAWAS UTARA', '0', '', NULL),
('1221', '12', 'KABUPATEN PADANG LAWAS', '0', '', NULL),
('1222', '12', 'KABUPATEN LABUHAN BATU SELATAN', '0', '', NULL),
('1223', '12', 'KABUPATEN LABUHAN BATU UTARA', '0', '', NULL),
('1224', '12', 'KABUPATEN NIAS UTARA', '0', '', NULL),
('1225', '12', 'KABUPATEN NIAS BARAT', '0', '', NULL),
('1271', '12', 'KOTA SIBOLGA', '0', '', NULL),
('1272', '12', 'KOTA TANJUNG BALAI', '0', '', NULL),
('1273', '12', 'KOTA PEMATANG SIANTAR', '0', '', NULL),
('1274', '12', 'KOTA TEBING TINGGI', '0', '', NULL),
('1275', '12', 'KOTA MEDAN', '0', '', NULL),
('1276', '12', 'KOTA BINJAI', '0', '', NULL),
('1277', '12', 'KOTA PADANGSIDIMPUAN', '0', '', NULL),
('1278', '12', 'KOTA GUNUNGSITOLI', '0', '', NULL),
('1301', '13', 'KABUPATEN KEPULAUAN MENTAWAI', '0', '', NULL),
('1302', '13', 'KABUPATEN PESISIR SELATAN', '0', '', NULL),
('1303', '13', 'KABUPATEN SOLOK', '0', '', NULL),
('1304', '13', 'KABUPATEN SIJUNJUNG', '0', '', NULL),
('1305', '13', 'KABUPATEN TANAH DATAR', '0', '', NULL),
('1306', '13', 'KABUPATEN PADANG PARIAMAN', '0', '', NULL),
('1307', '13', 'KABUPATEN AGAM', '0', '', NULL),
('1308', '13', 'KABUPATEN LIMA PULUH KOTA', '0', '', NULL),
('1309', '13', 'KABUPATEN PASAMAN', '0', '', NULL),
('1310', '13', 'KABUPATEN SOLOK SELATAN', '0', '', NULL),
('1311', '13', 'KABUPATEN DHARMASRAYA', '0', '', NULL),
('1312', '13', 'KABUPATEN PASAMAN BARAT', '0', '', NULL),
('1371', '13', 'KOTA PADANG', '0', '', NULL),
('1372', '13', 'KOTA SOLOK', '0', '', NULL),
('1373', '13', 'KOTA SAWAH LUNTO', '0', '', NULL),
('1374', '13', 'KOTA PADANG PANJANG', '0', '', NULL),
('1375', '13', 'KOTA BUKITTINGGI', '0', '', NULL),
('1376', '13', 'KOTA PAYAKUMBUH', '0', '', NULL),
('1377', '13', 'KOTA PARIAMAN', '0', '', NULL),
('1401', '14', 'KABUPATEN KUANTAN SINGINGI', '0', '', NULL),
('1402', '14', 'KABUPATEN INDRAGIRI HULU', '0', '', NULL),
('1403', '14', 'KABUPATEN INDRAGIRI HILIR', '0', '', NULL),
('1404', '14', 'KABUPATEN PELALAWAN', '0', '', NULL),
('1405', '14', 'KABUPATEN S I A K', '0', '', NULL),
('1406', '14', 'KABUPATEN KAMPAR', '0', '', NULL),
('1407', '14', 'KABUPATEN ROKAN HULU', '0', '', NULL),
('1408', '14', 'KABUPATEN BENGKALIS', '0', '', NULL),
('1409', '14', 'KABUPATEN ROKAN HILIR', '0', '', NULL),
('1410', '14', 'KABUPATEN KEPULAUAN MERANTI', '0', '', NULL),
('1471', '14', 'KOTA PEKANBARU', '0', '', NULL),
('1473', '14', 'KOTA D U M A I', '0', '', NULL),
('1501', '15', 'KABUPATEN KERINCI', '0', '', NULL),
('1502', '15', 'KABUPATEN MERANGIN', '0', '', NULL),
('1503', '15', 'KABUPATEN SAROLANGUN', '0', '', NULL),
('1504', '15', 'KABUPATEN BATANG HARI', '0', '', NULL),
('1505', '15', 'KABUPATEN MUARO JAMBI', '0', '', NULL),
('1506', '15', 'KABUPATEN TANJUNG JABUNG TIMUR', '0', '', NULL),
('1507', '15', 'KABUPATEN TANJUNG JABUNG BARAT', '0', '', NULL),
('1508', '15', 'KABUPATEN TEBO', '0', '', NULL),
('1509', '15', 'KABUPATEN BUNGO', '0', '', NULL),
('1571', '15', 'KOTA JAMBI', '0', '', NULL),
('1572', '15', 'KOTA SUNGAI PENUH', '0', '', NULL),
('1601', '16', 'KABUPATEN OGAN KOMERING ULU', '1', '3', NULL),
('1602', '16', 'KABUPATEN OGAN KOMERING ILIR', '1', '3', NULL),
('1603', '16', 'KABUPATEN MUARA ENIM', '1', '3', NULL),
('1604', '16', 'KABUPATEN LAHAT', '1', '3', NULL),
('1605', '16', 'KABUPATEN MUSI RAWAS', '1', '3', NULL),
('1606', '16', 'KABUPATEN MUSI BANYUASIN', '1', '3', NULL),
('1607', '16', 'KABUPATEN BANYU ASIN', '1', '3', NULL),
('1608', '16', 'KABUPATEN OGAN KOMERING ULU SELATAN', '1', '3', NULL),
('1609', '16', 'KABUPATEN OGAN KOMERING ULU TIMUR', '1', '3', NULL),
('1610', '16', 'KABUPATEN OGAN ILIR', '1', '3', NULL),
('1611', '16', 'KABUPATEN EMPAT LAWANG', '1', '3', NULL),
('1612', '16', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR', '1', '3', NULL),
('1613', '16', 'KABUPATEN MUSI RAWAS UTARA', '1', '3', NULL),
('1671', '16', 'KOTA PALEMBANG', '1', '3', NULL),
('1672', '16', 'KOTA PRABUMULIH', '1', '3', NULL),
('1673', '16', 'KOTA PAGAR ALAM', '1', '3', NULL),
('1674', '16', 'KOTA LUBUKLINGGAU', '1', '3', NULL),
('1701', '17', 'KABUPATEN BENGKULU SELATAN', '0', '0', NULL),
('1702', '17', 'KABUPATEN REJANG LEBONG', '0', '0', NULL),
('1703', '17', 'KABUPATEN BENGKULU UTARA', '0', '0', NULL),
('1704', '17', 'KABUPATEN KAUR', '0', '0', NULL),
('1705', '17', 'KABUPATEN SELUMA', '0', '0', NULL),
('1706', '17', 'KABUPATEN MUKOMUKO', '0', '0', NULL),
('1707', '17', 'KABUPATEN LEBONG', '0', '0', NULL),
('1708', '17', 'KABUPATEN KEPAHIANG', '0', '0', NULL),
('1709', '17', 'KABUPATEN BENGKULU TENGAH', '0', '0', NULL),
('1771', '17', 'KOTA BENGKULU', '0', '0', NULL),
('1801', '18', 'KABUPATEN LAMPUNG BARAT', '0', '0', NULL),
('1802', '18', 'KABUPATEN TANGGAMUS', '0', '0', NULL),
('1803', '18', 'KABUPATEN LAMPUNG SELATAN', '0', '0', NULL),
('1804', '18', 'KABUPATEN LAMPUNG TIMUR', '0', '0', NULL),
('1805', '18', 'KABUPATEN LAMPUNG TENGAH', '0', '0', NULL),
('1806', '18', 'KABUPATEN LAMPUNG UTARA', '0', '0', NULL),
('1807', '18', 'KABUPATEN WAY KANAN', '0', '0', NULL),
('1808', '18', 'KABUPATEN TULANGBAWANG', '0', '0', NULL),
('1809', '18', 'KABUPATEN PESAWARAN', '0', '0', NULL),
('1810', '18', 'KABUPATEN PRINGSEWU', '0', '0', NULL),
('1811', '18', 'KABUPATEN MESUJI', '0', '0', NULL),
('1812', '18', 'KABUPATEN TULANG BAWANG BARAT', '0', '0', NULL),
('1813', '18', 'KABUPATEN PESISIR BARAT', '0', '0', NULL),
('1871', '18', 'KOTA BANDAR LAMPUNG', '0', '0', NULL),
('1872', '18', 'KOTA METRO', '0', '0', NULL),
('1901', '19', 'KABUPATEN BANGKA', '0', '0', NULL),
('1902', '19', 'KABUPATEN BELITUNG', '0', '0', NULL),
('1903', '19', 'KABUPATEN BANGKA BARAT', '0', '0', NULL),
('1904', '19', 'KABUPATEN BANGKA TENGAH', '0', '0', NULL),
('1905', '19', 'KABUPATEN BANGKA SELATAN', '0', '0', NULL),
('1906', '19', 'KABUPATEN BELITUNG TIMUR', '0', '0', NULL),
('1971', '19', 'KOTA PANGKAL PINANG', '0', '0', NULL),
('2000', '20', 'KEP RIAU', '1', '5', NULL),
('2101', '21', 'KABUPATEN KARIMUN', '1', '5', NULL),
('2102', '21', 'KABUPATEN BINTAN', '1', '5', NULL),
('2103', '21', 'KABUPATEN NATUNA', '1', '5', NULL),
('2104', '21', 'KABUPATEN LINGGA', '1', '5', NULL),
('2105', '21', 'KABUPATEN KEPULAUAN ANAMBAS', '1', '5', NULL),
('2171', '21', 'KOTA BATAM', '1', '5', NULL),
('2172', '21', 'KOTA TANJUNG PINANG', '1', '5', NULL),
('3100', '31', 'KOTA JAKARTA', '1', '2', NULL),
('3101', '31', 'KABUPATEN KEPULAUAN SERIBU', '1', '2', NULL),
('3171', '31', 'KOTA JAKARTA SELATAN', '1', '2', NULL),
('3172', '31', 'KOTA JAKARTA TIMUR', '1', '2', NULL),
('3173', '31', 'KOTA JAKARTA PUSAT', '1', '2', NULL),
('3174', '31', 'KOTA JAKARTA BARAT', '1', '2', NULL),
('3175', '31', 'KOTA JAKARTA UTARA', '1', '2', NULL),
('3201', '32', 'KABUPATEN BOGOR', '0', '', NULL),
('3202', '32', 'KABUPATEN SUKABUMI', '0', '', NULL),
('3203', '32', 'KABUPATEN CIANJUR', '0', '', NULL),
('3204', '32', 'KABUPATEN BANDUNG', '0', '', NULL),
('3205', '32', 'KABUPATEN GARUT', '0', '', NULL),
('3206', '32', 'KABUPATEN TASIKMALAYA', '0', '', NULL),
('3207', '32', 'KABUPATEN CIAMIS', '0', '', NULL),
('3208', '32', 'KABUPATEN KUNINGAN', '0', '', NULL),
('3209', '32', 'KABUPATEN CIREBON', '0', '', NULL),
('3210', '32', 'KABUPATEN MAJALENGKA', '0', '', NULL),
('3211', '32', 'KABUPATEN SUMEDANG', '0', '', NULL),
('3212', '32', 'KABUPATEN INDRAMAYU', '0', '', NULL),
('3213', '32', 'KABUPATEN SUBANG', '0', '', NULL),
('3214', '32', 'KABUPATEN PURWAKARTA', '0', '', NULL),
('3215', '32', 'KABUPATEN KARAWANG', '0', '', NULL),
('3216', '32', 'KABUPATEN BEKASI', '0', '0', NULL),
('3217', '32', 'KABUPATEN BANDUNG BARAT', '0', '0', NULL),
('3218', '32', 'KABUPATEN PANGANDARAN', '0', '0', NULL),
('3271', '32', 'KOTA BOGOR', '0', '0', NULL),
('3272', '32', 'KOTA SUKABUMI', '0', '0', NULL),
('3273', '32', 'KOTA BANDUNG', '0', '0', NULL),
('3274', '32', 'KOTA CIREBON', '0', '0', NULL),
('3275', '32', 'KOTA BEKASI', '0', '0', NULL),
('3276', '32', 'KOTA DEPOK', '0', '', NULL),
('3277', '32', 'KOTA CIMAHI', '0', '', NULL),
('3278', '32', 'KOTA TASIKMALAYA', '0', '', NULL),
('3279', '32', 'KOTA BANJAR', '0', '', NULL),
('3301', '33', 'KABUPATEN CILACAP', '0', '', NULL),
('3302', '33', 'KABUPATEN BANYUMAS', '0', '', NULL),
('3303', '33', 'KABUPATEN PURBALINGGA', '0', '', NULL),
('3304', '33', 'KABUPATEN BANJARNEGARA', '0', '', NULL),
('3305', '33', 'KABUPATEN KEBUMEN', '0', '', NULL),
('3306', '33', 'KABUPATEN PURWOREJO', '0', '', NULL),
('3307', '33', 'KABUPATEN WONOSOBO', '0', '', NULL),
('3308', '33', 'KABUPATEN MAGELANG', '0', '', NULL),
('3309', '33', 'KABUPATEN BOYOLALI', '0', '', NULL),
('3310', '33', 'KABUPATEN KLATEN', '0', '', NULL),
('3311', '33', 'KABUPATEN SUKOHARJO', '0', '', NULL),
('3312', '33', 'KABUPATEN WONOGIRI', '0', '', NULL),
('3313', '33', 'KABUPATEN KARANGANYAR', '0', '', NULL),
('3314', '33', 'KABUPATEN SRAGEN', '0', '', NULL),
('3315', '33', 'KABUPATEN GROBOGAN', '0', '', NULL),
('3316', '33', 'KABUPATEN BLORA', '0', '', NULL),
('3317', '33', 'KABUPATEN REMBANG', '0', '', NULL),
('3318', '33', 'KABUPATEN PATI', '0', '', NULL),
('3319', '33', 'KABUPATEN KUDUS', '0', '', NULL),
('3320', '33', 'KABUPATEN JEPARA', '0', '', NULL),
('3321', '33', 'KABUPATEN DEMAK', '0', '', NULL),
('3322', '33', 'KABUPATEN SEMARANG', '0', '', NULL),
('3323', '33', 'KABUPATEN TEMANGGUNG', '0', '', NULL),
('3324', '33', 'KABUPATEN KENDAL', '0', '', NULL),
('3325', '33', 'KABUPATEN BATANG', '0', '', NULL),
('3326', '33', 'KABUPATEN PEKALONGAN', '0', '', NULL),
('3327', '33', 'KABUPATEN PEMALANG', '0', '', NULL),
('3328', '33', 'KABUPATEN TEGAL', '0', '', NULL),
('3329', '33', 'KABUPATEN BREBES', '0', '', NULL),
('3371', '33', 'KOTA MAGELANG', '0', '', NULL),
('3372', '33', 'KOTA SURAKARTA', '0', '', NULL),
('3373', '33', 'KOTA SALATIGA', '0', '', NULL),
('3374', '33', 'KOTA SEMARANG', '0', '', NULL),
('3375', '33', 'KOTA PEKALONGAN', '0', '', NULL),
('3376', '33', 'KOTA TEGAL', '0', '', NULL),
('3401', '34', 'KABUPATEN KULON PROGO', '0', '', NULL),
('3402', '34', 'KABUPATEN BANTUL', '0', '', NULL),
('3403', '34', 'KABUPATEN GUNUNG KIDUL', '0', '', NULL),
('3404', '34', 'KABUPATEN SLEMAN', '0', '', NULL),
('3471', '34', 'KOTA YOGYAKARTA', '0', '', NULL),
('3500', '35', 'KANTOR PUSAT', '0', '1', 'KANWIL JATIM'),
('3501', '35', 'KABUPATEN PACITAN', '1', '1', 'KANWIL JATIM'),
('3502', '35', 'KABUPATEN PONOROGO', '1', '1', 'KANWIL JATIM'),
('3503', '35', 'KABUPATEN TRENGGALEK', '1', '1', 'KANWIL JATIM'),
('3504', '35', 'KABUPATEN TULUNGAGUNG', '1', '1', 'KANWIL JATIM'),
('3505', '35', 'KABUPATEN BLITAR', '1', '1', 'KANWIL JATIM'),
('3506', '35', 'KABUPATEN KEDIRI', '1', '1', 'KANWIL JATIM'),
('3507', '35', 'KABUPATEN MALANG', '2', '1', 'KANWIL JATIM'),
('3508', '35', 'KABUPATEN LUMAJANG', '3', '1', 'KANWIL JATIM'),
('3509', '35', 'KABUPATEN JEMBER', '3', '1', 'KANWIL JATIM'),
('3510', '35', 'KABUPATEN BANYUWANGI', '3', '1', 'KANWIL JATIM'),
('3511', '35', 'KABUPATEN BONDOWOSO', '3', '1', 'KANWIL JATIM'),
('3512', '35', 'KABUPATEN SITUBONDO', '3', '1', 'KANWIL JATIM'),
('3513', '35', 'KABUPATEN PROBOLINGGO', '3', '1', 'KANWIL JATIM'),
('3514', '35', 'KABUPATEN PASURUAN', '3', '1', 'KANWIL JATIM'),
('3515', '35', 'KABUPATEN SIDOARJO', '2', '1', 'KANWIL JATIM'),
('3516', '35', 'KABUPATEN MOJOKERTO', '2', '1', 'KANWIL JATIM'),
('3517', '35', 'KABUPATEN JOMBANG', '2', '1', 'KANWIL JATIM'),
('3518', '35', 'KABUPATEN NGANJUK', '1', '1', 'KANWIL JATIM'),
('3519', '35', 'KABUPATEN MADIUN', '1', '1', 'KANWIL JATIM'),
('3520', '35', 'KABUPATEN MAGETAN', '1', '1', 'KANWIL JATIM'),
('3521', '35', 'KABUPATEN NGAWI', '1', '1', 'KANWIL JATIM'),
('3522', '35', 'KABUPATEN BOJONEGORO', '4', '1', 'KANWIL JATIM'),
('3523', '35', 'KABUPATEN TUBAN', '4', '1', 'KANWIL JATIM'),
('3524', '35', 'KABUPATEN LAMONGAN', '4', '1', 'KANWIL JATIM'),
('3525', '35', 'KABUPATEN GRESIK', '2', '1', 'KANWIL JATIM'),
('3526', '35', 'KABUPATEN BANGKALAN', '4', '1', 'KANWIL JATIM'),
('3527', '35', 'KABUPATEN SAMPANG', '4', '1', 'KANWIL JATIM'),
('3528', '35', 'KABUPATEN PAMEKASAN', '4', '1', 'KANWIL JATIM'),
('3529', '35', 'KABUPATEN SUMENEP', '4', '1', 'KANWIL JATIM'),
('3571', '35', 'KOTA KEDIRI', '1', '1', 'KANWIL JATIM'),
('3572', '35', 'KOTA BLITAR', '1', '1', 'KANWIL JATIM'),
('3573', '35', 'KOTA MALANG', '2', '1', 'KANWIL JATIM'),
('3574', '35', 'KOTA PROBOLINGGO', '3', '1', 'KANWIL JATIM'),
('3575', '35', 'KOTA PASURUAN', '3', '1', 'KANWIL JATIM'),
('3576', '35', 'KOTA MOJOKERTO', '2', '1', 'KANWIL JATIM'),
('3577', '35', 'KOTA MADIUN', '1', '1', 'KANWIL JATIM'),
('3578', '35', 'KOTA SURABAYA', '2', '1', 'KANWIL JATIM'),
('3579', '35', 'KOTA BATU', '2', '1', 'KANWIL JATIM'),
('3601', '36', 'KABUPATEN PANDEGLANG', '0', '', NULL),
('3602', '36', 'KABUPATEN LEBAK', '0', '', NULL),
('3603', '36', 'KABUPATEN TANGERANG', '0', '', NULL),
('3604', '36', 'KABUPATEN SERANG', '0', '', NULL),
('3671', '36', 'KOTA TANGERANG', '0', '', NULL),
('3672', '36', 'KOTA CILEGON', '0', '', NULL),
('3673', '36', 'KOTA SERANG', '0', '', NULL),
('3674', '36', 'KOTA TANGERANG SELATAN', '0', '', NULL),
('5101', '51', 'KABUPATEN JEMBRANA', '0', '', NULL),
('5102', '51', 'KABUPATEN TABANAN', '0', '', NULL),
('5103', '51', 'KABUPATEN BADUNG', '0', '', NULL),
('5104', '51', 'KABUPATEN GIANYAR', '0', '', NULL),
('5105', '51', 'KABUPATEN KLUNGKUNG', '0', '', NULL),
('5106', '51', 'KABUPATEN BANGLI', '0', '', NULL),
('5107', '51', 'KABUPATEN KARANG ASEM', '0', '', NULL),
('5108', '51', 'KABUPATEN BULELENG', '0', '', NULL),
('5171', '51', 'KOTA DENPASAR', '0', '', NULL),
('5201', '52', 'KABUPATEN LOMBOK BARAT', '0', '', NULL),
('5202', '52', 'KABUPATEN LOMBOK TENGAH', '0', '', NULL),
('5203', '52', 'KABUPATEN LOMBOK TIMUR', '0', '', NULL),
('5204', '52', 'KABUPATEN SUMBAWA', '0', '', NULL),
('5205', '52', 'KABUPATEN DOMPU', '0', '', NULL),
('5206', '52', 'KABUPATEN BIMA', '0', '', NULL),
('5207', '52', 'KABUPATEN SUMBAWA BARAT', '0', '', NULL),
('5208', '52', 'KABUPATEN LOMBOK UTARA', '0', '', NULL),
('5271', '52', 'KOTA MATARAM', '0', '', NULL),
('5272', '52', 'KOTA BIMA', '0', '', NULL),
('5301', '53', 'KABUPATEN SUMBA BARAT', '0', '', NULL),
('5302', '53', 'KABUPATEN SUMBA TIMUR', '0', '', NULL),
('5303', '53', 'KABUPATEN KUPANG', '0', '', NULL),
('5304', '53', 'KABUPATEN TIMOR TENGAH SELATAN', '0', '', NULL),
('5305', '53', 'KABUPATEN TIMOR TENGAH UTARA', '0', '', NULL),
('5306', '53', 'KABUPATEN BELU', '0', '', NULL),
('5307', '53', 'KABUPATEN ALOR', '0', '', NULL),
('5308', '53', 'KABUPATEN LEMBATA', '0', '', NULL),
('5309', '53', 'KABUPATEN FLORES TIMUR', '0', '', NULL),
('5310', '53', 'KABUPATEN SIKKA', '0', '', NULL),
('5311', '53', 'KABUPATEN ENDE', '0', '', NULL),
('5312', '53', 'KABUPATEN NGADA', '0', '', NULL),
('5313', '53', 'KABUPATEN MANGGARAI', '0', '', NULL),
('5314', '53', 'KABUPATEN ROTE NDAO', '0', '', NULL),
('5315', '53', 'KABUPATEN MANGGARAI BARAT', '0', '', NULL),
('5316', '53', 'KABUPATEN SUMBA TENGAH', '0', '', NULL),
('5317', '53', 'KABUPATEN SUMBA BARAT DAYA', '0', '', NULL),
('5318', '53', 'KABUPATEN NAGEKEO', '0', '', NULL),
('5319', '53', 'KABUPATEN MANGGARAI TIMUR', '0', '', NULL),
('5320', '53', 'KABUPATEN SABU RAIJUA', '0', '', NULL),
('5321', '53', 'KABUPATEN MALAKA', '0', '', NULL),
('5371', '53', 'KOTA KUPANG', '0', '', NULL),
('6101', '61', 'KABUPATEN SAMBAS', '0', '', NULL),
('6102', '61', 'KABUPATEN BENGKAYANG', '0', '', NULL),
('6103', '61', 'KABUPATEN LANDAK', '0', '', NULL),
('6104', '61', 'KABUPATEN MEMPAWAH', '0', '', NULL),
('6105', '61', 'KABUPATEN SANGGAU', '0', '', NULL),
('6106', '61', 'KABUPATEN KETAPANG', '0', '', NULL),
('6107', '61', 'KABUPATEN SINTANG', '0', '', NULL),
('6108', '61', 'KABUPATEN KAPUAS HULU', '0', '', NULL),
('6109', '61', 'KABUPATEN SEKADAU', '0', '', NULL),
('6110', '61', 'KABUPATEN MELAWI', '0', '', NULL),
('6111', '61', 'KABUPATEN KAYONG UTARA', '0', '', NULL),
('6112', '61', 'KABUPATEN KUBU RAYA', '0', '', NULL),
('6171', '61', 'KOTA PONTIANAK', '0', '', NULL),
('6172', '61', 'KOTA SINGKAWANG', '0', '', NULL),
('6201', '62', 'KABUPATEN KOTAWARINGIN BARAT', '0', '', NULL),
('6202', '62', 'KABUPATEN KOTAWARINGIN TIMUR', '0', '', NULL),
('6203', '62', 'KABUPATEN KAPUAS', '0', '', NULL),
('6204', '62', 'KABUPATEN BARITO SELATAN', '0', '', NULL),
('6205', '62', 'KABUPATEN BARITO UTARA', '0', '', NULL),
('6206', '62', 'KABUPATEN SUKAMARA', '0', '', NULL),
('6207', '62', 'KABUPATEN LAMANDAU', '0', '', NULL),
('6208', '62', 'KABUPATEN SERUYAN', '0', '', NULL),
('6209', '62', 'KABUPATEN KATINGAN', '0', '', NULL),
('6210', '62', 'KABUPATEN PULANG PISAU', '0', '', NULL),
('6211', '62', 'KABUPATEN GUNUNG MAS', '0', '', NULL),
('6212', '62', 'KABUPATEN BARITO TIMUR', '0', '', NULL),
('6213', '62', 'KABUPATEN MURUNG RAYA', '0', '', NULL),
('6271', '62', 'KOTA PALANGKA RAYA', '0', '', NULL),
('6301', '63', 'KABUPATEN TANAH LAUT', '1', '4', NULL),
('6302', '63', 'KABUPATEN KOTA BARU', '1', '4', NULL),
('6303', '63', 'KABUPATEN BANJAR', '1', '4', NULL),
('6304', '63', 'KABUPATEN BARITO KUALA', '1', '4', NULL),
('6305', '63', 'KABUPATEN TAPIN', '1', '4', NULL),
('6306', '63', 'KABUPATEN HULU SUNGAI SELATAN', '1', '4', NULL),
('6307', '63', 'KABUPATEN HULU SUNGAI TENGAH', '1', '4', NULL),
('6308', '63', 'KABUPATEN HULU SUNGAI UTARA', '1', '4', NULL),
('6309', '63', 'KABUPATEN TABALONG', '1', '4', NULL),
('6310', '63', 'KABUPATEN TANAH BUMBU', '1', '4', NULL),
('6311', '63', 'KABUPATEN BALANGAN', '1', '4', NULL),
('6371', '63', 'KOTA BANJARMASIN', '1', '4', NULL),
('6372', '63', 'KOTA BANJAR BARU', '1', '4', NULL),
('6401', '64', 'KABUPATEN PASER', '0', '', NULL),
('6402', '64', 'KABUPATEN KUTAI BARAT', '0', '', NULL),
('6403', '64', 'KABUPATEN KUTAI KARTANEGARA', '0', '', NULL),
('6404', '64', 'KABUPATEN KUTAI TIMUR', '0', '', NULL),
('6405', '64', 'KABUPATEN BERAU', '0', '', NULL),
('6409', '64', 'KABUPATEN PENAJAM PASER UTARA', '0', '', NULL),
('6411', '64', 'KABUPATEN MAHAKAM HULU', '0', '', NULL),
('6471', '64', 'KOTA BALIKPAPAN', '0', '', NULL),
('6472', '64', 'KOTA SAMARINDA', '0', '', NULL),
('6474', '64', 'KOTA BONTANG', '0', '', NULL),
('6501', '65', 'KABUPATEN MALINAU', '0', '', NULL),
('6502', '65', 'KABUPATEN BULUNGAN', '0', '', NULL),
('6503', '65', 'KABUPATEN TANA TIDUNG', '0', '', NULL),
('6504', '65', 'KABUPATEN NUNUKAN', '0', '', NULL),
('6571', '65', 'KOTA TARAKAN', '0', '', NULL),
('7101', '71', 'KABUPATEN BOLAANG MONGONDOW', '0', '', NULL),
('7102', '71', 'KABUPATEN MINAHASA', '0', '', NULL),
('7103', '71', 'KABUPATEN KEPULAUAN SANGIHE', '0', '', NULL),
('7104', '71', 'KABUPATEN KEPULAUAN TALAUD', '0', '', NULL),
('7105', '71', 'KABUPATEN MINAHASA SELATAN', '0', '', NULL),
('7106', '71', 'KABUPATEN MINAHASA UTARA', '0', '', NULL),
('7107', '71', 'KABUPATEN BOLAANG MONGONDOW UTARA', '0', '', NULL),
('7108', '71', 'KABUPATEN SIAU TAGULANDANG BIARO', '0', '', NULL),
('7109', '71', 'KABUPATEN MINAHASA TENGGARA', '0', '', NULL),
('7110', '71', 'KABUPATEN BOLAANG MONGONDOW SELATAN', '0', '', NULL),
('7111', '71', 'KABUPATEN BOLAANG MONGONDOW TIMUR', '0', '', NULL),
('7171', '71', 'KOTA MANADO', '0', '', NULL),
('7172', '71', 'KOTA BITUNG', '0', '', NULL),
('7173', '71', 'KOTA TOMOHON', '0', '', NULL),
('7174', '71', 'KOTA KOTAMOBAGU', '0', '', NULL),
('7201', '72', 'KABUPATEN BANGGAI KEPULAUAN', '0', '', NULL),
('7202', '72', 'KABUPATEN BANGGAI', '0', '', NULL),
('7203', '72', 'KABUPATEN MOROWALI', '0', '', NULL),
('7204', '72', 'KABUPATEN POSO', '0', '', NULL),
('7205', '72', 'KABUPATEN DONGGALA', '0', '', NULL),
('7206', '72', 'KABUPATEN TOLI-TOLI', '0', '', NULL),
('7207', '72', 'KABUPATEN BUOL', '0', '', NULL),
('7208', '72', 'KABUPATEN PARIGI MOUTONG', '0', '', NULL),
('7209', '72', 'KABUPATEN TOJO UNA-UNA', '0', '', NULL),
('7210', '72', 'KABUPATEN SIGI', '0', '', NULL),
('7211', '72', 'KABUPATEN BANGGAI LAUT', '0', '', NULL),
('7212', '72', 'KABUPATEN MOROWALI UTARA', '0', '', NULL),
('7271', '72', 'KOTA PALU', '0', '', NULL),
('7301', '73', 'KABUPATEN KEPULAUAN SELAYAR', '0', '', NULL),
('7302', '73', 'KABUPATEN BULUKUMBA', '0', '', NULL),
('7303', '73', 'KABUPATEN BANTAENG', '0', '', NULL),
('7304', '73', 'KABUPATEN JENEPONTO', '0', '', NULL),
('7305', '73', 'KABUPATEN TAKALAR', '0', '', NULL),
('7306', '73', 'KABUPATEN GOWA', '0', '', NULL),
('7307', '73', 'KABUPATEN SINJAI', '0', '', NULL),
('7308', '73', 'KABUPATEN MAROS', '0', '', NULL),
('7309', '73', 'KABUPATEN PANGKAJENE DAN KEPULAUAN', '0', '', NULL),
('7310', '73', 'KABUPATEN BARRU', '0', '', NULL),
('7311', '73', 'KABUPATEN BONE', '0', '', NULL),
('7312', '73', 'KABUPATEN SOPPENG', '0', '', NULL),
('7313', '73', 'KABUPATEN WAJO', '0', '', NULL),
('7314', '73', 'KABUPATEN SIDENRENG RAPPANG', '0', '', NULL),
('7315', '73', 'KABUPATEN PINRANG', '0', '', NULL),
('7316', '73', 'KABUPATEN ENREKANG', '0', '', NULL),
('7317', '73', 'KABUPATEN LUWU', '0', '', NULL),
('7318', '73', 'KABUPATEN TANA TORAJA', '0', '', NULL),
('7322', '73', 'KABUPATEN LUWU UTARA', '0', '', NULL),
('7325', '73', 'KABUPATEN LUWU TIMUR', '0', '', NULL),
('7326', '73', 'KABUPATEN TORAJA UTARA', '0', '', NULL),
('7371', '73', 'KOTA MAKASSAR', '0', '', NULL),
('7372', '73', 'KOTA PAREPARE', '0', '', NULL),
('7373', '73', 'KOTA PALOPO', '0', '', NULL),
('7401', '74', 'KABUPATEN BUTON', '0', '', NULL),
('7402', '74', 'KABUPATEN MUNA', '0', '', NULL),
('7403', '74', 'KABUPATEN KONAWE', '0', '', NULL),
('7404', '74', 'KABUPATEN KOLAKA', '0', '', NULL),
('7405', '74', 'KABUPATEN KONAWE SELATAN', '0', '', NULL),
('7406', '74', 'KABUPATEN BOMBANA', '0', '', NULL),
('7407', '74', 'KABUPATEN WAKATOBI', '0', '', NULL),
('7408', '74', 'KABUPATEN KOLAKA UTARA', '0', '', NULL),
('7409', '74', 'KABUPATEN BUTON UTARA', '0', '', NULL),
('7410', '74', 'KABUPATEN KONAWE UTARA', '0', '', NULL),
('7411', '74', 'KABUPATEN KOLAKA TIMUR', '0', '', NULL),
('7412', '74', 'KABUPATEN KONAWE KEPULAUAN', '0', '', NULL),
('7413', '74', 'KABUPATEN MUNA BARAT', '0', '', NULL),
('7414', '74', 'KABUPATEN BUTON TENGAH', '0', '', NULL),
('7415', '74', 'KABUPATEN BUTON SELATAN', '0', '', NULL),
('7471', '74', 'KOTA KENDARI', '0', '', NULL),
('7472', '74', 'KOTA BAUBAU', '0', '', NULL),
('7501', '75', 'KABUPATEN BOALEMO', '0', '', NULL),
('7502', '75', 'KABUPATEN GORONTALO', '0', '', NULL),
('7503', '75', 'KABUPATEN POHUWATO', '0', '', NULL),
('7504', '75', 'KABUPATEN BONE BOLANGO', '0', '', NULL),
('7505', '75', 'KABUPATEN GORONTALO UTARA', '0', '', NULL),
('7571', '75', 'KOTA GORONTALO', '0', '', NULL),
('7601', '76', 'KABUPATEN MAJENE', '0', '', NULL),
('7602', '76', 'KABUPATEN POLEWALI MANDAR', '0', '', NULL),
('7603', '76', 'KABUPATEN MAMASA', '0', '', NULL),
('7604', '76', 'KABUPATEN MAMUJU', '0', '', NULL),
('7605', '76', 'KABUPATEN MAMUJU UTARA', '0', '', NULL),
('7606', '76', 'KABUPATEN MAMUJU TENGAH', '0', '', NULL),
('8101', '81', 'KABUPATEN MALUKU TENGGARA BARAT', '0', '', NULL),
('8102', '81', 'KABUPATEN MALUKU TENGGARA', '0', '', NULL),
('8103', '81', 'KABUPATEN MALUKU TENGAH', '0', '', NULL),
('8104', '81', 'KABUPATEN BURU', '0', '', NULL),
('8105', '81', 'KABUPATEN KEPULAUAN ARU', '0', '', NULL),
('8106', '81', 'KABUPATEN SERAM BAGIAN BARAT', '0', '', NULL),
('8107', '81', 'KABUPATEN SERAM BAGIAN TIMUR', '0', '', NULL),
('8108', '81', 'KABUPATEN MALUKU BARAT DAYA', '0', '', NULL),
('8109', '81', 'KABUPATEN BURU SELATAN', '0', '', NULL),
('8171', '81', 'KOTA AMBON', '0', '', NULL),
('8172', '81', 'KOTA TUAL', '0', '', NULL),
('8201', '82', 'KABUPATEN HALMAHERA BARAT', '0', '', NULL),
('8202', '82', 'KABUPATEN HALMAHERA TENGAH', '0', '', NULL),
('8203', '82', 'KABUPATEN KEPULAUAN SULA', '0', '', NULL),
('8204', '82', 'KABUPATEN HALMAHERA SELATAN', '0', '', NULL),
('8205', '82', 'KABUPATEN HALMAHERA UTARA', '0', '', NULL),
('8206', '82', 'KABUPATEN HALMAHERA TIMUR', '0', '', NULL),
('8207', '82', 'KABUPATEN PULAU MOROTAI', '0', '', NULL),
('8208', '82', 'KABUPATEN PULAU TALIABU', '0', '', NULL),
('8271', '82', 'KOTA TERNATE', '0', '', NULL),
('8272', '82', 'KOTA TIDORE KEPULAUAN', '0', '', NULL),
('9101', '91', 'KABUPATEN FAKFAK', '0', '', NULL),
('9102', '91', 'KABUPATEN KAIMANA', '0', '', NULL),
('9103', '91', 'KABUPATEN TELUK WONDAMA', '0', '', NULL),
('9104', '91', 'KABUPATEN TELUK BINTUNI', '0', '', NULL),
('9105', '91', 'KABUPATEN MANOKWARI', '0', '', NULL),
('9106', '91', 'KABUPATEN SORONG SELATAN', '0', '', NULL),
('9107', '91', 'KABUPATEN SORONG', '0', '', NULL),
('9108', '91', 'KABUPATEN RAJA AMPAT', '0', '', NULL),
('9109', '91', 'KABUPATEN TAMBRAUW', '0', '', NULL),
('9110', '91', 'KABUPATEN MAYBRAT', '0', '', NULL),
('9111', '91', 'KABUPATEN MANOKWARI SELATAN', '0', '', NULL),
('9112', '91', 'KABUPATEN PEGUNUNGAN ARFAK', '0', '', NULL),
('9171', '91', 'KOTA SORONG', '0', '', NULL),
('9401', '94', 'KABUPATEN MERAUKE', '0', '', NULL),
('9402', '94', 'KABUPATEN JAYAWIJAYA', '0', '', NULL),
('9403', '94', 'KABUPATEN JAYAPURA', '0', '', NULL),
('9404', '94', 'KABUPATEN NABIRE', '0', '', NULL),
('9408', '94', 'KABUPATEN KEPULAUAN YAPEN', '0', '', NULL),
('9409', '94', 'KABUPATEN BIAK NUMFOR', '0', '', NULL),
('9410', '94', 'KABUPATEN PANIAI', '0', '', NULL),
('9411', '94', 'KABUPATEN PUNCAK JAYA', '0', '', NULL),
('9412', '94', 'KABUPATEN MIMIKA', '0', '', NULL),
('9413', '94', 'KABUPATEN BOVEN DIGOEL', '0', '', NULL),
('9414', '94', 'KABUPATEN MAPPI', '0', '', NULL),
('9415', '94', 'KABUPATEN ASMAT', '0', '', NULL),
('9416', '94', 'KABUPATEN YAHUKIMO', '0', '', NULL),
('9417', '94', 'KABUPATEN PEGUNUNGAN BINTANG', '0', '', NULL),
('9418', '94', 'KABUPATEN TOLIKARA', '0', '', NULL),
('9419', '94', 'KABUPATEN SARMI', '0', '', NULL),
('9420', '94', 'KABUPATEN KEEROM', '0', '', NULL),
('9426', '94', 'KABUPATEN WAROPEN', '0', '', NULL),
('9427', '94', 'KABUPATEN SUPIORI', '0', '', NULL),
('9428', '94', 'KABUPATEN MAMBERAMO RAYA', '0', '', NULL),
('9429', '94', 'KABUPATEN NDUGA', '0', '', NULL),
('9430', '94', 'KABUPATEN LANNY JAYA', '0', '', NULL),
('9431', '94', 'KABUPATEN MAMBERAMO TENGAH', '0', '', NULL),
('9432', '94', 'KABUPATEN YALIMO', '0', '', NULL),
('9433', '94', 'KABUPATEN PUNCAK', '0', '', NULL),
('9434', '94', 'KABUPATEN DOGIYAI', '0', '', NULL),
('9435', '94', 'KABUPATEN INTAN JAYA', '0', '', NULL),
('9436', '94', 'KABUPATEN DEIYAI', '0', '', NULL),
('9471', '94', 'KOTA JAYAPURA', '0', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
  `id_status` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penerima` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `stok` int(11) NOT NULL,
  `tempat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `id`, `tanggal`, `penerima`, `status`, `stok`, `tempat`) VALUES
(76, 34, '2018-07-10', 'admin', 'masuk', 1, 'a'),
(77, 34, '2018-07-11', 'admin', 'masuk', 8, 'a'),
(79, 35, '2018-07-11', 'admin', 'masuk', 1, 'q');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_peg` varchar(8) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password_md5` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `rmdn_akses` varchar(16) NOT NULL,
  `ess_akses` varchar(5) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `id_kota` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_peg`, `id_user`, `nama_user`, `password_md5`, `password`, `hak_akses`, `rmdn_akses`, `ess_akses`, `layanan`, `id_kota`, `email`, `active`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', '1', '', '', 'KANTOR PUSAT SURABAYA', 0, '', NULL),
('P8002031', 'P8002031', 'KHOIROTUN NISA''', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SURABAYA', 3578, '', 'Aktif'),
('P8003034', 'P8003034', 'LINDA TRI WULANDARI', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SIDOARJO', 3500, '', 'Aktif'),
('P8003037', 'P8003037', 'MUCHAMMAD DANI SAPUTRA', '81dc9bdb52d04dc20036dbd8313ed055', '1234', '1', '', '', 'SIDOARJO', 0, 'dani@gmail.com', 'Aktif'),
('P8003038', 'P8003038', 'BASTIYAN SULIANTORO', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SIDOARJO', 3515, '', 'Aktif'),
('P8003039', 'P8003039', 'DENNY DWI LUKYTO', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SIDOARJO', 3515, '', 'Aktif'),
('P8003058', 'P8003058', 'MOH. FADIL', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SIDOARJO', 3515, '', 'Aktif'),
('P8003060', 'P8003060', 'WIJAYANI', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'SIDOARJO', 3515, '', 'Aktif'),
('P8004040', 'P8004040', 'AHMAD TAUFIK', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'KABUPATEN MALANG', 3507, '', 'Aktif'),
('P8007004', 'P8007004', 'AKHMAD YUSUF A.R.', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'KOTA MADIUN', 3577, '', 'Aktif'),
('P8007005', 'P8007005', 'CHOIRUL ANAS', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'KOTA MADIUN', 3577, '', 'Aktif'),
('P8007057', 'P8007057', 'INDAH SITI NUR AZIZAH', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'KOTA MADIUN', 3577, '', 'Aktif'),
('P8009007', 'P8009007', 'AHMAT EFENDI', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'MAGETAN', 3520, '', 'Aktif'),
('P8010012', 'P8010012', 'SITI ZHULAIKAH', '202cb962ac59075b964b07152d234b70', '123', '2', '', '', 'KABUPATEN TULUNGAGUNG', 3504, '', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mst_golongan`
--
ALTER TABLE `tb_mst_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `tb_mst_invetaris`
--
ALTER TABLE `tb_mst_invetaris`
  ADD PRIMARY KEY (`id`), ADD KEY `id _golongan` (`id_golongan`);

--
-- Indexes for table `tb_mst_jenis_keluhan`
--
ALTER TABLE `tb_mst_jenis_keluhan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tb_mst_layanan`
--
ALTER TABLE `tb_mst_layanan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `tb_mst_regencies`
--
ALTER TABLE `tb_mst_regencies`
  ADD PRIMARY KEY (`id`), ADD KEY `regencies_province_id_index` (`province_id`) USING BTREE;

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`), ADD KEY `id` (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_peg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mst_golongan`
--
ALTER TABLE `tb_mst_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_mst_invetaris`
--
ALTER TABLE `tb_mst_invetaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tb_mst_layanan`
--
ALTER TABLE `tb_mst_layanan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=80;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mst_invetaris`
--
ALTER TABLE `tb_mst_invetaris`
ADD CONSTRAINT `tb_mst_invetaris_ibfk_1` FOREIGN KEY (`id_golongan`) REFERENCES `tb_mst_golongan` (`id_golongan`);

--
-- Constraints for table `tb_status`
--
ALTER TABLE `tb_status`
ADD CONSTRAINT `tb_status_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tb_mst_invetaris` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
