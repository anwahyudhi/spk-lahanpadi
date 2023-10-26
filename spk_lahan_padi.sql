-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 11:40 PM
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
-- Database: `spk_lahan_padi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass_admin`, `nama`) VALUES
(1, 'ironman', 'ironman', 'Tony Stonks');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `jenis_tanah` varchar(255) NOT NULL,
  `ph_tanah` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `curah_hujan` varchar(255) NOT NULL,
  `irigasi` varchar(255) NOT NULL,
  `nilai_topsis` double NOT NULL,
  `nilai_electre` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama_alternatif`, `jenis_tanah`, `ph_tanah`, `suhu`, `curah_hujan`, `irigasi`, `nilai_topsis`, `nilai_electre`) VALUES
(2, 'Palaran', 'Tanah Podsoik/Merah Kuning', '5,6 - 6,5', '29-34 °C', '201 mm - 400 mm', 'Irigasi tadah hujan', 0, 1),
(3, 'Sambutan', 'Tanah Organosol/Gleyhumus', '5,6 - 6,5', '>35 °C', '> 401 mm', 'Irigasi tadah hujan', 1, 1),
(4, 'Samarinda Sebrang', 'Tanah Aluvial', '< 4,5', '29-34 °C', '> 401 mm', 'Irigasi tadah hujan', 0, 2),
(5, 'Loa Janan Ilir', 'Tanah Organosol/Gleyhumus', '4,6 - 5,5', '23-28 °C', '< 200 mm', 'Irigasi tadah hujan', 0, 1),
(6, 'Sungai Kunjang', 'Tanah Organosol/Gleyhumus', '5,6 - 6,5', '29-34 °C', '> 401 mm', 'Irigasi tadah hujan', 0, 4),
(7, 'Samarinda Utara', 'Tanah Aluvial', '< 4,5', '23-28 °C', '< 200 mm', 'Irigasi tadah hujan', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `jenis_kriteria` varchar(255) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot_kriteria`) VALUES
(2, 'Jenis Tanah', 'Benefit', 5),
(3, 'Ph Tanah', 'Benefit', 4),
(4, 'Curah hujan', 'Benefit', 3),
(5, 'Suhu', 'Cost', 3),
(6, 'Irigasi', 'Benefit', 4);

-- --------------------------------------------------------

--
-- Table structure for table `petani`
--

CREATE TABLE `petani` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_pbaru` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petani`
--

INSERT INTO `petani` (`id_pengguna`, `username`, `nama_pbaru`, `password`) VALUES
(3, 'spiderman', 'Iksan Camil', 'spiderman'),
(4, 'wonderman', 'Jesika Ismail', 'wonderman');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(255) NOT NULL,
  `nilai_subkriteria` double NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_subkriteria`, `nama_subkriteria`, `nilai_subkriteria`, `id_kriteria`) VALUES
(2, 'Tanah Gambut', 1, 2),
(3, 'Tanah Organosol/Gleyhumus', 2, 2),
(4, 'Tanah Podsoik/Merah Kuning', 3, 2),
(5, 'Tanah Aluvial', 4, 2),
(6, '< 4,5', 1, 3),
(7, '4,6 - 5,5', 2, 3),
(8, '5,6 - 6,5', 3, 3),
(9, '> 6,6', 4, 3),
(10, '< 200 mm', 1, 4),
(11, '201 mm - 400 mm', 2, 4),
(12, '> 401 mm', 3, 4),
(13, '< 16 °C', 4, 5),
(14, '16-22 °C', 3, 5),
(15, '23-28 °C', 1, 5),
(16, '29-34 °C', 2, 5),
(17, '>35 °C', 5, 5),
(18, 'Irigasi Permukaan', 1, 6),
(19, 'Perairan dengan Pompa Air', 2, 6),
(20, 'Irigasi tadah hujan', 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_subkriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `petani`
--
ALTER TABLE `petani`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
