-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2016 at 11:20 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project2016`
--
CREATE DATABASE IF NOT EXISTS `project2016` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project20162`;

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `user_id` int(10) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `friend_id` int(10) NOT NULL,
  `request` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`user_id`, `sender`, `friend_id`, `request`, `status`) VALUES
(1, 'Nitesh kumar', 10, 'Chandan kumar', 1),
(1, 'Nitesh kumar', 5, 'Abhishek prakash', 1),
(1, 'Nitesh kumar', 3, 'Suraj kumar', 1),
(3, 'Suraj kumar', 11, 'Aditya kumar', 0),
(3, 'Suraj kumar', 12, 'Deepak kumar', 2),
(12, 'Deepak kumar', 1, 'Nitesh kumar', 2),
(1, 'Nitesh kumar', 9, 'Mohan kumar', 0),
(1, 'Nitesh kumar', 2, 'Aman kumar', 0),
(2, 'Aman kumar', 1, 'Nitesh kumar', 2),
(5, 'Abhishek prakash', 1, 'Nitesh kumar', 2),
(3, 'Suraj kumar', 5, 'Abhishek prakash', 1),
(5, 'Abhishek prakash', 7, 'Shishir kumar', 1),
(5, 'Abhishek prakash', 6, 'Roshan kumar', 1),
(5, 'Abhishek prakash', 12, 'Deepak kumar', 2),
(1, 'Nitesh kumar', 7, 'Shishir kumar', 1),
(7, 'Shishir kumar', 6, 'Roshan kumar', 1),
(0, ' ', 5, 'Abhishek prakash', 0),
(0, ' ', 3, 'Suraj kumar', 0),
(3, 'Suraj kumar', 14, 'Super keshav', 1),
(3, 'Suraj kumar', 4, 'Rakesh kumar', 0),
(3, 'Suraj kumar', 7, 'Shishir kumar', 0),
(3, 'Suraj kumar', 13, 'Biru keshri', 0),
(14, 'Super keshav', 12, 'Deepak kumar', 2),
(14, 'Super keshav', 1, 'Nitesh kumar', 2),
(14, 'Super keshav', 9, 'Mohan kumar', 0),
(14, 'Super keshav', 8, 'Abhishek anand', 0),
(14, 'Super keshav', 4, 'Rakesh kumar', 0),
(4, 'Rakesh kumar', 5, 'Abhishek prakash', 0),
(1, 'Nitesh kumar', 4, 'Rakesh kumar', 0),
(1, 'Nitesh kumar', 6, 'Roshan kumar', 0),
(1, 'Nitesh kumar', 11, 'Aditya kumar', 0),
(1, 'Nitesh kumar', 8, 'Abhishek anand', 0),
(1, 'Nitesh kumar', 14, 'Super keshav', 0),
(14, 'Super keshav', 7, 'Shishir kumar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `frndlist`
--

CREATE TABLE IF NOT EXISTS `frndlist` (
  `username` varchar(30) NOT NULL,
  `friend` varchar(30) NOT NULL,
  `block` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('prab2k11', 'student554986'),
('prab2k15', 'student554986');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `username` varchar(30) NOT NULL,
  `picname` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`username`, `picname`, `timestamp`) VALUES
('prab2k11', '2012-12-11-249 - Copy.jpg', '2016-02-19 10:26:33'),
('prab2k11', '2012-12-11-249 - Copy.jpg', '2016-02-19 10:28:22'),
('prab2k11', '2012-12-11-249 - Copy.jpg', '2016-02-19 11:06:44'),
('prab2k11', '2012-12-11-249 - Copy.jpg', '2016-02-19 11:17:18'),
('prab2k11', '2012-12-11-249 - Copy.jpg', '2016-02-19 12:09:03'),
('prab2k15', '07122012161 - Copy.jpg', '2016-02-19 16:37:29'),
('prab2k15', '07122012161 - Copy.jpg', '2016-02-19 16:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `postmsg`
--

CREATE TABLE IF NOT EXISTS `postmsg` (
  `username` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `pictures` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postmsg`
--

INSERT INTO `postmsg` (`username`, `message`, `pictures`, `timestamp`, `status`) VALUES
('prab2k11', 'mmmmmmnn', '', '2016-02-18 19:15:13', 1),
('prab2k11', 'mmmnnnbvvcc', '', '2016-02-18 19:17:04', 1),
('prab2k11', 'mmdddddd', '', '2016-02-18 19:18:03', 1),
('prab2k11', 'xxxxxxxxxxxxxxxxxx', '', '2016-02-18 19:21:03', 1),
('prab2k11', '5555555555555555555555555555555555555', '', '2016-02-19 04:24:16', 1),
('prab2k11', '11111111111111', '', '2016-02-19 04:29:43', 1),
('prab2k11', 'Today is very sunny day (y)', '', '2016-02-19 04:57:08', 1),
('prab2k11', 'j77777777777777777777777777', '', '2016-02-19 10:58:07', 1),
('prab2k11', '2012-12-11-249 - Copy.jpg', '', '2016-02-19 11:06:45', 1),
('prab2k11', 'Pictures', '2012-12-11-249 - Copy.jpg', '2016-02-19 11:17:18', 1),
('prab2k11', 'Pictures', '2012-12-11-249 - Copy.jpg', '2016-02-19 12:09:04', 1),
('prab2k11', 'Hiii...my name is Prabhat', '', '2016-02-19 13:17:57', 1),
('prab2k11', 'ddddddddddddddddddddddddddddddddddddddd', '', '2016-02-19 13:22:20', 1),
('prab2k11', 'fffffffffffffffffffffff', '', '2016-02-19 13:22:25', 1),
('prab2k11', 'fffffffffffffffffffffffffffffffffffffffffffff', '', '2016-02-19 14:10:24', 1),
('prab2k11', '1111111111111111111111111111111', '', '2016-02-19 16:06:47', 0),
('prab2k11', 'kdfdsfdsfdsfsdf', '', '2016-02-19 15:38:16', 0),
('prab2k11', 'rtetertrtre e t ertert', '', '2016-02-19 15:38:11', 0),
('prab2k11', 'sl;hf aslrarsdfsdfsdf', '', '2016-02-19 15:38:07', 0),
('prab2k15', 'ddddddddddddddddddddddddd', '', '2016-02-20 07:24:01', 0),
('prab2k15', 'Pictures', '07122012161 - Copy.jpg', '2016-02-20 07:23:56', 0),
('prab2k15', 'cccccccccccccccc', '', '2016-02-20 07:24:59', 1),
('prab2k15', 'ssssssssssssssssss', '', '2016-02-20 07:25:09', 1),
('prab2k15', '111111111111111111111111', '', '2016-02-20 07:25:21', 1),
('prab2k15', 'this is my first post', '', '2016-02-20 08:04:27', 1),
('Nitesh kumar', 'this is my first message', '', '2016-02-22 05:11:55', 0),
('Suraj kumar', 'Hello friends , i am with you', '', '2016-02-21 11:27:33', 1),
('Suraj kumar', 'Good morning.....', '', '2016-02-21 11:35:02', 1),
('Suraj kumar', 'Hi... I am suraj', '', '2016-02-21 11:35:38', 1),
(' ', 'this is my first message ....', '', '2016-02-22 05:15:37', 1),
('Super keshav', 'sfdhgfsgd', '', '2016-02-22 05:46:41', 0),
('Nitesh kumar', 'jdhfjksdjfs', '', '2016-02-01 13:36:09', 0),
('Shishir kumar', 'HELLO FRIENDS', '', '2016-02-01 07:20:44', 1),
('Rakesh kumar', 'Hello friends i am here to teach you', '', '2016-02-01 08:47:58', 1),
('Nitesh kumar', 'jhjjfdhjf', '', '2016-02-01 13:36:13', 0),
('Nitesh kumar', 'gfgfghfh', '', '2016-02-01 13:36:43', 0),
('Nitesh kumar', 'rtrttrtt', '', '2016-02-01 14:02:37', 0),
('Nitesh kumar', 'fjhsdhfjhakfhjkahjfhjajf', '', '2016-02-01 14:02:28', 0),
('Nitesh kumar', 'this is fsdfsj', '', '2016-02-22 15:35:45', 1),
('Nitesh kumar', 'this isifsdfjahfja', '', '2016-02-23 05:52:35', 1),
('Nitesh kumar', 'good morning', '', '2016-02-23 08:22:23', 1),
('Nitesh kumar', 'hi', '', '2016-02-23 12:33:04', 0),
('Nitesh kumar', 'hi ravi whats up...', '', '2016-02-24 05:57:34', 0),
('Super keshav', 'fhjsdjf', '', '2016-02-24 06:02:42', 1),
('Super keshav', 'gvggvvg', '', '2016-02-24 06:21:40', 1),
('Nitesh kumar', 'hi sajjad', '', '2016-02-24 06:46:21', 1),
('Nitesh kumar', 'hi guddu', '', '2016-02-24 06:52:14', 1),
('Nitesh kumar', 'adkfkajf', '', '2016-02-25 07:55:53', 1),
('Nitesh kumar', 'good morning', '', '2016-02-26 06:55:36', 1),
('Nitesh kumar', 'dhfhjkdhfj', '', '2016-02-26 07:35:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `useremail`, `password`, `date`) VALUES
(1, 'Nitesh', 'kumar', 'onceidone@gmail.com', '12345', '2016-02-11'),
(2, 'Aman', 'kumar', 'aman@gmail.com', 'aman', '2016-02-18'),
(3, 'Suraj', 'kumar', 'suraj@gmail.com', 'suraj', '2016-02-17'),
(4, 'Rakesh', 'kumar', 'rakesh@gmail.com', 'rakesh', '2016-02-19'),
(5, 'Abhishek', 'prakash', 'prakash@gmail.com', 'prakash', '2016-02-18'),
(6, 'Roshan', 'kumar', 'roshan@gmail.com', 'roshan', '2016-02-11'),
(7, 'Shishir', 'kumar', 'shishir@gmail.com', 'shishir', '2016-02-04'),
(8, 'Abhishek', 'anand', 'anand@gmail.com', 'abhishek', '2016-02-11'),
(9, 'Mohan', 'kumar', 'mohan@gmail.com', 'mohan', '2016-02-11'),
(10, 'Chandan', 'kumar', 'chandan@gmail.com', 'chandan', '2016-02-12'),
(11, 'Aditya', 'kumar', 'aditya@gmail.com', 'aditya', '2016-02-11'),
(12, 'Deepak', 'kumar', 'deepak@gmail.com', 'deepak', '2016-02-19'),
(13, 'Biru', 'keshri', 'biru@gmail.com', 'biru', '2016-02-18'),
(14, 'Super', 'keshav', 'super@gmail.com', 'super', '2016-02-11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
