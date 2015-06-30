-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2015 at 08:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ev`
--

-- --------------------------------------------------------

--
-- Table structure for table `axi_links`
--

CREATE TABLE IF NOT EXISTS `axi_links` (
  `id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `sub_topic_id` char(36) DEFAULT NULL,
  `link_title` varchar(100) NOT NULL,
  `link_url` varchar(500) NOT NULL,
  `tags` text NOT NULL,
  `file` text,
  `file_dir` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uploaded_by` char(36) NOT NULL,
  `contributed` int(1) NOT NULL DEFAULT '0',
  `allow` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_links`
--

INSERT INTO `axi_links` (`id`, `topic_id`, `sub_topic_id`, `link_title`, `link_url`, `tags`, `file`, `file_dir`, `updated_at`, `uploaded_by`, `contributed`, `allow`) VALUES
('55768e24-d60c-45df-9535-04b0125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Circle -1', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'àª—àª£ àªªàª°àª¿àªšàª¯_àª­àª¾àª—_à«§\r\nwww.evidyalay.net\r\nCategory: Education \r\nLicense: Standard YouTube License \r\n\r\n', NULL, NULL, '2015-06-21 06:15:03', '', 0, 0),
('5576b530-ab10-40f0-b29d-04af125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Circle -2', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'sdfadsjvjhj', NULL, NULL, '2015-06-21 06:17:34', '', 0, 0),
('5576b547-6164-42db-8387-04b0125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '', 'Geo', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'dafdsfas', NULL, NULL, '2015-06-21 06:15:03', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_links`
--
ALTER TABLE `axi_links`
 ADD PRIMARY KEY (`id`), ADD KEY `subtopic_id` (`topic_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_links`
--
ALTER TABLE `axi_links`
ADD CONSTRAINT `axi_links_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
