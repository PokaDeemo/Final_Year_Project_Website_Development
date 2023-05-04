<center>
<?php
	include('config.php');
	if(isset($_POST['save']))
	{ 
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$UserPassword = $_POST['UserPassword'];
		
		//to prevent from mysqli injection  
		$Name = stripcslashes($Name);
        $Email = stripcslashes($Email);  
        $UserPassword = stripcslashes($UserPassword);  
		$Name = mysqli_real_escape_string($conn, $Name);  
        $Email = mysqli_real_escape_string($conn, $Email);  
        $UserPassword = mysqli_real_escape_string($conn, $UserPassword);
		
		$sql = "INSERT INTO account_table (Name, Email, UserPassword) VALUES ('$Name', '$Email', '$UserPassword')";
		$query = mysqli_query($conn, "SELECT * FROM account_table WHERE Email = '$Email'");
	}
	if(mysqli_num_rows($query)>0)
	{
		echo "<h1>Email has already been used!.</h1>";
	}
	else 
	{
		if(empty($Email & $UserPassword & $Name))
		{
			echo "<h1>Registration Error: Either your Name / Email / Password is EMPTY/BLANK!!!.</h1>";
		}
		else 
		{
			if(mysqli_query($conn, $sql))
			{
				//echo "Registration Completed.!";
				header("location: loginpage.html");
			}
			else 
			{
				echo "Registration Error:". $sql . "" . mysqli_error($conn);
			}
		}
	}
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<body>
		<a class ="connect" href="RegisterPage.html"> Redirect to Registration Page</a>
	</body>
</html>
</center>