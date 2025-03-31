<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');

if ($_SESSION['m_level'] != 'User') {
    header("Location: index.php");
    exit;
}

// รับค่า POST และทำการ sanitize ข้อมูล
$Id_User = mysqli_real_escape_string($con, $_POST["Id_User"]);
$Id_Room = mysqli_real_escape_string($con, $_POST["Id_Room"]);
$totalGuest = mysqli_real_escape_string($con, $_POST["totalGuest"]);
$rentalStart = mysqli_real_escape_string($con, $_POST["rentalStart"]);
$rentalEnd = mysqli_real_escape_string($con, $_POST["rentalEnd"]);
$user_name = mysqli_real_escape_string($con, $_POST["user_name"]);
$Surname = mysqli_real_escape_string($con, $_POST["Surname"]);
$Job = mysqli_real_escape_string($con, $_POST["Job"]);
$Roomprice = mysqli_real_escape_string($con, $_POST["Roomprice"]);
$RoomNumber = mysqli_real_escape_string($con, $_POST["RoomNumber"]);
$Statuss = mysqli_real_escape_string($con, $_POST["Statuss"]);
$RoomSatatus = mysqli_real_escape_string($con, $_POST["RoomSatatus"]);

$building_id = mysqli_real_escape_string($con, $_POST["building_id"]);
$Building = mysqli_real_escape_string($con, $_POST["Building"]);

// ตรวจสอบอายุและกำหนดช่วงอายุ
if (isset($_POST["Age"])) {
    $Age = mysqli_real_escape_string($con, $_POST["Age"]);
    if (is_numeric($Age)) {
        $Age = (int)$Age;
        if ($Age <= 25) $Age_range = "15-25";
        elseif ($Age <= 30) $Age_range = "26-30";
        elseif ($Age <= 40) $Age_range = "31-40";
        elseif ($Age <= 50) $Age_range = "41-50";
        elseif ($Age <= 60) $Age_range = "51-60";
        else $Age_range = "60+";
    } else {
        $Age_range = "ไม่ระบุ";
    }
}

// คำสั่ง SQL สำหรับการ insert ข้อมูล
$sql = "INSERT INTO booking
        (Id_User, user_name, Surname, Age, Age_range, Job, RoomNumber, floor, Building, Roomprice, Start_Date, End_Date, Statuss, Number_of_guests)
        VALUES
        ('$Id_User', '$user_name', '$Surname', '$Age', '$Age_range', '$Job', '$RoomNumber', '$building_id', '$Building', '$Roomprice', '$rentalStart', '$rentalEnd', '$Statuss', '$totalGuest')";

$sqll = "UPDATE room_building_2 SET 
    
RoomSatatus='$RoomSatatus'
WHERE Id_Room=$Id_Room
 ";

$resultt = mysqli_query($con, $sqll) or die("Error in query: $sqll " . mysqli_error());

// ทำการ execute SQL
$result = mysqli_query($con, $sql);

if ($result) {
    // ดึง ID ของการจองล่าสุดที่ถูก insert เข้าไป
    $last_id = mysqli_insert_id($con);

    // Redirect ไปที่หน้า Payment.php พร้อมกับ ID ที่ดึงได้
    echo '<form id="redirectForm" action="Payment.php" method="POST">';
    echo '<input type="hidden" name="act" value="Payment">';
    echo '<input type="hidden" name="ID" value="' . $last_id . '">';
    echo '</form>';
    echo '<script>document.getElementById("redirectForm").submit();</script>';
} else {
    // หากไม่สามารถ insert ข้อมูลได้
    echo '<script>';
    echo "alert('ไม่สามารถเพิ่มข้อมูลการจองได้');";
    echo "window.location='index.php';";
    echo '</script>';
}

mysqli_close($con);
