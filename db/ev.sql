-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2015 at 09:09 AM
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
('53196213-e8c0-4b42-a3e3-19ecf1301e8a', 'admin', 'admin@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', 'admin', '2014-03-07 06:07:15');

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
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_articles`
--

INSERT INTO `axi_articles` (`id`, `title`, `alias`, `keywords`, `meta_description`, `content`) VALUES
('5554f5c6-16bc-41e9-9af5-5995125f2f23', 'â€œàªœà«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¶à«àª°à«‡àª·à«àª  (àª…àª¹à«€àª‚ â€™àª­àª£à«‡àª²àª¾â€™)àª²à«‹àª•à«‹ àª•àª°à«‡ àª›à«‡ àª¤à«‡ àªªà«àª°àª•àª¾àª°àª¨à«àª‚ àª†àªšàª°àª£ àª¬àª¾àª•à«€àª¨àª¾ àª…àª¨à«àª¸àª°à«‡ àª›à«‡â€', 'home', 'home', 'home', '<div class="row">\r\n<div class="columns large-7">\r\n<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡.àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡.</p>\r\n<p>àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡.</p>\r\n<p>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a>&nbsp;àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</p>\r\n</div>\r\n<div class="columns large-5"><iframe src="https://www.youtube.com/embed/R7nk2emAVG0?list=PLB4CEAC5DC720AAB9" frameborder="0" width="100%" height="270"></iframe></div>\r\n</div>'),
('5555090f-5788-48f9-8844-5c79125f2f23', 'About EVidyalay', 'about_us', 'about_us', 'about_us', '<p>As we all move in the new era of &ldquo;e&rdquo;, where internet is the key enabler for majority of the day to day things, right from shopping, communicating, tickets, so on and so forth.<br />This has initiated a change in the way of learning as well.<br />EVidyalay is one more sincere attempt to drive the change in the way of learning so that the learning becomes simple, more users friendly and interesting.<br />EVidyalay is an online video library of Mathematics, Vedic Maths and Early learning Gujarati. The video library is under continuous development taking into consideration your feedbacks. EVidyalay&rsquo;s vision is to make education accessible to all children, which is repeatable as well as independent of time and location. Children should be able to learn anytime, anywhere at their own pace.</p>\r\n<p>EVidyalay also hosts 3 interesting features. 1. &lsquo;JIVAN CHARITRA (Biography)&rsquo;, a collection of inspiring stories of Legendary lives. This will help build value system and overall development of children, 2. &lsquo;Hobby Lobby&rsquo;, to ignite Creativity, an essential skill for effective learning. 3) &lsquo;Mahiti Mitra&rsquo;, to give friendly educational information.</p>\r\n<p>Evidyalay has got acceptance from&nbsp;<span><a href="http://evidyalay.net/evidyalayyoutubeedu/">YouTube EDU(The Global Classroom).</a></span></p>'),
('555509e0-8924-4337-b2eb-5b46125f2f23', 'Vision', 'vision', 'vision', 'vision', '<p>&nbsp;&lsquo;Education is a key to progress.&rsquo; &ndash; is a very well known saying; though there are other dimensions too. It is education and pursuant zeal and inquisitiveness to know and explore the unknown that open the door to knowledge and awakening.</p>\r\n<p>With the advent of human mind into fathomless depths of knowledge, the human societies have evolved into more and more complex structures and directions; and they are still evolving at a much greater pace. What quality and dimension the human societies will shape into &ndash; say after 50 or 100 years &ndash; is mind boggling. We feel awed at the achievements of human mind in multifarious directions.</p>\r\n<p>We also feel awfully sorry for the immense harm the same human mind has done to the environment, the biomes, animal and vegetation species and last but not the least, the human societies themselves.</p>\r\n<p>Schools are abodes for learning processes, right from the dawn of civilization; and are the cradles of this development of human mind. The task of a teacher &ndash; to prepare a child to come up to a measurable standard tto acquire at least a part existing knowledge base and be armed to venture into the unknown &ndash; is becoming more and more onerous.</p>\r\n<p>At the same time, we feel ashamed at the degeneration of the education system; which aims only at preparing students for a race to acquire prosperity and recognition. Development of rudimentary scholastic qualities unfortunately gets a secondary importance.</p>\r\n<p>It is in this light that the spirit of &lsquo;E-Vidyalay&rsquo; may be interpreted. It aims at nurturing the qualities of fresh thought, creativity, honest inquisitiveness and last but not the least, the fundamentally built in human and moral values. The following video aptly focuses our attention on this spirit.</p>\r\n<div>&lt;iframe style="height:800px;width:100%" src="https://www.youtube.com/embed/hi0dWqK00Nw" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</div>\r\n<p>Hiral&rsquo;s output of&nbsp;<span><span>2 years (280+ quality&nbsp;educational videos)</span></span>&nbsp;is no doubt a commendable effort. How far she has succeeded can only be judged, if the approach is implemented by students, teachers and parents; and whether it is effective. But more noticeable fact , is her urge to evolve a new approach in the method of imparting knowledge. It is an initiative in the right direction. It is also possible that new avenues of education system may evolve by the interactions; E-Vidyalay is going to generate amongst its audience. The theatre here is open for a creative and refreshing play.</p>\r\n<p>Let it generate fun, quest, creativity and fresh thought. Let thousand blooms blossom and door to a<span><span>&nbsp;new way of &lsquo;How to live life?&rsquo;</span></span>&nbsp;open up.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `axi_links`
--

CREATE TABLE IF NOT EXISTS `axi_links` (
  `id` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `link_url` varchar(500) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_links`
--

INSERT INTO `axi_links` (`id`, `subject_id`, `link_url`, `tags`) VALUES
('555daef6-6d8c-4289-9d69-058b125f2f23', '5550643a-e908-4862-88cb-0551125f2f23', 'sadfasd', 'sfasdfa');

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
('556430fa-9b0c-4ed5-8c3f-0460125f2f23', 'EV latest update-1', '<p>àªœà«‡àª® àªœà«‡àª® àª†àªªàª£à«‡ &lsquo;àªˆ&rsquo;- àª¯à«àª—àª®àª¾àª‚ àª†àª—àª³ àª§àªªàª¤àª¾ àªœàªˆàª àª›à«€àª; àª¤à«‡àª® àª¤à«‡àª® àª–àª°à«€àª¦à«€, àª¸àª‚àª¦à«‡àª¶àª¾ àªµà«àª¯àªµàª¹àª¾àª°, àªŸàª¿àª•à«€àªŸà«‹ àª–àª°à«€àª¦àªµà«€, àªàªµàª¾àª‚ àª˜àª£àª¾àª‚ àª°à«‹àªœàª¿àª‚àª¦àª¾ àª•àª¾àª®à«‹àª®àª¾àª‚ àª†àªªàª£à«‡ àª‡àª¨à«àªŸàª°àª¨à«‡àªŸ àªªàª° àªµàª§àª¾àª°à«‡ àª¨à«‡ àªµàª§àª¾àª°à«‡ àª†àª§àª¾àª° àª°àª¾àª–àª¤àª¾ àª¥àªµàª¾ àª²àª¾àª—à«àª¯àª¾ àª›à«€àª. àª†àª¨à«‡ àª•àª¾àª°àª£à«‡ àª¶à«€àª–àªµàª¾àª¨à«€ àª†àªªàª£à«€ àªªàª§à«àª§àª¤àª¿àª®àª¾àª‚ àªªàª£ àª¬àª¦àª²àª¾àªµ àª†àªµàªµàª¾ àª²àª¾àª—à«àª¯à«‹ àª›à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯ àª†àªµàª¾ àªœ àªàª• àª¬àª¦àª²àª¾àªµ àª¤àª°àª«àª¨à«‹ àªªà«àª°àª¾àª®àª¾àª£àª¿àª• àªªà«àª°àª¯àª¤à«àª¨ àª›à«‡ - àª¶à«€àª–àªµàª¾àª¨à«€ àª°à«€àª¤àª®àª¾àª‚ àªªàª°àª¿àªµàª°à«àª¤àª¨ àª†àªµà«‡, àª¤à«‡ àª®àª¾àªŸà«‡àª¨à«‹ àªªà«àª°àª¯àª¾àª¸. àª†àª¶àª¯ àª àª›à«‡ àª•à«‡, àª¨àªµà«àª‚ àªœà«àªžàª¾àª¨ àª¸àª®àªœàªµàª¾àª¨à«€ àªªà«àª°àª•à«àª°àª¿àª¯àª¾ àª¸àª°àª³ àª¬àª¨à«€ àªœàª¾àª¯; àª¤à«‡ àªµàª¿àª¦à«àª¯àª¾àª°à«àª¥à«€àª¨à«‡ àª®àª¾àªŸà«‡ àª–à«àª¬ àª¸àª°àª³ àª¹à«‹àª¯ àª…àª¨à«‡ àª°àª¸ àªªàª¡à«‡ àª¤à«‡àªµà«€ àªªàª£ àª¹à«‹àª¯ àª…àª¨à«‡ àª›àª¤àª¾àª‚ àª¤à«‡àª®àª¾àª‚ àª¸àª®àª¯ àª…àª¨à«‡ àªœàª—à«àª¯àª¾àª¨à«àª‚ àª¬àª‚àª§àª¨ àª¨ àª°àª¹à«‡. <br /> àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª®àª¾àª‚ àª¹àª¾àª² àªªà«àª°àª¾àª¥àª®àª¿àª• àª…àª¨à«‡ àª®àª¾àª§à«àª¯àª®àª¿àª• àª¶àª¿àª•à«àª·àª£ àª®àª¾àªŸà«‡àª¨à«€ àªàª• àª“àª¨ àª²àª¾àªˆàª¨ àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€ àª›à«‡.àª¤à«‡àª®àª¾àª‚ àª¹àª¾àª² àª—àª£àª¿àª¤, àªàª¡àªªà«€ àª—àª£àª¤àª°à«€ àª…àª¨à«‡ àª—à«àªœàª°àª¾àª¤à«€àª¨àª¾ àªªà«àª°àª¾àª°àª‚àª­àª¿àª• àª¶àª¿àª•à«àª·àª£àª¨à«‡ àª²àª—àª¤àª¾ àªµàª¿àª¡àª¿àª¯à«‹ àª®à«‹àªœà«‚àª¦ àª›à«‡.àª¤àª®àª¾àª°àª¾ àª¤àª°àª«àª¥à«€ àª®àª³àª¤àª¾ àª«à«€àª¡àª¬à«‡àª• ( àªªà«àª°àª¤àª¿àª­àª¾àªµà«‹ àª…àª¨à«‡ àª¸à«‚àªšàª¨à«‹) àª§à«àª¯àª¾àª¨àª®àª¾àª‚ àª°àª¾àª–à«€àª¨à«‡ àª† àªµàª¿àª¡àª¿àª¯à«‹ àª²àª¾àª¯àª¬à«àª°à«‡àª°à«€àª®àª¾àª‚ àª¸àª¤àª¤ àª¸àª‚àªµàª°à«àª§àª¨ àª…àª¨à«‡ àª«à«‡àª°àª«àª¾àª° àªªàª£ àª¥àªˆ àª°àª¹à«àª¯àª¾ àª›à«‡. <br /> <strong>àª àª¨à«‹àª‚àª§àªµàª¾ àª²àª¾àª¯àª• àª›à«‡ àª•à«‡,<a href="http://evidyalay.net/evidyalayyoutubeedu/">àª¯à«-àªŸà«àª¯à«àª¬ àª¸àª‚àª¸à«àª¥àª¾àª¨àª¾ àª¶àª¿àª•à«àª·àª£àª¾àª¤à«àª®àª• àªµàª¿àª­àª¾àª—</a> àª¤àª°àª«àª¥à«€ àªˆ-àªµàª¿àª¦à«àª¯àª¾àª²àª¯àª¨à«‡ àª®àª¾àª¨à«àª¯àª¤àª¾ àª®àª³à«‡àª²à«€ àª›à«‡.</strong></p>', '2015-05-26 08:38:18', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `subject_id` char(36) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_question_banks`
--

INSERT INTO `axi_question_banks` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `option5`, `correct_ans`, `path`, `path_dir`, `subject_id`, `updated_at`) VALUES
('555daf20-2f74-49b4-a59e-06e8125f2f23', '<p>Wat are you upto</p>', '<p>asdfasd</p>', '<p>sadfasd</p>', '<p>dsfasd</p>', '<p>sadfasd</p>', '<p>sadfasdf</p>', 'option1,0,0,0,option5', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-21 10:10:40'),
('555db49d-7754-49b9-b869-0785125f2f23', '<p>Good try</p>', '<p>dfgsd</p>', '<p>dsfgsd</p>', '<p>oiuoiu</p>', '<p>jlj</p>', '<p>rtye</p>', '0,0,0,option4,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-21 10:34:05'),
('5561e3b7-0b14-4a79-a891-01bc125f2f23', '<p>Well done</p>', '<p>sdfas</p>', '<p>adas</p>', '<p>asdas</p>', '<p>asdas</p>', '<p>asdas</p>', 'option1,0,0,0,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 14:44:07'),
('5561e4d5-d45c-485c-80b0-01a9125f2f23', '<p>Want some thing more?</p>', '<p>ya</p>', '<p>got</p>', '<p>nity</p>', '<p>stop it</p>', '<p>well</p>', '0,0,option3,option4,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 14:48:53'),
('5561e632-03f4-4a88-9fc9-01a9125f2f23', '<p>Hey man sorry</p>', '<p>ok</p>', '<p>k</p>', '<p>wat the hell</p>', '<p>fine got it</p>', '<p>bye</p>', '0,0,0,option4,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 14:54:42'),
('5561e6d7-b7b8-4db0-af60-01bf125f2f23', '<p>Is it required?</p>', '<p>no</p>', '<p>not at all</p>', '<p>ok fine</p>', '<p>thnx</p>', '<p>its ok</p>', 'option1,0,0,0,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 14:57:27'),
('5561e7b9-0334-47ee-af47-01bb125f2f23', '<p>Well thnx this is not needed?</p>', '<p>o wow</p>', '<p>not required</p>', '<p>ok</p>', '<p>thxn</p>', '<p>word</p>', '0,0,0,0,option5', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 15:01:13'),
('5561e832-2e6c-4c49-93f9-01a9125f2f23', '<p>Hey this is dummy entry</p>', '<p>oh</p>', '<p>now i got it</p>', '<p>well said</p>', '<p>funny it was</p>', '<p>no issues</p>', '0,0,0,option4,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 15:03:14'),
('5561e85b-d260-4bdb-a558-01be125f2f23', '<p>Hack testing</p>', '<p>really hacking</p>', '<p>learning</p>', '<p>well not</p>', '<p>well said</p>', '<p>lore</p>', '0,option2,0,0,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 15:03:55'),
('5561ea38-a220-4cdf-98c2-01bc125f2f23', '<p>Well hope full for what?</p>', '<p>nothing</p>', '<p>much</p>', '<p>better</p>', '<p>well</p>', '<p>nope</p>', '0,option2,0,0,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 15:11:52'),
('5561ea8d-0ce4-4a19-a7ef-01bf125f2f23', '<p>Well last one to go?</p>', '<p>ok</p>', '<p>fine</p>', '<p>go</p>', '<p>bye</p>', '<p>knock</p>', 'option1,0,0,0,0', NULL, NULL, '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 15:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `axi_standards`
--

CREATE TABLE IF NOT EXISTS `axi_standards` (
  `id` char(36) NOT NULL,
  `section` varchar(16) NOT NULL,
  `standard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_standards`
--

INSERT INTO `axi_standards` (`id`, `section`, `standard`) VALUES
('55503091-9644-44a9-a6d6-0430125f2f23', 'secondary', 10),
('55503600-fa98-428e-8fc4-0488125f2f23', 'primary', 1);

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
('556348ba-c124-4fb2-b7c8-01f6125f2f23', NULL, '556348ba-76c4-488b-a3e8-01f6125f2f23');

-- --------------------------------------------------------

--
-- Table structure for table `axi_student_subject_mappings`
--

CREATE TABLE IF NOT EXISTS `axi_student_subject_mappings` (
  `id` char(36) NOT NULL,
  `student_id` char(36) NOT NULL,
  `subject_id` char(36) NOT NULL,
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
  `standard_id` char(36) NOT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_subjects`
--

INSERT INTO `axi_subjects` (`id`, `name`, `standard_id`, `display_name`, `updated_at`, `updated_by`) VALUES
('5550643a-e908-4862-88cb-0551125f2f23', 'English', '55503091-9644-44a9-a6d6-0430125f2f23', '10th English', '2015-05-11 08:11:38', '53196213-e8c0-4b42-a3e3-19ecf1301e8a');

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
  `subject_id` char(36) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_test_applications`
--

INSERT INTO `axi_test_applications` (`id`, `student_id`, `subject_id`, `date`) VALUES
('55622005-be20-4074-ad80-01ba125f2f23', '5561c76e-ee1c-44bf-af4e-01bf125f2f23', '5550643a-e908-4862-88cb-0551125f2f23', '2015-05-24 20:37:23');

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
('55622bf5-204c-4c1d-8305-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e3b7-0b14-4a79-a891-01bc125f2f23', 0),
('55622bf5-22ac-4ce9-86b3-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e832-2e6c-4c49-93f9-01a9125f2f23', -1),
('55622bf5-3dbc-4b13-8eb8-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e6d7-b7b8-4db0-af60-01bf125f2f23', 0),
('55622bf5-48fc-4906-95a7-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '555db49d-7754-49b9-b869-0785125f2f23', -1),
('55622bf5-4e48-436a-b071-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e632-03f4-4a88-9fc9-01a9125f2f23', -1),
('55622bf5-5dd4-4fb9-9e39-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e85b-d260-4bdb-a558-01be125f2f23', -1),
('55622bf5-b030-4e33-91b2-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561ea38-a220-4cdf-98c2-01bc125f2f23', -1),
('55622bf5-c56c-413f-ad5f-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e7b9-0334-47ee-af47-01bb125f2f23', -1),
('55622bf5-d33c-4205-802c-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561ea8d-0ce4-4a19-a7ef-01bf125f2f23', -1),
('55622bf5-f5a4-46b7-8e5e-01b7125f2f23', '55622005-be20-4074-ad80-01ba125f2f23', '5561e4d5-d45c-485c-80b0-01a9125f2f23', -1);

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
  `path_dir` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `axi_users`
--

INSERT INTO `axi_users` (`id`, `name`, `username`, `password`, `fb_token`, `google_token`, `created`, `user_type`, `path`, `path_dir`) VALUES
('5561c5af-8890-4d1d-b708-01be125f2f23', 'Lakhan Samani', 'lakhan.m.samani@gmail.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-24 07:05:59', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'p_2.jpg', '5561c5af-8890-4d1d-b708-01be125f2f23'),
('556348ba-76c4-488b-a3e8-01f6125f2f23', 'Lakhan Samani', 'lakhan.samani@actonate.com', '39dea93b8f5e606c5fa3a62859d5af337561905d', NULL, NULL, '2015-05-25 10:37:22', 'cb6f8154-fbbc-11e4-b148-01f8d649e9b6', NULL, NULL);

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
('cb6f8154-fbbc-11e4-b148-01f8d649e9b6', 'student'),
('cb6f95fe-fbbc-11e4-b148-01f8d649e9b6', 'teacher'),
('d0cf96fc-fbbc-11e4-b148-01f8d649e9b6', 'parent');

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
-- Indexes for table `axi_links`
--
ALTER TABLE `axi_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subtopic_id` (`subject_id`);

--
-- Indexes for table `axi_markingschemes`
--
ALTER TABLE `axi_markingschemes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `axi_news_letters`
--
ALTER TABLE `axi_news_letters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_parents`
--
ALTER TABLE `axi_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_question_banks`
--
ALTER TABLE `axi_question_banks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `axi_standards`
--
ALTER TABLE `axi_standards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_students`
--
ALTER TABLE `axi_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `axi_student_subject_mappings`
--
ALTER TABLE `axi_student_subject_mappings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `standard` (`standard_id`);

--
-- Indexes for table `axi_teachers`
--
ALTER TABLE `axi_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `axi_test_results`
--
ALTER TABLE `axi_test_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `axi_users`
--
ALTER TABLE `axi_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `google_token` (`google_token`),
  ADD KEY `user_type` (`user_type`),
  ADD KEY `user_type_2` (`user_type`);

--
-- Indexes for table `axi_user_types`
--
ALTER TABLE `axi_user_types`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `axi_links`
--
ALTER TABLE `axi_links`
  ADD CONSTRAINT `axi_links_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `axi_question_banks_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `axi_student_subject_mappings_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_subjects`
--
ALTER TABLE `axi_subjects`
  ADD CONSTRAINT `axi_subjects_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `axi_admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_subjects_ibfk_2` FOREIGN KEY (`standard_id`) REFERENCES `axi_standards` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_applications`
--
ALTER TABLE `axi_test_applications`
  ADD CONSTRAINT `axi_test_applications_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `axi_students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `axi_test_applications_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `axi_subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `axi_test_results`
--
ALTER TABLE `axi_test_results`
  ADD CONSTRAINT `axi_test_results_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `axi_test_applications` (`id`),
  ADD CONSTRAINT `axi_test_results_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `axi_question_banks` (`id`);

--
-- Constraints for table `axi_users`
--
ALTER TABLE `axi_users`
  ADD CONSTRAINT `axi_users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `axi_user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
