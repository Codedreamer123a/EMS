
<?php 
include('config.php');

	$sql="select * from user";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	
	$sql="select * from employee";
	$result=mysqli_query($conn, $sql);
	
	$eid="";
	if(isset($_GET['save']))    
	{    
		$eid = $_GET['eid'];   
	} 
	
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
						<li role="presentation" class="active"><a href="#">Employee List</a></li>
						<li><a href="addemp.php">Add Employee</a></li>
					</ul>
				</div>
				<div class="col-md-10" id="vline">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<div class="row">
							<div class="col-md-3"></div>
								<div class="col-md-6">
									<form action="livesearch.php?id=<?php echo $eid; ?>" method="get" class="form-group">
										<div class="input-group" style="margin-top:25px;">
											<input type="text" class="form-control" name="eid" placeholder="Search for employee ID.......">
											<span class="input-group-btn">
											<a href=""></a>
											<input type="submit" value="Go!" name="save" class="form-control"/>
											</span>
										</div>
									</form>
								</div>
							<div class="col-md-3"></div>
						</div>	
						<div class="row">
							<div class="col-md-12">
								<table class="table table-hover">
									<thead>
										<tr>
										  <th>Emp ID</th>
										  <th>First Name</th>
										  <th>Last Name</th>
										  <th>D.O.J.</th>
										  <th>Designation</th>
										</tr>
									</thead>
									<tbody>
									<?php while($row=mysqli_fetch_assoc($result)) { ?>
										<tr>
										  <th scope="row"><?php echo $row['empid'];?></th>
										  <td><a href="profile.php?id=<?php echo $row['id']; ?>"><strong><?php echo $row['fname'];?></strong></a></td>
										  <td><?php echo $row['lname'];?></td>
										  <td><?php echo $row['doj'];?></td>
										  <td><?php echo $row['designation'];?></td>
										</tr>
									<?php } ?>	
									</tbody>
								</table>
							</div>
						</div>		
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