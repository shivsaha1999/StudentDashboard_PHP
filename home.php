<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <title>Modern SignUp Page | AsmrProg</title> -->
    <title>SignUp Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="home.php" method='POST'>
                <h1>Create Account</h1><br><br>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> -->
                <!-- <span>or use your email for registeration</span> -->
                <input type="text" id="name" name="name" placeholder="Name" required>
                <input type="email" id="email" name="email" placeholder="Email"  required>
                <input type="password" id="password" name="password" placeholder="Password"  required>
                <input type="password" id="repassword" name="repassword" placeholder="Retype Password"  required>
                <button id="btn" value="Signup" name="submit-signup" >Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="welcome.php" method='POST'>
                <h1>Sign In</h1>
                <!-- <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div> -->
                <br><br>
                <input type="email"id="email" name="email-login" placeholder="Email"  required>
                <input type="password" id="password" name="password-login" placeholder="Password"  required>
                <a href="#">Forget Your Password?</a>
                <button id="btn" value="SignIn" name="submit-login">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your details to use the site</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Student!</h1>
                    <p>Register with your details</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <?php
    include 'signup.php';
    include 'welcome.php';
    
     // or use require 'signup.php'; if you want to make it mandatory
    ?>
</body>

</html>