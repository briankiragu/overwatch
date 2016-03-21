<?php session_start();
define('GW_UPLOADPATH', 'img/avatars/'); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OverWatch Dashboard</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Materialize -->
<!--    <link rel="stylesheet" href="css/materialize.min.css" />-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->

    <!-- Personal CSS -->
    <link rel="stylesheet" href="../../css/main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body data-ng-app="overwatch">

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed"
           data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?php
            if ($_SESSION['admin'] === 'y') {
                echo '<a class="navbar-brand" href="../../dashboard_ld.php">OverWatch</a>';
            } else {
                echo '<a class="navbar-brand" href="../../dashboard_ld.php">OverWatch</a>';
            }
            ?>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
               role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="profile.php">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                  Edit Profile</a>
                </li><li>
                  <a href="notifications.php">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  Notifications</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="../../php/logout.php">
                  <span class="glyphicon glyphicon glyphicon-off" aria-hidden="true"></span>
                  Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="../../js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Compiled and minified JavaScript (Materialize) -->
<!--    <script src="../../js/materialize.min.js"></script>-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->

    <!-- Import AngularJS -->
    <script src="../../js/angular.min.js"></script>

    <!-- Personal JS -->
    <script src="../../js/app.js"></script>
    <script src="../../js/controller.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>
