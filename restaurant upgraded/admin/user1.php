<html>
<head>
<title>user</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>
label
{
  font-size: 20px;
}
</style>
<body>
  <?php
  include 'menu1.php';
  ?>
  
<div class="col-lg-10" style="background: rgb(255,255,255,.8); border-radius: 10px;">
<table class="table">
  <tr>
    <td>Sno</td>
    <td>Name</td>
    <td>Email</td>
    <td>Contact</td>
    <td>Password</td>
  </tr>

<?php 
include 'connect.php';
$ins=$conn->query("SELECT * FROM register ORDER BY id ASC");
while($inss=mysqli_fetch_array($ins))
{
  ?>
  <tr>
  <td><?php echo $inss['id'];?></td>
   <td><?php echo $inss['name'];?></td>
    <td><?php echo $inss['email'];?></td>
    <td><?php echo $inss['contact'];?></td>
     <td><?php echo $inss['password'];?></td> 
   </tr>
<?php
}
?>
</table>
</div>

</body>
</html>