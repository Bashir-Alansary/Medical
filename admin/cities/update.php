<?php require_once"../../config.php";?>
<?php require_once BLA . "inc/header.php"; ?>
<?php require_once BL . "functions/validate.php"; ?>

<?php

    if (isset($_POST['submit'])) {

      $name   = $_POST['city'];
      $cityId = $_POST['cityId'];
      if (checkEmpty($name) && checkLess($name, 3)) {
         $row = getRow('cities', 'city_id', $cityId);
          if ($row) {

            $sql = "UPDATE cities SET `city_name` = '$name' WHERE `city_id` = '$cityId' ";
            $success_message = db_Update($sql);
            header("refresh:1;url=".BURLA."cities");

          } else {
            $error_message = "please type correct data";
          }

        } else {
            $error_message = "please fill the filed";
        }


      require_once BL . "functions/messages.php";
    }
?>

<?php require_once BLA . "inc/footer.php"; ?>