-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 07:38 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `al`
--

INSERT INTO `al` (`id`, `user_id`, `al_index`, `school`, `year`, `medium`, `stream`, `subject`, `grade`, `remark`) VALUES
(22, 102, 'bkjnb', 'sri Dharmaloka', 1995, 'Sinhala', 'Science', 'Biology', 'A', 0),
(23, 102, 'bkjnb', 'sri Dharmaloka', 1995, 'Sinhala', 'Science', 'Physics', 'A', 0),
(24, 102, 'bkjnb', 'sri Dharmaloka', 1995, 'Sinhala', 'Science', 'Chemistry', 'A', 0),
(25, 103, '1234568', 'Royal College ', 2002, 'Sinhala', 'Science', 'Physics', 'A', 0),
(26, 103, '1234568', 'Royal College ', 2002, 'Sinhala', 'Science', 'Chemistry', 'A', 0),
(27, 103, '1234568', 'Royal College ', 2002, 'Sinhala', 'Science', 'Select Subject', 'A', 0),
(28, 104, 'fdfd', 'dfdf', 1996, 'English', 'Commerce', 'Economics', 'A', 0),
(29, 104, 'fdfd', 'dfdf', 1996, 'English', 'Commerce', 'Accounting', 'A', 0),
(32, 106, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(35, 107, 'mmjghkj', 'hukghgb', 1981, 'English', 'Commerce', 'Physics', 'A', 0),
(36, 107, 'mmjghkj', 'hukghgb', 1981, 'English', 'Commerce', 'Accounting', 'A', 0),
(37, 107, 'mmjghkj', 'hukghgb', 1981, 'English', 'Commerce', 'Economics', 'A', 0),
(38, 107, 'mmjghkj', 'hukghgb', 1981, 'English', 'Commerce', 'Sinhala', 'A', 0),
(39, 109, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(40, 108, 'mbhjnvb', 'njbhjvbhj', 1981, 'Sinhala', 'Commerce', 'Biology', 'A', 0),
(41, 105, '', '', 0000, '0000', '0000', 'Select Subject', 'A', 0),
(42, 105, '', '', 0000, '0000', '0000', 'Select Subject', 'A', 0),
(43, 105, '', '', 0000, '0000', '0000', 'Select Subject', 'A', 0),
(44, 105, '', '', 0000, '0000', '0000', 'Select Subject', 'A', 0),
(45, 111, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(46, 112, '', 'sefesfdsx', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(48, 114, '', '', 0000, 'Select Medium', 'Select Stream', 'Biology', 'A', 0),
(49, 114, '', '', 0000, 'Select Medium', 'Select Stream', 'Physics', 'A', 0),
(50, 114, '', '', 0000, 'Select Medium', 'Select Stream', 'Chemistry', 'A', 0),
(53, 116, '', '', 0000, '0000', '0000', 'Select Subject', 'A', 0),
(54, 117, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(55, 113, '', '', 0000, '0000', 'Select Medium', 'Select Subject', 'A', 0),
(56, 118, '4562550', 'Gamunu maha vidyalaya', 1994, 'Sinhala', 'Science', 'Physics', 'A', 0),
(57, 118, '4562550', 'Gamunu maha vidyalaya', 1994, 'Sinhala', 'Science', 'Biology', 'A', 0),
(58, 118, '4562550', 'Gamunu maha vidyalaya', 1994, 'Sinhala', 'Science', 'Chemistry', 'A', 0),
(59, 118, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(60, 118, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(61, 119, '4561233', 'kalmune high school', 1994, 'Sinhala', 'Commerce', 'Economics', 'A', 0),
(62, 119, '4561233', 'kalmune high school', 1994, 'Sinhala', 'Commerce', 'Accounting', 'A', 0),
(63, 119, '4561233', 'kalmune high school', 1994, 'Sinhala', 'Commerce', 'Select Subject', 'A', 0),
(64, 120, '', '', 0000, 'Select Medium', 'Select Stream', 'Chemistry', 'A', 0),
(65, 120, '', '', 0000, 'Select Medium', 'Select Stream', 'Biology', 'A', 0),
(66, 172, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(67, 173, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(68, 174, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(69, 176, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(70, 177, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(71, 112, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(72, 178, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(73, 186, '', '', 0000, 'Select Medium', 'Select Stream', 'Physics', 'A', 0),
(74, 188, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(75, 189, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0),
(76, 190, '', '', 0000, 'Select Medium', 'Select Stream', 'Select Subject', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidates_for_vacancy`
--

CREATE TABLE IF NOT EXISTS `candidates_for_vacancy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_id` int(11) NOT NULL,
  `cmpny_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `candidates_for_vacancy`
--

INSERT INTO `candidates_for_vacancy` (`id`, `vacancy_id`, `cmpny_id`, `candidate_id`) VALUES
(1, 0, 22, 111),
(7, 0, 22, 102),
(9, 1, 28, 104),
(10, 2, 28, 102),
(11, 1, 28, 102),
(12, 2, 28, 102),
(13, 0, 22, 103),
(14, 0, 22, 107),
(15, 0, 22, 109);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_basicinfo`
--

CREATE TABLE IF NOT EXISTS `candidate_basicinfo` (
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
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `nic_no` (`nic_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `candidate_basicinfo`
--

INSERT INTO `candidate_basicinfo` (`user_id`, `title`, `pic`, `f_name`, `l_name`, `dob`, `gender`, `civil_status`, `address`, `district`, `country`, `nationality`, `tp_hm`, `tp_mobile`, `nic_no`, `cv`) VALUES
(102, 'Miss', '', 'Nadee', 'anuththara', 1344338766, 'female', 'single', 'erw,et,kelaniya', 'Gampaha', 'Sri Lanka', 'Sri Lankan', 'mobilewrew', 'm,lm,lm', 'errre', ''),
(103, 'Mr.', 'uploads/', 'kadira', 'aa', 0, 'male', 'single', 'wqeq,,dw', 'Gampaha', 'Sri Lanka', 'Sri Lankan', 'nbjhjk', '656', '54545', ''),
(104, 'Miss', '', 'kanchi', 'muhandiram', 0, 'female', 'single', '2364,Hali-ela,Badulla', 'Negombo', 'Sri Lanka', 'Sri Lankan', '5745646546', '564644', '54564', ''),
(105, 'Miss', '', 'asdsd', '/', 0, '0', '0', 'EEEEQWE,WQ,WE', 'Gampaha', 'Select Country', 'Select Nationality', 'home', 'mobile', 'asdfsfewfa', ''),
(106, 'Mr.', '', '', '', 0, '', '', ',,', 'Gampaha', 'Select Country', 'Select Nationality', 'mobile', 'home', 'swqerw', ''),
(107, 'Mr.', '', 'hhgfvj', 'fghfvghfv', 0, 'male', 'single', ',,', 'Gampaha', 'Select Country', 'Select Nationality', 'mobile', 'home', '', ''),
(108, 'Miss', '', 'wrwerewrewadsad', '/333das', 0, 'female', 'single', 'mnjkmnj,jhghjvhbsas,jhkjhj334', 'Colombo', 'Sri Lanka', 'Sri Lankan', 'homesasdad', 'mobilesaaa', 'hhhhjhjjja', ''),
(109, 'Mr.', '', 'ewfwsafdsf', '', 0, 'male', 'single', 'DSd,dddd,dd', 'Gampaha', 'Select Country', 'Select Nationality', 'mobile', 'home', 'eawrferfew', ''),
(111, 'Mr.', '', 'wwqe', '/', 0, 'male', 'single', '/egret,/,/', 'Gampaha', 'Select Country', 'Select Nationality', 'home', 'mobile', 'fefrewf', ''),
(112, 'Miss', 'uploads/3_aqua_peacock_vintage_feathers_bird_invitation-p161678146740279054fa84q_325.jpg', 'nadee', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '75', ''),
(113, 'Mr.', 'uploads/3_feathers_peacock_birds_wedding_response_card_invitation-p161868818967069656f75a3_325.jpg', '/', '/', 0, 'male', 'single', '/,/,/', 'Select District', 'Sri Lanka', 'Sri Lankan', 'home', 'mobile', 'hskjagkgas', 'cv/1a756042-2d6e-4128-b2bf-9214ed863488_9.jpg'),
(156, 'Mrs.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'njl', ''),
(157, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'kkkkkkkkkk', ''),
(158, 'Mr.', '3_aqua_peacock_vintage_feathers_bird_invitation-p161678146740279054fa84q_325.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'ajaja', ''),
(159, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'bbbbbbbbbb', ''),
(160, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'nmjala', ''),
(164, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'yaka', ''),
(165, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'nanana', ''),
(166, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'kaja', ''),
(167, 'Mrs.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'ana', ''),
(168, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'ananaa', ''),
(169, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'mnabsj', ''),
(170, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'jajajajaja', ''),
(171, 'Mr.', 'uploads/1261684443C10Ctb.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'jala;a', ''),
(172, 'Mrs.', 'uploads/427160_408192859238358_2032551678_n.jpg', 'ghgh', 'kiuhu', 447292800, 'female', 'married', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '5456746578', ''),
(173, 'Mrs.', 'uploads/12549902409jjauD.jpg', 'Kamani', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '452266', ''),
(174, 'Mr.', 'uploads/', 'kkkkkkkkkkkkkk', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '5454545454', ''),
(176, 'Mr.', 'uploads/', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'nnnnnnnnnn', ''),
(177, 'Mr.', 'uploads/', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '90', ''),
(178, 'Mr.', 'uploads/HR_Recruitment_And_Placements_Consultants_India.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '44568', ''),
(179, 'Mr.', 'uploads/400_F_34381997_GzuoFyiYA0P4vM7YMY7jTaI1Vutp2N19.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'ccc', ''),
(181, 'Mr.', 'uploads/3_feathers_peacock_birds_wedding_response_card_invitation-p161868818967069656f75a3_325.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '4554', 'cv/3_aqua_peacock_vintage_feathers_bird_invitation-p161678146740279054fa84q_325.jpg'),
(182, 'Mr.', 'uploads/d9cacbe39f151144ca83086008127033.jpg', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '55', 'cv/243b5ea67f1014d76245393d6d7cb237.pdf'),
(183, 'Mr.', 'uploads/a6ccb50d0ae7308898361d7cb9168c2a.csv', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', '45', 'cv/2be81ea4128340d0f51d2ac35c2e5bfd.pdf'),
(186, 'Miss', 'uploads/da35b389b973eaba887a8dee32e5d478.jpg', 'Sera', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'jkjkl;l', 'cv/1b0b767ce2d8b13d26de1a46a40ca715.pdf'),
(187, 'Mr.', 'uploads/483b1f684ce8e31a2064530f9ce46839.', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', ',ahdkj', 'cv/6a8bccff65474c6bbb8efa5368a5f71c.pdf'),
(188, 'Mr.', 'uploads/32eba8f2f592c5d34890ec520925577f.', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'jkljl', 'cv/24e0f3afa97d9b0dbb215dedca65fa1b.pdf'),
(189, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'anbsdn', ''),
(190, 'Mr.', '', '', '', 0, 'male', 'single', ',,', 'Select District', 'Sri Lanka', 'Sri Lankan', 'mobile', 'home', 'fs', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=191 ;

--
-- Dumping data for table `candidate_user`
--

INSERT INTO `candidate_user` (`user_id`, `email`, `password`) VALUES
(102, 'nadee013@gmail.com', 'n'),
(103, 'kadira', 'k'),
(104, 'kanch', ''),
(105, 'n', 'n'),
(106, 'sssss', 's'),
(107, 'f', 'f'),
(108, 'cx', 'c'),
(109, 'g23', 'f'),
(110, 'vvvv', 'v'),
(111, 'wwww', 'w'),
(112, 'nadee', 'n'),
(113, '', ''),
(114, 'fffffffff', 'ffffffff'),
(116, 'amma', 'a'),
(117, 's', 's'),
(118, 'malithi', 'm'),
(119, 'wasanthi', 'a'),
(120, 'nmnm', 'b'),
(121, 'gggggggggggggg', 'g'),
(122, 'kkkkk', 'hj'),
(123, 'ooo', 'o'),
(124, 'ewwr', 'r'),
(125, 'ppppp', 'g'),
(126, 'hjhui', 'jhj'),
(127, 'ddddddddddd', 'd'),
(128, 'ssssssssssss', ''),
(129, 'tttttttttt', ''),
(130, 'ttttttttttttttttttttttttttttttttttttttttt', ''),
(131, 'nadeeeeeeeeee', ''),
(132, '3333333', ''),
(133, 'ssssss', ''),
(134, 'cccccccccccc', ''),
(135, '............', ''),
(136, 'hfjjjjjjj', 'n'),
(137, 'eeeeeeeeeeeee', ''),
(138, 'ffffffffff', ''),
(139, 'cv', ''),
(140, 'xx', ''),
(141, 'namal', ''),
(142, 'vvvvvvvvvv', ''),
(143, 'iiiiiiiiiii', ''),
(144, 'BZ', ''),
(145, 'wwwww', ''),
(146, 'kalaaa', ''),
(147, 'kakala', ''),
(148, 'nanana', ''),
(149, 'kljkjkl', ''),
(150, 'lalalala', ''),
(151, ',jklwjkld', ''),
(152, ',klkjk', ''),
(153, 'okila', ''),
(154, 'pilo', ''),
(155, 'manamalaya', ''),
(156, 'piumy', ''),
(157, 'll', ''),
(158, 'jaja', ''),
(159, 'bbbbbbbbbb', ''),
(160, 'shani', ''),
(161, 'pala', ''),
(162, 'papa', ''),
(163, 'kaka', ''),
(164, 'yaka', ''),
(165, 'mama', ''),
(166, 'yaha', ''),
(167, 'wasa', ''),
(168, 'jajaaaa', ''),
(169, 'nanananana', ''),
(170, 'anu', ''),
(171, 'ramani', ''),
(172, 'my love', ''),
(173, 'kamani', ''),
(174, 'ttttttttttttt', ''),
(176, 'ppppppppppp', ''),
(177, 'oo', ''),
(178, 'prageeth', 'a'),
(179, 'ccc', 'c'),
(180, 'ssssssssssssssssssssssssss', ''),
(181, 'fffffffffffffffffffffffff', ''),
(182, 'vruni', ''),
(183, 'bbbbbb', ''),
(185, 'mm', ''),
(186, 'sere', 'e'),
(187, 'hadskj', ''),
(188, ',jlk', ''),
(189, 'mhsdfj', 'nsd'),
(190, 'fs', '');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
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
(1, 'eeeeeeeee', 'ffffffffffffff,dddd,dddd', 'Apparel', 'Colombo', 'Sri Lanka', 'eeeeeeeeee', 'eeeeeeeeee', '', 'eeeeeeeeddddfff'),
(2, 'ttttttttttttt', 'ttttttttttt,tttttttttttttt,tttttttttttt', 'Apparel', 'Colombo', 'Sri Lanka', 'tttttttttt', 'tttttttt', '0', 'tttttttttttt'),
(3, 'y', 'yr,y,y', 'Leather', 'Select District', 'Select Country', '', '', '0', ''),
(4, 'uuu', ',,', 'Apparel', 'Select District', 'Select Country', '', '', '0', ''),
(6, 'yyy', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(7, 'eeeeeeeeeeeeeee', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(8, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(9, '4444', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(10, '44444444444444', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(11, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(12, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(13, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '0', ''),
(14, 'nbhjv', 'dsa,,', 'Apparel', 'Select District', 'Select Country', '', '', '0', ''),
(16, 'sds', ',,', 'Apparel', 'Colombo', 'Sri Lanka', 'adawsd', 'adsadas', '0', 'dasdsa'),
(17, '', 'xzvxzvxcvcxv,,', 'Leather', 'Select District', 'Select Country', '', 'AZ', 'logo/54af3c63f267434d8cb54e79847ea120.', ''),
(18, 'ganga', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/a8432b324de2bd4ca7be575d1bf403ed.', ''),
(19, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/68fdda3b2a4b61550d0110ed93e25296.', ''),
(20, 'jashgdjgha', ',,', 'Apparel', 'Select District', 'Select Country', '', '', 'logo/0422ecb7670ec9e91e4fe601e81ea0a9.jpg', ''),
(21, 'ganga', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/ffe4f4e650b6578db21c851a87661720.jpg', ''),
(22, 'uuu', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/821ec1dc00884dab29b655ef2f7c87fd.htm', ''),
(23, 'it and company', 'snbdn,hwef,kkjsdfkl', 'Software', 'Gampaha', 'Sri Lanka', 'jwhegj', 'khjk', '', 'wqeqw'),
(24, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '', ''),
(25, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '', ''),
(26, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/d5ca6f6f8987b5c578aadda300a5f5da.', ''),
(27, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', 'logo/45ee39ed463912a0e4fea734bc634611.', ''),
(28, '', ',,', 'Select industry', 'Select District', 'Select Country', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `company_user`
--

CREATE TABLE IF NOT EXISTS `company_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `company_user`
--

INSERT INTO `company_user` (`user_id`, `email`, `password`) VALUES
(1, 'e', 'e'),
(2, 'ttttttt', 't'),
(3, 'yyyyyyyyyyy', 'y'),
(4, 'u', 'u'),
(5, 'i', ''),
(6, 'y', ''),
(7, 'r', 'r'),
(8, 'c', 'c'),
(9, '4', '4'),
(10, '44', '4'),
(11, 'bbbb', 'b'),
(12, 'g', 'g'),
(13, 'CX', 'C'),
(14, 'haha', 'a'),
(15, 'sssssssssssss', 's'),
(16, 'vvvvvvv', ''),
(17, 'bb', ''),
(18, 'cxx', ''),
(19, 'lll', ''),
(20, 'ls', ''),
(21, 'babab', ''),
(22, '', ''),
(23, 'V', 'V'),
(24, 'ccccc', 'c'),
(25, 'nsn', 's'),
(26, 'sb', ''),
(27, 'asdsd', ''),
(28, 'cccccccs', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `higher_edu`
--

INSERT INTO `higher_edu` (`id`, `user_id`, `university`, `level`, `description`, `year`, `remark`) VALUES
(20, 102, '', 'Select Lev', '', 0000, 0),
(21, 103, '', 'Select Lev', '', 0000, 0),
(22, 104, 'adfad', 'Degree', 'fdaf', 1983, 0),
(23, 105, 'sf', 'Select Lev', 'asdhash', 2001, 0),
(24, 106, '', 'Select Lev', '', 0000, 0),
(25, 107, 'jguyhfy', 'Diploma', 'nadee', 1995, 0),
(26, 109, '', 'Select Lev', '', 0000, 0),
(27, 108, 'jkhijb', 'Diploma', '', 1998, 0),
(28, 111, '', 'Select Lev', '', 0000, 0),
(29, 112, 'w', 'S', '', 2002, 0),
(30, 113, '', 'Select Lev', '', 0000, 0),
(31, 114, 'fffff', 'Diploma', '', 0000, 0),
(32, 116, '', 'Select Lev', '', 0000, 0),
(33, 117, '', 'Select Lev', '', 0000, 0),
(34, 118, 'SL', 'Select Lev', '', 0000, 0),
(35, 119, 'Kelaniya', 'Degree', 'MIT', 1993, 0),
(36, 120, 'sf', 'Select Lev', '', 0000, 0),
(37, 172, 'qeq', 'Select Lev', '', 0000, 0),
(38, 173, '', 'Select Lev', '', 0000, 0),
(39, 174, '', 'Select Lev', '', 0000, 0),
(40, 176, '', 'Select Lev', '', 0000, 0),
(41, 177, '', 'Select Lev', '', 0000, 0),
(42, 112, 'w', 'S', '', 2002, 0),
(43, 178, '', 'Select Lev', '', 0000, 0),
(44, 186, '', 'Select Lev', '', 0000, 0),
(45, 188, '', 'Select Lev', '', 0000, 0),
(46, 189, '', 'Select Lev', '', 0000, 0),
(47, 190, '', 'Select Lev', '', 0000, 0);

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
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `ol`
--

INSERT INTO `ol` (`id`, `user_id`, `ol_index`, `school`, `year`, `medium`, `subject`, `grade`, `remark`) VALUES
(35, 102, '1213', 'sri dharmaloka', 2005, 'Sinhala', 'Sinhala', 'A', 0),
(36, 102, '1213', 'sri dharmaloka', 2005, 'Sinhala', 'English', 'A', 0),
(37, 102, '1213', 'sri dharmaloka', 2005, 'Sinhala', 'Maths', 'A', 0),
(38, 102, '1213', 'sri dharmaloka', 2005, 'Sinhala', 'Science', 'A', 0),
(39, 102, '1213', 'sri dharmaloka', 2005, 'Sinhala', 'Social Studies', 'A', 0),
(40, 103, 'kjhkjhj', 'Royal College ', 2006, 'Sinhala', 'Sinhala', 'A', 0),
(41, 103, 'kjhkjhj', 'Royal College ', 2006, 'Sinhala', 'English', 'A', 0),
(42, 103, 'kjhkjhj', 'Royal College ', 2006, 'Sinhala', 'Maths', 'A', 0),
(43, 103, 'kjhkjhj', 'Royal College ', 2006, 'Sinhala', 'Science', 'A', 0),
(44, 104, 'waqrdwq', 'rffwefr', 1983, 'English', 'Maths', 'A', 0),
(45, 104, 'waqrdwq', 'rffwefr', 1983, 'English', 'Science', 'A', 0),
(46, 104, 'waqrdwq', 'rffwefr', 1983, 'English', 'Sinhala', 'A', 0),
(49, 106, '', '', 0000, 'Select Medium', 'Maths', 'A', 0),
(50, 107, 'mvghjfv', 'nbfgh', 1997, 'Sinhala', 'English', 'A', 0),
(51, 107, 'mvghjfv', 'nbfgh', 1997, 'Sinhala', 'Science', 'A', 0),
(52, 107, 'mvghjfv', 'nbfgh', 1997, 'Sinhala', 'Social Studies', 'A', 0),
(53, 109, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(54, 108, 'jjhkjbn', 'jhghj', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(55, 105, '', 'w', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(56, 105, '', 'w', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(58, 111, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(59, 112, 'dsgfsdg', 'wegftrwedf', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(61, 114, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(62, 114, '', '', 0000, 'Select Medium', 'English', 'A', 0),
(63, 114, '', '', 0000, 'Select Medium', 'Maths', 'A', 0),
(64, 114, '', '', 0000, 'Select Medium', 'Science', 'A', 0),
(71, 116, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(72, 116, '', '', 0000, 'Select Medium', 'Sinhala', '-', 0),
(73, 116, '', '', 0000, 'Select Medium', 'Sinhala', '-', 0),
(74, 117, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(116, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'Sinhala', 'A', 0),
(117, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'English', 'A', 0),
(118, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'Maths', 'B', 0),
(119, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'Science', 'A', 0),
(120, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'Religion', 'C', 0),
(121, 118, '2136545', 'Gamunu maha vidyalaya', 1988, 'Sinhala', 'Social Studies', 'B', 0),
(135, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'Sinhala', 'A', 0),
(136, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'English', 'A', 0),
(137, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'Maths', 'A', 0),
(138, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'Religion', 'A', 0),
(139, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'Science', 'A', 0),
(140, 119, '125365', 'kalmune high school', 1997, 'Sinhala', 'Sinhala', 'B', 0),
(141, 120, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(142, 120, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(143, 172, '', ',wqehjwq', 0000, 'Select Medium', 'English', 'A', 0),
(144, 172, '', ',wqehjwq', 0000, 'Select Medium', 'Science', 'A', 0),
(145, 173, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(146, 174, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(147, 176, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(148, 177, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(149, 112, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(150, 178, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(151, 186, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(152, 113, '', '', 0000, 'Select Medium', 'Sinhala', 'A', 0),
(153, 113, '', '', 0000, 'Select Medium', 'Sinhala', 'C', 0),
(154, 113, '', '', 0000, 'Select Medium', 'Sinhala', 'C', 0),
(155, 113, '', '', 0000, 'Select Medium', '--Select Subject--', '-', 0),
(156, 188, '', '', 0000, 'Select Medium', '--Select Subject--', 'A', 0),
(157, 189, '', '', 0000, 'Select Medium', '--Select Subject--', 'A', 0),
(158, 190, '', '', 0000, 'Select Medium', '--Select Subject--', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `user_id` int(11) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `method` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`user_id`, `plan`, `method`) VALUES
(1, 'Yearly', 'cash'),
(2, 'Yearly', '0'),
(3, 'Monthly', 'cash'),
(4, 'Monthly', 'cash'),
(6, 'Monthly', '0'),
(7, 'Monthly', '0'),
(8, 'Monthly', '0'),
(9, 'Monthly', '0'),
(10, 'Monthly', '0'),
(11, 'Monthly', '0'),
(13, 'Monthly', '0'),
(14, 'Monthly', '0'),
(16, 'Monthly', 'cash'),
(17, 'Monthly', '0'),
(18, 'Monthly', '0'),
(21, 'Monthly', '0'),
(22, 'Monthly', '0'),
(23, 'Monthly', 'cash'),
(24, 'Monthly', '0'),
(25, 'Monthly', '0'),
(26, 'Monthly', '0');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vacancy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `scheduled_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `user_id`, `sport`, `achivement`, `description`, `year`) VALUES
(17, 102, 'Select Sport', '', '', 0000),
(18, 103, 'Select Sport', '', '', 0000),
(19, 104, 'Select Sport', '', '', 0000),
(20, 105, 'Rugger', 'what ever', 'what ', 2004),
(21, 106, 'Select Sport', '', '', 0000),
(22, 107, 'jguyhfy', 'Diploma', 'hjkl', 1995),
(23, 109, 'Select Sport', '', '', 0000),
(24, 108, 'Cricket', 'gyhujvb', 'ghbn ', 1997),
(25, 111, 'Select Sport', '', '', 0000),
(26, 112, 'Select Sport', 'dfsdgf', 'sdgfsd', 0000),
(27, 113, 'Select Sport', '', '', 0000),
(28, 114, 'Carrom', 'feawfs', '', 0000),
(29, 116, 'Select Sport', '', '', 0000),
(30, 117, 'Select Sport', '', '', 0000),
(31, 118, 'Cricket', 'School under 19 team', '2nd place in district annual tournament', 1996),
(32, 119, 'Carrom', '', '', 0000),
(33, 120, 'Rugger', '', '', 0000),
(34, 172, 'Select Sport', '', '', 0000),
(35, 173, 'Select Sport', '', '', 0000),
(36, 174, 'Select Sport', '', '', 0000),
(37, 176, 'Select Sport', '', '', 0000),
(38, 177, 'Select Sport', '', '', 0000),
(39, 112, 'Select Sport', '', '', 0000),
(40, 178, 'Select Sport', '', '', 0000),
(41, 186, 'Select Sport', '', '', 0000),
(42, 188, 'Select Sport', '', '', 0000),
(43, 189, 'Select Sport', '', '', 0000),
(44, 190, 'Select Sport', '', '', 0000);

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE IF NOT EXISTS `vacancy` (
  `vacancy_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmpny_id` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `time_slots` varchar(200) NOT NULL,
  `interview_due` time NOT NULL,
  PRIMARY KEY (`vacancy_id`),
  KEY `vacancy_id` (`vacancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`vacancy_id`, `cmpny_id`, `position`, `job_desc`, `msg`, `time_slots`, `interview_due`) VALUES
(1, 22, 'wasdwas', 'DFAWSD', 'qwrdeq', '', '00:00:00'),
(2, 22, '', '', '', '', '00:00:00'),
(3, 22, '', '', '', '', '00:00:00'),
(4, 22, '', '', '', '', '00:00:00'),
(5, 22, '', '', '', '', '00:00:00'),
(6, 22, 'nadee', '', '', '', '00:00:00'),
(7, 22, 'hjkah', '', '', '', '00:00:00'),
(8, 22, 'nkhk', '', '', '', '00:00:00'),
(9, 22, '', '', '', '', '00:00:00'),
(10, 22, '', '', '', '', '00:00:00'),
(11, 22, '', '', '', '', '00:00:00'),
(12, 22, '', '', '', '', '00:00:00');

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
