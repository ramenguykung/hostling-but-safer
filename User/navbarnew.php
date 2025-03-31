<div class="top-navigation-mainhome">

    <div class="left-navH">
        <div class="menu-dividerH">
            <a class="btn btn-Light" href="index.php?act=Pr" role="button" style="text-decoration: none;">
                <img src="../user_img/<?php echo $rowuser['user_img']; ?>" width="60" height="60" class="d-inline-block align-top" alt="">
            </a>

            <a class="btn btn-Light" href="Profile.php" role="button" style="text-decoration: none;">
                <h3 class="textHome">Profile</h3>
            </a>

            <h1> | </h1>

            <div class="text-navigatorH">

                <a class="btn btn-Light" href="Home.php" role="button" style="text-decoration: none;">
                    <h3 class="textHome">Home</h3>
                </a>

                <a class="btn btn-Light" href="Contact.php" role="button" style="text-decoration: none;">
                    <h3 class="textHome">Contact</h3>
                </a>

                <a class="btn btn-Light" href="index.php" role="button" style="text-decoration: none;">
                    <h3 class="textHome">Booking</h3>
                </a>

                <a href="Reviews.php" style="text-decoration: none;">
                    <h1 class="texttop"> Feedback</h1>
                </a>

            </div>
        </div>
    </div>

    <div class="Frame70H">

        <ul class="navbar-nav mr-auto">
            <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?')" style="text-decoration: none;">
                <button class="Buttonlogout ">logout</button> </a>
        </ul>

    </div>
</div>