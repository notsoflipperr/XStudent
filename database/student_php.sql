-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 04:45 PM
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
-- Database: `student_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `usn` varchar(10) DEFAULT NULL,
  `EM4` int(3) DEFAULT NULL,
  `DAA` int(3) DEFAULT NULL,
  `DBMS` int(3) DEFAULT NULL,
  `OS` int(3) DEFAULT NULL,
  `JAVA` int(3) DEFAULT NULL,
  `DBMSL` int(3) DEFAULT NULL,
  `DAAL` int(3) DEFAULT NULL,
  `PE` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`usn`, `EM4`, `DAA`, `DBMS`, `OS`, `JAVA`, `DBMSL`, `DAAL`, `PE`) VALUES
('1NT20CS001', 17, 22, 22, 24, 20, 22, 17, 23),
('1NT20CS002', 16, 17, 14, 17, 14, 18, 15, 15),
('1NT20CS003', 17, 15, 22, 13, 25, 23, 21, 13),
('1NT20CS004', 20, 19, 25, 19, 21, 22, 22, 13),
('1NT20CS005', 24, 25, 20, 22, 25, 25, 17, 17),
('1NT20CS006', 24, 14, 21, 16, 24, 18, 15, 18),
('1NT20CS007', 17, 19, 16, 18, 17, 17, 25, 16),
('1NT20CS008', 23, 17, 19, 24, 18, 14, 23, 21),
('1NT20CS009', 19, 21, 23, 23, 20, 19, 17, 13);

-- --------------------------------------------------------

--
-- Table structure for table `cie`
--

CREATE TABLE `cie` (
  `usn` varchar(10) DEFAULT NULL,
  `EM4` int(3) DEFAULT NULL,
  `DAA` int(3) DEFAULT NULL,
  `DBMS` int(3) DEFAULT NULL,
  `OS` int(3) DEFAULT NULL,
  `JAVA` int(3) DEFAULT NULL,
  `DBMSL` int(3) DEFAULT NULL,
  `DAAL` int(3) DEFAULT NULL,
  `PE` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cie`
--

INSERT INTO `cie` (`usn`, `EM4`, `DAA`, `DBMS`, `OS`, `JAVA`, `DBMSL`, `DAAL`, `PE`) VALUES
('1NT20CS001', 43, 26, 32, 44, 25, 43, 41, 48),
('1NT20CS002', 44, 38, 48, 25, 46, 43, 41, 39),
('1NT20CS003', 39, 48, 44, 41, 20, 45, 43, 21),
('1NT20CS004', 30, 47, 43, 43, 22, 42, 25, 43),
('1NT20CS005', 21, 33, 36, 24, 21, 49, 48, 30),
('1NT20CS006', 35, 33, 30, 44, 40, 50, 27, 38),
('1NT20CS007', 38, 32, 49, 26, 21, 32, 23, 33),
('1NT20CS008', 49, 45, 31, 49, 49, 24, 28, 25),
('1NT20CS009', 41, 29, 47, 37, 48, 25, 46, 29);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(5) NOT NULL,
  `faculty_name` varchar(20) DEFAULT NULL,
  `login_password` varchar(15) DEFAULT '12345'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `login_password`) VALUES
(10001, 'Ananth', '12345'),
(10002, 'Bharathi', '12345'),
(10003, 'Chandana', '12345'),
(10004, 'Divya', '12345'),
(10005, 'Krishnappa', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(15) DEFAULT '12345'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('1NT20CS001', '12345'),
('1NT20CS002', '12345'),
('1NT20CS003', '12345'),
('1NT20CS004', '12345'),
('1NT20CS005', '12345'),
('1NT20CS006', '12345'),
('1NT20CS007', '12345'),
('1NT20CS008', '12345'),
('1NT20CS009', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `branch` varchar(4) DEFAULT NULL,
  `sem` int(2) DEFAULT NULL,
  `sec` char(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(10) DEFAULT '9988776655'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `branch`, `sem`, `sec`, `dob`, `phone`) VALUES
('1NT20CS001', 'Abhishek', 'CSE', 4, 'B', '2002-01-01', '9988776655'),
('1NT20CS002', 'Akarsh', 'CSE', 4, 'B', '2002-02-02', '9988776655'),
('1NT20CS003', 'Akif', 'CSE', 4, 'B', '2002-03-03', '9988776655'),
('1NT20CS004', 'Keerthan', 'CSE', 4, 'B', '2002-04-04', '9988776655'),
('1NT20CS005', 'Nayaz', 'CSE', 4, 'B', '2002-05-05', '9988776655'),
('1NT20CS006', 'Nitin', 'CSE', 4, 'B', '2002-06-06', '9988776655'),
('1NT20CS007', 'Rohan', 'CSE', 4, 'B', '2002-07-07', '9988776655'),
('1NT20CS008', 'Sarji', 'CSE', 4, 'B', '2002-08-08', '9988776655'),
('1NT20CS009', 'Varun', 'CSE', 4, 'B', '2002-09-09', '9988776655');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `branch` varchar(4) DEFAULT NULL,
  `sem` int(2) DEFAULT NULL,
  `sub` varchar(6) DEFAULT NULL,
  `subName` varchar(40) DEFAULT NULL,
  `subCode` varchar(10) DEFAULT NULL,
  `faculty_id` int(5) DEFAULT NULL,
  `classDone` int(3) DEFAULT NULL,
  `totalClass` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`branch`, `sem`, `sub`, `subName`, `subCode`, `faculty_id`, `classDone`, `totalClass`) VALUES
('CSE', 4, 'EM4', 'Engineering Mathematics-4', '18MAT41A', 10001, 25, 40),
('CSE', 4, 'DAA', 'Design and Analysis of Algorithm', '18CS42', 10002, 25, 40),
('CSE', 4, 'DBMS', 'Database Management Systems', '18CS43', 10003, 25, 40),
('CSE', 4, 'OS', 'Operating System', '18CS44', 10004, 25, 40),
('CSE', 4, 'JAVA', 'Application Development using Java', '18CS45', 10005, 25, 40),
('CSE', 4, 'DBMSL', 'Database Management Systems Lab', '18CSL47', 10001, 25, 40),
('CSE', 4, 'DAAL', 'Design and Analysis of Algorithm Lab', '18CSL48', 10002, 25, 40),
('CSE', 4, 'PE', 'Program Elective', '18CSE462', 10003, 25, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
