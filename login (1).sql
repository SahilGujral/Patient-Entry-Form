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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'Dikshant1312', '$2y$10$5WLOAqccnUFz9cTEtMmiKuWk449/FnchBYaj32J7qld02fYOkaIr6', '2023-03-08 21:42:17'),
(3, 'dkbslayer', '$2y$10$HA23QShAH6WCLgiToHCD4ehyEMF6IA4MN3u6OKgGFl6PW2N/ljHpG', '2023-04-22 15:32:54'),
(4, 'dikshant', '$2y$10$PQsjC6L2R7XprXeyJzLOEudreQHm28cbSCJ3yAMpzJZADm1OL8.Zq', '2023-04-22 19:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
