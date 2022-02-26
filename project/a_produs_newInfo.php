<!DOCTYPE html>
<html> 
	<head> 
		<title></title> 
	</head> 
	
	<body> 
		<style>
		<!-- table style -->
		table, td, th {
			border: none;
		}

		table {
		  border-collapse: collapse;
		}

		th {
		  height: 50px;
		  text-align: left;
		  width: 70%;
		}

		td {
		  height: 50px;
		   text-align: left;
		  width: 30%;
		}
		</style>

		<h2> Update the product information </h2>
		<h3> 2. Insert the new information </h3> 
		
		<!-- get the ID for the selected product-->
		<?php
		
		if(isset($_POST['submit'])){
			
			// get nr_comanda value
			$codArt=$_POST['codArt'];
			echo("Article code: ".$codArt."<br>");
			
			// use sessions to pass variable to the next page
			session_start();
			$_SESSION['codArt'] = $codArt;
		}
		?> 
		
		<form method="post" action="a_produs_update.php">
		<!-- get the new information about the order-->
		<table> 
		  <!-- first row -->
		  <tr>
			<td>
				Product's name
			</td>
			<td>
				<span>
				<input type="text" name="name" placeholder="Enter product name:">	
				</span>
			</td>
		  </tr> 
		  
		  
		  <!-- second row -->
		  <tr>
			<td>
				Manufacturer's price
			</td>
			<td>
				<span>
				<input type="text" name="price" placeholder="Enter price:">	
				</span>
			</td>
		  </tr> 
		  
		</table><br><br>	

		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>