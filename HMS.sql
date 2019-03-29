-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 at 02:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `name` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `phone`, `password`) VALUES
('moses', '9393020005', 'moses');

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE `birth` (
  `gen` varchar(10) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL,
  `place` varchar(10) NOT NULL,
  `gn_name` varchar(20) NOT NULL,
  `h_w` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`gen`, `mother`, `father`, `date`, `place`, `gn_name`, `h_w`) VALUES
('female', 'mmmm', '123', '2019-03-01', 'eeeee', 'gnnnn', '12_12'),
('male', 'mmmm', 'fffffff', '2019-03-08', 'eeeee', 'gnnnn', '12_12');

-- --------------------------------------------------------

--
-- Table structure for table `daily_med`
--

CREATE TABLE `daily_med` (
  `phone` varchar(10) NOT NULL,
  `medican_name` varchar(1000) NOT NULL,
  `charges` int(6) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daily_med`
--

INSERT INTO `daily_med` (`phone`, `medican_name`, `charges`, `date`) VALUES
('9393020005', 'AAAAA', 200, '2019-3-19'),
('9393020005', 'bbbb', 150, '2019-3-19'),
('9393020005', 'ccccc', 120, '2019-3-19');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE `death` (
  `phone` varchar(10) NOT NULL,
  `gen` int(11) NOT NULL,
  `age` varchar(5) NOT NULL,
  `position` varchar(15) NOT NULL,
  `date_b` varchar(15) NOT NULL,
  `date_d` varchar(15) NOT NULL,
  `cause` varchar(15) NOT NULL,
  `re_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`phone`, `gen`, `age`, `position`, `date_b`, `date_d`, `cause`, `re_date`) VALUES
('7416621', 0, '35', 'married', '1990-03-02', '2018-03-02', 'disease ', 2018),
('154878', 0, '60', 'married', '2019-03-23', '2019-03-24', 'disease ', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge` (
  `name` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date_join` varchar(10) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fee` int(10) NOT NULL,
  `under_take` varchar(30) NOT NULL,
  `descrip` varchar(150) NOT NULL,
  `operation` varchar(5) NOT NULL,
  `oper_name` varchar(20) NOT NULL,
  `oper_fee` int(10) NOT NULL,
  `tabs` varchar(100) NOT NULL,
  `total_fee` int(10) NOT NULL,
  `paid_amount` int(10) NOT NULL,
  `due_amount` int(10) NOT NULL,
  `pay_status` varchar(7) NOT NULL DEFAULT 'NOTPAID',
  `seen` varchar(5) NOT NULL,
  `additional` int(6) NOT NULL,
  `addit` int(11) NOT NULL,
  `pay_by` varchar(10) NOT NULL DEFAULT 'own'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`name`, `phone`, `date_join`, `disease`, `address`, `fee`, `under_take`, `descrip`, `operation`, `oper_name`, `oper_fee`, `tabs`, `total_fee`, `paid_amount`, `due_amount`, `pay_status`, `seen`, `additional`, `addit`, `pay_by`) VALUES
('vivak kumar', '154878', '2019-3-13', 'leg pain', '1111111111111111111', 0, 'moses', 'gftr', 'yes', '12', 0, 'mm kk', 0, 2156, 319, 'PAID', 'seen', 0, 0, 'own'),
('moses burla', '7416621', '2019-3-13', '11111111111111111', 'eluru', 0, 'moses', 'jhjhj', 'yes', 'jhjk', 0, 'jhkhk', 0, 2550, 0, 'PAID', 'seen', 0, 0, 'GOV'),
('moses kumar', '9393020005', '2019-3-19', '11111111111111111', '7D-2-79, EASTERN', 0, 'moses', 'fsfs', 'yes', 'bone ope', 0, 'aaaa\r\nbbbb', 0, 0, 0, 'PAID', 'seen', 0, 0, 'GOV');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `name` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `date_join` varchar(10) NOT NULL,
  `disease` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fee` int(10) NOT NULL,
  `under_take` varchar(30) NOT NULL,
  `descrip` varchar(150) NOT NULL,
  `operation` varchar(5) NOT NULL,
  `oper_name` varchar(20) NOT NULL,
  `oper_fee` int(10) NOT NULL,
  `tabs` varchar(100) NOT NULL,
  `total_fee` int(10) NOT NULL,
  `paid_amount` int(10) NOT NULL,
  `due_amount` int(10) NOT NULL,
  `pay_status` varchar(7) NOT NULL DEFAULT 'NOTPAID',
  `seen` varchar(5) NOT NULL,
  `additional` int(6) NOT NULL,
  `addit` int(11) NOT NULL,
  `pay_by` varchar(10) NOT NULL DEFAULT 'own'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`name`, `phone`, `date_join`, `disease`, `address`, `fee`, `under_take`, `descrip`, `operation`, `oper_name`, `oper_fee`, `tabs`, `total_fee`, `paid_amount`, `due_amount`, `pay_status`, `seen`, `additional`, `addit`, `pay_by`) VALUES
('moses kumar', '9393020005', '2019-3-19', '33333333333', '7D-2-79, EASTERN', 200, 'moses', '', '', '', 0, '', 200, 0, 0, 'NOTPAID', '', 0, 0, 'own');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ward_no` int(3) NOT NULL,
  `room_no` int(3) NOT NULL,
  `bed_no` int(3) NOT NULL,
  `alloc` int(2) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ward_no`, `room_no`, `bed_no`, `alloc`, `phone`) VALUES
(1, 1, 1, 0, ''),
(1, 1, 2, 0, ''),
(1, 2, 3, 0, ''),
(1, 2, 4, 0, ''),
(2, 1, 5, 0, ''),
(2, 1, 6, 0, ''),
(2, 2, 7, 0, ''),
(2, 2, 8, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `name` varchar(20) NOT NULL,
  `proof id` int(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `scheme_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff1`
--

CREATE TABLE `staff1` (
  `sno` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `spe_qua` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `job` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff1`
--

INSERT INTO `staff1` (`sno`, `name`, `phone`, `date`, `spe_qua`, `address`, `pass`, `job`) VALUES
(6, 'moses burla', '9393020005', '2015-02-20', 'mbbs', 'hyderabad', '12345', 1),
(7, 'kumar kumar', '7416621154', '1997-09-03', 'degree', 'vizag', '12345', 3),
(8, 'vivek kumar', '9393020005', '3333-03-03', 'degree', '7D-2-79, EASTERN', '12345', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD KEY `name` (`name`);

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`mother`,`father`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `staff1`
--
ALTER TABLE `staff1`
  ADD PRIMARY KEY (`sno`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff1`
--
ALTER TABLE `staff1`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
