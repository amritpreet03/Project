<nav class="navbar navbar-default navbar-fixed-top">
<img src="logo.png" class="navbar-brand bb">
  <div class="container-fluid">
    <ul class=" nav navbar-nav navbar-right txt">
      <li><a class="" href="index.php">HOME</a></li>
      <li><a class="" href="about.php">ABOUT</a></li>
      <!-- <li><a class="" href="menu.php">MENU</a></li> -->
      <li><a class="" href="gallery.php">GALLERY</a></li>
      <li><a class="" href="CONTACT.php">CONTACT</a></li>
       <li><a class="" href="reservation.php">RESERVATION</a></li>
       <?php
       if(isset($_SESSION['user']))
       {
        $email = $_SESSION['user'];
        $gttk=$conn->query("SELECT * FROM register WHERE email='$email'");
        $gtttk=mysqli_fetch_array($gttk);
        echo "<li style='text-transform:uppercase;'><a href='myprofile2.php'>".$gtttk['name']."</a></li>";
       ?>
        <li><a class="" href="logout.php">LOGOUT</a></li>
        <?php
      }
      else
      {
        ?>
        <li><a class="" href="login.php">LOGIN</a></li>
      <?php
    }
    ?>
        
      
    </ul> 
  </div>    
</nav>
<div class="col-lg-12" style="height: 57px;">
</div>
<?php

$ft=$conn->query("SELECT * from category order by id asc ");
?>
<nav class="navbar navbar-default">
  <div class="col-lg-12">
  <ul class="nav navbar-nav">
<?php
while ($ftt=mysqli_fetch_array($ft)) {
?>
    <li><a href="menu.php?id=<?php echo $ftt['id']; ?>"><?php echo $ftt['category']; ?></a></li>
    <?php
  }
    ?>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <li><a href="mycart.php" class="btn btn-danger co">
          <span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart (<?php include 'crt.php'; ?>)
        </a>
    </li>
  </ul>
</div>
</nav>
<style type="text/css">
  .co
  {
    color: white !important;
    font-family: Gabriola;
    font-weight: bold;
    font-size: 18px;
  }
  .co:hover
  {
    box-shadow: 0px 0px 6px inset maroon;
    color: maroon !important;
  }
</style>
