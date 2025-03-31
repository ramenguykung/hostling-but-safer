<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');

if ($_SESSION['m_level'] != 'admin') {
    Header("Location: index.php");
}

$Id_Room = mysqli_real_escape_string($con, $_POST["Id_Room"]);
$RoomNumber = mysqli_real_escape_string($con, $_POST["RoomNumber"]);
$MonthlyPrice = mysqli_real_escape_string($con, $_POST["MonthlyPrice"]);
$Room_Dimensions = mysqli_real_escape_string($con, $_POST["Room_Dimensions"]);
$building_2_id = mysqli_real_escape_string($con, $_POST["building_2_id"]);
$ค่าไฟ = mysqli_real_escape_string($con, $_POST["ค่าไฟ"]);
$ค่าน้ำ = mysqli_real_escape_string($con, $_POST["ค่าน้ำ"]);
$RoomSupplies = mysqli_real_escape_string($con, $_POST["RoomSupplies"]);
$statusrooom = mysqli_real_escape_string($con, $_POST["statusrooom"]);

$date1 = date("Ymd_His");
$numrand = (mt_rand());
$image_urls = array_fill(0, 7, '');

// เตรียมการจัดเก็บรูปภาพ
foreach ($_FILES["Room_img"]["name"] as $key => $name) {
    $upload = $_FILES["Room_img"]["name"][$key];
    if ($upload != '') {
        $path = "../Room_img/";
        $type = strrchr($_FILES["Room_img"]["name"][$key], ".");
        $newname = $numrand . $date1 . $key . $type;
        $path_copy = $path . $newname;
        $path_link = "../Room_img/" . $newname;

        // ลบรูปเก่าหากมี
        if ($_POST["Room_img0"][$key] != '' && file_exists("../Room_img/" . $_POST["Room_img0"][$key])) {
            unlink("../Room_img/" . $_POST["Room_img0"][$key]);
        }

        // อัปโหลดรูปใหม่
        move_uploaded_file($_FILES["Room_img"]["tmp_name"][$key], $path_copy);
        $image_urls[$key] = $newname; // บันทึกชื่อรูปภาพลงใน array
    } else {
        // ถ้าไม่มีการอัปโหลดรูปใหม่ ใช้รูปเดิม
        $image_urls[$key] = $_POST["Room_img0"][$key];
    }
}

// ตรวจสอบความซ้ำก่อนแก้ไข
$sql_check = "SELECT * FROM room_building_2 
              WHERE RoomNumber = '$RoomNumber' 
              AND building_2_id = '$building_2_id' 
              AND Id_Room != '$Id_Room'"; // ไม่รวมข้อมูลเดิม
$result_check = mysqli_query($con, $sql_check) or die("Error in query: $sql_check " . mysqli_error($con));
$row_check = mysqli_num_rows($result_check);

if ($row_check > 0) {
    // หากพบว่าห้องซ้ำในชั้นเดียวกัน
    echo '<script>';
    echo "alert('Error: Room $RoomNumber already exists on Floor $building_2_id. Please choose a different RoomNumber or Floor.');";
    echo "window.history.back();";
    echo '</script>';
} else {
    // ดำเนินการแก้ไขข้อมูล
    $sql = "UPDATE room_building_2 SET 
            RoomNumber='$RoomNumber',
            RoomSatatus='$statusrooom',
            Room_Dimensions='$Room_Dimensions',
            MonthlyPrice='$MonthlyPrice',
            ค่าไฟ='$ค่าไฟ',
            ค่าน้ำ='$ค่าน้ำ',
            RoomSupplies='$RoomSupplies',
            building_2_id='$building_2_id',
            Room_img='{$image_urls[0]}',
            Room_img1='{$image_urls[1]}',
            Room_img2='{$image_urls[2]}',
            Room_img3='{$image_urls[3]}',
            Room_img4='{$image_urls[4]}',
            Room_img5='{$image_urls[5]}',
            Room_img6='{$image_urls[6]}'
            WHERE Id_Room=$Id_Room";

    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    mysqli_close($con);

    if ($result) {
        echo '<script>';
        echo "alert('Room updated successfully!');";
        echo "window.location='Admin-room.php?act=building_2';";
        echo '</script>';
    } else {
        echo '<script>';
        echo "alert('Error: Unable to update room.');";
        echo "window.history.back();";
        echo '</script>';
    }
}
?>
