-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2015 at 01:21 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auto_parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user` varchar(99) NOT NULL,
  `cookie` varchar(10) NOT NULL,
  `ip` varchar(99) NOT NULL,
  `url` varchar(9999) NOT NULL,
  `ref` varchar(9999) NOT NULL,
  `browser` varchar(9999) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=228 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `user`, `cookie`, `ip`, `url`, `ref`, `browser`, `timestamp`) VALUES
(129, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-03 16:58:35'),
(130, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:06'),
(131, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:13'),
(132, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:14'),
(133, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:42'),
(134, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:43'),
(135, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:44'),
(136, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:22:45'),
(137, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:23:04'),
(138, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:23:05'),
(139, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:23:29'),
(140, '1', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:23:30'),
(141, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:23:43'),
(142, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:24:50'),
(143, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:24:51'),
(144, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:24:52'),
(145, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:24:59'),
(146, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:25:00'),
(147, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:25:01'),
(148, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:25:03'),
(149, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:08'),
(150, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:09'),
(151, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:10'),
(152, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:12'),
(153, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:13'),
(154, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:14'),
(155, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:15'),
(156, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:17'),
(157, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:18'),
(158, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:19'),
(159, '', '3734771', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 07:30:20'),
(160, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-04 17:03:46'),
(161, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:30.0) Gecko/20100101 Firefox/30.0', '2014-06-05 07:03:15'),
(162, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:06:26'),
(163, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/prices.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:06:37'),
(164, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:06:38'),
(165, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:06:44'),
(166, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:06:45'),
(167, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:07:02'),
(168, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:07:03'),
(169, '', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:07:16'),
(170, '1', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:07:17'),
(171, '1', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/prices.php', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:07:28'),
(172, '1', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/index.php', 'http://127.0.0.1/A-1%20Injection/prices.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:13:53'),
(173, '1', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/index.php', 'http://127.0.0.1/A-1%20Injection/index.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:15:39'),
(174, '1', '4392303', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/prices.php', 'http://127.0.0.1/A-1%20Injection/index.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 10:15:49'),
(175, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', '2014-06-30 12:04:01'),
(176, '', '4787261', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/about.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', '2014-06-30 12:04:09'),
(177, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:31:36'),
(178, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:31:40'),
(179, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:31:42'),
(180, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/registration.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:43:41'),
(181, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/registration.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:45:18'),
(182, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/registration.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:53:25'),
(183, '', '5929840', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/registration.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-06-30 12:53:26'),
(184, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-04 17:56:23'),
(185, '', '', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/', 'http://127.0.0.1/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:41:10'),
(186, '', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:41:24'),
(187, '', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:41:26'),
(188, '', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:41:45'),
(189, '1', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:41:46'),
(190, '1', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/login.php', 'http://127.0.0.1/A-1%20Injection/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 17:43:52'),
(191, '1', '', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', '', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:11:08'),
(192, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', '', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:11:14'),
(193, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', '', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:11:35'),
(194, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', '', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:13:27'),
(195, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', '', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:18:10'),
(196, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:18:29'),
(197, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:18:30'),
(198, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:22:43'),
(199, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:23:53'),
(200, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:23:55'),
(201, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:24:03'),
(202, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:24:04'),
(203, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:25:26'),
(204, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:25:27'),
(205, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:31:28'),
(206, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:31:33'),
(207, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:35:44'),
(208, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:35:57'),
(209, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:35:58'),
(210, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:41:26'),
(211, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:43:11'),
(212, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:43:52'),
(213, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:49:50'),
(214, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php?msg=Invalid+credentials', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:50:28'),
(215, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:50:32'),
(216, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:51:02'),
(217, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:51:05'),
(218, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:51:07'),
(219, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:52:58'),
(220, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:53:20'),
(221, 'alpha', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/myaccount.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:53:49'),
(222, 'alpha', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/check-login.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:54:15'),
(223, '1', '9037322', '127.0.0.1', 'http://127.0.0.1/A-1%20Injection/myaccount.php', 'http://127.0.0.1/A-1%20Injection/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:54:16'),
(224, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/check-login.php', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:54:30'),
(225, '1', '3722137', '127.0.0.1', 'http://127.0.0.1/sql%20one/myaccount.php', 'http://127.0.0.1/sql%20one/login.php', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-06 19:54:31'),
(226, '', '', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-07 06:19:06'),
(227, '', '2126922', '127.0.0.1', 'http://127.0.0.1/sql%20one/login.php', 'http://127.0.0.1/sql%20one/', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:31.0) Gecko/20100101 Firefox/31.0', '2014-07-07 06:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `username` varchar(14) NOT NULL,
  `payment_details` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`username`, `payment_details`) VALUES
('alpha', 'Paid by cheque number 239857109 for amount Rs 26 lakh'),
('alpha', 'Paid by cheque number 239857110 for amount Rs 13 lakh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(99) NOT NULL,
  `product_price` int(8) NOT NULL,
  `category` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `category`) VALUES
(1, 'Iron cover', 9200, 'accesories'),
(2, 'Steel cover', 4250, 'accesories'),
(3, 'Aluminium cover', 6720, 'accesories'),
(4, 'Gold plated cover', 24000, 'premium'),
(5, 'Silver plated cover', 18000, 'premium');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `email` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `phone` varchar(14) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `name`, `phone`) VALUES
('alpha', 'alpha-pwd-11', 'alpha@example.com', 'Alpha User', '1234567890'),
('beta', 'beta-pwd-11', 'beta@example.com', 'Beta User', '2345678901'),
('gamma', 'gamma-pwd-11', 'gamma@example.com', 'Gamma User', '3456789012'),
('delta', 'delta-pwd-11', 'delta@example.com', 'Delta User', '4567890123'),
('epsilon', 'epsilon-pwd-11', 'epsilon@example.com', 'Epsilon User', '5678901234'),
('zeta', 'zeta-pwd-11', 'zeta@example.com', 'Zeta User', '6789012345'),
('eta', 'eta-pwd-11', 'eta@example.com', 'Eta User', '7890123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
