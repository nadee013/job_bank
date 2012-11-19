-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2012 at 06:43 PM
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`id`)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `remark_al`
--

CREATE TABLE IF NOT EXISTS `remark_al` (
  `user_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  `rank` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `remark_ol`
--

CREATE TABLE IF NOT EXISTS `remark_ol` (
  `user_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  `rank` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
