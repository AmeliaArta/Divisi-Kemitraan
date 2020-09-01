-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Agu 2020 pada 05.27
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
-- Struktur dari tabel `naskahfinal`
--

CREATE TABLE `naskahfinal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_I` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_P` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_K` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bahasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `naskahfinal`
--

INSERT INTO `naskahfinal` (`id`, `nama_I`, `alamat_I`, `website`, `email_I`, `telp`, `fax`, `logo`, `nama_P`, `jabatan_P`, `email_P`, `hp_P`, `nama_K`, `jabatan_K`, `email_K`, `hp_K`, `file`, `bahasa`, `created_at`, `updated_at`) VALUES
(4, 'Universitas Sumatera Utara', 'Jl. Dr. T. Mansyur No.9, Medan', 'www.usu.ac.id', 'usu@gmail.com', '(061) 8214033', '021-768534', 'C:\\xampp\\tmp\\phpAF0C.tmp', 'Prof. Dr. Runtung, S.H., M.Hum.', 'Rektor', 'runtung@gmail.com', '0895612220038', 'Prof. Drs. Mahyuddin K. M. Nasution, M.I.T., Ph.D.', 'WR III Bidang Penelitian, Pengabdian kepada Masyarakat dan Kerjasama', 'mahyuddin@gmail.com', '08213076734', 'Yayasan Kalam Kudus055(1).pdf', 'Indonesia', '2020-08-10 21:08:09', '2020-08-10 21:08:09'),
(6, 'NARASI TV', 'Jl Jamin Ginting No 60 Medan', 'Narasi.tv', 'redaksi@narasi.tv', '(061) 8214033', '11510', 'C:\\xampp\\tmp\\php3324.tmp', 'Z. Rachmat Sugito', 'Pimpinan Redaksi/Penangung Jawab', 'runtung@gmail.com', '0895612220038', 'Laban Abraham Laisila', 'WR III Bidang Penelitian, Pengabdian kepada Masyarakat dan Kerjasama', 'laban@gmail.com', '08213076734', 'JNE20200114_13365223 (1).pdf', 'Indonesia', '2020-08-13 20:37:06', '2020-08-13 20:37:06'),
(7, 'KALIBRR', 'Jln. Jenderal Sudirman No.36B', 'www.kalibrr.ac.id', 'kalibrr.ac.id', '0891653427', '062789132', 'C:\\xampp\\tmp\\phpF8FD.tmp', 'Kristopel Mandala', 'Kepala Bagian', 'mandala@gmail.com', '0895612220038', 'Nelson Bangalor', 'Kepala Unit', 'nelson@gmail.com', '089653253478', 'Template Data Diri Lulusan_PPKHA_2020(2).docx', 'Indonesia', '2020-08-18 04:51:48', '2020-08-18 04:51:48'),
(8, 'Institut Teknologi Bandung', 'Bandung', 'itb.ac.id', 'www.itb.ac.id', '08935328745', '06273548', 'C:\\xampp\\tmp\\phpC91C.tmp', 'Jhon Panjaitan', 'Kepala Bagian', 'jhon@gmail.com', '0913247689', 'Kristopel Lumbantobing', 'Kepala Unit', 'kris@gmail.com', '087324598', 'Template Data Diri Lulusan_PPKHA_2020(1)(1)(8).docx', 'Indonesia', '2020-08-25 05:18:31', '2020-08-25 05:18:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `naskahfinal`
--
ALTER TABLE `naskahfinal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `naskahfinal`
--
ALTER TABLE `naskahfinal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
