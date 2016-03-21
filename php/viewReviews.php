<?php
session_start();
//open connection to mysql db
require_once 'connect/connect.inc.php';

//fetch table rows from mysql db
$review_query = "SELECT * FROM `reviews`";
$query_results = $conn->prepare($review_query);
$query_results->execute();

$review_array = array();

while ($reviews = $query_results->fetch(PDO::FETCH_ASSOC)) {
    $review_array[] = $reviews;
}

echo json_encode($review_array);

$conn = null;
