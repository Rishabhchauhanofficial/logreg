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
    
    <div class="col-lg-5 col-lg-offset-2">
    <br>
    <br>
    <h1>Login page</h1>
    <p>Fill the details for login to this website</p>
    <br>
    <br>
    <?php if (isset($_SESSION['fail'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['fail'];?></div>
    <?php
    }?>

    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
    <form class="" method="POST">
      <div class="form-group">
         <label for="email">Email</label>
         <input class="form-control" name="email" id="email" type="email">
      </div>
      <div class="form-group">
         <label for="password">Password</label>
         <input class="form-control" name="password" id="password" type="password">
      </div>
      <br>
      <div >
        <button class="btn btn-primary" name="login">Login</button>
      </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>