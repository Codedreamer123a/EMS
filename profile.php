<?php 
include('config.php');
	
	$sql="select * from user";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	
	$id=$_GET['id'];
if(isset($_POST['save'])){
	$empid=$_POST['empid'];	
	$fname=$_POST['fname'];	
	$mname=$_POST['mname'];	
	$lname=$_POST['lname'];	
	$drlic=$_POST['drlic'];	
	$liced=$_POST['liced'];	
	$gd=$_POST['gender'];	
	$mst=$_POST['mstatus'];	
	$nation=$_POST['nation'];	
	$dob=$_POST['dob'];	
	$pcomm=$_POST['pcomm'];		
	$target = "attachments/".basename($_FILES['attach']['name']);
	$attach=$_FILES['attach']['name'];
	$sql="UPDATE employee SET empid='$empid', fname='$fname', mname='$mname', lname='$lname', drlic='$drlic', liced='$liced', gender='$gd', mstatus='$mst', nation='$nation', dob='$dob', pcomm='$pcomm', attach='$attach' WHERE id='$id'";
	mysqli_query($conn, $sql);
	move_uploaded_file($_FILES['attach']['tmp_name'], $target);	
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
						<li role="presentation" class="active"><a href="profile.php?id=<?php echo $row2['id']; ?>">Personal Details</a></li>
						<li><a href="contacts.php?id=<?php echo $row2['id']; ?>">Contact Details</a></li>
						<li><a href="emergency.php?id=<?php echo $row2['id']; ?>">Emergency Contacts</a></li>
						<li><a href="job.php?id=<?php echo $row2['id']; ?>">Job Details</a></li>
						<li><a href="salary.php?id=<?php echo $row2['id']; ?>">Salary</a></li>
						<li><a href="reportto.php?id=<?php echo $row2['id']; ?>">Report To</a></li>
						<li><a href="work.php?id=<?php echo $row2['id']; ?>">Experience</a></li>
						<li><a href="empqualify.php?id=<?php echo $row2['id']; ?>">Qualification</a></li>
						<li><a href="delete.php?id=<?php echo $row2['id']; ?>">Delete Profile</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<form action="#" method="post" class="form-group" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-4">
									<div class="box2">
										<strong>First Name</strong>
										<input type="text" name="fname" value="<?php echo $row2['fname'];?>" class="form-control" required />
									</div>
								</div>
								<div class="col-md-4">
									<div class="box2">
										<strong>Midlle Name</strong>
										<input type="text" name="mname" value="<?php echo $row2['mname'];?>" class="form-control" />
									</div>
								</div>
								<div class="col-md-4">
									<div class="box2">
										<strong>Last Name</strong>
										<input type="text" name="lname" value="<?php echo $row2['lname'];?>" class="form-control" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="box2">
										<strong>Employee ID</strong>
										<input type="text" name="empid" value="<?php echo $row2['empid'];?>" class="form-control" required />
									</div>
								</div>
								<div class="col-md-6"></div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="box2">
										<strong>Driver's License Number</strong>
										<input type="text" name="drlic" value="<?php echo $row2['drlic'];?>" class="form-control" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="box2">
										<strong>License Expiry Date</strong>
										<input type="text" name="liced" value="<?php echo $row2['liced'];?>" class="form-control" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="box2">
										<strong>Gender</strong>
										<div class="radio">
											<label><input type="radio" name="gender" value="Male" checked >Male</label>
										</div>
										<div class="radio">
											<label><input type="radio" name="gender" value="Female" >Female</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box2">
										<strong>Marital Status</strong>
										<select name="mstatus" id="" class="form-control">
											<option value="Married" checked >Married</option>
											<option value="Un-Married">Un-Married</option>
											<option value="Divorced">Divorced</option>
										</select>
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-md-6">
									<div class="box2">
										<strong>Nationality</strong>
										<select name="nation" id="" class="form-control">
											<option value="Indian" checked >Indian</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="box2">
										<strong>Date of Birth</strong>
										<input type="text" name="dob" value="<?php echo $row2['dob'];?>" class="form-control" required />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="box2">
										<strong>Attachments</strong>
										<input type="file" name="attach" class="form-control" style="margin:5px;" />
										<p class="help-block">Accept upto 1MB. </p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="box2">
										<strong>Comments</strong>
										<textarea name="pcomm" class="form-control" rows="5"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="box2">
										<input type="submit" name="save" value="SAVE" class="form-control btn-primary" />
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