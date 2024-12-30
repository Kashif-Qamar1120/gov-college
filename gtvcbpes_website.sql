-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 02:43 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtvcbpes_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `status`, `created_at`) VALUES
(1, 'GTVC BOYS PESHAWAR', 'admin@gtvcbpeshawar.com', 'admin@gtvcbpeshawar2024', 1, '2024-03-22 21:30:16');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_desc` varchar(50) NOT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `image`, `c_name`, `c_desc`, `category`) VALUES
(1, 'mining.jpg', 'Mining', '<p>The Mining Engineering course focuses on the ex', NULL),
(2, 'elect.jpg', 'Electrical', '<p>The Electrical Engineering diploma offers stude', NULL),
(3, 'telecom.jpg', 'Telecommunication', '<p>The Telecommunication course at our institute p', NULL),
(4, 'dit.jpg', 'Diploma in Information Technology (DIT)', '<p>The DIT program provides practical knowledge in', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `status`, `created_at`) VALUES
(35, 'Admission Open', '<p>Admission Open and limited Seats are available.</p>', 1, '2023-09-04 07:40:18'),
(45, ' Trainee Report of Atlas Honda  ', '', 1, '2024-02-20 04:27:45'),
(46, 'Job Fair 2024 of GTVC (B) Gulbahar, Peshawar ', '', 1, '2024-04-23 08:44:40'),
(47, 'Job Fair 2024 of GTVC (B) Gulbahar, Peshawar ', '', 1, '2024-04-23 08:44:42'),
(49, 'An Orientation Session at GTVC (B) Gulbahar, Peshawar', '<p>The orientation session at GTVC (B) Gulbahar, Peshawar provided a comprehensive overview of the digital skills program facilitated by Empowerment through Creative Integration, in collaboration with the United Nations Development Programme (UNDP). The initiative aims to equip youth with essential digital competencies to thrive in the modern landscape of technology-driven industries.</p>', 1, '2024-04-29 08:33:47'),
(50, ' Ú¯ÙˆØ±Ù†Ù…Ù†Ù¹ Ù¹ÛŒÚ©Ù†ÛŒÚ©Ù„ Ø§ÛŒÙ†Úˆ ÙˆÙˆÚ©ÛŒØ´Ù†Ù„ Ø³Ù†Ù¹Ø± (Ø¨ÙˆØ§Ø¦Ø²) Ú¯Ù„Ø¨ÛØ§Ø±ØŒ Ù¾Ø´Ø§ÙˆØ± Ù…ÛŒÚº Ø¬Ø§Ø¨ ÙÛŒØ¦Ø± Ú©Ø§ Ø§Ù†Ø¹Ù‚Ø§Ø¯', '<p>&nbsp;Ú¯ÙˆØ±Ù†Ù…Ù†Ù¹ Ù¹ÛŒÚ©Ù†ÛŒÚ©Ù„ Ø§ÛŒÙ†Úˆ ÙˆÙˆÚ©ÛŒØ´Ù†Ù„ Ø³Ù†Ù¹Ø± (Ø¨ÙˆØ§Ø¦Ø²) Ú¯Ù„Ø¨ÛØ§Ø±ØŒ Ù¾Ø´Ø§ÙˆØ± Ù…ÛŒÚº Ø¬Ø§Ø¨ ÙÛŒØ¦Ø± Ú©Ø§ Ø§Ù†Ø¹Ù‚Ø§Ø¯</p>', 1, '2024-12-26 09:06:40'),
(51, 'Auto Mechanical Students Visit to Abid CNG 24 june, 2023', '', 1, '2024-05-02 04:48:49'),
(52, 'Basic Computer Training held at GTVC (B) at 18 July, 2023', '', 1, '2024-05-02 04:49:31'),
(53, 'Support Staff Perfforming Special Task of the Centre', '', 1, '2024-05-02 04:50:38'),
(54, 'General Electrician Trainees during Training Session ', '', 1, '2024-05-02 04:51:41'),
(55, 'Mr. Fayaz Ali Retirement Carmony was held dated 23 March, 2022 at GTVC (B) Gulbahar.', '', 1, '2024-05-02 04:55:25'),
(56, 'IMC 15th Meeting was held dated 27 May, 2023', '', 1, '2024-05-02 04:56:46'),
(57, 'CBT Level-II Plumbing Trade trainees performing practical training dated 04 May, 2024.', '', 1, '2024-05-06 07:38:04');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `picture_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`picture_id`, `event_id`, `picture`, `status`, `created_at`) VALUES
(1, 1, 'Event1.jpg', 1, '2023-03-17 10:58:25'),
(2, 2, 'Event1.jpg', 1, '2024-12-30 09:02:32'),
(3, 2, 'imc-1.jpg', 1, '2023-03-17 10:59:06'),
(4, 2, 'WhatsApp Image 2023-05-27 at 10.17.59 AM.jpeg', 1, '2024-01-30 06:33:28'),
(5, 3, 'main-3.jpg', 1, '2023-03-17 11:02:37'),
(6, 3, '', 1, '2024-01-15 15:28:49'),
(7, 4, 'Event1.jpg', 1, '2023-03-17 11:02:56'),
(8, 4, 'Event2.jpg', 1, '2023-03-17 11:02:56'),
(9, 5, 'imc-1.jpg', 1, '2023-03-17 11:03:15'),
(10, 5, 'WhatsApp Image 2023-01-21 at 12.39.39 PM.jpeg', 1, '2023-05-27 05:40:23'),
(11, 6, 'main.jpg', 1, '2023-03-17 11:03:53'),
(12, 6, 'main-2.jpg', 1, '2023-03-17 11:03:53'),
(13, 7, 'jummah- (1).jpg', 1, '2023-03-17 11:39:59'),
(14, 7, 'jummah-.jpg', 1, '2023-03-17 11:39:59'),
(15, 8, 'images (2).jpeg', 1, '2023-03-17 15:11:38'),
(16, 8, 'images (1).jpeg', 1, '2023-03-17 15:11:38'),
(17, 9, 'WhatsApp Image 2023-02-07 at 12.19.15 PM.jpeg', 1, '2023-03-25 06:02:59'),
(18, 9, 'WhatsApp Image 2023-02-07 at 12.19.16 PM (1).jpeg', 1, '2023-03-25 06:02:59'),
(19, 9, 'WhatsApp Image 2023-02-07 at 12.19.16 PM.jpeg', 1, '2023-03-25 06:02:59'),
(20, 9, 'WhatsApp Image 2023-02-07 at 12.19.18 PM (1).jpeg', 1, '2023-03-25 06:02:59'),
(21, 9, 'WhatsApp Image 2023-02-07 at 12.19.18 PM.jpeg', 1, '2023-03-25 06:02:59'),
(22, 10, '5007cd39-0cce-45b5-b031-8cb24f873980.jpg', 1, '2023-03-25 06:10:57'),
(23, 10, 'WhatsApp Image 2023-02-22 at 9.25.52 AM.jpeg', 1, '2023-03-25 06:10:57'),
(24, 10, 'WhatsApp Image 2023-02-22 at 10.37.21 AM.jpeg', 1, '2023-03-25 06:10:57'),
(25, 11, '5007cd39-0cce-45b5-b031-8cb24f873980.jpg', 1, '2023-03-25 06:11:17'),
(26, 11, 'WhatsApp Image 2023-02-22 at 9.25.52 AM.jpeg', 1, '2023-03-25 06:11:17'),
(27, 11, 'WhatsApp Image 2023-02-22 at 10.37.21 AM.jpeg', 1, '2023-03-25 06:11:17'),
(28, 12, 'WhatsApp Image 2023-03-21 at 2.32.18 PM (1).jpeg', 1, '2023-03-25 06:26:02'),
(29, 12, 'WhatsApp Image 2023-03-21 at 2.32.18 PM (2).jpeg', 1, '2023-03-25 06:20:30'),
(30, 12, 'WhatsApp Image 2023-03-25 at 11.17.28 AM.jpeg', 1, '2023-03-25 06:20:30'),
(31, 13, 'WhatsApp Image 2023-03-25 at 11.22.56 AM.jpeg', 1, '2023-03-25 06:33:16'),
(32, 13, 'WhatsApp Image 2023-03-25 at 11.22.59 AM.jpeg', 1, '2023-03-25 06:33:16'),
(33, 13, 'WhatsApp Image 2023-03-25 at 11.23.02 AM.jpeg', 1, '2023-03-25 06:33:16'),
(34, 13, 'WhatsApp Image 2023-03-25 at 11.23.03 AM.jpeg', 1, '2023-03-25 06:33:16'),
(35, 13, 'WhatsApp Image 2023-03-25 at 11.30.21 AM.jpeg', 1, '2023-03-25 06:33:16'),
(36, 13, 'WhatsApp Image 2023-03-25 at 11.30.48 AM.jpeg', 1, '2023-03-25 06:33:16'),
(37, 14, 'WhatsApp Image 2023-03-25 at 11.22.56 AM.jpeg', 1, '2023-03-25 06:35:43'),
(38, 14, 'WhatsApp Image 2023-03-25 at 11.22.59 AM.jpeg', 1, '2023-03-25 06:35:43'),
(39, 14, 'WhatsApp Image 2023-03-25 at 11.23.01 AM.jpeg', 1, '2023-03-25 06:35:43'),
(40, 14, 'WhatsApp Image 2023-03-25 at 11.23.03 AM.jpeg', 1, '2023-03-25 06:35:43'),
(41, 14, 'WhatsApp Image 2023-03-25 at 11.30.21 AM.jpeg', 1, '2023-03-25 06:35:43'),
(42, 14, 'WhatsApp Image 2023-03-25 at 11.30.48 AM.jpeg', 1, '2023-03-25 06:35:43'),
(43, 15, 'WhatsApp Image 2023-05-27 at 10.17.59 AM (1).jpeg', 1, '2023-05-27 05:39:56'),
(44, 15, 'WhatsApp Image 2023-05-27 at 10.18.00 AM.jpeg', 1, '2023-05-27 05:39:56'),
(45, 15, 'WhatsApp Image 2023-05-27 at 10.18.01 AM.jpeg', 1, '2023-05-27 05:39:56'),
(46, 16, 'WhatsApp Image 2023-05-25 at 6.07.01 PM.jpeg', 1, '2023-05-27 05:43:34'),
(47, 16, 'WhatsApp Image 2023-05-27 at 10.19.28 AM.jpeg', 1, '2023-05-27 05:43:34'),
(48, 16, 'WhatsApp Image 2023-05-27 at 10.19.30 AM.jpeg', 1, '2023-05-27 05:43:34'),
(49, 16, 'WhatsApp Image 2023-05-27 at 10.19.31 AM.jpeg', 1, '2023-05-27 05:43:34'),
(50, 16, 'WhatsApp Image 2023-05-27 at 10.19.33 AM.jpeg', 1, '2023-05-27 05:43:34'),
(51, 17, '', 1, '2023-05-27 05:48:30'),
(52, 18, 'WhatsApp Image 2023-04-01 at 6.08.43 PM (1).jpeg', 1, '2023-05-27 06:01:50'),
(53, 18, 'WhatsApp Image 2023-04-01 at 6.08.43 PM.jpeg', 1, '2023-05-27 06:01:50'),
(54, 18, 'WhatsApp Image 2023-04-01 at 6.08.44 PM.jpeg', 1, '2023-05-27 06:01:50'),
(55, 18, 'WhatsApp Image 2023-04-01 at 6.08.46 PM (1).jpeg', 1, '2023-05-27 06:01:50'),
(56, 18, 'WhatsApp Image 2023-04-01 at 6.08.53 PM.jpeg', 1, '2023-05-27 06:01:50'),
(57, 18, 'WhatsApp Image 2023-04-01 at 6.08.57 PM.jpeg', 1, '2023-05-27 06:01:50'),
(58, 18, 'WhatsApp Image 2023-04-01 at 6.08.58 PM.jpeg', 1, '2023-05-27 06:01:50'),
(59, 18, 'WhatsApp Image 2023-04-01 at 6.08.59 PM.jpeg', 1, '2023-05-27 06:01:50'),
(60, 18, 'WhatsApp Image 2023-04-01 at 6.09.10 PM.jpeg', 1, '2023-05-27 06:01:50'),
(61, 18, 'WhatsApp Image 2023-04-01 at 6.09.18 PM.jpeg', 1, '2023-05-27 06:01:50'),
(62, 18, 'WhatsApp Image 2023-04-19 at 11.48.00 AM.jpeg', 1, '2023-05-27 06:01:50'),
(63, 18, 'WhatsApp Image 2023-05-16 at 11.43.30 AM (1).jpeg', 1, '2023-05-27 06:01:50'),
(64, 18, 'WhatsApp Image 2023-05-16 at 11.43.35 AM.jpeg', 1, '2023-05-27 06:01:50'),
(65, 18, 'WhatsApp Image 2023-05-19 at 11.38.10 AM (1).jpeg', 1, '2023-05-27 06:01:50'),
(66, 18, 'WhatsApp Image 2023-05-19 at 11.38.11 AM.jpeg', 1, '2023-05-27 06:01:50'),
(67, 18, 'WhatsApp Image 2023-05-19 at 11.43.48 AM.jpeg', 1, '2023-05-27 06:01:50'),
(68, 18, 'WhatsApp Image 2023-05-23 at 12.51.16 PM (1).jpeg', 1, '2023-05-27 06:01:50'),
(69, 19, 'WhatsApp Image 2023-05-27 at 11.13.08 AM.jpeg', 1, '2023-05-27 06:30:39'),
(70, 19, 'WhatsApp Image 2023-05-27 at 11.15.39 AM.jpeg', 1, '2023-05-27 06:30:39'),
(71, 19, 'WhatsApp Image 2023-05-27 at 11.20.52 AM.jpeg', 1, '2023-05-27 06:30:39'),
(72, 19, 'WhatsApp Image 2023-05-27 at 11.21.44 AM.jpeg', 1, '2023-05-27 06:30:39'),
(73, 19, 'WhatsApp Image 2023-05-27 at 11.22.42 AM.jpeg', 1, '2023-05-27 06:30:39'),
(74, 19, 'WhatsApp Image 2023-05-27 at 11.22.45 AM.jpeg', 1, '2023-05-27 06:30:39'),
(75, 19, 'WhatsApp Image 2023-05-27 at 11.22.50 AM.jpeg', 1, '2023-05-27 06:30:39'),
(76, 20, 'WhatsApp Image 2023-01-21 at 12.39.39 PM.jpeg', 1, '2023-05-27 06:40:21'),
(77, 20, 'WhatsApp Image 2023-01-21 at 12.39.42 PM (1).jpeg', 1, '2023-05-27 06:40:21'),
(78, 20, 'WhatsApp Image 2023-01-21 at 12.39.42 PM.jpeg', 1, '2023-05-27 06:40:22'),
(79, 20, 'WhatsApp Image 2023-01-21 at 12.39.43 PM.jpeg', 1, '2023-05-27 06:40:22'),
(80, 20, 'WhatsApp Image 2023-01-21 at 12.39.45 PM (1).jpeg', 1, '2023-05-27 06:40:22'),
(81, 20, 'WhatsApp Image 2023-01-21 at 12.39.45 PM.jpeg', 1, '2023-05-27 06:40:22'),
(82, 21, 'adambypass.jpg', 1, '2024-02-04 02:46:36'),
(83, 22, 'WhatsApp Image 2023-06-13 at 12.32.06 PM.jpeg', 1, '2023-06-16 06:42:02'),
(84, 22, 'WhatsApp Image 2023-06-13 at 12.40.16 PM.jpeg', 1, '2023-06-16 06:42:02'),
(85, 22, 'WhatsApp Image 2023-06-13 at 12.40.17 PM.jpeg', 1, '2023-06-16 06:42:02'),
(86, 23, 'WhatsApp Image 2023-06-16 at 11.50.58 AM (1)6.jpeg', 1, '2023-06-16 07:01:47'),
(87, 23, 'WhatsApp Image 2023-06-16 at 11.50.59 AM.jpeg', 1, '2023-06-16 07:01:47'),
(88, 23, 'WhatsApp Image 2023-06-16 at 11.51.01 AM.jpeg', 1, '2023-06-16 07:01:47'),
(89, 24, 'WhatsApp Image 2023-06-17 at 9.11.34 AM.jpeg', 1, '2023-06-17 04:35:13'),
(90, 24, 'WhatsApp Image 2023-06-17 at 9.11.37 AM.jpeg', 1, '2023-06-17 04:35:13'),
(91, 24, 'WhatsApp Image 2023-06-17 at 9.11.39 AM.jpeg', 1, '2023-06-17 04:35:13'),
(92, 25, 'WhatsApp Image 2023-06-26 at 9.26.54 AM.jpeg', 1, '2023-06-26 07:09:45'),
(93, 25, 'WhatsApp Image 2023-06-26 at 9.27.28 AM (1).jpeg', 1, '2023-06-26 07:09:45'),
(94, 25, 'WhatsApp Image 2023-06-26 at 9.27.28 AM.jpeg', 1, '2023-06-26 07:09:45'),
(95, 25, 'WhatsApp Image 2023-06-26 at 9.27.29 AM (1).jpeg', 1, '2023-06-26 07:09:45'),
(96, 25, 'WhatsApp Image 2023-06-26 at 9.27.29 AM.jpeg', 1, '2023-06-26 07:09:45'),
(97, 26, 'WhatsApp Image 2023-06-20 at 1.05.30 PM.jpeg', 1, '2023-06-26 07:13:44'),
(98, 26, 'WhatsApp Image 2023-06-20 at 1.05.31 PM.jpeg', 1, '2023-06-26 07:13:44'),
(99, 26, 'WhatsApp Image 2023-06-20 at 1.05.32 PM.jpeg', 1, '2023-06-26 07:13:44'),
(100, 26, 'WhatsApp Image 2023-06-20 at 1.05.35 PM (1).jpeg', 1, '2023-06-26 07:13:44'),
(101, 26, 'WhatsApp Image 2023-06-20 at 1.05.39 PM.jpeg', 1, '2023-06-26 07:13:44'),
(102, 26, 'WhatsApp Image 2023-06-20 at 1.05.41 PM.jpeg', 1, '2023-06-26 07:13:44'),
(103, 26, 'WhatsApp Image 2023-06-20 at 1.05.43 PM.jpeg', 1, '2023-06-26 07:13:44'),
(104, 27, 'WhatsApp Image 2023-06-26 at 11.45.01 AM.jpeg', 1, '2023-06-26 07:14:47'),
(105, 27, 'WhatsApp Image 2023-06-26 at 11.45.02 AM.jpeg', 1, '2023-06-26 07:14:47'),
(106, 27, 'WhatsApp Image 2023-06-26 at 11.45.03 AM.jpeg', 1, '2023-06-26 07:14:47'),
(107, 28, 'WhatsApp Image 2023-06-26 at 11.56.52 AM.jpeg', 1, '2023-06-26 07:16:07'),
(108, 28, 'WhatsApp Image 2023-06-26 at 11.56.49 AM.jpeg', 1, '2023-06-26 07:16:07'),
(109, 28, 'WhatsApp Image 2023-06-26 at 11.56.50 AM.jpeg', 1, '2023-06-26 07:16:07'),
(110, 28, 'WhatsApp Image 2023-06-26 at 11.56.51 AM (1).jpeg', 1, '2023-06-26 07:16:07'),
(111, 29, 'WhatsApp Image 2023-07-22 at 11.08.14 AM (1).jpeg', 1, '2023-07-22 06:18:32'),
(112, 29, 'WhatsApp Image 2023-07-22 at 11.08.20 AM.jpeg', 1, '2023-07-22 06:18:32'),
(113, 29, 'WhatsApp Image 2023-07-22 at 11.08.22 AM.jpeg', 1, '2023-07-22 06:18:32'),
(114, 30, 'WhatsApp Image 2023-07-22 at 11.07.52 AM.jpeg', 1, '2023-07-22 06:21:50'),
(115, 30, 'WhatsApp Image 2023-07-22 at 11.08.04 AM.jpeg', 1, '2023-07-22 06:21:50'),
(116, 30, 'WhatsApp Image 2023-07-22 at 11.08.18 AM.jpeg', 1, '2023-07-22 06:21:50'),
(117, 30, 'WhatsApp Image 2023-07-22 at 11.08.25 AM.jpeg', 1, '2023-07-22 06:21:50'),
(118, 31, 'WhatsApp Image 2023-07-22 at 11.09.11 AM.jpeg', 1, '2023-07-22 06:23:54'),
(119, 31, 'WhatsApp Image 2023-07-22 at 11.09.13 AM.jpeg', 1, '2023-07-22 06:23:54'),
(120, 31, 'WhatsApp Image 2023-07-22 at 11.09.14 AM.jpeg', 1, '2023-07-22 06:23:54'),
(121, 31, 'WhatsApp Image 2023-07-22 at 11.09.17 AM.jpeg', 1, '2023-07-22 06:23:54'),
(122, 32, 'IMG_20230812_094449492.jpg', 1, '2023-08-22 03:49:01'),
(123, 32, 'IMG_20230812_095555140.jpg', 1, '2023-08-22 03:49:01'),
(124, 32, 'IMG_20230812_101937222.jpg', 1, '2023-08-22 03:49:01'),
(125, 32, 'IMG_20230812_104703888.jpg', 1, '2023-08-22 03:49:02'),
(126, 33, 'WhatsApp Image 2023-07-22 at 9.09.06 AM.jpeg', 1, '2023-08-22 03:52:30'),
(127, 33, 'WhatsApp Image 2023-07-22 at 9.09.07 AM (1).jpeg', 1, '2023-08-22 03:52:30'),
(128, 33, 'WhatsApp Image 2023-07-22 at 9.09.07 AM.jpeg', 1, '2023-08-22 03:52:30'),
(129, 33, 'WhatsApp Image 2023-07-22 at 9.09.08 AM (1).jpeg', 1, '2023-08-22 03:52:30'),
(130, 34, 'WhatsApp Image 2023-08-01 at 7.59.29 PM.jpeg', 1, '2023-08-22 03:55:27'),
(131, 34, 'WhatsApp Image 2023-08-01 at 7.59.30 PM.jpeg', 1, '2023-08-22 03:55:27'),
(132, 35, 'WhatsApp Image 2023-08-16 at 12.19.27 PM.jpeg', 1, '2024-12-30 11:56:47'),
(133, 36, 'WhatsApp Image 2023-09-18 at 1.11.43 PM (1).jpeg', 1, '2023-09-18 08:36:53'),
(134, 36, 'WhatsApp Image 2023-09-18 at 1.11.43 PM.jpeg', 1, '2023-09-18 08:36:53'),
(135, 36, 'WhatsApp Image 2023-09-18 at 1.12.07 PM.jpeg', 1, '2023-09-18 08:36:53'),
(136, 37, '', 1, '2023-11-08 05:53:54'),
(137, 38, 'Plumbing Training 07 Nov 2023 01.jpeg', 1, '2023-11-08 05:59:41'),
(138, 38, 'Plumbing Training 07 Nov 2023 03.jpeg', 1, '2023-11-08 05:59:41'),
(139, 39, 'Motorcycle Interview images.png', 1, '2023-11-18 07:37:09'),
(140, 40, 'WhatsApp Image 2023-12-12 at 11.00.01 AM (1).jpeg', 1, '2023-12-16 07:40:54'),
(141, 41, 'WhatsApp Image 2023-12-13 at 1.31.27 PM.jpeg', 1, '2023-12-16 07:41:59'),
(142, 43, 'hh.png', 1, '2024-01-26 07:10:05'),
(143, 44, 'WhatsApp Image 2024-01-30 at 10.00.43 AM.jpeg', 1, '2024-12-26 08:05:31'),
(144, 44, 'WhatsApp Image 2024-01-30 at 10.00.46 AM (1).jpeg', 1, '2024-12-26 08:05:08'),
(145, 44, 'WhatsApp Image 2024-01-30 at 10.00.46 AM.jpeg', 1, '2024-12-26 08:05:55'),
(146, 44, 'WhatsApp Image 2024-01-30 at 10.00.47 AM (1).jpeg', 1, '2024-01-30 05:23:00'),
(147, 44, 'WhatsApp Image 2024-01-30 at 10.00.47 AM.jpeg', 1, '2024-01-30 05:23:00'),
(148, 45, 'Event1.jpg', 1, '2024-12-26 08:03:10'),
(149, 46, 'WhatsApp Image 2024-04-22 at 8.53.46 PM.jpeg', 1, '2024-04-23 08:44:40'),
(150, 47, 'WhatsApp Image 2024-04-22 at 8.53.46 PM.jpeg', 1, '2024-04-23 08:44:42'),
(151, 48, 'WhatsApp Image 2024-04-22 at 8.53.46 PM.jpeg', 1, '2024-04-23 08:45:14'),
(152, 49, 'WhatsApp Image 2024-04-27 at 11.09.11 AM (1).jpeg', 1, '2024-04-29 08:33:47'),
(153, 49, 'WhatsApp Image 2024-04-27 at 11.09.11 AM.jpeg', 1, '2024-04-29 08:33:47'),
(154, 49, 'WhatsApp Image 2024-04-27 at 11.09.13 AM.jpeg', 1, '2024-04-29 08:33:47'),
(155, 49, 'WhatsApp Image 2024-04-27 at 11.09.15 AM.jpeg', 1, '2024-04-29 08:33:47'),
(156, 49, 'WhatsApp Image 2024-04-27 at 11.09.17 AM.jpeg', 1, '2024-04-29 08:33:47'),
(157, 50, '438680969_340434442383688_5242850088886139633_n.jpg', 1, '2024-04-29 08:39:33'),
(158, 50, '438706646_340434695716996_1971046584897398707_n.jpg', 1, '2024-04-29 08:39:33'),
(159, 50, '438763558_340434762383656_8262858974971388500_n.jpg', 1, '2024-04-29 08:39:33'),
(160, 50, '438821192_340434649050334_5999725027395113759_n.jpg', 1, '2024-04-29 08:39:33'),
(161, 50, '439734653_340435035716962_2069780712807149129_n.jpg', 1, '2024-04-29 08:39:33'),
(162, 50, '439848653_340435025716963_8294331551600633681_n.jpg', 1, '2024-04-29 08:39:33'),
(163, 50, 'WhatsApp Image 2024-04-24 at 4.48.38 PM.jpeg', 1, '2024-04-29 08:39:33'),
(164, 50, 'WhatsApp Image 2024-04-24 at 8.28.06 PM.jpeg', 1, '2024-04-29 08:39:33'),
(165, 50, 'WhatsApp Image 2024-04-25 at 8.49.22 AM.jpeg', 1, '2024-04-29 08:39:33'),
(166, 51, 'WhatsApp Image 2023-06-26 at 9.26.54 AM.jpeg', 1, '2024-05-02 04:48:49'),
(167, 51, 'WhatsApp Image 2023-06-26 at 9.27.28 AM (1).jpeg', 1, '2024-05-02 04:48:49'),
(168, 51, 'WhatsApp Image 2023-06-26 at 9.27.28 AM.jpeg', 1, '2024-05-02 04:48:49'),
(169, 51, 'WhatsApp Image 2023-06-26 at 9.27.29 AM (1).jpeg', 1, '2024-05-02 04:48:49'),
(170, 51, 'WhatsApp Image 2023-06-26 at 9.27.29 AM.jpeg', 1, '2024-05-02 04:48:49'),
(171, 52, 'WhatsApp Image 2023-07-22 at 11.09.11 AM.jpeg', 1, '2024-05-02 04:49:31'),
(172, 52, 'WhatsApp Image 2023-07-22 at 11.09.13 AM.jpeg', 1, '2024-05-02 04:49:31'),
(173, 52, 'WhatsApp Image 2023-07-22 at 11.09.14 AM.jpeg', 1, '2024-05-02 04:49:31'),
(174, 52, 'WhatsApp Image 2023-07-22 at 11.09.17 AM.jpeg', 1, '2024-05-02 04:49:31'),
(175, 53, 'WhatsApp Image 2023-07-22 at 11.08.30 AM.jpeg', 1, '2024-05-02 04:50:38'),
(176, 53, 'WhatsApp Image 2023-07-22 at 11.08.32 AM.jpeg', 1, '2024-05-02 04:50:38'),
(177, 53, 'WhatsApp Image 2023-07-22 at 11.08.34 AM.jpeg', 1, '2024-05-02 04:50:38'),
(178, 53, 'WhatsApp Image 2023-07-22 at 11.08.39 AM.jpeg', 1, '2024-05-02 04:50:38'),
(179, 53, 'WhatsApp Image 2023-07-22 at 11.08.46 AM.jpeg', 1, '2024-05-02 04:50:38'),
(180, 53, 'WhatsApp Image 2023-07-22 at 11.09.00 AM.jpeg', 1, '2024-05-02 04:50:38'),
(181, 53, 'WhatsApp Image 2023-07-22 at 11.09.04 AM.jpeg', 1, '2024-05-02 04:50:38'),
(182, 53, 'WhatsApp Image 2023-07-22 at 11.09.05 AM.jpeg', 1, '2024-05-02 04:50:38'),
(183, 53, 'WhatsApp Image 2023-07-22 at 11.09.08 AM.jpeg', 1, '2024-05-02 04:50:38'),
(184, 54, 'WhatsApp Image 2023-05-23 at 10.30.47 PM.jpeg', 1, '2024-05-02 04:51:41'),
(185, 54, 'WhatsApp Image 2023-05-23 at 10.30.48 PM.jpeg', 1, '2024-05-02 04:51:41'),
(186, 55, 'WhatsApp Image 2023-03-25 at 11.30.48 AM.jpeg', 1, '2024-05-02 04:55:25'),
(187, 55, 'WhatsApp Image 2023-03-22 at 1.04.34 PM.jpeg', 1, '2024-05-02 04:55:25'),
(188, 55, 'WhatsApp Image 2023-03-22 at 1.04.36 PM.jpeg', 1, '2024-05-02 04:55:25'),
(189, 55, 'WhatsApp Image 2023-03-22 at 1.04.39 PM.jpeg', 1, '2024-05-02 04:55:25'),
(190, 55, 'WhatsApp Image 2023-03-22 at 1.04.42 PM.jpeg', 1, '2024-05-02 04:55:25'),
(191, 55, 'WhatsApp Image 2023-03-22 at 1.04.54 PM.jpeg', 1, '2024-05-02 04:55:26'),
(192, 55, 'WhatsApp Image 2023-03-25 at 11.30.21 AM.jpeg', 1, '2024-05-02 04:55:26'),
(193, 56, 'WhatsApp Image 2023-05-27 at 10.18.00 AM (1).jpeg', 1, '2024-05-02 04:56:46'),
(194, 56, 'WhatsApp Image 2023-05-27 at 10.18.00 AM.jpeg', 1, '2024-05-02 04:56:46'),
(195, 56, 'WhatsApp Image 2023-05-27 at 10.18.01 AM.jpeg', 1, '2024-05-02 04:56:46'),
(196, 57, 'WhatsApp Image 2024-05-04 at 7.14.38 PM.jpeg', 1, '2024-05-06 07:38:04'),
(197, 57, 'WhatsApp Image 2024-05-04 at 7.14.39 PM.jpeg', 1, '2024-05-06 07:38:05'),
(198, 57, 'WhatsApp Image 2024-05-04 at 7.14.41 PM.jpeg', 1, '2024-05-06 07:38:05'),
(199, 58, 'Event1.jpg', 1, '2024-12-30 10:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(20) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_desc` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `s_desc`, `image`) VALUES
(1, 'Amer Afaq', '<p>Secretary Industries</p>', 'secretaryindustries.png'),
(2, 'Mansoor', '<p>managing director</p>', 'managingdirector.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`picture_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
