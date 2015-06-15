-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 09:15 AM
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
-- Table structure for table `axi_ngos`
--

CREATE TABLE IF NOT EXISTS `axi_ngos` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `contact_number` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `site_url` varchar(100) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `path_dir` text,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_ngos`
--

INSERT INTO `axi_ngos` (`id`, `name`, `description`, `address`, `contact_number`, `email`, `site_url`, `active`, `path_dir`, `path`) VALUES
('557d9b31-aef4-4ca8-9742-1414125f2f23', 'scsdc', 'sdgsvd', 'dgvs', 9638527410, 'shailn@mg.com', 'http://svd.com', 0, '557d9b31-aef4-4ca8-9742-1414125f2f23', '750_wildcraft-backpack-scoot-ld-400x400-imaduvhhvbe3jggj.jpeg'),
('557d9cf6-c1cc-4c2f-a81c-1414125f2f23', 'scsdc', 'sdvdfvdf', 'dgvs', 9638527410, 'shailn@mg.com', 'http://svd.com', 0, '557d9cf6-c1cc-4c2f-a81c-1414125f2f23', '800_wiki-by-wildcraft-backpack-wiki-junior-cyano-400x400-imae5fkycuh6uer8.jpeg'),
('557d9d13-bf18-475e-8bcd-1414125f2f23', 'scsdc', 'sdvdfvdf', 'dgvs', 9638527410, 'shailn@mg.com', 'http://svd.com', 0, '557d9d13-bf18-475e-8bcd-1414125f2f23', '800_wiki-by-wildcraft-backpack-wiki-junior-cyano-400x400-imae5fkycuh6uer8.jpeg'),
('557d9d9a-e238-4ab2-b024-1414125f2f23', 'sdjk bs', 'sfbn s', 'dgvs', 9638527410, 'shailn@mg.com', 'http://svd.com', 0, '557d9d9a-e238-4ab2-b024-1414125f2f23', '800_digiflip-nano.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_ngos`
--
ALTER TABLE `axi_ngos`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
