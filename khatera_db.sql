-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 01:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khatera_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `views` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `photo`, `views`, `date`, `title`) VALUES
(7, 'image', 34, '0000-00-00', 'sea'),
(13, '../uploads/fjords.jpg', 34, '2022-07-05', 'sea'),
(14, '../uploads/avatar_g.jpg', 34, '2022-07-05', 'girl'),
(15, '../uploads/jeans1.jpg', 34, '2022-07-05', 'girl'),
(16, '../uploads/team3.jpg', 34, '0000-00-00', 'man'),
(17, '../uploads/avatar.jpg', 34, '2022-07-06', 'Man'),
(18, '../uploads/avatar_girl2.jpg', 34, '2022-07-06', 'Girl'),
(19, '../uploads/avatar_g.jpg', 23386, '2022-07-06', 'laila'),
(20, '../uploads/parallax1.jpg', 2961, '2022-07-07', 'Man'),
(21, '../uploads/9800205-15830054.jpg', 3554, '2022-07-07', 'Women'),
(22, '../uploads/Favim.com-1933200.jpg', 3376, '2022-07-07', 'Girl'),
(23, '../uploads/img-01-big.jpg', 2568, '2022-07-07', 'Music'),
(24, '../uploads/img-05.jpg', 3869, '2022-07-07', 'Nature'),
(25, '../uploads/img-03.jpg', 3036, '2022-07-07', 'Clock'),
(26, '../uploads/img-16.jpg', 3875, '2022-07-07', 'Text'),
(27, '../uploads/img-10.jpg', 3531, '2022-07-07', 'Flower'),
(29, '../uploads/img-08.jpg', 4001, '2022-07-20', 'nature'),
(30, '../uploads/img-05.jpg', 3321, '2022-07-20', 'nature'),
(31, '../uploads/img-15.jpg', 2329, '2020-07-22', 'nature'),
(32, '../uploads/mirwais.JPG', 2593, '2022-08-01', 'mirwais'),
(33, '../uploads/hd_d8f58f8277a69640955ab3d8a24a180b.jpg', 3945, '2022-08-01', 'girl'),
(34, '../uploads/hd_6b14bed81088ba0788ccd180d4d601ca.jpg', 4108, '2022-08-01', 'nature'),
(35, '../uploads/hd_7f83c8b62d2d23e74757e8548a67e38b.jpg', 1587, '2022-08-01', 'nature'),
(36, '../uploads/Wallpaper (14).jpg', 1538, '2022-08-01', 'nature'),
(37, '../uploads/hd_4ed144ab4cbc05af5833d65e5893b697.jpg', 1585, '2022-08-01', 'nature'),
(38, '../uploads/hd_7c67e47c25a44176b588f29b968ddd11.jpg', 3183, '2022-08-07', 'bike');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `email`) VALUES
('sdf', '123', 'mir@gmail.com'),
('Mirwais', '12309', 'kavosh@gmail.com'),
('Ali', '1233', 'ali@gmail.com'),
('Mirwais Jafari', '1234', 'kavosh@gmail.com'),
('Ali', '12344664', 'kkl@aksdhfkjhjdks'),
('Ali', '12345', 'Ali@gamil.com'),
('zahra', '3421212', 'zahra@gmail.com'),
('A', 'a123', 'a@gmail.com'),
('B', 'b123', 'b@gmail.com'),
('C', 'c123', 'c@gmail.com'),
('Mirwais', 'kshdjkhakjhfkjsdhf', 'kavosh@gmail.com'),
('Mohammad', 'm123', 'm@gmail.com'),
('Mirwais', 'm123', 'kavosh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `views` (`views`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
