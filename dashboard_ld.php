<?php session_start();
define('GW_UPLOADPATH', 'img/avatars/'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OverWatch Dashboard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Materialize -->
<!--    <link rel="stylesheet" href="css/materialize.min.css" />-->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->

    <!-- Personal CSS -->
    <link rel="stylesheet" href="css/main.css" />

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
          <a class="navbar-brand" href="#">OverWatch</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" data-ng-model="searchBar" />
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="templates/landlord/messages.php">Messages <span class="badge">42</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"
               role="button" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="templates/landlord/profile.php">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                  Edit Profile</a>
                </li><li>
                  <a href="templates/landlord/notifications.php">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                  Notifications</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="php/logout.php">
                  <span class="glyphicon glyphicon glyphicon-off" aria-hidden="true"></span>
                  Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <aside class="side-bar" data-ng-controller="viewController">
      <div class="container-fluid">
        <div class="row">

          <!-- Side bar -->
          <div class="col-xs-12 col-md-3">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                    <?php
                    if ($_SESSION['avatar'] != null) {
                        echo '<img src="'.GW_UPLOADPATH . $_SESSION['avatar'].'" alt="Avatar"
                  class="img-responsive img-circle" height="50" width="50" />';
                    } else {
                        echo '<img src="img/avatars/default.png" alt="Avatar"
                  class="img-responsive img-circle" height="50" width="50" />';
                    }
                    ?>
                </h3>
              </div>
              <div class="panel-body">
                <p><?php echo $_SESSION['name']. ', '. $_SESSION['status']; ?></p>
              </div>
            </div>
            <div class="list-group">
              <button type="button" class="list-group-item" data-ng-click="showEstates()">
                <span class="glyphicon glyphicon-home" aria-hidden="true"> View Estates
              </button>
              <button type="button" class="list-group-item" data-ng-click="showTenants()">
                <span class="glyphicon glyphicon-user" aria-hidden="true"> View Tenants
              </button>
              <button type="button" class="list-group-item" data-ng-click="broadcastUpdate()">
                <span class="glyphicon glyphicon-send" aria-hidden="true"> New Broadcast
              </button>
            </div>
          </div>

          <!-- Main Panel -->
          <div class="col-xs-12 col-md-9 well">

            <!-- Tenants table -->
            <div class="table-responsive">
              <table class="table table-hover" data-ng-show="show_tenants">
                    <?php include_once 'templates/landlord/tenants.php'; ?>
              </table>
            </div>

            <!-- Estates view -->
            <div data-ng-repeat="x in estates" data-ng-show="show_estates">
                <?php include_once 'templates/landlord/estates.php'; ?>
            </div>
            <div data-ng-show="show_estates">
              <div class="col-xs-12 col-md-3 well">
                <div class="row">
<!--
                  <div class="col-xs-12">
                    <img src="img/addEstate.png" alt="Add Estate"
                      class="img-repsonsive addEstate" height="65" />
                  </div>
-->
                  <div class="col-xs-8 col-xs-offset-3 col-lg-offset-2 center">
                    <button id="addEstate" class="btn btn-link" data-ng-click="addEstate(); changeIcon()">
                      <span class="glyphicon glyphicon-{{icon}}" data-ng-model="icon"></span> ADD ESTATE
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Add Estate form -->
            <form enctype="multipart/form-data" class="form-horizontal"
             action="php/addEstate.php" method="post" data-ng-show="addEstateForm">
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="nameOfEstate" class="form-control"
                   placeholder="Name of estate" required autofocus />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="text" name="locationOfEstate" class="form-control"
                   placeholder="Location of estate" required />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <input type="file" id="thumbnail" name="thumbnail" class="form-control" accept="image/*" />
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-10">
                  <button type="submit" name="submit" class="btn btn-default">Add Estate</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </aside>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <script src="js/jquery.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Compiled and minified JavaScript (Materialize) -->
<!--    <script src="js/materialize.min.js"></script>-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->

    <!-- Import AngularJS -->
    <script src="js/angular.min.js"></script>

    <!-- Personal JS -->
    <script src="js/app.js"></script>
    <script src="js/controller.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
