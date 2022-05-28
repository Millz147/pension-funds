-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 07:40 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pension`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Gender` text NOT NULL,
  `Fullname` text NOT NULL,
  `Passport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Gender`, `Fullname`, `Passport`) VALUES
('Admin', 'Admin', 'Male', 'Ibrahim Habib', 'images/pension.png');

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `rsa` text NOT NULL,
  `datee` text NOT NULL,
  `amountt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `utitle` text NOT NULL,
  `sname` text NOT NULL,
  `fname` text NOT NULL,
  `oname` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `marital` text NOT NULL,
  `nationality` text NOT NULL,
  `nin` text NOT NULL,
  `housen` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `wtype` text NOT NULL,
  `pofwork` text NOT NULL,
  `empid` text NOT NULL,
  `fapdate` text NOT NULL,
  `capdate` text NOT NULL,
  `secretpin` text NOT NULL,
  `passport` text NOT NULL,
  `rsa` text NOT NULL,
  `walletfund` text NOT NULL,
  `status` text NOT NULL,
  `address` text NOT NULL,
  `regdate` text NOT NULL,
`sno` int(11) NOT NULL,
  `regyear` text NOT NULL,
  `withreq` text NOT NULL,
  `withamount` text NOT NULL,
  `baccnu` text NOT NULL,
  `baccna` text NOT NULL,
  `btype` text NOT NULL,
  `fullwithdraw` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`utitle`, `sname`, `fname`, `oname`, `gender`, `dob`, `marital`, `nationality`, `nin`, `housen`, `telephone`, `email`, `wtype`, `pofwork`, `empid`, `fapdate`, `capdate`, `secretpin`, `passport`, `rsa`, `walletfund`, `status`, `address`, `regdate`, `sno`, `regyear`, `withreq`, `withamount`, `baccnu`, `baccna`, `btype`, `fullwithdraw`) VALUES
('Mr.', 'IBRAHIM ', 'HABIB', '', 'Male', '2020-10-08', 'Single', 'NIGERIAN', '65467785282', 'NO 1, DARAMOLA', '08164435862', 'habibsibrahim@gmail.com', 'Federal & State Employer', 'ULTIMATE IT CONCEPT', '23556998732', '2020-10-01', '2020-09-29', 'ola', 'images/778540046passport.png', '778540046', '1500', 'APPROVE', 'SHOKU VILLA', '', 1, '', '', '', '', '', '', ''),
('Mr.', 'Abdullahi', 'Shakiru', 'Olamilekan', 'Male', '1995-11-11', 'Single', 'NIGERIAN', '2345678', 'No 21b, Adeboye street,ijora-badia,Lagos state.', '08174399063', 'Shakiruabdullahi@gmail.com', 'Federal & State Employer', 'Dangote plc', '08098', '1996-01-03', '1996-01-03', '12345', 'images/558795171passport.png', '558795171', '0', 'APPROVE', 'PMB 420, APAPA LOCAL GOVERNMENT.', '', 2, '', '', '', '', '', '', ''),
('Mr.', 'GBADEGESIN', 'RASAQ', 'OLAWALE', 'Male', '2020-03-10', 'Single', 'NIGERIA', '53272822631', 'NO 1, DARAMOLA', '08164435862', 'habibsibrahim@gmail.com', 'Federal & State Employer', 'FLOUR MILL APAPA', '234564463473287', '2020-02-12', '2020-10-13', 'ola', 'images/603341680passport.jpg', '603341680', '15000', 'APPROVE', 'APAPA WHARF LAGOS', '01/11/20', 3, '2020', 'NO', '5000', '7643747', 'hdsdj', 'Access Bank', '');

-- --------------------------------------------------------

--
-- Table structure for table `fundrecords`
--

CREATE TABLE IF NOT EXISTS `fundrecords` (
  `datee` text NOT NULL,
  `amount` text NOT NULL,
  `rsa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fundrecords`
--

INSERT INTO `fundrecords` (`datee`, `amount`, `rsa`) VALUES
('', '800', ''),
('01/11/20', '200', ''),
('01/11/20', '20000', '603341680');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE IF NOT EXISTS `withdraw` (
  `rsa` text NOT NULL,
  `amount` text NOT NULL,
  `baccnu` text NOT NULL,
  `baccna` text NOT NULL,
  `btype` text NOT NULL,
  `datee` text NOT NULL,
  `fname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`rsa`, `amount`, `baccnu`, `baccna`, `btype`, `datee`, `fname`) VALUES
('603341680', '5000', '7643747', 'baccna', 'Access Bank', '02/11/20', 'Mr. GBADEGESIN RASAQ OLAWALE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
