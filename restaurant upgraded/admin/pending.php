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
<?php
include 'menu1.php';
?>





<div class=" col-lg-10" style="background: rgb(255,255,255,.8); border-radius: 10px; padding: 15px;">
  <table class="table table-hover">
    <tr style="background: rgb(125,1,1,.5); color: white; font-size: 20px;">
      <td>#</td>
      <td>Image</td>
      <td>Product Name</td>
      <td>Price</td>
      <td>Shipping Charges</td>
      <td>GrandTotal</td>
      <td>Payment Method</td>
      <td>Order Date</td>
      <td>Action</td>
      <td>Review</td>
    </tr>



<?php
include 'connect.php';

$or=$conn->query("SELECT * FROM orders");


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
<tr>
<td></td>
  <td><?php         echo '<img src="data:image/jpeg;base64,'.base64_encode($pdd['image'] ).'" width="100px" " height="100px" class="img-thumnail class="round" />';
 ?></td>
  <td><?php echo $pdd['dish_name']; ?></td>
  <td><?php echo $pr=$pdd['price']." X ".$orr['pcount']; ?></td>
  <td><?php echo $sp=$pdd['shipping_charges']; ?></td>
  <td><?php echo ($pdd['price']*$orr['pcount'])+$sp ?></td>
  <td style="text-transform: uppercase;"><?php echo $type; ?></td>
  <td><?php echo $dt; ?></td>
  <td>

    <?php
      if ($orr['status']=="0") {
      	?>
  	<a href="approve.php?id=<?php echo $orr['id']; ?>" class="btn btn-danger">Approve</a>
      	<?php
      }elseif($orr['status']=="1")
      {
        ?>
    <a href="approve.php?did=<?php echo $orr['id']; ?>" class="btn btn-info">Deliver</a>
    <?php
      }else
      {
        echo "Delivered";
      }
    ?>
</td>
<td style="font-size: 18px;">

    <?php
      if($orr['status']=="2"&&$orr['stars']!=null)
      {
        $st=$orr['stars'];
        echo $st."<span class='glyphicon glyphicon-star'></span>";
      }
    ?>

</td>
</tr>
<?php
}
}
}
}
?>

</table>
</div>


</body>
</html>