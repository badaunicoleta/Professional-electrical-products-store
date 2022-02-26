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
	
	
	<h2> Update the customer information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$phone = $_POST['phone'];
		$credit=$_POST['credit'];
		$email=$_POST['email'];
		$birthYear=$_POST['year'];
		$birthMonth=$_POST['month'];
		$birthDay=$_POST['day'];
		
		
		// idClient - get value from previous page
		session_start();
		$idClient = $_SESSION['idClient'];
		echo("ID: " .$idClient. "<br><br>");
		
		// customer name - get from database based on id
		$sql = "SELECT nume_client, prenume_client FROM clienti WHERE id_client = $idClient";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Name: " . $row["nume_client"]. "<br>Surame: " . $row["prenume_client"]. "<br><br>";
			}
		} else {
		 echo "0 results";
		}
		
		// phone
		echo("Phone: " .$phone. "<br><br>");
		
		// credit
		echo("Credit: " .$credit. "<br><br>");
		
		// email
		echo("Email: " .$email. "<br><br>");
		
		//date of bith
		$dateOfBirth = $birthYear."-".$birthMonth."-".$birthDay;
		echo("Date of birth: " .$dateOfBirth. "<br><br>");
	}
	
	?>
		
		
	<h3> 3. Update customer information in database </h3> 
	<?php
			echo "Updating informaton...";
			
			// update data into table 
			$sql = "UPDATE clienti
				SET telefon = '$phone', 
					limita_credit = '$credit', 
					email_client = '$email', 
					data_nastere = '$dateOfBirth'
				WHERE id_client = $idClient";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not updated!";
			}
			else{
				echo "The information was updated!";
			}
		?> 
	
</body> 

	


</html>