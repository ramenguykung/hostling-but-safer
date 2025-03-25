<?php 
$query = "SELECT * FROM room_building_2 as p
INNER JOIN building_2 as t ON p.building_2_id = t.building_2_id
ORDER BY p.Id_Room DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

?>



<div class="LineupBuildingandNewRoom">

<a href="Admin-room.php?act=building_1" style="text-decoration: none;" >
<button class="ButtonNewRoom" id="btn"> <h6 class="message">Go to Building 1</h6>
</button> 
</a>

<a href="Admin-room.php?act=add2" style="text-decoration: none;" >
<button class="ButtonNewRoom" id="btn"> <h6 class="message">New Room</h6>
</button> 
</a>
</div>

<?php while($row = mysqli_fetch_array($result)) { ?>





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
<h class= "message">Building : </h>
<h class= "message"><?php echo $row["Building"]?></h>
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
<h class= "message"><?php echo $row["ค่าไฟ"]?> ต่อหน่วย</h>
</div>


<div class="flex-column-div">
<h class= "message">ค่าน้ำ: </h>
<h class= "message"><?php echo $row["ค่าน้ำ"]?>  ต่อคน</h>
</div>


<div class="flex-column-div">
<h class= "message">RoomSatatus: </h>
<h class= "message"><?php echo $row["RoomSatatus"]?></h>
</div>







</div>



         
                    

 </div>      
 
 <div class="action-button">

 <a href="Admin-room.php?act=edit2&ID=<?php echo$row["Id_Room"]?>" >
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

