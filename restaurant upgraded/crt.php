<?php


if (isset($_SESSION['user'])) {

$uid=$_SESSION['user'];

$fch=$conn->query("SELECT * FROM register WHERE email='$uid'");
$fchh=mysqli_fetch_array($fch);

$uuu=$fchh['id'];

$crt=$conn->query("SELECT * FROM cart WHERE uid='$uuu'");
$nm=mysqli_num_rows($crt);
echo $nm;

}else
{
	echo "empty";
}






?>