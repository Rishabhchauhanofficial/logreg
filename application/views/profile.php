<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */

 /*
//repodirectory_content="status";
//.htaccess
// changes
<file></file>



 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    
      <a class="navbar-brand" href="http://localhost/logreg/index.php">LogRej</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url(); ?>/auth/register">Register</a></li>
        <li><a href="<?php echo base_url(); ?>/auth/login">Login</a></li>
        <a href="<?php echo base_url(); ?>forlogout/logout"><button type="button" class="btn btn-default navbar-btn" href="#">Logout</button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <div class="col-lg-5 col-lg-offset-2">
    <br>
    <br>
    
    <br>
    <br>

    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['error'];?></div>
    <?php
    }?>
    <?php if (isset($_SESSION['errorforlogreg'])) {?>
        <div class="alert alert-danger"><?php echo $_SESSION['errorforlogreg'];?></div>
    <?php
    }?>
<br>
<div class="container">
    <h1>Hello <?php echo $_SESSION['name'];?> !! </h1>
    </div>
   <div class="container-2">
    <h2>Your Profile Information</h2><br>
    <ul class="list-group">
      <li class="list-group-item">Your Email id is :<?php echo $_SESSION['email'];?></li>
      <li class="list-group-item">Your Phone Number is :<?php echo $_SESSION['phone'];?></li>
      <li class="list-group-item">Your Address is :<?php echo $_SESSION['address'];?></li>
      <li class="list-group-item">Your City Name is :<?php echo $_SESSION['city'];?></li>
      <li class="list-group-item">Your State Name is :<?php echo $_SESSION['state'];?></li>
      <li class="list-group-item">Your Zip Code is :<?php echo $_SESSION['zip'];?></li>
      <li class="list-group-item">Your have <?php echo $_SESSION['country'];?>an Citizenship</li>
      
    </ul>
   </div>
    
    
    <br>
    <br>
    <a href="<?php echo base_url(); ?>forlogout/logout">Logout</a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>