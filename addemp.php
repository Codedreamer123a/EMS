<?php 
include('config.php');
if(isset($_POST['addemp'])){
	$empid=$_POST['empid'];	
	$fname=$_POST['fname'];	
	$mname=$_POST['mname'];	
	$lname=$_POST['lname'];	
	$doj=$_POST['doj'];	
	$designation=$_POST['designation'];	
	$target = "uploads/".basename($_FILES['photo']['name']);
	$image=$_FILES['photo']['name'];
	$sql= "INSERT INTO employee(empid, fname, mname, lname, doj, designation, photo) VALUES ('$empid', '$fname', '$mname', '$lname', '$doj', '$designation', '$image')";
	mysqli_query($conn, $sql);
	move_uploaded_file($_FILES['photo']['tmp_name'], $target);	
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
						<li><a href="emplist.php">Employee List</a></li>
						<li role="presentation" class="active"><a href="addemp.php">Add Employee</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<form action="addemp.php" method="post" class="form-group" enctype="multipart/form-data">
							<div class="box2">
								<strong>Employee ID</strong>
								<input type="text" name="empid" class="form-control" required />
							</div>
							<div class="box2">
								<strong>First Name</strong>
								<input type="text" name="fname" class="form-control" required/>
							</div>
							<div class="box2">
								<strong>Middle Name</strong>
								<input type="text" name="mname" class="form-control" />
							</div>
							<div class="box2">
								<strong>Last Name</strong>
								<input type="text" name="lname" class="form-control" required/>
							</div>
							<div class="box2">
								<strong>Date Of Joining</strong>
								<input type="text" name="doj" class="form-control" required/>
							</div>
							<div class="box2">
								<strong>Designation</strong>
								<input type="text" name="designation" class="form-control" required/>
							</div>
							<div class="box2">
								<strong>Photograph</strong>
								<input type="file" name="photo" class="form-control" style="margin:5px;" required />
								<p class="help-block">Accept jpg, png, gif upto 1 MB. Recommend dimension 200px X 200px.</p>
							</div>
							<div class="box2">
								<input type="submit" name="addemp" value="Add Employee" class="form-control btn-primary" />
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