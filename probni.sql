-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 10:11 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `USER_ID` int(11) NOT NULL,
  `KORISNICKO_IME` varchar(20) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `LOZINKA` varchar(20) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `MJESTO_STANOVANJA` varchar(30) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`USER_ID`, `KORISNICKO_IME`, `LOZINKA`, `MJESTO_STANOVANJA`) VALUES
(1, 'Anthea', 'anthea123', 'Rijeka');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `USER_ID` int(11) NOT NULL,
  `KORISNICKO_IME` varchar(20) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `LOZINKA` varchar(20) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `MJESTO_STANOVANJA` varchar(30) CHARACTER SET utf32 COLLATE utf32_croatian_ci NOT NULL,
  `TOCNI_VJESALA` int(11) NOT NULL,
  `TOCNI_MEMORY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_croatian_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`USER_ID`, `KORISNICKO_IME`, `LOZINKA`, `MJESTO_STANOVANJA`, `TOCNI_VJESALA`, `TOCNI_MEMORY`) VALUES
(0, 'martina', 'HZVHV', 'Varaždin', 11, 0),
(1, 'Marko', 'MARKO', 'Rijeka', 29, 0),
(2, 'Mario', 'MARIO123', 'Zagreb', 0, 0),
(3, 'Ivana', 'ivana12345', 'Split', 0, 0),
(4, 'Adriana', 'adri123', 'Osijek', 0, 0),
(5, 'user6765', 'jnkjbjkb', 'Sisak', 0, 0),
(6, 'user6765g', 'mmlljhf', 'Sisak', 0, 0),
(27, 'marija', 'jfkfzu', 'Rijeka', 0, 0),
(28, 'Loren', 'ijgrbrw', 'Zagreb', 0, 0),
(29, 'Ivana23', 'ivana23', 'Zagreb', 0, 0),
(30, 'Ana', 'jasamana', 'Rijeka', 0, 0),
(31, 'irena234', 'irenica', 'Pula', 0, 0),
(32, 'ariizzy', 'ariizzy', 'vežica', 0, 0),
(33, 'User456', '456456', 'Rijeka', 0, 0),
(34, 'User456', 'user456', 'Rijeka', 0, 0),
(35, 'Markecc', 'jasammarko', 'Rijeka', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
