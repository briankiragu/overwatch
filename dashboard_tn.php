<?php session_start(); ?>
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

  <nav class="navbar navbar-default navbar-fixed-top">
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
        <!-- <ul class="nav navbar-nav">
          <li><a href="#estate">Estate</a></li>
          <li><a href="#landlord">Landlord</a></li>
          <li><a href="#updates">Updates</a></li>
        </ul> -->
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
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit Profile
                </a>
              </li>
              <li>
                <a href="templates/landlord/notifications.php">
                  <span class="glyphicon glyphicon-time" aria-hidden="true"></span>Notifications
                </a>
              </li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="php/logout.php">
                  <span class="glyphicon glyphicon glyphicon-off" aria-hidden="true"></span>Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <main>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-12 col-md-4 tag">
          <div class="panel panel-default">
            <!-- <div class="panel-heading tag-heading well">
              <h3 class="panel-title">Your Estate</h3>
            </div> -->
            <div class="panel-body tag-body">
              <a href="templates/tenant/myestate.php"><img src="img/tags/estates/14_d.png" alt="Estate" class="img-responsive" /></a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 tag">
          <div class="panel panel-default">
            <!-- <div class="panel-heading tag-heading well">
              <h3 class="panel-title">Your Landlord</h3>
            </div> -->
            <div class="panel-body tag-body">
              <a href="templates/tenant/mylandord.php"><img src="img/tags/landlords/landlord4_b.png" alt="Landlord" class="img-responsive" /></a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 tag">
          <div class="panel panel-default">
            <!-- <div class="panel-heading tag-heading well">
              <h3 class="panel-title">Your Updates</h3>
            </div> -->
            <div class="panel-body tag-body">
              <a href="#updates"><img src="img/tags/updates/3_d.png" alt="Updates" class="img-responsive" /></a>
            </div>
          </div>
        </div>

        <section id="updates">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita culpa, quia quos ullam ipsa corporis. Ex at nihil ab quos placeat odio repellendus sint doloribus fugiat. Nisi, obcaecati reiciendis. Nulla.
        </section>

      </div>
    </div>
  </main>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script src="js/jquery.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<!-- Import AngularJS -->
<script src="js/angular.min.js"></script>

<!-- Personal JS -->
<script src="js/app.js"></script>
<script src="js/controller.js"></script>
<script src="js/main.js"></script>
</body>
</html>
