<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 

	<h2> Information about the manufacturer </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$name=$_POST['name'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		;
		 

		
		// manufacturer name
		echo("Manufacturer name: ".$name."<br>");
		
		// address
		echo("Address: ".$address."<br>");
		
		// email
		echo("Email: ".$email."<br>");
		
		// phone
		echo("Phone: ".$phone."<br>");
		

	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO producatori
				(nume_producator, adresa, email, telefon)
				VALUES ('$name', '$address', '$email', '$phone')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>