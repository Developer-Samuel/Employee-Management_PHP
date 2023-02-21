SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `employee-management`;

CREATE TABLE `employees` (
  `ID` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `EmpFname` VARCHAR(50) NOT NULL,
  `EmpLname` VARCHAR(50) NOT NULL,
  `EmpCode` VARCHAR(50) NOT NULL UNIQUE KEY,
  `EmpDept` VARCHAR(100) NOT NULL,
  `EmpDesignation` VARCHAR(100) NOT NULL,
  `EmpWorkPosition` VARCHAR(30) NOT NULL,
  `EmpEmail` VARCHAR(100) NOT NULL,
  `EmpPassword` VARCHAR(100) NOT NULL,
  `EmpJoining` DATE NOT NULL,
  `EmpGender` ENUM('Male','Female') NOT NULL,
  `RegisterDate` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `admins` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `AdminUsername` VARCHAR(50) UNIQUE KEY,
  `AdminName` VARCHAR(50),
  `Password` VARCHAR(100),
  `RegisterDate` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `admins` (`AdminName`, `AdminUsername`, `Password`) VALUES
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



