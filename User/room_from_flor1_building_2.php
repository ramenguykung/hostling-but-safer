<div class="flex-row-divSR">

    <div class="flex-rolumn-divSR">

        <div class="Selector">
            <div class="Frame55SR">
                <h1 class="textFrame55SR">Building:2</h1>
            </div>

            <div class="SelectorsSR">

                <a class="btn btn-Light" href="SelectRoom-building2.php?act=flor2" role="button" style="text-decoration: none;">
                    <h1 class="textflorSR">2</h1>
                </a>

                <div class="textRectangle16">
                    <h1 class="textflormainSR">1</h1>
                </div>

            </div>
            <h1 class="textFrame55SR">Floor</h1>
        </div>

        <div class="Line2"> </div>
        <!-- ขอบเขตลูป -->
        <?php
        ?>
        <?php
        $floor_5 = 1;
        $query = "SELECT * FROM room_building_2 as p
INNER JOIN building_2 as t ON p.building_2_id = t.building_2_id
WHERE t.floor = $floor_5" or die("Error:" . mysqli_error($con));

        $result = mysqli_query($con, $query);

        ?>

        <?php while ($row = mysqli_fetch_array($result)) { ?>

            <div class="content-holderSR">
                <div class="Layout_diagram">
                    <div class="flex-column-divSR3">
                        <div class="flex-row-divSR2">
                            <?php
                            // ใช้ trim() ลบช่องว่างที่ไม่ต้องการ
                            $roomStatus = trim($row["RoomSatatus"]);

                            // ใช้ strtolower() หรือ strtoupper() เพื่อให้การเปรียบเทียบไม่คำนึงถึงตัวพิมพ์ใหญ่-เล็ก
                            if (strtolower($roomStatus) === "ห้องว่าง") {
                                // ถ้าห้องว่าง แสดงข้อมูลที่ต้องการ
                            ?>
                                <a class="btn btn-Light" href="Booking_page2.php?act=Booking1/2&ID=<?php echo $row["Id_Room"] ?>" role="button" style="text-decoration: none;">
                                    <img src="../Room_img/<?php echo $row["Room_img"] ?>" width="236" height="311  " alt="">

                                    <div class="LabelSR">

                                        <div class="Frame51">
                                            <h1 class="textmaindata">Room:</h1>
                                            <h1 class="textdata"><?php echo $row["RoomNumber"] ?></h1>
                                        </div>

                                        <div class="Frame51">
                                            <h1 class="textmaindata">Room status:</h1>
                                            <h1 class="textdata"><?php echo $row["RoomSatatus"] ?></h1>
                                        </div>

                                        <div class="Frame51">
                                        <h1 class="textmaindata">Dimensions:</h1>
                                        <h1 class="textdata"><?php echo $row["Room_Dimensions"] ?>เมตร</h1>
                                    </div>

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Price/Month:</h1>
                                        <h1 class="textdata"><?php echo $row["MonthlyPrice"] ?> บาท</h1>
                                    </div>

                                        <div class="Frame51">
                                            <h1 class="textmaindata">ค่าไฟ:</h1>
                                            <h1 class="textdata"><?php echo $row["ค่าไฟ"] ?> บาทต่อหน่วย</h1>
                                        </div>

                                        <div class="Frame51">
                                            <h1 class="textmaindata">ค่าน้ำ:</h1>
                                            <h1 class="textdata"><?php echo $row["ค่าน้ำ"] ?> บาทต่อคน</h1>
                                        </div>
                                        
                                        <div class="Frame51">
                                            <h1 class="textmaindata">Supplies:</h1>
                                            <h1 class="textdata"><?php echo $row["RoomSupplies"] ?></h1>
                                        </div>
                                    </div>
                                </a>
                            <?php  } else {  ?>
                                <img src="../Room_img/<?php echo $row["Room_img"] ?>" width="236" height="311" alt="" style="border:7px solid rgba(242, 31, 12, 0.50);">

                                <div class="roomisnotavailableLabelSR">

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Room:</h1>
                                        <h1 class="textdata"><?php echo $row["RoomNumber"] ?></h1>
                                    </div>

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Room status:</h1>
                                        <h1 class="textdata"><?php echo $row["RoomSatatus"] ?></h1>
                                    </div>

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Dimensions:</h1>
                                        <h1 class="textdata"><?php echo $row["Room_Dimensions"] ?>เมตร</h1>
                                    </div>

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Price/Month:</h1>
                                        <h1 class="textdata"><?php echo $row["MonthlyPrice"] ?> บาท</h1>
                                    </div>

                                    <div class="Frame51">
                                            <h1 class="textmaindata">ค่าไฟ:</h1>
                                            <h1 class="textdata"><?php echo $row["ค่าไฟ"] ?> บาทต่อหน่วย</h1>
                                        </div>

                                        <div class="Frame51">
                                            <h1 class="textmaindata">ค่าน้ำ:</h1>
                                            <h1 class="textdata"><?php echo $row["ค่าน้ำ"] ?> บาทต่อคน</h1>
                                        </div>

                                    <div class="Frame51">
                                        <h1 class="textmaindata">Supplies:</h1>
                                        <h1 class="textdata"><?php echo $row["RoomSupplies"] ?></h1>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php  }
        mysqli_close($con);
        ?>
        <!-- ขอบเขตลูป -->
    </div>
</div>