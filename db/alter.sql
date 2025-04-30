
CREATE TABLE IF NOT EXISTS `access_level` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` bigint(20) NOT NULL,
  `AccessKey` varchar(255) NOT NULL,
  `Access` smallint(6) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 

CREATE TABLE IF NOT EXISTS `activity_log` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` bigint(20) NOT NULL,
  `UserName` varchar(250) CHARACTER SET utf8 NOT NULL,
  `Segment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `IPAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

 

CREATE TABLE IF NOT EXISTS `users` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `FullName` text NOT NULL,
  `ContactNumber` varchar(200) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `ProfileImage` text CHARACTER SET utf8 NOT NULL,
  `UserType` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `LoginStatus` text NOT NULL,
  `CNIC` bigint(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Archive` smallint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 
 
CREATE TABLE IF NOT EXISTS `settings` (
  `Key` varchar(50) NOT NULL,
  `Description` text DEFAULT NULL,
  `Value` text NOT NULL,
  `OrderID` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Key`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

 

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
   
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Name` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
 

DROP TABLE IF EXISTS `domains`;
CREATE TABLE IF NOT EXISTS `domains` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `CampaignID` int NOT NULL,
  `DomainName` longtext NOT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

  

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `UID` bigint(20) NOT NULL AUTO_INCREMENT,
  `SystemDate` timestamp NOT NULL DEFAULT current_timestamp(),
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

 ALTER TABLE `leads` ADD `InsuranceType` VARCHAR(255) NOT NULL AFTER `DomainID`; 
 ALTER TABLE `leads` ADD `xxTrustedFormCertUrl` VARCHAR(255) NOT NULL AFTER `LeadUniqueID`; 
 ALTER TABLE `leads` CHANGE `xxTrustedFormCertUrl` `xxTrustedFormCertUrl` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL; 