<?php
include('h.php');
include("condb.php");
?>
<!DOCTYPE html>

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- <title>Sidebar Example</title> -->

    <link href="./หน้าบ้าน/signup.css?v=1.0" rel="stylesheet">











</head>

<body style="background-color: #E2EDD2">
    <?php include('ตัวเสริม.php'); ?>

    <div class="containers">
        <h1 class="SU">Sign up</h1>
    </div>

    <a href="formlogin.php">
        <div class="signup">
            <button class="buttonIconLeft">
                <img src="icon/IconLeft.png" width="20" height="20" alt="logo">
            </button>
        </div>
    </a>

    <div class="containers">
        <div class="frame">
            <div class="containers">
                <img class="photo" src="icon/LogoBC.png" width="150" height="150" alt="logo">
            </div>
            <div class="Move">
                <div class="containers">
                    <h1 class="fon">Let’s get to know you!</h1>
                </div>
            </div>
            <form name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="signupForm" onsubmit="handleSubmit(event)">

                <div class="frameinput">
                    <div class="Moveinput1">
                        <div class="nt">

                            <input name="Name" id="Name" class="input1" type="text" placeholder="Name" required>
                            <input name="Surname" id="Surname" class="input1" type="text" placeholder="Surname" required>




                        </div>
                    </div>

                    <div class="frameinput2">
                        <div class="fip2">
                            <h5 class="fontMonth">Your Birthday</h5>
                        </div>
                    </div>
                    <input name="Month" id="Month"  class="input" type="text" placeholder="Month" required list="Month-options" >
                    

                    <datalist id="Month-options" >
                
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


                    <div class="nt">
                        <input name="Day" id="Day" class="input1" type="text" placeholder="Day" required list="day-options">
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


                        <input name="Year" id="Year"  class="input1" placeholder="Year" type="text" list="Year-options"  required>
                <datalist id="Year-options">

                <?php
        $currentYear = date("Y");
        for ($year = 1955; $year <= $currentYear; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
         ?> </datalist>

                    </div>
                    <select name="Gender" id="Gender" class="input" defaultValue="" required>
                        <option value="">Gender</option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                        <option value="lgbtq">LGBTQ+</option>
                    </select>


                    <select name="Job" type="text" class="input" required>
                        <option value="">Job</option>
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

                    <input name="Age" id="Age" class="input" type="text" placeholder="Age" required>
                    <input name="Card_Address" id="Card_Address" class="input" type="text" placeholder="Address according to ID card" required>
                    <input name="Phone" id="phonenumber" class="input" type="text" placeholder="Phone number" required>



                    <input name="Email" id="Email" class="input" type="email" id="emailInput" placeholder="Email" required>
                    <input name="Password" id="Password" class="input" type="password" placeholder="Password" required>
                    <input name="ConfirmPassword" id="Passwords" class="input" type="password" placeholder="Confirm Password" required>
                    <div class="containers">
                        <h1 class="fon">Profile picture</h1>
                    </div>

                    <input type="file" name="user_img" id="card_img" class="form-control" required />
                    <div class="MovetoggleButtons">
                        <button type="button" onclick="togglePasswordVisibility()" class="buttoneye">
                            <img id="eyeIcon" src="icon/EyeOpen.png" width="20" height="20" alt="eye">
                        </button>
                    </div>
                    <div class="MovetoggleButtonn">
                        <button type="button" onclick="togglePasswordVisibilitys()" class="buttoneye">
                            <img id="eyeIcons" src="icon/EyeOpen.png" width="20" height="20" alt="eye">
                        </button>
                    </div>




                    <button type="submit" class="button" id="btn">
                        <h6 class="fontsignup">Sign up</h6>
                    </button>




                    <br><br><br>
                </div>
            </form>

        </div>
    </div>

    <script>
        // เมื่อหน้าโหลดเสร็จเรียบร้อย
        window.onload = function() {
            const currentYear = new Date().getFullYear(); // ปีปัจจุบัน
            const yearSelect = document.getElementById('Year'); // รับ reference ของ select element

            // เพิ่มตัวเลือกจากปี 1999 ถึงปีปัจจุบัน
            for (let year = 1999; year <= currentYear; year++) {
                const option = document.createElement('option'); // สร้าง option ใหม่
                option.value = year; // กำหนด value ให้เป็นปี
                option.textContent = year; // แสดงปีใน text ของ option
                yearSelect.appendChild(option); // เพิ่ม option เข้าไปใน select s
            }
        };
    </script>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const phonenumber = document.getElementById('phonenumber').value;


            const Card_Address = document.getElementById('Card_Address').value;
            const Day = document.getElementById('Day').value;
            const Year = document.getElementById('Year').value;
            
            const currentYear = new Date().getFullYear(); // ปีปัจจุบัน

            const Age = document.getElementById('Age').value;

            const Month = document.getElementById('Month').value;

            const Name = document.getElementById('Name').value;

            const Surname = document.getElementById('Surname').value;




            const Email = document.getElementById('Email').value;

            const P = document.getElementById('Password').value;
            const CP = document.getElementById('Passwords').value;



            if (phonenumber.length !== 10 || !/^\d+$/.test(phonenumber)) {

                alert('Phone must contain only numbers and be no longer than 10 digits');

                return;
            }

            if (phonenumber === "0000000000") {
                alert('The phone number is not allowed to be 0000000000.');
                return;
            }




            if (!/^[a-zA-Z0-9ก-๙\s\.]+$/.test(Card_Address)) {
                alert('The address does not allow special characters, except for a single period.');
                return;
            }


            if (P != CP) {


                alert('Password do not match!');

                return;


            }


            if (P.length < 6) {
                alert('Password must contain at least 6 characters.');
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


            const validMonths = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        if (!validMonths.includes(Month)) {
            alert("Please check and enter the correct month..");
            return;
        }

                        if (Year < 1983 || Year > currentYear) {
                        alert("Year must be between 1983 and the current year.");
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

            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(Email)) {
                alert("Please enter a valid email address (e.g. user@example.com)");
                return;
            }





            // If no error, clear the error message






            event.target.submit();
        }

        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('Password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.src = 'icon/EyeClosed.png';
            } else {
                passwordInput.type = 'password';
                eyeIcon.src = 'icon/EyeOpen.png';
            }
        }

        function togglePasswordVisibilitys() {
            const passwordInput = document.getElementById('Passwords');
            const eyeIcon = document.getElementById('eyeIcons');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.src = 'icon/EyeClosed.png';
            } else {
                passwordInput.type = 'password';
                eyeIcon.src = 'icon/EyeOpen.png';
            }
        }
    </script>




</body>

</html>