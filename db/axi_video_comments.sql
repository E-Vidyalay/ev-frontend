-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 02:54 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.20

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
-- Table structure for table `axi_video_comments`
--

CREATE TABLE IF NOT EXISTS `axi_video_comments` (
  `id` char(36) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `video_id` char(36) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_video_comments`
--

INSERT INTO `axi_video_comments` (`id`, `name`, `email`, `updated_at`, `video_id`, `comment`) VALUES
('5582cb6a-b194-4d08-ad6b-012b125f2f23', 'Lakhan', 'lakhan.m.samani@gmail.com', '2015-06-18 13:45:14', '5576b530-ab10-40f0-b29d-04af125f2f23', 'Thnx nice video'),
('5582ccd9-2d10-4b38-b2ad-012b125f2f23', 'Abhay', 'lakhan.m.samani@gmail.com', '2015-06-18 13:51:21', '5576b530-ab10-40f0-b29d-04af125f2f23', 'Very good'),
('5582d938-171c-4f1f-85bd-02ee125f2f23', 'Lakhan', 'lakhan.m.samani@gmail.com', '2015-06-18 14:44:08', '55768e24-d60c-45df-9535-04b0125f2f23', 'àª† àª–à«àª¬ àª¸àª°àª¸ à«àª›à«‡!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_video_comments`
--
ALTER TABLE `axi_video_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_video_comments`
--
ALTER TABLE `axi_video_comments`
  ADD CONSTRAINT `axi_video_comments_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `axi_links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
