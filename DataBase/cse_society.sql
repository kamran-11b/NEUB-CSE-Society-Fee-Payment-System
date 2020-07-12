-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 12:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_society`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_password` varchar(12) NOT NULL,
  `admin_mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobile`) VALUES
('0001', 'Head Admin ', 'admin@gmail.com', 'admin', '0123456789'),
('102030', 'Ahsan Habib', 'ahb@gmail.com', '102030', '01912121212121'),
('102040', 'Al Mehdi Sadat Chy', 'ams@gmail.com', '102040', '01912121212121');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `student_Id` varchar(15) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `semester_no` varchar(15) NOT NULL,
  `payment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `amount` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `student_Id`, `admin_id`, `semester_no`, `payment_date`, `amount`) VALUES
(12, '160103020024', '0001', '10', '2018-09-26 17:42:49', '100'),
(13, '160103020024', '0001', '1', '2018-09-26 17:43:20', '100'),
(14, '160103020024', '0001', '2', '2018-09-26 17:43:31', '100'),
(15, '160103020024', '0001', '3', '2018-09-26 17:43:47', '100'),
(16, '160103020024', '0001', '4', '2018-09-26 17:44:03', '100'),
(17, '160103020022', '102030', '1', '2018-09-26 19:52:59', '100'),
(18, '160103020003', '102030', '1', '2018-09-26 20:05:39', '100');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(15) NOT NULL,
  `student_name` varchar(40) DEFAULT NULL,
  `student_session` varchar(15) DEFAULT NULL,
  `student_section` varchar(1) DEFAULT NULL,
  `student_mobile` varchar(15) NOT NULL,
  `student_blood` varchar(5) DEFAULT NULL,
  `student_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `student_session`, `student_section`, `student_mobile`, `student_blood`, `student_status`) VALUES
('160103020003', 'Fabiha Rob Chy', 'Spring-16', 'A', '016666666666', 'B+', NULL),
('160103020004', 'Md. Ashique Abdullah', 'Spring-16', 'A', '01773654647', 'AB+', NULL),
('160103020007', 'Abdul Motin', 'Spring-16', 'A', '017777777777', 'O+', NULL),
('160103020009', 'Muhaamad Hussain Rana', 'Spring-16', 'A', '017777777777', 'O+', NULL),
('160103020013', 'Ikram Khaan Shipon', 'Spring-16', 'A', '016666666666', 'B+', NULL),
('160103020014', 'Abdullah Al Mamun', 'Spring-16', 'A', '01888888888', 'B+', NULL),
('160103020015', 'Ayon Dey', 'Spring-16', 'A', '017777777777', 'Ab+', NULL),
('160103020017', 'Md. Amran Hussain', 'Spring-16', 'A', '01888888888', 'A-', NULL),
('160103020020', 'Hasan Ahmed Noyon', 'Spring-16', 'A', '016666666666', 'B+', NULL),
('160103020022', 'MD. Sahin Alam', 'Spring-16', 'A', '016666666666', 'O+', NULL),
('160103020023', 'Rubaiat Jahan', 'Spring-16', 'A', '017777777777', 'B+', NULL),
('160103020024', 'Akramul Islalam', 'Spring-16', 'A', '016666666666', 'A+', NULL),
('160103020027', 'Azhar Hussain', 'Spring-16', 'A', '01773654647', 'Ab+', NULL),
('160103020033', 'Md Kamran Ahmed', 'Spring-16', 'A', '017777777777', 'Ab+', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `student_Id` (`student_Id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`student_Id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
