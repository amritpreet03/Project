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
.about
{
  background-image: url("contact.jpg");
  background-size: 100% 100%;
  background-repeat: no-repeat;
  height:900px;
  width:100%;
  }
   .hd
{
  color: white;
  z-index: 2;
  position: absolute;
  padding-top: 400px;
  font-family:Gabriola;
  padding-left: 240px;
  line-height: 900px;
}
.hd h1
{
  font-size: 50px;
}

.map
{
  
  margin-top: 50px;
  height:400px;
  
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

<div class= " col-lg-12 about " style="margin-top: -30px; z-index: -1;">
    </div>

    <div class="hd">
  <center><h1>Contact Us</h1></center>
  
   <center><h1>Beast kind form divide night above let moveth bearing darkness.</center></h1></center> 
      <br>
</div>
<div class="col-lg-10 col-lg-offset-1 map ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8281.22705480194!2d75.7816655784833!3d30.902243789775238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a816c64765e71%3A0xeba838350f05e30f!2sFBC!5e0!3m2!1sen!2sin!4v1564374802154!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
</div>



<?php
include 'footer.php';
?>


</body>
</html>