<style>
	nav.navbar.navbar-dark.bg-success{
    background-color: #100f14 !important ;
}
.navbar-dark .navbar-brand {
    color: #af9473;
}
.cus-a {
    color: #af9473 !important;
}
.dropdown-item{
	color: #af9473 !important;
}
</style>
<nav class="navbar navbar-dark bg-success">
			<a class="navbar-brand" href="#">
				<img src="images/logo.png"
					width="100" height="100" alt="logo">
				Law Frim
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-list">
				<ul class="navbar-nav">
				    <!-- <li class="active">
						<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li> -->
						<!-- <li class="">
							<a class="nav-link cus-a" href="lawyers.php">Lawyers</a>
						</li> -->
						<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
						<li class="">
							<a class="nav-link cus-a" href="lawyer_dashboard.php">Dashboard</a>
						</li>
						<li class="">
							<a class="nav-link cus-a" href="lawyer_edit_profile.php">Edit Profile</a>
						</li>
						<li class="">
							<a class="nav-link cus-a" href="lawyer_booking.php">Booking Request</a>
						</li>
						<li class="">
							<a class="nav-link cus-a" href="update_password_admin.php">Update Password</a>
						</li>
						<li class="">
							<a class="nav-link cus-a" href="logout.php">Logout</a>
						</li>
					<?php }else{ ?>
						    <li class="">
							 <a class="nav-link cus-a" href="login.php">Login</a>
						    </li>
						    <li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Register
							 </a>
							    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#100f14;">
								    <a class="dropdown-item" href="lawyer_register.php">Register as a
									lawyer</a><!--redirect lawyer register page-->
								    <a class="dropdown-item" href="user_register.php">Register as a
									user</a><!--redirect user register page-->
							    </div>
						</li>
					<?php }?>
				</ul>
			</div>
		</nav>