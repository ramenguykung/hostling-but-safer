<?php
$ID = mysqli_real_escape_string($con, $_GET['ID']);
$sql = "SELECT * FROM room_building_1 as p 
INNER JOIN building_1 as t ON p.building_1_id  = t.building_1_id 
WHERE Id_Room =$ID
ORDER BY p.Id_Room  DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
$sql2 = "SELECT * FROM building_1 
ORDER BY building_1_id DESC" or die("Error:" . mysqli_error());
$result_t = mysqli_query($con, $sql2) or die("Error in query: $sql " . mysqli_error());
?>
<script type="text/javascript">
    function readURL(input, imgId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(imgId).src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<form name="register" action="room_process_edit_building_1.php" method="POST" enctype="multipart/form-data" class="form-horizontal" onsubmit="handleSubmit(event)">
    <div class="divEdit">
        <div class="divEditin">
            <div class="Feature_picture">
                <h class="textFeature_picture">Feature Picture</h>
                <img id="img1" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../Room_img/<?php echo $row['Room_img']; ?>';">
                <input type="file" name="Room_img[]" value="<?php echo $row['Room_img']; ?>" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img1');" />
                <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img']; ?>">
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
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img2');" />

                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img3');" />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img4');" />

                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img1']; ?>">
                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img2']; ?>">
                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img3']; ?>">
                </div>

                <div class="Lineupfile">
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img5');" />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img6');" />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img7');" />

                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img4']; ?>">
                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img5']; ?>">
                    <input type="hidden" name="Room_img0[]" value="<?php echo $row['Room_img6']; ?>">
                </div>
            </div>
        </div>

        <div class="Admin-room-createFrame82">
            <div class="Addroomflex-row-div1">
                <div class="Admin-room-createFrame81">
                    <div class="Room_numberandCost">
                        <h class="Room_number">Status Room</h>
                        <select name="statusrooom" class="Textinputfloor">
                            <?php if ($row["RoomSatatus"] != "ห้องว่าง") { ?>
                                <option value="<?php echo $row['RoomSatatus']; ?>"><?php echo $row['RoomSatatus']; ?></option>
                                <option value="ห้องว่าง">ห้องว่าง</option>
                            <?php    } else { ?>
                                <option value="<?php echo $row['RoomSatatus']; ?>"><?php echo $row['RoomSatatus']; ?></option>
                                <option value="ไม่ห้องว่าง">ไม่ห้องว่าง</option>
                            <?php      } ?>
                        </select>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">floor</h>
                        <select name="building_1_id" class="Textinputfloor" required>
                            <option value="<?php echo $row['building_1_id']; ?>"><?php echo $row['floor']; ?></option>
                            <?php foreach ($result_t as $results) { ?>
                                <option value="<?php echo $results["building_1_id"]; ?>">
                                    <?php echo $results["floor"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number"> Room Number</h>
                        <input name="RoomNumber" id="RoomNumber" class="Textinput" type="text" value="<?php echo $row['RoomNumber']; ?>" required>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">Dimension</h>
                        <input name="Room_Dimensions" id="Room_Dimensions" class="Textinput" type="text" value="<?php echo $row['Room_Dimensions']; ?>" required>
                        <h class="Room_number">เมตร</h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">Cost </h>
                        <input name="MonthlyPrice" id="MonthlyPrice" class="Textinput" type="text" value="<?php echo $row['MonthlyPrice']; ?>" required>
                        <h class="Room_number">บาท </h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">ค่าไฟ</h>
                        <input name="ค่าไฟ" id="ค่าไฟ" class="Textinput" type="text" value="<?php echo $row['ค่าไฟ']; ?>" required>
                        <h class="Room_number">บาทต่อหน่วย</h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">ค่าน้ำ</h>
                        <input name="ค่าน้ำ" id="ค่าน้ำ" class="Textinput" type="text" value="<?php echo $row['ค่าน้ำ']; ?>" required>
                        <h class="Room_number">บาทต่อคน</h>
                    </div>
                </div>
                <input type="hidden" name="Id_Room" value="<?php echo $ID; ?>" />
                <br> <br>

                <button type="submit" class="AddroomButtonSave">
                    <h class="textFeature_picture">Save</h>
                </button>
            </div>

            <div class="Addroomflex-row-div2">
                <div class="divAddroom">
                    <div class="AddroomFrame83">
                        <h class="Room_number">Facilities</h>
                        <textarea name="RoomSupplies" type="text" class="AddroomFrame84" required><?php echo $row['RoomSupplies']; ?></textarea>
                    </div>
                </div>
            </div>
        </div>
</form>

<script>
    function handleSubmit(event) {
        event.preventDefault();
        const RoomNumber = document.getElementById('RoomNumber').value;
        const Room_Dimensions = document.getElementById('Room_Dimensions').value;
        const ค่ าน้ ำ = document.getElementById('ค่าน้ำ').value;
        const ค่ าไฟ = document.getElementById('ค่าไฟ').value;
        const MonthlyPrice = document.getElementById('MonthlyPrice').value;

        if (!/^\d+$/.test(RoomNumber)) {
            alert('Room numbers must consist only of numbers and must not contain spaces in the input fields.');
            return;
        }

        if (RoomNumber < 1 || RoomNumber > 19) {
            alert('Room number must be between 1 and 19 (inclusive), and must not be 0.');
            return;
        }

        if (!/^\d+$/.test(ค่ าน้ ำ)) {
            alert('Water rates must be entered as numbers only and must not contain spaces in the input fields.');
            return;
        }

        if (!/^\d+$/.test(ค่ าไฟ)) {
            alert('Electricity rates must be entered as numbers only and must not contain spaces in the input fields.');
            return;
        }

        if (!/^\d+$/.test(MonthlyPrice)) {
            alert('Monthly price must contain only numbers and must not contain spaces in the input fields. ');
            return;
        }

        if (/[^a-zA-Z0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(Room_Dimensions)) {
            alert('Dismension is numbers and special characters only.');
            return;
        }
        event.target.submit();
    }
</script>