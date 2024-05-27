-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 27, 2024 at 08:55 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u689561480_VR_Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Emp_ID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `Super_admin` varchar(255) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `Name`, `Emp_ID`, `Password`, `Project`, `Super_admin`, `Date`) VALUES
(1, 'Aayush', 'Raj_001', '123456', 'arc_flash', '', '0000-00-00'),
(2, 'Shelendra', 'Shelendra_0015', '123456', 'arc_flash', '', '0000-00-00'),
(3, 'Admin', 'admin', 'admin', 'arc_flash', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `arc_flash`
--

CREATE TABLE `arc_flash` (
  `id` int(255) NOT NULL,
  `Emp_ID` varchar(255) NOT NULL,
  `Login_Attempt` int(255) NOT NULL,
  `Training_Time` int(255) NOT NULL,
  `Assessment_Time` varchar(255) NOT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arc_flash`
--

INSERT INTO `arc_flash` (`id`, `Emp_ID`, `Login_Attempt`, `Training_Time`, `Assessment_Time`, `Status`, `Date`, `Time`) VALUES
(13, 'inn_0001', 2, 0, '85.73061', 0, '2024-03-27', '00:00:00'),
(14, 'inn_0001', 2, 0, '85.75765', 0, '2024-03-27', '00:00:00'),
(15, 'inn_0001', 2, 0, '85.77409', 0, '2024-03-27', '00:00:00'),
(16, 'inn_0001', 2, 0, '85.7663', 0, '2024-03-27', '00:00:00'),
(17, 'inn_0001', 2, 0, '85.78075', 0, '2024-03-27', '00:00:00'),
(18, 'inn_0001', 2, 0, '85.80782', 0, '2024-03-27', '00:00:00'),
(19, 'inn_0001', 2, 0, '85.81421', 0, '2024-03-27', '00:00:00'),
(20, 'inn_0001', 2, 0, '85.83382', 0, '2024-03-27', '00:00:00'),
(21, 'inn_0001', 2, 0, '85.84682', 0, '2024-03-27', '00:00:00'),
(22, 'inn_0001', 2, 0, '85.87003', 0, '2024-03-27', '00:00:00'),
(23, 'inn_0001', 2, 0, '85.89033', 0, '2024-03-27', '00:00:00'),
(24, 'inn_0001', 2, 0, '85.84038', 0, '2024-03-27', '00:00:00'),
(25, 'inn_0001', 2, 0, '85.87691', 0, '2024-03-27', '00:00:00'),
(26, 'inn_0001', 2, 0, '85.85347', 0, '2024-03-27', '00:00:00'),
(27, 'inn_0001', 2, 0, '85.82105', 0, '2024-03-27', '00:00:00'),
(28, 'inn_0001', 2, 0, '85.88364', 0, '2024-03-27', '00:00:00'),
(29, 'inn_0001', 2, 0, '86.01219', 0, '2024-03-27', '00:00:00'),
(30, 'inn_0001', 2, 0, '85.69157', 0, '2024-03-27', '00:00:00'),
(31, 'inn_0001', 2, 0, '85.8608', 0, '2024-03-27', '00:00:00'),
(32, 'inn_0001', 2, 0, '85.72438', 0, '2024-03-27', '00:00:00'),
(33, 'inn_0001', 2, 0, '85.75087', 0, '2024-03-27', '00:00:00'),
(34, 'inn_0001', 2, 0, '85.74345', 0, '2024-03-27', '00:00:00'),
(35, 'inn_0001', 2, 0, '85.71072', 0, '2024-03-27', '00:00:00'),
(36, 'inn_0001', 2, 0, '85.79353', 0, '2024-03-27', '00:00:00'),
(37, 'inn_0001', 2, 0, '85.91152', 0, '2024-03-27', '00:00:00'),
(38, 'inn_0001', 2, 0, '85.91808', 0, '2024-03-27', '00:00:00'),
(39, 'inn_0001', 2, 0, '85.92433', 0, '2024-03-27', '00:00:00'),
(40, 'inn_0001', 2, 0, '85.89745', 0, '2024-03-27', '00:00:00'),
(41, 'inn_0001', 2, 0, '85.80103', 0, '2024-03-27', '00:00:00'),
(42, 'inn_0001', 2, 0, '85.9372', 0, '2024-03-27', '00:00:00'),
(43, 'inn_0001', 2, 0, '85.95072', 0, '2024-03-27', '00:00:00'),
(44, 'inn_0001', 2, 0, '85.93061', 0, '2024-03-27', '00:00:00'),
(45, 'inn_0001', 2, 0, '85.99922', 0, '2024-03-27', '00:00:00'),
(46, 'inn_0001', 2, 0, '86.0229', 0, '2024-03-27', '00:00:00'),
(47, 'inn_0001', 2, 0, '86.01219', 0, '2024-03-27', '00:00:00'),
(48, 'inn_0001', 2, 0, '86.03383', 0, '2024-03-27', '00:00:00'),
(49, 'inn_0001', 2, 0, '85.99007', 0, '2024-03-27', '00:00:00'),
(50, 'inn_0001', 2, 0, '86.03383', 0, '2024-03-27', '00:00:00'),
(51, 'inn_0001', 2, 0, '86.04529', 0, '2024-03-27', '00:00:00'),
(52, 'inn_0001', 2, 0, '85.95815', 0, '2024-03-27', '00:00:00'),
(53, 'inn_0001', 2, 0, '85.98011', 0, '2024-03-27', '00:00:00'),
(54, 'inn_0001', 2, 0, '85.96535', 0, '2024-03-27', '00:00:00'),
(55, 'inn_0001', 2, 0, '85.94421', 0, '2024-03-27', '00:00:00'),
(56, 'inn_0001', 2, 0, '85.97294', 0, '2024-03-27', '00:00:00'),
(57, 'inn_0001', 2, 0, '125.6204', 0, '2024-03-28', '00:00:00'),
(58, 'inn_0001', 2, 0, '107.2606', 1, '2024-03-28', '00:00:00'),
(59, 'inn_0001', 2, 232, '0', 1, '2024-03-28', '00:00:00'),
(60, 'inn_0001', 2, 232, '0', 1, '2024-03-28', '00:00:00'),
(61, 'inn_0001', 2, 232, '0', 1, '2024-03-28', '00:00:00'),
(62, 'inn_0001', 2, 232, '0', 1, '2024-03-28', '00:00:00'),
(63, 'sharma_0015', 20, 233, '0', 1, '2024-03-28', '00:00:00'),
(64, 'sharma_0015', 20, 0, '38.52872', 0, '2024-03-28', '00:00:00'),
(65, 'sharma_0015', 21, 240, '0', 1, '2024-03-28', '00:00:00'),
(66, 'inn_0011', 8, 233, '0', 1, '2024-03-28', '00:00:00'),
(67, 'inn_0011', 14, 232, '0', 1, '2024-03-28', '17:22:42'),
(68, 'inn_0010', 18, 233, '0', 1, '2024-03-28', '17:32:36'),
(69, 'inn_0010', 18, 0, '321.0892', 0, '2024-03-28', '17:39:40'),
(70, 'inn_0011', 15, 232, '0', 1, '2024-03-28', '17:57:10'),
(71, 'inn_0011', 15, 473, '0', 1, '2024-03-28', '18:03:55'),
(72, '001', 1, 232, '0', 1, '2024-03-28', '00:33:00'),
(73, '001', 1, 0, '115.2634', 0, '2024-03-28', '00:35:00'),
(74, 'inn_0011', 18, 232, '0', 1, '2024-03-28', '00:40:00'),
(75, 'inn_0010', 20, 232, '0', 1, '2024-03-28', '01:00:00'),
(76, 'inn_0011', 21, 233, '0', 1, '2024-03-28', '01:05:00'),
(77, 'inn_0010', 21, 233, '0', 1, '2024-03-28', '01:32:00'),
(78, 'inn_0010', 21, 607, '0', 1, '2024-03-28', '01:32:00'),
(79, 'sharma_0015', 23, 232, '0', 1, '2024-03-28', '02:14:00'),
(80, 'sharma_0015', 23, 0, '290.3808', 0, '2024-03-28', '02:19:00'),
(81, 'sharma_0015', 23, 811, '0', 1, '2024-03-28', '02:23:00'),
(82, 'inn_0010', 26, 249, '0', 1, '2024-03-28', '03:13:00'),
(83, 'inn_0010', 27, 429, '0', 1, '2024-03-28', '03:19:00'),
(84, 'inn_0010', 27, 0, '167.615', 0, '2024-03-28', '03:20:00'),
(85, 'inn_0010', 27, 1012, '0', 1, '2024-03-28', '03:21:00'),
(86, 'inn_0010', 27, 0, '389.1223', 0, '2024-03-28', '03:23:00'),
(87, 'inn_0010', 27, 1859, '0', 1, '2024-03-28', '03:24:00'),
(88, 'inn_0010', 27, 0, '167.4305', 0, '2024-03-28', '03:25:00'),
(89, 'inn_0010', 27, 2433, '0', 1, '2024-03-28', '03:26:00'),
(90, 'inn_0010', 27, 2681, '0', 1, '2024-03-28', '03:27:00'),
(91, 'inn_0010', 27, 3092, '0', 1, '2024-03-28', '03:28:00'),
(92, 'inn_0011', 24, 309, '0', 1, '2024-03-28', '03:34:00'),
(93, 'inn_0011', 25, 304, '0', 1, '2024-03-28', '03:45:00'),
(94, 'inn_0011', 26, 298, '0', 1, '2024-03-28', '03:50:00'),
(95, 'inn_0010', 28, 437, '0', 1, '2024-03-29', '03:55:00'),
(96, 'inn_0011', 27, 309, '0', 1, '2024-03-29', '03:56:00'),
(97, 'inn_0010', 28, 0, '1246.608', 0, '2024-03-29', '04:00:00'),
(98, 'inn_0011', 28, 314, '0', 1, '2024-03-29', '04:00:00'),
(99, 'inn_0010', 28, 2141, '0', 1, '2024-03-29', '04:01:00'),
(100, 'inn_0010', 29, 426, '0', 1, '2024-03-29', '04:17:00'),
(101, 'inn_0011', 29, 310, '0', 1, '2024-03-29', '04:18:00'),
(102, 'inn_0011', 30, 713, '0', 1, '2024-03-29', '04:33:00'),
(103, 'inn_0011', 31, 305, '0', 1, '2024-03-29', '04:38:00'),
(104, 'inn_0011', 32, 307, '0', 1, '2024-03-29', '05:11:00'),
(105, 'inn_0010', 30, 321, '0', 1, '2024-03-29', '05:25:00'),
(106, 'inn_0010', 33, 710, '0', 1, '2024-03-29', '06:33:00'),
(107, 'sharma_0015', 25, 671, '0', 1, '2024-03-29', '06:59:00'),
(108, 'sharma_0015', 25, 0, '247.3524', 1, '2024-03-29', '07:00:00'),
(109, 'sharma_0015', 26, 317, '0', 1, '2024-03-29', '07:03:00'),
(110, 'sharma_0015', 26, 0, '581.6525', 1, '2024-03-29', '07:05:00'),
(111, 'sharma_0015', 27, 300, '0', 1, '2024-03-29', '07:06:00'),
(112, 'sharma_0015', 27, 0, '447.687', 0, '2024-03-29', '07:08:00'),
(113, 'sharma_0015', 28, 323, '0', 1, '2024-03-29', '08:09:00'),
(114, 'sharma_0015', 28, 0, '234.3293', 0, '2024-03-29', '08:10:00'),
(115, 'sharma_0015', 28, 910, '0', 1, '2024-03-29', '08:11:00'),
(116, 'sharma_0015', 28, 0, '218.3223', 1, '2024-03-29', '08:12:00'),
(117, 'sharma_0015', 29, 331, '0', 1, '2024-03-29', '08:39:00'),
(118, 'inn_0011', 43, 398, '0', 1, '2024-03-29', '09:34:00'),
(119, 'sharma_0015', 30, 678, '0', 1, '2024-03-29', '09:51:00'),
(120, 'sharma_0015', 30, 0, '213.9577', 0, '2024-03-29', '09:52:00'),
(121, 'inn_0011', 49, 303, '0', 1, '2024-03-29', '09:52:00'),
(122, 'sharma_0015', 31, 249, '0', 1, '2024-03-29', '10:04:00'),
(123, 'sharma_0015', 31, 0, '46.49109', 0, '2024-03-29', '10:05:00'),
(124, 'sharma_0015', 32, 329, '0', 1, '2024-03-29', '10:27:00'),
(125, 'sharma_0015', 32, 0, '178.6535', 0, '2024-03-29', '10:31:00'),
(126, 'inn_0011', 51, 390, '0', 1, '2024-03-29', '10:47:00'),
(127, 'sharma_0015', 33, 382, '0', 1, '2024-03-29', '10:57:00'),
(128, 'sharma_0015', 33, 0, '475.1542', 1, '2024-03-29', '11:06:00'),
(129, 'inn_0011', 52, 300, '0', 1, '2024-03-29', '11:11:00'),
(130, 'inn_0011', 52, 694, '0', 1, '2024-03-29', '11:12:00'),
(131, 'inn_0011', 52, 932, '0', 1, '2024-03-29', '11:13:00'),
(132, 'inn_0011', 53, 301, '0', 1, '2024-03-29', '11:16:00'),
(133, '0004', 1, 259, '0', 1, '2024-03-29', '11:19:00'),
(134, 'inn_0011', 54, 298, '0', 1, '2024-03-29', '11:20:00'),
(135, '0004', 1, 0, '57.96368', 0, '2024-03-29', '11:24:00'),
(136, 'sharma_0015', 37, 270, '0', 1, '2024-03-29', '12:21:00'),
(137, 'sharma_0015', 37, 0, '195.0273', 0, '2024-03-29', '12:25:00'),
(138, 'sharma_0015', 38, 325, '0', 1, '2024-03-29', '13:41:00'),
(139, 'sharma_0015', 38, 0, '95.73776', 0, '2024-03-29', '13:43:00'),
(140, 'sharma_0015', 40, 308, '0', 1, '2024-03-29', '18:54:00'),
(141, 'sharma_0015', 40, 0, '97.7489', 0, '2024-03-29', '18:56:00'),
(142, 'sharma_0015', 42, 255, '0', 1, '2024-03-29', '19:16:00'),
(143, 'sharma_0015', 42, 0, '217.4802', 1, '2024-03-29', '19:20:00'),
(144, 'sharma_0015', 43, 342, '0', 1, '2024-03-30', '10:51:00'),
(145, 'sharma_0015', 43, 0, '572.4707', 1, '2024-03-30', '11:01:00'),
(146, 'sharma_0015', 44, 569, '0', 1, '2024-03-30', '11:43:00'),
(147, 'sharma_0015', 45, 267, '0', 1, '2024-03-30', '12:08:00'),
(148, 'sharma_0015', 46, 256, '0', 1, '2024-03-30', '12:22:00'),
(149, 'sharma_0015', 46, 0, '215.6519', 1, '2024-03-30', '12:26:00'),
(150, 'sharma_0015', 47, 276, '0', 1, '2024-04-08', '18:40:00'),
(151, 'sharma_0015', 48, 305, '0', 1, '2024-04-09', '10:11:00'),
(152, 'sharma_0015', 48, 0, '242.9684', 0, '2024-04-09', '10:16:00'),
(153, 'sharma_0015', 48, 934, '0', 1, '2024-04-09', '10:21:00'),
(154, 'sharma_0015', 49, 309, '0', 1, '2024-04-09', '11:27:00'),
(155, 'sharma_0015', 49, 0, '132.9556', 0, '2024-04-09', '11:31:00'),
(156, 'sharma_0015', 50, 279, '0', 1, '2024-04-09', '11:38:00'),
(157, 'sharma_0015', 50, 0, '82.86465', 0, '2024-04-09', '11:41:00'),
(158, 'sharma_0015', 52, 289, '0', 1, '2024-04-10', '18:22:00'),
(159, 'sharma_0015', 52, 0, '102.1882', 0, '2024-04-10', '18:25:00'),
(160, 'sharma_0015', 55, 325, '0', 1, '2024-04-11', '12:58:00'),
(161, 'sharma_0015', 70, 250, '0', 1, '2024-04-11', '15:39:00'),
(162, 'sharma_0015', 72, 270, '0', 1, '2024-04-11', '17:49:00'),
(163, 'sharma_0015', 73, 258, '0', 1, '2024-04-11', '18:34:00'),
(164, 'sharma_0015', 81, 309, '0', 1, '2024-04-12', '14:53:00'),
(165, 'sharma_0015', 82, 1901, '0', 1, '2024-04-12', '16:09:00'),
(166, 'inn_0010', 35, 271, '0', 1, '2024-04-12', '17:26:00'),
(167, 'inn_0010', 35, 0, '267.235', 1, '2024-04-12', '17:31:00'),
(168, 'sharma_0015', 85, 297, '0', 1, '2024-04-16', '22:09:00'),
(169, 'sharma_0015', 85, 0, '140.1573', 0, '2024-04-16', '22:12:00'),
(170, 'sharma_0015', 86, 344, '0', 1, '2024-04-19', '10:35:00'),
(171, 'sharma_0015', 86, 0, '512.9069', 0, '2024-04-19', '10:45:00'),
(172, 'inn_0011', 56, 297, '0', 1, '2024-04-22', '18:39:00'),
(173, '109441', 1, 561, '0', 1, '2024-05-15', '12:28:00'),
(174, 'inn_0011', 57, 274, '0', 0, '2024-05-16', '15:46:00'),
(175, 'JB007', 1, 318, '0', 1, '2024-05-24', '10:54:00'),
(176, 'JB007', 1, 0, '150.8193', 0, '2024-05-24', '10:59:00'),
(177, 'JB007', 1, 911, '0', 1, '2024-05-24', '11:09:00'),
(178, 'SHA002', 1, 330, '0', 1, '2024-05-24', '13:01:00'),
(179, 'SHA002', 1, 0, '204.9203', 0, '2024-05-24', '13:05:00'),
(180, 'SHA002', 2, 288, '0', 1, '2024-05-24', '13:23:00'),
(181, 'Part001', 1, 353, '0', 1, '2024-05-24', '13:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Emp_ID` varchar(255) NOT NULL,
  `Project` varchar(255) NOT NULL,
  `Pin` int(25) NOT NULL,
  `TrainingAttempted` tinyint(1) DEFAULT NULL,
  `TotalSessionTime` time NOT NULL,
  `Date` date NOT NULL,
  `Login_Attempts` int(255) NOT NULL,
  `Time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `Name`, `Emp_ID`, `Project`, `Pin`, `TrainingAttempted`, `TotalSessionTime`, `Date`, `Login_Attempts`, `Time`) VALUES
(2, 'Kuldeep sharma', 'sharma_0016', 'arc_flash', 123, 1, '00:00:00', '2024-02-19', 5, '16:22:47'),
(45, 'Sneha', 'sharma_0015', 'arc_flash', 1234, 1, '00:00:00', '2024-02-26', 87, '16:22:47'),
(56, 'deepak', 'inn_0011', 'arc_flash', 1234, 1, '00:00:00', '2024-02-26', 57, '16:22:47'),
(59, 'kuldeep', 'inn_0010', 'arc_flash', 1234, 1, '00:00:00', '2024-04-26', 35, '16:22:47'),
(60, 'shelendra', 'inn_003', 'arc_flash', 2323, 0, '00:00:00', '2024-03-26', 2, '16:22:47'),
(64, 'Gaurav Sir', 'inn_0001', 'arc_flash', 1313, 1, '00:00:00', '2024-03-26', 2, '16:22:47'),
(70, 'deepak8', 'sharma_009', 'arc_flash', 1234, 0, '00:00:00', '2024-03-28', 0, '16:23:15'),
(75, 'deepak5895', '2345645', 'arc_flash', 1523, 0, '00:00:00', '2024-03-29', 0, '03:52:00'),
(76, 'Sanjay', '0004', 'arc_flash', 5566, 1, '00:00:00', '2024-03-29', 1, '10:43:00'),
(77, 'Mihir', 'IL0011', 'arc_flash', 1234, 0, '00:00:00', '2024-03-29', 0, '19:24:00'),
(91, 'Shatakshi', '109441', 'arc_flash', 4321, 1, '00:00:00', '2024-05-15', 2, '12:23:00'),
(92, 'q343q', '234', 'WinchAssebmly_mouda', 2345, 0, '00:00:00', '2024-05-20', 0, '19:08:00'),
(93, 'sdas', 'q234', 'WinchAssebmly_mouda', 3245, 0, '00:00:00', '2024-05-20', 0, '19:08:00'),
(94, 'Shashwat', 'JB007', 'arc_flash', 1234, 1, '00:00:00', '2024-05-24', 1, '10:45:00'),
(95, 'Shaswat Bisoyi', 'SHA002', 'arc_flash', 1234, 1, '00:00:00', '2024-05-24', 2, '12:46:00'),
(96, 'Participant New', 'Part001', 'arc_flash', 1234, 1, '00:00:00', '2024-05-24', 1, '13:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arc_flash`
--
ALTER TABLE `arc_flash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `arc_flash`
--
ALTER TABLE `arc_flash`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
