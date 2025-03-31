<?php
include("h.php");
include("../condb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC House</title> <link rel="icon" href="../icon/LogoBC.png" type="image/x-icon">
    <link href="../หน้าบ้าน/Feedback-write.css?v=1.0" rel="stylesheet">
</head>

<body>

    <?php
    $sql = "SELECT * FROM booking as p 
INNER JOIN  deposit_payment as t ON p.Id_Booking  = t.Id_Booking 
WHERE 	Id_User =$member_id
ORDER BY p.Id_Booking  DESC" or die("Error:" . mysqli_error());
    $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);

    ?>
    <div class="feedback">
        <h1>Feedback Form</h1>
        <div class="Form">
            <h2>How do you rate your overall expericence?</h2>
            <form name="register" action="Feedback-Write-process.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="rating">
                    <label for="very-bad"><input type="radio" id="very-bad" name="rating" value="very-bad" required> Very Bad</label>
                    <label for="bad"><input type="radio" id="bad" name="rating" value="bad" required> Bad</label>
                    <label for="average"><input type="radio" id="average" name="rating" value="average" required> Average</label>
                    <label for="good"><input type="radio" id="good" name="rating" value="good" required> Good</label>
                    <label for="excellent"><input type="radio" id="excellent" name="rating" value="excellent" required> Excellent</label>
                </div>
        </div>

        <div class="Form-Detail">
            <div class="text-input">
                <div class="Name">
                    <a>Name</a>
                    <input type="hidden" name="user_name" value="<?php echo $rowuser['user_name']; ?>" />
                    <input type="hidden" name="Id_User" value="<?php echo $rowuser['Id_User']; ?>" />
                    <input type="hidden" name="Id_Booking" value="<?php echo $row['Id_Booking']; ?>" />
                    <div class="input">
                        <?php echo $rowuser['user_name']; ?>
                    </div>
                </div>

                <div class="Lestname">
                    <a>Lestname</a>
                    <input type="hidden" name="Surname" value="<?php echo $rowuser['Surname']; ?>" />
                    <div class="input">
                        <?php echo $rowuser['Surname']; ?>
                    </div>
                </div>

                <div class="Age">
                    <a>Age</a>
                    <input type="hidden" name="Age" value="<?php echo $rowuser['Age']; ?>" />
                    <div class="input">
                        <?php echo $rowuser['Age']; ?>
                    </div>


                </div>
                <div class="Phone">
                    <a>Phone</a>
                    <input type="hidden" name="Phone" value="<?php echo $rowuser['Phone']; ?>" />
                    <div class="input">
                        <?php echo $rowuser['Phone']; ?>
                    </div>
                </div>

                <div class="Message">
                    <a>Message</a>
                    <textarea name="Message" type="text" class="AddroomFrame84" required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="button">
            <h3 class="submit">Submit</h3>
        </button>
        </form>
    </div>
    </div>

</body>

</html>