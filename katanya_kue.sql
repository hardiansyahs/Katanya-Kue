-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 06:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katanya_kue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama_a` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama_a`, `username`, `password`) VALUES
('Azward Nurfauzan', 'ajaw', '1234'),
('Moch. Prima', 'gusti', '1234'),
('Abu Abdirohman', 'kakaabu', '1234'),
('Muadz Fikri', 'muadz', '1234'),
('Hardiansyah Shidek', 'shidek', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `kue`
--

CREATE TABLE `kue` (
  `idkue` int(11) NOT NULL,
  `namakue` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kue`
--

INSERT INTO `kue` (`idkue`, `namakue`, `harga`, `status`) VALUES
(1111, 'Chocolate Meringue Cream Cake', 85000, '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama_m` varchar(225) NOT NULL,
  `username_m` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama_m`, `username_m`, `password`, `email`) VALUES
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('', '', '', ''),
('Jack Paul', 'jp69', '1111', 'jp69@ymail.com'),
('Logan Paul', 'as', 'as', 'asd@gmail.com'),
('asd', 'as', 'as', 'asas@g'),
('', '', '', ''),
('', '', '', ''),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('Logan Paul', 'lp69', '1111', 'lp@ymail.com'),
('111', '1111', '1111', '111@ymail.com'),
('Alanah Rae', 'arae112', '1234', 'arae@yahoo.com'),
('Ivy Rose', 'iRose143', '123123', 'irose@ymail.com'),
('Hardiansyah Shidek', 'shidek24', 'singsing', 'shidek24@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kue`
--
ALTER TABLE `kue`
  ADD PRIMARY KEY (`idkue`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
