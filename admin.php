<?php 
include('config.php');
if(isset($_POST['update'])){
	$name=$_POST['username'];
	$email=$_POST['email'];
	$title=$_POST['title'];
	$grade=$_POST['grade'];
	$status=$_POST['status'];
	$category=$_POST['category'];
	$shift=$_POST['shift'];
	$organization=$_POST['organization'];
	$sql="UPDATE user SET username='$name', email='$email', title='$title', grade='$grade', status='$status', category='$category', shift='$shift', organization='$organization' WHERE id=1";
	if(mysqli_query($conn, $sql)){
		header('location:admin.php');
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
						<li role="presentation" class="active"><a href="#">Job Details</a></li>
						<li><a href="qualify.php">Qualification</a></li>
						<li><a href="adminreport.php">Admin Report</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<form action="#" method="post" class="form-group">
							<div class="box2">
								<strong>Admin Name</strong>
								<input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Work Email-ID</strong>
								<input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Job Title</strong>
								<input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Pay Grade</strong>
								<input type="text" name="grade" value="<?php echo $row['grade']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Admin Status</strong>
								<input type="text" name="status" value="<?php echo $row['status']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Job Category</strong>
								<input type="text" name="category" value="<?php echo $row['category']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Working Shift</strong>
								<input type="text" name="shift" value="<?php echo $row['shift']; ?>" class="form-control" />
							</div>
							<div class="box2">
								<strong>Organization</strong>
								<input type="text" name="organization" value="<?php echo $row['organization']; ?>" class="form-control" />
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