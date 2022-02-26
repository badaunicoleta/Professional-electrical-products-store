<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 

	<h2> Information about the hair product type </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$hairProductType=$_POST['hairProductType'];
		$productsNumber=$_POST['productsNumber'];
		$modelsNumber=$_POST['modelsNumber'];
		;
		 
	    // date of order

		echo("Hair product type: ".$hairProductType."<br>");
		
		// products' number
		
		echo("Product's number: ".$productsNumber."<br>");
		
		
		// models' number
		
		echo("Models' number: ".$modelsNumber."<br>");
		

	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO tipuri_produse_par
				(tip_produs_par, nr_produse, nr_modele)
				VALUES ('$hairProductType', '$productsNumber', '$modelsNumber')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>