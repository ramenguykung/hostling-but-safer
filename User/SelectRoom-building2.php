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
  <link href="../หน้าบ้าน/SelectRoom.css?v=1.0" rel="stylesheet">
</head>

<body>

  <div class="top-navigation-mainhome">

    <div class="left-navH">
      <div class="menu-dividerH">
        <a class="btn btn-Light" href="index.php" role="button" style="text-decoration: none;">
          <img src="../icon/arrow_back_ios_new.svg" width="24" height="56" alt="">
        </a>
      </div>
    </div>
  </div>

  <div class="divSR">
    <div class="TitleSR">
      <h1 class="textRoom">Rooms</h1>
      <div class="flex-column-divSR">
        <div class="divflex-column-divSR1">
          <div class="Frame53-1"> </div>
          <h1 class="textNotAvailable"> Not Available</h1>
        </div>
        <div class="divflex-column-divSR2">
          <div class="Frame54-2"> </div>
          <h1 class="textNotAvailable2"> Currently Selecting</h1>
        </div>
      </div>
    </div>

    <?php
    $act = (isset($_GET['act']) ? $_GET['act'] : '');
    if ($act == 'flor2') {

      include('room_from_flor2_building_2.php');
    } else if ($act == 'flor1') {

      include('room_from_flor1_building_2.php');
    }

    ?>

  </div>













</body>

</html>