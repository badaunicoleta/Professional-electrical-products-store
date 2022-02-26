<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	
	<body>
		
			<form method="post" action="a_producator_newInfo.php">

			
				<h2> Update the manufacturer information </h2>

				<?php
					// create connection to database
					include 'db_connection.php';

					echo"<h3> 1. Select the manufacturer name </h3>";
				
					// retrieve name manufacturer from database
					// the value of the option will be the unnique value of cod_producator
					$sql = mysqli_query($con, "SELECT cod_producator, nume_producator FROM producatori");
					
					if(mysqli_num_rows($sql)){
						$select = '<select name="codProducator">';
						while($rs = mysqli_fetch_array($sql)){
							// cod_producator as value
							$select.='<option value="'. $rs['cod_producator']. '">'
							// manufacturer name as text in select list
							.$rs['nume_producator'].'</option>';
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