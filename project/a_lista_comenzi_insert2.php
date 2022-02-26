<html> 
	<head> 
		<title></title> 
	</head> 
	
<body> 

	<h2> Information about the customer </h2> 
	
	<?php
	if(isset($_POST['submit'])){
		// get values
		$orderNumber=$_POST['orderNumber'];
		$codeArticle=$_POST['codeArticle'];
		$price=$_POST['price'];
		$amount=$_POST['amount'];
		;
		 
		 
		// order number
		
		echo("Order number: ".$orderNumber."<br>");
		
		
		// article code
		
		echo("Article code: ".$codeArticle."<br>");
		
		// price
		
		echo("Price: ".$price."<br>");
		
		// amount
		
		echo("Amount: ".$amount."<br>");
		
		
	}
	?> 
	
	<h2> Inserting information into database </h2> 
	<?php
			// create connection to database
			include 'db_connection.php';
			
			// insert data into table 
			$sql = "INSERT INTO lista_comenzi
				(nr_comanda, cod_art, pret, cantitate)
				VALUES ('$orderNumber', '$codeArticle', '$price', '$amount')";
			
			if(!mysqli_query($con, $sql)){
				echo "The information was not inserted!";
			}
			else{
				echo "The information was inserted!";
			}
		?> 
	
</body> 
</html>