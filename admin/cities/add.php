<?php require_once"../../config.php";?>
<?php require_once BLA . "inc/header.php"; ?>
<?php require_once BL . "functions/validate.php"; ?>

<?php

    if (isset($_POST['submit'])) {

      $name = $_POST['city'];
      if (checkEmpty($name) && checkLess($name, 3)) {
          $sql = "INSERT INTO cities (city_name)
              VALUES ('$name')";
          $success_message = db_insert($sql);

        } else {
            $error_message = "please fill the filed";
        }


      require_once BL . "functions/messages.php";
    }
?>

<div class="header add-admin add">
    <div class="container">
    	<?php require_once BL . "functions/messages.php"; ?>
      <h2>Add New City</h2>
      <div class="content">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-content">
              <input type="text" name="city" placeholder="Type a new city">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="Add">
            </div>
        </form>
      </div>
    </div>
  </div>

<?php require_once BLA . "inc/footer.php"; ?>