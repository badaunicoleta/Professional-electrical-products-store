<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 

	<h2> Information about the product </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$codeManufacturer=$_POST['codeManufacturer'];
		$nameProduct=$_POST['nameProduct'];
		$typeProduct=$_POST['typeProduct'];
		$priceManufacturer=$_POST['priceManufacturer'];
		;
		 
	    // Manufacturer code

		echo("Manufacturer code: ".$codeManufacturer."<br>");
		
		// Product's name
		
		echo("Product's name: ".$nameProduct."<br>");
		
		
		//ID product type
		
		echo("ID product type: ".$typeProduct."<br>");
		
        // Manufacturer's price
		
		echo("Manufacturer's price: ".$priceManufacturer."<br>");
	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO produse
				(cod_producator, denumire, id_tip_produs, pret_producator)
				VALUES ('$codeManufacturer', '$nameProduct', '$typeProduct', '$priceManufacturer')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>