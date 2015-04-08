<?php
  session_start();

	require_once "facebook-php-sdk-v4-4.0-dev/autoload.php";
	use Facebook\FacebookSession;
  use Facebook\FacebookRedirectLoginHelper;
  use Facebook\FacebookRequest;
  use Facebook\GraphUser;

	const APPID = "699704450158910";
	const APPSECRET = "32368c732c5d704afca02f7a591abe73" ;
	FacebookSession::setDefaultApplication(APPID, APPSECRET);

    $redirectUrl = "https://ladengri.herokuapp.com/";
    $helper = new FacebookRedirectLoginHelper($redirectUrl);
 ?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Projet Developpement Facebook EB1 GP1</title>
<meta name="description" content="description de ma page" >
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '699704450158910',
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
</head>

<body>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">


</div>

 <?php
           if (isset($_SESSION) && isset($_SESSION['fb_token']))
           {
            $session = helper->
           }
            $loginUrl    = $helper->getLoginUrl();
            $token = (string) $session->getAccessToken();
            $SESSION['fb_token'] = $token;


            $connectLink = '<a href='.$loginUrl.'>Login</a>';
            echo  $connectLink ;

        ?>
</body>
</html>
