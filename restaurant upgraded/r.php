<?php
session_start();
include 'connect.php';
if (isset($_POST['Register']))
 {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $contact=$_POST['contact'];
   $password=$_POST['password'];
   
    $query =$conn->query("INSERT INTO `register`(`name`, `email`,`contact`, `password`) VALUES ('$name','$email', '$contact', '$password')");
if($query)
{
	echo "<script>alert('data inserted');</script>";
}
else
{
	echo "<script>alert('data inserted failed');</script>";	
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include 'header.php';
?>

	<video autoplay loop muted class="ab">
        <source src="login.webm" type="video/webm"  style="width:100%;">
      </video>
	<a href="login.php">LogIn</a>
<div class="col-lg-4 col-lg-offset-4 a">
	<h1 style="font-family: Gabriola;">
	<center>Registration Form</center></h1>
	<br>
	
	<form action="" method="post" class="form-group">
		<h4><label>Name</label><input type="text" name="name" class="form-control" required></h4>
		<h4><label>E-mail</label><input type="text" name="email"class="form-control"required></h4>
		<h4><label>Contact</label><input type="text" name="contact"class="form-control"required></h4>
		<h4><label>Password</label><input type="password" name="password"class="form-control"required><br></h4>
		<center>
			<div class="btn-group">
			<input type="submit" name="Register" value="Register" class="btn btn-default" style="font-family: Gabriola; font-size: 22px;">
			<a href="login.php" class="btn btn-success" style="font-family: Gabriola; font-size: 22px;">Login</a>
		</div>
		</center>
	</form>
</div>
</body>
<style type="text/css">
	label
	{
		font-family: Gabriola;
		font-size: 25px;
	}	
	.a{
		position:absolute;
		margin-top:125px;
		background: rgb(255,255,255,.7);
		border-radius: 10px;
	}
	input[text]{
		transition:2s;
	}
	input:hover{
		background-color:white;
		box-shadow:5px 5px 5px grey;
	}
	.btn-group a:hover
	{
		box-shadow:5px 5px 5px grey;
	}

.ab
    {
      height: 870px;
      width: 100%;
      position: absolute;
      padding: 0px;
      margin-top: -30px;
    }
.ab source
{
  height: 700px;
  width: 100%;
}

</style>
</html>