<?php
  
  if (!isset($_SESSION['admin_name'])) {

  header("location:" . BURLA . "login.php"); 

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/bootstrap.css" >
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo ASSETS; ?>/css/medical.css?v=<?php echo time(); ?>">
</head>
<body class="admin-index">
   <!-- Navbar -->
   <nav class="navbar scrolled navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="logo navbar-brand">
         <img src="<?php echo ASSETS; ?>/images/logo.png" />
        </div>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo BURL.'home.php'; ?>">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cities
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo BURLA . 'cities/add.php'; ?>">Add</a></li>
              <li><a href="<?php echo BURLA . 'cities/index.php'; ?>">View</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo BURLA.'services/add.php' ?>">Add</a></li>
              <li><a href="<?php echo BURLA.'services/index.php' ?>">View</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo BURLA.'orders/index.php' ?>">View</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admins
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo BURLA . 'admins/add.php';?>">Add</a></li>
              <li><a href="<?php echo BURLA.'admins/' ?>">View</a></li>
            </ul>
          </li>
          <li>
            <a href="<?php echo BURLA . 'logout.php';?>">Logout</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>