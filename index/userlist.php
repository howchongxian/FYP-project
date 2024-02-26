<?php include("dataconnection.php"); 
session_start();
?>

<html>
<head><title>User List</title>

<script type="text/javascript">

function confirmation()
{
	answer = confirm("Do you want to delete this user?");
	return answer;
}

</script>


</head>
<body>
<header class="header">
        <img src="F1/Victor motorsport.jpg" class="logo" width="150px" height="90px">
        <h1 style="color: white; ">List of User</h1>
        <a href="login.php" class="btn">Logout</a>
    </header>

<div id="wrapper">
	
	<div id="right">

    
		<table border="1">
			<tr>
				<th>User ID</th>
				<th>User Name</th>
				<th>User Email</th>
                <th>User Password</th>
                <th>Role</th>
				<th colspan="4">Action</th>
                
			</tr>
			
			<!--copy the code from movie_list(edit) and add on the delete hyperlink-->
			<?php
			mysqli_select_db($connect,"f1");
			$result = mysqli_query($connect, "select * from user");	
			$count = mysqli_num_rows($result);
			
			while($row = mysqli_fetch_assoc($result))
			{
			
			?>			

			<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["username"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["role"]; ?></td>
                <td><a href="user_add.php?view&userid=<?php echo $row['id'];?>">Add</a></td>
				<td><a href="user_edit.php?view&userid=<?php echo $row['id'];?>">Edit</a></td>
				<td><a href="userlist.php?del&userid=<?php echo $row['id']; ?>" onclick="return confirmation();">Delete</a></td>
                
            </tr>
			<?php
			
			}
			
			?>
		</table>


		<p> Number of records : <?php echo $count; ?></p>

	</div>
	
</div>


</body>
</html>
<?php

if (isset($_REQUEST["del"])) 
{
	$movid = $_REQUEST["userid"]; 
	mysqli_query($connect, "delete from user where id = $movid");
	
	
	header("Location: userlist.php"); //refresh the page
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
  
  table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 150px;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #333;
    color: white;
}

tr{
    background-color:lightgray;
    

}


</style>