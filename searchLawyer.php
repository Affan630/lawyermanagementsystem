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
	<nav class="navbar navbar-dark bg-success">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo.png"
					width="70" height="70" alt="logo">
				Law Frim
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-list">
				<ul class="navbar-nav">
				    <li class="active">
						<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="">
							<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
						</li>
						<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
						<li class="">
							<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
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
							    <div class="dropdown-menu bg-success" aria-labelledby="navbarDropdown">
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
		<body>
			<section class="lawyerscard">
				<div class="container">
					<form method="post" novalidate="novalidate" >
						
						<div class="row">
							
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
											
											<a class="btn btn-sm btn-info" href="single_lawyer.php?u_id=<?php echo $row["u_id"]; ?>"><i class="fa fa-street-view"></i>&nbsp; View Full Profile</a>
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
		
		
		
		<!-- FOOTER STARTS  -->
	<footer style="background-color: #28a745;">
		<div class="container p-4">
			<div class="row">
				<div class="col-lg-6 col-md-12 mb-4">
					<h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">About Us</h5>
					<p>Welcome to our Lawyer Management System, where we put you in control. Our platform is all about
						making the legal process as effortless as possible. We've created a space where you, the user,
						can browse, choose, and book appointments with lawyers who best suit your unique needs. It's
						your legal journey, your way, and we're here to make it seamless. Trust us to connect you with
						the right legal expertise when you need it most.</p>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">Get in Touch</h5>
					<ul class="list-unstyled mb-0">
						<div class="contact-details">
							<p><i class="fas fa-map-marker-alt"></i> Address: D-18, Block-4</p>
							<p><i class="fas fa-phone"></i> Phone: +9234-332-08987</p>
							<p><i class="fas fa-envelope"></i> Email: lawyers@contact.com</p>
							<p><i class="fas fa-headset"></i> Customer Support: 021-58585-3</p>
							<p><i class="far fa-clock"></i> Office Hours: 9am-4pm</p>
						</div>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 mb-4">
					<h5 class="mb-1" style="letter-spacing: 2px; color: #ffffff;">opening hours</h5>
					<table class="table" style="color: #ffffff; border-color: #666;">
						<tbody>
							<tr>
								<td>Mon - Fri:</td>
								<td>9am - 4pm</td>
							</tr>
							<tr>
								<td>Sat - Sun:</td>
								<td>9am - 1pm</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2020 Copyright:
		</div>
		<!-- Copyright -->
	</footer>
	<!-- FOOTER ENDS  -->
		<!-- Optional JavaScript -->
		<!-- jQuery -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
