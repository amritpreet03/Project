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
	<div class="col-lg-12" style="height: 200px;">
	</div>
	<div class="col-lg-4 col-lg-offset-4">
	<center><h2>Admin Login</h2></center>

	<form action="home1.html"class="ab" method="POST" ng-model="check">
      <div class="form-group">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required class="form-control">
	  </div>
      <div class="form-group">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required class="form-control">
	  </div>
      <div class="form-group">
      <p>Click <a href="reg.php" style="text-decoration: none;">here</a> to register</p>
      </div>
      <center><input type="submit" class="btn btn-success" name="login" value="login">
                  <a href="../index.php" class="btn btn-success ">HOME</a></center>
	</form>
</div>
</body>
</html>