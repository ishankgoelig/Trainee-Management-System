-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 08:42 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `main_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee_payment`
--

CREATE TABLE IF NOT EXISTS `fee_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(123) NOT NULL,
  `amount` varchar(123) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `fee_payment`
--

INSERT INTO `fee_payment` (`id`, `trainee_id`, `amount`, `date`) VALUES
(5, 'har7815', '8998987', '2016-08-18'),
(6, 'jit3434', '21000', '2016-08-12'),
(7, 'jit3434', '45000', '2016-08-25'),
(8, 'huk6755', '452100', '2016-08-25'),
(9, 'huk6755', '5667', '2016-08-19'),
(10, 'har7815', '556756757', '2016-08-17'),
(11, 'rah8897', '12345', '2017-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` varchar(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `contact` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `photo` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_id`, `name`, `contact`, `email`, `password`, `photo`) VALUES
(6, 'mr.1235', 'mr.jitener tanwar', '4578961235', 'jitu100@gmail.com', '123', '20160702_220545.jpg'),
(7, 'nav7890', 'navdeep Tanwar', '1234567890', 'nav100@gmail.com', '123', '20160630_182851.jpg'),
(8, 'har7815', 'harish kaushik', '7206167815', 'harishkaushik100@gmail.com', '123', '20160702_224343.jpg'),
(13, 'man7196', 'manjeet kaushik', '9992047196', 'kaushikpandit100@gmail.com', '123', '108082.JPG'),
(15, 'dee5466', 'deepak ', '64565466', 'deep100@gmail.com', '123', '20160630_182538.jpg'),
(16, 'Ish4778', 'Ishank Goel', '9991134778', 'ishank.goel28@gmail.com', '9315506544', 'Ishank Pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_center`
--

CREATE TABLE IF NOT EXISTS `tbl_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `center_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_center`
--

INSERT INTO `tbl_center` (`id`, `center_name`) VALUES
(2, 'wipro gurgaon'),
(4, 'ducat gurgaon sec-14'),
(5, 'ducat noida sec-12'),
(6, 'abc bhiwani');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `course_name`) VALUES
(1, 'sql'),
(2, 'advance php'),
(3, 'networking'),
(4, 'web designing'),
(5, 'c/c++'),
(6, 'core java'),
(7, 'haddop'),
(8, 'Magento PHP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coursetype`
--

CREATE TABLE IF NOT EXISTS `tbl_coursetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_type` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_coursetype`
--

INSERT INTO `tbl_coursetype` (`id`, `course_type`) VALUES
(2, 'long term courss dsd'),
(3, 'summer training'),
(4, 'internship'),
(5, 'short term course');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_duration`
--

CREATE TABLE IF NOT EXISTS `tbl_duration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_duration` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_duration`
--

INSERT INTO `tbl_duration` (`id`, `course_duration`) VALUES
(2, '3-month'),
(4, '1-year'),
(9, '6-month'),
(10, '6-week');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `father_name` varchar(123) NOT NULL,
  `contact` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `address` varchar(123) NOT NULL,
  `course` varchar(123) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `duration` varchar(123) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fee` varchar(123) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contact` (`contact`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`id`, `trainee_id`, `name`, `father_name`, `contact`, `email`, `address`, `course`, `gender`, `doj`, `dob`, `duration`, `image`, `fee`) VALUES
(6, 'roh0340', 'rohit', 'mr. sunil singh', '8950200340', 'rb100@gmail.com', 'rtk', 'web devlopment', 'male', '2016-08-20', '2016-08-19', '3-months', '20160701_190241.jpg', '6200'),
(9, 'har7815', 'harish kaushik', 'Sh vinod kaushiik', '7206167815', 'harishkaushik100@gmail.com', 'sfsdaf', 'networking', 'male', '2016-08-26', '2016-08-20', '3-month', '20160702_215907.jpg', '6545454');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE IF NOT EXISTS `tbl_signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(123) NOT NULL,
  `father_name` varchar(123) NOT NULL,
  `contact` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`id`, `name`, `father_name`, `contact`, `email`, `password`) VALUES
(1, 'harish kaushik', 'Sh vinod kaushiik', '7206167815', 'harishkaushik100@gmail.com', '123'),
(2, 'jitender', 'adf', '53454', 'jitender@gmail.com', '123'),
(3, 'rohit bah', 'asc', '343454656', 'rb100@gmail.com', '123'),
(4, 'navdeep', 'asfdg', '876554', 'nv@gmail.com', '123'),
(5, 'anita yadav', 'ramesh yadav', '456456688', 'ani100@gmail.com', '123'),
(6, 'raman', 'narender', '244354543534', 'ra100@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trainee`
--

CREATE TABLE IF NOT EXISTS `tbl_trainee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trainee_id` varchar(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `father_name` varchar(123) NOT NULL,
  `contact` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `address` varchar(123) NOT NULL,
  `course` varchar(123) NOT NULL,
  `gender` varchar(123) NOT NULL,
  `doj` date NOT NULL,
  `dob` date NOT NULL,
  `duration` varchar(123) NOT NULL,
  `image` varchar(123) NOT NULL,
  `fee` varchar(123) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `contact` (`contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_trainee`
--

INSERT INTO `tbl_trainee` (`id`, `trainee_id`, `name`, `father_name`, `contact`, `email`, `address`, `course`, `gender`, `doj`, `dob`, `duration`, `image`, `fee`) VALUES
(7, 'jit3434', 'jitender', 'sh lillo singh', '5444443434', 'jitu100@gmail.com', 'bhiwani', 'web devlopment', 'male', '2016-08-19', '2016-08-06', '3-months', '20160702_220641.jpg', '3456'),
(8, 'har7815', 'harish kaushik', 'sh vinod kaushik', '7206167815', 'harishkaushik100@gmail.com', 'new bank colony bhiwani', 'advance php,networking', 'male', '2016-08-12', '2016-08-20', '1-year', '20160702_220607.jpg', '656556'),
(9, 'huk6755', 'hukam', 'abc', '567576755', 'hukam@gmail.com', 'fsfsd', 'sql,advance php,networking', 'male', '2016-08-11', '2016-08-19', '1-year', '20160702_223018.jpg', '5600'),
(10, 'rah8897', 'rahul', 'sataywan', '87879798897', 'rau@gmail.com', 'fdfsdff', 'networking', 'male', '2016-08-13', '2016-08-27', '8-week', '20160701_190356.jpg', '21000'),
(13, 'Aar4565', 'Aarti verma', 'roshanlal', '5644564565', 'aa@gmail.com', 'hfghgfhg', 'advance php,networking,web designing', 'female', '2016-08-26', '2016-08-12', '8-week', 'port-Monkey-Buffet-20-6--600x400.jpg', '545433'),
(14, 'Ish4778', 'Ishank Goel', 'Vinay Kumar', '9991134778', 'ishank.goel28@gmail.com', '#970/11, Ashri Gate, Jind', 'sql,advance php', 'male', '2015-09-15', '2017-01-18', '3-month', 'SteveJobs.jpg', '16000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
