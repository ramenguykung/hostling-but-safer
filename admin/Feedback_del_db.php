<?php
session_start();
echo '<meta charset="utf-8">';
include('../condb.php');
if ($_SESSION['m_level'] != 'admin') {
	Header("Location: index.php");
}
$ID  = mysqli_real_escape_string($con, $_GET["ID"]);
$sql = "DELETE FROM review WHERE Id_Review =$ID";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());

mysqli_close($con);
if ($result) {
	echo "<script type='text/javascript'>";
	echo "window.location = 'Admin-comment.php'; ";
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo "window.location = 'Admin-comment.php'; ";
	echo "</script>";
}
