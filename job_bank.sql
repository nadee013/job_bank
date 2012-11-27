-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2012 at 03:05 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `job_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `al`
--

CREATE TABLE `al` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `al`
--

INSERT INTO `al` (`id`, `user_id`, `al_index`, `school`, `year`, `medium`, `stream`, `subject`, `grade`, `remark`) VALUES
(1, 208, '1452558', 'Sri Dharmaloka Central College', 2007, 'Sinhala', 'Science', 'Biology', 'B', 0),
(2, 208, '1452558', 'Sri Dharmaloka Central College', 2007, 'Sinhala', 'Science', 'Physics', 'B', 0),
(3, 208, '1452558', 'Sri Dharmaloka Central College', 2007, 'Sinhala', 'Science', 'Chemistry', 'B', 0),
(4, 209, '21525', 'Sri Dharmaloka Central College', 2006, 'Sinhala', 'Science', 'Physics', 'C', 0),
(5, 209, '21525', 'Sri Dharmaloka Central College', 2006, 'Sinhala', 'Science', 'Chemistry', 'A', 0),
(6, 210, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(7, 211, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_for_vacancy`
--

CREATE TABLE `candidates_for_vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_id` int(11) NOT NULL,
  `cmpny_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `action` varchar(10) NOT NULL DEFAULT 'pending',
  `interview_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vacancy_id` (`vacancy_id`),
  KEY `cmpny_id` (`cmpny_id`),
  KEY `candidate_id` (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `candidates_for_vacancy`
--

INSERT INTO `candidates_for_vacancy` (`id`, `vacancy_id`, `cmpny_id`, `candidate_id`, `action`, `interview_time`) VALUES
(1, 1, 1, 208, 'rejected', 1351843200),
(2, 1, 1, 209, 'rejected', 1351844100),
(3, 2, 1, 208, 'rejected', 1351843200),
(5, 8, 1, 208, 'pending', 0),
(6, 3, 1, 209, 'pending', 0),
(7, 3, 1, 208, 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_basicinfo`
--

CREATE TABLE `candidate_basicinfo` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `pic` varchar(200) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `dob` int(11) NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` text NOT NULL,
  `country` text NOT NULL,
  `nationality` text NOT NULL,
  `tp_hm` varchar(10) NOT NULL,
  `tp_mobile` varchar(10) NOT NULL,
  `nic_no` varchar(10) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `searchable` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `nic_no` (`nic_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `candidate_basicinfo`
--

INSERT INTO `candidate_basicinfo` (`user_id`, `title`, `pic`, `f_name`, `l_name`, `dob`, `gender`, `civil_status`, `address`, `district`, `country`, `nationality`, `tp_hm`, `tp_mobile`, `nic_no`, `cv`, `searchable`) VALUES
(208, 'Miss', '', 'Nadee', 'Anuththara', 577756800, 'female', 'single', '246,Wedamulla,Kelaniya', 'Gampaha', 'Sri Lanka', 'Sri Lankan', '0771245745', '0112451241', '886414235V', '', 1),
(209, 'Miss', 'uploads/c98c937437d1576a5e7cb3d2fed76e31.jpg', 'Chami', 'Uththara', 508377600, 'female', 'single', '246,Wedamulla,Kelaniya', 'Gampaha', 'Sri Lanka', 'Sri Lankan', '0715622512', '0112454521', '154256123v', '', 1),
(210, 'Mr.', '', 'Roshan', 'Malcolm', 318211200, 'male', 'single', '109,Suriyapaluwa,Kadawatha', 'Colombo', 'Sri Lanka', 'Sri Lankan', '0774522155', '0112929256', '124552122V', '', 1),
(211, 'Mr.', 'uploads/profile_pic.jpg', 'Arunoda', 'Susiripala', 592959600, 'male', 'single', ', , ', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '88290083v', '', 1),
(212, 'Mr.', 'uploads/profile_pic.jpg', 'name', 'last', 0, 'male', 'single', ', , ', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '882900-37v', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_user`
--

CREATE TABLE `candidate_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;

--
-- Dumping data for table `candidate_user`
--

INSERT INTO `candidate_user` (`user_id`, `email`, `password`) VALUES
(208, 'nadee@gmail.com', 'n'),
(209, 'chami@gmail.com', 'c'),
(210, 'roshan@gmail.com', 'r'),
(211, 'arunoda@gmail.com', 'a'),
(212, 'arunoda@hh.com', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `user_id` int(11) NOT NULL,
  `cmpny_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `industry` varchar(50) NOT NULL,
  `district` text NOT NULL,
  `country` text NOT NULL,
  `tp` varchar(10) NOT NULL,
  `fax` varchar(10) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `web_url` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`user_id`, `cmpny_name`, `address`, `industry`, `district`, `country`, `tp`, `fax`, `logo`, `web_url`) VALUES
(1, 'Helis & Sons Pvt Ltd', '23,Havelock rd,Colombo 2', 'Apparel', 'Colombo', 'Sri Lanka', '0112959875', '0112959876', 'logo/bfa9eca2896ffb7e44f3c86c5c16d3b0.jpg', 'www.helis.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE `company_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`user_id`, `email`, `password`) VALUES
(1, 'helis@gmail.com', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `extra_curricular`
--

CREATE TABLE `extra_curricular` (
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

CREATE TABLE `higher_edu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `university` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `remark` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `higher_edu`
--

INSERT INTO `higher_edu` (`id`, `user_id`, `university`, `level`, `description`, `year`, `remark`) VALUES
(55, 208, 'University of Kelaniya', 'Degree', 'BSc Management and Information Technology', 2008, 0),
(56, 209, '', 'Select Lev', '', 0000, 0),
(57, 210, '', 'Select Lev', '', 0000, 0),
(58, 211, '', 'Select Lev', '', 0000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ol`
--

CREATE TABLE `ol` (
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
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Dumping data for table `ol`
--

INSERT INTO `ol` (`id`, `user_id`, `ol_index`, `school`, `year`, `medium`, `subject`, `grade`, `remark`) VALUES
(171, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'Sinhala', 'A', 0),
(172, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'English', 'A', 0),
(173, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'Maths', 'A', 0),
(174, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'Science', 'A', 0),
(175, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'Religion', 'A', 0),
(176, 208, '4521254', 'Sri Dharmaloka Central College', 2004, 'Sinhala', 'Social Studies', 'A', 0),
(177, 209, '1245215', 'Sri Dharmaloka Central College', 2002, 'Sinhala', 'Sinhala', 'A', 0),
(178, 209, '1245215', 'Sri Dharmaloka Central College', 2002, 'Sinhala', 'English', 'A', 0),
(179, 209, '1245215', 'Sri Dharmaloka Central College', 2002, 'Sinhala', 'Science', 'A', 0),
(180, 209, '1245215', 'Sri Dharmaloka Central College', 2002, 'Sinhala', 'Social Studies', 'A', 0),
(181, 210, '5545545', 'Kirillawala Central College', 1997, 'Sinhala', 'English', 'A', 0),
(182, 210, '5545545', 'Kirillawala Central College', 1997, 'Sinhala', 'Science', 'A', 0),
(183, 210, '5545545', 'Kirillawala Central College', 1997, 'Sinhala', 'Religion', 'A', 0),
(184, 211, '8823232', 'Royal College', 2004, 'Select Medium', '--Select Subject--', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `user_id` int(11) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `method` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_id`, `plan`, `method`) VALUES
(1, 'Yearly', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `remark_al`
--

CREATE TABLE `remark_al` (
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

CREATE TABLE `remark_higher` (
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

CREATE TABLE `remark_ol` (
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

CREATE TABLE `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sport` varchar(20) NOT NULL,
  `achivement` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `user_id`, `sport`, `achivement`, `description`, `year`) VALUES
(1, 208, 'Carrom', 'University Carrom team member ', '', 2011),
(2, 209, 'Select Sport', '', '', 0000),
(3, 210, 'Select Sport', '', '', 0000),
(4, 211, 'Select Sport', '', '', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmpny_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `time_slots` varchar(200) NOT NULL,
  `interview_due` int(4) NOT NULL,
  `action` varchar(20) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`vacancy_id`),
  KEY `vacancy_id` (`vacancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `cmpny_id`, `position`, `job_desc`, `msg`, `time_slots`, `interview_due`, `action`) VALUES
(1, 1, 'CEO ', 'Handle Managerial functions of the company.', 'Should be fluent in English.', '[{"st":1351843200,"et":1351832400}]', 15, 'de-active'),
(2, 1, 'HR Manager', '', '', '[{"st":1351843200,"et":1351832400}]', 0, 'de-active'),
(3, 1, 'hh', 'hh', 'sds', '[{"st":1351736100,"et":1352945700}]', 10, 'active'),
(4, 1, 'hh', 'hh', 'sds', '[{"st":1351735200,"et":1352944800}]', 10, 'active'),
(5, 0, 'hh', 'hh', 'sds', '[{"st":1351735200,"et":1352944800}]', 10, 'active'),
(6, 1, 'ff', 'ff', 'dd', '[{"st":1353884400,"et":1353966698}]', 10, 'active'),
(7, 1, 'ff', 'ff', 'dd', '[{"st":1353884400,"et":1353966742}]', 10, 'active'),
(8, 1, 'ff', 'ff', 'dd', '[{"st":1353884400,"et":1353967022}]', 10, 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `al`
--
ALTER TABLE `al`
  ADD CONSTRAINT `al_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `candidate_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `candidates_for_vacancy`
--
ALTER TABLE `candidates_for_vacancy`
  ADD CONSTRAINT `candidates_for_vacancy_ibfk_1` FOREIGN KEY (`vacancy_id`) REFERENCES `vacancy` (`vacancy_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
