<?php
$sql = "SELECT * FROM review";
$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));

$sql2 = "SELECT * FROM user";
$result_t = mysqli_query($con, $sql2) or die("Error in query: $sql2 " . mysqli_error($con));

$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result_t);
?>

<div class="CM_Frame64">
    <!-- <?php
            while ($row = mysqli_fetch_array($result)) {
                $row2 = mysqli_fetch_array($result_t);
            ?> -->

    <div class="CM_Frame60">
        <div class="Label-username">
            <h class="textLabel-username">Username</h>
            <img src="../icon/iconAdmin/expand_more.svg" class="CM_img" alt="logo" />
        </div>
        <div class="divLabel-username">
            <img src="../user_img/<?php echo $row2['user_img']; ?>" class="CM_imgUser" alt="logo" />
            <h class="CM_text"><?php echo $row['Name']; ?> <?php echo $row['Lastname']; ?></h>
        </div>
    </div>

    <div class="CM_Frame61">
        <div class="Label-Date">
            <h class="CM_textหลัก">Date</h>
            <img src="../icon/iconAdmin/expand_more.svg" class="CM_img" alt="logo" />
        </div>
        <div class="divLabel-Date">
            <h class="CM_text"><?php echo $row['Date']; ?></h>
        </div>
    </div>

    <div class="CM_Frame62">
        <div class="Label-Comment">
            <h class="CM_textหลัก">Rating</h>
            <img src="../icon/iconAdmin/expand_more.svg" class="CM_img" alt="logo" />
        </div>
        <div class="divLabel-Rating">
            <h class="CM_text"><?php echo $row['Rating']; ?></h>
        </div>
    </div>
    <div class="CM_Frame63">
        <div class="Label-Comment">
            <h class="CM_textหลัก">Comment</h>
            <img src="../icon/iconAdmin/expand_more.svg" class="CM_img" alt="logo" />
        </div>
        <div class="divLabel-Comment">
            <h class="CM_text"><?php echo $row['Comment']; ?></h>
        </div>
    </div>
    <!-- <?php
            }
            mysqli_close($con);
            ?> -->

</div>