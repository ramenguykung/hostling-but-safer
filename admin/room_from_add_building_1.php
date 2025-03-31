<?php
$query2 = "SELECT * FROM building_1 ORDER BY building_1_id asc" or die("Error:" . mysqli_error());
$result2 = mysqli_query($con, $query2);
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


<form name="register" action="room_process_add_building_1.php" method="POST" enctype="multipart/form-data" class="form-horizontal" onsubmit="handleSubmit(event)">
    <div class="divEdit">
        <div class="divEditin">
            <div class="Feature_picture">
                <h class="textFeature_picture">Feature Picture</h>
                <img id="img1" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
                <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img1');" required />
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
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img2');" required />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img3');" required />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img4');" required />
                </div>

                <div class="Lineupfile">
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img5');" required />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img6');" required />
                    <input type="file" name="Room_img[]" class="ButtonFile" accept="image/*" onchange="readURL(this, 'img7');" required />
                </div>
            </div>
        </div>
        <div class="Admin-room-createFrame82">
            <div class="Addroomflex-row-div1">
                <div class="Admin-room-createFrame81">
                    <div class="Room_numberandCost">
                        <h class="Room_number">floor</h>
                        <select name="building_1_id" class="Textinputfloor" required>
                            <option value="">
                                <h class="textFeature_picture"> Select room floor</h>
                            </option>
                            <?php foreach ($result2 as $results) { ?>
                                <option value="<?php echo $results["building_1_id"]; ?>">
                                    <?php echo $results["floor"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number"> Room Number</h>
                        <input name="RoomNumber" id="RoomNumber" class="Textinput" type="text" placeholder="" required>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">Dimension</h>
                        <input name="Room_Dimensions" id="Room_Dimensions" class="Textinput" type="text" required>
                        <h class="Room_number">เมตร </h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">Cost </h>
                        <input name="MonthlyPrice" id="MonthlyPrice" class="Textinput" type="text" placeholder="" required>
                        <h class="Room_number">บาท </h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">ค่าไฟ</h>
                        <input name="ค่าไฟ" id="ค่าไฟ" class="Textinput" type="text" required>
                        <h class="Room_number">บาทต่อหน่วย</h>
                    </div>

                    <div class="Room_numberandCost">
                        <h class="Room_number">ค่าน้ำ</h>
                        <input name="ค่าน้ำ" id="ค่าน้ำ" class="Textinput" type="text" required>
                        <h class="Room_number">บาทต่อคน</h>
                    </div>
                </div>

                <input type="hidden" name="RoomSatatus" value="ห้องว่าง" />
                <input type="hidden" name="Building" value="1" />
                <br> <br>
                <button type="submit" class="AddroomButtonSave">
                    <h class="textFeature_picture">Save</h>
                </button>
            </div>

            <div class="Addroomflex-row-div2">
                <div class="divAddroom">
                    <div class="AddroomFrame83">
                        <h class="Room_number">Facilities</h>
                        <textarea name="RoomSupplies" type="text" class="AddroomFrame84" required></textarea>
                    </div>
                </div>
            </div>
        </div>
</form>
</div>

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