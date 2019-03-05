-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 11:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `houserental`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `userpassword`) VALUES
('madhu', 'madhu'),
('sadadsfsdgdgsdfd', '123'),
('sumaiya', 'sunnu'),
('sunera', 'sunera');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `userpassword` varchar(20) NOT NULL,
  `confirmpassword` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `phoneno`, `username`, `userpassword`, `confirmpassword`, `gender`, `address`) VALUES
('jnkl', 'a@gmail.com', '7347454564', 'sadadsfsdgdgsdfd', '123', '123', 'male', ''),
('Madhu', 'a@gmail.com', '7347454564', 'madhu', 'madhu', 'madhu', 'female', 'asjcjsachsuhcs'),
('sadia', 'a@gmail.com', '7347454564', 'sadia', 'sadia', 'sadia', 'on', 'asdadfsdfs'),
('sunera', 'b@gmail.com', '8985025602', 'sunera', 'sunera', 'sunera', 'female', 'jjsjfjdsfbdsjk'),
('sumaiya', 'a@gmail.com', '7347454564', 'sumaiya', 'sunnu', 'sunnu', 'male', 'asdadfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `locality` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `floorno` varchar(50) NOT NULL,
  `areaper` varchar(700) NOT NULL,
  `price` int(50) NOT NULL,
  `propproof` varchar(1000) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `Approval` int(1) NOT NULL DEFAULT '0',
  `Occupancy status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `name`, `details`, `type`, `phone`, `city`, `locality`, `address`, `floorno`, `areaper`, `price`, `propproof`, `img1`, `img2`, `img3`, `Approval`, `Occupancy status`) VALUES
(3, 'Sadia', 'Sale', '10000', 0, '2624-1001026', 'gadsg', 'Enter text here...rhgsdth', '12', '12', 0, 'C:\\xampp\\htdocs\\project\\pic11.png', 'C:\\xampp\\htdocs\\project\\pic8.jpeg', 'C:\\xampp\\htdocs\\project\\pic7.jpg', 'C:\\xampp\\htdocs\\project\\pic6.jpg', 1, 0),
(4, 'sadia fatima', 'Sale', '10000', 0, '6403', 'banajara hills', 'h.no:15-75\r\nhydearbad\r\n500007', '3', '200', 0, 'C:\\xampp\\htdocs\\project\\pic6.jpg', 'C:\\xampp\\htdocs\\project\\pic6.jpg', 'C:\\xampp\\htdocs\\project\\pic11.png', 'C:\\xampp\\htdocs\\project\\pic5 (2).jpg', 1, 0),
(5, 'sunera', 'Sale', '10000', 0, '4320-1001043', 'jhbantdfyats', 'Mumbai,india', '3', '12', 0, 'C:\\xampp\\htdocs\\project\\pic11.png', 'C:\\xampp\\htdocs\\project\\pic7.jpg', 'C:\\xampp\\htdocs\\project\\pic6.jpg', '', 1, 0),
(6, 'Sadia', 'Sale', '10001', 0, '2624-1001028', 'banajara hills', 'Enter text here...xbhscbsh', '12', '900', 0, 'C:\\xampp\\htdocs\\project\\RegSuccess.php', '', '', '', 0, 0),
(7, 'Sadia', 'Sale', '10000', 0, '7045', 'banajara hills', 'HYDERABAD,INDIA', '3', '1000', 0, 'C:\\xampp\\htdocs\\project\\pic8.jpeg', 'C:\\xampp\\htdocs\\project\\pic11.png', 'C:\\xampp\\htdocs\\project\\pic8.jpeg', 'C:\\xampp\\htdocs\\project\\pic7.jpg', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`userpassword`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userpassword`,`username`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
