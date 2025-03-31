<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="../หน้าบ้าน/logout.css?v=1.0" rel="stylesheet">
    <link href="../หน้าบ้าน/Home.css?v=1.0" rel="stylesheet">
    <link href="../หน้าบ้าน/Profile.css?v=1.0" rel="stylesheet">
</head>

<body>
    <?php include('navbarnew.php'); ?>
    <img class="Account" src="../user_img/<?php echo $rowuser['user_img']; ?>" width="100px" height="100px">
    <div class="container-2">
        <div class="nt">
            <a>Name</a>
            <div class="input1">
                <?php echo $rowuser['user_name']; ?>
            </div>
            <a>Surname</a>
            <div class="input1">
                <?php echo $rowuser['Surname']; ?>
            </div>
            <div class="group-Birthday">
                <a>Day</a>
                <div class="input1">
                    <?php echo $rowuser['user_Day']; ?>
                </div>
                <a>Month</a>
                <div class="input">
                    <?php echo $rowuser['user_Month']; ?>
                </div>
                <a>Year</a>
                <div class="input1">
                    <?php echo $rowuser['user_Year']; ?>
                </div>
            </div>
            <div class="groupp">
                <a>Age</a>
                <div class="input1">
                    <?php echo $rowuser['Age']; ?>
                </div>
                <a>Gender</a>
                <div class="input">
                    <?php echo $rowuser['Gender']; ?>
                </div>
            </div>

            <a>Phone No.</a>
            <div class="input">
                <?php echo $rowuser['Phone']; ?>
            </div>

            <a>Resident Registration Address</a>
            <div class="input">
                <?php echo $rowuser['Card_Address']; ?>
            </div>

            <a>Job</a>
            <div class="input">
                <?php echo $rowuser['Job']; ?>
            </div>

            <a>Email</a>
            <div class="input">
                <?php echo $rowuser['Email']; ?>
            </div>
            <a href="Edit-Profile.php" style="text-decoration: none;">
                <button type="button" class="buttons">
                    <h3 class="submit">Edit</h3>
                </button>
            </a>
        </div>
    </div>

    <div class="container-3">
        <div class="Form">
            <h1>สถานะการสั่งจอง มี 3 สถานะ</h1>
            <a href="Booking_detailprofileเช็กออเดอร์.php" role="button" style="text-decoration: none;">
                <button type="button" class="button">
                    <h2 class="submit">Detail</h2>
                </button>
            </a>

            <a>รอทำสัญญา</a><br>
            <a>สำเร็จ</a><br>
            <div class="buttonQut">ไม่สำเร็จ</div><br>
        </div>
    </div>
</body>

</html>