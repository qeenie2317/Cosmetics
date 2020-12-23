<!DOCTYPE html>
<html>
<head>
	<title>Maybelline Cosmetics</title>
	<link href ="css/cart.css"  rel="stylesheet"/>
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

 <!-- Cart Items -->
<div class= "small-container cart-page">
	<table>
		<tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>

      <tr>
			<td> 
			<div class="cart-info">
			<img src="bullet/img1.jpg">
			<div>
				<p> Toasted Brown</p>
				<small> Price: ₱245.00 </small>
				<br>
				<a href="">Remove</a>
			</div>
			</td>
			<td><input type= "number"  value="1"></td>
			<td> ₱245.00</td>
		</tr>

		<tr>
			<td> 
			<div class="cart-info">
			<img src="liquid/liquid1.jpg">
			<div>
				<p> Dreamer</p>
				<small> Price: ₱299.00 </small>
				<br>
				<a href="">Remove</a>
			</div>
			</td>
			<td><input type= "number"  value="1"></td>
			<td> ₱299.00</td>
		</tr>

	<tr>
			<td> 
			<div class="cart-info">
			<img src="maskara/maskara1.jpg">
			<div>
				<p>Volume Maskara</p>
				<small> Price: ₱200.00 </small>
				<br>
				<a href="">Remove</a>
			</div>
			</td>
			<td><input type= "number"  value="1"></td>
			<td> ₱200.00</td>
		</tr>

		<tr>
			<td> 
			<div class="cart-info">
			<img src="blush/blsuh1.jpg">
			<div>
				<p>Gold Rose</p>
				<small> Price: ₱299.00 </small>
				<br>
				<a href="">Remove</a>
			</div>
			</td>
			<td><input type= "number"  value="1"></td>
			<td> ₱299.00</td>
		</tr>

	<tr>
			<td> 
			<div class="cart-info">
			<img src="foundation/fd1.jpg">
			<div>
				<p>Ivory</p>
				<small> Price: ₱450.00 </small>
				<br>
				<a href="">Remove</a>
			</div>
			</td>
			<td><input type= "number"  value="1"></td>
			<td> ₱450.00</td>
		</tr>



	</table>
 <div class="Total-Price"> 
<table> 
<tr>
	<td>Subtotal</td>
	<td>₱1,493</td>
</tr>
<tr>
	<td>Tax</td>
	<td>₱1000</td>
</tr>
<tr>
	<td>Total</td>
	<td>₱2,493</td>
</tr>
</div>
  
</body>
</html>