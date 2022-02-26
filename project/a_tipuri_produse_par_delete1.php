<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<form method="post" action="a_tipuri_produse_par_delete2.php">

	
	<h2> Delete customer record </h2>

	<?php
		// create connection to database
		include 'db_connection.php';

		echo"<h3> 1. Select the hair product type </h3>";
	
		// retrieve date and product type id from database
		// the value of the option will be the unnique value of id_tip_produs
		$sql = mysqli_query($con, "SELECT id_tip_produs, tip_produs_par, nr_produse, nr_modele FROM tipuri_produse_par");
		
		if(mysqli_num_rows($sql)){
			$select = '<select name="idTipProdus">';
			while($rs = mysqli_fetch_array($sql)){
				// nr_comanda as value
				$select.='<option value="'. $rs['id_tip_produs']. '">'
				// id_tip_produs and tip_produs_par as text in select list
				.$rs['id_tip_produs']. ' '. $rs['tip_produs_par'].'</option>';
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