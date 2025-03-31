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

$date1 = date("Ymd_His");
$numrand = (mt_rand());
$img_Payment = (isset($_POST['img_Payment']) ? $_POST['img_Payment'] : '');
$upload = $_FILES['img_Payment']['name'];
if ($upload != '') {
    $path = "../img_Payment/";
    $type = strrchr($_FILES['img_Payment']['name'], ".");
    $newname = $numrand . $date1 . $type;
    $path_copy = $path . $newname;
    $path_link = "../img_Payment/" . $newname;
    move_uploaded_file($_FILES['img_Payment']['tmp_name'], $path_copy);
}

$sql = "INSERT INTO deposit_payment
            (
                Id_Booking,
                Method,
                payment_img,
                Totalexpenses,
                Payoncontractdate
            
            )
            VALUES
            (
                '$Id_Booking',
                '$Method',
                '$newname',
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
