<!DOCTYPE html>
<html>
	<head>
		<title>Table with products </title>
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
	    
		<!-- table for  Products  -->
		<table> 
		  <h2>  Products  </h2>
		  <tr>
		   
		   <th>Article code</th>
		   <th>Manufacturer code</th>
		   <th>Product's Name</th>
		   <th>ID product type</th>
		   <th>Manufacturer's price</th>

		   </tr>
		   
		   <?php
			// create connection to database
			include 'db_connection.php';
			
			// retrieve data from database
			  $sql="SELECT cod_art, cod_producator, denumire, id_tip_produs, pret_producator FROM produse";
			 $result=$con-> query($sql);

			 if($result-> num_rows >0){
				 while($row = $result-> fetch_assoc()){
					 echo "<tr>
							   <td>". $row["cod_art"]."</td>
							   <td>". $row["cod_producator"]."</td>
							   <td>". $row["denumire"]."</td> 
							   <td>". $row["id_tip_produs"]."</td> 
							   <td>". $row["pret_producator"]."</td>
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