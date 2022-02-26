<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
	<form method="post" action="u_client_delete2.php">

	
	<h2> Delete customer record </h2>

	<?php
		// create connection to database
		include 'db_connection.php';

		echo"<h3> 1. Select the customer name </h3>";
	
		// retrieve name and surname from database
		// the value of the option will be the unnique value of id_client
		$sql = mysqli_query($con, "SELECT id_client, nume_client, prenume_client FROM clienti");
		
		if(mysqli_num_rows($sql)){
			$select = '<select name="idClient">';
			while($rs = mysqli_fetch_array($sql)){
				// id_client as value
				$select.='<option value="'. $rs['id_client']. '">'
				// Name and Surname as text in select list
				.$rs['nume_client']. ' '. $rs['prenume_client'].'</option>';
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