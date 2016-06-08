-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2016 at 03:12 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayuda`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`time_stamp`, `name`, `message`, `email`) VALUES
('2016-03-31 16:27:01', 'Sankeerth Goud', 'hi\r\n', ''),
('2016-03-31 16:33:57', 'sam', 'doing great work', ''),
('2016-03-31 16:41:14', 'sam', 'hello', 'sam@sam.com'),
('2016-04-01 05:21:38', 'lydia', 'hello', 'lydia@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

DROP TABLE IF EXISTS `donate`;
CREATE TABLE IF NOT EXISTS `donate` (
  `amount` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`amount`, `name`, `lname`, `mail`, `phone`, `address`, `message`) VALUES
('10000', 'GV', 'Vishwanath', 'something@gmail.com', '9111111111', 'VIT Owner', 'Keep UP'),
('2000', 'Lydia', 'Jane', 'Lydiajane@gmail.com', '9999999999', 'vit univ', 'Enjoy'),
('1000', 'Balaji', 'Kadiri', 'saibalaji147@gmail.com', '9595959595', 'VIT', 'Love ayuda'),
('5000', 'Sankeerth', 'Goud', 'goud.sankeerth@gmail.com', '9789712364', 'vit University', 'Hola..! Ayuda..!!'),
('5000', 'Sankeerth', 'Goud', 'goud.sankeerth@gmail.com', '9789712364', 'vit University', 'Hola..! Ayuda..!!'),
('20', 'Bharath', 'Reddy', 'bharathlv@live.com', '9789789796', 'Room no 418 k block\r\nMENS HOSTEL VIT UNIVERSITY', 'Super');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `why` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`name`, `mail`, `dob`, `mobile`, `gender`, `exp`, `why`) VALUES
('Sam', 'amaraboina.sankeerthgoud2013@vit.ac.in', '02061996', '9874563210', 'Male', 'Yes', '>.>'),
('Lydia Jane', 'lydiajane.g@vit.ac.in', '01011985', '9874563210', 'FeMale', 'No', '>.>'),
('Sankeerth', 'goud.sankeerth@gmail.com', '02061995', '9789712364', 'Male', 'Yes', 'thats why'),
('Balaji', 'saibalaji147@gmail.com', '06121994', '9999999999', 'Male', 'Yes', 'why');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
