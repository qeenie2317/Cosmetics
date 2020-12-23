<?php
	include('db_connect.php');
	include('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link href ="css/login&Signup.css"  rel="stylesheet"/>
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>

			<nav>
	<ul>

	<div class="text">
		<li><a href="index.php">Home</a></li>
		<li><a href="shop.php">Produts</a></li>
		<li><a href="about.php">About us</a></li>
	</div>

	
	<li class="search">
		<input type="search" placeholder="Search">
	<label class="icon">
	<span class="fa fa-search"></span> </label>
   </li>

   		<div class="ASA">
		<li id="asa"><a href="login.php">Login </a></li>
    </li>	
	</div>

		<li class="cart">
			<a href="cart.php"><i class="fa fa-shopping-cart"></a></i>
   		 </li>


</ul>
</nav>
	<!--END OF NAVBAR-->

	<div class="login-page">
	<div class="form">
		<div class="alert alert-danger">
			<strong><?php echo display_error(); ?></strong>
		</div>
	
			<form class="register-form" method="post" action="signup.php">
			<input type="text" name="fname" placeholder="Fullname"/>
			<input type="text" name="email" placeholder="Email"/>
			<input type="password" name="password" id="showpw2" placeholder="Password" onclick="showpw2();"/>
			<input type="password" name="conf_pass" id="showpw2" placeholder="Password" onclick="showpw2();"/>
			<button type="submit" name="register_btn">Submit</button>
			<p class="message">Already Registered? <a href="login.php"> Login Now! </a></p>	
			</form>
	
	</div>
	</div>
			 <script src="JavaScript/Lg&Sg.js"></script>


</body>
</html>