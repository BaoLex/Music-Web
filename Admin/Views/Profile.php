<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../assets/style.css">

	<title>Music App</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Music App</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="../index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./Category.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Category</span>
				</a>
			</li>
			<li>
				<a href="./Song.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">My Song</span>
				</a>
			</li>
			<li>
				<a href="./Track.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">My Track</span>
				</a>
			</li>
			<li class="active">
				<a href="./Profile.php">
					<i class='bx bxs-group' ></i>
					<span class="text">My User</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>My User Profile</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">My User Profile</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<table>
						<thead>
							<tr>
								<th>User ID</th>
								<th>Name</th>
								<th>UserName</th>
								<th>UserName</th>
								<th>Status</th>
							</tr>
						</thead>
						<?php
							include "../db_con.php";
							$sql="SELECT * from users";
							$result=$conn-> query($sql);
							if ($result-> num_rows > 0){
								while ($row=$result-> fetch_assoc()) {	
						?>
						<tbody>
							<tr>
								<td><?=$row["UserID"]?></td>
								<td><p><?=$row["Name"]?></p></td>
								<td><p><?=$row["Username"]?></p></td>
								<td>*********</td>
								<td><span class="status completed">In Process</span></td>
							</tr>
							<?php
								}
							}
						?>
                            <tr>
								<td><a href= "./AddUser.php"><span class="status completed">Add new user</span></a></td>
                            </tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../assets/script.js"></script>
</body>
</html>