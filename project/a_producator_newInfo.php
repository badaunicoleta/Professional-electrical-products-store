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

		<h2> Update the manufacturer information </h2>
		<h3> 2. Insert the new information </h3> 
		
		<!-- get the ID for the selected manufacturer-->
		<?php
		
		if(isset($_POST['submit'])){
			
			// get cod_producator value
			$codProducator=$_POST['codProducator'];
			echo("ID for selected manufacturer: ".$codProducator."<br>");
			
			// use sessions to pass variable to the next page
			session_start();
			$_SESSION['codProducator'] = $codProducator;
		}
		?> 
		
		<form method="post" action="a_producator_update.php">
		<!-- get the new information about the order-->
		<table> 
		  
		  
		  <!-- first row -->
		  <tr>
			<td>
				Address:
			</td>
			<td>
			<input type="text" name="address" placeholder="Enter address:">	
			</td>	
		  </tr>
		  
		 
		 <!-- second row -->
		  <tr>
			<td>
				Email:
			</td>
			<td>
			<input type="text" name="email" placeholder="Enter email:">	
			</td>
		  </tr>
		  
		  <!-- third row -->
		  <tr>
			<td>
				Phone:
			</td>
			<td>
			<input type="text" name="phone" placeholder="Enter phone:">	
			</td>
		  </tr>
		  
		  
		</table><br><br>	

		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>