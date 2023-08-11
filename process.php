<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
<?php
	//get values passe from in logic.php file
$username = $_POST['user'];
$password = $_POST['pass'];


//connect to the server and select database
$con=mysqli_connect("localhost","root","","customerdb");
/*mysqli_select_db("customerdb");*/

//to prevent mysql injection
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);

//Query the database for user
$result = mysqli_query($con,"select * from tblusers where username = '$username' and password = '$password'") or die("Failed to query database ".mysql_error());
$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) === 1){
	if($row['username'] === $username && $row['password'] === $password){
		echo "<center><h2>"."Welcome ".$row['firstname']." ".$row['lastname']."!"."</h2></center>";
		echo "<center><img src=".$row['imageurl']." width='200'> </center>";
            	$_SESSION['firstname'] = $row['firstname'];
            	$_SESSION['lastname'] = $row['lastname'];
            	$_SESSION['imageurl'] = $row['imageurl'];
		
            
	}else{
		echo "<script>alert('Incorrect Username or Password! ');</script>";

	}
}else{
	echo "<script>alert('Incorrect Username or Password! ');</script>";
	
}

?>



</body>
</html>


