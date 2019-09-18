-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2019 at 11:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakpw220191`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL,
  `name_class` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `name_class`) VALUES
(1, 'Tanpa Asuransi'),
(2, 'PlusHealth Blue'),
(3, 'PlusHealth Silver 1'),
(4, 'PlusHealth Silver 2 '),
(5, 'PlusHealth Gold'),
(6, 'PlusHealth Platinum'),
(7, 'JiwaSejagat');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `med_record_number` varchar(10) COLLATE utf8_bin NOT NULL,
  `citizen_id_number` varchar(18) COLLATE utf8_bin NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `address` varchar(300) COLLATE utf8_bin NOT NULL,
  `birth_place` varchar(80) COLLATE utf8_bin NOT NULL,
  `birth_date` date NOT NULL,
  `phone_number` varchar(18) COLLATE utf8_bin DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `insurance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`med_record_number`, `citizen_id_number`, `name`, `address`, `birth_place`, `birth_date`, `phone_number`, `photo`, `insurance_id`) VALUES
('B-00000001', '1234567890123', 'Budi Senjaya', 'Surya Sumantri 1', 'Solo', '2000-01-23', NULL, NULL, 1),
('S-00000001', '1234567890124', 'Sinta Gunawan', 'Babakan Jeruk 1', 'Bandung', '1995-05-15', NULL, NULL, 3),
('Z-00000001', '1234567898374', 'Jon', 'Surya SUmanto', 'Bali', '1980-10-10', '082736373536', NULL, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`med_record_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
