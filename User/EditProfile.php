<?php 
$sql = "SELECT * FROM user WHERE Id_User =$member_id";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?>


<?php include('ตัวเสริม.php');?>


<div class="po">
    <img src="../user_img/<?php echo $row['user_img']; ?>" width="150" height="150" alt="logo" />
</div>


<form  name="register" action="fileEditProfile.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="signupForm"id="signupForm" onsubmit="handleSubmit(event)"  >
<input type="file" name="user_imgnew"  class="Moveinputimg"  accept="image/*" onchange="readURL(this);" >
<input type="hidden" name="user_img" value="<?php echo $row['user_img'];?>">
<div class="containers">
    <div class="frame">
        <div class="frameinput2">
            <h5 class="fip2">Name</h5>
            <input name="Name" id="Name" class="input" type="text" value="<?php echo $row['user_name'];?>" required>
     
       

            <h5 class="fip3">Last name</h5>         
            <br>

            <input name="Surname" id="Surname"  class="input" type="text"value="<?php echo $row['Surname'];?>" required>
            
            <br>

            <h5 class="fip44">Day</h5>
            <h5 class="fip55">Month</h5>
            <h5 class="fip66">Year</h5>
            <div class="nt">

            <input name="Day" id="Day"  class="input1" type="text" required list="day-options" value="<?php echo $row['user_Day'];?>">
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

                            <select name="Month" id="Month"  class="input1"   required>
                        <option value="<?php echo $row['user_Month'];?>"><?php echo $row['user_Month'];?></option>
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

               
                
                <input name="Year" id="Year"  class="input1" type="text" value="<?php echo $row['user_Year'];?>" required>
                

               
                
            </div>
            <br>

            <h5 class="fip77">Age</h5>
            

            <input name="Age" id="Age"  class="input" type="text" value="<?php echo $row['Age'];?>" required>
            <br>

            <h5 class="fip99">Gender</h5>
            <select name="Gender" id="Gender"  class="input"  required>
                        <option value="<?php echo $row['Gender'];?>"><?php echo $row['Gender'];?></option>
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
            
           
            <h5 class="fip88">Phone No.</h5>
            <br>

            <input name="Phone" id="phonenumber"   class="input" type="text" value="<?php echo $row['Phone'];?>" required>
            
           
            <br>
            <h5 class="fip100">Resident Registration Address</h5>
          

            <input name="Card_Address" id="Card_Address"  class="input" type="text" value="<?php echo $row['Card_Address'];?>" required>
            
            <br>
            <h5 class="fip111">Job</h5>
            

            <input name="Job" id="Job"  class="input" type="text"  value="<?php echo $row['Job'];?>" required>


            <input type="hidden" name="Id_User" value="<?php echo $row['Id_User']; ?>" /> 
           
           
            <br>
            
                <button class="button" type="submit" id="btn">
                    <h6 class="fontsignup">Save</h6>
                </button>
         
            <br><br><br>
        </div>
    </div>
</div>

</form>

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

            
         

        
            

            if (phonenumber.length !== 10 || !/^\d+$/.test(phonenumber)) {
                
                alert('Phone must contain only numbers and be no longer than 10 digits');
               
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

                       





            // If no error, clear the error message
           
          

    


            event.target.submit();
        }

        

        



    </script>