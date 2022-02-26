<!DOCTYPE html>
<html>
	<head>
		<title>Table with orders</title>
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
	    
		<!-- table for Orders -->
		<table> 
		  <h2> Orders </h2>
		  <tr>
		   
		   <th>Order number</th>
		   <th>Date</th>
		   <th>Method</th>
		   <th>Client ID</th>
		   
		   </tr>
		   
		   <?php
			// create connection to database
			include 'db_connection.php';
			
			// retrieve data from database
			  $sql="SELECT nr_comanda, data, modalitate, id_client FROM comenzi";
			 $result=$con-> query($sql);

			 if($result-> num_rows >0){
				 while($row = $result-> fetch_assoc()){
					 echo "<tr>
							   <td>". $row["nr_comanda"]."</td>
							   <td>". $row["data"]."</td>
							   <td>". $row["modalitate"]."</td> 
							   <td>". $row["id_client"]."</td> 
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