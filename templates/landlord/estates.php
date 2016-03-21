<div class="col-sm-12 well">
  <div class="row">
    <div class="col-md-3">
      <img src="img/thumbnails/photo-1438978280647-f359d95ebda4.jpg" alt="Thumbnail" class="img-responsive" />
    </div>
    <div class="col-md-9">
      <h2>{{ x.name_of_estate }} <small>{{ x.location_of_estate }}</small></h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deleniti distinctio similique dolore, blanditiis officiis ea temporibus, facere aperiam sunt, magni perspiciatis sit architecto dolor optio dolores quo pariatur ut.
      </p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{ x.estate_ID }}" aria-expanded="false" aria-controls="{{ x.estate_ID }}">
	      View reviews
	    </button>
    </div>
    <div class="col-md-9 col-md-offset-3 collapse" id="{{ x.estate_ID }}">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus vel, rerum delectus rem architecto pariatur consequatur harum ipsum unde. Assumenda ea illo, ad quis! Magni quia expedita dolorum cupiditate recusandae.
    </div>
  </div>
</div>
<?php
