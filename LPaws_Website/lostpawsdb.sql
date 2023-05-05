-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 12:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lostpawsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt_pets`
--

CREATE TABLE `adopt_pets` (
  `Adopt_Pets_id` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Breed` varchar(25) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Roles_Adopt_Pets` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopt_pets`
--

INSERT INTO `adopt_pets` (`Adopt_Pets_id`, `Type`, `Breed`, `Gender`, `Color`, `Roles_Adopt_Pets`) VALUES
(0, 'TestAdoptA', 'TestBreedA', 'M', 'Yellow', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `found_pets`
--

CREATE TABLE `found_pets` (
  `Find_Pets_id` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Breed` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Location_Found` varchar(40) NOT NULL,
  `DateTime_Found` datetime NOT NULL,
  `Microchip` varchar(25) NOT NULL,
  `Additional_Information` varchar(1000) NOT NULL,
  `Upload_Photo` varchar(1000) NOT NULL,
  `Roles_Found_Pets` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `found_pets`
--

INSERT INTO `found_pets` (`Find_Pets_id`, `Type`, `Breed`, `Name`, `Gender`, `Color`, `Location_Found`, `DateTime_Found`, `Microchip`, `Additional_Information`, `Upload_Photo`, `Roles_Found_Pets`) VALUES
(2, 'AdminTestA', 'AdminBreedA', 'AdminNameA', 'M', 'Green', 'AdminLocationA', '2022-08-14 12:53:00', 'AdminChipA', 'AdminInfoA', 'AdminURLA', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `lost_pets`
--

CREATE TABLE `lost_pets` (
  `lost_pets_id` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Breed` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Last_Location` varchar(40) NOT NULL,
  `DateTime_LastSeen` datetime NOT NULL,
  `Additional_Information` varchar(1000) NOT NULL,
  `Upload_Photo` varchar(1000) NOT NULL,
  `Roles_Lost_Pets` varchar(25) NOT NULL,
  `Microchip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lost_pets`
--

INSERT INTO `lost_pets` (`lost_pets_id`, `Type`, `Breed`, `Name`, `Gender`, `Color`, `Last_Location`, `DateTime_LastSeen`, `Additional_Information`, `Upload_Photo`, `Roles_Lost_Pets`, `Microchip`) VALUES
(101, 'testType', 'testBreed', 'testName', 'M', 'White', 'TestLocation', '2023-04-01 09:00:00', 'TestInfo', 'URL here', 'TestRole', 'TestChip'),
(110, 'AdminTestA', 'AdminBreedA', 'AdminNameA', 'M', 'Orange', 'AdminLocationA', '2022-05-18 01:46:00', 'Admin Info A', 'AdminURLA', 'Admin', 'AdminChipA');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `Pets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `Users_role` int(11) NOT NULL,
  `Roles_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_query`
--

CREATE TABLE `search_query` (
  `Found_Pets_id` int(11) NOT NULL,
  `Adopt_Pets_id` int(11) NOT NULL,
  `Lost_Pets_id` int(11) NOT NULL,
  `Search_Query_id` int(11) NOT NULL,
  `Search_Result_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `search_result`
--

CREATE TABLE `search_result` (
  `Search_Result_id` int(11) NOT NULL,
  `Pets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Users_role` int(11) NOT NULL,
  `Search_id_query` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `Username`, `Password`, `First_Name`, `Last_Name`, `Users_role`, `Search_id_query`) VALUES
(1, 'Admin', 'AdminAcc', 'Admin', 'Admin', 0, 0),
(2, 'TestA', 'AAA', 'TestAA', 'TestAAA', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt_pets`
--
ALTER TABLE `adopt_pets`
  ADD PRIMARY KEY (`Adopt_Pets_id`);

--
-- Indexes for table `found_pets`
--
ALTER TABLE `found_pets`
  ADD PRIMARY KEY (`Find_Pets_id`);

--
-- Indexes for table `lost_pets`
--
ALTER TABLE `lost_pets`
  ADD PRIMARY KEY (`lost_pets_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Users_role`);

--
-- Indexes for table `search_query`
--
ALTER TABLE `search_query`
  ADD PRIMARY KEY (`Found_Pets_id`,`Adopt_Pets_id`,`Lost_Pets_id`);

--
-- Indexes for table `search_result`
--
ALTER TABLE `search_result`
  ADD PRIMARY KEY (`Search_Result_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `found_pets`
--
ALTER TABLE `found_pets`
  MODIFY `Find_Pets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lost_pets`
--
ALTER TABLE `lost_pets`
  MODIFY `lost_pets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
