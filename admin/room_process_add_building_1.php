<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$RoomNumber = mysqli_real_escape_string($con,$_POST["RoomNumber"]);
	$MonthlyPrice = mysqli_real_escape_string($con,$_POST["MonthlyPrice"]);
	$RoomSatatus = mysqli_real_escape_string($con,$_POST["RoomSatatus"]);
	$Room_Dimensions = mysqli_real_escape_string($con,$_POST["Room_Dimensions"]);
	$building_1_id = mysqli_real_escape_string($con,$_POST["building_1_id"]);
	$ค่าไฟ = mysqli_real_escape_string($con,$_POST["ค่าไฟ"]);
    $ค่าน้ำ = mysqli_real_escape_string($con,$_POST["ค่าน้ำ"]);
	$RoomDetails = mysqli_real_escape_string($con,$_POST["RoomDetails"]);
	$RoomSupplies = mysqli_real_escape_string($con,$_POST["RoomSupplies"]);
	

	$date1 = date("Ymd_His");
$numrand = (mt_rand());
$image_urls = array_fill(0, 7, ''); // เตรียม array สำหรับ URL รูปภาพ 7 ภาพ

foreach ($_FILES["Room_img"]["name"] as $key => $name) {
    $upload = $_FILES["Room_img"]["name"][$key];
    if($upload != '') { 
        $path = "../Room_img/";
        $type = strrchr($_FILES["Room_img"]["name"][$key],".");
        $newname = $numrand . $date1 . $key . $type;
        $path_copy = $path . $newname;
        $path_link = "../Room_img/" . $newname;
        move_uploaded_file($_FILES["Room_img"]["tmp_name"][$key], $path_copy);
        $image_urls[$key] = $newname; // บันทึกชื่อรูปภาพลงใน array
    }
	
}	

	$sql = "INSERT INTO room_building_1
	(
	RoomNumber,
	RoomSatatus,
	Room_Dimensions	,
	RoomDetails,
	MonthlyPrice,
	ค่าไฟ,
    ค่าน้ำ,
	RoomSupplies,
	building_1_id,
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
	'$RoomNumber ',
	'$RoomSatatus',
	'$Room_Dimensions',
	'$RoomDetails',
	'$MonthlyPrice',
	'$ค่าไฟ ',
    '$ค่าน้ำ',
	'$RoomSupplies',
	'$building_1_id',
     '{$image_urls[0]}',
    '{$image_urls[1]}',
    '{$image_urls[2]}',
    '{$image_urls[3]}',
    '{$image_urls[4]}',
    '{$image_urls[5]}',
    '{$image_urls[6]}'
	
	)";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($con);

	if($result){
        echo '<script>';
        echo "alert('เพิ่มห้อง สำเร็จ');";
        echo "window.location='room.php?act=building_1';";
        echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='room.php';";
    echo '</script>';
}
?>