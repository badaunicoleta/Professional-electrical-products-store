<!DOCTYPE html>
<html>
	<head>
		<title>Table with customers</title>
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
	    
		<!-- table for Hair product types -->
		<table> 
		  <h2> Hair product types </h2>
		  <tr>
		   
		   <th>ID product type</th>
		   <th>Type hair product</th>
		   <th>Products' number</th>
		   <th>Models' number</th>
		   
		   

		   </tr>
		   
		   <?php
			// create connection to database
			include 'db_connection.php';
			
			// retrieve data from database
			  $sql="SELECT id_tip_produs, tip_produs_par, nr_produse, nr_modele FROM tipuri_produse_par";
			 $result=$con-> query($sql);

			 if($result-> num_rows >0){
				 while($row = $result-> fetch_assoc()){
					 echo "<tr>
							   <td>". $row["id_tip_produs"]."</td>
							   <td>". $row["tip_produs_par"]."</td>
							   <td>". $row["nr_produse"]."</td>
							   <td>". $row["nr_modele"]."</td> 
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