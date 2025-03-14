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
$Id_Room = mysqli_real_escape_string($con,$_POST["Id_Room"]);
$RoomNumber = mysqli_real_escape_string($con,$_POST["RoomNumber"]);
$MonthlyPrice = mysqli_real_escape_string($con,$_POST["MonthlyPrice"]);
$RoomSatatus = mysqli_real_escape_string($con,$_POST["RoomSatatus"]);
$Room_Dimensions = mysqli_real_escape_string($con,$_POST["Room_Dimensions"]);
$building_2_id = mysqli_real_escape_string($con,$_POST["building_2_id"]);
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
    }else {
        $image_urls[$key] = $_POST["Room_img0"][$key];
    }

}	

	$sql = "UPDATE room_building_2 SET 
	RoomNumber='$RoomNumber',
	RoomSatatus='$RoomSatatus',
	Room_Dimensions='$Room_Dimensions',
	RoomDetails='$RoomDetails',
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
	WHERE Id_Room=$Id_Room
	 ";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	mysqli_close($con);
	
	if($result){
	echo '<script>';
    echo "alert('แก้ไขห้อง สำเร็จ');";
        echo "window.location='room.php?act=building_2';";
    echo '</script>';
	}else{
	echo '<script>';
    echo "window.location='room.php;";
    echo '</script>';
}
?>