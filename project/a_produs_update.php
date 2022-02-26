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
	
	
	<h2> Update the product information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$price = $_POST['price'];


		
		
		// codArt - get value from previous page
		session_start();
		$codArt = $_SESSION['codArt'];
		echo("Article code: " .$codArt. "<br><br>");
		

		$sql = "SELECT cod_art, cod_producator FROM produse WHERE cod_art = $codArt";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Manufacturer code: " . $row["cod_producator"]. "<br><br>";
			}
		} else {
		 echo "0 results";
		}

		
		// product's name
		echo("Product's name: " .$name. "<br><br>");
		
		// price
		echo("Manufacturer's price: " .$price. "<br><br>");

	}
	
	?>
		
		
	<h3> 3. Update product information in database </h3> 
	<?php
			echo "Updating information...";
			
			// update data into table 
			$sql = "UPDATE produse
				SET denumire = '$name',
				    pret_producator = '$price'
                WHERE cod_art = $codArt";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not updated!";
			}
			else{
				echo "The information was updated!";
			}
		?> 
	
</body> 

	


</html>