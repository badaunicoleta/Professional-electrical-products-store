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
	?>
	
	
	<h2> Update the order information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$comYear=$_POST['year'];
		$comMonth=$_POST['month'];
		$comDay=$_POST['day'];
		$method = $_POST['method'];
		$id=$_POST['id'];

		
		
		// nrComanda - get value from previous page
		session_start();
		$nrComanda = $_SESSION['nrComanda'];
		echo("ID: " .$nrComanda. "<br><br>");
		
		// customer name - get from database based on id
		$sql = "SELECT nr_comanda, data, id_client FROM comenzi WHERE nr_comanda = $nrComanda";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Order ID: " . $row["nr_comanda"]. "<br>Date : " . $row["data"]."<br>Customer ID: ".$row["id_client"]. "<br><br>";
			}
		} else {
		 echo "0 results";
		}
		
		// date of order
		$dateOfOrder = $comYear."-".$comMonth."-".$comDay;
		echo("Date of Order: " .$dateOfOrder. "<br><br>");
		
		// modalitate
		echo("Payment method: " .$method. "<br><br>");
		
		// id
		echo("Customer ID: " .$id. "<br><br>");
		
	}
	
	?>
		
		
	<h3> 3. Update order information in database </h3> 
	<?php
			echo "Updating informaton...";
			
			// update data into table 
			$sql = "UPDATE comenzi
				SET data = '$dateOfOrder', 
					modalitate = '$method', 
					id_client = '$id'
				WHERE nr_comanda = $nrComanda";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not updated!";
			}
			else{
				echo "The information was updated!";
			}
		?> 
	
</body> 

	


</html>