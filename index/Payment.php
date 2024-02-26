<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Payment</title>
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

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

input[type="text"],
input[type="email"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
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

.payment-methods {
  margin-top: 30px;
}

.payment-method {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.payment-method input[type="radio"] {
  margin-right: 10px;
}

.payment-method img {
  width: 100px;
  height: 50px;
  object-fit: fill;
  border-radius: 100%;
}

.payment-method label {
  font-weight: normal;
}

.alert {
  margin-top: 20px;
  padding: 10px;
  background-color: #f2dede;
  color: #a94442;
  border-radius: 5px;
}

.success {
  margin-top: 20px;
  padding: 10px;
  background-color: #dff0d8;
  color: #3c763d;
  border-radius: 5px;
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
    <h1>Payment</h1>

    <form>
      <label for="name">Your Name:</label>
      <input type="text" id="name" required>

      <label for="email">Email Address:</label>
      <input type="email" id="email" required>

      <label for="payment-method"><br>Payment Method:</label>
      <div class="payment-methods">
        <div class="payment-method">
          <input type="radio" name="payment-method" id="paypal" value="paypal" required>
          <img src="image/paypal.png" alt="PayPal">
          <label for="paypal">PayPal</label>
        </div>
        <div class="payment-method">
          <input type="radio" name="payment-method" id="Touch'n Go" value="Touch'n Go" required>
          <img src="image/tng.jpg" alt="Touch'n Go">
          <label for="paypal">Touch'n Go</label>
        </div>
        <div class="payment-method">
          <input type="radio" name="payment-method" id="credit-card" value="credit-card" required>
          <img src="image/CreditCard.jpg" alt="Credit Card">
          <label for="credit-card">Credit Card</label>
        </div>
      </div>

      <input type="submit" value="Confirm Payment">
    </form>
  </div>
</body>
</html>