-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2024 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `url`, `cover`, `date`) VALUES
(2, 'Tips Memulai Bisnis Online', 'Beberapa tips yang dapat Anda terapkan untuk memulai bisnis online yang sukses.', 'tips-memulai-bisnis-online', 'bisnis-online.jpg', '2024-06-16 07:02:54'),
(3, 'Resep Masakan Tradisional', 'Artikel ini menyajikan beberapa resep masakan tradisional yang lezat dan mudah dibuat.', 'resep-masakan-tradisional', 'masakan-tradisional.jpg', '2024-06-16 07:02:54'),
(4, 'Sejarah Peradaban Kuno', 'Artikel ini menceritakan tentang peradaban kuno yang menarik dan berpengaruh hingga saat ini.', 'sejarah-peradaban-kuno', 'peradaban-kuno.jpg', '2024-06-16 07:02:54'),
(5, 'Tips Hidup Sehat Alami', 'Beberapa tips sederhana untuk menjalani gaya hidup sehat secara alami.', 'tips-hidup-sehat-alami', 'hidup-sehat.jpg', '2024-06-16 07:02:54'),
(20, 'ASEP', 'ASEP', 'ASEP', 'ASEP', '2024-06-16 13:31:50'),
(21, 'apasih', 'apsiahhh', 'apasih', 'apasih', '2024-06-16 13:44:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
