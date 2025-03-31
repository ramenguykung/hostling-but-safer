<?php
session_start();
echo '<meta charset="utf-8">';
include('condb.php');

$m_level = 'User';
$Name = mysqli_real_escape_string($con, $_POST["Name"]);
$Surname = mysqli_real_escape_string($con, $_POST["Surname"]);
$Age = mysqli_real_escape_string($con, $_POST["Age"]);
$Job = mysqli_real_escape_string($con, $_POST["Job"]);
$address = mysqli_real_escape_string($con, $_POST["Card_Address"]);
$Phone = mysqli_real_escape_string($con, $_POST["Phone"]);
$Gender = mysqli_real_escape_string($con, $_POST["Gender"]);
$Email = mysqli_real_escape_string($con, $_POST["Email"]);
$Password = mysqli_real_escape_string($con, $_POST["Password"]);
$Day = mysqli_real_escape_string($con, $_POST["Day"]);
$Month = mysqli_real_escape_string($con, $_POST["Month"]);
$Year = mysqli_real_escape_string($con, $_POST["Year"]);



$date1 = date("Ymd_His");
$numrand = (mt_rand());
$user_img = (isset($_POST['user_img']) ? $_POST['user_img'] : '');
$upload = $_FILES['user_img']['name'];
if ($upload != '') {
	$path = "user_img/";
	$type = strrchr($_FILES['user_img']['name'], ".");
	$newname = $numrand . $date1 . $type;
	$path_copy = $path . $newname;
	$path_link = "user_img/" . $newname;
	move_uploaded_file($_FILES['user_img']['tmp_name'], $path_copy);
}


$check = "
		SELECT Email
		FROM user
		WHERE Email = '$Email'
		";
$result1 = mysqli_query($con, $check) or die(mysqli_error());
$num = mysqli_num_rows($result1);
$check_phone = "
SELECT Phone
FROM user
WHERE Phone = '$Phone'
";
$result_phone = mysqli_query($con, $check_phone) or die(mysqli_error());
$num_phone = mysqli_num_rows($result_phone);

if ($num_phone > 0) {
	echo '<script>';
	echo "alert('ขออภัย หมายเลขโทรศัพท์นี้มีผู้ใช้งานแล้ว กรุณากรอกหมายเลขโทรศัพท์ใหม่อีกครั้ง');";
	echo "window.history.back()";
	echo '</script>';
} else if ($num > 0) {

	echo '<script>';
	echo "alert('ขออภัย Email ของท่านมีผู้ใช้งานแล้ว กรุณากรอก Email ใหม่อีกครั้ง');";
	echo "window.history.back()";
	echo '</script>';
} else {

	$sql = "INSERT INTO user (
		m_level, user_name, Surname, Age, Job,
		Card_Address, Phone, Gender, Email, 
		user_password, user_Day, user_Month, 
		user_Year, user_img
	) VALUES (
		'$m_level', '$Name', '$Surname', '$Age', '$Job',
		'$address', '$Phone', '$Gender', '$Email',
		'$Password', '$Day', '$Month', '$Year', '$newname'
	)";
}



$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
mysqli_close($con);

if ($result) {
	echo '<script>';
	echo "alert('สมัครสมาชิกสำเร็จ ยินดีต้อนรับเข้าสู่ BC House');";
	echo "window.location='formlogin.php';";
	echo '</script>';
} else {
	echo '<script>';
	echo "window.location='index.php';";
	echo '</script>';
}
