<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		
	?>
	<!doctype html>
	<html lang="en">
		<head>
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
					
					<!-- edit profile Content -->
					<section class="editprofile" style="color:#af9473;">
						<?php if(isset($_GET['ok'])){
							echo "<div class='alert alert-success alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Sucessfully!</strong> update your Profile.
							</div>";
						}?>
						<?php
							$a=$_SESSION['client_id'];
							$conn = connect();
							
							$result = mysqli_query($conn,"SELECT * FROM user,client WHERE user.u_id=client.client_id AND user.status='Active' AND user.u_id='$a'");
							
							while($row = mysqli_fetch_array($result)) {
							?>
							<div class="container">
								<form class="cusform" action="save_user_edit_profile.php" method="post">
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="fname">First Name</label>
											<input type="text" class="form-control" name="first_Name"  id="first_Name" value="<?php echo $row["first_Name"]; ?>">
										</div>
										<div class="form-group col-md-6">
											<label for="lname">Last Name</label>
											<input type="text" class="form-control" name="last_Name"  id="last_Name" value="<?php echo $row["last_Name"]; ?>">
										</div>
									</div>
									
									<div class="form-group">
										<label for="num">Contact Number</label>
										<input type="text" class="form-control" name="contact_number" id="contact_number" value="<?php echo $row["contact_number"]; ?>">
									</div>
									
									
									<div class="form-row"><label for="edu"><small>Put Your address here </small></label></div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="address">Full Address</label>
											<input type="text" class="form-control" name="full_address" id="full_address" value="<?php echo $row["full_address"]; ?>">
										</div>
										<div class="form-group col-md-3">
											<label for="city">City</label>
											<select id="city" name="city" class="form-control">
												<option value=" " selected>Choose...</option>
												<option value="Karachi" <?php if ($row['city']=='Karachi'){echo "selected";}?>>Karachi</option>
												<option value="Lahore" <?php if ($row['city']=='Lahore'){echo "selected";}?>>Lahore</option>
												<option value="Multan" <?php if ($row['city']=='Multan'){echo "selected";}?>>Multan</option>
												<option value="Islamabad" <?php if ($row['city']=='Islamabad'){echo "selected";}?>>Islamabad</option>
												
											</select>
										</div>
										<div class="form-group col-md-3">
											<label for="zip">Zip code</label>
											<input type="text" class="form-control" name="zip_code" id="zip_code" value="<?php echo $row["zip_code"]; ?>">
										</div>
									</div>
									<button type="submit" class="btn butcol">Update</button>
									
								</form>
							</div>
							<?php
							}
						?>
					</section>
					<!-- edit profile Content -->
					
					
					
				</div>
				
				
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