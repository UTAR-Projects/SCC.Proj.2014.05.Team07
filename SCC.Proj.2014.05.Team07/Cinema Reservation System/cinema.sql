-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2009 at 09:23 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(25) NOT NULL default '',
  `Email` varchar(25) NOT NULL default '',
  `Contact` bigint(11) NOT NULL default '0',
  `Comments` varchar(100) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Name`, `Email`, `Contact`, `Comments`) VALUES
('hardik', 'hardikpandit18@yahoo.com', 9909065010, 'It''s Very Good'),
('hardik', 'hardikpandit18@yahoo.com', 9909065010, 'It''s A Good'),
('Bhargav', 'bhargav@yahoo.com', 9898616010, 'It''s Very Good'),
('hardik', 'hardikpandit18@yahoo.com', 9909065010, 'Hello!This Is A Good Web-Site'),
('hardik', 'hardikpandit18@yahoo.com', 9909065010, 'It''s A Good'),
('hardik', 'hardikpandit18@yahoo.com', 9909065010, 'It''s Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Picturename` varchar(30) NOT NULL default '',
  `Genre` varchar(40) NOT NULL default '',
  `Language` varchar(10) NOT NULL default '',
  `Banner` varchar(40) NOT NULL default '',
  `Actors` varchar(40) NOT NULL default '',
  `Director` varchar(40) NOT NULL default '',
  `Country` varchar(30) NOT NULL default '',
  `Lyrics` varchar(30) NOT NULL default '',
  `Musician` varchar(30) NOT NULL default '',
  `Image` varchar(100) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Picturename`, `Genre`, `Language`, `Banner`, `Actors`, `Director`, `Country`, `Lyrics`, `Musician`, `Image`) VALUES
('Kites', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', ''),
('Hello', 'u', 'u', 'u', 'u', 'uu', 'u', 'u', 'u', ''),
('Invisible Target', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', ''),
('Dev-d', 'Drama', 'Unknown', 'Unknown', 'Unknown', 'Anurag Kashyap', 'India', 'Unknown', 'Unknown', ''),
('Billu', 'Comedy', 'Hindi', 'Unknown', 'Shahrukh Khan,Lara Dutta,Irrfan Khan', 'Priyadarshan', 'India', '', 'Pritam', '3 Idiuts.jpg'),
('Slumdog Crorpati', 'Unknown', 'Hindi', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'slum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(10) NOT NULL default '',
  `Password` varchar(10) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('hardik', 'hardik');

-- --------------------------------------------------------

--
-- Table structure for table `scr1`
--

CREATE TABLE `scr1` (
  `Picture` varchar(25) NOT NULL default '',
  `Time` varchar(25) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scr1`
--

INSERT INTO `scr1` (`Picture`, `Time`) VALUES
('hardik', '12 to 3'),
('hardik', '12 to 3'),
('Hello', '6 to 9'),
('Billu', '9 to 12'),
('Kites', '3 to 6');

-- --------------------------------------------------------

--
-- Table structure for table `scr2`
--

CREATE TABLE `scr2` (
  `Time` varchar(20) NOT NULL default '',
  `Picture` varchar(40) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scr2`
--

INSERT INTO `scr2` (`Time`, `Picture`) VALUES
('6 to 9', 'Billu'),
('6 to 9', 'Hardik'),
('9 to 12', 'Hello'),
('9 to 12', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `scr3`
--

CREATE TABLE `scr3` (
  `Time` varchar(20) NOT NULL default '',
  `Picture` varchar(40) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scr3`
--

INSERT INTO `scr3` (`Time`, `Picture`) VALUES
('9 to 12', 'Hello');
