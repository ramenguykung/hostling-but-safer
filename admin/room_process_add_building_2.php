<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');

if ($_SESSION['m_level'] != 'admin') {
    Header("Location: index.php");
}

$RoomNumber = mysqli_real_escape_string($con, $_POST["RoomNumber"]);
$MonthlyPrice = mysqli_real_escape_string($con, $_POST["MonthlyPrice"]);
$RoomSatatus = mysqli_real_escape_string($con, $_POST["RoomSatatus"]);
$Room_Dimensions = mysqli_real_escape_string($con, $_POST["Room_Dimensions"]);
$building_2_id = mysqli_real_escape_string($con, $_POST["building_2_id"]);
$Building = mysqli_real_escape_string($con, $_POST["Building"]);
$ค่าไฟ = mysqli_real_escape_string($con, $_POST["ค่าไฟ"]);
$ค่าน้ำ = mysqli_real_escape_string($con, $_POST["ค่าน้ำ"]);
$RoomSupplies = mysqli_real_escape_string($con, $_POST["RoomSupplies"]);

$date1 = date("Ymd_His");
$numrand = (mt_rand());
$image_urls = array_fill(0, 7, ''); // เตรียม array สำหรับ URL รูปภาพ 7 ภาพ

foreach ($_FILES["Room_img"]["name"] as $key => $name) {
    $upload = $_FILES["Room_img"]["name"][$key];
    if ($upload != '') { 
        $path = "../Room_img/";
        $type = strrchr($_FILES["Room_img"]["name"][$key], ".");
        $newname = $numrand . $date1 . $key . $type;
        $path_copy = $path . $newname;
        $path_link = "../Room_img/" . $newname;
        move_uploaded_file($_FILES["Room_img"]["tmp_name"][$key], $path_copy);
        $image_urls[$key] = $newname; // บันทึกชื่อรูปภาพลงใน array
    }
}

// ตรวจสอบว่าห้องซ้ำหรือไม่
$sql_check = "SELECT * FROM room_building_2 
              WHERE RoomNumber = '$RoomNumber' 
              AND building_2_id = '$building_2_id'";
$result_check = mysqli_query($con, $sql_check) or die("Error in query: $sql_check " . mysqli_error($con));
$row_check = mysqli_num_rows($result_check);

if ($row_check > 0) {
    // ถ้าพบว่าห้องซ้ำ
    echo '<script>';
    echo "alert('Error: Room $RoomNumber already exists on Floor $building_2_id. Please choose a different RoomNumber or Floor.');";
    echo "window.location='Admin-room.php?act=add2';";
    echo '</script>';
} else {
    // เพิ่มข้อมูลใหม่
    $sql = "INSERT INTO room_building_2
            (
                RoomNumber,
                Building,
                RoomSatatus,
                Room_Dimensions,
                MonthlyPrice,
                ค่าไฟ,
                ค่าน้ำ,
                RoomSupplies,
                building_2_id,
                Room_img,
                Room_img1,
                Room_img2,
                Room_img3,
                Room_img4,
                Room_img5,
                Room_img6
            )
            VALUES
            (
                '$RoomNumber',
                '$Building',
                '$RoomSatatus',
                '$Room_Dimensions',
                '$MonthlyPrice',
                '$ค่าไฟ',
                '$ค่าน้ำ',
                '$RoomSupplies',
                '$building_2_id',
                '{$image_urls[0]}',
                '{$image_urls[1]}',
                '{$image_urls[2]}',
                '{$image_urls[3]}',
                '{$image_urls[4]}',
                '{$image_urls[5]}',
                '{$image_urls[6]}'
            )";

    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);

    if ($result) {
        echo '<script>';
        echo "alert('เพิ่มห้อง สำเร็จ');";
        echo "window.location='Admin-room.php?act=building_2';";        
        echo '</script>';
    } else {
        echo '<script>';
        echo "alert('เพิ่มห้อง ไม่สำเร็จ');";
        echo "window.location='Admin-room.php?act=building_1';";
        echo '</script>';
    }
}
?>
