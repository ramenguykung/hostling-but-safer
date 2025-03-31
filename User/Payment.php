<?php
include("h.php");
include("../condb.php");

if (!isset($_POST['ID']) || empty($_POST['ID'])) {
    // ถ้าไม่ได้ตั้งค่า ID หรือ ID ว่าง ให้ทำการเปลี่ยนเส้นทางไปยังหน้าอื่น เช่น หน้าแรก หรือ หน้า login
    echo '<script>';
    echo "alert('คุณไม่สามารถเข้าถึงหน้านี้ได้หากยังไม่ได้ทำการจอง');";
    echo "window.location.href = 'index.php';";  // เปลี่ยนเส้นทางไปหน้า index.php
    echo '</script>';
    exit();  // หยุดการทำงานต่อจากนี้
} else {
    $booking_id = intval($_POST['ID']); // Sanitize ID ให้เป็นตัวเลข
    // ใช้ $booking_id ต่อไป เช่น แสดงรายละเอียดการจอง

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC House</title> 
    <link href="../หน้าบ้าน/User_Payment.css" rel="stylesheet">
</head>

<body>
    <div class="Navbar-ontop">
        <div class="nav">
            <a class="btn btn-Light" href="javascript:void(0);" role="button" onclick="window.history.back();" style="text-decoration: none;">
                <img class="img" src="../icon/arrow_back_ios_new.svg" width="30px" height="24px">
            </a>
        </div>
    </div>

    <div class="contaner">
        <div class="text-box">
            <h1>Payment Options</h1>
            <div class="Payment-Select">

                <form action="Payment-Qr.php" method="POST">
                    <input type="hidden" name="act" value="cash">
                    <input type="hidden" name="ID" value="<?php echo $booking_id; ?>">
                    <button type="submit" class="buttonPA" style="text-decoration: none;">
                        <div class="btn-qrcode">
                            <img class="qr" src="../icon/Payment-cash.svg" width="30px" height="30px">
                            <h style="text-decoration: none; color: black;">QR Code</h>
                        </div>
                    </button>
                </form>

                <form action="Payment-cash.php" method="POST">
                    <input type="hidden" name="act" value="cash">
                    <input type="hidden" name="ID" value="<?php echo $booking_id; ?>">
                    <button type="submit" class="buttonPA" style="text-decoration: none;">
                        <div class="btn-cash">
                            <img class="qr" src="../icon/Payment-cash.svg" width="30px" height="30px">
                            <h style="text-decoration: none; color: black;">Cash</h>
                        </div>
                    </button>
                </form>
            </div>

            <div class="text">
                <h2>หมายเหตุ</h2><br>
                <a>1.การชำระเงินในครั้งนี้จะชำระแค่คำมัดจำเท่านั้น</a><br>
                <a>2.ถ้าเลือกชำระแบบ Qr Code กรุณาแนบรูปสลิปการโอนชำระเงินและเข้าทำสัญญาภายใน 7 วัน นับจากจ่ายมัดจำ<br>
                    <a class="comment">*ล็อคห้องให้ 7 วัน ไม่คืนมัดจำทุกกรณี*</a></a><br>
                <a>3.ถ้าเลือกชำระแบบเงินสด เมื่อถึงวันทำสัญญา แล้วยังไม่มีการชำระเงินหรือเข้ามาทำสัญญา <br>
                    ทางหอพักจะทำการปล่อยห้องเป็นห้องว่างทันที<br>
                    <a class="comment">*ล็อคห้องให้ 3 วัน*</a></a>
            </div>
        </div>
    </div>

</body>

</html>