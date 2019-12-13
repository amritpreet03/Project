<?php
session_start();

if (isset($_SESSION['user'])) {
$email= $_SESSION['user'];


include 'connect.php';
$fch=$conn->query("SELECT * FROM register WHERE email='$email'");
$fchh=mysqli_fetch_array($fch);
$id=$fchh['id'];


?>

<!DOCTYPE html>
<html>
<head>
 <title>HOME page</title>
 <style>
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
    html,body
    {
        height: 100%;
    }
    body
    {
        width: 100%;
    }
  .card11
  {
   margin-top: 2px;
   height: 400px;
   overflow-y: scroll;
  }
  .card111
  {
    margin-top: 5px;
    height: 50px;
  }
  .card2
  {
    height: auto;
  }
  

 	</style>
 	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
 </head>
 <body style="background-image: url('img/4.jpg'); background-size: 100%;">
    <?php
    include 'header.php';
    ?>
    <style type="text/css">
    	.bb
    	{
    		height: 80px;
    		position: absolute;
    		margin-top: -10px;
    	}
    </style>
 	<div class="col-lg-12" style="height: 20px;">
 	</div>



<div class="container">


 	<div class="col-lg-8 card" style="">
 		<div class="col-lg-12 card1" style="background-color: white;">
 			<div class="col-lg-3" style="margin-top: 10px;">
	 			<h3>My Cart</h3>
	 		</div>

<div class="col-lg-2 col-lg-offset-1" style="margin-top: 35px;">
<a href="index.php" class="alert alert-success">
	Home
</a>
</div>
<div class="col-lg-3" style="margin-top: 35px;">
<a href="myprofile2.php" class="alert alert-warning">My Profile</a>
</div>


 			<div class="col-lg-3 dropdown">
 				<br>
 				<div class="alert alert-danger" data-toggle="dropdown" style="cursor:pointer;">
 					<center>Select Address</center>
 				</div>
 				<ul class="dropdown-menu list-group" style="position: absolute; margin-top: -20px; margin-left: 7px;">
 					<?php
 						$ad=$conn->query("SELECT * FROM address WHERE uid='$id'");
 						while($aad=mysqli_fetch_array($ad)) {
 					?>
 					<li><a href="ses.php?id=<?php echo $aad['id']; ?>"><?php echo $aad['address']; ?> Choose</a></li>
 					<?php
					}
 					?>
 					<li class="list-group-item" style="cursor: crosshair;"><a href="" data-toggle="modal" data-target="#ab">Add address</a></li>
 				</ul>
 			</div>

	 		<div class="col-lg-12">
	 			<?php
	 				if (isset($_SESSION['address'])) {
	 					$sadd=$_SESSION['address'];
 						$ad=$conn->query("SELECT * FROM address WHERE id='$sadd'");
 						while($aad=mysqli_fetch_array($ad)) {
	 					?>
	 					<div class="alert alert-success" style="padding-bottom: 30px;">
	 						<div class="col-lg-6">
	 						<?php echo "Address- ".$aad['address']; ?>
		 					</div>
	 						<div class="col-lg-3">
	 						<?php echo "City- ".$aad['city']; ?>
		 					</div>
	 						<div class="col-lg-3">
	 						<?php echo "Phone- ".$aad['phone']; ?>
		 					</div>
	 					</div>
	 					<?php
		 				}
	 				}else
	 				{
	 					echo "<div class='alert alert-success'>No Address Selected</div>";
	 				}

	 			?>
	 		</div>


</div>

<?php
if (isset($_POST['address'])) {
	$address=$_POST['add'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$pincode=$_POST['pincode'];
	$uid=$fchh['id'];
	$ins=$conn->query("INSERT INTO address (address,state,city,phone,pincode,uid) VALUES ('$address','$state','$city','$phone','$pincode','$uid')");

	if ($ins) {
		echo "<script>alert('Added');window.location.href='mycart.php';</script>";
	}else
	{
		echo "<script>alert('Not Added');window.location.href='mycart.php';</script>";
	}
}


?>
<div class="modal fade" id="ab" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">x</button>
				<p class="modal-title">Add Address</p>
			</div>
			<div class="modal-body">
				<form accept="" method="post">

			    <div class="form-group">
                <label for="address">Address:</label>
                <input class="form-control" type="text" name="add" id="address">
			    </div> 
      			<div class="form-group">
                <label for="state">State:</label>
                <input class="form-control" type="text" name="state" id="state" value="Punjab" readonly>
				</div>    
    			<div class="form-group">
                <label for="city">City:</label>
                <input class="form-control" type="text" name="city" id="city" value="Ludhiana" readonly>
			    </div>
                <div class="form-group">
                <label for="phone">Contact:</label>
                <input class="form-control" type="tel" name="phone" id="phone">
                </div>
                <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input class="form-control" type="tel" name="pincode" id="pincode">
                </div>
                <div class="text-center">
                <button class="btn btn-danger" type="address" name="address">Address</button>
              	</div>

				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-warning" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>



<div class="col-lg-12 card11" style="background-color: white;">
<?php
$uid=$fchh['id'];
$sum="0";
$sum2="0";

$dish=$conn->query("SELECT * FROM dishesf ORDER BY id ASC");
while($dishes=mysqli_fetch_array($dish))
{
    $id=$dishes['id'];
    $diss=$conn->query("SELECT * FROM cart WHERE pid='$id' && uid='$uid'");
    $discou=mysqli_num_rows($diss);
    $disss=mysqli_fetch_array($diss);
    if ($discou>=1) {
        // echo $dishes['dish_name'];
        // echo $discou;
        // echo '<img src="data:image/jpeg;base64,'.base64_encode($dishes['image'] ).'" width="100%" class="img-thumnail img-rounded img-responsive" />';
?>

<div class="col-lg-12">
    <div class="col-lg-12">
        <br>
    </div>
    <div class="col-lg-3">
        <?php
        echo '<img src="data:image/jpeg;base64,'.base64_encode($dishes['image'] ).'" width="100%" class="img-thumnail img-rounded" />';

        ?>
    </div>
    <div class="col-lg-7">
        <div class="col-lg-12">
            <h3><?php echo $dishes['dish_name']; ?></h3>
            <h4>
 <?php echo $dishes['price']." x ".$discou; 
            $a=$dishes['price']*$discou;
            $GLOBALS['sum'] += $a;
            echo " = ".$a;
            $b=$dishes['shipping_charges'];
            $GLOBALS['sum2'] += $b;

 ?>
            </h4>
        </div>
    </div>
    <div class="col-lg-2">
        <br>
        <a href="remove.php?id=<?php echo $disss['id']; ?>" class="btn btn-danger">Remove</a>
    </div>
    <div class="col-lg-12">
        <br>
    </div>
</div>
<?php
    }
}
?>

</div>
</div>

<div class="col-lg-4 card2" style=" background-color: white;">

<div class="col-lg-12" style="border-bottom: 1px solid grey;">
	<h2>Price Details</h2>
</div>

<style type="text/css">
	.tt
	{
		text-align: right;
	}
	.b
	{
		font-size: 25px;
		height: 60px;
	}
</style>
<div class="col-lg-12" style="border-bottom: 1px solid grey;">
	<table class="table">
		<tr>
<?php
?>			
			<td><h3>Price</h3></td>
			<td class="tt"><h3>Rs.<?php echo $sum; ?></h3></td>
		</tr>
		<tr>
			<td><h3>Delivery</h3></td>
			<td class="tt"><h3><?php echo $sum2; ?></h3></td>
		</tr>
	</table>
</div>

<div class="col-lg-12">
	<table class="table">
		<tr>
			<td><h3>Total Payable</h3></td>
			<td class="tt"><h3>Rs. <?php echo $sum+$sum2; ?></h3></td>
		</tr>
	</table>
</div>

<div class="col-lg-12">

</div>

<div class="col-lg-12">
	<?php
		if (isset($_SESSION['address'])) {
			?>
		<button data-toggle="modal" data-target="#pay" class="btn btn-warning b form-control">Place Order</button>
		<div class="col-lg-12">
		<h4 style="line-height: 20px;"><img src="sec.png" height=30px width=30px;>&nbsp;&nbsp;&nbsp;
		Safe and secure payments. <br>Ease returns 100%
		Authentic products</h4>
		<br>
		</div>

			<?php
		}else
		{
		}

	?>
</div>






</div>


</div>



<?php
}else
{
	echo "<script>alert('Please Login first');window.location.href='login.php';</script>";
}



?>




















<div class="modal fade" id="pay" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<p class="modal-title">Please select your payment</p>
			</div>
			<div class="modal-body">



  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">COD</a></li>
    <li><a data-toggle="tab" href="#menu1">Debit Card</a></li>
    <li><a data-toggle="tab" href="#menu2">Credit Card</a></li>
   
  </ul>

  <div class="tab-content">







    <div id="home" class="tab-pane fade in active">
     <br>

<ul class="nav nav-pills nav-stacked">
                <li class="active alert alert-danger"><span class="badge pull-right">Rs. <?php echo $sum+$sum2; ?> </span> Final Payment
                </li>
            </ul>

            <form action="payment.php" method="post">
 <input type="hidden" name="aid" value="<?php echo $_SESSION['address']; ?>">
 <input type="hidden" name="payment" value="cod">

<?php
$id=$fchh['id'];


$pro=$conn->query("SELECT * FROM dishesf");
while ($proo=mysqli_fetch_array($pro)) {
$pid=$proo['id'];
$can=$conn->query("SELECT * FROM cart WHERE uid='$id' && pid='$pid'");
$cand=mysqli_num_rows($can);
$cann=mysqli_fetch_array($can);
if ($cand>=1) {
	// echo $cann['uid'];
	// echo $cann['pid'];
	?>

 <input type="hidden" name="id[]" value="<?php echo $cann['id']; ?>">

 <input type="hidden" name="uid[]" value="<?php echo $id; ?>">
 <input type="hidden" name="pid[]" value="<?php echo $cann['pid']; ?>">
 <input type="hidden" name="count[]" value="<?php echo $cand; ?>">
 <br>
	<?php

}



}

// while($cann=mysqli_fetch_array($can))
// {
// ?>
<!-- // <input type="hidden" name="id[]" value="<?php echo $cann['id']; ?>">
// <input type="hidden" name="uid[]" value="<?php echo $id; ?>">
// <input type="hidden" name="aid[]" value="<?php echo $_SESSION['address']; ?>">
// <input type="hidden" name="pid[]" value="<?php echo $cann['pid']; ?>">
// <input type="hidden" name="payment[]" value="cod"> -->
 <?php
// }
?>


            <input type="submit" name="cod" value="payment" class="btn btn-warning btn-lg btn-block">
        </form>

    </div>







    <div id="menu1" class="tab-pane fade">

                    <h3 class="">
                        Payment Details
                    </h3>

                <div class="panel-body">
                    <form action="payment2.php" method="post">
 <input type="hidden" name="aid" value="<?php echo $_SESSION['address']; ?>">
 <input type="hidden" name="payment" value="cod">

<?php
$id=$fchh['id'];


$pro=$conn->query("SELECT * FROM dishesf");
while ($proo=mysqli_fetch_array($pro)) {
$pid=$proo['id'];
$can=$conn->query("SELECT * FROM cart WHERE uid='$id' && pid='$pid'");
$cand=mysqli_num_rows($can);
$cann=mysqli_fetch_array($can);
if ($cand>=1) {
	// echo $cann['uid'];
	// echo $cann['pid'];
	?>

 <input type="hidden" name="id[]" value="<?php echo $cann['id']; ?>">

 <input type="hidden" name="uid[]" value="<?php echo $id; ?>">
 <input type="hidden" name="pid[]" value="<?php echo $cann['pid']; ?>">
 <input type="hidden" name="count[]" value="<?php echo $cand; ?>">
 <br>
	<?php

}



}




?>

                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label class="col-lg-12" for="expityMonth">
                                    EXPIRY DATE</label>

                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" name="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" name="expityYear" placeholder="YY" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CVV CODE</label>
                                <input type="password" class="form-control" id="cvCode" name="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active alert-danger alert"><span class="badge pull-right"> Rs. <?php echo $sum+$sum2; ?> </span> Final Payment
                </li>
            </ul>
            <input type="submit" name="payment" value="payment" class="btn btn-success btn-lg btn-block">
        </form>
</div>


    </div>








    <div id="menu2" class="tab-pane fade">

                    <h3 class="">
                        Payment Details
                    </h3>

                <div class="panel-body">
                    <form role="form" action="payment3.php" method="post">
 <input type="hidden" name="aid" value="<?php echo $_SESSION['address']; ?>">
 <input type="hidden" name="payment" value="cod">

<?php
$id=$fchh['id'];


$pro=$conn->query("SELECT * FROM dishesf");
while ($proo=mysqli_fetch_array($pro)) {
$pid=$proo['id'];
$can=$conn->query("SELECT * FROM cart WHERE uid='$id' && pid='$pid'");
$cand=mysqli_num_rows($can);
$cann=mysqli_fetch_array($can);
if ($cand>=1) {
	// echo $cann['uid'];
	// echo $cann['pid'];
	?>

 <input type="hidden" name="id[]" value="<?php echo $cann['id']; ?>">

 <input type="hidden" name="uid[]" value="<?php echo $id; ?>">
 <input type="hidden" name="pid[]" value="<?php echo $cann['pid']; ?>">
 <input type="hidden" name="count[]" value="<?php echo $cand; ?>">
 <br>
	<?php

}



}



?>

                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label class="col-lg-12" for="expityMonth">
                                    EXPIRY DATE</label>

                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityMonth" name="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro">
                                    <input type="text" class="form-control" id="expityYear" name="expityYear" placeholder="YY" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" class="form-control" id="cvCode" name="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
            <ul class="nav nav-pills nav-stacked">
                <li class="active alert alert-danger"><span class="badge pull-right"> Rs. <?php echo $sum+$sum2; ?> </span> Final Payment
                </li>
            </ul>
            <br/>
            <input type="submit" name="payment" value="payment" class="btn btn-primary btn-lg btn-block">
        </form>
        </div>


    </div>





    </div>
  </div>

			<div class="modal-footer">
				<button class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>


</body>
</html>
