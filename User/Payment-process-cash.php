<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');

if ($_SESSION['m_level'] != 'User') {
    Header("Location: index.php");
}
$Id_Booking = mysqli_real_escape_string($con, $_POST["booking_id"]);
$Method = mysqli_real_escape_string($con, $_POST["Method"]);
$Totalexpenses = mysqli_real_escape_string($con, $_POST["Totalexpenses"]);
$Payoncontractdate = mysqli_real_escape_string($con, $_POST["Payoncontractdate"]);

$sql = "INSERT INTO deposit_payment
            (
                Id_Booking,
                Method,
                Totalexpenses,
                Payoncontractdate
            )
            VALUES
            (
                '$Id_Booking',
                '$Method',
                '$Totalexpenses',
                '$Payoncontractdate'
             
            )";

$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
mysqli_close($con);

if ($result) {
    echo '<script>';
    echo "window.location='Payment-Success.php';";
    echo '</script>';
} else {
    echo '<script>';
    echo "alert('เพิ่มห้อง ไม่สำเร็จ');";
    echo "window.location='index.php';";
    echo '</script>';
}
