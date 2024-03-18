<?php
include('dataconnection.php');
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password= $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    
    $duplicate = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo "<script>alert('Username or Email Has Already Registered');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
            mysqli_query($connect, $query);
            echo "<script>alert('Registration Successful');</script>";
            // Redirect to home page after 2 seconds
            echo "<script>setTimeout(function(){ window.location.href = 'home.php'; }, 1000);</script>";
        }
        else{
            echo "<script>alert('Password Does Not Match!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet">
</head>

<body>
    <header class="header">
        <img src="F1/Victor motorsport.jpg" class="logo" width="150px" height="90px">
        <nav class="navbar">
            <a href="Index.php">Home</a>
            <a href="news_video.php">News and Videos</a>
            <a href="schedule.php">Schedule & Result</a>
            <a href="driver and team.php">Drivers and Team Standings</a>
            <a href="product_list.php">Product</a>
            <a href="about us.php">About Us</a>
            <a href="contact us.php">Contact Us</a>
        </nav>
        <a href="login.php" class="btn">Login</a>
    </header>

    <div class="loginbox">
        <img src="F1/avatar.png" class="avatar" style="margin-top:90px">
        <h1>Sign Up</h1>
        <form id="loginForm" method="post">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>
            <p>Password</p>
        <div class="password-container">
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility('password')">
                <i class="uil uil-eye"></i>
            </span>
        </div>
        <p>Confirm Password</p>
        <div class="password-container">
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
            <span class="toggle-password" onclick="togglePasswordVisibility('confirmpassword')">
                <i class="uil uil-eye"></i>
            </span>
        </div>
        <div class="password-strength">
            <p>Password Strength:</p>
            <span id="password-strength"></span>
        </div>
            <input type="submit" value="Signup" name="submit">
            <div class="signup">
            <span class="text">Have a member?
            <a href="login.php" class="text signin-text">Sign in now</a>
            </span>
            </div>
        </form>



    </div>


    </body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding:0;
    box-sizing: border-box;
    outline:none; border:none;
    text-decoration: none;
    transition:all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

.header{
    position: fixed;
    top: 0; left: 0; right:0;
    z-index:999;
    background: red;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
}


.header .navbar a{
    font-size: 1.7rem;
    margin:0 1rem ;
    color:white;
}

.header .navbar a :hover{
    background:black;
}

body {
    margin: 0;
    padding: 0;
    background: url("CSS/background.jpg");
    background-size: cover;
    font-family: sans-serif;
}
  
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    background-color: #f44336;
    color: #ffffff;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}
  
.btn:hover {
    background-color: #d32f2f;
}
  
.btn:active {
    background-color: #b71c1c;
}
  
.loginbox {
    width: 320px;
    height: 650px;
    background: #000;
    color: #fff;
    top: 70%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.signup{
    text-align: center;
}

.avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -40px;
    left: calc(50% - 50px);
}

h1 {
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p {
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input {
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"],
input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.password-container {
    position: relative;
}

.password-container input[type="password"] {
    width: calc(100% - 30px); /* Adjusted width to accommodate icon */
}

.toggle-password {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    cursor: pointer;
}

.toggle-password i {
    font-size: 20px;
    color: #ccc; /* Adjust icon color as needed */
}

.loginbox input[type="email"],
input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.loginbox input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.loginbox input[type="submit"]:hover {
    cursor: pointer;
    background: #ffc107;
    color: #000;
}

.loginbox a {
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgray;
}

.loginbox a:hover {
    color: #ffc107;
}

h1 {
    margin-top: 100px;
    padding: 0 0 20px;
    text-align: center;
    font-size: 30px;
    color: #fff;
  }



</style>
  

    <script>
        
    function togglePasswordVisibility(fieldId) {
    var passwordInput = document.getElementById(fieldId);
    var toggleIcon = passwordInput.nextElementSibling.querySelector("i");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("uil-eye");
        toggleIcon.classList.add("uil-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("uil-eye-slash");
        toggleIcon.classList.add("uil-eye");
    }
}

        // Create account button click event
        var createBtn = document.querySelector('.input-field.button input[type="button"]');
        createBtn.addEventListener('click', function() {
            // Get form values
            var username = document.querySelector('.input-field input[type="text"][placeholder="Username"]').value;
            var email = document.querySelector('.input-field input[type="text"][placeholder="Email"]').value;
            var password = document.getElementById('createPw').value;
            var confirmPassword = document.getElementById('confirmPw').value;
            var rememberMe = document.getElementById('sigCheck').checked;

            // Validate form data
            if (username.trim() === '') {
                alert('Please enter a username.');
                return;
            }

            if (email.trim() === '') {
                alert('Please enter an email.');
                return;
            }

            if (password.trim() === '') {
                alert('Please enter a password.');
                return;
            }

            if (password !== confirmPassword) {
                alert('Password and confirm password must match.');
                return;
            }

            // Perform further actions (e.g., submit the form)

            // Optional: Remember me functionality
            if (rememberMe) {
                // Implement remember me logic here
            }
        });

        // Redirect to login page
        var loginLink = document.querySelector('.login-signup .signin-text');
        loginLink.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = "login.html";
        });

        
        function checkPasswordStrength(password) {
            var strength = 0;

            // If password length is greater than or equal to 6, increment strength
            if (password.length >= 6) {
                strength++;
            }

            // If password contains both lower and uppercase characters, increment strength
            if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                strength++;
            }

            // If password contains numbers and other characters, increment strength
            if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
                strength++;
            }

            // If password contains special characters, increment strength
            if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                strength++;
            }

            return strength;
        }

        function updatePasswordStrengthIndicator() {
            var password = document.getElementById('password').value;
            var strength = checkPasswordStrength(password);
            var indicator = document.getElementById('password-strength');

            // Update password strength indicator based on strength level
            switch (strength) {
                case 0:
                case 1:
                    indicator.innerHTML = 'Very Weak';
                    break;
                case 2:
                    indicator.innerHTML = 'Weak';
                    break;
                case 3:
                    indicator.innerHTML = 'Fair';
                    break;
                case 4:
                    indicator.innerHTML = 'Good';
                    break;
                case 5:
                    indicator.innerHTML = 'Strong';
                    break;
                default:
                    break;
            }
        }

        // Add event listener to password input to update strength indicator on input change
        var passwordInput = document.getElementById('password');
        passwordInput.addEventListener('input', updatePasswordStrengthIndicator);
    </script>


</html>
