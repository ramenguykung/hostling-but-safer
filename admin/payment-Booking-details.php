<?php 

$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM deposit_payment as p 
INNER JOIN booking as t ON p.Id_Booking  = t.Id_Booking 
WHERE Id_Payment =$ID
ORDER BY p.Id_Booking  DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);

$Id_User = $row["Id_User"];
$sql2 = "SELECT * FROM user WHERE Id_User = $Id_User ORDER BY Id_User DESC" or die("Error:" . mysqli_error($con));
$result_t = mysqli_query($con, $sql2) or die ("Error in query: $sql " . mysqli_error($con));
$row2 = mysqli_fetch_array($result_t);
?>







<h class="textPaymentEntries">Personal Data</h>
<br>







    <div class= "room-cardPersonalData">
    <div class= "div-align-left" >


    <div class="action-button">
  
    <img src="../user_img/<?php echo $row2['user_img']; ?>" class="placeholder"  width="500" height="200"alt="Popup Image 1" />

    <a href="#popup1">
    <button  class="ButtonView" id="btn"> <h6 class="message">View enlarged image</h6>
    </button>
    </a>
    </div>

    <div id="popup1" class="popup">
    <a href="#" class="close-btn">&times;</a>
    <img src="../user_img/<?php echo $row2['user_img']; ?>"  class="thumbnail">

    </div>

  

<div class="flex-column-row">


<div class="flex-column-div">
<h class= "text1">Personal Datas </h>
</div>

<div class="flex-column-div">
<h class= "text1">Username:</h>
<h class= "text2"><?php echo $row["user_name"]?> <?php echo $row["Surname"]?></h>
</div>


<div class="flex-column-div">
<h class= "text1">Job:
<h class= "text2"><?php echo $row2["Job"]?>  <h class= "text1">Age: <?php echo $row2["Age"]?></h></h>
</div>

<div class="flex-column-div">
<h class= "text1">Contact information</h>
</div>


<div class="flex-column-div">
<h class= "text1"> Email:<h class= "text2"> <?php echo $row2["Email"]?></h>  , <h class= "text1">Phone No: <h class= "text2"> <?php echo $row2["Phone"]?></h></h></h>
</div>

<br>




</div>
  

 </div>      
 



 
            
           
</div>   


<h class="textPaymentEntries">Payment and Booking details</h>

<div class= "room-card-Proof-of-payment">
    <div class= "div-align-left" >

    
    <?php if($row["Method"] === "QR Code"){   ?>


    <div class="action-button">
    
 
    <img src="../user_img/<?php echo $row['payment_img']; ?>" class="placeholder"  width="250" height="200"alt="logo" />

    
    <a href="#popup2">
            <button  class="ButtonView" id="btn"> <h6 class="message">View enlarged image</h6>
        </button> 
        </a>


    </div>
    <div id="popup2" class="popup">
        <a href="#" class="close-btn">&times;</a>
        <img src="../user_img/<?php echo $row['payment_img']; ?>"  class="thumbnail" alt="logo" />
    </div>
    
    <?php  }  ?>


<div class="flex-column-row">



<div class="flex-column-div">
<h class= "text1">Payment</h>
</div>


<div class="flex-column-div">
<h class= "text1">Payment Method:</h>
<h class= "text2"><?php echo $row["Method"]?></h>
</div>

<div class="flex-column-div">
<h class= "text1">Room price:</h>
<h class= "text2"><?php echo $row["Room price"]?></h>
</div>




<div class="flex-column-div">
<h class= "text1"> Booking details</h>
</div>




<div class="flex-column-div">
<h class= "text1">Room:</h>
<h class= "text2"><?php echo $row["RoomNumber"]?> | <h class= "text1">floor:  </h><?php echo $row["floor"]?>  | <h class= "text1">Building: </h> <?php echo $row["Building"]?></h>
</div>




<div class="flex-column-div">
<h class= "text1">Number of guests:</h>
<h class= "text2"><?php echo $row["Number_of_guests"]?></h>
</div>


<div class="flex-column-div">
<h class= "text1">Date of stay:</h>
<h class= "text2"><?php echo $row["Start_Date"]?>  to <h class= "text1">Move-out date:</h> <h class= "text2"><?php echo $row["End_Date"]?> </h></h>
</div>

<div class="flex-column-div">
<h class= "text1">Booking time:</h>
<h class= "text2"><?php echo $row["Date_booking"]?></h>
</div>











</div>
  

 </div>      
 




            <div class="action-button">

            
<form  name="register" action="Paymen-Update-status.php" method="POST"  >
            <select name="status" class="input" required>
       <?php     if( $row2["Statuss"] != ""){ ?>
        <option value="">Adjust status</option>
                <?php    }else{ ?>
           
                <option value="<?php echo $row["Statuss"]?>"><?php echo $row["Statuss"]?></option>
                <?php      }  ?>
         
                 <option value="สำเร็จ">สำเร็จ</option>
                 <option value="ไม่สำเร็จ">ไม่สำเร็จ</option>
                
           
               
                                          </select>
                            <br>
                            <br>
                           
                         
                     <input type="hidden" name="Id_Booking" value="<?php echo$row["Id_Booking"]?>" />
 
  <button   type="submit"  class="ButtonUpdatestatus" id="btn"> <h6 class="message">Update status</h6>
 </button> 

 </form>
             </div>

           
           
</div>   





