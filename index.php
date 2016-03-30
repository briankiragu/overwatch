<?php
session_start();
?>
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
        <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>"
         method="get">
          <div class="form-group input-append">
            <input type="text" name="query" class="form-control" id="searchValue" placeholder="Search an estate" />
          </div>
          <div class="form-group">
           <select class="form-control" name="parameter">
            <option value="" selected disabled>Search by</option>
            <option value="name">Name</option>
            <option value="location">Location</option>
          </select>
          </div>
          <button type="submit" name="submit" class="btn btn-default">Search</button>
        </form>
	  </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
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

<?php
require_once 'php/connect/connect.inc.php';

if (isset($_GET['submit'])) {
	$query = $_GET['query'];
	$parameter = $_GET['parameter'];

	if ($parameter === 'name') {
		$estate_query = "SELECT * FROM `estates` WHERE `name_of_estate` = '".$query."'";

	} else if ($parameter === 'location') {
		$estate_query = "SELECT * FROM `estates` WHERE `location_of_estate` = '".$query."'";

	} else {
		echo 'No option selected';
	}

	$result = $conn->prepare($estate_query);
	$result->execute();
	$count = $result->rowCount();
    $estate = $result->fetch(PDO::FETCH_ASSOC);

	echo '<div class="col-md-4 col-md-offset-4" id="searchReview">
            <form class="form-inline" action="'.$_SERVER['PHP_SELF'].'"
             method="get">
              <div class="form-group input-append">
                <input type="text" name="query" class="form-control" id="searchValue" placeholder="Search an estate" />
              </div>
              <div class="form-group">
               <select class="form-control" name="parameter">
                <option value="" selected disabled>Search by</option>
                <option value="name">Name</option>
                <option value="location">Location</option>
              </select>
              </div>
              <button type="submit" name="submit" class="btn btn-default">Search</button>
            </form>
          </div>';

    echo '<div data-ng-repeat="x in estates" data-ng-show="show_estates">';
	while ($count > 0) {
        echo '<div class="col-sm-12 well">
                <div class="row">
                  <div class="col-md-3">
                    <img src="img/thumbnails/photo-1438978280647-f359d95ebda4.jpg" alt="Thumbnail" class="img-responsive" />
                  </div>
                  <div class="col-md-7">
                    <h2>{{ x.name_of_estate }} <small>{{ x.location_of_estate }}</small></h2>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deleniti distinctio similique dolore, blanditiis officiis ea temporibus, facere aperiam sunt, magni perspiciatis sit architecto dolor optio dolores quo pariatur ut.
                    </p>
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{ x.estate_ID }}" aria-expanded="false" aria-controls="{{ x.estate_ID }}">
                      Reviews
                    </button>
                  </div>

              <!--    Container for ratings-->
                  <div class="col-md-2">
                    <h3>Rating</h3>
                    <div class="stars">
                      <span class="glyphicon glyphicon-star"></span>
                    </div>
                  </div>

              <!--    Review collapse bar-->
                  <div class="col-sm-12 collapse" id="{{ x.estate_ID }}" data-ng-repeat="r in reviews">
                    <div>{{ r.content }}</div>
                    <span class="divider"></span>
                  </div>
                </div>
              </div>';
        $count--;
	}
    echo '</div>';
}
?>
