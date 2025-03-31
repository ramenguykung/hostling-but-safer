<nav class="navv">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="nt">

                  <a class="btn btn-Light" href="index.php?act=Pr" role="button" style="text-decoration: none;">
                        <img src="../user_img/<?php echo $row['user_img']; ?>" width="60" height="60" class="d-inline-block align-top" alt="">
                  </a>

                  <a class="btn btn-Light" href="index.php?act=Pr" role="button" style="text-decoration: none;">
                        <h3 style="color:black">Profile</h3>
                  </a>

                  <h1> | </h1>

                  <a class="btn btn-Light" href="index.php" role="button" style="text-decoration: none;">
                        <h3 style="color:black"> Home</h3>
                  </a>

                  <a class="btn btn-Light" href="index.php?act=Contact" role="button" style="text-decoration: none;">
                        <h3 style="color:black"> Contact</h3>
                  </a>

                  <?php include('ตัวเสริมnavber.php'); ?>

                  <!-- <ul  class="navbar-nav mr-auto">
            <a  href="formlogin.php" role="button" style="text-decoration: none;">
                        <button class="button"  >Rent Now</button>
                        </a>
                 
                </ul> -->

            </div>

      </div>

      <ul class="navbar-nav mr-auto">
            <a class="btn btn-Light" href="index.php?act=Rentnow" role="button">
                  <button class="s">Rent Now</button>
            </a>
      </ul>

      <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')" style="text-decoration: none;">
            <button class="s">logout</button> </a>
</nav>




<!-- <a  class="btn btn-Light active " href="form_login.php" style="font-size: 15px;"> 
       
       login | เข้าสู่ระบบ</a> -->