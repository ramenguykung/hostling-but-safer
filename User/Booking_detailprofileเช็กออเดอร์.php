<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>

<head>
  <title>BC House</title><link rel="icon" href="../icon/LogoBC.png" type="image/x-icon">
  <link href="../หน้าบ้าน/logout.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/Booking_detail.css?v=1.0" rel="stylesheet">
</head>

<body>

  <?php
  $sql = "SELECT * FROM booking as p 
INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking 
WHERE Id_User = $member_id
ORDER BY p.Id_Booking DESC" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());

  // ตรวจสอบว่ามีข้อมูลการจองหรือไม่
  include('navbarnew.php');
  ?>

  <h1 class="textBookingDetail">Reservation list</h1>

  <?php
  // ตรวจสอบว่ามีการจองหรือไม่
  if (mysqli_num_rows($result) == 0) {
    // ถ้าไม่มีรายการจองแสดงข้อความ
    echo "<p class='textBookingDetailnot'>ยังไม่มีรายการจอง</p>";
  } else {
    // ถ้ามีรายการจองแสดงข้อมูล
    while ($row = mysqli_fetch_array($result)) {
  ?>
      <div class="containersbuilding">
        <br>
        <?php if ($row["Statuss"] === "สำเร็จ") { ?>
          <a href="Booking_detailprofile.php?act=detail&ID=<?php echo $row["Id_Booking"] ?>" role="button" style="text-decoration: none;">
            <div class="BookingStatus">
              <div class="Title">
                <h1 class="textTitle">สถานะการจอง</h1>
                <h1 class="textdetail">รายละเอียด</h1>
              </div>
              <div class="Frame89Status">
                <div class="Frame86Status1-1">
                  <h1 class="textFrame86Status1">รอทำสัญญา</h1>
                </div>
                <div class="Frame86Status1-2">
                  <h1 class="textFrame86Status1">สำเร็จ</h1>
                </div>
                <div class="Frame86Status1-3">
                  <h1 class="textFrame86Status1">ไม่สำเร็จ</h1>
                </div>
              </div>
            </div>
          </a>
        <?php } else if ($row["Statuss"] === "ไม่สำเร็จ") { ?>
          <a href="Booking_detailprofile.php?act=detail&ID=<?php echo $row["Id_Booking"] ?>" role="button" style="text-decoration: none;">
            <div class="BookingStatus">
              <div class="Title">
                <h1 class="textTitle">สถานะการจอง</h1>
                <h1 class="textdetail">รายละเอียด</h1>
              </div>
              <div class="Frame89Status">
                <div class="Frame86Status2-1">
                  <h1 class="textFrame86Status1">รอทำสัญญา</h1>
                </div>
                <div class="Frame86Status2-2">
                  <h1 class="textFrame86Status1">สำเร็จ</h1>
                </div>
                <div class="Frame86Status2-3">
                  <h1 class="textFrame86Status1">ไม่สำเร็จ</h1>
                </div>
              </div>
            </div>
          </a>
        <?php } else { ?>
          <a href="Booking_detailprofile.php?act=detail&ID=<?php echo $row["Id_Booking"] ?>" role="button" style="text-decoration: none;">
            <div class="BookingStatus">
              <div class="Title">
                <h1 class="textTitle">สถานะการจอง</h1>
                <h1 class="textdetail">รายละเอียด</h1>
              </div>
              <div class="Frame89Status">
                <div class="Frame86Status1">
                  <h1 class="textFrame86Status1">รอทำสัญญา</h1>
                </div>
                <div class="Frame86Status2">
                  <h1 class="textFrame86Status1">สำเร็จ</h1>
                </div>
                <div class="Frame86Status3">
                  <h1 class="textFrame86Status1">ไม่สำเร็จ</h1>
                </div>
              </div>
            </div>
          </a>
        <?php } ?>
      </div>
      <br><br>
  <?php
    }
  }
  ?>

</body>

</html>
