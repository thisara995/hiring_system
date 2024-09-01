-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 07:48 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_hiring_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `c_email`, `c_password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL,
  `c_contact_number` varchar(10) NOT NULL,
  `c_fName` varchar(30) NOT NULL,
  `c_address` varchar(150) NOT NULL,
  `c_nic` varchar(20) NOT NULL,
  `c_password` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`c_id`, `c_contact_number`, `c_fName`, `c_address`, `c_nic`, `c_password`, `c_email`) VALUES
(7, '0774744248', 'G.R.C.Gamlath', '60, Main Street, Alawwa', '198571700717', 'gamlath123', 'gamlath@gmail.com'),
(8, '0786387203', 'R.P.R.Ranasingha', '104, Techni Art, Anuradhapura Rd, Ambanpola', '198771700800', 'rana123', 'ranasinghe@gmail.com'),
(9, '0760759462', 'R.M.S.C. Kumara', 'no. 51A, Anuradhapura Road, Galgamuwa', '1990571700717', '   KUMARA123', '   kumara@gmail.com'),
(10, '0752095312', 'K.K. Nilanthi', '539, Dambulla Rd, Gokarella', '198671700505', 'nilanthi123', 'nilanthi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `e_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `e_sub_type` varchar(20) NOT NULL,
  `e_type` varchar(20) NOT NULL,
  `e_qty` int(11) NOT NULL,
  `e_price` int(11) NOT NULL,
  `available_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`e_id`, `e_name`, `e_sub_type`, `e_type`, `e_qty`, `e_price`, `available_count`) VALUES
(1, 'Grinders', 'hand-tools', 'Power Tools', 6, 1500, 6),
(2, 'Drill Machine', 'hand-tools', 'Power Tools', 7, 2000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `equipments_description`
--

CREATE TABLE `equipments_description` (
  `i_id` int(11) NOT NULL,
  `i_type` varchar(50) DEFAULT NULL,
  `i_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments_description`
--

INSERT INTO `equipments_description` (`i_id`, `i_type`, `i_price`) VALUES
(29, 'Accrow Jacks', 500),
(30, 'Power Saws', 500),
(31, 'Grinders', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `sell_item`
--

CREATE TABLE `sell_item` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `How_many_date` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_item`
--

INSERT INTO `sell_item` (`id`, `item_id`, `customer_id`, `item_qty`, `approval`, `How_many_date`, `total_price`) VALUES
(66, 1, 7, 1, 'Pending', 1, 1500),
(67, 1, 7, 3, 'Pending', 1, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `sell_worker`
--

CREATE TABLE `sell_worker` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `how_many_date` int(11) NOT NULL,
  `approval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(50) NOT NULL,
  `w_contact_number` varchar(10) NOT NULL,
  `w_address` varchar(200) NOT NULL,
  `w_type` varchar(20) NOT NULL,
  `w_description` varchar(150) NOT NULL,
  `w_image` varchar(100) NOT NULL,
  `availability` varchar(1) NOT NULL DEFAULT '1',
  `w_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`w_id`, `w_name`, `w_contact_number`, `w_address`, `w_type`, `w_description`, `w_image`, `availability`, `w_price`) VALUES
(68, 'R.S.A. Fernando', '0786417006', '18/8, Mihinu Mw, Kurunegala', 'carpenters', '5 years of experience', '63bc211b51825.jpg', '1', 2500),
(69, ' S.K.Jayasekara', '0752036626', '05, Kandy Rd,Mawathagama', 'mason', '10 years of experience', '63bc21f354a5b.jpg', '1', 3500),
(71, 'D.Dhanapala', '0725326599', '106, Kuliyapitiya Road, Yakwila', 'digging_Work', '5 years of experience', '63bc22dce7b72.jpg', '1', 3000),
(72, 'P.K.A.Jayalal', '077 874305', '20, Mathale Rd, Dodamgaslanda', 'glazier', '10 years of experience', '63bc23a25e9f1.png', '1', 3500),
(73, 'W.M.L.K.Wijekoon', '0782406676', '110/1, Kegalle Rd, Polgahawela', 'backhoe_Driver', '5 years of experience', '63bc264aa2002.jpg', '1', 5000),
(74, 'T.H. Perera', '0775959315', '44C, Halawatha Rd, Wariyapola', 'electricians', '2 years of experience', '63bc27488bd39.jpg', '1', 3000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `equipments_description`
--
ALTER TABLE `equipments_description`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `sell_item`
--
ALTER TABLE `sell_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_worker`
--
ALTER TABLE `sell_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipments_description`
--
ALTER TABLE `equipments_description`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sell_item`
--
ALTER TABLE `sell_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `sell_worker`
--
ALTER TABLE `sell_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
