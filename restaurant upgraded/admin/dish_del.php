<?php 
session_start();
include 'connect.php';
$id=$_REQUEST['id'];
$del=$conn->query("DELETE from dishesf where id='$id'");
if ($del) {
    echo "<script>  alert ('deleted'); window.location.href='adishes.php';</script>";
}else
{
    echo "<script>  alert ('not deleted'); window.location.href='adishes.php';</script>";
}

 ?>