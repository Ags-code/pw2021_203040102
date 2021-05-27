-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 06:08 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_203040102`
--

-- --------------------------------------------------------

--
-- Table structure for table `figure`
--

CREATE TABLE `figure` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `harga` varchar(80) NOT NULL,
  `gambar` varchar(80) NOT NULL,
  `deskripsi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `figure`
--

INSERT INTO `figure` (`id`, `nama`, `harga`, `gambar`, `deskripsi`) VALUES
(1, 'Yukinoshita Yukino', 'IDR 2,600,000', 'yukino.png', ''),
(2, 'Ultraman', 'IDR 2,850,000', 'ultraman.jpg', ''),
(3, 'Monkey D Luffy', 'IDR 2,250,000', 'luffi.jpg', ''),
(4, 'eLL', 'IDR 500,000', 'ell.jpg', ''),
(5, 'Goku', 'IDR 2,310,000', 'goku.jpg', ''),
(6, 'Mikasa Ackerman', 'IDR 2,800,000', 'mikasa.jpg', ''),
(7, 'Spiderman', 'IDR 760,000', 'spiderman.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(4, 'admin', '$2y$10$NjUMSiWNZAsMWYwDNNaLQ.Mob1qskmp2f3oo75ZXRnCbnMNHKiL2m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `figure`
--
ALTER TABLE `figure`
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
-- AUTO_INCREMENT for table `figure`
--
ALTER TABLE `figure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
