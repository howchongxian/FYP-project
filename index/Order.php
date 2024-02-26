<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Order</title>
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

.order {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.order-item {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
}

.order-item img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  margin-right: 20px;
}

.order-item-details {
  flex-grow: 1;
}

.order-item-details h3 {
  margin: 0;
  color: #333;
}

.order-item-details p {
  margin: 0;
  color: #777;
}

.order-total {
  text-align: right;
  margin-top: 20px;
  font-weight: bold;
}

.order-total span {
  color: #333;
}

.order-buttons {
  display: flex;
  justify-content: flex-end;
  margin-top: 20px;
}

.order-buttons button {
  padding: 10px 20px;
  background-color: #ff1212;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 10px;
}

.alert {
  margin-top: 20px;
  padding: 10px;
  background-color: #f2dede;
  color: #a94442;
  border-radius: 5px;
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
    <h1>Order</h1>

    <div class="order">
      <div class="order-item">
        <img src="image/Ferrari clothes (1).jpg" alt="Product 1">
        <div class="order-item-details">
          <h3>Scuderia Ferrari 2023 Team T-Shirt</h3>
          <p>100% cotton, Short sleeves, Crew neck...</p>
        </div>
      </div>

      <div class="order-item">
        <img src="image/Mercedes clothes.jpg" alt="Product 2">
        <div class="order-item-details">
          <h3>Mercedes AMG Petronas F1 2023 Team Driver T-Shirt - White</h3>
          <p>100% polyester, Short sleeves, Crew neck...</p>
        </div>
      </div>

      <div class="order-total">
        Total: <span>$60.00</span>
      </div>

      <div class="order-buttons">
        <button><a href="product_list.php">Continue Shopping</a></button>
        <button><a href="Shopping Cart.php">Add Items to The Shopping Cart</a></button>
        <button><a href="Payment.php">Confirm Order</a></button>
      </div>
    </div>

  </div>
  <div class="bottom_btn">
   <a href="manage order.php"><input type="submit" name="morderbtn" value="Manage Order"></a> 
  </div>

  <footer>
    <p>&copy; 2023 Victor motorsport. Copyright.</p>
  </footer>
</body>
</html>