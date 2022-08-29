-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2022 at 08:04 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tableaudebord`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

DROP TABLE IF EXISTS `finance`;
CREATE TABLE IF NOT EXISTS `finance` (
  `id_fin` int NOT NULL AUTO_INCREMENT,
  `projet` varchar(100) NOT NULL,
  `finalite_projet` varchar(100) NOT NULL,
  `cout` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `Taux_eval` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `informatique`
--

DROP TABLE IF EXISTS `informatique`;
CREATE TABLE IF NOT EXISTS `informatique` (
  `id_info` int NOT NULL AUTO_INCREMENT,
  `projet` varchar(100) NOT NULL,
  `finalite_projet` varchar(100) NOT NULL,
  `cout` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `Taux_eval` varchar(100) NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_type`) VALUES
(1, 'ADMIN', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
CREATE TABLE IF NOT EXISTS `maintenance` (
  `id_m` int NOT NULL AUTO_INCREMENT,
  `projet` varchar(100) NOT NULL,
  `finalite_projet` varchar(100) NOT NULL,
  `cout` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `Taux_eval` varchar(100) NOT NULL,
  PRIMARY KEY (`id_m`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rh`
--

DROP TABLE IF EXISTS `rh`;
CREATE TABLE IF NOT EXISTS `rh` (
  `id_rh` int NOT NULL AUTO_INCREMENT,
  `projet` varchar(100) NOT NULL,
  `finalite_projet` varchar(100) NOT NULL,
  `cout` varchar(100) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `Taux_eval` varchar(100) NOT NULL,
  PRIMARY KEY (`id_rh`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
