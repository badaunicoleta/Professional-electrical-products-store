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
		
			// get Student_Id value
			$codArt=$_POST['codArt'];
			echo("Article code: ".$codArt."<br>");
		}
	?> 
	
	<h2> Delete the product information </h2>
	<?php
			echo "Deleting...";
			
			// delete data from table 
			$sql = "DELETE FROM produse
				WHERE cod_art = $codArt";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not deleted!";
			}
			else{
				echo "The information was deleted!";
			}
		?> 
	
</body> 
