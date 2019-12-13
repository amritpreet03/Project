<!DOCTYPE html>
<html>
<head>
	<title>Log-In</title>
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <link rel="icon" type="images/jpg/png" href="shaadiicon.png"> -->
</head>
<body ng-app="">
	<div style="height: 100%; width: 100%; overflow: hidden; position: absolute;">
	<!-- <video autoplay="on" loop="on" width="100%"  style="position:absolute;">
		<source src= "clouds background.mp4" type="video/mp4" style="width: 100% !important; padding: 0px;">
	</video> -->
</div>
	<div class=" col-lg-offset-5 col-lg-4 col-lg-offset-4">
		<br><br><br><br><br><br><br><br><br><br>
		<form action="home1.php"class="ab" method="POST" ng-model="check">
		<h1><label>E-mail</label><input type="text" name="em" required class="form-control"></h1>
		<h1><label>Password</label><input type="Password" name="ps"required class="form-control"></h1><br>
		<center><input type="submit" class="btn btn-default" name="login" value="login"></center>
	</form>
	</div>		
</body>
<style type="text/css">
	body{
		background-image: url("gallery.png");
  	background-size: 100% 100%;
  	background-repeat: no-repeat;
    height:700px;
    width:100%;
	}
	label
	{
		color:white;  
		text-shadow: 1px 1px 2px black;
	}
	.ab input
	{
		background-color: transparent;
		box-shadow: 0px 0px 5px white;
		transition: 2s;
	}
	.ab input:hover
	{
		background-color: white;
		box-shadow: 0px 0px 20px white;
	}

	
</style>
</html>