-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:23 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminall`
--

CREATE TABLE `adminall` (
  `ID` int(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Dob` date NOT NULL,
  `Phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminall`
--

INSERT INTO `adminall` (`ID`, `User`, `Pass`, `Name`, `Address`, `Dob`, `Phone`) VALUES
(1, 'admin', 'pass', 'Mr. Admin Name', '222, Utopia.', '1990-06-10', 123456789),
(2, 'admin2', 'admin2', 'pass', '3333 vvv', '2021-04-27', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `name`, `phone`, `email`, `hiredate`, `address`, `salary`) VALUES
(1, 'librarian1', 11111, 'emailitis@mail.com', '2021-04-07', '22 address', 10000),
(2, 'librarian2', 2222, 'emailitis@mail.com', '2021-04-07', '22 address', 10000),
(3, 'libraria 44', 444444, 'email4@mail.com', '2021-04-14', 'wwwwww2222', 444444),
(4, 'w', 11, 'email4@mail.com', '2021-03-29', 'ee', 1),
(5, '1111', 2147483647, 'email4@mail.com', '2021-04-13', '1111111', 1),
(6, 'aaaaa', 12, 'email4@mail.com', '2021-04-05', 'xxx', 2),
(7, 'w', 2, 'email4@mail.com', '2021-04-07', '2d', 33),
(8, 'eeeee', 333333, 'email4@mail.com', '2021-04-12', '4', 4444444),
(9, 'uhb', 55555555, 'email4@mail.com', '2021-04-29', 'ffffff', 567),
(10, 'qqqqqqqqqqq', 2147483647, 'email4@mail.com', '2021-04-06', 'ddddddddddddd', 2147483647),
(11, 'wwwww', 22222222, 'email4@mail.com', '2021-04-13', 'ffffffffff', 222);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `title`, `details`) VALUES
(1, 'dummy notice', 'dummy notice.................................................'),
(2, 'title 2', 'dummy notice2 description'),
(3, 'eeeeeeee', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `type`, `details`) VALUES
(1, 'book for request', 'please add \" Python for dummynies \"'),
(2, 'fine deduction request', 'please.....'),
(3, '3rd title', 'aaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `expiredate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `fee` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `expiredate`, `address`, `fee`, `type`) VALUES
(1, 'user1', 1111, 'a@b.com', '2021-04-20', 'aaaa', 2222, 'aaaa'),
(2, 'ww', 33333, 'email3@mail.com', '2021-04-26', 'ww', 2222, 'reg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminall`
--
ALTER TABLE `adminall`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminall`
--
ALTER TABLE `adminall`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
