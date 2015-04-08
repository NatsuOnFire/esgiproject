<?php
	require("facebook-php-sdk-v4-4.0-dev/autoload.php");
	
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookSession.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookRedirectLoginHelper.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookRequest.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookResponse.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookSDKException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookRequestException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/FacebookAuthorizationException.php' );
	require_once( 'facebook-php-sdk-v4-4.0-dev/Facebook/GraphObject.php' );
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\GraphUser;
	use Facebook\FacebookRequestExeption;
	use Facebook\FacebookAuthorizationException;
?>