-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2016 at 07:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonate`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorreg`
--

CREATE TABLE `donorreg` (
  `ID` int(15) NOT NULL,
  `FULLNAME` varchar(70) NOT NULL,
  `USERNAME` varchar(70) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `BLOODGROUP` varchar(70) NOT NULL,
  `DISTRICT` varchar(70) NOT NULL,
  `GENDER` varchar(70) NOT NULL,
  `LAST_DONATE_DATE` date NOT NULL,
  `CONTACTNO` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `reply_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donorreg`
--

INSERT INTO `donorreg` (`ID`, `FULLNAME`, `USERNAME`, `EMAIL`, `BLOODGROUP`, `DISTRICT`, `GENDER`, `LAST_DONATE_DATE`, `CONTACTNO`, `message`, `reply_message`) VALUES
(767, 'Mahbubur Rahman', 'Mahbub', 'mahbubhabib@ymail.com', 'O(Positive)', 'Dhaka', 'male', '2016-08-04', 1673595182, '', ''),
(768, 'Salman Srizon', 'Srizon', 'srizon@gmail.com', 'A(Positive)', 'Rangpur', 'male', '2016-07-12', 1673584664, 'You available?', ''),
(769, 'Faria Afrin', 'Faria', 'faria@gmail.com', 'AB(Positive)', 'Dhaka', 'female', '2016-02-16', 1975846895, 'Can u donate blood tomorrow?', 'No.I have a problem.next time.'),
(770, 'Adbullah Mamun', 'Mamun', 'mamun@gmail.com', 'AB(Positive)', 'Khulna', 'female', '2016-06-12', 176545669, '', ''),
(771, 'Khairul Kahbir', 'Kabir', 'k@gmail.com', 'B(Negative)', 'Barisal', 'male', '2015-09-25', 1578326987, 'Can U donate blood now?', 'Yes,I can.Where?');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `type` int(11) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `type`, `approved`) VALUES
(1, 'admin', 'admin123', 0, 1),
(757, 'Mahbub', 'Mahbub12', 1, 1),
(758, 'Srizon', 'Srizon12', 1, 1),
(765, 'Faria', 'Faria12', 1, 1),
(766, 'Mamun', 'Mamun12', 1, 1),
(767, 'Kabir', 'Kabir12', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `contact` int(20) NOT NULL,
  `bgroup` varchar(70) NOT NULL,
  `amount` int(20) NOT NULL,
  `location` varchar(70) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `contact`, `bgroup`, `amount`, `location`, `approved`) VALUES
(4, 'Abdullah', 1673489687, 'O(Positive)', 2, 'Rajshahi', 1),
(5, 'Habib', 1743466778, 'O(Positive)', 2, 'Chittagong', 1),
(6, 'Anny', 197554543, 'O(Negative)', 4, 'Barisal', 1),
(7, 'Abdullah', 164788986, 'O(Negative)', 1, 'Rangpur', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorreg`
--
ALTER TABLE `donorreg`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donorreg`
--
ALTER TABLE `donorreg`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=772;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=768;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
