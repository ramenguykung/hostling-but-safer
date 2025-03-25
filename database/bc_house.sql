-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2025 at 11:52 PM
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
  `Id_User` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Age_range` varchar(10) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `RoomNumber` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `floor` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Building` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Room price` varchar(10) NOT NULL,
  `Start_Date` varchar(20) NOT NULL,
  `End_Date` varchar(20) NOT NULL,
  `Statuss` varchar(20) NOT NULL,
  `Number_of_guests` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Date_booking` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id_Booking`, `Id_User`, `user_name`, `Surname`, `Age`, `Age_range`, `Job`, `RoomNumber`, `floor`, `Building`, `Room price`, `Start_Date`, `End_Date`, `Statuss`, `Number_of_guests`, `Date_booking`) VALUES
(1, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '1', '1', '1', '2500', '2567-06-17', '2567-07-10', 'สำเร็จ', '1', '2025-03-23 22:16:25'),
(2, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '2', '1', '1', '2500', '2567-06-17', '2567-07-10', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-23 22:16:28'),
(3, 3, 'ชายหนุ่ม', 'คนเหนือ', '25', '15-25', 'พนักงานบริษัท', '1', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '1', '2025-03-25 17:29:52'),
(4, 4, 'ชายหนุ่ม', 'คนเหนือหิวข้าว', '30', '26-30', 'ครู/อาจารย์', '2', '2', '1', '2500', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-23 22:16:41'),
(5, 5, 'ของแท้', 'มาแล้ว', '35', '31-40', 'ข้าราชการ', '3', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-23 22:16:47'),
(6, 2, 'orasa', 'sapram', '20', '15-25', 'นักเรียน/นักศึกษา', '4', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-23 23:13:57');

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
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Method` varchar(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `payment_img` varchar(200) NOT NULL,
  `Id_Booking` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit_payment`
--

INSERT INTO `deposit_payment` (`Id_Payment`, `Date`, `Method`, `Status`, `payment_img`, `Id_Booking`) VALUES
(1, '2025-03-20 11:01:08', 'QR Code', 0, 'payman.png', 1),
(2, '2025-03-19 17:58:21', 'cash', 0, '', 2),
(3, '2025-03-23 22:20:38', 'QR Code', 0, 'payman.png', 3),
(4, '2025-03-23 22:20:55', 'cash', 0, '', 4),
(5, '2025-03-23 22:21:06', 'QR Code', 0, 'payman.png', 5),
(6, '2025-03-23 23:02:56', 'QR Code', 0, 'payman.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Id_Review` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `Id_Booking` int(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Id_Review`, `id_user`, `Id_Booking`, `Name`, `Lastname`, `Rating`, `Comment`, `Date`) VALUES
(1, 1, 1, 'แบงค์', 'ครับผม', 'Very Good', 'Very Good Very Good Very Good', '2025-03-25 13:30:48'),
(2, 3, 3, 'ชายหนุ่ม', 'คนเหนือ', 'Very Good', 'Very Good Very Good Very Good', '2025-03-25 13:32:38');

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
  `ค่าไฟ` varchar(10) NOT NULL,
  `ค่าน้ำ` varchar(10) NOT NULL,
  `RoomSupplies` text NOT NULL,
  `building_1_id` int(10) NOT NULL,
  `Building` varchar(5) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
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

INSERT INTO `room_building_1` (`Id_Room`, `Room_img`, `RoomNumber`, `RoomSatatus`, `Room_Dimensions`, `RoomDetails`, `MonthlyPrice`, `ค่าไฟ`, `ค่าน้ำ`, `RoomSupplies`, `building_1_id`, `Building`, `Room_img1`, `Room_img2`, `Room_img3`, `Room_img4`, `Room_img5`, `Room_img6`) VALUES
(1, '184881241020250319_1057250.png', '1', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '184881241020250319_1057251.jpg', '184881241020250319_1057252.jpg', '184881241020250319_1057253.jpg', '184881241020250319_1057254.jpg', '184881241020250319_1057255.jpg', '184881241020250319_1057256.jpg'),
(2, '157533165520250319_1101300.png', '2', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '157533165520250319_1101301.jpg', '157533165520250319_1101302.jpg', '157533165520250319_1101303.jpg', '157533165520250319_1101304.jpg', '157533165520250319_1101305.jpg', '157533165520250319_1101306.jpg'),
(3, '110752621120250319_1102570.png', '3', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '110752621120250319_1102571.jpg', '110752621120250319_1102572.jpg', '110752621120250319_1102573.jpg', '110752621120250319_1102574.jpg', '110752621120250319_1102575.jpg', '110752621120250319_1102576.jpg'),
(4, '25196143420250319_1104540.png', '4', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '25196143420250319_1104541.jpg', '25196143420250319_1104542.jpg', '25196143420250319_1104543.jpg', '25196143420250319_1104544.jpg', '25196143420250319_1104545.jpg', '25196143420250319_1104546.jpg'),
(5, '128661565520250319_1105370.png', '5', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '128661565520250319_1105371.jpg', '128661565520250319_1105372.jpg', '128661565520250319_1105373.jpg', '128661565520250319_1105374.jpg', '128661565520250319_1105375.jpg', '128661565520250319_1105376.jpg'),
(6, '128256882820250319_1106380.png', '6', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '167721957420250325_1725351.png', '128256882820250319_1106382.jpg', '128256882820250319_1106383.jpg', '128256882820250319_1106384.jpg', '128256882820250319_1106385.jpg', '128256882820250319_1106386.jpg'),
(9, '205789349120250325_1727140.png', '2', 'ห้องว่าง', '3.2*x5.2', '', '2500', '7', '100', 'saerwaer', 3, '1', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `room_building_2`
--

CREATE TABLE `room_building_2` (
  `Id_Room` int(100) NOT NULL,
  `Room_img` varchar(200) NOT NULL,
  `RoomNumber` varchar(20) NOT NULL,
  `RoomSatatus` varchar(20) NOT NULL,
  `Room_Dimensions` varchar(20) NOT NULL,
  `RoomDetails` text NOT NULL,
  `MonthlyPrice` varchar(20) NOT NULL,
  `ค่าไฟ` varchar(10) NOT NULL,
  `ค่าน้ำ` varchar(10) NOT NULL,
  `RoomSupplies` text NOT NULL,
  `building_2_id` int(10) NOT NULL,
  `Building` varchar(10) NOT NULL,
  `Room_img1` varchar(200) NOT NULL,
  `Room_img2` varchar(200) NOT NULL,
  `Room_img3` varchar(200) NOT NULL,
  `Room_img4` varchar(200) NOT NULL,
  `Room_img5` varchar(200) NOT NULL,
  `Room_img6` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_building_2`
--

INSERT INTO `room_building_2` (`Id_Room`, `Room_img`, `RoomNumber`, `RoomSatatus`, `Room_Dimensions`, `RoomDetails`, `MonthlyPrice`, `ค่าไฟ`, `ค่าน้ำ`, `RoomSupplies`, `building_2_id`, `Building`, `Room_img1`, `Room_img2`, `Room_img3`, `Room_img4`, `Room_img5`, `Room_img6`) VALUES
(1, '2542067120250319_1111040.png', '1', 'ห้องว่าง', '3.6*6 ', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '2542067120250319_1111041.jpg', '2542067120250319_1111042.jpg', '2542067120250319_1111043.jpg', '2542067120250319_1111044.jpg', '2542067120250319_1111045.jpg', '2542067120250319_1111046.jpg'),
(2, '85383819220250319_1113080.png', '2', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '85383819220250319_1113081.jpg', '85383819220250319_1113082.jpg', '85383819220250319_1113083.jpg', '85383819220250319_1113084.jpg', '85383819220250319_1113085.jpg', '85383819220250319_1113086.jpg'),
(3, '89812505020250319_1114250.png', '3', 'ห้องว่าง', '3.6*6 ', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '89812505020250319_1114251.jpg', '89812505020250319_1114252.jpg', '89812505020250319_1114253.jpg', '89812505020250319_1114254.jpg', '89812505020250319_1114255.jpg', '89812505020250319_1114256.jpg'),
(4, '185675916720250319_1115320.png', '4', 'ห้องว่าง', '3.6*6 ', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '185675916720250319_1115321.jpg', '185675916720250319_1115322.jpg', '185675916720250319_1115323.jpg', '185675916720250319_1115324.jpg', '185675916720250319_1115325.jpg', '185675916720250319_1115326.jpg'),
(5, '88300431820250319_1116490.png', '5', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '88300431820250319_1116491.jpg', '88300431820250319_1116492.jpg', '88300431820250319_1116493.jpg', '88300431820250319_1116494.jpg', '88300431820250319_1116495.jpg', '88300431820250319_1116496.jpg'),
(6, '2636551720250319_1117570.png', '6', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '2636551720250319_1117571.jpg', '', '2636551720250319_1117573.jpg', '2636551720250319_1117574.jpg', '2636551720250319_1117575.jpg', '2636551720250319_1117576.jpg');

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
  `Age_range` varchar(10) NOT NULL,
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

INSERT INTO `user` (`Id_User`, `user_name`, `Surname`, `user_Day`, `user_Month`, `user_Year`, `Age`, `Age_range`, `Job`, `Card_Address`, `Phone`, `Birthday`, `Gender`, `Email`, `user_password`, `m_level`, `user_img`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'แบงค์', 'ครับผม', '11', 'August', '2004', '20', '15-25', 'นักเรียน/นักศึกษา', 'มจพ', '1234567890', '', 'man', 'B@gmail.com', '123', 'User', '152900341820250225_214229.jpg', NULL, NULL),
(2, 'orasa', 'sapram', '20', 'May', '2004', '20', '', 'programer', 'มจพ', '0981346885', '', 'woman', 'orasa.sapram.2512@gmail.com', 'orasa2005', 'User', '55526479420250225_141019.png', 'fbde77c68bb49174f0906a4a5d7d15c441962ecec8055e4cff141828ac5d0743', '2025-03-04 12:02:03'),
(3, 'ชายหนุ่ม', 'คนเหนือ', '11', 'September', '2004', '25', '15-25', 'พนักงานบริษัท', 'มจพ', '0123456789', '', 'man', 'Ba@gmail.com', '1234', 'User', '152900341820250225_214229.jpg', NULL, NULL),
(4, 'ชายหนุ่ม', 'คนเหนือหิวข้าว', '11', 'September', '2004', '30', '26-30', 'ครู/อาจารย์', 'มจพ', '0123456789', '', 'man', 'Basd@gmail.com', '1234', 'User', '159717944020250225_214343.jpg', NULL, NULL),
(5, 'ของแท้', 'มาแล้ว', '11', 'August', '2004', '35', '31-40', 'ข้าราชการ', 'มจพ asd', '0123956789', '', 'man', 'wuttipong10113@gmail.com', '12345', 'User', '48072174620250227_025145.png', 'd7d7b6ee298b4f5bbdf8fe78e08b62657e54fa67e6b3c1e1e89222a3a2960172', '2025-03-04 12:07:43');

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
  MODIFY `Id_Booking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `Id_Payment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id_Review` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_building_1`
--
ALTER TABLE `room_building_1`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `room_building_2`
--
ALTER TABLE `room_building_2`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
