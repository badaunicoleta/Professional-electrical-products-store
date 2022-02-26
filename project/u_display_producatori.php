<!DOCTYPE html>
<html>
	<head>
		<title>Table with Manufacturers</title>
		<style type="text/css">
		table{
			border-collapse: collapse;
			width: 100%;
			color: #0099cc;
			font-family: monospace;
			font-size: 17px;
			text-align: left;
		}
		th{
			background-color: #0099cc;
			color: white;
		}
		tr:nth-child(even){background-color: #f2f2f2} 
		 h2 { text-align: center;
		      color: #00394d; 
			}
		</style>
	</head>

	<body>
	    
		<!-- table for Manufacturers -->
		<table> 
		  <h2> Manufacturers </h2>
		  <tr>
		   
		   <th>Manufacturer code</th>
		   <th>Manufacturer name</th>
		   <th>Address</th>
		   <th>Email</th>
		   <th>Phone</th>
		   

		   </tr>
		   
		   <?php
			// create connection to database
			include 'db_connection.php';
			
			// retrieve data from database
			  $sql="SELECT cod_producator, nume_producator, adresa, email, telefon FROM producatori";
			 $result=$con-> query($sql);

			 if($result-> num_rows >0){
				 while($row = $result-> fetch_assoc()){
					 echo "<tr>
							   <td>". $row["cod_producator"]."</td>
							   <td>". $row["nume_producator"]."</td>
							   <td>". $row["adresa"]."</td> 
							   <td>". $row["email"]."</td> 
							   <td>". $row["telefon"]."</td>
						   </tr>";
				}
				 echo "</table>";
			 }
			 else {
				 echo "The table is empty";
			 }
			 $con-> close();
			?>
		</table>
	</body>
</html>