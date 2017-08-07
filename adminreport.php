<?php 
include('config.php');
$sql="select * from user";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" media="all" />
	<link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" href="selfcss/mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<title>Employee Management System</title>
</head>
<body>

	<div class="wrapper2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="header">
						<div class="col-md-6">
							<i class="fa fa-user fa-2x" aria-hidden="true"></i>
							<strong>Employee Management System</strong>
						</div>
						<div class="col-md-6">
							<p class="pull-right">Welcome <strong><?php echo $row['username'];?></strong> <a href="logout.php" class="btn btn-primary">Logout</a></p>
						</div>
					</div>		
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="nav nav-tabs">
						<li class="active">
							<a href="admin.php">Admin</a>
						</li>
						<li><a href="emplist.php">Employee Management</a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked" id="stackmenu">
						<li><a href="admin.php">Job Details</a></li>
						<li><a href="qualify.php">Qualification</a></li>
						<li role="presentation" class="active"><a href="adminreport.php">Admin Report</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline2">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<div class="box3">
							<h5>Admin Name : <strong><?php echo $row['username'];?></strong></h5>
						</div>
						<div class="box3">
							<h5>Job Role : <strong><?php echo $row['title'];?></strong></h5>
						</div>
						<div class="box3">
							<h5>Work Email-ID : <strong><?php echo $row['email'];?></strong></h5>
						</div>
						<div class="box3">
							<hr />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="box3">
									<h5>Category : <strong><?php echo $row['category'];?></strong></h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box3">
									<h5>Pay-Grade : <strong><?php echo $row['grade'];?></strong></h5>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="box3">
									<h5>Status : <strong><?php echo $row['status'];?></strong></h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box3">
									<h5>Working Shift : <strong><?php echo $row['shift'];?></strong></h5>
								</div>
							</div>
						</div>
						<div class="box3">
							<hr />
						</div>
						<div class="box3">
							<h5>Post-Graduation : <strong><?php echo $row['pg'];?></strong></h5>
						</div>
						<div class="box3">
							<h5>Graduation : <strong><?php echo $row['g'];?></strong></h5>
						</div>
						<div class="box3">
							<h5>Diploma : <strong><?php echo $row['diploma'];?></strong></h5>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="box3">
									<h5>12th Board : <strong><?php echo $row['twelve'];?></strong></h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box3">
									<h5>10th Board : <strong><?php echo $row['ten'];?></strong></h5>
								</div>
							</div>
						</div>	
						<div class="box3">
							<hr />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="box3">
									<h5>1st Certification : <strong><?php echo $row['cert'];?></strong></h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="box3">
									<h5>2nd Certification : <strong><?php echo $row['acert'];?></strong></h5>
								</div>
							</div>
						</div>	
						<div class="box3">
							<hr />
						</div>
						<div class="box3">
							<h5>Organization : <strong><?php echo $row['organization'];?></strong></h5>
						</div>
						<div class="box3">
							<hr />
						</div>
						<div class="box3">
							<button class="btn btn-primary" onclick="myFunction()">Print Admin Report</button>
						</div>
						<div class="box3">
							<hr />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Script Section-->
	<script>
		function myFunction(){
			window.print();
		}
	</script>
	<!--Script Section-->

</body>
</html>