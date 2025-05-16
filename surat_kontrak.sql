-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2024 at 11:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apemrasasutra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_kontrak`
--

CREATE TABLE `surat_kontrak` (
  `id` int NOT NULL,
  `buku_up` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `uraian_sk_up` varchar(100) NOT NULL,
  `no_st` varchar(50) NOT NULL,
  `bln_angka` varchar(5) NOT NULL,
  `nu_kontrak` varchar(5) NOT NULL,
  `hari_kontrak` varchar(20) NOT NULL,
  `tgl_huruf` varchar(50) NOT NULL,
  `bln_huruf` varchar(50) NOT NULL,
  `nama_petugas_kontrak` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nik_petugas_kontrak` varchar(16) NOT NULL,
  `alamat_petugas_kontrak` varchar(100) NOT NULL,
  `jabatan_petugas` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `honorarium_kontrak` varchar(100) NOT NULL,
  `sebagai_kontrak` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `ttd_petugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_kontrak`
--
ALTER TABLE `surat_kontrak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat_kontrak`
--
ALTER TABLE `surat_kontrak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
