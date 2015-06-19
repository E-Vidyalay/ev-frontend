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
-- Table structure for table `axi_hobbylobby_posts`
--

CREATE TABLE IF NOT EXISTS `axi_hobbylobby_posts` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `meta_description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `hobby_id` char(36) NOT NULL,
  `sub_hobby_id` char(36) NOT NULL,
  `level_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_hobbylobby_posts`
--

INSERT INTO `axi_hobbylobby_posts` (`id`, `title`, `meta_description`, `updated_at`, `updated_by`, `hobby_id`, `sub_hobby_id`, `level_id`) VALUES
('5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing for the hobby lobby post', '<p>àª† àªªà«‹àª¸à«àª¤ àª¤à«‡àª¸à«àª¤à«àª—àª¿àª¨ àª®àª¾àª¤à«‡ àª›à«‡</p>', '2015-06-19 10:41:53', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '557f3afa-17f8-4762-9365-07e0125f2f23', '557f3f7e-1ebc-4e03-a78d-07e0125f2f23', '1308da82-1275-11e5-84c6-418bf323d4bd'),
('55841768-6738-4202-b8af-4619125f2f23', 'Testing 2', '<p>àª† àª–àª¾àª²àª¿ àª¤à«‡àª¸à«àª¤àª¿àª— àª®àª¾àª¤à«‡ àª›à«‡...... àªƒ)</p>', '2015-06-19 13:21:44', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '557f3afa-17f8-4762-9365-07e0125f2f23', '557f3f7e-1ebc-4e03-a78d-07e0125f2f23', '5568340b-2a04-474b-9568-326f125f2f23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
