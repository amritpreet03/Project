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
include 'connect.php';

?>





<div class=" col-lg-10" style="background: rgb(255,255,255,.8); border-radius: 10px; padding: 15px;">


  <table class="table">
    <tr class="alert alert-success">
      <td>Sno</td>
      <td>Name</td>
      <td>Email</td>
      <td>Number of Persons</td>
      <td>Contact</td>
      <td>Date</td>
      <td>Time</td>
    </tr>
<?php
$sr=1;
$fet=$conn->query("SELECT * FROM reservation");
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


</body>
</html>