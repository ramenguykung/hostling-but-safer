<?php session_start(); ?>

<html lang="en">

<head>
    <title>Bc House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./หน้าบ้าน/send-gmail-Success.css" rel="stylesheet">
</head>

<body>

    <?php include('ตัวเสริม.php'); ?>

    <div class="Frame4">
        <div class="Frame3">
            <div class="login">

                <div class="textmo"></div>
                <br> <br>
                <h2 class="text">It’s on your inbox!</h2>
                <h2 class="textcontent">
                    If the credential matched,
                </h2>
                <h2 class="textcontent">
                    Instructions will send to your email.
                </h2>
                <br>
                <br> <br>

                <div class="ipg1">
                    <input
                        class="input"
                        type="Email"
                        placeholder="Email" />
                    <div class="button">
                        <h6 class="fontSuccess">Success!</h6>
                    </div>
                    <h4> </h4>
                </div>
                <br>
            </div>

            <div class="logologin">
                <img src="icon/ตัดกรอบ.png" width="550" height="500" alt="logo">
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