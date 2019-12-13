<?php
session_start();
include 'connect.php';

if (isset($_POST['login'])) {
      $email=$_POST['email'];
      $password=$_POST['password'];
      $ins=$conn->query("SELECT * FROM admin WHERE email='$email' && password='$password'");
      $inss=mysqli_fetch_array($ins);
      if ($inss) {
            $_SESSION['admin']=$email;
            header('location:welcome1.php');
      }else
      {
            echo "<script>alert('Wrong Id & Password');window.location.href='index.php';</script>";
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
<body style="background-image: url('../img/1.jpg'); background-size: 100%;">
	<div class="col-lg-12" style="height: 200px;">
	</div>
	<div class="col-lg-4 col-lg-offset-4" style="background: linear-gradient(to left top,transparent,maroon,transparent); padding: 25px; box-shadow: 0px 0px 30px inset maroon; height: 300px; color: white; border-radius: 30px;">
	<center><h2>Admin Login</h2></center>

	<form action=""class="ab" method="POST" ng-model="check">
      <div class="form-group">
      <label for="uname"><b>Username</b></label>
      <input type="email" placeholder="Enter Username" name="email" required class="form-control">
	  </div>
      <div class="form-group">
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required class="form-control">
      </div>
      <center><input type="submit" class="btn btn-success" name="login" value="login"></center>
	</form>
</div>


</body>
</html>