<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="./assets/style.css">

	<title>School App</title>
</head>
<body>

    <?php 
    include "./db_con.php" 
    ?>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="./index.html" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Music App</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="./index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./Views/Category.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Category</span>
				</a>
			</li>
			<li>
				<a href="./Views/Song.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">My Song</span>
				</a>
			</li>
			<li>
				<a href="./Views/Track.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">My Track</span>
				</a>
			</li>
			<li>
				<a href="./Views/Profile.php">
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
				<a href="./logout.php" class="logout">
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
			</a>
			<a href="#" class="profile">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
                        <?php
                            $sql="SELECT * from song";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                         
                                    $count=$count+1;
                                }
                            }
                            echo $count; 
                        ?>
						<p>Total Song</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
                    <?php
                            $sql="SELECT * from users";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                         
                                    $count=$count+1;
                                }
                            }
                            echo $count; 
                        ?>
						<p>Total User</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
                    <?php
                            $sql="SELECT * from track";
                            $result=$conn-> query($sql);
                            $count=0;
                            if ($result-> num_rows > 0){
                                while ($row=$result-> fetch_assoc()) {
                         
                                    $count=$count+1;
                                }
                            }
                            echo $count; 
                        ?>
						<p>Total Track</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>TOP 5 SONG</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Place</th>
								<th>Name of Song</th>
								<th>Singer</th>
							</tr>
						</thead>
						<?php
							include "./db_con.php";
							$sql="SELECT * from top";
							$result=$conn-> query($sql);
							if ($result-> num_rows > 0){
								while ($row=$result-> fetch_assoc()) {	
						?>
						<tbody>
							<tr>
								<td><p><?=$row["Place"]?></p></td>
								<td><p><?=$row["Name"]?></p></td>
								<td><p><?=$row["Singer"]?></p></td>
							</tr>

							<?php
								}
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="./assets/script.js"></script>
</body>
</html>