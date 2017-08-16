-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2017 at 07:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_sid`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`name`, `email`, `phone`) VALUES
('269f73', '269f73@gmail.com', '56'),
('269f74', '269f74@gmail.com', '9922992233'),
('269f77', '269f77@gmail.com', '9922992233'),
('269f78', '269f78@gmail.com', '9922992233'),
('269f79', '269f79@gmail.com', '9922992233'),
('269f80', '269f80@gmail.com', '9922992233'),
('269f81', '269f81@gmail.com', '9922992233'),
('46', '46@gmail.com', '9922992233'),
('47', '47@gmail.com', '9922992233'),
('48', '48@gmail.com', '9922992233'),
('49', '49@gmail.com', '9922992233'),
('50', '50@gmail.com', '9922992233'),
('51', '51@gmail.com', '9922992233'),
('52', '52@gmail.com', '9922992233'),
('53', '53@gmail.com', '9922992233'),
('54', '54@gmail.com', '9922992233'),
('55', '55@gmail.com', '9922992233'),
('56', '56@gmail.com', '9922992233'),
('57', '57@gmail.com', '9922992233'),
('58', '58@gmail.com', '9922992233'),
('59', '59@gmail.com', '9922992233'),
('60', '60@gmail.com', '9922992233'),
('61', '61@gmail.com', '9922992233'),
('62', '62@gmail.com', '9922992233'),
('63', '63@gmail.com', '9922992233'),
('64', '64@gmail.com', '9922992233'),
('65', '65@gmail.com', '9922992233'),
('66', '66@gmail.com', '9922992233'),
('67', '67@gmail.com', '9922992233'),
('68', '68@gmail.com', '9922992233'),
('70', '70@gmail.com', '9922992233'),
('71', '71@gmail.com', '9922992233'),
('72', '72@gmail.com', '9922992233'),
('73', '73@gmail.com', '9922992233'),
('74', '74@gmail.com', '9922992233'),
('75', '75@gmail.com', '9922992233'),
('76', '76@gmail.com', '9922992233'),
('77', '77@gmail.com', '9922992233'),
('78', '78@gmail.com', '9922992233'),
('79', '79@gmail.com', '9922992233'),
('84', '84@gmail.com', '9922992233'),
('85', '85@gmail.com', '9922992233'),
('86', '86@gmail.com', '9922992233'),
('87', '87@gmail.com', '9922992233'),
('88', '88@gmail.com', '9922992233'),
('89', '89@gmail.com', '9922992233'),
('90', '90@gmail.com', '9922992233'),
('91', '91@gmail.com', '9922992233'),
('92', '92@gmail.com', '9922992233'),
('93', '93@gmail.com', '9922992233'),
('94', '94@gmail.com', '9922992233'),
('95', '95@gmail.com', '9922992233'),
('96', '96@gmail.com', '9922992233'),
('97', '97@gmail.com', '9922992233'),
('98', '98@gmail.com', '9922992233'),
('99', '99@gmail.com', '9922992233'),
('ad30', 'ad30@gmail.com', '9922992233'),
('ad31', 'ad31@gmail.com', '9922992233'),
('ad32', 'ad32@gmail.com', '9922992233'),
('ad33', 'ad33@gmail.com', '9922992233'),
('ad34', 'ad34@gmail.com', '9922992233'),
('ad35', 'ad35@gmail.com', '9922992233'),
('ad36', 'ad36@gmail.com', '9922992233'),
('ad37', 'ad37@gmail.com', '9922992233'),
('ad38', 'ad38@gmail.com', '9922992233'),
('ad39', 'ad39@gmail.com', '9922992233'),
('ad40', 'ad40@gmail.com', '9922992233'),
('ad41', 'ad41@gmail.com', '9922992233'),
('ad42', 'ad42@gmail.com', '9922992233'),
('ad43', 'ad43@gmail.com', '9922992233'),
('ad44', 'ad44@gmail.com', '9922992233'),
('ad45', 'ad45@gmail.com', '9922992233'),
('dg', 'sdg@sfdbb', '23456'),
('f10', 'f10@gmail.com', '9922992233'),
('f11', 'f11@gmail.com', '9922992233'),
('f12', 'f12@gmail.com', '9922992233'),
('f13', 'f13@gmail.com', '9922992233'),
('f14', 'f14@gmail.com', '9922992233'),
('f15', 'f15@gmail.com', '9922992233'),
('f16', 'f16@gmail.com', '9922992233'),
('f17', 'f17@gmail.com', '9922992233'),
('f18', 'f18@gmail.com', '9922992233'),
('f19', 'f19@gmail.com', '9922992233'),
('f20', 'f20@gmail.com', '9922992233'),
('f21', 'f21@gmail.com', '9922992233'),
('f22', 'f22@gmail.com', '9922992233'),
('f23', 'f23@gmail.com', '9922992233'),
('f24', 'f24@gmail.com', '9922992233'),
('f25', 'f25@gmail.com', '9922992233'),
('f26', 'f26@gmail.com', '9922992233'),
('f27', 'f27@gmail.com', '9922992233'),
('f28', 'f28@gmail.com', '9922992233'),
('f29', 'f29@gmail.com', '9922992233'),
('hi', 'hi@gma', '23456'),
('jaga', 'sid@jaga', '123456789'),
('sg', 'sdg@sfdbb', '3333'),
('sid', 'jaga@sid', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
