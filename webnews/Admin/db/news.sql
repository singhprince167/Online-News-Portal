-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 05:28 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `Aid` int(11) NOT NULL,
  `Aname` varchar(20) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `Aemail` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `pincode` varchar(10) NOT NULL,
  `aimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`Aid`, `Aname`, `fullname`, `Aemail`, `password`, `gender`, `address`, `contactno`, `city`, `state`, `country`, `datereg`, `status`, `pincode`, `aimage`) VALUES
(1, 'Gangadhar', 'Gangadhar Take', 'gangadhartake@gmail.com', 'Sagar@123', 'Male', '66,Dipali park,navagam,Udhna', '9099606365', 'Surat', 'Gujarat', 'India', '2018-01-19 04:17:08', 'Active', '394210', '9c81d3e9ed221c689759a42b71c16fcc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `breakingnews`
--

CREATE TABLE `breakingnews` (
  `bid` int(11) NOT NULL,
  `btime` time NOT NULL,
  `description` varchar(100) NOT NULL,
  `datereg` date NOT NULL,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakingnews`
--

INSERT INTO `breakingnews` (`bid`, `btime`, `description`, `datereg`, `status`) VALUES
(2, '12:15:06', 'india lost the game', '2018-01-19', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `datereg`, `status`) VALUES
(1, 'sports', '2018-01-19 04:45:58', 'Deactive'),
(2, 'Technology', '2018-01-19 04:45:58', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(12) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `homeslider`
--

CREATE TABLE `homeslider` (
  `hid` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homeslider`
--

INSERT INTO `homeslider` (`hid`, `image`, `title`, `description`, `status`) VALUES
(1, '', 'nature', 'wonderful', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `reporterpost`
--

CREATE TABLE `reporterpost` (
  `rid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterpost`
--

INSERT INTO `reporterpost` (`rid`, `cid`, `image`, `title`, `description`, `datereg`, `status`) VALUES
(1, 1, '', 'sports', 'India lost game against south africa', '2018-01-19 14:56:24', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `reporterreg`
--

CREATE TABLE `reporterreg` (
  `repid` int(11) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `remail` varchar(30) NOT NULL,
  `rpassword` varchar(20) NOT NULL,
  `rmno` varchar(12) NOT NULL,
  `rcategory` varchar(20) NOT NULL,
  `rimage` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporterreg`
--

INSERT INTO `reporterreg` (`repid`, `rname`, `remail`, `rpassword`, `rmno`, `rcategory`, `rimage`, `date`, `status`) VALUES
(1, 'sagar', 'sagartake@gmail.com', '456', '9099606365', 'sports', '', '2018-01-19 14:01:54', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sid`, `cid`, `sname`, `datereg`, `status`) VALUES
(1, 1, 'football', '2018-01-19 10:42:51', 'Active'),
(3, 1, 'Hockey', '2018-01-19 11:18:28', 'Active'),
(4, 1, 'Badminton', '2018-01-19 10:37:10', 'Active'),
(5, 2, 'Cyber crime', '2018-01-19 10:56:49', 'Active'),
(6, 2, 'bitcoin', '2018-01-19 13:35:15', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `todaynews`
--

CREATE TABLE `todaynews` (
  `tid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `timage` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `datereg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todaynews`
--

INSERT INTO `todaynews` (`tid`, `sid`, `cid`, `timage`, `title`, `description`, `datereg`, `status`) VALUES
(5, 1, 1, '8e6b0c03220a58757b0749a0dfd2090f.jpg', 'khjhbbqksidkb', 'jkh gcgcgg jdbwjdbwb', '2018-01-19 14:53:25', 'Deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `breakingnews`
--
ALTER TABLE `breakingnews`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `homeslider`
--
ALTER TABLE `homeslider`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `reporterpost`
--
ALTER TABLE `reporterpost`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `Cid` (`cid`);

--
-- Indexes for table `reporterreg`
--
ALTER TABLE `reporterreg`
  ADD PRIMARY KEY (`repid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `Cid` (`cid`);

--
-- Indexes for table `todaynews`
--
ALTER TABLE `todaynews`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `breakingnews`
--
ALTER TABLE `breakingnews`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homeslider`
--
ALTER TABLE `homeslider`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reporterpost`
--
ALTER TABLE `reporterpost`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reporterreg`
--
ALTER TABLE `reporterreg`
  MODIFY `repid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `todaynews`
--
ALTER TABLE `todaynews`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reporterpost`
--
ALTER TABLE `reporterpost`
  ADD CONSTRAINT `reporterpost_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `todaynews`
--
ALTER TABLE `todaynews`
  ADD CONSTRAINT `todaynews_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `subcategory` (`sid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `todaynews_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
