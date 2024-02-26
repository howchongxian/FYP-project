

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
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
        <h1>Login Here</h1>
        <?php if(isset($_GET['error'])){ ?>
            <p style="color:red;" class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <form id="loginForm" method="post" action="loginsystem.php">        
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter Password">
            <input type="submit" value="Login" name="submit">
            <a href="" id="forgetPasswordLink" onclick="showAlert()">Forget Password? </a><br>
            <a href="signup.php">Don't have an account?</a>
        </form>
    </div>


</body>
</html>

<script>
    function showAlert() {
        alert("We Have Send Code To Your Email. Pls Check");
}
</script>
