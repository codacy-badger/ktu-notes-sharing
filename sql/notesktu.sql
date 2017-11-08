-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2017 at 04:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notesktu`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`) VALUES
(6, 'Chemical Engineering'),
(5, 'Civil'),
(1, 'Computer Science'),
(3, 'Electrical'),
(4, 'Electronics'),
(2, 'Mechanical'),
(7, 'S1_S2_Common');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `sem`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `sem` int(11) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `sem`, `branch`) VALUES
(1, 'Calculus', 1, 7),
(2, 'Engineering Physics', 1, 7),
(3, 'Engineering Chemistry', 1, 7),
(4, 'Engineering Mechanics', 1, 7),
(5, 'Engineering Graphics', 1, 7),
(6, 'Introduction to Computing and Problem Solving', 1, 7),
(7, 'Introduction to Civil Engineering', 1, 7),
(8, 'Introduction to Mechanical Engineering', 1, 7),
(9, 'Introduction to Electrical Engineering', 1, 7),
(10, 'Introduction to Electronics Engineering', 1, 7),
(11, 'Introduction to Chemical Engineering', 1, 7),
(12, 'Introduction to Sustainable Engineering', 1, 7),
(13, 'Basics of Mechanical Engineering', 1, 7),
(14, 'Basics of Electrical Engineering', 1, 7),
(15, 'Basics of Electrinics Engineering', 1, 7),
(16, 'Basics of Civil Engineering', 1, 7),
(17, 'Physics Lab', 1, 7),
(18, 'Chemistry Lab', 1, 7),
(19, 'Civil Engineering Workshop', 1, 7),
(20, 'Mechanical Engineering Workshop', 1, 7),
(21, 'Electrical Engineering Workshop', 1, 7),
(22, 'Electronics Engineering Workshop', 1, 7),
(23, 'Computer Science Engineering', 1, 7),
(24, 'Differential Equations', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tagrel`
--

CREATE TABLE `tagrel` (
  `tagid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BOOKS_fk0` (`sem`),
  ADD KEY `BOOKS_fk1` (`subject`),
  ADD KEY `BOOKS_fk2` (`branch`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `branch` (`branch`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sem` (`sem`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subject` (`subject`),
  ADD KEY `SUBJECTS_fk0` (`sem`),
  ADD KEY `SUBJECTS_fk1` (`branch`);

--
-- Indexes for table `tagrel`
--
ALTER TABLE `tagrel`
  ADD KEY `TAGREL_fk0` (`tagid`),
  ADD KEY `TAGREL_fk1` (`bookid`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`),
  ADD UNIQUE KEY `tag` (`tag`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `BOOKS_fk0` FOREIGN KEY (`sem`) REFERENCES `semester` (`sem`),
  ADD CONSTRAINT `BOOKS_fk1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`subject`),
  ADD CONSTRAINT `BOOKS_fk2` FOREIGN KEY (`branch`) REFERENCES `branch` (`branch`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `SUBJECTS_fk0` FOREIGN KEY (`sem`) REFERENCES `semester` (`sem`),
  ADD CONSTRAINT `SUBJECTS_fk1` FOREIGN KEY (`branch`) REFERENCES `branch` (`id`);

--
-- Constraints for table `tagrel`
--
ALTER TABLE `tagrel`
  ADD CONSTRAINT `TAGREL_fk0` FOREIGN KEY (`tagid`) REFERENCES `tags` (`tag`),
  ADD CONSTRAINT `TAGREL_fk1` FOREIGN KEY (`bookid`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
