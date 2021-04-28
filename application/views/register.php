<?php

/**
 * created by : rishabh chauhan 
 * submited to :codeacious
 * date:27/4/2021
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

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
        <li><a href="<?php echo base_url(); ?>index.php/user/profile">Profile</a></li>
        <a href="<?php echo base_url(); ?>index.php/auth/login"><button type="button" class="btn btn-default navbar-btn">Login</button></a>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <div class="col-lg-8 col-lg-offset-2">
    <br>
    <br>
    <h1>Register page</h1>
    <br>
    <br>
    <?php if (isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
    <?php
    }?>

    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <form class="" method="POST">
      <div class="form-group">
         <label for="Name">Name</label>
         <input class="form-control" name="name" id="name" type="text">
      </div>
      <div class="form-group">
         <label for="email">Email</label>
         <input class="form-control" name="email" id="email" type="email">
      </div>
      <div class="form-group">
         <label for="phone">Phone</label>
         <input class="form-control" name="phone" id="phone" type="number">
      </div>
      <div class="form-group">
         <label for="address">Address</label>
         <input class="form-control" name="address" id="address" type="text">
      </div>
      <div class="form-group">
         <label for="city">City</label>
         <input class="form-control" name="city" id="city" type="text">
      </div>
      <div class="form-group">
         <label for="State">State</label>
         <input class="form-control" name="state" id="state" type="text">
      </div>
      <div class="form-group">
         <label for="country">Country</label>
         <input class="form-control" name="country" id="country" type="text">
      </div>
      <div class="form-group">
         <label for="zip">Zip</label>
         <input class="form-control" name="zip" id="zip" type="text">
      </div>
      <div class="form-group">
         <label for="password">Password</label>
         <input class="form-control" name="password" id="password" type="password">
      </div>
      <br>
      <div >
        <button class="btn btn-primary" name="register">Regiater</button>
      </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>