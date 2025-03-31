-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2025 at 09:48 PM
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
(6, 2, 'orasa', 'sapram', '20', '15-25', 'นักเรียน/นักศึกษา', '4', '1', '2', '5000', '2567-03-17', '2567-04-17', 'สำเร็จ', '2', '2025-03-26 11:31:59'),
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
(1, 1, 25, 'แบงค์', 'ครับผม', '20', '1234567890', 'excellent', '5555555', '2025-03-28 22:48:15');

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
(12, '89812505020250319_1114255.jpg', '1', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '4422627720250326_2108531.jpg', '4422627720250326_2108532.jpg', '4422627720250326_2108533.jpg', '4422627720250326_2108534.jpg', '4422627720250326_2108535.jpg', '4422627720250326_2108536.jpg'),
(14, '100587344320250326_2112520.jpg', '2', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '100587344320250326_2112521.jpg', '100587344320250326_2112522.jpg', '100587344320250326_2112523.jpg', '100587344320250326_2112524.jpg', '100587344320250326_2112525.jpg', '100587344320250326_2112526.jpg'),
(15, '85566655720250326_2113460.jpg', '3', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '85566655720250326_2113461.jpg', '85566655720250326_2113462.jpg', '85566655720250326_2113463.jpg', '85566655720250326_2113464.jpg', '85566655720250326_2113465.jpg', '85566655720250326_2113466.jpg'),
(16, '62485473120250326_2114230.jpg', '4', 'ไม่ว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 1, '1', '62485473120250326_2114231.jpg', '62485473120250326_2114232.jpg', '62485473120250326_2114233.jpg', '62485473120250326_2114234.jpg', '62485473120250326_2114235.jpg', '62485473120250326_2114236.jpg'),
(17, '128103170420250326_2115080.jpg', '5', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '128103170420250326_2115081.jpg', '128103170420250326_2115082.jpg', '128103170420250326_2115083.jpg', '128103170420250326_2115084.jpg', '128103170420250326_2115085.jpg', '128103170420250326_2115086.jpg'),
(18, '68975409420250326_2116000.jpg', '6', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '68975409420250326_2116001.jpg', '68975409420250326_2116002.jpg', '68975409420250326_2116003.jpg', '68975409420250326_2116004.jpg', '68975409420250326_2116005.jpg', '68975409420250326_2116006.jpg'),
(19, '203934285820250326_2117190.jpg', '7', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '203934285820250326_2117191.jpg', '203934285820250326_2117192.jpg', '203934285820250326_2117193.jpg', '203934285820250326_2117194.jpg', '203934285820250326_2117195.jpg', '203934285820250326_2117196.jpg'),
(20, '57981926020250326_2118020.jpg', '8', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 2, '1', '57981926020250326_2118021.jpg', '57981926020250326_2118022.jpg', '57981926020250326_2118023.jpg', '57981926020250326_2118024.jpg', '57981926020250326_2118025.jpg', '57981926020250326_2118026.jpg'),
(21, '96343947020250326_2119020.jpg', '9', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '96343947020250326_2119021.jpg', '96343947020250326_2119022.jpg', '96343947020250326_2119023.jpg', '96343947020250326_2119024.jpg', '96343947020250326_2119025.jpg', '96343947020250326_2119026.jpg'),
(22, '186085301820250326_2121010.jpg', '10', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '186085301820250326_2121011.jpg', '186085301820250326_2121012.jpg', '186085301820250326_2121013.jpg', '186085301820250326_2121014.jpg', '186085301820250326_2121015.jpg', '186085301820250326_2121016.jpg'),
(23, '89468256120250326_2121520.jpg', '11', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '89468256120250326_2121521.jpg', '89468256120250326_2121522.jpg', '89468256120250326_2121523.jpg', '89468256120250326_2121524.jpg', '89468256120250326_2121525.jpg', '89468256120250326_2121526.jpg'),
(24, '174704341220250326_2122360.jpg', '12', 'ห้องว่าง', '3.2*5.2', '', '2500', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ1ตัว พัดลม', 3, '1', '174704341220250326_2122361.jpg', '174704341220250326_2122362.jpg', '174704341220250326_2122363.jpg', '174704341220250326_2122364.jpg', '174704341220250326_2122365.jpg', '174704341220250326_2122366.jpg'),
(25, '133089883220250326_2133090.jpg', '13', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '133089883220250326_2133091.jpg', '133089883220250326_2133092.jpg', '133089883220250326_2133093.jpg', '133089883220250326_2133094.jpg', '133089883220250326_2133095.jpg', '133089883220250326_2133096.jpg'),
(26, '83134839420250326_2132230.jpg', '14', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '83134839420250326_2132231.jpg', '83134839420250326_2132232.jpg', '83134839420250326_2132233.jpg', '83134839420250326_2132234.jpg', '83134839420250326_2132235.jpg', '83134839420250326_2132236.jpg'),
(27, '91851209820250326_2130550.jpg', '15', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '91851209820250326_2130551.jpg', '91851209820250326_2130552.jpg', '91851209820250326_2130553.jpg', '91851209820250326_2130554.jpg', '91851209820250326_2130555.jpg', '91851209820250326_2130556.jpg'),
(28, '212126327020250326_2130110.jpg', '16', 'ห้องว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 4, '1', '212126327020250326_2130111.jpg', '212126327020250326_2130112.jpg', '212126327020250326_2130113.jpg', '212126327020250326_2130114.jpg', '212126327020250326_2130115.jpg', '212126327020250326_2130116.jpg'),
(29, '124566049920250330_0140230.png', '17', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 5, '1', '90254103120250326_2128501.jpg', '90254103120250326_2128502.jpg', '90254103120250326_2128503.jpg', '90254103120250326_2128504.jpg', '90254103120250326_2128505.jpg', '90254103120250326_2128506.jpg'),
(30, '109757158620250330_0138070.png', '18', 'ไม่ว่าง', '3.2*5.2', '', '2800', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว พัดลม', 5, '1', '109757158620250330_0138071.jpg', '196181058020250326_2129312.jpg', '196181058020250326_2129313.jpg', '196181058020250326_2129314.jpg', '196181058020250326_2129315.jpg', '196181058020250326_2129316.jpg');

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
(12, '127923211920250326_2139380.jpg', '1', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '127923211920250326_2139381.jpg', '127923211920250326_2139382.jpg', '127923211920250326_2139383.jpg', '127923211920250326_2139384.jpg', '127923211920250326_2139385.jpg', '127923211920250326_2139386.jpg'),
(13, '201640217920250326_2140170.jpg', '2', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '201640217920250326_2140171.jpg', '201640217920250326_2140172.jpg', '201640217920250326_2140173.jpg', '201640217920250326_2140174.jpg', '201640217920250326_2140175.jpg', '201640217920250326_2140176.jpg'),
(14, '206891433420250326_2140520.jpg', '3', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '206891433420250326_2140521.jpg', '206891433420250326_2140522.jpg', '206891433420250326_2140523.jpg', '206891433420250326_2140524.jpg', '206891433420250326_2140525.jpg', '206891433420250326_2140526.jpg'),
(15, '118813094820250326_2141330.jpg', '4', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '118813094820250326_2141331.jpg', '118813094820250326_2141332.jpg', '118813094820250326_2141333.jpg', '118813094820250326_2141334.jpg', '118813094820250326_2141335.jpg', '118813094820250326_2141336.jpg'),
(16, '44545343920250326_2142170.jpg', '5', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '44545343920250326_2142171.jpg', '44545343920250326_2142172.jpg', '44545343920250326_2142173.jpg', '44545343920250326_2142174.jpg', '44545343920250326_2142175.jpg', '44545343920250326_2142176.jpg'),
(17, '49497452420250330_0141080.png', '6', 'ห้องไม่ว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 2, '2', '65918401520250326_2142581.jpg', '65918401520250326_2142582.jpg', '65918401520250326_2142583.jpg', '65918401520250326_2142584.jpg', '65918401520250326_2142585.jpg', '65918401520250326_2142586.jpg'),
(18, '99482545820250330_0140320.png', '4', 'ห้องว่าง', '3.6*6', '', '5000', '7', '100', 'ตู้เสื้อผ้า เตียงนอน ฝักบัว โต๊ะ2ตัว แอร์ ระเบียงหลังห้อง', 1, '2', '158103997520250326_2143441.jpg', '158103997520250326_2143442.jpg', '158103997520250326_2143443.jpg', '158103997520250326_2143444.jpg', '158103997520250326_2143445.jpg', '158103997520250326_2143446.jpg');

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
  MODIFY `Id_Review` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
