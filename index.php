<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>OverWatch</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Personal CSS -->
  <link rel="stylesheet" href="css/main.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="js/easel.js"></script>
</head>
<body onload="init()" id="index">

  <nav class="navbar navbar-default navbar-fixed-top" id="navigator">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Overwatch</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="btn btn-link" href="templates/login.php" role="button">Login</a></li>
        <li><a class="btn btn-link" href="templates/register.php" role="button">Register</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
<!--
      <div class="hero-container col-sm-12">
        <canvas id="hero"></canvas>
      </div>
-->
      <div class="col-md-4 col-md-offset-4" id="searchReview">
        <form class="form-inline">
          <div class="form-group">
            <input type="text" class="form-control" id="searchValue" placeholder="Search an estate" />
          </div>
          <div class="form-group">
           <select class="form-control">
            <option value="" selected disabled>Search by</option>
            <option value="name">Name</option>
            <option value="location">Location</option>
          </select>
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
	  </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script src="js/jquery.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Include createJS -->
  <script src="js/easel.js"></script>

  <!-- Personal Js -->
  <script src="js/main.js"></script>
</body>
</html>
