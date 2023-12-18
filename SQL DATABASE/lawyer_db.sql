-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 10:14 PM
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
-- Database: `lawyer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(11) NOT NULL,
  `administrator_id` varchar(20) NOT NULL,
  `city` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `administrator_id`, `city`, `address`) VALUES
(1, 'Admin', 'Karachi', 'D-19 jkdki');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `client_id`, `contact_number`, `full_address`, `city`, `zip_code`, `image`) VALUES
(1, 'Client653bfb87d2f36', '03433333231', 'HOUSE# f-16', 'Multan', '93933 ', '20231027200351_5b8f3d9f30460aeedbe6a235e2d001d3.jpg '),
(2, 'Client653d02654e94e', '03435585554', 'HOUSE# D-55 BLOCK 8 KARACHI,PAKISTAN', 'Karachi', '39393 ', '20231028144525_boys-dp-from-funkylife-46.jpg '),
(3, 'Client653d02aa352b5', '03438383333', 'HOUSE# D-18 BLOCK P LAHORE,PAKISTAN', 'Lahore', '33243 ', '20231028144634_unnamed.png ');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `ID` int(11) NOT NULL,
  `lawyer_id` varchar(20) NOT NULL,
  `contact_Number` varchar(15) NOT NULL,
  `university_College` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `passing_year` varchar(100) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `practise_Length` varchar(100) NOT NULL,
  `case_handle` varchar(500) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`ID`, `lawyer_id`, `contact_Number`, `university_College`, `degree`, `passing_year`, `full_address`, `city`, `zip_code`, `practise_Length`, `case_handle`, `speciality`, `image`) VALUES
(7, 'Lawyer6580a5be73320', '03210994862', 'Iqra University', 'LLB', '2015', 'Flat', 'Karachi', '99990', '6-10 years', 'Civil matter,', 'Civil Law', '20231218210414_20231028142837_1.jpg'),
(8, 'Lawyer6580b2048a31e', '09876543211', 'Zabist', 'LLM', '2016', 'House', 'Islamabad', '88888', '11-15 years', 'Writ Jurisdiction,', 'Writ Jurisdiction', '20231218215636_ad155b4cfd5b6d220c3e5b51b349a37a.jpg'),
(9, 'Lawyer6580b28e302c9', '98765678901', 'School of Law- University of Karachi', 'LLB', '2010', 'House', 'Multan', '76767', '16-20 years', 'Company law,', 'Company Law', '20231218215854_1697050764010.jpg'),
(10, 'Lawyer6580b31bad25f', '09876543123', 'Themis School of Law ', 'LLB', '2014', 'Flat', 'Karachi', '76767', 'Most Senior', 'Contract law,', 'Contract Law', '20231218220115_Aaron-Pearl-0941.jpg'),
(11, 'Lawyer6580b3d1bc83c', '01237654829', 'Hamdard University', 'LLB', '2010', 'Flat', 'Karachi', '88766', 'Most Senior', 'Commercial matter,', 'Commercial Law', '20231218220417_Julia_Schuette.jpg'),
(12, 'Lawyer6580b4670fdb7', '03215674890', ' Sindh Muslim Law College', 'LLB', '2000', 'House', 'Lahore', '66577', '1-5 years', 'Construction law,', 'Construction Law', '20231218220647_James-Perry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(20) NOT NULL,
  `first_Name` varchar(100) NOT NULL,
  `last_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_Name`, `last_Name`, `email`, `password`, `status`, `role`) VALUES
('Admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'Active', 'Admin'),
('Client653bfb87d2f36', 'Hasan', 'Ali', 'hasanali@gmail.com ', 'hasanali', 'Active', 'User'),
('Client653d02654e94e', 'Shahid', 'Jamil', 'shahid@gmail.com ', 'shahid', 'Active', 'User'),
('Client653d02aa352b5', 'Fouz', 'Azeem', 'fouz@gmail.com ', 'fouz ', 'Active', 'User'),
('Lawyer6580a5be73320', 'Ahmed', 'Arain', 'ahmed@gmail.com ', 'ahmed ', 'Active', 'Lawyer'),
('Lawyer6580b2048a31e', 'Shoaib', 'Begum', 'shoaibwazir@gmail.com ', 'shoaib ', 'Active', 'Lawyer'),
('Lawyer6580b28e302c9', 'Muhammad ', 'Ali', 'muhammadali@gmail.com ', 'muhammadali ', 'Active', 'Lawyer'),
('Lawyer6580b31bad25f', 'Mujtaba', 'Kahnani', 'mujtaba@gmail.com ', 'mujtaba ', 'Active', 'Lawyer'),
('Lawyer6580b3d1bc83c', 'Urooj', 'Zahra', 'urooj@gmail.com ', 'urooj ', 'Active', 'Lawyer'),
('Lawyer6580b4670fdb7', 'Hiba', 'Farhan', 'hiba@gmail.com ', 'hiba ', 'Active', 'Lawyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `administrator_id` (`administrator_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lawyer_id` (`lawyer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`administrator_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`lawyer_id`) REFERENCES `lawyer` (`lawyer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `lawyer_ibfk_1` FOREIGN KEY (`lawyer_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
