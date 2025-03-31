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

$sql = "SELECT * FROM booking 
WHERE Id_Booking = $booking_id 
ORDER BY Id_Booking DESC";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);


$monthlyPrice = $row['Roomprice'];  // ค่าห้องจากฐานข้อมูล
$securityDeposit = 2000;  // ค่าประกัน 2,000 บาท

// คำนวณราคาทั้งหมด
$totalAmount = $monthlyPrice + $securityDeposit;

// สมมติว่าเราได้รับข้อมูลว่าเลือกการชำระแบบไหน (เช่น จากฟอร์ม)


// คำนวณค่ามัดจำและยอดที่ต้องจ่าย

// ถ้าเลือกจ่ายด้วยการโอน
$rentalDepositAmountQRCode = $totalAmount * 0.5;  // 50% ณ ตอนจอง
$baseRentAmountQRCode = $totalAmount * 0.5;  // 50% ณ วันทำสัญญา

// ถ้าเลือกจ่ายด้วยเงินสด
$rentalDepositAmountcash = $totalAmount;  // จ่าย 100% ณ วันจอง
$baseRentAmountcash = 0;  // ไม่ต้องจ่ายอีกครั้ง ณ วันทำสัญญา

// ถ้าไม่ได้เลือกวิธีการชำระ (เช่น ไม่มีการเลือกในฟอร์ม)
// ตัวแปรเหล่านี้จะเป็นข้อมูลที่ใช้ในการแสดงหรือส่งไปยังฟอร์ม
?>
<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment QR</title>
    <link href="../หน้าบ้าน/Payment-Qr.css" rel="stylesheet">

</head>

<body>

    <div class="Payment">
        <div class="PaymentLeft">
            <div class="PaymentLeft-Top">
                <h1> Payment Options</h1>
            </div>

            <div class="btn">
                <div class="btn-qrcode">
                    <img class="qr" src="../icon/qr_code.svg" width="30px" height="30px">
                    <a>QR Code</a>
                </div>
                <form action="Payment-cash.php" method="POST">
                    <input type="hidden" name="act" value="cash">
                    <input type="hidden" name="ID" value="<?php echo $booking_id; ?>">
                    <button type="submit" class="buttonPA" style="text-decoration: none;">
                        <div class="btn-cash">
                            <img class="qr" src="../icon/qr_code.svg" width="30px" height="30px">
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

        <div class="PaymentRight">
            <div class="photo">
                <img class="BQr" src="../icon/qr_code.svg" width="100px" height="100px">
                <a>BC House for Rent</a>
            </div>
            <div class="text-Detailpayment">
                <a>ค่ามัดจำ: <?php echo $rentalDepositAmountQRCode; ?> บาท</a><br>
                <a>จำนวนเงินที่เหลือที่ต้องชำระ ณ วันทำสัญญา: <?php echo $baseRentAmountQRCode; ?> บาท</a><br>
                <a>ค่าใช้จ่ายทั้งหมดที่ต้องโอนชำระ: <?php echo $rentalDepositAmountQRCode; ?> บาท</a>
            </div>
            <form name="register" action="Payment-process-Qr.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="Up-fire">
                    <input type="file" name="img_Payment" class="ButtonFile" required />
                </div>

                <input type="hidden" name="Method" value="QR Code">
                <input type="hidden" name="booking_id" value="<?php echo $booking_id ?>">
                <input type="hidden" name="Totalexpenses" value="<?php echo $totalAmount ?>">
                <input type="hidden" name="Payoncontractdate" value="<?php echo $baseRentAmountQRCode ?>">

                <button type="submit" class="button">
                    <h3 class="submit">Submit</h3>
                </button>
        </div>
    </div>
    </form>

</body>

</html>