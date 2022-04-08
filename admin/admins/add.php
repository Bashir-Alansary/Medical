<?php require_once"../../config.php";?>
<?php require_once BLA . "inc/header.php"; ?>
<?php require_once BL . "functions/validate.php"; ?>

<?php

	if(isset($_POST['submit'])) {
		$name     = $_POST['name'];
		$email    = $_POST['email'];
		$password = $_POST['password'];

		if (checkEmpty($name) && checkEmpty($email) && checkEmpty($password)) {
			if (validEmail($email)) {

				$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
				$sql = "INSERT INTO admins (admin_name, admin_email, admin_password)
						VALUES ('$name', '$email', '$hashedPassword')";
				$success_message = db_insert($sql);

			} else {
				$error_message = "please type correct email";
		}
		} else {
			$error_message = "please fill all fileds";

		}
		require_once BL . "functions/messages.php";
	}
?>

<div class="header add-admin">
    <div class="container">
      <h2>Add new admin</h2>
      <div class="content">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-content">
              <input type="text" name="name" placeholder="Type your name">
            </div>
            <div class="input-content">
              <input type="email" name="email" placeholder="Type your email">
            </div>
            <div class="input-content">
              <input type="password" name="password" placeholder="Type your password">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="save">
            </div>
        </form>
      </div>
    </div>
  </div>
<?php require_once BLA . "inc/footer.php"; ?>