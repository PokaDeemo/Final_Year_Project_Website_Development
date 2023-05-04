<center>
<?php
	include('config.php');
	
	if(isset($_POST['spe1']))
	{
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Date = $_POST['Date'];
		
		$Name = stripcslashes($Name); 
		$Email = stripcslashes($Email);  
        $Date = stripcslashes($Date);  
		$Name = mysqli_real_escape_string($conn, $Name); 
        $Email = mysqli_real_escape_string($conn, $Email);  
        $Date = mysqli_real_escape_string($conn, $Date);

		$sql = "INSERT INTO spe_01 (Name, Email, Date) VALUES ('$Name','$Email', '$Date')";
		$query = mysqli_query($conn, "SELECT * FROM spe_01 WHERE Email = '$Email'");
	}
	
	if(mysqli_num_rows($query)>0)
	{
		echo "<h1>Email has already been used!.</h1>";
	}
	else 
	{
		if(empty($Email & $Date & $Name))
		{
			echo "<h1>SPE Submission Error: Either your Email or Date is EMPTY/BLANK!!!.</h1>";
		}
		else 
		{
			if(mysqli_query($conn, $sql))
			{
				echo "<h1>SPE 01 Form Completed.!</h1>";
				//header("location: loginpage.html");
			}
			else 
			{
				echo "SPE 01 Form Submission Error:". $sql . "" . mysqli_error($conn);
			}
		}
	}
	mysqli_close($conn);
?>

<!doctype html>
<html>
	<body>
		<a class ="connect" href="homepage.html"> Redirect to homepage</a>
	</body>
</html>
</center>