<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage User</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap');

body {
  font-family: 'Poppins', sans-serif;
  background-image: url("image/skysports-f1-leclerc-start_5735012.jpg");
	background-size: auto;
	background-position: center;
	background-repeat: no-repeat;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

h1 {
  text-align: center;
  color: White;
  background-color: red;
}

.user-table {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.table-heading {
  font-weight: bold;
  margin-bottom: 10px;
}

.user-row {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.user-row img {
  width: 50px;
  height: 50px;
  object-fit: cover;
  margin-right: 10px;
  border-radius: 50%;
}

.user-row-details {
  flex-grow: 1;
}

.user-row-details h3 {
  margin: 0;
  color: #333;
}

.user-row-details p {
  margin: 0;
  color: #777;
}

.user-buttons {
  display: flex;
  justify-content: flex-end;
  margin-top: 10px;
}

.user-buttons button {
  padding: 5px 10px;
  background-color: #ff1212;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-left: 5px;
}

.alert {
  margin-top: 20px;
  padding: 10px;
  background-color: #f2dede;
  color: #a94442;
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
    <h1>Manage User</h1>

    <div class="user-table">
      <div class="table-heading">
        <h2>User List</h2>
      </div>

      <div class="user-row">
        <img src="F1/avatar.png" alt="User 1">
        <div class="user-row-details">
          <h3>John Doe</h3>
          <p>Description</p>
        </div>
        <div class="user-buttons">
          <button>Edit</button>
          <button>Delete</button>
        </div>
      </div>

      <div class="user-row">
        <img src="F1/avatar.png" alt="User 2">
        <div class="user-row-details">
          <h3>Jane Smith</h3>
          <p>Description</p>
        </div>
        <div class="user-buttons">
          <button>Edit</button>
          <button>Delete</button>
        </div>
      </div>


    </div>
  </div>
</body>
</html>