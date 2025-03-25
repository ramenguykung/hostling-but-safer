

<form  name="form1" action="index.php" method="POST" enctype="multipart/form-data" class="form-horizontal"    >

<div class="containersbuilding"> 
<div class="Lineup ">

    <h>จาก</h>

    <div class="col-sm-5"> 
                    
    <input name="dt1"  class="form-control" type="date" >
    </div>
    <h>ถึง</h>
    <div class="col-sm-5"> 
    <input name="dt2"  class="form-control" type="date" >
    </div>
    <select name="Job" class="inpu">
    <option value="">เลือกอาชีพ</option>
  <option value="พนักงานบริษัท">พนักงานบริษัท</option>
  <option value="ข้าราชการ">ข้าราชการ</option>
  <option value="พนักงานรัฐวิสาหกิจ">พนักงานรัฐวิสาหกิจ</option>
  <option value="นักธุรกิจ/ผู้ประกอบการ">นักธุรกิจ/ผู้ประกอบการ</option>
  <option value="ฟรีแลนซ์">ฟรีแลนซ์</option>
  <option value="เจ้าของกิจการส่วนตัว">เจ้าของกิจการส่วนตัว</option>
  <option value="แพทย์/พยาบาล">แพทย์/พยาบาล</option>
  <option value="ครู/อาจารย์">ครู/อาจารย์</option>
  <option value="นักกฎหมาย/ทนาย">นักกฎหมาย/ทนาย</option>
  <option value="วิศวกร">วิศวกร</option>
  <option value="สถาปนิก">สถาปนิก</option>
  <option value="เกษตรกร">เกษตรกร</option>
  <option value="ชาวประมง">ชาวประมง</option>
  <option value="แรงงานก่อสร้าง">แรงงานก่อสร้าง</option>
  <option value="พนักงานโรงงาน">พนักงานโรงงาน</option>
  <option value="พนักงานขาย">พนักงานขาย</option>
  <option value="คนขับรถ">คนขับรถ</option>
  <option value="พ่อครัว/แม่ครัว">พ่อครัว/แม่ครัว</option>
  <option value="ช่างทำผม/เสริมสวย">ช่างทำผม/เสริมสวย</option>
  <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>
  <option value="เกษียณอายุ">เกษียณอายุ</option>
  <option value="ว่างงาน">ว่างงาน</option>
  <option value="แม่บ้าน">แม่บ้าน</option>
</select>

<select name="Age" class="inpu" >
            <option value="">เลือกช่วงอายุ</option>
            <option value="15-25">15-25</option>
            <option value="25-30">26-30</option>
            <option value="31-40">31-40</option>
            <option value="41-50">41-50</option>
            <option value="51-60">51-60</option>
            <option value="60+">60+</option>
         
                
           
               
                                          </select>

    

    <div class="col-sm-1"> 
    <button type="submit"  class="Button">
                            <h >ค้นหา</h> 
    </button> 
    
    </div>     
    
     

</div>
</div>
</form >  


                                                <div class=""> </div>

                                                <div class="card-body"> 
                                                <table id="datatablesSimple" class="table table-bordered"  >
                                                    <thead>
                                                        <tr>
                                                         <th>Username</th>
                                                         <th>Age</th>
                                                         <th>Job</th>
                                                         <th>Number of guests</th>
                                                         <th>Date of stay</th>
                                                         <th>Move-out date</th>
                                                         <th>Room price</th>
                                                         <th>Booking time</th>
                                                         <th>status</th>
                                                         <th>Rating</th>
                                                         <th>Comment</th>
                                                        </tr>
                                                    </thead>
                                                   






                                                    <?php
$Job = mysqli_real_escape_string($con, @$_POST['Job']);
$Age = mysqli_real_escape_string($con, @$_POST['Age']);
$ddt1 = mysqli_real_escape_string($con, @$_POST['dt1']);
$ddt2 = mysqli_real_escape_string($con, @$_POST['dt2']);
$add_date = date('Y/m/d', strtotime($ddt2 . "+1 days"));

if (($ddt1 != "") & ($ddt2 != "")  & ($Job != "") & ($Age != ""))  {



$query = "SELECT * FROM booking as p
    INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
    WHERE p.Statuss = 'สำเร็จ' 
    AND p.Date_booking BETWEEN '$ddt1' AND '$add_date'
    AND p.Job = '$Job'
    AND p.Age_range = '$Age'
    ORDER BY p.Date_booking DESC" 
    or die("Error:" . mysqli_error($con));

}else if(($Job != "")) {

    $query = "SELECT * FROM booking as p
INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
WHERE p.Statuss = 'สำเร็จ'  AND p.Job = '$Job'
ORDER BY p.Date_booking DESC" or die("Error:" . mysqli_error($con));   



}else if(($Age != "")) {
    


$query = "SELECT * FROM booking as p
INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
WHERE p.Statuss = 'สำเร็จ'    AND p.Age_range = '$Age'
ORDER BY p.Date_booking DESC" or die("Error:" . mysqli_error($con));  

}else if(($ddt1 != "") & ($ddt2 != "")) {
    

    $query = "SELECT * FROM booking as p
    INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
    WHERE p.Statuss = 'สำเร็จ' 
    AND p.Date_booking BETWEEN '$ddt1' AND '$add_date'
    ORDER BY p.Date_booking DESC" 
    or die("Error:" . mysqli_error($con));
    
    
}


else {
   

$query = "SELECT * FROM booking as p
INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
WHERE p.Statuss = 'สำเร็จ'
ORDER BY p.Date_booking DESC" or die("Error:" . mysqli_error($con));  



}

$result = mysqli_query($con, $query);

// ตรวจสอบจำนวนข้อมูลที่ค้นหามา
$totalResults = mysqli_num_rows($result);

// แสดงจำนวนข้อมูลทั้งหมด
echo "<p>จำนวนการจองห้องทั้งหมด: $totalResults รายการ</p>";

// ตรวจสอบว่ามีข้อมูลหรือไม่
if ($totalResults > 0) {
    // หากมีข้อมูล ให้แสดงผล
    while ($row = mysqli_fetch_array($result)) { 
        $status = $row['Statuss'];

        $Id_Booking = $row["Id_Booking"];
$sql2 = "SELECT * FROM review WHERE Id_Booking = $Id_Booking ORDER BY Id_Review DESC" or die("Error:" . mysqli_error($con));
$result_t = mysqli_query($con, $sql2) or die ("Error in query: $sql " . mysqli_error($con));
$row2 = mysqli_fetch_array($result_t);


?>
        <tr>
            <td><?php echo $row["user_name"]?> <?php echo $row["Surname"]?></td>
            <td><?php echo $row["Age"]?></td>
            <td><?php echo $row["Job"]?></td>
            <td><?php echo $row["Number_of_guests"]?></td>
            <td><?php echo $row["Start_Date"]?></td>
            <td><?php echo $row["End_Date"]?></td>
            <td><?php echo $row["Room price"]?></td>
            <td><?php echo $row["Date_booking"]?></td>
            <td><?php echo $row["Statuss"]?></td>
            <?php
// ตรวจสอบว่ามีข้อมูลใน $row2 หรือไม่
if (isset($row2["Rating"]) && isset($row2["Comment"]) && $row2["Rating"] != "" && $row2["Comment"] != "") {
    // ถ้ามีข้อมูลแสดงข้อมูล
    ?>
    <td><?php echo htmlspecialchars($row2["Rating"]); ?></td>
    <td><?php echo htmlspecialchars($row2["Comment"]); ?></td>
<?php
} else {
    // ถ้าไม่มีข้อมูลแสดง -
    ?>
    <td>-</td>
    <td>-</td>
<?php
}
?>

           
              </tr>  
<?php  
    } 
} else {
    // หากไม่มีข้อมูลที่ค้นหา ให้แสดงข้อความแจ้งเตือน
    echo "<tr><td colspan='11' class='text-center text-danger'>ไม่พบข้อมูลที่ค้นหา</td></tr>";
}

mysqli_close($con);
?>







                                         </table>

                                                </div>

                                                

