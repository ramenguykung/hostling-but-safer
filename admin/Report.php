<div class="containersbuilding">
    <form name="form1" action="index.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="containersbuilding">
            <div class="Lineup">
                <h>จาก</h>
                <input name="dt1" class="form-control" type="date" required>
                <h>ถึง</h>
                <input name="dt2" class="form-control" type="date" required>
                <button type="submit" class="Button1">
                    <h class="message">ค้นหาตามช่วงวันที่</h>
                </button>
            </div>
        </div>
    </form>

    <form name="form1" action="index.php" method="POST" enctype="multipart/form-data" class="form-horizontal" onsubmit="handleSubmit(event)">
        <div class="containersbuilding">
            <div class="Lineup">
                <select name="Job" id="Job" class="inpu">
                    <option value="">เลือกอาชีพ</option>
                    <option value="พนักงานบริษัท">พนักงานบริษัท</option>
                    <option value="ข้าราชการ">ข้าราชการ</option>
                    <option value="พนักงานรัฐวิสาหกิจ">พนักงานรัฐวิสาหกิจ</option>
                    <option value="นักธุรกิจ/ผู้ประกอบการ">นักธุรกิจ/ผู้ประกอบการ</option>
                    <option value="ฟรีแลนซ์">ฟรีแลนซ์</option>
                    <option value="เจ้าของกิจการส่วนตัว">เจ้าของกิจการส่วนตัว</option>
                    <option value="แพทย์/พยาบาล">แพทย์/พยาบาล</option>
                    <option value="ครู/อาจารย์">ครู/อาจารย์</option>
                    <option value="นักกฎหมาย/ทนาย">นักกฎหมาย/ทนาย</option>
                    <option value="วิศวกร">วิศวกร</option>
                    <option value="สถาปนิก">สถาปนิก</option>
                    <option value="เกษตรกร">เกษตรกร</option>
                    <option value="ชาวประมง">ชาวประมง</option>
                    <option value="แรงงานก่อสร้าง">แรงงานก่อสร้าง</option>
                    <option value="พนักงานโรงงาน">พนักงานโรงงาน</option>
                    <option value="พนักงานขาย">พนักงานขาย</option>
                    <option value="คนขับรถ">คนขับรถ</option>
                    <option value="พ่อครัว/แม่ครัว">พ่อครัว/แม่ครัว</option>
                    <option value="ช่างทำผม/เสริมสวย">ช่างทำผม/เสริมสวย</option>
                    <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>
                    <option value="เกษียณอายุ">เกษียณอายุ</option>
                    <option value="ว่างงาน">ว่างงาน</option>
                    <option value="แม่บ้าน">แม่บ้าน</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>

                <select name="Age" id="Age" class="inpu">
                    <option value="">เลือกช่วงอายุ</option>
                    <option value="15-25">15-25</option>
                    <option value="26-30">26-30</option>
                    <option value="31-40">31-40</option>
                    <option value="41-50">41-50</option>
                    <option value="51-60">51-60</option>
                    <option value="60+">60+</option>
                </select>

                <button type="submit" class="Button">
                    <hh>ค้นหาเฉพาะอาชีพหรือช่วงอายุ</hh>
                </button>

            </div>
        </div>

        <div class="Mone">
            <a href="index.php" style="text-decoration: none;">
                <button type="button" class="ButtonView">
                    <h class="message">แสดงข้อมูลทั้งหมด</h>
                </button>
            </a>
        </div>
</div>
</form>

<script>
    function handleSubmit(event) {
        event.preventDefault();
        const Age = document.getElementById('Age').value;
        const Job = document.getElementById('Job').value;
        if (Age === '' && Job === '') {
            alert('กรุณากรอกข้อมูลอาชีพหรืออายุ');
        }
        event.target.submit();
    }
</script>

<div class="card-body">
    <table id="datatablesSimple" class="table table-bordered">
        <thead>
            <tr>
                <th width="15%">Username</th>
                <th width="3%">Age</th>
                <th width="13%">Job</th>
                <th width="13%">Number of guests</th>
                <th width="10%">Date of stay</th>
                <th width="11%">Move-out date</th>
                <th width="9%">Room price</th>
                <th width="8%">date</th>
                <th width="5%">status</th>
                <!-- <th width="5%">Rating</th>
                <th width="10%">Comment</th> -->

            </tr>
        </thead>

        <?php
        $Job = mysqli_real_escape_string($con, @$_POST['Job']);
        $Age = mysqli_real_escape_string($con, @$_POST['Age']);
        $ddt1 = mysqli_real_escape_string($con, @$_POST['dt1']);
        $ddt2 = mysqli_real_escape_string($con, @$_POST['dt2']);
        $add_date = date('Y/m/d', strtotime($ddt2 . "+1 days"));

        if (($ddt1 != "") & ($ddt2 != "")  & ($Job != "") & ($Age != "")) {
            echo "<p> เริ่มต้นค้นหาจาก  $ddt1 ถึง $add_date  ช่วงอายุ $Age และ อาชีพ $Job</p>";
            $query = "SELECT * FROM booking as p
                INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
                WHERE p.Statuss = 'สำเร็จ' 
                AND p.Date_booking BETWEEN '$ddt1' AND '$add_date'
                AND p.Job = '$Job'
                AND p.Age_range = '$Age'
                ORDER BY p.Date_booking DESC";
        } else if (($Job != "") & ($Age === "")) {
            echo "<p> ค้นหา อาชีพ $Job</p>";
            $query = "SELECT * FROM booking as p
            INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
            WHERE p.Statuss = 'สำเร็จ'  AND p.Job = '$Job'
            ORDER BY p.Date_booking DESC";
        } else if (($Age != "")& ($Job === "")) {
            echo "<p> ค้นหา ช่วงอายุ $Age</p>";
            $query = "SELECT * FROM booking as p
            INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
            WHERE p.Statuss = 'สำเร็จ'    AND p.Age_range = '$Age'
            ORDER BY p.Date_booking DESC";
        } else if (($Age != "") & ($Job != "")) {
            echo "<p> เริ่มต้นค้นหาจาก   อาชีพ $Job และ ช่วงอายุ $Age  </p>";
            $query = "SELECT * FROM booking as p
                INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
                WHERE p.Statuss = 'สำเร็จ' 
                AND p.Date_booking AND p.Job = '$Job'
                AND p.Age_range = '$Age'
                ORDER BY p.Date_booking DESC";
        } else if (($ddt1 != "") & ($ddt2 != "")) {
            echo "<p> เริ่มต้นค้นหาจาก  $ddt1 ถึง $add_date </p>";
            $query = "SELECT * FROM booking as p
                INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
                WHERE p.Statuss = 'สำเร็จ' 
                AND p.Date_booking BETWEEN '$ddt1' AND '$add_date'
                ORDER BY p.Date_booking DESC";
        } else {
            $query = "SELECT * FROM booking as p
            INNER JOIN deposit_payment as t ON p.Id_Booking = t.Id_Booking
            WHERE p.Statuss = 'สำเร็จ'
            ORDER BY p.Date_booking DESC";
        }

        $result = mysqli_query($con, $query);
        // ตรวจสอบจำนวนข้อมูลที่ค้นหามา
        $totalResults = mysqli_num_rows($result);
        // แสดงจำนวนข้อมูลทั้งหมด
        echo "<p>จำนวนการจองห้องทั้งหมด: $totalResults รายการ</p>";

        // ตรวจสอบว่ามีข้อมูลหรือไม่
        if ($totalResults > 0) {
            // หากมีข้อมูล ให้แสดงผล
            while ($row = mysqli_fetch_array($result)) {
                $status = $row['Statuss'];
                $Id_Booking = $row["Id_Booking"];
                $sql2 = "SELECT * FROM review WHERE Id_Booking = $Id_Booking ORDER BY Id_Review DESC";
                $result_t = mysqli_query($con, $sql2) or die("Error in query: $sql " . mysqli_error($con));
                $row2 = mysqli_fetch_array($result_t);
        ?>
                <tr>
                    <td><?php echo $row["user_name"] ?> <?php echo $row["Surname"] ?></td>
                    <td><?php echo $row["Age"] ?></td>
                    <td><?php echo $row["Job"] ?></td>
                    <td><?php echo $row["Number_of_guests"] ?></td>
                    <td><?php echo $row["Start_Date"] ?></td>
                    <td><?php echo $row["End_Date"] ?></td>
                    <td><?php echo $row["Roomprice"] ?></td>
                    <td><?php echo $row["Date_booking"] ?></td>
                    <td><?php echo $row["Statuss"] ?></td>
                    <?php
                    // ตรวจสอบว่ามีข้อมูลใน $row2 หรือไม่
                    if (isset($row2["Rating"]) && isset($row2["Comment"]) && $row2["Rating"] != "" && $row2["Comment"] != "") {
                    ?>
                        <!-- <td><?php echo htmlspecialchars($row2["Rating"]); ?></td>
                        <td><?php echo htmlspecialchars($row2["Comment"]); ?></td> -->
                    <?php
                    } else {
                    ?>
                        <!-- <td>-</td>
                        <td>-</td> -->
                    <?php
                    }
                    ?>
                </tr>
        <?php
            }
        } else {
            // หากไม่มีข้อมูลที่ค้นหา ให้แสดงข้อความแจ้งเตือน
            echo "<tr><td colspan='11' class='text-center text-danger'>ไม่พบข้อมูลที่ค้นหา</td></tr>";
        }
        mysqli_close($con);
        ?>
    </table>
</div>

<!-- CSS สำหรับการคงขนาดตาราง -->
<style>
    #datatablesSimple {
        width: 100%;
        table-layout: fixed;
        /* ทำให้ตารางมีขนาดคงที่ */
    }

    #datatablesSimple td {
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>