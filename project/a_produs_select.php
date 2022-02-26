<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		
			<form method="post" action="a_produs_newInfo.php">

			
				<h2> Update the product information </h2>

				<?php
					// create connection to database
					include 'db_connection.php';

					echo"<h3> 1. Select the article code </h3>";
				
					// retrieve name manufacturer from database
					// the value of the option will be the unnique value of order_number
					$sql = mysqli_query($con, "SELECT cod_art, denumire FROM produse");
					
					if(mysqli_num_rows($sql)){
						$select = '<select name="codArt">';
						while($rs = mysqli_fetch_array($sql)){
							// cod_art as value
							$select.='<option value="'. $rs['cod_art']. '">'
							// product name as text in select list
							.$rs['cod_art'].' '.$rs['denumire'].'</option>';
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