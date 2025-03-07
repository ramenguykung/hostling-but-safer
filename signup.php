<?php
include('h.php');
include("condb.php");
?>
<!DOCTYPE html>
<head>
 

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



 
    <!-- <title>Sidebar Example</title> -->

    <link href="./หน้าบ้าน/signup.css?v=1.0" rel="stylesheet" > 
   

  
   
   

   




</head>
<body>
<?php include('ตัวเสริม.php');?>

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
                <img src="icon/LogoBC.png" width="150" height="150" alt="logo">
            </div>
            <div class="Move">
                <div class="containers" >
                    <h1 class="fon">Let’s get to know you!</h1>
                </div>
            </div>
            <form  name="register" action="member_form_add_db.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="signupForm" onsubmit="handleSubmit(event)" >
              
                <div class="frameinput">
                    <div class="Moveinput1">
                        <div class="nt">
                       
                            <input name="Name" id="Name" class="input1" type="text" placeholder="Name" required>
                            <input name="Surname" id="Surname"  class="input1" type="text" placeholder="Surname" required>

                           
                          
                           
                        </div>
                    </div>
                    
                    <div class="frameinput2">
                        <div class="fip2">
                            <h5 class="fontMonth">Month</h5>
                        </div>
                    </div>
                    <select name="Month" id="Month"  class="input" defaultValue="" required>
                        <option value="">Select</option>
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
                    </select>
                    <div class="nt">
                        <input name="Day" id="Day"  class="input1" type="text" placeholder="Day" required list="day-options">
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

                        <input name="Year" id="Year"  class="input1" type="text" placeholder="Year" required>
                    </div>
                    <select name="Gender" id="Gender"  class="input" defaultValue="" required>
                        <option value="">Gender</option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                    <input name="Job" id="Job"  class="input1" type="text" placeholder="Job" required>
                    <input name="Age" id="Age"  class="input1" type="text" placeholder="Age" required>
                    <input name="Card_Address" id="Card_Address"  class="input" type="text" placeholder="Address according to ID card" required>
                    <input name="Phone" id="phonenumber"   class="input" type="text" placeholder="Phone number" required>
                  
                  

                    <input name="Email" id="Email"  class="input" type="email" id="emailInput" placeholder="Email" required>
                    <input name="Password" id="Password"  class="input" type="password" placeholder="Password" required>
                    <input name="ConfirmPassword" id="Passwords"  class="input" type="password" placeholder="Confirm Password" required>
                    <div class="containers" >
                    <h1 class="fon">Profile picture</h1>
                    </div>

                    <input type="file" name="user_img" id="card_img" class="form-control" required />
                    <div class="MovetoggleButtons">
                        <button type="button" onclick="togglePasswordVisibility()" class="buttoneye" >
                            <img id="eyeIcon" src="icon/EyeOpen.png" width="20" height="20" alt="eye">
                        </button>
                    </div>
                    <div class="MovetoggleButtonn">
                        <button type="button" onclick="togglePasswordVisibilitys()" class="buttoneye">
                            <img id="eyeIcons" src="icon/EyeOpen.png" width="20" height="20" alt="eye">
                        </button>
                    </div>


                   
                   
                    <button type="submit" class="button" id="btn"> <h6 class="fontsignup">Sign up</h6>
                    </button> 

                
                    <br><br><br>
                </div>
            </form>
           
        </div>
    </div>


 
    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const phonenumber = document.getElementById('phonenumber').value;
            const errorElement = document.getElementById('error');
            
            const Day = document.getElementById('Day').value;
            const Year = document.getElementById('Year').value;
            
            const Age = document.getElementById('Age').value;
           

            const  Name = document.getElementById('Name').value;

            const Surname = document.getElementById('Surname').value;

            const Job = document.getElementById('Job').value;

            
            const Email = document.getElementById('Email').value;

            const P = document.getElementById('Password').value;
            const CP = document.getElementById('Passwords').value;
            

            if (phonenumber.length !== 10 || !/^\d+$/.test(phonenumber)) {
                
                alert('Phone must contain only numbers and be no longer than 10 digits');
               
                return;
            }
                if(P != CP  ){


                alert('Password do not match!');
               
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



                        if (!/^\d{2}$/.test(Age)) {
                            alert("Age must contain only numbers and exactly 2 digits.");
                          return;
                      }


                      
                      if (!/^[a-zA-Zก-๙]+$/.test(Name)) {
                        alert("Name must contain only letters.");
                            return;
                        }

                        if (!/^[a-zA-Zก-๙]+$/.test(Job)) {
                            alert("occupation must contain only letters.");
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