<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit();
if ($_SESSION['m_level'] != 'admin') {
}

$Id_Booking = mysqli_real_escape_string($con, $_POST["Id_Booking"]);

$status = mysqli_real_escape_string($con, $_POST["status"]);

$sql = "UPDATE booking SET 
	Statuss='$status'
	WHERE Id_Booking=$Id_Booking
	 ";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
mysqli_close($con);

if ($result) {
	echo " <script> alert('Status update successful'); </script> ";
	echo " <script> window.location ='Admin-payment.php'; </script> ";
}
