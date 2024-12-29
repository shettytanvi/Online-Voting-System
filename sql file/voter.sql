-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 10:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votertable`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `result` ()  READS SQL DATA
BEGIN
SELECT id,name,Vote from candi where Vote in(select MAX(Vote) from candi);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `candi`
--

CREATE TABLE `candi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `Vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candi`
--

INSERT INTO `candi` (`id`, `name`, `usn`, `sem`, `branch`, `Vote`) VALUES
(1, 'shekhar', '4AL16ME053', 3, 'ME', 13),
(5, 'Savita', '4AL16IS054', 5, 'ISE', 8),
(7, 'Mahesh', '4al15CS031', 7, 'CS', 7),
(8, 'amulya', '4AL18EC032', 1, 'ECE', 7);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `voterid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sem` int(2) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voterid`, `username`, `email`, `password`, `name`, `sem`, `usn`, `branch`) VALUES
(140, 'Dheeraj', 'dheeraj@gmail.com', 'Dheeraj', 'Dheeraj', 4, '4AL16IS013', 'ISE'),
(141, 'Rashim', 'rashim@gmail.com', 'rashi', 'Rashi', 5, '4AL16IS43', 'ISE'),
(142, 'Sauravp', 'sauravp@gmail.com', 'saurav', 'Saurav', 7, '4AL15ME024', 'ME');

--
-- Triggers `voter`
--
DELIMITER $$
CREATE TRIGGER `lolo` AFTER INSERT ON `voter` FOR EACH ROW INSERT INTO voter_backup VALUES(NEW.voterid,NEW.username,NEW.email,NEW.password,NEW.name,NEW.sem,NEW.usn,NEW.branch)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `voter_backup`
--

CREATE TABLE `voter_backup` (
  `voterid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sem` int(2) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `branch` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter_backup`
--

INSERT INTO `voter_backup` (`voterid`, `username`, `email`, `password`, `name`, `sem`, `usn`, `branch`) VALUES
(133, 'anusha', 'anusha@gmail.com', '1234', 'anusha', 5, '4al16is454', 'cse'),
(134, 'gauthami', 'gauthmi@gmail.com', 'gauthami', 'gauthmi', 5, '4al16is023', 'ise'),
(135, 'jjgegfefgb', 'ejhb@gmail.com', '1234', 'evfv', 8, '4al1is0355', 'ece'),
(135, 'darshan', 'darshan@gmail.com', 'darshan', 'darshan', 5, '4al16is012', 'ise'),
(136, 'akshay', 'akshay@gmail.com', 'akshay', 'akshay', 5, '4al16is018', 'ise'),
(137, 'nagendra ', 'nagendra@gmail.com', 'nagendra', 'nagendra', 5, '4al16id31', 'ise'),
(138, 'amulya', 'amulya@gmail.com', 'amulya', 'amulya', 5, '4al16is002', 'ise'),
(139, 'sujith', 'sujith@gmail.com', 'sujith', 'sujith', 5, '4al16is053', 'ise'),
(140, 'dheeraj', 'dheeraj@gmail.com', 'dheeraj', 'dheeraj', 4, '4al16is013', 'ise'),
(141, 'Rashim', 'rashim@gmail.com', 'rashi', 'Rashi', 5, '4AL16IS43', 'ISE'),
(142, 'Sauravp', 'sauravp@gmail.com', 'saurav', 'Saurav', 7, '4AL15ME024', 'ME');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candi`
--
ALTER TABLE `candi`
  ADD PRIMARY KEY (`id`,`name`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voterid`,`usn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candi`
--
ALTER TABLE `candi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `voterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
