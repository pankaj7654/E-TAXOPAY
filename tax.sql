-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 07:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(30) NOT NULL,
  `stateid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`, `stateid`) VALUES
(1, 'Surat', 1),
(2, 'Bangaluru', 2),
(3, 'Ahemdabad', 1),
(4, 'Chhapra', 3),
(5, 'Siwan', 3),
(6, 'Gopalganj', 3),
(7, 'Araria', 3),
(8, 'Arwal', 3),
(9, 'Awrangabad', 3),
(10, 'Banka', 3),
(11, 'Begusray', 3),
(12, 'Buxor', 3),
(13, 'Baisali', 3),
(14, 'Bhojpur', 3),
(15, 'Gaya', 3),
(16, 'Jamui', 3),
(17, 'Jahanabad', 3),
(18, 'Jamnagar', 1),
(19, 'Bhawnagar', 1),
(20, 'Rajkot', 1),
(21, 'Kheda', 1),
(22, 'Surendra nagar', 1),
(23, 'Bhopal', 4),
(24, 'Raisen', 4),
(25, 'Vidisha', 4),
(26, 'Sehore', 4),
(27, 'Gowalior', 4),
(28, 'Indore', 4),
(29, 'Jabalpur', 4),
(30, 'Rewa', 4),
(31, 'Sagar', 4),
(32, 'Ujjain', 4),
(33, 'Allahabad', 5),
(34, 'Banaras', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `conpan` varchar(30) NOT NULL,
  `conname` varchar(30) NOT NULL,
  `conemail` varchar(30) NOT NULL,
  `conmobile` varchar(30) NOT NULL,
  `conmsg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `conpan`, `conname`, `conemail`, `conmobile`, `conmsg`) VALUES
(1, 'ABCDE1234M', 'pankaj panadit', 'pkp36@gmail.com', '6787657687', 'please  contact me'),
(5, 'AWYPV6728L', 'pankaj panadit', 'pkumarpandit25@gmail.com', '7654165889', 'call me'),
(8, 'EJYPK8432I', 'rohit', 'pkp356@gmail.com', '6787657689', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `dtime` varchar(50) NOT NULL,
  `type` int(3) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `pass`, `dtime`, `type`, `status`) VALUES
('ABCDE1234F', 'mohan', '2017-06-18 14:16:15', 1, 0),
('ABCDE1234H', 'mannan786', '2020-03-16 17:29:04', 1, 0),
('ABCDE1234M', '23456789', '2020-06-06 22:43:11', 1, 0),
('ABCDE1234Q', '654321', '2020-06-22 13:51:55', 1, 0),
('admin', 'admin', '2017-05-09 04:56:01', 0, 0),
('AWYPV6728L', '987654321', '2020-05-19 09:53:51', 2, 0),
('AWYPV6728N', '123', '2017-05-09 05:00:24', 2, 0),
('EJYPK8432B', 'Rinks@2524', '2017-05-09 04:56:01', 1, 0),
('EJYPK8432E', '999999999', '2020-05-19 09:28:04', 1, 0),
('EJYPK8432I', '8901234567', '2020-05-19 09:33:21', 1, 0),
('EJYPK8432O', '7777777', '2020-06-06 23:45:51', 1, 0),
('EPQPK7393A', '5678901234', '2020-05-19 10:08:27', 1, 0),
('EPQPK7394G', '123456', '2020-03-16 18:16:29', 1, 0),
('EPQPK7394S', 'f379eaf3c831b04de153469d1bec34', '2020-06-07 17:24:50', 1, 0),
('EPQPK7394T', '8ddcff3a80f4189ca1c9d4d902c3c9', '2020-06-07 18:36:20', 2, 0),
('TPQPK7393B', '0987654321', '2020-05-19 10:17:26', 2, 0),
('TPQPK7393K', '654321', '2020-05-19 15:28:33', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsupdate`
--

CREATE TABLE `newsupdate` (
  `nid` int(11) NOT NULL,
  `ndate` varchar(100) NOT NULL,
  `news` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsupdate`
--

INSERT INTO `newsupdate` (`nid`, `ndate`, `news`) VALUES
(21, '18-06-2020', 'A functionality has been enabled in the e-filing login of the taxpayers whose business turnover exceeds Rs.50 crores to provide the prescribed mode of electronic acceptance of payment made available to the customers Refer Notification |'),
(22, '18-06-2020', 'Instant PAN allotment in near to real time is available at free of cost. Individuals (other than minors) with a valid Aadhaar number (with updated Mobile number) can avail the PAN allotment facility.'),
(23, '18-06-2020', 'CBDT issues FAQs on Direct Tax Vivad se Vishwas Scheme, 2020. These FAQs contain clarifications on scope/eligibility, calculation of disputed tax, procedure related to payment of disputed tax and consequential benefits to the declarant. For further details.'),
(24, '18-06-2020', 'CBDT notified DTVSV Rules, 2020. Online submission of Form 1 and Form 2 are enabled in e-Filing.'),
(25, '18-06-2020', 'CBDT notifies DTVSV Rules, 2020 Form 1 | Form 2 | Form 3 | Form 4 | Form 5'),
(26, '18-06-2020', 'Pr. DGIT(Systems) issued Notification on procedure to filing online Form 1 and Form 2 under Direct Tax Vivad Se Vishwas scheme. For further details.'),
(27, '18-06-2020', 'Dear Taxpayers, Considering COVID-19, we have taken precautionary steps demanded by the situation. Our Helpdesk shall remain open with reduced staff, We urge you to stay safe.'),
(28, '18-06-2020', 'On account of the complete lockdown imposed by Government of Karnataka on movement of people, the e-Filing Call Center is temporarily impacted. All taxpayers are requested to use the e-Nivaran functionality to request for assistance which shall be provided expeditiously.'),
(29, '18-06-2020', 'Finance Minister announces several relief measures relating to Statutory and Regulatory compliance matters across Sectors in view of COVID-19 outbreak For further details.'),
(30, '18-06-2020', 'CBDT has updated the FAQ for further clarification on Direct Tax Vivad se Vishwas Scheme, 2020. For further details.'),
(31, '18-06-2020', 'ITR 1 for AY 2020-21 is available for e-Filing. Other ITRs will be available shortly');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `statename`) VALUES
(1, 'Gujarat'),
(2, 'Karnataka'),
(3, 'Bihar'),
(4, 'Madhya predesh'),
(5, 'Uttar predesh'),
(6, 'Assam'),
(7, 'Chhatisgarh'),
(8, 'Goa'),
(9, 'Gujrat'),
(10, 'Haryana'),
(11, 'Punjab'),
(12, 'Arunachal pradesh'),
(13, 'Himanchal pradesh'),
(14, 'Jharkhand'),
(15, 'Kerala'),
(17, 'Maharastra'),
(18, 'Manipur'),
(19, 'Meghalaya'),
(20, 'Mijoram'),
(21, 'Nagaland'),
(22, 'Odisha'),
(23, 'Rajsthan'),
(24, 'Sikkim'),
(25, 'Tamil Nadu'),
(26, 'Telangna'),
(27, 'Tripura'),
(28, 'Uttara khand'),
(29, 'West bangal');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subid` int(11) NOT NULL,
  `subemail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subid`, `subemail`) VALUES
(1, 'ram@gmail.com'),
(5, 'ram@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taxpaymnet`
--

CREATE TABLE `taxpaymnet` (
  `pid` int(11) NOT NULL,
  `ppannum` varchar(30) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `year` varchar(30) NOT NULL,
  `form_type` varchar(30) NOT NULL,
  `total_income` int(30) NOT NULL,
  `total_expence` int(30) NOT NULL,
  `total_net` int(30) NOT NULL,
  `total_tax` int(30) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxpaymnet`
--

INSERT INTO `taxpaymnet` (`pid`, `ppannum`, `dob`, `year`, `form_type`, `total_income`, `total_expence`, `total_net`, `total_tax`, `date`) VALUES
(1, 'EJYPK8432B', '21-11-1995', '2017-2018', 'Itr-1', 524000, 176648, 347352, 0, '2020-01-16 09:10:40'),
(3, 'EJYPK8432B', '21-11-1995', '2014-2015', 'Itr-1', 125, 0, 125, 0, '2020-01-13 09:43:55'),
(4, 'EJYPK8432B', '21-11-1995', '2016-2017', 'Itr-1', 800000, 405000, 395000, 19750, '2020-01-18 13:00:54'),
(5, 'EJYPK8432B', '21-11-1995', '2015-2016', 'ITR-1', 310000, 32500, 277500, 13875, '2020-02-19 09:59:08'),
(7, 'ABCDE1234F', '31-12-1993', '2017-2018', 'ITR-1', 750000, 405075, 344925, 17246, '2020-02-21 14:34:00'),
(8, 'EPQPK7394G', '20-03-2020', '2017-2018', 'ITR-1', 500, 500, 0, 0, '2020-03-21 20:29:32'),
(9, 'EPQPK7394G', '20-03-2020', '2018-2019', 'ITR-1', 30800, 580, 30220, 0, '2020-04-16 20:33:03'),
(10, 'EPQPK7394G', '20-03-2020', '2018-2019', 'ITR-1', 30800, 580, 30220, 0, '2020-04-16 20:33:51'),
(11, 'EPQPK7394G', '20-03-2020', '2019-2020', 'ITR-1', 400, 400, 0, 0, '2020-04-20 11:10:19'),
(12, 'EPQPK7394G', '20-03-2020', '2015-2016', 'ITR-1', 400, 400, 0, 0, '2020-04-20 11:12:26'),
(13, 'EPQPK7394G', '20-03-2020', '2015-2016', 'ITR-1', 400, 400, 0, 0, '2020-04-20 11:13:35'),
(14, 'EPQPK7394G', '20-03-2020', '2014-2015', 'ITR-1', 433857, 4439, 429418, 21471, '2020-06-15 23:39:49'),
(15, 'EPQPK7394G', '20-03-2020', '2014-2015', 'ITR-1', 433857, 4439, 429418, 21471, '2020-06-15 23:41:25'),
(16, 'EPQPK7394G', '20-03-2020', '2016-2017', 'ITR-1', 2324968, 4980, 2319988, 695996, '2020-06-15 23:43:06'),
(17, 'EJYPK8432E', '06-01-2020', '2019-2020', 'ITR-1', 878612, 18408, 860204, 172041, '2020-06-16 21:29:36'),
(18, 'EJYPK8432E', '06-01-2020', '2018-2019', 'ITR-1', 9881208, 3823, 9877385, 2963216, '2020-06-16 22:36:17'),
(19, 'EJYPK8432E', '06-01-2020', '2017-2018', 'ITR-1', 877820, 2432, 875388, 175078, '2020-06-16 22:37:39'),
(20, 'EJYPK8432E', '06-01-2020', '2016-2017', 'ITR-1', 98799321, 14680, 98784641, 29635392, '2020-06-16 23:08:21'),
(21, 'EPQPK7393A', '07-05-2020', '2018-2019', 'ITR-1', 8798088, 57346, 8740742, 2622223, '2020-06-17 23:29:16'),
(22, 'ABCDE1234F', '31-12-1993', '2019-2020', 'ITR-1', 6587098, 11170, 6575928, 1972778, '2020-06-18 08:42:30'),
(23, 'ABCDE1234F', '31-12-1993', '2015-2016', 'ITR-1', 876878668, 31578, 876847090, 263054127, '2020-06-18 10:06:37'),
(24, 'ABCDE1234F', '31-12-1993', '2014-2015', 'ITR-1', 766074, 32665, 733409, 146682, '2020-06-18 11:15:54'),
(25, 'ABCDE1234F', '31-12-1993', '2016-2017', 'ITR-1', 0, 0, 0, 0, '2020-06-18 11:18:28'),
(26, 'EJYPK8432E', '06-01-2020', '2015-2016', 'ITR-1', 0, 0, 0, 0, '2020-06-18 22:23:44'),
(27, 'EPQPK7393A', '07-05-2020', '2019-2020', 'ITR-1', 0, 0, 0, 0, '2020-07-04 12:55:40'),
(28, 'ABCDE1234Q', '27-06-2020', '2019-2020', 'ITR-1', 789907867, 25987, 789881880, 236964564, '2020-07-17 08:47:46'),
(29, 'ABCDE1234M', '18-06-2020', '2019-2020', 'ITR-1', 0, 0, 0, 0, '2020-07-29 11:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `pannum` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `type` int(3) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `flat` varchar(15) NOT NULL,
  `road` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `pannum`, `name`, `date`, `pname`, `type`, `pass`, `question`, `answer`, `mobile`, `email`, `flat`, `road`, `area`, `pincode`, `city`, `state`) VALUES
(3, 'ABCDE1234F', 'Mohan Pyare', '31-12-1993', 'NILL', 1, 'mohan', 'What Is Your Pat Name?', 'mohan', '9737972524', 'mohan@gmail.com', '12', 'surat', 'surat', '395006', '4', '1'),
(5, 'ABCDE1234H', 'syed', '09-12-1997', 'NILL', 1, 'mannan786', 'Who Is Your First Teacher?', 'xyz', '9590078076', 'syedabdul@gmail.com', 'an', 'aa', 'akdndnaksf', '232344', '3', '2'),
(6, 'EPQPK7394G', 'prince', '20-03-2020', 'NILL', 1, '123456', 'What Is Your Favourite Food?', 'chicken', '8257925718', 'prince@@gmail.com', '724', '724, 11th cross, 16th main, BT', 'btm', '560076', '3', '2'),
(12, 'EJYPK8432E', 'vnurt', '06-01-2020', 'NILL', 1, '999999999', 'What Is Your Favourite Food?', 'bread', '7689765432', 'ramesh5@gmail.com', '103', 'silbord', 'btm ', '560076', '2', '2'),
(15, 'EPQPK7393A', 'ravi', '07-05-2020', 'NILL', 1, '5678901234', 'What Is Your Pat Name?', 'god', '6787657684', 'pkp36@gmail.com', '12', 'garha', 'jabalpur', '560076', '29', '4'),
(16, 'TPQPK7393B', 'iit', '10-05-2020', 'company', 2, '0987654321', 'What Is Your Favourite Food?', 'tamato', '6487657689', 'pkppandit356@gmail.com', '45553', 'btm', '54345', '560075', '4', '3'),
(17, 'TPQPK7393K', 'htc', '06-05-2020', 'ash', 2, '654321', 'What Is Your Pat Name?', 'god', '6787657687', 'pkp36@gmail.com', '388', 'btm layoute', 'habibjanh', '560077', '4', '3'),
(18, 'ABCDE1234M', 'rakesh', '18-06-2020', 'NILL', 1, '23456789', 'What Is Your Pat Name?', 'kjkas', '6787657689', 'pkp356@gmail.com', '100', 'btm layout', 'kjhk', '560076', '2', '2'),
(20, 'EJYPK8432O', 'gjggj', '11-06-2020', 'NILL', 1, '7777777', 'Who Is Your First Teacher?', 'jhjjh', '6787657689', 'pkp356@gmail.com', '76', 'btm layout', 'hbjghj', '560076', '2', '2'),
(24, 'EPQPK7394S', 'hkhkhj', '05-06-2020', 'NILL', 1, 'f379eaf3c831b04de153469d1bec34', 'What Is Your Pat Name?', 'jkhkj', '6487657689', 'pkppandit356@gmail.com', '766', 'btm', 'vhjhgjh', '560075', '4', '3'),
(25, 'EPQPK7394T', 'kjkh', '18-06-2020', 'kjkkjk', 2, '8ddcff3a80f4189ca1c9d4d902c3c9', 'Who Is Your First Teacher?', 'ggfgh', '6487657689', 'pkppandit356@gmail.com', '678', 'btm', 'ghhh', '560075', '4', '3'),
(26, 'ABCDE1234Q', 'ytuyuiyuiy', '27-06-2020', 'NILL', 1, '654321', 'What Is Your Favourite Food?', 'sdfdsf', '8765432123', 'ravi@gmail.com', '166', 'btm layout', 'hgjgjgh', '187654', '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`),
  ADD KEY `stateid` (`stateid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `newsupdate`
--
ALTER TABLE `newsupdate`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subid`);

--
-- Indexes for table `taxpaymnet`
--
ALTER TABLE `taxpaymnet`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`,`pannum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `newsupdate`
--
ALTER TABLE `newsupdate`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taxpaymnet`
--
ALTER TABLE `taxpaymnet`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stateid`) REFERENCES `state` (`stateid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
