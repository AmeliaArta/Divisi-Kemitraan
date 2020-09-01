-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 07:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `mitra_kerjasama`
--

CREATE TABLE `mitra_kerjasama` (
  `id` int(11) NOT NULL,
  `nama_mitra` varchar(250) NOT NULL,
  `tahun` year(4) NOT NULL,
  `Created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitra_kerjasama`
--

INSERT INTO `mitra_kerjasama` (`id`, `nama_mitra`, `tahun`, `Created_at`, `update_at`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mitra_kerjasama`
--
ALTER TABLE `mitra_kerjasama`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
