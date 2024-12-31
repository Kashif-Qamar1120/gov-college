-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2024 at 10:25 AM
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_desc` varchar(200) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `image`, `c_name`, `c_desc`, `category_id`) VALUES
(1, 'mining.jpg', 'Mining', '<p>The Mining Engineering course focuses on the extraction of natural resources, teaching students about mining processes, safety measures, and environmental impact, paving the way for careers in the ', 1),
(2, 'elect.jpg', 'Electrical', '<p>The Electrical Engineering diploma offers students comprehensive training in electrical systems, circuits, and power generation, preparing them for careers in the energy and automation sectors.</p>', 2),
(3, 'telecom.jpg', 'Telecommunication', '<p>The Telecommunication course at our institute provides students with in-depth knowledge of modern communication systems. It equips them with the skills needed to excel in the rapidly evolving field', 3),
(4, 'dit.jpg', 'Diploma in Information Technology (DIT)', '<p>The DIT program provides practical knowledge in computer systems, programming, and network management, equipping students with essential IT skills for the digital age.</p>', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
