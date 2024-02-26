<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
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

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="flex">
                    <h2>About Us</h2>
                    <h3>Discover Our Story</h3>
                    <p>Victor Motorsport Club is created by three university students in 2023. This system is primarily designed for motorsport fans who are interested in following the latest news, results and standings related to the FIA Formula One World Championship.<br>
                        We have just started to create, but we hope to bring a lot of usefulness to you. The purpose of our creation is to bring benefits to users, sponser,and team drivers.<br>
                        If you find any problems in this system, please go to the Contact Us page to contact us. Don't be shy, we will solve your problems as soon as possible.
                    </p>
                </div>
                <div class="flex">
                    <img src="F1/about us.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--Our Team-->
    <hr class="line">
    <div class="our">
        <h2>Meet Our Team</h2>
    </div>
    <div class="team">
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="F1/yaowen.jpg" >
                </div>
                <div class="contentBx">
                    <h4>Teng Yao Wen</h4>
                    <h5>1211208295</h5>
                    <h5>Director General</h5>
                </div>
                <div class="sci">
                    <a href="https:www.instagram.com/yao_wennnn"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="F1/chongxian.jpg" >
                </div>
                <div class="contentBx">
                    <h4>How Chong Xian</h4>
                    <h5>1211210949</h5>
                    <h5>Manager</h5>
                </div>
                <div class="sci">
                    <a href="https://instagram.com/chongxian930"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <div class="imgBx">
                    <img src="F1/shawn.jpg" >
                </div>
                <div class="contentBx">
                    <h4>Shawn Koh En Wee</h4>
                    <h5>1211211185</h5>
                    <h5>Developer</h5>
                </div>
                <div class="sci">
                    <a href="https://www.instagram.com/shawnkohenwee/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

    </div>
</body>
</html>