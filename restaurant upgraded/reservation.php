<?php
session_start();
include 'connect.php';
        $email = $_SESSION['user'];
        $gtk=$conn->query("SELECT * FROM register WHERE email='$email'");
        $gttkk=mysqli_fetch_array($gtk);



if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $num=$_POST['num'];
  $phone=$_POST['phone'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $uid=$gttkk['id'];
  $check=$conn->query("SELECT * FROM reservation WHERE `date`='$date'");
  $checknum=mysqli_num_rows($check);
  $checkk=mysqli_fetch_array($check);
  if ($checknum>=20) {
    echo "<script>alert('Sorry all tables are booked'); window.location.href='reservation.php';</script>";
  }else
  {
    $inset=$conn->query("INSERT INTO reservation (`uid`, `name`, `email`,`num`, `phone`, `date`, `time`) VALUES ('$uid','$name','$email','$num','$phone','$date','$time')");
    if ($inset) {
      echo "<script>alert('Your table is booked'); window.location.href='reservation.php';</script>";
    }else
    {
    echo "<script>alert('Sorry. Try again'); window.location.href='reservation.php';</script>";
    }
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
  background-image: url("res.jpg");
  background-size: 100% 100%;
  background-repeat: no-repeat;
  height:800px;
  width:100%;
  }
  .about p
  {
    color: white;
    font-weight: bolder;
    font-size: 70px;
    position: absolute;
    top: 40%;
    left: 28%;
    animation: aa 2s ease 1;
  } 
  @keyframes aa
  {
    0%
    {
      margin-top: 400px;
    }
  }

.res
{
  font-size: 23px;
  font-weight: bold; 
  font-family: Gabriola;
  box-shadow: inset 0px 0px 10px maroon;
  border-top-left-radius: 40px;
  border-bottom-right-radius: 40px;
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
<div class="col-lg-12 about" style="margin-top: -30px; z-index: -1;">
    <p>Book for your family</p>
</div>
<div class="col-lg-12">
  <br><br>
</div>
<div class="col-lg-8 col-lg-offset-2 res">

    <div class="text-center">
      <h1>Reservation</h1>
      <h2>Book Your Table</h2>
    </div>
    <form class="" action="" method="post">
    <div class="form-group col-lg-4">
      <label>Name:</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group col-lg-4">
      <label>Email:</label>
      <input type="email" name="email" placeholder="Email" id="email" class="form-control">
    </div>
    <div class="form-group col-lg-4">
      <label>No of Persons</label>
      <input type="number" name="num" class="form-control">
    </div>
    <div class="form-group col-lg-4">
      <label>Phone:</label>
      <input type="tel" name="phone" placeholder="Phone" id="phone" class="form-control">
    </div>
    <div class="form-group col-lg-4">
      <label>Date:</label>
      <input type="date" name="date" placeholder="MM/DD/YYYY" id="date" class="form-control">
    </div>
    <div class="form-group col-lg-4">
      <label>Time:</label>
      <input type="time" name="time" placeholder="HH:MM" id="time" class="form-control">
    </div>
    <div class="text-center col-lg-12">
      <input type="submit" name="submit" value="Register Your table" class="btn btn-danger btn-lg">
    </div>
    <div class="col-lg-12">
      <br>
    </div>
  </form>

</div>

<div class="col-lg-12">
  <br><br>
</div>
<?php
include 'footer.php';
?>

</body>
</html>