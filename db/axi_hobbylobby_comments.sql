-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2015 at 08:02 PM
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
-- Table structure for table `axi_hobbylobby_comments`
--

CREATE TABLE IF NOT EXISTS `axi_hobbylobby_comments` (
  `id` char(36) NOT NULL,
  `post_id` char(36) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_hobbylobby_comments`
--

INSERT INTO `axi_hobbylobby_comments` (`id`, `post_id`, `text`, `updated_at`, `name`, `email`) VALUES
('55842cd5-d23c-4264-8cf3-45b3125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', '', '2015-06-19 14:53:09', '', ''),
('558444ce-9c7c-4f7f-a2e5-5710125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'testing', '2015-06-19 16:35:26', 'Kashyap', 'kashyap@gmail.com'),
('55845116-8c5c-4b54-877c-0e80125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing comment', '2015-06-19 17:27:50', 'Kashyap', 'kashyap@gmail.com'),
('5584513b-e69c-4ead-9e66-10d4125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'testing again', '2015-06-19 17:28:27', 'Kashyap', 'kashyap@gmail.com'),
('5584514f-61e8-4aaa-bdac-0e81125f2f23', '55841768-6738-4202-b8af-4619125f2f23', 'Testing again', '2015-06-19 17:28:47', 'Kashyap', 'kashyap@gmail.com'),
('55845198-eb48-4186-a512-10d5125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing again', '2015-06-19 17:30:00', 'Kashyap', 'kashyap@gmail.com'),
('558451a7-af80-4b19-aca6-113d125f2f23', '55841768-6738-4202-b8af-4619125f2f23', 'Testing final', '2015-06-19 17:30:15', 'Kashyap', 'kashyap@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
