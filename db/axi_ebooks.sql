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
-- Table structure for table `axi_ebooks`
--

CREATE TABLE IF NOT EXISTS `axi_ebooks` (
  `id` char(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `level_id` char(36) NOT NULL,
  `category_id` char(36) NOT NULL,
  `sub_category_id` char(36) NOT NULL,
  `path` varchar(500) NOT NULL,
  `path_dir` varchar(100) DEFAULT NULL,
  `description` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uploaded_by` char(36) NOT NULL,
  `contributed` int(1) NOT NULL DEFAULT '0',
  `allow` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_ebooks`
--

INSERT INTO `axi_ebooks` (`id`, `name`, `level_id`, `category_id`, `sub_category_id`, `path`, `path_dir`, `description`, `updated_at`, `uploaded_by`, `contributed`, `allow`) VALUES
('557c19fd-17e0-42e8-a404-15b3125f2f23', 'Test Book2', '5568340b-2a04-474b-9568-326f125f2f23', '55792ea2-4584-400d-a2af-0e3e125f2f23', '557bfba2-8210-44bc-bdf5-16e9125f2f23', 'GSOC proposal.pdf', '557c19fd-17e0-42e8-a404-15b3125f2f23', 'this is testing for book 2', '2015-06-13 11:54:37', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_ebooks`
--
ALTER TABLE `axi_ebooks`
 ADD PRIMARY KEY (`id`), ADD KEY `level_id` (`level_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
