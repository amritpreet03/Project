<html>
<head>
<title>adservice</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>
.container {
	height: 200px;
	width: 500px;
  padding: 80px;
  margin-left: 400px;
  
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
label
{
  font-size: 20px;
}
</style>
<body ng-app="">
    <?php
  include 'menu1.php';

  ?>

	<div class="col-lg-12" style="height: 150px;">
		</div>
		
	 <div class="container">
		<form action="home1.html"class="ab" method="POST" ng-model="check">
      <label for="uname"><b>Service Name</b></label><br>
      <input type="text" placeholder="Name of the service" name="uname" required class="form-control">
       <label for="uname"><b>Service Type</b></label><br>
      <input type="text" placeholder="Type of service" name="uname" required class="form-control">
     <center><input type="submit" class="btn btn-success" name="login" value="login"></center>
    </div></div>
</body>
</html>