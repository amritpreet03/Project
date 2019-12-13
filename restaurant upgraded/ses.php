<?php
session_start();
if (isset($_REQUEST['id'])) {
	$id=$_REQUEST['id'];
	$_SESSION['address']=$id;
	header('location:mycart.php');
}else
{
	echo "<script>alert('Please Choose Address');window.location.href='mycart.php';</script>";
}

?>