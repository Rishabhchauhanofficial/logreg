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
    
    <div class="col-lg-5 col-lg-offset-2">
    <br>
    <br>
    <h1>Profile page</h1>
    
    <br>
    <br>

    <?php if (isset($_SESSION['error'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['error'];?></div>
    <?php
    }?>
<br>
<div class="container">
    <h1>Hello <?php echo $_SESSION['name'];?> !! </h1>
<div class="container-2">
<h3>Your Profile Information</h3>
    <h3>Your Email Id is <?php echo $_SESSION['email'];?></h3>
    <h3>Your Phone Number is  <?php echo $_SESSION['phone'];?></h3>
    <h3>Your Address Is <?php echo $_SESSION['address'];?></h3>
       <h3>,<?php echo $_SESSION['city'];?></h3>
       <h3>,<?php echo $_SESSION['state'];?></h3>
       <h3>,<?php echo $_SESSION['country'];?></h3>
       <h3>,<?php echo $_SESSION['zip'];?></h3>
    </div>
    </div>
    <br>
    <br>
    <a href="<?php echo base_url(); ?>index.php/auth/logout">Logout</a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>