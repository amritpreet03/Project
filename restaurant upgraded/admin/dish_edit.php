<?php 
session_start();
include 'connect.php';


if (isset($_POST['update'])) {
	$id=$_POST['id'];
  $dishnme=$_POST['dishnme'];
  $dishcat=$_POST['dishcat'];
  $descr=$_POST['descr'];
  $pri=$_POST['pri'];
  $sc=$_POST['sc'];

$adi=$conn->query("UPDATE dishesf SET `dish_name`='$dishnme',`dish_category`='$dishcat',`description`='$descr',`price`='$pri',`shipping_charges`='$sc' where id='$id'");
if ($adi) {
    echo "<script>  alert ('edited'); window.location.href='adishes.php';</script>";
}else
{
    echo "<script>  alert ('not edited'); window.location.href='adishes.php';</script>";
}

}

 ?>