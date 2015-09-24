-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2015 at 09:29 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `daniport`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `pageTitle` varchar(50) NOT NULL,
  `headerHead` varchar(50) NOT NULL,
  `headerP` text NOT NULL,
  `oneHead` varchar(50) NOT NULL,
  `oneP` text NOT NULL,
  `oneIMG` varchar(255) NOT NULL,
  `twoHead` varchar(50) NOT NULL,
  `twoP` text NOT NULL,
  `threeHead` varchar(50) NOT NULL,
  `threeP` text NOT NULL,
  `threeIMG` varchar(255) NOT NULL,
  `pageID` varchar(10) NOT NULL,
  `fourHead` varchar(50) NOT NULL,
  `fourP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`pageTitle`, `headerHead`, `headerP`, `oneHead`, `oneP`, `oneIMG`, `twoHead`, `twoP`, `threeHead`, `threeP`, `threeIMG`, `pageID`, `fourHead`, `fourP`) VALUES
('DK portfolio', 'Danielle Kuck', 'Website Design | Graphic Design | Photography', 'About Me', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A minus quo exercitationem architecto accusamus, earum labore recusandae sed libero sint blanditiis ea magnam, dolor commodi ut sit. Quibusdam, laudantium alias.', 'images/myself.jpg', 'My Skills', '', 'Photos', 'My favorite pieces from 2012-2015', '', '1', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', '', '', '', '', '', '', '', 'Websites', ''),
('', '', '', '', '', '', '', '', '', '', '', '', '', 'Coming Soon!');
