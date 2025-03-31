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
    <link href="../หน้าบ้าน/Edit-Profile.css?v=1.0" rel="stylesheet">
</head>

<body>
    <?php include('navbarnew.php'); ?>
    <img class="Account" src="../user_img/<?php echo $rowuser['user_img']; ?>" width="100px" height="100px">

    <form name="register" action="fileEditProfile.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="signupForm" id="signupForm" onsubmit="handleSubmit(event)">
        <div class="container-2">
            <div class="nt">
                <a>Name</a><input name="Name" id="Name" class="input1" type="text" value="<?php echo $rowuser['user_name']; ?>" required>
                <a>Surname</a> <input name="Surname" id="Surname" class="input1" type="text" value="<?php echo $rowuser['Surname']; ?>" required>
                <div class="group-Birthday">
                    <a>Day</a> <input name="Day" id="Day" class="input1 " type="text" required list="day-options" value="<?php echo $rowuser['user_Day']; ?>">
                    <datalist id="day-options">
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                        <option value="4"></option>
                        <option value="5"></option>
                        <option value="6"></option>
                        <option value="7"></option>
                        <option value="8"></option>
                        <option value="9"></option>
                        <option value="10"></option>
                        <option value="11"></option>
                        <option value="12"></option>
                        <option value="13"></option>
                        <option value="14"></option>
                        <option value="15"></option>
                        <option value="16"></option>
                        <option value="17"></option>
                        <option value="18"></option>
                        <option value="19"></option>
                        <option value="20"></option>
                        <option value="21"></option>
                        <option value="22"></option>
                        <option value="23"></option>
                        <option value="24"></option>
                        <option value="25"></option>
                        <option value="26"></option>
                        <option value="27"></option>
                        <option value="28"></option>
                        <option value="29"></option>
                        <option value="30"></option>
                        <option value="31"></option>
                    </datalist>

                    <a>Month</a> <input name="Month" id="Month" class="input1" type="text" required list="Month-options" value="<?php echo $rowuser['user_Month']; ?>">
                    <datalist id="Month-options">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </datalist>

                    <a>Year</a> <input name="Year" id="Year" class="input1 " type="text" list="Year-options" value="<?php echo $rowuser['user_Year']; ?>" required>
                    <datalist id="Year-options">
                        <?php
                        $currentYear = date("Y");
                        for ($year = 1955; $year <= $currentYear; $year++) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                        ?>
                    </datalist>
                </div>

                <div class="groupp">
                    <a>Age</a> <input name="Age" id="Age" class="input1" type="text" value="<?php echo $rowuser['Age']; ?>" required>
                    <h>Gender</h> <select name="Gender" id="Gender" class="input" required>
                        <?php if ($rowuser["Gender"] === "Woman") { ?>
                            <option value="woman">Woman</option>
                            <option value="man">Man</option>
                            <option value="lgbtq">LGBTQ+</option>
                        <?php      } else { ?>
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                            <option value="lgbtq">LGBTQ+</option>
                        <?php    } ?>
                    </select>
                </div>

                <a>Phone</a> <input name="Phone" id="phonenumber" class="input" type="text" value="<?php echo $rowuser['Phone']; ?>" required>
                <a>Resident Registration Address</a><input name="Card_Address" id="Card_Address" class="input" type="text" value="<?php echo $rowuser['Card_Address']; ?>" required>
                <a>Job</a><br> <select name="Job" type="text" class="input" required>
                    <option value="<?php echo $rowuser['Job']; ?>"><?php echo $rowuser['Job']; ?></option>
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

                <br>
                <a>รูปโปรไฟล์</a><input type="file" name="user_imgnew" class="input">
                <input type="hidden" name="user_img" value="<?php echo $rowuser['user_img']; ?>">
                <input type="hidden" name="Id_User" value="<?php echo $rowuser['Id_User']; ?>" />
                <button type="submit" class="button">
                    <h3 class="submit">Save</h3>
                </button>
            </div>
        </div>
    </form>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const phonenumber = document.getElementById('phonenumber').value;
            const Card_Address = document.getElementById('Card_Address').value;
            const Day = document.getElementById('Day').value;
            const Year = document.getElementById('Year').value;
            const Age = document.getElementById('Age').value;
            const Name = document.getElementById('Name').value;
            const Surname = document.getElementById('Surname').value;
            const Month = document.getElementById('Month').value;
            const currentYear = new Date().getFullYear(); // ปีปัจจุบัน

            if (phonenumber.length !== 10 || !/^\d+$/.test(phonenumber)) {
                alert('Phone must contain only numbers and be no longer than 10 digits');
                return;
            }

            if (phonenumber === "0000000000") {
                alert('The phone number is not allowed to be 0000000000.');
                return;
            }

            const validMonths = [
                "January", "February", "March", "April", "May", "June",
                "July", "August", "September", "October", "November", "December"
            ];

            if (!validMonths.includes(Month)) {
                alert("Please check and enter the correct month..");
                return;
            }

            if (!/^[a-zA-Z0-9ก-๙\s\.]+$/.test(Card_Address)) {
                alert('The address does not allow special characters, except for a single period.');
                return;
            }

            if (!/^\d{1,2}$/.test(Day)) {
                alert('day must contain only numbers and be no longer than 2 digits.');
                return;
            }

            if (!/^(0?[1-9]|[12][0-9]|3[01])$/.test(Day)) {
                alert("Day must be a number between 1 and 31.");
                return;
            }

            if (!/^\d{4}$/.test(Year)) {
                alert("Year must contain only numbers and exactly 4 digits.");
                return;
            }

            if (Year < 1983 || Year > currentYear) {
                alert("Year must be between 1000 and the current year.");
                return;
            }

            if (!/^\d{2}$/.test(Age) || Age === "00") {
                alert("Age must contain only numbers and exactly 2 digits, and cannot be '00'.");
                return;
            }

            if (!/^[a-zA-Zก-๙]+$/.test(Name)) {
                alert("Name must contain only letters.");
                return;
            }

            if (!/^[a-zA-Zก-๙]+$/.test(Surname)) {
                alert("Surname must contain only letters.");
                return;
            }
            // If no error, clear the error message
            event.target.submit();
        }
    </script>

</body>

</html>