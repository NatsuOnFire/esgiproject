<?php
	require("facebook-php-sdk-v4-4.0-dev/autoload.php");
	
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookSession.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRedirectLoginHelper.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRequest.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookResponse.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookSDKException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookRequestException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/FacebookAuthorizationException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/src/Facebook/GraphObject.php' );
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\GraphUser;
	use Facebook\FacebookRequestExeption;
	use Facebook\FacebookAuthorizationException;
?>