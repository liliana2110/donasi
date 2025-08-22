-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 05:43 PM
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
-- Database: `db_darikita`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_jenis` varchar(11) NOT NULL,
  `alamat_donatur` text NOT NULL,
  `nama_makanan` text NOT NULL,
  `tanggal_donasi` datetime NOT NULL DEFAULT current_timestamp(),
  `tanggal_terkirim` timestamp NULL DEFAULT NULL,
  `status` enum('Terkirim','Belum Terkirim') NOT NULL DEFAULT 'Belum Terkirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_user`, `id_kategori`, `id_jenis`, `alamat_donatur`, `nama_makanan`, `tanggal_donasi`, `tanggal_terkirim`, `status`) VALUES
(1, 9912, 'KM01', 'J02', 'JL. Penguasa Jimbaran', 'Indomie original 1 kardus', '2024-07-02 21:26:15', NULL, 'Belum Terkirim'),
(2, 1000, 'KM01', 'J02', 'Jl. Bahagia Disana', 'Indomie 1 kardus', '2024-07-03 13:39:44', '2024-07-04 14:42:48', 'Terkirim'),
(3, 9911, 'KM01', 'J03', 'Jl. Kebo Iwa', 'Chitato satu kardus', '2024-07-03 17:14:29', NULL, 'Belum Terkirim'),
(4, 9913, 'KM01', 'J02', 'Jl. Raya', 'Mie Sedaap', '2024-07-04 15:42:56', '2024-07-04 14:21:29', 'Terkirim'),
(5, 1000, 'KM02', 'J05', 'atmin', 'Apel', '2024-07-04 22:44:25', '2024-07-04 14:44:48', 'Terkirim');

-- --------------------------------------------------------

--
-- Stand-in structure for view `history_donasi`
-- (See below for the actual view)
--
CREATE TABLE `history_donasi` (
`id_donasi` int(11)
,`id_user` int(5)
,`nama` varchar(50)
,`alamat_donatur` text
,`jenis` varchar(50)
,`kategori` varchar(20)
,`nama_makanan` text
,`tanggal_donasi` datetime
,`status` enum('Terkirim','Belum Terkirim')
,`tanggal_terkirim` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_makanan`
--

CREATE TABLE `jenis_makanan` (
  `id_jenis` varchar(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenis_makanan`
--

INSERT INTO `jenis_makanan` (`id_jenis`, `id_kategori`, `jenis`) VALUES
('J01', 'KM01', 'Bahan Pokok'),
('J02', 'KM01', 'Makanan Instan'),
('J03', 'KM01', 'Snack'),
('J04', 'KM02', 'Sayuran'),
('J05', 'KM02', 'Buah-Buahan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_makanan`
--

CREATE TABLE `kategori_makanan` (
  `id_kategori` varchar(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_makanan`
--

INSERT INTO `kategori_makanan` (`id_kategori`, `kategori`) VALUES
('KM01', 'Makanan Tahan Lama'),
('KM02', 'Makanan Segar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('admin','donatur') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_hp`, `email`, `password`, `alamat`, `role`) VALUES
(1000, 'Admin', '082144143069', 'admin@gmail.com', '1', 'Jl. Kebun Raya Bedugul', 'admin'),
(1001, 'Pramana', '082144143096', 'pramana@gmail.com', '1', 'Jl. Kebun Raya Begul', 'donatur'),
(1003, 'Aditya', '082144143069', 'adityamade2187@gmail.com', '666', 'Jl. Mekar 2 Blok E 2 No 1500', 'donatur'),
(1004, 'Liana ', '081234567890', 'liana@gmail.com', '2', 'Jl. Institute of Technology', 'donatur'),
(1005, 'Adi Premana', '081233334444', 'adipremana@gmail.com', '99', 'Jl. Institute of Technology', 'donatur'),
(1006, 'Ktag', '081299999999', 'ktag@gmail.com', '111', 'Jl. Institute of Technology', 'donatur'),
(1007, 'Sandi ', '082233334444', 'sandiarta@gmail.com', '0', 'Jl. Institute of Technology', 'donatur'),
(9911, 'Genta Bhuana', '081234567890', 'aribuana@gmail.com', 'gta', 'Jl. Buaya Darat Selatan', 'donatur'),
(9912, 'Rania', '081234567890', 'rania@gmail.com', 'ran', 'Jl. Penguasa Jimbaran', 'donatur'),
(9913, 'Devaa', '081234567890', 'deva@gmail.com', '1', 'Jl. Raya', 'donatur');

-- --------------------------------------------------------

--
-- Structure for view `history_donasi`
--
DROP TABLE IF EXISTS `history_donasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `history_donasi`  AS SELECT `donasi`.`id_donasi` AS `id_donasi`, `user`.`id_user` AS `id_user`, `user`.`nama` AS `nama`, `donasi`.`alamat_donatur` AS `alamat_donatur`, `jenis_makanan`.`jenis` AS `jenis`, `kategori_makanan`.`kategori` AS `kategori`, `donasi`.`nama_makanan` AS `nama_makanan`, `donasi`.`tanggal_donasi` AS `tanggal_donasi`, `donasi`.`status` AS `status`, `donasi`.`tanggal_terkirim` AS `tanggal_terkirim` FROM (((`donasi` join `user` on(`user`.`id_user` = `donasi`.`id_user`)) join `kategori_makanan` on(`kategori_makanan`.`id_kategori` = `donasi`.`id_kategori`)) join `jenis_makanan` on(`jenis_makanan`.`id_jenis` = `donasi`.`id_jenis`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_jenis` (`id_jenis`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `jenis_makanan`
--
ALTER TABLE `jenis_makanan`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `FK_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9914;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_makanan` (`id_kategori`),
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_makanan` (`id_jenis`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `jenis_makanan`
--
ALTER TABLE `jenis_makanan`
  ADD CONSTRAINT `FK_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_makanan` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
