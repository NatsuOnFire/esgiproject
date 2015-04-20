<?php
	use Facebook\FacebookRequest;

	$request = new FacebookRequest($session,'GET','/me/photos/uploaded');
	$response = $request->execute();
	$graphObject = $response->getGraphObject()->asArray();

	//echo "<pre>";
	//print_r($graphObject);
	//echo "</pre>";
	
	?>
	
	<div class="bs-photo">
		<div class="container">
			<div class="row">

	<?php
	
	foreach ($graphObject["data"] as $image) { ?>
		<div class="col-xs-3">
        	<div class="thumbnail">
				<img class="photo" src="<?php echo $image->images[0]->source; ?>"/>
				<div class="caption">
					<p>
						<div class="fb-like" data-href="https://facebookappproject.herokuapp.com/like/<?php echo $image->id ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
					</p>
				</div>
			</div>
		</div>
	<?php } ?>
	
			</div>
		</div>
	</div>