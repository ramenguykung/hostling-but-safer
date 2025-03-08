<?php session_start(); ?>

<html lang="en">
	<head>
	<title>Bc House</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet"  href="./หน้าบ้าน/Login.css">
		<link rel="stylesheet" href="login/css/style.css">
	</head>

    <body>
	<?php include('ตัวเสริม.php');?>
		<!-- <form class="login100-form validate-form p-b-33 p-t-5" action="cheack_login.php" method="POST">
		</form>
		<section class="ftco-section">
		</section> -->


		<!-- <div class="form-group">
										<button type="submit" class="btn btn-primary rounded submit p-3 px-5">เข้าสู่ระบบ</button>
									</div> -->

			
    <div class="Frame4">
        <div class="Frame3">
            <h1 class="text">Welcome back!</h1>
            <div class="login">
                <a href="index.php">
                    <button class="buttonIconLeft">
                        <img src="icon/IconLeft.png" alt="logo">
                    </button>
                </a>
                <div class="containers">
                    <img src="icon/LogoBC.png" width="160" height="160" alt="logo">
                </div>
                <form class="login100-form validate-form p-b-33 p-t-5" action="cheack_login.php" method="POST" id="signupForm" onsubmit="handleSubmit(event)">
                
                    <div class="ipg1">
                        <input name="Email" type="email" placeholder="Email" class="input" id="Email">
                        <input name="Password" type="password" placeholder="Password" class="input" id="Password">
                        <div class="MovetoggleButton">
                            <!-- <button type="button"  onclick="togglePasswordVisibility()"  class="buttoneye"> -->
                                <img id="eyeIcon"   type="button"  onclick="togglePasswordVisibility()" src="icon/EyeOpen.png" width="20" height="20" alt="eye">
                            <!-- </button> -->
                        </div>
                    </div>
                    <br><br>
                    <button type="submit" class="button">
                        <h6 class="fontLogin">Login</h6>
                    </button>
                </form>
                <br>
                <div class="nt">
                    <a href="Forgotpassword.php">
                        <div class="fp">Forgot password?</div>
                    </a>
                    <div class="space"></div>
                    <a href="signup.php">
                        <div class="su">Sign up</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="logologin">
                <img src="icon\ตัดกรอบ.png" alt="A girl in a room">
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








    </script>
		
	


		<script src="login/js/jquery.min.js"></script>
		<script src="login/js/popper.js"></script>
		<script src="login/js/bootstrap.min.js"></script>
		<script src="login/js/main.js"></script>

		</body>
		</html>