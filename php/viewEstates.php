<?php
session_start();
//open connection to mysql db
require_once 'connect/connect.inc.php';

//fetch table rows from mysql db
$estate_query = "SELECT * FROM `estates` ORDER BY `estate_cluster_ID`";
$result = $conn->prepare($estate_query);
$result->execute();

$estate_array = array();

while ($estates = $result->fetch(PDO::FETCH_ASSOC)) {
    $estate_array[] = $estates;
}

echo json_encode($estate_array);

$conn = null;
