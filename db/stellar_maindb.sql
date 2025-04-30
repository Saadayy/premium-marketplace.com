-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2025 at 10:40 PM
-- Server version: 8.3.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stellar_maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_level`
--

DROP TABLE IF EXISTS `access_level`;
CREATE TABLE IF NOT EXISTS `access_level` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserID` bigint NOT NULL,
  `AccessKey` varchar(255) NOT NULL,
  `Access` smallint NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UserID` bigint NOT NULL,
  `UserName` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Segment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `Description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `IPAddress` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

DROP TABLE IF EXISTS `domains`;
CREATE TABLE IF NOT EXISTS `domains` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CampaignID` int NOT NULL,
  `DomainName` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LeadUniqueID` longtext,
  `DomainID` int NOT NULL,
  `Name` mediumtext,
  `Email` longtext,
  `FirstName` longtext,
  `LastName` longtext,
  `Phone` mediumtext,
  `City` longtext,
  `State` longtext,
  `ZipCode` longtext,
  `Message` longtext,
  `Age` varchar(255) NOT NULL,
  `Income` varchar(250) NOT NULL,
  `DebtAmount` varchar(255) NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `Key` varchar(50) NOT NULL,
  `Description` text,
  `Value` text NOT NULL,
  `OrderID` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`Key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `UID` bigint NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FullName` text NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `ProfileImage` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `UserType` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `LoginStatus` text NOT NULL,
  `CNIC` bigint DEFAULT NULL,
  `DOB` date NOT NULL,
  `Archive` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
