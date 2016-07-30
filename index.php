<?php

require_once 'header.php';

// önce google ile giriş url'si alınır, kullanıcı ona tıklarsa, google'a yönlenir ve izin verirse i1.php adresine yönlenir.
$authUrl = $client->createAuthUrl();

echo '<a href="' . $authUrl . '">Login With Google!</a>';
//
//if (isset($_GET['code'])) {
//    $client->authenticate($_GET['code']);
//    $at = $_SESSION['access_token'] = $client->getAccessToken();
//    var_dump($at);
////    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
////    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
//}