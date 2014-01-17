-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2014 at 11:29 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bolang`
--
CREATE DATABASE IF NOT EXISTS `bolang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bolang`;

-- --------------------------------------------------------

--
-- Table structure for table `tabelsaya`
--

CREATE TABLE IF NOT EXISTS `tabelsaya` (
  `nama` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `email` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `hp` varchar(15) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `fb` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `pesan` varchar(200) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabelsaya`
--

INSERT INTO `tabelsaya` (`nama`, `email`, `hp`, `fb`, `pesan`) VALUES
('kos', 'koks', '097', 'nk', 'NKJSSXS'),
('kos', 'koks', '097', 'nk', 'NKJSSXS'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('kasih', 'kasih_hutauruk@yahoo.com', '09890988778', 'kasih', 'aku mau'),
('kasih', 'kasih_hutauruk@yahoo.com', '09890988778', 'kasih', 'aku mau'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
