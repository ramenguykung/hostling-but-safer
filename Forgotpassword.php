<?php session_start(); ?>

<html lang="en">

<head>
    <title>Bc House</title>
    <link rel="icon" href="./icon/LogoBC.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./หน้าบ้าน/forgotpassword.css" rel="stylesheet">
</head>

<body style="background-color:  #E2EDD2;">
    <?php include('ตัวเสริม.php'); ?>

    <div class="frame4">
        <div class="frame3">
            <div class="login">
                <div class="textmo">
                    <h2 class="text">Aw Snap,</h2>
                </div>
                <h2 class="text">forgot password?</h2>
                <h2 class="textcontent">Don’t worry. We’ve got you covered!</h2>
                <br>
                <br>

                <form name="register" action="send-password-reset.php" method="POST" enctype="multipart/form-data" class="form-horizontal" id="signupForm" onsubmit="handleSubmit(event)">

                    <div class="ipg1">
                        <input
                            name="email"
                            id="Email"
                            class="input"
                            type="email"
                            placeholder="Email"
                            required />
                        <button type="submit" class="button">
                            <h6 class="fontLogin">Get Email To Reset Password</h6>
                        </button>
                    </div>
                </form>

                <div class="o">
                    <div class="nt">
                        <h4 class="textAm"> Already a member? </h4>
                        <a href="formlogin.php">
                            <h4 class="textLogin"> Login </h4>
                        </a>
                    </div>
                </div>
                <br>
            </div>

            <div class="logologin">
                <img class="photo" src="icon/ตัดกรอบ.png" width="580" height="600" alt="logo">
            </div>
        </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            const Email = document.getElementById('Email').value;
            const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(Email)) {
                alert("Please enter a valid email address (e.g. user@gmail.com)");
                return;
            }
            event.target.submit();
        }
    </script>

    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>