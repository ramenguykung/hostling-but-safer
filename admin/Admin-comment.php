<?php include('h.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <?php
  //print_r($_SESSION);
  include('../condb.php');
  $Id_Admin = $_SESSION['Id_Admin'];
  $m_level = $_SESSION['m_level'];
  if ($m_level != 'admin') {
    Header("Location: ../logout.php");
  }
  $sql = "SELECT *  FROM web_admin WHERE Id_Admin =$Id_Admin ";
  $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);

  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BC House</title>
  <link href="../cssหลังบ้าน/Admin-comment.css?v=1.0" rel="stylesheet">
</head>

<body>

  <div class="Admin-dashboard-loading">
    <div class="Admin-verticle-navigation">
      <div class="top-flex">
        <div div class="Logoweb"> <img src="../icon/LogoBC.png" width="65" height="65" alt="logo"> </div>
        <div class="menuAdmin">
          <a href="index.php">
            <div class="Admin-icon-navigation">
              <div class="iconรองFrame28">
                <div class="iconรอง">
                  <img src="../icon/iconAdmin/iconV.svg" alt="logo">
                </div>
              </div>
            </div>
          </a>
          <a href="Admin-room.php">
            <div class="Admin-icon-navigation">
              <div class="iconรองFrame28">
                <div class="iconรอง">
                  <img src="../icon/iconAdmin/iconroom.svg" alt="logo">
                </div>
              </div>
            </div>
          </a>
          <a href="Admin-payment.php">
            <div class="Admin-icon-navigation">
              <div class="iconรองFrame28">
                <div class="iconรอง">
                  <img src="../icon/iconAdmin/iconPayment.svg" alt="logo">
                </div>
              </div>
            </div>
          </a>
          <div class="Admin-icon-navigation">
            <div class="iconหลักFrame28">
              <div class="iconหลัก">
                <img src="../icon/iconAdmin/iconComment.svg" alt="logo">
              </div>
              <div class="แถบกำหนดหน้า"> </div>
            </div>
          </div>
          <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')" style="text-decoration: none;">
            <div class="iconlogout">
              <img src="../icon/iconAdmin/iconlogout.svg" alt="logo">
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="คุมพื้นที่หน้าจอ">
      <div class="Admin-top_ribbon">
        <h class="ข้อมความหัว">Feedback</h>
      </div>
      <div class="divAdmin">
        <?php
        include('Feedback.php');
        ?>
      </div>
    </div>
  </div>

</body>

</html>