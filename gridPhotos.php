<?php
	use Facebook\FacebookRequest;

	$request = new FacebookRequest($session,'GET','/10151888599944259/photos');
	$response = $request->execute();
	$graphObject = $response->getGraphObject()->asArray();

	echo "<pre>";
	print_r($graphObject);
	echo "</pre>";
	
	?>
	
	<div class="bs-photo">
		<div class="container">
			<div class="row">

	<?php
	
	foreach ($graphObject["data"] as $image) { ?>
		<div class="col-xs-3">
        	<div class="thumbnail popup-gallery">
				<a href="<?php echo $image->images[0]->source; ?>" title="">
					<img class="photo" src="<?php echo $image->images[0]->source; ?>"/>
				</a>
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
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('.popup-gallery').magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Chargement de l\'image #%curr%...',
			mainClass: 'mfp-img-mobile',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			},
			image: {
				tError: '<a href="%url%">L\image #%curr%</a> ne peut pas être chargée.',
				titleSrc: function(item) {
					return item.el.attr('title');
				}
			}
		});
	});
	</script>