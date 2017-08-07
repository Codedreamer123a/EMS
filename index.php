
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css" media="all" />
	<link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
	<!--<link href="https://cookieless.interntheory.com/css/app.min.css" rel="stylesheet">-->
	<link rel="stylesheet" href="selfcss/mystyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<title>Employee Management System</title>
</head>
<body style="background-image:url(back2.jpg);">
	<div class="wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="margin-top:80px;">
					<div class="col-md-4"></div>	
					<div class="col-md-4" style="text-align:center;">
					</div>	
					<div class="col-md-4"></div>	
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="text-align:center;">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div id="loginbox">
						<i class="fa fa-user fa-2x" aria-hidden="true"></i>
						<h3><strong>Employee Management System</strong></h3>
						<h2> LOGIN </h2>
							<form action="" method="post" class="form-group">
								<div class="box">
									<input type="text" name="username" class="form-control" placeholder="Admit User" required />
								</div>
								<div class="box">
									<input type="password" name="password" class="form-control" placeholder="Password" required />
								</div>
								<div class="box">
									<input type="submit" name="submit" value="Submit" class="form-control" style="background:#95a5a6; color:#fff"/>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
		<!--<div class="alert alert-info" id="alert">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-times"></i></button>
	        <div class="smile"></div><div class="flash-text">This email has not been registered on InternTheory.</div>
	    </div> This code can be used for alert box info error report with interntheory CSS link given in head tag in this page-->
	</div>	
	
<?php
include('config.php');
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$pwd=$_POST['password'];
	$sql="select * from user";
	$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_assoc($result);
	if($name==$row['username'] && $pwd==$row['password']){
		header('Location:admin.php');
	}else{
		header('Location:index.php');
	}
}
?>

</body>
</html>