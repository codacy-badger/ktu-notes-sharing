-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 09:06 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'abhi', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE `banned` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `path` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ups` int(5) NOT NULL DEFAULT '0',
  `downs` int(5) NOT NULL DEFAULT '0'
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
(24, 'Differential Equations', 2, 7),
(25, 'Discrete Computational Structures', 3, 1),
(26, 'Switching Theory and Logic Design', 3, 1),
(27, 'Data Structures', 3, 1),
(28, 'Electronics Devices and Circuits', 3, 1),
(29, 'Data Structures Lab', 3, 1),
(30, 'Electronic Circuits Lab', 3, 1),
(31, 'Mechanics of Solids', 3, 2),
(32, 'Mechanics of Fluids', 3, 2),
(33, 'Thermodynamics', 3, 2),
(34, 'Metallurgy and Materials Engineering', 3, 2),
(35, 'Circuits and Networks', 3, 3),
(36, 'Analog Electronic Circuits', 3, 3),
(37, 'DC Machines And Transformers', 3, 3),
(38, 'Computer Programming', 3, 3),
(39, 'Network Theory', 3, 4),
(40, 'Solid State Devices', 3, 4),
(41, 'Electronic Circuits', 3, 4),
(42, 'Logic Circuit Design', 3, 4),
(45, 'Mechanics of  Solids', 3, 5),
(46, 'Fluid Mechanics-I', 3, 5),
(47, 'Engineering Geology', 3, 5),
(48, 'Surveying', 3, 5),
(49, 'Computer Organization and Architecture', 4, 1),
(50, 'Operating Systems', 4, 1),
(51, 'Object Oriented Design and Programming', 4, 1),
(52, 'Principles of Database Design', 4, 1),
(53, 'Advanced Mechanics of Solids', 4, 2),
(54, 'Thermal Engineering', 4, 2),
(55, 'Manufacturing Technology', 4, 2),
(56, 'Fluid Machinery', 4, 2),
(57, 'Synchronous And Induction Machines', 4, 3),
(58, 'Digital Electronics And Logic Design', 4, 3),
(59, 'Material Science', 4, 3),
(60, 'Measurements and Instrumentation', 4, 3),
(61, 'Signals and Systems', 4, 4),
(62, 'Analog Integrated Circuits', 4, 4),
(63, 'Computer Organisation', 4, 4),
(64, 'Analog Communication Engineering', 4, 4),
(65, 'Structural Analysis-I', 4, 5),
(66, 'Construction Technology', 4, 5),
(67, 'Fluid Mechanics-II', 4, 5),
(68, 'Geotechnical Engineering-I', 4, 5),
(69, 'Theory of Computation', 5, 1),
(70, 'System Software', 5, 1),
(71, 'Microprocessors and Microcontrollers', 5, 1),
(72, 'Data Communication', 5, 1),
(73, 'Graph Theory and Combinatorics', 5, 1),
(74, 'Mechanics of Machinery', 5, 2),
(75, 'Machine Tools and Digital Manufacturing', 5, 2),
(76, 'Computer Programming and Numerical Methods', 5, 2),
(77, 'Electrical Drives and Control for Automation', 5, 2),
(78, 'Principles of Management', 5, 2),
(79, 'Power Generation, Transmission And Protection', 5, 3),
(80, 'Linear Control Systems', 5, 3),
(85, 'Power Electronics', 5, 3),
(86, 'Signals And  Systems', 5, 3),
(87, 'Microprocessor and Embedded Systems', 5, 3),
(88, 'Digital Signal Processing', 5, 4),
(89, 'Applied Electromagnetic Theory', 5, 4),
(90, 'Power Electronic And Instrumentation', 5, 4),
(91, 'Principles Of Managemnet', 5, 4),
(92, 'Design of Concrete Structures-I', 5, 5),
(93, 'Structural Analysis-II', 5, 5),
(94, 'Geotechnical Engineering', 5, 5),
(95, 'Geomatics', 5, 5),
(96, 'Water Resources Engineering', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tagrel`
--

CREATE TABLE `tagrel` (
  `id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_email`) VALUES
(14, 'abhi', 'abhi', 'a@abhi.com');

-- --------------------------------------------------------

--
-- Table structure for table `votetable`
--

CREATE TABLE `votetable` (
  `id` int(10) NOT NULL,
  `us_email` varchar(50) NOT NULL,
  `book_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banned`
--
ALTER TABLE `banned`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`tag`),
  ADD UNIQUE KEY `tag` (`tag`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `votetable`
--
ALTER TABLE `votetable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banned`
--
ALTER TABLE `banned`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `tagrel`
--
ALTER TABLE `tagrel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `votetable`
--
ALTER TABLE `votetable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
