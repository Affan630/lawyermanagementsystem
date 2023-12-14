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
<?php
include('header.php')
?>
<!-- nav-bar ends -->
		<!-- slider -->
	 <section>
		<!-- <div class="banner">
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
		</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
     <div class="carousel-item active">
        <img class="d-block w-100" src="images/baner.jpg" alt="First slide">
	  <div class="carousel-caption d-none d-md-block">
	    <h1 class="bh1">Discover Your Ideal Lawyer Here!</h1>
		<p class="bp1">Your Legal Journey Starts Now</p>
		<a href="lawyers.php" class="btn btn-outline-success">Find Lawyers</a>
	</div>
    </div>
</div>
	</section>
			<!-- slider -->
	<!-- <br> -->
	<!--cards start-->
	<div style="background-color: #100f14;"><h1  style="text-align:center; color:#af9473">BEST LAWYERS</style></h1></div>
<div class="card-deck" style="background-color: #100f14;">
  <div class="card" style="background-color:#615f65;">
    <img class="baner.jpg" src="images/upload/20231028142702_2.jpg" alt="baner.jpg">
    <div class="card-body">
      <h4 class="card-title" style="font-weight:bold;">Basit Khan</h4>
	  <h5 class="card-text">Religious Law</h5>
      <p class="card-text"><p class="card-text" style="font-weight: bold">Type of case handles:</p>Civil matter,Contract law,Construction law,Information Technology,Family Law,Investment Matter,Property Law</p>
    </div>
  </div>
  <div class="card" style="background-color:#615f65;">
    <img class="card-img-top" src="images/upload/20231028143018_3.jpg" alt="Card image cap">
    <div class="card-body">
	 <h4 class="card-title" style="font-weight:bold;">Aqsa Jamil</h4>
      <h5 class="card-text">Family Law</h5>
      <p class="card-text" style="font-weight: bold">Type of case handles:</p><p class="card-text"> Criminal matter,Civil matter,Writ Jurisdiction,Company law,Contract law,Commercial matter,Construction law,Information Technology,Family Law,Religious Matter,Investment Matter,Labour Law,Property Law,Taxation Matter,Others,</p>
    </div>
  </div>
  <div class="card" style="background-color:#615f65;">
    <img class="card-img-top" src="images/upload/20231028142837_1.jpg" alt="Card image cap">
    <div class="card-body">
	    <h4 class="card-title" style="font-weight:bold;">Basit Khan</h4>
         <h5 class="card-text">Investment Law</h5>
         <p class="card-text"><p class="card-text" style="font-weight: bold">Type of case handles:</p>Criminal matter,Civil matter,Writ Jurisdiction,Company law,Contract law,Commercial matter,Construction law,Information Technology,Family Law,Religious Matter,Investment Matter,Labour Law,Property Law,Taxation Matter,Others,</p>
      </div>
    </div>
</div>

<!---cards end-->
	<!-- FOOTER STARTS  -->
	<?php
	include('footer.php')
	?>
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