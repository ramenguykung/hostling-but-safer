<?php

$sql = "SELECT * FROM review";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));


$sql2 = "SELECT * FROM user";
$result_t = mysqli_query($con, $sql2) or die("Error in query: $sql2 " . mysqli_error($con));

echo ' <table id="example1" class="table table-bordered table-striped">';
echo "<thead>";
echo "<tr class=''>
    
      <th width='8%' class='hidden-xs'>รูป</th>
       <th width='20%'>Username</th>
       <th width='10%' class='hidden-xs'>Date</th>
       <th width='10%'>Rating</th>
        <th width='30%'>Comment</th>

    </tr>";
echo "</thead>";
while ($row = mysqli_fetch_array($result)) {
  $row2 = mysqli_fetch_array($result_t);
  echo "<tr>";

  echo "<td class='hidden-xs'>" . "<img src='../user_img/" . $row2['user_img'] . "' width='70%' >" . "</td>";
  echo "<td>" . $row["Name"] . " " . $row["Lastname"] . "</td>";

  echo "<td class='hidden-xs'>" . $row["Date"] . "</td> ";
  echo "<td>  " . $row["Rating"] .   "</td> ";
  echo "<td>" . $row["Comment"] . "</td> ";
}
echo "</table>";
mysqli_close($con);

?>
<!-- <img src='../icon/iconAdmin/expand_more.svg' class='CM_img' -->