-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 09:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebuyagree`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(125) NOT NULL,
  `lastName` varchar(125) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `confirmCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `type`, `confirmCode`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '9182736450', 'india', '21232f297a57a5a743894a0e4a801fc3', 'manager', '117631'),
(4, 'Admin', 'Admin', 'admin@admin.com', '8192736450', 'admin address', '21232f297a57a5a743894a0e4a801fc3', 'manager', '168465');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `oplace` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dstatus` varchar(10) NOT NULL DEFAULT 'no',
  `odate` date NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `pid`, `quantity`, `oplace`, `mobile`, `dstatus`, `odate`, `ddate`) VALUES
(1, 1, 19, 2, 'indapur', '8485868798', 'Yes', '2022-03-14', '2022-03-21'),
(2, 1, 6, 1, 'indapur', '8485868798', 'no', '2022-03-14', '2022-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `available` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `pCode` varchar(20) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pName`, `price`, `description`, `available`, `category`, `type`, `item`, `pCode`, `picture`) VALUES
(1, 'fenox 1000 herbicides', 849, 'Pinoxaden 5.1% SC', 50, 'Agricultural', 'chemicals', 'herbicides', '', '1647242177.jpg'),
(2, 'Prakruti cyper-25 herbicide', 299, '25% EC', 100, 'Agricultural', 'tools', 'herbicides', '', '1647242300.jpg'),
(3, 'Green Gobbler Vineger Weed harbicideKiller Omri', 999, 'Satisfaction Guaranteed ', 150, 'Agricultural', 'tools', 'herbicides', '1', '1647242548.jpg'),
(4, 'Pretila Herbicides', 299, 'partilachlor 50% EC', 200, 'Agricultural', 'tools', 'herbicides', '', '1647242612.jpg'),
(5, 'Roundup harbicide', 399, 'partilachlor 50% EC', 100, 'Agricultural', 'tools', 'herbicides', '', '1647242680.jpg'),
(6, 'pro pride prakruti insecticide', 140, 'acetamiprid 20% SP', 100, 'Agricultural', 'tools', 'insecticides', '', '1647242801.jpg'),
(7, 'fusiflex syngenta 1l insecticide', 599, 'Satisfaction Guaranteed ', 300, 'Agricultural', 'chemicals', 'insecticides', '', '1647242981.jpg'),
(8, 'insecticide combo pack syngenta', 1499, 'Voilam flexi, chess, evicent, virtako, ampligo', 200, 'Agricultural', 'tools', 'herbicides', '2', '1647243560.jpg'),
(10, 'avani-19', 49, 'avni seeds reserch sesamum', 400, 'Agricultural', 'tools', 'seeds', '', '1647244002.png'),
(11, 'sunhari gentex seeds', 69, 'gentex seeds \"empowering aggriculture..\"', 200, 'Agricultural', 'tools', 'seeds', '', '1647244078.jpg'),
(12, 'parampara organic seeds', 49, 'parampara organic', 200, 'Agricultural', 'tools', 'seeds', '', '1647244141.jpeg'),
(13, 'chemical sprayer', 799, 'chemical sprayer', 50, 'Agricultural', 'tools', 'sprayer', '', '1647244211.jpg'),
(14, 'chemical sprayer', 749, 'chemical sprayer', 50, 'Agricultural', 'tools', 'sprayer', '', '1647244247.jpg'),
(15, 'combo tools', 549, 'combo tools', 30, 'Agricultural', 'tools', 'tools', '', '1647244307.jpg'),
(16, 'combo tools', 599, 'combo tools', 50, 'Agricultural', 'tools', 'tools', '', '1647244360.jpg'),
(17, 'combo agricultural tools', 300, 'agricultural tools', 50, 'Agricultural', 'tools', 'tools', '', '1647244394.jpg'),
(18, 'raji-111+ indra seeds', 49, 'Satisfaction Guaranteed ', 200, 'Agricultural', 'tools', 'seeds', '0', '1647245386.jpg'),
(19, 'combo insecticides', 1300, 'combo insecticides', 20, 'Agricultural', 'tools', 'insecticides', '', '1647245627.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmCode` varchar(10) NOT NULL,
  `activation` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `mobile`, `address`, `password`, `confirmCode`, `activation`) VALUES
(1, 'Samruddhi', 'Dhane', 'samruddhi@gmail.com', '8485868798', 'indapur', '912ec803b2ce49e4a541068d495ab570', '0', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
