<?php
session_start();
include("../condb.php");

// print_r($_SESSION);
// exit();

$member_id = $_SESSION['Id_User'];
$user_name = $_SESSION['user_name'];
$m_level = $_SESSION['m_level'];
$user_img = $_SESSION['user_img'];

// echo $member_id;

if ($m_level != 'User') {
    header("Location: ../logout.php");
}

$sql = "SELECT * FROM user WHERE Id_User = $member_id";
$result = mysqli_query($con, $sql) or die("Error in query:  $sql" . mysqli_error());
$rowuser = mysqli_fetch_array($result);
extract($rowuser);

$user_name = $rowuser['user_name'];
$user_img = $rowuser['user_img'];


// echo $sql;
// exit();
