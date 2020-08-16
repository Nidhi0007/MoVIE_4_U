-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 03:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `articletb`
--

CREATE TABLE `articletb` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articletb`
--

INSERT INTO `articletb` (`id`, `title`, `description`, `date`, `image`) VALUES
(1, 'Saurabh Gupta on making Gulabi lense', 'We spoke to Saurabh Gupta Director of Gulabi lense', '2020-08-14', 'article2.PNG'),
(2, 'Lockdown shortFilm on GoldFlake', 'first lockdown short film to come', '2020-08-15', 'article3.PNG'),
(3, '5 rules to remember before making shortfilms', 'I have tried then to train myself', '2020-08-15', 'article4.PNG'),
(4, 'The idea was to tell a love story between skinny man and plumpy women', 'What made you want to make', '2020-08-17', 'article5.PNG'),
(5, 'stanley Kubrik', 'its generally said about kubrik', '2020-08-14', 'article6.PNG'),
(6, 'SFW best shots ', 'These wer most popular and most watched', '2020-08-14', 'article1.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `movietb`
--

CREATE TABLE `movietb` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(255) NOT NULL,
  `language` text NOT NULL,
  `genre` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movietb`
--

INSERT INTO `movietb` (`id`, `title`, `description`, `duration`, `language`, `genre`, `image`) VALUES
(1, 'Lies we tell to each other', 'Director sidhartha tongaonkar', '25min', 'Hindi', 'Comedy', 'movie4.PNG'),
(11, 'Left behind', 'Psychology of scared  journalist', '30min', 'Hindi', 'Crime', 'movie1.PNG'),
(12, 'Interior design', 'Its about young couple', '20min', 'English', 'Romance', 'movie2.PNG'),
(13, 'Grill', 'A rainy day is perfect day to watch this film', '40min', 'Bhojpuri', 'Action', 'movie3.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articletb`
--
ALTER TABLE `articletb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movietb`
--
ALTER TABLE `movietb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articletb`
--
ALTER TABLE `articletb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movietb`
--
ALTER TABLE `movietb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
