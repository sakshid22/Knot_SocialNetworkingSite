-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2015 at 07:46 AM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE IF NOT EXISTS `usermaster` (
  `uid` varchar(100) NOT NULL,
  `upassword` varchar(199) DEFAULT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `uemail` varchar(100) DEFAULT NULL,
  `upic` varchar(100) DEFAULT NULL,
  `regdate` date DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`uid`, `upassword`, `uname`, `uemail`, `upic`, `regdate`) VALUES
('user001', 'allahabad', 'alok upadhyay', 'alok@gmail.com', 'pic/alok.jpg', '2015-07-05'),
('userr005', '69ccdb673390dfa062aff5649946e2a6f0f98827', 'Manish', 'manu@gmail.com', 'pic/5598cd695fd41alok.jpg', '2015-07-05'),
('user002', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'alok', 'alok@gmail.com', 'pic/5598cf9db2ec0alok.jpg', '2015-07-05');
