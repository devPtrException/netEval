-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 12:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neteval`
--

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `slNo` int(2) NOT NULL,
  `q` varchar(1000) NOT NULL,
  `optA` varchar(100) NOT NULL,
  `optB` varchar(100) NOT NULL,
  `optC` varchar(100) NOT NULL,
  `optD` varchar(100) NOT NULL,
  `ans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`slNo`, `q`, `optA`, `optB`, `optC`, `optD`, `ans`) VALUES
(1, 'Which animal is known as the \'Ship of the Desert\"?\r\n\r\n', 'Camel', 'INS Vikrant', 'Cactus', 'Horse', 1),
(2, 'How many days are there in a week?', '1 day', '7 days', '5 days', '24 days', 2),
(3, 'How many letters are there in the English alphabet?', '24 letters', '8 letters', '26 letters', '512 letters', 3),
(4, 'A rainbow consists of how many colors?', '7 colors', '21 colors', '25 colors', '4k colors', 1),
(5, 'How many days are there in a (non-leap) year?', '365 days', '24 days', '7 days', '366 days', 1),
(6, 'How many minutes are there in an hour?', '7 minutes', '24 minutes', '30 mins', '60 mins', 4);

-- --------------------------------------------------------

--
-- Table structure for table `q_n_a`
--

CREATE TABLE `q_n_a` (
  `slNo` int(2) NOT NULL,
  `q` varchar(1000) NOT NULL,
  `optA` varchar(100) NOT NULL,
  `optB` varchar(100) NOT NULL,
  `optC` varchar(100) NOT NULL,
  `optD` varchar(100) NOT NULL,
  `ans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_n_a`
--

INSERT INTO `q_n_a` (`slNo`, `q`, `optA`, `optB`, `optC`, `optD`, `ans`) VALUES
(1, 'Men vs Women?', 'Men 🗿.', 'Women ☕.', 'Each have their own, equally important places 💗.', 'Neutral views ➖.', 3),
(2, 'Messi vs Ronaldo?', 'Messi.', 'Ronaldo.', 'I don\'t watch football.', 'I don\'t spread hate. I respect them and think they both play well enough 🗿.', 4),
(4, 'Bhole Bhakt vs Chappri?', 'Bhole baba ki jai.', 'nhi vro m th mmy ka ladla hu.', 'I\'d rather fuckin\' die.', 'I just let them be (long as they let me be).', 4),
(5, 'Pizza mein Pineapple?', 'I love it 🍕🍍.', 'Yuck 🤢.', 'Everyone has their own tastes 👅.', 'Never tried any 🤷🏻‍♂️.', 3),
(6, 'Dogs vs Cats?', 'Woof 🐶.', 'Meow 🐱.', 'I\'m scared of both.', 'They both beautiful ✅.', 4),
(7, 'Sea vs Mountain?', 'Mountain peace is lobh 🗻.', 'Sea waves are lobh 🌊.', 'I like both 💗.', 'Home Sweet Home 🏡.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `rlNo` int(2) NOT NULL,
  `fName` varchar(17) NOT NULL,
  `lName` varchar(17) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `eMail` varchar(33) NOT NULL,
  `mobNo` varchar(10) NOT NULL,
  `pWd` varchar(23) NOT NULL,
  `score` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`rlNo`, `fName`, `lName`, `gender`, `eMail`, `mobNo`, `pWd`, `score`) VALUES
(0, '', '', 'F', 'hnvmv@fgh', '', '', 0),
(12, '', '', '', 'ge@g', '', '', 0),
(20, 'dev', 'raj', 'M', 'debrajhoney@gmail.com', '9835996621', '1234', 11),
(21, 'admin', 'admin', 'M', 'admin@admin', '0000000000', '1234', 11),
(43, '', '', 'M', 'asfds@kme', '', '1234', 0),
(45, 'mn', 'nm', 'F', 'mn@nm', '345535', '3456', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`slNo`);

--
-- Indexes for table `q_n_a`
--
ALTER TABLE `q_n_a`
  ADD PRIMARY KEY (`slNo`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`rlNo`),
  ADD UNIQUE KEY `eMail` (`eMail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `slNo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `q_n_a`
--
ALTER TABLE `q_n_a`
  MODIFY `slNo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
