<?php
session_start();
include 'connect.php';
if (isset($_POST['submit'])) {
  $cat=$_POST['uname'];
  $ias=$conn->query("INSERT into category (category) values ('$cat')");
  if ($ias) {
    echo "<script>  alert ('entered'); window.location.href='category.php';</script>";
  } else {
    echo "<script>  alert ('not entered'); window.location.href='category.php';</script>";
  } 
}
?>
<html>
<head>
<title>adservice</title>
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
	<div class="col-lg-3" style="height: 150px; background: rgb(255,255,255,.8); padding: 15px; border-radius: 10px;">
		<form action=""class="ab" method="post">
      <label for="uname"><b>Category Name</b></label><br>
      <input type="text" placeholder="Name of the category" name="uname" required class="form-control">
      <br>
      <div class="col-lg-6 col-lg-offset-3">
     <input type="submit" class="btn btn-default form-control" name="submit" value="submit">
   </div>
  </form>
  </div> 
     <div class="col-lg-5 col-lg-offset-1" style="background: rgb(255,255,255,.8);padding: 10px;">
      <table class="table">
        <tr>
          <td>serial no</td>
          <td>category name</td>
          <td>edit</td>
          <td>delete</td>
      </tr>
<?php
$sr="1";
$ft=$conn->query("SELECT * from category order by id asc ");
while ($ftt=mysqli_fetch_array($ft)) {

 ?>
<tr>
  <td><?php echo $sr; ?></td>
  <td><?php echo $ftt['category']; ?></td>
  <td><a href="#" data-toggle="modal" data-target="#ab<?php echo $ftt['id']; ?>" class="btn btn-success">edit</a></td>
  <td><a href="category_del.php?id=<?php echo $ftt['id'];?>"   class="btn btn-danger">delete</a></td>
  <div class="modal fade" id="ab<?php echo $ftt['id']; ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">

  <form action="category_edit.php" method="post">
      <label for="uname"><b>Category Name</b></label><br>
      <input type="hidden" name="id" value="<?php echo $ftt['id']; ?>">
      <input type="text" placeholder="Name of the category" name="category" value="<?php echo $ftt['category'] ?>" required class="form-control">
      <br>
     <center>
      <input type="submit" class="btn btn-success" name="update" value="update">
     </center>
  </form>

        </div>
        <div class="modal-footer">
          <button data-dismiss="modal" class="btn btn-success">Close</button>
        </div>
      </div>
    </div>
  </div>
</tr>
<?php
$sr++;
}
  ?>



      </table>
      </div>
</body>
</html>