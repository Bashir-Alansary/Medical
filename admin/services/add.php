<?php require '../../config.php';  ?>

<?php require BLA.'inc/header.php';  ?>
<?php require BL.'functions/validate.php';  ?>


    <?php 

        if(isset($_POST['submit']))
        {
            $name = sanitizeString($_POST['name']);
            $notEmpty = checkEmpty($name);
          
            if($notEmpty)
            {
                $less = checkLess($name,3);
                if($less)
                {
                    $sql = "INSERT INTO services (`serv_name`) VALUES ('$name') ";
                    $success_message = db_insert($sql);
                }
                else 
                {
                    $error_message = "Please Type Correct Service";
                }
            }
            else 
            {
                $error_message = "Please Type Service Name";
            }

            require BL.'functions/messages.php';
        }


    ?>


    <div class="header add-admin add">
    <div class="container">
        <?php require_once BL . "functions/messages.php"; ?>
      <h2>Add New Service</h2>
      <div class="content">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-content">
              <input type="text" name="name" placeholder="Type a new service">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="Add">
            </div>
        </form>
      </div>
    </div>
  </div>


<?php require BLA.'inc/footer.php';  ?>
