<?php
session_start();
$user=$_SESSION['user'];
include 'connect.php';
if (isset($_REQUEST['id'])) {
  $id=$_REQUEST['id'];
  $ad=$conn->query("DELETE FROM address WHERE id='$id'");
  if ($ad) {
    echo "<script>alert('Deleted');window.location.href='billingad.php';</script>";
   }else
   {
    echo "<script>alert('Not Deleted');window.location.href='billingad.php';</script>";
   }
}
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
		  .card1
		  {
        background-color: white;
        border-top-left-radius: 30px;
        border-top-right-radius: 30px;
		  }

		  .card11
  {
        background-color: white;
   margin-top: 2px;
   border-bottom-right-radius: 30px;
   border-bottom-left-radius: 30px;
   padding-bottom: 20px;
  }
  .card12
  {
    height: 420px;
    /*background-color: grey;*/
    width: 100%;
    overflow-y: scroll;
  }
 	</style>
 	<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/bootstrap.min.js"></script>
 </head>
 <body style="background-image: url('img/1.jpg'); background-size: 100%; background-attachment: fixed;">
<?php
include 'header.php';
?>
<br>
 	<div class="container">


	 	<div class="col-lg-8 card">
	 		<div class="col-lg-12 card1" style="">
	 			<div class="col-lg-12" style="margin-top: 5px; padding: 10px;">
		 			<center><h4><b>Billing Address</b></h4></center>
		 		</div>
		 	</div>
		 <div class="col-lg-12 card11"> 			
		 		<div class="col-lg-4 card111">
		 			<br>


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


<div class="col-lg-8 card12">
  <br>
  <table class="table table-striped table-bordered">
    <tr>
      <td>Address</td>
      <td>PhoneNo</td>
      <td>Pincode</td>
      <td>Delete</td>
    </tr>
  <?php
$fch=$conn->query("SELECT * FROM register WHERE email='$user'");
$fchh=mysqli_fetch_array($fch);
$id=$fchh['id'];

            $ad=$conn->query("SELECT * FROM address WHERE uid='$id'");
            while($aad=mysqli_fetch_array($ad)) {
              ?>
              <tr>
                <td><?php echo $aad['address']; ?></td>
                <td><?php echo $aad['phone']; ?></td>
                <td><?php echo $aad['pincode']; ?></td>
                <td><a href="billingad.php?id=<?php echo $aad['id']; ?>" style="color: maroon; font-weight: bold;" class="alert">X</a></td>
              </tr>

              <?php
            }
  ?>
  </table>
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
    echo "<script>alert('Added');window.location.href='billingad.php';</script>";
  }else
  {
    echo "<script>alert('Not Added');window.location.href='billingad.php';</script>";
  }
}


?>



</div>

<?php

include 'side.php';

?>




 </body>
 </html>
