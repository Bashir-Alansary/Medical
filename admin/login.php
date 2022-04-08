<?php require_once"../config.php";?>
<?php require_once BL . "functions/validate.php"; ?>
<?php
  
  if (isset($_SESSION['admin_name'])) {

  header("location:" . BURLA . "login.php"); 

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.css" >
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/medical.css?v=<?php echo time(); ?>">
</head>
<body>

	<?php

		if (isset($_POST['submit'])) {

			$email    = $_POST['email'];
			$password = $_POST['password'];

			if (checkEmpty($email) && checkEmpty($password)) {
				if (validEmail($email)) {

					$check = getRow('admins', 'admin_email', $email);
					$checkPassword = password_verify($password, $check['admin_password']);

					if ($checkPassword) {

						$_SESSION['admin_name'] = $check['admin_name'];
						$_SESSION['admin_email'] = $check['admin_email'];
						$_SESSION['admin_id'] = $check['admin_id'];

						header("location:" . BURLA . "index.php");

					} else {
						$error_message = "data not correct";
					} 

				} else {
					$error_message = "please type correct email";
				}

			} else {
				$error_message = "please fill all fileds";
			}

		}

	?>

	<div class="header add-admin login">
    <div class="container">
    	<?php require_once BL . "functions/messages.php"; ?>
      <h2>Login</h2>
      <div class="content">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-content">
              <input type="email" name="email" placeholder="Type your email">
            </div>
            <div class="input-content">
              <input type="password" name="password" placeholder="Type your password">
            </div>
            <div class="input-content">
              <input type="submit" name="submit" value="send">
            </div>
        </form>
      </div>
    </div>
  </div>
  <script src="<?php echo ASSETS; ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo ASSETS; ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo ASSETS; ?>/js/medical.js"></script>
</body>
</html>