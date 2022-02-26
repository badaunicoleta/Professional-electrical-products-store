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

		<h2> Update the orders list information </h2>
		<h3> 2. Insert the new information </h3> 
		
		<!-- get the ID for the selected customer-->
		<?php
		
		if(isset($_POST['submit'])){
			
			// get nr_comanda value
			$nrComanda=$_POST['nrComanda'];
			echo("Order number: ".$nrComanda."<br>");
			
			// use sessions to pass variable to the next page
			session_start();
			$_SESSION['nrComanda'] = $nrComanda;
		}
		?> 
		
		<form method="post" action="a_lista_comenzi_update.php">
		<!-- get the new information about the order-->
		<table> 
		  <!-- first row -->
		  <tr>
			<td>
				Article code:
			</td>
			<td>
				<span>
				<input type="text" name="codeArticle" placeholder="Enter article code:">	
				</span>
			</td>
		  </tr> 
		  <!-- second row -->
		  <tr>
			<td>
				Price:
			</td>
			<td>
				<span>
				<input type="text" name="price" placeholder="Enter price:">	
				</span>
			</td>
		  </tr> 
		  
		  <!-- third row -->
		  <tr>
			<td>
			Amount:
			</td>
			<td>
			<input type="text" name="amount" placeholder="Enter amount:">	
			</td>	
		  </tr>
		</table><br><br>	

		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>