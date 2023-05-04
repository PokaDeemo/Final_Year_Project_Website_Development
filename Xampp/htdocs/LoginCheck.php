<center>
<?php 
	include('config.php');
	session_start();
	if(isset($_POST['submit']))
	{	
		$Email = $_POST['Email'];  
		$UserPassword = $_POST['UserPassword'];  
			  
		$sql = "select *from account_table where Email = '$Email' and UserPassword = '$UserPassword'";  

			//to prevent from mysqli injection  
			$Email = stripcslashes($Email);  
			$UserPassword = stripcslashes($UserPassword);  
			$Email = mysqli_real_escape_string($conn, $Email);  
			$UserPassword = mysqli_real_escape_string($conn, $UserPassword);  
		  
			$result = mysqli_query($conn, $sql);  
			$count = mysqli_num_rows($result);  
			  
			if($count>0)
			{  
				$row = mysqli_fetch_assoc($result);
				$_SESSION['role'];

				if($row['role']==1)
				{
					header("location: homepage[ADMIN].html");
				}
				else if($row['role']==2)
				{
					header("location: homepage.html");
				}
				else 
				{
					header("location: homepage.html");
				}
			}  
			else
			{  
				echo "<h1> Login failed. Invalid username or password. </h1>";  
				echo "<a href= 'loginpage.html'> Return back to the login page!. Try again</p>";
			}  
	}			
?>
</center>
