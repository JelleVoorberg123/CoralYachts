-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 09:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `coralyachts`
--

-- --------------------------------------------------------

--
-- Table structure for table `boten`
--

DROP TABLE IF EXISTS `boten`;
CREATE TABLE `boten` (
  `naam` text NOT NULL,
  `plek` text NOT NULL,
  `beschikbaar` text NOT NULL,
  `kosten` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boten`
--

INSERT INTO `boten` (`naam`, `plek`, `beschikbaar`, `kosten`) VALUES
('Fast One', 'Rotterdam', 'ja', '10000'),
('Vevekos', 'Rotterdam', 'nee', '14999'),
('Eagle Tu', 'Amsterdam', 'nee', '5000'),
('Gioe I', 'Rotterdam', 'ja', '2999'),
('Can t Remember', 'Amsterdam', 'ja', '12000');
COMMIT;
