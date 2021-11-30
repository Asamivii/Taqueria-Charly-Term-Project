-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 10, 2020 at 07:00 AM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axs9858_CTEC4321CMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Food`
--

CREATE TABLE `Food` (
  `FoodID` mediumint(9) NOT NULL,
  `CID` tinyint(4) NOT NULL,
  `URL` varchar(100) NOT NULL DEFAULT '',
  `Name` varchar(25) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(9) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Food`
--

INSERT INTO `Food` (`FoodID`, `CID`, `URL`, `Name`, `Description`, `Price`) VALUES
(1, 1, 'https://ctec4321.axs9858.uta.cloud/term_project/database_images/3taco.png', '3 Tacos', 'Freshly made homemade tortilla tacos with fresh green toppings and sauce, great for quick bites and makes a fantastic snack to go.  ', 7),
(2, 1, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/btaco.png', 'Breakfast Taco', 'For the early risers wanting a clean bite of hot steaming tacos with cheese and fresh greens. Plus, comes with homemade sauce.', 6),
(3, 1, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/singletaco.png', 'Single Taco', 'Taco made form the best corn tortilla, comes with homemade sauce, one bite is never enough you\'ll always want more.', 2),
(4, 1, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/spicytaco.png', 'Spicy Taco', 'The spicy taco comes with extra sides as well as our homemade spicy sauce. Most people say one bite is never enough. ', 2),
(5, 2, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/baconb.png', 'Bacon Burger', 'Burger made from the heart but with a twist, included hot spicy bacon with our homemade green sauce. ', 8),
(6, 2, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/texmexb.png', 'Texmex Burger', 'Our homemade award wining burger made with the best for the best customer in mind. Includes side of French fries and homemade special sauce.  ', 8),
(7, 2, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/cheeseb.png', 'Cheese Burger', 'Classics are never to be shunned, try our homemade cheese burger with cheesy fries, enough cheese to make your day shine.', 6),
(8, 3, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/big.png', 'Big Burrito', 'Burrito made with hot fresh large tortilla bread, includes hand-picked greens and spicy sauce with homemade special suasce.  ', 8),
(9, 3, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/monster.png', 'Monster Burrito', 'If you thought the Big Burrito was huge checkout out the Monster, filled with fresh greens, special homemade sauce, extra cheese and meat.', 13),
(10, 3, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/bb.png', 'Breakfast Burrito', 'For the early risers who want something more on the heavy side, look no further. This burrito is packed with green sauce, bacon bits and eggs.', 6),
(11, 4, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/cheesen.png', 'Cheese Nacho', 'Covered in cheesy glory, try our freshly made Nacho Cheese hot and piping ready to be devoured. ', 8),
(12, 4, 'http://ctec4321.axs9858.uta.cloud/term_project/database_images/nachoplate.png', 'Nacho Plate', 'If cheese is not your thing try the Plate, filled with hot fresh corn nacho topped with sour cream, avocado, chili sauce and meat. ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `FoodCategory`
--

CREATE TABLE `FoodCategory` (
  `CID` tinyint(4) NOT NULL,
  `FName` varchar(40) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FoodCategory`
--

INSERT INTO `FoodCategory` (`CID`, `FName`) VALUES
(1, 'Tacos'),
(2, 'Burger'),
(3, 'Burrito'),
(4, 'Nachos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Food`
--
ALTER TABLE `Food`
  ADD PRIMARY KEY (`FoodID`);

--
-- Indexes for table `FoodCategory`
--
ALTER TABLE `FoodCategory`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Food`
--
ALTER TABLE `Food`
  MODIFY `FoodID` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `FoodCategory`
--
ALTER TABLE `FoodCategory`
  MODIFY `CID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
