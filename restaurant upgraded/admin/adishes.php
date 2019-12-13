<?php
session_start();
include 'connect.php';
if (isset($_POST['submit']))
 {
  $dishnme=$_POST['dishnme'];
  $dishcat=$_POST['dishcat'];
   $descr=$_POST['descr'];
    $pri=$_POST['pri'];
     $sc=$_POST['sc'];
    $file = addslashes(file_get_contents($_FILES["img"]["tmp_name"]));  
    $query =$conn->query("INSERT INTO `dishesf`(`dish_name`, `dish_category`, `description`, `price`,`image`,`shipping_charges` ) VALUES ('$dishnme','$dishcat', '$descr','$pri', '$file' ,'$sc')");
  //   if ($query) {
  //   echo "<script>  alert ('added'); window.location.href='adishes.php';</script>";
  // }
  //  else
  //  {
  //   echo "<script>  alert ('not added'); window.location.href='adishes.php';</script>";
  // } 
}
?>
<html>
<head>
<title></title>
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
	<div class="col-lg-3" style="background: rgb(255,255,255,.8); padding: 15px; border-radius: 10px;">
		<form action=""class="ab" method="post" enctype="multipart/form-data">
       <div class="form-group">
      <center><label for="dishnme"><b>Dish Name</b></label></center>
      <input type="text" placeholder="Enter dish" name="dishnme" required class="form-control">
    </div>
    <div class="form-group">
      <center><label for="dishcat"><b>Dish Category</b></label></center>
      <select name="dishcat" class="form-control">
        <?php
          $ft=$conn->query("SELECT * from category order by id asc ");
          while ($ftt=mysqli_fetch_array($ft)) {
        ?>
        <option value="<?php echo $ftt['id']; ?>"><?php echo $ftt['category']; ?></option>
        <?php
        }
        ?>
      </select>
    </div>
    <div class="form-group">
      <center><label for="descr"><b>description</b></label></center>
      <input type="text" placeholder="Enter description" name="descr" required class="form-control">
    </div>
    <div class="form-group">
      <center><label for="pri"><b>price</b></label></center>
      <input type="text"  name="pri" required class="form-control">
    </div>
    <div class="form-group">
      <center><label for="img"><b>Image</b></label></center>
      <input type="file"  name="img" required class="form-control">
    </div>
     <div class="form-group">
      <center><label for="sc"><b>shipping Charges</b></label></center>
      <input type="text"  name="sc" required class="form-control">
    </div>
     <div class="col-lg-6 col-lg-offset-3">
     <input type="submit" class="btn btn-default form-control" name="submit" value="submit">
   </div>
  </form>
  </div>
     <div class="col-lg-7">
      <div class="col-lg-10 col-lg-offset-1" style="background: rgb(255,255,255,.8); border-radius: 10px;">
      <table class="table">
        <tr>
          <td>serial no</td>
          <td>Dish name</td>
          <td>Dish Price</td>
          <td>edit</td>
          <td>delete</td>
      </tr>

<?php
$sr="1";
$ft=$conn->query("SELECT * from dishesf order by id asc ");
while ($ftt=mysqli_fetch_array($ft)) {

 ?>
<tr>
  <td><?php echo $sr; ?></td>
  <td><?php echo $ftt['dish_name']; ?></td>

  <td><?php echo $ftt['price']; ?></td>

  <td><a href="#" data-toggle="modal" data-target="#ab<?php echo $ftt['id']; ?>" class="btn btn-success">edit</a></td>
  <td><a href="dish_del.php?id=<?php echo $ftt['id'];?>"   class="btn btn-danger">delete</a></td>
  <div class="modal fade" id="ab<?php echo $ftt['id']; ?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">x</button>
        </div>
        <div class="modal-body">
  <form action="dish_edit.php" method="post">


<form action="dish_edit.php" class="ab" method="post" enctype="multipart/form-data">
       <div class="form-group">
      <center><label for="dishnme"><b>Dish Name</b></label></center>
      <input type="hidden" name="id" value="<?php echo $ftt['id'] ?>">
      <input type="text" placeholder="Enter dish" name="dishnme" required class="form-control" value="<?php echo $ftt['dish_name']; ?>">
    </div>
    <div class="form-group">
      <center><label for="dishcat"><b>Dish Category</b></label></center>
      <input type="text" placeholder="Enter Category" name="dishcat" required class="form-control" value="<?php echo $ftt['dish_category']; ?>">
    </div>
    <div class="form-group">
      <center><label for="descr"><b>description</b></label></center>
      <input type="text" placeholder="Enter description" name="descr" required class="form-control" value="<?php echo $ftt['description']; ?>">
    </div>
    <div class="form-group">
      <center><label for="pri"><b>price</b></label></center>
      <input type="text"  name="pri" required class="form-control" value="<?php echo $ftt['price']; ?>">
    </div>
     <div class="form-group">
      <center><label for="sc"><b>shipping Charges</b></label></center>
      <input type="text"  name="sc" required class="form-control" value="<?php echo $ftt['shipping_charges'];  ?>">
    </div>
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
    </form>
       <div class=" col-lg-3">
      <form action="" class="ab" method="post">
     
  </form>
</body>
</html>