<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Manage Product</title>
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap');

body {
  background-image: url("image/skysports-f1-leclerc-start_5735012.jpg");
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.logo {
  width: 200px;
  height: 90px;
}

.navbar {
  display: flex;
}

.navbar a {
  color: white;
  text-decoration: none;
  margin-right: 20px;
}

.btn {
  background-color: #f44336;
  color: white;
  padding: 10px 20px;
  text-decoration: none;
  border-radius: 5px;
}

h1 {
  color: white;
  text-align: center;
  margin-top: 50px;
}

form {
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  margin: 50px auto;
  max-width: 500px;
  border-radius: 10px;
}

form p {
  margin-bottom: 20px;
}

form input[type="text"],
form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

form input[type="submit"] {
  background-color: red;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

form input[type="submit"]:hover {
  background-color: #45a049;
}

textarea {
  resize: vertical;
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


  <?php
  if(isset($_GET["edit"]))
  {
   
    $procode = $_GET["procode"];

    $result = mysqli_query($connect, "select * from product where product_code = $procode");
    $row = mysqli_fetch_assoc($result);
  ?>
  
  <h1>Edit a Product</h1>

  <form name="addfrm" method="post" action="">

    <p>Product Name:<input type="text" name="pro_name" size="100" value="<?php echo $row['product_name']; ?>">
    <p>Product Image:<input type="text" name="pro_img" value="<?php echo $row['product_img']; ?>">
    <p>Product Size:<input type="text" name="pro_size" value="<?php echo $row['product_size']; ?>">
    <p>Product Description:<textarea cols="60" rows="4" name="pro_desc"><?php echo $row['description']; ?></textarea>
    <p>Product Price:<input type="text" name="pro_price" size="10" value="<?php echo $row['product_price']; ?>">
    <p><input type="submit" name="savebtn" value="Update Product">

  </form>
    <?php 
  }
    ?>

</body>
</html>

<?php
if(isset($_POST["savebtn"])) 	
{
  $proname = $_POST["pro_name"];
	$proimg = $_POST["pro_img"];
	$prosize = $_POST["pro_size"];
	$prodesc = $_POST["pro_desc"];
  $proprice = $_POST["pro_price"];

	mysqli_query($connect, "update product set product_name='$proname', product_img='$proimg', product_size='$prosize', description='$prodesc', product_price=$proprice where product_code=$procode");
	
    ?>
	
	<script type="text/javascript">
		alert("Product Updated");
	</script>
	
	<?php

	header( "refresh:0.5; url=product_list.php" );
	
}

?>