-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 12:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `author` text COLLATE utf8_bin NOT NULL,
  `howused` tinytext COLLATE utf8_bin NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `category` tinytext COLLATE utf8_bin NOT NULL,
  `email_ad` tinytext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `title`, `author`, `howused`, `price`, `description`, `category`, `email_ad`) VALUES
(8, 'rsz_bilgisayar-donanimi.jpg', 'i realy dont know any books ', 'and authors', 'very_used', 150.05, 'Well it might be a good book but i dont really know ', 'BS', 'myemail@city.academic.gr'),
(30, 'High_Resolution-G413 Snow BOB RGB.png', 'just another test', 'justo another test ', 'very_used', 2, 'awdwa', 'ENG', 'afawf@mail.com'),
(61, 'me.jpg', 'afdwas', 'ad', 'very_used', 2, 'afefa', 'PSY', 'mail @city.academic.gr'),
(62, 'me.jpg', 'afdwas', 'ad', 'very_used', 2, 'afefa', 'PSY', 'mail @city.academic.gr'),
(63, 'me.jpg', 'afdwas', 'ad', 'very_used', 2, 'afefa', 'PSY', 'mail @city.academic.gr'),
(64, 'title2.png', 'Harry potter', 'kbasfhfae', 'kinda_used', 123, 'abawodfihapifubwa me mia gratsounia sth mesh', 'PSY', 'zksbfasfasnb@asfbn.com'),
(65, '', '', '', 'like_new', 0, '', 'CS', 'adawdwa'),
(66, 'me2.jpg', 'Harry potter', 'J.K. Rolling', 'kinda_used', 56.08, 'lancia', 'PSY', 'hatzi@city.com'),
(67, '', 'zsdgaga', 'agagaa', 'very_used', 300, 'awdeWADwd', 'CS', 'me@yahoo.com'),
(68, 'booklelogo.png', 'zsdgaga', 'agagaa', 'very_used', 300, 'awdeWADwd', 'CS', 'me@yahoo.com'),
(69, 'Screenshot_2.jpg', 'Little pony', 'someone with a lot of free time', 'like_new', 20, 'I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it I love it ', 'CS', 'myemail@yahoo.com'),
(70, 'Screenshot_4.jpg', 'My little pony the sequel', 'A crazy person', '', 30, 'Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not Its a good book... not ', 'BS', 'myemail@internet.com'),
(71, 'Webcast261Fin.jpg', 'RAZER KRAKEN USB -PS4', 'GA', 'like_new', 200, 'RAZER YEAH', 'CS', 'me@me.com'),
(72, 'Webcast261Fin.jpg', 'RAZER KRAKEN USB -PS4', 'GA', 'like_new', 200, 'RAZER YEAH', 'CS', 'me@me.com'),
(73, 'booklelogo.png', 'awfw', 'fawfwa', 'like_new', 23, 'awfFwf', 'CS', 'wafwa@mail.com'),
(74, 'booklelogo.png', 'awd', 'wadawdw', 'kinda_used', 23, 'adwadwdwa', 'CS', 'test@test.com'),
(75, '3rdYearProjectHandbook2016-17.pdf', 'Governor', 'Xristos', 'kinda_used', 1, 'its very hard', 'PSY', 'me@hatzi.com');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `itemid` int(11) NOT NULL,
  `posteremail` varchar(120) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Genre` text NOT NULL,
  `Price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`itemid`, `posteremail`, `Title`, `Author`, `Genre`, `Price`) VALUES
(1, 'atsompanis@citycollege.sheffield.eu', 'War & Peace', 'Tolstoy', 'Fiction', '20'),
(2, 'test@aol.com', 'bob the builder', 'bob', 'fiction', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `email` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(14, 'thanos', 'qwerty', 'atsompanis@city.academic.gr'),
(15, 'essy', 'thanos', 'test@yahoo.com'),
(16, 'mac', 'macman33', 'macman@gmail.com'),
(17, 'rik', 'rikky42', 'real@gmail.com'),
(18, 'wwwe', '4321', 'we@yahoo.com'),
(20, 'fred', '1234', 'fred@gmail.com'),
(21, 'bush', 'ilikepainting', 'bad@aol.com'),
(22, 'jim', 'prill', 'jimboy@aol.com'),
(23, 'fredman', '123', 'fred@aol.com'),
(24, 'ted', 'Mww', 'dd@gfog.com'),
(25, 'the', 'jhfhfhf', 'uhdfhuu@efds.com'),
(26, 'thanos', 'apassword', 'thanos@email.com'),
(27, 'test', 'test', 'test@test.com'),
(28, 'konstantina', '123', 'kon@city.com'),
(29, 'kris', '123', 'christo@gmial.com'),
(30, 'lastday', '1234', 'myemail@citycity.com'),
(31, 'spongebob', '123', 'bob@bob.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
