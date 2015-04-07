<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require './facebook-php-sdk-v4-4.0-dev/autoload.php';




use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;

const APPID ="394290144088861";
const APPSECRET ="be275e0e85053612a3d5dcc67c063bbe";
Facebook\FacebookSession::setDefaultApplication(APPID, APPSECRET);
$helper = new Facebook\FacebookRedirectLoginHelper('http://localhost/');
?>
<!Doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="description" content=""/>
		<title> LOLO GAGA</title>
		
	</head>
	<body>
		<div
			class="fb-like"
			data-share="true"
			data-width="450"
			data-show-faces="true">
		</div>
		<?php
			$loginUrl = $helper->getLoginUrl();
			echo 'non connecté. Connectez-vous <a href="'.$loginUrl.'">Connection</a>';
//			if(isset($_SESSION)&& isset($_SESSION['fb_token']))
//			{
//				$session = new FacebookSession($_SESSION['fb_token']);
//				print_r($session);
//				
//			}
//			else
//			{
//				$session=$helper->getSessionFromRedirect();
//			}
		?>
		<script>
			window.fbAsyncInit = function() {
			  FB.init({
			    appId      : '394290144088861',
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
	</body>
</html>