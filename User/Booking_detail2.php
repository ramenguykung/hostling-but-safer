<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>BC House</title>
    <link href="../หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
    <link href="../หน้าบ้าน/Booking_detail.css?v=1.0" rel="stylesheet">
</head>

<body>
    <?php
    $ID = mysqli_real_escape_string($con, $_GET['ID']);
    $sql = "SELECT * FROM room_building_2 as p 
INNER JOIN building_2 as t ON p.building_2_id  = t.building_2_id 
WHERE Id_Room =$ID
ORDER BY p.Id_Room  DESC" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    ?>
    <?php
    // สมมติว่า $row['MonthlyPrice'] คือ ค่าเช่าห้องที่ได้จากฐานข้อมูล
    $monthlyPrice = $row['MonthlyPrice'];  // ค่าห้องจากฐานข้อมูล
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
    <div class="top-navigation-mainhome">
        <div class="left-navH">
            <div class="menu-dividerH">
                <a class="btn btn-Light" href="Booking_page2.php?act=<?php echo $row["building_2_id"] ?>&ID=<?php echo $row["Id_Room"] ?>" role="button" style="text-decoration: none;">
                    <img src="../icon/arrow_back_ios_new.svg" width="24" height="24" alt="">
                </a>
            </div>
        </div>

    </div>

    <div class="divBooking_detail">
        <h1 class="textBookingDetail">Booking Detail </h1>
        <form name="register" action="Booking-process-2.php" method="POST" enctype="multipart/form-data" class="form-horizontal" onsubmit="handleSubmit(event)">
            <input type="hidden" name="Id_User" value="<?php echo $rowuser['Id_User']; ?>">
            <input type="hidden" name="user_name" value="<?php echo $rowuser['user_name']; ?>">
            <input type="hidden" name="Surname" value="<?php echo $rowuser['Surname']; ?>">
            <input type="hidden" name="Age" value="<?php echo $rowuser['Age']; ?>">
            <input type="hidden" name="Job" value="<?php echo $rowuser['Job']; ?>">
            <input type="hidden" name="Roomprice" value="<?php echo $row['MonthlyPrice']; ?>">
            <input type="hidden" name="RoomNumber" value="<?php echo $row['RoomNumber']; ?>">
            <input type="hidden" name="building_id" value="<?php echo $row['building_2_id']; ?>">
            <input type="hidden" name="Building" value="<?php echo $row['Building']; ?>">
            <input type="hidden" name="Id_Room" value="<?php echo $row['Id_Room']; ?>">
            <input type="hidden" name="Statuss" value="รอตรวจสอบการชำระเงิน">
            <input type="hidden" name="RoomSatatus" value="ไม่ว่าง">
            
            <div class="flex-column-div-data">
                <div class="flex-row-divdataform">

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">ชื่อผู้จอง:</h1>
                        <h1 class="textdata"><?php echo $rowuser['user_name']; ?> <?php echo $rowuser['Surname']; ?> </h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">อาคาร:</h1>
                        <h1 class="textdata"><?php echo $row['Building']; ?></h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">ชั้น:</h1>
                        <h1 class="textdata"><?php echo $row['building_2_id']; ?></h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">หมายเลขห้อง:</h1>
                        <h1 class="textdata"><?php echo $row['RoomNumber']; ?></h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">จำนวนผู้เข้าพัก:</h1> <input name="totalGuest" id="totalGuest" class="Textinput" type="text" placeholder="จำนวนผู้เข้าพัก" required>
                        <h1 class="textdata">คน</h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">วันที่เริ่มเข้าพัก:</h1> <input name="rentalStart" id="rentalStart" class="Textinput" type="date" placeholder="วันที่เริ่มเข้าพัก" required>
                        <h1 class="textdata">{rentalStart}:[DD/MM/YYYY]</h1>
                    </div>

                    <div class="flex-column-divd-atatext">
                        <h1 class="textdata">วันที่ย้ายออก:</h1> <input name="rentalEnd" id="rentalEnd" class="Textinput" type="date" placeholder="วันที่ย้ายออก" required>
                        <h1 class="textdata">{rentalEnd}:[DD/MM/YYYY]</h1>
                    </div>
                </div>

                <div class="flex-row-div-dataDetail">

                    <div class="flex-column-div-textdataDetail">
                        <h1 class="textdata">ค่ามัดจำหากผู้จองจ่ายด้วยการโอน:</h1>
                        <h1 class="textdata"> <?php echo $rentalDepositAmountQRCode; ?> บาท</h1>
                    </div>

                    <div class="flex-column-div-textdataDetail">
                        <h1 class="textdata">ค่ามัดจำหากผู้จองจ่ายด้วยเงินสด ณ วันทำสัญญา:</h1>
                        <h1 class="textdata"><?php echo $rentalDepositAmountcash; ?> บาท</h1>
                    </div>

                    <div class="flex-column-div-textdataDetail">
                        <h1 class="textdata">หากผู้จองจ่ายด้วยการโอน จำนวนเงินที่เหลือต้องชำระ ณ วันทำสัญญา :</h1>
                        <h1 class="textdata"><?php echo $baseRentAmountQRCode; ?> บาท</h1>
                    </div>

                    <div class="flex-column-div-textdataDetail">
                        <h1 class="textdata"></h1>ค่าใช้จ่ายรวมทั้งหมดที่ผู้จองต้องจ่าย:<h1 class="textdata"><?php echo $rentalDepositAmountcash; ?> บาท</h1>
                    </div>

                    <br>
                    <button type="submit" class="Button"> <img src="../icon/IconRight.svg" width="20" height="20" alt="logo"></button>

        </form>
    </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const totalGuest = document.getElementById('totalGuest').value;

            const rentalStart = document.getElementById('rentalStart').value;
            const rentalEnd = document.getElementById('rentalEnd').value;

            if (!/^\d+$/.test(totalGuest)) {
                alert('อัตรารวมแขกจะต้องป้อนเป็นตัวเลขเท่านั้น และต้องไม่มีช่องว่างในช่องป้อนข้อมูล.');
                return;
            }

            if (totalGuest > 4) {
    alert('จำนวนคนเข้าพักต้องไม่มากกว่า 4 คน.');
    return;
}               

              // ตรวจสอบวันที่เริ่มและวันที่ออกว่าห่างกันอย่างน้อย 6 เดือน
    if (rentalStart && rentalEnd) {
        const startDate = new Date(rentalStart);
        const endDate = new Date(rentalEnd);

        // คำนวณความต่างของเดือนระหว่างวันที่
        const diffMonths = (endDate.getFullYear() - startDate.getFullYear()) * 12 + (endDate.getMonth() - startDate.getMonth());

        if (diffMonths < 6) {
            alert('วันที่ย้ายออกต้องห่างจากวันที่เริ่มเข้าพักอย่างน้อย 6 เดือน.');
            return;
        }
    }
            event.target.submit();
        }
    </script>

</body>

</html>