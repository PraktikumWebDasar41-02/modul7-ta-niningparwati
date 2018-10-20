-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 01:55 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta_6701174151`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamod7`
--

CREATE TABLE `tamod7` (
  `nama` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `asal` text NOT NULL,
  `moto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamod7`
--

INSERT INTO `tamod7` (`nama`, `nim`, `tanggal`, `jk`, `prodi`, `fakultas`, `asal`, `moto`) VALUES
('Fitria', '1111111111', '2018-10-07', 'Perempuan', 'S1 MBTI', 'on', 'Malang', 'vvvvvvvvvvv'),
('Zahra Dhia Syarafana', '1234567890', '2018-10-04', 'Perempuan', 'D3 Manajemen Informatika', 'on', 'Kebasen', 'do the best'),
('Fauziah', '1234567891', '2018-10-04', 'Perempuan', 'D3 Manajemen Informatika', 'on', 'Jakarta', 'bbbbbbbbbbb'),
('Devi Fildzania', '6701174150', '2018-10-01', 'Perempuan', 'S1 Teknik Industri', 'on', 'Surabaya', 'one heart'),
('Nining Parwati', '6701174151', '2017-03-07', 'peremupan', 'D3 Manajemen Informatika', 'on', 'Karangsari', 'Be your self');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamod7`
--
ALTER TABLE `tamod7`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
