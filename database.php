<?php
$host = "localhost";
$dbname = "bc_house";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8"); // ตั้งค่าภาษาฐานข้อมูลให้รองรับภาษาไทย
date_default_timezone_set('Asia/Bangkok'); // ตั้งค่าเขตเวลา

return $mysqli;
?>
