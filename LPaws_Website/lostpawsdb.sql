-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 01:31 PM
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
  `Roles_Lost_Pets` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `DataTime_LastSeen` datetime NOT NULL,
  `Additional_Information` varchar(1000) NOT NULL,
  `Upload_Photo` varchar(1000) NOT NULL,
  `Roles_Lost_Pets` varchar(25) NOT NULL,
  `Microchip` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Users_role` int(11) NOT NULL,
  `Search_id_query` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
