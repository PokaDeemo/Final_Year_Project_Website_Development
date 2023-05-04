<center>
<?php
	include('config.php');
	$db = mysqli_select_db($conn, 'spe_group02');	

	if(isset($_POST['submit']))
	{
		$Email = $_POST['Email'];
		$UserPassword = $_POST['UserPassword'];
		
		$Email = stripcslashes($Email);
		$UserPassword = stripcslashes($UserPassword);  
		$Email = mysqli_real_escape_string($conn, $Email);
		$UserPassword = mysqli_real_escape_string($conn, $UserPassword);

		$query = "UPDATE account_table SET Email = '$_POST[Email]', UserPassword = '$_POST[UserPassword]' 
		where Email='$_POST[Email]'";
		$query_run = mysqli_query($conn, $query);
	
	
		if(empty($Email & $UserPassword))
		{
			echo "<h1>Reset Password Error: Either your Email / Password is EMPTY/BLANK!!!.</h1>";
		}
		else
		{
			if($query_run)
			{
				//echo "<h1>Password Has Successfully Changed</h1>";
				header("location: loginpage.html");
			}
			else 
			{
				echo "<h1>Password Change Fail</h1>";
			}	
		}
	}
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<body>
		<a class ="connect" href="loginpage.html"> Redirect to Login Page</a>
	</body>
</html>
</center>