-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 06:49 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getpayed`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE `forum_answer` (
  `a_id` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `a_answer` varchar(255) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_datetime` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`a_id`, `id`, `a_answer`, `a_name`, `a_email`, `a_datetime`) VALUES
(1, 1, 'oiedj2eiojdo2ie', 'goddy', 'g@yahoo.com', '2018-12-08 12:54:15.314048'),
(2, 2, 'joijdioejidje', 'john', 'h@ejdedejk', '2018-12-08 12:54:49.613843'),
(3, 2, 'weqdwe', 'Feerry', 'sw@yahho.com', '2018-12-08 13:43:16.321332'),
(4, 2, 'dedfwefre', 'Jude', 'j@yahoo.com', '2018-12-08 13:53:00.882758'),
(5, 6, 'edede', 'Don', 'xx@hie', '2018-12-08 15:13:07.383200'),
(6, 7, 'jhewduewhbui', 'samuel', 'hh@huuhwdudsh', '2018-12-08 16:05:44.417388'),
(7, 7, 'hgvewdhwe', 'guysdgew', 'wsqhg@khhwehd', '2018-12-08 16:09:25.299118'),
(8, 7, 'I strongly disagreed with your claims, Chinaman', 'Goddy', 'g@m', '2018-12-09 08:01:53.784141'),
(9, 7, 'Yes. Its true', 'KIngsler', 'k@yyhhh', '2018-12-09 08:05:04.821052'),
(10, 2, 'wqxqw', 'Guuuuuu', 'g@yyy', '2018-12-09 08:25:30.895935'),
(11, 2, 'wqxqesw', 'Guuuuuu', 'g@yyy', '2018-12-09 08:26:48.988525'),
(12, 0, 'ccwsdccd', '', '', '2018-12-10 22:12:40.532966');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE `forum_question` (
  `id` int(10) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `board` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reply` int(10) NOT NULL,
  `datetime` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `board`, `name`, `reply`, `datetime`) VALUES
(1, 'Why Buhari may Jail Tinubu', 'ygegwdyugwedyuwe', 1, 'buhari', 0, '2018-12-08 12:40:14.407641'),
(2, 'The home of furniture', 'knbxjbewqjxcb', 2, 'furniture', 0, '2018-12-08 12:44:34.515754'),
(3, 'dehdwej', 'fwerfdwe', 1, 'eferw', 0, '2018-12-08 12:46:57.471810'),
(4, 'Kenya is ahead of Nigeria', 'ihjkhkjkj', 2, 'ijjiejiew', 0, '2018-12-08 14:48:45.539900'),
(7, 'Nice effort Liverpool', 'qewdwqediu', 3, 'dxjw', 0, '2018-12-08 16:03:13.139073'),
(8, 'China\'s economic Growth', 'ewfre', 2, 'chinaman', 0, '2018-12-09 08:00:02.151863'),
(9, 'Love affairs', 'bnjnbexdkjweq', 32, '', 0, '2018-12-10 22:10:26.697666');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `xu_nme` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `acct_no` int(50) NOT NULL,
  `acct_name` varchar(50) NOT NULL,
  `fb_url` varchar(255) NOT NULL,
  `fb_name` varchar(100) NOT NULL,
  `referer` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `reg_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `xu_nme`, `email`, `pwd`, `bank_name`, `acct_no`, `acct_name`, `fb_url`, `fb_name`, `referer`, `dob`, `reg_date`) VALUES
(4, 'root', 'g@iewidwe', '', 'aWSDWQ', 23434, 'FYUFGYU', 'JKHJ', 'BJBNJK', 'BJB', '611960', '2018-12-09 07:54:34.726617'),
(5, 'root', 'g@iewidwe', '', 'aWSDWQ', 23434, 'FYUFGYU', 'JKHJ', 'BJBNJK', 'BJB', '611960', '2018-12-09 07:56:56.872796'),
(6, 'root', 'g@yjjkj', '', 'swsdqw', 4354356, 'dgfdhg', 'rtyrfyur', 'yrytryutryu', 'fyufyu', '421977', '2018-12-09 07:58:27.026588');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_answer`
--
ALTER TABLE `forum_answer`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `forum_question`
--
ALTER TABLE `forum_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_answer`
--
ALTER TABLE `forum_answer`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
