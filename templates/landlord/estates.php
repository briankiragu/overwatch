<?php
////open connection to mysql db
//require_once '../../php/connect/connect.inc.php';
//
////fetch table rows from mysql db
//$review_query = "SELECT * FROM `reviews` ORDER BY `review_date`";
//$query_results = $conn->prepare($review_query);
//$query_results->execute();
//$count_reviews = $query_results->rowCount();
?>

<div class="col-sm-12 well">
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
        Review
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
    </div>
  </div>
</div>
