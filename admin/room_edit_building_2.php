<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM room_building_2 as p 
INNER JOIN building_2 as t ON p.building_2_id  = t.building_2_id 
WHERE Id_Room =$ID
ORDER BY p.Id_Room  DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);




$sql2 = "SELECT * FROM building_2 
ORDER BY building_2_id DESC" or die("Error:" . mysqli_error());
$result_t = mysqli_query($con, $sql2) or die ("Error in query: $sql " . mysqli_error());


?>


<script type="text/javascript">
    function readURL(input, imgId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById(imgId).src = e.target.result;
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<form  name="register" action="room_process_edit_building_2.php" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
<div class="divEdit">
    <div class="divEditin">
        <div class="Feature_picture">
            <h class="textFeature_picture">Feature Picture</h>
            <img id="img1" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img']; ?>';">
            <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img1');"/>
            <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img'];?>">
        </div>

        <div class="Feature_pictureimg">
            <h class="textFeature_picture">Additional Pictures</h>
            <div class="Picture">
                <img id="img2" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img1']; ?>';">
                <img id="img3" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img2']; ?>';">
                <img id="img4" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img3']; ?>';">
                <img id="img5" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img4']; ?>';">
                <img id="img6" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img5']; ?>';">
                <img id="img7" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img6']; ?>';">
            </div>

            <div class="Lineupfile">
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img2');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img3');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img4');"/>

                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img1'];?>">
                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img2'];?>">
                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img3'];?>">
            </div>

            <div class="Lineupfile">
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img5');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img6');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img7');"/>

                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img4'];?>">
                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img5'];?>">
                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img6'];?>">
            </div>
        </div>
    </div>





    <div class="Admin-room-createFrame82">

             <div class="Addroomflex-row-div1">


                        <div class="Admin-room-createFrame81">

                                <div class="Room_numberandCost">

                                          <h class="Room_number"> Room Number</h>

                                          <input name="RoomNumber" id="" class="Textinput" type="text" value="<?php echo $row['RoomNumber']; ?>" required>

                                  </div>

                                



                                 <div class="Room_numberandCost">

                                         <h class="Room_number">floor</h> 

                        
                                         <select name="building_2_id" class="Textinputfloor" required>
                 <option value="<?php echo $row['building_2_id'];?>"><?php echo $row['floor'];?></option>
           
                 <?php foreach($result_t as $results){?>
                 <option value="<?php echo $results["building_1_id"];?>">
                   <?php echo $results["floor"]; ?>
                 </option>
                         <?php } ?>
                                          </select>

                                </div>


                                <div class="Room_numberandCost">

            <h class="Room_number">Dimension</h> 

            <input name="Room_Dimensions" id="" class="Textinput" type="text" value="<?php echo $row['Room_Dimensions']; ?>" required>

                        </div>


                        <div class="Room_numberandCost">

                                         <h class="Room_number">Cost </h> 

                                         <input name="MonthlyPrice" id="" class="Textinput" type="text" value="<?php echo $row['MonthlyPrice']; ?>" required>
                                         <h class="Room_number">บาท </h> 
                                </div>




                        <div class="Room_numberandCost">

<h class="Room_number">ค่าไฟ</h> 

<input name="ค่าไฟ" id="" class="Textinput" type="text" value="<?php echo $row['ค่าไฟ']; ?>" required>
<h class="Room_number">หน่วย</h> 
            </div>




            <div class="Room_numberandCost">

<h class="Room_number">ค่าน้ำ</h> 

<input name="ค่าน้ำ" id="" class="Textinput" type="text" value="<?php echo $row['ค่าน้ำ']; ?>" required>
<h class="Room_number">หน่วย</h> 
            </div>


                         </div>

                         <input type="hidden" name="RoomSatatus" value="<?php echo $row['RoomSatatus'];?>" /> 
                          

                         <input type="hidden" name="Id_Room" value="<?php echo $ID; ?>" />
                                
                            <br>   <br>
                         <button type="submit"  class="AddroomButtonSave">
                           <h class="textFeature_picture">Save</h> 
                        </button> 
             </div>

           

             <div class=""></div>



             <div class="Addroomflex-row-div2">

                         



                         <div class="divAddroom">

                                <div class="AddroomFrame83">
                                       <h class="Room_number">Facilities</h>

                             
                                  <textarea name="RoomSupplies"type="text" class="AddroomFrame84" required><?php echo $row['RoomSupplies'];?></textarea>
                                 </div>
                                        
                

                         </div>


             </div>


    </div>

    </form>