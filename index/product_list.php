<?php include("dataconnection.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>F1 Fans Club</title>
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
	<style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600&display=swap');
    

	body {
		background-image: url("image/skysports-f1-leclerc-start_5735012.jpg");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		font-family: 'Poppins', sans-serif;
		background-color: #f5f5f5;
		margin: 0;
		padding: 0;
	}
	
	h1 {
		text-align: center;
		margin: 20px 0;
		margin-top: 110px;
	}
	
	.product-list {
		width: 950px;
		margin: 0 auto;
	}
	
	.product-table {
		width: 100%;
		border-collapse: collapse;
		background-color: #fff;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
	}
	
	.product-table th,
	.product-table td {
		border: 1px solid black;
		padding: 20px;
		text-align: center;
		border-bottom: 1px solid #ccc;
	}
	
	.product-table img {
		width: 100px; 
		height: auto; 
		border: 1px solid #ccc; 
		border-radius: 5px; 
		margin: 10px;
	}
	
	.product-table th {
		background-color: #333;
		font-weight: bold;
	}
	
	.product-table td a {
		text-decoration: none;
		color: #007bff;
	}
	
	.product-table td a:hover {
		text-decoration: underline;
	}
	
	.product-table td.action-links {
		width: 150px;
		text-align: center;
	}
	
	.product-table td.action-links a {
		margin: 0 5px;
	}
	
	.bottom_btn{
       text-align: center;
	   margin: 20px;
       margin-top: 50px;
    }
    
	</style>	
</head>


<script type="text/javascript">

function confirmation()
{
	answer = confirm("Do you want to delete this product?");
	return answer;
}

</script>


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

    <h1>List of Products</h1>
    
<div class="product-list">
		<table class="product-table" border="1" width="700px" height="100px">
			<tr>
				<th>Product Code</th>
				<th>Product Image</th>
				<th>Product Name</th>
				<th>Product size</th>
                <th>Product Description</th>
                <th>product Price</th>			
				<th colspan="3">Action</th>
			</tr>

			<?php
			
			$result = mysqli_query($connect, "select * from product");	
	        while($row = mysqli_fetch_assoc($result))
				{
					
				?>			

				<tr>
					<td><?php echo $row["product_code"];?></td>
					<td><img src="<?php echo $row["product_img"]; ?>" alt="Product Image"></td>
					<td><?php echo $row["product_name"];?></td>
					<td><?php echo $row["product_size"];?></td>
                    <td><?php echo $row["description"];?></td>
                    <td>£<?php echo $row["product_price"];?></td>
					<td><a href="Order.php">Order Now</a></td>
					<td><a href="manage product.php?edit&procode=<?php echo $row['product_code']; ?>">Edit</a></td>
					<td><a href="product_list.php?del&procode=<?php echo $row['product_code']; ?>" onclick="return confirmation();">Delete</a></td>
				</tr>
				<?php
				
				}		
			
			?>

			
		</table>
</div>	
<div class="bottom_btn">
   <a href="Comment.php"><input type="submit" name="commentbtn" value="Comment and Rating"></a> 
   <a href="Shopping Cart.php"><input type="submit" name="shoppingcartbtn" value="Shopping Cart"></a> 
</div>
</body>
</html>
