<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>


<?php
  
  if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $row = getRow('services', 'serv_id', $_GET['id']);
    if ($row) {

        $serv_id = $row['serv_id'];

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
      <h2>Edit Service</h2>
      <div class="content">
        <form method="POST" action="<?php echo BURLA . 'services/update.php' ?>">
            <div class="input-content">
              <input type="text" name="name" placeholder="Type a new city" value="<?php echo $row['serv_name']?>">
            </div>
            <div class="input-content">
              <input type="hidden" name="serv_id" value="<?php echo $serv_id; ?>">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="Edit">
            </div>
        </form>
      </div>
    </div>
  </div>


<?php require BLA.'inc/footer.php';  ?>
