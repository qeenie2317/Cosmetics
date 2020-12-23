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
				<li class="search">
					<input type="search" placeholder="Search">
					<label class="icon">
					<span class="fa fa-search"></span> </label>
			   	</li>
		   		<?php
		   			if (isset($_SESSION['user']['fname'])) {
		   			$logged_in_fullname = $_SESSION['user']['fname'];
		            }
		        ?>
				<li id="asa">
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

		<form style="padding: 5px; color: #000;" method="post" action="insert_sales.php">
			<input style="color: #000;" type="text" id="prod_id" name="prod_id" placeholder="Product ID">
			<input style="color: #000;" type="text" id="prod_name" name="prod_name" placeholder="Product Name">
			<input style="color: #000;" type="number" id="prod_price" name="prod_price" placeholder="Product Price">
			<button style="color: #000;" type="submit" style="padding: 5px; color: #000;"> Confirm </button>
		</form>

		<p id="b"> Beauty Products </p>

		<table id="products">
			<thead>
				<tr>
					<th> Product ID </th>
					<th> Image </th>
					<th> Product Name </th>
					<th> Product Price </th>
					<th> Function </th>
				</tr>
			</thead>

				<?php
					$query = "SELECT * FROM products WHERE prod_category = 'Bullet Lipstick' ";
		            $result = $conn->query( $query );

		            $num_results = $result->num_rows;

		            if ($num_results) {
		                while($row = $result->fetch_assoc()) {
		                                                
		                    extract($row);
		                        echo "<tbody>";
		                        	echo "<tr>";
		                        		echo "<td>{$prod_id}</td>";
		                        		echo "<td>
		                        				<img style='width: 100px; height 100px;' src='../img/{$prod_image}'>
		                        			  </td>";
		                        		echo "<td>{$prod_name}</td>";
		                        		echo "<td>{$prod_price}</td>";
		                        		echo "<td><button class='button' type='submit' onclick='getData()'>Buy Now</button></td>";
		                        	echo "</tr>";
								echo "</tbody>";
		                        }
		                    }
		                   	$result->free();
		                   	$conn->close();
		    	?>
    	</table>
    	<script>
			function getData() {
				var table = document.getElementById("products"), rIndex;

	                for (var x = 1; x < table.rows.length; x++) {
	                    table.rows[x].onclick = function() {
	                        rIndex = this.rowIndex;

	                        document.getElementById("prod_id").value = this.cells[0].innerHTML;
	                        document.getElementById("prod_name").value = this.cells[2].innerHTML;
	                        document.getElementById("prod_price").value = this.cells[3].innerHTML;

	                    };
	                }
			}
		</script>
	</body>
</html>