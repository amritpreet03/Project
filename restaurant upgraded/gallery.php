<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
 <style>
.bb
{
  position: absolute;
  height: 80px !important;
  margin-top: -15px;
}
.txt li a
{
  font-size: 28px;
  font-family:Gabriola;
  color: white;
 font-weight: italic;
  padding-top: 2px;
}
.txt li:hover a
{
  color: black !important;
}
 {
      height: 870px;
      width: 100%;
      position: absolute;
      padding: 0px;
      margin-top: -30px;
    }
    .ab
    {
    	width: 100%;
    }
.ab source
{
  height: 700px;
  width: 100%;
}
.intro
{
padding-top: 80px;

 font-weight:bold;
  font-size: 44PX;
   font-family:Elephant;
    line-height: 6px;
}


.gal .col-lg-3
{
	padding: 10px;
}

.gal .col-lg-3 img
{
	height: 200px;
	width: 100%;
}


 		</style>

<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
		<video autoplay loop muted class="ab"  style="margin-top: -30px;">
        	<source src="g1.mp4" type="video/mp4"  style="width:100%;">
      	</video>
      	<div class=" col-lg-12	intro"><h1><center>Exquisite Ambient 
      	</center></h1>
		<h1><center>
		RESTAURENT GALLERY
		</center></h1>

<div class="col-lg-12 gal">

<div class="col-lg-3">
	<img src="i1.jpeg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="i2.jpeg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="i3.jpeg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="i4.jpeg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="out4.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="out3.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="out2.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="enjoy.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="f1.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="f8.jpeg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="f9.jpg" class="img-responsive">
</div>
<div class="col-lg-3">
	<img src="f4.jpg" class="img-responsive">
</div>

</div>

</div>


<?php
include 'footer.php';
?>


</body>
</html>