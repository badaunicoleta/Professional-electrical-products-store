<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 


	<h2> Information about the order </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$comYear=$_POST['year'];
		$comMonth=$_POST['month'];
		$comDay=$_POST['day'];
		$method=$_POST['method'];
		$id=$_POST['id'];
		;
		 
	    // date of order
		$dateOfOrder = $comYear."-".$comMonth."-".$comDay;
		echo("Date of order: ".$dateOfOrder."<br>");
		
		// payment method
		
		echo("Payment method: ".$method."<br>");
		
		
		// id client
		
		echo("Customer ID: ".$id."<br>");
		

	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO comenzi
				(data, modalitate, id_client)
				VALUES ('$dateOfOrder', '$method', '$id')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>