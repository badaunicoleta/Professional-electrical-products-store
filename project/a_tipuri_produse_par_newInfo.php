<!DOCTYPE html>
<html> 
	<head> 
		<title></title> 
	</head> 
	
	<body> 
		<style>
		<!-- table style -->
		table, td, th {
			border: none;
		}

		table {
		  border-collapse: collapse;
		}

		th {
		  height: 50px;
		  text-align: left;
		  width: 70%;
		}

		td {
		  height: 50px;
		   text-align: left;
		  width: 30%;
		}
		</style>

		<h2> Update the hair product types information </h2>
		<h3> 2. Insert the new information </h3> 
		
		<!-- get the ID for the selected Hair product type-->
		<?php
		
		if(isset($_POST['submit'])){
			
			// get id_tip_produs value
			$idTipProdus=$_POST['idTipProdus'];
			echo("ID for selected hair product type: ".$idTipProdus."<br>");
			
			// use sessions to pass variable to the next page
			session_start();
			$_SESSION['idTipProdus'] = $idTipProdus;
		}
		?> 
		
		<form method="post" action="a_tipuri_produse_par_update.php">
		<!-- get the new information about the hair product type-->
		<table> 
		  <!-- first row -->
		  <tr>
			<td>
				Type hair product:
			</td>
			<td>
				<span>
				<select name="typeHairProduct">
						<option value="1">alte produse</option>
						<option value="2">placa de par profesionala</option> 
						<option value="3">uscator de par</option>
						<option value="4">ondulator</option>
						<option value="5">perie rotativa</option>
					</select>	
				</span>
			</td>
		  </tr> 
		  
		  <!-- second row -->
		  <tr>
			<td>
				Products'number:
			</td>
			<td>
			<input type="text" name="productsNumber" placeholder="Enter products' number:">	
			</td>	
		  </tr>
		  
		 
		 <!-- third row -->
		  <tr>
			<td>
				Models' number:
			</td>
			<td>
			<input type="text" name="modelsNumber" placeholder="Enter models' number:">	
			</td>
		  </tr>
		  
		  
		</table><br><br>	

		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>