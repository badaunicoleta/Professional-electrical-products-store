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
	
	
	<h2> Update the manufacturer information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$address = $_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];

		
		
		// codProducator - get value from previous page
		session_start();
		$codProducator = $_SESSION['codProducator'];
		echo("ID: " .$codProducator. "<br><br>");
		
		// manufacturer name - get from database based on id
		$sql = "SELECT nume_producator FROM producatori WHERE cod_producator = $codProducator";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Manufacturer name: " . $row["nume_producator"]. "<br><br>";
			}
		} else {
		 echo "0 results";
		}
		// address
		echo("Address: " .$address. "<br><br>");
		
		// email
		echo("Email: " .$email. "<br><br>");
		
		// phone
		echo("Phone: " .$phone. "<br><br>");

	}
	
	?>
		
		
	<h3> 3. Update customer information in database </h3> 
	<?php
			echo "Updating informaton...";
			
			// update data into table 
			$sql = "UPDATE producatori
				SET adresa = '$address', 
					email = '$email', 
					telefon = '$phone'
				WHERE cod_producator = $codProducator";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not updated!";
			}
			else{
				echo "The information was updated!";
			}
		?> 
	
</body> 

	


</html>