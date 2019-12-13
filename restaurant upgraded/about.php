<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
 <style>

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
  	background-image: url("gallery1.JPG");
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
  padding-top: 300px;
  font-family:Gabriola;
  padding-left: 430px;
  line-height: 900px;
  text-transform: capitalize;
}
.hd h1
{
  font-size: 50px;
}
 .bc1
 {
 	height:250px;
	border:1px solid black;
	background-image: url("image06.JPG");
	background-size: 100% 100%;
	background-repeat: no-repeat;
	position:relative;
	margin-top: 30px;
 }
.bb
{
  position: absolute !important;
  height: 80px !important;
  margin-top: -15px;
}

.bc
{
        height:200px;
	border:1px solid black;
	position:relative;
	margin-top: 190px;
	background-image: url("c7.jpeg");
	background-size: 100% 100%;
	background-repeat: no-repeat;

}
.intr
{
  height:400px;
  font-size: 23px; 
  font-family: Ink Free;
  margin-top:-250px;
  box-shadow: inset 0px 0px 10px maroon;
  border-top-left-radius: 40px;
  border-bottom-right-radius: 40px;
  }	
  .app
  {
  	height:400px;
  
  font-size: 20px; 
  font-family: Ink Free;
  padding-top: 5px;
  margin-top: 50px;
  box-shadow: inset 0px 0px 10px maroon;
  border-top-left-radius: 40px;
  border-bottom-right-radius: 40px;
  }
  .slide
{
  height:400px;
  width:300px;
  margin-top: 50px;
  
}
.pizza
{
  display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    white-space: nowrap;
    margin-left: -10px;
}
.burger
{
  margin-left: -15px;
}
.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  overflow: hidden;
  width: 100%;
  height:0;
  transition: .5s ease;

}

.slide:hover .overlay {
  bottom: 0;
  height: 100%;
} 
.asd
{
border:3px solid black;
height:299px;
margin-top: 50px;
background-image:url("2hd.JPG");
}
.indoor
{

  	height:310px;
  font-size: 17   px; 
  font-family: Ink Free;
  padding-top: 5px;
  margin-top: 50px;
    box-shadow: inset 0px 0px 10px maroon;
  border-top-left-radius: 40px;
  border-bottom-right-radius: 40px;
} 
.pic
{
  height: 310px;
  width: 250px;
  
  margin-top: -300px;
}

.hd2
{

height:299px;
width:100%;
background-image:url("h1.jpg");
margin-top: 50px;
position: relative;
font-family: Ink Free;
font-size: 20px;
padding-top: 50px; 
color: white;
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.whitee
{
 
height:200px;
width:100%;
background-color:white;
 margin-top:240px;
}
.outdoor
{

    height:310px;
  font-size: 17px; 
  font-family: Ink Free;
  padding-top: -10px;
  margin-top: 50px;
    box-shadow: inset 0px 0px 10px maroon;
  border-top-left-radius: 40px;
  border-bottom-right-radius: 40px;
} 
 .ab
    {
      height: 870px;
      width: 100%;
      position: absolute;
      padding: 0px;
      margin-top: -280px;
      margin-left: -20px;
    }
.ab source
{
  height: 700px;
  width: 100%;
}
 	</style>
<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
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
  <center><h1>our story</h1></center>
  <center><h1> The Urban Turban</h1></center>
   <center><h1>come and eat well with our delicious food</center></h1>
      <br>
</div>
<div class="col-lg-offset-1 col-lg-3 bc1">
	<div class="col-lg-offset-7 col-lg-9 bc">
</div>
</div>
<div class="col-lg-offset-6	 col-lg-5	 intr"><h1><b>Welcome To Steak Food & Restaurant</b></h1>
	<h2><center>our story</center></h2>
Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.

A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</div>
<div class="  col-lg-offset-1 col-lg-4 app">
<center><h2>Our Approach</h2></center>
<center><h2>ALWAYS FRESH </h2></center>

<center><h2>INGREDIENTS</h2></center>

Here at Royal Plate we work with only the best food supliers like small family farms, insuring that we always have the best and always fresh ingredients. You’ll find a large variety of dishes made
to satisfy any taste, from sea food, steaks, variety of natural soups, pasta, salads, finest deserts and vines...</div>
<div class=" col-lg-offset-1 col-lg-5 slide">
<img src="burgur.JPG" class="burger" height="395px" width="628px" style="border-radius: 100px;">
  <div class="overlay">	
    <img src="food1.JPG" class="pizza" height="300px" width="520px" style="border-radius: 100px;">
  </div>
</div>



	<div class=" col-lg-12 hd2"><h1><center>
   Indoor & outdoor dining area <br>
</center></h1>
<center><h1>
ENJOYABLE & COMFORTABLE</center></h1>
  <div class=" col-lg-12 whitee">
   </div>		
  </div>

  <div class="col-lg-offset-1 col-lg-5 indoor">

<center><h1>Indoor</h1></center>
<center><h3>WARM ATMOSPHERE</h3></center>
<center><h4>"50 seating places" "fireplace" "suitable for large groups also" </h4></center>

Enjoyable and comfortable atmosphere in the heart of London. Royal plate offers 50 seating places, surrounding a big fireplace that will make your dining exquisite and enjoyable. Carefully selected music and smart interior design will make you feel like home. Royal home indoor includes a vine cellar. You can taste any vine from our offering in our vine tasting bar. Royal plate can host large groups too, so if you need more seats for your feast simply send us an email, or call us by phone.
  </div>

  <div class="  col-lg-offset-7 col-lg-5  pic">
     <video autoplay loop muted class="ab">
        <source src="indoor.mp4" type="video/mp4"  style="width:100%;">
      </video>
  </div>

  <div class="col-lg-offset-7 col-lg-5 outdoor">
   <h1><center> Outdoor</center></h1>
<h3><center>NATURAL SURROUNDINGS</center></h3>

"72 seating places", "terrace","" suitable for large groups too"
Enjoy your dining at Royal plate terrace, surrounded by natural wooden fence and plenty of green. Royal plate terrace offers 72 seating places which can be rearranged for large groups and special events like weddings, corporate parties or baby showers. Royal view of the Palma bay in the sunset will take your breath away and make your stay truly royal. You can also visit our terrace bar where our professional staff will offer you our best vines or cocktails, according to your wishes.
  </div>
  <div class="  col-lg-offset-1 col-lg-5  pic">
     <video autoplay loop muted class="ab">
        <source src="outdoor.mp4" type="video/mp4"  style="width:100%;">
      </video>
  </div>


</center>

<?php

include 'footer.php';
?>
</body>
</html>