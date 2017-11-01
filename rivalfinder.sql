-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2017 at 07:50 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivalfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `challenges`
--

CREATE TABLE `challenges` (
  `id_challenge` int(11) NOT NULL,
  `id_club_home` int(11) NOT NULL,
  `id_club_away` int(11) NOT NULL,
  `date` date NOT NULL,
  `place` text NOT NULL,
  `status` enum('Accept','Waiting Response','Decline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenges`
--

INSERT INTO `challenges` (`id_challenge`, `id_club_home`, `id_club_away`, `date`, `place`, `status`) VALUES
(2, 1, 2, '2017-11-04', 'Golden Stick Futsal', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id_club` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(35) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `logo` text NOT NULL,
  `status` enum('Available','Unavailable') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id_club`, `email`, `password`, `name`, `contact`, `logo`, `status`) VALUES
(1, 'manutd@gmail.com', '018a9567ea15470312c40d3e5d6bbcd4', 'Manchester United FC', '087878666775', 'c23bc329e1df555deb2b8801ec71aa67.png', 'Unavailable'),
(2, 'chelseafc@gmail.com', '91cb315a6405bfcc30e2c4571ccfb8ce', 'Chelsea FC', '08978110210', 'f96a049081a4382e1ac02e7057c0fc63.png', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `tournament_info`
--

CREATE TABLE `tournament_info` (
  `id_tournament` int(11) NOT NULL,
  `tournament_title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `contact_person` varchar(12) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_info`
--

INSERT INTO `tournament_info` (`id_tournament`, `tournament_title`, `description`, `contact_person`, `picture`) VALUES
(2, 'Tournament Futsal Al Fatah XIII', '<p>Kategori: SD</p>\r\n<p>Wilayah: Kota dan Kabupaten Bekasi</p>\r\n<p>&nbsp;</p>\r\n<p>Lapangan: Sekolah Al Fatah</p>\r\n<p>Tanggal Pelaksanaan: 01 - 02 Februari 2017</p>\r\n<p>Kontak: Rijal 0815 1946 0715</p>', '081519460715', 'f20c49d280120668bb2bc9125ac1215c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `challenges`
--
ALTER TABLE `challenges`
  ADD PRIMARY KEY (`id_challenge`),
  ADD KEY `id_club_home` (`id_club_home`),
  ADD KEY `id_club_away` (`id_club_away`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id_club`);

--
-- Indexes for table `tournament_info`
--
ALTER TABLE `tournament_info`
  ADD PRIMARY KEY (`id_tournament`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `challenges`
--
ALTER TABLE `challenges`
  MODIFY `id_challenge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tournament_info`
--
ALTER TABLE `tournament_info`
  MODIFY `id_tournament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `challenges`
--
ALTER TABLE `challenges`
  ADD CONSTRAINT `challenges_ibfk_1` FOREIGN KEY (`id_club_home`) REFERENCES `clubs` (`id_club`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `challenges_ibfk_2` FOREIGN KEY (`id_club_away`) REFERENCES `clubs` (`id_club`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
