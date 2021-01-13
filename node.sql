-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 11:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `node`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_upload`
--

CREATE TABLE `all_upload` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_upload`
--

INSERT INTO `all_upload` (`id`, `name`, `product_name`, `price`) VALUES
(1, 'sad', 'nomjui', 500),
(2, 'raz', 'nomjuloik', 700);

-- --------------------------------------------------------

--
-- Table structure for table `available`
--

CREATE TABLE `available` (
  `id` int(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `available`
--

INSERT INTO `available` (`id`, `area`, `quantity`, `price`, `product_name`) VALUES
(1, 'Mirpur', 8, 100, 'hash han'),
(2, 'Banani', 9, 500, 'tvdtasvdyabs'),
(3, 'Kuril', 10, 600, 'dsad');

-- --------------------------------------------------------

--
-- Table structure for table `cta`
--

CREATE TABLE `cta` (
  `id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `complain` varchar(350) NOT NULL,
  `reply` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cta`
--

INSERT INTO `cta` (`id`, `product_name`, `complain`, `reply`) VALUES
(13, 'Ratul', 'yo', 'hi'),
(14, 'Ratul', 'yolo', 'yzmkcv'),
(20, 'Ratul', 'My server is down', 'Fixing'),
(22, 'Robert', 'Reset', 'Done'),
(23, 'Ratul', 'Bug', 'Looking for problem'),
(25, 'Robert', 'network error', '');

-- --------------------------------------------------------

--
-- Table structure for table `offered`
--

CREATE TABLE `offered` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offered`
--

INSERT INTO `offered` (`id`, `area`, `quantity`, `product_name`, `price`) VALUES
(1, 'Agargaon', 9, 'Dumble', 3000),
(2, 'Gulshan', 4, 'mini cribe mattress', 4000),
(3, 'Farmgate', 10, 'cleaner', 2500),
(4, 'Banani', 7, 'jamis', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `pnotices`
--

CREATE TABLE `pnotices` (
  `id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `notice` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pnotices`
--

INSERT INTO `pnotices` (`id`, `product_name`, `notice`, `date`, `name`) VALUES
(2, 'koko', 'worst', '2020-11-22', 'sad'),
(3, 'jokos', 'joss', '2020-11-22', 'sad'),
(20, 'rrrr', 'ok', '2020-05-22', 'sad'),
(123, 'dofg', 'joos', '2020-11-22', ''),
(2421, 'qeqfas', 'very good', '2020-11-22', '');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` varchar(350) NOT NULL,
  `ratings` varchar(50) NOT NULL,
  `product_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `name`, `review`, `ratings`, `product_name`) VALUES
(1, 'sad', 'quite good', '5', 'BAT'),
(2, 'Arnob', 'average', '3', 'Sun Light'),
(3, 'riaz', 'fair', '4', 'FGH Chair'),
(4, 'Gunjon', 'satisfactory', '3', 'Notion varting'),
(5, 'rafi', 'good', '4', 'rety ubi');

-- --------------------------------------------------------

--
-- Table structure for table `rnotices`
--

CREATE TABLE `rnotices` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `notice` varchar(350) NOT NULL,
  `date` date NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rnotices`
--

INSERT INTO `rnotices` (`id`, `name`, `notice`, `date`, `product_id`, `product_name`) VALUES
(1, 'Arnob', 'good product', '2020-11-22', 0, 'asdasnuf'),
(3, 'Mozammel', 'nice product and very efficient', '2020-11-22', 4, 'fsafsdfs'),
(4, 'Izu', 'i Am really happy', '2020-11-22', 1, 'safsadfvsd');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `day` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `date` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `product_name`, `day`, `quantity`, `date`) VALUES
(1, 'kjasfjksabjk', 5, 3, '2020-11-22'),
(2, 'jkcnsajkbcj', 6, 8, '2020-11-22'),
(6, 'asdksa', 5, 3, '2020-11-22'),
(8, 'asmnd nsa nm', 7, 8, '2020-11-22'),
(9, 'asndnasn', 6, 2, '2020-11-22'),
(123, 'sccaczz', 10, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(50) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `product_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `filename`, `product_name`) VALUES
(17, 'propic_1.jpg', 'sadasd'),
(18, 'propic_1.jpg', 'hajshbabf'),
(19, 'propic_1.jpg', 'ughfxdfzfdgh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `gender`, `education`, `type`, `picture`) VALUES
(24, 'sad', '123456', 'sad@gmail.com', 'M', 'ssc', 'customer', 'propic_1.jpg'),
(25, 'rahim', '123456', 'rahim@gmail.com', 'M', 'hsc', 'customer', 'problem.PNG'),
(26, 'varan', '123456', 'varan@gmail.com', 'M', 'BSC', 'manager', ''),
(27, 'riaz', '123456', 'riaz@gmail.com', 'M', 'hsc', 'customer', 'propic_1.jpg'),
(28, 'nishat', '123456', 'nishat@gmail.com', 'F', 'bsc', 'customer', 'propic_1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_upload`
--
ALTER TABLE `all_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `available`
--
ALTER TABLE `available`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cta`
--
ALTER TABLE `cta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offered`
--
ALTER TABLE `offered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pnotices`
--
ALTER TABLE `pnotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rnotices`
--
ALTER TABLE `rnotices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT for table `all_upload`
--
ALTER TABLE `all_upload`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `available`
--
ALTER TABLE `available`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cta`
--
ALTER TABLE `cta`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `offered`
--
ALTER TABLE `offered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pnotices`
--
ALTER TABLE `pnotices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2422;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rnotices`
--
ALTER TABLE `rnotices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
