<?php
session_start();
include 'connect.php';
if(isset($_POST['login']))
{
	$email=$_POST['em'];
	$pass=$_POST['ps'];
	$gt=$conn->query("SELECT * FROM register WHERE email = '$email'");
	$gtt=mysqli_fetch_array($gt);
	if($gtt)
	{
		$_SESSION['user']=$email;
		echo "<script>alert('login succesful');window.location.href='index.php';</script>";
	}
	else
	{
		echo "<script>alert('login failed');window.location.href='login.php';</script>";
	}
}
?>