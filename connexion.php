<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;


if($session){
	try{
		$user_profile = (new FacebookRequest( $session,'GET','/me')) ->execute()->getGraphObject(GraphUser::className());
		echo "Name:". $user_profile->getName();
		
		
	} catch (Exception $ex) {

	}
	
}  else {
	echo 'non connecté. Connectez-vous <a href="'.$loginUrl.'">Connect</a>';
}

