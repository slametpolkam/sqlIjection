<?php
$server="localhost";
$user="cndtraining";
$pass="cndtraining";
$database="cndtraining";
$conn=mysqli_connect($server,$user,$pass,$database);
if(!$conn){
	die("<script>alert('Gagal tersambung dengan database.')</script>");
}