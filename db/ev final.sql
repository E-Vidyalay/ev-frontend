-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 02:17 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ev2`
--

-- --------------------------------------------------------

--
-- Table structure for table `axi_admins`
--

CREATE TABLE IF NOT EXISTS `axi_admins` (
  `id` char(36) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_admins`
--

INSERT INTO `axi_admins` (`id`, `name`, `username`, `password`, `email`, `updated_at`) VALUES
('53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'admin', 'admin@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', 'admin', '2014-03-07 06:07:15'),
('55731eaf-53f4-4b63-9f4e-01a1125f2f23', 'ev admin', 'ev-admin@gmail.com', '2a165dda13b6ee86c74e0cbab3859d3e78548c19', 'ev-admin@gmail.com', '2015-06-06 16:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `axi_articles`
--

CREATE TABLE IF NOT EXISTS `axi_articles` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `alias` text NOT NULL,
  `keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `content` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uploaded_by` char(36) NOT NULL,
  `contributed` int(1) NOT NULL DEFAULT '0',
  `allow` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_articles`
--

INSERT INTO `axi_articles` (`id`, `title`, `alias`, `keywords`, `meta_description`, `content`, `updated_at`, `uploaded_by`, `contributed`, `allow`) VALUES
('5554f5c6-16bc-41e9-9af5-5995125f2f23', 'â€œàªœà«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¶à«àª°à«‡àª·à«àª  (àª…àª¹à«€àª‚ â€™àª­àª£à«‡àª²àª¾â€™)àª²à«‹àª•à«‹ àª•àª°à«‡ àª›à«‡ àª¤à«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¬àª¾àª•à«€àª¨àª¾ àª…àª¨à«àª¸àª°à«‡ àª›à«‡â€', 'home', 'home', 'home', '<div class="row">\r\n<div class="columns large-7">\r\n<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡.àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡. </p>\r\n<p>àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡.</p>\r\n<p>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a>&nbsp;àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</p>\r\n</div>\r\n<div class="columns large-5"><iframe src="https://www.youtube.com/embed/R7nk2emAVG0?list=PLB4CEAC5DC720AAB9" frameborder="0" width="100%" height="270"></iframe></div>\r\n</div>', '2015-07-03 09:46:24', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 0),
('5555090f-5788-48f9-8844-5c79125f2f23', 'About EVidyalay', 'about_us', 'about_us', 'about_us', '<p>As we all move in the new era of &ldquo;e&rdquo;, where internet is the key enabler for majority of the day to day things, right from shopping, communicating, tickets, so on and so forth.<br />This has initiated a change in the way of learning as well.<br />EVidyalay is one more sincere attempt to drive the change in the way of learning so that the learning becomes simple, more users friendly and interesting.<br />EVidyalay is an online video library of Mathematics, Vedic Maths and Early learning Gujarati. The video library is under continuous development taking into consideration your feedbacks. EVidyalay&rsquo;s vision is to make education accessible to all children, which is repeatable as well as independent of time and location. Children should be able to learn anytime, anywhere at their own pace.</p>\r\n<p>EVidyalay also hosts 3 interesting features. 1. &lsquo;JIVAN CHARITRA (Biography)&rsquo;, a collection of inspiring stories of Legendary lives. This will help build value system and overall development of children, 2. &lsquo;Hobby Lobby&rsquo;, to ignite Creativity, an essential skill for effective learning. 3) &lsquo;Mahiti Mitra&rsquo;, to give friendly educational information.</p>\r\n<p>Evidyalay has got acceptance from&nbsp;<span><a href="http://evidyalay.net/evidyalayyoutubeedu/">YouTube EDU(The Global Classroom).</a></span></p>', '2015-07-01 19:44:21', '', 0, 1),
('555509e0-8924-4337-b2eb-5b46125f2f23', 'Vision', 'vision', 'vision', 'vision', '<p>&nbsp;&lsquo;Education is a key to progress.&rsquo; &ndash; is a very well known saying; though there are other dimensions too. It is education and pursuant zeal and inquisitiveness to know and explore the unknown that open the door to knowledge and awakening.</p>\r\n<p>With the advent of human mind into fathomless depths of knowledge, the human societies have evolved into more and more complex structures and directions; and they are still evolving at a much greater pace. What quality and dimension the human societies will shape into &ndash; say after 50 or 100 years &ndash; is mind boggling. We feel awed at the achievements of human mind in multifarious directions.</p>\r\n<p>We also feel awfully sorry for the immense harm the same human mind has done to the environment, the biomes, animal and vegetation species and last but not the least, the human societies themselves.</p>\r\n<p>Schools are abodes for learning processes, right from the dawn of civilization; and are the cradles of this development of human mind. The task of a teacher &ndash; to prepare a child to come up to a measurable standard tto acquire at least a part existing knowledge base and be armed to venture into the unknown &ndash; is becoming more and more onerous.</p>\r\n<p>At the same time, we feel ashamed at the degeneration of the education system; which aims only at preparing students for a race to acquire prosperity and recognition. Development of rudimentary scholastic qualities unfortunately gets a secondary importance.</p>\r\n<p>It is in this light that the spirit of &lsquo;E-Vidyalay&rsquo; may be interpreted. It aims at nurturing the qualities of fresh thought, creativity, honest inquisitiveness and last but not the least, the fundamentally built in human and moral values. The following video aptly focuses our attention on this spirit.</p>\r\n<div>&lt;iframe style="height:800px;width:100%" src="https://www.youtube.com/embed/hi0dWqK00Nw" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</div>\r\n<p>Hiral&rsquo;s output of&nbsp;<span><span>2 years (280+ quality&nbsp;educational videos)</span></span>&nbsp;is no doubt a commendable effort. How far she has succeeded can only be judged, if the approach is implemented by students, teachers and parents; and whether it is effective. But more noticeable fact , is her urge to evolve a new approach in the method of imparting knowledge. It is an initiative in the right direction. It is also possible that new avenues of education system may evolve by the interactions; E-Vidyalay is going to generate amongst its audience. The theatre here is open for a creative and refreshing play.</p>\r\n<p>Let it generate fun, quest, creativity and fresh thought. Let thousand blooms blossom and door to a<span><span>&nbsp;new way of &lsquo;How to live life?&rsquo;</span></span>&nbsp;open up.</p>', '2015-07-01 19:44:17', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `axi_contributors`
--

CREATE TABLE IF NOT EXISTS `axi_contributors` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('557c19fd-17e0-42e8-a404-15b3125f2f23', 'Test Book2', '5568340b-2a04-474b-9568-326f125f2f23', '55792ea2-4584-400d-a2af-0e3e125f2f23', '557bfba2-8210-44bc-bdf5-16e9125f2f23', 'GSOC proposal.pdf', '557c19fd-17e0-42e8-a404-15b3125f2f23', 'this is testing for book 2', '2015-06-13 11:54:37', '', 0, 0),
('55942a9c-eed0-4f07-9885-2561125f2f23', 'Testing', '1308ef4a-1275-11e5-84c6-418bf323d4bd', '55792ea2-4584-400d-a2af-0e3e125f2f23', '557bfba2-8210-44bc-bdf5-16e9125f2f23', 'bus_ticket_invoice_944424521.pdf', '55942a9c-eed0-4f07-9885-2561125f2f23', 'This book is for testing', '2015-07-01 17:59:56', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `axi_hobbies`
--

CREATE TABLE IF NOT EXISTS `axi_hobbies` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_hobbies`
--

INSERT INTO `axi_hobbies` (`id`, `name`, `updated_at`, `updated_by`) VALUES
('557f3afa-17f8-4762-9365-07e0125f2f23', 'Reading', '2015-06-19 11:24:40', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('55845a8b-2d24-4e4d-a846-17e7125f2f23', 'Sports', '2015-06-19 18:09:51', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
('558451a7-af80-4b19-aca6-113d125f2f23', '55841768-6738-4202-b8af-4619125f2f23', 'Testing final', '2015-06-19 17:30:15', 'Kashyap', 'kashyap@gmail.com'),
('55847d93-072c-4eb9-8566-1644125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing posting comment', '2015-06-19 20:37:39', 'Kashyap', 'kashyap@gmail.com'),
('55847dd2-c574-4bb7-84b6-1803125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'testing..', '2015-06-19 20:38:42', 'Kashyap', 'kashyap@gmail.com'),
('55847e72-34a4-4ad0-851d-1a8b125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'final testing', '2015-06-19 20:41:22', 'Kashyap', 'kashyap@gmail.com'),
('5584f29f-3b10-4aa2-a5a1-17a6125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'àª¸à« àª›à«‡?', '2015-06-20 04:57:03', 'Kashyap', 'kashyap@gmail.com'),
('5584f2c9-162c-4389-bbcc-1803125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'hellow??', '2015-06-20 04:57:45', 'Kashyap', 'kashyap@gmail.com'),
('5584f317-eaac-4725-88f6-1a8b125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'àª†àª•àª¶ àª…àª¸à«àª¨àª¾àª¨àª¿', '2015-06-20 04:59:03', 'Kashyap', 'kashyap@gmail.com'),
('5584f32a-8274-4453-9b18-1774125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Nikunj ', '2015-06-20 04:59:22', 'Kashyap', 'kashyap@gmail.com'),
('5584f34f-76bc-42f4-9948-1803125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'hello testing', '2015-06-20 04:59:59', 'Kashyap', 'kashyap@gmail.com'),
('5584f382-9c00-4fcd-9d12-17a6125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Final tsting', '2015-06-20 05:00:50', 'Kashyap', 'kashyap@gmail.com'),
('5584f3b2-5b24-4d33-985e-1774125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Final testing ajax tool', '2015-06-20 05:01:38', 'Kashyap', 'kashyap@gmail.com'),
('5584f3d5-dee0-4de7-9503-1803125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'ajax tool testing', '2015-06-20 05:02:13', 'Kashyap', 'kashyap@gmail.com'),
('5584f3ea-4650-4fdb-8f8c-1644125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'final testing ajax', '2015-06-20 05:02:34', 'Kashyap', 'kashyap@gmail.com'),
('5584f7a1-1c84-4b07-a3a1-1644125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'hello World', '2015-06-20 05:18:25', 'Kashyap', 'kashyap.dj9350@gmail.com'),
('5584fd89-3428-489b-9272-1803125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'teting final\r\n', '2015-06-20 05:43:37', 'Kashyap', 'kashyap@gmail.com'),
('558511fe-5c20-462e-9138-4944125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'testing comment', '2015-06-20 07:10:54', 'Kashyap', 'kashyap@gmail.com'),
('558dbada-3ee0-42bf-9e21-21ef125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'testing comment', '2015-06-26 20:49:30', 'Kashyap', 'kashyap@gmail.com'),
('558dbb2b-0744-49e1-a5a3-20fc125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing final', '2015-06-26 20:50:51', 'Kashyap', 'kashyap@gmail.com'),
('558dbb78-f098-42f1-91f8-1ff1125f2f23', '5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing Comment', '2015-06-26 20:52:08', 'Kashyap', 'kashyap@gmail.com'),
('55996cbe-64e8-4384-810d-541b125f2f23', '5589ab99-9854-4091-b7f7-192b125f2f23', 'àª•à«‡àª® àª›à«‡?', '2015-07-05 17:43:26', 'Kashyap', 'kashyap@gmail.com');

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
('5583f1f1-02c0-4175-8c1f-32dc125f2f23', 'Testing for the hobby lobby post', '<p>àª† àªªà«‹àª¸à«àª¤ àª¤à«‡àª¸à«àª¤à«àª—àª¿àª¨ àª®àª¾àª¤à«‡ àª›à«‡</p>', '2015-07-08 08:32:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '557f3afa-17f8-4762-9365-07e0125f2f23', '557f3f7e-1ebc-4e03-a78d-07e0125f2f23', '5568340b-2a04-474b-9568-326f125f2f23'),
('55841768-6738-4202-b8af-4619125f2f23', 'Testing 2', '<p>àª† àª–àª¾àª²àª¿ àª¤à«‡àª¸à«àª¤àª¿àª— àª®àª¾àª¤à«‡ àª›à«‡...... àªƒ)</p>', '2015-06-19 13:21:44', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '557f3afa-17f8-4762-9365-07e0125f2f23', '557f3f7e-1ebc-4e03-a78d-07e0125f2f23', '5568340b-2a04-474b-9568-326f125f2f23'),
('5587a425-e5f8-44c6-b701-1765125f2f23', 'Demo Image Post', '<p><img class="center" style="vertical-align: middle;" title="demo" src="http://www.anycorp.com/dynamic/any_issue_2.jpg" alt="" width="300" height="410" /></p>', '2015-07-08 08:31:13', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '557f3afa-17f8-4762-9365-07e0125f2f23', '5583fc2d-1598-41e8-8f40-3ada125f2f23', '5568340b-2a04-474b-9568-326f125f2f23'),
('5589ab99-9854-4091-b7f7-192b125f2f23', 'Sample', '<p><img src="/ev-admiral/admin/files/image/path/5579e7e9-a5b0-40ac-9bdf-0e3e125f2f23/user_avatar.png" alt="" width="96" height="96" /></p>', '2015-06-23 18:55:21', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '55845a8b-2d24-4e4d-a846-17e7125f2f23', '55845a9a-3930-46d0-96a5-19b9125f2f23', '5568340b-2a04-474b-9568-326f125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_hobbylobby_replies`
--

CREATE TABLE IF NOT EXISTS `axi_hobbylobby_replies` (
  `id` char(36) NOT NULL,
  `comment_id` char(36) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_hobbylobby_replies`
--

INSERT INTO `axi_hobbylobby_replies` (`id`, `comment_id`, `text`, `updated_at`, `name`, `email`) VALUES
('55845d76-aacc-4d81-9566-1774125f2f23', '55842cd5-d23c-4264-8cf3-45b3125f2f23', 'Testin reply', '2015-06-19 18:20:38', 'Kashyap', 'kashyap@gmail.com'),
('55845df0-c814-498c-acaf-17a6125f2f23', '55842cd5-d23c-4264-8cf3-45b3125f2f23', 'àªªà«àª°àª¯àª¾àª¸ àª¥àª¾àª¯ àª›à«‡', '2015-06-19 18:22:40', 'Kashyap', 'kashyap@gmail.com'),
('55845e13-40d4-488c-940c-1abe125f2f23', '5584514f-61e8-4aaa-bdac-0e81125f2f23', 'Testing final', '2015-06-19 18:23:15', 'Kashyap', 'kashyap@gmail.com'),
('55847e08-cf00-41ff-8bc8-16b0125f2f23', '558444ce-9c7c-4f7f-a2e5-5710125f2f23', 'à¤¤à¥‡à¤¸à¥à¤¤à¤¿à¤¨à¥à¤— à¤¹à¥‹ à¤°à¤¹à¤¿ à¤¹à¥ˆ.', '2015-06-19 20:39:36', 'Kashyap', 'kashyap@gmail.com'),
('5584f400-5e74-4b7d-8ba8-17a6125f2f23', '5584f3d5-dee0-4de7-9503-1803125f2f23', 'final reply testing', '2015-06-20 05:02:56', 'Kashyap', 'kashyap@gmail.com'),
('5586554c-1e48-47e4-a8dd-4cd6125f2f23', '55842cd5-d23c-4264-8cf3-45b3125f2f23', 'testing reply message', '2015-06-21 06:10:20', 'Kashyap', 'kashyap@gmail.com'),
('5586a960-1878-4be8-95d3-30f3125f2f23', '55842cd5-d23c-4264-8cf3-45b3125f2f23', 'Reply', '2015-06-21 12:09:04', 'Kashyap', 'kashyap@gmail.com'),
('558dbb9a-6024-4856-b9fd-1ac7125f2f23', '558dbb2b-0744-49e1-a5a3-20fc125f2f23', 'Testing reply', '2015-06-26 20:52:42', 'Kashyap', 'kashyap@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `axi_images`
--

CREATE TABLE IF NOT EXISTS `axi_images` (
  `id` char(36) NOT NULL,
  `path` varchar(300) NOT NULL,
  `path_dir` varchar(500) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_images`
--

INSERT INTO `axi_images` (`id`, `path`, `path_dir`, `updated_at`) VALUES
('5579e7e9-a5b0-40ac-9bdf-0e3e125f2f23', 'user_avatar.png', '5579e7e9-a5b0-40ac-9bdf-0e3e125f2f23', '2015-06-11 19:56:25'),
('558da1de-861c-4364-968d-1ff1125f2f23', '10904505_575795349222972_3590658698566290572_o.jpg', '558da1de-861c-4364-968d-1ff1125f2f23', '2015-06-26 19:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `axi_information_comments`
--

CREATE TABLE IF NOT EXISTS `axi_information_comments` (
  `id` char(36) NOT NULL,
  `post_id` char(36) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `name` text NOT NULL,
  `email` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_information_comments`
--

INSERT INTO `axi_information_comments` (`id`, `post_id`, `text`, `updated_at`, `updated_by`, `name`, `email`) VALUES
('558bedae-8084-4a21-af53-3277125f2f23', '55851068-4f4c-4ce6-8312-0878125f2f23', 'nice information', '2015-06-25 12:01:50', '', 'Kashyap', 'kashyap@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `axi_information_posts`
--

CREATE TABLE IF NOT EXISTS `axi_information_posts` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `meta_description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_information_posts`
--

INSERT INTO `axi_information_posts` (`id`, `title`, `meta_description`, `updated_at`, `updated_by`) VALUES
('55851068-4f4c-4ce6-8312-0878125f2f23', 'Testing', '<p>àª¤àªªàª¾àª¸</p>', '2015-06-20 07:10:26', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_information_replies`
--

CREATE TABLE IF NOT EXISTS `axi_information_replies` (
  `id` char(36) NOT NULL,
  `comment_id` char(36) NOT NULL,
  `text` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_information_replies`
--

INSERT INTO `axi_information_replies` (`id`, `comment_id`, `text`, `updated_at`, `name`, `email`) VALUES
('558bedd6-d210-424f-b81a-3272125f2f23', '558bedae-8084-4a21-af53-3277125f2f23', 'yeah it is nice information', '2015-06-25 12:02:30', 'Kashyap', 'kashyap@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `axi_levels`
--

CREATE TABLE IF NOT EXISTS `axi_levels` (
  `id` char(36) NOT NULL,
  `level_name` varchar(100) NOT NULL,
  `color` varchar(10) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_levels`
--

INSERT INTO `axi_levels` (`id`, `level_name`, `color`, `updated_at`) VALUES
('1308da82-1275-11e5-84c6-418bf323d4bd', 'àª®àª¾àª§à«àª¯àª®àª¿àª•', '#dc6800;', '2015-06-03 09:33:26'),
('1308ef4a-1275-11e5-84c6-418bf323d4bd', 'àªªà«àª°àª¾àª¥àª®àª¿àª•', '#008BBB;', '2015-06-02 09:33:26'),
('5568340b-2a04-474b-9568-326f125f2f23', 'àª¬àª¾àª²àª®àª‚àª¦àª¿àª°', '#619919;', '2015-06-01 09:33:26'),
('557d45e1-c154-48a1-91cb-01b9125f2f23', 'àª‰àªšà«àªš àª®àª¾àª§à«àª¯àª®àª¿àª•', '#FBA714;', '2015-06-04 09:33:26');

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
('55768e24-d60c-45df-9535-04b0125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Circle -1', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'àª—àª£ àªªàª°àª¿àªšàª¯_àª­àª¾àª—_à«§\r\nwww.evidyalay.net\r\nCategory: Education \r\nLicense: Standard YouTube License \r\n\r\n', NULL, NULL, '2015-07-03 09:46:18', '', 0, 0),
('5576b530-ab10-40f0-b29d-04af125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Circle -2', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'sdfadsjvjhj', NULL, NULL, '2015-07-01 17:40:24', '', 0, 1),
('5576b547-6164-42db-8387-04b0125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '', 'Geo', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'dafdsfas', NULL, NULL, '2015-07-01 20:06:19', '', 0, 1),
('55942b41-c75c-4947-93d5-2561125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684c6-1a74-4da0-84df-0127125f2f23', 'Testing Video', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'Testing video', NULL, NULL, '2015-07-03 08:51:53', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('5599061d-e1f4-417d-82d5-40fa125f2f23', '559ce184-939c-4f19-a02a-5588125f2f23', '', 'ABCS', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'Testing video', NULL, NULL, '2015-07-08 08:38:51', '55965e6a-6950-4a12-91af-342a125f2f23', 1, 1),
('55993e53-700c-4fec-9604-5606125f2f23', '556c0340-6248-427e-83f8-0360125f2f23', '', 'Link testing', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'asadfasd', NULL, NULL, '2015-07-05 14:25:23', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('55993e61-41d0-41a4-8c3e-5bd3125f2f23', '556c0340-6248-427e-83f8-0360125f2f23', '', 'ABCS', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'dfhfvbfh', NULL, NULL, '2015-07-05 14:25:37', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('55993e70-e2c0-4ced-9237-5ac3125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '', 'Testing Video', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'sthdbvsdft', NULL, NULL, '2015-07-05 14:25:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('55993e9c-ad7c-405d-bb87-541b125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684c6-1a74-4da0-84df-0127125f2f23', 'Testing Video', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'adfgvvns;ldkfn sndf', NULL, NULL, '2015-07-05 14:26:36', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('55993ebb-4ab0-4b7d-8e87-5bf9125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Link testing', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'sdfn;knsd sdflksdf', NULL, NULL, '2015-07-05 14:27:07', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1),
('55993ee1-8608-46cc-9e26-56f8125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '557684be-ed98-44c6-a645-04af125f2f23', 'Link testing', 'https://www.youtube.com/embed/MgdhtLqOOVs', 'dsfsdf sdfsdf', NULL, NULL, '2015-07-05 14:27:45', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `axi_literatures`
--

CREATE TABLE IF NOT EXISTS `axi_literatures` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `color_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_literatures`
--

INSERT INTO `axi_literatures` (`id`, `name`, `updated_at`, `updated_by`, `color_code`) VALUES
('55792ea2-4584-400d-a2af-0e3e125f2f23', 'Novel', '2015-06-11 06:49:40', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '40610e'),
('5585a73c-6894-4696-b6d3-4cd6125f2f23', 'Stories', '2015-06-20 17:47:40', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '8b4ca8');

-- --------------------------------------------------------

--
-- Table structure for table `axi_literature_comments`
--

CREATE TABLE IF NOT EXISTS `axi_literature_comments` (
  `id` char(36) NOT NULL,
  `post_id` char(36) NOT NULL,
  `comment` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_literature_comments`
--

INSERT INTO `axi_literature_comments` (`id`, `post_id`, `comment`, `updated_at`, `name`, `email`) VALUES
('5585afaa-15a8-4837-9cfc-7068125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', '', '2015-06-20 18:23:38', 'Kashyap', 'kashyap@gmail.com'),
('5585b09f-63f4-47a8-b5f6-4972125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'testing comment', '2015-06-20 18:27:43', 'Kashyap', 'kashyap@gmail.com'),
('55865b76-9228-4ba0-8b0e-0a5c125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'testing flash for Comment', '2015-06-21 06:36:38', 'Kashyap', 'kashyap@gmail.com'),
('55865cc1-79d0-408c-a834-7068125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'testing flash', '2015-06-21 06:42:09', 'Kashyap', 'kashyap@gmail.com'),
('55865cf2-e834-4f3b-9e6e-1eba125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'Testin flash', '2015-06-21 06:42:58', 'Kashyap', 'kashyap@gmail.com'),
('55865d32-b514-46b9-bf4b-0a5c125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'Testing flash', '2015-06-21 06:44:02', 'Kashyap', 'kashyap@gmail.com'),
('55865d4b-6f50-4457-be88-3e94125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'Testing Flash', '2015-06-21 06:44:27', 'Kashyap', 'asd@adas.com'),
('55865d85-3fcc-403d-b343-19b9125f2f23', '5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'Again testing flash', '2015-06-21 06:45:25', 'Kashyap', 'kash@gmail.com'),
('57529389-9ce0-4c53-9ef2-2938125f2f23', '5587c7b6-1078-4c75-a579-3003125f2f23', '', '2016-06-04 08:38:33', 'Kashyap Ashara', 'kashyap.dj9350@gmail.com'),
('57529421-2a7c-4f4e-b8f2-2938125f2f23', '5587c7b6-1078-4c75-a579-3003125f2f23', 'àª–à«àª¬ àª¸àª°àª¸', '2016-06-04 08:41:05', 'Kashyap Ashara', 'kashyap.dj9350@gmail.com'),
('57529595-3588-4f45-863d-2938125f2f23', '5587c7b6-1078-4c75-a579-3003125f2f23', 'àª¬à«Œ àª¸àª°àª¸', '2016-06-04 08:47:17', 'Kashyap Ashara', 'kashyap.dj9350@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `axi_literature_posts`
--

CREATE TABLE IF NOT EXISTS `axi_literature_posts` (
  `id` char(36) NOT NULL,
  `title` text NOT NULL,
  `meta_description` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL,
  `level_id` char(36) NOT NULL,
  `literature_id` char(36) NOT NULL,
  `sub_literature_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_literature_posts`
--

INSERT INTO `axi_literature_posts` (`id`, `title`, `meta_description`, `updated_at`, `updated_by`, `level_id`, `literature_id`, `sub_literature_id`) VALUES
('5582b3e4-d7a8-44e4-b4bf-0c8e125f2f23', 'demo', '<p>àª•à«‡àª® àªšà«‹?</p>', '2015-06-20 18:41:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '5568340b-2a04-474b-9568-326f125f2f23', '5585a73c-6894-4696-b6d3-4cd6125f2f23', '55793081-e578-496f-aa04-0e3d125f2f23'),
('5582b486-60b0-419b-9623-0ac7125f2f23', 'demo1', '<p>àªœà«àª¬à«àª«à«àªœà«àª•à«‡àª¬à«àª¦à«àª«à«àªœà«àª•à«àª¦à«àª¨</p>', '2015-06-20 18:22:40', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '5568340b-2a04-474b-9568-326f125f2f23', '5585a73c-6894-4696-b6d3-4cd6125f2f23', '55793081-e578-496f-aa04-0e3d125f2f23'),
('5587c7b6-1078-4c75-a579-3003125f2f23', 'Demo', '<p>TEsting</p>', '2015-06-22 08:30:46', '53196213-e8c0-4b42-a3e3-19ecf1301e8a', '1308da82-1275-11e5-84c6-418bf323d4bd', '5585a73c-6894-4696-b6d3-4cd6125f2f23', '55793081-e578-496f-aa04-0e3d125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_literature_replies`
--

CREATE TABLE IF NOT EXISTS `axi_literature_replies` (
  `id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` text NOT NULL,
  `email` char(36) NOT NULL,
  `comment_id` char(36) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_literature_replies`
--

INSERT INTO `axi_literature_replies` (`id`, `updated_at`, `name`, `email`, `comment_id`, `reply`) VALUES
('5585b103-fc90-48dc-ae0c-4cd6125f2f23', '2015-06-20 18:29:23', 'Kashyap', 'kashyap@gmail.com', '', ''),
('5586ae1d-b9c4-4e26-9101-38b7125f2f23', '2015-06-21 12:29:17', 'Kashyap', 'Kashyap@gmail.com', '5585b09f-63f4-47a8-b5f6-4972125f2f23', 'duplicate'),
('575294c6-aa70-43d9-ad5e-2938125f2f23', '2016-06-04 08:43:50', 'Kashyap Ashara', 'kashyap.dj9350@gmail.com', '57529421-2a7c-4f4e-b8f2-2938125f2f23', 'àª—àª®à«àª¯à«'),
('575295b2-d970-41b6-8426-2938125f2f23', '2016-06-04 08:47:46', 'Kashyap Ashara', 'kashyap.dj9350@gmail.com', '57529595-3588-4f45-863d-2938125f2f23', 'àª–à«àª¬ àª¸àª°àª¸');

-- --------------------------------------------------------

--
-- Table structure for table `axi_markingschemes`
--

CREATE TABLE IF NOT EXISTS `axi_markingschemes` (
  `id` char(36) NOT NULL,
  `positive_marks` double NOT NULL,
  `negative_marks` double NOT NULL,
  `display_name` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_markingschemes`
--

INSERT INTO `axi_markingschemes` (`id`, `positive_marks`, `negative_marks`, `display_name`, `updated_at`, `updated_by`) VALUES
('531d5d48-1f14-4e09-915d-1bb0f1301e8a', 3, 2, '+ 3, - 2', '2014-03-10 06:35:52', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('53315959-c268-4cc2-a42f-0c4cf1301e8a', 100, 500, '+ 100, - 500', '2014-03-25 10:24:25', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_news_letters`
--

CREATE TABLE IF NOT EXISTS `axi_news_letters` (
  `id` char(36) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_news_letters`
--

INSERT INTO `axi_news_letters` (`id`, `title`, `content`, `date`, `user_id`) VALUES
('556430fa-9b0c-4ed5-8c3f-0460125f2f23', 'EV latest update-1', '<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡. <br /> <strong>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a> àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</strong></p>', '2015-05-26 08:38:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('558662db-d98c-4754-a5f6-209d125f2f23', 'EV latest update-2', '<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡.&nbsp;<br />àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡.&nbsp;<br />àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡.&nbsp;<br /><strong>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a>&nbsp;àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</strong></p>', '2015-06-21 07:08:11', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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

-- --------------------------------------------------------

--
-- Table structure for table `axi_parents`
--

CREATE TABLE IF NOT EXISTS `axi_parents` (
  `id` char(36) NOT NULL,
  `parent_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_question_banks`
--

CREATE TABLE IF NOT EXISTS `axi_question_banks` (
  `id` char(36) NOT NULL,
  `question` varchar(400) NOT NULL,
  `option1` varchar(80) NOT NULL,
  `option2` varchar(80) NOT NULL,
  `option3` varchar(80) NOT NULL,
  `option4` varchar(80) NOT NULL,
  `option5` varchar(80) NOT NULL,
  `correct_ans` varchar(200) NOT NULL,
  `path` varchar(100) DEFAULT NULL,
  `path_dir` varchar(200) DEFAULT NULL,
  `topic_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_topic_id` char(36) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_question_banks`
--

INSERT INTO `axi_question_banks` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `correct_ans`, `path`, `path_dir`, `topic_id`, `updated_at`, `sub_topic_id`, `description`) VALUES
('556c1734-e718-4f62-ae81-02de125f2f23', '<p>What is this?</p>', '<p>sdfasd</p>', '<p>sadfas</p>', '<p>sdfasd</p>', '<p>asdfas</p>', '<p>asdfasd</p>', '0,0,option3,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 08:26:28', '', 'this is by prof X'),
('556c77f3-e5a8-45d5-8d89-05cc125f2f23', '<p>hey this is just for test-algebra!</p>', '<p>sdfas</p>', '<p>sdfas</p>', '<p>asdfas</p>', '<p>sdfasd</p>', '<p>sdfasd</p>', 'option1,0,0,0,0', NULL, NULL, '556c0340-6248-427e-83f8-0360125f2f23', '2015-06-01 15:19:15', '', 'By x'),
('556c9d4f-4e94-40d6-9ac5-0360125f2f23', '<p>Helloo this just for test?</p>', '<p>ok</p>', '<p>by</p>', '<p>cya</p>', '<p>fine</p>', '<p>np</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 17:58:39', NULL, 'XYZ'),
('556c9db5-b87c-4639-b4a8-0656125f2f23', '<p>Circle 1 test case?</p>', '<p>perimeter</p>', '<p>radius</p>', '<p>circumference</p>', '<p>height</p>', '<p>semi circle</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:00:21', '', 'this is by prof X'),
('556c9ddc-bcd0-452f-a1f9-035d125f2f23', '<p>what is area</p>', '<p>2pir</p>', '<p>2p2</p>', '<p>2x2</p>', '<p>2rs</p>', '<p>2fc</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:01:00', NULL, 'Circle Test case 2'),
('556c9e77-2e9c-4dee-abac-02d9125f2f23', '<p>Circle circumference</p>', '<p>2pir</p>', '<p>2pir2</p>', '<p>2x</p>', '<p>29</p>', '<p>26</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:03:35', NULL, 'geo'),
('556ca0b9-5854-429a-91f4-02d9125f2f23', '<p>Hey gemoetry circle</p>', '<p>sdfas</p>', '<p>asdfas</p>', '<p>asdfas</p>', '<p>sdfasd</p>', '<p>sdfasd</p>', '0,option2,option3,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:13:13', NULL, 'this is by prof X'),
('556ca11a-b244-4cda-9ef4-02df125f2f23', '<p>Tired of adding circle quest</p>', '<p>sdfasd</p>', '<p>asdfas</p>', '<p>sdfasd</p>', '<p>sadfas</p>', '<p>sdfasd</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:14:50', NULL, 'this is by prof X'),
('556ca196-a2a4-4854-9ae0-0704125f2f23', '<p>àª•à«‡àª® àª›à«‹?</p>', '<p>asdasd</p>', '<p>adasd</p>', '<p>adas</p>', '<p>asda</p>', '<p>asda</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:16:54', '', 'asda'),
('556ca1ab-cc70-401c-8682-0656125f2f23', '<p>sadasd</p>', '<p>asdsadfas</p>', '<p>sdfasd</p>', '<p>dfasdfa</p>', '<p>sadfasd</p>', '<p>sdfas</p>', '0,option2,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:17:15', NULL, 'asdas'),
('556ca1be-d480-4088-9c51-035d125f2f23', '<p>sdfas</p>', '<p>sdfas</p>', '<p>sdfasd</p>', '<p>sdfsd</p>', '<p>kjsdfak</p>', '<p>kjsdfas</p>', 'option1,option2,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:17:34', NULL, 'asdf'),
('556ca1da-5304-47ed-aa5b-02df125f2f23', '<p>dsfasdf</p>', '<p>sdfasdfa</p>', '<p>lkjlkjlj</p>', '<p>lkjlkj</p>', '<p>lkjlkj</p>', '<p>lkjlkj</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:18:02', NULL, 'this is by prof X'),
('556ca5bc-0484-4dee-8da1-012c125f2f23', '<p>hey sub-test</p>', '<p>sdfas</p>', '<p>asdfasd</p>', '<p>sdfas</p>', '<p>sdfasd</p>', '<p>sdfas</p>', 'option1,0,0,0,0', NULL, NULL, '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:34:36', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `axi_students`
--

CREATE TABLE IF NOT EXISTS `axi_students` (
  `id` char(36) NOT NULL,
  `school` varchar(100) DEFAULT NULL,
  `user_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_students`
--

INSERT INTO `axi_students` (`id`, `school`, `user_id`) VALUES
('5561c76e-ee1c-44bf-af4e-01bf125f2f23', NULL, '5561c5af-8890-4d1d-b708-01be125f2f23'),
('556348ba-c124-4fb2-b7c8-01f6125f2f23', NULL, '556348ba-76c4-488b-a3e8-01f6125f2f23'),
('5568802f-2e80-4ebb-a026-326d125f2f23', NULL, '5568802f-cd70-4325-b47a-326d125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_student_subject_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_student_subject_mappings` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_subjects`
--

CREATE TABLE IF NOT EXISTS `axi_subjects` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subjects`
--

INSERT INTO `axi_subjects` (`id`, `name`, `updated_at`, `updated_by`) VALUES
('55682636-b5d4-4804-adc4-326d125f2f23', 'Mathematics', '2015-05-31 06:29:24', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('556aaa3b-8de4-4597-9181-0f2a125f2f23', 'English', '2015-05-31 06:29:15', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_sub_hobbies`
--

CREATE TABLE IF NOT EXISTS `axi_sub_hobbies` (
  `id` char(36) NOT NULL,
  `hobby_id` char(36) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_sub_hobbies`
--

INSERT INTO `axi_sub_hobbies` (`id`, `hobby_id`, `name`, `updated_at`, `updated_by`) VALUES
('557f3f7e-1ebc-4e03-a78d-07e0125f2f23', '557f3afa-17f8-4762-9365-07e0125f2f23', 'Novel', '2015-06-19 11:24:57', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('5583fc2d-1598-41e8-8f40-3ada125f2f23', '557f3afa-17f8-4762-9365-07e0125f2f23', 'SciFi', '2015-06-19 11:25:33', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('55845a9a-3930-46d0-96a5-19b9125f2f23', '55845a8b-2d24-4e4d-a846-17e7125f2f23', 'Cricket', '2015-06-19 18:08:26', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_sub_literatures`
--

CREATE TABLE IF NOT EXISTS `axi_sub_literatures` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `literature_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_sub_literatures`
--

INSERT INTO `axi_sub_literatures` (`id`, `name`, `literature_id`, `updated_at`, `updated_by`) VALUES
('55793081-e578-496f-aa04-0e3d125f2f23', 'fiction', '5585a73c-6894-4696-b6d3-4cd6125f2f23', '2015-06-20 17:48:51', '53196213-e8c0-4b42-a3e3-19ecf1301e8a'),
('557bfba2-8210-44bc-bdf5-16e9125f2f23', 'Biography', '55792ea2-4584-400d-a2af-0e3e125f2f23', '2015-06-13 09:45:06', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

-- --------------------------------------------------------

--
-- Table structure for table `axi_sub_topics`
--

CREATE TABLE IF NOT EXISTS `axi_sub_topics` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_sub_topics`
--

INSERT INTO `axi_sub_topics` (`id`, `name`, `topic_id`, `updated_at`) VALUES
('557684be-ed98-44c6-a645-04af125f2f23', 'Circle', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-09 06:16:30'),
('557684c6-1a74-4da0-84df-0127125f2f23', 'Square', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-09 06:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `axi_teachers`
--

CREATE TABLE IF NOT EXISTS `axi_teachers` (
  `id` char(36) NOT NULL,
  `teacher_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_applications`
--

CREATE TABLE IF NOT EXISTS `axi_test_applications` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `topic_id` char(36) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_topic_id` char(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_applications`
--

INSERT INTO `axi_test_applications` (`id`, `student_id`, `topic_id`, `date`, `sub_topic_id`) VALUES
('556ca23c-859c-47d5-b29e-0704125f2f23', '5561c76e-ee1c-44bf-af4e-01bf125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-01 18:19:40', '556bd05e-859c-4ca1-ba72-02d9125f2f23'),
('556d2fb0-88fc-4168-82d6-035d125f2f23', '5561c76e-ee1c-44bf-af4e-01bf125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-02 04:23:12', ''),
('556ebfd8-db34-4278-b60a-0ebf125f2f23', '5568802f-2e80-4ebb-a026-326d125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-03 08:50:32', ''),
('5573c1fb-ebd8-434e-bc63-04a6125f2f23', '5561c76e-ee1c-44bf-af4e-01bf125f2f23', '556aa68d-0198-462b-9ddb-101e125f2f23', '2015-06-07 04:00:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `axi_test_results`
--

CREATE TABLE IF NOT EXISTS `axi_test_results` (
  `id` char(36) NOT NULL,
  `test_id` char(36) NOT NULL,
  `question_id` char(36) NOT NULL,
  `result` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_results`
--

INSERT INTO `axi_test_results` (`id`, `test_id`, `question_id`, `result`) VALUES
('556ca268-3b38-445e-ae72-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556c9db5-b87c-4639-b4a8-0656125f2f23', 1),
('556ca268-5338-41d4-b6a8-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca1be-d480-4088-9c51-035d125f2f23', -1),
('556ca268-57c4-42d4-a1b8-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556c1734-e718-4f62-ae81-02de125f2f23', -1),
('556ca268-57e0-4321-bdee-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca1ab-cc70-401c-8682-0656125f2f23', -1),
('556ca268-b374-4821-bf5a-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556c9e77-2e9c-4dee-abac-02d9125f2f23', 1),
('556ca268-b7d4-409b-aa8a-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556c9d4f-4e94-40d6-9ac5-0360125f2f23', -1),
('556ca268-cab8-4028-b5e8-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca0b9-5854-429a-91f4-02d9125f2f23', -1),
('556ca268-dcd4-4556-8e04-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca11a-b244-4cda-9ef4-02df125f2f23', 1),
('556ca268-e408-40e0-82e7-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca196-a2a4-4854-9ae0-0704125f2f23', 1),
('556ca268-ec98-4f10-8fc9-0360125f2f23', '556ca23c-859c-47d5-b29e-0704125f2f23', '556ca1da-5304-47ed-aa5b-02df125f2f23', -1),
('556d3176-5650-49fc-b959-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca1da-5304-47ed-aa5b-02df125f2f23', -1),
('556d3176-675c-474f-903a-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556c9e77-2e9c-4dee-abac-02d9125f2f23', 1),
('556d3176-6ce0-437c-8e06-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca196-a2a4-4854-9ae0-0704125f2f23', -1),
('556d3176-7024-471b-bd04-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca1be-d480-4088-9c51-035d125f2f23', -1),
('556d3176-b408-4070-baea-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca5bc-0484-4dee-8da1-012c125f2f23', 0),
('556d3176-cb9c-4290-a3ef-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca11a-b244-4cda-9ef4-02df125f2f23', 0),
('556d3176-e5e4-4cf0-9d19-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556c9d4f-4e94-40d6-9ac5-0360125f2f23', -1),
('556d3176-f1dc-4446-87cb-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556ca0b9-5854-429a-91f4-02d9125f2f23', -1),
('556d3176-fbcc-4ab0-99b2-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556c9db5-b87c-4639-b4a8-0656125f2f23', 1),
('556d3176-ff00-43b6-bbc5-012c125f2f23', '556d2fb0-88fc-4168-82d6-035d125f2f23', '556c1734-e718-4f62-ae81-02de125f2f23', -1),
('556ebfdc-208c-4679-9bec-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556c9db5-b87c-4639-b4a8-0656125f2f23', 0),
('556ebfdc-210c-4aac-b567-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556c1734-e718-4f62-ae81-02de125f2f23', 0),
('556ebfdc-3d6c-431a-9568-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556ca1ab-cc70-401c-8682-0656125f2f23', 0),
('556ebfdc-52c4-4717-9af2-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556ca11a-b244-4cda-9ef4-02df125f2f23', 0),
('556ebfdc-6e90-4374-aeb3-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556ca1da-5304-47ed-aa5b-02df125f2f23', 0),
('556ebfdc-6f50-4bde-872c-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556c9d4f-4e94-40d6-9ac5-0360125f2f23', 0),
('556ebfdc-78f8-4e76-bc2c-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556ca1be-d480-4088-9c51-035d125f2f23', 0),
('556ebfdc-b0cc-4fca-a9c5-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556ca196-a2a4-4854-9ae0-0704125f2f23', 0),
('556ebfdc-ba10-450e-9f6c-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556c9e77-2e9c-4dee-abac-02d9125f2f23', 0),
('556ebfdc-ca70-4919-b5e2-0ebf125f2f23', '556ebfd8-db34-4278-b60a-0ebf125f2f23', '556c9ddc-bcd0-452f-a1f9-035d125f2f23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `axi_topics`
--

CREATE TABLE IF NOT EXISTS `axi_topics` (
  `id` char(36) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `subject_id` char(36) NOT NULL,
  `level_id` char(36) NOT NULL,
  `display_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_topics`
--

INSERT INTO `axi_topics` (`id`, `name`, `updated_at`, `subject_id`, `level_id`, `display_name`) VALUES
('556aa68d-0198-462b-9ddb-101e125f2f23', 'Geometry', '2015-05-31 06:13:33', '55682636-b5d4-4804-adc4-326d125f2f23', '5568340b-2a04-474b-9568-326f125f2f23', 'àª¬àª¾àª²àª®àª‚àª¦àª¿àª° - Mathematics - Geometry'),
('556c0340-6248-427e-83f8-0360125f2f23', 'Algebra', '2015-06-01 07:01:20', '55682636-b5d4-4804-adc4-326d125f2f23', '5568340b-2a04-474b-9568-326f125f2f23', 'àª¬àª¾àª²àª®àª‚àª¦àª¿àª° - Mathematics - Algebra'),
('559ce184-939c-4f19-a02a-5588125f2f23', 'Geometry2', '2015-07-08 08:38:28', '55682636-b5d4-4804-adc4-326d125f2f23', '1308da82-1275-11e5-84c6-418bf323d4bd', 'àª®àª¾àª§à«àª¯àª®àª¿àª• - Mathematics - Geometry2');

-- --------------------------------------------------------

--
-- Table structure for table `axi_users`
--

CREATE TABLE IF NOT EXISTS `axi_users` (
  `id` char(36) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fb_token` varchar(50) DEFAULT NULL,
  `google_token` varchar(50) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_type` char(36) DEFAULT NULL,
  `path` text,
  `path_dir` text,
  `subscribe` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_users`
--

INSERT INTO `axi_users` (`id`, `name`, `username`, `password`, `fb_token`, `google_token`, `created`, `user_type`, `path`, `path_dir`, `subscribe`) VALUES
('5561c5af-8890-4d1d-b708-01be125f2f23', 'Lakhan Samani', 'lakhan.m.samani@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-24 07:05:59', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'p_2.jpg', '5561c5af-8890-4d1d-b708-01be125f2f23', 1),
('556348ba-76c4-488b-a3e8-01f6125f2f23', 'Lakhan Samani', 'lakhan.samani@actonate.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-25 10:37:22', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', NULL, NULL, 1),
('5568802f-cd70-4325-b47a-326d125f2f23', 'Kashyap Ashara', 'kashyap@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-29 09:35:19', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', '921339_446347958787463_470986341_o.jpg', '5568802f-cd70-4325-b47a-326d125f2f23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `axi_user_types`
--

CREATE TABLE IF NOT EXISTS `axi_user_types` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_user_types`
--

INSERT INTO `axi_user_types` (`id`, `name`) VALUES
('cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'Student'),
('cb6f95fe-fbbc-11e4-b148-01f8d649e9b6', 'Teacher'),
('d0cf96fc-fbbc-11e4-b148-01f8d649e9b6', 'Parent'),
('ddd4e9c3-1ef4-11e5-a1e8-543530b4dd8d', 'Contributor');

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
('5582d938-171c-4f1f-85bd-02ee125f2f23', 'Lakhan', 'lakhan.m.samani@gmail.com', '2015-06-18 14:44:08', '55768e24-d60c-45df-9535-04b0125f2f23', 'àª† àª–à«àª¬ àª¸àª°àª¸ à«àª›à«‡!'),
('5583d50d-67e0-461f-aaa3-1556125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 08:38:37', '5576b530-ab10-40f0-b29d-04af125f2f23', 'àª–à«àª¬ àª¸àª°àª¸..!!'),
('5583d90e-66a8-41b5-8532-119a125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 08:55:42', '55768e24-d60c-45df-9535-04b0125f2f23', 'Nice stuff'),
('5583e8db-933c-408a-aa37-29f9125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:03:07', '5576b530-ab10-40f0-b29d-04af125f2f23', 'helloo'),
('5583e8f9-d00c-477e-a876-3048125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:03:37', '5576b530-ab10-40f0-b29d-04af125f2f23', 'helloo'),
('5583e975-0414-4f42-b1bc-74e3125f2f23', 'kashyap', 'kashyap@gmail.com', '2015-06-19 10:05:41', '5576b530-ab10-40f0-b29d-04af125f2f23', 'helloooo how?'),
('5583e9e0-0fcc-45b5-88a4-3048125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:07:28', '5576b530-ab10-40f0-b29d-04af125f2f23', 'testingg'),
('5583eafa-ddbc-4d34-bfea-3048125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:12:10', '5576b530-ab10-40f0-b29d-04af125f2f23', 'still testing'),
('5583eb77-c8a4-4635-b34e-32b4125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:14:15', '5576b530-ab10-40f0-b29d-04af125f2f23', 'testing 2'),
('5583ebed-cea8-40a3-a9fa-3121125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:16:13', '5576b530-ab10-40f0-b29d-04af125f2f23', 'testing 3'),
('5583eddd-044c-4f7b-8b52-32b4125f2f23', 'kashyap', 'kashyap@gmail.com', '2015-06-19 10:24:29', '5576b530-ab10-40f0-b29d-04af125f2f23', 'sdfsdfsdf'),
('5583ee10-3d94-4014-9c4e-3121125f2f23', 'Kashyap ', 'kashyap@gmail.com', '2015-06-19 10:25:20', '5576b530-ab10-40f0-b29d-04af125f2f23', 'asdfkkdfnkdf testing'),
('5583ee8d-35b4-4794-969c-29f9125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-19 10:27:25', '5576b530-ab10-40f0-b29d-04af125f2f23', 'testign final'),
('55842d43-33b8-4ee7-bde6-4cf7125f2f23', '', '', '2015-06-19 14:54:59', '55768e24-d60c-45df-9535-04b0125f2f23', ''),
('5586a780-a71c-43b4-afe4-3bb5125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-21 12:01:04', '5576b547-6164-42db-8387-04b0125f2f23', 'Nice Video !!!'),
('5586aea3-af10-43eb-944b-30cd125f2f23', 'Kashyap', 'kashyap@gmail.com', '2015-06-21 12:31:31', '55768e24-d60c-45df-9535-04b0125f2f23', 'Reply'),
('5586b08e-4cbc-4a8b-beb9-39ca125f2f23', 'Kashysp', 'Kashyap@gmail.com', '2015-06-21 12:39:42', '55768e24-d60c-45df-9535-04b0125f2f23', 'Testing\r\n'),
('55a6a294-4bc4-45f6-8fca-64cd125f2f23', 'Kashyap', 'kashyap@gm.com', '2015-07-15 18:12:36', '55993e61-41d0-41a4-8c3e-5bd3125f2f23', 'kkk');

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
('55833057-71e8-4c6e-8ae4-02e8125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'testing form main', 'main', 'ok', '2015-06-18 20:55:51'),
('5583d54f-46b8-4745-ba06-5991125f2f23', '5582cb6a-b194-4d08-ad6b-012b125f2f23', 'Kashyap', 'kasyap@gmail.com', 'WOWWW', '2015-06-19 08:39:43'),
('5583e15c-fcc0-4525-aa7d-2c20125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'Kashyap', 'kasyap@gmail.com', 'ajax not working', '2015-06-19 09:31:08'),
('5583e196-64e4-4f82-a63b-74e3125f2f23', '5583d50d-67e0-461f-aaa3-1556125f2f23', 'hello', 'kasyap@gmail.com', 'dfgdfg', '2015-06-19 09:32:06'),
('5583e1f2-3dd4-41a8-baa5-2e00125f2f23', '5583d50d-67e0-461f-aaa3-1556125f2f23', 'Kashyap', 'kasyap@gmail.com', 'reply not working', '2015-06-19 09:33:38'),
('5583ed2f-4e4c-475c-80f3-30b5125f2f23', '5583ebed-cea8-40a3-a9fa-3121125f2f23', 'Kashyap', 'kashyap@gmail.com', 'reply testing', '2015-06-19 10:21:35'),
('5583eed1-9c40-4c4b-848c-34a3125f2f23', '5583ee10-3d94-4014-9c4e-3121125f2f23', 'Kashyap', 'kasyap@gmail.com', 'reply testing', '2015-06-19 10:28:33'),
('5583eed1-e214-4153-9897-30b5125f2f23', '5583ee10-3d94-4014-9c4e-3121125f2f23', 'Kashyap', 'kasyap@gmail.com', 'reply testing', '2015-06-19 10:28:33'),
('5586b42f-be24-41a3-88a0-30f3125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'K', 'k@gm.com', 'Test', '2015-06-21 12:55:11'),
('5586b474-4760-4354-af68-30f3125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'K', 'k@gm.com', 'Final', '2015-06-21 12:56:20'),
('5586b553-0f3c-4757-bc8e-4127125f2f23', '5582d938-171c-4f1f-85bd-02ee125f2f23', 'Kashyap', 'k@gmail.com', 'Test', '2015-06-21 13:00:03'),
('55a6a2ba-8014-46c3-9237-61c2125f2f23', '55a6a294-4bc4-45f6-8fca-64cd125f2f23', 'Kashyap', 'kash@gm.com', 'helllo', '2015-07-15 18:13:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `axi_admins`
--
ALTER TABLE `axi_admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_articles`
--
ALTER TABLE `axi_articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_ebooks`
--
ALTER TABLE `axi_ebooks`
 ADD PRIMARY KEY (`id`), ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `axi_hobbies`
--
ALTER TABLE `axi_hobbies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_images`
--
ALTER TABLE `axi_images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_information_posts`
--
ALTER TABLE `axi_information_posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_information_replies`
--
ALTER TABLE `axi_information_replies`
 ADD PRIMARY KEY (`id`,`comment_id`);

--
-- Indexes for table `axi_levels`
--
ALTER TABLE `axi_levels`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_links`
--
ALTER TABLE `axi_links`
 ADD PRIMARY KEY (`id`), ADD KEY `subtopic_id` (`topic_id`);

--
-- Indexes for table `axi_literatures`
--
ALTER TABLE `axi_literatures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_literature_comments`
--
ALTER TABLE `axi_literature_comments`
 ADD PRIMARY KEY (`id`), ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `axi_literature_posts`
--
ALTER TABLE `axi_literature_posts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_literature_replies`
--
ALTER TABLE `axi_literature_replies`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_news_letters`
--
ALTER TABLE `axi_news_letters`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_ngos`
--
ALTER TABLE `axi_ngos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_parents`
--
ALTER TABLE `axi_parents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
 ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`topic_id`), ADD KEY `sub_topic_id` (`sub_topic_id`);

--
-- Indexes for table `axi_students`
--
ALTER TABLE `axi_students`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_id_2` (`user_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
 ADD PRIMARY KEY (`id`), ADD KEY `updated_by` (`updated_by`), ADD KEY `subject_id` (`topic_id`), ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_sub_hobbies`
--
ALTER TABLE `axi_sub_hobbies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_sub_literatures`
--
ALTER TABLE `axi_sub_literatures`
 ADD PRIMARY KEY (`id`), ADD KEY `literature_id` (`literature_id`);

--
-- Indexes for table `axi_sub_topics`
--
ALTER TABLE `axi_sub_topics`
 ADD PRIMARY KEY (`id`), ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `axi_teachers`
--
ALTER TABLE `axi_teachers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`), ADD KEY `subject_id` (`topic_id`), ADD KEY `sub_topic_id` (`sub_topic_id`);

--
-- Indexes for table `axi_test_results`
--
ALTER TABLE `axi_test_results`
 ADD PRIMARY KEY (`id`), ADD KEY `test_id` (`test_id`), ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `axi_topics`
--
ALTER TABLE `axi_topics`
 ADD PRIMARY KEY (`id`), ADD KEY `subject_id` (`subject_id`), ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `axi_users`
--
ALTER TABLE `axi_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `google_token` (`google_token`), ADD KEY `user_type` (`user_type`), ADD KEY `user_type_2` (`user_type`);

--
-- Indexes for table `axi_user_types`
--
ALTER TABLE `axi_user_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_video_comments`
--
ALTER TABLE `axi_video_comments`
 ADD PRIMARY KEY (`id`), ADD KEY `video_id` (`video_id`);

--
-- Indexes for table `axi_video_replies`
--
ALTER TABLE `axi_video_replies`
 ADD PRIMARY KEY (`id`), ADD KEY `comment_id` (`comment_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_links`
--
ALTER TABLE `axi_links`
ADD CONSTRAINT `axi_links_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
ADD CONSTRAINT `axi_markingschemes_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_news_letters`
--
ALTER TABLE `axi_news_letters`
ADD CONSTRAINT `axi_news_letters_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `axi_admins` (`id`);

--
-- Constraints for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
ADD CONSTRAINT `axi_question_banks_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_students`
--
ALTER TABLE `axi_students`
ADD CONSTRAINT `axi_students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `axi_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_student_subject_mappings_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_sub_literatures`
--
ALTER TABLE `axi_sub_literatures`
ADD CONSTRAINT `axi_sub_literatures_ibfk_1` FOREIGN KEY (`literature_id`) REFERENCES `axi_literatures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_sub_topics`
--
ALTER TABLE `axi_sub_topics`
ADD CONSTRAINT `axi_sub_topics_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`);

--
-- Constraints for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
ADD CONSTRAINT `axi_test_applications_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_test_applications_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `axi_topics` (`id`);

--
-- Constraints for table `axi_topics`
--
ALTER TABLE `axi_topics`
ADD CONSTRAINT `axi_topics_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `axi_topics_ibfk_3` FOREIGN KEY (`level_id`) REFERENCES `axi_levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_users`
--
ALTER TABLE `axi_users`
ADD CONSTRAINT `axi_users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `axi_user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_video_comments`
--
ALTER TABLE `axi_video_comments`
ADD CONSTRAINT `axi_video_comments_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `axi_links` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
