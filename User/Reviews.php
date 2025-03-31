<?php
include("h.php");
include("../condb.php");
?>
<?php
$sql = "SELECT * FROM review";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
$sql2 = "SELECT * FROM user";
$result_t = mysqli_query($con, $sql2) or die("Error in query: $sql2 " . mysqli_error($con));



$sql12 = "SELECT * FROM booking 
WHERE 	Id_User =$member_id
" or die("Error:" . mysqli_error());
$resulttt = mysqli_query($con, $sql12) or die("Error in query: $sql " . mysqli_error());
$row12 = mysqli_fetch_array($resulttt);


?>
<!DOCTYPE html>

<head>
  <!-- <title>Sidebar Example</title> -->
  <link href="../หน้าบ้าน/logout.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
  <link href="../หน้าบ้าน/feedback.css?v=1.0" rel="stylesheet">
</head>

<body>

  <?php include('navbarnew.php'); ?>

  <div class="feedback">
    <div class="container">
      <h1 class="SU">Reviews from users</h1>
    </div>



    <?php if (!empty($row12) && $row12["Statuss"] === "สำเร็จ") { ?>
      <a class="btn btn-Light" href="Feedback-Write.php" role="button">
        <button type="submit" class="buttonreview">
          <h3 class="submit">Fill in the review Feedback</h3>
        </button>
      </a>
    <?php } else { ?>
      <div class="container1">
        <p>You need to complete your booking before submitting a review.</p>
      </div>
    <?php } ?>

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