<link rel="stylesheet" href="../../../css/dashboard.css">
<link rel="stylesheet" href="../../../css/style.css">
<?php
include_once("../../layouts/header.php");
include_once("../../layouts/nav_loged.php");
?>

<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<img src="../../../1.PNG" alt="Profile" class="profile-img">
			<p class="profile-name">JehanKandy</p>
			<a href="../admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="users.php" class="menu-item"><i class="fas fa-user-alt"></i>Users</a>
			<a href="admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admins</a>
			<a href="staff.php" class="menu-item"><i class="fas fa-user-tag"></i>Staff</a>
			<a href="vehicles.php" class="menu-item"><i class="fas fa-car-alt"></i>Vehicles</a>
            <a href="my_infor.php" class="menu-item"><i class="fas fa-chalkboard-teacher"></i>My Details</a>
			<a href="my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>

	</aside>

	<main class="content">
		<h1>All Vehicles</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-car-alt"></i> &nbsp;  Vehicles<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
			</div>
		</div>
	</main>
</div>


<script src="../../../js/script.js"></script>
