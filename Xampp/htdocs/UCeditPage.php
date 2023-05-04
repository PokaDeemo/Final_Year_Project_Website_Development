<?php 
include('config.php');

$sqlalert="select * from alert_table";
$resultalert=mysqli_query($conn,$sqlalert);

?>
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<title>Murdoch Online Portal UC Edit/Review Page</title>
	</head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<header>
		<body>
		<a href="homepage.html"> <!-- Logo image link to homepage -->
		<center><img src="images\murdochlogo.png" alt="logo" width="100" height="50" ></center><!-- Logo -->
		</a>	
	</header>
		
	<nav>
		<div class="search-bar">	
		<form action="https://www.google.com/search" class="searchform" method="get" name="searchform" target="_blank">
		<input name="sitesearch" type="hidden" value="">
		<input autocomplete="on" class="form-control search" name="q" placeholder="Search..." required="required"  type="text">
		<button class="button" type="submit">Submit</button>
		</form>
			
		<ul>
		<li><a class ="" href="homepage[ADMIN].html">Homepage</a></li>
		<li><a class ="" href="ContactPage[ADMIN].html">Contact-Us</a></li>
		<li><a class ="" href="Setting[ADMIN].html">Account/Profile Setting</a></li>
		<li><a class ="" href="UCeditPage.html">Control Panel</a></li>
		<li><a class ="" href="loginpage.html">Log-Out</a></li>
		</ul>
	</nav>
	
	<div class="weekly-header">
		<h1>UC Edit and Review Page</h1>
	</div>
	
	<content>
	<div class ="graph-content">
		<h2>Group Performance Chart</h2>
		<div class="graph1">
			<canvas id="myChart" style="width:100%; max-width:600px"></canvas>
			<br>
			<canvas id="myChart2" style="width:100%; max-width:600px"></canvas>	
		</div>
	</div>
	<div class="SPEprogression">
		<h2>SPE Progressions</h2>
			<br>
		<div class="SPEprogressioncontent">
			<p>Number of Students Completed the SPE Form<p>
			<p>Progression Bar</p>
			<div class="container">
				<div class="skills complete">45%</div>
			</div>
			<br><br>
			<p>Number of Students did not complete the SPE Form<p>
			<p>Progression Bar</p>
			<div class="container">
				<div class="skills not-complete">55%</div>
			</div>
			
		
			<div class="download-button">
				<button class="download" type="button" OnClick="myalert()" value="">Download</button>
			</div>
			</div>
			<div class="alert-table">
			<table border="1px" style="width:600px; line-height:30px;">
				<tr>
					<th colspan="3"><h2>Alert Notification</h2></th>
				</tr>
				<tr>
					<th>AlertID</th>
					<th>Name</th>
					<th>Email</th>
				</tr>
				<?php 
					while($alertrows=mysqli_fetch_assoc($resultalert))
					{
				?>
						<tr>
							<td><?php echo $alertrows['AlertID']; ?></td>
							<td><?php echo $alertrows['Name']; ?></td>
							<td><?php echo $alertrows['Email'];?></td>
						</tr>
				<?php
					}
				?>
			<table>
			</div>
	</div>
	
	
	</content>
	
	<footer>
		<p>copyright &copy; 2022 Murdoch University. All rights reserved</p>
	</footer>
		
		

<script>
	var xValues = ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5"];
	var yValues = [55, 49, 44, 75, 60];
	var barColors = ["red", "green","blue","orange","brown"];

	new Chart("myChart", 
	{
	  type: "bar",
	  data: 
	  {
		labels: xValues,
		datasets: 
		[
		{
		  backgroundColor: barColors,
		  data: yValues
		}]
	  },
	  options: 
	  {
		legend: {display: false},
		title: 
		{
		  display: true,
		  text: "Team 01"
		}
	  }
	});
	
	var xValues = ["Week 1", "Week 2", "Week 3", "Week 4", "Week 5"];
	var yValues = [35, 45, 55, 70, 88];
	var barColors = ["red", "green","blue","orange","brown"];

	new Chart("myChart2", 
	{
	  type: "bar",
	  data: 
	  {
		labels: xValues,
		datasets: 
		[
		{
		  backgroundColor: barColors,
		  data: yValues
		}]
	  },
	  options: 
	  {
		legend: {display: false},
		title: 
		{
		  display: true,
		  text: "Team 02"
		}
	  }
	});
	
		function myalert()
		{
				alert("Download Completed!");
		}
</script>
	
	</body>
</html>