<?php
session_start();

include 'connect.php';


if (isset($_POST['payment'])) {
	$id=$_POST['id'];
	$uid=$_POST['uid'];
	$aid=$_POST['aid'];
	$pid=$_POST['pid'];
	$payment=$_POST['payment'];

	$count=$_POST['count'];

	$cardNumber=$_POST['cardNumber'];
	$expityMonth=$_POST['expityMonth'];
	$expityYear=$_POST['expityYear'];
	$cvCode=$_POST['cvCode'];
$total=sizeof($uid);

for ($i=0; $i < $total ; $i++) { 

	$iid=$id[$i];
	$iuid=$uid[$i];
	$ipid=$pid[$i];
	$icount=$count[$i];

	$que=$conn->query("INSERT INTO orders (uid,pid,pcount,aid,payment_type,card_no,month,year,cvv) VALUES ('$iuid','$ipid','$icount','$aid','$payment','$cardNumber','$expityMonth','$expityYear','$cvCode')");	

$GLOBALS['delid'] = $uid[$i];

}

$del=$conn->query("DELETE FROM cart WHERE uid='$delid'");

header('location:itable.php');

}





?>