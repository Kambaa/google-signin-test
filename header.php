<?php
/**
 * Created by PhpStorm.
 * User: Yusuf
 * Date: 30.07.2016
 * Time: 22:44
 */
require 'vendor/autoload.php';
@session_start();
$client_id = '265196684115-knl2p430ut8if1i4gpet1h8o26o9kupk.apps.googleusercontent.com';
$client_secret = 'cA0BDqUWqxbRONfSX5jdQ5kH';
$redirect_uri = 'http://localhost/google-signin-test/i1.php';
$redirect_uri2 = 'http://localhost/google-signin-test/i2.php';

$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setApplicationName('Sonsurat Extre Login App');

$client->setRedirectUri($redirect_uri);
$client->setScopes(array('https://www.googleapis.com/auth/userinfo.email'));
//https://www.googleapis.com/auth/plus.me	Know who you are on Google
//https://www.googleapis.com/auth/userinfo.email	View your email address

