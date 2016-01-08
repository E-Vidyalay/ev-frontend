-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 08:57 PM
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
-- Table structure for table `axi_video_replies`
--

CREATE TABLE IF NOT EXISTS `axi_video_replies` (
  `id` char(36) NOT NULL,
  `comment_id` char(36) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(400) NOT NULL,
  `reply` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_video_replies`
--

INSERT INTO `axi_video_replies` (`id`, `comment_id`, `name`, `email`, `reply`, `updated_at`) VALUES
('55832818-a090-49e3-95c5-02e8125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'Lakhan', 'Reply', 'ok', '2015-06-18 20:20:40'),
('5583293f-776c-4b45-af08-02ea125f2f23', '55831462-feb8-4b72-be2b-02ea125f2f23', 'test', 'testmail', 'great', '2015-06-18 20:25:35'),
('55832aea-67a8-4fae-a331-02ec125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'name tester', 'mail', 'ok', '2015-06-18 20:32:42'),
('55832b27-95d4-4407-a7f6-01c7125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'yet more', 'name test', 'pls work', '2015-06-18 20:33:43'),
('55832d6e-02ec-4c27-9c9c-01c7125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'lakhan', 'testing final', 'testing final', '2015-06-18 20:43:26'),
('55832fef-55dc-4fa4-80c7-02ed125f2f23', '5582cb6a-b194-4d08-ad6b-012b125f2f23', 'Wow', 'Try', 'Commenting on 2nd video', '2015-06-18 20:54:07'),
('55833057-71e8-4c6e-8ae4-02e8125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'testing form main', 'main', 'ok', '2015-06-18 20:55:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_video_replies`
--
ALTER TABLE `axi_video_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_id` (`comment_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
