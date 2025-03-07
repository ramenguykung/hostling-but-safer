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

<div class="divEdit">
    <div class="divEditin">
        <div class="Feature_picture">
            <h class="textFeature_picture">Feature Picture</h>
            <img id="img1" src="#" alt="" class="imgmin" onerror="this.onerror=null; this.src='../icon/Waitingtoload.png';">
            <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img1');"/>
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
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img2');"/>
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img3');"/>
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img4');"/>
            </div>

            <div class="Lineupfile">
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img5');"/>
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img6');"/>
                <input type="file" name="Room_img" required class="ButtonFile" accept="image/*" onchange="readURL(this, 'img7');"/>
            </div>
        </div>
    </div>
</div>
