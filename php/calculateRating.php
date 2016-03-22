<?php
require_once 'connect/connect.inc.php';

$total_ratings = 0;
$average_rating = 0;

$ratings_query = "SELECT `rating` FROM `reviews`";
$query_results = $conn->prepare($ratings_query);
$query_results->execute();
$count_ratings = $query_results->rowCount();

while ($ratings = $query_results->fetch(PDO::FETCH_ASSOC)) {
    $total_ratings += $ratings['rating'];
}

$average_rating = $total_ratings / $count_ratings;

echo $average_rating;
