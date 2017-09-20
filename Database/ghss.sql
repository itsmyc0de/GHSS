-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2013 at 08:39 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ghss`
--

-- --------------------------------------------------------

--
-- Table structure for table `+1+2`
--

CREATE TABLE IF NOT EXISTS `+1+2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `std` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `dateofadd` varchar(20) NOT NULL,
  `stdofadd` varchar(20) NOT NULL,
  `tcno` varchar(30) NOT NULL,
  `laststudied` varchar(50) NOT NULL,
  `medium` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `commu` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `micr` varchar(50) NOT NULL,
  `ifse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `+1+2`
--

INSERT INTO `+1+2` (`id`, `adno`, `name`, `std`, `group1`, `dateofadd`, `stdofadd`, `tcno`, `laststudied`, `medium`, `fname`, `mname`, `religion`, `address`, `dob`, `commu`, `gender`, `bg`, `state`, `phone`, `ac`, `branch`, `micr`, `ifse`) VALUES
(1, '1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '123456', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '123456', 'ghss', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '123456', 'ghss', 'malayalam', 'sukumaran', 'devu', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '123456', 'ghss', 'malayalam', 'sukumaran', 'devu', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '112', 'sudhesh', '12a', 'maths', '1/2/2007', '12', '123456', 'ghss', 'malayalam', 'sukumaran', 'devu', 'hindhu', 'ddddd', '2/4/1995', 'st', 'male', 'B +', '', '', '98574158555', 'bkd', '', ''),
(10, '123', 'sudheesh', '12a', 'maths', '1/2/2007', '12', '7858', 'ghss', 'malayalam', 'sukumaran', 'devu', 'hindhu', 'gdfgdfgdg', '2/4/1995', 'st', 'male', 'B +', 'TAMILNADU', '9786819939', '31496389374', 'bkd', '', ''),
(12, '', '', 'select', '', '', '', '', '', 'select', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `addstudent`
--

CREATE TABLE IF NOT EXISTS `addstudent` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `adno` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `std` varchar(10) NOT NULL,
  `group1` varchar(30) NOT NULL,
  `dateofadd` varchar(30) NOT NULL,
  `stdofadd` varchar(30) NOT NULL,
  `dateofleaving` varchar(30) NOT NULL,
  `tcno` varchar(30) NOT NULL,
  `stdofleaving` varchar(30) NOT NULL,
  `medium` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `commu` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `micr` varchar(100) NOT NULL,
  `ifse` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `addstudent`
--

INSERT INTO `addstudent` (`id`, `adno`, `name`, `std`, `group1`, `dateofadd`, `stdofadd`, `dateofleaving`, `tcno`, `stdofleaving`, `medium`, `fname`, `mname`, `religion`, `address`, `dob`, `commu`, `gender`, `bg`, `state`, `phone`, `ac`, `branch`, `micr`, `ifse`) VALUES
(11, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '', '', '', '', 'sudheesh', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', 'devu', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', 'devu', 'hindhu', '', '', '', '', '', '', '', '', '', '', ''),
(19, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', 'devu', 'hindhu', 'd/no: 2/70\r\nmullanvayal \r\namabalamoola\r\n643240', '2/4/1995', 'st', '', '', '', '', '', '', '', ''),
(20, 265254, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', 'devu', 'hindhu', 'd/no: 2/70\r\nmullanvayal \r\namabalamoola\r\n643240', '2/4/1995', 'st', 'male', 'B +', 'TAMILNADU', '', '', '', '', ''),
(21, 22, 'sudheesh', '7a', '12 a', '1/2/2007', '12', '1/2/1995', '7858', '7', 'malayalam', 'sudku', 'devu', 'hindhu', 'd/no: 2/70\r\nmullanvayal \r\namabalamoola\r\n643240', '2/4/1995', 'st', 'male', 'B +', 'TAMILNADU', '9786819939', '98574158555', 'bkd', '123456', '258'),
(22, 265254, 'sudheesh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 265254, 'sudheesh', 'select', '', '', '', '', '', '', 'select', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', ''),
(24, 265254, 'sudheesh', 'select', '', '', '', '', '', '', 'select', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', ''),
(25, 0, '', 'select', '', '', '', '', '', '', 'select', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `std` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `dateofadd` varchar(20) NOT NULL,
  `stdofadd` varchar(20) NOT NULL,
  `tcno` varchar(30) NOT NULL,
  `laststudied` varchar(50) NOT NULL,
  `medium` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `commu` varchar(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `bg` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `micr` varchar(50) NOT NULL,
  `ifse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `adno`, `name`, `std`, `group1`, `dateofadd`, `stdofadd`, `tcno`, `laststudied`, `medium`, `fname`, `mname`, `religion`, `address`, `dob`, `commu`, `gender`, `bg`, `state`, `phone`, `ac`, `branch`, `micr`, `ifse`) VALUES
(2, '123', 'sudheesh', '6a', '', '1/2/2007', '2/1/2033', '7858', 'ghss', '', 'sukumaran', 'devu', 'hindhu', 'vbbcvb', '2/4/1995', 'st', 'male', 'B +', 'TAMILNADU', '', '98574158555', 'bkd', '123456', 'fg'),
(3, '123', 'sudheesh', '6a', '', '1/2/2007', '2/1/2033', '7858', 'ghss', '', 'sukumaran', 'devu', 'hindhu', 'vbbcvb', '2/4/1995', 'st', 'male', 'B +', 'TAMILNADU', '', '98574158555', 'bkd', '123456', 'fg');

-- --------------------------------------------------------

--
-- Table structure for table `passed`
--

CREATE TABLE IF NOT EXISTS `passed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adno` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `std` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `dateofadd` varchar(20) NOT NULL,
  `stdofadd` varchar(20) NOT NULL,
  `dateofleaving` varchar(20) NOT NULL,
  `tcno` varchar(50) NOT NULL,
  `stdofleaving` varchar(20) NOT NULL,
  `medium` varchar(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `commu` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bg` varchar(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `ac` varchar(100) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `micr` varchar(50) NOT NULL,
  `ifse` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `passed`
--

INSERT INTO `passed` (`id`, `adno`, `name`, `std`, `group1`, `dateofadd`, `stdofadd`, `dateofleaving`, `tcno`, `stdofleaving`, `medium`, `fname`, `mname`, `religion`, `address`, `dob`, `commu`, `gender`, `bg`, `state`, `phone`, `ac`, `branch`, `micr`, `ifse`) VALUES
(5, '1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '123', 'qqqqqqqq', '12c', 'qqqqqqqqqqqqqqqq', '2/1/2013', '2/1/2033', 'qqqqqqqqqqqqqqq', '652', '92988', '', 'hxfdd', 'fgsg', 'christian', 'dsfaagg\r\ngagaf\r\n\r\n', '2/2/13325', 'gaga', 'male', 'afgaf', 'qqqqqqqqqqqqqqq', 'dfdag', 'gag', 'afga', 'fgad', 'qqqqqqqqqqqqq'),
(6, '1111', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', '', 'select', '', '', '', '', '', '', 'malayalam', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', ''),
(8, '', '', 'select', '', '', '', '', '', '', 'select', '', '', 'select', '', '', '', 'SELECT', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
