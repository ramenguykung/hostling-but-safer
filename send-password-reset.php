<?php

date_default_timezone_set('Asia/Bangkok'); // ตั้งค่า timezone

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

$mysqli = require __DIR__ . "/database.php";

$sql = "UPDATE user
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE Email = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

$Success = false;

if ($mysqli->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("bchouseforrent1@gmail.com ", 'BC House for rent');
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost//hostling/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {
        $Success = $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
        echo '<script>';
        echo "window.location='Forgotpassword.php';";
        echo '</script>';
    }
}

if ($Success) {
    echo '<script>';
    echo "alert('ส่งอีเมลสำเร็จ โปรดตรวจสอบอีเมลเพื่อ Reset password.');";
    echo "window.location='formlogin.php';";
    echo '</script>';
} else {
    echo '<script>';
    echo "alert('ส่งอีเมลไม่สำเร็จ โปรดตรวจสอบอีเมลอีกครั้ง');";
    echo "window.history.back();";
    echo '</script>';
}
