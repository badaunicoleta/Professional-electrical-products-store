<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		
			<form method="post" action="a_tipuri_produse_par_newInfo.php">

			
				<h2> Update the hair product types information </h2>

				<?php
					// create connection to database
					include 'db_connection.php';

					echo"<h3> 1. Select the hair product type </h3>";
				
					// retrieve hair product type from database
					// the value of the option will be the unnique value of id_client
					$sql = mysqli_query($con, "SELECT id_tip_produs, tip_produs_par FROM tipuri_produse_par");
					
					if(mysqli_num_rows($sql)){
						$select = '<select name="idTipProdus">';
						while($rs = mysqli_fetch_array($sql)){
							// id_client as value
							$select.='<option value="'. $rs['id_tip_produs']. '">'
							//product id and hair product type as text in select list
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