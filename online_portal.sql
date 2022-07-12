-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 04:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(244) NOT NULL,
  `admin_password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'sadam@gmail.com', 'sadam1234'),
(2, 'arsalan@gmail.com', 'arsalan123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(244) NOT NULL,
  `student_father` varchar(244) NOT NULL,
  `student_cnic` varchar(244) NOT NULL,
  `student_address` varchar(244) NOT NULL,
  `student_programs` varchar(244) NOT NULL,
  `student_matric` varchar(244) CHARACTER SET sjis COLLATE sjis_bin NOT NULL,
  `student_intermediate` varchar(244) NOT NULL,
  `student_bise` varchar(244) NOT NULL,
  `student_bachelor` varchar(244) NOT NULL,
  `student_document` varchar(244) NOT NULL,
  `student_status` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_father`, `student_cnic`, `student_address`, `student_programs`, `student_matric`, `student_intermediate`, `student_bise`, `student_bachelor`, `student_document`, `student_status`) VALUES
(1, 'Babar Azam', '', '3810381753094', '', 'Physics', '990', '890', '', '765', 'xyz', 'Approved'),
(2, 'Sadam Hussain', '', '3810376443092', '', 'Bootny', '890', '750', '', '843', 'xyz', 'Rejected'),
(3, 'Quaid Azam', '', '09808080', '', 'DPT', '890', '987', '', '256', 'xyz', '0'),
(4, 'Hamza', '', '976796', '', 'Zoology', '786', '900', '', '453', 'xyz', 'Rejected'),
(5, '', '', '', '', '', '', '', '', '', '', ''),
(6, 'Hamza', 'Farhan Sheikh', '984258985', 'Layyah', 'BSCS', '909', '876', 'Sarghoda', '502', 'xyz', ''),
(7, 'Hamza', 'Abdul', '567', 'Layyah', '', '', '', '', '', 'xyz', ''),
(8, 'Hamza', 'Abdul', '567', 'Layyah', '', '', '', '', '', 'xyz', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
