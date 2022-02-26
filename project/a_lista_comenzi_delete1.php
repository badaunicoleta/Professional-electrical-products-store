<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<form method="post" action="a_lista_comenzi_delete2.php">

	
	<h2> Delete orders list record </h2>

	<?php
		// create connection to database
		include 'db_connection.php';

		echo"<h3> 1. Select the order number</h3>";
	
		// retrieve name and surname from database
		// the value of the option will be the unnique value of id_client
		$sql = mysqli_query($con, "SELECT nr_comanda, cod_art, pret, cantitate FROM lista_comenzi");
		
		if(mysqli_num_rows($sql)){
			$select = '<select name="nrComanda">';
			while($rs = mysqli_fetch_array($sql)){
				// nr_comada as value
				$select.='<option value="'. $rs['nr_comanda']. '">'
				// order number and code article as text in select list
				.$rs['nr_comanda']. ' '. $rs['cod_art'].'</option>';
			}
			
		}
		$select.='</select>';
		echo $select;
	?>

	<br><br>
	<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>