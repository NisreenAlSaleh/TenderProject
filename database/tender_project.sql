-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 11:00 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tender_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject_content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `phone`, `email`, `subject_content`) VALUES
(1, 'fdsf', 0, 'saqer.m.hasan@gmail.com', 'no data'),
(2, 'saqerjjj', 50000000, 'aseeral_garam37@hotmail.com', 'no data');

-- --------------------------------------------------------

--
-- Table structure for table `governerate`
--

CREATE TABLE IF NOT EXISTS `governerate` (
  `name_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`name_id`),
  UNIQUE KEY `name_id` (`name_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `governerate`
--

INSERT INTO `governerate` (`name_id`, `name`) VALUES
(1, 'sss'),
(2, 'hhh'),
(3, 'nablus'),
(4, 'hahdh'),
(5, 'jjjjjjjjjj'),
(6, 'jjjjjjjjjj'),
(7, 'hasdguaysgdiuasgd');

-- --------------------------------------------------------

--
-- Table structure for table `org_supp_catt`
--

CREATE TABLE IF NOT EXISTS `org_supp_catt` (
  `org_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`org_id`,`cat_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_supp_catt`
--


-- --------------------------------------------------------

--
-- Table structure for table `org_table`
--

CREATE TABLE IF NOT EXISTS `org_table` (
  `org_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_name` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `org_disc` varchar(200) DEFAULT NULL,
  `org_supp_cat` varchar(100) DEFAULT NULL,
  `gov_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`org_id`),
  KEY `gov_id` (`gov_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `org_table`
--

INSERT INTO `org_table` (`org_id`, `org_name`, `address`, `email`, `phone`, `org_disc`, `org_supp_cat`, `gov_id`) VALUES
(9, '  ggggggggggggg', '   ', '   ', 44444, '   ', '   ', NULL),
(16, '', '', '', 0, '', '', 3),
(18, 'nissreen', 'nablus', 'jj@ff.comnissreen', 2147483647, 'bla bla bla', 'xxx', NULL),
(19, 'as', 'qusa', 'saqer.m.hasana@gmail.com', 2147483647, 'bla bla bla', 'hasan', NULL),
(21, '', '', '', 0, '', '', NULL),
(22, '', '', '', 0, '', '', NULL),
(23, 'mmm', 'mmmmmm', 'mmmmmm@hotmail.com', 2147483647, 'mmmmmm', 'mmmmm', NULL),
(24, 'Saqer', 'qusa', 'saqer.m.hasana@gmail.com', 0, 'bla bla bla', 'hasan', NULL),
(25, 'saqer', 'qusra_nablus', 'saqer@gmail.com', 500000000, 'mmmmmmmm', 'bulding', NULL),
(26, 'asdsad', 'fdsfsdf', 'fsdfsdf@hitmail.com', 50000000, 'anjfadk', 'adfsdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE IF NOT EXISTS `tender` (
  `tender_id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `tender_name` varchar(100) DEFAULT NULL,
  `org_trade_mark` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `invelope_hand_over` date DEFAULT NULL,
  `invelope_opining` date DEFAULT NULL,
  `tender_region` text,
  `tender_content` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`tender_id`),
  KEY `org_id` (`org_id`),
  KEY `cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`tender_id`, `org_id`, `cat_id`, `tender_name`, `org_trade_mark`, `start_date`, `end_date`, `invelope_hand_over`, `invelope_opining`, `tender_region`, `tender_content`) VALUES
(31, 24, NULL, 'saqerjjjkkk', 'hasan', '2015-09-30', '2015-10-30', '2015-11-30', '2015-12-30', 'nablus', 'construction');

-- --------------------------------------------------------

--
-- Table structure for table `tenders_portfolio`
--

CREATE TABLE IF NOT EXISTS `tenders_portfolio` (
  `port_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`port_id`),
  KEY `tender_id` (`tender_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenders_portfolio`
--


-- --------------------------------------------------------

--
-- Table structure for table `tender_potfolio`
--

CREATE TABLE IF NOT EXISTS `tender_potfolio` (
  `t_portfolio_id` int(11) NOT NULL,
  `tender_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_portfolio_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tender_potfolio`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` text NOT NULL,
  `user_phone` int(11) DEFAULT NULL,
  `user_email` text,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `org_id` int(11) DEFAULT NULL,
  `organization_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `user_name`, `user_password`, `user_phone`, `user_email`, `first_name`, `last_name`, `org_id`, `organization_name`) VALUES
(90, '   farahbreak123', 'Saqer@hasan%123', 2147483647, '   aseeral_garam37@hotmail00000.com', '   farah break', '   hasan', 16, 'farahbreak'),
(93, ' saqermmmmm', 'Saqer@hasan%123', 599999999, ' hhhhhaseeral_garam37@hotmail.com', ' mmmmm', 'fuck life', 18, NULL),
(95, 'saqer hasann', 'Saqer@hasan%123', 598627687, 'ssss$hotmail.com', 'saqer', 'hasan', 24, NULL),
(96, 'saqer555', 'Saqer@hasan%123', 599999999, 'saqer.m.444hasan@gmail.com', 'hasan', 'afdsfsdfsd', 24, NULL),
(97, 'nnnnnnnnn', 'Saqer@hasan%123', 599999999, 'nnn$hotmail.com', 'saqert', 'hasan', 24, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `org_supp_catt`
--
ALTER TABLE `org_supp_catt`
  ADD CONSTRAINT `org_supp_catt_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `org_table` (`org_id`),
  ADD CONSTRAINT `org_supp_catt_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `org_table`
--
ALTER TABLE `org_table`
  ADD CONSTRAINT `org_table_ibfk_1` FOREIGN KEY (`gov_id`) REFERENCES `governerate` (`name_id`);

--
-- Constraints for table `tender`
--
ALTER TABLE `tender`
  ADD CONSTRAINT `tender_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `org_table` (`org_id`),
  ADD CONSTRAINT `tender_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `tenders_portfolio`
--
ALTER TABLE `tenders_portfolio`
  ADD CONSTRAINT `tenders_portfolio_ibfk_1` FOREIGN KEY (`tender_id`) REFERENCES `tender` (`tender_id`),
  ADD CONSTRAINT `tenders_portfolio_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `tenders_portfolio_ibfk_3` FOREIGN KEY (`tender_id`) REFERENCES `tender` (`tender_id`),
  ADD CONSTRAINT `tenders_portfolio_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `org_table` (`org_id`);
