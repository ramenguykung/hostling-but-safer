<?php 
$query = "SELECT * FROM room_building_2 as p
INNER JOIN building_2 as t ON p.building_2_id = t.building_2_id
ORDER BY p.Id_Room DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>

<div class="div">

<a href="room.php?act=add2" >
<button class="ButtonNewRoom" id="btn"> <h6 class="message">New Room</h6>
</button> 
</a>

<?php while($row = mysqli_fetch_array($result)) { ?>


<!-- 
    <img src="../Room_img/<?php echo $row['Room_img']; ?>" width="150" height="150" alt="logo" />
<h1> เลขห้อง : <?php echo $row["RoomNumber"]?> </h1>
<h1> สถานะห้อง : <?php echo $row["RoomSatatus"]?></h1>
<br> -->



<div class= "room-card">
    <div class= "div-align-left" >
<img src="../Room_img/<?php echo $row['Room_img']; ?>" class="placeholder"  width="150" height="150"alt="logo" />


<div class="flex-column-row">

<div class="flex-column-div">
<h class= "message">Room:</h>
<h class= "message"><?php echo $row["RoomNumber"]?></h>
</div>

<div class="flex-column-div">
<h class= "message">floor: </h>
<h class= "message"><?php echo $row["building_2_id"]?></h>
</div>

<div class="flex-column-div">
<h class= "message">Dimensions: </h>
<h class= "message"> <?php echo $row["Room_Dimensions"]?></h>
</div>

<div class="flex-column-div">
<h class= "message">Price: </h>
<h class= "message"><?php echo $row["MonthlyPrice"]?></h>
</div>

<div class="flex-column-div">
<h class= "message">Supplies: </h>
<h class= "message"> <?php echo $row["RoomSupplies"]?></h>
</div>




<div class="flex-column-div">
<h class= "message">ค่าไฟ: </h>
<h class= "message"><?php echo $row["ค่าไฟ"]?> หน่วย</h>
</div>


<div class="flex-column-div">
<h class= "message">ค่าน้ำ: </h>
<h class= "message"><?php echo $row["ค่าน้ำ"]?>  หน่วย</h>
</div>


<div class="flex-column-div">
<h class= "message">RoomSatatus: </h>
<h class= "message"><?php echo $row["RoomSatatus"]?></h>
</div>







</div>



         
                    

 </div>      
 
 <div class="action-button">

 <a href="room.php?act=edit2&ID=<?php echo$row["Id_Room"]?>" >
 <button  class="ButtonEdit" id="btn"> <h6 class="message">Edit</h6>
 </button> 
 </a>

 <a href="room_del_2.php?ID=<?php echo$row["Id_Room"]?>" onclick="return confirm('Confirm deletion');" >
 <button class="ButtonDelete" id="btn"> <h6 class="message">Delete</h6>
 </button> 
 </a>

 </div>
           

</div>








<?php  }
    mysqli_close($con);

?>

</div>