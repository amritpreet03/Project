<?php 
session_start();
include 'connect.php';


if (isset($_POST['update'])) {
$id=$_POST['id'];
$category=$_POST['category'];

$edi=$conn->query("UPDATE category SET category='$category' where id='$id'");
if ($edi) {
    echo "<script>  alert ('edited'); window.location.href='category.php';</script>";
}else
{
    echo "<script>  alert ('not edited'); window.location.href='category.php';</script>";
}

}

 ?>