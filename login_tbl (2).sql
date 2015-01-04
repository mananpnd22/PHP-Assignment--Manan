-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2014 at 05:45 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE IF NOT EXISTS `emp` (
  `emp_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `Phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`emp_id`, `fname`, `lname`, `email`, `phone`, `address`, `bdate`) VALUES
(1, 'Manan', 'Pandya', '', '0', 'Scarborough', '0000-00-00'),
(3, 'puneet', 'bindra', 'bindrapuneet@yahoo.com', '2147483647', 'Brampton', '0000-00-00'),
(34, '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE IF NOT EXISTS `emp_login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`id`, `name`, `username`, `password`, `email`) VALUES
(1, 'Manan', 'mananpnd22', 'manan', 'mananpnd22@gmail.com'),
(2, 'Nilay', 'nilaykhan', '857206913', '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_tbl`
--

CREATE TABLE IF NOT EXISTS `emp_tbl` (
  `emp_id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `bdate` date NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `cctype` varchar(30) NOT NULL,
  `ccexpirymonth` varchar(30) NOT NULL,
  `ccexpiryyear` varchar(30) NOT NULL,
  `comments` varchar(30) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`name`, `phone`, `status`, `cctype`, `ccexpirymonth`, `ccexpiryyear`, `comments`) VALUES
('', '', '', '', '', '', ''),
('safsf', '1212121212', 'Widowed', 'MasterCard', '0', '2017', 'dwd'),
('Neema', '1234282342', 'Single', 'Visa', '0', '2020', 'na'),
('vikram', '1234567890', 'married', 'mastercard', '0', '', 'good'),
('manan', '2147483647', 'single', 'visa', '0', '', 'August'),
('efrg', '234567898091', 'Single', 'American Express', '07', '2017', 'na'),
('dfsdf', '3232454556', 'Married', 'American Express', '0', '2017', 'dvge'),
('Maria', '4160233487', 'Widowed', 'Delta', '0', '2017', 'na'),
('Donald', '4163228867', 'Married', 'MasterCard', '0', '2018', 'Good'),
('Aryan', '4165678853', 'Married', 'Visa', '0', '2019', 'na'),
('David', '4167789989', 'Prefer not to answer', 'Visa', '0', '2016', 'na'),
('Neilson', '4256657762', 'Separated', 'Visa', '0', '2018', 'b'),
('Vismay', '6477477874', 'Single', 'MasterCard', '0', '2016', 'not good'),
('Rosy', '6478782233', 'Divorced', 'American Express', '0', '2016', 'na'),
('Darshit', '6478870201', 'Single', 'MasterCard', '0', '2025', 'na'),
('Nilay', '6478871234', 'Divorced', 'MasterCard', '0', '2016', 'na'),
('Yash', '6478874545', 'Single', 'Visa', '0', '2019', 'cool'),
('ankit', '6478875656', 'single', 'visa', '08', '2018', 'kool'),
('Jigar', '6479890116', 'Single', 'Visa', '0', '2019', 'na'),
('yytyt', '7654321098', 'Single', 'Visa', '03', '2017', 'hjgu'),
('dwefwef', '7873342323', 'Widowed', 'MasterCard', '10', '2019', 'na'),
('Priyank', '8062329918', 'Married', 'American Express', '0', '2024', 'Awesome'),
('Paramjit', '9879239508', 'Single', 'American Express', '03', '2023', 'no comment'),
('Raj', '9998767676', 'Single', 'MasterCard', '08', '2017', 'not to giv');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
