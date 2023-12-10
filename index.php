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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<title>Lawyer Management System</title>
</head>
<body>
<!-- nav-bar starts	 -->
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
		<!-- nav-bar ends -->
		<!-- slider -->
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
			<!-- slider -->
	<!-- <br> -->
	<!--cards start-->
	<h1  style="text-align:center;">BEST LAWYERS</style></h1>

	<div class="card-deck">
  <div class="card">
    <img class="baner.jpg" src="images/upload/20231028142702_2.jpg" alt="baner.jpg">
    <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Basit Khan</h4>
	  <h5 class="card-text">Religious Law</h5>
      <p class="card-text"><p class="card-text" style="font-weight: bold">Type of case handles:</p>Civil matter,Contract law,Construction law,Information Technology,Family Law,Investment Matter,Property Law</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/upload/20231028143018_3.jpg" alt="Card image cap">
    <div class="card-body">
	 <h4 class="card-title" style="font-weight:bold;">Aqsa Jamil</h4>
      <h5 class="card-text">Family Law</h5>
      <p class="card-text" style="font-weight: bold">Type of case handles:</p><p class="card-text"> Criminal matter,Civil matter,Writ Jurisdiction,Company law,Contract law,Commercial matter,Construction law,Information Technology,Family Law,Religious Matter,Investment Matter,Labour Law,Property Law,Taxation Matter,Others,</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/upload/20231028142837_1.jpg" alt="Card image cap">
    <div class="card-body">
	 <h4 class="card-title" style="font-weight:bold;">Basit Khan</h4>
      <h5 class="card-text">Investment Law</h5>
      <p class="card-text"><p class="card-text" style="font-weight: bold">Type of case handles:</p>Criminal matter,Civil matter,Writ Jurisdiction,Company law,Contract law,Commercial matter,Construction law,Information Technology,Family Law,Religious Matter,Investment Matter,Labour Law,Property Law,Taxation Matter,Others,</p>
    </div>
  </div>
</div>

<!---cards end-->

	<link rel="stylesheet" href=
	         
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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
</body>

</html>