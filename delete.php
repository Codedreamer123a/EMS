<?php 
include('config.php');

	$sql="select * from user";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	
	$id=$_GET['id'];
if(isset($_POST['delete'])){		
	$sql= "DELETE from employee WHERE id='$id'";
	if(mysqli_query($conn, $sql)){
		header('location:emplist.php');
	}
}
	$sql="select * from employee where id='$id'";
	$result2=mysqli_query($conn, $sql);
	$row2=mysqli_fetch_assoc($result2);
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
						<li>
							<a href="admin.php">Admin</a>
						</li>
						<li class="active"><a href="emplist.php">Employee Management</a></li>
						<li><a href="dashboard.php">Dashboard</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked" id="stackmenu">
						<li>
							<div class="profile-header-container">   
								<div class="profile-header-img">
									<img class="img-circle" src="uploads/<?php echo $row2['photo'];?>?sz=100" />
									<!-- badge -->
									<div class="rank-label-container">
										<center><span class="label label-default rank-label"><?php echo $row2['fname'];?>
										</span></center>	
									</div>
								</div>
							</div>
						</li>
						<li><a href="profile.php?id=<?php echo $row2['id']; ?>">Personal Details</a></li>
						<li><a href="contacts.php?id=<?php echo $row2['id'];?>">Contact Details</a></li>
						<li><a href="emergency.php?id=<?php echo $row2['id']; ?>">Emergency Contacts</a></li>
						<li><a href="job.php?id=<?php echo $row2['id']; ?>">Job Details</a></li>
						<li><a href="salary.php?id=<?php echo $row2['id']; ?>">Salary</a></li>
						<li><a href="reportto.php?id=<?php echo $row2['id']; ?>">Report To</a></li>
						<li><a href="work.php?id=<?php echo $row2['id']; ?>">Experience</a></li>
						<li><a href="empqualify.php?id=<?php echo $row2['id']; ?>">Qualification</a></li>
						<li role="presentation" class="active"><a href="delete.php?id=<?php echo $row2['id']; ?>">Delete Profile</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<form action="#" method="post" class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="box2">
										<strong><h2>Delete this employee profile</h2></strong>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="box2">
										<input type="submit" name="delete" value="Delete Profile" class="form-control btn-primary" />
									</div>
								</div>
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