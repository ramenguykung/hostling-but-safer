<?php
$sql = "SELECT * FROM review";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

$sql2 = "SELECT * FROM user";
$result_t = mysqli_query($con, $sql2) or die("Error in query: $sql2 " . mysqli_error($con));

echo ' <table id="example1" class="table table-bordered table-striped">';
echo "<thead>";
echo "<tr class=''>
    <th width='8%' class='hidden-xs'>รูป</th>
    <th width='15%'>Username</th>
    <th width='5%'>	Age</th>
    <th width='10%' class='hidden-xs'>Phone No</th>
    <th width='10%' class='hidden-xs'>Date</th>
    <th width='10%'>Rating</th>
    <th width='20%'>Comment</th>
    <th width='5%'>Delete</th>
  </tr>";
echo "</thead>";

while ($row = mysqli_fetch_array($result)) {
  // รับข้อมูลจาก user ตาม ID หรือเงื่อนไขที่ตรงกัน
  $row2 = mysqli_fetch_array($result_t);

  echo "<tr>";
  // แสดงรูปจาก user_img
  echo "<td class='hidden-xs'>" . "<img src='../user_img/" . $row2['user_img'] . "' width='70%' >" . "</td>";
  // แสดงชื่อผู้ใช้ (ชื่อ-นามสกุล)
  echo "<td>" . $row["Name"] . " " . $row["Lastname"] . "</td>";

  echo "<td class='hidden-xs'>" . $row["Age"] . "</td>";

  echo "<td class='hidden-xs'>" . $row["Phone"] . "</td>";
  // แสดงวันที่
  echo "<td class='hidden-xs'>" . $row["Date"] . "</td>";
  // แสดงคะแนน
  echo "<td>" . $row["Rating"] . "</td>";
  // แสดงความคิดเห็น
  echo "<td>" . $row["Comment"] . "</td>";
  // แสดงปุ่มลบ
  echo "<td><a href='Feedback_del_db.php?ID=" . $row['Id_Review'] . "' onclick=\"return confirm('ยืนยันการลบ')\" class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'></span></a></td>";
  echo "</tr>";
}

echo "</table>";
mysqli_close($con);
