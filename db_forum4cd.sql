-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2022 at 02:50 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forum4cd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblabout`
--

DROP TABLE IF EXISTS `tblabout`;
CREATE TABLE IF NOT EXISTS `tblabout` (
  `aboutid` int(11) NOT NULL AUTO_INCREMENT,
  `bgtext` varchar(50) NOT NULL,
  `bgimage` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`aboutid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblabout`
--

INSERT INTO `tblabout` (`aboutid`, `bgtext`, `bgimage`, `title`, `text`) VALUES
(2, 'Who we are', 'assets/images/IMG-20220208-WA0023.jpg', 'Forum for Community Development', 'We are a youth lead social enterprise. A community based organzation that seeks to find solutions to youth related challenges whiles maintaining financial stability at the same time. <br> 					Established in 2016, our key areas of operations include Education (formal and informal), access to finance for young entrepreneurs and advocacy for youths participation in governance.');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `adminid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `username`, `password`, `fname`, `lname`, `photo`) VALUES
(1, 'chase', '1234', 'Chasey', 'Chase', 'assets/members/8f5c68b9f39e5bb9e0ba216d9e0d5e19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

DROP TABLE IF EXISTS `tblblog`;
CREATE TABLE IF NOT EXISTS `tblblog` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `postimage` varchar(100) NOT NULL,
  `posttext` text NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`postid`, `author`, `title`, `postimage`, `posttext`) VALUES
(2, 'SE Conteh', 'Koidu Boarding School Project', 'assets/images/IMG-20220208-WA0040.jpg', 'Todayâ€™s world is an information-rich world and it has become a necessity for everyone to know about computers. A computer is an electronic data processing device, which accepts and stores data input, processes the data input, and generates the output in a required format.'),
(3, 'SE Conteh', 'Koidu Boarding School Project 2', 'assets/images/IMG-20220208-WA0039.jpg', 'Todayâ€™s world is an information-rich world and it has become a necessity for everyone to know about computers. A computer is an electronic data processing device, which accepts and stores data input, processes the data input, and generates the output in a required format.'),
(4, 'SE Conteh', 'Koidu Boarding School Project', 'assets/images/IMG-20220208-WA0042.jpg', 'Todayâ€™s world is an information-rich world and it has become a necessity for everyone to know about computers. A computer is an electronic data processing device, which accepts and stores data input, processes the data input, and generates the output in a required format.'),
(5, 'SE Conteh', 'Microsoft Training', 'assets/images/coverbg.jpg', 'Todayâ€™s world is an information-rich world and it has become a necessity for everyone to know about computers. A computer is an electronic data processing device, which accepts and stores data input, processes the data input, and generates the output in a required format.'),
(6, 'SE Conteh', 'Microsoft Training 2', 'assets/images/IMG-20220208-WA0031.jpg', 'Todayâ€™s world is an information-rich world and it has become a necessity for everyone to know about computers. A computer is an electronic data processing device, which accepts and stores data input, processes the data input, and generates the output in a required format.');

-- --------------------------------------------------------

--
-- Table structure for table `tblblogsettings`
--

DROP TABLE IF EXISTS `tblblogsettings`;
CREATE TABLE IF NOT EXISTS `tblblogsettings` (
  `blogid` int(11) NOT NULL AUTO_INCREMENT,
  `bgtext` varchar(100) NOT NULL,
  `bgimage` varchar(100) NOT NULL,
  PRIMARY KEY (`blogid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblogsettings`
--

INSERT INTO `tblblogsettings` (`blogid`, `bgtext`, `bgimage`) VALUES
(2, 'Our Weekly News', 'assets/images/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomments`
--

DROP TABLE IF EXISTS `tblcomments`;
CREATE TABLE IF NOT EXISTS `tblcomments` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) DEFAULT NULL,
  `visitorname` varchar(50) DEFAULT NULL,
  `comment` text,
  `date_commented` date DEFAULT NULL,
  PRIMARY KEY (`commentid`),
  KEY `postid` (`postid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcomments`
--

INSERT INTO `tblcomments` (`commentid`, `postid`, `visitorname`, `comment`, `date_commented`) VALUES
(1, 6, '', 'comment', '2022-02-10'),
(2, 6, 'Saidu', 'comment', '2022-02-10'),
(3, 6, 'Saidu', 'comment', '2022-02-10'),
(4, 6, 'Saidu', 'comment', '2022-02-10'),
(5, 4, 'Saidu', 'comment', '2022-02-10'),
(6, 4, 'Saidu', 'comment', '2022-02-10'),
(7, 4, 'Saidu', 'comment', '2022-02-10'),
(8, 3, 'test', 'test', '2022-02-10'),
(9, 5, ' chase', 'wrr', '2022-02-10'),
(10, 5, 'Saidu', 'SaiduSaiduSaiduSaidu', '2022-02-10'),
(11, 5, 'Saidu', 'SaiduSaiduSaiduSaidu', '2022-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

DROP TABLE IF EXISTS `tblcontact`;
CREATE TABLE IF NOT EXISTS `tblcontact` (
  `contactid` int(11) NOT NULL AUTO_INCREMENT,
  `bgtext` varchar(50) NOT NULL,
  `bgimage` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`contactid`, `bgtext`, `bgimage`, `email`, `address`, `phone`) VALUES
(3, 'Call us now', 'assets/images/6.jpg', 'forumforcommunityd@gmail.com', ' Koidu City - Kono District, Sierra Leone', '+23277222982');

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

DROP TABLE IF EXISTS `tblgallery`;
CREATE TABLE IF NOT EXISTS `tblgallery` (
  `galleryid` int(11) NOT NULL AUTO_INCREMENT,
  `imageslogan` varchar(100) NOT NULL,
  `imagetext` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`galleryid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`galleryid`, `imageslogan`, `imagetext`, `image`) VALUES
(5, 'Education 3', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0017.jpg'),
(4, 'Education 2', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0018.jpg'),
(6, 'Education 4', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0019.jpg'),
(7, 'Education 5', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0020.jpg'),
(8, 'Education 6', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0021.jpg'),
(9, 'Education 7', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0022.jpg'),
(10, 'Education 8', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0023.jpg'),
(11, 'Education 9', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0024.jpg'),
(12, 'Education 10', 'Microsoft Training', 'assets/gallery/IMG-20220208-WA0030.jpg'),
(13, 'Education 11', 'Koidu Boarding School Project ', 'assets/gallery/IMG-20220208-WA0034.jpg'),
(14, 'Education 12', 'Koidu Boarding School Project ', 'assets/gallery/IMG-20220208-WA0040.jpg'),
(15, 'Education 13', 'Koidu Boarding School Project ', 'assets/gallery/IMG-20220208-WA0045.jpg'),
(16, 'Education 14', 'Koidu Boarding School Project ', 'assets/gallery/IMG-20220208-WA0048.jpg'),
(17, 'Education 15', 'Koidu Boarding School Project ', 'assets/gallery/IMG-20220208-WA0049.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblindexsettings`
--

DROP TABLE IF EXISTS `tblindexsettings`;
CREATE TABLE IF NOT EXISTS `tblindexsettings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgtext` text NOT NULL,
  `bgimage` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmembers`
--

DROP TABLE IF EXISTS `tblmembers`;
CREATE TABLE IF NOT EXISTS `tblmembers` (
  `memberid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmembers`
--

INSERT INTO `tblmembers` (`memberid`, `fname`, `lname`, `profile`, `position`, `email`, `phone`) VALUES
(2, 'Michael ', 'Senesie', 'assets/members/IMG-20220209-WA0005.jpg', 'Managing Director', '', ''),
(3, 'David Sahr', 'Joe', 'assets/members/IMG-20220209-WA0006.jpg', 'Education Lead Person', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
