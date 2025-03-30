<?php
$query = "SELECT * FROM booking as p
INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
ORDER BY p.Id_Booking DESC" or die("Error:" . mysqli_error());
$result = mysqli_query($con, $query);

// $sql = "SELECT * FROM booking WHERE Id_Booking = $member_id";
// $result = mysqli_query($con,$sql) or die ("Error in query:  $sql" . mysqli_error());
?>

<h class="textPaymentEntries">Payment Entries</h>
<br>
<?php while ($row = mysqli_fetch_array($result)) { ?>

    <div class="room-card">
        <div class="div-align-left">
            <div class="flex-column-row">
                <div class="flex-column-div">
                    <h class="text1">Username:</h>
                    <h class="text2"><?php echo $row["user_name"] ?> <?php echo $row["Surname"] ?></h>
                </div>

                <div class="flex-column-div">
                    <h class="text1">Room:</h>
                    <h class="text2"><?php echo $row["RoomNumber"] ?> | <h class="text1">floor:</h><?php echo $row["floor"] ?> | <h class="text1">Building:</h> <?php echo $row["Building"] ?></h>
                    </h>
                </div>

                <?php
                if ($row["Statuss"] === "สำเร็จ") {
                ?>
                    <div class="flex-column-div">
                        <h class="text1">status:</h>
                        <h class="text2" style="color:green;"><?php echo $row["Statuss"]; ?></h>
                    </div>
                <?php
                } else if ($row["Statuss"] === "ไม่สำเร็จ") {
                ?>
                    <div class="flex-column-div">
                        <h class="text1">status:</h>
                        <h class="text2" style="color:red;"><?php echo $row["Statuss"]; ?></h>
                    </div>
                <?php
                } else {
                ?>
                    <div class="flex-column-div">
                        <h class="text1">status:</h>
                        <h class="text2" style="color:blue;"><?php echo $row["Statuss"]; ?></h>
                    </div>
                <?php
                }
                ?>
                <div class="flex-column-div">
                    <h class="text1">Payment Method:</h>
                    <h class="text2"><?php echo $row["Method"] ?></h>
                </div>

                <div class="flex-column-div">
                    <h class="text1">Date:</h>
                    <h class="text2"><?php echo $row["Date_booking"] ?></h>
                </div>
            </div>
        </div>

        <div class="action-button">
            <a href="Admin-payment.php?act=Booking-details&ID=<?php echo $row["Id_Booking"] ?>" style="text-decoration: none;">
                <button class="ButtonBookingdetai" id="btn">
                    <h6 class="messageBookingdetails">Booking details</h6>
                </button>
            </a>
        </div>
    </div>
<?php  }
mysqli_close($con);

?>