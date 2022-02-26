<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 

	<h2> Information about the customer </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$surnameCustomer=$_POST['surnameCustomer'];
		$nameCustomer=$_POST['nameCustomer'];
		$phone=$_POST['phone'];
		$creditLimit=$_POST['creditLimit'];
		$email=$_POST['email'];
		$birthYear=$_POST['year'];
		$birthMonth=$_POST['month'];
		$birthDay=$_POST['day'];
		;
		 
		 
		// surname customer
		
		echo("Surname customer: ".$surnameCustomer."<br>");
		
		
		// name customer
		
		echo("Name customer: ".$nameCustomer."<br>");
		
		// phone
		
		echo("Phone: ".$phone."<br>");
		
		// credit limit
		
		echo("Credit limit: ".$creditLimit."<br>");
		
		// email
		
		echo("Email: ".$email."<br>");
		
		//age
		$dateOfBirth = $birthYear."-".$birthMonth."-".$birthDay;
		echo("Date of birth: ".$dateOfBirth."<br>");
		$age = 2021 - $birthYear;
		echo("Age (years): ".$age."<br><br><br>");
		

	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO clienti 
				(nume_client, prenume_client, telefon, limita_credit, email_client, data_nastere)
				VALUES ('$surnameCustomer', '$nameCustomer', '$phone', '$creditLimit', '$email', '$dateOfBirth')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>