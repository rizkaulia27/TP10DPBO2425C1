-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 11:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `email`, `alamat`) VALUES
(1, 'Rizka Anindya', 'rizka@gmail.com', 'Jl. Melati No. 12'),
(2, 'Budi Santoso', 'budisantoso@gmail.com', 'Jl. Kenanga No. 45'),
(3, 'Siti Rahmawati', 'sitir@gmail.com', 'Jl. Mawar No. 8'),
(4, 'Andi Pratama', 'andip@gmail.com', 'Jl. Anggrek No. 33'),
(5, 'Dewi Lestiani', 'dewil@gmail.com', 'Jl. Dahlia No. 17'),
(6, 'Hendra Wijaya', 'hendraw@gmail.com', 'Jl. Cempaka No. 29'),
(7, 'Nadya Putri', 'nadyaputri@gmail.com', 'Jl. Teratai No. 5'),
(8, 'Fajar Nugroho', 'fajarn@gmail.com', 'Jl. Flamboyan No. 10'),
(9, 'Lisa Kurniawan', 'lisak@gmail.com', 'Jl. Kamboja No. 21'),
(10, 'Roni Darmawan', 'ronid@gmail.com', 'Jl. Sakura No. 14');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` int(11) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `tahun_terbit`, `stok`) VALUES
(1, 'Laskar Pelangi', 1, 2005, 10),
(2, 'Sang Pemimpi', 1, 2006, 7),
(3, 'Bumi', 2, 2014, 15),
(4, 'Hujan', 2, 2016, 12),
(5, 'Supernova: Kesatria, Puteri, dan Bintang Jatuh', 3, 2001, 8),
(6, 'Harry Potter and the Sorcerer\'s Stone', 4, 1997, 20),
(7, 'Harry Potter and the Chamber of Secrets', 4, 1998, 18),
(8, '1984', 5, 1949, 9),
(9, 'Animal Farm', 5, 1945, 11);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `anggota` int(11) NOT NULL,
  `buku` int(11) NOT NULL,
  `tanggal_peminjaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `anggota`, `buku`, `tanggal_peminjaman`, `tanggal_pengembalian`) VALUES
(10, 1, 3, '2025-01-10 02:00:00', '2025-01-17'),
(11, 2, 1, '2025-01-11 07:25:00', '2025-01-18'),
(12, 4, 5, '2025-01-12 03:15:00', '2025-01-19'),
(13, 3, 7, '2025-01-13 01:45:00', '2025-01-20'),
(14, 6, 2, '2025-01-13 09:10:00', '2025-01-20'),
(15, 8, 9, '2025-01-14 04:20:00', '2025-01-21'),
(16, 7, 4, '2025-01-14 06:50:00', '2025-01-21'),
(17, 10, 6, '2025-01-15 02:30:00', '2025-01-22'),
(18, 5, 8, '2025-01-15 08:05:00', '2025-01-22'),
(19, 9, 3, '2025-01-16 03:40:00', '2025-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_pengembalian` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pengembalian` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_pengembalian`, `id_peminjaman`, `tanggal_pengembalian`) VALUES
(11, 10, '2025-01-17 03:15:00'),
(12, 11, '2025-01-18 04:20:00'),
(13, 12, '2025-01-19 02:40:00'),
(14, 13, '2025-01-20 07:05:00'),
(15, 14, '2025-01-20 09:30:00'),
(16, 15, '2025-01-21 03:55:00'),
(17, 16, '2025-01-21 06:10:00'),
(18, 17, '2025-01-22 02:25:00'),
(19, 18, '2025-01-22 08:45:00'),
(20, 19, '2025-01-23 04:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`, `bio`) VALUES
(1, 'Andrea Hirata', 'Andrea Hirata adalah novelis asal Belitung yang terkenal melalui karya Laskar Pelangi.'),
(2, 'Tere Liye', 'Tere Liye adalah penulis produktif Indonesia dengan banyak novel bertema kehidupan dan petualangan.'),
(3, 'Dewi Lestari', 'Dewi Lestari atau Dee adalah penulis dan musisi, dikenal lewat seri Supernova.'),
(4, 'J.K. Rowling', 'J.K. Rowling adalah penulis asal Inggris yang mendunia lewat seri Harry Potter.'),
(5, 'George Orwell', 'George Orwell adalah penulis dan jurnalis Inggris, terkenal dengan novel 1984 dan Animal Farm.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `penulis` (`penulis`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `anggota` (`anggota`),
  ADD KEY `buku` (`buku`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `id_peminjaman` (`id_peminjaman`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`penulis`) REFERENCES `penulis` (`id_penulis`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`anggota`) REFERENCES `anggota` (`id_anggota`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`buku`) REFERENCES `buku` (`id_buku`);

--
-- Constraints for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_peminjaman`) REFERENCES `peminjaman` (`id_peminjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
