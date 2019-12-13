<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>

<link rel="stylesheet" type="text/css" href="index.css">

<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
  .vid
  {
    width: 100%;
    position: absolute;
    margin-top: -50px;
    z-index: -1;
  }
</style>
</head>
<body>

<?php
include 'header.php';
?>
      <video autoplay loop muted="off" class="vid">
        <source src="vedior.mp4" type="video/mp4"  style="width:100%;">
      </video>
</div>
<div class="hd">
  <center><h1>welcome to</h1></center>
  <center><h1> The Urban T  urban</h1></center>
   <center><h1>come and eat well with our delicious food</center></h1></center> 
      <br>
</div>
 <div class="col-lg-offset-1 col-lg-4 intro">
<p>
Welcome. This is The Urban Grill. Elegant 
 sophisticated restaurant template. Royal plate offers different home page layouts with smart and unique design, showcasing beautifully designed elements every restaurant website should have.So, give it a try and dive into a world of royal restaurant websites. </p>
</div>
<div class=" col-lg-offset-2 col-lg-4 slide">
<img src="burgur.JPG" class="burger" height="240px" width="500px">
  <div class="overlay">
    <img src="food1.JPG" class="pizza" height="240px" width="520px">
  </div>
</div>
<div class="hd2"><h1><center>
  Natural ingredients and testy food</center></h1>
<h2><center>Some Trendy And Popular Courses Offerd</center></h2>
   <div class="whitee">
   </div>
   <div class="hd3">
   </div>
  </div>
    <div class=" col-lg-offset-2 col-lg-3 card">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>
<div class=" col-lg-3 card1">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>
<div class="  col-lg-3 card2">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>
<div class=" col-lg-offset-2 col-lg-3 card3">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>
<div class="  col-lg-3 card4">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>
<div class="  col-lg-3 card5">
  <div class="col-lg-12">
    <div class="img">
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>
 </body>
</html>
