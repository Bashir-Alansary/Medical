<?php require_once"../config.php";
      require_once BLA . "inc/header.php";
 ?>

 <div class="about admin">
  <h2 class="h-admin"><?php echo "Hi"." ".$_SESSION['admin_name'] ?></h2>
   <div class="service">
      <div class="container">
        <div class="s-box">
          <h2><?php echo count_table('services'); ?></h2>
          <h4>All services</h4>
          <p>Etiam ante antetiomn it molestie vitae cursuac, pharetra euismod libe it is very most like it.</p>
          <a href="<?php echo BURLA.'services/' ?>">view</a>
        </div>
         <div class="s-box">
          <h2><?php echo count_table('cities'); ?></h2>
          <h4>All Cities</h4>
          <p>Etiam ante antetiomn iot molestie vitae cursuacttr, pharetra euismod libe it is very most like it.</p>
          <a href="<?php echo BURLA.'cities/' ?>">view</a>
        </div>
         <div class="s-box">
          <h2><?php echo count_table('orders'); ?></h2>
          <h4>All Orders</h4>
          <p>Etiam ante antetiomn it molestie vitae cursuac, pharetra euismod libe it is very most like it.</p>
          <a href="<?php echo BURLA.'orders/' ?>">view</a>
        </div>
         <div class="s-box">
          <h2><?php echo count_table('orders');?></h2>
          <h4>Today's Orders</h4>
          <p>Etiam ante antetiomn it molestie vitae cursuac, pharetra euismod libe it is very most like it.</p>
          <a href="<?php echo BURLA.'orders/' ?>">view</a>
        </div>
      </div>
    </div>
 </div>


 <?php require_once BLA . "inc/footer.php"; ?>