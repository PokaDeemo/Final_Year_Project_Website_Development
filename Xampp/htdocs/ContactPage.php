<center>
<?php
	//error_reporting(0);
	include('config.php');
	$db = mysqli_select_db($conn, 'spe_group02');	
	
		if(isset($_POST['submit']))
		{ 
			$Name = $_POST['Name'];
			$Email = $_POST['Email'];
			
			//to prevent from mysqli injection  
			$Name = stripcslashes($Name);
			$Email = stripcslashes($Email);  
			$Name = mysqli_real_escape_string($conn, $Name);  
			$Email = mysqli_real_escape_string($conn, $Email);  
			
			$sql = "INSERT INTO alert_table(Name, Email) VALUES ('$Name', '$Email')";
			$query = mysqli_query($conn, "SELECT * FROM alert_table WHERE Name = '$Name'");
		}
		if(mysqli_num_rows($query)>0)
		{
			echo "<h1>Email has already been used!.</h1>";
		}
		else 
		{
			if(empty($Email & $Name))
			{
				echo "<h1>Alert Button Error: Either your Name/Email is EMPTY/BLANK!!!.</h1>";
			}
			else 
			{
				if(mysqli_query($conn, $sql))
				{
					//echo "<h1>Successfully Alert The Unit Coordinator!!!</h1>";
					header("location: ContactPage.html");
				}
				else 
				{
					echo "Alert Error:". $sql . "" . mysqli_error($conn);
				}
			}
		}
	
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<body>
		<a class ="connect" href="ContactPage.html"> Redirect back to the Contact Page</a>
	</body>
</html>
</center>