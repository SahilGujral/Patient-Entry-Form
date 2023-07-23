-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 12:55 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `FirstName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Contactnumber` int(20) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Age` int(20) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DiseaseInformation` varchar(50) NOT NULL,
  `Systolic` int(20) NOT NULL,
  `Diastolic` int(20) NOT NULL,
  `TSH` int(20) NOT NULL,
  `T3` int(20) NOT NULL,
  `T4` int(20) NOT NULL,
  `HbA1c` int(20) NOT NULL,
  `BeforeFastSugar` int(20) NOT NULL,
  `AfterFastSugar` int(20) NOT NULL,
  `DoctorName` varchar(50) NOT NULL,
  `TreatmentSince` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
