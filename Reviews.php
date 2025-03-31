<?php
include("h.php");
include("condb.php");
?>
<!DOCTYPE html>

<head>
<title>BC House</title>
  <link href="./หน้าบ้าน/css/as.css?v=1.0" rel="stylesheet">
  <link href="./หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
  <link href="./หน้าบ้าน/feedback.css?v=1.0" rel="stylesheet">
</head>

<body>

  <?php include('navbarnew.php'); ?>

  <?php
  $sql = "SELECT * FROM review";
  $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
  $sql2 = "SELECT * FROM user";
  $result_t = mysqli_query($con, $sql2) or die("Error in query: $sql2 " . mysqli_error($con));
  ?>
  <div class="feedback">
    <div class="container">
      <h1 class="SU">Reviews from users</h1>
    </div>

    <?php while ($row = mysqli_fetch_array($result)) {
      $row2 = mysqli_fetch_array($result_t);  ?>
      <br>

      <div class="container">
        <div class="frameReview">
          <h class="text1">Username: <h class="text2"><?php echo $row["Name"] ?> <?php echo $row["Lastname"] ?></h>
          </h>
          <h class="text1">Rating: <h class="text2"> <?php echo $row["Rating"] ?></h>
          </h>
          <h class="text1">Comment: <h class="text2"></h><?php echo $row["Comment"] ?></h>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</body>

</html>