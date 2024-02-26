<?php
include('dataconnection.php');
if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password= $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $role = $_POST["role"];
    
    $duplicate = mysqli_query($connect,"SELECT * FROM user WHERE username='$username' OR email='$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO user (username, email, password, role) VALUES ('$username', '$email', '$password', '$role')";
            mysqli_query($connect, $query);
            echo
            "<script> alert('Registration Successful');</script>";
            
        }
        else{
            echo
            "<script> alert('Password Does Not Match!');</script>";
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
        <h1>Sign Up Here</h1>
        <form id="loginForm" method="post">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username" required>
            <p>Email</p>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>
            <p>Confirm Password</p>
            <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
            <select name="role" style="margin-bottom:5px;">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
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
        
        function myFunction() {
            var passwordInput = document.getElementById("createPw");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }

        // Password strength checker
        var passwordInput = document.getElementById('createPw');
        var passwordStrengthText = document.querySelector('.password-strength');

        passwordInput.addEventListener('input', function() {
            var password = passwordInput.value;
            var strength = checkPasswordStrength(password);
            updatePasswordStrengthText(strength);
        });

        // Function to check password strength
        function checkPasswordStrength(password) {
            var strength = 0;

            // Check the length of the password
            if (password.length >= 8) {
                strength += 1;
            }

            // Check if the password contains uppercase letters
            if (/[A-Z]/.test(password)) {
                strength += 1;
            }

            // Check if the password contains lowercase letters
            if (/[a-z]/.test(password)) {
                strength += 1;
            }

            // Check if the password contains numbers
            if (/[0-9]/.test(password)) {
                strength += 1;
            }

            // Check if the password contains special characters
            if (/[!@#$%^&*()_+\-=[\]{};':"\\|,.<>/?]/.test(password)) {
                strength += 1;
            }

            return strength;
        }

        // Function to update the password strength text
        function updatePasswordStrengthText(strength) {
            var text = '';
            var colorClass = '';

            switch (strength) {
                case 0:
                    text = 'Weak';
                    colorClass = 'weak';
                    break;
                case 1:
                case 2:
                    text = 'Medium';
                    colorClass = 'medium';
                    break;
                default:
                    text = 'Strong';
                    colorClass = 'strong';
                    break;
            }

            passwordStrengthText.textContent = text;
            passwordStrengthText.className = 'password-strength ' + colorClass;
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
    </script>


</html>
