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
			<?php
			include('user-header.php')
			?>
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
					
                   
			<section class="lawyerscard">
				<div class="container">
					<form method="post" novalidate="novalidate" >
						
						<div class="row" style="color:#af9473;">
							
							<div class="col-md-4">
								<div class="form-group">
									<label for="experience">Experience</label>
									<select name="experience" class="form-control">
										<option value="" selected>Choose...</option>
										<option value="1-5 years">1-5 years</option>
										<option value="6-10 years">6-10 years</option>
										<option value="11-15 years">11-15 years</option>
										<option value="16-20 years">16-20 years</option>
										<option value="Most Senior">Most Senior</option>
									</select>
								</div>
							</div>
                            
							<div class="col-md-4">
								<div class="form-group ">
									<label for="speciality">Speciality</label>
									<select name="speciality" class="form-control">
										<option value="" selected>Choose...</option>
										<option value="Criminal law">Criminal law</option>
										<option value="Civil law">Civil law</option>
										<option value="Writ Jurisdiction">Writ Jurisdiction</option>
										<option value="Company law">Company law</option>
										<option value="Contract law">Contract law</option>
										<option value="Commercial law">Commercial law</option>
										<option value="Construction law">Construction law</option>
										<option value="IT law">IT law</option>
										<option value="Family law">Family law</option>
										<option value="Religious law">Religious law</option>
										<option value="Investment law">Investment law</option>
										<option value="Labour law">Labour law</option>
										<option value="Property law">Property law</option>
										<option value="Taxation law">Taxation law</option>
										
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<label for="location">Location</label>
								<select name="location" class="form-control"> 
									<option selected>Choose...</option>
									<option value="Karachi">Karachi</option>
										<option value="Lahore">Lahore</option>
										<option value="Islamabad">Islamabad</option>
										<option value="Multan">Multan</option>
								</select>
							</div>
						</div>
                        </div>
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<button id="button" type="submit" class="btn btn-mg btn-primary" name="submit" value="submit" style="float:right"><i class="fa fa-search"></i>&nbsp; Search Information</button>
							</div>	
						</div>
					</form>
					<hr/>
					<div class="row " >
						
						<?php
							include_once 'db_con/dbCon.php';
							$conn = connect();
							if (isset($_POST['submit'])){
								$experience=$_POST['experience'];
								$speciality=$_POST['speciality'];
								$location=$_POST['location'];
								
								$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id 
								AND user.status='Active'
								OR practise_Length='$experience'
								OR speciality='$speciality'
								OR city='$location'");
								
								while($row = mysqli_fetch_array($result)) {
									
								?>
								<div class="col-md-4">
									<div class="card" style="width: 18rem;">
										<img src="images/upload/<?php echo $row["image"]; ?>" class="card-img-top cusimg img-fluid" alt="img">
										<div class="card-body">
											<h5 class="card-title"><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h5> <!--lawyers name dynamic-->
											<h6 class="card-title"><?php echo $row["speciality"]; ?></h6> <!--lawyers practice speciality dynamic-->
											<h6 class="card-title"><span><?php echo $row["practise_Length"]; ?></span></h6> <!--lawyers practice time dynamic-->
											
											<a class="btn btn-sm btn-info" href="lawyerfind1.php?u_id=<?php echo $row["u_id"]; ?>"><i class="fa fa-street-view"></i>&nbsp; View Full Profile</a>
										</div>
									</div>
								</div>
								<?php
								}}
						?>
					</div>
				</div>
			</div>
            
		</section>
		
		
		
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