<?php
session_start();
if(!(isset($_SESSION['user']['id']))){
	header('Location:index.php');
}
$conn=mysqli_connect("localhost","root","","admin");
$uid=$_SESSION['user']['id'];
$sql="select * from user where id='$uid'"; 
$res=mysqli_query($conn,$sql);

?>