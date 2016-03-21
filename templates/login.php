<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>OverWatch</title>

    <!--Import Google Icon Font-->
<!--    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->

    <!-- Materialize -->
    <!-- <link rel="stylesheet" href="../css/materialize.min.css" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->

    <!-- Personal CSS -->
    <link rel="stylesheet" href="../css/main.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- AngularJS file -->
    <script src="../js/angular.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script> -->
</head>
<body>
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
        <a class="navbar-brand" href="../index.php">OverWatch</a>
      </div>
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">
    <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
        <label class="sr-only" for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
      </div>
      <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="radio">
            <label>
              <input type="radio" name="status" id="landlord" value="landlord" />
              Landlord
            </label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="status" id="tenant" value="tenant" />
              Tenant
            </label>
          </div>
        </div>
      </div>
      <div class="checkbox">
        <input type="checkbox" id="remember" checked="checked" value="remember" />
        <label for="remember">Remember Me</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>

<?php
require_once '../php/connect/connect.inc.php';

try {
    // Assign variables to data retrieved from user.
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $status = $_POST['status'];
        $pass = md5($password); // To deal with encrypted passwords in database

        if ($status === 'landlord') {
            // To check if the landlord exists
            $query_user = "SELECT * FROM `landlords` WHERE `password`='". $pass. "' AND `email`='". $email. "'";
            $user = $conn->prepare($query_user);
            $user->execute();
            // To check if user exists
            $count = $user->rowCount();

            if ($count > 0) {
                // To return user
                $user_results = $user->fetch(PDO::FETCH_ASSOC);

                // Set session variables
                $_SESSION['id'] = $user_results['landlord_ID'];
                $_SESSION['name'] = $user_results['surname'];
                $_SESSION['status'] = "landlord";
                $_SESSION['avatar'] = $user_results['avatar'];
                $_SESSION['admin'] = $user_results['admin'];

                if ($user_results['admin'] == 'n') {
                    header('location: ../dashboard_ld.php'); // Redirecting To Other Page

                } elseif ($user_results['admin'] == 'y') {
                    header('location: ../dashboard_ld.php'); // Redirecting To Other Page
                }
            } else {
                echo "No user";

            }

        } elseif ($status === 'tenant') {
            // To check if the landlord exists
            $query_user = "SELECT * FROM `tenants` WHERE `password`='". $pass. "' AND `email`='". $email. "'";
            $user = $conn->prepare($query_user);
            $user->execute();
            // To check if user exists
            $count = $user->rowCount();

            if ($count > 0) {
                    // To return user
                    $user_results = $user->fetch(PDO::FETCH_ASSOC);

                    // Set session variables
                    $_SESSION['id'] = $user_results['tenant_ID'];
                    $_SESSION['name'] = $user_results['surname'];
                    $_SESSION['status'] = "tenant";
                    $_SESSION['avatar'] = $user_results['avatar'];
                    $_SESSION['admin'] = $user_results['admin'];

                if ($user_results['admin'] == 'n') {
                        header('location: ../dashboard_tn.php'); // Redirecting To Other Page

                } elseif ($user_results['admin'] == 'y') {
                    header('location: ../dashboard_tn.php'); // Redirecting To Other Page
                }
            } else {
                echo "No user";
            }
        }
    }
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
$conn = null;
?>
