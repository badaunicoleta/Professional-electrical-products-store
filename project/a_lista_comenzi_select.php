<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		
			<form method="post" action="a_lista_comenzi_newInfo.php">

			
				<h2> Update the orders list information </h2>

				<?php
					// create connection to database
					include 'db_connection.php';

					echo"<h3> 1. Select the order number and article code </h3>";
				
					// retrieve name manufacturer from database
					// the value of the option will be the unnique value of order_number
					$sql = mysqli_query($con, "SELECT nr_comanda, cod_art FROM lista_comenzi");
					
					if(mysqli_num_rows($sql)){
						$select = '<select name="nrComanda">';
						while($rs = mysqli_fetch_array($sql)){
							// nr_comanda as value
							$select.='<option value="'. $rs['nr_comanda']. '">'
							// order number and article code as text in select list
							.$rs['nr_comanda'].' '.$rs['cod_art'].'</option>';
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