<?php 
$ID = mysqli_real_escape_string($con,$_GET['ID']);
$sql = "SELECT * FROM room_building_1 as p 
INNER JOIN building_1 as t ON p.building_1_id  = t.building_1_id 
WHERE Id_Room =$ID
ORDER BY p.Id_Room  DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);


$sql2 = "SELECT * FROM building_1 
ORDER BY building_1_id DESC" or die("Error:" . mysqli_error());
$result_t = mysqli_query($con, $sql2) or die ("Error in query: $sql " . mysqli_error());


?>


<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<div class=""></div>

<div class="divEdit">

<div class="divEditin">

<div class="Feature_picture">
    <h class="textFeature_picture"> Feature Picture</h>

    <div class="imgmin">
        
    </div>

    <input type="file" name="user_img" id="card_img" class="ButtonFile" required />


   
</div>

<div class="Feature_pictureimg">
    <h class="textFeature_picture"> Additional Picture</h>


    </div>

</div>





</div>