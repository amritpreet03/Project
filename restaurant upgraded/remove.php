<?php
session_start();

include 'connect.php';
$id=$_REQUEST['id'];

$del=$conn->query("DELETE FROM cart WHERE id='$id'");
if ($del) {
	header('location:mycart.php');
}else
{
	header('location:mycart.php');
}







?>