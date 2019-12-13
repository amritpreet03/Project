<?php
session_start();
$email= $_SESSION['user'];

include 'connect.php';

$fch=$conn->query("SELECT * FROM register WHERE email='$email'");
$fchh=mysqli_fetch_array($fch);
$id=$fchh['id'];

$or=$conn->query("SELECT * FROM orders WHERE uid='$id'");


if (isset($_POST['submit'])) {
  $id=$_POST['id'];
  $stars=$_POST['stars'];
  $review=$_POST['review'];
  $upd=$conn->query("UPDATE orders SET report='$review' ,stars='$stars' WHERE id='$id'");
  if ($upd) {
    echo "<script>alert('Thanks for your Review'); window.location.href='itable.php';</script>";
  }else
  {
    echo "<script>alert('Sorry. Connection Problem Try again'); window.location.href='itable.php';</script>";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="angular.min.js"></script>

<style type="text/css">
  ::-webkit-scrollbar {
  width: 7px;
}


/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

</style>

</head>
 <body style="background-image: url('img/1.jpg'); background-size: 100%; background-attachment: fixed;" ng-app="">
  <?php
include 'header.php';
  ?>
  <br>
<div class="col-lg-8">
  <div class="col-lg-10 col-lg-offset-1" style="background-color: white; height: 500px; overflow-y: scroll;">
    <br>
  <table class="table alert">
    <tr class="alert-danger alert" style="font-weight: bold;">
      <td>#</td>
      <td>Image</td>
      <td>ProductName</td>
      <td>Price</td>
      <td>ShippingCharges</td>
      <td>GrandTotal</td>
      <!-- <td>PaymentMethod</td> -->
      <td>Status</td>
      <td>Review</td>
    </tr>



<?php
$sr=1;
while($orr=mysqli_fetch_array($or))
{
$id=$orr['id'];
$uid=$orr['uid'];
$pid=$orr['pid'];
$aid=$orr['aid'];
$type=$orr['payment_type'];
$dt=$orr['booking_date'];

$uidd=$conn->query("SELECT * FROM register WHERE id='$uid'");
while ($udd=mysqli_fetch_array($uidd)) {

$pidd=$conn->query("SELECT * FROM dishesf WHERE id='$pid'");
while ($pdd=mysqli_fetch_array($pidd)) {

$aidd=$conn->query("SELECT * FROM address WHERE id='$aid'");
while ($add=mysqli_fetch_array($aidd)) {


?>
<tr style="text-transform: capitalize;">
<td><?php echo $sr; ?></td>
  <td><?php         echo '<img src="data:image/jpeg;base64,'.base64_encode($pdd['image'] ).'" width="60px" " height="60px" class="img-thumnail class="round" />';
 ?></td>
  <td><?php echo $pdd['dish_name']; ?></td>
  <td><?php echo $pdd['price']." x ".$orr['pcount']; ?></td>
  <td><?php echo $sp=$pdd['shipping_charges']; ?></td>
  <td><?php echo ($pdd['price']*$orr['pcount'])+$sp ?></td>
  <!-- <td><?php echo $dt; ?></td> -->
  <td>
    <?php
      if ($orr['status']=="0") {
        echo "Pending";
      }elseif($orr['status']=="1")
      {
        echo "Approved and on the way";
      }else
      {
        echo "Delivered";
      }

    ?>
  </td>
  <td>
    <?php
      if ($orr['status']=="2"&&$orr['stars']==null) {
        ?>
        <a href="" data-toggle="modal" data-target="#id<?php echo $orr['id']; ?>" class="btn btn-danger">Feedback</a>
        <?php
      }elseif($orr['status']=="2"&&$orr['stars']!=null)
      {
        $st=$orr['stars'];
        echo $st."<span class='glyphicon glyphicon-star'></span>";
      }
    ?>
  </td>
</tr>
<div class="modal fade" id="id<?php echo $orr['id']; ?>" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">x</button>
        <p class="modal-title">Feedback</p>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post" name="formrev">
          <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $orr['id']; ?>">
            <input type="range" name="stars" min="0" max="5" ng-model="value">
            <label><span class="glyphicon glyphicon-star"></span>{{value}}</label>
          </div>
          <div class="form-group">
            <label>Feedback</label>
            <textarea class="form-control" name="review"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Feedback" class="btn btn-danger">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  
angular.module('rangeExample', [])
    .controller('ExampleController', ['$scope', function($scope) {
      $scope.value = 75;
      $scope.min = 10;
      $scope.max = 90;
    }]);




</script>



<?php






}

}

}
$sr++; 
}


?>




  </table>
</div>



<div class="col-lg-12">
  <br><br>
</div>



  <div class="col-lg-10 col-lg-offset-1" style="background-color: white; height: 500px; overflow-y: scroll;">
  <table class="table">
    <tr>
      <td>Sno</td>
      <td>Name</td>
      <td>Email</td>
      <td>Number of Persons</td>
      <td>Contact</td>
      <td>Date</td>
      <td>Time</td>
    </tr>
<?php
$id=$fchh['id'];
$sr=1;
$fet=$conn->query("SELECT * FROM reservation WHERE uid='$id'");
while ($fett=mysqli_fetch_array($fet)) {
  ?>
  <tr>
    <td><?php echo $sr; ?></td>
    <td><?php echo $fett['name']; ?></td>
    <td><?php echo $fett['email']; ?></td>
    <td><?php echo $fett['num']; ?></td>
    <td><?php echo $fett['phone']; ?></td>
    <td><?php echo $fett['date']; ?></td>
    <td><?php echo $fett['time']; ?></td>
  </tr>

  <?php
  $sr++;
}


?>
  </table>



</div>



</div>


<?php

include 'side.php';

?>



 </body>
</head>
</html>