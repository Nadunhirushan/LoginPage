<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
	.data_form{
		border:1px solid #000;
		justify-content: center;
		width:625px;
		margin: auto;
	}

	.img1{
		display:block;
		margin: auto;
		width:150px;
		margin-bottom: 20px;
	}

	.txtb{
		padding-bottom:15px;
		justify-content: center;
	}

	.txtb input{
		margin-left: 14px;
		width:570px;
		font-size:16px;
		padding:10px;
	}
	.butt input{
		display:block;
		margin:auto;
		margin-bottom: 20px;
		width:100px;
		font-size:16px;
		padding:10px;
	}
</style>
</head>
<body>

   	<div class="data_form">
   		<h3 style="text-align:center;">User Login</h3>
		<img class="img1" src="Userlogin.png">

     	<form action="process.php" method="POST">
     	
	     	<div class="txtb">
	     		<input type="text" name="user" id="user" placeholder="User Name" required><br>
	     	</div>
	     	<div class="txtb">
	     		<input type="password" name="pass" id="pass" placeholder="Password" required><br>
	     	</div>
	     	<div class="butt">
				<input type="submit" id="btn" value="LOGIN">
			</div>
     	</form>
 	</div>
</html>