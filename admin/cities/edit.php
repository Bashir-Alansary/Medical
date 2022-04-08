<?php require_once"../../config.php";?>
<?php require_once BLA . "inc/header.php"; ?>

<?php
  
  if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $row = getRow('cities', 'city_id', $_GET['id']);
    if ($row) {

        $cityId = $row['city_id'];

    } else {
      header("location:" . BURLA);
    }

  } else {
    header("location:" . BURLA);
  }


?>

<div class="header add-admin add">
    <div class="container">
    	<?php require_once BL . "functions/messages.php"; ?>
      <h2>Edit City</h2>
      <div class="content">
        <form method="POST" action="<?php echo BURLA . 'cities/update.php' ?>">
            <div class="input-content">
              <input type="text" name="city" placeholder="Type a new city" value="<?php echo $row['city_name']?>">
            </div>
            <div class="input-content">
              <input type="hidden" name="cityId" value="<?php echo $cityId; ?>">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="Edit">
            </div>
        </form>
      </div>
    </div>
  </div>

<?php require_once BLA . "inc/footer.php"; ?>