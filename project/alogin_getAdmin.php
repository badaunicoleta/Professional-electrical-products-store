<?php
	$username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	
	if(!empty($username) && !empty($password)){
		
		// create connection to database
		include 'db_connection.php';
		
		// parametrized queries
		$GET_USER = "SELECT username, password
			FROM conturi_admin
			WHERE username = ?
			LIMIT 1";
			
			
		// prepare statement
		// retrieve username and password for the given username
		$stmt = $con -> prepare($GET_USER);
		$stmt -> bind_param("s", $username);
		$stmt -> execute();
		$stmt -> store_result();
		$numrows = $stmt -> num_rows;
		
		$stmt -> bind_result($usernameDB, $passwordDB);
		
		
		
		// there are no accounts with the same username
		if($numrows == 0){
			// go to the main page 
			echo "<body bgcolor=#e6ffff><div> No user </div></body>";
		}
		
		// there is an account with the same username
		else{
			// fetch results
			$stmt -> fetch();
			
			// incorrect password
			if($password != $passwordDB){
				echo "<body bgcolor=#e6ffff><div> Incorrect password. </div></body>";
			}
			// correct password
			else{
				echo "<body bgcolor=#e6ffff><div> Now you can go to the </div></body>";
				echo "<a href='a_main.html' class='button-class'>MAIN PAGE</a> <br><br>";
			}
		}
		$stmt->free_result();
		$stmt -> close();
		$con -> close();
	}
	
	else {
		echo "<body bgcolor=#e6ffff><div>Username and password fields cannot be empty.</div></body>";
		die();
	}	
?>