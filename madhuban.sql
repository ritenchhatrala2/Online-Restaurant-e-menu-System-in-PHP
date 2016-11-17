-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2013 at 10:18 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `madhuban`
--

-- --------------------------------------------------------

--
-- Table structure for table `billno`
--

CREATE TABLE IF NOT EXISTS `billno` (
  `billno` int(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `amount` int(20) NOT NULL,
  `discount` int(10) NOT NULL,
  UNIQUE KEY `billno` (`billno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `billno`
--

INSERT INTO `billno` (`billno`, `date`, `amount`, `discount`) VALUES
(1, '2013-12-23', 0, 0),
(2, '0000-00-00', 0, 0),
(3, '2013-12-23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chinese`
--

CREATE TABLE IF NOT EXISTS `chinese` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `serving` varchar(10) NOT NULL,
  `rate` int(11) NOT NULL,
  `availability` varchar(15) NOT NULL,
  PRIMARY KEY (`srno`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `chinese`
--

INSERT INTO `chinese` (`srno`, `name`, `description`, `categories`, `serving`, `rate`, `availability`) VALUES
(1, 'chinese1', 'this is a chinese item ', 'veg', '4', 200, '1'),
(2, 'chines22', 'this is a chinese item ', 'veg', '4', 249, '1'),
(3, 'chinese21', 'this is a chinese item ', 'veg', '5', 887, '3'),
(4, 'chines11', 'this is a chinese item ', 'veg', '4', 249, '1'),
(5, 'chinese31', 'this is a chinese item ', 'veg', '5', 887, '3'),
(6, 'chines33', 'this is a chinese item ', 'veg', '4', 249, '1'),
(7, 'chinese44', 'this is a chinese item ', 'veg', '5', 887, '3'),
(8, 'chines55', 'this is a chinese item ', 'veg', '4', 249, '1'),
(9, 'chinese66', 'this is a chinese item ', 'veg', '5', 887, '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('r1', '1'),
('s1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE IF NOT EXISTS `maintable` (
  `srno` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `rate` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `jain` varchar(10) NOT NULL,
  `spicy` varchar(10) NOT NULL,
  `any specification` varchar(500) NOT NULL,
  `submit flag` int(10) NOT NULL,
  `discharge flag` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maintable`
--

INSERT INTO `maintable` (`srno`, `name`, `quantity`, `rate`, `total`, `bill_no`, `time`, `date`, `jain`, `spicy`, `any specification`, `submit flag`, `discharge flag`, `category`) VALUES
(0, 'tomato punjabi2', '1', 90, 90, '', '', '', 'Jain', '2', 'i want something extra', 1, 0, 'punjabi'),
(0, 'tomato punjabi1', '1', 90, 90, '', '', '', '', '2', '', 1, 0, 'punjabi'),
(0, 'tomato uttpam1', '1', 90, 90, '', '', '', '', '', '', 1, 0, 'south_indian'),
(0, 'south indian1', '1', 150, 150, '', '', '', '', '', '', 1, 0, 'south_indian'),
(0, 'punjabi5', '3', 95, 285, '', '', '', 'Jain', '1', 'xcc,nvjkxvx', 1, 0, 'punjabi'),
(0, 'punjabi44', '4', 95, 380, '', '', '', '', '3', 'dfljdl', 1, 0, 'punjabi'),
(0, 'punjabi44', '1', 95, 95, '', '', '', '', '', '', 1, 0, 'punjabi'),
(0, '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'punjabi'),
(0, 'punjabi1', '1', 95, 95, '', '', '', '', '', 'Bshdhx', 1, 0, 'punjabi'),
(0, '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'punjabi'),
(0, 'punjabi1', '1', 95, 95, '', '', '', '', '', '', 1, 0, 'punjabi'),
(0, '', '', 0, 0, '', '', '', '', '', '', 0, 0, 'punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `punjabi`
--

CREATE TABLE IF NOT EXISTS `punjabi` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `serving` varchar(10) NOT NULL,
  `rate` int(11) NOT NULL,
  `availability` varchar(15) NOT NULL,
  PRIMARY KEY (`srno`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `punjabi`
--

INSERT INTO `punjabi` (`srno`, `name`, `description`, `categories`, `serving`, `rate`, `availability`) VALUES
(20, 'Punjabi10', 'good', 'Veg', '4', 106, 'yes'),
(19, 'Punjabi9', 'good', 'Veg', '4', 107, 'yes'),
(18, 'Punjabi8', 'good', 'Veg', '4', 109, 'yes'),
(17, 'Punjabi7', 'good', 'Veg', '4', 104, 'yes'),
(16, 'Punjabi6', 'good', 'Veg', '4', 101, 'yes'),
(15, 'Punjabi5', 'good', 'Veg', '4', 101, 'yes'),
(14, 'Punjabi4', 'good', 'Veg', '4', 103, 'yes'),
(13, 'Punjabi3', 'good', 'Veg', '4', 102, 'yes'),
(12, 'Punjabi2', 'good', 'Veg', '4', 101, 'yes'),
(1, 'Punjabi1', 'good', 'Veg', '4', 100, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `south_indian`
--

CREATE TABLE IF NOT EXISTS `south_indian` (
  `srno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(800) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `serving` varchar(10) NOT NULL,
  `rate` int(11) NOT NULL,
  `availability` varchar(15) NOT NULL,
  PRIMARY KEY (`srno`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `south_indian`
--

INSERT INTO `south_indian` (`srno`, `name`, `description`, `categories`, `serving`, `rate`, `availability`) VALUES
(1, 'south indian1', 'this is a south indian item ', 'veg', '4', 150, '1'),
(2, 'dosa', 'south_indian dosa', 'veg', '4', 90, '1'),
(3, 'mix uttpam', 'this is a south indian item ', 'veg', '4', 95, '1'),
(4, 'onion uttpam', 'this is a south indian item ', 'veg', '4', 99, '1'),
(5, 'tomato uttpam', 'this is a south indian item ', 'veg', '5', 90, '3'),
(6, 'chinese2', 'this is a south indian item ', 'veg', '4', 90, '1'),
(7, 'chinese3', 'this is a south indian item ', 'veg', '4', 90, '1'),
(8, 'tomato uttpam1', 'this is a south indian item ', 'veg', '5', 90, '3'),
(9, 'chinese4', 'this is a south indian item ', 'veg', '4', 150, '1'),
(10, 'tomato uttpam5', 'this is a south indian item ', 'veg', '5', 90, '3');

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE IF NOT EXISTS `table1` (
  `srno` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `rate` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `jain` varchar(10) NOT NULL,
  `spicy` varchar(10) NOT NULL,
  `any specification` varchar(500) NOT NULL,
  `submit flag` int(10) NOT NULL,
  `discharge flag` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`srno`, `name`, `quantity`, `rate`, `total`, `bill_no`, `time`, `date`, `jain`, `spicy`, `any specification`, `submit flag`, `discharge flag`, `category`) VALUES
(0, '', '', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, ''),
(0, 'tomato punjabi1', '1', 90, 90, '', '00:00:00', '0000-00-00', '', '2', '', 1, 0, 'punjabi'),
(0, 'tomato uttpam1', '1', 90, 90, '', '00:00:00', '0000-00-00', '', '', '', 1, 0, 'south_indian'),
(0, 'south indian1', '1', 150, 150, '', '00:00:00', '0000-00-00', '', '', '', 1, 0, 'south_indian'),
(0, 'punjabi5', '3', 95, 285, '', '00:00:00', '0000-00-00', 'Jain', '1', 'xcc,nvjkxvx', 1, 0, 'punjabi'),
(0, '', '', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, ''),
(0, 'punjabi1', '2', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, ''),
(0, 'punjabi1', '2', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, ''),
(0, 'punjabi1', '2', 95, 95, '', '00:00:00', '0000-00-00', '', '', 'Bshdhx', 1, 0, 'punjabi'),
(0, 'punjabi1', '2', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, ''),
(0, '', '', 0, 0, '', '00:00:00', '0000-00-00', '', '', '', 0, 0, 'punjabi');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE IF NOT EXISTS `table2` (
  `srno` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `rate` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `jain` varchar(10) NOT NULL,
  `spicy` varchar(10) NOT NULL,
  `any specification` varchar(500) NOT NULL,
  `submit flag` int(10) NOT NULL,
  `discharge flag` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--


-- --------------------------------------------------------

--
-- Table structure for table `table7`
--

CREATE TABLE IF NOT EXISTS `table7` (
  `srno` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `rate` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `bill_no` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `jain` varchar(10) NOT NULL,
  `spicy` varchar(10) NOT NULL,
  `any specification` varchar(500) NOT NULL,
  `submit flag` int(10) NOT NULL,
  `discharge flag` int(10) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table7`
--


-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `tname` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `dflag` int(10) NOT NULL,
  `qflag` int(10) NOT NULL,
  UNIQUE KEY `tname` (`tname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`tname`, `time`, `dflag`, `qflag`) VALUES
('table1', '2013-12-21 10:35:47', 0, 1),
('table3', '2013-12-24 11:13:44', 0, 0),
('table2', '2013-12-23 11:13:27', 1, 0),
('', '2013-12-22 01:55:37', 1, 1),
('table4', '2013-12-24 11:14:01', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
