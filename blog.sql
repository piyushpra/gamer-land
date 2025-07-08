-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 03:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `popular-blog`
--

CREATE TABLE `popular-blog` (
  `ID` int(11) NOT NULL,
  `Post-Name` varchar(100) NOT NULL,
  `Source` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular-blog`
--

INSERT INTO `popular-blog` (`ID`, `Post-Name`, `Source`, `Date`) VALUES
(1, 'cyberpunk 2077', '../images/popular_3.jpg', '2021-06-03'),
(2, 'watch dog 2', '../images/watch-dog-2.jpg', '2021-05-19'),
(3, 'forza horizon 4', '../images/popular_4.jfif', '2021-01-24');

-- --------------------------------------------------------

--
-- Table structure for table `user-blog`
--

CREATE TABLE `user-blog` (
  `ID` int(100) NOT NULL,
  `Post-Name` varchar(100) NOT NULL,
  `Detail` varchar(10000) NOT NULL,
  `Source` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user-blog`
--

INSERT INTO `user-blog` (`ID`, `Post-Name`, `Detail`, `Source`, `Date`) VALUES
(1, 'resident evil 2', 'Resident Evil 2 is a remake of the 1998 game of the same name. Unlike the original, which uses tank controls and fixed camera angles, the remake features \"over-the-shoulder\" third-person shooter gameplay similar to Resident Evil 4 and more recent games in the series that allows players the option to move while using their wea...', '../images/evil-2-blog.jpg', '2021-06-03'),
(2, 'forza horizon 4', 'Forza Horizon 4 is a racing video game set in an open world environment based in a fictionalised Great Britain, with regions that include condensed representations of Edinburgh, the Lake District (including Derwentwater), Ambleside and the Cotswolds (including Broadway), Bamburgh among others. The game features a route creator which enables players to create races using com...', '../images/forza-horizon-4.jpg', '2021-05-19'),
(3, 'watch dog 2', 'Watch Dogs 2 is an action-adventure game with stealth elements and played from a third-person perspective as Marcus Holloway, a young hacker. The game features an open world set in a fictionalized version of the San Francisco Bay Area, an area more than twice as large as the Chicagoland setting from Watch Dogs. It consists of four different areas: San Francisco, Oak...', '../images/watch-dog-2.jpg', '2021-01-24'),
(4, 'cyberpunk 2077', 'Cyberpunk 2077 is played in a first-person perspective as V, a mercenary whose voice, face, hairstyles, body type and modifications, background, and clothing are customisable. Stat categories—Body, Intelligence, Reflexes, Technical, and Cool—are influenced by the character classes that players assume, which are NetR...', '../images/popular_3.jpg', '2020-12-09'),
(5, 'walking dead saints and sinners', 'The player can kill \"walkers\" by \"braining\" them, stabbing them through the skull, puncturing the brain. The player will be able to scale buildings to ambush enemies and attack from a distance with throwing weapons, bows, and long-range firearms. Physics-based combat will control how melee weapons are controlled. There is a timer on the game called \"The Bells,\" where after a cert...', '../images/dead-blog.jpg', '2020-10-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `popular-blog`
--
ALTER TABLE `popular-blog`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `user-blog`
--
ALTER TABLE `user-blog`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `popular-blog`
--
ALTER TABLE `popular-blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user-blog`
--
ALTER TABLE `user-blog`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
