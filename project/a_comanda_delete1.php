<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<form method="post" action="a_comanda_delete2.php">

	
	<h2> Delete customer record </h2>

	<?php
		// create connection to database
		include 'db_connection.php';

		echo"<h3> 1. Select the order number </h3>";
	
		// retrieve date and customer id from database
		// the value of the option will be the unnique value of nr_comanda
		$sql = mysqli_query($con, "SELECT nr_comanda, data, modalitate, id_client FROM comenzi");
		
		if(mysqli_num_rows($sql)){
			$select = '<select name="nrComanda">';
			while($rs = mysqli_fetch_array($sql)){
				// nr_comanda as value
				$select.='<option value="'. $rs['nr_comanda']. '">'
				// Date and Customer ID as text in select list
				.$rs['data']. ' '. $rs['id_client'].'</option>';
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