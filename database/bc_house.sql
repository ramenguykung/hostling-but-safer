-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 03:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id_Booking` int(100) NOT NULL,
  `Start_Date` varchar(20) NOT NULL,
  `End_Date` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_payment`
--

CREATE TABLE `deposit_payment` (
  `Id_Payment` int(100) NOT NULL,
  `Date` int(20) NOT NULL,
  `Method` int(20) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id_Review` int(100) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Id_Room` int(100) NOT NULL,
  `RoomNumber` varchar(20) NOT NULL,
  `RoomSatatus` varchar(20) NOT NULL,
  `RoomDetails` varchar(100) NOT NULL,
  `MonthlyPrice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_User` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `user_Day` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `user_Month` varchar(60) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `user_Year` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `Card_Address` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Birthday` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `m_level` varchar(20) NOT NULL,
  `user_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `user_name`, `Surname`, `user_Day`, `user_Month`, `user_Year`, `Age`, `Job`, `Card_Address`, `Phone`, `Birthday`, `Gender`, `Email`, `user_password`, `m_level`, `user_img`) VALUES
(1, 'แบงค์', 'ครับ', '11', 'August', '2004', '20', 'โปรแกรมเมอร์', 'มจพ', '0123456789', '', 'man', 'B@gmail.com', '123', 'User', '209763691120250225_051842.jpg'),
(2, 'orasa', 'sapram', '20', 'May', '2004', '20', 'programer', 'มจพ', '0981346885', '', 'woman', 'orasa.sapram.2512@gmail.com', 'orasa2005', 'User', '55526479420250225_141019.png');

-- --------------------------------------------------------

--
-- Table structure for table `web_admin`
--

CREATE TABLE `web_admin` (
  `Id_Admin` int(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `admin_Password` varchar(50) NOT NULL,
  `m_level` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_admin`
--

INSERT INTO `web_admin` (`Id_Admin`, `Email`, `admin_Password`, `m_level`) VALUES
(1, 'Bchouseforrent1@gmail.com', 'Owner0987654321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id_Booking`);

--
-- Indexes for table `deposit_payment`
--
ALTER TABLE `deposit_payment`
  ADD PRIMARY KEY (`Id_Payment`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Id_Review`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Id_Room`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_User`);

--
-- Indexes for table `web_admin`
--
ALTER TABLE `web_admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id_Booking` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit_payment`
--
ALTER TABLE `deposit_payment`
  MODIFY `Id_Payment` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id_Review` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `web_admin`
--
ALTER TABLE `web_admin`
  MODIFY `Id_Admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
