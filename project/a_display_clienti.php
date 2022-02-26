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
	    
		<!-- table for Students -->
		<table> 
		  <h2> Customers </h2>
		  <tr>
		   
		   <th>ID</th>
		   <th>Surname</th>
		   <th>Name</th>
		   <th>Phone</th>
		   <th>Credit limit</th>
		   <th>Email</th>
		   <th>Date of birth</th>
		   

		   </tr>
		   
		   <?php
			// create connection to database
			include 'db_connection.php';
			
			// retrieve data from database
			  $sql="SELECT id_client, nume_client, prenume_client, telefon,
			  limita_credit, email_client, data_nastere FROM clienti";
			 $result=$con-> query($sql);

			 if($result-> num_rows >0){
				 while($row = $result-> fetch_assoc()){
					 echo "<tr>
							   <td>". $row["id_client"]."</td>
							   <td>". $row["nume_client"]."</td>
							   <td>". $row["prenume_client"]."</td> 
							   <td>". $row["telefon"]."</td> 
							   <td>". $row["limita_credit"]."</td>
							   <td>". $row["email_client"]."</td>
							   <td>". $row["data_nastere"]."</td>
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