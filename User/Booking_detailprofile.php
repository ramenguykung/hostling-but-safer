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
  $ID = mysqli_real_escape_string($con, $_GET['ID']);
  $sql = "SELECT * FROM booking as p 
INNER JOIN  deposit_payment as t ON p.Id_Booking  = t.Id_Booking 
WHERE 	t.Id_Booking =$ID
ORDER BY p.Id_Booking  DESC" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);

  ?>

  <?php include('navbarnew.php'); ?>

  <div class="divBooking_detail">
    <h1 class="textBookingDetail"> <a class="btn btn-Light" href="javascript:void(0);" role="button" onclick="window.history.back();" style="text-decoration: none;">
        <img class="img" src="../icon/arrow_back_ios_new.svg" width="45px" height="45px">
      </a>Booking Detail </h1>

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
          <h1 class="textdata"><?php echo $row['floor']; ?></h1>
        </div>

        <div class="flex-column-divd-atatext">
          <h1 class="textdata">หมายเลขห้อง:</h1>
          <h1 class="textdata"><?php echo $row['RoomNumber']; ?></h1>
        </div>

        <div class="flex-column-divd-atatext">
          <h1 class="textdata">จำนวนผู้เข้าพัก:</h1>
          <h1 class="textdata"> <?php echo $row['Number_of_guests']; ?> คน</h1>
        </div>

        <div class="flex-column-divd-atatext">
          <h1 class="textdata">วันที่เริ่มเข้าพัก:</h1>
          <h1 class="textdata"><?php echo $row['Start_Date']; ?></h1>
        </div>

        <div class="flex-column-divd-atatext">
          <h1 class="textdata">วันที่ย้ายออก:</h1>
          <h1 class="textdata"><?php echo $row['End_Date']; ?></h1>
        </div>

      </div>

      <div class="flex-row-div-dataDetail">

        <div class="flex-column-div-textdataDetail">
          <h1 class="textdata">วิธีการชำระ:</h1>
          <h1 class="textdata"> <?php echo $row['Method']; ?> </h1>
        </div>

        <div class="flex-column-div-textdataDetail">
          <h1 class="textdata">ค่ามัดจำ:</h1>
          <h1 class="textdata"> <?php echo $row['Payoncontractdate']; ?> บาท</h1>
        </div>

        <div class="flex-column-div-textdataDetail">
          <h1 class="textdata">ค่ามัดจำงจ่าย ณ วันทำสัญญา:</h1>
          <h1 class="textdata"><?php echo $row['Payoncontractdate']; ?> บาท</h1>
        </div>

        <div class="flex-column-div-textdataDetail">
          <h1 class="textdata">ค่าใช้จ่ายรวมทั้งหมดที่ผู้จองต้องจ่าย:</h1>
          <h1 class="textdata"><?php echo $row['Totalexpenses']; ?> บาท</h1>
        </div>

        <div class="flex-column-div-textdataDetail">
          <h1 class="textdata">วันที่ทำการจอง:</h1>
          <h1 class="textdata"><?php echo $row['Date_booking']; ?> </h1>
        </div>
      </div>
    </div>
  </div>

  <br>
  <div class="containersbuilding">
    <?php if ($row["Statuss"] === "สำเร็จ") { ?>

      <div class="BookingStatus">
        <div class="Title">
          <h1 class="textTitle"> สถานะการจอง</h1>
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

    <?php      } else if ($row["Statuss"] === "ไม่สำเร็จ") {  ?>

      <div class="BookingStatus">
        <div class="Title">
          <h1 class="textTitle"> สถานะการจอง</h1>
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
  </div>
<?php      } else { ?>

  <div class="BookingStatus">
    <div class="Title">
      <h1 class="textTitle"> สถานะการจอง</h1>
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

  <?php    } ?>
  </div>
  <br><br>
</body>

</html>