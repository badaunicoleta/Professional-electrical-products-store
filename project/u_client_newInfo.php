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

		<h2> Update the customer information </h2>
		<h3> 2. Insert the new information </h3> 
		
		<!-- get the ID for the selected customer-->
		<?php
		
		if(isset($_POST['submit'])){
			
			// get id_client value
			$idClient=$_POST['idClient'];
			echo("ID for selected customer: ".$idClient."<br>");
			
			// use sessions to pass variable to the next page
			session_start();
			$_SESSION['idClient'] = $idClient;
		}
		?> 
		
		<form method="post" action="u_client_update.php">
		<!-- get the new information about the order-->
		<table> 
		  <!-- first row -->
		  <tr>
			<td>
				Phone:
			</td>
			<td>
				<span>
				<input type="text" name="phone" placeholder="Enter phone number:">	
				</span>
			</td>
		  </tr> 
		  
		  <!-- second row -->
		  <tr>
			<td>
				Credit limit:
			</td>
			<td>
			<input type="text" name="credit" placeholder="Enter credit limit:">	
			</td>	
		  </tr>
		  
		 
		 <!-- third row -->
		  <tr>
			<td>
				Email:
			</td>
			<td>
			<input type="text" name="email" placeholder="Enter email:">	
			</td>
		  </tr>
		  
		   <!-- fourth row -->
		  <tr>
			<td>
				Date of birth:
			</td>
			<td>
				<span>
				 <label for="month">Month:</label>
				 <select name="month">
					<option value="01">January</option>
					<option value="02">February</option>
					<option value="03">March</option>
					<option value="04">April</option>
					<option value="05">May</option>
					<option value="06">June</option>
					<option value="07">July</option>
					<option value="08">August</option>
					<option value="09">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				 </select> 
				</span>
			
				<span>
				 <label for="day">Day:</label>
				 <select name="day">
					  <option value="01">1</option>
					  <option value="02">2</option>
					  <option value="03">3</option>
					  <option value="04">4</option>
					  <option value="05">5</option>
					  <option value="06">6</option>
					  <option value="07">7</option>
					  <option value="08">8</option>
					  <option value="09">9</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					  <option value="13">13</option>
					  <option value="14">14</option>
					  <option value="15">15</option>
					  <option value="16">16</option>
					  <option value="17">17</option>
					  <option value="18">18</option>
					  <option value="19">19</option>
					  <option value="20">20</option>
					  <option value="21">21</option>
					  <option value="22">22</option>
					  <option value="23">23</option>
					  <option value="24">24</option>
					  <option value="25">25</option>
					  <option value="26">26</option>
					  <option value="27">27</option>
					  <option value="28">28</option>
					  <option value="29">29</option>
					  <option value="30">30</option>
					  <option value="31">31</option>
				 </select>
				</span>
			
			
				<span>
				 <label for="year">Year:</label>
				 <select name="year">
					  <option value="2005">2005</option>
					  <option value="2004">2004</option>
					  <option value="2003">2003</option>
					  <option value="2002">2002</option>
					  <option value="2001">2001</option>
					  <option value="2000">2000</option>
					  <option value="1999">1999</option>
					  <option value="1998">1998</option>
					  <option value="1997">1997</option>
					  <option value="1996">1996</option>
					  <option value="1995">1995</option>
					  <option value="1994">1994</option>
					  <option value="1993">1993</option>
					  <option value="1992">1992</option>
					  <option value="1991">1991</option>
					  <option value="1990">1990</option>
					  <option value="1989">1989</option>
					  <option value="1988">1988</option>
					  <option value="1987">1987</option>
					  <option value="1986">1986</option>
					  <option value="1985">1985</option>
					  <option value="1984">1984</option>
					  <option value="1983">1983</option>
					  <option value="1982">1982</option>
					  <option value="1981">1981</option>
					  <option value="1980">1980</option>
				 </select>
			</span>
			</td>
		  </tr>
		</table><br><br>	

		<input type="submit" name="submit" value="Submit">
		</form>

	</body>
</html>