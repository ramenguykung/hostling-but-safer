<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');

if ($_SESSION['m_level'] != 'admin') {
    header("Location: index.php");
    exit();
}

$ID = mysqli_real_escape_string($con, $_GET["ID"]);

// ดึงข้อมูลรูปภาพจากฐานข้อมูล
$sql = "SELECT  Room_img1, Room_img2, Room_img3, Room_img4, Room_img5, Room_img6 
        FROM room_building_1 WHERE Id_Room = $ID";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_assoc($result);

if ($row) {
    // ลบไฟล์รูปภาพจากเซิร์ฟเวอร์
    foreach ($row as $imageColumn => $imageFileName) {
        if (!empty($imageFileName) && file_exists("../Room_img/" . $imageFileName)) {
            unlink("../Room_img/" . $imageFileName); // ลบไฟล์
        }
    }

    $sql = "UPDATE room_building_1 
        SET 
            Room_img1 = NULL, 
            Room_img2 = NULL, 
            Room_img3 = NULL, 
            Room_img4 = NULL, 
            Room_img5 = NULL, 
            Room_img6 = NULL 
        WHERE Id_Room = $ID";
    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());

    if ($result) {
        echo "<script type='text/javascript'>";
        echo "alert('images deleted successfully.');";
        echo "window.history.back();";
        echo "</script>";
    } else {
        echo "<script type='text/javascript'>";
        echo "alert('Failed to delete data');";
        echo "</script>";
    }
} else {
    echo "<script type='text/javascript'>";
    echo "alert('No data found for the given ID');";
    echo "</script>";
}

mysqli_close($con);
