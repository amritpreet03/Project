<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
	<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <link rel="icon" type="images/jpg/png" href="shaadiicon.png"> -->

<style type="text/css">
	html,body
	{
		height: 700px;
	}
	body{
		background-image: url("gallery.png");
	  	background-size: 100% 100%;
	  	background-repeat: no-repeat;
	    width:100%;
	}
.bb
{
  position: absolute !important;
  height: 80px !important;
  margin-top: -15px;
}
.txt li a
{
  font-size: 28px;
  font-family:Gabriola;
  color: white;
  font-weight: italic;
  padding-top: 20px;
}
.txt li:hover a
{
  color: black !important;
}
	</style>
</head>
<body ng-app="">
	<?php
include 'header.php';
	?>
	<div class="col-lg-12" style="height: 170px;">
	</div>
	<div class="col-lg-offset-6 col-lg-4">
		<form action="logincode.php" class="ab" method="post" ng-model="check">
		<div class="form-group">
		<label style="color: white; font-family: Gabriola; font-size: 22px;">E-mail</label>
		<input type="text" name="em" required class="form-control">
		</div>
		<div class="form-group">
		<label style="color: white; font-family: Gabriola; font-size: 22px;">Password</label>
		<input type="password" name="ps" required class="form-control">
		</div>
		<center style="font-family: Gabriola;">
			<input type="submit" class="btn btn-default btn-lg b" name="login" value="login">
			<a href="r.php" class="btn btn-default btn-lg b">Register</a>
		</center>
	</form>
	</div>
	<div class="col-lg-12" style="height: 130px;">
	</div>
<?php
include 'footer.php';
?>
</body>
</html>