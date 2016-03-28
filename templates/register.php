<?php
session_start();
ob_start();
?>
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
<!--    <link rel="stylesheet" href="../css/materialize.min.css" />-->
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
        <a class="navbar-brand" href="../index.php">Overwatch</a>

<!--
        <ul class="breadcrumb navbar-brand" style="background-color: #ffea00; margin: 0">
          <li><a href="../index.php">Overwatch</a> <span class="divider"></span></li>
          <li class="active">Register</li>
        </ul
-->
      </div>
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container-fluid">

    <form enctype="multipart/form-data" class="form-horizontal"
     action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<!--      Field for surname-->
      <div class="form-group">
        <label for="surname" class="col-sm-2 control-label">Surname</label>
        <div class="col-sm-8">
          <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter your surname" required />
        </div>
      </div>

<!--      Field for other name-->
      <div class="form-group">
        <label for="otherName" class="col-sm-2 control-label">Other Name</label>
        <div class="col-sm-8">
          <input type="text" name="otherName" class="form-control" id="otherName" placeholder="Enter your other name" required />
        </div>
      </div>

<!--     Field for email-->
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-8">
          <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required />
        </div>
      </div>

<!--     field for national ID-->
      <div class="form-group">
        <label for="ID" class="col-sm-2 control-label">National ID</label>
        <div class="col-sm-8">
          <input type="number" name="ID" class="form-control" id="ID" placeholder="Enter your national ID" required />
        </div>
      </div>

<!--     Field for password-->
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
          <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required />
        </div>
        <div class="form-group">
          <div class="col-sm-4">
            <input type="password" name="confPassword" class="form-control"
            id="confPassword" placeholder="Confirm password" required />
          </div>
        </div>
      </div>

<!--     Field for avatar -->
      <div class="form-group">
        <label for="avatar" class="col-sm-2 control-label">Avatar</label>
        <div class="col-sm-4">
          <input type="file" class="form-control" name="avatar" accept="image/*" />
        </div>
      </div>

<!--     Field for status -->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="radio">
            <label>
            </label>
              <input type="radio" name="status" id="landlord" value="landlord" />
              Landlord
          </div>
          <div class="radio">
            <label>
            </label>
              <input type="radio" name="status" id="tenant" value="tenant" />
              Tenant
          </div>
        </div>
      </div>

<!--     Submit button -->
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </div>
      </div>
    </form>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->

  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->

  <!-- Compiled and minified JavaScript (Materialize) -->
  <script src="js/materialize.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script> -->

  <!-- Personal JS -->
  <script src="js/app.js"></script>
  <script src="js/controller.js"></script>
  <script src="js/main.js"></script>
</body>
</html>

<?php
require '../php/connect/connect.inc.php';

try {
	if (isset($_POST['submit'])) {
		$ID = $_POST['ID'];
		$surname = $_POST['surname'];
		$other_name = $_POST['otherName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conf_pass = $_POST['confPassword'];
		$pass = md5($password);
		$avatar = $_FILES['avatar']['name'];
		$avatar_tmp = $_FILES['avatar']['tmp_name'];
		$status = $_POST['status'];
		$admin = 'n';

	//    Confirm that passwords match
		if ($password === $conf_pass) {

	//		Check status of new user
			if ($status == 'landlord') {

	//			Select all landlord ID data from landlord table
				$query_checkUser = "SELECT * FROM `landlords` WHERE `landlord_ID` = '".$ID."'";
				$users = $conn->prepare($query_checkUser);
				$users->execute();
				$count_ID = $users->rowCount();

	//			Select all landlord email data from landlord table
				$query_checkEmail = "SELECT * FROM `landlords` WHERE `email` = '".$email."'";
				$emails = $conn->prepare($query_checkEmail);
				$emails->execute();
				$count_email = $emails->rowCount();

				if ($count_ID > 0) {
					  echo '<div class="alert">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Error!</strong> That ID already exists.
							</div>';

				} elseif ($count_email > 0) {
					echo '<div class="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<strong>Error!</strong> That email already exists.
						  </div>';

				} else {
					if (isset($_POST['avatar'])) {
						if (move_uploaded_file($avatar_tmp, '../img/avatars/landlords' . $ID . "_" . $avatar)) {
						$query_addUser = "INSERT INTO landlords
						(landlord_ID, surname, other_name, email, password, estate_cluster_ID, admin, avatar)
						VALUES('".$ID."', '".$surname."', '".$other_name."',
						'".$email."', '".$pass."', '".$ID."', '".$admin."', '".$ID . "_" . $avatar."')";
						$conn->exec($query_addUser) or die('Could not add user');

						$_SESSION['id'] = $ID;
						$_SESSION['name'] = $surname;
						$_SESSION['status'] = "landlord";
						$_SESSION['avatar'] = $avatar;
						$_SESSION['admin'] = $admin;
						header('Location: ../dashboard_ld.php', true);

					   } else {
							echo '<div class="alert" style="background-color: #fff176">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>Error!</strong> Could not add image.
								  </div>';
					   }

					} else {
						$avatar = 'default.png';
						$query_addUser = "INSERT INTO `landlords`
						(landlord_ID, surname, other_name, email, password, estate_cluster_ID, admin, avatar)
						VALUES('".$ID."', '".$surname."', '".$other_name."',
						'".$email."', '".$pass."', '".$ID."', '".$admin."', '".$avatar."')";
						$conn->exec($query_addUser) or die('Could not add user');

						$_SESSION['id'] = $ID;
						$_SESSION['name'] = $surname;
						$_SESSION['status'] = "landlord";
						$_SESSION['avatar'] = $avatar;
						$_SESSION['admin'] = $admin;
						header('Location: ../dashboard_ld.php', true);
					}
				}
			  } elseif ($status == 'tenant') {

				  $query_checkUser = "SELECT * FROM `tenants` WHERE `tenant_ID` = '".$ID."'";
				  $users = $conn->prepare($query_checkUser);
				  $users->execute();
				  $count_ID = $users->rowCount();

				  $query_checkEmail = "SELECT * FROM `tenants` WHERE `email` = '".$email."'";
				  $emails = $conn->prepare($query_checkEmail);
				  $emails->execute();
				  $count_email = $emails->rowCount();

				  if ($count_ID > 0) {
					  echo '<div class="alert" style="background-color: #fff176">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Error!</strong> That ID already exists.
							</div>';

				  } elseif ($count_email > 0) {
					  echo '<div class="alert" style="background-color: #fff176">
							  <button type="button" class="close" data-dismiss="alert">&times;</button>
							  <strong>Error!</strong> That email already exists.
							</div>';

				  } else {
					  if (isset($_POST['avatar'])) {
							if (move_uploaded_file($avatar_tmp, '../img/avatars/tenants/' . $ID . "_" . $avatar)) {
							  $query_addUser = "INSERT INTO tenants
							  (tenant_ID, surname, other_name, email, password, admin, avatar)
							  VALUES('".$ID."', '".$surname."', '".$other_name."',
							  '".$email."', '".$pass."', '".$admin."', '". $ID. "_". $avatar."')";
							  $conn->exec($query_addUser) or die('Could not add user');

							  $_SESSION['id'] = $ID;
							  $_SESSION['name'] = $surname;
							  $_SESSION['status'] = "tenant";
							  $_SESSION['avatar'] = $ID . "_". $avatar;
							  $_SESSION['admin'] = $admin;
							  header('Location: ../dashboard_tn.php');
							} else {
								echo '<div class="alert" style="background-color: #fff176">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> Could not add image.
									  </div>';
							}

					  } else {
						  $avatar = 'default.png';
						  $query_addUser = "INSERT INTO tenants
						  (tenant_ID, surname, other_name, email, password, admin, avatar)
						  VALUES('".$ID."', '".$surname."', '".$other_name."',
						  '".$email."', '".$pass."', '".$admin."', '".$avatar."')";
						  $conn->exec($query_addUser) or die('Could not add user');

						  $_SESSION['id'] = $ID;
						  $_SESSION['name'] = $surname;
						  $_SESSION['status'] = "tenant";
						  $_SESSION['avatar'] = $ID . "_". $avatar;
						  $_SESSION['admin'] = $admin;
						  header('Location: ../dashboard_tn.php');
					  }
				  }
			  }
		} else {
			echo 'Passwords do not match';
		}
	}
} catch (PDOException $e) {
  echo "Error: ".$e->getMessage();
}
$conn = null;
?>
