<!DOCTYPE html>
<html> 
     <head> 
	     <title>
		    Project
		 </title>
	 </head> 
	  
	 <body>
	    <?php
		   // This file will be used by all the other file to connect to database
		   
		   $serverName = "localhost";
		   $dbUsername = "root";
		   $dbPassword = "2004";
		   $dbName = "magazin_produse_electrice_profesionale_pentru_par";
		   
		   // create connection to database
		   $con = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
				
				if(mysqli_connect_errno()){
					echo "Failed to connect!";
					exit();
				}
				//echo "Connection to database successful!<br><br>";
		?> 
		   
	 </body>
</html>