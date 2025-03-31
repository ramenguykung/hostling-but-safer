-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2025 at 12:42 PM
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
  `Roomprice` varchar(10) NOT NULL,
  `Start_Date` varchar(20) NOT NULL,
  `End_Date` varchar(20) NOT NULL,
  `Statuss` varchar(20) NOT NULL,
  `Number_of_guests` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `Date_booking` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id_Booking`, `Id_User`, `user_name`, `Surname`, `Age`, `Age_range`, `Job`, `RoomNumber`, `floor`, `Building`, `Roomprice`, `Start_Date`, `End_Date`, `Statuss`, `Number_of_guests`, `Date_booking`) VALUES
(1, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '1', '1', '1', '2500', '2567-06-17', '2567-07-10', 'ไม่สำเร็จ', '1', '2025-03-29 12:22:10'),
(2, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '2', '1', '1', '2500', '2567-06-17', '2567-07-10', 'สำเร็จ', '1', '2025-03-28 17:24:42'),
(3, 3, 'ชายหนุ่ม', 'คนเหนือ', '25', '15-25', 'พนักงานบริษัท', '1', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '1', '2025-03-25 17:29:52'),
(4, 4, 'ชายหนุ่ม', 'คนเหนือหิวข้าว', '30', '26-30', 'ครู/อาจารย์', '2', '2', '1', '2500', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-23 22:16:41'),
(5, 5, 'ของแท้', 'มาแล้ว', '35', '31-40', 'ข้าราชการ', '3', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-23 22:16:47'),
(6, 2, 'orasa', 'sapram', '20', '15-25', 'นักเรียน/นักศึกษา', '4', '1', '2', '5000', '2567-03-17', '2567-04-17', 'ไม่สำเร็จ', '2', '2025-03-30 21:54:39'),
(7, 1, 'อรสา', 'ทราบรัมย์', '20', '15-25', 'นักเรียน/นักศึกษา\n', '5', '2', '2', '5000', '2568-03-26', '2568-06-30', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-26 11:38:10'),
(8, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '17', '5', '1', '2800', '2025-03-20', '2025-04-06', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-27 21:02:36'),
(9, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '13', '4', '1', '2800', '2025-03-27', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-27 21:46:25'),
(10, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '13', '4', '1', '2800', '2025-03-27', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-27 21:47:18'),
(11, 9, 'อรสา', 'ทราบรัมย์', '20', '15-25', 'คนขับรถ', '17', '5', '1', '2800', '2025-03-01', '2025-03-30', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-27 21:50:09'),
(12, 9, 'อรสา', 'ทราบรัมย์', '20', '15-25', 'คนขับรถ', '17', '5', '1', '2800', '2025-03-27', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '2', '2025-03-27 21:53:49'),
(13, 9, 'อรสา', 'ทราบรัมย์', '20', '15-25', 'คนขับรถ', '15', '4', '1', '2800', '2025-03-24', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-27 21:55:45'),
(14, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '17', '5', '1', '2800', '2025-03-27', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '2', '2025-03-27 21:57:34'),
(16, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '17', '5', '1', '2800', '2025-03-01', '2025-03-28', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-28 05:53:46'),
(17, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '18', '5', '1', '2800', '2025-02-01', '2025-06-08', 'รอตรวจสอบการชำระเงิน', '1', '2025-03-28 05:55:56'),
(22, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '4', '2', '2', '5000', '2025-03-01', '2025-03-30', 'รอตรวจสอบการชำระเงิน', '2', '2025-03-28 06:19:31'),
(23, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '3', '1', '2', '5000', '2025-03-01', '2025-03-30', 'รอตรวจสอบการชำระเงิน', '2', '2025-03-28 06:19:55'),
(24, 1, 'แบงค์', 'ครับผม', '20', '15-25', 'นักเรียน/นักศึกษา', '15', '4', '1', '2800', '2025-03-14', '2025-03-30', 'ไม่สำเร็จ', '2', '2025-03-29 11:10:47');

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
  `Payoncontractdate` varchar(10) NOT NULL,
  `Totalexpenses` int(10) NOT NULL,
  `payment_img` varchar(200) NOT NULL,
  `Id_Booking` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit_payment`
--

INSERT INTO `deposit_payment` (`Id_Payment`, `Date`, `Method`, `Payoncontractdate`, `Totalexpenses`, `payment_img`, `Id_Booking`) VALUES
(1, '2025-03-29 12:58:30', 'QR Code', '2250', 4500, 'payman.png', 1),
(2, '2025-03-29 12:59:23', 'cash', '4500', 4500, '', 2),
(3, '2025-03-29 12:59:55', 'QR Code', '3500', 7000, 'payman.png', 3),
(4, '2025-03-29 12:57:27', 'cash', '4500', 4500, '', 4),
(5, '2025-03-29 13:00:21', 'QR Code', '7000', 7000, 'payman.png', 5),
(6, '2025-03-29 12:52:51', 'QR Code', '3500', 7000, 'payman.png', 6),
(7, '2025-03-29 12:52:40', 'QR Code', '3500', 7000, 'payman.png', 7),
(9, '2025-03-29 13:01:13', 'QR Code', '2400', 4800, '90705325520250328_045415.png', 12),
(10, '2025-03-29 12:50:09', 'QR Code', '2400', 4800, '207663751320250328_045554.pdf', 13),
(12, '2025-03-29 12:27:10', 'QR Code', '2400', 4800, '166077809920250328_045755.png', 14);

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
  `Age` varchar(5) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Id_Review`, `id_user`, `Id_Booking`, `Name`, `Lastname`, `Age`, `Phone`, `Rating`, `Comment`, `Date`) VALUES
(1, 1, 25, 'แบงค์', 'ครับผม', '20', '1234567890', 'excellent', '5555555', '2025-03-28 22:48:15'),
(2, 2, 6, 'orasa', 'sapram', '20', '0981346885', 'average', 'edas', '2025-03-30 21:53:47');

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
(12, '90615937320250331_1440020.jpg', '1', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '90615937320250331_1440021.jpg', '90615937320250331_1440022.jpg', '90615937320250331_1440023.jpg', '90615937320250331_1440024.jpg', '90615937320250331_1440025.jpg', '90615937320250331_1440026.jpg'),
(14, '10321208120250331_1439210.jpg', '2', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '10321208120250331_1439211.jpg', '10321208120250331_1439212.jpg', '10321208120250331_1439213.jpg', '10321208120250331_1439214.jpg', '10321208120250331_1439215.jpg', '10321208120250331_1439216.jpg'),
(15, '179091691120250331_1438320.jpg', '3', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '179091691120250331_1438321.jpg', '179091691120250331_1438322.jpg', '179091691120250331_1438323.jpg', '179091691120250331_1438324.jpg', '179091691120250331_1438325.jpg', '179091691120250331_1438326.jpg'),
(16, '12390511420250331_1437480.jpg', '4', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '12390511420250331_1437481.jpg', '12390511420250331_1437482.jpg', '12390511420250331_1437483.jpg', '12390511420250331_1437484.jpg', '12390511420250331_1437485.jpg', '12390511420250331_1437486.jpg'),
(17, '214594851520250331_1437000.jpg', '5', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '214594851520250331_1437001.jpg', '214594851520250331_1437002.jpg', '214594851520250331_1437003.jpg', '214594851520250331_1437004.jpg', '214594851520250331_1437005.jpg', '214594851520250331_1437006.jpg'),
(18, '160697613720250331_1436150.jpg', '6', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '160697613720250331_1436151.jpg', '160697613720250331_1436152.jpg', '160697613720250331_1436153.jpg', '160697613720250331_1436154.jpg', '160697613720250331_1436155.jpg', '160697613720250331_1436156.jpg'),
(19, '210453394220250331_1435180.jpg', '7', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '210453394220250331_1435181.jpg', '210453394220250331_1435182.jpg', '210453394220250331_1435183.jpg', '210453394220250331_1435184.jpg', '210453394220250331_1435185.jpg', '210453394220250331_1435186.jpg'),
(20, '137254031520250331_1433540.jpg', '8', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '137254031520250331_1433541.jpg', '137254031520250331_1433542.jpg', '137254031520250331_1433543.jpg', '137254031520250331_1433544.jpg', '137254031520250331_1433545.jpg', '137254031520250331_1433546.jpg'),
(21, '88422232020250331_1433060.jpg', '9', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '88422232020250331_1433061.jpg', '88422232020250331_1433062.jpg', '88422232020250331_1433063.jpg', '88422232020250331_1433064.jpg', '88422232020250331_1433065.jpg', '88422232020250331_1433066.jpg'),
(22, '138868655920250331_1432240.jpg', '10', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '138868655920250331_1432241.jpg', '138868655920250331_1432242.jpg', '138868655920250331_1432243.jpg', '138868655920250331_1432244.jpg', '138868655920250331_1432245.jpg', '138868655920250331_1432246.jpg'),
(23, '23495240520250331_1431150.jpg', '11', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '23495240520250331_1431151.jpg', '23495240520250331_1431152.jpg', '23495240520250331_1431153.jpg', '23495240520250331_1431154.jpg', '23495240520250331_1431155.jpg', '23495240520250331_1431156.jpg'),
(24, '176637619120250331_1430350.jpg', '12', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '176637619120250331_1430351.jpg', '176637619120250331_1430352.jpg', '176637619120250331_1430353.jpg', '176637619120250331_1430354.jpg', '176637619120250331_1430355.jpg', '176637619120250331_1430356.jpg'),
(25, '27442477120250331_1427510.jpg', '13', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '27442477120250331_1427511.jpg', '27442477120250331_1427512.jpg', '27442477120250331_1427513.jpg', '27442477120250331_1427514.jpg', '27442477120250331_1427515.jpg', '27442477120250331_1427516.jpg'),
(26, '208999534320250331_1424340.jpg', '14', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '208999534320250331_1424341.jpg', '208999534320250331_1424342.jpg', '208999534320250331_1424343.jpg', '208999534320250331_1424344.jpg', '208999534320250331_1424345.jpg', '208999534320250331_1424346.jpg'),
(27, '137982805520250331_1423460.jpg', '15', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '137982805520250331_1423461.jpg', '137982805520250331_1423462.jpg', '137982805520250331_1423463.jpg', '137982805520250331_1423464.jpg', '137982805520250331_1423465.jpg', '137982805520250331_1423466.jpg'),
(28, '120628207320250331_1422530.jpg', '16', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '120628207320250331_1422531.jpg', '120628207320250331_1422532.jpg', '120628207320250331_1422533.jpg', '120628207320250331_1422534.jpg', '120628207320250331_1422535.jpg', '212126327020250326_2130116.jpg'),
(29, '33843741220250331_1421350.jpg', '17', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 5, '1', '33843741220250331_1421351.jpg', '33843741220250331_1421352.jpg', '33843741220250331_1421353.jpg', '33843741220250331_1421354.jpg', '33843741220250331_1421355.jpg', '33843741220250331_1421356.jpg'),
(30, '70415750820250331_1417160.jpg', '18', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 5, '1', '70415750820250331_1417161.jpg', '70415750820250331_1417162.jpg', '70415750820250331_1417163.jpg', '70415750820250331_1417164.jpg', '70415750820250331_1417165.jpg', '70415750820250331_1417166.jpg');

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
(12, '178217486520250331_1445130.jpg', '1', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '178217486520250331_1445131.jpg', '178217486520250331_1445132.jpg', '178217486520250331_1445133.jpg', '178217486520250331_1445134.jpg', '178217486520250331_1445135.jpg', '178217486520250331_1445136.jpg'),
(13, '11856244420250331_1444100.jpg', '2', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '11856244420250331_1444101.jpg', '11856244420250331_1444102.jpg', '11856244420250331_1444103.jpg', '11856244420250331_1444104.jpg', '11856244420250331_1444105.jpg', '11856244420250331_1444106.jpg'),
(14, '128011852520250331_1443300.jpg', '3', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '128011852520250331_1443301.jpg', '128011852520250331_1443302.jpg', '128011852520250331_1443303.jpg', '128011852520250331_1443304.jpg', '128011852520250331_1443305.jpg', '128011852520250331_1443306.jpg'),
(15, '19344430620250331_1442500.jpg', '4', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '19344430620250331_1442501.jpg', '19344430620250331_1442502.jpg', '19344430620250331_1442503.jpg', '19344430620250331_1442504.jpg', '19344430620250331_1442505.jpg', '19344430620250331_1442506.jpg'),
(16, '118315993920250331_1442100.jpg', '5', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '118315993920250331_1442101.jpg', '118315993920250331_1442102.jpg', '118315993920250331_1442103.jpg', '118315993920250331_1442104.jpg', '118315993920250331_1442105.jpg', '118315993920250331_1442106.jpg'),
(17, '127107837520250331_1441280.jpg', '6', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '127107837520250331_1441281.jpg', '127107837520250331_1441282.jpg', '127107837520250331_1441283.jpg', '127107837520250331_1441284.jpg', '127107837520250331_1441285.jpg', '127107837520250331_1441286.jpg'),
(18, '103369361220250331_1440460.jpg', '4', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '103369361220250331_1440461.jpg', '103369361220250331_1440462.jpg', '103369361220250331_1440463.jpg', '103369361220250331_1440464.jpg', '103369361220250331_1440465.jpg', '103369361220250331_1440466.jpg');

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
(1, 'แบงค์', 'ครับผม', '11', 'August', '2004', '20', '15-25', 'นักเรียน/นักศึกษา', 'มจพ', '1234567890', '', 'man', 'B@gmail.com', '123', 'User', '184354751220250328_180720.jpg', NULL, NULL),
(2, 'orasa', 'sapram', '20', 'May', '2004', '20', '', 'programer', 'มจพ', '0981346885', '', 'woman', 'orasa.sapram.2512@gmail.com', 'orasa2005', 'User', '55526479420250225_141019.png', '3e393d674c9fed791481e7bafa0d41b96370ecb2f8a80cab972bce0a211af65c', '2025-03-26 17:05:09'),
(3, 'ชายหนุ่ม', 'คนเหนือ', '11', 'September', '2004', '25', '15-25', 'พนักงานบริษัท', 'มจพ', '0123456789', '', 'man', 'Ba@gmail.com', '1234', 'User', '152900341820250225_214229.jpg', NULL, NULL),
(4, 'ชายหนุ่ม', 'คนเหนือหิวข้าว', '11', 'September', '2004', '30', '26-30', 'ครู/อาจารย์', 'มจพ', '0123456789', '', 'man', 'Basd@gmail.com', '1234', 'User', '159717944020250225_214343.jpg', NULL, NULL),
(5, 'ของแท้', 'มาแล้ว', '11', 'August', '2004', '35', '31-40', 'ข้าราชการ', 'มจพ asd', '0123956789', '', 'man', 'wuttipong10113@gmail.com', '12345', 'User', '48072174620250227_025145.png', 'd7d7b6ee298b4f5bbdf8fe78e08b62657e54fa67e6b3c1e1e89222a3a2960172', '2025-03-04 12:07:43'),
(6, 'อรสา', 'ทราบรัมย์', '20', 'May', '2004', '20', '', 'คนขับรถ', 'มจพ', '0987366598', '', 'woman', 's6604062620042@rmail.kmutnb.ac.th', 'นพฟหฟฟ', 'User', '134614617720250326_154913.svg', NULL, NULL),
(7, 'อรสา', 'ทราบรัมย์', '10', 'February', '2004', '21', '', 'พนักงานขาย', 'มจพ', '0976549876', '', 'woman', 'orasa@gmail.com', 'sapram', 'User', '168232644620250326_155409.svg', NULL, NULL),
(8, 'เค', 'เค', '5', 'January', '0000', '00', '', 'พนักงานบริษัท', '=', '0000000000', '', 'woman', '3@email.com', '=', 'User', '19600872220250326_160019.svg', '75e268f3db45a4c60a28b8ef4031b71ceb322bcd1c212624af6ef218cacac62e', '2025-03-26 17:10:17'),
(9, 'อรสา', 'ทราบรัมย์', '10', 'February', '2004', '20', '', 'คนขับรถ', 'มจพ', '0983745622', '', 'woman', '1@gmail.com', 'นพฟหฟฟ', 'User', '161019213020250326_163326.svg', NULL, NULL);

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
  MODIFY `Id_Booking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
  MODIFY `Id_Payment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Id_Review` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_building_1`
--
ALTER TABLE `room_building_1`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `room_building_2`
--
ALTER TABLE `room_building_2`
  MODIFY `Id_Room` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_User` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `web_admin`
--
ALTER TABLE `web_admin`
  MODIFY `Id_Admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
