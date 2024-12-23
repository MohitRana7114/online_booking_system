-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2024 at 10:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminName` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  UNIQUE KEY `Password` (`Password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminName`, `Password`) VALUES
('Krishna', '0510');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Name` char(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Contact_Address` varchar(50) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Region` varchar(20) NOT NULL,
  `Pin_Code` int(6) NOT NULL,
  `Service` varchar(20) NOT NULL,
  `Last_Name` text NOT NULL,
  `Customer_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Time` varchar(15) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Name`, `Email`, `Phone`, `Contact_Address`, `City`, `Region`, `Pin_Code`, `Service`, `Last_Name`, `Customer_ID`, `Date`, `Status`, `Time`) VALUES
('xgz', 'ddsag@gamil.com', 2147483647, 'xzv', 'dsbsdb', '', 0, 'Plumbing', 'zdgd', 5, '2024-03-31', 'w', ''),
('vinit', 'vsoni@gmail.com', 2147483647, 'sdhsdh', 'pilduraaaaaaaaa', '', 368595, 'Plumbing', 'soni', 6, '2024-03-31', 'w', ''),
('zdgz', 'aviprajapati28112001@gmail.com', 2147483647, 'cxb', 'Pardi', '', 396125, 'Electrician', 'xbz', 7, '2024-03-31', 'w', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 8, '2024-02-11', 'w', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 9, '2024-02-11', 'w', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 10, '2024-02-11', 'd', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 11, '2024-02-11', 'w', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 12, '2024-02-11', 'w', ''),
('krishnabdbmdb', 'aviprajapati28112001@gmail.com', 2147483647, 'Kumbharwad Valsadi Zampa Killa Pardi', 'Pardi', '', 396125, 'Cleaning', 'Prajapati', 13, '2024-02-11', 'w', ''),
('first', 'fisrt@gmail.com', 2147483647, 'afsaf', 'Ahmedabad', '', 365987, 'Plumbing', 'last', 14, '2024-03-31', 'a', ''),
('first', 'fisrt@gmail.com', 2147483647, 'afsaf', 'Ahmedabad', '', 365987, 'Plumbing', 'last', 15, '2024-03-31', 'a', ''),
('fsaf', 'asd', 986598659, 'saf', 'Nadiad', '', 365289, 'Plumbing', 'asfa', 16, '2024-03-31', 'a', ''),
('fsaf', 'asd', 986598659, 'saf', 'Nadiad', '', 365289, 'Plumbing', 'asfa', 17, '2024-03-31', 'd', ''),
('safsaf', 'sad', 2147483647, 'asfs', 'Nadiad', '', 989898, 'Plumbing', 'safas', 18, '2025-03-31', 'd', ''),
('safsaf', 'sad', 2147483647, 'asfs', 'Nadiad', '', 989898, 'Plumbing', 'safas', 19, '2025-03-31', 'a', ''),
('vinit', 'vs@gmail.com', 2147483647, 'Karamsad', 'Ahmedabad', '', 356985, 'Electrician', 'soni', 20, '2024-03-30', 'a', '10.00PM'),
('d kartik', 'dt@gmail.com', 2147483647, 'MG ROAD', 'Nadiad', '', 396125, 'Electrician', 'soni', 21, '2024-03-10', 'a', '10.00PM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `Password`) VALUES
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'aa', '', 'aa'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, 'bb', 'aviprajapati28112001@gmail.com', 'bb'),
(20, 'avi', 'ap2024@gmail.com', '123'),
(21, 'sir', 'asd@gmail.com', '001'),
(22, 'fr', 'fr@gmail.com', '001'),
(23, 'me', 'me@gmail.com', '123'),
(24, 'ini', 'ini@gmail.com', '001'),
(25, 'parihar', 'par@gmail.com', 'par123'),
(26, 'minaxi', 'm@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
