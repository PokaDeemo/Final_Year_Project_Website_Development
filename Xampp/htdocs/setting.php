<center>
<?php
	include('config.php');
	$db = mysqli_select_db($conn, 'spe_group02');	
	
	if(isset($_POST['update']))
	{
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$UserPassword = $_POST['UserPassword'];
		
		$Name = stripcslashes($Name);
		$Email = stripcslashes($Email);
		$UserPassword = stripcslashes($UserPassword); 
		
		$Name = mysqli_real_escape_string($conn, $Name);
		$Email = mysqli_real_escape_string($conn, $Email);
		$UserPassword = mysqli_real_escape_string($conn, $UserPassword);

		$query = "UPDATE account_table SET Name = '$_POST[Name]', Email = '$_POST[Email]', UserPassword = '$_POST[UserPassword]'
		where Name='$_POST[Name]'";
		
		$query_run = mysqli_query($conn, $query);
	
		if(empty($Name & $Email & $UserPassword))
		{
			echo "<h1>Account Setting Update Error: Either your Name / Email / Password is EMPTY/BLANK!!!.</h1>";
		} 
		else
		{
			if($query_run)
			{
				//echo "<h1>Account Details/Setting Has Successfully Updated</h1>";
				header("location: Setting.html");
			}
			else 
			{
				echo "<h1>Unable to Update Account Details</h1>";
			}	
		}
	}
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<body>
		<a class ="connect" href="Setting.html"> Redirect to Account/Profile Setting Page</a>
	</body>
</html>
</center>