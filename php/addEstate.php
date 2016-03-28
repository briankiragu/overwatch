<?php
session_start();
require_once 'connect/connect.inc.php';

// Store variables from input data
if (isset($_POST['submit'])) {
    $name = $_POST['nameOfEstate'];
    $location = $_POST['locationOfEstate'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnail_temp = $_FILES['thumbnail']['tmp_name'];

    // Check of the name of that estate exists
    $estate_query = "SELECT `name_of_estate` FROM `estates` WHERE `name_of_estate` = '".$name."'";
    $results = $conn->prepare($estate_query);
    $results->execute();
	$count = $results->rowCount();

    // If the name does not exists.
    if ($count == 0) {
      // if (move_uploaded_file($thumbnail_temp, 'img/thumbnails/'. $thumbnail)) {
        // Add value to the database
        $add_query = "INSERT INTO `estates`
        (landlord_ID, estate_cluster_ID, name_of_estate, location_of_estate)
        VALUES ('".$_SESSION['id']."', '".$_SESSION['id']."', '".$name."', '".$location."')";
        $conn->exec($add_query) or die('Could not add estate');
      // }
    } else {
        echo '<div class="alert">
			    <button type="button" class="close" data-dismiss="alert">&times;</button>
			    <strong>Error!</strong> That estate already exists.
			  </div>';
    }

    // Go back to previous page.
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
$conn = null;
