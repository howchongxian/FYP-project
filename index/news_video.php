<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>F1 Latest News and Videos</title>
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

    <h1>F1 Latest News and Videos</h1>

    <div class="news-container">
        <div class="news-card">
            <img src="F1/hamilton_news.jpg" alt="F1 News 1" width="100%">
            <h3>Lewis Hamilton's Mercedes has been given a huge upgrade package in Monaco</h3>
            <p>Lewis Hamilton admits just how difficult it will be to win the Monaco Grand Prix as major upgrade package to his Mercedes only puts him sixth after second practice - half a second behind pacesetter Max Verstappen</p>
            <a href="https://www.dailymail.co.uk/sport/formulaone/article-12128329/Lewis-Hamilton-sets-fastest-time-practice-Monaco-Grand-Prix-improved-Mercedes.html" target="_blank">Read More</a>
        </div>

        <div class="news-card">
            <img src="F1/mercedes_news.jpg" alt="F1 News 1" width="100%">
            <h3>Mercedes new-look sidepods; inspiration, even convergence, but NO copying</h3>
            <p>A weekend in which Mercedes new-look sidepods are set to be the talk of the town.</p>
            <a href="https://www.planetf1.com/news/mercedes-new-look-sidepods-monaco/" target="_blank">Read More</a>
        </div>

        <div class="news-card">
            <img src="F1/redbull_news.jpg" alt="F1 News 2" width="100%">
            <h3>Honda confident it can match F1 rivals in 2026 despite hiatus</h3>
            <p>Honda is confident it will be able to match rival Formula 1 power unit manufacturers upon its fully fledged return with Aston Martin in 2026, despite an 18-month development hiatus.</p>
            <a href="https://www.autosport.com/f1/news/honda-confident-it-can-match-f1-rivals-in-2026-despite-hiatus/10473209/" target="_blank">Read More</a>
        </div>
    </div>

    <div class="video-container">
        <div class="video-card">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Tbr_efzYd0o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>F1 Highlight : 2023 Miami Grand Prix</h3>
            <a href="https://youtu.be/Tbr_efzYd0o" target="_blank">Watch on YouTube</a>
        </div>

        <div class="video-card">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3PGSiOXMpYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>F1 Highlight : 2023 Azerbaijan Grand Prix</h3>
            <a href="https://youtu.be/3PGSiOXMpYA" target="_blank">Watch on YouTube</a>
        </div>

        <div class="video-card">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/eLxVQph7D4w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <h3>Carlos Sainz furious with Ferrari's team strategy | Formula 1 Monaco Grand Prix 2023</h3>
            <a href="https://youtu.be/eLxVQph7D4w" target="_blank">Watch on YouTube</a>
        </div>
    </div>
</body>
</html>
