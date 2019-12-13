<?php
session_start();
include 'connect.php';
if (isset($_REQUEST['pr'])) {
if (isset($_SESSION['user'])) {

$pid=$_REQUEST['pr'];
$cid=$_REQUEST['prid'];
$uid=$_SESSION['user'];

$fch=$conn->query("SELECT * FROM register WHERE email='$uid'");
$fchh=mysqli_fetch_array($fch);

$uuid=$fchh['id'];

$ins=$conn->query("INSERT INTO cart (uid,pid) VALUES ('$uuid','$pid')");
if ($ins) {
  header('location:menu.php?id='.$cid.'');
}else
{
  header('location:menu.php');
}


}
else
{
  echo "<script>alert('Please Login First');window.location.href='login.php';</script>";
}
}


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
	background-image: url("m1.jpg");
	background-size: 100% 100%;
	background-repeat: no-repeat;
  height:600px;
  width:100%;
  }
  .hd
{
  color: white;
  z-index: 2;
  position: absolute;
  padding-top: 155px;
  font-family:Gabriola;
  padding-left: 200px;
  font-size: 40px;
  text-transform: capitalize;
}
.hd h1
{
  font-size: 50px;
}
.abc
{
  
  font-family:Gabriola;
  padding-left: 150px;
  margin-top: 100px;
  font-size: 50px;
  font-weight: bolder;
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
<div class="col-lg-12">
<hr>
</div>
<?php
if (isset($_REQUEST['id'])) {

$rid=$_REQUEST['id'];
$pr=$conn->query("SELECT * FROM dishesf WHERE dish_category='$rid'");
$procount=mysqli_num_rows($pr);
if ($procount>=1) {
while ($pro=mysqli_fetch_array($pr)) {
?>
<div class="col-lg-2" style="height: 350px; padding: 15px;border-left:1px dotted grey;">

  <div class="col-lg-12">
    <div class="img" style="height: 170px; overflow: hidden;">
      <center>
      <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode($pro['image'] ).'"  class="img-thumbnail"/>';
        ?>
        </center>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="col-lg-12" style="text-transform: capitalize; font-size: 25px; font-weight: bold; font-family: Gabriola;"><?php echo $pro['dish_name']; ?></div>
    
    <div class="col-lg-12" style="text-transform: capitalize; font-family: Arial;"><b>Rs.</b><?php echo $pro['price']; ?></div>
    <div class="col-lg-12" style="text-transform: capitalize; height: 50px;">
      <?php echo $pro['description']; ?></div>
      <center>
    <a href="menu.php?pr=<?php echo $pro['id']; ?>&prid=<?php echo $rid; ?>" class="btn btn-danger bt">Add to cart</a>
    </center>
  </div>



</div>

<?php
}
}else
{
?>
<div class="col-lg-12">
<div class="alert alert-danger" style="text-align: center; font-weight: bold;">Sorry No Dish Left</div>
</div>
<?php
}


}else
{
?>
<div class="col-lg-12 alert alert-danger">
  Please Select from Menu
</div>


<?php
}


?>
</div>
</div>

</body>
</html>