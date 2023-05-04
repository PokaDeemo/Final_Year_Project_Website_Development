<center>
<?php
include('config.php'); 

if(isset($_POST["upload"]))
{
	$pname = rand(1000,100000)."-".$_FILES["file"]["name"];
	$tname = $_FILES["file"]["tmp_name"];
	
	$uploads_dir = 'uploads';
	move_uploaded_file($tname, $uploads_dir.'/'.$pname);
	
	$sql = "INSERT into file_table(File) VALUES('$pname')";
	if(empty($pname & $tname))
	{
		echo "<h1>File Upload Error: File upload is EMPTY/BLANK!!!.</h1>";
	}
	else 
	{
		if(mysqli_query($conn,$sql))
		{
			//echo "<h1>File Successfully Uploaded</h1>";
			header("location: UploadPage[ADMIN].html");
		}
		else 
		{
			echo "<h1>File Upload Error: File Unsuccessfully Upload</h1>";
		}
	}
}

?>
<!doctype html>
<html>
	<body>
		<a class ="connect" href="UploadPage.html"> Redirect to Upload Page</a>
	</body>
</html>
</center>