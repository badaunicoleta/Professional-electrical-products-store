<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<form method="post" action="a_produs_delete2.php">

	
	<h2> Delete product record </h2>

	<?php
		// create connection to database
		include 'db_connection.php';

		echo"<h3> 1. Select the product's name</h3>";
	
		// retrieve name and surname from database
		// the value of the option will be the unnique value of id_client
		$sql = mysqli_query($con, "SELECT cod_art, cod_producator, denumire, 
		id_tip_produs, pret_producator FROM produse");
		
		if(mysqli_num_rows($sql)){
			$select = '<select name="codArt">';
			while($rs = mysqli_fetch_array($sql)){
				// nr_comada as value
				$select.='<option value="'. $rs['cod_art']. '">'
				// order number and code article as text in select list
				.$rs['cod_art']. ' '. $rs['cod_producator'].' '.$rs['denumire'].'</option>';
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