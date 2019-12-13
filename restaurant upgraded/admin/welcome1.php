<?php
session_start();
$email=$_SESSION['admin'];

include 'connect.php';
include 'menu1.php';
if (isset($_POST['update'])) 
{
	$old=$_POST['opsw'];
	$new=$_POST['npsw'];

$ch=$conn->query("SELECT * FROM admin WHERE password='$old'");
$chh=mysqli_fetch_array($ch);
if ($chh) {
	$up=$conn->query("UPDATE admin SET password='$new' WHERE email='$email'");
	if ($up) {
		echo "<script>alert('Password Updated'); window.location.href='welcome1.php';</script>";
	}else
	{
		echo "<script>alert('Password Not Updated'); window.location.href='welcome1.php';</script>";
	}
}else
{
		echo "<script>alert('Password Not Matched'); window.location.href='welcome1.php';</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-10">
	<div class="col-lg-12" style="height: 80px;">
	</div>	
	<div class="col-lg-6 col-lg-offset-3" style="background: rgb(255,255,255,.7); padding: 10px; border-radius: 10px;">
	<center><h1 style="color: maroon; font-family: Gabriola;">Change Password</h1></center>
	<form action="" class="ab" method="post" ng-model="check" onsubmit="return abc()">
      <div class="form-group">
      <label for="psw"><b>Old Password</b></label>
      <input type="password" placeholder="Enter Password" id="opsw" name="opsw" required class="form-control">
	</div>
	  <div class="form-group">
	   <label for="psw"><b> New Password</b></label>
      <input type="password" placeholder="Enter Password" id="npsw" name="npsw" required class="form-control">
	  </div>
	  <div class="form-group">
	   <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Password" id="cpsw" name="cpsw" required class="form-control">
		</div>
		<div class="col-lg-4 col-lg-offset-4">
		  <input type="submit" class="btn btn-default form-control" name="update" value="update">
		</div>
	  	</form>
	  </div>
<script type="text/javascript">
	function abc() {
		var a=document.getElementById('npsw').value;
		var b=document.getElementById('cpsw').value;
		if (a!=b) 
		{
			alert('Please Match New Password and Confirm Password');
			return false;
		}
	}
</script>


</body>
</html>