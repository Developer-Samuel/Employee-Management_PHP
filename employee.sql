SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE  IF NOT EXISTS `employee-management`;

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `EmpFname` varchar(50) NOT NULL,
  `EmpLname` varchar(50) NOT NULL,
  `EmpCode` varchar(50) NOT NULL UNIQUE KEY,
  `EmpDept` varchar(100) NOT NULL,
  `EmpDesignation` varchar(100) NOT NULL,
  `EmpWorkPosition` varchar(30) NOT NULL,
  `EmpEmail` varchar(100) NOT NULL,
  `EmpPassword` varchar(100) NOT NULL,
  `EmpJoining` date NOT NULL,
  `EmpGender` enum('Male','Female') NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `admintable` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `AdminName` varchar(50) DEFAULT NULL,
  `AdminUsername` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegisterDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admintable` (`AdminName`, `AdminUsername`, `Password`) VALUES
('Ahmed Johnson', 'Admin', 'admin123');



CREATE TABLE `education` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `EmpID` int(10) NOT NULL,
  `hsName` varchar(50) NOT NULL,
  `hsGradDep` varchar(50) NOT NULL,
  `hsGradDate` varchar(50) NOT NULL,
  `hsAchievementsCertificates` varchar(50) NOT NULL,
  `uName` varchar(50) NOT NULL,
  `colleges` varchar(100) NOT NULL,
  `degreeAchieved` varchar(50) NOT NULL,
  `uGradDate` varchar(50) NOT NULL,
  `uProjectsCertificates` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `experience` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `EmpID` varchar(10) NOT NULL,
  `CompanyName1` varchar(50) NOT NULL,
  `WorkPosition1` varchar(50) NOT NULL,
  `WorkDuration1` varchar(50) NOT NULL,
  `UsedProgramsTools1` varchar(100) NOT NULL,
  `CompanyName2` varchar(50) NOT NULL,
  `WorkPosition2` varchar(50) NOT NULL,
  `WorkDuration2` varchar(50) NOT NULL,
  `UsedProgramsTools2` varchar(100) NOT NULL,
  `CompanyName3` varchar(50) NOT NULL,
  `WorkPosition3` varchar(50) NOT NULL,
  `WorkDuration3` varchar(50) NOT NULL,
  `UsedProgramsTools3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



