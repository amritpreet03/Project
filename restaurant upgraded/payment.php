<?php
session_start();

include 'connect.php';


if (isset($_POST['cod'])) {
	$id=$_POST['id'];
	$uid=$_POST['uid'];
	$aid=$_POST['aid'];
	$pid=$_POST['pid'];
	$payment=$_POST['payment'];
	$count=$_POST['count'];
$total=sizeof($uid);

for ($i=0; $i < $total ; $i++) { 

	$iid=$id[$i];
	$iuid=$uid[$i];
	$ipid=$pid[$i];
	$icount=$count[$i];
	$que=$conn->query("INSERT INTO orders (uid,pid,pcount,aid,payment_type) VALUES ('$iuid','$ipid','$icount','$aid','$payment')");	

// echo $delid=;
$GLOBALS['delid'] = $uid[$i];

}

$del=$conn->query("DELETE FROM cart WHERE uid='$delid'");

header('location:itable.php');



}





?>