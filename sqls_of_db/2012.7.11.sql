-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2012 at 04:58 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `al`
--

CREATE TABLE IF NOT EXISTS `al` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `al_index` varchar(7) NOT NULL,
  `school` varchar(60) NOT NULL,
  `year` year(4) NOT NULL,
  `medium` text NOT NULL,
  `stream` text NOT NULL,
  `subject` text NOT NULL,
  `grade` char(1) NOT NULL,
  `remark` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `al`
--

INSERT INTO `al` (`id`, `user_id`, `al_index`, `school`, `year`, `medium`, `stream`, `subject`, `grade`, `remark`) VALUES
(7, 74, '1234568', 'sri Dharmaloka', 0000, 'Sinhala', 'Science', 'Select Subject', 'A', 0),
(8, 78, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(9, 80, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_basicinfo`
--

CREATE TABLE IF NOT EXISTS `candidate_basicinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` text NOT NULL,
  `country` text NOT NULL,
  `nationality` text NOT NULL,
  `tp_hm` varchar(10) NOT NULL,
  `tp_mobile` varchar(10) NOT NULL,
  `nic_no` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `nic_no` (`nic_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `candidate_basicinfo`
--

INSERT INTO `candidate_basicinfo` (`user_id`, `title`, `f_name`, `l_name`, `dob`, `gender`, `civil_status`, `address`, `district`, `country`, `nationality`, `tp_hm`, `tp_mobile`, `nic_no`) VALUES
(74, 'Miss', 'chami', 'Uththara', '1989-03-09', 'female', 'single', '246,wedamulla,kelaniya', 'Gampaha', 'Sri Lanka', 'Sri Lankan', '12345', '12345', '889007556'),
(78, 'Mr.', '', '', '0000-00-00', '', '', ',,', 'Select District', 'Select Country', 'Select Nationality', '', '', ''),
(80, 'Mr.', '', '', '0000-00-00', '', '', ',,', 'Select District', 'Select Country', 'Select Nationality', '', '', 'nn');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_user`
--

CREATE TABLE IF NOT EXISTS `candidate_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `candidate_user`
--

INSERT INTO `candidate_user` (`user_id`, `email`, `password`) VALUES
(74, 'chami', 'c'),
(75, '', ''),
(76, 'c', 'c'),
(78, 's', 's'),
(79, 'w', 'w'),
(80, 'n', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cmpny_id` int(11) NOT NULL,
  `cmpny_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `district` text NOT NULL,
  `country` text NOT NULL,
  `tp` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `logo` varchar(20) NOT NULL,
  `web_url` varchar(50) NOT NULL,
  PRIMARY KEY (`cmpny_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE IF NOT EXISTS `company_user` (
  `cmpny_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`cmpny_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `extra_curricular`
--

CREATE TABLE IF NOT EXISTS `extra_curricular` (
  `id` int(11) NOT NULL,
  `user__id` int(11) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `user__id` (`user__id`),
  KEY `user__id_2` (`user__id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `higher_edu`
--

CREATE TABLE IF NOT EXISTS `higher_edu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `remark` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `higher_edu`
--

INSERT INTO `higher_edu` (`id`, `user_id`, `university`, `level`, `description`, `year`, `remark`) VALUES
(8, 74, 'kelaniya uni', 'Select Lev', '12345676', 1981, 0),
(9, 78, '', 'Select Lev', '', 0000, 0),
(10, 80, '', 'Select Lev', '', 0000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE IF NOT EXISTS `interview` (
  `interview_code` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `strt_time` time NOT NULL,
  `end_time` time NOT NULL,
  `duraion` double NOT NULL,
  `venue` varchar(50) NOT NULL,
  `contact_tp` varchar(10) NOT NULL,
  `contact_name` text NOT NULL,
  PRIMARY KEY (`interview_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ol`
--

CREATE TABLE IF NOT EXISTS `ol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ol_index` varchar(7) NOT NULL,
  `school` varchar(60) NOT NULL,
  `year` year(4) NOT NULL,
  `medium` text NOT NULL,
  `subject` text NOT NULL,
  `grade` char(1) NOT NULL,
  `remark` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ol`
--

INSERT INTO `ol` (`id`, `user_id`, `ol_index`, `school`, `year`, `medium`, `subject`, `grade`, `remark`) VALUES
(10, 74, '12345', 'sri dharmaloka', 1991, 'Sinhala', 'Maths', 'A', 0),
(11, 78, '', '', 0000, 'Select Medium', 'Select Subject', 'A', 0),
(12, 80, '', '', 0000, 'Select Medium', 'Select Subject', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `remark_al`
--

CREATE TABLE IF NOT EXISTS `remark_al` (
  `user_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  `rank` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remark_higher`
--

CREATE TABLE IF NOT EXISTS `remark_higher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `gpa` float NOT NULL,
  `grade` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `remark_ol`
--

CREATE TABLE IF NOT EXISTS `remark_ol` (
  `user_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  `rank` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sport` varchar(20) NOT NULL,
  `achivement` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `user_id`, `sport`, `achivement`, `description`, `year`) VALUES
(5, 74, 'Rugger', 'tt', 'rr', 1982),
(6, 78, 'Select Sport', '', '', 0000),
(7, 80, 'Select Sport', '', '', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cmpny_id` int(11) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `age1` int(11) NOT NULL,
  `age2` int(11) NOT NULL,
  `location` text NOT NULL,
  `minimal_quali` text NOT NULL,
  `extra` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `al`
--
ALTER TABLE `al`
  ADD CONSTRAINT `al_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `candidate_basicinfo`
--
ALTER TABLE `candidate_basicinfo`
  ADD CONSTRAINT `candidate_basicinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `extra_curricular`
--
ALTER TABLE `extra_curricular`
  ADD CONSTRAINT `extra_curricular_ibfk_1` FOREIGN KEY (`user__id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `higher_edu`
--
ALTER TABLE `higher_edu`
  ADD CONSTRAINT `higher_edu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ol`
--
ALTER TABLE `ol`
  ADD CONSTRAINT `ol_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `remark_al`
--
ALTER TABLE `remark_al`
  ADD CONSTRAINT `remark_al_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `remark_higher`
--
ALTER TABLE `remark_higher`
  ADD CONSTRAINT `remark_higher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `remark_ol`
--
ALTER TABLE `remark_ol`
  ADD CONSTRAINT `remark_ol_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sport`
--
ALTER TABLE `sport`
  ADD CONSTRAINT `sport_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
