-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2023 at 02:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sindhao_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `user` varchar(15) NOT NULL,
  `forum` varchar(15) NOT NULL,
  `title` varchar(15) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`user`, `forum`, `title`, `content`) VALUES
('omkar', 'Sports', 'Cricket', 'Cricket is my favorite sport. It involves a team of 11 players that takes turn bowling and batting.'),
('omkar', 'sports', 'Football', 'Football is my favorite sport it has a team of 11 players and both team tries to make the ball go inside other teams goal post'),
('pranjal', 'coding', 'Java', 'Java is one of my favorite languages. Java is a robust and object oriented language.'),
('pranjal', 'anime', 'Blue lock 123', 'The latest chapter of blue lock is one of the best chapters in blue lock the goal by kaiser was chef kisses.'),
('omkar', 'coding', 'JavaScript', 'I like java script it is one of the best languages'),
('omkar', 'shopping', 'H&M', 'H&M has very low quality clothes please dont buy clothes from this shop.'),
('omkar', 'sports', 'Hockey', 'Example hockey'),
('omkar', 'coding', 'Python', 'Python is the best language');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(15) NOT NULL,
  `upassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `upassword`) VALUES
('omkar', 'sindha'),
('pranjal', 'pranjal123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
