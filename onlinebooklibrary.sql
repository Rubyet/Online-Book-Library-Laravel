-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 09:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebooklibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE `bookdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `author` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`id`, `name`, `genre`, `rating`, `author`, `details`, `image`, `file`) VALUES
(1, 'How to study Smart', 'Guide', 0, 'Douglas Peterson', 'Book about Time optimization and other stuff', '1.jpg', '1.pdf'),
(2, 'The Arsonist', 'Poetry', 0, 'Chloe Hooper', 'Some poem books and others', '2.jpg', '2.pdf'),
(3, 'The Arsonist', 'Novel', 0, 'Sue Miller', 'Novel version of the previous one bla bla bla', '3.jpg', '3.pdf'),
(4, 'The final Evolution', 'Action and adventure', 0, 'Jeff Somers', 'Detective story with a lot of twists', '4.jpg', '4.pdf'),
(5, 'Alternative Nows', 'Guide', 0, 'unknown', 'Some kind of guide book with a lot of details <br><br>\r\nBoring Book', '5.jpg', '5.pdf'),
(6, 'Take Back Your Time', 'Novel', 0, 'Caleb Ulku', 'There has been much ink (actual and digital) spilled in recent years about just how white fantasy is. Almost every orphan boy (and it’s usually an orphan boy) who rises to become the hero of the realm has been white, and the realm he becomes a hero of is usually some version of Western Europe, but with dragons – and magic, elves, and whatever other fantasy trope/s the author chooses to employ.', '6.jpg', '6.pdf'),
(7, 'Prince Charls', 'Biography', 0, 'Sally Smith', 'Life story of Prince charles.\r\nBiography', '7.jpg', '7.pdf'),
(8, 'Einstein', 'Biography', 0, 'Walter', 'Life story of Einstein.\r\nBiography', '8.jpg', '8.pdf'),
(9, 'Parasite', 'Action and adventure', 0, 'Darcy Coates', 'If non-white people do appear, they are cast as the villains: barbarian hordes. perhaps, or evil warlords intent on enslaving the otherwise peaceful lands the protagonist calls home. Occasionally, an inscrutable “Oriental” wise man or wizard will put in a brief appearance, or perhaps the protagonist will befriend some wandering tribal people whose customs and traditions are suspiciously like an amalgamation of every single Native American stereotype the author had ever heard of.', '9.jpg', '9.pdf'),
(10, 'Iron Man', 'Comic book', 0, 'Marvel', 'What this does is distort the view of the fantasy genre as a whole. For the very longest time, it seemed like only white boys and white men had a right to the grand adventures so often depicted in fantasy,', '10.jpg', '10.pdf'),
(11, 'BatMan', 'Comic book', 0, 'DC', 'while white women and people of colour have been forced to mutilate their sense of themselves in order to fit into the shell of a white boy or a white man – that, or not participate in the creation and consumption of fantasy at all. It felt like all of fantasy fiction was blurring together, a series of white male heroes and magical Western European worlds all smudging into a boring, beige landscape: the genre equivalent of bland oatmeal.', '11.jpg', '11.pdf'),
(12, 'World Geography', 'Encyclopedia', 0, 'Unknown', 'The protagonist will befriend some wandering tribal people whose customs and traditions are suspiciously like an amalgamation of every single Native American stereotype the author had ever heard of.', '12.jpg', '12.pdf'),
(13, 'White Stag', 'Fantasy', 0, 'KAKA B.', ' Occasionally, an inscrutable “Oriental” wise man or wizard will put in a brief appearance, or perhaps the protagonist will befriend some wandering tribal people whose customs and traditions are suspiciously like an amalgamation of every single Native American stereotype the author had ever heard of.\r\n\r\nWhat this does is distort the view of the fantasy genre as a whole. For the very longest time, it seemed like only white boys and white men had a right to the grand adventures so often depicted in fantasy, while white women and people of colour have been forced to mutilate their sense of themselves in order to fit into the shell of a white boy or a white man – that, or not participate in the creation and consumption of fantasy at all.', '13.jpg', '13.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `userId`, `bookId`, `date`, `details`) VALUES
(3, 25, 1, '2019-12-21 21:12:57', 'asd'),
(4, 25, 1, '2019-12-21 21:14:57', 'asdaczxca'),
(5, 25, 1, '2019-12-21 21:28:34', 'vgs'),
(7, 25, 1, '2019-12-21 22:06:53', 'asdasd'),
(8, 25, 2, '2019-12-21 22:47:13', 'Really great book'),
(9, 25, 10, '2019-12-22 06:37:20', 'Great'),
(10, 25, 2, '2019-12-22 06:59:58', 'vALLAGSE'),
(11, 26, 6, '2019-12-22 07:31:56', 'One of the best book i have ever read');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ammount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `bookId`, `userId`, `date`) VALUES
(1, 2, 25, '2019-12-22 06:19:47'),
(2, 2, 25, '2019-12-22 06:19:47'),
(3, 12, 25, '2019-12-22 06:35:32'),
(4, 12, 25, '2019-12-22 06:35:33'),
(5, 10, 25, '2019-12-22 06:37:30'),
(6, 10, 25, '2019-12-22 06:37:30'),
(7, 10, 25, '2019-12-22 06:37:56'),
(8, 10, 25, '2019-12-22 06:37:57'),
(9, 10, 25, '2019-12-22 06:53:15'),
(10, 10, 25, '2019-12-22 06:53:15'),
(11, 13, 25, '2019-12-22 06:55:10'),
(12, 13, 25, '2019-12-22 06:55:10'),
(13, 13, 25, '2019-12-22 06:55:56'),
(14, 2, 25, '2019-12-22 07:01:11'),
(15, 8, 26, '2019-12-22 07:05:15'),
(16, 8, 26, '2019-12-22 07:13:32'),
(17, 8, 26, '2019-12-22 07:13:36'),
(18, 8, 26, '2019-12-22 07:14:21'),
(19, 6, 26, '2019-12-22 07:15:34'),
(20, 6, 26, '2019-12-22 07:16:16'),
(21, 6, 26, '2019-12-22 07:17:00'),
(22, 6, 26, '2019-12-22 07:20:29'),
(23, 3, 26, '2019-12-22 07:26:56'),
(24, 3, 26, '2019-12-22 07:27:58'),
(25, 3, 26, '2019-12-22 07:27:59'),
(26, 3, 26, '2019-12-22 07:28:10'),
(27, 2, 25, '2019-12-22 08:09:42'),
(28, 2, 25, '2019-12-22 08:09:42'),
(29, 4, 25, '2019-12-22 08:10:06'),
(30, 4, 25, '2019-12-22 08:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `modId` int(11) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `preference` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `name`, `address`, `phone`, `email`, `password`, `type`, `preference`, `image`) VALUES
(1, 'Rittick', 'Cecilia Chapman\r\n711-2880 Nulla St.\r\nMankato Mississippi 96522\r\n(257) 563-7401', '01688164630', 'rittick.2012@gmail.com', '1234', 'Admin', NULL, 'admin.jpg'),
(2, 'Imtiaz Ahmed', 'Theodore LoweAp #867-859 Sit Rd.Azusa New York 39531(793) 151-6230', '01303120943', 'test@test.com', '3214', '', NULL, '1.jpg'),
(3, 'Juri', 'Lawrence Moreno935-9940 Tortor. StreetSanta Rosa MN 98804(684) 579-1879', '01987456321', 'something@some.com', '1234567890', '', NULL, '2.jpg'),
(25, 'Rubyet', 'Bansree, Rampura Dhaka -1219', '01688164630', 'rittick.2012@gmail.com', '1234', 'Member', NULL, '300612607088201.png'),
(26, 'Srabonti', 'Mirur', '0123654789', 'srabonti@gmail.com', '11223344', 'Member', NULL, 'pow.jpg'),
(27, 'Iffat', 'Bansree Ramura Dhaka-1219', '01965432196', 'juri@mail.com', '12345678', 'Member', NULL, '300614149141201.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `bookdetails`
--
ALTER TABLE `bookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookdetails`
--
ALTER TABLE `bookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `userdetails` (`id`);

--
-- Constraints for table `donate`
--
ALTER TABLE `donate`
  ADD CONSTRAINT `donate_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `userdetails` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
