<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		
	?>
	<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Bootstrap CSS -->
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link rel="stylesheet" href="css/all.css">
			<link rel="stylesheet" href="css/simple-sidebar.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/media.css">
			<title></title>
		</head>
		<body>
			<!-- nav-bar starts	 -->
		    <?php
			include('user-header.php')
			?>
		    <!-- nav-bar ends -->
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="adsb" id="sidebar-wrapper" style="background-color: #1c1b1b !important;">
						<div class="sidebar-heading" style="color:#af9473;">My Profile</div>
						<div class="list-group list-group-flush">
							<a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">Dashboard</a><!--this page-->
							<a href="lawyerfind.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">Lawyers</a><!--this page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">Edit Profile</a><!--user_profile page-->
							<a href="user_booking.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">My booking requests</a><!--booking page-->
							<a href="update_password.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">Update Password</a><!--booking page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<!-- Page Content -->
					<div id="page-content-wrapper">
						<?php if(isset($_GET['done'])){
							echo "<div class='ad alert  alert-dismissible fade show ' style='color: #1e7e34 !important; background-color: #212529 !important; border-color: #212529 !important;'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome!</strong> You are login as a user.
							</div>";
						}?>
						<div class="container-fluid">
							<h1 class="mt-4" style="color:#af9473;">Welcome! <?php echo $_SESSION['first_Name'];?> <?php echo $_SESSION['last_Name'];?></h1>
							<p style="color:#af9473;">Explore and manage your legal matters with confidence. From finding the right lawyer to tracking your cases, we're here to simplify your legal experience.</p>
						</div>
					</div>
					<!-- /#page-content-wrapper -->
					
				</div>
				<!-- /#wrapper -->
				
				
				
			</body>
			<!-- FOOTER STARTS  -->
			<?php
			 include('footer.php')
			?>
	        <!-- FOOTER ENDS  -->
			<!-- Optional JavaScript -->
			<!-- jQuery -->
			
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		</body>
	</html>				
	<?php
		
	}else 
	header('location:login.php?deactivate');
?>