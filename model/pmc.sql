-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 04:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_cashier`
--

CREATE TABLE `add_cashier` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `pmaddress` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `add_manager`
--

CREATE TABLE `add_manager` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `pmaddress` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_manager`
--

INSERT INTO `add_manager` (`fname`, `lname`, `gender`, `dob`, `religion`, `praddress`, `pmaddress`, `phone`, `email`, `website`, `username`, `password`, `confirmpassword`) VALUES
('r', 's', 'male', '19-10-2000', 'hindu', 's', 's', '235465767i', 'dxfds@gmail.com', 'ddfgh.com', 'dipoo', '12333', '12333');

-- --------------------------------------------------------

--
-- Table structure for table `add_pharmacists`
--

CREATE TABLE `add_pharmacists` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `pmaddress` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `religion` varchar(200) NOT NULL,
  `praddress` varchar(200) NOT NULL,
  `pmaddress` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confirmpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `gender`, `dob`, `religion`, `praddress`, `pmaddress`, `phone`, `email`, `website`, `username`, `password`, `confirmpassword`) VALUES
('dipto', 'roy', 'male', '10-03-2000', 'hinduism', 'ssssssss', 'sssss', '01878378365', 'dipto@gmail.com', 'dipto.com', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234'),
('Dipto', 'Roy', 'male', '2022-04-12', 'Hinduism', 'jhklj', 'kjklj', '01717567435', 'dipto.roy.aiub@gmail.com', 'https://github.com/roydipto/WEB-TECHNOLOGIES/tree/main', 'dipraj', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('dipto', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
