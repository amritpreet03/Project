	<?php
	session_start();
	include 'connect.php';
	include 'menu1.php';
if(isset($_POST['submit']))  
 {
 	$title=$_POST['title'];
 	$des=$_POST['des'];
 	$pri=$_POST['pri'];
    $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));  
    $query =$conn->query("INSERT INTO `pack`(`title`, `description`, `price`, `image`, ) VALUES ('$title','$des', '$pri',$file')");
    if($query)  
    {
    	echo "<script>alert('Inserted');window.location.href='menus1.php';</script>";  
    }else
    {
    	echo "<script>alert('Not Inserted');window.location.href='menus1.php';</script>";  
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
	<div class="col-lg-4 col-lg-offset-2">
	<center><h2>DISHES</h2></center>
	<form action="" class="ab" method="POST" ng-model="check" enctype="multipart/form-data">
      <div class="form-group">
      <label for="title"><b>Title</b></label>
      <input type="text" placeholder="Enter Title" name="title" required class="form-control">
	  </div>
      <div class="form-group">
      <label for="des"><b>Description</b></label>
      <input type="text" placeholder="Enter Description" name="des" required class="form-control">
	  </div>
      <div class="form-group">
      <label for="pri"><b>Price</b></label>
      <input type="text" placeholder="Enter Price" name="pri" required class="form-control">
	  </div>
      <div class="form-group">
      <label for="img"><b>Image</b></label>
      <input type="file"  name="img" required class="form-control">
	  </div>
            <center><input type="submit" class="btn btn-success" name="submit" value="submit"></center>
	</form>
</body>
</html>