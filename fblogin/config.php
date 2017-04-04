<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '1614030235584728'; //Facebook App ID
$appSecret = 'cefaf502f3edd69811feda8b5bfa1093'; // Facebook App Secret
$homeurl = 'http://profilegalaxy.com/fblogin/';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>