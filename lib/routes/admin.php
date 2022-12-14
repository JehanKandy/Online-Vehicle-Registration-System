<link rel="stylesheet" href="../../css/dashboard.css">
<link rel="stylesheet" href="../../css/style.css">
<?php include "../layouts/header.php";?>
<?php include "../layouts/nav_loged.php";?>
<?php
if (empty($_SESSION['LoginSession'])) {
    header('location:../views/login.php');
}
?>



<div class="app">
	<div class="menu-toggle">
		<div class="hamburger">
			<span></span>
		</div>
	</div>

	<aside class="sidebar">
		<nav class="menu">
			<img src="../../1.PNG" alt="Profile" class="profile-img">
			<p class="profile-name"><?php user_id(); ?></p>
			<a href="admin.php" class="menu-item"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			<a href="admin/users.php" class="menu-item"><i class="fas fa-user-alt"></i>Users</a>
			<a href="admin/admins.php" class="menu-item"><i class="fas fa-user-tie"></i>Admins</a>
			<a href="admin/staff.php" class="menu-item"><i class="fas fa-user-tag"></i>Staff</a>
			<a href="admin/vehicles.php" class="menu-item"><i class="fas fa-car-alt"></i>Vehicles</a>
			<a href="admin/my_infor.php" class="menu-item"><i class="fas fa-chalkboard-teacher"></i>My Details</a>
			<a href="admin/my_account_admin.php" class="menu-item"><i class="fas fa-user-cog"></i>Account Settings</a>
		</nav>

	</aside>

	<main class="content">
		<h1>Welcome, To Admin Dashboard</h1>
		<hr>
		<div class="admin-content">
			<div class="grid">
				<div class="admin-item1">
					<div class="admin-title">
						<i class="fas fa-users"></i> &nbsp;  Users<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item2">
					<div class="admin-title">
						<i class="fas fa-user-tie"></i> &nbsp;  Admins<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item3">
					<div class="admin-title">
						<i class="fas fa-car-alt"></i> &nbsp;  Vehicles<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item4">
					<div class="admin-title">
						<i class="fas fa-user-tag"></i> &nbsp;  Staff<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item5">
					<div class="admin-title">
						<i class="fas fa-user-slash"></i> &nbsp;  Deactive Users<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item6">
					<div class="admin-title">
						<i class="fas fa-user-slash"></i> &nbsp;  Deactive Admins<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item7">
					<div class="admin-title">
						<i class="fas fa-car-crash"></i> &nbsp;  Deactive Vehicles<br>
					</div>
					<hr style="border:1px solid white;">
					<div class="admin-body">
						15
					</div>
				</div>
				<div class="admin-item8">
					<div class="admin-title">
						<i class="fas fa-user-slash"></i> &nbsp; Deactive Staff<br>
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

<script src="../../js/script.js"></script>
