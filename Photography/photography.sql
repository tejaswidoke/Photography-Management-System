-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2020 at 08:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photography`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `subj` varchar(50) DEFAULT NULL,
  `msg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cname`, `email`, `subj`, `msg`) VALUES
('pallavi lal', 'pallavi@gmail.com', 'pree-photoshoot', 'outdoor photoshoot'),
('SHIVANI RAWAT', 'shivanirawat@gmail.c', 'wedding', 'Combo pack of wedding'),
('suraj', 'suraj@gmail.com', 'birthday', 'payment'),
('manisha', 'manishaj@gmail.com', 'payment', 'i want to do may payment personaly meeting'),
('gj', 'jbk@gmail.com', 'hvjh', 'hjhk'),
('jadaluh', 'nxlax@gmail.com', 'kjiaj', 'lksaacijp;cjpjcajcj');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `name` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `mbno` int(10) DEFAULT NULL,
  `add` varchar(50) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `shoot` varchar(10) DEFAULT NULL,
  `msg` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`name`, `email`, `mbno`, `add`, `city`, `shoot`, `msg`) VALUES
('daksta', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'na', ''),
('daksta', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'na', ''),
('daksta', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'na', ''),
('dipali deore', 'dipali@gmail.co', 2147483647, 'bmt', 'bmt', 'hi i want ', ''),
('dipali deore', 'dipali@gmail.co', 2147483647, 'bmt', 'bmt', 'hi i want ', ''),
('dipali deore', 'dipali@gmail.co', 2147483647, 'na', 'na', 'outdoor', 'i want an personal and proffesional outdoor shoot.'),
('SHIVANI NA RAWA', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'sds', 'sfdhfgjghm'),
('SHIVANI NA RAWA', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'sds', 'sfdhfgjghm'),
('SHIVANI NA RAWA', 'shivanirawat@gm', 2147483647, 'NA', 'NA', 'dfdgdf', 'sfdbgvmghm'),
('Sachin Sahebrao', 'dholesac@gmail.', 2147483647, 'Flat No :101, Amma society ,kalakhadak ,bhumkar, p', 'Wardha', 'cnisjdnciu', 'cnoznvidv'),
('Mrunal Aher', 'mrunal@gmail.co', 954687412, 'Baramati', 'Baramati', 'cultural p', 'I wnat a professional ganpati photo festiv happing in my club'),
('shiddhi sangai', 'siddhi27@gmail.', 2147483647, 'ashok nagar', 'baramati', 'babay', 'hi i want do the  babay shoot which is of one year'),
('shiddhi sangai', 'siddhi27@gmail.', 2147483647, 'ashok nagar', 'baramati', 'babay', 'hi i want do the  babay shoot which is of one year'),
('Pramod Kumar ', 'kumar.pramod210', 2147483647, 'A10-1204, Megapolis Splendour Society,', 'Pune', 'Wedding', 'wedding cultural ethnic shoot'),
('kxjsx', 'nlcks@gmail.com', 467631, 'mcljspo', 'pune', 'biuhui', 'z,cj;owcp');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `cname` varchar(10) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `cno` int(10) DEFAULT NULL,
  `amt` int(5) DEFAULT NULL,
  `yr` int(4) DEFAULT NULL,
  `mo` int(2) DEFAULT NULL,
  `sc` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cname`, `name`, `cno`, `amt`, `yr`, `mo`, `sc`) VALUES
(NULL, 'dakashata', 2147483647, NULL, 0, 0, 346),
(NULL, 'dakashata', 2147483647, NULL, NULL, NULL, 346),
(NULL, 'dakashata', 2147483647, NULL, NULL, NULL, 346),
(NULL, 'master car', 2147483647, NULL, NULL, NULL, 478),
(NULL, 'master car', 2147483647, NULL, NULL, NULL, 456),
(NULL, 'master car', 2147483647, NULL, NULL, NULL, 745),
(NULL, 'mrunal man', 2147483647, NULL, NULL, NULL, 954),
(NULL, 'dakshata d', 2147483647, 10000, NULL, NULL, 256),
('', 'pramod kum', 2147483647, 20000, NULL, NULL, 145),
('pramod kum', 'pramod kum', 2147483647, 20000, NULL, NULL, 145),
('pramod kum', 'pramod kum', 2147483647, 20000, NULL, NULL, 145),
('kdadoaa', 'm;flsj', 684, 4683, NULL, NULL, 154),
('kdadoaa', 'm;flsj', 2147483647, 4683, NULL, NULL, 154);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `rid` int(5) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `pass` text,
  `cpass` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `fname`, `mname`, `lname`, `email`, `pass`, `cpass`) VALUES
(NULL, 'Dakshata', 'Pramod', 'Desai', 'dakshata@gmail.com', '12345', '12345'),
(NULL, 'Sokate', 'Shraddha', 'Rajendra', 'shraddha@gmail.com', 'shraddha', 'shraddha'),
(NULL, 'admin', 'NA', 'admin', 'admin@gmail.com', '123', '123'),
(NULL, 'Taware', 'Shivani', 'Vaibhav', 'choti@gmail.com', 'shivani', 'shivani'),
(NULL, 'Bhandari ', 'Rashhi', 'Sunil', 'rashi@gmail.com', 'rashib', 'rashib'),
(NULL, 'Sangai', 'Siddhi', 'Milind', 'siddhi27@gmail.com', 'siddhi27', 'siddhi27'),
(NULL, 'Shah', 'Nimish', 'Chetan', 'nimish24@gamil.com', 'nimishshah', 'nimishshah'),
(NULL, 'Gaurav', 'vijay', 'joshi', 'gau21@gmail.com', 'gaurav', 'gaurav'),
(NULL, 'dipali', 'ramesh', 'deore', 'dipali@gmail.com', 'dipa', 'dipa'),
(NULL, 'Pramod Kumar', 'NA', 'Desai', 'kumar.pramod2106@gma', '4561', '4561');
