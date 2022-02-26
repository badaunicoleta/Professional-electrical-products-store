<?php 
    $username = filter_input(INPUT_POST, 'username');
	$password = filter_input(INPUT_POST, 'password');
	
	if(!empty($username) && !empty($password)){ 
	
		 //create connection to database
		include 'db_connection.php';
		 
		 //parametrized queries
		$UNIQUE_USERNAME = "SELECT username 
			FROM conturi_user
			WHERE Username = ?
			LIMIT 1";

		$INSERT_USER = "INSERT INTO conturi_user (username, password)		
			 values (?, ?)";
		
		//prepare statement
		//retrieve username if it already exists
		
		$stmt = $con -> prepare($UNIQUE_USERNAME);
		$stmt -> bind_param("s", $username);
		$stmt -> execute();
		$stmt -> bind_result($username);
		$stmt -> store_result();
		$rows = $stmt -> num_rows; 
		
		//there are no accounts with the same username
		if($rows == 0){
			$stmt -> close();
		
			//insert new user
			$stmt = $con -> prepare($INSERT_USER);
			$stmt -> bind_param("ss", $username, $password);
			$stmt -> execute();
			
			//go to the main page
			echo"<body bgcolor=#e6ffcc><div> Now you can go to the </div></body>";
			echo"<a href='u_main.html' class='button-class'>MAIN PAGE</a> <br><br>";
		 
		} 
		//there already exists an account with the same username
		
		else{
			echo "<body bgcolor=#e6ffcc><div> There already is an account with the same username. </div></body>";
		} 
		
		$stmt -> close();
		$con -> close();
	} 
	
	else {
		echo "<body bgcolor=#e6ffcc><div>Username and password fields cannot be empty.</div></body>";
		die();
	}
?>	