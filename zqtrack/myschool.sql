-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `cid` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `section_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`cid`, `class_name`, `section_name`) VALUES
(1, 'Class One', 'Section - A'),
(2, 'Class Two', 'Section - A'),
(3, 'Class Three', 'Section - A'),
(4, 'Class Four', 'Section - B'),
(5, 'Class Five', 'Section - B'),
(6, 'Class Six', 'Section - B'),
(7, 'Class Seven', 'Section - C'),
(8, 'Class Eight', 'Section - C'),
(9, 'Class Nine', 'Section - C'),
(10, 'Class Ten', 'Section - C');

-- --------------------------------------------------------

--
-- Table structure for table `class_assign`
--

CREATE TABLE `class_assign` (
  `assign_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_assign`
--

INSERT INTO `class_assign` (`assign_id`, `teacher_name`, `class`, `subject`, `section`) VALUES
(1, 'sajjad Hassan', 'Class Six', 'PHYSICS', 'Section - B'),
(2, 'Ahmed ', 'Class One', 'MATH', 'Section - A'),
(3, 'Asharif', 'Class Three', 'ENGLISH', 'Section - A'),
(4, 'Taha', 'Class Seven', 'P.S.T', 'Section - C'),
(5, 'shah', 'Class Nine', 'CHEMISTRY', 'Section - C'),
(6, 'Aisha Malik', 'Class Five', 'CHEMISTRY', 'Section - B'),
(7, 'Bilal Ahmed', 'Class Seven', 'MATH', 'Section - C'),
(8, 'Sarah Khan', 'Class Ten', 'P.S.T', 'Section - C'),
(9, 'Ali Hassan', 'Class Eight', 'CHEMISTRY', 'Section - C'),
(10, 'Imran Ali', 'Class Four', 'ENGLISH', 'Section - B'),
(11, 'Ahmed Khan', 'Class Three', 'CHEMISTRY', 'Section - A'),
(12, 'Saad Malik', 'Class Nine', 'PHYSICS', 'Section - C'),
(13, 'Mariam Siddiqui', 'Class One', 'ENGLISH', 'Section - A'),
(14, 'Fatima Shah', 'Class Seven', 'MATH', 'Section - C'),
(15, 'Sana Khan', 'Class Ten', 'MATH', 'Section - C');

-- --------------------------------------------------------

--
-- Table structure for table `full_s_attendance`
--

CREATE TABLE `full_s_attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `stdclass` varchar(100) NOT NULL,
  `curr_date` date DEFAULT NULL,
  `attendance_month` varchar(45) NOT NULL,
  `attendance_year` varchar(45) NOT NULL,
  `attentdance` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `full_s_attendance`
--

INSERT INTO `full_s_attendance` (`id`, `student_id`, `stdclass`, `curr_date`, `attendance_month`, `attendance_year`, `attentdance`) VALUES
(18, 6, 'Class Three', '2023-10-22', 'Oct', '2023', 'A'),
(19, 9, 'Class Six', '2023-10-24', 'Oct', '2023', 'L'),
(20, 9, 'Class Six', '2023-10-24', 'Oct', '2023', 'P'),
(21, 4, 'Class Two', '2023-10-25', 'Oct', '2023', 'P'),
(22, 3, 'Class One', '2023-10-25', 'Oct', '2023', 'P'),
(23, 5, 'Class One', '2023-10-25', 'Oct', '2023', 'P'),
(24, 10, 'Class One', '2023-10-25', 'Oct', '2023', 'A'),
(25, 11, 'Class One', '2023-10-25', 'Oct', '2023', 'L'),
(26, 12, 'Class One', '2023-10-25', 'Oct', '2023', 'P'),
(27, 3, 'Class One', '2023-10-01', 'Oct', '2023', 'H'),
(28, 5, 'Class One', '2023-10-01', 'Oct', '2023', 'H'),
(29, 10, 'Class One', '2023-10-01', 'Oct', '2023', 'H'),
(30, 11, 'Class One', '2023-10-01', 'Oct', '2023', 'H'),
(31, 12, 'Class One', '2023-10-01', 'Oct', '2023', 'H'),
(32, 3, 'Class One', '2023-10-08', 'Oct', '2023', 'H'),
(33, 5, 'Class One', '2023-10-08', 'Oct', '2023', 'H'),
(34, 10, 'Class One', '2023-10-08', 'Oct', '2023', 'H'),
(35, 11, 'Class One', '2023-10-08', 'Oct', '2023', 'H'),
(36, 12, 'Class One', '2023-10-08', 'Oct', '2023', 'H'),
(37, 3, 'Class One', '2023-10-15', 'Oct', '2023', 'H'),
(38, 5, 'Class One', '2023-10-15', 'Oct', '2023', 'H'),
(39, 10, 'Class One', '2023-10-15', 'Oct', '2023', 'H'),
(40, 11, 'Class One', '2023-10-15', 'Oct', '2023', 'H'),
(41, 12, 'Class One', '2023-10-15', 'Oct', '2023', 'H'),
(42, 3, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(43, 5, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(44, 10, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(45, 11, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(46, 12, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(47, 3, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(48, 5, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(49, 10, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(50, 11, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(51, 12, 'Class One', '2023-10-22', 'Oct', '2023', 'H'),
(52, 3, 'Class One', '2023-10-29', 'Oct', '2023', 'H'),
(53, 5, 'Class One', '2023-10-29', 'Oct', '2023', 'H'),
(54, 10, 'Class One', '2023-10-29', 'Oct', '2023', 'H'),
(55, 11, 'Class One', '2023-10-29', 'Oct', '2023', 'H'),
(56, 12, 'Class One', '2023-10-29', 'Oct', '2023', 'H'),
(57, 3, 'Class One', '2023-10-02', 'Oct', '2023', 'P'),
(58, 10, 'Class One', '2023-10-02', 'Oct', '2023', 'P'),
(59, 12, 'Class One', '2023-10-02', 'Oct', '2023', 'P'),
(60, 5, 'Class One', '2023-10-02', 'Oct', '2023', 'A'),
(61, 11, 'Class One', '2023-10-02', 'Oct', '2023', 'A'),
(62, 3, 'Class One', '2023-10-03', 'Oct', '2023', 'P'),
(63, 5, 'Class One', '2023-10-03', 'Oct', '2023', 'P'),
(64, 10, 'Class One', '2023-10-03', 'Oct', '2023', 'P'),
(65, 12, 'Class One', '2023-10-03', 'Oct', '2023', 'P'),
(66, 11, 'Class One', '2023-10-03', 'Oct', '2023', 'A'),
(67, 3, 'Class One', '2023-10-04', 'Oct', '2023', 'P'),
(68, 5, 'Class One', '2023-10-04', 'Oct', '2023', 'P'),
(69, 11, 'Class One', '2023-10-04', 'Oct', '2023', 'P'),
(70, 12, 'Class One', '2023-10-04', 'Oct', '2023', 'P'),
(71, 10, 'Class One', '2023-10-04', 'Oct', '2023', 'A'),
(72, 5, 'Class One', '2023-10-05', 'Oct', '2023', 'P'),
(73, 10, 'Class One', '2023-10-05', 'Oct', '2023', 'P'),
(74, 11, 'Class One', '2023-10-05', 'Oct', '2023', 'P'),
(75, 12, 'Class One', '2023-10-05', 'Oct', '2023', 'P'),
(76, 3, 'Class One', '2023-10-05', 'Oct', '2023', 'L'),
(77, 5, 'Class One', '2023-10-06', 'Oct', '2023', 'P'),
(78, 10, 'Class One', '2023-10-06', 'Oct', '2023', 'P'),
(79, 11, 'Class One', '2023-10-06', 'Oct', '2023', 'P'),
(80, 12, 'Class One', '2023-10-06', 'Oct', '2023', 'A'),
(81, 3, 'Class One', '2023-10-06', 'Oct', '2023', 'L'),
(82, 3, 'Class One', '2023-10-07', 'Oct', '2023', 'H'),
(83, 5, 'Class One', '2023-10-07', 'Oct', '2023', 'H'),
(84, 10, 'Class One', '2023-10-07', 'Oct', '2023', 'H'),
(85, 11, 'Class One', '2023-10-07', 'Oct', '2023', 'H'),
(86, 12, 'Class One', '2023-10-07', 'Oct', '2023', 'H'),
(87, 3, 'Class One', '2023-10-14', 'Oct', '2023', 'H'),
(88, 5, 'Class One', '2023-10-14', 'Oct', '2023', 'H'),
(89, 10, 'Class One', '2023-10-14', 'Oct', '2023', 'H'),
(90, 11, 'Class One', '2023-10-14', 'Oct', '2023', 'H'),
(91, 12, 'Class One', '2023-10-14', 'Oct', '2023', 'H'),
(92, 3, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(93, 5, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(94, 10, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(95, 11, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(96, 12, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(97, 3, 'Class One', '2023-10-28', 'Oct', '2023', 'H'),
(98, 5, 'Class One', '2023-10-28', 'Oct', '2023', 'H'),
(99, 10, 'Class One', '2023-10-28', 'Oct', '2023', 'H'),
(100, 11, 'Class One', '2023-10-28', 'Oct', '2023', 'H'),
(101, 12, 'Class One', '2023-10-28', 'Oct', '2023', 'H'),
(102, 10, 'Class One', '2023-10-09', 'Oct', '2023', 'P'),
(103, 11, 'Class One', '2023-10-09', 'Oct', '2023', 'P'),
(104, 12, 'Class One', '2023-10-09', 'Oct', '2023', 'P'),
(105, 3, 'Class One', '2023-10-09', 'Oct', '2023', 'A'),
(106, 5, 'Class One', '2023-10-09', 'Oct', '2023', 'A'),
(107, 3, 'Class One', '2023-10-10', 'Oct', '2023', 'P'),
(108, 11, 'Class One', '2023-10-10', 'Oct', '2023', 'P'),
(109, 12, 'Class One', '2023-10-10', 'Oct', '2023', 'P'),
(110, 5, 'Class One', '2023-10-10', 'Oct', '2023', 'A'),
(111, 10, 'Class One', '2023-10-10', 'Oct', '2023', 'A'),
(112, 3, 'Class One', '2023-10-11', 'Oct', '2023', 'P'),
(113, 5, 'Class One', '2023-10-11', 'Oct', '2023', 'P'),
(114, 10, 'Class One', '2023-10-11', 'Oct', '2023', 'P'),
(115, 11, 'Class One', '2023-10-11', 'Oct', '2023', 'P'),
(116, 12, 'Class One', '2023-10-11', 'Oct', '2023', 'P'),
(117, 3, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(118, 5, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(119, 10, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(120, 11, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(121, 12, 'Class One', '2023-10-21', 'Oct', '2023', 'H'),
(122, 3, 'Class One', '2023-10-12', 'Oct', '2023', 'P'),
(123, 5, 'Class One', '2023-10-12', 'Oct', '2023', 'P'),
(124, 10, 'Class One', '2023-10-12', 'Oct', '2023', 'P'),
(125, 11, 'Class One', '2023-10-12', 'Oct', '2023', 'P'),
(126, 12, 'Class One', '2023-10-12', 'Oct', '2023', 'P'),
(127, 3, 'Class One', '2023-10-13', 'Oct', '2023', 'P'),
(128, 5, 'Class One', '2023-10-13', 'Oct', '2023', 'P'),
(129, 10, 'Class One', '2023-10-13', 'Oct', '2023', 'P'),
(130, 11, 'Class One', '2023-10-13', 'Oct', '2023', 'P'),
(131, 12, 'Class One', '2023-10-13', 'Oct', '2023', 'P'),
(132, 3, 'Class One', '2023-10-16', 'Oct', '2023', 'P'),
(133, 5, 'Class One', '2023-10-16', 'Oct', '2023', 'P'),
(134, 10, 'Class One', '2023-10-16', 'Oct', '2023', 'P'),
(135, 11, 'Class One', '2023-10-16', 'Oct', '2023', 'P'),
(136, 12, 'Class One', '2023-10-16', 'Oct', '2023', 'P'),
(137, 3, 'Class One', '2023-10-17', 'Oct', '2023', 'P'),
(138, 5, 'Class One', '2023-10-17', 'Oct', '2023', 'P'),
(139, 10, 'Class One', '2023-10-17', 'Oct', '2023', 'P'),
(140, 11, 'Class One', '2023-10-17', 'Oct', '2023', 'P'),
(141, 12, 'Class One', '2023-10-17', 'Oct', '2023', 'P'),
(142, 3, 'Class One', '2023-10-18', 'Oct', '2023', 'P'),
(143, 5, 'Class One', '2023-10-18', 'Oct', '2023', 'P'),
(144, 10, 'Class One', '2023-10-18', 'Oct', '2023', 'P'),
(145, 11, 'Class One', '2023-10-18', 'Oct', '2023', 'P'),
(146, 12, 'Class One', '2023-10-18', 'Oct', '2023', 'P'),
(147, 3, 'Class One', '2023-10-19', 'Oct', '2023', 'P'),
(148, 5, 'Class One', '2023-10-19', 'Oct', '2023', 'P'),
(149, 10, 'Class One', '2023-10-19', 'Oct', '2023', 'P'),
(150, 11, 'Class One', '2023-10-19', 'Oct', '2023', 'P'),
(151, 12, 'Class One', '2023-10-19', 'Oct', '2023', 'P'),
(152, 3, 'Class One', '2023-10-20', 'Oct', '2023', 'P'),
(153, 5, 'Class One', '2023-10-20', 'Oct', '2023', 'P'),
(154, 12, 'Class One', '2023-10-20', 'Oct', '2023', 'P'),
(155, 10, 'Class One', '2023-10-20', 'Oct', '2023', 'A'),
(156, 11, 'Class One', '2023-10-20', 'Oct', '2023', 'A'),
(157, 3, 'Class One', '2023-10-23', 'Oct', '2023', 'P'),
(158, 10, 'Class One', '2023-10-23', 'Oct', '2023', 'P'),
(159, 11, 'Class One', '2023-10-23', 'Oct', '2023', 'P'),
(160, 5, 'Class One', '2023-10-23', 'Oct', '2023', 'L'),
(161, 12, 'Class One', '2023-10-23', 'Oct', '2023', 'L'),
(162, 10, 'Class One', '2023-10-24', 'Oct', '2023', 'P'),
(163, 12, 'Class One', '2023-10-24', 'Oct', '2023', 'P'),
(164, 3, 'Class One', '2023-10-24', 'Oct', '2023', 'A'),
(165, 11, 'Class One', '2023-10-24', 'Oct', '2023', 'A'),
(166, 5, 'Class One', '2023-10-24', 'Oct', '2023', 'L'),
(167, 16, 'Class Ten', '2023-10-26', 'Oct', '2023', 'A'),
(168, 3, 'Class One', '2023-10-26', 'Oct', '2023', 'P'),
(169, 5, 'Class One', '2023-10-26', 'Oct', '2023', 'P'),
(170, 10, 'Class One', '2023-10-26', 'Oct', '2023', 'P'),
(171, 11, 'Class One', '2023-10-26', 'Oct', '2023', 'P'),
(172, 12, 'Class One', '2023-10-26', 'Oct', '2023', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(130) NOT NULL,
  `home_phone` varchar(140) NOT NULL,
  `address` varchar(200) NOT NULL,
  `cnic` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`pid`, `name`, `phone`, `home_phone`, `address`, `cnic`) VALUES
(4, 'Arslan Farooq', '03421122345', '11222233', 'Karachi', '42401345671'),
(5, 'Abdul Jabbar', '03217854219', '1112223333', 'Karachi', '42401234571'),
(6, ' Usman Shehzad', '03124576329', '111222333', 'Karachi', '42401224451'),
(7, 'Shahbaz Khan', '03457891021', '113322111', 'Karachi', '4240123451'),
(8, 'Aftab Haq', '03418906542', '444552211', 'Karachi', '4240123471'),
(9, 'Ijaz Ahmed', '03234127904', '3311223333', 'Karachi', '4240123451'),
(10, 'Tariq Mahmood', '03123454321', '11222333', 'Karachi', '424012341'),
(11, 'Asif', '03424457292', 'Pakistan', '14/c orangi town karachi', '666777999'),
(12, 'Ayub', '03424457292', 'Pakistan', '14/c orangi town karachi', '77777777777'),
(13, 'Ahmed', '03424457292', 'Pakistan', '14/c orangi town karachi', '555555555555'),
(14, 'jamal', '03424457292', 'Pakistan', '14/c orangi town karachi', '22222222222222'),
(15, 'Rao', '03424457292', 'Pakistan', '14/c orangi town karachi', '888888888888888'),
(16, 'Khursheed', '03424457292', 'Pakistan', '14/c orangi town karachi', '7777777777'),
(17, 'Jalal', '03424457292', 'Pakistan', '14/c orangi town karachi', '000000000');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `pass`, `image`, `role`) VALUES
(1, 'Taha', 'taha123@gmail.com', '12345', '1679210775461.jpg', 'Admin'),
(3, 'asharif', 'asharif@gmail.com', '12345', '1679210775461.jpg', 'Teacher'),
(8, 'Ahmed', 'ahmed123@gmail.com', '12345', 'images/336988289_167164089495898_6643106885511072346_n.jpg', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `std_fees`
--

CREATE TABLE `std_fees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_fees`
--

INSERT INTO `std_fees` (`id`, `name`, `class`, `fees`) VALUES
(4, 'kashif', 'Class Seven', '2000'),
(5, 'Arslan Farooq', 'Class One', '2000'),
(6, 'Abdul Jabbar', 'Class Two', '3000'),
(7, ' Usman Shehzad', 'Class One', '2000'),
(8, 'Shahbaz Khan', 'Class Three', '3000'),
(9, 'Aftab Haq', 'Class Four', '4000'),
(10, 'Ijaz Ahmed', 'Class Five', '5000'),
(11, 'Tariq Mahmood', 'Class Six', '6000'),
(12, 'Asif', 'Class One', '2000'),
(13, 'Ayub', 'Class One', '2000'),
(14, 'Ahmed', 'Class One', '2000'),
(15, 'jamal', 'Class Seven', '4000'),
(16, 'Rao', 'Class Eight', '5000'),
(17, 'Khursheed', 'Class Nine', '6000'),
(18, 'Jalal', 'Class Ten', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gurdian_name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `std_group` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `admit_date` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `gurdian_name`, `Gender`, `class`, `section`, `std_group`, `image`, `admit_date`, `amount`) VALUES
(3, 'Arslan Farooq', 'Arslan Farooq', 'male', 'Class One', 'Section-A', 'Computer group', 'images/1685892693451.jpg', '2023-09-28 11:20:09am', '2000'),
(4, 'Abdul Jabbar', 'Abdul Jabbar', 'male', 'Class Two', 'Section-A', 'Science group', 'images/1679210775461.jpg', '2023-09-28 11:21:47am', '3000'),
(5, ' Usman Shehzad', ' Usman Shehzad', 'male', 'Class One', '', 'Science group', 'images/1679210775461.jpg', '2023-09-28 11:23:01am', '2000'),
(6, 'Shahbaz Khan', 'Shahbaz Khan', 'male', 'Class Three', 'Section-A', 'Science group', 'images/336988289_167164089495898_6643106885511072346_n.jpg', '2023-09-28 11:24:38am', '3000'),
(7, 'Aftab Haq', 'Aftab Haq', 'male', 'Class Four', 'Section-B', 'Computer group', 'images/Mask_boy_dp_-2599.jpg', '2023-09-28 11:25:41am', '4000'),
(8, 'Ijaz Ahmed', 'Ijaz Ahmed', 'male', 'Class Five', 'Section-B', 'Science group', 'images/1685892693451.jpg', '2023-09-28 11:26:47am', '5000'),
(9, 'Tariq Mahmood', 'Tariq Mahmood', 'male', 'Class Six', 'Section-B', 'Computer group', 'images/1685892693451.jpg', '2023-09-28 11:27:52am', '6000'),
(10, 'Asif', 'Asif', 'male', 'Class One', 'Section-A', 'Science group', 'images/336988289_167164089495898_6643106885511072346_n.jpg', '2023-10-25 01:17:10pm', '2000'),
(11, 'Ayub', 'Ayub', 'male', 'Class One', 'Section-A', 'Science group', 'images/336988289_167164089495898_6643106885511072346_n.jpg', '2023-10-25 01:18:11pm', '2000'),
(12, 'Ahmed', 'Ahmed', 'male', 'Class One', 'Section-A', 'Science group', 'images/336988289_167164089495898_6643106885511072346_n.jpg', '2023-10-25 01:19:03pm', '2000'),
(13, 'jamal', 'jamal', 'male', 'Class Seven', 'Section-B', 'Science group', 'images/351139541_244088411644498_850470.jpg', '2023-10-25 01:22:02pm', '4000'),
(14, 'Rao', 'Rao', 'male', 'Class Eight', 'Section-C', 'Science group', 'images/351139541_244088411644498_850470.jpg', '2023-10-25 01:23:07pm', '5000'),
(15, 'Khursheed', 'Khursheed', 'male', 'Class Nine', 'Section-C', 'Science group', 'images/1685892693451.jpg', '2023-10-25 01:23:55pm', '6000'),
(16, 'Jalal', 'Jalal', 'male', 'Class Ten', 'Section-C', 'Science group', 'images/1679210775461.jpg', '2023-10-25 01:24:45pm', '6000');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `teacher_name`, `education`, `salary`, `Address`) VALUES
(1, 'Ahmed ', 'BSC', '50,000 PKR', 'karachi'),
(2, 'sajjad Hassan', 'Masters', '40,000 PKR', 'karachi'),
(3, 'Asharif', 'M.COM', '35,000 PKR', 'karachi'),
(4, 'Taha', 'MATRIC', '45,000 PKR', 'karachi'),
(5, 'shah', 'BSC', '35,000 PKR', 'Karachi'),
(7, 'Aisha Malik', 'BSC', '45,000 PKR', 'Karachi'),
(8, 'Bilal Ahmed', 'BSC', '45,000 PKR', 'Karachi'),
(9, 'Sarah Khan', 'INTERMIDIATE', '30,000 PKR', 'Karachi'),
(10, 'Imran Ali', 'PHD', '50,000 PKR', 'Karachi'),
(11, 'Ali Hassan', 'MATRIC', '30,000 PKR', 'Karachi'),
(12, 'Ahmed Khan', 'MASTER', '45,000 PKR', 'Karachi'),
(13, 'Saad Malik', 'INTERMIDIATE', '40,000 PKR', 'Karachi'),
(14, 'Mariam Siddiqui', 'BSC', '40,000 PKR', 'Karachi'),
(15, 'Fatima Shah', 'BSC', '50,000 PKR', 'Karachi'),
(16, 'Sana Khan', 'PHD', '50,000 PKR', 'Karachi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `class_assign`
--
ALTER TABLE `class_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `full_s_attendance`
--
ALTER TABLE `full_s_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_fees`
--
ALTER TABLE `std_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class_assign`
--
ALTER TABLE `class_assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `full_s_attendance`
--
ALTER TABLE `full_s_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `std_fees`
--
ALTER TABLE `std_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
