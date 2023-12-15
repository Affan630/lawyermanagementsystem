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
			<!-- nav-bar starts -->
		<?php
		include('user-header.php')
		?>
			<!-- nav-bar Ends -->
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="asbd" id="sidebar-wrapper" style="background-color: #1c1b1b !important;">
						<div class="sidebar-heading" style="color:#af9473;">My Profile</div>
						<div class="list-group list-group-flush">
							<a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important;">Dashboard</a><!--this page-->
							<a href="lawyerfind.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important;">Lawyers</a><!--this page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important;">Edit Profile</a><!--user_profile page-->
							<a href="user_booking.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important;">My booking requests</a><!--booking page-->
							<a href="update_password.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important;">Update Password</a><!--booking page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
		<section>
			<div class="container">
				<div class="row">
					<?php
						
						include_once 'db_con/dbCon.php';
						$conn = connect();
						
						$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active' AND user.u_id='" . $_GET['u_id'] . "'");
						
						while($row = mysqli_fetch_array($result)) {
						?>
						<div class="col-md-3" style="color:#af9473;">
							<div class="sideprofile">
								<img src="images/upload/<?php echo $row["image"]; ?>" class="img-fluid profile_img" alt="profile picture">
								<h2><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h2>
								<h4><?php echo $row["speciality"]; ?></h4>
								<hr>
							</div>
						</div>
						<div class="col-md-9" style="color:#af9473;">
							<div class="mainprofile">
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Contact number :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["contact_Number"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Email :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["email"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Education :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["university_College"]; ?></p>
										<p><?php echo $row["degree"]; ?></p>
										<p><?php echo $row["passing_year"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Practising location :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["full_address"]; ?></p>
										<p><?php echo $row["city"]; ?></p>
										<p><?php echo $row["zip_code"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Practising length :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["practise_Length"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label for="email"><b>Type of case handles:</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["case_handle"]; ?></p>
										
									</div>
								</div>  
								
								<form action="save_booking.php" method="post">
									<div class="row">
										<div class="col-md-3">
											Book for appointment
										</div>
										<input type="hidden" name="lawyer_id"  value="<?php echo $row['u_id']; ?>">
										<input type="hidden" name="client_id"  value="<?php echo $_SESSION['client_id']; ?>">
                                    
										<div class="col-md-3">
											<input type="date"  name="date" >
										</div>
										<div class="col-md-3">
											<textarea name="description" id="" cols="20" rows="4" placeholder="write description if any"></textarea>
										</div>
										<div class="col-md-3 float-right">
											<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
												
												<input name="post" type="submit" class="btn btn-block btn-info" value="Request booking" />
												<?php }else{ ?>
												<h6><a href="login.php">To Request for lawyer booking plese login or registration first</a></h6>
											<?php }?> 
										</div>
									</div>
								</form>
								
							</div>
						</div>
						<?php
						}
					?>
				</div>
			</div>
		</section>
        </div>	
		<?php
		include('footer.php')
		?>
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