<!DOCTYPE html>
<html> 
	<head> 
		<title>

		</title> 
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

	<?php
		// create connection to database
		include 'db_connection.php';
	
		//get the ID for the selected student

		if(isset($_POST['submit'])){
		
			// get nr_comanda value
			$nrComanda=$_POST['nrComanda'];
			echo("ID for selected order: ".$nrComanda."<br>");
		}
	?> 
	
	<h2> Delete the customer information </h2>
	<?php
			echo "Deleting...";
			
			// delete data from table 
			$sql = "DELETE FROM comenzi
				WHERE nr_comanda = $nrComanda";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not deleted!";
			}
			else{
				echo "The information was deleted!";
			}
		?> 
	
</body> 

	


</html>