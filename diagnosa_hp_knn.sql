-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2026 at 09:15 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diagnosa_hp_knn`
--

-- --------------------------------------------------------

--
-- Table structure for table `training_data`
--

DROP TABLE IF EXISTS `training_data`;
CREATE TABLE IF NOT EXISTS `training_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kondisi1` varchar(100) DEFAULT NULL,
  `kondisi2` varchar(100) DEFAULT NULL,
  `kondisi3` varchar(100) DEFAULT NULL,
  `hasil` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `training_data`
--

INSERT INTO `training_data` (`id`, `kondisi1`, `kondisi2`, `kondisi3`, `hasil`) VALUES
(1, 'HP tidak menyala', 'Tidak bisa charge', 'Baterai cepat habis', 'IC Power Rusak'),
(2, 'HP tidak menyala', 'Tidak bisa charge', 'Sering restart', 'IC Power Rusak'),
(3, 'HP tidak menyala', 'Baterai cepat habis', 'Tidak ada', 'Baterai Rusak'),
(4, 'HP tidak menyala', 'Tidak ada', 'Tidak bisa charge', 'Kerusakan Power'),
(5, 'Layar blank', 'Ada suara tetapi layar mati', 'Layar tidak responsif', 'LCD Rusak'),
(6, 'Layar blank', 'Tidak ada', 'Ada suara tetapi layar mati', 'Kerusakan Layar'),
(7, 'HP cepat panas', 'Baterai cepat habis', 'Sering restart', 'Overheat'),
(8, 'HP cepat panas', 'Tidak ada', 'Sering restart', 'Overheat'),
(9, 'Baterai cepat habis', 'HP cepat panas', 'Tidak ada', 'Baterai Drop'),
(10, 'Sering restart', 'Baterai cepat habis', 'Tidak ada', 'Sistem Crash'),
(11, 'Tidak ada sinyal', 'Tidak bisa charge', 'Sering restart', 'IC Sinyal Rusak'),
(12, 'Tidak ada sinyal', 'Tidak ada', 'Sering restart', 'Gangguan Sinyal'),
(13, 'Kamera tidak berfungsi', 'Sering restart', 'HP cepat panas', 'Modul Kamera Rusak'),
(14, 'Layar tidak responsif', 'Sering restart', 'Tidak ada', 'Touchscreen Bermasalah'),
(15, 'HP cepat panas', 'Tidak ada', 'Baterai cepat habis', 'Overheat'),
(16, 'Baterai cepat habis', 'Tidak ada', 'Sering restart', 'Baterai Drop'),
(17, 'HP tidak menyala', 'Tidak ada', 'Sering restart', 'Kerusakan Power'),
(18, 'Layar blank', 'Tidak ada', 'Layar tidak responsif', 'Kerusakan Layar'),
(19, 'Tidak ada sinyal', 'Tidak bisa charge', 'Tidak ada', 'IC Sinyal Rusak'),
(20, 'Kamera tidak berfungsi', 'Tidak ada', 'Sering restart', 'Modul Kamera Rusak'),
(21, 'Layar tidak responsif', 'Layar blank', 'Sering restart', 'Touchscreen Bermasalah'),
(22, 'HP cepat panas', 'Sering restart', 'Baterai cepat habis', 'Overheat'),
(23, 'Sering restart', 'Baterai cepat habis', 'HP cepat panas', 'Sistem Crash'),
(24, 'HP tidak menyala', 'Tidak bisa charge', 'Tidak ada', 'IC Power Rusak'),
(25, 'Layar blank', 'Ada suara tetapi layar mati', 'Tidak ada', 'LCD Rusak'),
(26, 'Tidak ada sinyal', 'Sering restart', 'Tidak bisa charge', 'IC Sinyal Rusak'),
(27, 'Kamera tidak berfungsi', 'HP cepat panas', 'Tidak ada', 'Modul Kamera Rusak'),
(28, 'Baterai cepat habis', 'Sering restart', 'HP cepat panas', 'Baterai Drop'),
(29, 'HP tidak menyala', 'Sering restart', 'Tidak ada', 'Kerusakan Power'),
(30, 'Layar blank', 'Tidak ada', 'Tidak ada', 'Kerusakan Layar'),
(31, 'Sering restart', 'Tidak ada', 'Baterai cepat habis', 'Sistem Crash'),
(32, 'Tidak ada sinyal', 'Tidak ada', 'Tidak bisa charge', 'Gangguan Sinyal'),
(33, 'HP cepat panas', 'Tidak ada', 'Tidak ada', 'Overheat'),
(34, 'Kamera tidak berfungsi', 'Sering restart', 'Tidak ada', 'Modul Kamera Rusak'),
(35, 'Layar tidak responsif', 'Tidak ada', 'Layar blank', 'Touchscreen Bermasalah'),
(36, 'HP tidak menyala', 'Baterai cepat habis', 'Sering restart', 'Baterai Rusak'),
(37, 'Layar blank', 'Layar tidak responsif', 'Ada suara tetapi layar mati', 'LCD Rusak'),
(38, 'Tidak ada sinyal', 'Sering restart', 'Tidak ada', 'Gangguan Sinyal'),
(39, 'Baterai cepat habis', 'HP cepat panas', 'Sering restart', 'Baterai Drop'),
(40, 'HP cepat panas', 'Sering restart', 'Tidak ada', 'Overheat'),
(41, 'Sering restart', 'Baterai cepat habis', 'Tidak bisa charge', 'Sistem Crash'),
(42, 'HP tidak menyala', 'Tidak bisa charge', 'Baterai cepat habis', 'IC Power Rusak'),
(43, 'Layar blank', 'Ada suara tetapi layar mati', 'Layar tidak responsif', 'LCD Rusak'),
(44, 'HP cepat panas', 'Baterai cepat habis', 'Tidak ada', 'Overheat'),
(45, 'Tidak ada sinyal', 'Tidak bisa charge', 'Sering restart', 'IC Sinyal Rusak'),
(46, 'Kamera tidak berfungsi', 'Sering restart', 'HP cepat panas', 'Modul Kamera Rusak'),
(47, 'Layar tidak responsif', 'Sering restart', 'Layar blank', 'Touchscreen Bermasalah'),
(48, 'Baterai cepat habis', 'Tidak ada', 'Tidak ada', 'Baterai Drop'),
(49, 'HP tidak menyala', 'Tidak ada', 'Tidak ada', 'Kerusakan Power'),
(50, 'Layar blank', 'Tidak ada', 'Ada suara tetapi layar mati', 'Kerusakan Layar');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
