-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2025 at 08:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formulir_anak_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir_anak`
--

CREATE TABLE `formulir_anak` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(255) NOT NULL,
  `hobi` varchar(255) DEFAULT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `jarak_rumah` varchar(255) NOT NULL,
  `foto_akte` varchar(255) DEFAULT NULL,
  `foto_kk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('diproses','diterima','ditolak') NOT NULL DEFAULT 'diproses'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_anak`
--

INSERT INTO `formulir_anak` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `gender`, `agama`, `hobi`, `nama_ayah`, `nama_ibu`, `jarak_rumah`, `foto_akte`, `foto_kk`, `created_at`, `updated_at`, `status`) VALUES
(1, 'bismillah', 'rumah sakit', '2025-06-01', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', 'akte/rpbtllSauO6DFYFUe8H9mB9ZgGZUyI3SuqvfqP04.jpg', 'kk/E3MEWd07v882lRZNAe34CQMzBzKurMOSzoCIz8qf.png', '2025-06-10 22:28:29', '2025-06-10 22:28:29', 'diproses'),
(3, 'imam i', 'rumah sakit', '2025-06-05', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', 'akte/RR42EfryJ5XzLlMPMEZ2TuQrqietYO821lSeEwDl.jpg', 'kk/5GheQz8qLC1gwYP2bVDP7XQmYTOjCNiopcz5BWua.png', '2025-06-11 06:34:11', '2025-06-11 06:34:11', 'diproses'),
(4, 'imam', 'rumah sakit', '2025-06-04', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', 'akte/D47uOXsGNmlCKHguR3XfkjbsSSbBWMJLXeF3DNk3.jpg', 'kk/a1lPJTRKzyQr7sksFYQidVIt1ssuvZVhes1ciQ6b.png', '2025-06-11 07:52:34', '2025-06-11 07:52:34', 'diproses'),
(5, 'imam 2', 'rumah sakit', '2025-06-05', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', NULL, 'kk/0AKWCWRmGL4unquQ4xb6sR65MIJZupKG9hcbnY3t.pdf', '2025-06-11 07:53:40', '2025-06-11 07:53:40', 'diproses'),
(6, 'imam lgi', 'rumah sakit', '2025-06-05', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', NULL, NULL, '2025-06-11 08:07:41', '2025-06-11 08:07:41', 'diproses'),
(8, 'abdul', 'rumah sakit', '2025-06-07', 'Laki-laki', 'islam', 'makan', 'bapakk', 'ibukk', '5km', 'akte/sdMf0IauqkRciUtn9SHryjXBJhtYI6cANpVxrWNE.pdf', 'kk/LVZkKnpV8knvtr95P2N4tclqFID0PwJUuDjcp7KD.jpg', '2025-06-11 08:41:35', '2025-06-11 08:41:35', 'diproses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir_anak`
--
ALTER TABLE `formulir_anak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir_anak`
--
ALTER TABLE `formulir_anak`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
