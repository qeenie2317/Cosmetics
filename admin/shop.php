<?php
	include('../db_connect.php');
	include('../functions.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Cosmetics </title>
		<link href ="../css/shopstyle.css"  rel="stylesheet"/>
		<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	</head>
	<body>
		<nav>
			<ul>
				<div class="text">
					<li><a href="index.php">Home</a></li>
					<li><a href="shop.php">Produts</a></li>
					<li><a href="../login.php">Logout</a></li>
				</div>
		   		<?php
		   			if (isset($_SESSION['user']['fname'])) {
		   			$logged_in_fullname = $_SESSION['user']['fname'];
		            }
		        ?>
				<li id="asa" style="margin-left: 80%">
					<a>
						<h3><?php echo $logged_in_fullname; ?></h3>
					</a>
				</li>
				<li class="cart">
					<a href="cart.php">
						<i class="fa fa-shopping-cart"></i>
					</a>
   				</li>
   			</ul>
		</nav>

		<p id="b"> Bullet Lipstick </p>


		<table class= "bl">
			<tr>
				<td>
					<img src="bullet/img1.jpg" class="bllt">
					</br>
					<p class="text">
						<a href="TB.html">Toasted Brown - ₱245.00</a>
					</p>
				</td>
				<td>
					<img src="bullet/img2.jpg" class="bllt">
					</br>
					<p class="text">
						<a href="RR.html">Rosewood Red - ₱245.00</a>
					</p>
				</td>
				<td>
					<img src="bullet/img3.jpg" class="bllt">
					</br>
					<p class="text">
						<a href="UD.html"> Up to Date - ₱245.00 </a>
					</p>
				</td>
				<td>
					<img src="bullet/img4.jpg" class ="bllt">
					</br>
					<p class="text">
						<a href="GR.html"> Get Red-Dy - ₱245.00 </a>
					</p>
				</td>
				<td>
					<img src="bullet/img5.jpg" class="bllt">
					</br>
					<p class="text">
						<a href="MU.html"> Mauve it Up - ₱245.00 </a>
					</p>
				</td>
			</tr>
		</table>
	</body>
</html>