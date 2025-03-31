<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>

<head>
<title>BC House</title> 
<link rel="icon" href="../icon/LogoBC.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet"> -->
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" > 
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script> -->

  <link href="../หน้าบ้าน/logout.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/Rent-building-select.css?v=1.0" rel="stylesheet">
</head>

<body>
  <?php
  include('navbarnew.php');
  ?>

  <?php
  $act = (isset($_GET['act']) ? $_GET['act'] : '');
  if ($act == 'Family') {
    include('Select-Building-Family.php');
  } else if ($act == 'Student') {

    include('Select-Building-Student.php');
  } else  if ($act == 'Single') {

    include('Select-Building-Single.php');
  } else if ($act == 'Couple') {
    include('Select-Building-Couple.php');
  } else {  ?>

    <div class="divRent-building-select">
      <div class="containers">
        <h1 class="textอาคาร1">Select Building</h1>
      </div>

      <div class="flex-column-divB">
        <h1 class="textRoomfor">Room for…</h1>
        <div class="Room-filter-select">
          <div class="buttonsB">
            <a href="index.php?act=Family" style="text-decoration: none;">
              <button class="Selection_pill">
                <h6 class="textRoomfor">Family</h6>
              </button>
            </a>

            <a href="index.php?act=Student" style="text-decoration: none;">
              <button class="Selection_pill">
                <h6 class="textRoomfor">Student</h6>
              </button>
            </a>

            <a href="index.php?act=Single" style="text-decoration: none;">
              <button class="Selection_pill">
                <h6 class="textRoomfor">Single</h6>
              </button>
            </a>

            <a href="index.php?act=Couple" style="text-decoration: none;">
              <button class="Selection_pill">
                <h6 class="textRoomfor">Couple</h6>
              </button>
            </a>
          </div>
        </div>
      </div>

      <div class="divbuilding-select">
        <div class="flex-row-div-building1">
          <div class="Selector-building1">

            <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor5" role="button" style="text-decoration: none;">
              <h1 class="textflor">5</h1>
            </a>
            <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor4" role="button" style="text-decoration: none;">
              <h1 class="textflor">4</h1>
            </a>
            <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor3" role="button" style="text-decoration: none;">
              <h1 class="textflor">3</h1>
            </a> </a>
            <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor2" role="button" style="text-decoration: none;">
              <h1 class="textflor">2</h1>
            </a>
            <a class="btn btn-Light" href="SelectRoom-building1.php?act=flor1" role="button" style="text-decoration: none;">
              <h1 class="textflor">1</h1>
            </a> </a>

            <h1 class="textอาคาร1">อาคาร 1</h1>
          </div>
        </div>

        <div class="flex-row-div-building2">
          <div class="Selector-building2">
            <a class="btn btn-Light" href="SelectRoom-building2.php?act=flor2" role="button" style="text-decoration: none;">
              <h1 class="textflor">2</h1>
            </a>
            <a class="btn btn-Light" href="SelectRoom-building2.php?act=flor1" role="button" style="text-decoration: none;">
              <h1 class="textflor">1</h1>
            </a>
            <h1 class="textอาคาร1">อาคาร 2</h1>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</body>

</html>
<?php include('script4.php'); ?>