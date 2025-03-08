<?php
$query2 = "SELECT * FROM building_1 ORDER BY building_1_id asc" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);
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

<form  name="register" action="room_process_add_building_1.php" method="POST" enctype="multipart/form-data" class="form-horizontal"  >
<div class="divEdit">
    <div class="divEditin">
        <div class="Feature_picture">
            <h class="textFeature_picture">Feature Picture</h>
            <img id="img1" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
            <input type="file" name="Room_img[]" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img1');"/>
        </div>

        <div class="Feature_pictureimg">
            <h class="textFeature_picture">Additional Pictures</h>
            <div class="Picture">
                <img id="img2" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <img id="img3" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <img id="img4" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <img id="img5" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <img id="img6" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <img id="img7" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
            </div>

            <div class="Lineupfile">
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img2');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img3');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img4');"/>
            </div>

            <div class="Lineupfile">
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img5');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img6');"/>
                <input type="file" name="Room_img[]"  class="ButtonFile" accept="image/*" onchange="readURL(this, 'img7');"/>
            </div>
        </div>
    </div>





    <div class="Admin-room-createFrame82">

             <div class="Addroomflex-row-div1">


                        <div class="Admin-room-createFrame81">

                                <div class="Room_numberandCost">

                                          <h class="Room_number"> Room Number</h>

                                          <input name="RoomNumber" id="" class="Textinput" type="text" placeholder="" required>

                                  </div>

                                <div class="Room_numberandCost">

                                         <h class="Room_number">Cost </h> 

                                         <input name="MonthlyPrice" id="" class="Textinput" type="text" placeholder="" required>

                                </div>



                                 <div class="Room_numberandCost">

                                         <h class="Room_number">floor</h> 

                        

                                         <select name="building_1_id" class="Textinputfloor" required>
                                          <option value=""><h class="textFeature_picture"> Select room floor</h></option>
                                          <?php foreach($result2 as $results){?>
                                       <option value="<?php echo $results["building_1_id"];?>">
                                            <?php echo $results["floor"]; ?>
                                          </option>
                                       <?php } ?>
                                         </select>

                                </div>


                         </div>

                         <input type="hidden" name="RoomSatatus" value="ห้องว่าง" /> 
                         <input type="hidden" name="Room_Dimensions" value="3.2 * 5.2 เมตร" /> 
                         <input type="hidden" name="ค่าไฟ" value="7" /> 
                         <input type="hidden" name="ค่าน้ำ" value="100" /> 
                                
                            <br>   <br>
                         <button type="submit"  class="AddroomButtonSave">
                           <h class="textFeature_picture">Save</h> 
                        </button> 
             </div>

           

             <div class=""></div>



             <div class="Addroomflex-row-div2">

                         <div class="divAddroom">


                                       <div class="AddroomFrame83">
                                       <h class="Room_number">Description</h>

                                       
                                       <textarea name="RoomDetails" class="AddroomFrame84" type="text" required></textarea>
                                       </div>
                                        
                                     
                                       



                         </div>



                         <div class="divAddroom">

                                <div class="AddroomFrame83">
                                       <h class="Room_number">Facilities</h>

                             
                                  <textarea name="RoomSupplies"type="text" class="AddroomFrame84"  required></textarea>
                                 </div>
                                        
                

                         </div>


             </div>


    </div>

    </form>






























    </div>