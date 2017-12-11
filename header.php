
<?php
    $activePage = basename($_SERVER['PHP_SELF'], ".php");

    echo $activePage
    ?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>URC</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style> 
     
        </style>
      <link rel="stylesheet" href="css/readable.css">
      <link rel="stylesheet" href="css/styles.css">
      <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- <link rel="stylesheet" href="css/styles.css"> -->
    <link rel="stylesheet" href="css/sidebar.css"> 
  </head>
  <body>
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <div id="logo">
              <a href="/" class="navbar-brand"><img style="height:50px; margin-top: -7px; padding-top: 0;" src="img/new/edited/logo3.png" alt="URC"></a>
            </div>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav navbar-right ">
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>">
             <a href="index.php">Home</a>
            </li> 
            <li class="<?= ($activePage == 'experience') ? 'active':''; ?>">
              <a href="experience.php">Our Experience</a>
            </li>
            <li class="<?= ($activePage == 'services') ? 'active':''; ?>">
              <a href="services.php">Our Services</a>
            </li>
            <li class="<?= ($activePage == 'contact') ? 'active':''; ?>">
              <a  href="contact.php">Contact Us</a>
            </li>
          </ul> 
      </div>
    </div> 
  </div>

  <?php 
    $url = $_SERVER['PHP_SELF'];
    echo $url."SDKF";
    
  ?>