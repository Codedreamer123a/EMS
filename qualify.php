<?php 
include('config.php');
if(isset($_POST['update'])){
	$pg=$_POST['pg'];
	$g=$_POST['g'];
	$cert=$_POST['cert'];
	$acert=$_POST['acert'];
	$diploma=$_POST['diploma'];
	$twelve=$_POST['twelve'];
	$ten=$_POST['ten'];
	$sql="UPDATE user SET pg='$pg', g='$g', cert='$cert', acert='$acert', diploma='$diploma', twelve='$twelve', ten='$ten' WHERE id=1";
	if(mysqli_query($conn, $sql)){
		header('location:qualify.php');
	}
}

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
						<li role="presentation" class="active"><a href="qualify.php">Qualification</a></li>
						<li><a href="adminreport.php">Admin Report</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<form action="#" method="post" class="form-group">
							<div class="box2">
								<strong>Post Graduation</strong>
								<input type="text" name="pg" value="<?php echo $row['pg'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Graduation</strong>
								<input type="text" name="g" value="<?php echo $row['g'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Certification</strong>
								<input type="text" name="cert" value="<?php echo $row['cert'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Another Certification</strong>
								<input type="text" name="acert" value="<?php echo $row['acert'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Diploma Trade</strong>
								<input type="text" name="diploma" value="<?php echo $row['diploma'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>12th Board</strong>
								<input type="text" name="twelve" value="<?php echo $row['twelve'];?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>10th Board</strong>
								<input type="text" name="ten" value="<?php echo $row['ten'];?>" class="form-control" />
							</div>
							<div class="box2">
								<input type="submit" name="update" value="Update" class="form-control btn-primary" />
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Script Section-->
	<script>

	</script>
	<!--Script Section-->

</body>
</html>