<!-- <?php 
$sql = "SELECT * FROM user WHERE Id_User =$member_id";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
?> -->





<div class="po">
    <img src="../user_img/<?php echo $row['user_img']; ?>" width="150" height="150" alt="logo" />
</div>

<div class="containers">
    <div class="frame">
        <div class="frameinput2">
            <h5 class="fip2">Name</h5>
            <div class="input">
            <?php echo $row['user_name'];?>
            </div>

            <h5 class="fip3">Last name</h5>
            <br>
            <div class="input">
            <?php echo $row['Surname'];?>
            </div>
            <br>

            <h5 class="fip4">Day</h5>
            <h5 class="fip5">Month</h5>
            <h5 class="fip6">Year</h5>
            <div class="nt">
                <div class="input12">
                <?php echo $row['user_Day'];?>
                
                </div>
                <div class="input12">
                <?php echo $row['user_Month'];?>
                   
                </div>
                <div class="input12">
                <?php echo $row['user_Year'];?>
                  
                </div>

                <div class="input12">
            <?php echo $row['Age'];?>
              
            </div>

            </div>
            <br>

            <h5 class="fip7">Age</h5>
           
          
           
            <h5 class="fip78">Gender</h5>
            <div class="input">
            <?php echo $row['Gender'];?>
              
            </div>
            <br>

            <h5 class="fip8">Phone No.</h5>
            <div class="input">
            <?php echo $row['Phone'];?>
               
            </div>
            <br>
            <h5 class="fip9">Resident Registration Address</h5>
          
            <div class="input">
            <?php echo $row['Card_Address'];?>
             
            </div>
       
            <h5 class="fip10">Job</h5>
            <br>
            <div class="input">
            <?php echo $row['Job'];?>
             
            </div>
            <br>
            <h5 class="fip11">Email</h5>
         
            <div class="input">
            <?php echo $row['Email'];?>
               
            </div>
            <br>
            <a href="index.php?act=Edit" style="text-decoration: none;">
                <button class="button">
                    <h6 class="fontsignup">Edit Profile</h6>
                </button>
            </a>

            <br><br><br>
        </div>
    </div>
</div>


