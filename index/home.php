<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F1 Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <a href="logout.php" class="btn">Logout</a>
</header>
<div class="slider-container">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="F1/redbull car.jpg" alt="Slide 1">
            </div>
            <div class="swiper-slide">
                <img src="F1/mercedes car.jpg" alt="Slide 2">
            </div>
            <div class="swiper-slide">
                <img src="F1/ferrari car.jpg" alt="Slide 3">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="news-container">
    <div class="news-card">
        <img src="F1/hamilton_news.jpg" alt="F1 News 1" width="100%">
        <h3>Lewis Hamilton's Mercedes has been given a huge upgrade package in Monaco</h3>
        <p>Lewis Hamilton admits just how difficult it will be to win the Monaco Grand Prix as major upgrade package to his Mercedes only puts him sixth after second practice - half a second behind pacesetter Max Verstappen</p>
        <a href="https://www.dailymail.co.uk/sport/formulaone/article-12128329/Lewis-Hamilton-sets-fastest-time-practice-Monaco-Grand-Prix-improved-Mercedes.html" target="_blank">Read More</a>
    </div>

    <div class="news-card">
        <img src="F1/redbull_news.jpg" alt="F1 News 2" width="100%">
        <h3>Honda confident it can match F1 rivals in 2026 despite hiatus</h3>
        <p>Honda is confident it will be able to match rival Formula 1 power unit manufacturers upon its fully fledged return with Aston Martin in 2026, despite an 18-month development hiatus.</p>
        <a href="https://www.autosport.com/f1/news/honda-confident-it-can-match-f1-rivals-in-2026-despite-hiatus/10473209/" target="_blank">Read More</a>
    </div>
</div>
    <a href="news_video.php" class="more-news-link">More News</a>
<section>
    <h2>Upcoming Races</h2>
    <ul>
        <li>Canada Grand Prix 16-18 Jun 2023</li>
        <li>Italy Grand Prix 1-3 September 2023</li>
        <li>Singapore Grand Prix 15-17 September 2023</li>
        <li>Abu Dhabi Grand Prix 24-26 November 2023</li>
    </ul>
</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    // Add 'active' class to the header when scrolling
window.onscroll = () => {
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add('active');
  } else {
    document.querySelector('.header').classList.remove('active');
  }
};

// Add 'active' class to the header when the page loads
window.onload = () => {
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add('active');
  } else {
    document.querySelector('.header').classList.remove('active');
  }
};

// Change the color of news items on mouseover and mouseout
document.addEventListener('DOMContentLoaded', function() {
  const newsItems = document.querySelectorAll('.news-item');

  newsItems.forEach(function(newsItem) {
    newsItem.addEventListener('mouseover', function() {
      this.style.color = '#999';
    });

    newsItem.addEventListener('mouseout', function() {
      this.style.color = '#666';
    });
  });
});

const swiper = new Swiper('.swiper-container', {
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

</script>
</body>
</html>
