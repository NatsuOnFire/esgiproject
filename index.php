<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	session_start();	
	
	require('libFacebook.php');
	
	const APPID = "400624373444818";
	const APPSECRET = "11514e700dcd954ec5d72d1e80a2dd96";

	FacebookSession::setDefaultApplication(APPID, APPSECRET);

	$helper = new FacebookRedirectLoginHelper('https://esgiproject2.herokuapp.com/index.php');
	
	if(isset($_SESSION) && isset ($_SESSION['fb_token'])){
		$session = new FacebookSession($_SESSION['fb_token']);
	}else{
		$session = $helper->getSessionFromRedirect();
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Facebook</title>
	<meta name="description" content="">
</head>
<body>
	<div
	  class="fb-like"
	  data-share="true"
	  data-width="450"
	  data-show-faces="true">
	</div>
	<p>
	<?php
		if($session){
			try{
				$token = $session->getAccessToken();
				$_SESSION['fb_token'] = $token;
				
				$user_profile = (new FacebookRequest(
					$session, 'GET', '/me'
				))->execute()->getGraphObject(GraphUser::className());

				echo "Nom : ".$user_profile->getName();

			}catch(Exception $e){
				echo "Exception : ".$e->getCode();
				echo $e->getMessage();
			}
		}else{
			$loginUrl = $helper->getLoginUrl();
			echo 'Pas connecté. <a href="'.$loginUrl.'">Connectez-vous</a>';
		}
	?>
	</p>
</body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo APPID;?>',
      xfbml      : true,
      version    : 'v2.3'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/fr_FR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</html>