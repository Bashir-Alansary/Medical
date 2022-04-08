<?php  require '../config.php';  ?>
<?php require BL.'functions/validate.php';  ?>


<!DOCTYPE html>
<html>
<head>
  <title>Book Appointment</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/medical.css?v=<?php echo time(); ?>">
</head>
<body class="info-page">

  <?php 
      if (isset($_POST['submit'])) 
      {
          $service = $_POST['service'];
          $city    = $_POST['city'];
          $mobile  = $_POST['mobile'];
          $notes   = sanitizeString($_POST['notes']);
          $name    =  sanitizeString($_POST['name']);
          $email   = sanitizeString($_POST['email']);
          
          if (checkEmpty($mobile) && checkEmpty($name)) 
          {
              
              $sql  = "INSERT INTO orders (`order_name`,`order_email`,`order_mobile`,`order_serv_id`,`order_city_id`,
              `order_notes`)
                  VALUES ('$name','$email','$mobile','$service','$city','$notes')";
               $success_message = db_insert($sql);
          }
          else 
          {
              $error_message = "Please Type Your Name And Your Mobile";
          }

          
          
      }
  ?>


  <!-- Navbar -->
  <div class="navbar scrolled">
    <div class="container">
      <div class="content">
        <div class="logo">
         <img src="<?php echo ASSETS; ?>/images/logo.png" />
        </div>
        <ul class="links">
          <li class="go"><a href="<?php echo BURL.'home.php'; ?>">Home</a></li>
          <li><a href="#">About</a></li>
          <li class="active"><a href="#">Book</a></li>
          <li><a href="#">Make Oredr <i class="fa fa-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Header -->
  <div class="header">
    <div class="container">
      <?php require BL.'functions/messages.php'; ?>
      <h2>Book Appointment</h2>
      <div class="content">
        <form method="POST" action="">
          <div class="f-left">
            <div class="input-content">
                <select name="service">
                  <option>select service</option>
                <?php $data = getRows('services');  $x=1; ?>
                <?php foreach($data as $row){   ?>
                <option value="<?php echo $row['serv_id']; ?>">
                    <?php echo $row['serv_name']; ?>
                </option>
                <?php } ?> 

              </select>
            </div>
            <div class="input-content">
              <select name="city">
                <option>select city</option>
                <?php $dataCity = getRows('cities');  $x=1; ?>
                <?php foreach($dataCity as $row){   ?>
                <option value="<?php echo $row['city_id']; ?>">
                    <?php echo $row['city_name']; ?>
                </option>
                <?php } ?> 

              </select>
            </div>
            <div class="input-content">
              <textarea name="notes" placeholder="Type notes"></textarea>
            </div>
          </div>
          <div class="f-right">
            <div class="input-content">
              <input type="text" name="name" placeholder="Type your name">
            </div>
            <div class="input-content">
              <input type="email" name="email" placeholder="Type your email">
            </div>
            <div class="input-content">
              <input type="text" name="mobile" placeholder="Type your Phone">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="Appointment Now">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <!-- footer -->
  <div class="footer">
    <div class="container">
      <div class="f-logo">
        <img src="<?php echo ASSETS; ?>/images/logo.png">
      </div>
      <div class="info">
        <div class="box">
          <h3>location</h3>
          <p>Nasr City, Cairo</p>
        </div>
        <div class="box">
          <h3>Contact us</h3>
          <p>mediTro@gmail.com</p>
        </div>
        <div class="box">
          <h3>Phone</h3>
          <p>+201030183219</p>
        </div>
      </div>
      <div class="copyright">
        <p>Copyright © 2022 by MediTro</p>
      </div>
    </div>
  </div>

  <script src="<?php echo ASSETS; ?>/js/jquery-3.3.1.min.js?v=<?php echo time(); ?>"></script>
  <script src="<?php echo ASSETS; ?>/js/medical.js?v=<?php echo time(); ?>"></script>
</body>
</html>