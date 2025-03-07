-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 08:38 PM
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
-- Table structure for table `building_1`
--

CREATE TABLE `building_1` (
  `building_1_id` int(10) NOT NULL,
  `floor` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_1`
--

INSERT INTO `building_1` (`building_1_id`, `floor`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5');

-- --------------------------------------------------------

--
-- Table structure for table `building_2`
--

CREATE TABLE `building_2` (
  `building_2_id` int(10) NOT NULL,
  `floor` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `building_2`
--

INSERT INTO `building_2` (`building_2_id`, `floor`) VALUES
(1, '1'),
(2, '2');

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
-- Table structure for table `room_building_1`
--

CREATE TABLE `room_building_1` (
  `Id_Room` int(100) NOT NULL,
  `Room_img` varchar(200) NOT NULL,
  `RoomNumber` varchar(20) NOT NULL,
  `RoomSatatus` varchar(20) NOT NULL,
  `Room_Dimensions` varchar(20) NOT NULL,
  `RoomDetails` text NOT NULL,
  `MonthlyPrice` varchar(20) NOT NULL,
  `RoomSupplies` text NOT NULL,
  `building_1_id` int(10) NOT NULL,
  `Room_img1` varchar(200) NOT NULL,
  `Room_img2` varchar(200) NOT NULL,
  `Room_img3` varchar(200) NOT NULL,
  `Room_img4` varchar(200) NOT NULL,
  `Room_img5` varchar(200) NOT NULL,
  `Room_img6` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_building_1`
--

INSERT INTO `room_building_1` (`Id_Room`, `Room_img`, `RoomNumber`, `RoomSatatus`, `Room_Dimensions`, `RoomDetails`, `MonthlyPrice`, `RoomSupplies`, `building_1_id`, `Room_img1`, `Room_img2`, `Room_img3`, `Room_img4`, `Room_img5`, `Room_img6`) VALUES
(1, 'Room1.png', '1', 'ห้องว่าง', '3.2 * 5.2 เมตร', '', '2500฿', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '', '', '', '', '', ''),
(3, 'Room2.png', '2', 'ห้องว่าง', '3.2 * 5.2 เมตร', '', '2500฿', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_building_2`
--

CREATE TABLE `room_building_2` (
  `Id_Room` int(100) NOT NULL,
  `Room_img` varchar(200) NOT NULL,
  `RoomNumber` varchar(20) NOT NULL,
  `RoomSatatus` varchar(20) NOT NULL,
  `RoomDetails` varchar(100) NOT NULL,
  `MonthlyPrice` varchar(20) NOT NULL,
  `RoomSupplies` text NOT NULL,
  `building_2_id` int(10) NOT NULL
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
  `user_img` varchar(250) NOT NULL,
  `reset_token_hash` varchar(65) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_User`, `user_name`, `Surname`, `user_Day`, `user_Month`, `user_Year`, `Age`, `Job`, `Card_Address`, `Phone`, `Birthday`, `Gender`, `Email`, `user_password`, `m_level`, `user_img`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'แบงค์', 'ครับผมเป็นเกย์', '11', 'August', '2004', '20', 'โปรแกรมเมอร์', 'มจพ', '1234567890', '', 'man', 'B@gmail.com', '123', 'User', '59096824220250228_143300.png', NULL, NULL),
(2, 'orasa', 'sapram', '20', 'May', '2004', '20', 'programer', 'มจพ', '0981346885', '', 'woman', 'orasa.sapram.2512@gmail.com', 'orasa2005', 'User', '55526479420250225_141019.png', 'fbde77c68bb49174f0906a4a5d7d15c441962ecec8055e4cff141828ac5d0743', '2025-03-04 12:02:03'),
(3, 'ชายหนุ่ม', 'คนเหนือ', '11', 'September', '2004', '20', 'โปรแกรมเมอร์', 'มจพ', '0123456789', '', 'man', 'Ba@gmail.com', '1234', 'User', '152900341820250225_214229.jpg', NULL, NULL),
(4, 'ชายหนุ่ม', 'คนเหนือหิวข้าว', '11', 'September', '2004', '20', 'โปรแกรมเมอร์ตัวยง', 'มจพ', '0123456789', '', 'man', 'Basd@gmail.com', '1234', 'User', '159717944020250225_214343.jpg', NULL, NULL),
(5, 'ของแท้', 'มาแล้ว', '11', 'August', '2004', '20', 'โปรแกรมเมอร์ตัวยงครับ', 'มจพ asd', '0123956789', '', 'man', 'wuttipong10113@gmail.com', '12345', 'User', '48072174620250227_025145.png', 'd7d7b6ee298b4f5bbdf8fe78e08b62657e54fa67e6b3c1e1e89222a3a2960172', '2025-03-04 12:07:43');

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
(1, 'Bchouseforrent1@gmail.com', 'Owner0987654321', 'admin'),
(2, 'ad@gmail.com', 'a', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id_Booking`);

--
-- Indexes for table `building_1`
--
ALTER TABLE `building_1`
  ADD PRIMARY KEY (`building_1_id`);

--
-- Indexes for table `building_2`
--
ALTER TABLE `building_2`
  ADD PRIMARY KEY (`building_2_id`);

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
-- Indexes for table `room_building_1`
--
ALTER TABLE `room_building_1`
  ADD PRIMARY KEY (`Id_Room`);

--
-- Indexes for table `room_building_2`
--
ALTER TABLE `room_building_2`
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
-- AUTO_INCREMENT for table `building_1`
--
ALTER TABLE `building_1`
  MODIFY `building_1_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `building_2`
--
ALTER TABLE `building_2`
  MODIFY `building_2_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `room_building_1`
--
ALTER TABLE `room_building_1`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_building_2`
--
ALTER TABLE `room_building_2`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `web_admin`
--
ALTER TABLE `web_admin`
  MODIFY `Id_Admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
