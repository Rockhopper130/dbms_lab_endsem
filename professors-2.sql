-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2023 at 10:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ResearchPortalDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `ProfID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `citations_all` int(11) DEFAULT NULL,
  `citations_after2018` int(11) DEFAULT NULL,
  `i10_index_all` int(11) DEFAULT NULL,
  `i10_index_after2018` int(11) DEFAULT NULL,
  `h_index_all` int(11) DEFAULT NULL,
  `h_index_after2018` int(11) DEFAULT NULL,
  `position` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `position_in_DSAI` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`ProfID`, `Name`, `citations_all`, `citations_after2018`, `i10_index_all`, `i10_index_after2018`, `h_index_all`, `h_index_after2018`, `position`, `department`, `position_in_DSAI`) VALUES
(2100, 'Arabin Kumar Dey', 427, 225, 7, 6, 8, 6, 'Associate Professor', 'Department of Mathematics', 'associated faculty'),
(2101, 'Arghyadip Roy', 165, 154, 6, 6, 8, 8, 'Assistant Professor', 'Mehta Family School of Data Science and Artificial Intelligence', 'faculty'),
(2102, 'Ashish Anand', 2077, 1025, 18, 17, 16, 14, 'Associate Professor', 'Department of Computer Science & Engineering', 'associated faculty'),
(2103, 'Ashok Singh Sairam', 410, 265, 13, 8, 12, 8, 'Professor', 'Department of Mathematics', 'associated faculty'),
(2104, 'Biplab Bose', 272, 115, 7, 3, 8, 5, 'Associate Professor', 'Department of Biosciences & Bioengineering', 'associated faculty'),
(2105, 'Debanga Raj Neog', 434, 206, 12, 8, 10, 8, 'Assistant Professor', 'Mehta Family School of Data Science and Artificial Intelligence', 'faculty'),
(2106, 'Devavrat Shah', 20089, 6996, 183, 107, 63, 38, 'Distinguished Faculty', 'Mehta Family School of Data Science and Artificial Intelligence', 'distinguished faculty'),
(2107, 'Gaurav Trivedi', 594, 521, 16, 15, 12, 11, 'Associate Professor', 'Department of Electronics and Electrical Engineering', 'associated faculty'),
(2108, 'Hanumant Singh Shekhawat', 163, 141, 5, 4, 7, 6, 'Assistant Professor', 'Department of Electronics and Electrical Engineering', 'associated faculty'),
(2109, 'M K Bhuyan', 2762, 1896, 79, 55, 26, 21, 'Professor', 'Department of Electronics and Electrical Engineering', 'associated faculty'),
(2110, 'Neeraj Kumar Sharma', 483, 459, 8, 6, 8, 8, 'Assistant Professor', 'Mehta Family School of Data Science and Artificial Intelligence', 'faculty'),
(2111, 'Prabirkumar Saha', 1798, 694, 37, 25, 23, 15, 'Professor', 'Chemical Engineering', 'associated faculty'),
(2112, 'Prithwijit Guha', 458, 209, 16, 5, 13, 8, 'Assistant Professor', 'Department of Electronics and Electrical Engineering', 'associated faculty'),
(2113, 'Ratnajit Bhattacharjee', 1190, 554, 44, 12, 17, 11, 'Professor', 'Department of Electronics and Electrical Engineering', 'head of the school'),
(2114, 'Rhythm Grover', 43, 43, 1, 1, 4, 4, 'Assistant Professor', 'Mehta Family School of Data Science and Artificial Intelligence', 'faculty'),
(2115, 'S Lakshmivarahan', 3683, 793, 54, 21, 28, 14, 'Distinguished Faculty', 'Mehta Family School of Data Science and Artificial Intelligence', 'distinguished faculty'),
(2116, 'Sanasam Ranbir Singh', 2166, 872, 18, 11, 13, 11, 'Associate Professor', 'Department of Computer Science & Engineering', 'associated faculty'),
(2117, 'Siddhartha Pratim Chakrabarty', 408, 276, 12, 7, 11, 9, 'Professor', 'Department of Mathematics', 'associated faculty'),
(2118, 'Souptick Chanda', 140, 112, 5, 5, 7, 7, 'Assistant Professor', 'Department of Biosciences & Bioengineering', 'associated faculty'),
(2119, 'Suresh Sundaram', 620, 471, 21, 13, 13, 11, 'Associate Professor', 'Department of Electronics and Electrical Engineering', 'associated faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`ProfID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `ProfID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
