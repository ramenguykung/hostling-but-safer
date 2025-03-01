<?php
include('condb.php');
$token = $_POST["token"];


$Password = mysqli_real_escape_string($con, $_POST["Password"]);

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

       


$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
  

    echo '<script>';
    echo "alert('token not found');";
    echo "window.location='Forgotpassword.php';";
    echo '</script>';
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {




    echo '<script>';
    echo "alert('token has expired');";
    echo "window.location='Forgotpassword.php';";
    
    echo '</script>';
}




$sql = "UPDATE user
        SET user_password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE Id_User = ?";

$stmt = $mysqli->prepare($sql);

// ใช้ password_hash เพื่อเข้ารหัสรหัสผ่านใหม่ก่อนเก็บในฐานข้อมูล

$stmt->bind_param("ss", $Password, $user["Id_User"]);

$stmt->execute();

echo '<script>';
echo "alert('Password reset successful .');";
echo "window.location='formlogin.php';";
echo '</script>';


?>
