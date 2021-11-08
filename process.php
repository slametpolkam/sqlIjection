<?php
include 'config.php';
session_start();
$usernam=$_POST['username'];
$passwor=md5($_POST['password']);

if($usernam==null){
	header("Location:index.php");
}

	$sql="SELECT * FROM users WHERE username='$usernam' AND password='$passwor'";
	$result=mysqli_query($conn,$sql);
	if($result->num_rows>0){
		$_SESSION['username']=$usernam;
		echo "<script>alert('OK')</script>";
		header("Location:admin/home_site.php");
	}else{
		echo "<script>alert('sorry, username or password not match')</script>";
		header("Location:index.php");

	}
