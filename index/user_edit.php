<?php include("dataconnection.php"); ?>

<html>
<head>
    <title>Edit User</title>
    <link href="" type="text/css" rel="stylesheet" />
</head>
<body>
<header class="header">
        <img src="F1/Victor motorsport.jpg" class="logo" width="150px" height="90px">
        <h1 style="color: white; ">Edit a User</h1>
        <a href="login.php" class="btn">Logout</a>
    </header>
<div id="wrapper">
    <div class="loginbox">
    <img src="F1/avatar.png" class="avatar" style="margin-top:90px">
        <?php
        if (isset($_GET["userid"])) {
            $userid = $_GET["userid"];
            $result = mysqli_query($connect, "select * from user where id = $userid");
            $row = mysqli_fetch_assoc($result);
        ?>
        <form name="editfrm" method="post" action="">
            <p>User Name:<input type="text" name="username" size="80" value="<?php echo $row['username']; ?>"></p>
            <p>User Email:<input type="email" name="email" size="30" value="<?php echo $row['email']; ?>"></p>
            <p>Password:<input type="text" name="password" size="10" value="<?php echo $row['password']; ?>"></p>
            <p><input type="submit" name="savebtn" value="UPDATE USER"></p>
        </form>
        <?php 
        }
        ?>
    </div>
</div>

</body>
</html>

<?php
if (isset($_POST["savebtn"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    mysqli_query($connect, "update user set username='$username', email='$email', password='$password' where id=$userid");
    ?>
    <script type="text/javascript">
        alert("User Updated");
    </script>
    <?php
    header("refresh:0.5; url=userlist.php");
}
?>
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
    height: 500px;
    background: #000;
    color: #fff;
    top: 60%;
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

.loginbox form{
    margin-top: 110px;
}
</style>