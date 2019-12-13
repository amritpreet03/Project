<?php
session_start();
$user=$_SESSION['user'];
include 'connect.php';

$fet=$conn->query("SELECT * FROM register WHERE email='$user'");
$f=mysqli_fetch_array($fet);


if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['phone'];
	$up=$conn->query("UPDATE register SET name='$name',email='$email',contact='$contact' WHERE email='$user'");
	if ($up) {
		echo "<script>alert('Updated'); window.location.href='myprofile2.php';</script>";
	}else
	{
		echo "<script>alert('Not Updated'); window.location.href='myprofile2.php';</script>";
	}
}



?>
<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
 <style>

		  .card1
		  {
		  	padding-bottom: 10px;
		  	background-color: white;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
		  }

		  .card11
  {
  	background-color: white;
   margin-top: 2px;
   border-bottom-right-radius: 30px;
   border-bottom-left-radius: 30px;
      padding-bottom: 20px;

  }

 	</style>
 	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
</style>
 </head>
 <body style="background-image: url('img/1.jpg'); background-size: 100%; background-attachment: fixed;">
<?php
include 'header.php';
?>
<br><br><br>
 	<div class="container">


	 	<div class="col-lg-8 card">
	 		<div class="col-lg-12 card1" style="">
	 			<div class="col-lg-12" style="margin-top: 5px;">
		 			<center><h4><b>My Profile</b></h4></center>
		 		</div>
		 	</div>
		 <div class="col-lg-12 card11">
		 	<br>
		 		<div class="col-lg-12 card111">
		 		<form accept="" method="post">
      			<div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" value="<?php echo $f['name']; ?>" id="name">
				</div> 
    			<div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" value="<?php echo $f['email']; ?>" id="email" readonly>
			    </div>
                <div class="form-group">
                <label for="phone">Contact:</label>
                <input class="form-control" type="tel" name="phone" value="<?php echo $f['contact']; ?>" id="phone">
                </div>
                <div class="text-center">
                <button class="btn btn-danger" type="submit" name="update">Update</button>
              	</div>

				</form>

</div>
</div>


<?php

include 'side.php';

?>



 </body>
 </html>