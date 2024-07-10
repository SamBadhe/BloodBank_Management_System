<?php

require('config.php');
$insert = false;

// $sql = "select view_stock('". $_POST["b_grp"] ."')";
$sql = "select * from blood_request;";
$result = mysqli_query($con, $sql);
$insert = true;
// while ($row = mysqli_fetch_array($result)) {
// 	echo "<br>";
// 	echo "Recipient name : " . $row['reci_name'] . " Blood Group : " . $row['reci_bgrp'] . "     Blood Quantity : " . $row['reci_bqnty'];
// }



$con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View Blood Request</title>
	<!-- favicon -->
	<link href="/favicons/favicon.ico" rel="icon" type="image/x-icon" />
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/miniproject_dbms/css/view_blood_request.css">
	<!-- font awesome script -->
	<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
</head>

<body>
	<div class="container-fluid">

		<nav class="navbar navbar-expand-lg navbar-dark">

			<a class="navbar-brand" href="">Blood bank management</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse nav_elements" id="navbarTogglerDemo02">

				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a class="nav-link" href="admindashboard.php">Dashboard</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="request_blood.php">Add blood request</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="delete_blood_request.php">Delete blood request</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#aboutus">About</a>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>

				</ul>
			</div>
		</nav>
	</div>

	<div class="middle">
		<table>
			<thead>
				<tr>
					<th class="table_head1">
						<h3>Recipient name</h3>
					</th>
					<th class="table_head2">
						<h3>Blood Group</h3>
					</th>
					<th class="table_head2">
						<h3>Blood Quantity</h3>
					</th>
				</tr>
			</thead>
			<?php
			if ($insert == true) {
				while ($row = mysqli_fetch_array($result)) {
				
					echo "<tr class='table_content'>";
					echo "<td>" . $row['reci_name'] . "</td>";
					echo "<td>" . $row['reci_bgrp'] . "</td>";
					echo "<td>" . $row['reci_bqnty'] . "</td>";
				}
			}
			?>
		</table>
	</div>

</body>

</html>