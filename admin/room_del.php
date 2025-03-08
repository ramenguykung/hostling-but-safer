<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
if($_SESSION['m_level']!='admin'){
	Header("Location: index.php");
}
	$ID  = mysqli_real_escape_string($con,$_GET["ID"]);
	$sql = "DELETE FROM room_building_1 WHERE Id_Room =$ID";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());	
	mysqli_close($con);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "window.location='room.php?act=building_1';";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'room.php'; ";
	echo "</script>";
}
?>