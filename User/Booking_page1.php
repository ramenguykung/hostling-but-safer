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
  <link href="../หน้าบ้าน/Booking_page.css?v=1.0" rel="stylesheet">
</head>

<body>

  <div class="top-navigation-mainhome">

    <div class="left-navH">
      <div class="menu-dividerH">
        <?php
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if ($act == 'Booking1/1') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor1" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == 'Booking2/1') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor2" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == 'Booking3/1') { ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor3" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == 'Booking4/1') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor4" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == 'Booking5/1') {   ?>
          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor5" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     }   ?>

        <?php
        $act = (isset($_GET['act']) ? $_GET['act'] : '');
        if ($act == '1') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor1" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == '2') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor2" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == '3') { ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor3" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == '4') {   ?>

          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor4" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     } else if ($act == '5') {   ?>
          <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor5" role="button" style="text-decoration: none;">
            <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
          </a>

        <?php     }   ?>

      </div>

    </div>

  </div>

  <?php
  $ID = mysqli_real_escape_string($con, $_GET['ID']);
  $sql = "SELECT * FROM room_building_1 as p 
INNER JOIN building_1 as t ON p.building_1_id  = t.building_1_id 
WHERE Id_Room =$ID
ORDER BY p.Id_Room  DESC" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);
  ?>

  <div class="divB">
    <h1 class="textBooking">Booking</h1>

    <div class="flex-row-divB">
      <div class="flex-row-divtextBin">
        <div class="Roomtext">
          <h1 class="textmain">Room:</h1>
          <h1 class="textmain"><?php echo $row["RoomNumber"] ?></h1>
        </div>

        <div class="AC">
          <h1 class="textmain">AC:</h1>
          <h1 class="textmain"><?php echo $row["building_1_id"] ?></h1>
        </div>
      </div>

      <div class="flex-row-div-data">
        <div class="flex-column-divimg">
          <a href="#popup7">
            <img src="../Room_img/<?php echo $row["Room_img1"] ?>" width="697" class="imgmain" alt="">
          </a>

          <div class="flex-div-row-imgs">
            <a href="#popup1">
              <img src="../Room_img/<?php echo $row["Room_img2"] ?>" width="136.8" class="imgs" alt="">
            </a>

            <a href="#popup2">
              <img src="../Room_img/<?php echo $row["Room_img3"] ?>" width="136.8" class="imgs" alt="">
            </a>

            <a href="#popup3">
              <img src="../Room_img/<?php echo $row["Room_img4"] ?>" width="136.8" class="imgs" alt="">
            </a>

            <a href="#popup4">
              <img src="../Room_img/<?php echo $row["Room_img5"] ?>" width="136.8" class="imgs" alt="">
            </a>

            <a href="#popup5">
              <img src="../Room_img/<?php echo $row["Room_img6"] ?>" width="136.8" class="imgs" alt="">
            </a>
          </div>
        </div>

        <div class="dataroom">
          <h1 class="textmain"><?php echo $row["MonthlyPrice"] ?> Baht Per Month</h1>

          <div class="Label">
            <div class="Frame50data">
              <h1 class="texttext">Dimensions:</h1>
              <h1 class="texts"><?php echo $row["Room_Dimensions"] ?> ตารางเมตร</h1>
            </div>

            <div class="Frame50data">
              <h1 class="texttext">Price/Month:</h1>
              <h1 class="texts"><?php echo $row["MonthlyPrice"] ?> บาท</h1>
            </div>

            <div class="Frame50data">
              <h1 class="texttext">ค่าไฟ:</h1>
              <h1 class="texts"><?php echo $row["ค่าไฟ"] ?> บาทต่อหน่วย</h1>
            </div>

            <div class="Frame50data">
              <h1 class="texttext">ค่าน้ำ:</h1>
              <h1 class="texts"><?php echo $row["ค่าน้ำ"] ?> บาทต่อคน</h1>
            </div>

            <div class="Frame50data">
              <h1 class="texttext">Supplies:</h1>
              <h1 class="texts"><?php echo $row["RoomSupplies"] ?></h1>
            </div>
          </div>

          <a href="Booking_detail1.php?act=Booking_detail-1/1&ID=<?php echo $row["Id_Room"] ?>" style="text-decoration: none;">
            <button class="Button">
              <h1 class="textButton">Rent this room</h1>
            </button> </a>
        </div>
      </div>
    </div>
  </div>

  <div id="popup7" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img1"] ?>" class="thumbnail">
  </div>

  <div id="popup1" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img2"] ?>" class="thumbnail">
  </div>

  <div id="popup2" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img3"] ?>" class="thumbnail">
  </div>

  <div id="popup3" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img4"] ?>" class="thumbnail">
  </div>

  <div id="popup4" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img5"] ?>" class="thumbnail">
  </div>

  <div id="popup5" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../Room_img/<?php echo $row["Room_img6"] ?>" class="thumbnail">
  </div>

</body>

</html>