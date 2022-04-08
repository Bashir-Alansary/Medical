<?php if (isset($error_message) && $error_message != "") {?>
    <div class="message message-error">
      <h2><?php echo $error_message; ?></h2>
    </div>
  <?php } ?>


  <?php if (isset($success_message) && $success_message != "") {?>
    <div class="message message-success">
      <h2><?php echo $success_message; ?></h2>
    </div>
  <?php } ?>
