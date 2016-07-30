<?php
/**
 * Created by PhpStorm.
 * User: Yusuf
 * Date: 30.07.2016
 * Time: 22:54
 */
require_once 'header.php';

// burada ise eğer access token session'da kayıtlıysa kontrol edilir ve kullanıcı bilgileri çekilir.
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
    $at = $client->getAccessToken();
    $token_data = $client->verifyIdToken()->getAttributes();
    var_dump($token_data);
}