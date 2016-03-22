<?php
session_start();

//open connection to mysql db
require_once 'connect/connect.inc.php';

//fetch table rows from mysql db
$reviews_query = "SELECT * FROM `reviews` ORDER BY `review_date`";
$query_results = $conn->prepare($reviews_query);
$query_results->execute();

$reviews_array = array();

while ($reviews = $query_results->fetch(PDO::FETCH_ASSOC)) {
    $review_array[] = $reviews;
}

echo json_encode($review_array);

$conn = null;
