-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Sep 2020 pada 04.55
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppm_itdel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `nama`) VALUES
(1, 'Dr. Arlinta Christy Barus S.T., M.InfoTech'),
(2, 'Dr. Arnaldo Marulitua Sinaga, S.T, M.InfoTech'),
(3, 'Anthon Roberto Tampubolon, S.Kom, M.T'),
(4, 'Adelina Manurung S.Si., M. Sc.'),
(5, 'Arie Satia Dharma, S.T, M.Kom'),
(6, 'Eka Stephani Sinambela, SST., M.Sc'),
(7, 'Hernawati Susanti Samosir, S.ST., M.Kom'),
(8, 'Inte Christinawati Bu’ulolo, ST., M.T.I'),
(9, 'I Gde Eka Dirgayussa, S.Pd,M.Si'),
(10, 'Ike Fitriyaningsih, S.Si., M.Si'),
(11, 'Istas Pratomo Manalu, S.Si, M.Sc'),
(12, 'Indra Hartarto Tambunan, ST., M.S.,Ph.D'),
(13, 'Iustisia Natalia Simbolon, S.Kom.,M.T'),
(14, 'Johannes Harungguan Sianipar, ST, MT'),
(15, 'Junita Amalia, S.Pd, M.Si'),
(16, 'Lit Malem Ginting, S.Si, MT'),
(17, 'Marojahan Mula Timbul Sigiro, ST, M.Sc'),
(18, 'Mario Elyezer Subekti Simaremare, S.Kom., M.Sc'),
(19, 'Mukhammad Solikhin, S.Si, M.Si'),
(20, 'Monalisa Pasaribu, S.S, M.Ed (TESOL)'),
(21, 'Niko Saripson Pandapotan Simamora S.T., M.A.B'),
(22, 'Nenni Mona Aruan, S.Pd., M.Si'),
(23, 'Parmonangan Rotua Togatorop, S.Kom., M.T.I'),
(24, 'Pandapotan Siagian, ST, M.Eng'),
(25, 'Rumondang Miranda Marsaulina, S.P, M.Si'),
(26, 'Riyanthi Angrainy Sianturi, S.Sos, M.Ds'),
(27, 'Roy Deddy Hasiholan Lumban Tobing, S.T., M.ICT'),
(28, 'Regina Ayunita Tarigan, S.Si, M.Sc'),
(29, 'Santi Agustina Manalu, S.S., M.Pd'),
(30, 'Samuel Indra Gunawan Situmeang, S.Ti., M.Sc.'),
(31, 'Tennov Simanjuntak, S.T, M.Sc'),
(32, 'Tiurma Lumban Gaol, SP, M.P'),
(33, 'Tahan Hino Juardi Sihombing, S.Pd.,M.AppLing (TESOL)'),
(34, 'Teamsar Muliadi Panggabean S.Kom, PGCert'),
(35, 'Tulus Pardamean Simanjuntak, SST'),
(36, 'Tennov Simanjuntak, S.T, M.Sc'),
(37, 'Verawaty Situmorang, S.Kom., M.T.I'),
(38, 'Yaya Setiyadi, S.Si, M.T'),
(39, 'Yohanssen Pratama, S.Si, M.T'),
(40, 'Yulisa Lestari., S.Si, M.T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `naskah_id` int(10) UNSIGNED NOT NULL,
  `penelaah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `naskah_id`, `penelaah`, `file`, `komentar`, `created_at`, `updated_at`, `read`) VALUES
(1, 2, 'Penelaah', 'JNE20200114_13365223 (2).pdf', 'hghgg', '2020-08-03 23:24:49', '2020-08-03 23:24:49', 0),
(2, 1, 'Humas', 'JNE20200114_13365223 (2) (2).pdf', 'sudah saya perbaiki', '2020-08-04 01:37:36', '2020-08-04 01:37:36', 0),
(3, 1, 'Humas', 'Yayasan Kalam Kudus055(1) (1).pdf', 'Siapp', '2020-08-11 00:11:07', '2020-08-11 00:11:07', 0),
(5, 3, 'Humas', 'Yayasan Kalam Kudus055(1) (1).pdf', 'Lidah Buaya', '2020-08-11 00:12:11', '2020-08-11 00:12:11', 0),
(6, 1, 'Humas', 'SW-KP-20-225B (2).doc', 'Sudah saya perbaiki', '2020-08-11 00:35:06', '2020-08-11 00:35:06', 0),
(7, 1, 'Humas', 'Rep-KP-20-225B.doc', 'Sudah saya perbaiki ya', '2020-08-11 02:38:38', '2020-08-11 02:38:38', 0),
(8, 1, 'Humas', '11317046_DIII Teknologi Informasi.pdf', 'Yang saya perbaiki adalah bagian dashboard', '2020-08-13 00:20:47', '2020-08-13 00:20:47', 0),
(10, 3, 'Amsal', '11317046_DIII Teknologi Informasi.pdf', 'Sudah saya perbaikiya', '2020-08-13 00:30:53', '2020-08-13 00:30:53', 0),
(11, 8, 'Penelaah', 'Narasi TV.pdf', 'Dear Divisi Kemitraan,\r\nBerikut merupakan naskah yang telah saya perbaiki\r\nTerimakasih', '2020-08-18 02:38:53', '2020-08-18 02:38:53', 0),
(12, 8, 'Penelaah', 'Narasi TV.pdf', 'dear divisi kemitraan,\r\n berikut saya lampirkan naskah yang telaah saya perbaiki', '2020-08-18 03:20:55', '2020-08-18 03:20:55', 0),
(14, 11, 'Amel', 'Template Data Diri Lulusan_PPKHA_2020(1).docx', 'Dear Divisi Kemitraan. \r\nBerikut saya lampirkan naskah yang telah saya telaah\r\nTerimakasih', '2020-08-18 04:23:14', '2020-08-18 04:23:14', 0),
(15, 11, 'Humas', 'Template Data Diri Lulusan_PPKHA_2020(1)(1).docx', 'Dear Bapak Yohansen\r\nBerikut saya lampirkan hasil telaah saya', '2020-08-18 04:33:14', '2020-08-18 04:33:14', 0),
(16, 11, 'Amel', 'Template Data Diri Lulusan_PPKHA_2020(1)(2).docx', 'Dear divisi kemitraan, \r\nBerikut adalah naskah yang telah saya perbaiki\r\nTerimakasih', '2020-08-18 04:46:22', '2020-08-18 04:46:22', 0),
(17, 29, 'Humas', 'Template Data Diri Lulusan_PPKHA_2020(1)(1).docx', 'trying', '2020-08-24 19:49:44', '2020-08-24 19:49:44', 0),
(18, 29, 'Humas', 'Template Data Diri Lulusan_PPKHA_2020(2).docx', 'trytryy', '2020-08-24 19:57:29', '2020-08-24 19:57:29', 0),
(19, 30, 'Penelaah', 'Huawei20200604_14194554.pdf', 'Dear Divisi Kemitraan,\r\nBerikut telah saya lampirkan hasil dari perbaikan naskah\r\nTerimakasih', '2020-08-25 02:08:04', '2020-08-25 02:08:04', 0),
(20, 31, 'Penelaah', 'Template Data Diri Lulusan_PPKHA_2020(1)(1)(8).docx', 'Dear divisi kemitraan, \r\nBerikut saya lampirkan hasil perbaikan naskah pada bagian ruang lingkup\r\nTerimakasih', '2020-08-25 05:11:41', '2020-08-25 05:11:41', 0),
(21, 32, 'Penelaah', 'JNE20200114_13365223 (1).pdf', 'Dear Divisi Kemitraan.\r\nBerikut saya lampirkan perbaikan pada ruang lingkup naskah.\r\nTerima Kasih', '2020-08-26 20:53:25', '2020-08-26 20:53:25', 0),
(22, 33, 'Amsal', 'amsal_dokumen.docx', 'Dear Divisi Kemitraan,\r\nBerikut saya lampirkan hasil perbaikan pada bagian ruang lingkup \r\nTerima Kasih', '2020-08-26 21:19:01', '2020-08-26 21:19:01', 0),
(23, 33, 'Humas', 'amsal_dokumen.docx', 'Dear Bapak Arnaldo,\r\nSaya sudah terima hasil perbaikan, namun masih ada yang kekurangan pada bagian ruang lingkup \r\nTerima Kasih', '2020-08-26 21:22:25', '2020-08-26 21:22:25', 0),
(24, 33, 'Penelaah', 'amsal_dokumen.docx', 'Dear Divisi Kemitraan,\r\nSaya sudah memperbaikinya kembali. \r\nTerima aksih', '2020-08-26 21:23:23', '2020-08-26 21:23:23', 0),
(25, 46, 'Penelaah', 'amsal_dokumen (1).docx', 'Sudah saya perbaiki. Terima kasih', '2020-08-28 03:25:17', '2020-08-28 03:25:17', 0),
(26, 46, 'Humas', 'amsal_dokumen (1).docx', 'Belum selesai, mohon diperbaiki lagi', '2020-08-28 03:26:03', '2020-08-28 03:26:03', 0),
(27, 46, 'Penelaah', 'amsal_dokumen (1).docx', 'Sudah saya perbaiki, terimakas', '2020-08-28 03:26:56', '2020-08-28 03:26:56', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `filenafil`
--

CREATE TABLE `filenafil` (
  `id` int(10) UNSIGNED NOT NULL,
  `nafil_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `filenafil`
--

INSERT INTO `filenafil` (`id`, `nafil_id`, `file`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 4, 'Yayasan Kalam Kudus055(1).pdf', 'Berikut Perbaikan yang telah saya kirimkan', '2020-08-10 21:14:55', '2020-08-10 21:14:55'),
(4, 6, 'JNE20200114_13365223 (1).pdf', 'Yth Bapak/Ibu Divisi Kemitraan\r\nBerikut merupakan lampiran perbaikan yang telah saya perbaiki\r\nTerimakasih', '2020-08-13 20:37:50', '2020-08-13 20:37:50'),
(5, 6, 'Narasi TV.pdf', 'Yth, Divisi Kemitraan\r\nMelalui ini, saya melampirkan hasil perbaikan final terkait naskah yang telah diperbaiki\r\nTeerimakasih', '2020-08-18 02:42:06', '2020-08-18 02:42:06'),
(6, 7, 'Template Data Diri Lulusan_PPKHA_2020(2).docx', 'Dear divisi kemitraan\r\nBerikut saya lampirkan perbaikan final\r\nterimakasih', '2020-08-18 04:53:36', '2020-08-18 04:53:36'),
(7, 8, 'Template Data Diri Lulusan_PPKHA_2020(1)(1)(8).docx', 'Dear Divisi kemitraan\r\nBerikut saya lampirkan hasil perbaikan final\r\nTerimakasih', '2020-08-25 05:23:16', '2020-08-25 05:23:16'),
(13, 46, 'amsal_dokumen (1).docx', 'Sudah Saya Terjemahkan', '2020-08-28 03:34:16', '2020-08-28 03:34:16'),
(14, 46, 'amsal_dokumen (1).docx', 'Sudah saya translate', '2020-08-28 03:37:50', '2020-08-28 03:37:50'),
(15, 9, 'amsal_dokumen (1).docx', 'Sudah saya translate', '2020-08-28 03:46:14', '2020-08-28 03:46:14'),
(16, 11, 'amsal_dokumen (1).docx', 'Sudah say perbaiki terima kasih', '2020-08-28 03:47:17', '2020-08-28 03:47:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `infokerjasama`
--

CREATE TABLE `infokerjasama` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `mitra` varchar(500) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `jenis_kerjasama` varchar(500) NOT NULL,
  `unit_pengelola` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `files` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infokerjasama`
--

INSERT INTO `infokerjasama` (`id`, `tahun`, `tanggal_mulai`, `tanggal_selesai`, `mitra`, `deskripsi`, `jenis_kerjasama`, `unit_pengelola`, `status`, `files`, `created_at`, `updated_at`) VALUES
(1, 2018, '2018-04-19', '2024-04-09', 'Yayasan Kalam Kudus', '1. Kerjasama dalam Pengembangan Sumber Daya Manusia.\r\n2. Melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknologi.\r\n3. Sharing knowledge/sharing expert.\r\n4. Pertukaran informasi dan publikasi dibidang pengajaran, penelitian dan pengabdian kepada masyarakat.\r\n5. Penggunaan fasilitas bersama yang dimiliki PARA PIHAK.', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Yayasan Kalam Kudus055(1).pdf', '2020-08-03', '2020-08-03'),
(2, 2019, '2019-09-06', '2024-09-06', 'JNE EXPRESS', 'a. Knowledge sharing berupa seminar, kuliah umum dan workshop\r\nb. Program Campus Hiring dan JobFair', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'JNE20200114_13365223.pdf', '2020-08-03', '2020-08-03'),
(3, 2019, '2019-09-06', '2022-09-06', 'ESRI INDONESIA', '1. Memberikan teknologi update bila ada pengembangan pada ArcGIS Platform\r\n2. Memberikan hibah perangkat lunak ArcGIS Platform untuk laboratorium', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'ESRI20200707_09492313.pdf', '2020-08-13', '2020-08-13'),
(4, 2020, '2020-05-18', '2022-05-18', 'PT HUAWEI', '1. Menyediakan teknologi e-learning, solusi, dan para ahlinya untuk mendukung kebutuhan yang telah disebutkan\r\n2. Melakukan pengaturan kepada mahasiswa, yang akan mengikuti kegiatan pelatihan', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'Huawei20200604_14194554.pdf', '2020-08-13', '2020-08-13'),
(5, 2019, '2019-09-06', '2024-09-06', 'DANLIRIS', 'pelaksanaan kegiatan yang bersifat knowledge sharing berupa seminar, kuliah umum, workshop dan training', 'Nota Kesepahaman (NK)', 'Institusi', 'masih berjalan', 'Danrilis20200114_13361849.pdf', '0000-00-00', '0000-00-00'),
(6, 2019, '2019-03-13', '2022-03-13', 'PT IDSTAR CIPTA TEKNOLOGI', '1. Recuitment, bootcamp partnership program with industries in campus', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'ID Start307.pdf', '2020-08-14', '2020-08-14'),
(7, 2019, '2019-09-25', '2022-09-25', 'KALIBRR', '1. Pelaksanaan kegiatan yang bersifat knowledge sharing berupa seminar dan workshop', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'KALIBRR20191126_12495816.pdf', '2020-08-14', '2020-08-14'),
(8, 2019, '2019-11-14', '2019-12-31', 'PEMKAB TOLIKARA', 'Pertanggung jawaban dan pelaporan pada PEMKAB TOLIKARA', 'PkS', 'Prodi', 'Telah Berakhir', 'MoU dengan Tolikara20191127_09315767.pdf', '2020-08-14', '2020-08-14'),
(9, 2020, '2020-03-05', '2022-02-28', 'NARASI TV', 'program magang terhadap mahasiswa dari setiap fakultas yang ada di institusi', 'PkS', 'Institusi', 'Masih Berjalan', 'Narasi TV.pdf', '2020-08-14', '2020-08-14'),
(10, 2018, '2018-11-16', '2020-11-16', 'PT NONGSA DIGITAL PARK', 'Kerjasama dalam pengembangan Sumber Daya Manusia', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'NK Nongsa Digital Park dengan IT Del.pdf', '2020-08-14', '2020-08-14'),
(11, 2019, '2019-08-06', '2024-08-06', 'PT PESONA SCIENTIFIC', 'Melakukan kegiatan pengabdian kepada masyarakat', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Pesona Scientifik20200114_10482137.pdf', '2020-08-14', '2020-08-14'),
(12, 2018, '2018-05-26', '2019-05-26', 'SINAR MAS', '1. Memberikan informasi mengenai ketentuan masa magang/kerja praktik\r\n2. Memberikan kesempatan kepada mahasiswa semester akhir bidang Teknologi Informatika/Sistem Informasi', 'Nota Kesepahaman (NK)', 'Institusi', 'Telah Berakhir', 'Sinarmas057.pdf', '2020-08-18', '2020-08-18'),
(13, 2018, '2018-09-12', '2028-09-12', 'PT. KPH Wilayah IV BALIGE', '1. Kegiatan ekonomi berbasis mayarakat di lingkungan UPT KPH Wilayah IV Balige\r\n2. Kegiatan peningkatan potensi kawasan hutan\r\n3. Kegiatan pemberdayaan masyarakat di kawasan hutan', 'PkS', 'Institusi', 'Masih Berjalan', 'PKS dengan KPH Wilayah IV Balige (1).pdf', '2020-08-18', '2020-08-18'),
(14, 2019, '2019-10-18', '2024-10-18', 'Sekolah Tinggi Filsafat Theologi', '1. Kerjasama dalam pengembangan sUMBER Daya Manusia\r\n2. Melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknolgi\r\n3. pertukaran informasi dan publikasi dibidang pengajaran, penelitian dan pengabdian kepada masyarakat', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Nota Kesepahaman STFTJ20191122_10422899.pdf', '2020-08-18', '2020-08-18'),
(15, 2019, '2019-09-06', '2024-09-06', 'PT. INDO PUSAT BUMI', '1. Pelaksanaan kegiatan yang bersifat knowledge sharing berupa seminar, kuliah umum, dan workshop\r\n2. pelaksanaan perogram rekrutmen melalui program campus hiring dan job fair di lingkungan perguruan tinggi', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'PT Indo Pusat Bumi20200114_10431853.pdf', '2020-08-18', '2020-08-18'),
(16, 2018, '2019-10-05', '2020-10-05', 'PT. Aplikasi Nusa Lintas Arta', '1. Konsultasi penyusunan masterplan smart city\r\n2. Konsultasi change management/Pendampingan Smart City', 'PkS', 'Institusi', 'Masih Berjalan', 'Lintas Antar054.pdf', '2020-08-18', '2020-08-18'),
(18, 2018, '2018-05-02', '2023-05-02', 'Institut Teknologi Sepuluh November', 'Meningkatkan Sumber Daya Manusia dalam  bidang Pendidikan, Penelitian dan Pengabdian Kepada Masyarakat', 'Nota Kesepahaman (NK)', 'LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 'Masih Berjalan', 'ITS124.pdf', '2020-08-26', '2020-08-26'),
(19, 2018, '2018-01-18', '2023-01-18', 'Universitas Esa Unggul', '1. Kerjasama dalam bidang Pengembangan Sumber Daya Manusia\r\n2. Melakukan penelitian bersama dalam bidang ilmu pengetahun dan teknologi\r\n3. Pertukarean informasi dan publikasi di bidang pengajaran, penelitian dan pengabdian kepada masyarakat', 'Nota Kesepahaman (NK)', 'LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 'Masih Berjalan', 'Esa Unggul114.pdf', '2020-08-26', '2020-08-26'),
(20, 2018, '2018-04-02', '2021-04-02', 'Punguan Parsadaan Guru Ni Laingan Siregar Se-Indonesia', '1. Penyusunan renca kerjasama agriwisata, ekowisata, start-up\r\n2. pelaksanaan survey yang meliputi pengumpulan dan analisis data\r\n3. pendampingan dan pelatihan berkelanjutan sampai masyarakat mandiri, serta promosi terhadap Siregar Aek Na Las', 'Nota Kesepahaman (NK)', 'LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 'Masih Berjalan', '015_Punguan Parsadaan Guru Ni Laingan Siregar Se Indonesia.pdf', '2020-08-26', '2020-08-26'),
(21, 2018, '2018-04-24', '2019-04-14', 'KALIBRR', '1. Sharing knowledge/expert\r\n2. Memberikan kesempatan kerja praktek (magang) bagi mahasiswa IT Del di kantor KALIBRR sesuai dengan prosedur yang dimiliki oleh perusahaan\r\n3. Rekruitmen bagi lulusan IT Del untuk memperoleh kesempatan bekerja\r\n4. Membantu karir lulusan IT Del di perusahaan-perusahaan ternama di Indonesia', 'Nota Kesepahaman (NK)', 'Fakultas', 'Telah Berakhir', 'Kalibrr051.pdf', '2020-08-26', '2020-08-26'),
(22, 2018, '2018-07-06', '2020-12-31', 'Badan Kerjasama Perguruan Tinggi Kristen Di Indonesia (BK-PTKI)', '1. mengoptimalkan perpustakaan sebagai salah satu sumber pembelajaran bagi mahasiswa dan dosen perguruan tinggi lain\r\n2. profesionalisme pustakawan dapat ditingkatkan dan dikembangkan dalam pendidikan ilmu pengetahuan dan wawasannya\r\n3. Adanya komitmen dari masing-masing perguruan tinggi dalam memajukan perpustakaan dan pustakawannya', 'Nota Kesepahaman (NK)', 'Wakil Rektor I', 'Masih Berjalan', 'BKPTKI010.pdf', '2020-08-26', '2020-08-26'),
(23, 2018, '2018-01-10', '2021-01-10', 'Pemerintah Kabupaten Toba Samosir', '1. Mengembangkan kerjasama dalam bidang teknologi komunikasi dan informasi, pariwisata, pertanian, kesehatan, bidang manajemen rekayasa dan teknik bioproses\r\n2. Pemberdayaan masyarakat dsa, perlindungan perempuan dan anak', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', '001_MoU_Pemkab Samosir017.pdf', '2020-08-26', '2020-08-26'),
(24, 2018, '2018-11-26', '2023-11-26', 'Institut Teknologi Bandung', '1. Kerjasama dalam pengembangan sumber daya manusia\r\n2. pengawasan standar dan mutu pendidikan Institut Teknologi Del\r\n3. pengembangan kerja sama penelitian di Institut Teknologi Del', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Kesepahaman Bersama Yayasan Del-ITB Tahun 2018_2.pdf', '2020-08-26', '2020-08-26'),
(25, 2018, '2018-05-03', '2023-05-03', 'AMSTERDAM UNIVERSITY', '1. Pertukaran pegawai dari fakultas dan staff administrasi\r\n2. Pertukaran mahasiswa\r\n3. pertukaran informasi dan publikasi akademik\r\n4. pengembangan penelitian dan hasil yang diperoleh', 'Nota Kesepahaman (NK)', 'FTI (Fakultas Teknik Industri)', 'Masih Berjalan', 'Amsterdam056.pdf', '2020-08-26', '2020-08-26'),
(26, 2018, '2018-06-28', '2023-06-28', 'FOOYIN UNIVERSITY', 'Menyediakan pengembangan terpercaya dan kerjasama yang ramah berdasarkan kualitas dan mutu yang baik antara IT Del dengan Fooyin University', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Fooyin University385.pdf', '2020-08-26', '2020-08-26'),
(27, 2018, '2018-11-08', '2023-11-08', 'Daffodil Interntional University, Bangladesh', '1. Pertukaran mahasiswa\r\n2. pertukaran dosen dna peneliti\r\n3. pertukaran informasi dan publikasi akademik\r\n4. kegiatan penyelenggaraan akademik dan budaya yang telah disepakati', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Daffodil International University213.pdf', '2020-08-26', '2020-08-26'),
(28, 2018, '2018-06-28', '2023-06-28', 'Chung Hwa University of Medical Technology', 'Menyediakan pengembangan terpercaya dan kerjasama yang rama berdasarkan kualitas dan mutu yang baik antara IT Del dengan Chung Hwa University of Medical Technology', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Chung Hwa 387.pdf', '2020-08-26', '2020-08-26'),
(29, 2018, '2018-01-29', '2023-01-29', 'PT Hutahaean Group', '1. Melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknologi\r\n2. PT Hutahaean membuka kesempatan kepada mahasiswa IT Del untuk dapat melihat secara langsung proses operasional pabrik\r\n3. PT Hutahaean membuka kesempatan bagi para dosen IT Del untuk melakukan penelitian dan pengembangan dilingkungan PT Hutahaean untuk menghasilkan luaran berupa inovasi dan peningkatan ilmu pengetahuan', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'Hutahaean115.pdf', '2020-08-26', '2020-08-26'),
(30, 2018, '2018-06-28', '2023-06-28', 'National Taipei University of Nursing and Health Sciences', 'Menyediakan pengembangan terpercaya dan kerjasama yang ramah berdasarkan kualitas dan mutu yang baik antara IT Del dengan National Taipei University', 'Nota Kesepahaman (NK)', 'FB (Fakultas Bioproses)', 'Masih Berjalan', 'National Taipei 386.pdf', '2020-08-26', '2020-08-26'),
(31, 2018, '2018-09-01', '2023-09-01', 'Sekolah Tinggi Diakones HKBP Balige', '1. Kerjasama dalam pengembangan sumber daya manusia\r\n2. melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknologi\r\n3. pertukaran informasi dan publikasi si bidang pengajaran, penelitian dan pengabdian kepada masyarakat\r\n4. penggunaan fasilitas bersama yang dimiliki para pihak', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'NK ST Diakones HKBP Balige211.pdf', '2020-08-26', '2020-08-26'),
(32, 2018, '2018-09-21', '2019-09-21', 'PT Omron Electronics', '1. Bekerjasama dalam membangun tempat pelatihan bidang otomasi industri bertingkat nasional \r\n2. mendukung kegiatan seminar terkait teknologi terbaru secara umum dan tidak terbatas\r\n3. Bekerjasama dalam melaksanakan pelatihan di bidang otomasi industri dengan instruktur dari pihak terkait', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Telah Berakhir', 'Omron207.pdf', '2020-08-26', '2020-08-26'),
(33, 2018, '2018-09-21', '2023-09-21', 'PT Elektrika Multikatama', '1. Bekerjasama dalam membangun tempat pelatihan bidang otomasi industri bertingkat nasional \r\n2. mendukung kegiatan seminar terkait teknologi terbaru secara umum dan tidak terbatas\r\n3. Bekerjasama dalam melaksanakan pelatihan di bidang otomasi industri dengan instruktur dari pihak terkait', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Telah Berakhir', 'Omron207.pdf', '2020-08-26', '2020-08-26'),
(34, 2018, '2018-01-10', '2021-01-10', 'Pemerintah Kabupaten Humbang Hasundutan', 'Terwujudnya kerjasama yang baik dalam bidang pendidikan, penelitian dan pengabdian kepada masyarakat, bidang lingkungan hidup, bidang manajemen rekayasa dan teknik bioproses', 'Nota Kesepahaman (NK)', 'FB (Fakultas Bioproses)', 'Masih Berjalan', 'Pemkab Humbang Hasundutan116.pdf', '2020-08-26', '2020-08-26'),
(35, 2018, '2018-01-10', '2021-01-10', 'Pemerintah Kabupaten Humbang Hasundutan', 'Terwujudnya kerjasama yang baik dalam bidang pendidikan, penelitian dan pengabdian kepada masyarakat, bidang lingkungan hidup, bidang manajemen rekayasa dan teknik bioproses', 'Nota Kesepahaman (NK)', 'FTI (Fakultas Teknik Industri)', 'Masih Berjalan', 'Pemkab Humbang Hasundutan116.pdf', '2020-08-26', '2020-08-26'),
(36, 2018, '2018-11-08', '2023-11-08', 'President Ramon Mangsaysay State University, Philippines', '1. Pertukaran mahasiswa\r\n2. pertukaran dosen dan peneliti\r\n3. pertukaran informasi dan publikasi akademik\r\n4. kegiatan penyelenggara konferensi ilmiah internasional', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'President Ramon Magsaysay State University216.pdf', '2020-08-26', '2020-08-26'),
(37, 2018, '2018-06-04', '2019-06-04', 'Pemerintah Kabupaten Toba Samosir', '1. Pembuatan aplikasi sistem pelaporan pelaksanaan penyuluhan dan program keluarga berencana Kabupaten Toba Samosir\r\n2. Pelatihan pengoperasian aplikasi sistem pelaporan pelaksanaan penyuluhan dan lingkungan\r\n3. Pendampingan ditujukan untuk perbaikan pada aplikasi selama masa yang telah di sepakati', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Telah Berakhir', 'PKS BKKBN.pdf', '2020-08-26', '2020-08-26'),
(38, 2018, '2018-11-08', '2023-11-08', 'Politeknik Negeri Ambon', '1. Pertukaran mahasiswa\r\n2. Pertukaran dosen dan peneliti\r\n3. Pertukaran informasi dan publikasi akdemik\r\n4. Kegiatan penyelenggaraan konferensi ilmiah internasional', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Politeknik Negeri Ambon217.pdf', '2020-08-26', '2020-08-26'),
(39, 2018, '2018-09-08', '2023-09-08', 'PT INTI GANDA PERDANA', '1. Sharing knowledge/expert\r\n2. memberikan kesempatan kerja praktek (magang) bagi mahasiswa IT Del di perusahaan PT Inti Ganda Perdana\r\n3. Rekruitmen bagi lulusan IT Del di perusahaan Inti Ganda Perdana terkait teknologi, sistem, konten dan layanan', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'PT Inti Ganda Perdana.pdf', '2020-08-26', '2020-08-26'),
(40, 2018, '2018-07-27', '2023-07-27', 'Universitas Budi Luhur', '1. Kerjasama dalam pengembangan Sumber Daya Manusia\r\n2. Melakukan penelitian bersama dlaam bidang ilmu pengetahuan dan teknologi informasi\r\n3. Sharing knowledge/expert', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'UBL009.pdf', '2020-08-26', '2020-08-26'),
(41, 2018, '2018-04-19', '2023-04-19', 'SMA/SMK Kristen Kalam Kudus', '1. Peningkatan kompetensi SUmber Daya Manusia yang terdapat dalam bidang Teknologi Informasi\r\n2. Bidang pendidikan, penelitian dan pengabdian kepada masyarakat\r\n3. Institut Teknologi Del menyelenggarakan Ujian Saringan Masuk (USM) terhadap SMA/SMK Kristen Kalam Kudus Medan dengan beberapa ketentuan', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'SMA Kalam Kudus_Final.pdf', '2020-08-26', '2020-08-26'),
(42, 2018, '2018-11-08', '2023-11-08', 'Vellore Institute Of Technology (VIT), India', '1. Pertukaran Mahasiswa\r\n2. Pertukaran dosen dan peneliti\r\n3. pertukaran informasi dan publikasi akademik\r\n4. Kegiatan penyelenggaraan konferensi ilmiah internasional', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Vellore Institute Of Technology215.pdf', '2020-08-26', '2020-08-26'),
(43, 2018, '2018-11-08', '2020-11-08', 'University Of Cabuyao, Philippines', '1. Pertukaran mahasiswa\r\n2. Pertukaran dosen dan peneliti\r\n3. Pertukaran Informasi dan publikasi akademik\r\n4. Kgiatan Penyelenggaraan konferensi ilmiah internasional', 'Nota Kesepahaman (NK)', 'Fakultas', 'Telah Berakhir', 'University Of Cabuyao212.pdf', '2020-08-26', '2020-08-26'),
(44, 2019, '2019-04-02', '2024-04-02', 'Desa Aek Balon Julu, Balige', 'Menyediakan kerjasama dalam bidang teknolohi komunikasi dan informasi, bidang pendidikan, penelitian dan pengabdian masyarakat, bidang lingkungan hidup, bidang manajemen rekayasa dan teknik bioproses', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'Aek Bolon Julu20200114_13401129.pdf', '2020-08-26', '2020-08-26'),
(45, 2019, '2019-12-10', '2024-12-10', 'PT Bhanda Ghara Reksa (PERSERO)', '1. Pelaksanaan kegiatan yang bersifat knowledge sharing berupa seminar, kuliah umum, workshop atau training\r\n2. pelaksanaan program rekruitmen melalui program campus hiring dan job fair di lingkungan perguruan tinggi', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'BGR20200707_09522639.pdf', '2020-08-26', '2020-08-26'),
(46, 2019, '2019-07-09', '2024-07-09', 'University Of Huddersfield, UK', '1. Pertukaran mahasiswa\r\n2. Pertukaran dosen dan peneliti\r\n3. Pertukaran Informasi dan publikasi akademik\r\n4. Kgiatan Penyelenggaraan konferensi ilmiah internasional', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', '015_University of Huddersfield.pdf', '2020-08-26', '2020-08-26'),
(47, 2019, '2019-08-23', '2024-08-23', 'PT Asuransi Jiwa Generali Indonesia', '1. Pelaksanaan kegiatan sharing knowledge/expert\r\n2. Memberikan kesempatan kepada mahasiswa IT Del untuk melakukan program magang (kerja praktek) di lapangan\r\n3. Kerjasama pengembagan bisnis untuk pengembangan teknologi informasi dan komunikasi', 'PkS', 'Fakultas', 'Masih Berjalan', 'Generali20200114_10462865.pdf', '2020-08-26', '2020-08-26'),
(48, 2019, '2019-06-17', '2024-06-17', 'PT Toba Pulp Lestari Tbk', '1. Pemberian beasiswa studi lanjutan jenjang S2, S3 kepada staf pengajar\r\n2. dukungan dana penelitian bagi staf pengajar\r\n3. dukungan dana penyajian makalah oleh staf pengajar dalam konferensi internasional\r\n4. pemberian beasiswa untuk jenjang studi D3, D4 dan S1 iaktan dinas kepada mahasiswa', 'PkS', 'Wakil Rektor I', 'Masih Berjalan', 'Inalum20200630_09522084.pdf', '2020-08-26', '2020-08-26'),
(49, 2019, '2019-06-17', '2024-06-17', 'Yayasan Bakti Tanoto', '1. Pemberian beasiswa studi lanjutan S2, S3 kepada staf pengajar\r\n2. dukungan dana penelitian bagi staf pengajar\r\n3. dukungan dana penyajian makalah oleh staf pengajar\r\n4. pemberian beasiswa untuk jenjang D3, D4, S1 ikatan dinas kepada mahasiswa', 'PkS', 'Wakil Rektor I', 'Masih Berjalan', 'Inalum20200630_09522084.pdf', '2020-08-26', '2020-08-26'),
(50, 2019, '2019-04-29', '2021-04-29', 'PT Citra Global Dinamika', '1. Pertukaran mahasiswa\r\n2. Pertukaran dosen dan peneliti\r\n3. Pertukaran Informasi dan publikasi akademik\r\n4. Kgiatan Penyelenggaraan konferensi ilmiah internasional', 'PkS', 'Fakultas', 'Masih Berjalan', 'PT Citra Global Dinamika.pdf', '2020-08-26', '2020-08-26'),
(51, 2019, '2019-09-30', '2024-09-30', 'PT Mayora Indah group', '1. Pelaksanaan kegiatan yang bersifat knowledge sharing berupa workshop, kuliah umum atau training\r\n.2 Pelaksanaan program rekruitmen melalui program campus hiring dan job fair di lingkungan perguruan tinggi yang dapat memberikan kesempatan bekerja bagi para mahasiswa\r\n3. Kerjasama pengembangan bisnis untuk pengembangan teknologi informasi dan komunikasi', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'Mayora20200114_10282406.pdf', '2020-08-26', '2020-08-26'),
(52, 2019, '2019-03-19', '2024-03-19', 'Uppsala University, Sweden', '1. Menyediakan pengembangan kerjasama yang ramah berdasarkan kualitas dan mutu yang baik antara universitas\r\n2. Bertanggung jawab dalam menetapkan kegiatan prgram kerja serta jadwal pada persetujuan pembuatan aplikasi\r\n3. Mempersiapkan staf, fasilitas, alat dan bahan untuk keperluan pada saat melakukan kegiatan pada saat program kerja dilakukan', 'PkS', 'Institusi', 'Masih Berjalan', 'MoU dengan UPSALA20191128_08561569.pdf', '2020-08-26', '2020-08-26'),
(53, 2019, '2019-11-29', '2024-11-29', 'Institut Agama Kristen Negeri Tarutung', '1. Kerjasama dalam pengembangan sumber daya manusia\r\n2. Melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknologi\r\n3. Pertukaran Informasi dan publikasi akademik\r\n4. Penggunaan fasilitas bersama yang dimiliki oleh kedua pihak', 'Nota Kesepahaman (NK)', 'LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 'Masih Berjalan', 'MoU IAKN20200709_10442149.pdf', '2020-08-26', '2020-08-26'),
(54, 2019, '2019-12-09', '2021-12-09', 'KOMPAK', '1. Pelaksanaan kegiatan yang bersifat knowledge sharing berupa seminar, kuliah umum dan workshop atau training\r\n2. Kerjasama pengembangan bisnis yang bertujuan untuk pengembangan teknologi informasi dan komunikasi\r\n3. penyusuna dan pelaksanaan program kegiatan lainnya', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'MoU Kompak20200210_08121878.pdf', '2020-08-26', '2020-08-26'),
(55, 2019, '2019-07-11', '2022-07-11', 'PT Solusi Transportasi Indonesia (GRAB)', '1. Saling berbagi pengetahuan dan kepakaran dalam forum diskusi yang akan dituangkan dalam perjanjian kerjasama\r\n2. penyediaan program kerja praktek (magang) yang dapat diikuti oleh mahasiswa IT Del\r\n3. penyediaan program rekruitmen bagi lulusan IT Del', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'NK IT Del II Grab.pdf', '2020-08-26', '2020-08-26'),
(56, 2019, '2019-09-07', '2024-09-07', 'PT Aimtopindo Nuansa Kimia', '1. Pelaksanaan kegiatan berupa knowledge sharing seperti seminar, kuliah umum, dan workshop atau training\r\n2. memberikan kesempatan kepada perguruan tinggi untuk dapat mengirimkan mahasiswa yang ingin melakukan program magang\r\n3. pelaksanaan program rekruitmen melalui program campus hiring dan job fair', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'AIMTOP Indo Nuansa Kimia20200224_10205961.pdf', '2020-08-26', '2020-08-26'),
(57, 2019, '2019-09-12', '2024-09-12', 'PT Triple One Global (Monster Group)', '1. Pelaksanaan kegiatan yang bersifkat knowledge berupa seminar, kuliah umum dan workshop atau training\r\n2. Memberikan kesempatan kepada perguruan tinggi untuk mengirimkan mahasiswa yang ingin melakukan program magang\r\n3. Pelaksanaan progran rekruitmen bagi para alumni atau lulusan IT Del serta mahasiswa melalui program campus hiring atau job fair', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'NK Moster.pdf', '2020-08-26', '2020-08-26'),
(58, 2019, '2019-01-24', '2020-01-24', 'Pemerintah Kabupaten Nias Selatan', 'Melakukan kerjasama dalam bidang Teknologi komunikasi dan informasi, bidang pendidikan, penelitian dan pengabdian kepada masyarakat, bidang kesehatan, bidang pariwisata, bidang pertanian, bidang manajemen rekayasa dan teknik bioproses', 'Nota Kesepahaman (NK)', 'Fakultas', 'Telah Berakhir', 'NK Nias Selatan291.pdf', '2020-08-26', '2020-08-26'),
(59, 2019, '2019-02-07', '2024-02-07', 'Pemerintah Kabupaten Tapanuli Utara', 'Menyediakan kerjasama dalam bidang teknologi Bioproses dan Manajemen Rekayasa', 'Nota Kesepahaman (NK)', 'FTI (Fakultas Teknik Industri)', 'Masih Berjalan', 'NK TAPUT255.pdf', '2020-08-26', '2020-08-26'),
(60, 2019, '2019-07-02', '2024-07-02', 'Pemerintah Kabupaten Tapanuli Utara', 'Menyediakan kerjasama dalam bidang teknologi Bioproses dan Manajemen Rekayasa', 'Nota Kesepahaman (NK)', 'FB (Fakultas Bioproses)', 'Masih Berjalan', 'NK TAPUT255.pdf', '2020-08-26', '2020-08-26'),
(61, 2019, '2019-06-26', '2020-06-26', 'Pemerintah Kabupaten Toba Samosir', 'Menyediakan kerjasama dalam bidang teknologi informasi, penelitian dan pengabdian kepada masyarakat, bidang pariwisata, serta perdagangan dan koperasi usaha kecil menengah', 'Nota Kesepahaman (NK)', 'Fakultas', 'Telah Berakhir', 'NK Toba samosir 2019.pdf', '2020-08-26', '2020-08-26'),
(62, 2019, '2019-04-11', '2022-04-11', 'Northeastern University, BOSTON USA', 'Membuka lowongan pekerjaan atau program kerja bagi mahasiswa IT Del dengan memiliki beberapa ketentuan', 'Nota Kesepahaman (NK)', 'Fakultas', 'Masih Berjalan', 'northeastern university.pdf', '2020-08-26', '2020-08-26'),
(63, 2019, '2019-07-09', '2024-07-09', 'Mauritz Panggabean', 'Pemberian bantuan dana riset oleh pihak pertama kepada mahasiswa/i Fakultas Teknik Informatika dan Program Studi Sarjana Teknik Elektro', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'Nota kesepahaman Pendanaan Riset_Mauritz Panggabean.pdf', '2020-08-26', '2020-08-26'),
(64, 2019, '2019-05-15', '2024-05-15', 'SMK Negeri 1 LumbanJulu', '1. Melakukan kerjasama dalam bidang pendidikan, pengajran dan pengabdian kepada masyarakat\r\n2. pengembangan kurikulum\r\n3. Kegiatan praktek kerja industri\r\n4. Kegiatan uji kompetensi keahlian', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Nota kesepahaman SMK 1 lumban Julu dengan IT Del.pdf', '2020-08-26', '2020-08-26'),
(65, 2019, '2019-08-28', '2024-08-28', 'SMK Negeri 1 Laguboti', '1. Menyediakan pendidikan, pengajran, penelitian dan pengabdian kepada masyarakat\r\n2. Menyediakan fasilitas bagi siswa/i untuk melakukan kerja praktek/magang\r\n3. pengembangan kurikulum\r\n4. kegiatan kompetensi keahlian', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Nota Kesepahaman SMK N 1 Laguboti.pdf', '2020-08-26', '2020-08-26'),
(66, 2019, '2019-07-11', '2024-07-11', 'Universitas HKBP Nomensen Medan', '1. Kerjasama dalam pengembangan sumber daya manusia\r\n2. melakukan penelitian bersama dalam bidang ilmu pengetahuan dan teknologi\r\n3. sharing knowledge/ sharing expert\r\n4. pertukaran informasi dan publikasi di bidang pengajaran, penelitian dan pengabdian masyarakat\r\n5. Penggunaan fasilitas bersama oleh kedua pihak', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', 'Nota kesepahaman UHN Medan dengan IT Del.pdf', '2020-08-26', '2020-08-26'),
(67, 2019, '2019-02-07', '2024-02-07', 'Perusahaan Daerah Pertanian Kabupatan Tapanuli Utara', 'Pelaksanaan kerja sama kajian, riset pengembangan serta bisnis yang meliputi dan tidak terbatas dalam pembangunan dan pemanfaatan Alat Pengering (Swallow Geothermal Dryer)', 'PkS', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'perusda taput20200114_13420276.pdf', '2020-08-26', '2020-08-26'),
(68, 2020, '2020-06-30', '2022-06-30', 'PT HUAWEI', '1. Menyediakan platform e-learning, solusi dan para ahlinya untuk mendukung kebutuhan yang telah disebutkan pada pasal 2\r\n2. melakukan pengaturan kepada mahasiswa, yang akan mengikuti pelatihan TIK dan kompetisi TIK\r\n3. Bekerjasama dalam menyusun rencana kerja dan target yang akan dicapai dapal pelaksanaan pelatihan TIK\r\n4. Menginvestasikan sumber daya berdasarkan persyaratan untuk pengembangan bakat AI', 'PkS', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'MoA Huawei dengan FITE.pdf', '2020-08-26', '2020-08-26'),
(69, 2020, '2020-03-12', '2025-03-12', 'Badan Siber dan Sandi Negara', '1. Penyelenggaraan pendidikan, penelitian dan pengabdian kepada masyarakat\r\n2. Penyelenggaraan kolaborasi riset dan pengembangan sumber daya\r\n3. Penyelenggaraan kegiatan ilmiah, seminar dan lokakarya', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'BSSN.pdf', '2020-08-26', '2020-08-26'),
(70, 2020, '2020-08-05', '2025-08-05', 'Universitas Simalungun (USI)', '1. Sharing informasi, knowledge dan expert dalam bidang pendidikan, penelitian dan pengabdian masyarakat\r\n2. peserta atau narasumber pertemuan ilmiah, seminar dan publikasi yang diselenggarakan oleh para pihakk\r\n3. peningkatan kualitas sumber daya manusia', 'Nota Kesepahaman (NK)', 'Institusi', 'Masih Berjalan', '013_MoU USI.pdf', '2020-08-26', '2020-08-26'),
(71, 2020, '2019-01-20', '2025-01-20', 'Badan Perlindungan Konsumen Nasional RI (BPKN)', '1. Pelaksanaan kegiatan yang bersifat sharing knowledge berupa seminar, kuliah umum dan workshop atau training\r\n2. Melakukan penelitian bersama dalambidang ilmu pengetahuan dan teknologi, khusus di bidang konsumen\r\n3. Pembentukan Lembaga Perlindungan Konsumen Swadaya masyarakat (LPKSM) dari perguruan tinggi', 'Nota Kesepahaman (NK)', 'FITE (Fakultas Informatika dan Teknik Elektro)', 'Masih Berjalan', 'Badan Perlindungan Konsumen Negara20200225_08333941.pdf', '2020-08-26', '2020-08-26'),
(72, 2020, '2020-01-13', '2021-01-13', 'Pemerintah Kabupaten Batu Bara', 'Menjalankan Tridharma perguruan tinggi dalam bidang penelitian dan pengabdian masyarakat', 'Nota Kesepahaman (NK)', 'LPPM (Lembaga Penelitian dan Pengabdian Masyarakat)', 'Masih Berjalan', 'MoU Batu bara.pdf', '2020-08-26', '2020-08-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkhm_penelaah_naskah`
--

CREATE TABLE `lkhm_penelaah_naskah` (
  `penelaah_naskah_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lkhm_penelaah_naskah`
--

INSERT INTO `lkhm_penelaah_naskah` (`penelaah_naskah_id`, `dosen_id`, `id`, `created_at`, `updated_at`) VALUES
(1, 14, 37, '2020-08-28 01:36:32', '2020-08-28 01:36:32'),
(2, 11, 43, '2020-08-28 01:38:42', '2020-08-28 01:38:42'),
(3, 17, 43, '2020-08-28 01:38:42', '2020-08-28 01:38:42'),
(4, 15, 44, '2020-08-28 01:41:20', '2020-08-28 01:41:20'),
(5, 12, 44, '2020-08-28 01:41:20', '2020-08-28 01:41:20'),
(6, 15, 45, '2020-08-28 03:05:13', '2020-08-28 03:05:13'),
(7, 14, 45, '2020-08-28 03:05:13', '2020-08-28 03:05:13'),
(8, 8, 46, '2020-08-28 03:22:45', '2020-08-28 03:22:45'),
(9, 18, 46, '2020-08-28 03:22:46', '2020-08-28 03:22:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_14_083326_create_naskah_table', 1),
(4, '2020_07_16_102015_create_roles_table', 1),
(5, '2020_07_16_102108_create_permissions_table', 1),
(6, '2020_07_16_102114_create_permission_role_table', 1),
(7, '2020_07_22_053225_create_mitra_table', 1),
(8, '2020_07_22_084109_create_table_naskahfinal', 1),
(9, '2020_07_23_071616_create_table_file', 1),
(10, '2020_07_24_063034_create_table_filenafil', 1),
(11, '2020_07_30_101143_create_products_table', 1),
(12, '2020_08_03_075548_create_table_infokerjasama', 1),
(13, '2020_08_24_061220_create_notifications_table', 2),
(14, '2019_08_19_000000_create_failed_jobs_table', 3),
(15, '2020_08_24_143404_add_read_to_naskah_table', 3),
(16, '2020_08_25_030335_add_read_to_file_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_mitra` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id`, `nama_mitra`, `keterangan`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'NARASI TV', 'Masih Berjalan', 'narasi.jpg', '2020-08-10 20:07:28', '2020-08-10 20:07:28'),
(2, 'JNE Express', 'Masih Berjalan', 'Logo JNE.png', '2020-08-10 20:12:25', '2020-08-10 20:12:25'),
(3, 'Universitas Sumatera Utara', 'Masih Berjalan', 'logoUSU.jpg', '2020-08-10 20:13:15', '2020-08-10 20:13:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_kerjasama`
--

CREATE TABLE `mitra_kerjasama` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(250) NOT NULL,
  `tahun` year(4) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra_kerjasama`
--

INSERT INTO `mitra_kerjasama` (`id`, `nama_mitra`, `tahun`, `created_at`, `update_at`) VALUES
(1, 'NARASI TV', 2020, '2020-08-01', '2020-08-03'),
(2, 'ESRI', 2020, '2020-08-03', '2020-08-05'),
(3, 'Kalibrr', 2019, '2020-08-03', '2020-08-05'),
(4, 'Yayasan Kalam Kudus', 2018, '2020-08-05', '2020-08-07'),
(5, 'DANRILIS', 2019, '2019-09-06', '2024-09-06'),
(6, 'Universitas Pelita Harapan', 2017, '2020-01-24', '2020-08-24'),
(7, 'PEMKAB TOBA', 2019, '2020-02-07', '2020-08-31'),
(8, 'PT.Citra Global Dinamika', 2019, '2020-04-01', '2020-08-30'),
(9, 'PT.Hutahaean Group', 2018, '2020-01-01', '2020-08-31'),
(10, 'PT.HUAWEI Tech Invesment', 2020, '2020-02-02', '2020-10-01'),
(11, 'PT IDSTAR CIPTA TEKNOLOGI', 2019, '2019-03-13', '2022-03-13'),
(12, 'JNE EXPRESS', 2018, '2019-09-06', '2019-09-06'),
(13, 'PT APLIKASI NUSA LINTAS ARTA', 2018, '2018-10-05', '2020-10-05'),
(14, 'PT PESONA SCIENTIFIC', 2019, '2019-08-06', '2024-08-06'),
(15, 'NONGSA DIGITAL PARK', 2018, '2018-11-16', '2020-11-06'),
(16, 'PT KPH Wilayah IV Balige', 2018, '2018-09-12', '2028-09-12'),
(17, 'SINAR MAS', 2018, '2018-05-26', '2019-05-26'),
(18, 'Sekolah Tinggi Filsafat Theologi', 2019, '2019-10-18', '2024-10-18'),
(19, 'PT INDO PUSAT BUMI', 2019, '2019-09-06', '2024-09-06'),
(20, 'PEMKAB TOLIKARA', 2019, '2019-11-14', '2019-12-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `naskah`
--

CREATE TABLE `naskah` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor_naskah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_partner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `jenis_lembaga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dokumen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_naskah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unggah_naskah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_waktu_telaah` datetime NOT NULL,
  `komentar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `naskah`
--

INSERT INTO `naskah` (`id`, `nomor_naskah`, `nama_partner`, `negara`, `status`, `jenis_lembaga`, `jenis_dokumen`, `sumber_naskah`, `unggah_naskah`, `masa_waktu_telaah`, `komentar`, `nama_I`, `alamat_I`, `website`, `email_I`, `telp`, `fax`, `nama_P`, `jabatan_P`, `email_P`, `hp_P`, `nama_K`, `jabatan_K`, `email_K`, `hp_K`, `created_at`, `updated_at`, `read`) VALUES
(32, '017/ITDel/WR3/NK/IV/2018', 'Kristopel Hutauruk', 'indonesia', 1, 'Institusi Pendidikan Dalam Negri', 'Nota Kesepahaman (NK)', 'Partner', 'JNE20200114_13365223 (2).pdf', '2020-08-28 00:00:00', 'Dear Ibu Eka\r\nBerikut saya lampirkan naskah yang akan diperbaiki\r\ndimohonkan kerjasamanya, terimakasih', 'Universitas Esa Unggul', 'INTILAND TOWER LT. 20  Jl. Jend. Sudirman Kav. 32, Jakarta Pusat, 10220', 'www.esaunggul.ac.id', 'esaunggul@gmail.com', '0892436338475', '0627468', 'Z. Rachmat Sugito', 'Rektor', 'rachmat@gmail.com', '0895612220038', 'Laban Abraham Laisila', 'Manajer Pemberitaan', 'laban@gmail.com', '08213076734', '2020-08-26 20:45:41', '2020-08-27 19:37:28', 1),
(33, '046/ITDel/Rek/NK/IX/2019', 'Jaya Simatupang', 'indonesia', 1, 'Institusi Pemerintahan Luar Negri', 'Nota Kesepahaman (NK)', 'IT DEL', 'amsal_dokumen.docx', '2020-08-30 00:00:00', 'Dear Bapak Arnaldo,\r\nBerikut saya lampirkan naskah yang akan diperbaiki.\r\nTerima Kasih', 'Universitas Sumatera Utara', 'Jl. Dr. T. Mansyur No.9, Medan', 'usu.ac.id', 'usu@gmail.com', '021-57939176', '11510', 'Dr. Ir. Arief Kusuma, A.P., MBA, IPU', 'Pimpinan Redaksi/Penangung Jawab', 'ariefkusuma@gmail.com', '0895612220038', 'Prof. Drs. Mahyuddin K. M. Nasution, M.I.T., Ph.D.', 'WR III Bidang Penelitian, Pengabdian kepada Masyarakat dan Kerjasama', 'jaya@gmail.com', '08213076734', '2020-08-26 21:16:58', '2020-08-26 21:19:49', 1),
(46, '1234567', 'Universitas Esa Unggul', 'indonesia', 0, 'Dunia Usaha Luar Negri', 'Nota Kesepahaman (NK)', 'IT DEL', 'amsal_dokumen.docx', '2020-08-29 00:00:00', 'Mohon Dikerjakan', 'Universitas Sumatera Utara', 'Jl Jamin Ginting No 60 Medan', 'usu.ac.id', 'usu@gmail.com', '(021)5674435', '021-57930649', 'Dr. Ir. Arief Kusuma, A.P., MBA, IPU', 'Pimpinan Redaksi/Penangung Jawab', 'amel@gmail.com', '0895612220038', 'Jaya Simatupang', 'Kepala Bagian', 'jaya@gmail.com', '0282989', '2020-08-28 03:22:45', '2020-08-28 03:23:20', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `naskahfinal`
--

CREATE TABLE `naskahfinal` (
  `id` int(10) UNSIGNED NOT NULL,
  `naskah_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `naskahfinal`
--

INSERT INTO `naskahfinal` (`id`, `naskah_id`, `file`, `bahasa`, `created_at`, `updated_at`) VALUES
(9, 32, '11317046_DIII Teknologi Informasi (1).pdf', 'Indonesia', '2020-08-26 21:01:16', '2020-08-26 21:01:16'),
(10, 33, 'amsal_dokumen.docx', 'Indonesia', '2020-08-26 21:24:38', '2020-08-26 21:24:38'),
(11, 46, 'amsal_dokumen (1).docx', 'Indonesia', '2020-08-28 03:28:02', '2020-08-28 03:28:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('3568ea08-5987-42bd-9493-e367276bc578', 'App\\Notifications\\TaskComplete', 'App\\User', 1, '{\"data\":\"This is our example notification tutorial\"}', NULL, '2020-08-23 23:43:20', '2020-08-23 23:43:20'),
('53e90c80-c2ae-49e4-b4d8-92d1ff165ea0', 'App\\Notifications\\TaskComplete', 'App\\User', 1, '{\"data\":\"This is our example notification tutorial\"}', NULL, '2020-08-23 23:43:45', '2020-08-23 23:43:45'),
('b3cb3168-7887-40ea-8cfa-55840fa5e2e8', 'App\\Notifications\\TaskComplete', 'App\\User', 1, '{\"data\":\"This is our example notification tutorial\"}', NULL, '2020-08-23 23:42:34', '2020-08-23 23:42:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`name`, `id`, `created_at`, `updated_at`) VALUES
('view data', 1, '2020-08-03 02:37:25', '2020-08-03 02:37:25'),
('create data', 2, '2020-08-03 02:37:25', '2020-08-03 02:37:25'),
('edit data', 3, '2020-08-03 02:37:25', '2020-08-03 02:37:25'),
('update data', 4, '2020-08-03 02:37:25', '2020-08-03 02:37:25'),
('delete data', 5, '2020-08-03 02:37:25', '2020-08-03 02:37:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`, `id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(1, 2, 2, NULL, NULL),
(1, 3, 3, NULL, NULL),
(1, 4, 4, NULL, NULL),
(1, 5, 5, NULL, NULL),
(2, 1, 6, NULL, NULL),
(2, 3, 7, NULL, NULL),
(2, 4, 8, NULL, NULL),
(3, 1, 9, NULL, NULL),
(3, 3, 10, NULL, NULL),
(3, 4, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`name`, `id`, `created_at`, `updated_at`) VALUES
('admin', 1, '2020-08-03 02:37:23', '2020-08-03 02:37:23'),
('penelaah', 2, '2020-08-03 02:37:24', '2020-08-03 02:37:24'),
('UPTBahasa', 3, '2020-08-03 02:37:24', '2020-08-03 02:37:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `tahun` year(4) NOT NULL,
  `nama_unit` varchar(225) NOT NULL,
  `nama_mitra` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`id`, `tahun`, `nama_unit`, `nama_mitra`) VALUES
(1, 2020, 'Fakultas', 'NARASI TV'),
(2, 2019, 'Prodi', 'Kalibrr'),
(3, 2019, 'Institusi', 'JNEExpress'),
(4, 2018, 'Institusi', 'Yayasan Kalam Kudus'),
(5, 2017, 'Institusi', 'Universitas Pelita Harapan'),
(6, 2017, 'Fakultas', 'Universitas Sumatera Utara'),
(7, 2018, 'Institusi', 'Sinar Mas'),
(8, 2019, 'Institusi', 'Esri Indonesia'),
(9, 2020, 'Institusi', 'PT. HUAWEI'),
(10, 2019, 'Institusi', 'DANLIRIS'),
(11, 2019, 'Institusi', 'PEMKAB TOLIKARA'),
(12, 2018, 'Institusi', 'PT KPH Wilayah IV Balige'),
(13, 2019, 'Institusi', 'PT. PESONA SCIENTIFIC'),
(14, 2019, 'Institusi', 'Sekolah Tinggi Filsafat Theologi'),
(15, 2019, 'Institusi', 'PT. INDO PUSAT BUMI'),
(16, 2018, 'Institusi', 'PT. Nongsa Digital Park');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Humas', 'humas@gmail.com', '$2y$10$i8HN6x7qiEDIpqO4f6KjgetRYQ/yOx5/IsQtHXMIvedXBYJpo.oKa', 1, 'x2sgWJluMsbCCm92HJbpZGC8n7Y3yPqbRTgGXYEzixDAYnYa6zycBkI0Yvmk', '2020-08-03 02:37:24', '2020-08-03 02:37:24'),
(2, 'Penelaah', 'penelaah@gmail.com', '$2y$10$zlr6EI6UypgEIL/1XoXTVeMk3UVjQqagxs4wU5qDcyDjXzTApkAee', 2, 'Yw40wsnIyp2eIgtY7N4oeUaIhy3NkR5ZWdHheJppJLkmByuw36USjiOwRwXX', '2020-08-03 02:37:24', '2020-08-03 02:37:24'),
(3, 'Amsal', 'amsalh@gmail.com', '$2y$10$MVTPqs/Yk7yy2iP7mbJ9qex/qSCmtSTw3Y0VcNkbKimXXNKsRF0h2', 2, 'vXO5BwNxSnwzfDCnRaBqh0X4wxrs01zBKHJEFKTcITkZQM2xviLgJOJeWGx0', '2020-08-03 02:37:24', '2020-08-03 02:37:24'),
(4, 'Amel', 'amel@gmail.com', '$2y$10$EfBdeJLoAQgxQyeDuB1HSeoSDDQA2fDpd8jToIo7a3qtYZi3xKCGO', 2, NULL, '2020-08-03 02:37:24', '2020-08-03 02:37:24'),
(5, 'Melisa', 'melisa@gmail.com', '$2y$10$/oreP83iEi/wBEdicynM6ej3hC4V8Sm9ATpH.1faCSuf.jWeIpEBm', 2, NULL, '2020-08-03 02:37:25', '2020-08-03 02:37:25'),
(6, 'UPTBahasa', 'uptbahasa@gmail.com', '$2y$10$SxquKI1SJE.nIZBDhT7dF.eD36a1pNw7mIyqurTB8LBxjn22GRaUS', 3, 'ydshTkk6G3fkZDC6qR3duKDw0YkbDyu5gRfl38ASVWN16XRpPQTmSzmahVJC', '2020-08-03 02:37:25', '2020-08-03 02:37:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filenafil`
--
ALTER TABLE `filenafil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infokerjasama`
--
ALTER TABLE `infokerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lkhm_penelaah_naskah`
--
ALTER TABLE `lkhm_penelaah_naskah`
  ADD PRIMARY KEY (`penelaah_naskah_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_kerjasama`
--
ALTER TABLE `mitra_kerjasama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naskah`
--
ALTER TABLE `naskah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `naskahfinal`
--
ALTER TABLE `naskahfinal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `filenafil`
--
ALTER TABLE `filenafil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lkhm_penelaah_naskah`
--
ALTER TABLE `lkhm_penelaah_naskah`
  MODIFY `penelaah_naskah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `naskah`
--
ALTER TABLE `naskah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `naskahfinal`
--
ALTER TABLE `naskahfinal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
