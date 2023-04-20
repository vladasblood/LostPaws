-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 05:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET TIME_ZONE = "+00:00";

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

CREATE TABLE `ADOPT_PETS` (
  `ADOPT_PETS_ID` INT(11) NOT NULL,
  `TYPE` VARCHAR(25) NOT NULL,
  `BREED` VARCHAR(25) NOT NULL,
  `GENDER` CHAR(1) NOT NULL,
  `COLOR` VARCHAR(25) NOT NULL,
  `ROLES_ADOPT_PETS` VARCHAR(25) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Table structure for table `found_pets`
--

CREATE TABLE `FOUND_PETS` (
  `FIND_PETS_ID` INT(11) NOT NULL,
  `TYPE` VARCHAR(25) NOT NULL,
  `BREED` VARCHAR(25) NOT NULL,
  `NAME` VARCHAR(25) NOT NULL,
  `GENDER` CHAR(1) NOT NULL,
  `COLOR` VARCHAR(25) NOT NULL,
  `LOCATION_FOUND` VARCHAR(40) NOT NULL,
  `DATETIME_FOUND` DATETIME NOT NULL,
  `MICROCHIP` VARCHAR(25) NOT NULL,
  `ADDITIONAL_INFORMATION` VARCHAR(1000) NOT NULL,
  `UPLOAD_PHOTO` VARCHAR(1000) NOT NULL,
  `ROLES_FOUND_PETS` VARCHAR(25) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Dumping data for table `found_pets`
--

INSERT INTO `FOUND_PETS` (
  `FIND_PETS_ID`,
  `TYPE`,
  `BREED`,
  `NAME`,
  `GENDER`,
  `COLOR`,
  `LOCATION_FOUND`,
  `DATETIME_FOUND`,
  `MICROCHIP`,
  `ADDITIONAL_INFORMATION`,
  `UPLOAD_PHOTO`,
  `ROLES_FOUND_PETS`
) VALUES (
  0,
  'TestFoundA',
  'TestBreedA',
  'TestNameA',
  'M',
  'White',
  'TestLocationA',
  '2023-01-12 06:29:00',
  'TestChipA',
  'TestInfoA',
  'UrlA',
  'TestRoleA'
);

-- --------------------------------------------------------

--
-- Table structure for table `lost_pets`
--

CREATE TABLE `LOST_PETS` (
  `LOST_PETS_ID` INT(11) NOT NULL,
  `TYPE` VARCHAR(25) NOT NULL,
  `BREED` VARCHAR(25) NOT NULL,
  `NAME` VARCHAR(25) NOT NULL,
  `GENDER` CHAR(1) NOT NULL,
  `COLOR` VARCHAR(25) NOT NULL,
  `LAST_LOCATION` VARCHAR(40) NOT NULL,
  `DATETIME_LASTSEEN` DATETIME NOT NULL,
  `ADDITIONAL_INFORMATION` VARCHAR(1000) NOT NULL,
  `UPLOAD_PHOTO` VARCHAR(1000) NOT NULL,
  `ROLES_LOST_PETS` VARCHAR(25) NOT NULL,
  `MICROCHIP` VARCHAR(25) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Dumping data for table `lost_pets`
--

INSERT INTO `LOST_PETS` (
  `LOST_PETS_ID`,
  `TYPE`,
  `BREED`,
  `NAME`,
  `GENDER`,
  `COLOR`,
  `LAST_LOCATION`,
  `DATETIME_LASTSEEN`,
  `ADDITIONAL_INFORMATION`,
  `UPLOAD_PHOTO`,
  `ROLES_LOST_PETS`,
  `MICROCHIP`
) VALUES (
  101,
  'testType',
  'testBreed',
  'testName',
  'M',
  'White',
  'TestLocation',
  '2023-04-01 09:00:00',
  'TestInfo',
  'URL here',
  'TestRole',
  'TestChip'
),
(
  106,
  'testTypeB',
  'testBreedB',
  'testNameB',
  'F',
  'Red',
  'TestLocationB',
  '2023-04-02 11:15:00',
  'Lorem ipsum dolor sit amet',
  'UrlB',
  'testRoleB',
  'TestChipB'
);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `PETS` (
  `PETS_ID` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `ROLES` (
  `USERS_ROLE` INT(11) NOT NULL,
  `ROLES_NAME` VARCHAR(25) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Table structure for table `search_query`
--

CREATE TABLE `SEARCH_QUERY` (
  `FOUND_PETS_ID` INT(11) NOT NULL,
  `ADOPT_PETS_ID` INT(11) NOT NULL,
  `LOST_PETS_ID` INT(11) NOT NULL,
  `SEARCH_QUERY_ID` INT(11) NOT NULL,
  `SEARCH_RESULT_ID` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Table structure for table `search_result`
--

CREATE TABLE `SEARCH_RESULT` (
  `SEARCH_RESULT_ID` INT(11) NOT NULL,
  `PETS_ID` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `USERS` (
  `USERS_ID` INT(11) NOT NULL,
  `USERNAME` VARCHAR(50) NOT NULL,
  `PASSWORD` VARCHAR(50) NOT NULL,
  `FIRST_NAME` VARCHAR(40) NOT NULL,
  `LAST_NAME` VARCHAR(40) NOT NULL,
  `USERS_ROLE` INT(11) NOT NULL,
  `SEARCH_ID_QUERY` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=UTF8MB4 COLLATE=UTF8MB4_GENERAL_CI;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt_pets`
--
ALTER TABLE `ADOPT_PETS` ADD PRIMARY KEY (`ADOPT_PETS_ID`);

--
-- Indexes for table `found_pets`
--
ALTER TABLE `FOUND_PETS` ADD PRIMARY KEY (`FIND_PETS_ID`);

--
-- Indexes for table `lost_pets`
--
ALTER TABLE `LOST_PETS` ADD PRIMARY KEY (`LOST_PETS_ID`);

--
-- Indexes for table `roles`
--
ALTER TABLE `ROLES` ADD PRIMARY KEY (`USERS_ROLE`);

--
-- Indexes for table `search_query`
--
ALTER TABLE `SEARCH_QUERY` ADD PRIMARY KEY (`FOUND_PETS_ID`, `ADOPT_PETS_ID`, `LOST_PETS_ID`);

--
-- Indexes for table `search_result`
--
ALTER TABLE `SEARCH_RESULT` ADD PRIMARY KEY (`SEARCH_RESULT_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `USERS` ADD PRIMARY KEY (`USERS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lost_pets`
--
ALTER TABLE `LOST_PETS` MODIFY `LOST_PETS_ID` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;