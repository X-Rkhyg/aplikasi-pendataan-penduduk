-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 03:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `nama`, `nik`, `tanggal_lahir`, `jenis_kelamin`, `nama_ibu`, `nama_ayah`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 'BERLIAN REVANO RIZKI SYAHPUTRA', '3404112206220002', '2022-06-22', 'Laki-laki', 'ALFANO CANDRA PUSPITA DEWI', 'TRI HARTANTO ', 'CAWAN PUCANGAN, 008/029, WIDODOMARTANI,NGEMPLAK, SLEMAN', '2023-09-29 17:47:33', '2023-09-29 17:47:33', '0000-00-00 00:00:00'),
(19, 'MUHAMMAD HANAN ZYAN PRATAMA', '3404132705220003', '2022-05-27', 'Laki-laki', 'WIDYA HANDAYANI', 'ANDONO BUDI PRASETYA ', 'NGANCAR, 004/024, TRIDADI, SLEMAN', '2023-09-29 17:48:45', '2023-09-29 17:48:45', '0000-00-00 00:00:00'),
(20, 'SHAKILA FAKHRUNNISA ISKANDAR', '3404014606220004', '2022-06-06', 'Perempuan', 'SUMIYATI', 'YUSUF ISKANDAR ', 'DEPOK, 003/029, AMBARKETAWANG, GAMPING, SLEMAN', '2023-09-29 17:50:39', '2023-09-29 17:50:39', '0000-00-00 00:00:00'),
(21, 'LEMUEL JAYENDRA WIRADHARMA SANTOSO', '3404131007220002', '2022-07-10', 'Laki-laki', 'ARI MUKTININGRUM', 'TRI BUDI SANTOSO ', 'BERAN LOR, RT 5 RW 22, TRIDADI, SLEMAN, YOGYAKARTA ', '2023-09-29 17:51:40', '2023-09-29 17:51:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `role`) VALUES
(6, 'Aku', 'ba87ebcbb87bec14fc57c66c0273fb7365112a9b0bd154.81144955', '65112a9b0bd154.81144955', '2'),
(7, 'rkhyg', '7488e331b8b64e5794da3fa4eb10ad5d65122f36799689.12598275', '65122f36799689.12598275', '1'),
(12, 'user', '80ec08504af83331911f5882349af59d65141d56e36012.24656385', '65141d56e36012.24656385', '2'),
(13, 'myuser', '1bbd886460827015e5d605ed442522516517095f58ab48.07439517', '6517095f58ab48.07439517', '2'),
(14, 'kambing', '1bbd886460827015e5d605ed4425225165181e1b4eafc4.53418971', '65181e1b4eafc4.53418971', '2'),
(15, 'userzz', '1bbd886460827015e5d605ed442522516519835010f9a5.65140481', '6519835010f9a5.65140481', '2'),
(16, 'userrr', '1bbd886460827015e5d605ed44252251651d63f6d1dae1.81765764', '651d63f6d1dae1.81765764', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
