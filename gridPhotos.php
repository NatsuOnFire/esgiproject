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
					<p><a href="#" class="btn btn-primary">Share</a></p>
				</div>
			</div>
		</div>
	<?php } ?>
	
			</div>
		</div>
	</div>