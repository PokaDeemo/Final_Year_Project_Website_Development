<?php      
	$servername="localhost";
	$username="root";
	$password="";
	$database_name="spe_group02";
	
	
	$conn = mysqli_connect($servername,$username,$password,$database_name, 3307);
	//$connection = new mysqli($servername, $username, $password, $database_name, 3307); 
	
	//check for database connection
	if(!$conn)
	{
		die("Database Connection Failed:". mysqli_connect_error());
	}
?>
