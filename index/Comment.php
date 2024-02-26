<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Comment and Rating</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  background-image: url("image/skysports-f1-leclerc-start_5735012.jpg");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  color: white;
  background-color: red;
}

h2 {
  margin-top: 30px;
  color: #333;
}

p {
  color: #666;
}

.comment-form {
  margin-top: 30px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.comment-form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.comment-form input[type="text"],
.comment-form textarea {
  width: 95%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: none;
}

.comment-form input[type="submit"] {
  display: block;
  width: 100%;
  margin-top: 20px;
  padding: 10px;
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.rating{
    margin-top: 30px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.rating label{
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.rating input[type="number"],
.rating textarea {
  width: 10%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  resize: none;
}

.rating input[type="submit"] {
    display: block;
    width: 100%;
    margin-top: 20px;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.comment-list {
  margin-top: 30px;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.comment {
  margin-bottom: 20px;
  padding-bottom: 10px;
  border-bottom: 1px solid #ccc;
}

.comment h3 {
  margin: 0;
  color: #333;
}

.comment p {
  margin-top: 10px;
  color: #666;
}

.bottom_btn{
  text-align: center;
	margin: 20px;
  margin-top: 50px;
}
  </style>
</head>
<body>
  <header class="header">

    <img src="F1/Victor motorsport.jpg" class="logo" width="200px" height="90px">
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
  <div class="container">
    <h1>Comment and Rating</h1>
  

    <div class="comment-form">
        <h2>Comment</h2>
        <form>
          <label for="name">Your Name:</label>
          <input type="text" id="name" required>

          <label for="comment"><br><br>Your Comment:</label>
          <textarea id="comment" required></textarea>

          <input type="submit" value="Submit Comment">
        </form>
    </div>

    <section class="rating">
      <h2>User Rating</h2>

      <form class="rating-form">
        <h3>Rating</h3>
        <label for="rating">Your Rating:</label>
        <input type="number" id="rating" min="1" max="5" required>

        <input type="submit" value="Submit Rating">
      </form>
    </section>

    <div class="comment-list">
      <h2>User Comments</h2>
      <div class="comment">
        <h3>John Doe</h3>
        <p>Good services bro!</p>
      </div>
      <div class="comment">
        <h3>Jane Smith</h3>
        <p>Thanks for clothes.</p>
      </div>
    </div>
  </div>
  
  <div class="bottom_btn">
   <a href="manage user.php"><input type="submit" name="userbtn" value="User"></a> 
   <a href="manage order.php"><input type="submit" name="morderbtn" value="Manage Order"></a> 
  </div>

  <footer>
    <p>&copy; 2023 Victor motorsport. Copyright.</p>
  </footer>
</body>
</html>