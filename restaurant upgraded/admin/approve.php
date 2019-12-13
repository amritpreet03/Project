<?php
if (isset($_REQUEST['id'])) {

	$id=$_REQUEST['id'];
	include 'connect.php';
	$ab="1";
	$update=$conn->query("UPDATE orders SET status='$ab' WHERE id='$id'");
	if ($update) {
		echo "<script>alert('approved'); window.location.href='pending.php';</script>";
	}else
	{
		echo "<script>alert('Not approved'); window.location.href='pending.php';</script>";
	}

}
if (isset($_REQUEST['did'])) {

	$id=$_REQUEST['did'];
	include 'connect.php';
	$ab="2";
	$update=$conn->query("UPDATE orders SET status='$ab' WHERE id='$id'");
	if ($update) {
		echo "<script>alert('Delivered'); window.location.href='pending.php';</script>";
	}else
	{
		echo "<script>alert('Not Delivered'); window.location.href='pending.php';</script>";
	}

}

?>