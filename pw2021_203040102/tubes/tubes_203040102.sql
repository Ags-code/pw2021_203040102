-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 02:49 PM
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
-- Database: `tubes_203040102`
--

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

CREATE TABLE `gadget` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`id`, `img`, `nama`, `deskripsi`, `harga`, `kategori`) VALUES
(1, 'redmi.jpg', 'Redmi Note 10', 'Redmi Note 10 mengungsung layar Super AMOLED FHD + dengan bentang 6,43 inci,prosesor Snapdragon 678, RAM 4-8GB, storage 64-128GB, serta baterai 5000mAh dengan fast charging 33W.', 'Rp. 2.400.000,00,-', 'Buy'),
(2, 'oppo.jpg', 'OPPO RENO5', 'Reno5 ditolaki chip Snapdragon 765G yang diproses dengan fabrikasi 7nm serta memiliki delapan inti CPU dengan kecepatan 2,4 GHz. Chip tersebut dipadu dengan RAM 8GB dan memori internal 128GB.', 'Rp. 4.999.000,00,-', 'Buy'),
(3, 'poco.jpg', 'Xiaomi POCO M3', 'Xiaomi POCO M3 memiliki baterai 6.000 mAh dengan fast charging 18W, layar FHD+ 6,53 inci, prosesor Qualcomm Snapdragon 662 SoC octa-core dan tiga kamera belakang 48MP.', 'Rp. 2.099.000,00,-', 'Buy'),
(4, 'samsung.jpg', 'Samsung Galaxy 32', 'Samsung Galaxy A32 hadir dengan layar Super AMOLED berdiagonal 6,4 inci dengan desain Infinity-U (1.080 x 2.400 piksel). Layar tersebut telah mendukung refresh rate hingga 90 Hz dan memiliki tingkat kecerahan 800 nits.', 'Rp. 3.499.000,00,-', 'Buy'),
(5, 'vivo.jpg', 'Vivo Y20s', 'Vivo Y20s merupakan handphone dengan kapasitas 5000mAh dan layar 6,51 Hz yang dilengkapi dengan kamera belakang 13 + 2 + 2MP dengan tingkat densitas piksel sebesar 720 x 1600piksel.', 'Rp. 2.999.000,00,-', 'Buy');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'agung', '$2y$10$fulQU2LVXwYjqyNv1W3SsOQ4HbzwB7/8StbkHhmiPBT.MgJ3NtYQO'),
(4, 'ags', '$2y$10$2wSJRxbtSulYnchYLe/7geDU8CX2gWUaomzxGAPhA2rcYAvl4/91W'),
(5, 'agung septiana', '$2y$10$OoKlN4zlclRrS/1S6GVL/.KZX674gqLKmng/YwbTSWkJ108tP25JS'),
(6, 'admin', '$2y$10$rll5xE6TbQI4OZHE5QtiD.32jz9q6e1IX/XovK751ecEnTfVr/Sny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
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
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
