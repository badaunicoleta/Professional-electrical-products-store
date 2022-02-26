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
	
		//get the ID for the selected hair product type

		if(isset($_POST['submit'])){
		
			// get id_tip_produs value
			$idTipProdus=$_POST['idTipProdus'];
			echo("ID for selected hair product type: ".$idTipProdus."<br>");
		}
	?> 
	
	<h2> Delete the hair product type information </h2>
	<?php
			echo "Deleting...";
			
			// delete data from table 
			$sql = "DELETE FROM tipuri_produse_par
				WHERE id_tip_produs = $idTipProdus";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not deleted!";
			}
			else{
				echo "The information was deleted!";
			}
		?> 
	
</body> 

	


</html>