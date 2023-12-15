<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		$conn = connect();

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
			include('header.php')
			?>
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="adsb" id="sidebar-wrapper" style="background-color: #1c1b1b !important;">
						<div class="sidebar-heading" style="color:#af9473;">Admin Panel</div>
						<div class="list-group list-group-flush" style="color:#af9473;">
							<a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">Dashboard</a><!--this page-->
							<a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">See lawyers</a><!--admin_lawyer page-->
							<a href="admin_user.php" class="list-group-item list-group-item-action bg-light" style="background-color: #8f8f8f !important; ">See Users</a><!--admin_user page-->
							</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<section class="bookingrqst">
						<div class="container">
							<div class="span7">   
								<div class="widget stacked widget-table action-table">
									
									<div class="widget-header">
										<i class="icon-th-list"></i>
										<h3 style="color:#af9473;">Registered Lawyers</h3>
									</div> <!-- /widget-header -->
									
									<div class="widget-content">
										
										<table class="table  table-bordered  table-primary table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Lawyer ID</th>
													<th>First name</th>
													<th>Last name</th>
													<th>Email</th>
													<th>Contact Number</th>
													<th>Full Address</th>
													<th>City</th>
													<th>Zip Code</th>
													<th>Image</th>
													<th>University / College</th>
													<th>Degree</th>
													<th>Passing Year</th>
													<th>Practise Length</th>
													<th>Handle Cases</th>
													<th>Speciality</th>
													<th>Action</th>
												</tr>
											</thead>
											<?php
												include_once 'db_con/dbCon.php';
												$conn = connect();
												$result = mysqli_query($conn,"SELECT * FROM user INNER JOIN lawyer on user.u_id=lawyer.lawyer_id");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														<td><?php echo ++$counter ;?></td>
														<td><?php echo $row["u_id"]; ?></td>
														<td><?php echo $row["first_Name"]; ?></td>
														<td><?php echo $row["last_Name"]; ?></td>
														<td><?php echo $row["email"]; ?></td>
														<td><?php echo $row["contact_Number"]; ?></td>
														<td><?php echo $row["full_address"]; ?></td>
														<td><?php echo $row["city"]; ?></td>
														<td><?php echo $row["zip_code"]; ?></td>
														<td><img src="images/upload/<?php echo $row["image"]; ?>" class="img-fluid " alt="<?php echo $row["image"]; ?>"></td>
														<td><?php echo $row["university_College"]; ?></td>
														<td><?php echo $row["degree"]; ?></td>
														<td><?php echo $row["passing_year"]; ?></td>
														<td><?php echo $row["practise_Length"]; ?></td>
														<td><?php echo $row["case_handle"]; ?></td>
														<td><?php echo $row["speciality"]; ?></td>
														<?php if ($row['status']=='Active'){ ?>
															<td>
																Active
															</td>
															<?php }
															else{?>
															<td>
																<a class="btn btn-sm btn-warning" href="approve_lawyer.php?unblock_id=<?=$row['u_id']?>"><i class="fas fa-hourglass"></i>&nbsp; Pending</a>
															</td>
														<?php }?>
													</tr>
													<?php
													}
												?>
											</table>
											
										</div> <!-- /widget-content -->
										
									</div> <!-- /widget -->
								</div>
							</div>
						</section>
					
					
					
					
					</div>
					<!-- /#wrapper -->
					
					
					
					</body>
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