<?php
	session_start();
	
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
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title>Lawyer Management System</title>
	</head>
	<body>
		<header class="customnav bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="index.php">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
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
											<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Register
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
												<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->
											</div>
										</li>
									<?php }?>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section>
			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-md">
							<div class="banner_content">
							<h1>Discover Your Ideal Lawyer Here!</h1>
    <p>Your Legal Journey Starts Now</p>
	<br>

    <a href="lawyers.php" class="btn btn-outline-success">Find Lawyers</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<section class="aboutus">
			<div class="container">
				<div class="row">
					<div class="col-md-6 ml-auto">
						<h1>About Us</h1>
						<p>Welcome to our Lawyer Management System, where we put you in control. Our platform is all about making the legal process as effortless as possible. We've created a space where you, the user, can browse, choose, and book appointments with lawyers who best suit your unique needs. It's your legal journey, your way, and we're here to make it seamless. Trust us to connect you with the right legal expertise when you need it most.</p>
						
					</div>
					<div class="col-md-6">
    <div class="contact-us-bar">
        <h1 class="contact-header">Get in Touch</h1>
        <div class="contact-details">
            <p><i class="fas fa-map-marker-alt"></i> Address: D-18, Block-4</p>
            <p><i class="fas fa-phone"></i> Phone: +9234-332-08987</p>
            <p><i class="fas fa-envelope"></i> Email: lawyers@contact.com</p>
            <p><i class="fas fa-headset"></i> Customer Support: 021-58585-3</p>
            <p><i class="far fa-clock"></i> Office Hours: 9am-4pm</p>
        </div>
    </div>
</div>
				</div>
			</div>
		</section>
		<br>
		<br>
		<!-- Remove the container if you want to extend the Footer to full width. -->
<!-- <div class="container my-5"> -->
<!-- </div> --><footer style="background-color: #28a745;">
<div class="container p-4">
  <div class="row">
	<div class="col-lg-6 col-md-12 mb-4">
	  <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;">footer content</h5>
	  <p>
		Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
		molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
		voluptatem veniam, est atque cumque eum delectus sint!
	  </p>
	</div>
	<div class="col-lg-3 col-md-6 mb-4">
	  <h5 class="mb-3" style="letter-spacing: 2px; color: #ffffff;">links</h5>
	  <ul class="list-unstyled mb-0">
		<li class="mb-1">
		  <a href="#!" style="color: #ffffff;">Frequently Asked Questions</a>
		</li>
		<li class="mb-1">
		  <a href="#!" style="color: #ffffff;">Delivery</a>
		</li>
		<li class="mb-1">
		  <a href="#!" style="color: #ffffff;">Pricing</a>
		</li>
		<li>
		  <a href="#!" style="color: #ffffff;">Where we deliver?</a>
		</li>
	  </ul>
	</div>
	<div class="col-lg-3 col-md-6 mb-4">
	  <h5 class="mb-1" style="letter-spacing: 2px; color: #ffffff;">opening hours</h5>
	  <table class="table" style="color: #ffffff; border-color: #666;">
		<tbody>
		  <tr>
			<td>Mon - Fri:</td>
			<td>8am - 9pm</td>
		  </tr>
		  <tr>
			<td>Sat - Sun:</td>
			<td>8am - 1am</td>
		  </tr>
		</tbody>
	  </table>
	</div>
  </div>
</div>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2020 Copyright:
  <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
</div>
<!-- Copyright -->
</footer>
<!-- End of .container -->
		<!-- Optional JavaScript -->
		<!-- jQuery -->
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</body>
</html>
