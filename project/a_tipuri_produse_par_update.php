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
	
	
	<h2> Update the Hair product types information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$typeHairProduct = $_POST['typeHairProduct'];
		$productsNumber=$_POST['productsNumber'];
		$modelsNumber=$_POST['modelsNumber'];
		
		
		// id_tip_produs - get value from previous page
		session_start();
		$idTipProdus = $_SESSION['idTipProdus'];
		echo("ID: " .$idTipProdus. "<br><br>");
		
		// Type hair product - get from database based on id
		$sql = "SELECT id_tip_produs, tip_produs_par, nr_produse, nr_modele FROM tipuri_produse_par WHERE id_tip_produs = $idTipProdus";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Type hair product: " . $row["tip_produs_par"]. "<br><br><br><br>";
			}
		} else {
		 echo "0 results";
		}
		// type hair product
		if ($typeHairProduct == "1"){
			$typeHairProductString = "alte produse";
		}
		else if ($typeHairProduct == "2"){
			$typeHairProductString = "placa de par profesionala";
		} 
		else if ($typeHairProduct == "3"){
			$typeHairProductString = "uscator de par";
		} 
		else if ($typeHairProduct == "4"){
			$typeHairProductString = "ondulator";
		}
		else if ($typeHairProduct == "5"){
			$typeHairProductString = "perie rotativa";
		}
		
		echo("Type hair product: " .$typeHairProductString. "<br><br>"); 
		
		// products' number
		echo("Products' number: " .$productsNumber. "<br><br>");
		
		// models' number
		echo("Models' number: " .$modelsNumber. "<br><br>");
		
	}
	
	?>
		
		
	<h3> 3. Update customer information in database </h3> 
	<?php
			echo "Updating informaton...";
			
			// update data into table 
			$sql = "UPDATE  tipuri_produse_par
				SET tip_produs_par = '$typeHairProductString', 
					nr_produse = '$productsNumber', 
					nr_modele = '$modelsNumber'
				WHERE id_tip_produs = $idTipProdus";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not updated!";
			}
			else{
				echo "The information was updated!";
			}
		?> 
	
</body> 

	


</html>