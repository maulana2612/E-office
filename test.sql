-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 09:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('kadis','kominfo','bagian_umum','staff') DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `NIP` int(10) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `nama_dinas` varchar(50) DEFAULT NULL,
  `nama_unor` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `user_name`, `password`, `level`, `Nama`, `email`, `NIP`, `Foto`, `nama_dinas`, `nama_unor`) VALUES
(1, 'member', 'member', 'kadis', '', '', 0, '', NULL, ''),
(2, 'admin', 'admin', 'kominfo', '', '', 0, '', NULL, ''),
(3, 'maulana', 'open', 'kominfo', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `golongan_unor`
--

CREATE TABLE `golongan_unor` (
  `kode_gol` int(10) NOT NULL,
  `gol_ruang` varchar(50) DEFAULT NULL,
  `pangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan_unor`
--

INSERT INTO `golongan_unor` (`kode_gol`, `gol_ruang`, `pangkat`) VALUES
(11, 'I/a', 'Juru Muda'),
(12, 'I/b', 'Juru Muda Tingkat I'),
(13, 'I/c', 'Juru'),
(14, 'I/d', 'Juru Tingkat I'),
(21, 'II/a', 'Pengatur Muda'),
(22, 'II/b', 'Pengatur Muda Tingkat I'),
(23, 'II/c', 'Pengatur'),
(24, 'II/d', 'Pengatur Tingkat I'),
(31, 'III/a', 'Penata Muda'),
(32, 'III/b', 'Penata Muda Tingkat I'),
(33, 'III/c', 'Penata'),
(34, 'III/d', 'Penata Tingkat I'),
(41, 'IV/a', 'Pembina'),
(42, 'IV/b', 'Pembina Tingkat I'),
(43, 'IV/c', 'Pembina Utama Muda'),
(44, 'IV/d', 'Pembina Utama Madya'),
(45, 'IV/e', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_unor`
--

CREATE TABLE `jabatan_unor` (
  `kode_unor` varchar(50) NOT NULL,
  `nama_unor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan_unor`
--

INSERT INTO `jabatan_unor` (`kode_unor`, `nama_unor`) VALUES
('1.1', 'BUPATI'),
('1.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('1.1.2', 'SEKERTARIS DAERAH'),
('1.1.2.1', 'ASISTEN PEMERINTAHAN DAN KESEJAHTERAAN RAKYAT'),
('1.1.2.1.1', 'BAGIAN ADMINISTRASI PEMERINTAHAN'),
('1.1.2.1.1.1', 'SUB BAGIAN PEMERINTAHAN UMUM'),
('1.1.2.1.1.2', 'SUB BAGIAN APARATUR PEMERINTAHAN DESA'),
('1.1.2.1.1.3', 'SUB BAGIAN PENYELENGGARAAN KECAMATAN DAN KELURAHAN'),
('1.1.2.1.2', 'BAGIAN KESEJAHTERAAN RAKYAT DAN KEMASYARAKATAN'),
('1.1.2.1.2.1', 'SUB BAGIAN PENDIDIKAN DAN KEBUDAYAAN'),
('1.1.2.1.2.2', 'SUB BAGIAN KEMASYARAKATAN DAN KEAGAMAAN'),
('1.1.2.1.2.3', 'SUB BAGIAN KESEJAHTERAAN RAKYAT'),
('1.1.2.1.3', 'BAGIAN HUKUM'),
('1.1.2.1.3.1', 'SUB BAGIAN PERUNDANG-UNDANGAN'),
('1.1.2.1.3.2', 'SUB BAGIAN DOKUMENTASI HUKUM'),
('1.1.2.1.3.3', 'SUB BAGIAN HUKUM DAN KERJASAMA'),
('1.1.2.2', 'ASISTEN PEREKONOMIAN DAN PEMBANGUNAN'),
('1.1.2.2.1', 'BAGIAN ADMINISTRASI PEREKONOMIAN'),
('1.1.2.2.1.1', 'SUB BAGIAN PEREKONOMIAN'),
('1.1.2.2.1.2', 'SUB BAGIAN SUMBER DAYA ALAM'),
('1.1.2.2.1.3', 'SUB BAGIAN PENANAMAN MODAL DAN BUMD'),
('1.1.2.2.2', 'BAGIAN ADMINISTRASI PEMBANGUNAN'),
('1.1.2.2.2.1', 'SUB BAGIAN PENYUSUNAN PROGRAM'),
('1.1.2.2.2.2', 'SUB BAGIAN PENGENDALIAN PEMBANGUNAN'),
('1.1.2.2.2.3', 'SUB BAGIAN EVALUASI DAN PELAPORAN'),
('1.1.2.3', 'ASISTEN ADMINISTRASI UMUM'),
('1.1.2.3.1', 'BAGIAN ORGANISASI'),
('1.1.2.3.1.1', 'SUB BAGIAN KELEMBAGAAN DAN ANALISIS JABATAN'),
('1.1.2.3.1.2', 'SUB BAGIAN TATA LAKSANA DAN PELAYANAN PUBLIK'),
('1.1.2.3.1.3', 'SUB BAGIAN PENINGKATAN KINERJA DAN REFORMASI BIROKRASI'),
('1.1.2.3.2', 'BAGIAN UMUM'),
('1.1.2.3.2.1', 'SUB BAGIAN ADMINISTRASI KEPEGAWAIAN'),
('1.1.2.3.2.2', 'SUB BAGIAN RUMAH TANGGA'),
('1.1.2.3.2.3', 'SUB BAGIAN SARANA DAN PRASARANA'),
('1.1.2.3.3', 'BAGIAN HUMAS DAN PROTOKOL'),
('1.1.2.3.3.1', 'SUB BAGIAN HUMAS'),
('1.1.2.3.3.2', 'SUB BAGIAN PEMBERITAAN DAN DOKUMENTASI'),
('1.1.2.3.3.3', 'SUB BAGIAN PROTOKOL'),
('1.1.3', 'STAFF AHLI'),
('10.1', 'KEPALA DINAS'),
('10.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('10.1.2', 'SEKERTARIAT'),
('10.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('10.1.2.2', 'SUB BAGIAN KEUANGAN'),
('10.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('10.1.3', 'BIDANG PERBIBITAN DAN PRODUKSI PERTERNAKAN'),
('10.1.3.1', 'SEKSI PERBIBITAN DAN KAWASAN PERTERNAKAN'),
('10.1.3.1.1', 'STAFF PERBIBITAN DAN KAWASAN PERTERNAKAN'),
('10.1.3.2', 'SEKSI BUDIDAYA DAN PRODUKSI PERTERNAKAN'),
('10.1.3.2.1', 'STAFF BUDIDAYA DAN PRODUKSI PERTERNAKAN'),
('10.1.3.3', 'SEKSI PAKAN DAN TEKNOLOGI PERTERNAKAN'),
('10.1.3.3.1', 'STAFF PAKAN DAN TEKNOLOGI PERTERNAKAN'),
('10.1.4', 'BIDANG KESEHATAN HEWAN'),
('10.1.4.1', 'SEKSI PENGAMATAN PENYAKIT HEWAN DAN PELAYANAN MEDIK VETERINER'),
('10.1.4.1.1', 'STAFF PENGAMATAN PENYAKIT HEWAN DAN PELAYANAN MEDIK VETERINER'),
('10.1.4.2', 'SEKSI PENCEGAHAN DAN PEMBERANTASAN PENYAKIT HEWAN'),
('10.1.4.2.1', 'STAFF PENCEGAHAN DAN PEMBERANTASAN PENYAKIT HEWAN'),
('10.1.4.3', 'SEKSI PENGAWASAN OBAT HEWAN DAN RESIDU'),
('10.1.4.3.1', 'STAFF PENGAWASAN OBAT HEWAN DAN RESIDU'),
('10.1.5', 'BIDANG KESEHATAN MASYARAKAT VETERINER'),
('10.1.5.1', 'SEKSI HYGIENE SANITASI DAN SERTIFIKASI PRODUK HEWAN'),
('10.1.5.1.1', 'STAFF HYGIENE SANITASI DAN SERTIFIKASI PRODUK HEWAN'),
('10.1.5.2', 'SEKSI PENGAWASAN KEAMANAN PRODUK HEWAN'),
('10.1.5.2.1', 'STAFF PENGAWASAN KEAMANAN PRODUK HEWAN'),
('10.1.5.3', 'SEKSI KESEJAHTERAAN HEWAN DAN ZOONOSIS'),
('10.1.5.3.1', 'STAFF KESEJAHTERAAN HEWAN DAN ZOONOSIS'),
('10.1.6', 'BIDANG USAHA PERTERNAKAN'),
('10.1.6.1', 'SEKSI KELEMBAGAAN PERTERNAKAN'),
('10.1.6.1.1', 'STAFF KELEMBAGAAN PERTERNAKAN'),
('10.1.6.2', 'SEKSI PENGOLAHAN DAN PEMASARAN HASIL PERTERNAKAN'),
('10.1.6.2.1', 'STAFF PENGOLAHAN DAN PEMASARAN HASIL PERTERNAKAN'),
('10.1.6.3', 'SEKSI BINA USAHA'),
('10.1.6.3.1', 'STAFF BINA USAHA'),
('10.1.7', 'UPTD'),
('11.1', 'KEPALA DINAS'),
('11.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('11.1.2', 'SEKERTARIAT'),
('11.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('11.1.2.2', 'SUB BAGIAN KEUANGAN'),
('11.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('11.1.3', 'BIDANG BINA MARGA'),
('11.1.3.1', 'SEKSI PERENCANAAN TEKNIK DAN EVALUASI JALAN DAN JEMBATAN'),
('11.1.3.1.1', 'STAFF PERENCANAAN TEKNIK DAN EVALUASI JALAN DAN JEMBATAN'),
('11.1.3.2', 'SEKSI PEMBANGUNAN JALAN DAN JEMBATAN'),
('11.1.3.2.1', 'STAFF PEMBANGUNAN JALAN DAN JEMBATAN'),
('11.1.3.3', 'SEKSI PEMELIHARAAN JALAN DAN JEMBATAN'),
('11.1.3.3.1', 'STAFF PEMELIHARAAN JALAN DAN JEMBATAN'),
('11.1.4', 'BIDANG INFRASTRUKTUR PERSAMPAHAN DAN PERTAMANAN'),
('11.1.4.1', 'SEKSI INFRASTRUKTUR PERSAMPAHAN'),
('11.1.4.1.1', 'STAFF INFRASTRUKTUR PERSAMPAHAN'),
('11.1.4.2', 'SEKSI PERTAMANAN DAN PEMAKAMAN'),
('11.1.4.2.1', 'STAFF PERTAMANAN DAN PEMAKAMAN'),
('11.1.4.3', 'SEKSI INSTALASI LISTRIK DAN PENERANGAN JALAN UMUM'),
('11.1.4.3.1', 'STAFF INSTALASI LISTRIK DAN PENERANGAN JALAN UMUM'),
('11.1.5', 'BIDANG CIPTA KARYA'),
('11.1.5.1', 'SEKSI PENGEMBANGAN SISTEM PENYEDIAAN AIR MINUM'),
('11.1.5.1.1', 'STAFF PENGEMBANGAN SISTEM PENYEDIAAN AIR MINUM'),
('11.1.5.2', 'SEKSI PENGEMBANGAN SISTEM PENGELOLAAN AIR LIMBAH'),
('11.1.5.2.1', 'STAFF PENGEMBANGAN SISTEM PENGELOLAAN AIR LIMBAH'),
('11.1.5.3', 'SEKSI INFRASTURKTUR PEMUKIMAN DAN DRAINASE LINGKUNGAN'),
('11.1.5.3.1', 'STAFF INFRASTURKTUR PEMUKIMAN DAN DRAINASE LINGKUNGAN'),
('11.1.6', 'BIDANG TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.1', 'SEKSI PERENCANAAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.1.1', 'STAFF PERENCANAAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.2', 'SEKSI PEMANFAATAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.2.1', 'STAFF PEMANFAATAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.3', 'SEKSI PENGENDALIAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.6.3.1', 'STAFF PENGENDALIAN TATA RUANG DAN TATA BANGUNAN'),
('11.1.7', 'BIDANG JASA KONSTRUKSI'),
('11.1.7.1', 'SEKSI PEMBINAAN JASA KONSTRUKSI'),
('11.1.7.1.1', 'STAFF PEMBINAAN JASA KONSTRUKSI'),
('11.1.7.2', 'SEKSI PEMBERDAYAAN JASA KONSTRUKSI'),
('11.1.7.2.1', 'STAFF PEMBERDAYAAN JASA KONSTRUKSI'),
('11.1.7.3', 'SEKSI PENGAWASAN JASA KONSTRUKSI'),
('11.1.7.3.1', 'STAFF PENGAWASAN JASA KONSTRUKSI'),
('11.1.8', 'BIDANG LABORATORIUM DAN PERBENGKELAN'),
('11.1.8.1', 'SEKSI LABORATORIUM BAHAN DAN MATERIAL'),
('11.1.8.1.1', 'STAFF LABORATORIUM BAHAN DAN MATERIAL'),
('11.1.8.2', 'SEKSI PENGEMBANGAN TEKNOLOGI BAHAN BANGUNAN'),
('11.1.8.2.1', 'STAFF PENGEMBANGAN TEKNOLOGI BAHAN BANGUNAN'),
('11.1.8.3', 'SEKSI PERBENGKELAN DAN ALAT BERAT'),
('11.1.8.3.1', 'STAFF PERBENGKELAN DAN ALAT BERAT'),
('11.1.9', 'UPTD'),
('12.1', 'KEPALA DINAS'),
('12.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('12.1.2', 'SEKERTARIAT'),
('12.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('12.1.2.2', 'SUB BAGIAN KEUANGAN'),
('12.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('12.1.3', 'BIDANG TATA LINGKUNGAN'),
('12.1.3.1', 'SEKSI INEVENTARISASI RPPLH DAN KLHS'),
('12.1.3.1.1', 'STAFF INEVENTARISASI RPPLH DAN KLHS'),
('12.1.3.2', 'SEKSI KAJIAN DAMPAK LINGKUNGAN'),
('12.1.3.2.1', 'STAFF KAJIAN DAMPAK LINGKUNGAN'),
('12.1.3.3', 'SEKSI PEMELIHARAAN LINGKUNGAN HIDUP'),
('12.1.3.3.1', 'STAFF PEMELIHARAAN LINGKUNGAN HIDUP'),
('12.1.4', 'BIDANG PENGELOLAAN SAMPAH DAN LIMBAH B3'),
('12.1.4.1', 'SEKSI PENGURANGAN SAMPAH'),
('12.1.4.1.1', 'STAFF PENGURANGAN SAMPAH'),
('12.1.4.2', 'SEKSI LIMBAH B3'),
('12.1.4.2.1', 'STAFF LIMBAH B3'),
('12.1.4.3', 'SEKSI PENANGANAN SAMPAH'),
('12.1.4.3.1', 'STAFF PENANGANAN SAMPAH'),
('12.1.5', 'BIDANG PENGENDALIAN PENCEMARAN DAN KERUSAKAN LINGKUNGAN HIDUP'),
('12.1.5.1', 'SEKSI PENCEGAHAN PENCEMARAN LINGKUNGAN HIDUP'),
('12.1.5.1.1', 'STAFF PENCEGAHAN PENCEMARAN LINGKUNGAN HIDUP'),
('12.1.5.2', 'SEKSI PENANGGULANGAN DAN PEMULIHAN PENCEMARAN LINGKUNGAN HIDUP'),
('12.1.5.2.1', 'STAFF PENANGGULANGAN DAN PEMULIHAN PENCEMARAN LINGKUNGAN HIDUP'),
('12.1.5.3', 'SEKSI PENGENDALIAN KERUSAKAN LINGKUNGAN HIDUP'),
('12.1.5.3.1', 'STAFF PENGENDALIAN KERUSAKAN LINGKUNGAN HIDUP'),
('12.1.6', 'BIDANG PENATAAN DAN PENINGKATAN KAPASITAS LINGKUNGAN HIDUP'),
('12.1.6.1', 'SEKSI PENGAWASAN LINGKUNGAN HIDUP'),
('12.1.6.1.1', 'STAFF PENGAWASAN LINGKUNGAN HIDUP'),
('12.1.6.2', 'SEKSI PENGADUAN DAN PENATAAN HUKUM LINGKUNGAN'),
('12.1.6.2.1', 'STAFF PENGADUAN DAN PENATAAN HUKUM LINGKUNGAN'),
('12.1.6.3', 'SEKSI PENINGKATAN KAPASITAS LINGKUNGAN HIDUP'),
('12.1.6.3.1', 'STAFF PENINGKATAN KAPASITAS LINGKUNGAN HIDUP'),
('12.1.7', 'UPTD'),
('2.1', 'SEKERTARIS DPRD'),
('2.1.1', 'BAGIAN UMUM DAN KEPEGAWAIAN'),
('2.1.1.1', 'SUB BAGIAN TATA USAHA DAN KEPEGAWAIAN'),
('2.1.1.2', 'SUB BAGIAN UMUM'),
('2.1.1.3', 'SUB BAGIAN PERLENGKAPAN'),
('2.1.2', 'BAGIAN PERENCANAAN DAN KEUANGAN'),
('2.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('2.1.2.2', 'SUB BAGIAN VERIFIKASI'),
('2.1.2.3', 'SUB BAGIAN PEMBUKUAN DAN PELAPORAN'),
('2.1.3', 'BAGIAN PERUNDANG-UNDANGAN DAN PERSIDANGAN'),
('2.1.3.1', 'SUB BAGIAN PERUNDANG-UNDANGAN'),
('2.1.3.2', 'SUB BAGIAN PERSIDANGAN DAN RISALAH'),
('2.1.3.3', 'SUB BAGIAN HUBUNGAN MASYARAKAT DAN PROTOKOL'),
('2.1.4', 'PENGANGGARAN DAN PENGAWASAN'),
('2.1.4.1', 'SUB BAGIAN PENGANGGARAN'),
('2.1.4.2', 'SUB BAGIAN PENGAWASAN'),
('2.1.4.3', 'SUB BAGIAN ADMINISTRASI ALAT KELENGKAPAN DPRD'),
('3.1', 'KEPALA DINAS'),
('3.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('3.1.2', 'SEKERTARIAT'),
('3.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('3.1.2.2', 'SUB BAGIAN KEUANGAN'),
('3.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('3.1.3', 'BIDANG PEMBINAAN PAUD DAN PENDIDIKAN MASYARAKAT'),
('3.1.3.1', 'SEKSI PEMBINA PAUD'),
('3.1.3.1.1', 'STAFF PEMBINA PAUD'),
('3.1.3.2', 'SEKSI PEMBINA PENDIDIKAN MASYARAKAT'),
('3.1.3.2.1', 'STAFF PEMBINA PENDIDIKAN MASYARAKAT'),
('3.1.3.3', 'SEKSI SARANA PRASARANA DAN INVENTARIS PAUD'),
('3.1.3.3.1', 'STAFF SARANA PRASARANA DAN INVENTARIS PAUD'),
('3.1.4', 'BIDANG PEMBINAAN SD/SDLB'),
('3.1.4.1', 'SEKSI KURIKULUM SD/SDLB'),
('3.1.4.1.1', 'STAFF KURIKULUM SD/SDLB'),
('3.1.4.2', 'SEKSI KELEMBAGAAN DAN PESERTA DIDIK SD/SDLB'),
('3.1.4.2.1', 'STAFF KELEMBAGAAN DAN PESERTA DIDIK SD/SDLB'),
('3.1.4.3', 'SEKSI SARANA PRASARANA DAN INVENTARIS SD/SDLB'),
('3.1.4.3.1', 'STAFF SARANA PRASARANA DAN INVENTARIS SD/SDLB'),
('3.1.5', 'BIDANG PEMBINAAN SMP'),
('3.1.5.1', 'SEKSI KURIKULUM SMP'),
('3.1.5.1.1', 'STAFF KURIKULUM SMP'),
('3.1.5.2', 'SEKSI KELEMBAGAAN DAN PESERTA DIDIK SMP'),
('3.1.5.2.1', 'STAFF KELEMBAGAAN DAN PESERTA DIDIK SMP'),
('3.1.5.3', 'SEKSI SARANA PRASARANA DAN INVENTARIS SMP'),
('3.1.5.3.1', 'STAFF SARANA PRASARANA DAN INVENTARIS SMP'),
('3.1.6', 'BIDANG PEMBINAAN GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.1', 'SEKSI PENINGKATAN MUTU GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.1.1', 'STAFF PENINGKATAN MUTU GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.2', 'SEKSI MUTASI DAN PROMOSI GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.2.1', 'STAFF MUTASI DAN PROMOSI GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.3', 'SEKSI PENGAWASAN DAN PENGENDALIAN GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.6.3.1', 'STAFF PENGAWASAN DAN PENGENDALIAN GURU DAN TENAGA KEPENDIDIKAN'),
('3.1.7', 'BIDANG PEMBINAAN PEMUDA DAN OLAHRAGA'),
('3.1.7.1', 'SEKSI PEMUDA'),
('3.1.7.1.1', 'STAFF PEMUDA'),
('3.1.7.2', 'SEKSI OLAHRAGA'),
('3.1.7.2.1', 'STAFF OLAHRAGA'),
('3.1.7.3', 'SEKSI KELEMBAGAAN'),
('3.1.7.3.1', 'STAFF KELEMBAGAAN'),
('3.1.8', 'UPTD'),
('4.1', 'KEPALA DINAS'),
('4.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('4.1.2', 'SEKERTARIAT'),
('4.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('4.1.2.2', 'SUB BAGIAN KEUANGAN'),
('4.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('4.1.3', 'BIDANG NILAI BUDAYA DAN KESENIAN'),
('4.1.3.1', 'SEKSI PENGHAYAT DAN KEPERCAYAAN DAN TRADISI'),
('4.1.3.1.1', 'STAFF PENGHAYAT DAN KEPERCAYAAN DAN TRADISI'),
('4.1.3.2', 'SEKSI PEMBINA KESENIAN'),
('4.1.3.2.1', 'STAFF PEMBINA KESENIAN'),
('4.1.3.3', 'SEKSI USAHA HIBURAN DAN KELEMBAGAAN'),
('4.1.3.3.1', 'STAFF USAHA HIBURAN DAN KELEMBAGAAN'),
('4.1.4', 'BIDANG SEJARAH DAN PURBAKALA'),
('4.1.4.1', 'SEKSI REGISTRASI CAGAR BUDAYA,MUSEUM DAN PURBAKALA'),
('4.1.4.1.1', 'STAFF REGISTRASI CAGAR BUDAYA,MUSEUM DAN PURBAKALA'),
('4.1.4.2', 'SEKSI PELESTARIAN CAGAR BUDAYA,MUSEUM DAN PURBAKALA'),
('4.1.4.2.1', 'STAFF PELESTARIAN CAGAR BUDAYA,MUSEUM DAN PURBAKALA'),
('4.1.4.3', 'SEKSI SEJARAH'),
('4.1.4.3.1', 'STAFF SEJARAH'),
('4.1.5', 'BIDANG PEMASARAN PARIWISATA'),
('4.1.5.1', 'SEKSI PROMOSI'),
('4.1.5.1.1', 'STAFF PROMOSI'),
('4.1.5.2', 'SEKSI PELAYANAN DAN INFORMASI'),
('4.1.5.2.1', 'STAFF PELAYANAN DAN INFORMASI'),
('4.1.5.3', 'SEKSI KERJASAMA'),
('4.1.5.3.1', 'STAFF KERJASAMA'),
('4.1.6', 'BIDANG PENGEMBANGAN PARIWISATA'),
('4.1.6.1', 'SEKSI OBYEK DAN DAYA TARIK WISATA'),
('4.1.6.1.1', 'STAFF OBYEK DAN DAYA TARIK WISATA'),
('4.1.6.2', 'SEKSI INDUSTRI DAN JASA'),
('4.1.6.2.1', 'STAFF INDUSTRI DAN JASA'),
('4.1.6.3', 'SEKSI PEMBERDAYAAN SUMBER DAYA MANUSIA KEPARIWISATAAN'),
('4.1.6.3.1', 'STAFF PEMBERDAYAAN SUMBER DAYA MANUSIA KEPARIWISATAAN'),
('4.1.7', 'BIDANG EKONOMI KREATIF'),
('4.1.7.1', 'SEKSI EKONOMI KREATIF BERBASIS MEDIA,DESAIN DAN IPTEK'),
('4.1.7.1.1', 'STAFF EKONOMI KREATIF BERBASIS MEDIA,DESAIN DAN IPTEK'),
('4.1.7.2', 'SEKSI EKONOMI KREATIF BERBASIS SENI BUDAYA'),
('4.1.7.2.1', 'STAFF EKONOMI KREATIF BERBASIS SENI BUDAYA'),
('4.1.7.3', 'SEKSI FASILITASI EKONOMI KREATIF'),
('4.1.7.3.1', 'STAFF FASILITASI EKONOMI KREATIF'),
('4.1.8', 'UPTD'),
('5.1', 'KEPALA DINAS'),
('5.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('5.1.2', 'SEKERTARIAT'),
('5.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('5.1.2.2', 'SUB BAGIAN KEUANGAN'),
('5.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('5.1.3', 'BIDANG REHABILITASI DAN PEMBERDAYAAN SOSIAL'),
('5.1.3.1', 'SEKSI PELAYANAN DAN REHABILITASI TUNA SOSIAL'),
('5.1.3.1.1', 'STAFF PELAYANAN DAN REHABILITASI TUNA SOSIAL'),
('5.1.3.2', 'SEKSI PELAYANAN DAN REHABILITASI SOSIAL PENYANDANG DISABILITASI'),
('5.1.3.2.1', 'STAFF PELAYANAN DAN REHABILITASI SOSIAL PENYANDANG DISABILITASI'),
('5.1.3.3', 'SEKSI PEMBERDAYAAN SOSIAL MASYARAKAT'),
('5.1.3.3.1', 'STAFF PEMBERDAYAAN SOSIAL MASYARAKAT'),
('5.1.4', 'BIDANG PERLINDUNGAN DAN JAMINAN SOSIAL'),
('5.1.4.1', 'SEKSI PERLINDUNGAN SOSIAL KORBAN BENCANA'),
('5.1.4.1.1', 'STAFF PERLINDUNGAN SOSIAL KORBAN BENCANA'),
('5.1.4.2', 'SEKSI ADVOKASI DAN PERLINDUNGAN SOSIAL'),
('5.1.4.2.1', 'STAFF ADVOKASI DAN PERLINDUNGAN SOSIAL'),
('5.1.4.3', 'SEKSI ASISTENSI DAN JAMINAN SOSIAL'),
('5.1.4.3.1', 'STAFF ASISTENSI DAN JAMINAN SOSIAL'),
('5.1.5', 'BIDANG PENGENDALIAN PENDUDUK PENYULUHAN, DAN PENGGERAKAN'),
('5.1.5.1', 'SEKSI ADVOKASI DAN PENGGERAKAN'),
('5.1.5.1.1', 'STAFF ADVOKASI DAN PENGGERAKAN'),
('5.1.5.2', 'SEKSI PENYULUHAN DAN PENDAYAGUNAAN PLKB, PKB DAN KADER KB'),
('5.1.5.2.1', 'STAFF PENYULUHAN DAN PENDAYAGUNAAN PLKB, PKB DAN KADER KB'),
('5.1.5.3', 'SEKSI PENGENDALIAN PENDUDUK DAN INFORMASI KELUARGA'),
('5.1.5.3.1', 'STAFF PENGENDALIAN PENDUDUK DAN INFORMASI KELUARGA'),
('5.1.6', 'BIDANG KELUARGA BERENCANA, KETAHANAN DAN KESEJAHTERAAN KELUARGA'),
('5.1.6.1', 'SEKSI JAMINAN BER-KB'),
('5.1.6.1.1', 'STAFF JAMINAN BER-KB'),
('5.1.6.2', 'SEKSI PEMBINAAN KESERTAAN BER-KB'),
('5.1.6.2.1', 'STAFF PEMBINAAN KESERTAAN BER-KB'),
('5.1.6.3', 'SEKSI PEMBINAAN KETAHANAN DAN KESEJAHTERAAN KELUARGA'),
('5.1.6.3.1', 'STAFF PEMBINAAN KETAHANAN DAN KESEJAHTERAAN KELUARGA'),
('5.1.7', 'BIDANG PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK'),
('5.1.7.1', 'SEKSI KUALITAS HIDUP PEREMPUAN'),
('5.1.7.1.1', 'STAFF KUALITAS HIDUP PEREMPUAN'),
('5.1.7.2', 'SEKSI PERLINDUNGAN PEREMPUAN DAN ANAK'),
('5.1.7.2.1', 'STAFF PERLINDUNGAN PEREMPUAN DAN ANAK'),
('5.1.7.3', 'SEKSI PENGARUSUTAMAAN GENDER DAN PENGARUSUTAMAAN HAK ANAK'),
('5.1.7.3.1', 'STAFF PENGARUSUTAMAAN GENDER DAN PENGARUSUTAMAAN HAK ANAK'),
('5.1.8', 'UPTD'),
('6.1', 'KEPALA DINAS'),
('6.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('6.1.2', 'SEKERTARIAT'),
('6.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('6.1.2.2', 'SUB BAGIAN KEUANGAN'),
('6.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('6.1.3', 'BIDANG KESEHATAN MASYARAKAT'),
('6.1.3.1', 'SEKSI KESEHATAN KELUARGA DAN GIZI MASYARAKAT'),
('6.1.3.1.1', 'STAFF KESEHATAN KELUARGA DAN GIZI MASYARAKAT'),
('6.1.3.2', 'SEKSI PROMOSI DAN PEMBERDAYAAN MASYARAKAT'),
('6.1.3.2.1', 'STAFF PROMOSI DAN PEMBERDAYAAN MASYARAKAT'),
('6.1.3.3', 'SEKSI KESEHATAN LINGKUNGAN, KESEHATAN KERJA DAN KESEHATAN OLAHRAGA'),
('6.1.3.3.1', 'STAFF KESEHATAN LINGKUNGAN, KESEHATAN KERJA DAN KESEHATAN OLAHRAGA'),
('6.1.4', 'BIDANG PENCEGAHAN DAN PENGENDALIAN PENYAKIT'),
('6.1.4.1', 'SEKSI SURVEILANS DAN IMUNISASI'),
('6.1.4.1.1', 'STAFF SURVEILANS DAN IMUNISASI'),
('6.1.4.2', 'SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT MENULAR'),
('6.1.4.2.1', 'STAFF PENCEGAHAN DAN PENGENDALIAN PENYAKIT MENULAR'),
('6.1.4.3', 'SEKSI PENCEGAHAN DAN PENGENDALIAN PENYAKIT TIDAK MENULAR DAN KESEHATAN JIWA'),
('6.1.4.3.1', 'STAFF PENCEGAHAN DAN PENGENDALIAN PENYAKIT TIDAK MENULAR DAN KESEHATAN JIWA'),
('6.1.5', 'BIDANG PELAYANAN KESEHATAN'),
('6.1.5.1', 'SEKSI PELAYANAN KESEHATAN PRIMER'),
('6.1.5.1.1', 'STAFF PELAYANAN KESEHATAN PRIMER'),
('6.1.5.2', 'SEKSI PELAYANAN KESEHATAN RUJUKAN'),
('6.1.5.2.1', 'STAFF PELAYANAN KESEHATAN RUJUKAN'),
('6.1.5.3', 'SEKSI PELAYANAN KESEHATAN TRADISIONAL'),
('6.1.5.3.1', 'STAFF PELAYANAN KESEHATAN TRADISIONAL'),
('6.1.6', 'BIDANG SUMBER DAYA KESEHATAN'),
('6.1.6.1', 'SEKSI KEFARMASIAN'),
('6.1.6.1.1', 'STAFF KEFARMASIAN'),
('6.1.6.2', 'SEKSI ALAT KESEHATAN'),
('6.1.6.2.1', 'STAFF ALAT KESEHATAN'),
('6.1.6.3', 'SEKSI SUMBER DAYA MANUSIA KESEHATAN'),
('6.1.6.3.1', 'STAFF SUMBER DAYA MANUSIA KESEHATAN'),
('6.1.7', 'UPTD'),
('7.1', 'KEPALA DINAS'),
('7.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('7.1.2', 'SEKERTARIAT'),
('7.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('7.1.2.2', 'SUB BAGIAN KEUANGAN'),
('7.1.2.3', 'SUB BAGIAN UMUM DAN KEPEGAWAIAN'),
('7.1.3', 'BIDANG PELAYANAN PENDAFTARAN PENDUDUK'),
('7.1.3.1', 'SEKSI IDENTITAS PENDUDUK'),
('7.1.3.1.1', 'STAFF IDENTITAS PENDUDUK'),
('7.1.3.2', 'SEKSI PINDAH DATANG PENDUDUK'),
('7.1.3.2.1', 'STAFF PINDAH DATANG PENDUDUK'),
('7.1.3.3', 'SEKSI PENDATAAN PENDUDUK'),
('7.1.3.3.1', 'STAFF PENDATAAN PENDUDUK'),
('7.1.4', 'BIDANG PELAYANAN PENCATATAN SIPIL'),
('7.1.4.1', 'SEKSI KELAHIRAN'),
('7.1.4.1.1', 'STAFF KELAHIRAN'),
('7.1.4.2', 'SEKSI PERKAWINAN DAN PERCERAIAN'),
('7.1.4.2.1', 'STAFF PERKAWINAN DAN PERCERAIAN'),
('7.1.4.3', 'SEKSI PERUBAHAN STATUS ANAK, PEWARGANEGARAAN DAN KEMATIAN'),
('7.1.4.3.1', 'STAFF PERUBAHAN STATUS ANAK, PEWARGANEGARAAN DAN KEMATIAN'),
('7.1.5', 'BIDANG PENGELOLAAN INFORMASI ADMINISTRASI KEPENDUDUKAN'),
('7.1.5.1', 'SEKSI SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN'),
('7.1.5.1.1', 'STAFF SISTEM INFORMASI ADMINISTRASI KEPENDUDUKAN'),
('7.1.5.2', 'SEKSI PENGOLAHAN DAN PENYAJIAN DATA KEPENDUDUKAN'),
('7.1.5.2.1', 'STAFF PENGOLAHAN DAN PENYAJIAN DATA KEPENDUDUKAN'),
('7.1.5.3', 'SEKSI TATA KELOLA DAN SUMBER DAYA MANUSIA TEKNOLOGI INFORMASI DAN KOMUNIKASI'),
('7.1.5.3.1', 'STAFF TATA KELOLA DAN SUMBER DAYA MANUSIA TEKNOLOGI INFORMASI DAN KOMUNIKASI'),
('7.1.6', 'BIDANG PEMANFAATAN DATA DAN INOVASI PELAYANAN'),
('7.1.6.1', 'SEKSI KERJASAMA'),
('7.1.6.1.1', 'STAFF KERJASAMA'),
('7.1.6.2', 'SEKSI PEMANFAATAN DATA DAN DOKUMEN KEPENDUDUKAN'),
('7.1.6.2.1', 'STAFF PEMANFAATAN DATA DAN DOKUMEN KEPENDUDUKAN'),
('7.1.6.3', 'SEKSI INOVASI PELAYANAN'),
('7.1.6.3.1', 'STAFF INOVASI PELAYANAN'),
('8.1', 'KEPALA DINAS'),
('8.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('8.1.2', 'SEKERTARIAT'),
('8.1.2.1', 'SUB BAGIAN PERENCANAAN'),
('8.1.2.2', 'SUB BAGIAN UMUM DAN KEUANGAN'),
('8.1.3', 'BIDANG PELATIHAN DAN PRODUKTIVITAS'),
('8.1.3.1', 'SEKSI KELEMBAGAAN PELATIHAN'),
('8.1.3.1.1', 'STAFF KELEMBAGAAN PELATIHAN'),
('8.1.3.2', 'SEKSI PENYELENGGARAAN PELATIHAN'),
('8.1.3.2.1', 'STAFF PENYELENGGARAAN PELATIHAN'),
('8.1.3.3', 'SEKSI PRODUKTIVITAS TENAGA KERJA'),
('8.1.3.3.1', 'STAFF PRODUKTIVITAS TENAGA KERJA'),
('8.1.4', 'BIDANG PENEMPATAN, PERLUASAN KESEMPATAN KERJA DAN TRANSMIGRASI'),
('8.1.4.1', 'SEKSI PENEMPATAN TENAGA KERJA'),
('8.1.4.1.1', 'STAFF PENEMPATAN TENAGA KERJA'),
('8.1.4.2', 'SEKSI PENGEMBANGAN DAN PERLUASAN KESEMPATAN KERJA'),
('8.1.4.2.1', 'STAFF PENGEMBANGAN DAN PERLUASAN KESEMPATAN KERJA'),
('8.1.4.3', 'SEKSI TRANSMIGRASI'),
('8.1.4.3.1', 'STAFF TRANSMIGRASI'),
('8.1.5', 'BIDANG HUBUNGAN INDUSTRIAL DAN KESEJAHTERAAN TENAGA KERJA'),
('8.1.5.1', 'SEKSI HUBUNGAN INDUSTRIAL'),
('8.1.5.1.1', 'STAFF HUBUNGAN INDUSTRIAL'),
('8.1.5.2', 'SEKSI PERLINDUNGAN TENAGA KERJA'),
('8.1.5.2.1', 'STAFF PERLINDUNGAN TENAGA KERJA'),
('8.1.5.3', 'SEKSI KESEJAHTERAAN TENAGA KERJA'),
('8.1.5.3.1', 'STAFF KESEJAHTERAAN TENAGA KERJA'),
('8.1.6', 'UPTD'),
('9.1', 'KEPALA DINAS'),
('9.1.1', 'KELOMPOK JABATAN FUNGSIONAL'),
('9.1.2', 'SEKERTARIAT'),
('9.1.2.1', 'KASUBAG PERENCANAAN'),
('9.1.2.2', 'KASUBAG KEUANGAN'),
('9.1.2.3', 'KASUBAG UMUM DAN KEPEGAWAIAN'),
('9.1.3', 'KEPALA BIDANG LALU LINTAS'),
('9.1.3.1', 'KASI MANAJEMEN LALU LINTAS'),
('9.1.3.1.1', 'STAFF MANAJEMEN LALU LINTAS'),
('9.1.3.2', 'KASI REKAYASA LALU LINTAS'),
('9.1.3.2.1', 'STAFF REKAYASA LALU LINTAS'),
('9.1.3.3', 'KASI TEKNOLOGI INFORMASI LALU LINTAS'),
('9.1.3.3.1', 'STAFF TEKNOLOGI INFORMASI LALU LINTAS'),
('9.1.4', 'KEPALA BIDANG KESELAMATAN JALAN'),
('9.1.4.1', 'KASI PENGENDALIAN DAN OPERASI'),
('9.1.4.1.1', 'STAFF PENGENDALIAN DAN OPERASI'),
('9.1.4.2', 'KASI BIMBINGAN DAN KESELAMATAN JALAN'),
('9.1.4.2.1', 'STAFF BIMBINGAN DAN KESELAMATAN JALAN'),
('9.1.4.3', 'KASI AUDIT DAN INSPEKSI KESELAMATAN JALAN'),
('9.1.4.3.1', 'STAFF AUDIT DAN INSPEKSI KESELAMATAN JALAN'),
('9.1.5', 'KEPALA BIDANG PRASARANA'),
('9.1.5.1', 'KASI PEMELIHARAAN PRASARANA'),
('9.1.5.1.1', 'STAFF PEMELIHARAAN PRASARANA'),
('9.1.5.2', 'KASI PEMERIKSAAN DAN KELAIKAN PRASARANA'),
('9.1.5.2.1', 'STAFF PEMERIKSAAN DAN KELAIKAN PRASARANA'),
('9.1.5.3', 'KASI PENGEMBANGAN PRASARANA'),
('9.1.5.3.1', 'STAFF PENGEMBANGAN PRASARANA'),
('9.1.6', 'KEPALA BIDANG ANGKUTAN DAN SARANA'),
('9.1.6.1', 'KASI ANGKUTAN DALAM TRAYEK'),
('9.1.6.1.1', 'STAFF ANGKUTAN DALAM TRAYEK'),
('9.1.6.2', 'KASI ANGKUTAN TIDAK DALAM TRAYEK DAN ANGKUTAN BARANG'),
('9.1.6.2.1', 'STAFF ANGKUTAN TIDAK DALAM TRAYEK DAN ANGKUTAN BARANG'),
('9.1.6.3', 'KASI PENGUJIAN SARANA'),
('9.1.6.3.1', 'STAFF PENGUJIAN SARANA'),
('9.1.7', 'UPTD');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `kode_jenis` int(11) NOT NULL,
  `nama_jenis_surat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`kode_jenis`, `nama_jenis_surat`) VALUES
(1, 'NOTA DINAS'),
(2, 'SURAT BIASA'),
(3, 'SURAT UNDANGAN'),
(4, 'SURAT PERINTAH TUGAS');

-- --------------------------------------------------------

--
-- Table structure for table `m_unor`
--

CREATE TABLE `m_unor` (
  `id_unor` int(11) NOT NULL,
  `kode_dinas` int(2) DEFAULT NULL,
  `kode_unor` varchar(50) DEFAULT NULL,
  `nama_dinas` varchar(50) DEFAULT NULL,
  `nama_unor` varchar(255) DEFAULT NULL,
  `kode_gol` varchar(20) DEFAULT NULL,
  `jenis_surat` varchar(50) DEFAULT NULL,
  `tgl_terima_surat` date NOT NULL,
  `tgl_kirim_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_dinas`
--

CREATE TABLE `sub_dinas` (
  `kode_dinas` int(50) NOT NULL,
  `nama_dinas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_dinas`
--

INSERT INTO `sub_dinas` (`kode_dinas`, `nama_dinas`) VALUES
(1, 'SETDA 1'),
(2, 'SEKWAN'),
(3, 'PENDIDIKAN PEMUDA OLAHRAGA'),
(4, 'DISBUDPAR'),
(5, 'DINAS SOSIAL'),
(6, 'DINAS KESEHATAN'),
(7, 'CAPIL TANPA UPT'),
(8, 'DISNAKER'),
(9, 'DINAS PERHUBUNGAN'),
(10, 'PETERNAKAN'),
(11, 'DINAS PU TATA RUANG'),
(12, 'BLH'),
(13, 'KETAHANAN PANGAN'),
(14, 'DINAS PERTANIAN'),
(15, 'DINAS PERIKANAN'),
(16, 'KOMINFO'),
(17, 'DINAS PERMUKIMAN DAN SDA'),
(18, 'PERPUSTAKAAN'),
(19, 'KOPERASI'),
(20, 'PERINDAG'),
(21, 'MODAL'),
(22, 'PM DESA'),
(23, 'INSPEKTORAT'),
(24, 'SATPOL PP'),
(25, 'BAPPEDA'),
(26, 'PENDAPATAN'),
(27, 'BPKAD'),
(28, 'BKD'),
(29, 'KECAMATAN'),
(30, 'KECAMATAN + KELURAHAN');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(10) NOT NULL,
  `kepada` varchar(100) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `sifat` varchar(20) DEFAULT NULL,
  `lampiran` varchar(20) DEFAULT NULL,
  `hal` varchar(20) DEFAULT NULL,
  `isi` text,
  `penanda_tangan` varchar(50) DEFAULT NULL,
  `paraf` varchar(50) DEFAULT NULL,
  `tembusan` varchar(100) DEFAULT NULL,
  `perintah_tugas` varchar(255) DEFAULT NULL,
  `pengantar` varchar(255) DEFAULT NULL,
  `pengirim` varchar(255) DEFAULT NULL,
  `nama_jenis_surat` varchar(50) DEFAULT NULL,
  `tgl_kirim_surat` date NOT NULL,
  `tgl_terima_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `kepada`, `tgl`, `no_surat`, `sifat`, `lampiran`, `hal`, `isi`, `penanda_tangan`, `paraf`, `tembusan`, `perintah_tugas`, `pengantar`, `pengirim`, `nama_jenis_surat`, `tgl_kirim_surat`, `tgl_terima_surat`) VALUES
(2, 'sdfsdf', '2019-09-02', 'sdfsdfsdf', 'sdfsdfgfdgdf', 'sfsdfsdfsdg', 'sdfdsfdsfsd', 'sdfdsfsdfdfgdfgfdssfsd', 'sdfdsfsdgg', 'sdfsdfsdfds', 'sdgfsgsfsdfsdf', 'sdsfdsfdsfsdf', 'sdfdsfsdfsd', 'sdfsdfsdfsdf', NULL, '0000-00-00', '0000-00-00'),
(3, '$kepada', '0000-00-00', '$no_surat', '$sifat', '$lampiran', '$hal', '$isi', NULL, '$paraf', '$tembusan', NULL, NULL, '$pengirim', NULL, '0000-00-00', '0000-00-00'),
(4, 'sas', '2019-08-25', '12376N987', 'Biasa', 'Belum ada', 'asa', 'sasasas', NULL, 'Kepala Pengembangan', 'Tembusan disampaikan kepada Yth.', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(6, 'pak jaya', '2019-09-10', '12kio', '2', '2', 'meminjam', '', NULL, '3', '3', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(7, 'Yanto', '2019-09-06', '26hjhj121as', 'Biasa', 'Belum ada', 'meminjam', '', NULL, '3', '4', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(12, 'budi', '2019-09-17', '23j90', 'Biasa', 'Belum ada', 'meminjam', '', NULL, '3', '3', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(24, 'budi', '2019-09-11', '12b67', 'biasa', 'Belum ada', 'meminjam', 'hello', '3', '3', NULL, NULL, '3', '3', NULL, '0000-00-00', '0000-00-00'),
(30, '', '0000-00-00', '', 'Biasa', 'Belum ada', '', '', NULL, 'Kepala Pengembangan', 'Tembusan disampaikan kepada Yth.', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(32, 'budii', '2019-09-03', '21jj', 'Biasa', 'Belum ada', 'satu', 'hello', NULL, 'Kepala Pengembangan', 'Tembusan disampaikan kepada Yth.', NULL, NULL, 'Kepala Bidang Telematika', NULL, '0000-00-00', '0000-00-00'),
(35, 'pak bento', '2019-09-10', '88791', 'Biasa', 'Belum ada', 'pinjam ruangan', '', '2', NULL, 'Tembusan disampaikan kepada Yth.', NULL, NULL, '2', NULL, '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan_unor`
--
ALTER TABLE `golongan_unor`
  ADD PRIMARY KEY (`kode_gol`);

--
-- Indexes for table `jabatan_unor`
--
ALTER TABLE `jabatan_unor`
  ADD PRIMARY KEY (`kode_unor`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `m_unor`
--
ALTER TABLE `m_unor`
  ADD PRIMARY KEY (`id_unor`);

--
-- Indexes for table `sub_dinas`
--
ALTER TABLE `sub_dinas`
  ADD PRIMARY KEY (`kode_dinas`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`),
  ADD UNIQUE KEY `no_surat` (`no_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_unor`
--
ALTER TABLE `m_unor`
  MODIFY `id_unor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;