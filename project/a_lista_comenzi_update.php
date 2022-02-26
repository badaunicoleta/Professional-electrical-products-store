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
	
	
	<h2> Update the order list information </h2>
	<p> The following information will be updated in the database: </p>
	
	<!-- based on the new information, get the values to be updated-->
	<?php
	if(isset($_POST['submit'])){
		$codeArticle = $_POST['codeArticle'];
		$price = $_POST['price'];
		$amount = $_POST['amount'];

		
		
		// nrComanda - get value from previous page
		session_start();
		$nrComanda = $_SESSION['nrComanda'];
		echo("Order number: " .$nrComanda. "<br><br>");
		

		$sql = "SELECT cod_art FROM lista_comenzi WHERE nr_comanda = $nrComanda";
		$result = $con->query($sql);
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Article code: " . $row["cod_art"]. "<br><br>";
			}
		} else {
		 echo "0 results";
		}
		// new code article
		echo("New article code or same article code: " .$codeArticle. "<br><br>");
		
		// price
		echo("Price: " .$price. "<br><br>");
		
		// amount
		echo("Amount: " .$amount. "<br><br>");

	}
	
	?>
		
		
	<h3> 3. Update customer information in database </h3> 
	<?php
			echo "Updating informaton...";
			
			// update data into table 
			$sql = "UPDATE lista_comenzi
				SET cod_art = '$codeArticle',
				    pret = '$price', 
					cantitate = '$amount'

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